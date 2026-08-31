<?php
/* Template Name: Mental Health */
get_header();


$post_id = get_the_ID();

$section_1  = get_field( 'section_1', $post_id ); 
$section_2  = get_field( 'section_2', $post_id );  
$section_3  = get_field( 'section_3', $post_id );  
$section_4  = get_field( 'section_4', $post_id );  
$section_5  = get_field( 'section_5', $post_id );  
$section_6  = get_field( 'section_6', $post_id );  
$section_7  = get_field( 'section_7', $post_id );  
$section_8  = get_field( 'section_8', $post_id ); 
$section_9  = get_field( 'section_9', $post_id );  
$section_10 = get_field( 'section_10', $post_id ); 
?>

<main id="mental-health-page">

<!-- =========================================================
     SECTION 1 — HERO
========================================================= -->
<?php if ( $section_1 ) : ?>
<section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px]">
  <span class="[grid-area:1/1] relative w-full min-h-[550px] lg:min-h-0 overflow-hidden">
    <?php if ( ! empty( $section_1['hero_image'] ) ) : ?>
      <img src="<?php echo esc_url( $section_1['hero_image'] ); ?>" alt="<?php echo esc_attr( $section_1['title'] ?? 'Mental Health' ); ?>" class="absolute inset-0 w-full h-full object-cover object-[72%_50%]" />
    <?php endif; ?>
    <span class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent lg:hidden"></span>
  </span>

  <div class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] self-end z-[2] bg-transparent pt-32 pb-10 lg:pt-[180px] lg:pb-[88px]">
    <div class="max-w-[1312px] mx-auto">
      <div class="max-w-full lg:max-w-[52%]">

        <?php if ( ! empty( $section_1['badge_text'] ) ) : ?>
        <div class="inline-flex items-center gap-[9px] bg-white/[.66] backdrop-blur-2xl backdrop-saturate-150 border border-white/[.82] rounded-full px-5 py-[9px]">
          <span class="text-[#CE5A43] text-[13px] leading-[13px]">✳</span>
          <span class="font-sans font-semibold text-xs leading-4 tracking-[2px] uppercase text-brand-brown whitespace-nowrap"><?php echo esc_html( $section_1['badge_text'] ); ?></span>
        </div>
        <?php endif; ?>

        <?php if ( ! empty( $section_1['title'] ) ) : ?>
        <h1 class="font-serif font-bold text-brand-darkest mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[56px]">
          <?php echo esc_html( $section_1['title'] ); ?>
        </h1>
        <?php endif; ?>

        <?php if ( ! empty( $section_1['lede'] ) ) : ?>
        <p class="text-lg lg:text-xl leading-[1.6] text-[#33170F] mt-[22px] mb-0"><?php echo esc_html( $section_1['lede'] ); ?></p>
        <?php endif; ?>

        <?php if ( ! empty( $section_1['button_text'] ) ) : ?>
        <div class="mt-8">
         <button onclick="location.href='<?php echo esc_attr( $section_1['button_target'] ?: '#mh-book' ); ?>'" class="flex sm:inline-flex items-center 			justify-between sm:justify-center gap-3 font-sans font-bold text-base sm:text-lg leading-[23px] w-full sm:w-auto bg-brand-orange text-white border-0 			rounded-full px-6 sm:pl-8 sm:pr-[17px] py-3.5 sm:py-[17px] cursor-pointer transition-transform active:scale-[0.98]">
  			<span class="truncate"><?php echo esc_html( $section_1['button_text'] ); ?></span>
  			<span class="inline-flex items-center justify-center w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-white/20 text-xs sm:text-[15px] shrink-0">→</span>
			</button>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================
     JUMP NAV
========================================================= -->
<div class="bg-white pt-10">
  <div class="container">
    <nav class="ps-jump flex items-center gap-0.5 bg-[#FDF6F2] rounded-full px-3.5 py-2 overflow-x-auto">
      <a href="#mh-what" class="font-sans font-bold text-[15px] leading-5 whitespace-nowrap text-brand-hover bg-brand-active rounded-full px-[18px] py-2.5">Hva er mental helse</a>
      <a href="#mh-conditions" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Vanlige tilstander</a>
      <a href="#mh-activity" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Fysisk aktivitet</a>
      <a href="#mh-seek" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Når du bør søke hjelp</a>
      <a href="#mh-youth" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Ungdoms psykiske helse</a>
      <a href="#mh-substance" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Rusmisbruk</a>
      <a href="#mh-relatives" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">For slektninger</a>
      <a href="#mh-faq" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">FAQ</a>
    </nav>
  </div>
</div>
	


<!-- =========================================================
     SECTION 2 — WHAT IS MENTAL HEALTH
