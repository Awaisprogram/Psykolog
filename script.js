/* =====================================================================
   psykolog.no — production script
   Vanilla JS, no dependencies. Organised by feature block.
   ===================================================================== */
(() => {
  'use strict';

  /* -------------------------------------------------------------------
     0. Icon renderer — lightweight inline-SVG icon set
     ------------------------------------------------------------------- */
  const ICONS = {
    'calendar-clock': '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/><circle cx="16" cy="16" r="3"/><path d="M16 14.8V16l1 1"/>',
    'file-x': '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9.5 13.5l5 5M14.5 13.5l-5 5"/>',
    'shield-check': '<path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6z"/><path d="M8.5 12l2.5 2.5L15.5 9"/>',
    video: '<rect x="2" y="5" width="14" height="14" rx="2"/><path d="M16 10l6-3v10l-6-3z"/>',
    brain: '<path d="M9 4a3 3 0 0 0-3 3 3 3 0 0 0-2 5 3 3 0 0 0 2 5 3 3 0 0 0 5 1v-1.5a2 2 0 0 1 0-15z"/><path d="M15 4a3 3 0 0 1 3 3 3 3 0 0 1 2 5 3 3 0 0 1-2 5 3 3 0 0 1-5 1v-1.5a2 2 0 0 0 0-15z"/>',
    moon: '<path d="M20 14.5A8.5 8.5 0 1 1 9.5 4 7 7 0 0 0 20 14.5z"/>',
    'battery-low': '<rect x="2" y="7" width="18" height="10" rx="2"/><path d="M22 10v4M5 10v4"/>',
    target: '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/>',
    'cloud-rain': '<path d="M6 16a4 4 0 0 1 0-8 5 5 0 0 1 9.6-1.5A4.5 4.5 0 0 1 18 16z"/><path d="M8 19l-1 2M12 19l-1 2M16 19l-1 2"/>',
    flame: '<path d="M12 2c1 3-3 4-3 8a3 3 0 0 0 6 0c0-1.5-1-2-1-3 2 1 4 3 4 6a6 6 0 1 1-12 0c0-4 3-6 6-11z"/>',
    'graduation-cap': '<path d="M2 9l10-5 10 5-10 5z"/><path d="M6 11.5v4c0 1.5 2.5 3 6 3s6-1.5 6-3v-4"/><path d="M22 9v6"/>',
    pill: '<rect x="3" y="9" width="18" height="6" rx="3" transform="rotate(-45 12 12)"/><path d="M8.5 8.5l7 7"/>',
    'message-circle': '<path d="M21 11.5a8.5 8.5 0 1 1-4-7.2L21 3z"/><path d="M21 11.5c0 4.7-3.8 8.5-8.5 8.5A8.4 8.4 0 0 1 8 19l-5 1 1-4.5"/>',
    users: '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><circle cx="17.5" cy="9.5" r="2.8"/><path d="M15.5 14.5a5.2 5.2 0 0 1 6 5.5"/>',
    'heart-handshake': '<path d="M12 6.5c-1.4-2-4.7-2.4-6.2-.4-1.6 2-1 4.7 1 6.5l5.2 4.4 5.2-4.4c2-1.8 2.6-4.5 1-6.5-1.5-2-4.8-1.6-6.2.4z"/>',
    baby: '<circle cx="12" cy="8" r="4"/><path d="M9 8.5c0 1.5 1.3 2 3 2s3-.5 3-2"/><path d="M5.5 20a6.5 6.5 0 0 1 13 0"/>',
    heart: '<path d="M12 20 4 12.5A5 5 0 0 1 12 6a5 5 0 0 1 8 6.5z"/>',
    'file-search': '<path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><path d="M13 2v7h7"/><circle cx="11" cy="16" r="2.3"/><path d="M13 18l2 2"/>',
    wind: '<path d="M3 8h11a3 3 0 1 0-3-3"/><path d="M3 13h15a3 3 0 1 1-3 3"/><path d="M3 18h8a2.3 2.3 0 1 0-2.3-2.3"/>',
    activity: '<path d="M2 12h4l3 8 4-16 3 8h6"/>',
    shuffle: '<path d="M3 6h4l9 12h5M14 6h6M17 3l3 3-3 3M3 18h4l3-4M17 18h3l-3 3 3 3" />',
    utensils: '<path d="M6 2v8M9 2v8M6 10a3 3 0 0 1 3 3v9M15 2c-1.5 1-2 3-2 5s.5 4 2 5v9M15 2v9"/>',
    user: '<circle cx="12" cy="8" r="4"/><path d="M4 20a8 8 0 0 1 16 0"/>',
    'chevron-down': '<path d="M6 9l6 6 6-6"/>',
    repeat: '<path d="M17 2l4 4-4 4"/><path d="M3 11V9a4 4 0 0 1 4-4h14"/><path d="M7 22l-4-4 4-4"/><path d="M21 13v2a4 4 0 0 1-4 4H3"/>',
    history: '<path d="M3 12a9 9 0 1 0 3-6.7"/><path d="M3 4v5h5"/><path d="M12 8v4l3 2"/>',
    eye: '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/>',
    lock: '<rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/>',
    'map-pin': '<path d="M12 21s7-6.6 7-11.5A7 7 0 0 0 5 9.5C5 14.4 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.3"/>',
    clock: '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/>',
    briefcase: '<rect x="2" y="7" width="20" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>',
    stethoscope: '<path d="M6 3v6a4 4 0 0 0 8 0V3"/><path d="M10 13v2a6 6 0 0 0 12 0v-2"/><circle cx="20" cy="10" r="2"/>',
    'arrow-right': '<path d="M5 12h14M13 6l6 6-6 6"/>',
    instagram: '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/>',
    linkedin: '<rect x="3" y="3" width="18" height="18" rx="3"/><path d="M7 10v7M7 7v.01M11 17v-4.5a2 2 0 0 1 4 0V17M11 12.5v0"/>',
    facebook: '<path d="M15 3h-2a5 5 0 0 0-5 5v2H6v4h2v7h4v-7h3l1-4h-4V8a1 1 0 0 1 1-1h3z"/>',
    sparkles: '<path d="M12 3l1.5 4.5L18 9l-4.5 1.5L12 15l-1.5-4.5L6 9l4.5-1.5z"/><path d="M19 15l.7 2 2 .7-2 .7-.7 2-.7-2-2-.7 2-.7z"/>',
    pencil: '<path d="M4 20h4l10-10-4-4L4 16z"/><path d="M13 6l4 4"/>',
    compass: '<circle cx="12" cy="12" r="9"/><path d="M15 9l-2 6-6 2 2-6z"/>',
    'building-2': '<rect x="3" y="8" width="8" height="13"/><rect x="13" y="3" width="8" height="18"/><path d="M6 12h2M6 16h2M16 7h2M16 11h2M16 15h2"/>',
    info: '<circle cx="12" cy="12" r="9"/><path d="M12 8h.01M11 12h1v5h1"/>'
  };

  function renderIcons(root = document) {
    root.querySelectorAll('svg.icon[data-icon]').forEach((svg) => {
      const name = svg.getAttribute('data-icon');
      const inner = ICONS[name];
      if (!inner || svg.dataset.rendered) return;
      svg.setAttribute('viewBox', '0 0 24 24');
      svg.setAttribute('fill', 'none');
      svg.setAttribute('stroke', 'currentColor');
      svg.setAttribute('stroke-width', '1.8');
      svg.setAttribute('stroke-linecap', 'round');
      svg.setAttribute('stroke-linejoin', 'round');
      svg.innerHTML = inner;
      svg.dataset.rendered = 'true';
    });
  }

  /* -------------------------------------------------------------------
     1. Smooth scroll for [data-scroll]
     ------------------------------------------------------------------- */
  function initSmoothScroll() {
    document.addEventListener('click', (e) => {
      const el = e.target.closest('[data-scroll]');
      if (!el) return;
      const targetSel = el.dataset.target || el.getAttribute('href');
      if (!targetSel || !targetSel.startsWith('#')) return;
      const target = document.querySelector(targetSel);
      if (!target) return;
      e.preventDefault();
      const top = target.getBoundingClientRect().top + window.scrollY - 90;
      window.scrollTo({ top, behavior: 'smooth' });
      if (el.dataset.closeNav !== undefined) closeMobileNav();
    });
  }

  /* -------------------------------------------------------------------
     2. Sticky header scroll state + mobile nav
     ------------------------------------------------------------------- */
  const headerBar = document.querySelector('.site-header__bar');
  function initHeader() {
    if (!headerBar) return;
    const onScroll = () => {
      headerBar.classList.toggle('is-scrolled', window.scrollY > 40);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  const navToggle = document.getElementById('navToggle');
  const navDrawer = document.getElementById('mobileNav');
  const navBackdrop = document.getElementById('navBackdrop');
  const navDrawerClose = document.getElementById('navDrawerClose');

  /** Returns all focusable children inside the drawer */
  function getFocusable() {
    if (!navDrawer) return [];
    return Array.from(navDrawer.querySelectorAll(
      'a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])'
    ));
  }

  function openMobileNav() {
    if (!navDrawer || !navToggle) return;
    // 1. Remove hidden so the element is in the layout (transition can fire)
    navDrawer.removeAttribute('hidden');
    navBackdrop && navBackdrop.classList.add('is-visible');

    // 2. Force a reflow so the browser registers the element before the class change
    navDrawer.getBoundingClientRect();

    // 3. Animate in
    navDrawer.classList.add('is-open');
    navBackdrop && navBackdrop.classList.add('is-open');

    // 4. Update ARIA state
    navToggle.setAttribute('aria-expanded', 'true');
    navToggle.classList.add('is-active');
    navDrawer.removeAttribute('aria-hidden');

    // 5. Prevent background scroll
    document.body.style.overflow = 'hidden';

    // 6. Move focus to first focusable element in drawer
    const focusable = getFocusable();
    if (focusable.length) focusable[0].focus();
  }

  function closeMobileNav() {
    if (!navDrawer || !navToggle) return;

    navDrawer.classList.remove('is-open');
    navBackdrop && navBackdrop.classList.remove('is-open');
    navToggle.setAttribute('aria-expanded', 'false');
    navToggle.classList.remove('is-active');
    navDrawer.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';

    // Wait for CSS transition, then re-add hidden and clean up backdrop
    const duration = parseFloat(getComputedStyle(navDrawer).transitionDuration) * 1000 || 400;
    setTimeout(() => {
      // Only hide if drawer is still closed (guard against rapid re-open)
      if (!navDrawer.classList.contains('is-open')) {
        navDrawer.setAttribute('hidden', '');
        navBackdrop && navBackdrop.classList.remove('is-visible');
      }
    }, duration);

    // Return focus to the toggle button
    navToggle.focus();
  }

  function initMobileNav() {
    if (!navToggle || !navDrawer) return;

    navToggle.addEventListener('click', () => {
      const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
      isOpen ? closeMobileNav() : openMobileNav();
    });

    // Close button inside drawer
    navDrawerClose && navDrawerClose.addEventListener('click', closeMobileNav);

    // Backdrop click closes drawer
    navBackdrop && navBackdrop.addEventListener('click', closeMobileNav);

    // Escape key closes drawer
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navToggle.getAttribute('aria-expanded') === 'true') {
        closeMobileNav();
      }
    });

    // Focus trap: keep Tab/Shift+Tab inside the open drawer
    navDrawer.addEventListener('keydown', (e) => {
      if (e.key !== 'Tab') return;
      if (!navDrawer.classList.contains('is-open')) return;
      const focusable = getFocusable();
      if (!focusable.length) return;
      const first = focusable[0];
      const last = focusable[focusable.length - 1];
      if (e.shiftKey) {
        if (document.activeElement === first) { e.preventDefault(); last.focus(); }
      } else {
        if (document.activeElement === last) { e.preventDefault(); first.focus(); }
      }
    });
  }

  /* -------------------------------------------------------------------
     3. Reveal-on-scroll
     ------------------------------------------------------------------- */
  function initReveal() {
    const reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
    const els = document.querySelectorAll('[data-reveal]');
    if (reduced) { els.forEach((el) => el.classList.add('is-visible')); return; }
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    els.forEach((el) => io.observe(el));
  }

  /* -------------------------------------------------------------------
     4. Signs — toggleable recognition list
     ------------------------------------------------------------------- */
  function initSigns() {
    const list = document.getElementById('signsList');
    const note = document.getElementById('signsNote');
    if (!list) return;
    const items = list.querySelectorAll('.signs__item');

    function update() {
      const active = list.querySelectorAll('.signs__item.is-active').length;
      if (!note) return;
      if (active === 0) {
        note.textContent = "If several of these statements feel familiar, it's time to talk to a psychologist.";
      } else if (active < 3) {
        note.textContent = `You recognised ${active}. A psychologist can help you to understand the condition and give the right treatment plan.`;
      } else {
        note.textContent = `You recognised ${active} of 6. A psychologist can help you to understand the condition and give the right treatment plan, and you can book without a referral.`;
      }
      note.style.color = active >= 3 ? 'var(--brand-primary)' : 'var(--ink-body)';
    }

    items.forEach((btn) => {
      btn.addEventListener('click', () => { btn.classList.toggle('is-active'); update(); });
    });
  }

  


  /* -------------------------------------------------------------------
     7. How it works — sticky-stack stepper
     ------------------------------------------------------------------- */
  function initHiw() {
    const list = document.getElementById('hiwList');
    if (!list) return;
    list.addEventListener('click', (e) => {
      const step = e.target.closest('.hiw__step');
      if (!step) return;
      list.querySelectorAll('.hiw__step').forEach((s) => s.classList.toggle('is-active', s === step));
    });
  }

  /* -------------------------------------------------------------------
     8. Conditions — category filter + hover/accordion panel + show all
     ------------------------------------------------------------------- */
  const CONDITION_CATS = {
    all: null,
    worry: ['worry'],
    mood: ['mood'],
    behaviour: ['behaviour']
  };
  function initConditions() {
    const catBar = document.getElementById('condCats');
    const grid = document.getElementById('condGrid');
    if (catBar && grid) {
      catBar.addEventListener('click', (e) => {
        const btn = e.target.closest('[data-cond-cat]');
        if (!btn) return;
        catBar.querySelectorAll('.tab').forEach((t) => t.classList.toggle('is-active', t === btn));
        const cat = btn.dataset.condCat;
        grid.querySelectorAll('.cond-card').forEach((card) => {
          const show = cat === 'all' || card.dataset.cat === cat;
          card.classList.toggle('is-hidden', !show);
        });
      });
    }

    const toggle = document.getElementById('allCondToggle');
    const accordion = document.getElementById('allCondAccordion');
    if (toggle && accordion) {
      toggle.addEventListener('click', () => {
        const open = accordion.classList.toggle('is-open');
        toggle.querySelector('span').textContent = open ? 'Hide the full list' : 'See all disorders';
      });
    }
  }

  /* -------------------------------------------------------------------
     9. Therapy formats — picker + preview swap
     ------------------------------------------------------------------- */
  const FORMAT_DATA = [
    { chip: 'One to one', title: 'Individual Therapy', desc: 'Meet one to one with a psychologist to discuss your thoughts, emotions, behaviours and challenges in a confidential setting.' },
    { chip: 'For partners', title: 'Couples Therapy', desc: 'Work with your partner to improve communication, resolve conflicts, rebuild trust and strengthen your relationship.' },
    { chip: 'For families', title: 'Family Therapy', desc: 'Bring family members together to improve communication, manage conflicts and create healthier family relationships.' },
    { chip: 'By secure video', title: 'Online Therapy', desc: 'Meet your psychologist by secure video from wherever you are, with the same standard of care as in clinic.' }
  ];
  function initFormats() {
    const list = document.getElementById('formatsList');
    const preview = document.getElementById('formatsPreview');
    if (!list || !preview) return;
    const chipEl = document.getElementById('formatsChip');
    const titleEl = document.getElementById('formatsTitle');
    const descEl = document.getElementById('formatsDesc');

    list.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-format]');
      if (!btn) return;
      const idx = btn.dataset.format;
      list.querySelectorAll('.formats__item').forEach((it) => it.classList.toggle('is-active', it === btn));
      preview.querySelectorAll('[data-format-img]').forEach((img) => img.classList.toggle('is-active', img.dataset.formatImg === idx));
      const d = FORMAT_DATA[+idx];
      if (d) { chipEl.textContent = d.chip; titleEl.textContent = d.title; descEl.textContent = d.desc; }
    });
  }

  /* -------------------------------------------------------------------
     10. Psychotherapies — "read more" accordion
     ------------------------------------------------------------------- */
  function initMoreTherapies() {
    const toggle = document.getElementById('moreTxToggle');
    const accordion = document.getElementById('moreTxAccordion');
    if (!toggle || !accordion) return;
    toggle.addEventListener('click', () => {
      const open = accordion.classList.toggle('is-open');
      toggle.querySelector('span').textContent = open ? 'Show fewer therapies' : 'Read about more therapies';
    });
  }

  /* -------------------------------------------------------------------
     11. Pricing card selection
     ------------------------------------------------------------------- */
  function initPricing() {
    const grid = document.getElementById('priceGrid');
    if (!grid) return;
    grid.addEventListener('click', (e) => {
      const card = e.target.closest('.price-card');
      if (!card) return;
      grid.querySelectorAll('.price-card').forEach((c) => c.classList.toggle('is-active', c === card));
    });
  }

  /* -------------------------------------------------------------------
     12. Locations — clinic tabs + map + book button
     ------------------------------------------------------------------- */
  const CLINIC_DATA = [
    { short: 'Oslo', mapTitle: 'Map of Oslo', map: 'https://www.openstreetmap.org/export/embed.html?bbox=10.70%2C59.895%2C10.80%2C59.93&layer=mapnik' },
    { short: 'Ski', mapTitle: 'Map of Ski', map: 'https://www.openstreetmap.org/export/embed.html?bbox=10.80%2C59.70%2C10.87%2C59.74&layer=mapnik' }
  ];
  function initLocations() {
    const list = document.getElementById('clinicList');
    const map = document.getElementById('clinicMap');
    const mapTag = document.getElementById('clinicMapTag');
    const bookBtn = document.getElementById('clinicBookBtn');
    if (!list || !map) return;

    list.addEventListener('click', (e) => {
      const card = e.target.closest('[data-clinic]');
      if (!card) return;
      list.querySelectorAll('[data-clinic]').forEach((c) => c.classList.toggle('is-active', c === card));
      const idx = +card.dataset.clinic;
      const d = CLINIC_DATA[idx];
      if (!d) return;
      map.src = d.map;
      map.title = d.mapTitle;
      mapTag.textContent = `${d.short} clinic`;
      if (bookBtn) bookBtn.textContent = `Book An Appointment At ${d.short}`;
    });
  }

  /* -------------------------------------------------------------------
     13. FAQ accordion
     ------------------------------------------------------------------- */
  function initFaq() {
    const list = document.getElementById('faqList');
    if (!list) return;
    list.addEventListener('click', (e) => {
      const trigger = e.target.closest('.faq-item__trigger');
      if (!trigger) return;
      const item = trigger.closest('.faq-item');
      item.classList.toggle('is-open');
    });
  }

  /* -------------------------------------------------------------------
     14. Articles pagination (static demo data, 4 pages)
     ------------------------------------------------------------------- */
  function initArticlesPagination() {
    const pag = document.getElementById('articlesPagination');
    if (!pag) return;
    const nums = pag.querySelectorAll('.pagination__num');
    const prev = pag.querySelector('[data-page-prev]');
    const next = pag.querySelector('[data-page-next]');
    let page = 1;
    const max = nums.length;

    function render() {
      nums.forEach((n) => n.classList.toggle('is-active', +n.dataset.page === page));
      prev.disabled = page === 1;
      next.disabled = page === max;
    }
    pag.addEventListener('click', (e) => {
      const num = e.target.closest('[data-page]');
      if (num) { page = +num.dataset.page; render(); return; }
      if (e.target.closest('[data-page-prev]')) { page = Math.max(1, page - 1); render(); }
      if (e.target.closest('[data-page-next]')) { page = Math.min(max, page + 1); render(); }
    });
    render();
  }

  /* -------------------------------------------------------------------
     15. AI matching assistant — full multi-step wizard
     ------------------------------------------------------------------- */
  const AI_CONCERNS = [
    { id: 'anxiety', t: 'Anxiety', d: 'Worry that is hard to switch off', icon: 'activity' },
    { id: 'stress', t: 'Stress', d: 'Ongoing pressure and overload', icon: 'gauge' },
    { id: 'burnout', t: 'Burnout', d: 'Exhaustion after long strain', icon: 'battery-low' },
    { id: 'depression', t: 'Depression', d: 'Low mood and lost interest', icon: 'cloud-rain' },
    { id: 'panic', t: 'Panic attacks', d: 'Sudden, intense physical fear', icon: 'heart' },
    { id: 'sleep', t: 'Sleep problems', d: 'Trouble falling or staying asleep', icon: 'moon' },
    { id: 'trauma', t: 'Trauma', d: 'Memories that still intrude', icon: 'cloud-rain' },
    { id: 'relationships', t: 'Relationship issues', d: 'Strain with a partner or family', icon: 'heart-handshake' },
    { id: 'grief', t: 'Grief', d: 'A loss that is hard to carry', icon: 'heart' },
    { id: 'social', t: 'Social anxiety', d: 'Fear of judgement around others', icon: 'users' },
    { id: 'parenting', t: 'Parenting challenges', d: 'Finding the parenting role hard', icon: 'baby' },
    { id: 'ocd', t: 'OCD', d: 'Intrusive thoughts and rituals', icon: 'repeat' },
    { id: 'adhd', t: 'ADHD', d: 'Attention, restlessness, impulsivity', icon: 'shuffle' },
    { id: 'eating', t: 'Eating disorders', d: 'A hard relationship with food', icon: 'utensils' },
    { id: 'work', t: 'Work pressure', d: 'Demands that feel unmanageable', icon: 'briefcase' },
    { id: 'exhaustion', t: 'Emotional exhaustion', d: 'Nothing left to give', icon: 'battery-low' },
    { id: 'esteem', t: 'Self-esteem', d: 'A harsh inner critic', icon: 'user' },
    { id: 'lonely', t: 'Loneliness', d: 'Disconnected from other people', icon: 'user' },
    { id: 'change', t: 'Major life changes', d: 'Adjusting to something new', icon: 'compass' }
  ];

  const AI_QUESTION_BANK = {
    anxiety: [
      { id: 'anx1', q: 'Do you feel anxious most days?', o: ['Most days', 'Some days', 'Now and then'] },
      { id: 'anx2', q: 'Does it affect work or studies?', o: ['Yes, noticeably', 'Sometimes', 'Not really'] },
      { id: 'anx3', q: 'Do you avoid certain situations?', o: ['Often', 'Occasionally', 'No'] }
    ],
    burnout: [
      { id: 'bo1', q: 'Do you feel emotionally exhausted?', o: ['Most days', 'Some days', 'Now and then'] },
      { id: 'bo2', q: 'Is work the main source?', o: ['Mainly work', 'Work and home', 'Mainly home'] },
      { id: 'bo3', q: 'Do you struggle to recover after rest?', o: ['Yes', 'Sometimes', 'No'] }
    ],
    depression: [
      { id: 'dp1', q: 'Have you noticed changes in sleep?', o: ['Sleeping less', 'Sleeping more', 'No change'] },
      { id: 'dp2', q: 'Have you lost interest in things you enjoyed?', o: ['Yes', 'Somewhat', 'No'] },
      { id: 'dp3', q: 'Has your concentration changed?', o: ['Yes', 'Somewhat', 'No'] }
    ],
    relationships: [
      { id: 'rl1', q: 'Who is this mainly about?', o: ['My partner', 'Family', 'Friends'] },
      { id: 'rl2', q: 'What feels hardest right now?', o: ['Communication', 'Trust', 'Conflict'] },
      { id: 'rl3', q: 'Would you consider coming together?', o: ["Yes", 'Maybe', "I'd prefer alone"] }
    ],
    sleep: [
      { id: 'sl1', q: 'What is hardest about sleep?', o: ['Falling asleep', 'Staying asleep', 'Waking too early'] },
      { id: 'sl2', q: 'Do worries keep you awake?', o: ['Often', 'Sometimes', 'Rarely'] }
    ],
    trauma: [
      { id: 'tr1', q: 'Do difficult memories arrive unexpectedly?', o: ['Often', 'Sometimes', 'Rarely'] },
      { id: 'tr2', q: 'Do you avoid reminders of it?', o: ['Often', 'Sometimes', 'No'] }
    ],
    adhd: [
      { id: 'ad1', q: 'Has this been present since childhood?', o: ['Yes', 'Not sure', 'No'] },
      { id: 'ad2', q: 'Where does it affect you most?', o: ['Work', 'Studies', 'Home life'] },
      { id: 'ad3', q: 'Have you been assessed before?', o: ['Yes', 'No'] }
    ],
    panic: [
      { id: 'pa1', q: 'How often do attacks happen?', o: ['Weekly or more', 'Monthly', 'Rarely'] },
      { id: 'pa2', q: 'Do you avoid places where they happened?', o: ['Yes', 'Sometimes', 'No'] }
    ],
    stress: [
      { id: 'st1', q: 'Where does the pressure come from?', o: ['Work', 'Studies', 'Home', 'Several places'] },
      { id: 'st2', q: 'Do you get time to recover?', o: ['Rarely', 'Sometimes', 'Often'] }
    ],
    work: [
      { id: 'wk1', q: 'How long have the demands felt this high?', o: ['Recently', 'Several months', 'As long as I can recall'] },
      { id: 'wk2', q: 'Is stepping back an option right now?', o: ['No', 'Perhaps', 'Yes'] }
    ],
    grief: [
      { id: 'gr1', q: 'Is this a recent loss?', o: ['Recent', 'Within the year', 'Longer ago'] },
      { id: 'gr2', q: 'Do you have people around you?', o: ['Yes', 'A few', 'Not really'] }
    ],
    social: [
      { id: 'so1', q: 'Which situations feel hardest?', o: ['Groups', 'Speaking up', 'Meeting new people'] },
      { id: 'so2', q: 'Do you turn down invitations because of it?', o: ['Often', 'Sometimes', 'Rarely'] }
    ],
    ocd: [
      { id: 'oc1', q: 'Do rituals take up much of your day?', o: ['Over an hour', 'Some time', 'A little'] },
      { id: 'oc2', q: 'Do the thoughts feel distressing?', o: ['Very', 'Somewhat', 'Manageable'] }
    ],
    eating: [
      { id: 'ea1', q: 'Would you like this handled with extra care?', o: ['Yes, please', 'Not sure'] },
      { id: 'ea2', q: 'Has anyone supported you with it before?', o: ['Yes', 'No'] }
    ],
    parenting: [
      { id: 'pr1', q: 'Which stage are your children at?', o: ['Young children', 'School age', 'Teenagers'] },
      { id: 'pr2', q: 'Is this about them, or about you?', o: ['Them', 'Me', 'Both'] }
    ],
    esteem: [
      { id: 'es1', q: 'How often is your inner voice critical?', o: ['Most days', 'Some days', 'Rarely'] },
      { id: 'es2', q: 'Does it hold you back from things?', o: ['Yes', 'Sometimes', 'No'] }
    ],
    lonely: [
      { id: 'lo1', q: 'Has this changed recently?', o: ['Yes, recently', 'Gradually', "It's long-standing"] },
      { id: 'lo2', q: 'Would you like support building connection?', o: ['Yes', 'Maybe'] }
    ],
    change: [
      { id: 'ch1', q: 'What kind of change is it?', o: ['Work', 'A relationship', 'Health', 'Moving'] },
      { id: 'ch2', q: 'Was it your choice?', o: ['Yes', 'Partly', 'No'] }
    ],
    exhaustion: [
      { id: 'ex1', q: 'Do you feel you have anything left to give?', o: ['Very little', 'Some', 'Enough'] },
      { id: 'ex2', q: 'Who is carrying most of the load?', o: ['Me', 'Shared', 'Not sure'] }
    ]
  };

  const AI_PSYCHOLOGISTS = [
    { name: 'Ingrid Halvorsen', title: 'Specialist Psychologist', specs: ['ADHD', 'ADHD women', 'Low Self-Esteem'], treats: ['adhd', 'esteem', 'change', 'work'], avail: 'Next available Thursday', img: 'https://images.unsplash.com/photo-1590650153855-d9e808231d41?auto=format&fit=crop&w=400&q=70' },
    { name: 'Mathias Bjørnstad', title: 'Psychologist', specs: ['Anxiety', 'Panic Anxiety', 'Agoraphobia'], treats: ['anxiety', 'panic', 'social', 'sleep', 'ocd'], avail: 'Next available tomorrow', img: 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=70' },
    { name: 'Sofie Lindqvist', title: 'Psychologist', specs: ['Breakup / Jealousy', 'Children and Adolescents', 'Grief'], treats: ['relationships', 'parenting', 'lonely', 'grief'], avail: 'Next available Monday', img: 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=400&q=70' },
    { name: 'Anders Vik', title: 'Specialist Psychologist', specs: ['Depression', 'Bipolar Disorder', 'Guilt / Shame'], treats: ['depression', 'esteem', 'lonely', 'grief', 'change'], avail: 'Next available Wednesday', img: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=70' },
    { name: 'Nora Fjeldstad', title: 'Psychologist', specs: ['PTSD / Trauma', 'OCD', 'Specific Phobias'], treats: ['trauma', 'panic', 'grief', 'eating'], avail: 'Next available Friday', img: 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=400&q=70' },
    { name: 'Henrik Aasen', title: 'Psychologist', specs: ['Burnout', 'Stress', 'Sleep Problems'], treats: ['burnout', 'stress', 'work', 'exhaustion', 'sleep'], avail: 'Next available tomorrow', img: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=400&q=70' }
  ];

  function initAiAssistant() {
    const launcher = document.getElementById('aiLauncher');
    const scrim = document.getElementById('aiScrim');
    const modal = document.getElementById('aiModal');
    const closeBtn = document.getElementById('aiCloseBtn');
    const backBtn = document.getElementById('aiBackBtn');
    const nextBtn = document.getElementById('aiNextBtn');
    const foot = document.getElementById('aiFoot');
    const body = document.getElementById('aiBody');
    const stepLabel = document.getElementById('aiStepLabel');
    const progressBar = document.getElementById('aiProgressBar');
    const concernCards = document.getElementById('aiConcernCards');
    const selCount = document.getElementById('aiSelCount');
    const ownToggle = document.getElementById('aiOwnToggle');
    const ownPanel = document.getElementById('aiOwnPanel');
    const ownWords = document.getElementById('aiOwnWords');
    const durationsWrap = document.getElementById('aiDurations');
    const questionsWrap = document.getElementById('aiQuestions');
    const prefsWrap = document.getElementById('aiPrefs');
    const matchLinesWrap = document.getElementById('aiMatchLines');
    const matchBar = document.getElementById('aiMatchBar');
    const matchIntro = document.getElementById('aiMatchIntro');
    const resultsWrap = document.getElementById('aiResults');
    const restartBtn = document.getElementById('aiRestartBtn');

    if (!launcher || !scrim) return;

    const state = {
      step: 0,
      concerns: [],
      ownWords: '',
      duration: -1,
      answers: {},
      prefs: [],
      matchTimer: null
    };

    function renderConcerns() {
      concernCards.innerHTML = AI_CONCERNS.map((c) => `
        <button type="button" class="ai-concern${state.concerns.includes(c.id) ? ' is-active' : ''}" data-concern="${c.id}">
          <span class="icon-circle icon-circle--sm"><svg class="icon" data-icon="${c.icon}"></svg></span>
          <span><strong>${c.t}</strong><small>${c.d}</small></span>
          <span class="ai-concern__check">✓</span>
        </button>`).join('');
      renderIcons(concernCards);
      updateSelCount();
    }

    function updateSelCount() {
      selCount.textContent = state.concerns.length === 0
        ? 'Select everything that applies, there is no wrong answer.'
        : `${state.concerns.length} selected`;
    }

    function renderDurations() {
      durationsWrap.querySelectorAll('.ai-seg__opt').forEach((btn) => {
        btn.classList.toggle('is-active', +btn.dataset.duration === state.duration);
      });
    }

    function activeQuestions() {
      const picked = [{ id: 'impact', q: 'How much is this affecting your daily life right now?', scale: true }];
      let round = 0;
      while (picked.length < 4 && round < 3) {
        for (const id of state.concerns) {
          const set = AI_QUESTION_BANK[id];
          if (set && set[round] && picked.length < 4) picked.push(set[round]);
        }
        round++;
      }
      return picked;
    }

    const SCALE_OPTS = [
      { t: 'Barely', icon: 'compass' }, { t: 'A little', icon: 'compass' }, { t: 'Moderately', icon: 'compass' },
      { t: 'A lot', icon: 'compass' }, { t: 'Overwhelmingly', icon: 'compass' }
    ];

    function renderQuestions() {
      const qs = activeQuestions();
      questionsWrap.innerHTML = qs.map((q) => {
        if (q.scale) {
          const cur = state.answers[q.id];
          return `<div class="ai-question" data-qid="${q.id}"><p>${q.q}</p>
            <div class="ai-scale">${SCALE_OPTS.map((sc, si) => `<button type="button" class="${cur === si ? 'is-active' : ''}" data-scale="${si}"><svg class="icon" data-icon="${sc.icon}"></svg><span>${sc.t}</span></button>`).join('')}</div>
          </div>`;
        }
        const cur = state.answers[q.id];
        return `<div class="ai-question" data-qid="${q.id}"><p>${q.q}</p>
          <div class="ai-chips">${q.o.map((o) => `<button type="button" class="${cur === o ? 'is-active' : ''}" data-opt="${o}">${o}</button>`).join('')}</div>
        </div>`;
      }).join('');
      renderIcons(questionsWrap);
    }

    function renderPrefs() {
      prefsWrap.querySelectorAll('.ai-pref').forEach((btn) => {
        btn.classList.toggle('is-active', state.prefs.includes(btn.dataset.pref));
      });
    }

    function canAdvance() {
      switch (state.step) {
        case 0: return state.concerns.length > 0 || state.ownWords.trim().length > 0;
        case 1: return state.duration > -1;
        case 2: return true;
        case 3: return state.prefs.length > 0;
        default: return true;
      }
    }

    function updateNav() {
      const ok = canAdvance();
      nextBtn.disabled = !ok;
      nextBtn.textContent = state.step === 3 ? 'See My Matches' : 'Continue';
      backBtn.style.visibility = state.step > 0 ? 'visible' : 'hidden';
      foot.style.display = state.step < 4 ? 'flex' : 'none';
      stepLabel.style.display = state.step < 4 ? 'inline' : 'none';
      stepLabel.textContent = `Step ${Math.min(state.step + 1, 4)} of 4`;
      const pct = state.step >= 5 ? 100 : Math.round(((Math.min(state.step, 4) + 1) / 5) * 100);
      progressBar.style.width = pct + '%';
    }

    function showStep() {
      body.querySelectorAll('.ai-screen').forEach((scr) => {
        scr.classList.toggle('is-active', +scr.dataset.aiStep === state.step);
      });
      if (state.step === 0) renderConcerns();
      if (state.step === 1) renderDurations();
      if (state.step === 2) renderQuestions();
      if (state.step === 3) renderPrefs();
      if (state.step === 5) renderResults();
      updateNav();
      body.scrollTop = 0;
    }

    function runMatch() {
      const reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
      if (state.matchTimer) clearInterval(state.matchTimer);
      const lines = matchLinesWrap.querySelectorAll('span');
      if (reduced) {
        matchBar.style.width = '100%';
        state.step = 5;
        showStep();
        return;
      }
      let t = 0;
      const total = 2400, tick = 60;
      matchBar.style.width = '0%';
      lines.forEach((l, i) => l.classList.toggle('is-active', i === 0));
      state.matchTimer = setInterval(() => {
        t += tick;
        const p = Math.min(1, t / total);
        matchBar.style.width = Math.round(p * 100) + '%';
        const lineIdx = Math.min(2, Math.floor(p * 3));
        lines.forEach((l, i) => l.classList.toggle('is-active', i === lineIdx));
        if (p >= 1) {
          clearInterval(state.matchTimer);
          state.matchTimer = null;
          state.step = 5;
          showStep();
        }
      }, tick);
    }

    function computeMatches() {
      const nameOf = (id) => (AI_CONCERNS.find((c) => c.id === id) || {}).t || id;
      return AI_PSYCHOLOGISTS
        .map((p) => {
          const hits = p.treats.filter((t) => state.concerns.includes(t));
          return { p, hits, score: hits.length };
        })
        .sort((a, b) => b.score - a.score)
        .slice(0, 3)
        .map((m, i) => ({
          ...m.p,
          rank: i === 0 ? 'Closest match' : 'Also a good fit',
          isTop: i === 0,
          why: m.hits.length
            ? 'Works with ' + m.hits.slice(0, 3).map(nameOf).map((x) => x.toLowerCase()).join(', ')
            : 'Broad experience across common concerns'
        }));
    }

    function renderResults() {
      matchIntro.textContent = state.concerns.length
        ? 'Based on what you have shared, these psychologists may be well suited to support you.'
        : 'These psychologists work across the concerns people most often bring to us.';
      const matches = computeMatches();
      resultsWrap.innerHTML = matches.map((m) => `
        <div class="ai-result-card">
          <div class="ai-result-card__head">
            <img src="${m.img}" alt="Portrait of ${m.name}">
            <span class="ai-result-card__rank${m.isTop ? ' is-top' : ''}">${m.rank}</span>
          </div>
          <h3>${m.name}</h3>
          <p>${m.title}</p>
          <div class="tag-row">${m.specs.map((s) => `<span class="tag">${s}</span>`).join('')}</div>
          <p>${m.why}</p>
          <span class="ai-result-card__avail"><svg class="icon icon--sm" data-icon="clock"></svg>${m.avail}</span>
          <div class="ai-result-card__actions">
            <button type="button" class="btn btn--primary">Book Appointment</button>
            <button type="button" class="btn btn--outline">View Full Profile</button>
          </div>
        </div>`).join('');
      renderIcons(resultsWrap);
    }

    function openModal() {
      scrim.hidden = false;
      launcher.classList.add('is-hidden');
      document.body.style.overflow = 'hidden';
      setTimeout(() => { const f = modal.querySelector('button, [href], input, textarea'); f && f.focus(); }, 90);
    }
    function closeModal() {
      scrim.hidden = true;
      launcher.classList.remove('is-hidden');
      document.body.style.overflow = '';
      launcher.focus();
    }
    function resetWizard() {
      state.step = 0; state.concerns = []; state.ownWords = ''; state.duration = -1;
      state.answers = {}; state.prefs = [];
      if (ownWords) ownWords.value = '';
      if (ownPanel) ownPanel.classList.remove('is-open');
      showStep();
    }

    launcher.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);
    scrim.addEventListener('click', (e) => { if (e.target === scrim) closeModal(); });
    document.addEventListener('keydown', (e) => {
      if (scrim.hidden) return;
      if (e.key === 'Escape') closeModal();
    });

    backBtn.addEventListener('click', () => {
      if (state.step <= 0) return;
      state.step -= 1;
      showStep();
    });
    nextBtn.addEventListener('click', () => {
      if (!canAdvance()) return;
      if (state.step === 3) { state.step = 4; showStep(); runMatch(); return; }
      state.step += 1;
      showStep();
    });
    restartBtn && restartBtn.addEventListener('click', resetWizard);

    concernCards.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-concern]');
      if (!btn) return;
      const id = btn.dataset.concern;
      const i = state.concerns.indexOf(id);
      if (i > -1) state.concerns.splice(i, 1); else state.concerns.push(id);
      renderConcerns();
      updateNav();
    });

    ownToggle.addEventListener('click', () => ownPanel.classList.toggle('is-open'));
    ownWords.addEventListener('input', () => { state.ownWords = ownWords.value; updateNav(); });

    durationsWrap.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-duration]');
      if (!btn) return;
      state.duration = +btn.dataset.duration;
      renderDurations();
      updateNav();
    });

    questionsWrap.addEventListener('click', (e) => {
      const scaleBtn = e.target.closest('[data-scale]');
      const optBtn = e.target.closest('[data-opt]');
      if (scaleBtn) {
        const qid = scaleBtn.closest('.ai-question').dataset.qid;
        state.answers[qid] = +scaleBtn.dataset.scale;
        renderQuestions();
      } else if (optBtn) {
        const qid = optBtn.closest('.ai-question').dataset.qid;
        state.answers[qid] = optBtn.dataset.opt;
        renderQuestions();
      }
    });

    prefsWrap.addEventListener('click', (e) => {
      const btn = e.target.closest('.ai-pref');
      if (!btn) return;
      const pref = btn.dataset.pref;
      const i = state.prefs.indexOf(pref);
      if (i > -1) state.prefs.splice(i, 1); else state.prefs.push(pref);
      renderPrefs();
      updateNav();
    });

    showStep();
  }

  /* -------------------------------------------------------------------
     Init
     ------------------------------------------------------------------- */
  document.addEventListener('DOMContentLoaded', () => {
    renderIcons();
    initSmoothScroll();
    initHeader();
    initMobileNav();
    initReveal();
    initSigns();
    initHiw();
    initConditions();
    initFormats();
    initMoreTherapies();
    initPricing();
    initLocations();
    initFaq();
    initArticlesPagination();
    initAiAssistant();

    // hero video: defer loading until after page load to avoid LCP render delay
    const heroVideo = document.querySelector('[data-hero-video]');
    if (heroVideo) {
      const src = heroVideo.dataset.heroVideo;
      if (src) {
        const initHeroVideo = () => {
          heroVideo.src = src;
          heroVideo.muted = true;
          const tryPlay = () => { const p = heroVideo.play(); if (p && p.catch) p.catch(() => {}); };
          heroVideo.addEventListener('canplay', tryPlay, { once: true });
          setTimeout(tryPlay, 800);
        };

        if (window.requestIdleCallback) {
          window.requestIdleCallback(initHeroVideo, { timeout: 2000 });
        } else {
          window.addEventListener('load', () => {
            setTimeout(initHeroVideo, 500);
          });
        }
      }
    }
  });
})();