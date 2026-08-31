<?php
/* Template Name: Stress */
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
        <div class="max-w-full lg:max-w-[710px]">
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
    <div class="container">
      <nav class="ps-jump flex items-center justify-center gap-0.5 bg-[#FDF6F2] rounded-full px-3.5 py-2 overflow-x-auto w-fit mx-auto">
        <a href="#mh-what" class="font-sans font-bold text-[15px] leading-5 whitespace-nowrap text-brand-hover bg-brand-active rounded-full px-[18px] py-2.5">What is Stress</a>
        <a href="#mh-conditions" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Symptoms</a>
        <a href="#mh-activity" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">What Can Cause</a>
        <a href="#mh-seek" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Types</a>
        <a href="#mh-youth" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Professional Assessment</a>
        <a href="#mh-substance" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Stress & Other Difficulties</a>
        <a href="#mh-relatives" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">Psychologist for Stress</a>
        <a href="#mh-faq" class="font-sans font-medium text-[15px] leading-5 whitespace-nowrap text-brand-taupe bg-transparent rounded-full px-[18px] py-2.5">FAQS</a>
      </nav>
    </div>
  </div>

  <!-- SECTION 2: WHAT IS STRESS -->
  <section id="mh-what" class="section section--white" data-reveal>
    <div class="container max-w-[1360px] mx-auto px-4 md:px-8">
      <div class="grid grid-cols-1 gap-12 items-start lg:grid-cols-[689px_571px] lg:gap-[46px]">
        <div>
          <h2 class="font-serif font-bold text-brand-heading m-0 text-[32px] leading-[1.2] md:text-[40px] lg:text-[48px] text-[#241C19]"><?php echo esc_html($s2['heading']); ?></h2>
          <div class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0"><?php echo $s2['paragraph_1']; ?></div>
          <div class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0"><?php echo $s2['paragraph_2']; ?></div>
          <div class="text-lg md:text-xl leading-[1.6] text-[#5B5B5B] mt-6 mb-0"><?php echo $s2['paragraph_3']; ?></div>
        </div>
        <div class="lg:sticky lg:top-[148px] flex flex-col gap-6">
          <div class="bg-[#FFF7F3] border border-[#F2E4DC] rounded-[20px] p-6 md:p-8">
            <div class="mb-4 w-10 h-10"><?php if (!empty($s2['fact_icon'])): ?><img src="<?php echo esc_url($s2['fact_icon']); ?>" alt="" class="object-contain"><?php endif; ?></div>
            <h3 class="font-serif font-bold text-[20px] md:text-[24px] text-[#241C19] m-0 mb-4"><?php echo esc_html($s2['fact_heading']); ?></h3>
            <p class="text-[12px] md:text-[15px] leading-[1.6] text-[#6B5F5A] m-0"><?php echo esc_html($s2['fact_text']); ?></p>
          </div>
          <div class="relative overflow-hidden bg-[#B1412A] rounded-3xl p-6 md:p-8">
            <p class="relative text-[15px] md:text-[18px] font-extrabold tracking-[2px] uppercase text-white m-0 mb-8"><?php echo esc_html($s2['comparison_kicker']); ?></p>
            <div class="relative flex flex-col gap-6">
              <div class="flex items-center gap-4">
               <img
                src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/Psykolog-1.webp"
                alt="Icon"
                class="w-8 h-8"
              />
                <p class="text-white text-[15px] md:text-[16px] leading-[1.5] m-0"><?php echo esc_html($s2['short_term_text']); ?></p>
              </div>
              <div class="flex items-center gap-4">
                <img
                src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/Psykolog-1.webp"
                alt="Icon"
                class="w-8 h-8"
              />
                <p class="text-white text-[15px] md:text-[16px] leading-[1.5] m-0 max-w-[437px]"><?php echo esc_html($s2['prolonged_text']); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: SYMPTOMS TABS -->
  <section id="mh-conditions" class="section bg-[#FFF7F3]">
    <div class="container" data-reveal>
      <div class="text-center mb-[32px]">
        <p class="text-[#C24C33] text-sm md:text-[16px] font-bold tracking-[0.15em] uppercase m-0 mb-4"><?php echo esc_html($s3['kicker']); ?></p>
        <h2 class="h2 mb-4 font-serif font-bold text-[32px] md:text-[40px] text-[#241C19]"><?php echo esc_html($s3['heading']); ?></h2>
        <p class="text-[#6B6B6B] text-[16px] md:text-[18px] m-0 max-w-[700px] mx-auto"><?php echo esc_html($s3['lede']); ?></p>
      </div>

      <?php if (!empty($s3['tabs'])): $ti = 0; ?>
      <div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-8" role="tablist">
        <?php foreach ($s3['tabs'] as $t): ?>
          <button type="button" id="stress-tab-<?php echo $ti; ?>" class="stress-tab px-6 py-2 rounded-full border <?php echo $ti === 0 ? 'border-[#E8B8AC] text-[#C24C33] bg-transparent' : 'border-[#F2E4DC] text-[#333333] bg-white hover:bg-gray-50'; ?> text-[14px] md:text-[16px] font-medium transition-colors cursor-pointer" role="tab" aria-selected="<?php echo $ti === 0 ? 'true' : 'false'; ?>" data-stress-tab="<?php echo $ti; ?>"><?php echo esc_html($t['tab_label']); ?></button>
        <?php $ti++; endforeach; ?>
      </div>

      <div class="bg-white rounded-[2rem] p-4 md:p-6 border border-[#F0F0F0] shadow-sm">
        <?php $ti = 0; foreach ($s3['tabs'] as $t): ?>
          <div id="stress-panel-<?php echo $ti; ?>" class="stress-panel<?php echo $ti === 0 ? ' flex' : ' hidden'; ?> flex-col lg:flex-row items-center gap-8 lg:gap-12" role="tabpanel" data-stress-panel="<?php echo $ti; ?>"<?php echo $ti === 0 ? '' : ' hidden'; ?>>
            <?php if (!empty($t['image'])): ?><img src="<?php echo esc_url($t['image']); ?>" alt="" class="w-full lg:w-[400px] h-[330px] shrink-0 object-contain"><?php endif; ?>
            <div class="flex-1 py-2 lg:py-6">
              <p class="text-[#555555] text-[16px] md:text-[18px] m-0 mb-6"><?php echo esc_html($t['intro_text']); ?></p>
              <div class="flex flex-wrap gap-3 md:gap-4">
                <?php if (!empty($t['items'])): foreach ($t['items'] as $item): ?>
                  <div class="inline-flex items-center gap-2.5 px-4 py-2.5 rounded-full bg-[#FFF7F3] border border-[#F2E4DC]">
                    <span class="w-[24px] h-[24px] flex-none rounded-full bg-[#0B7B6C1A]"></span>
                    <span class="text-[#4E403B] text-[12px] md:text-[15px] font-medium"><?php echo esc_html($item['text']); ?></span>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
        <?php $ti++; endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- SECTION 4: WHAT CAN CAUSE STRESS -->
  <section id="mh-activity" class="section" data-reveal>
    <div class="container">
      <div class="mb-10 md:mb-12 max-w-[1000px]">
        <h2 class="font-serif font-bold text-[32px] md:text-[44px] text-[#241C19] mb-4 m-0"><?php echo esc_html($s4['heading']); ?></h2>
        <p class="text-[16px] md:text-[20px] leading-[1.6] text-[#5B5B5B] m-0"><?php echo esc_html($s4['lede']); ?></p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <?php if (!empty($s4['causes'])): $ci = 0; $cc = count($s4['causes']); foreach ($s4['causes'] as $cause): ?>
          <div class="bg-[#FFF7F3] border border-[#F2E4DC] rounded-[24px] p-6 md:p-8 flex flex-col<?php echo ($ci === $cc - 1 && $cc % 2 === 1) ? ' md:col-span-2' : ''; ?>">
            <div class="flex items-center gap-4 mb-4">
              <div class="w-12 h-12 shrink-0"><?php if (!empty($cause['icon'])): ?><img src="<?php echo esc_url($cause['icon']); ?>" alt="" class="object-contain"><?php endif; ?></div>
              <h3 class="font-serif font-bold text-[20px] md:text-[22px] text-[#241C19] m-0"><?php echo esc_html($cause['title']); ?></h3>
            </div>
            <p class="text-[15px] md:text-[18px] leading-[1.6] text-[#5B5B5B] m-0"><?php echo esc_html($cause['description']); ?></p>
          </div>
        <?php $ci++; endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- SECTION 5: TYPES OF STRESS -->
  <section id="mh-seek" class="section" data-reveal>
    <div class="container">
      <div class="text-center max-w-[900px] mx-auto mb-12 lg:mb-16">
        <h2 class="font-serif font-bold text-[#241C19] text-[32px] md:text-[42px] lg:text-[48px] leading-[1.2] mt-3 mb-4 m-0"><?php echo esc_html($s5['heading']); ?></h2>
        <p class="text-[#6B6B6B] text-[16px] md:text-[18px] leading-[1.6] m-0"><?php echo esc_html($s5['lede']); ?></p>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
        <div class="lg:col-span-6 flex flex-col gap-4">
          <?php if (!empty($s5['types'])): $tyi = 0; foreach ($s5['types'] as $type): ?>
            <button type="button" class="habit-card<?php echo $tyi === 0 ? ' active-card' : ''; ?> text-left w-full relative p-6 rounded-[20px] bg-white border border-[#F2E4DC]<?php echo $tyi === 0 ? ' border-l-[4px] border-l-[#C24C33]' : ''; ?> shadow-sm transition-all duration-200 cursor-pointer"
              data-title="<?php echo esc_attr($type['title']); ?>" data-desc="<?php echo esc_attr($type['description']); ?>" data-img="<?php echo esc_url($type['image'] ?: ''); ?>">
              <div class="flex items-start gap-4 sm:gap-5">
                <div class="w-12 h-12 rounded-xl bg-[#FDECE7] flex items-center justify-center text-[#C24C33] flex-none">
                  <?php if (!empty($type['icon'])): ?><img src="<?php echo esc_url($type['icon']); ?>" alt="" class="object-contain"><?php endif; ?>
                </div>
                <div>
                  <h3 class="font-serif font-bold text-[#241C19] text-[18px] md:text-[20px] mb-2"><?php echo esc_html($type['title']); ?></h3>
                  <p class="text-[#6B6B6B] text-[14px] md:text-[15px] leading-[1.6] m-0"><?php echo esc_html($type['description']); ?></p>
                </div>
              </div>
            </button>
          <?php $tyi++; endforeach; endif; ?>
        </div>
        <div class="lg:col-span-6 lg:sticky lg:top-8">
          <div class="relative overflow-hidden rounded-[24px] h-[380px] lg:h-[500px] w-full bg-[#E5DCD8]">
            <img id="habit-preview-img" src="<?php echo esc_url($s5['types'][0]['image'] ?? ''); ?>" alt="" class="w-full h-[500px] object-cover transition-opacity duration-300">
            <div class="absolute bottom-6 left-6 right-6 sm:bottom-8 sm:left-8 sm:right-8 bg-[#C24C33] text-white p-6 sm:p-8 rounded-[20px] shadow-lg">
              <h3 id="habit-preview-title" class="font-serif font-bold text-white text-[20px] sm:text-[24px] mb-2"><?php echo esc_html($s5['types'][0]['title'] ?? ''); ?></h3>
              <p id="habit-preview-desc" class="text-white text-[14px] sm:text-[15px] leading-[1.6] m-0 font-sans opacity-95"><?php echo esc_html($s5['types'][0]['description'] ?? ''); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: PROFESSIONAL ASSESSMENT -->
  <section id="mh-youth" class="section" data-reveal>
    <div class="container">
      <div class="text-left md:text-center max-w-[1000px] mx-auto mb-12 md:mb-16">
        <h2 class="font-serif font-bold text-[#241C19] text-[32px] md:text-[42px] leading-[1.2] mb-4"><?php echo esc_html($s6['heading']); ?></h2>
        <p class="text-[#6B6B6B] text-[16px] md:text-[18px] leading-[1.6] m-0"><?php echo esc_html($s6['lede']); ?></p>
      </div>
      <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-center mb-12 lg:mb-16">
        <div class="w-full lg:w-[550px]">
          <?php if (!empty($s6['image'])): ?><img src="<?php echo esc_url($s6['image']); ?>" alt="" class="w-full h-[350px] lg:h-[550px] object-cover rounded-[24px] shadow-sm"><?php endif; ?>
        </div>
        <div class="w-full lg:w-[710px] flex flex-col">
          <?php if (!empty($s6['items'])): $ai = 0; $ac = count($s6['items']); foreach ($s6['items'] as $item): ?>
            <div class="flex items-start gap-5 py-5<?php echo $ai < $ac - 1 ? ' border-b border-[#F2E8E3]' : ''; ?>">
              <div class="w-10 h-10 shrink-0 mt-1"><?php if (!empty($item['icon'])): ?><img src="<?php echo esc_url($item['icon']); ?>" alt="" class="object-contain"><?php endif; ?></div>
              <div>
                <h3 class="font-serif text-[16px] md:text-[18px] text-[#241C19] font-bold m-0 mb-1"><?php echo esc_html($item['title']); ?></h3>
                <p class="text-[#6B6B6B] text-[14px] md:text-[15px] leading-[1.5] m-0"><?php echo esc_html($item['description']); ?></p>
              </div>
            </div>
          <?php $ai++; endforeach; endif; ?>
        </div>
      </div>
      <div class="bg-[#5C2A20] rounded-[24px] p-8 flex flex-col md:flex-row items-center gap-8 shadow-md relative overflow-hidden">
        <div class="flex-1 z-10">
          <h3 class="font-serif text-white text-[28px] md:text-[32px] font-bold m-0 mb-4"><?php echo esc_html($s6['callout_heading']); ?></h3>
          <p class="text-white/90 text-[15px] md:text-[20px] m-0 max-w-[875px]"><?php echo esc_html($s6['callout_text']); ?></p>
        </div>
        <div class="w-full md:w-[280px] shrink-0 z-10 flex justify-center md:justify-end">
          <?php if (!empty($s6['callout_image'])): ?><img src="<?php echo esc_url($s6['callout_image']); ?>" alt="" class="w-48 md:w-full h-[260px] max-w-[280px] object-contain"><?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: STRESS AND OTHER DIFFICULTIES -->
  <section id="mh-substance" class="section py-12 md:py-16 bg-[#FFF8F5]" data-reveal>
    <div class="container max-w-[1360px] mx-auto px-4 md:px-8">
      <div class="text-center max-w-[900px] mx-auto mb-12 lg:mb-16">
        <h2 class="font-serif font-bold text-[#241C19] text-[32px] md:text-[42px] leading-[1.2] mb-4"><?php echo esc_html($s7['heading']); ?></h2>
        <p class="text-[#6B6B6B] text-[16px] md:text-[18px] leading-[1.6] m-0"><?php echo esc_html($s7['lede']); ?></p>
      </div>

      <?php if (!empty($s7['items'])): ?>
      <div id="depCooccurTabs" class="flex flex-col lg:flex-row gap-6 lg:gap-8">
        <div class="w-full lg:w-[42%] flex flex-col gap-4">
          <?php $coi = 0; foreach ($s7['items'] as $item): ?>
            <div class="dep-co-tab<?php echo $coi === 0 ? ' is-active' : ''; ?> flex items-center justify-between p-4 rounded-[20px] cursor-pointer transition-colors <?php echo $coi === 0 ? 'bg-[#FAF0EC] border border-[#F2E4DC]' : 'bg-white border border-[#F2E8E3] hover:bg-[#FAF0EC]'; ?>" data-dep-tab="<?php echo $coi; ?>">
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 shrink-0"><?php if (!empty($item['icon'])): ?><img src="<?php echo esc_url($item['icon']); ?>" alt="" class="object-contain"><?php endif; ?></div>
                <h3 class="font-serif text-[18px] md:text-[20px] text-[#241C19] font-bold m-0"><?php echo esc_html($item['title']); ?></h3>
              </div>
              <div class="dep-co-arrow w-8 h-8 rounded-full bg-[#C24C33] flex items-center justify-center text-white shrink-0"<?php echo $coi === 0 ? '' : ' style="display:none;"'; ?>>→</div>
            </div>
          <?php $coi++; endforeach; ?>
        </div>
        <div class="w-full lg:w-[58%] bg-white border border-[#F2E8E3] rounded-[24px] p-8 md:p-10 flex flex-col justify-between min-h-[420px]">
          <?php $coi = 0; foreach ($s7['items'] as $item): ?>
            <div class="dep-co-panel<?php echo $coi === 0 ? ' flex' : ' hidden'; ?> flex-col flex-grow justify-between" data-dep-panel="<?php echo $coi; ?>">
              <div>
                <div class="flex items-center gap-4 mb-6">
                  <div class="w-12 h-12 shrink-0"><?php if (!empty($item['icon'])): ?><img src="<?php echo esc_url($item['icon']); ?>" alt="" class="object-contain"><?php endif; ?></div>
                  <h3 class="font-serif text-[22px] md:text-[26px] text-[#241C19] font-bold m-0"><?php echo esc_html($item['title']); ?></h3>
                </div>
                <p class="text-[#5B5B5B] text-[16px] md:text-[18px] leading-[1.7] m-0 mb-8"><?php echo esc_html($item['description']); ?></p>
              </div>
              <a href="#" class="inline-flex items-center text-[#C24C33] text-[15px] md:text-[16px] font-bold hover:underline transition-all w-fit"><?php echo esc_html($item['link_text']); ?> <span class="ml-1.5">→</span></a>
            </div>
          <?php $coi++; endforeach; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- SECTION 8: PSYCHOLOGIST FOR STRESS -->
  <section id="mh-relatives" class="section">
    <div class="container" data-reveal>
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[681px_550px] gap-10 items-center">
        <div class="flex flex-col justify-center">
          <h2 class="font-serif font-bold text-[#241C19] text-[36px] md:text-[44px] leading-[1.2] mb-4"><?php echo esc_html($s8['heading']); ?></h2>
          <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] m-0 mb-8 md:mb-10"><?php echo esc_html($s8['lede']); ?></p>
          <div class="flex flex-col gap-8 mb-8 md:mb-10">
            <?php if (!empty($s8['options'])): foreach ($s8['options'] as $opt): ?>
              <div class="flex items-start gap-5">
                <div class="w-12 h-12 rounded-2xl bg-[#C24C33] flex items-center justify-center text-white shrink-0 mt-1"><?php if (!empty($opt['icon'])): ?><img src="<?php echo esc_url($opt['icon']); ?>" alt="" class="object-contain"><?php endif; ?></div>
                <div>
                  <h3 class="font-serif font-bold text-[#393939] text-[20px] md:text-[24px] mb-2"><?php echo esc_html($opt['title']); ?></h3>
                  <p class="text-[#5B5B5B] text-[18px] md:text-[20px] leading-[1.6] m-0"><?php echo esc_html($opt['description']); ?></p>
                </div>
              </div>
            <?php endforeach; endif; ?>
          </div>
          <div>
            <p class="text-[#5B5B5B] text-[15px] md:text-[20px] mb-6"><?php echo esc_html($s8['cta_text']); ?></p>
            <a href="#" class="inline-flex items-center justify-center px-7 py-3.5 bg-[#C24C33] hover:bg-[#b0432c] text-white text-[15px] font-bold rounded-full transition-colors shadow-sm"><?php echo esc_html($s8['button_text']); ?> <span class="ml-2 leading-none">→</span></a>
          </div>
        </div>
        <div class="w-full h-[400px] lg:h-[500px] rounded-[28px]">
          <?php if (!empty($s8['image'])): ?><img src="<?php echo esc_url($s8['image']); ?>" alt="" class="w-auto h-full object-cover"><?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: TREATMENT BY PSYCHOLOGISTS -->
  <section class="section bg-[#FFF7F3]">
    <div class="container" data-reveal>
      <div class="mb-8 lg:mb-12 max-w-[1000px]">
        <h2 class="h2 mb-4"><?php echo esc_html($s9['heading']); ?> <em><?php echo esc_html($s9['heading_highlight']); ?></em></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6] mb-6"><?php echo esc_html($s9['lede']); ?></p>
        <p class="text-[#C24C33] text-[16px] md:text-[18px] font-bold m-0"><?php echo esc_html($s9['note_label']); ?></p>
      </div>
      <div class="flex flex-col gap-5">
        <?php if (!empty($s9['treatments'])): foreach ($s9['treatments'] as $t): ?>
          <div class="bg-white rounded-[24px] p-6 md:p-8 border border-[#F2E8E3] shadow-sm flex flex-col md:flex-row items-center justify-between gap-6 lg:gap-12">
            <div class="flex-1">
              <div class="flex items-center gap-4 mb-4">
                <div class="w-10 h-10 shrink-0"><?php if (!empty($t['icon'])): ?><img src="<?php echo esc_url($t['icon']); ?>" alt="" class="w-full h-full object-contain"><?php endif; ?></div>
                <h3 class="font-serif text-[20px] md:text-[22px] text-[#241C19] font-bold m-0"><?php echo esc_html($t['title']); ?></h3>
              </div>
              <p class="text-[#5B5B5B] text-[15px] md:text-[16px] leading-[1.7] m-0 max-w-[700px]"><?php echo esc_html($t['description']); ?></p>
            </div>
            <div class="w-full md:w-[260px] lg:w-[320px] shrink-0 flex justify-center">
              <?php if (!empty($t['image'])): ?><img src="<?php echo esc_url($t['image']); ?>" alt="" class="w-full h-auto object-contain"><?php endif; ?>
            </div>
          </div>
        <?php endforeach; endif; ?>

        <div class="bg-[#5C2A20] rounded-[24px] p-6 md:p-10 flex flex-col md:flex-row items-center justify-between gap-6 lg:gap-12 mt-2">
          <div class="flex-1 text-white">
            <h3 class="font-serif text-white text-[28px] md:text-[32px] font-bold mb-4 m-0"><?php echo esc_html($s9['medication_heading']); ?></h3>
            <p class="text-white text-[15px] md:text-[20px] leading-[1.7] mb-4"><?php echo esc_html($s9['medication_paragraph_1']); ?></p>
            <p class="text-white text-[15px] md:text-[20px] leading-[1.7] italic m-0"><?php echo esc_html($s9['medication_paragraph_2']); ?></p>
          </div>
          <div class="w-full md:w-[260px] lg:w-[280px] shrink-0 flex justify-center">
            <?php if (!empty($s9['medication_image'])): ?><img src="<?php echo esc_url($s9['medication_image']); ?>" alt="" class="w-full h-auto object-contain"><?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 10: RELAXATION TECHNIQUES -->
  <section id="relaxation-techniques" class="section section--white" data-reveal>
    <div class="container">
      <div class="text-center">
        <h2 class="h2 mb-4"><?php echo esc_html($s10['heading']); ?> <em><?php echo esc_html($s10['heading_highlight']); ?></em></h2>
        <p class="text-lg md:text-xl text-[#5B5B5B] mt-4 mb-0"><?php echo esc_html($s10['lede']); ?></p>
      </div>
      <div class="mt-10 bg-white rounded-[24px] overflow-hidden shadow-sm">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-[#C24C33]">
              <th class="px-8 py-5 font-sans font-extrabold text-[13px] tracking-[1.5px] uppercase text-white w-[35%] md:w-[32%]"><?php echo esc_html($s10['col1_label']); ?></th>
              <th class="px-8 py-5 font-sans font-extrabold text-[13px] tracking-[1.5px] uppercase text-white w-[65%] md:w-[68%]"><?php echo esc_html($s10['col2_label']); ?></th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            <?php if (!empty($s10['techniques'])): foreach ($s10['techniques'] as $tech): ?>
              <tr class="hover:bg-amber-50/30 transition-colors">
                <td class="px-8 py-6">
                  <div class="flex items-center gap-5">
                    <span class="inline-flex items-center justify-center w-14 h-14 rounded-[14px] bg-[#FCEBE6] flex-none"><?php if (!empty($tech['icon'])): ?><img src="<?php echo esc_url($tech['icon']); ?>" alt="" class="object-contain"><?php endif; ?></span>
                    <span class="font-serif font-bold text-2xl text-[#393939]"><?php echo esc_html($tech['title']); ?></span>
                  </div>
                </td>
                <td class="px-8 py-6 text-lg leading-[28px] text-[#5B5B5B]"><?php echo esc_html($tech['description']); ?></td>
              </tr>
            <?php endforeach; endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- SECTION 11: WHEN TO SEEK HELP -->
  <section class="pb-[90px]" data-reveal>
    <div class="container">
      <div class="relative overflow-hidden rounded-[32px] p-8 md:p-12 lg:p-16" style="background: linear-gradient(352.44deg, rgba(253, 231, 225, 0.25) 28.13%, rgba(240, 147, 103, 0.04) 136.14%); box-shadow: 0px 4px 24px 0px rgba(169, 62, 40, 0.08);">
        <div class="relative z-10 text-center max-w-[886px] mx-auto mb-12">
          <h2 class="h2 m-0 mb-4"><?php echo esc_html($s11['heading']); ?></h2>
          <p class="text-[#6B5F5A] text-[15px] md:text-[20px] leading-[1.6] m-0"><?php echo esc_html($s11['lede']); ?></p>
        </div>
        <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php
          $accents = ['#86C7B9', '#A1C9A4', '#D9D578', '#BDA5E6', '#A4C4FA', '#F5A99B'];
          $bgs = ['#FCEBE6', '#EBF4EC', '#FAF8DE', '#F3EEFA', '#EBF2FE', '#FCEBE6'];
          if (!empty($s11['items'])): $wi = 0; foreach ($s11['items'] as $item): ?>
            <div class="bg-white rounded-[20px] p-6 flex items-center gap-4 border-t-4 shadow-[0px_8px_20px_-6px_rgba(0,0,0,0.05)] transition-shadow hover:shadow-lg" style="border-color: <?php echo esc_attr($accents[$wi % 6]); ?>;">
              <div class="w-[52px] h-[52px] rounded-full flex items-center justify-center shrink-0" style="background-color: <?php echo esc_attr($bgs[$wi % 6]); ?>;">
                <?php if (!empty($item['icon'])): ?><img src="<?php echo esc_url($item['icon']); ?>" alt="" class="object-contain"><?php endif; ?>
              </div>
              <p class="text-[#5B5B5B] text-[18px] leading-[1.4] m-0"><?php echo esc_html($item['text']); ?></p>
            </div>
          <?php $wi++; endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 12: FAQ -->
  <section id="mh-faq" class="section section--white" data-reveal>
    <div class="container max-w-[1360px]">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-8">
          <div>
            <h2 class="h2 mb-4"><?php echo esc_html($s12['heading']); ?> <em><?php echo esc_html($s12['heading_highlight']); ?></em></h2>
            <p class="text-[15px] sm:text-[16px] leading-[26px] text-ink-muted m-0 mb-6 max-w-[420px]"><?php echo esc_html($s12['lede']); ?></p>
          </div>
          <div class="bg-white/60 border border-[#E8DDD7] rounded-[24px] p-6 backdrop-blur-sm max-w-[460px]">
            <div class="flex items-center gap-3 mb-4">
              <div class="flex -space-x-2">
                <span class="w-8 h-8 rounded-full bg-[#E5D5C5] border-2 border-white"></span>
                <span class="w-8 h-8 rounded-full bg-[#E5E8C5] border-2 border-white"></span>
                <span class="w-8 h-8 rounded-full bg-[#E8C5C5] border-2 border-white"></span>
                <span class="w-8 h-8 rounded-full bg-[#F2E5D5] border-2 border-white"></span>
              </div>
              <span class="font-bold text-[16px] text-[#A93E28]"><?php echo esc_html($s12['testimonial_heading']); ?></span>
            </div>
            <p class="text-[14px] leading-[22px] text-ink-muted m-0 mb-5"><?php echo esc_html($s12['testimonial_text']); ?></p>
            <button type="button" onclick="location.href = '#mh-book'" class="bg-[#C24C33] hover:bg-[#924A3D] text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer shadow-sm">
              <span><?php echo esc_html($s12['testimonial_button_text']); ?></span>
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </button>
          </div>
        </div>
        <div class="lg:col-span-7 flex flex-col gap-4">
          <?php if (!empty($s12['faq_items'])): $fi = 0; foreach ($s12['faq_items'] as $faq): ?>
            <div class="faq-item bg-white border border-[#E8DDD7] rounded-[20px] overflow-hidden shadow-sm transition-all duration-300">
              <button class="w-full flex items-center justify-between p-6 sm:p-7 bg-transparent border-0 cursor-pointer text-left group">
                <span class="font-serif font-bold text-lg sm:text-xl text-ink-900 group-hover:text-[#A85848] transition-colors pr-4"><?php echo esc_html($faq['question']); ?></span>
                <span class="faq-icon w-8 h-8 rounded-full border border-black/10 flex items-center justify-center text-[#A85848] flex-none transition-transform duration-300 font-bold text-lg"><?php echo $fi === 0 ? '−' : '+'; ?></span>
              </button>
              <div class="faq-content<?php echo $fi === 0 ? '' : ' hidden'; ?> px-6 sm:px-7 pb-7 pt-0">
                <div class="text-[15px] leading-[26px] text-ink-muted m-0"><?php echo $faq['answer']; ?></div>
              </div>
            </div>
          <?php $fi++; endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 13: FINAL CTA -->
  <section class="section" data-reveal>
    <div class="container">
      <div class="rounded-[32px] px-8 py-16 md:py-20 text-center shadow-sm" style="background: radial-gradient(46% 62% at 92% 88%, rgba(240, 147, 103, 0.14) 0%, rgba(240, 147, 103, 0) 70%), radial-gradient(46% 62% at 8% 84%, rgba(248, 216, 212, 0.55) 0%, rgba(248, 216, 212, 0) 70%), radial-gradient(58% 74% at 50% 0%, rgba(248, 235, 226, 0.9) 0%, rgba(248, 235, 226, 0) 72%);">
        <h2 class="font-serif text-[36px] md:text-[44px] text-[#241C19] mb-6 italic font-bold"><?php echo esc_html($s13['heading']); ?> <span class="text-[#C24C33]"><?php echo esc_html($s13['heading_highlight']); ?></span></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6] max-w-[772px] mx-auto mb-[24px] font-normal"><?php echo esc_html($s13['text']); ?></p>
        <a href="#" class="inline-flex items-center justify-center gap-2 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[16px] px-[24px] py-[12px] rounded-full transition-colors mb-[24px]">
          <?php echo esc_html($s13['button_text']); ?>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
        </a>
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-12">
          <?php if (!empty($s13['features'])): foreach ($s13['features'] as $f): ?>
            <div class="flex items-center gap-4">
              <div class="w-10 h-10 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-[#C24C33]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </div>
              <span class="text-[#5B5B5B] text-[16px] md:text-[18px] font-normal"><?php echo esc_html($f['text']); ?></span>
            </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>