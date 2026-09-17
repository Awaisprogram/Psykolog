<?php
/**
 * Template Name: OCD Page
 */

get_header();

$s1  = get_field('section_1');  // Hero
$s2  = get_field('section_2');  // Jump navigation
$s3  = get_field('section_3');  // What Is OCD
$s4  = get_field('section_4');  // The OCD Cycle
$s5  = get_field('section_5');  // Obsessions / Compulsions cards
$s6  = get_field('section_6');  // Symptoms tabs
$s7  = get_field('section_7');  // OCD In Children
$s8  = get_field('section_8');  // Daily Life
$s9  = get_field('section_9');  // What Causes OCD
$s10 = get_field('section_10'); // Is OCD Hereditary
$s11 = get_field('section_11'); // Comorbid Conditions
$s12 = get_field('section_12'); // Treatment
$s13 = get_field('section_13'); // Relatives
$s14 = get_field('section_14'); // How Booking Works
$s15 = get_field('section_15'); // FAQ
$s16 = get_field('section_16'); // Articles
$s17 = get_field('section_17'); // Final CTA

/**
 * JUMP NAV ANCHORS: Mapped sequentially to sections 3 through 17.
 * If a nav item has a 'url' set in ACF, that will be used instead.
 */
$jump_anchors = [
    'what-is-ocd',               // S3
    'the-ocd-cycle',             // S4
    'obsessions-compulsions',    // S5
    'symptoms-and-signs',        // S6
    'ocd-in-children',           // S7
    'daily-life',                // S8
    'what-causes-ocd',           // S9
    'is-ocd-hereditary',         // S10
    'comorbid-conditions',       // S11
    'treatment',                 // S12
    'relatives',                 // S13
    'how-booking-works',         // S14
    'faq',                       // S15
    'articles',                  // S16
    'final-cta'                  // S17
];

/**
 * Renders a heading whose text contains {{1}} / {{2}} placeholder tokens,
 * wrapping the corresponding accent field(s) in <em>.
 */
function ocd_heading( $heading, $accents = [] ) {
    $out = esc_html( $heading );
    foreach ( $accents as $i => $accent ) {
        $out = str_replace( '{{' . ( $i + 1 ) . '}}', '<em>' . esc_html( $accent ) . '</em>', $out );
    }
    return $out;
}

$cycle_bg = ['#FDE9E6', '#EAF2EA', '#EAF2F6', '#F8F1E4'];
$child_signs_bg = ['#FCECE8', '#FFF4E5', '#E9F3EE', '#E9F3EE'];
?>

