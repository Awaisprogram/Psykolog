<?php
/* Template Name: Anxiety */
get_header();

$s1  = get_field('section_1');
$s2  = get_field('section_2');
$s3  = get_field('section_3');
$s4  = get_field('section_4');
$s5  = get_field('section_5');
$s6  = get_field('section_6');
$s7  = get_field('section_7');
$s8  = get_field('section_8');
$s9  = get_field('section_9');
$s10 = get_field('section_10');
$s11 = get_field('section_11');
$s12 = get_field('section_12');
$s13 = get_field('section_13');
$s14 = get_field('section_14');


function anxiety_icon_svg($key) {
    $icons = [
        'activity'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
        'avoidance'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 0 5.814-5.518l2.74-1.22m0 0-3.75-.625m3.75.625v3.75"/>',
        'screen'       => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/>',
        'caffeine'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119.993Z"/>',
        'sleep'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/>',
        'diary'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>',
        'talk'         => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a.75.75 0 0 1-.816-.957 5.86 5.86 0 0 0 .502-1.341c-.702-.653-1.125-1.527-1.125-2.472C4 11.644 8.03 8 13 8s9 3.644 9 8.25Z"/>',
        'location'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>',
        'calendar'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>',
        'check-circle' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
        'chat'         => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a.75.75 0 01-.816-.957 5.87 5.87 0 00.502-1.341C4.394 17.02 4 15.078 4 12c0-4.556 4.03-8.25 9-8.25s9 3.644 9 8.25z"/>',
        'filter'       => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75"/>',
        'video'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"/>',
        'stopwatch'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>',
        'clipboard'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
        'clock'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>',
        'shield'       => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/>',
        'sparkle'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-5.422-1.59-1.59"/>',
    ];
    return $icons[$key] ?? $icons['activity'];
}
?>
<main>

  <!-- SECTION 1: HERO -->
  <section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[626px]">
    <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
      <?php if (!empty($s1['hero_image'])): ?>
        <img src="<?php echo esc_url($s1['hero_image']); ?>" alt="<?php echo esc_attr($s1['title']); ?>" class="absolute inset-0 w-full h-full object-cover object-[100%_50%]">
      <?php endif; ?>
      <span class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent lg:hidden"></span>
    </span>
    <div class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
      <div class="max-w-[1312px] mx-auto">
        <div class="max-w-full lg:max-w-[52%]">
          <div class="inline-flex items-center gap-[9px] bg-white/[.66] backdrop-blur-2xl backdrop-saturate-150 border border-white/[.82] rounded-full px-5 py-[9px]">
            <span class="text-[#CE5A43] text-[13px] leading-[13px]">✳</span>
            <span class="font-sans font-semibold text-xs leading-4 tracking-[2px] uppercase text-brand-brown whitespace-nowrap"><?php echo esc_html($s1['badge_text']); ?></span>
          </div>
          <h1 class="font-serif font-bold text-brand-darkest mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[56px]"><?php echo esc_html($s1['title']); ?></h1>
          <p class="text-lg lg:text-xl leading-[1.6] text-[#33170F] mt-[22px] mb-0"><?php echo esc_html($s1['lede']); ?></p>
        </div>
      </div>
    </div>
  </section>

  <div class="bg-white pt-10">
    <div class="container max-w-[1360px]">
      <nav class="ps-jump flex items-center gap-0.5 bg-[#FDF6F2] rounded-full px-3.5 py-2 overflow-x-auto">
        <a href="#mh-what" class="font-sans font-bold text-[15px] leading-5 whitespace-nowrap text-brand-hover bg-brand-active rounded-full px-[18px] py-2.5">What is Mental Health</a>
        <a href="#mh-conditions" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Common Conditions</a>
        <a href="#mh-activity" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Physical Activity</a>
        <a href="#mh-seek" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">When to Seek Help</a>
        <a href="#mh-youth" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Youth Mental Health</a>
        <a href="#mh-substance" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Substance Abuse</a>
        <a href="#mh-relatives" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">For Relatives</a>
        <a href="#mh-faq" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">FAQ</a>
      </nav>
    </div>
  </div>

  <!-- SECTION 2: WHAT IS ANXIETY -->
  <section id="mh-what" class="section section--white" data-reveal>
    <div class="container max-w-[1360px] mx-auto px-4 md:px-8">
      <div class="grid grid-cols-1 gap-12 items-start lg:grid-cols-[689px_571px] lg:gap-[46px]">
        <div>
          <h2 class="font-serif font-bold text-brand-heading m-0 text-[32px] leading-[1.2] md:text-[40px] lg:text-[48px]"><?php echo esc_html($s2['heading']); ?></h2>
          <div class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0"><?php echo $s2['paragraph_1']; ?></div>
          <div class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0"><?php echo $s2['paragraph_2']; ?></div>
        </div>
        <div class="lg:sticky lg:top-[148px]">
          <div class="relative overflow-hidden bg-[#A93E28] rounded-3xl px-8 py-[34px_61px]">
            <p class="relative textt-[15px] lg:text-[18px] font-extrabold text-[13px] tracking-[2px] uppercase text-white m-0"><?php echo esc_html($s2['card_kicker']); ?></p>
            <div class="relative mt-8">
              <div class="flex items-start gap-5">
                <span class="inline-flex items-center justify-center w-12 h-12 flex-none bg-[#F5E6E3] rounded-xl text-[#A94432]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                </span>
                <div>
                  <span class="block font-serif font-bold text-[20x] lg:text-[24px] leading-none text-white mb-2"><?php echo esc_html($s2['stress_title']); ?></span>
                  <span class="block text-[16px] lg:text-[18px] leading-snug text-white"><?php echo esc_html($s2['stress_text']); ?></span>
                </div>
              </div>
              <hr class="border-t border-white/30 my-8 w-full">
              <div class="flex items-start gap-5">
                <span class="inline-flex items-center justify-center w-12 h-12 flex-none bg-[#F5E6E3] rounded-xl text-[#A94432]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"/><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9h4.5a3 3 0 0 1 3 3v0a3 3 0 0 1-3 3h-4.5a3 3 0 0 1-3-3v0a3 3 0 0 1 3-3Z"/></svg>
                </span>
                <div>
                  <span class="block font-serif font-bold text-[20x] lg:text-[24px] leading-none text-white mb-2"><?php echo esc_html($s2['anxiety_title']); ?></span>
                  <span class="block text-[16px] lg:text-[18px] leading-snug text-white"><?php echo esc_html($s2['anxiety_text']); ?></span>
                </div>
              </div>
            </div>
            <p class="relative text-[16px] lg:text-[18px] text-white mt-10 mb-0"><?php echo esc_html($s2['card_bottom_text']); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: SYMPTOMS -->
  <section id="mh-conditions" class="section bg-brand-cream">
    <div class="container" data-reveal>
      <div class="max-w-[1360px] mx-auto text-center">
        <h2 class="font-serif font-bold text-brand-heading m-0 text-[30px] leading-[39px] md:text-[36px] md:leading-[46px] lg:text-[44px] lg:leading-[56px]"><?php echo esc_html($s3['heading']); ?></h2>
        <p class="text-xl leading-[31px] text-brand-gray mt-5 mb-0"><?php echo esc_html($s3['lede']); ?></p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[18px] mt-12">
        <?php if (!empty($s3['symptoms'])): foreach ($s3['symptoms'] as $sym): ?>
          <a href="#" class="group flex flex-col justify-between h-full bg-white border border-[#f2e4dc] rounded-[20px] p-[26px_24px] translate-y-0 shadow-none transition-all duration-300 hover:bg-gray-50 hover:border-brand-hover hover:-translate-y-2 hover:shadow-lg">
            <div>
              <span class="inline-flex items-center justify-center w-11 h-11 rounded-[12px]" style="background-color: <?php echo esc_attr($sym['bg_color']); ?>">
                <img src="<?php echo esc_url($sym['icon']); ?>" alt="<?php echo esc_attr($sym['title']); ?>" class="w-full h-full">
              </span>
              <span class="block font-serif font-bold text-xl leading-[29px] text-brand-heading mt-6"><?php echo esc_html($sym['title']); ?></span>
              <span class="block text-base leading-6 text-brand-gray mt-2.5"><?php echo esc_html($sym['description']); ?></span>
            </div>
          </a>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- SECTION 4: DIAGNOSTIC CRITERIA -->
  <section class="section">
    <div class="container">
      <div class="relative overflow-hidden rounded-[32px] bg-ink-600 p-6 sm:p-10 lg:p-12 text-white">
        <div class="pointer-events-none absolute -top-16 -right-24 w-[300px] h-[300px] border-[26px] border-[#F0936717] rounded-full"></div>
        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-stretch">
          <div class="flex flex-col justify-between">
            <div>
              <h2 class="font-serif font-bold text-3xl sm:text-4xl lg:text-[40px] leading-[54px] text-white"><?php echo esc_html($s4['heading']); ?><br><span class="text-brand-focus"><?php echo esc_html($s4['heading_highlight']); ?></span></h2>
              <p class="mt-3 text-base sm:text-[17px] leading-relaxed text-white/80 font-sans"><?php echo esc_html($s4['paragraph']); ?></p>
            </div>
            <?php if (!empty($s4['image'])): ?>
              <div class="mt-4 overflow-hidden rounded-[24px]">
                <img src="<?php echo esc_url($s4['image']); ?>" alt="" class="w-full h-64 lg:h-[276px] object-cover rounded-[24px]">
              </div>
            <?php endif; ?>
          </div>
          <div class="bg-[#FFFFFF0B] border border-white/12 rounded-3xl p-4 flex flex-col justify-center">
            <ul class="divide-y divide-white/10 text-sm md:text-[16px] font-sans text-white/90">
              <?php if (!empty($s4['criteria_items'])): foreach ($s4['criteria_items'] as $item): ?>
                <li class="flex items-center gap-4 py-3.5 first:pt-0 last:pb-0">
                  <span class="flex-none w-7 h-7 rounded-full bg-[#F0936733] flex items-center justify-center">
                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                  </span>
                  <span><?php echo esc_html($item['text']); ?></span>
                </li>
              <?php endforeach; endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: TYPES OF ANXIETY TABLE -->
  <section id="mh-activity" class="section bg-brand-cream" data-reveal>
  <div class="container max-w-[1360px]">
    <h2 class="h2"><?php echo esc_html($s5['heading']); ?></h2>
    <p class="text-lg md:text-xl leading-[30px] text-ink-body mt-5 mb-0"><?php echo esc_html($s5['lede']); ?></p>
    
    <div class="mt-8 md:mt-14 bg-white rounded-[24px] overflow-hidden border border-border-soft shadow-[0px_18px_44px_-30px_#5C2A204D]">
      
      <div class="block md:hidden divide-y divide-border-soft">
        <?php if (!empty($s5['rows'])): foreach ($s5['rows'] as $row): ?>
          <div class="p-6 transition-colors hover:bg-surface-cream/50">
            <div class="flex items-center gap-4 mb-3">
              <span class="inline-flex items-center justify-center w-12 h-12 rounded-[14px] bg-[#FEF0EA] flex-none">
                <img src="<?php echo esc_url($row['icon']); ?>" alt="<?php echo esc_attr($row['title']); ?>" class="w-6 h-6">
              </span>
              <div>
                <span class="block text-[10px] font-sans font-bold tracking-[1.5px] uppercase text-ink-600 mb-0.5">What Improves</span>
                <h3 class="font-serif font-bold text-xl text-ink-900 leading-tight"><?php echo esc_html($row['title']); ?></h3>
              </div>
            </div>
            <div class="mt-4">
              <span class="block text-[10px] font-sans font-bold tracking-[1.5px] uppercase text-[#f09367] mb-1">How It Helps</span>
              <p class="text-base leading-relaxed text-ink-body"><?php echo esc_html($row['description']); ?></p>
            </div>
          </div>
        <?php endforeach; endif; ?>
      </div>

      <div class="hidden md:block overflow-x-auto">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-ink-600">
              <th class="px-6 md:px-8 py-6 font-sans font-bold text-[12px] tracking-[1.5px] uppercase text-white w-[35%] md:w-[32%]">WHAT IMPROVES</th>
              <th class="px-6 md:px-8 py-6 font-sans font-bold text-[12px] tracking-[1.5px] uppercase text-[#f09367] w-[65%] md:w-[68%]">HOW IT HELPS</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-border-soft">
            <?php if (!empty($s5['rows'])): foreach ($s5['rows'] as $row): ?>
              <tr class="hover:bg-surface-cream/50 transition-colors hover:border-l-3 hover:border-l-brand-hover">
                <td class="px-6 md:px-8 py-6">
                  <div class="flex items-center gap-4">
                    <span class="inline-flex items-center justify-center w-14 h-14 md:w-16 md:h-16 rounded-[14px] bg-[#FEF0EA] flex-none">
                      <img src="<?php echo esc_url($row['icon']); ?>" alt="<?php echo esc_attr($row['title']); ?>" class="w-7 h-7 md:w-8 md:h-8">
                    </span>
                    <span class="font-serif font-bold text-xl md:text-2xl text-ink-900"><?php echo esc_html($row['title']); ?></span>
                  </div>
                </td>
                <td class="px-6 md:px-8 py-6 text-base md:text-lg leading-[26px] text-ink-body"><?php echo esc_html($row['description']); ?></td>
              </tr>
            <?php endforeach; endif; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</section>
  <!-- SECTION 6: WHY ANXIETY DEVELOPS + PANIC ATTACK -->
  <section class="section section--white">
    <div class="container">
      <div class="text-center max-[1066px] mx-auto mb-16 lg:mb-20">
        <h2 class="h2"><?php echo esc_html($s6['heading']); ?> <em><?php echo esc_html($s6['heading_highlight']); ?></em></h2>
        <p class="text-[17px] md:text-xl leading-[1.6] text-[#5B5B5B] mt-5"><?php echo esc_html($s6['lede']); ?></p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[45%_52%] gap-12 items-center">
        <div class="w-full">
          <?php if (!empty($s6['image'])): ?>
            <img src="<?php echo esc_url($s6['image']); ?>" alt="" class="w-full h-auto aspect-square lg:h-[500px] object-cover rounded-[32px]">
          <?php endif; ?>
        </div>
        <div class="flex flex-col gap-6 lg:gap-8">
          <?php if (!empty($s6['causes'])): foreach ($s6['causes'] as $cause): ?>
            <div class="flex items-start gap-5">
              <div class="w-[56px] h-[56px] flex-none">
                <?php if (!empty($cause['image'])): ?><img src="<?php echo esc_url($cause['image']); ?>" alt=""><?php endif; ?>
              </div>
              <p class="text-[16px] md:text-[18px] leading-[1.6] text-[#5B5B5B] mt-1 mb-0"><?php echo esc_html($cause['text']); ?></p>
            </div>
          <?php endforeach; endif; ?>
        </div>
      </div>

      <div class="h-24"></div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <div class="order-2 lg:order-1">
          <h2 class="h2"><?php echo esc_html($s6['panic_heading']); ?></h2>
          <div class="text-[17px] md:text-xl leading-[1.6] text-[#5B5B5B] mb-6 mt-[16px] space-y-4">
            <?php echo $s6['panic_paragraph_1']; ?>
            <?php echo $s6['panic_paragraph_2']; ?>
          </div>
        </div>
        <div class="w-full order-1 lg:order-2">
          <?php if (!empty($s6['panic_image'])): ?>
            <img src="<?php echo esc_url($s6['panic_image']); ?>" alt="" class="w-full h-auto aspect-square lg:h-[500px] object-cover rounded-[32px]">
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: RISK FACTORS -->
  <section class="section section--white">
    <div class="container">
      <div class="text-center mb-16 lg:mb-20">
        <h2 class="h2"><?php echo esc_html($s7['heading']); ?></h2>
        <p class="font-sans text-[#595959] text-[16px] md:text-[20px] leading-[1.6] max-w-[1312px] mx-auto mt-5 mb-0"><?php echo esc_html($s7['lede']); ?></p>
      </div>
      <div class="flex flex-col border-b border-gray-100">
        <?php if (!empty($s7['risk_items'])): foreach ($s7['risk_items'] as $risk): ?>
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-[595px_682px] gap-4 md:gap-8 py-8 md:py-10 border-t border-[#F2E4DC] items-center cursor-pointer transition-all duration-200 border-l-4 border-l-transparent hover:bg-[#FFF7F3] hover:border-l-[#5C2A20] hover:pl-2">
            <div class="flex items-center gap-5">
              <div class="w-[46px] h-[46px] rounded-full bg-[#FCEBE8] flex items-center justify-center text-[#DF7A66] flex-none">
                <?php if (!empty($risk['image'])): ?><img src="<?php echo esc_url($risk['image']); ?>" alt="" class="w-5 h-5"><?php endif; ?>
              </div>
              <h3 class="font-serif font-semibold text-[20px] md:text-[22px] text-[#1A1A1A] m-0"><?php echo esc_html($risk['title']); ?></h3>
            </div>
            <div>
              <p class="font-sans text-[16px] md:text-xl leading-[1.6] text-[#5B5B5B] m-0"><?php echo esc_html($risk['description']); ?></p>
            </div>
          </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- SECTION 8: TREATMENT -->
  <section class="section bg-[#FFF7F3]">
    <div class="container">
      <div class="mb-[32px]">
        <h2 class="h2"><?php echo esc_html($s8['heading']); ?></h2>
        <p class="text-[16px] md:text-[20px] leading-[1.6] text-[#666666] m-0 mt-[16px]"><?php echo esc_html($s8['lede']); ?></p>
      </div>
      <div class="flex flex-col gap-6">
        <?php if (!empty($s8['treatments'])): foreach ($s8['treatments'] as $t): ?>
          <div class="group cursor-pointer bg-white rounded-[24px] p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-8 shadow-[0_4px_24px_rgba(0,0,0,0.02)]">
            <div class="flex-1 w-full">
              <div class="flex items-center gap-4 mb-[22px]">
                <div class="w-10 h-10"><?php if (!empty($t['icon'])): ?><img src="<?php echo esc_url($t['icon']); ?>" alt=""><?php endif; ?></div>
                <h3 class="font-serif font-bold text-[#241C19] text-[20px] md:text-[24px] m-0"><?php echo esc_html($t['title']); ?></h3>
              </div>
              <p class="text-[15px] md:text-[20px] leading-[1.6] text-[#5B5B5B] m-0"><?php echo esc_html($t['description']); ?></p>
            </div>
            <div class="w-full md:w-[240px] lg:w-[280px] h-[200px] flex-none flex justify-center md:justify-end">
              <?php if (!empty($t['image'])): ?><img src="<?php echo esc_url($t['image']); ?>" alt="" class="w-full h-full object-contain object-right transition-transform duration-300 ease-in-out group-hover:rotate-6"><?php endif; ?>
            </div>
          </div>
        <?php endforeach; endif; ?>
      </div>

      <div class="mt-12 bg-ink-600 rounded-[28px] p-6 lg:px-[48px] lg:py-[56px] flex flex-col lg:flex-row items-center justify-between gap-8">
        <div class="w-full lg:max-w-[520px]">
          <h3 class="font-serif font-bold text-white text-[28px] md:text-[34px] m-0 mb-4"><?php echo esc_html($s8['cta_heading']); ?></h3>
          <p class="text-[#FFFBF0] text-[15px] md:text-[18px] leading-[1.6] m-0 mb-8"><?php echo esc_html($s8['cta_text']); ?></p>
          <a href="<?php echo esc_url($s8['cta_button_link'] ?: '#'); ?>" class="inline-flex font-bold text-[16px] items-center gap-2 bg-[#C24C33] hover:bg-[#B84D38] transition-colors text-white px-6 md:px-8 py-3.5 rounded-full font-sans no-underline">
            <?php echo esc_html($s8['cta_button_text']); ?>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 ml-1"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
          </a>
        </div>
        <div class="flex flex-wrap items-center gap-3 md:gap-4 lg:mt-4">
          <?php if (!empty($s8['features'])): foreach ($s8['features'] as $f): ?>
            <div class="flex items-center gap-2 bg-[#FFFFFF17] rounded-full p-4 w-fit">
              <span class="w-6 h-6 inline-flex items-center justify-center text-white">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </span>
              <span class="text-white text-[14px] md:text-[16px] font-bold"><?php echo esc_html($f['text']); ?></span>
            </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: SELF-HELP HABITS -->
  <section id="mh-seek" class="section">
    <div class="container">
      <div class="text-center max-w-full mx-auto mb-12 lg:mb-16">
        <span class="block font-sans text-[12px] md:text-[13px] font-bold tracking-[2px] uppercase text-[#AF4B36]"><?php echo esc_html($s9['kicker']); ?></span>
        <h2 class="font-serif font-bold text-[#1A1A1A] text-[32px] md:text-[42px] lg:text-[48px] leading-[1.2] mt-3 mb-4"><?php echo esc_html($s9['heading']); ?></h2>
        <p class="text-[#5B5B5B] text-[15px] md:text-[20px] leading-[1.6] m-0"><?php echo esc_html($s9['lede']); ?></p>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
        <div class="lg:col-span-6 flex flex-col gap-4">
          <?php if (!empty($s9['habits'])): $hi = 0; foreach ($s9['habits'] as $habit): ?>
            <button type="button" class="habit-card<?php echo $hi === 0 ? ' active-card' : ''; ?> text-left w-full relative p-5 md:p-6 rounded-[18px] bg-white border border-[#EBE6E0] transition-all duration-200 cursor-pointer shadow-sm hover:border-l-4 hover:border-[#AF4B36]"
              data-title="<?php echo esc_attr($habit['title']); ?>"
              data-desc="<?php echo esc_attr($habit['description']); ?>"
              data-img="<?php echo esc_url($habit['image'] ?: ''); ?>">
              <div class="flex items-start gap-4 sm:gap-5 pl-2">
                <div class="w-12 h-12 rounded-xl bg-[#FCECE8] flex items-center justify-center text-[#D86653] flex-none">
                  <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><?php echo anxiety_icon_svg($habit['icon_key']); ?></svg>
                </div>
                <div>
                  <h3 class="font-serif font-bold text-[#241C19] text-[18px] md:text-[22px] mb-1.5"><?php echo esc_html($habit['title']); ?></h3>
                  <p class="text-[#5B5B5B] text-[14px] md:text-[16px] leading-relaxed m-0"><?php echo esc_html($habit['description']); ?></p>
                </div>
              </div>
            </button>
          <?php $hi++; endforeach; endif; ?>
        </div>
        <div class="lg:col-span-6 lg:sticky lg:top-8">
          <div class="relative overflow-hidden rounded-[28px] h-[480px] sm:h-[540px] lg:h-[580px] w-full bg-[#FAEEEB]">
            <img id="habit-preview-img" src="<?php echo esc_url($s9['habits'][0]['image'] ?? ''); ?>" alt="" class="w-full h-full object-cover transition-opacity duration-300">
            <div class="absolute bottom-5 left-5 right-5 sm:bottom-6 sm:left-6 sm:right-6 bg-[#4E2218] text-white p-5 sm:p-6 rounded-[20px] shadow-lg border border-white/10">
              <h3 id="habit-preview-title" class="font-serif font-bold text-white text-[20px] sm:text-[22px] mb-1.5"><?php echo esc_html($s9['habits'][0]['title'] ?? ''); ?></h3>
              <p id="habit-preview-desc" class="text-white/85 text-[13.5px] sm:text-[14.5px] leading-relaxed m-0 font-sans"><?php echo esc_html($s9['habits'][0]['description'] ?? ''); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 10: REMEMBER / GUIDANCE -->
  <section class="section section--white" data-reveal>
    <div class="container">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch">
        <div class="bg-[#FDF2EC] rounded-[24px] p-8 md:p-10 flex flex-col justify-center">
          <span class="text-[#BD4832] font-bold text-[14px] md:text-[24px] tracking-[0.04em] uppercase mb-3 block"><?php echo esc_html($s10['remember_label']); ?></span>
          <p class="text-[#5C5552] text-[16px] md:text-[20px] leading-[1.6] m-0 font-normal"><?php echo esc_html($s10['remember_text']); ?></p>
        </div>
        <div class="bg-[#A93E28] rounded-[24px] p-8 md:p-10 flex flex-col justify-between items-start text-white">
          <div>
            <h3 class="text-white font-bold text-[18px] md:text-[24px] tracking-[0.02em] uppercase mb-3"><?php echo esc_html($s10['guidance_heading']); ?></h3>
            <p class="text-white/95 text-[15.5px] md:text-[20px] leading-[1.6] m-0 mb-8 font-normal max-w-[90%]"><?php echo esc_html($s10['guidance_text']); ?></p>
          </div>
          <a href="#" class="inline-flex items-center gap-2 bg-white text-[#B2402A] font-bold text-[14px] md:text-[18px] px-6 py-3 rounded-full hover:bg-opacity-95 transition-all duration-200 no-underline shadow-sm">
            <?php echo esc_html($s10['guidance_button_text']); ?>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 11: FIND A PSYCHOLOGIST -->
  <section class="section">
    <div class="container">
      <div class="mb-10 md:mb-14">
        <h2 class="h2"><?php echo esc_html($s11['heading']); ?> <em><?php echo esc_html($s11['heading_highlight']); ?></em></h2>
        <p class="text-[#666666] text-[15px] md:text-[20px] leading-relaxed mt-[16px]"><?php echo esc_html($s11['lede']); ?></p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 lg:gap-x-16 items-start">
        <div class="flex flex-col">
          <?php if (!empty($s11['left_items'])): foreach ($s11['left_items'] as $item): ?>
            <div class="flex items-center gap-4 py-5 border-b border-[#F0E8E3]">
              <div class="w-9 h-9 rounded-xl bg-[#FCEEE9] flex items-center justify-center text-[#C05643] flex-none">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><?php echo anxiety_icon_svg($item['icon_key']); ?></svg>
              </div>
              <span class="text-[15px] sm:text-[18px] text-[#5B5B5B] leading-snug"><?php echo esc_html($item['text']); ?></span>
            </div>
          <?php endforeach; endif; ?>
        </div>
        <div class="flex flex-col">
          <?php if (!empty($s11['right_items'])): foreach ($s11['right_items'] as $item): ?>
            <div class="flex items-center gap-4 py-5 border-b border-[#F0E8E3]">
              <div class="w-9 h-9 rounded-xl bg-[#FCEEE9] flex items-center justify-center text-[#C05643] flex-none">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><?php echo anxiety_icon_svg($item['icon_key']); ?></svg>
              </div>
              <span class="text-[15px] sm:text-[18px] text-[#5B5B5B] leading-snug"><?php echo esc_html($item['text']); ?></span>
            </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 12: WHY CHOOSE US -->
  <section class="bg-[#FFF7F3] section">
    <div class="container">
      <div class="w-full grid grid-cols-1 lg:grid-cols-2 rounded-[32px] overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.04)] bg-[#5C2A20]">
        <div class="relative min-h-[450px] lg:min-h-[672px] w-full">
          <?php if (!empty($s12['image'])): ?>
            <img src="<?php echo esc_url($s12['image']); ?>" alt="" class="absolute inset-0 w-full h-full object-cover">
          <?php endif; ?>
          <div class="absolute bottom-6 left-6 right-6 lg:right-auto lg:bottom-10 lg:left-10 max-w-[440px] bg-[#F2F0ED] rounded-[28px] p-2.5 pr-6 flex items-center gap-4 shadow-lg">
            <div class="w-[42px] h-[42px] rounded-full bg-[#BA4836] flex-none flex items-center justify-center text-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/></svg>
            </div>
            <p class="text-[#333333] text-[13px] sm:text-[14px] leading-[1.4] font-medium m-0"><?php echo esc_html($s12['badge_text']); ?></p>
          </div>
        </div>
        <div class="px-8 py-12 lg:p-12 flex flex-col justify-center">
          <span class="block text-[#D67C62] text-[12px] font-bold tracking-[0.15em] uppercase mb-3"><?php echo esc_html($s12['eyebrow']); ?></span>
          <h2 class="font-serif text-white text-[36px] lg:text-[38px] font-bold leading-[1.1] mb-4"><?php echo esc_html($s12['heading']); ?> <span class="italic text-[#F09367]"><?php echo esc_html($s12['heading_highlight']); ?></span></h2>
          <p class="text-white text-[15px] md:text-[18px] m-0 mb-4"><?php echo esc_html($s12['subheading']); ?></p>
          <div class="flex flex-col w-full">
            <?php if (!empty($s12['items'])): foreach ($s12['items'] as $item): ?>
              <div class="flex items-start gap-5 py-5 border-b border-white/10">
                <div class="w-11 h-11 rounded-[14px] bg-[#673B30] flex-none flex items-center justify-center text-[#D67C62]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[22px] h-[22px]"><?php echo anxiety_icon_svg($item['icon_key']); ?></svg>
                </div>
                <p class="text-white text-[15px] md:text-[18px] leading-relaxed m-0 pt-1"><?php echo esc_html($item['text']); ?></p>
              </div>
            <?php endforeach; endif; ?>
          </div>
          <div class="mt-10">
            <a href="#" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-gray-50 transition-colors text-[#512D23] px-7 py-3.5 rounded-full font-bold text-[15px] no-underline">
              <?php echo esc_html($s12['button_text']); ?>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 ml-0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 13: FAQ -->
<?php if ( $s13 ) : ?>
<section id="mh-faq" class="section section--white" data-reveal>
  <div class="container max-w-[1360px]">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

      <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-8">
        <div>
          <h2 class="h2">
            <?php echo esc_html( $s13['heading'] ); ?> <em><?php echo esc_html( $s13['heading_highlight'] ); ?></em>
          </h2>

          <?php if ( ! empty( $s13['lede'] ) ) : ?>
          <p class="text-[15px] sm:text-[16px] leading-[26px] text-ink-muted m-0 mb-6 max-w-[420px] mt-3">
            <?php echo esc_html( $s13['lede'] ); ?>
          </p>
          <?php endif; ?>

          <button type="button" onclick="location.href='#mh-book'" class="bg-transparent hover:bg-[#A85848]/5 text-[#C24C33] border-2 border-[#C24C33] font-sans font-bold text-[15px] py-3.5 px-7 rounded-full transition-all duration-200 inline-flex items-center gap-2 cursor-pointer">
            <span><?php echo esc_html( $s13['button_text'] ); ?></span>
          </button>
        </div>

        <div class="bg-white/60 border border-[#E8DDD7] rounded-[24px] p-6 backdrop-blur-sm max-w-[460px]">
          <div class="flex items-center gap-3 mb-4">
            <div class="flex -space-x-2">
              <span class="w-8 h-8 rounded-full bg-[#E5D5C5] border-2 border-white"></span>
              <span class="w-8 h-8 rounded-full bg-[#E5E8C5] border-2 border-white"></span>
              <span class="w-8 h-8 rounded-full bg-[#E8C5C5] border-2 border-white"></span>
              <span class="w-8 h-8 rounded-full bg-[#F2E5D5] border-2 border-white"></span>
            </div>
            <span class="font-serif font-bold text-[15px] text-[#A85848]">
              <?php echo esc_html( $s13['testimonial_heading'] ); ?>
            </span>
          </div>

          <p class="text-[14px] leading-[22px] text-ink-muted m-0 mb-5">
            <?php echo esc_html( $s13['testimonial_text'] ); ?>
          </p>

          <button type="button" onclick="location.href='#mh-book'" class="bg-[#A85848] hover:bg-[#924A3D] text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer shadow-sm">
            <span><?php echo esc_html( $s13['testimonial_button_text'] ); ?></span>
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="m12 5 7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </div>

      <?php if ( ! empty( $s13['faq_items'] ) ) : ?>
      <div class="lg:col-span-7 flex flex-col gap-4" id="mhFaqList" data-reveal>
        <?php foreach ( $s13['faq_items'] as $fi => $faq ) : ?>

        <div class="faq-item<?php echo $fi === 0 ? ' is-open' : ''; ?> bg-white [&.is-open]:bg-[#FFF8F5] border border-[#E8DDD7] rounded-[20px] overflow-hidden shadow-sm transition-all duration-300">

          <button type="button" class="faq-item__trigger flex items-center justify-between w-full text-left p-6 sm:p-7 cursor-pointer group">
            <span class="font-serif font-bold text-lg sm:text-xl text-ink-900 group-hover:text-[#A85848] transition-colors pr-4">
              <?php echo esc_html( $faq['question'] ); ?>
            </span>
            <span class="faq-icon text-[#A85848] flex-shrink-0 relative w-8 h-8 rounded-full border border-black/10 flex items-center justify-center">
              <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round">
                <line x1="12" y1="5" x2="12" y2="19" class="icon-vertical transition-transform duration-300 <?php echo $fi === 0 ? 'scale-y-0' : 'group-[.is-open]:scale-y-0'; ?>" />
                <line x1="5" y1="12" x2="19" y2="12" class="icon-horizontal" />
              </svg>
            </span>
          </button>

          <div class="faq-item__panel px-6 sm:px-7">
            <div class="faq-item__panel-inner text-[15px] leading-[26px] text-ink-muted">
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

  <!-- SECTION 14: ARTICLES -->
  <section id="home-articles" class="section section--white">
    <div class="container">
      <div class="section-head section-head--center">
        <div class="eyebrow">
          <span class="eyebrow__dot">✳</span>
          <span><?php echo esc_html($s14['eyebrow']); ?></span>
        </div>
        <h2 class="h2"><?php echo esc_html($s14['heading']); ?> <em><?php echo esc_html($s14['heading_highlight']); ?></em></h2>
      </div>
      <div class="grid-3">
        <?php if (!empty($s14['articles'])): foreach ($s14['articles'] as $art): ?>
          <a href="<?php echo esc_url($art['link'] ?: '#'); ?>" class="article-card">
            <div class="article-card__media">
              <?php if (!empty($art['image'])): ?><img src="<?php echo esc_url($art['image']); ?>" alt="<?php echo esc_attr($art['title']); ?>" loading="lazy"><?php endif; ?>
            </div>
            <span class="article-chip"><?php echo esc_html($art['chip']); ?></span>
            <h3><?php echo esc_html($art['title']); ?></h3>
            <p><?php echo esc_html($art['description']); ?></p>
          </a>
        <?php endforeach; endif; ?>
      </div>
      <div class="articles__footer">
        <a href="<?php echo esc_url($s14['footer_link_url'] ?: '#'); ?>" class="link-arrow"><?php echo esc_html($s14['footer_link_text']); ?> →</a>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>