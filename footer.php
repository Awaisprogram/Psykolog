<?php
/**
 * The template for displaying the footer
 *
 */

?>

<footer id="home-footer" class="bg-[#5C2A20] pt-16 pb-8 text-[#E4D3CB] overflow-hidden">
  <div class="container">
    
    <!-- Top Section: Logo/Description + Newsletter -->
    <div class="relative flex flex-col lg:flex-row items-center justify-between gap-10 bg-[#FFFFFF0E] border border-[#FFFFFF21] rounded-[24px] p-8 lg:p-10 mb-16 overflow-hidden">
      <!-- Decorative background glow -->
      <div class="absolute -top-[120px] -right-[120px] w-[340px] h-[340px] rounded-full border-[36px] border-[#F0936712] pointer-events-none"></div>

      <!-- Left: Logo + Description + Social Icons -->
      <div class="max-w-xl relative z-10">
        <!-- Logo -->
        <div class="flex items-center gap-3 mb-5">
  		<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Psykolog-Logo.webp" alt="Psykolog.no Logo / Ikon"  class="h-[48px] object-contain" />
		</div>
        <p class="text-[16px] leading-[1.7] text-[#FFFFFF] mb-6">
          Hos Psykolog.no gjør vi det enkelt å finne, forstå og bestille psykologisk støtte. Vi jobber for at psykologisk hjelp skal være tilgjengelig, forståelig og trygg for alle som trenger det.
        </p>
        <!-- Social Icons -->
        <div class="flex items-center gap-3">
  			<a href="https://www.instagram.com/psykolog.no/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="w-[36px] h-[36px]">
    			<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/insta.webp" alt="Instagram" class="object-contain" />
  			</a>
  			<a href="https://www.linkedin.com/company/psykolog-no/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="w-[36px] h-[36px]">
    			<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/LinkedIn-1.webp" alt="LinkedIn" class="object-contain" />
  			</a>
  			<a href="https://no.pinterest.com/psykolog_no/" target="_blank" rel="noopener noreferrer" aria-label="Pinterest" class="w-[36px] h-[36px]">
    			<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Piscart.webp" alt="Pinterest" class="object-contain" />
  			</a>
  			<a href="https://www.facebook.com/psykolog.norge" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="w-[36px] h-[36px]">
    			<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/facebook-1.webp" alt="Facebook" class="object-contain" />
  			</a>
  			<a href="https://x.com/Psykologno" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)" class="w-[36px] h-[36px]">
    			<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/x.webp" alt="X" class="object-contain" />
  			</a>
			</div>
      </div>

      <!-- Right: Newsletter -->
      <div class="w-full max-w-[527px] relative z-10 flex flex-col gap-4 lg:ml-auto">
        <p class="text-[16px] text-white font-semibold leading-[1.5]">
          Meld deg på nyhetsbrevet vårt for å holde deg oppdatert på de siste nyhetene og oppdateringene.
        </p>
        <form id="newsletterForm" class="flex items-center bg-white/10 border border-white/20 rounded-full p-1.5 w-full">
          <input
  			type="email"
  			id="newsletterEmail"
  			placeholder="Skriv inn e-posten din"
  			required
  			aria-label="E-postadresse"
  			class="flex-1 bg-transparent border-none outline-none text-white px-5 text-[14px] placeholder:text-white/50"
  			oninvalid="this.setCustomValidity(this.value === '' ? 'Vennligst fyll ut e-postadressen din.' : 'Vennligst skriv inn en gyldig e-postadresse.')"
  			oninput="this.setCustomValidity('')"
			>
          <button
            type="submit"
            id="newsletterBtn"
            class="bg-[#F09367] text-[#5C2A20] rounded-full px-7 py-3 text-[14px] font-semibold hover:opacity-90 transition-opacity whitespace-nowrap cursor-pointer"
          >
            Kom i gang
          </button>
        </form>

        <!-- Feedback message -->
        <p id="newsletterMsg" class="text-[13px] leading-[1.5] hidden"></p>

        <div class="flex items-start">
          <label class="flex items-start gap-3 cursor-pointer group">
  			<input type="checkbox" id="newsletterConsent" checked class="peer sr-only">
  
  			<div class="w-[18px] h-[18px] shrink-0 rounded bg-white border border-[#F09367] peer-checked:bg-[#F09367] peer-checked:border-[#F09367] flex items-center justify-center mt-0.5 transition-colors">
    			<svg class="w-3.5 h-3.5 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
      			<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
    			</svg>
  			</div>
  
  			<span class="text-[14px] text-[#fff] leading-[1.6]">
    			Ved å abonnere godtar du våre personvernregler. Din e-post blir aldri delt.
  			</span>
			</label>
        </div>
      </div>
    </div>