<main>
  <!-- ================= SECTION 1: HERO ================= -->
  <section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[700px]">
    <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
      <?php if (!empty($s1['image'])): ?><img src="<?php echo esc_url($s1['image']); ?>" alt="<?php echo esc_attr($s1['heading']); ?>" class="absolute inset-0 w-full h-full object-cover object-[100%_50%]" /><?php endif; ?>
      <span class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent lg:hidden"></span>
    </span>

    <div class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
      <div class="max-w-[1312px] mx-auto">
        <div class="max-w-full lg:max-w-[595px]">
          <h1 class="font-serif font-bold text-[#C24C33] mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[56px]"><?php echo esc_html($s1['heading']); ?></h1>
          <p class="text-lg lg:text-xl leading-[1.6] text-[#33170F] mt-[22px] mb-0"><?php echo esc_html($s1['description']); ?></p>

          <div class="mt-8 flex flex-col sm:flex-row items-start sm:items-center gap-4 lg:gap-5">
            <a href="<?php echo esc_url($s1['primary_button_url']); ?>" class="inline-flex items-center justify-center px-8 py-3.5 bg-[#C24C33] text-white rounded-full font-bold text-base transition hover:bg-opacity-90">
              <?php echo esc_html($s1['primary_button_text']); ?>
              <span class="ml-2 inline-flex items-center"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/oslo/white-arrow.webp" alt="External Link Icon" class="h-[20px] w-[12px] mt-0.5 object-contain" /></span>
            </a>
            <a href="<?php echo esc_url($s1['secondary_button_url']); ?>" class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-[#A93E28] text-[#A93E28] rounded-full font-bold text-base transition hover:bg-gray-100">
              <?php echo esc_html($s1['secondary_button_text']); ?>
              <span class="ml-2 inline-flex items-center"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/oslo/Brown-arrow.webp" alt="External Link Icon" class="h-[20px] w-[12px] mt-0.5 object-contain" /></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 2: JUMP NAV ================= -->
  <div class="bg-white pt-10">
    <div class="container max-w-[1360px]">
      <nav class="ps-jump flex items-center gap-0.5 bg-[#FDF6F2] rounded-full px-3.5 py-2 overflow-x-auto">
        <?php if (!empty($s2['nav_items'])): foreach ($s2['nav_items'] as $i => $item):
          $anchor = !empty($item['url']) ? ltrim($item['url'], '#') : ($jump_anchors[$i] ?? $jump_anchors[0]);
          $is_active = $i === 0;
        ?>
          <a href="#<?php echo esc_attr($anchor); ?>" class="font-sans <?php echo $is_active ? 'font-bold text-brand-hover bg-brand-active' : 'font-medium text-brand-taupe bg-transparent'; ?> text-[15px] leading-5 whitespace-nowrap rounded-full px-[18px] py-2.5"><?php echo esc_html($item['label']); ?></a>
        <?php endforeach; endif; ?>
      </nav>
    </div>
  </div>

  <!-- ================= SECTION 3: WHAT IS OCD ================= -->
  <section id="what-is-ocd" class="section section--white" data-reveal>
    <div class="container max-w-[1360px] mx-auto px-4 md:px-8">
      <div class="grid grid-cols-1 gap-12 items-start grid-cols-2 xl:grid-cols-[924px_340px] lg:gap-[46px]">
        <div>
          <h2 class="h2 italic"><?php echo esc_html($s3['heading']); ?></h2>
          <p class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0"><?php echo esc_html($s3['paragraph_1']); ?></p>
          <p class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0"><?php echo esc_html($s3['paragraph_2']); ?></p>
          <p class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0"><?php echo esc_html($s3['paragraph_3']); ?></p>
          <p class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0"><?php echo esc_html($s3['paragraph_4']); ?></p>
        </div>

        <div class="lg:sticky lg:top-[148px] flex flex-col gap-6">
          <div class="relative overflow-hidden bg-[#B1412A] rounded-[24px] p-6 md:p-8">
            <div class="absolute top-[-50px] right-[-50px] w-[200px] h-[200px] bg-white/5 rounded-full pointer-events-none"></div>
            <div class="absolute bottom-[-100px] left-[-50px] w-[250px] h-[250px] bg-black/10 rounded-full blur-2xl pointer-events-none"></div>

            <div class="relative z-10">
              <div class="flex items-center gap-5 mb-6">
                <div class="w-[60px] h-[60px] shrink-0">
                  <?php if (!empty($s3['card_icon'])): ?><img src="<?php echo esc_url($s3['card_icon']); ?>" alt="<?php echo esc_attr($s3['card_heading']); ?>" class="object-contain" /><?php endif; ?>
                </div>
                <h3 class="font-serif font-bold text-[18px] md:text-[20px] text-white m-0"><?php echo esc_html($s3['card_heading']); ?></h3>
              </div>

              <p class="text-white text-[15px] md:text-[16px] leading-[1.6] m-0 mb-4"><?php echo esc_html($s3['card_paragraph_1']); ?></p>
              <p class="text-white text-[15px] md:text-[16px] leading-[1.6] m-0"><?php echo esc_html($s3['card_paragraph_2']); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 4: THE OCD CYCLE ================= -->
  <section id="the-ocd-cycle" class="section bg-[#F8EBE2]">
    <div class="container max-w-[1360px] mx-auto px-4 md:px-8">
      <div class="mb-10 lg:mb-12">
        <h2 class="font-serif text-[32px] md:text-[40px] lg:text-[48px] font-bold text-[#241C19] leading-[1.2] mb-4"><?php echo esc_html($s4['heading']); ?></h2>
        <p class="text-[#5B5B5B] text-[16px] md:text-[18px] leading-relaxed m-0 max-w-[1000px]"><?php echo esc_html($s4['intro_text']); ?></p>
      </div>

      <div class="bg-white rounded-[20px] shadow-[0_4px_24px_rgba(0,0,0,0.02)] overflow-hidden">
        <div class="bg-[#C24C33] p-5 md:px-8 grid grid-cols-1 md:grid-cols-[1fr_1.5fr] gap-4">
          <div class="text-white text-[12px] md:text-[13px] font-bold tracking-[0.1em] uppercase"><?php echo esc_html($s4['table_col1_header']); ?></div>
          <div class="hidden md:block text-white text-[12px] md:text-[13px] font-bold tracking-[0.1em] uppercase"><?php echo esc_html($s4['table_col2_header']); ?></div>
        </div>

        <?php if (!empty($s4['cycle_steps'])): $steps = $s4['cycle_steps']; foreach ($steps as $i => $step): $last = $i === count($steps) - 1; $bg = $cycle_bg[$i % count($cycle_bg)]; ?>
          <div class="grid grid-cols-1 md:grid-cols-[1fr_1.5fr] gap-4 md:gap-8 p-5 md:px-8 md:py-6 <?php echo $last ? '' : 'border-b border-[#F2E8E3]'; ?> items-center">
            <div class="flex items-center gap-4">
              <div class="w-14 h-14 rounded-[12px] flex items-center justify-center shrink-0" style="background-color: <?php echo esc_attr($bg); ?>;">
                <?php if (!empty($step['icon'])): ?><img src="<?php echo esc_url($step['icon']); ?>" alt="<?php echo esc_attr($step['title']); ?>" class="w-7 h-7 object-contain" /><?php endif; ?>
              </div>
              <h3 class="font-serif font-bold text-[20px] md:text-[22px] text-[#241C19] m-0"><?php echo esc_html($step['title']); ?></h3>
            </div>
            <div>
              <div class="md:hidden text-[#C24C33] text-[11px] font-bold tracking-[0.1em] uppercase mb-2"><?php echo esc_html($s4['table_col2_header']); ?></div>
              <p class="text-[#6B5F5A] text-[15px] md:text-[16px] leading-[1.6] m-0"><?php echo esc_html($step['description']); ?></p>
            </div>
          </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 5: OBSESSIONS / COMPULSIONS CARDS ================= -->
  <section id="obsessions-compulsions" class="section">
    <div class="container">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        <?php if (!empty($s5['cards'])): foreach ($s5['cards'] as $i => $card): $highlighted = $i === 1; ?>
          <div class="bg-white border border-[#E8B8AC] rounded-[24px] p-8 md:p-10 flex flex-col items-start shadow-sm transition-shadow hover:shadow-md">
            <div class="w-14 h-14 rounded-[16px] flex items-center justify-center shrink-0 mb-6 <?php echo $highlighted ? 'bg-[#C24C33]' : 'bg-[#EAF2EA]'; ?>">
              <?php if (!empty($card['icon'])): ?><img src="<?php echo esc_url($card['icon']); ?>" alt="<?php echo esc_attr($card['title']); ?>" class="w-7 h-7 object-contain <?php echo $highlighted ? 'brightness-0 invert' : ''; ?>" /><?php endif; ?>
            </div>
            <h3 class="font-serif font-bold text-[#33170F] text-[24px] md:text-[28px] m-0 mb-4"><?php echo esc_html($card['title']); ?></h3>
            <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6] m-0"><?php echo esc_html($card['description']); ?></p>
          </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 6: SYMPTOMS TABS ================= -->
  <section id="symptoms-and-signs" class="section bg-[#FFF7F3]">
    <div class="container" data-reveal>
      <div class="text-center mb-[32px]">
        <h2 class="h2 mb-4"><?php echo esc_html($s6['heading']); ?></h2>
        <p class="text-[#6B6B6B] text-[16px] md:text-[18px] m-0 max-w-[938px] mx-auto mb-4"><?php echo esc_html($s6['intro_text']); ?></p>
      </div>

      <div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-8" role="tablist" aria-label="OCD symptoms">
        <?php if (!empty($s6['tabs'])): foreach ($s6['tabs'] as $i => $tab): $active = $i === 0; ?>
          <button type="button" id="tab-<?php echo esc_attr($i); ?>" class="stress-tab px-6 py-2 rounded-full border text-[14px] md:text-[16px] font-medium transition-colors cursor-pointer <?php echo $active ? 'border-[#E8B8AC] text-[#C24C33] bg-transparent' : 'border-[#F2E4DC] text-[#333333] bg-white hover:bg-gray-50'; ?>" role="tab" aria-selected="<?php echo $active ? 'true' : 'false'; ?>" aria-controls="panel-<?php echo esc_attr($i); ?>" data-ocd-tab="<?php echo esc_attr($i); ?>"><?php echo esc_html($tab['tab_label']); ?></button>
        <?php endforeach; endif; ?>
      </div>

      <div class="bg-white rounded-[1.5rem] p-4 md:p-6 border border-[#F0F0F0] shadow-sm mb-8">
        <?php if (!empty($s6['tabs'])): foreach ($s6['tabs'] as $i => $tab): $active = $i === 0; ?>
          <div id="panel-<?php echo esc_attr($i); ?>" class="stress-panel <?php echo $active ? 'flex' : 'hidden'; ?> flex-col lg:flex-row items-center gap-8 lg:gap-12" role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($i); ?>" data-ocd-panel="<?php echo esc_attr($i); ?>" <?php echo $active ? '' : 'hidden'; ?>>
            <?php if (!empty($tab['illustration'])): ?><img src="<?php echo esc_url($tab['illustration']); ?>" alt="<?php echo esc_attr($tab['tab_label']); ?>" class="w-full lg:w-[400px] h-[330px] shrink-0 object-contain" /><?php endif; ?>
            <div class="flex-1 py-2 lg:py-6">
              <p class="text-[#555555] text-[16px] md:text-[18px] m-0 mb-6"><?php echo esc_html($tab['intro']); ?></p>
              <div class="flex flex-wrap gap-3 md:gap-4">
                <?php if (!empty($tab['chips'])): foreach ($tab['chips'] as $chip): ?>
                  <div class="inline-flex items-center gap-2.5 px-4 py-2.5 rounded-full bg-[#FFF7F3] border border-[#F2E4DC]">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Stress/check-icon.webp" alt="check" class="w-[24px] h-[24px] object-contain" />
                    <span class="text-[#4E403B] text-[13px] md:text-[15px] font-medium"><?php echo esc_html($chip['text']); ?></span>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 7: OCD IN CHILDREN ================= -->
  <section id="ocd-in-children" class="section">
    <div class="container">
      <div class="mb-10 lg:mb-14">
        <h2 class="font-serif text-[32px] sm:text-[38px] lg:text-[44px] font-bold text-[#241C19] leading-[1.2] mb-4"><?php echo ocd_heading($s7['heading'], [$s7['heading_accent_1']]); ?></h2>
        <p class="text-[#6B5F5A] text-[15px] lg:text-[18px] leading-relaxed mb-4"><?php echo esc_html($s7['paragraph_1']); ?></p>
        <p class="text-[#6B5F5A] text-[15px] lg:text-[18px] leading-relaxed m-0"><?php echo esc_html($s7['paragraph_2']); ?></p>
      </div>

      <div class="text-center mb-8 lg:mb-12">
        <h3 class="font-serif text-[24px] sm:text-[28px] lg:text-[32px] font-bold text-[#241C19]"><?php echo ocd_heading($s7['sub_heading'], [$s7['sub_heading_accent_1']]); ?></h3>
      </div>

      <?php $signs = $s7['signs'] ?? []; $left = array_slice($signs, 0, 4); $right = array_slice($signs, 4, 4); ?>
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
        <div class="bg-white border border-[#F2E4DC] rounded-[24px] p-6 lg:p-8 shadow-[0px_4px_22px_0px_#5C2A2012] flex flex-col justify-center gap-8">
          <?php foreach ($left as $i => $sign): $bg = $child_signs_bg[$i % count($child_signs_bg)]; ?>
            <div class="flex items-center gap-5">
              <div class="w-12 h-12 rounded-full flex items-center justify-center shrink-0" style="background-color: <?php echo esc_attr($bg); ?>;">
                <?php if (!empty($sign['icon'])): ?><img src="<?php echo esc_url($sign['icon']); ?>" alt="<?php echo esc_attr($sign['text']); ?>" class="w-6 h-6 object-contain" /><?php endif; ?>
              </div>
              <p class="text-[#6F6259] text-[15px] md:text-[16px] leading-[1.5] m-0"><?php echo esc_html($sign['text']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="relative rounded-[24px] overflow-hidden min-h-[360px] lg:min-h-[481px] shadow-[0_4px_24px_rgba(0,0,0,0.02)] bg-gray-100">
          <?php if (!empty($s7['center_image'])): ?><img src="<?php echo esc_url($s7['center_image']); ?>" alt="Child playing with toy cars on a table" class="absolute inset-0 w-full h-full object-cover object-center" /><?php endif; ?>
        </div>

        <div class="bg-white border border-[#F2E4DC] rounded-[24px] p-6 lg:p-8 shadow-[0px_4px_22px_0px_#5C2A2012] flex flex-col justify-center gap-8">
          <?php foreach ($right as $i => $sign): $bg = $child_signs_bg[$i % count($child_signs_bg)]; ?>
            <div class="flex items-center gap-5">
              <div class="w-12 h-12 rounded-full flex items-center justify-center shrink-0" style="background-color: <?php echo esc_attr($bg); ?>;">
                <?php if (!empty($sign['icon'])): ?><img src="<?php echo esc_url($sign['icon']); ?>" alt="<?php echo esc_attr($sign['text']); ?>" class="w-6 h-6 object-contain" /><?php endif; ?>
              </div>
              <p class="text-[#6F6259] text-[15px] md:text-[16px] leading-[1.5] m-0"><?php echo esc_html($sign['text']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 8: DAILY LIFE ================= -->
  <section id="daily-life" class="section bg-[#FFF7F3]">
    <div class="container">
      <div class="flex flex-col lg:flex-row items-center gap-10">
        <div class="w-full lg:w-1/2 xl:w-[500px]">
          <?php if (!empty($s8['image'])): ?><img src="<?php echo esc_url($s8['image']); ?>" alt="<?php echo esc_attr($s8['heading']); ?>" class="w-full h-auto lg:h-[500px] object-cover rounded-[24px] shadow-sm" /><?php endif; ?>
        </div>
        <div class="w-full lg:w-1/2 xl:w-[784px] flex flex-col gap-6">
          <h2 class="h2"><?php echo esc_html($s8['heading']); ?></h2>
          <p class="text-[#6B6B6B] text-[16px] md:text-[20px] leading-[1.7] m-0"><?php echo esc_html($s8['text']); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 9: WHAT CAUSES OCD ================= -->
  <section id="what-causes-ocd" class="section bg-white" data-reveal>
    <div class="container max-w-[1360px] mx-auto px-4 md:px-8">
      <div class="flex flex-col lg:flex-row items-center gap-6 lg:gap-[24px]">
        <div class="w-full lg:w-1/2 xl:w-[734px] flex flex-col justify-center">
          <h2 class="h2 mb-4"><?php echo ocd_heading($s9['heading'], [$s9['heading_accent_1']]); ?></h2>
          <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] m-0 mb-4 lg:mb-[20px]"><?php echo esc_html($s9['intro_text']); ?></p>

          <div class="flex flex-col gap-3 lg:gap-[20px]">
            <?php if (!empty($s9['causes'])): foreach ($s9['causes'] as $cause): ?>
              <div class="flex items-start gap-5">
                <div class="w-12 h-12 shrink-0"><?php if (!empty($cause['icon'])): ?><img src="<?php echo esc_url($cause['icon']); ?>" alt="Cause" class="object-contain" /><?php endif; ?></div>
                <p class="text-[#4E403B] text-[15px] md:text-[18px] leading-[1.6] m-0 mt-1"><?php echo esc_html($cause['text']); ?></p>
              </div>
            <?php endforeach; endif; ?>
          </div>
        </div>

        <div class="w-full lg:w-1/2 xl:w-[550px] flex justify-center lg:justify-end">
          <div class="w-full max-w-[550px] rounded-[32px] overflow-hidden bg-[#FAFAFA] shadow-sm">
            <?php if (!empty($s9['image'])): ?><img src="<?php echo esc_url($s9['image']); ?>" alt="Man looking stressed surrounded by causes of OCD icons" class="w-full lg:h-[500px] h-auto object-cover" /><?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 10: IS OCD HEREDITARY ================= -->
  <section id="is-ocd-hereditary" class="section">
    <div class="container text-center mx-auto max-w-[1312px]">
      <h2 class="h2 mb-4"><?php echo ocd_heading($s10['heading'], [$s10['heading_accent_1']]); ?></h2>
      <p class="text-[#6B5F5A] text-[15px] lg:text-[18px] leading-[1.6] m-0"><?php echo esc_html($s10['text']); ?></p>
    </div>
  </section>

  <!-- ================= SECTION 11: COMORBID CONDITIONS ================= -->
  <section id="comorbid-conditions" class="section bg-[#FFF7F3] habit-card-group">
    <div class="container" data-reveal>
      <div class="flex flex-col lg:flex-row gap-12 lg:gap-[60px]">
        <div class="w-full lg:w-1/2 xl:w-[672px] flex flex-col justify-start">
          <h2 class="h2 mb-4"><?php echo ocd_heading($s11['heading'], [$s11['heading_accent_1']]); ?></h2>
          <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6] m-0 mb-8 lg:mb-10"><?php echo esc_html($s11['intro_text']); ?></p>

          <div class="flex flex-col gap-5">
            <?php if (!empty($s11['conditions'])): foreach ($s11['conditions'] as $i => $cond): $active = $i === 0; ?>
              <button type="button" class="habit-card <?php echo $active ? 'active-card' : ''; ?> text-left w-full bg-white rounded-[20px] p-6 shadow-[0_4px_24px_rgba(0,0,0,0.02)] border-[2px] <?php echo $active ? 'border-[#C24C33]' : 'border-transparent hover:border-[#E8B8AC]'; ?> transition-all duration-300 cursor-pointer" data-img="<?php echo esc_url($cond['image']); ?>">
                <div class="flex items-center gap-4 mb-4">
                  <div class="w-10 h-10"><?php if (!empty($cond['icon'])): ?><img src="<?php echo esc_url($cond['icon']); ?>" alt="<?php echo esc_attr($cond['title']); ?>" class="object-contain" /><?php endif; ?></div>
                  <h3 class="font-serif text-[18px] md:text-[20px] font-bold text-[#241C19] m-0"><?php echo esc_html($cond['title']); ?></h3>
                </div>
                <p class="text-[#5B5B5B] text-[15px] md:text-[16px] leading-[1.6] m-0"><?php echo esc_html($cond['description']); ?></p>
              </button>
            <?php endforeach; endif; ?>
          </div>
        </div>

        <div class="w-full lg:w-1/2 xl:w-[608px] flex flex-col gap-6 justify-start lg:sticky lg:top-24 self-start pt-2 lg:pt-4">
          <div class="w-full rounded-[32px] overflow-hidden bg-white">
            <?php $first_cond = !empty($s11['conditions']) ? $s11['conditions'][0] : null; ?>
            <img class="habit-preview-img w-full h-full object-cover lg:h-[520px] transition-opacity duration-300" src="<?php echo esc_url($first_cond['image'] ?? ''); ?>" alt="Therapy session" />
          </div>

          <div class="bg-white rounded-[24px] p-6 lg:p-8 flex items-center gap-5 shadow-[0_4px_24px_rgba(0,0,0,0.02)]">
            <div class="w-12 h-12 shrink-0"><?php if (!empty($s11['alert_icon'])): ?><img src="<?php echo esc_url($s11['alert_icon']); ?>" alt="Phone / Call Icon" class="object-contain" /><?php endif; ?></div>
            <p class="text-[#5B5B5B] text-[15px] md:text-[16px] leading-[1.6] m-0"><?php echo esc_html($s11['alert_text']); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 12: TREATMENT ================= -->
  <section id="treatment" class="section bg-[#FEF0EA]">
    <div class="container" data-reveal>
      <div class="mb-6 lg:mb-10 text-center">
        <h2 class="h2 mb-4"><?php echo esc_html($s12['heading']); ?></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6] m-0 max-w-[1050px] mx-auto"><?php echo esc_html($s12['intro_text']); ?></p>
      </div>

      <div class="flex flex-col gap-6">
        <?php if (!empty($s12['treatments'])): foreach ($s12['treatments'] as $t): ?>
          <div class="bg-white rounded-[24px] p-6 md:p-10 border border-[#F2E8E3] shadow-sm flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex-1">
              <div class="flex items-center gap-4 mb-5 max-w-[870px]">
                <div class="w-11 h-11 shrink-0 bg-[#FCECE8] rounded-2xl flex items-center justify-center">
                  <?php if (!empty($t['icon'])): ?><img src="<?php echo esc_url($t['icon']); ?>" alt="Icon" class="object-contain" /><?php endif; ?>
                </div>
                <h3 class="font-serif text-[20px] md:text-[24px] text-[#241C19] font-bold m-0"><?php echo esc_html($t['title']); ?></h3>
              </div>
              <div class="flex flex-col gap-4 text-[#4E403B] text-[15px] md:text-[16px] leading-[1.7]">
                <p class="m-0"><?php echo esc_html($t['description']); ?></p>
              </div>
            </div>
            <div class="w-full md:w-[280px] lg:w-[332px] shrink-0 flex justify-center">
              <?php if (!empty($t['illustration'])): ?><img src="<?php echo esc_url($t['illustration']); ?>" alt="<?php echo esc_attr($t['title']); ?> Illustration" class="w-full h-auto max-h-[300px] object-contain" /><?php endif; ?>
            </div>
          </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 13: RELATIVES ================= -->
  <section id="relatives" class="section">
    <div class="container">
      <div class="bg-[#C24C33] rounded-[28px] p-6 sm:p-10 md:p-12 shadow-md relative overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[551px_612px] gap-8 lg:gap-10">
          <div class="flex flex-col justify-between">
            <div>
              <h2 class="font-serif text-white text-[32px] md:text-[40px] font-bold leading-[1.25] mb-4"><?php echo esc_html($s13['heading']); ?></h2>
              <p class="text-white/90 text-[15px] md:text-[18px] leading-relaxed mb-4"><?php echo esc_html($s13['paragraph_1']); ?></p>
              <p class="text-white/90 text-[15px] md:text-[18px] leading-relaxed mb-4"><?php echo esc_html($s13['paragraph_2']); ?></p>
            </div>
            <div class="rounded-[24px] overflow-hidden w-full h-[250px] lg:h-[330px]">
              <?php if (!empty($s13['image'])): ?><img src="<?php echo esc_url($s13['image']); ?>" alt="Family members sitting together" class="w-full h-full object-cover" /><?php endif; ?>
            </div>
          </div>

          <div class="flex flex-col justify-center">
            <p class="text-white/90 text-[15px] md:text-[18px] leading-relaxed mb-10"><?php echo esc_html($s13['top_text']); ?></p>
            <div class="bg-[#FFFFFF0E] border border-[#FFFFFF21] rounded-[22px] p-6 md:p-8 backdrop-blur-sm">
              <ul class="divide-y divide-white/20">
                <?php if (!empty($s13['tips'])): foreach ($s13['tips'] as $tip): ?>
                  <li class="py-6 flex items-start gap-3.5 text-white">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/oslo/ticks.webp" alt="Check" class="w-[26px] h-[26px] mt-0.5 flex-shrink-0" />
                    <p class="text-[14px] md:text-[16px] leading-relaxed m-0"><?php echo esc_html($tip['text']); ?></p>
                  </li>
                <?php endforeach; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 14: HOW BOOKING WORKS ================= -->
  <section id="how-booking-works" class="pb-[90px]">
    <div class="container" data-reveal>
      <div class="text-center max-w-[640px] mx-auto mb-14">
        <h2 class="h2 mb-4"><?php echo esc_html($s14['heading']); ?></h2>
        <p class="text-[#5B5B5B] text-[15px] md:text-[20px] leading-[1.6]"><?php echo esc_html($s14['intro_text']); ?></p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-stretch">
        <?php if (!empty($s14['steps'])): foreach ($s14['steps'] as $i => $step): $checked = $i === 0; ?>
          <label class="group relative rounded-[24px] p-5 border-2 border-transparent bg-[#FFF7F3] transition-all duration-300 flex flex-col justify-between cursor-pointer has-[:checked]:border-[#C85237] has-[:checked]:shadow-md">
            <input type="radio" name="step" value="<?php echo esc_attr($i + 1); ?>" <?php checked($checked); ?> class="peer sr-only" />
            <div>
              <div class="relative w-full h-[200px] sm:h-[220px] rounded-[16px] overflow-hidden mb-6">
                <?php if (!empty($step['image'])): ?><img src="<?php echo esc_url($step['image']); ?>" alt="<?php echo esc_attr($step['title']); ?>" class="w-full h-full object-cover" /><?php endif; ?>
                <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-white text-[#241C19] peer-checked:bg-[#C85237] peer-checked:text-white text-[12px] font-semibold tracking-wide transition-colors duration-300 shadow-sm">Step <?php echo esc_html(str_pad($i + 1, 2, '0', STR_PAD_LEFT)); ?></span>
              </div>
              <h3 class="font-serif text-[20px] md:text-[24px] font-bold text-[#241C19] mb-3"><?php echo esc_html($step['title']); ?></h3>
              <p class="text-[#5B5B5B] text-[13px] md:text-[16px] leading-relaxed mb-6"><?php echo esc_html($step['description']); ?></p>
            </div>
          </label>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 15: FAQ ================= -->
  <section id="faq" class="section bg-[#FFF7F3]">
    <div class="container" data-reveal>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-6">
          <div>
            <span class="text-[#C24C33] text-[11px] font-bold tracking-widest uppercase mb-3 block"><?php echo esc_html($s15['eyebrow']); ?></span>
            <h2 id="faq" class="h2 mb-4"><?php echo ocd_heading($s15['heading'], [$s15['heading_accent_1']]); ?></h2>
            <p class="text-[16px] leading-[26px] text-[#6B5F5A] m-0 mb-6 max-w-[420px]"><?php echo esc_html($s15['intro_text']); ?></p>
            <a href="#" class="inline-flex items-center justify-center px-6 py-2.5 bg-transparent border border-[#C24C33] text-[#C24C33] hover:bg-[#C24C33] hover:text-white text-[15px] font-bold rounded-full transition-colors duration-300 no-underline w-fit"><?php echo esc_html($s15['button_text']); ?></a>
          </div>

          <div class="w-full h-px bg-[#F2E8E3] my-3"></div>

          <div class="flex flex-col">
            <div class="flex items-center gap-3 mb-4">
              <div class="flex -space-x-2">
                <span class="w-8 h-8 rounded-full bg-[#E8DCC8] border-2 border-white shrink-0"></span>
                <span class="w-8 h-8 rounded-full bg-[#DCE5DF] border-2 border-white shrink-0"></span>
                <span class="w-8 h-8 rounded-full bg-[#EED8D3] border-2 border-white shrink-0"></span>
                <span class="w-8 h-8 rounded-full bg-[#F3EFE9] border-2 border-white shrink-0"></span>
              </div>
              <span class="font-sans font-bold text-[14px] text-[#C24C33]"><?php echo esc_html($s15['info_label']); ?></span>
            </div>
            <p class="text-[14px] leading-[22px] text-[#6B5F5A] m-0 mb-5 max-w-[380px]"><?php echo esc_html($s15['info_text']); ?></p>
            <button type="button" onclick="location.href = '#mh-book'" class="bg-[#C24C33] hover:bg-[#B34A34] text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer w-fit border-0">
              <span><?php echo esc_html($s15['info_button_text']); ?></span><span class="font-bold text-lg leading-none mb-[2px]">→</span>
            </button>
          </div>
        </div>

        <div class="lg:col-span-7 flex flex-col gap-4">
          <?php if (!empty($s15['faq_items'])): foreach ($s15['faq_items'] as $faq): ?>
            <div class="faq-item group bg-white border border-[#F2E8E3] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
              <button class="w-full flex items-center justify-between p-6 sm:px-8 sm:py-6 bg-transparent border-0 cursor-pointer text-left">
                <span class="font-serif font-bold text-[18px] sm:text-[20px] text-[#241C19] group-[.is-open]:text-[#C24C33] transition-colors pr-4"><?php echo esc_html($faq['question']); ?></span>
                <span class="relative w-4 h-4 flex-none shrink-0 transition-transform duration-300">
                  <span class="absolute top-1/2 left-0 w-full h-[2px] bg-[#C24C33] -translate-y-1/2"></span>
                  <span class="absolute top-0 left-1/2 w-[2px] h-full bg-[#C24C33] -translate-x-1/2 transition-transform duration-300 group-[.is-open]:rotate-90"></span>
                </span>
              </button>
              <div class="faq-content hidden px-6 sm:px-8 pb-7 pt-0"><p class="text-[15px] leading-[26px] text-[#6B5F5A] m-0"><?php echo esc_html($faq['answer']); ?></p></div>
            </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 16: ARTICLES ================= -->
  <section id="articles" class="section section--white">
    <div class="container">
      <div class="section-head section-head--center">
        <div class="eyebrow">
          <span class="eyebrow__dot">✳</span>
          <span><?php echo esc_html($s16['eyebrow']); ?></span>
        </div>
        <h2 class="h2"><?php echo ocd_heading($s16['heading'], [$s16['heading_accent_1']]); ?></h2>
      </div>

      <div class="grid-3">
        <?php if (!empty($s16['articles'])): foreach ($s16['articles'] as $article): ?>
          <a href="<?php echo esc_url($article['url']); ?>" class="article-card">
            <div class="article-card__media">
              <?php if (!empty($article['image'])): ?><img src="<?php echo esc_url($article['image']); ?>" alt="<?php echo esc_attr($article['title']); ?>" loading="lazy" /><?php endif; ?>
            </div>
            <span class="article-chip"><?php echo esc_html($article['chip']); ?></span>
            <h3><?php echo esc_html($article['title']); ?></h3>
            <p><?php echo esc_html($article['description']); ?></p>
          </a>
        <?php endforeach; endif; ?>
      </div>

      <div class="articles__footer">
        <a href="<?php echo esc_url($s16['footer_link_url']); ?>" class="link-arrow"><?php echo esc_html($s16['footer_link_text']); ?> →</a>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 17: FINAL CTA ================= -->
  <section id="final-cta" class="pb-12" data-reveal>
    <div class="container">
      <div class="rounded-[32px] px-8 py-12 md:py-20 md:px-[56px] shadow-sm flex flex-col md:flex-row items-center justify-between gap-10"
           style="background: radial-gradient(46% 62% at 92% 88%, rgba(240, 147, 103, 0.14) 0%, rgba(240, 147, 103, 0) 70%), radial-gradient(46% 62% at 8% 84%, rgba(248, 216, 212, 0.55) 0%, rgba(248, 216, 212, 0) 70%), radial-gradient(58% 74% at 50% 0%, rgba(248, 235, 226, 0.9) 0%, rgba(248, 235, 226, 0) 72%);">
        <div class="text-center md:text-left max-w-[665px]">
          <span class="text-[#A93E28] text-[13px] md:text-[14px] font-bold tracking-[0.15em] uppercase mb-[18px]"><?php echo esc_html($s17['eyebrow']); ?></span>
          <h2 class="font-serif text-[30px] md:text-[36px] text-[#241C19] mb-4 font-bold"><?php echo esc_html($s17['heading']); ?></h2>
          <p class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6] max-w-[620px] mx-auto md:mx-0 mb-8 font-normal"><?php echo esc_html($s17['text']); ?></p>

          <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
            <a href="<?php echo esc_url($s17['primary_button_url']); ?>" class="inline-flex items-center justify-center gap-2 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors">
              <?php echo esc_html($s17['primary_button_text']); ?>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Faqs/arrow.webp" alt="Right Arrow Icon" class="h-6 w-6 object-contain" />
            </a>
            <a href="<?php echo esc_url($s17['secondary_button_url']); ?>" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-[#FBF3EF] text-[#C24C33] border border-[#C24C33] font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors"><?php echo esc_html($s17['secondary_button_text']); ?></a>
          </div>
        </div>

        <div class="shrink-0">
          <div class="w-[421px] h-[280px]"><?php if (!empty($s17['image'])): ?><img src="<?php echo esc_url($s17['image']); ?>" alt="Chat/Support Icon" class="object-contain" /><?php endif; ?></div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>