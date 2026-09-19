<?php
/**
 * The template for displaying the footer
 *
 */

?>

<footer id="home-footer" class="bg-[#5C2A20] pt-16 pb-8 text-[#E4D3CB]  overflow-hidden">
  <div class="container">
    
    <!-- Newsletter Card -->
    <div class="relative flex flex-col lg:flex-row items-center justify-between gap-10 bg-[#FFFFFF0F] border border-[#FFFFFF24] rounded-[24px] p-6 lg:p-8 mb-20 overflow-hidden shadow-inner">
      <!-- Decorative background glow -->
      <div
        class="absolute -top-[120px] -right-[120px] w-[340px] h-[340px] rounded-full border-[36px] border-[#F0936712] pointer-events-none"
      ></div>
      
      <div class="max-w-xl relative z-10">
        <h3 class="font-serif text-3xl md:text-[34px] font-bold text-white mb-4 leading-[1.3]">
          En roligere innboks, opptil <span class="text-[#F09367] italic font-serif">én gang i måneden</span>
        </h3>
        <p class="text-[15px] leading-[1.6] text-white/80">
          Skånsom evidensbasert innsikt fra vår psykolog. Ingen støy, ingen press, du kan melde deg av når som helst.
        </p>
      </div>
      
      <div class="w-full max-w-[420px] relative z-10 flex flex-col gap-4 lg:ml-auto">
        <form class="flex items-center bg-white/10 border border-white/20 rounded-full p-1.5 w-full" onsubmit="return false">
          <input type="email" placeholder="Skriv inn e-postadressen din" required aria-label="Email address" class="flex-1 bg-transparent border-none outline-none text-white px-5 text-[15px] placeholder:text-white/60">
          <button type="submit" class="bg-[#F09367] text-[#5C2A20] rounded-full px-8 py-3.5 text-[15px] font-semibold hover:opacity-90 transition-opacity whitespace-nowrap">
            Kom i gang
          </button>
        </form>
        <div class="flex items-start">
          <label class="flex items-start gap-3 cursor-pointer group">
            <input type="checkbox" checked class="peer sr-only">
            <div class="w-[18px] h-[18px] shrink-0 rounded bg-white/20 border border-white/30 peer-checked:bg-[#F09367] peer-checked:border-[#F09367] flex items-center justify-center mt-0.5 transition-colors">
              <svg class="w-3.5 h-3.5 text-[#5C2A20] opacity-0 peer-checked:opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="text-[12px] text-[#C9AFA4] leading-[1.6]">
              Ved å abonnere godtar du våre retningslinjer for personvern, og e-postadressen din blir aldri delt.
            </span>
          </label>
        </div>
      </div>
    </div>

    <!-- Navigation Columns -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-8 gap-y-12 mb-16">
      <div class="flex flex-col gap-4">
        <p class="font-bold font-serif text-[#FF9D6E] text-[16px] mb-2 tracking-wide">Tjenester</p>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Individuell terapi</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Parterapi</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Familieterapi</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Videokonsultasjon</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Psykoterapier</a>
      </div>
      <div class="flex flex-col gap-4">
        <p class="font-bold font-serif text-[#FF9D6E] text-[16px] mb-2 tracking-wide">Betingelser</p>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Angst</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Depresjon</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">ADHD</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Utbrenthet</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Alle forhold</a>
      </div>
      <div class="flex flex-col gap-4">
        <p class="font-bold font-serif text-[#FF9D6E] text-[16px] mb-2 tracking-wide">Klinikk</p>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Våre psykologer</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Hvordan det fungerer</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Prissetting</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Oslo clinic</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Skiklinikk</a>
      </div>
      <div class="flex flex-col gap-4">
        <p class="font-bold font-serif text-[#FF9D6E] text-[16px] mb-2 tracking-wide">Bedrift</p>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Om oss</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Artikler</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Karriere</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">For bedrifter</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Fortell en venn</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Kontakt</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Digipost</a>
      </div>
      <div class="flex flex-col gap-4">
        <p class="font-bold font-serif text-[#FF9D6E] text-[16px] mb-2 tracking-wide">Juridisk</p>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Personvernerklæring</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Vilkår for bruk</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Konfidensialitet</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Samtykkeerklæring</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Innstillinger for informasjonskapsler</a>
        <a href="#" class="text-[14px] text-[#F8EBE2] hover:text-white transition-colors">Pasientrettigheter</a>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-6 pt-8 border-t border-white/10 text-[13px] text-[#C9AFA4]">
      <span>© 2026 Psykolog.no — Autoriserte psykologer i Norge</span>
      
      <div class="flex items-center gap-6">
        <div class="flex items-center gap-3">
          <!-- Note: Restored img tags as requested -->
          <a href="#" aria-label="Instagram" class="flex w-[34px] h-[34px]">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/insta.webp" alt="Instagram Icon" class="object-contain" />
          </a>
          <a href="#" aria-label="LinkedIn" class="flex w-[34px] h-[34px]">
           <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/LinkedIn-1.webp" alt="LinkedIn Icon" class="object-contain" />
          </a>
          <a href="#" aria-label="Pinterest" class="flex w-[34px] h-[34px]">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Piscart.webp" alt="Piscart Icon" class="object-contain" />
          </a>
          <a href="#" aria-label="Facebook" class="flex w-[34px] h-[34px]">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/facebook-1.webp" alt="Facebook Icon" class="object-contain" />
          </a>
          <a href="#" aria-label="X" class="flex w-[34px] h-[34px]">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/x.webp" alt="X Icon" class="object-contain" />
          </a>
        </div>
        <span>Designet og utviklet av Sysinn</span>
      </div>
    </div>
    
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>