========================================================= -->
<?php if ( $section_2 ) : ?>
<section id="mh-what" class="section section--white" data-reveal>
  <div class="container">
    <div class="grid grid-cols-1 gap-12 items-start lg:grid-cols-[1fr_380px] lg:gap-12">
      <div>
        <h2 class="font-serif font-bold text-brand-heading m-0 text-[30px] leading-[39px] md:text-[36px] md:leading-[46px] lg:text-[44px] lg:leading-[56px]">
          <?php echo esc_html( $section_2['heading'] ); ?> <em class="italic text-brand-hover"><?php echo esc_html( $section_2['heading_highlight'] ); ?></em>
        </h2>

        <?php foreach ( array( 'paragraph_1', 'paragraph_2', 'paragraph_3' ) as $i => $p_key ) : ?>
          <?php if ( ! empty( $section_2[ $p_key ] ) ) : ?>
            <div class="text-xl leading-[31px] text-brand-gray <?php echo $i === 0 ? 'mt-[22px]' : 'mt-[18px]'; ?> mb-0"><?php echo wp_kses_post( $section_2[ $p_key ] ); ?></div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <?php if ( ! empty( $section_2['model_items'] ) ) : ?>
      <div class="lg:sticky lg:top-[148px]">
        <div class="relative overflow-hidden bg-ink-600 rounded-3xl px-[30px] py-8">
          <?php if ( ! empty( $section_2['model_kicker'] ) ) : ?>
          <p class="relative font-sans font-extrabold text-[14px] tracking-[2px] uppercase text-[#F09367] m-0"><?php echo esc_html( $section_2['model_kicker'] ); ?></p>
          <?php endif; ?>

          <div class="relative grid gap-2.5 mt-[22px]">
            <?php foreach ( $section_2['model_items'] as $item ) : ?>
            <div class="flex items-center gap-4 bg-[rgba(248,216,212,0.08)] border border-[rgba(248,216,212,0.15)] rounded-2xl px-5 py-[18px]">
              <?php if ( ! empty( $item['icon'] ) ) : ?>
              <span class="inline-flex items-center justify-center w-[54px] h-[54px] flex-none overflow-hidden">
                <img src="<?php echo esc_url( $item['icon'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="w-full h-full object-contain" />
              </span>
              <?php endif; ?>
              <span>
                <span class="block font-serif font-bold text-lg leading-[25px] text-white"><?php echo esc_html( $item['title'] ); ?></span>
                <span class="block text-base leading-[21px] text-brand-offwhite mt-[3px]"><?php echo esc_html( $item['description'] ); ?></span>
              </span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================
     SECTION 3 — COMMON CONDITIONS