<script>
(function () {
  const form = document.getElementById('newsletterForm');
  const emailInput = document.getElementById('newsletterEmail');
  const consentInput = document.getElementById('newsletterConsent');
  const btn = document.getElementById('newsletterBtn');
  const msg = document.getElementById('newsletterMsg');

  function showMessage(text, type) {
    msg.textContent = text;
    msg.classList.remove('hidden', 'text-red-300', 'text-green-300');
    msg.classList.add(type === 'error' ? 'text-red-300' : 'text-green-300');
  }

  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  form.addEventListener('submit', async function (e) {
    e.preventDefault();
    const email = emailInput.value.trim();

    if (!isValidEmail(email)) {
      showMessage('Vennligst skriv inn en gyldig e-postadresse.', 'error');
      return;
    }

    if (!consentInput.checked) {
      showMessage('Du må godta personvernreglene.', 'error');
      return;
    }

    // Duplikatsjekk (klientsiden, via localStorage)
    const subscribers = JSON.parse(localStorage.getItem('newsletter_subscribers') || '[]');
    if (subscribers.includes(email)) {
      showMessage('Denne e-postadressen er allerede påmeldt.', 'error');
      return;
    }

    // Lastetilstand
    const originalText = btn.textContent;
    btn.disabled = true;
    btn.textContent = 'Sender...';

    try {
      // TODO: replace with real API call, e.g.:
      // const res = await fetch('/wp-json/psykolog/v1/newsletter', {
      //   method: 'POST',
      //   headers: { 'Content-Type': 'application/json' },
      //   body: JSON.stringify({ email })
      // });
      // if (!res.ok) throw new Error('Request failed');

      await new Promise((resolve) => setTimeout(resolve, 700)); // falsk ventetid, fjern når ekte API er koblet til

      subscribers.push(email);
      localStorage.setItem('newsletter_subscribers', JSON.stringify(subscribers));

      showMessage('Takk! Du er nå påmeldt.', 'success');
      form.reset();
      consentInput.checked = true;
    } catch (err) {
      showMessage('Noe gikk galt. Vennligst prøv igjen senere.', 'error');
    } finally {
      btn.disabled = false;
      btn.textContent = originalText;
    }
  });
})();
</script>

    <!-- Navigation Columns -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-8 gap-y-12 mb-16">
      <!-- Psykisk lidelse -->
      <div class="flex flex-col gap-4">
        <p class="font-bold font-serif text-[#FF9D6E] text-[16px] mb-2 tracking-wide">Psykisk lidelse</p>
        <a href="https://sysinn.net/psykolog.no/psykisk-helse/adhd/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">ADHD</a>
        <a href="https://sysinn.net/psykolog.no/psykisk-helse/angst/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Angst</a>
        <a href="https://sysinn.net/psykolog.no/psykisk-helse/utbrenthet/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Utbrenthet</a>
        <a href="https://sysinn.net/psykolog.no/psykisk-helse/depresjon/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Depresjon</a>
        <a href="https://sysinn.net/psykolog.no/psykisk-helse/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Alle tilstander</a>
      </div>
      <!-- Resources -->
      <div class="flex flex-col gap-4">
        <p class="font-bold font-serif text-[#FF9D6E] text-[16px] mb-2 tracking-wide">Ressurser</p>
        <a href="https://sysinn.net/psykolog.no/artikler/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Artikler</a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Vurderinger</a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Veiledning</a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Selvhjelpsverktøy</a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Fortell en venn</a>
      </div>
      <!-- Clinic -->
      <div class="flex flex-col gap-4">
        <p class="font-bold font-serif text-[#FF9D6E] text-[16px] mb-2 tracking-wide">Klinikk</p>
        <a href="#" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Hvordan det fungerer</a>
        <a href="https://sysinn.net/psykolog.no/vare-psykologer/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Våre psykologer</a>
        <a href="https://sysinn.net/psykolog.no/priser/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Priser</a>
        <a href="https://sysinn.net/psykolog.no/oslo/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Klinikk i Oslo</a>
        <a href="https://sysinn.net/psykolog.no/bergen/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Klinikk i Bergen</a>
      </div>
      <!-- Company -->
      <div class="flex flex-col gap-4">
        <p class="font-bold font-serif text-[#FF9D6E] text-[16px] mb-2 tracking-wide">Selskap</p>
        <a href="https://sysinn.net/psykolog.no/om-oss/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Om oss</a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Karriere</a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">For bedrifter</a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Bli med i teamet</a>
        <a href="https://sysinn.net/psykolog.no/kontakt-oss/" target="_blank" rel="noopener noreferrer" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Kontakt oss</a>
      </div>
      <!-- Contact -->
      <div class="flex flex-col gap-4">
        <p class="font-bold font-serif text-[#FF9D6E] text-[16px] mb-2 tracking-wide">Kontakt</p>
        <a href="tel:92844444" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2.5 text-[14px] text-[#F8EBE2] hover:text-white transition-colors">
         <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/phone-1.webp" alt="Telefon" class="w-[16px] h-[16px] object-contain text-[#F09367] shrink-0" />
          92 84 4444
        </a>
        <a href="mailto:Hei@psykolog.no" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2.5 text-[14px] text-[#F8EBE2] hover:text-white transition-colors">
          <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/mail.webp" alt="e-post" class="w-[16px] h-[16px] object-contain text-[#F09367] shrink-0" />
          Hei@psykolog.no
        </a>
        <span class="flex items-center gap-2.5 text-[14px] text-[#F8EBE2]">
          <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/sted.webp" alt="sted" class="w-[16px] h-[16px] object-contain text-[#F09367] shrink-0" />
          Veitvetveien 8, 0586 Oslo
        </span>
        <span class="flex items-center gap-2.5 text-[14px] text-[#F8EBE2]">
         <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/sted.webp" alt="sted" class="w-[16px] h-[16px] object-contain text-[#F09367] shrink-0" />
          Asenveien 1, 1400 Ski
        </span>
        <a href="#" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2.5 text-[14px] text-[#F8EBE2] hover:text-white transition-colors">
         <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/DigiPost.webp" alt="DigiPost" class="w-[16px] h-[16px] object-contain text-[#F09367] shrink-0" />
          Digipost
        </a>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-6 pt-8 border-t border-white/10 text-[13px] text-[#C9AFA4]">
      <span>© 2026 Psykolog.no, Alle rettigheter forbeholdt</span>
      <span>Designet og utviklet av <a href="https://sysinn.no" target="_blank" rel="noopener noreferrer" class="text-[#FF9D6E] hover:text-white transition-colors">Sysinn.no</a></span>
      <a href="<?php echo esc_url( home_url( '/personvernerklaering/' ) ); ?>" class="text-[#C9AFA4] hover:text-white transition-colors">Personvernerklæring</a>
    </div>
    
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>