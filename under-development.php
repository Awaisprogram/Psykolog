<?php
/**
 * Template Name: Under Development
 *
 * Assign this template in WP Admin → Pages → Page Attributes
 * to any page that is not yet fully built.
 */

get_header();
?>

<main>

  <!-- ============ MAIN HERO ============ -->
    <main class="ud-main-texture flex-1 flex items-center py-16 pt-[120px] lg:pt-[190px] -mt-[60px] md:-mt-[140px] px-4 relative overflow-hidden">
 
        <!-- Dekorative bobler -->
        <div class="absolute rounded-full pointer-events-none z-0"
             style="width:520px;height:520px;background:radial-gradient(circle,rgba(248,216,212,0.45) 0%,transparent 70%);top:-120px;right:-80px;"></div>
        <div class="absolute rounded-full pointer-events-none z-0"
             style="width:360px;height:360px;background:radial-gradient(circle,rgba(254,240,234,0.6) 0%,transparent 70%);bottom:-60px;left:-60px;"></div>
 
        <!-- Indre rutenett -->
        <div class="max-w-[1200px] mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative z-[1]">
 
          <!-- ── Venstre: Innhold ── -->
          <div class="flex flex-col">
 
            <!-- Merke -->
            <div class="anim-fade-down-1 inline-flex items-center gap-[10px] bg-white/[.72] border border-[#F2E4DC] rounded-full px-[18px] py-2 font-semibold text-[11px] tracking-[2px] uppercase text-[#C24C33] w-fit mb-7 backdrop-blur-[10px] lg:mx-0 mx-auto">
              <span class="inline-flex items-center justify-center w-[22px] h-[22px] bg-[#C24C33] text-white rounded-full text-xs flex-none">⚙</span>
              <span><?php esc_html_e( 'Under utvikling', 'psykolog' ); ?></span>
            </div>
 
            <!-- Tittel -->
            <h1 class="anim-fade-down-2 font-serif font-bold text-[32px] md:text-[40px] lg:text-[54px] leading-[1.2] text-[#241C19] mb-5 text-balance lg:text-left text-center">
              <?php the_title(); ?><br />
              <em class="italic text-[#C24C33]"><?php esc_html_e( 'kommer snart.', 'psykolog' ); ?></em>
            </h1>
 
            <!-- Ingress -->
            <p class="anim-fade-down-3 text-[18px] leading-[1.65] text-[#6B5F5A] mb-9 max-w-[480px] lg:max-w-[480px] lg:mx-0 mx-auto lg:text-left text-center">
              <?php esc_html_e( 'Vi jobber hardt for å gi deg grundig, fagfellevurdert innhold om dette temaet. Teamet vårt av autoriserte psykologer utarbeider detaljert, nyttig informasjon til deg.', 'psykolog' ); ?>
            </p>
 
            <!-- Fremdriftslinje -->
            <div class="anim-fade-down-4 mb-9">
              <div class="flex justify-between items-center mb-[10px]">
                <span class="text-[13px] font-semibold text-[#4E403B] uppercase tracking-[1px]"><?php esc_html_e( 'Fremdrift på siden', 'psykolog' ); ?></span>
                <span class="text-[14px] font-bold text-[#C24C33]">68 %</span>
              </div>
              <div class="h-2 bg-[rgba(194,76,51,0.12)] rounded-full overflow-hidden">
                <div class="progress-fill-dot anim-progress h-full w-[68%] rounded-full relative"
                     style="background:linear-gradient(90deg,#C24C33 0%,#F09367 100%);transform-origin:left center;">
                </div>
              </div>
            </div>
 
            <!-- CTA-knapper -->
            <div class="anim-fade-down-5 flex flex-wrap gap-[14px] mb-10 lg:justify-start justify-center">
              <a href="<?php echo esc_url( home_url( '/kontakt-oss/' ) ); ?>" class="btn btn--primary btn--lg">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                  <line x1="16" y1="2" x2="16" y2="6"></line>
                  <line x1="8" y1="2" x2="8" y2="6"></line>
                  <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                <?php esc_html_e( 'Book en time', 'psykolog' ); ?>
              </a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--outline btn--lg">
                ← <?php esc_html_e( 'Tilbake til forsiden', 'psykolog' ); ?>
              </a>
            </div>
 
            <!-- Funksjonspiller -->
            <div class="anim-fade-down-6 flex flex-wrap gap-[10px] lg:justify-start justify-center">
              <?php
              $pills = [
                __( 'Ingen henvisning nødvendig', 'psykolog' ),
                __( '100 % autoriserte', 'psykolog' ),
                __( 'Tilgjengelig innen 1–3 dager', 'psykolog' ),
              ];
              foreach ( $pills as $pill ) :
              ?>
              <span class="inline-flex items-center gap-[7px] bg-white/[.75] border border-[#F2E4DC] rounded-full px-4 py-2 text-[13px] font-medium text-[#4E403B] backdrop-blur-[8px]">
                <span class="w-1.5 h-1.5 rounded-full bg-[#C24C33] flex-none"></span><?php echo esc_html( $pill ); ?>
              </span>
              <?php endforeach; ?>
            </div>
          </div>
 
          <!-- ── Høyre: Illustrasjon ── -->
          <div class="anim-fade-up flex items-center justify-center relative lg:order-none -order-1">
            <div class="relative w-full max-w-[520px]">
              <!-- Frostet bakgrunn -->
              <div class="absolute rounded-[40px] border border-[#F2E4DC] backdrop-blur-[4px]"
                   style="inset:-20px;background:rgba(248,235,226,0.55);"></div>
 
              <!-- Illustrasjon -->
              <img
                src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/under-development.webp' ); ?>"
                alt="<?php esc_attr_e( 'Illustrasjon av side under utvikling', 'psykolog' ); ?>"
                class="anim-float relative z-[1] w-full rounded-[32px] drop-shadow-[0_20px_60px_rgba(92,42,32,0.14)]"
              />
 
              <!-- Flytende statusmerke -->
              <div class="anim-float-1s absolute bottom-7 -left-6 bg-white border border-[#F2E4DC] rounded-2xl px-[18px] py-[14px] flex items-center gap-3 shadow-[0_8px_32px_rgba(92,42,32,0.12)] z-[2] hidden sm:flex">
                <div class="w-10 h-10 rounded-[10px] flex items-center justify-center flex-none"
                     style="background:linear-gradient(135deg,#C24C33,#F09367);">
                  <svg class="w-5 h-5 stroke-white fill-none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                  </svg>
                </div>
                <div class="flex flex-col gap-0.5">
                  <span class="text-[11px] font-semibold tracking-[1px] uppercase text-[#8C8079]"><?php esc_html_e( 'Status', 'psykolog' ); ?></span>
                  <span class="text-[14px] font-bold text-[#241C19]"><?php esc_html_e( 'Under utvikling', 'psykolog' ); ?></span>
                </div>
              </div>
 
              <!-- Pulsmerke -->
              <div class="anim-float-0-5s absolute top-6 -right-4 bg-white border border-[#F2E4DC] rounded-xl px-[14px] py-[10px] flex items-center gap-2 shadow-[0_6px_20px_rgba(92,42,32,0.1)] z-[2] text-[12px] font-semibold text-[#4E403B] hidden sm:flex">
                <div class="pulse-ring w-2 h-2 bg-green-500 rounded-full flex-none relative"></div>
                <?php esc_html_e( 'Blir skrevet', 'psykolog' ); ?>
              </div>
            </div>
          </div>
 
        </div>
      </main>
 
      <!-- ============ RELATERTE TILSTANDER ============ -->
      <section class="bg-white py-[72px] px-6 border-t border-[#F6E9E2]">
        <div class="max-w-[1200px] mx-auto">
 
          <!-- Overskrift -->
          <div class="text-center mb-12">
            <div class="eyebrow mx-auto mb-4 w-fit">
              <span class="eyebrow__dot">✳</span>
              <span><?php esc_html_e( 'Hva vi kan hjelpe med', 'psykolog' ); ?></span>
            </div>
            <h2 class="font-serif font-bold text-[36px] text-[#241C19] mt-3 mb-[14px]">
              <?php esc_html_e( 'Utforsk', 'psykolog' ); ?> <em class="italic text-[#C24C33]"><?php esc_html_e( 'tilgjengelige', 'psykolog' ); ?></em> <?php esc_html_e( 'tilstander', 'psykolog' ); ?>
            </h2>
            <p class="text-[17px] text-[#6B5F5A] max-w-[560px] mx-auto">
              <?php esc_html_e( 'Mens denne siden blir klargjort, kan du utforske våre andre grundige ressurser om psykisk helse nedenfor.', 'psykolog' ); ?>
            </p>
          </div>
 
          <!-- Rutenett med kort -->
          <?php
          // Fetch all published pages that have a proper page template assigned
          // (i.e. NOT the under-development template) so only built pages appear.
          $related_pages = get_pages([
            'post_status'    => 'publish',
            'meta_key'       => '_wp_page_template',
            'meta_compare'   => 'NOT LIKE',
            'meta_value'     => 'under-development',
            'number'         => 9,
            'exclude'        => [ get_the_ID() ],
          ]);

          if ( $related_pages ) : ?>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-9">
            <?php foreach ( $related_pages as $rel_page ) :
              // Skip pages with no template (standard WP pages like contact)
              $tmpl = get_post_meta( $rel_page->ID, '_wp_page_template', true );
              if ( ! $tmpl || $tmpl === 'default' ) continue;
            ?>
            <a href="<?php echo esc_url( get_permalink( $rel_page->ID ) ); ?>"
               class="group flex flex-col bg-[#FFF7F3] border border-[#F2E4DC] rounded-[20px] p-6 no-underline text-inherit transition-all duration-[250ms] hover:-translate-y-1 hover:shadow-[0_12px_36px_rgba(92,42,32,0.1)] hover:bg-[#FEF0EA]">
              <div class="w-11 h-11 bg-[rgba(194,76,51,0.1)] rounded-xl flex items-center justify-center mb-4 flex-none">
                <svg class="w-5 h-5 stroke-[#C24C33] fill-none" style="stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;" viewBox="0 0 24 24">
                  <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <h3 class="font-serif font-bold text-[18px] text-[#241C19] mb-2">
                <?php echo esc_html( get_the_title( $rel_page->ID ) ); ?>
              </h3>
              <p class="text-[14px] leading-[1.6] text-[#6B5F5A] m-0 flex-1">
                <?php echo esc_html( wp_trim_words( get_the_excerpt( $rel_page->ID ), 18, '…' ) ); ?>
              </p>
              <span class="cond-arrow-hover inline-flex items-center gap-1.5 text-[13px] font-semibold text-[#C24C33] mt-4 transition-[gap] duration-200">
                <?php esc_html_e( 'Les mer →', 'psykolog' ); ?>
              </span>
            </a>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
 
          <div class="text-center">
            <a href="<?php echo esc_url( home_url( '/#home-conditions' ) ); ?>" class="btn btn--outline btn--lg">
              <?php esc_html_e( 'Se alle tilstander →', 'psykolog' ); ?>
            </a>
          </div>
        </div>
      </section>
 
      <!-- ============ CTA-STRIPE ============ -->
      <section class="py-16 px-6" style="background-color:#5C2A20;">
        <div class="max-w-[720px] mx-auto text-center">
          <h2 class="font-serif font-bold text-[38px] text-white mb-4 leading-[1.25]">
            <?php esc_html_e( 'Klar til å snakke med en', 'psykolog' ); ?><br/>
            <em class="italic text-[#F09367]"><?php esc_html_e( 'autorisert psykolog?', 'psykolog' ); ?></em>
          </h2>
          <p class="text-[17px] leading-[1.65] text-white/[.78] mb-8">
            <?php esc_html_e( 'Ikke vent til denne siden er klar. Book en konsultasjon med en av våre erfarne psykologer i dag — ingen henvisning nødvendig, tilgjengelig innen 1–3 dager.', 'psykolog' ); ?>
          </p>
          <div class="flex gap-[14px] justify-center flex-wrap">
            <a href="<?php echo esc_url( home_url( '/kontakt-oss/' ) ); ?>" class="btn btn--light btn--lg">
              <?php esc_html_e( 'Book en time', 'psykolog' ); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/psykologer/' ) ); ?>" class="btn btn--lg" style="background:rgba(255,255,255,0.12);color:#fff;border:1px solid rgba(255,255,255,0.3);">
              <?php esc_html_e( 'Møt våre psykologer', 'psykolog' ); ?>
            </a>
          </div>
        </div>
      </section><!-- end page wrapper -->
 
</main>

<?php get_footer(); ?>