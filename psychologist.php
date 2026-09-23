<?php
/**
 * Template Name: Psychologist
 */

get_header();

$s1 = get_field('section_1');
$s2 = get_field('section_2');
$s3 = get_field('section_3');
$s4 = get_field('section_4');
$s5 = get_field('section_5');
$s6 = get_field('section_6');
$s7 = get_field('section_7');
$s8 = get_field('section_8');
$s9 = get_field('section_9');
$s10 = get_field('section_10');
$s11 = get_field('section_11');
$s12 = get_field('section_12');
$s13 = get_field('section_13');
$s14 = get_field('section_14');

// Jump-nav anchors are structural (tied to this template's own section IDs), not editable
// destinations, so they stay hardcoded here in template order alongside the field-driven labels.
$jump_anchors = ['what-is-psychologist', 'what-they-do', 'types-of-psychologists', 'vs-psychiatrist', 'where-they-work', 'education', 'how-to-find', 'our-psychologists', 'faq'];
?>

<main>
  <!-- ================= SECTION 1: HERO ================= -->
  <section
    class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[720px]">
    <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
      <?php if (!empty($s1['hero_image'])): ?><img src="<?php echo esc_url($s1['hero_image']); ?>"
            alt="<?php echo esc_attr($s1['heading']); ?>"
            class="absolute inset-0 w-full h-full object-cover object-[25%_50%] lg:object-[100%_50%]" /><?php endif; ?>
      <span class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent lg:hidden"></span>
    </span>
    <div
      class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
      <div class="max-w-[1312px] mx-auto">
        <div class="max-w-full lg:max-w-[577px]">
        <div class="ml-2">
             <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
               <?php yoast_breadcrumb( '<nav class="page-hero__crumb" aria-label="Breadcrumb">', '</nav>' ); ?>
               <?php endif; ?>
              </div>    
          <h1
            class="font-serif font-bold text-[#C24C33] mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[56px]">
            <?php echo esc_html($s1['heading']); ?></h1>
          <div class="text-lg lg:text-xl leading-[1.6] text-[#33170F] mt-[22px] mb-6">
            <?php echo wp_kses_post($s1['description']); ?></div>
          <div class="mt-8 w-full flex flex-col sm:flex-row items-start sm:items-center gap-4 lg:gap-5">
            <a href="<?php echo esc_url($s1['primary_button_url']); ?>"
                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-[#C24C33] text-white rounded-full font-bold text-base transition hover:bg-[#a83d27]">
                <?php echo esc_html($s1['primary_button_text']); ?>
                <span class="ml-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </span>
            </a>
            <a href="<?php echo esc_url($s1['secondary_button_url']); ?>"
                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-white border border-[#C24C33] text-[#C24C33] rounded-full font-bold text-base transition hover:bg-[#C24C33]/10">
                <?php echo esc_html($s1['secondary_button_text']); ?>
                <span class="ml-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </span>
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
        <?php if (!empty($s2['nav_items'])):
          foreach ($s2['nav_items'] as $i => $item):
            $anchor = $jump_anchors[$i] ?? 'what-is-psychologist';
            $is_active = $i === 0;
            ?>
                <a href="#<?php echo esc_attr($anchor); ?>"
                  class="font-sans <?php echo $is_active ? 'font-bold text-brand-hover bg-brand-active' : 'font-medium text-brand-taupe bg-transparent'; ?> text-[15px] leading-5 whitespace-nowrap rounded-full px-[18px] py-2.5"><?php echo esc_html($item['label']); ?></a>
            <?php endforeach; endif; ?>
      </nav>
    </div>
  </div>

  <!-- ================= SECTION 3: WHAT IS A PSYCHOLOGIST ================= -->
  <section id="mh-what" class="section section--white" data-reveal>
    <div class="container max-w-[1360px] mx-auto px-4 md:px-8">
      <div class="grid grid-cols-1 gap-12 items-start lg:grid-cols-[777px_529px] lg:gap-[46px]">
        <div>
          <h2 id="what-is-psychologist"
            class="font-serif font-bold text-brand-heading m-0 text-[32px] leading-[1.2] md:text-[40px] lg:text-[48px]">
            <?php echo esc_html($s3['heading']); ?></h2>
          <div class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0">
            <?php echo wp_kses_post($s3['paragraph_1']); ?></div>
          <div class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0">
            <?php echo wp_kses_post($s3['paragraph_2']); ?></div>
          <div class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0">
            <?php echo wp_kses_post($s3['paragraph_3']); ?></div>
        </div>
        <div class="lg:sticky lg:top-[148px] flex flex-col gap-6 h-full">
          <div class="relative overflow-hidden bg-[#A93E28] rounded-3xl p-6 lg:p-8 h-full flex flex-col">
            <div class="relative mb-4">
              <div class="w-[50px] h-[48px]"><?php if (!empty($s3['card_icon'])): ?><img
                      src="<?php echo esc_url($s3['card_icon']); ?>" alt="Icon" /><?php endif; ?></div>
            </div>
            <h3
              class="relative font-serif font-bold text-[22px] md:text-[28px] tracking-[1px] uppercase text-white m-0 mb-8">
              <?php echo esc_html($s3['card_heading']); ?></h3>
            <div class="relative flex flex-col gap-6">
              <?php if (!empty($s3['card_items'])):
                foreach ($s3['card_items'] as $item): ?>
                      <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-3">
                          <div class="w-7 h-7"><?php if (!empty($item['icon'])): ?><img
                                  src="<?php echo esc_url($item['icon']); ?>" alt="Icon" /><?php endif; ?></div>
                          <h4
                            class="text-white text-[18px] md:text-[24px] font-bold font-serif m-0 underline underline-offset-4 decoration-white/70">
                            <?php echo esc_html($item['title']); ?></h4>
                        </div>
                        <div class="text-white/90 text-[15px] md:text-[17px] leading-[1.6] m-0 pl-[40px]">
                          <?php echo wp_kses_post($item['text']); ?></div>
                      </div>
                  <?php endforeach; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 4: WHAT DOES A PSYCHOLOGIST DO ================= -->
  <section class="section bg-[#FFF7F3]">
    <div class="container" data-reveal>
      <div class="text-center mb-[48px] md:mb-[64px]">
        <h2 id="what-they-do"
          class="font-serif font-bold text-brand-heading m-0 text-[32px] leading-[1.2] md:text-[40px] lg:text-[48px]">
          <?php echo esc_html($s4['heading']); ?></h2>
        <div class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0 max-w-[800px] mx-auto">
          <?php echo wp_kses_post($s4['intro_text']); ?></div>
      </div>

      <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 xl:grid-cols-[618px_650px] lg:gap-16 items-center">
        <div class="flex flex-col">
          <div id="psyTasksList" class="flex flex-col border-b border-[#F0E6E0]">
            <?php if (!empty($s4['tasks'])):
              foreach ($s4['tasks'] as $i => $task):
                $active = $i === 0; ?>
                    <button type="button"
                      class="psy-tasks__item <?php echo $active ? 'is-active' : ''; ?> group flex items-center justify-between py-6 border-t border-[#F0E6E0] text-left transition-colors w-full cursor-pointer bg-transparent"
                      data-task="<?php echo esc_attr($i + 1); ?>" data-chip="<?php echo esc_attr($task['chip']); ?>"
                      data-title="<?php echo esc_attr($task['title']); ?>"
                      data-desc="<?php echo esc_attr($task['description']); ?>">
                      <div class="flex items-center gap-6">
                        <?php
                        $bg_colors = ['bg-[#C24C33]', 'bg-[#E9F2ED]', 'bg-[#E4EDF4]', 'bg-[#F4EFE6]'];
                        $bg_class = isset($bg_colors[$i]) ? $bg_colors[$i] : 'bg-[#E9F2ED]';
                        ?>
                        <div
                          class="w-[54px] h-[54px] rounded-[16px] flex items-center justify-center transition-colors group-[.is-active]:bg-[#C24C33] <?php echo $bg_class; ?>">
                          <?php if (!empty($task['icon'])): ?><img src="<?php echo esc_url($task['icon']); ?>"
                                alt="<?php echo esc_attr($task['title']); ?> icon"
                                class="w-6 h-6 object-contain transition-all group-[.is-active]:brightness-0 group-[.is-active]:invert" /><?php endif; ?>
                        </div>
                        <span
                          class="font-serif font-bold text-[20px] md:text-[24px] transition-colors group-[.is-active]:text-[#C24C33] text-[#241C19]"><?php echo esc_html($task['title']); ?></span>
                      </div>
                      <svg class="w-5 h-5 opacity-0 group-[.is-active]:opacity-100 transition-opacity stroke-[#C24C33]"
                        fill="none" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                      </svg>
                    </button>
                <?php endforeach; endif; ?>
          </div>
          <div class="mt-8 pl-5 border-l-2 border-[#C24C33]">
            <div class="text-[#4E403B] text-[15px] md:text-[18px] leading-[1.6] m-0">
              <?php echo wp_kses_post($s4['footer_text']); ?></div>
          </div>
        </div>

        <div
          class="relative w-full h-[380px] md:h-[450px] lg:h-[530px] rounded-[32px] overflow-hidden bg-[#F8F5F2] shadow-sm">
          <div id="psyTasksPreview" class="absolute inset-0 w-full h-full">
            <?php if (!empty($s4['tasks'])):
              foreach ($s4['tasks'] as $i => $task):
                $active = $i === 0; ?>
                    <?php if (!empty($task['image'])): ?><img src="<?php echo esc_url($task['image']); ?>"
                          alt="<?php echo esc_attr($task['title']); ?>"
                          class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 opacity-0 [&.is-active]:opacity-100 <?php echo $active ? 'is-active' : ''; ?>"
                          data-task-img="<?php echo esc_attr($i + 1); ?>" /><?php endif; ?>
                <?php endforeach; endif; ?>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent pointer-events-none">
          </div>
          <?php $first_task = !empty($s4['tasks']) ? $s4['tasks'][0] : null;
          if ($first_task): ?>
              <div class="absolute bottom-0 left-0 w-full p-6 lg:p-8 z-10 pointer-events-none">
                <span id="psyTasksChip"
                  class="inline-block px-4 py-1.5 rounded-full bg-[#C24C33] text-white font-bold text-[11px] md:text-[12px] tracking-[1px] uppercase mb-4"><?php echo esc_html($first_task['chip']); ?></span>
                <h3 id="psyTasksTitle" class="font-serif font-bold text-white text-[28px] md:text-[32px] m-0 mb-3">
                  <?php echo esc_html($first_task['title']); ?></h3>
                <div id="psyTasksDesc" class="text-white text-[15px] md:text-[18px] leading-[1.6] m-0">
                  <?php echo wp_kses_post($first_task['description']); ?></div>
              </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 5: TYPES OF PSYCHOLOGISTS ================= -->
  <section class="section bg-white" data-reveal>
    <div class="container">
      <div class="mb-12">
        <h2 id="types-of-psychologists" class="h2 mb-4"><?php echo esc_html($s5['heading']); ?></h2>
        <div class="text-[16px] md:text-[20px] leading-[1.6] text-[#5B5B5B] mt-4 mb-0">
          <?php echo wp_kses_post($s5['intro_text']); ?></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 mb-12">
        <?php if (!empty($s5['cards'])):
          foreach ($s5['cards'] as $card): ?>
                <div class="border border-[#F2E4DC] rounded-[18px] p-6 lg:p-8 hover:shadow-sm transition-shadow duration-300">
                  <div class="flex items-center gap-4 mb-4">
                    <?php if (!empty($card['icon'])): ?><img src="<?php echo esc_url($card['icon']); ?>"
                          alt="<?php echo esc_attr($card['title']); ?> icon"
                          class="w-[50px] h-[50px] shrink-0 object-contain" /><?php endif; ?>
                    <h3 class="font-serif font-bold text-[#33170F] text-[20px] md:text-[24px] m-0">
                      <?php echo esc_html($card['title']); ?></h3>
                  </div>
                  <div class="text-[#5B5B5B] text-[15px] md:text-[16px] leading-[1.6] m-0">
                    <?php echo wp_kses_post($card['description']); ?></div>
                </div>
            <?php endforeach; endif; ?>
      </div>
      <div
        class="bg-[#C24C33] rounded-[24px] p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left shadow-sm">
        <div>
          <h3 class="font-serif font-bold text-white text-[20px] md:text-[26px] m-0 mb-3">
            <?php echo esc_html($s5['cta_heading']); ?></h3>
          <div class="text-white/90 text-[16px] md:text-[18px] leading-[1.6] m-0"><?php echo wp_kses_post($s5['cta_text']); ?>
          </div>
        </div>
        <a href="<?php echo esc_url($s5['cta_button_url']); ?>"
          class="inline-flex items-center justify-center px-8 py-2 rounded-full bg-white text-[#C24C33] font-bold text-[16px] hover:bg-gray-50 transition-colors whitespace-nowrap shrink-0"><?php echo esc_html($s5['cta_button_text']); ?></a>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 6: VS PSYCHIATRIST ================= -->
  <section class="section bg-[#FFF7F3]" data-reveal>
    <div class="container">
      <div class="mb-10 text-left">
        <h2 id="vs-psychiatrist" class="h2 mb-4"><?php echo esc_html($s6['heading']); ?></h2>
        <div class="text-[16px] md:text-[20px] leading-[1.6] text-[#5B5B5B] mb-0">
          <?php echo wp_kses_post($s6['intro_text']); ?></div>
      </div>
      <div class="bg-white rounded-[24px] overflow-hidden shadow-sm mb-12">
        <div class="overflow-x-auto">
          <div class="min-w-[900px]">
            <div
              class="grid grid-cols-[30%_35%_35%] bg-[#C24C33] text-white font-bold text-[12px] md:text-[13px] tracking-[0.1em] uppercase px-8 py-5">
              <div><?php echo esc_html($s6['table_col1_header']); ?></div>
              <div><?php echo esc_html($s6['table_col2_header']); ?></div>
              <div><?php echo esc_html($s6['table_col3_header']); ?></div>
            </div>
            <?php if (!empty($s6['rows'])):
              foreach ($s6['rows'] as $row): ?>
                    <div
                      class="grid grid-cols-[30%_33%_33%] px-8 py-6 items-center border-b border-[#F0E6E0] last:border-b-0 hover:bg-[#FAF6F3] gap-5 transition-colors">
                      <div class="flex items-center gap-4">
                        <?php if (!empty($row['icon'])): ?><img src="<?php echo esc_url($row['icon']); ?>"
                              alt="<?php echo esc_attr($row['label']); ?> icon"
                              class="w-[40px] h-[40px] shrink-0 object-contain" /><?php endif; ?>
                        <span
                          class="font-serif font-bold text-[#241C19] text-[16px] md:text-[18px]"><?php echo esc_html($row['label']); ?></span>
                      </div>
                      <div class="text-[#241C19] text-[14px] md:text-[16px] font-semibold"><?php echo esc_html($row['col2']); ?>
                      </div>
                      <div class="text-[#6F6259] text-[14px] md:text-[16px]"><?php echo esc_html($row['col3']); ?></div>
                    </div>
                <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
      <div class="relative bg-[#683325] rounded-[24px] overflow-hidden p-8 md:p-12 shadow-sm text-left">
        <div class="relative z-10">
          <h3 class="font-serif font-bold text-white text-[24px] md:text-[32px] m-0 mb-4">
            <?php echo esc_html($s6['cta_heading']); ?></h3>
          <div class="text-white/90 text-[15px] md:text-[20px] leading-[1.6] m-0"><?php echo wp_kses_post($s6['cta_text']); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 7: WHERE THEY WORK ================= -->
  <section class="section bg-[#F8EBE2]">
    <div class="container" data-reveal>
      <div class="mb-10 text-left">
        <h2 id="where-they-work" class="h2"><?php echo esc_html($s7['heading']); ?></h2>
        <div class="text-[16px] md:text-[20px] leading-[1.6] text-[#5B5B5B] mt-4 mb-0 max-w-[900px]">
          <?php echo wp_kses_post($s7['intro_text']); ?></div>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 mb-6 lg:mb-8">
        <?php if (!empty($s7['cards'])):
          foreach (array_slice($s7['cards'], 0, 4) as $card): ?>
                <div
                  class="bg-white rounded-[24px] p-6 flex flex-col sm:flex-row gap-6 items-start hover:shadow-md hover:-translate-y-1 transition-all duration-300 h-full">
                  <?php if (!empty($card['image'])): ?><img src="<?php echo esc_url($card['image']); ?>"
                        alt="<?php echo esc_attr($card['title']); ?>"
                        class="w-full sm:w-[140px] h-[200px] sm:h-[140px] rounded-[16px] object-cover shrink-0" /><?php endif; ?>
                  <div>
                    <h3 class="font-serif font-bold text-[#33170F] text-[20px] md:text-[22px] m-0 mb-3">
                      <?php echo esc_html($card['title']); ?></h3>
                    <div class="text-[#5B5B5B] text-[15px] md:text-[16px] leading-[1.6] m-0">
                      <?php echo wp_kses_post($card['description']); ?></div>
                  </div>
                </div>
            <?php endforeach; endif; ?>
      </div>
      <?php if (!empty($s7['cards'][4])):
        $card = $s7['cards'][4]; ?>
          <div
            class="bg-white rounded-[24px] p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:shadow-md hover:-translate-y-1 transition-all duration-300 mb-12">
            <?php if (!empty($card['image'])): ?><img src="<?php echo esc_url($card['image']); ?>"
                  alt="<?php echo esc_attr($card['title']); ?>"
                  class="w-full sm:w-[140px] h-[200px] sm:h-[140px] rounded-[16px] object-cover shrink-0" /><?php endif; ?>
            <div class="w-full">
              <h3 class="font-serif font-bold text-[#33170F] text-[20px] md:text-[22px] m-0 mb-3">
                <?php echo esc_html($card['title']); ?></h3>
              <div class="text-[#5B5B5B] text-[15px] md:text-[16px] leading-[1.6] m-0">
                <?php echo wp_kses_post($card['description']); ?></div>
            </div>
          </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- ================= SECTION 8: EDUCATION ================= -->
  <section class="section bg-white" data-reveal>
    <div class="container">
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[787px_472px] gap-10 lg:gap-16 items-center">
        <div>
          <h2 id="education" class="h2 mb-4"><?php echo esc_html($s8['heading']); ?></h2>
          <div class="text-[16px] md:text-[20px] leading-[1.6] text-[#5B5B5B] flex flex-col gap-6">
            <div class="m-0"><?php echo wp_kses_post($s8['paragraph_1']); ?></div>
            <div class="m-0"><?php echo wp_kses_post($s8['paragraph_2']); ?></div>
          </div>
        </div>
        <div class="relative w-full h-[300px] md:h-[380px] lg:h-[420px] rounded-[24px] overflow-hidden shadow-sm">
          <?php if (!empty($s8['image'])): ?><img src="<?php echo esc_url($s8['image']); ?>"
                alt="<?php echo esc_attr($s8['heading']); ?>" class="w-full h-full object-cover" /><?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 9: HOW TO FIND ================= -->
  <section class="section bg-[#F8EBE2]">
    <div class="container" data-reveal>
      <div class="mb-10 text-left">
        <h2 id="how-to-find" class="h2 mb-4"><?php echo esc_html($s9['heading']); ?></h2>
        <div class="text-[16px] md:text-[20px] leading-[1.6] text-[#5B5B5B] m-0 max-w-[900px]">
          <?php echo wp_kses_post($s9['intro_text']); ?></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-6 lg:mb-8">
        <div
          class="bg-white rounded-[24px] p-8 md:p-10 flex flex-col justify-between h-full shadow-sm hover:-translate-y-1 transition-all duration-300">
          <div>
            <div class="flex items-center gap-4 mb-6"><span
                class="text-[#B15E4C] font-bold text-[13px] tracking-wider uppercase"><?php echo esc_html($s9['route1_label']); ?></span>
            </div>
            <h3 class="font-serif font-bold text-[#33170F] text-[24px] md:text-[28px] leading-[1.3] mb-4">
              <?php echo esc_html($s9['route1_title']); ?></h3>
            <div class="text-[#5B5B5B] text-[15px] md:text-[17px] leading-[1.6] mb-8">
              <?php echo wp_kses_post($s9['route1_text']); ?></div>
          </div>
          <div class="flex flex-wrap gap-3">
            <?php if (!empty($s9['route1_tags'])):
              foreach ($s9['route1_tags'] as $tag): ?>
                    <div
                      class="inline-flex items-center gap-2 bg-[#E4EDF4] text-[#415C73] px-4 py-2 rounded-full text-[13px] md:text-[14px] font-semibold">
                      <?php echo esc_html($tag['text']); ?></div>
                <?php endforeach; endif; ?>
          </div>
        </div>

        <div
          class="relative w-full h-[300px] md:h-full lg:h-auto min-h-[481px] rounded-[24px] overflow-hidden shadow-sm hover:-translate-y-1 transition-all duration-300">
          <?php if (!empty($s9['center_image'])): ?><img src="<?php echo esc_url($s9['center_image']); ?>"
                alt="Norway Psychologist Session" class="w-full h-full object-cover absolute inset-0" /><?php endif; ?>
        </div>

        <div
          class="bg-white rounded-[24px] p-8 md:p-10 flex flex-col justify-between h-full shadow-sm hover:-translate-y-1 transition-all duration-300">
          <div>
            <div class="flex items-center gap-4 mb-6"><span
                class="text-[#A58550] font-bold text-[13px] tracking-wider uppercase"><?php echo esc_html($s9['route2_label']); ?></span>
            </div>
            <h3 class="font-serif font-bold text-[#33170F] text-[24px] md:text-[28px] leading-[1.3] mb-4">
              <?php echo esc_html($s9['route2_title']); ?></h3>
            <div class="text-[#5B5B5B] text-[15px] md:text-[17px] leading-[1.6] mb-8">
              <?php echo wp_kses_post($s9['route2_text']); ?></div>
          </div>
          <div class="flex flex-wrap gap-3">
            <?php if (!empty($s9['route2_tags'])):
              foreach ($s9['route2_tags'] as $tag): ?>
                    <div
                      class="inline-flex items-center gap-2 bg-[#E4EDF4] text-[#415C73] px-4 py-2 rounded-full text-[13px] md:text-[14px] font-semibold">
                      <?php echo esc_html($tag['text']); ?></div>
                <?php endforeach; endif; ?>
          </div>
        </div>
      </div>

      <div
        class="bg-[#C24C33] rounded-[24px] p-8 md:p-10 flex flex-col md:flex-row items-center justify-between gap-8 shadow-sm">
        <div class="text-center md:text-left">
          <h3 class="font-serif font-bold text-white text-[24px] md:text-[32px] leading-[1.2] m-0 mb-3">
            <?php echo esc_html($s9['cta_heading']); ?></h3>
          <div class="text-white/90 text-[16px] md:text-[18px] leading-[1.6] m-0"><?php echo wp_kses_post($s9['cta_text']); ?>
          </div>
        </div>
        <a href="<?php echo esc_url($s9['cta_button_url']); ?>"
          class="inline-flex items-center justify-center px-8 py-2 rounded-full bg-white text-[#C24C33] font-bold text-[16px] hover:bg-gray-50 transition-colors whitespace-nowrap shrink-0 shadow-sm"><?php echo esc_html($s9['cta_button_text']); ?></a>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 10: MEET OUR PSYCHOLOGISTS ================= -->
  <section class="section bg-white" data-reveal>
    <div class="container">
      <div class="mb-12">
        <h2 id="our-psychologists" class="h2 mb-4"><?php echo esc_html($s10['heading']); ?></h2>
        <div class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6]"><?php echo wp_kses_post($s10['text']); ?></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        <?php if (!empty($s10['doctors'])):
          foreach ($s10['doctors'] as $doc): ?>
                <div
                  class="bg-white border border-[#F2E4DC] rounded-[24px] p-4 shadow-sm flex flex-col h-full hover:shadow-md transition-shadow">
                  <div class="relative w-full h-[260px] md:h-[320px] rounded-[16px] overflow-hidden mb-5">
                    <?php if (!empty($doc['image'])): ?><img src="<?php echo esc_url($doc['image']); ?>"
                          alt="<?php echo esc_attr($doc['name']); ?>" class="w-full h-full object-cover" /><?php endif; ?>
                    <div
                      class="absolute bottom-3 left-3 right-3 bg-[#FFFFFF33] backdrop-blur-[18px] border border-[#FFFFFF57] shadow-lg rounded-[12px] px-5 py-4 text-white">
                      <h3 class="font-serif text-[20px] text-white font-bold leading-snug"><?php echo esc_html($doc['name']); ?>
                      </h3>
                      <div class="text-white/90 text-[12px] mt-0.5"><?php echo wp_kses_post($doc['role']); ?></div>
                    </div>
                  </div>
                  <div class="flex flex-col flex-grow justify-between px-2 pb-2">
                    <div class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6] mb-6"><?php echo wp_kses_post($doc['bio']); ?>
                    </div>
                    <div class="flex flex-col w-full gap-3 mt-auto">
  					<a href="<?php echo esc_url($doc['primary_button_url']); ?>"
    					class="flex w-full items-center justify-center gap-1.5 bg-[#A93E28] text-white text-[13px] md:text-[16px] font-bold py-2.5 px-5 rounded-full hover:bg-opacity-90 transition-all">
    					<?php echo esc_html($doc['primary_button_text']); ?> &rarr;
  					</a>
  					<?php if (!empty($doc['secondary_button_text'])): ?>
    					<a href="<?php echo esc_url($doc['secondary_button_url']); ?>"
      					class="flex w-full items-center justify-center gap-1.5 bg-[#FFF7F3] text-[#C24C33] text-[13px] md:text-[16px] font-bold py-2.5 px-5 rounded-full hover:bg-[#F7EBE8] transition-all border border-[#F2E4DC]">
      					<?php echo esc_html($doc['secondary_button_text']); ?> &rarr;
    					</a>
  					<?php endif; ?>
					</div>
                  </div>
                </div>
            <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 11: HOW TO BOOK ================= -->
  <section class="section bg-[#FFF7F3]" data-reveal>
    <div class="container">
      <div class="text-center mb-12 md:mb-16 max-w-3xl mx-auto">
        <h2 class="h2"><?php echo esc_html($s11['heading']); ?></h2>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[720px_560px] gap-10 lg:gap-16 items-start">
        <div>
          <h3 class="font-serif text-[#2B211F] font-bold text-[28px] md:text-[36px] mb-4">
            <?php echo esc_html($s11['subheading']); ?></h3>
          <div class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] mb-8">
            <?php echo wp_kses_post($s11['intro_text']); ?></div>
          <div class="flex flex-col gap-4">
            <?php if (!empty($s11['steps'])):
              foreach ($s11['steps'] as $i => $step): ?>
                    <div
                      class="bg-white rounded-[16px] border border-[#F2E4DC] p-6 md:p-8 flex gap-6 items-start group cursor-pointer hover:border-[#C24C33] transition-colors duration-300 appointment-step"
                      data-step="<?php echo esc_attr($i + 1); ?>" data-image="<?php echo esc_url($step['image']); ?>">
                      <span
                        class="font-serif font-bold text-[36px] text-[#ECA997] group-hover:text-[#C24C33] transition-colors duration-300 leading-none mt-0.5"><?php echo esc_html($i + 1); ?></span>
                      <div>
                        <h4
                          class="font-serif font-bold text-[#241C19] group-hover:text-[#C24C33] transition-colors duration-300 text-[18px] md:text-[24px] mb-2">
                          <?php echo esc_html($step['title']); ?></h4>
                        <div class="text-[#6B5F5A] text-[14px] md:text-[15px] leading-[1.6] m-0">
                          <?php echo wp_kses_post($step['description']); ?></div>
                      </div>
                    </div>
                <?php endforeach; endif; ?>
          </div>
        </div>
        <div
          class="relative w-full h-[350px] md:h-[400px] lg:h-[500px] rounded-[32px] lg:sticky lg:top-32 overflow-hidden">
          <?php $first_step = !empty($s11['steps']) ? $s11['steps'][0] : null; ?>
          <img id="appointment-step-img" src="<?php echo esc_url($first_step['image'] ?? ''); ?>"
            alt="Booking an appointment" class="w-full h-full object-cover transition-opacity duration-300" />
          <div class="absolute top-6 left-6 bg-white rounded-full py-1.5 px-2 pr-4 flex items-center gap-2 shadow-sm">
            <div id="appointment-step-badge"
              class="w-6 h-6 rounded-full bg-[#A93E28] text-white flex items-center justify-center text-[12px] font-bold transition-colors duration-300">
              1</div>
            <span class="text-[#33170F] font-bold text-[11px] tracking-wider uppercase">Four Steps</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 12: READY TO SPEAK CTA ================= -->
  <section class="section" data-reveal>
    <div class="container">
      <div
        class="relative overflow-hidden rounded-[32px] p-8 md:p-12 lg:p-16 flex flex-col md:flex-row items-center gap-10"
        style="background: radial-gradient(46% 62% at 92% 88%, rgba(240, 147, 103, 0.14) 0%, rgba(240, 147, 103, 0) 70%), radial-gradient(46% 62% at 8% 84%, rgba(248, 216, 212, 0.55) 0%, rgba(248, 216, 212, 0) 70%), radial-gradient(58% 74% at 50% 0%, rgba(248, 235, 226, 0.9) 0%, rgba(248, 235, 226, 0) 72%);">
        <div class="w-full md:w-1/2 flex flex-col items-start text-left z-10">
          <h2 class="font-serif text-[32px] md:text-[44px] text-[#241C19] font-bold m-0 mb-4">
            <?php echo esc_html($s12['heading']); ?></h2>
          <div class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6] m-0 mb-8 max-w-[500px]">
            <?php echo wp_kses_post($s12['text']); ?></div>
          <div class="flex flex-wrap items-center gap-4">
            <a href="<?php echo esc_url($s12['primary_button_url']); ?>"
              class="inline-flex items-center justify-center px-7 py-3 bg-[#C24C33] hover:bg-[#B34A34] text-white text-[15px] font-bold rounded-full transition-colors duration-300 no-underline"><?php echo esc_html($s12['primary_button_text']); ?>
              <span class="ml-2 font-bold text-lg leading-none mb-[2px]">→</span></a>
            <a href="<?php echo esc_url($s12['secondary_button_url']); ?>"
              class="inline-flex items-center justify-center px-7 py-3 bg-transparent border border-[#C24C33] text-[#C24C33] hover:bg-[#C24C33] hover:text-white text-[15px] font-bold rounded-full transition-colors duration-300 no-underline"><?php echo esc_html($s12['secondary_button_text']); ?>
              <span class="ml-2 font-bold text-lg leading-none mb-[2px]">→</span></a>
          </div>
        </div>
        <div class="w-full md:w-1/2 flex justify-center md:justify-end z-10 relative">
          <?php if (!empty($s12['image'])): ?><img src="<?php echo esc_url($s12['image']); ?>"
                alt="<?php echo esc_attr($s12['heading']); ?>" class="w-full max-w-[480px] object-contain" /><?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 13: FAQ ================= -->
  <section id="mh-faq" class="section section--white pb-12" data-reveal>
    <div class="container max-w-[1360px]">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-6">
          <div>
            <span
              class="text-[#C24C33] text-[11px] font-bold tracking-widest uppercase mb-3 block"><?php echo esc_html($s13['eyebrow']); ?></span>
            <h2 id="faq" class="font-serif font-bold text-[40px] md:text-[56px] leading-[1.1] text-[#241C19] m-0 mb-4">
              <?php echo esc_html($s13['heading']); ?></h2>
            <div class="text-[16px] leading-[26px] text-[#6B5F5A] m-0 mb-6 max-w-[420px]">
              <?php echo wp_kses_post($s13['intro_text']); ?></div>
            <a href="#"
              class="inline-flex items-center justify-center px-6 py-2.5 bg-transparent border border-[#C24C33] text-[#C24C33] hover:bg-[#C24C33] hover:text-white text-[15px] font-bold rounded-full transition-colors duration-300 no-underline w-fit"><?php echo esc_html($s13['button_text']); ?></a>
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
              <span
                class="font-sans font-bold text-[16px] text-[#C24C33]"><?php echo esc_html($s13['info_label']); ?></span>
            </div>
            <div class="text-[16px] leading-[22px] text-[#6B5F5A] m-0 mb-5 max-w-[380px]">
              <?php echo wp_kses_post($s13['info_text']); ?></div>
            <button type="button" onclick="location.href = '#mh-book'"
              class="bg-[#C24C33] hover:bg-[#B34A34] text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer w-fit border-0">
              <span><?php echo esc_html($s13['info_button_text']); ?></span><span
                class="font-bold text-lg leading-none mb-[2px]">→</span>
            </button>
          </div>
        </div>
        <div class="lg:col-span-7 flex flex-col gap-4">
          <?php if (!empty($s13['faq_items'])):
            foreach ($s13['faq_items'] as $faq): ?>
                  <div
                    class="faq-item group bg-white border border-[#F2E8E3] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
                    <button
                      class="w-full flex items-center justify-between p-6 sm:px-8 sm:py-6 bg-transparent border-0 cursor-pointer text-left">
                      <h3
                        class="font-serif font-bold text-[18px] sm:text-[20px] text-[#241C19] group-[.is-open]:text-[#C24C33] transition-colors pr-4"><?php echo esc_html($faq['question']); ?></h3>
                      <span class="relative w-4 h-4 flex-none shrink-0 transition-transform duration-300">
                        <span class="absolute top-1/2 left-0 w-full h-[2px] bg-[#C24C33] -translate-y-1/2"></span>
                        <span
                          class="absolute top-0 left-1/2 w-[2px] h-full bg-[#C24C33] -translate-x-1/2 transition-transform duration-300 group-[.is-open]:rotate-90"></span>
                      </span>
                    </button>
                    <div class="faq-content hidden px-6 sm:px-8 pb-7 pt-0">
                      <div class="text-[16px] leading-[26px] text-[#6B5F5A] m-0"><?php echo wp_kses_post($faq['answer']); ?></div>
                    </div>
                  </div>
              <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 14: EMERGENCY BANNER ================= -->
  <section class="section pt-0 pb-[90px]" data-reveal>
    <div class="container mx-auto px-4 max-w-[1360px]">
      <div class="bg-[#C24C33] rounded-[24px] p-8 md:p-10 relative overflow-hidden flex flex-col gap-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 relative z-10">
          <h3 class="font-serif font-bold text-[20px] md:text-[24px] text-white font-medium m-0 tracking-wide">
            <?php echo esc_html($s14['heading']); ?></h3>
          <span class="text-white text-[16px] whitespace-nowrap"><?php echo esc_html($s14['subtext']); ?></span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 relative z-10">
          <?php if (!empty($s14['contacts'])):
            foreach ($s14['contacts'] as $c): ?>
                  <div class="bg-white/10 hover:bg-white/15 transition-colors rounded-[12px] p-5 flex items-center gap-4">
                    <div class="w-[50px] h-[50px] shrink-0"><img
                        src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/call-6.webp"
                        alt="Phone icon" class="object-contain" /></div>
                    <div class="flex flex-col">
                      <span
                        class="text-white/80 text-[10px] font-bold tracking-[0.15em] uppercase mb-1"><?php echo esc_html($c['label']); ?></span>
                      <div class="text-white font-bold text-[22px] leading-none"><?php echo esc_html($c['number']); ?></div>
                    </div>
                  </div>
              <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>