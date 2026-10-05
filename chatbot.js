/* ===================================================================
   CHATBOT WIDGET — connects to FastAPI backend at /chat
   =================================================================== */
(function initChatbotWidget() {
  const CHAT_API_URL = 'http://127.0.0.1:8000/chat';

  const widget = document.getElementById('chatbotWidget');
  const toggle = document.getElementById('chatbotToggle');
  const panel = document.getElementById('chatbotPanel');
  const closeBtn = document.getElementById('chatbotClose');
  const refreshBtn = document.getElementById('chatbotRefresh');
  const maximizeBtn = document.getElementById('chatbotMaximize');
  const messagesEl = document.getElementById('chatbotMessages');
  const form = document.getElementById('chatbotForm');
  const input = document.getElementById('chatbotInput');
  const sendBtn = document.getElementById('chatbotSend');
  const statusEl = document.getElementById('chatbotStatus');

  if (!widget || !toggle || !panel || !form || !input) return;

  const chatHistory = [
    { role: 'assistant', text: "Hi there! 👋 I'm your Psykolog assistant. How can I help you today?" }
  ];

  let isStreaming = false;
  let isLarge = false;

  // ---- Open / Close ----
  function openChat() {
    widget.classList.add('is-open');
    panel.setAttribute('aria-hidden', 'false');
    input.focus();
  }

  function closeChat() {
    widget.classList.remove('is-open');
    panel.setAttribute('aria-hidden', 'true');
  }

  toggle.addEventListener('click', () => {
    if (widget.classList.contains('is-open')) {
      closeChat();
    } else {
      openChat();
    }
  });

  closeBtn.addEventListener('click', closeChat);

  if (refreshBtn) {
    refreshBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      e.preventDefault();
      chatHistory.length = 0;
      chatHistory.push({ role: 'assistant', text: "Hi there! 👋 I'm your Psykolog assistant. How can I help you today?" });

      messagesEl.innerHTML = `
      <div class="flex gap-2.5 max-w-[88%] self-start animate-fade-in-up">
        <div class="w-7 h-7 rounded-full shrink-0 overflow-hidden">
          <img src="images/widget.webp" alt="Bot" class="w-full h-full object-cover">
        </div>
        <div class="flex flex-col gap-2">
          <div class="chatbot-msg__bubble py-3 px-4 rounded-2xl text-sm leading-relaxed break-words bg-white text-[#3D2E28] border border-[#F2E4DC] rounded-bl-sm shadow-[0_2px_6px_rgba(92,42,32,0.04)] [&>p]:m-0 [&>p+p]:mt-2">
            <p>Hi there! 👋 I'm your Psykolog assistant. How can I help you today?</p>
          </div>
          <div class="flex flex-wrap gap-2 mt-1">
            <button type="button" class="chatbot-quick-reply text-xs px-3 py-1.5 bg-[#F8EBE2] text-[#C24C33] border border-[#F0E1D8] rounded-full transition-colors hover:bg-[#F0E1D8] cursor-pointer">How to contact you?</button>
            <button type="button" class="chatbot-quick-reply text-xs px-3 py-1.5 bg-[#F8EBE2] text-[#C24C33] border border-[#F0E1D8] rounded-full transition-colors hover:bg-[#F0E1D8] cursor-pointer">What services do you offer?</button>
            <button type="button" class="chatbot-quick-reply text-xs px-3 py-1.5 bg-[#F8EBE2] text-[#C24C33] border border-[#F0E1D8] rounded-full transition-colors hover:bg-[#F0E1D8] cursor-pointer">Book an appointment</button>
          </div>
        </div>
      </div>
      `;
      isStreaming = false;
      window.hasRouted = false;
      setInputEnabled(true);
      input.value = '';
      setStatus('Online');
      scrollToBottom();
    });
  }

  if (maximizeBtn) {
    maximizeBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      isLarge = !isLarge;
      if (isLarge) {
        widget.classList.add('is-maximized');
        panel.style.setProperty('width', '45vw', 'important');
        panel.style.setProperty('max-width', '800px', 'important');
        panel.style.setProperty('height', '80vh', 'important');
        panel.style.setProperty('max-height', '80vh', 'important');
        maximizeBtn.innerHTML = `
          <svg class="w-4 h-4 stroke-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"></path>
          </svg>
        `;
      } else {
        widget.classList.remove('is-maximized');
        panel.style.removeProperty('width');
        panel.style.removeProperty('max-width');
        panel.style.removeProperty('height');
        panel.style.removeProperty('max-height');
        maximizeBtn.innerHTML = `
          <svg class="w-4 h-4 stroke-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"></path>
          </svg>
        `;
      }
    });
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && widget.classList.contains('is-open')) {
      closeChat();
    }
  });

  messagesEl.addEventListener('click', (e) => {
    const btn = e.target.closest('.chatbot-quick-reply');
    if (!btn || isStreaming) return;
    const text = btn.textContent.trim();
    sendMessage(text);
    const repliesContainer = btn.closest('.flex-wrap');
    if (repliesContainer) repliesContainer.remove();
  });

  // ---- Helpers ----
  function scrollToBottom() {
    requestAnimationFrame(() => {
      messagesEl.scrollTop = messagesEl.scrollHeight;
    });
  }

  function createMsgElement(role, text) {
    const isUser = role === 'user';
    const wrapper = document.createElement('div');
    wrapper.className = `flex gap-2.5 max-w-[88%] ${isUser ? 'self-end flex-row-reverse' : 'self-start'}`;

    const avatarHtml = isUser
      ? '<div class="w-7 h-7 rounded-full bg-gradient-to-br from-[#5C2A20] to-[#7A3928] flex items-center justify-center shrink-0"><svg class="w-4 h-4 stroke-[#F09367]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>'
      : '<div class="w-7 h-7 rounded-full shrink-0 overflow-hidden"><img src="images/widget.webp" alt="Bot" class="w-full h-full object-cover"></div>';

    const bubbleClasses = isUser
      ? 'bg-gradient-to-br from-[#C24C33] to-[#A93E28] text-white border-0 rounded-br-sm shadow-[0_4px_12px_rgba(194,76,51,0.2)]'
      : 'bg-white text-[#3D2E28] border border-[#F2E4DC] rounded-bl-sm shadow-[0_2px_6px_rgba(92,42,32,0.04)]';

    wrapper.innerHTML = `
      ${avatarHtml}
      <div class="chatbot-msg__bubble py-3 px-4 rounded-2xl text-sm leading-relaxed break-words ${bubbleClasses} [&>p]:m-0 [&>p+p]:mt-2"><p>${role === 'bot' ? parseMarkdown(text) : escapeHtml(text)}</p></div>
    `;
    return wrapper;
  }

  function createTypingIndicator() {
    const wrapper = document.createElement('div');
    wrapper.className = 'flex gap-2.5 max-w-[88%] self-start';
    wrapper.id = 'chatbot-typing';
    wrapper.innerHTML = `
      <div class="w-7 h-7 rounded-full shrink-0 overflow-hidden">
        <img src="images/widget.webp" alt="Bot" class="w-full h-full object-cover">
      </div>
      <div class="py-3 px-4 rounded-2xl bg-white border border-[#F2E4DC] rounded-bl-sm shadow-[0_2px_6px_rgba(92,42,32,0.04)] flex items-center gap-1.5 min-h-[44px]">
        <span class="w-1.5 h-1.5 rounded-full bg-[#C9AFA4] animate-bounce" style="animation-delay: 0s"></span>
        <span class="w-1.5 h-1.5 rounded-full bg-[#C9AFA4] animate-bounce" style="animation-delay: 0.15s"></span>
        <span class="w-1.5 h-1.5 rounded-full bg-[#C9AFA4] animate-bounce" style="animation-delay: 0.3s"></span>
      </div>
    `;
    return wrapper;
  }

  function removeTypingIndicator() {
    const el = document.getElementById('chatbot-typing');
    if (el) el.remove();
  }

  function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
  }

  // Only these link types are turned into clickable anchors (everything else stays plain text).
  //   tel:+4796044444            -> opens the phone dialer
  //   sms:+4796044444            -> opens the Messages app
  //   https://wa.me/4796044444   -> opens WhatsApp chat with that number
  const SAFE_LINK_RE = /\[([^\]]+)\]\(((?:tel:\+?[0-9]+|sms:\+?[0-9]+(?:[?&;][^)\s]*)?|https:\/\/wa\.me\/[0-9]+(?:\?[^)\s]*)?))\)/g;

  function linkify(html) {
    return html.replace(SAFE_LINK_RE, (_, label, url) => {
      const isWhatsApp = url.startsWith('https://');
      const extra = isWhatsApp ? ' target="_blank" rel="noopener noreferrer"' : '';
      return `<a href="${url}"${extra} class="chatbot-contact-link" style="color:#C24C33;text-decoration:underline;font-weight:500;">${label}</a>`;
    });
  }

  function parseMarkdown(text) {
    if (!text) return '';

    // Remove hallucinated thinking/search tags from some LLMs (e.g., <brag_search>...</brag_search> or just <brag_search>)
    let cleanText = text.replace(/<brag_search>[\s\S]*?(?:<\/brag_search>|$)/gi, '');
    cleanText = cleanText.replace(/<\/brag_search>/gi, '');

    let html = escapeHtml(cleanText);
    // Contact links (tel / sms / WhatsApp) — done before other formatting
    html = linkify(html);
    // Bold
    html = html.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
    // Italic
    html = html.replace(/\*(.*?)\*/g, '<em>$1</em>');
    // Lists (simple bullet points starting with - or *)
    html = html.replace(/(?:^|\n)[-*]\s+(.*)/g, '<br>• $1');
    // Newlines to <br>
    html = html.replace(/\n/g, '<br>');
    return html;
  }

  function setStatus(text) {
    if (statusEl) statusEl.textContent = text;
  }

  function setInputEnabled(enabled) {
    input.disabled = !enabled;
    sendBtn.disabled = !enabled;
  }

  // ---- Send Message & Stream Response ----
  async function sendMessage(userText) {
    if (isStreaming || !userText.trim()) return;

    isStreaming = true;
    setInputEnabled(false);
    setStatus('Typing...');

    // Add user message
    chatHistory.push({ role: 'user', text: userText });
    const userMsgEl = createMsgElement('user', userText);
    messagesEl.appendChild(userMsgEl);
    scrollToBottom();

    // Show typing indicator
    const typingEl = createTypingIndicator();
    messagesEl.appendChild(typingEl);
    scrollToBottom();

    try {
      const response = await fetch(CHAT_API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          messages: chatHistory.map(m => ({
            role: m.role === 'assistant' ? 'assistant' : 'user',
            text: m.text
          }))
        })
      });

      if (!response.ok) {
        throw new Error(`Server error: ${response.status}`);
      }
      let botMsgEl = null;
      let bubbleP = null;

      const ensureBotMsgEl = () => {
        if (botMsgEl) return;
        removeTypingIndicator();
        botMsgEl = document.createElement('div');
        botMsgEl.className = 'flex gap-2.5 max-w-[88%] self-start';
        botMsgEl.innerHTML = `
          <div class="w-7 h-7 rounded-full shrink-0 overflow-hidden">
            <img src="images/widget.webp" alt="Bot" class="w-full h-full object-cover">
          </div>
          <div class="chatbot-msg__bubble py-3 px-4 rounded-2xl text-sm leading-relaxed break-words bg-white text-[#3D2E28] border border-[#F2E4DC] rounded-bl-sm shadow-[0_2px_6px_rgba(92,42,32,0.04)] [&>p]:m-0 [&>p+p]:mt-2"><p></p></div>
        `;
        messagesEl.appendChild(botMsgEl);
        bubbleP = botMsgEl.querySelector('.chatbot-msg__bubble p');
      };

      let fullResponse = '';

      // Read the stream
      const reader = response.body.getReader();
      const decoder = new TextDecoder();
      let buffer = '';

      while (true) {
        const { done, value } = await reader.read();
        if (done) break;

        buffer += decoder.decode(value, { stream: true });
        const lines = buffer.split('\n');
        buffer = lines.pop(); // Keep incomplete line in buffer

        for (const line of lines) {
          const trimmed = line.trim();
          if (!trimmed) continue;

          try {
            const data = JSON.parse(trimmed);

            if (data.chunk) {
              ensureBotMsgEl();
              fullResponse += data.chunk;
              let displayText = fullResponse;
              if (displayText.includes('[ROUTE_CONTACT]')) {
                displayText = displayText.replace('[ROUTE_CONTACT]', '');
                if (!window.hasRouted) {
                  window.hasRouted = true;
                  setTimeout(() => window.location.href = 'contact.html', 1500);
                }
              }
              // Re-render the whole text each chunk so links split across chunks still resolve
              bubbleP.innerHTML = parseMarkdown(displayText);
              scrollToBottom();
            }

            if (data.error) {
              ensureBotMsgEl();
              bubbleP.innerHTML = parseMarkdown(data.error);
              botMsgEl.querySelector('.chatbot-msg__bubble').className += ' !bg-[#FEF2F2] !border-[#FECACA] !text-[#991B1B]';
            }

            if (data.done) {
              ensureBotMsgEl();
              // Stream completed
            }
          } catch (parseErr) {
            // Skip non-JSON lines
          }
        }
      }

      // Process any remaining buffer
      if (buffer.trim()) {
        try {
          const data = JSON.parse(buffer.trim());
          if (data.chunk) {
            ensureBotMsgEl();
            fullResponse += data.chunk;
            let displayText = fullResponse;
            if (displayText.includes('[ROUTE_CONTACT]')) {
              displayText = displayText.replace('[ROUTE_CONTACT]', '');
              if (!window.hasRouted) {
                window.hasRouted = true;
                setTimeout(() => window.location.href = 'contact.html', 1500);
              }
            }
            bubbleP.innerHTML = parseMarkdown(displayText);
          }
          if (data.error) {
            ensureBotMsgEl();
            bubbleP.innerHTML = parseMarkdown(data.error);
            botMsgEl.querySelector('.chatbot-msg__bubble').className += ' !bg-[#FEF2F2] !border-[#FECACA] !text-[#991B1B]';
          }
        } catch (e) {
          // Ignore
        }
      }

      if (fullResponse) {
        fullResponse = fullResponse.replace('[ROUTE_CONTACT]', '');
        chatHistory.push({ role: 'assistant', text: fullResponse });
      }

    } catch (err) {
      removeTypingIndicator();

      const errorEl = document.createElement('div');
      errorEl.className = 'flex gap-2.5 max-w-[88%] self-start';
      errorEl.innerHTML = `
        <div class="w-7 h-7 rounded-full shrink-0 overflow-hidden">
          <img src="images/widget.webp" alt="Bot" class="w-full h-full object-cover">
        </div>
        <div class="chatbot-msg__bubble py-3 px-4 rounded-2xl text-sm leading-relaxed break-words bg-[#FEF2F2] text-[#991B1B] border border-[#FECACA] rounded-bl-sm shadow-[0_2px_6px_rgba(92,42,32,0.04)] [&>p]:m-0 [&>p+p]:mt-2"><p>Sorry, I couldn't connect to the server. Please make sure the backend is running and try again.</p></div>
      `;
      messagesEl.appendChild(errorEl);
      scrollToBottom();

      console.error('Chatbot error:', err);
    } finally {
      isStreaming = false;
      setInputEnabled(true);
      setStatus('Online');
      input.focus();
      scrollToBottom();
    }
  }

  // ---- Form Submit ----
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const text = input.value.trim();
    if (!text) return;
    input.value = '';
    sendMessage(text);
  });
})();