========================================================= -->
<?php if ( $section_3 ) : ?>
<section id="mh-conditions" class="section section--peach">
  <div class="container">
    <div class="max-w-[760px]" data-reveal>
      <h2 class="font-serif font-bold text-brand-heading m-0 text-[30px] leading-[39px] md:text-[36px] md:leading-[46px] lg:text-[44px] lg:leading-[56px]">
        <?php echo esc_html( $section_3['heading'] ); ?> <em class="italic text-brand-hover"><?php echo esc_html( $section_3['heading_highlight'] ); ?></em>
      </h2>
      <?php if ( ! empty( $section_3['lede'] ) ) : ?>
      <p class="text-xl leading-[31px] text-brand-gray mt-5 mb-0"><?php echo esc_html( $section_3['lede'] ); ?></p>
      <?php endif; ?>
    </div>

    <?php if ( ! empty( $section_3['conditions'] ) ) : ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-[18px] mt-12">
      <?php foreach ( $section_3['conditions'] as $card ) : ?>
      <a href="<?php echo esc_attr( $card['link_target'] ?: '#' ); ?>" class="group flex flex-col justify-between h-full bg-white border border-[#f2e4dc] rounded-[20px] p-[26px_24px] translate-y-0 shadow-none transition-all duration-300 hover:bg-gray-50 hover:border-brand-hover hover:-translate-y-2 hover:shadow-lg">
        <div>
          <span class="inline-flex items-center justify-center w-11 h-11 rounded-[12px]">
    		<?php if ( ! empty( $card['icon'] ) ) : ?>
        		<img src="<?php echo esc_url( $card['icon'] ); ?>" alt="<?php echo esc_attr( $card['title'] ); ?>" class="w-full h-full" />
    		<?php endif; ?>
		</span>
          <span class="block font-serif font-bold text-xl leading-[29px] text-brand-heading mt-6"><?php echo esc_html( $card['title'] ); ?></span>
          <span class="block text-base leading-6 text-brand-gray mt-2.5"><?php echo esc_html( $card['description'] ); ?></span>
        </div>
        <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-[#B35238] mt-8 group-hover:underline">
          Les mer
          <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h10M9 4l4 4-4 4" /></svg>
        </span>
      </a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================
     SECTION 4 — PHYSICAL ACTIVITY
========================================================= -->
<?php if ( $section_4 ) : ?>
<section id="mh-activity" class="section section--white" data-reveal>
  <div class="container px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="text-center">
      <?php if ( ! empty( $section_4['kicker'] ) ) : ?>
      <p class="font-sans font-semibold text-sm sm:text-md tracking-[2px] uppercase text-brand-hover mb-2 sm:mb-3"><?php echo esc_html( $section_4['kicker'] ); ?></p>
      <?php endif; ?>
      <h2 class="h2 text-2xl sm:text-3xl md:text-4xl"><?php echo esc_html( $section_4['heading'] ); ?> <em><?php echo esc_html( $section_4['heading_highlight'] ); ?></em></h2>
      <?php if ( ! empty( $section_4['lede'] ) ) : ?>
      <p class="max-w-[1130px] mx-auto text-base sm:text-lg md:text-xl leading-relaxed md:leading-[30px] text-ink-body mt-3 sm:mt-5 mb-0"><?php echo esc_html( $section_4['lede'] ); ?></p>
      <?php endif; ?>
    </div>

    <?php if ( ! empty( $section_4['activity_rows'] ) ) : ?>
    <div class="mt-8 sm:mt-12 md:mt-14 bg-white rounded-2xl sm:rounded-[24px] overflow-hidden border border-border-soft shadow-[0px_18px_44px_-30px_#5C2A204D]">
      <table class="w-full text-left border-collapse block md:table">
        <thead class="hidden md:table-header-group">
          <tr class="bg-ink-600 md:table-row">
            <th class="px-6 md:px-8 py-5 md:py-6 font-sans font-bold text-[12px] tracking-[1.5px] uppercase text-white w-[35%] md:w-[32%]"><?php echo esc_html( $section_4['table_col_1_label'] ); ?></th>
            <th class="px-6 md:px-8 py-5 md:py-6 font-sans font-bold text-[12px] tracking-[1.5px] uppercase text-[#f09367] w-[65%] md:w-[68%]"><?php echo esc_html( $section_4['table_col_2_label'] ); ?></th>
          </tr>
        </thead>
        <tbody class="block md:table-row-group divide-y divide-border-soft">
          <?php foreach ( $section_4['activity_rows'] as $row ) : ?>
          <tr class="block md:table-row hover:bg-surface-cream/50 transition-colors md:hover:border-l-3 md:hover:border-l-brand-hover">
            <td class="block md:table-cell px-5 sm:px-6 md:px-8 pt-5 pb-2 md:py-6">
              <div class="flex items-center gap-3.5 sm:gap-4">
                <span class="inline-flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded-xl sm:rounded-[14px] bg-[#FEF0EA] flex-none">
                  <?php if ( ! empty( $row['icon'] ) ) : ?>
                  <img src="<?php echo esc_url( $row['icon'] ); ?>" alt="<?php echo esc_attr( $row['title'] ); ?>" class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8" />
                  <?php endif; ?>
                </span>
                <span class="font-serif font-bold text-xl sm:text-2xl text-ink-900"><?php echo esc_html( $row['title'] ); ?></span>
              </div>
            </td>
            <td class="block md:table-cell px-5 sm:px-6 md:px-8 pb-5 pt-1 md:py-6 text-base sm:text-lg leading-normal md:leading-[26px] text-ink-body"><?php echo esc_html( $row['description'] ); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================
     SECTION 5 — WHEN TO SEEK HELP
========================================================= -->
<?php if ( $section_5 ) : ?>
<section id="mh-seek" class="relative section section--white" data-reveal>
  <div class="absolute top-0 -left-[15%] md:-left-[10%] w-[300px] h-[300px] md:w-[500px] md:h-[500px] rounded-full border-[30px] md:border-[50px] border-surface-cream pointer-events-none z-0"></div>

  <div class="container relative z-10 px-4 sm:px-6 lg:px-8 mx-auto max-w-[1280px]">
    <div class="max-w-[800px] mx-auto text-center mb-12 md:mb-16">
      <?php if ( ! empty( $section_5['kicker'] ) ) : ?>
      <p class="font-sans font-semibold text-xs tracking-[2px] uppercase text-brand-hover m-0"><?php echo esc_html( $section_5['kicker'] ); ?></p>
      <?php endif; ?>
      <h2 class="font-serif font-bold text-ink-900 mt-3 mb-6 text-3xl sm:text-4xl md:text-[48px] leading-[1.2]">
        <?php echo esc_html( $section_5['heading'] ); ?> <em class="italic text-brand-hover"><?php echo esc_html( $section_5['heading_highlight'] ); ?></em>
      </h2>
      <?php if ( ! empty( $section_5['lede'] ) ) : ?>
      <p class="text-base sm:text-lg text-ink-body max-w-[680px] mx-auto m-0 leading-relaxed"><?php echo esc_html( $section_5['lede'] ); ?></p>
      <?php endif; ?>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
      <?php if ( ! empty( $section_5['checklist_items'] ) ) : ?>
      <div class="lg:col-span-7 xl:col-span-8 flex flex-col gap-3.5">
        <?php foreach ( $section_5['checklist_items'] as $item ) : ?>
        <label class="group relative flex items-start gap-4 p-4 sm:p-5 bg-white border border-border-soft rounded-[16px] cursor-pointer transition-all duration-200 shadow-sm hover:border-border-active has-[:checked]:bg-[#FDF2F0] has-[:checked]:border-[#E3988C]">
          <input type="checkbox" class="peer sr-only form-checkbox mh-checklist-input" onchange="mhUpdateTally(this)" />
          <div class="mt-0.5 w-[24px] h-[24px] rounded-[6px] border border-gray-200 flex items-center justify-center bg-white peer-checked:bg-brand-primary peer-checked:border-brand-primary transition-all flex-none">
            <svg class="w-3.5 h-3.5 text-gray-300 peer-checked:text-white transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
          <span class="text-[15px] leading-relaxed text-ink-700 peer-checked:text-[#8C382A] peer-checked:font-medium transition-colors"><?php echo esc_html( $item['text'] ); ?></span>
        </label>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <div class="lg:col-span-5 xl:col-span-4 lg:sticky lg:top-24 flex flex-col gap-4">
        <div class="bg-brand-cream border border-border-soft rounded-[24px] p-6 sm:p-8 relative overflow-hidden shadow-sm">
          <div class="absolute -top-[10%] -right-[15%] w-[160px] h-[160px] sm:w-[180px] sm:h-[180px] rounded-full border-[18px] border-surface-peach pointer-events-none"></div>
          <div class="relative z-10">
            <p class="font-sans font-semibold text-[11px] tracking-[2px] uppercase text-brand-hover m-0"><?php echo esc_html( $section_5['tally_label'] ); ?></p>
            <div class="flex items-baseline gap-2 mt-3">
              <span id="mhTallyScore" class="font-serif font-bold text-[52px] sm:text-[58px] text-brand-primary leading-none">0</span>
              <span class="font-serif text-[22px] sm:text-[24px] text-ink-faint">of <?php echo esc_html( count( $section_5['checklist_items'] ?? array() ) ); ?></span>
            </div>
            <div class="h-[6px] w-full bg-[#EADFD8] rounded-full my-5 overflow-hidden relative">
              <div id="mhTallyProgress" class="absolute top-0 left-0 h-full bg-[#DFD0C7] rounded-full w-0 transition-all duration-300 ease-out"></div>
            </div>
            <p class="text-[14px] leading-[22px] text-ink-muted m-0"><?php echo esc_html( $section_5['tally_helper_text'] ); ?></p>
            <p class="text-[12px] leading-[22px] text-ink-muted/70 mt-3 mb-0"><?php echo esc_html( $section_5['tally_privacy_text'] ); ?></p>
          </div>
        </div>

        <div class="bg-brand-cream border border-border-soft rounded-[20px] p-5 flex items-start gap-4 shadow-sm">
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-[10px] bg-surface-peach flex-none mt-0.5">
            <svg class="w-5 h-5 text-brand-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line><path d="M12 14v4"></path><path d="M10 16h4"></path></svg>
          </span>
          <p class="text-[14px] leading-[22px] text-ink-900 m-0"><?php echo esc_html( $section_5['availability_note'] ); ?></p>
        </div>

        <button type="button" onclick="location.href='#mh-book'" class="w-full bg-brand-orange hover:bg-brand-primary-hover text-white font-sans font-bold text-[16px] py-4 px-8 rounded-full transition-all duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-3 group cursor-pointer">
          <span><?php echo esc_html( $section_5['button_text'] ); ?></span>
          <span class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors">
            <svg class="w-4 h-4 text-white transform group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </span>
        </button>
      </div>
    </div>

    <div class="mt-16" data-reveal>
      <?php if ( ! empty( $section_5['symptom_duration_note'] ) ) : ?>
      <p class="text-base sm:text-lg text-ink-muted leading-[28px] mb-8"><?php echo esc_html( $section_5['symptom_duration_note'] ); ?></p>
      <?php endif; ?>

      <div class="relative bg-ink-600 rounded-[24px] p-6 sm:p-8 md:p-10 lg:p-12 overflow-hidden flex flex-col md:flex-row items-start md:items-center justify-between gap-6 md:gap-8">
        <div class="absolute top-0 right-0 w-[50%] h-full bg-black/10 origin-bottom-left -skew-x-12 transform translate-x-20 pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-[30%] h-full bg-black/20 origin-bottom-left -skew-x-12 transform translate-x-10 pointer-events-none"></div>

        <div class="relative z-10 flex items-start gap-4 sm:gap-5 max-w-[600px]">
          <span class="inline-flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-[14px] bg-brand-focus flex-none shrink-0 mt-0.5">
            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" x2="9.17" y1="4.93" y2="9.17"></line><line x1="14.83" x2="19.07" y1="14.83" y2="19.07"></line><line x1="14.83" x2="19.07" y1="9.17" y2="4.93"></line><line x1="14.83" x2="18.36" y1="9.17" y2="5.64"></line><line x1="4.93" x2="9.17" y1="19.07" y2="14.83"></line></svg>
          </span>
          <div>
            <h4 class="font-serif font-bold text-xl sm:text-[22px] md:text-[24px] text-white m-0 mb-2"><?php echo esc_html( $section_5['crisis_title'] ); ?></h4>
            <p class="text-sm sm:text-[15px] leading-relaxed text-white/90 m-0"><?php echo esc_html( $section_5['crisis_text'] ); ?></p>
          </div>
        </div>

        <div class="relative z-10 flex-none w-full md:w-auto">
          <a href="tel:<?php echo esc_attr( $section_5['crisis_phone_number'] ); ?>" class="w-full md:w-auto inline-flex items-center justify-center bg-white hover:bg-surface-cream text-[#8F3420] font-sans font-bold text-[16px] py-3.5 sm:py-4 px-8 rounded-full transition-colors whitespace-nowrap">
            <?php echo esc_html( $section_5['crisis_button_text'] ); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================
     SECTION 6 — YOUTH MENTAL HEALTH
========================================================= -->
<?php if ( $section_6 ) : ?>
<section id="mh-youth" class="relative section section--peach">
  <div class="absolute -top-[10%] -right-[10%] w-[400px] h-[400px] md:w-[600px] md:h-[600px] rounded-full border-[50px] md:border-[80px] border-white/40 pointer-events-none z-0"></div>

  <div class="container relative" data-reveal>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center mb-12 sm:mb-16">
      <div class="lg:col-span-6 max-w-[624px]">
        <h2 class="font-serif font-bold text-ink-900 text-3xl sm:text-4xl lg:text-[44px] leading-[1.15] m-0">
          <?php echo esc_html( $section_6['heading'] ); ?> <em class="italic text-[#C14C37] font-serif"><?php echo esc_html( $section_6['heading_highlight'] ); ?></em>
        </h2>
        <?php if ( ! empty( $section_6['lede'] ) ) : ?>
        <p class="text-base sm:text-lg text-ink-muted mt-4 sm:mt-5 m-0 leading-relaxed"><?php echo esc_html( $section_6['lede'] ); ?></p>
        <?php endif; ?>
      </div>

      <?php if ( ! empty( $section_6['stats'] ) ) : ?>
      <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
        <?php foreach ( $section_6['stats'] as $i => $stat ) :
          $color = $i % 2 === 0 ? '#C14C37' : '#8C7A3E'; ?>
        <div class="bg-white rounded-[24px] p-6 sm:p-8 border border-black/5 shadow-sm flex flex-col justify-between">
          <p class="font-serif font-bold text-3xl md:text-[52px] leading-none m-0" style="color: <?php echo esc_attr( $color ); ?>;"><?php echo esc_html( $stat['stat_number'] ); ?></p>
          <p class="text-xs sm:text-[16px] leading-relaxed text-ink-muted mt-4 sm:mt-6 m-0"><?php echo esc_html( $stat['stat_description'] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>

    <?php if ( ! empty( $section_6['accordion_items'] ) ) : ?>
    <div class="border-t border-b border-[#E8DDD7] divide-y divide-[#E8DDD7] mb-12 sm:mb-16 mh-accordion">
      <?php foreach ( $section_6['accordion_items'] as $acc ) : ?>
      <div class="accordion-item">
        <button type="button" class="mh-accordion-trigger w-full flex items-center justify-between py-5 sm:py-6 bg-transparent border-0 cursor-pointer text-left group">
          <div class="flex items-center gap-4 sm:gap-6">
            <span class="font-serif text-xl md:text-[26px] text-[#D8C4BA] font-bold min-w-[36px]"><?php echo esc_html( $acc['number'] ); ?></span>
            <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-[12px]  text-white flex items-center justify-center flex-none">
    		<?php if ( ! empty( $acc['icon'] ) ) : ?>
        		<img src="<?php echo esc_url( $acc['icon'] ); ?>" alt="Icon" class="w-full h-full object-contain" />
    		<?php endif; ?>
		</div>
            <span class="font-serif font-bold text-lg sm:text-xl text-ink-900 group-hover:text-[#C14C37] transition-colors"><?php echo esc_html( $acc['title'] ); ?></span>
          </div>
          <span class="accordion-icon w-8 h-8 rounded-full border border-black/10 flex items-center justify-center text-[#A93E28] group-hover:border-black/30 transition-all duration-300">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </span>
        </button>
        <div class="accordion-content hidden pl-[48px] sm:pl-[60px] pr-4 pb-6">
          <p class="text-lg md:text-xl leading-relaxed text-ink-muted m-0"><?php echo esc_html( $acc['description'] ); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php if ( ! empty( $section_6['cta_title'] ) ) : ?>
    <div class="bg-white rounded-[24px] p-6 sm:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 border border-black/5 shadow-sm">
      <div class="flex items-start sm:items-center gap-4 sm:gap-5">
        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-[16px] bg-[#FDF2F0] text-[#C14C37] flex items-center justify-center flex-none mt-0.5 sm:mt-0">
          <svg class="w-6 h-6 sm:w-7 sm:h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
        </div>
        <div>
          <h3 class="font-serif font-bold text-lg md:text-[22px] text-ink-900 m-0 mb-1"><?php echo esc_html( $section_6['cta_title'] ); ?></h3>
          <p class="text-xs sm:text-lg text-ink-muted m-0 max-w-[718px] leading-relaxed"><?php echo esc_html( $section_6['cta_text'] ); ?></p>
        </div>
      </div>
      <div class="flex-none w-full md:w-auto">
        <button type="button" onclick="location.href='#mh-book'" class="w-full md:w-auto bg-[#C14C37] hover:bg-[#A83E2B] text-white font-sans font-bold text-[15px] py-3.5 px-7 rounded-full transition-colors whitespace-nowrap shadow-sm cursor-pointer"><?php echo esc_html( $section_6['cta_button_text'] ); ?></button>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================
     SECTION 7 — SUBSTANCE ABUSE
========================================================= -->
<?php if ( $section_7 ) : ?>
<section id="mh-substance" class="relative section bg-ink-600 overflow-hidden">
  <div class="absolute -bottom-[10%] -left-[5%] w-[300px] h-[300px] md:w-[400px] md:h-[400px] rounded-full border-[20px] md:border-[30px] border-white/5 pointer-events-none z-0"></div>

  <div class="container relative z-10" data-reveal>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <div class="max-w-[600px]">
        <h2 class="font-serif font-bold text-white text-[32px] sm:text-[40px] lg:text-[46px] leading-[1.15] mb-6">
          <?php echo esc_html( $section_7['heading'] ); ?> <br class="hidden sm:block" />
          <em class="italic text-[#D46C56] font-serif"><?php echo esc_html( $section_7['heading_highlight'] ); ?></em>
        </h2>

        <?php if ( ! empty( $section_7['paragraph_1'] ) ) : ?>
        <div class="text-[15px] sm:text-[16px] leading-[28px] text-[#E5D7D3] mb-5 font-sans"><?php echo wp_kses_post( $section_7['paragraph_1'] ); ?></div>
        <?php endif; ?>
        <?php if ( ! empty( $section_7['paragraph_2'] ) ) : ?>
        <div class="text-[15px] sm:text-[16px] leading-[28px] text-[#E5D7D3] mb-10 font-sans"><?php echo wp_kses_post( $section_7['paragraph_2'] ); ?></div>
        <?php endif; ?>

        <?php if ( ! empty( $section_7['tags'] ) ) : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <?php foreach ( $section_7['tags'] as $tag ) : ?>
    		<div class="flex items-center gap-3.5 bg-white/5 border border-white/10 rounded-full p-4 transition-colors hover:bg-white/10">
        
        		<?php ?>
        		<?php if ( ! empty( $tag['icon'] ) ) : ?>
            		<img src="<?php echo esc_url( $tag['icon'] ); ?>" alt="Tag Icon" class="w-8 h-8 object-contain" />
        		<?php endif; ?>
        
        		<?php ?>
        		<span class="text-[13px] sm:text-[16px] text-[#F8EBE2] font-semibold">
            		<?php echo esc_html( $tag['text'] ); ?>
        		</span>
        
    		</div>
		<?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>

      <div class="relative">
        <div class="bg-white rounded-[24px] overflow-hidden relative shadow-2xl border-l-[6px] border-[#C24C33] p-7 sm:p-9">
          <div class="absolute -top-[40px] -right-[40px] w-[140px] h-[140px] rounded-full border-[12px] border-[#FAF3F0] pointer-events-none"></div>
          <div class="relative z-10">
            <h3 class="font-serif font-bold text-[22px] sm:text-[26px] text-[#9A4636] mb-3"><?php echo esc_html( $section_7['warning_title'] ); ?></h3>
            <p class="text-[14px] sm:text-[18px] leading-[26px] text-gray-600 mb-7"><?php echo esc_html( $section_7['warning_text'] ); ?></p>
            <?php if ( ! empty( $section_7['warning_image'] ) ) : ?>
            <div class="rounded-[16px] overflow-hidden bg-gray-100 lg:h-[329px] w-full">
              <img src="<?php echo esc_url( $section_7['warning_image'] ); ?>" alt="<?php echo esc_attr( $section_7['warning_title'] ); ?>" class="w-full h-full object-cover" />
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================
     SECTION 8 — FOR RELATIVES
========================================================= -->
<?php if ( $section_8 ) : ?>
<section id="mh-relatives" class="relative section section--peach">
  <div class="container" data-reveal>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      <div class="flex flex-col gap-4">
        <div class="mb-4">
          <?php if ( ! empty( $section_8['kicker'] ) ) : ?>
          <p class="font-sans font-semibold text-xs tracking-[2px] uppercase text-[#A85848] m-0 mb-3"><?php echo esc_html( $section_8['kicker'] ); ?></p>
          <?php endif; ?>
          <h2 class="font-serif font-bold text-ink-900 text-3xl sm:text-4xl lg:text-[42px] leading-[1.15] m-0">
            <?php echo esc_html( $section_8['heading'] ); ?> <em><?php echo esc_html( $section_8['heading_highlight'] ); ?></em>
          </h2>
          <?php if ( ! empty( $section_8['lede'] ) ) : ?>
          <p class="text-[15px] sm:text-[16px] text-ink-muted mt-4 m-0 leading-relaxed max-w-[580px]"><?php echo esc_html( $section_8['lede'] ); ?></p>
          <?php endif; ?>
        </div>

        <?php if ( ! empty( $section_8['relative_tips'] ) ) : ?>
        <?php foreach ( $section_8['relative_tips'] as $i => $tip ) : ?>
        <div id="rel-card-<?php echo esc_attr( $i ); ?>" class="relative_tab_card mh-relative-card group cursor-pointer bg-white border border-[#E8DDD7] border-l-4 <?php echo $i === 0 ? 'border-l-[#A85848]' : 'border-l-transparent'; ?> rounded-[20px] p-5 sm:p-6 transition-all duration-300 shadow-sm"
             data-image="<?php echo esc_url( $tip['image'] ?? '' ); ?>" data-title="<?php echo esc_attr( $tip['title'] ); ?>">
          <div class="flex items-start gap-4">
            <span class="inline-flex items-center justify-center w-11 h-11 rounded-[14px] bg-[#FDF2F0] text-[#A85848] flex-none">
    <?php if ( ! empty( $tip['icon'] ) ) : ?>
        <img src="<?php echo esc_url( $tip['icon'] ); ?>" alt="Tip Icon" class="w-5 h-5 object-contain" />
    <?php endif; ?>
</span>
            <div>
              <h3 class="relative_tab_title font-serif font-bold text-lg sm:text-xl <?php echo $i === 0 ? 'text-[#A85848]' : 'text-ink-900'; ?> m-0 mb-1.5 transition-colors duration-300"><?php echo esc_html( $tip['title'] ); ?></h3>
              <p class="text-[14px] md:text-[18px] text-ink-muted m-0"><?php echo esc_html( $tip['description'] ); ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>

      <?php if ( ! empty( $section_8['relative_tips'][0] ) ) :
        $first = $section_8['relative_tips'][0]; ?>
      <div class="lg:sticky lg:top-24 lg:self-start flex flex-col gap-4">
        <div class="relative bg-white rounded-[24px] overflow-hidden shadow-md border border-[#E8DDD7] aspect-[4/4.5] lg:aspect-auto lg:h-[520px] flex items-end">
          <img id="mhRelativesActiveImg" src="<?php echo esc_url( $first['image'] ?? '' ); ?>" alt="Supportive relative" class="absolute inset-0 w-full h-full object-cover transition-all duration-500" />
          <div class="relative z-10 w-full m-4 sm:m-6 p-6 rounded-[20px] bg-[#3A1811DB] backdrop-blur-md border border-white/10">
            <h4 id="mhRelativesActiveTitle" class="text-white font-serif font-bold text-xl sm:text-[22px] mb-2 m-0"><?php echo esc_html( $first['title'] ); ?></h4>
            <p class="text-xs sm:text-sm text-white/80 m-0 leading-relaxed"><?php echo esc_html( $section_8['image_helper_text'] ); ?></p>
          </div>
        </div>

        <div class="bg-white rounded-[20px] p-4 sm:p-5 flex items-center gap-4 border border-[#E8DDD7] shadow-sm">
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-[12px] bg-[#FDF2F0] text-[#A85848] flex-none">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          </span>
          <p class="text-[13px] sm:text-[14px] text-ink-900 m-0 leading-snug">
            <?php echo esc_html( str_replace( $section_8['emergency_number'], '', $section_8['emergency_note'] ) ); ?>
            <strong class="font-bold"><?php echo esc_html( $section_8['emergency_number'] ); ?></strong>.
          </p>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- =========================================================
     SECTION 9 — BOOK APPOINTMENT
========================================================= -->
<?php if ( $section_9 ) : ?>
<section id="mh-book" class="section section--white" data-reveal>
  <div class="container mx-auto">
    <div class="bg-surface-peach rounded-[32px] overflow-hidden p-8 sm:p-12 lg:p-16 relative">
      
      <!-- Replaced Grid with Flexbox for optimal space distribution -->
      <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8 lg:gap-12">
        
        <!-- Left Content: flex-1 takes up ALL remaining space -->
        <div class="flex-1 min-w-0 w-full">
          <div class="w-full mb-8">
            <?php if ( ! empty( $section_9['kicker'] ) ) : ?>
            <p class="font-sans font-semibold text-xs tracking-[2px] uppercase text-[#A85848] m-0 mb-3"><?php echo esc_html( $section_9['kicker'] ); ?></p>
            <?php endif; ?>
            <h2 class="font-serif font-bold text-ink-900 text-2xl sm:text-3xl lg:text-[40px] leading-[1.2] m-0">
              <?php echo esc_html( $section_9['heading'] ); ?> <em><?php echo esc_html( $section_9['heading_highlight'] ); ?></em>
            </h2>
          </div>

          <div class="lg:max-w-3xl lg:pr-8">
            <?php if ( ! empty( $section_9['paragraph_1'] ) ) : ?>
            <div class="text-[15px] sm:text-lg leading-[26px] text-ink-muted m-0 mb-4"><?php echo wp_kses_post( $section_9['paragraph_1'] ); ?></div>
            <?php endif; ?>
            <?php if ( ! empty( $section_9['paragraph_2'] ) ) : ?>
            <div class="text-[15px] sm:text-lg leading-[26px] text-ink-muted m-0 mb-8"><?php echo wp_kses_post( $section_9['paragraph_2'] ); ?></div>
            <?php endif; ?>

            <button type="button" onclick="location.href='#mh-book'" class="bg-[#C14C37] hover:bg-[#A83E2B] text-white font-sans font-bold text-[16px] py-4 px-8 rounded-full transition-all duration-200 shadow-md hover:shadow-lg inline-flex items-center gap-3 cursor-pointer group">
              <span><?php echo esc_html( $section_9['button_text'] ); ?></span>
              <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/20 group-hover:bg-white/30 transition-colors">
                <svg class="w-3.5 h-3.5 text-white transform group-hover:translate-x-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
              </span>
            </button>
          </div>
        </div>

        <!-- Right Content (Image): Fixed max width, flex-shrink-0 prevents it from getting squished -->
        <?php if ( ! empty( $section_9['image'] ) ) : ?>
        <div class="w-full max-w-[300px] flex-shrink-0 mx-auto lg:mx-0 flex justify-center lg:justify-end">
          <img src="<?php echo esc_url( $section_9['image'] ); ?>" alt="Meditating brain illustration representing mental well-being" class="w-full h-auto object-contain drop-shadow-sm rounded-2xl" />
        </div>
        <?php endif; ?>
        
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
	
<!-- =========================================================
     SECTION 10 — FAQ
========================================================= -->
<?php if ( $section_10 ) : ?>
<section id="mh-faq" class="section section--white py-16 lg:py-24" data-reveal>
  <div class="container mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
      
      <!-- Left Column (Sticky) -->
      <div class="lg:col-span-5 self-start lg:sticky lg:top-[120px]" data-reveal>
        <h2 class="font-serif font-bold text-ink-900 text-4xl sm:text-5xl lg:text-[56px] leading-[1.1] m-0">
          <?php echo esc_html( $section_10['heading'] ); ?>
        </h2>
        
        <?php if ( ! empty( $section_10['lede'] ) ) : ?>
        <p class="text-base sm:text-lg leading-[1.6] text-[#555555] mt-6 mb-0 max-w-[420px]">
          <?php echo esc_html( $section_10['lede'] ); ?>
        </p>
        <?php endif; ?>

        <!-- Main Outline Button -->
        <button type="button" onclick="location.href='#mh-book'" class="mt-8 inline-flex items-center justify-center bg-transparent hover:bg-[#FFF8F5] text-[#C24C33] border border-[#C24C33] font-sans font-semibold text-[15.5px] py-3.5 px-8 rounded-full transition-all duration-200 cursor-pointer">
          <?php echo esc_html( $section_10['button_text'] ); ?>
        </button>

        <!-- Side Card Block -->
        <div class="mt-12 bg-white rounded-[24px] p-8 sm:p-10 border border-[#F2E4DC]">
          <div class="flex items-center gap-5 mb-6">
            <div class="flex flex-shrink-0">
              <span class="w-10 h-10 rounded-full border-2 border-white -ml-3 first:ml-0" style="background-color: #e4e9e4;"></span>
              <span class="w-10 h-10 rounded-full border-2 border-white -ml-3" style="background-color: #e0f2d8;"></span>
              <span class="w-10 h-10 rounded-full border-2 border-white -ml-3" style="background-color: #f6dbd5;"></span>
              <span class="w-10 h-10 rounded-full border-2 border-white -ml-3" style="background-color: #fbe5d6;"></span>
            </div>
            <h3 class="font-serif font-bold text-lg sm:text-[20px] leading-tight text-[#C24C33] m-0">
              <?php echo esc_html( $section_10['side_card_title'] ); ?>
            </h3>
          </div>
          
          <p class="text-[15.5px] sm:text-[16.5px] leading-[1.6] text-[#555555] m-0 mb-8">
            <?php echo esc_html( $section_10['side_card_text'] ); ?>
          </p>
          
          <button type="button" onclick="location.href='#mh-book'" class="inline-flex items-center gap-2 bg-[#C24C33] hover:bg-[#A83E2B] text-white font-sans font-bold text-[15px] py-3.5 px-7 rounded-full transition-all duration-200 cursor-pointer group">
            <span class="underline underline-offset-4 decoration-[1.5px]"><?php echo esc_html( $section_10['side_card_button_text'] ); ?></span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-1 transform group-hover:translate-x-0.5 transition-transform">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </button>
        </div>
      </div>

      <!-- Right Column (FAQ List) -->
      <?php if ( ! empty( $section_10['faq_items'] ) ) : ?>
      <div class="lg:col-span-7 faq-list flex flex-col gap-4 mt-8 lg:mt-0" id="mhFaqList" data-reveal>
        <?php foreach ( $section_10['faq_items'] as $fi => $faq ) : ?>
        
        <!-- FAQ Wrapper: Uses [&.is-open] to dynamically change background when active -->
        <div class="faq-item <?php echo $fi === 0 ? ' is-open' : ''; ?> bg-white [&.is-open]:bg-[#FFF8F5] border border-[#F2E4DC] rounded-[24px] overflow-hidden transition-colors duration-300">
          
          <button type="button" class="faq-item__trigger flex items-center justify-between w-full text-left p-6 sm:p-8 cursor-pointer group">
            <span class="font-serif font-bold text-[19px] sm:text-[22px] text-ink-900 pr-6 leading-[1.3]">
              <?php echo esc_html( $faq['question'] ); ?>
            </span>
            <span class="faq-icon text-[#C24C33] flex-shrink-0 relative w-6 h-6 flex items-center justify-center">
              <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round">
                <!-- Vertical line scales away to 0 when open, leaving just the minus -->
                <line x1="12" y1="5" x2="12" y2="19" class="icon-vertical transition-transform duration-300 <?php echo $fi === 0 ? 'scale-y-0' : 'group-[.is-open]:scale-y-0'; ?>" />
                <line x1="5" y1="12" x2="19" y2="12" class="icon-horizontal" />
              </svg>
            </span>
          </button>
          
          <div class="faq-item__panel px-6 sm:px-8 pb-6 sm:pb-8">
            <div class="faq-item__panel-inner text-[16px] sm:text-[17px] leading-[1.7] text-[#555555]">
              <?php echo wp_kses_post( $faq['answer'] ); ?>
            </div>
          </div>
          
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
      
    </div>
  </div>
</section>
<?php endif; ?>

</main>


<?php get_footer(); ?>