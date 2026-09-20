<?php
/**
 * Template Name: Psychologist Bergen Page
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
$s15 = get_field('section_15');
$s16 = get_field('section_16');
$sic = get_field('section_icons');

/**
 * ACF image fields now return array format. These helpers pull the URL and
 * alt text out safely (with a fallback alt if the Media Library entry has
 * none), and stay backward compatible if a field ever comes through as a
 * plain URL string.
 */
function bergen_img_url($image)
{
  if (is_array($image)) {
    return $image['url'] ?? '';
  }
  return $image ?: '';
}
function bergen_img_alt($image, $fallback = '')
{
  if (is_array($image) && !empty($image['alt'])) {
    return $image['alt'];
  }
  return $fallback;
}

/**
 * Maps icon_key values from Section 10 to inline SVG markup.
 * Add new keys here as needed; keep in sync with the seeder's icon_key values.
 */
function bergen_video_need_icon($key)
{
  $icons = [
    'device' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>',
    'wifi' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg>',
    'space' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v-5a2 2 0 012-2h12a2 2 0 012 2v5M4 16h16M7 16v4M17 16v4M9 9l3-3m0 0l3 3m-3-3v8"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h8"></path></svg>',
    'browser' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2h-4a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2h-4a2 2 0 01-2-2v-4z"></path></svg>',
  ];
  return $icons[$key] ?? '';
}
$video_need_bg = ['#FBEAE7', '#E8EFE5', '#F5EBD5', '#EAE5F0'];
$video_need_fg = ['#C2543F', '#5C7454', '#96702B', '#6B568A'];
?>

<main>
  <!-- ================= SECTION 1: HERO ================= -->
  <section
    class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[700px]">
    <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
      <?php if (!empty($s1['hero_image'])): ?>
        <img src="<?php echo esc_url(bergen_img_url($s1['hero_image'])); ?>"
          alt="<?php echo esc_attr(bergen_img_alt($s1['hero_image'], $s1['heading'])); ?>"
          class="absolute inset-0 w-full h-full object-cover object-[100%_50%]" />
      <?php endif; ?>
    </span>
    <div
      class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
      <div class="max-w-[1312px] mx-auto">
        <div class="max-w-full lg:max-w-[600px]">
          <div
            class="inline-flex items-center gap-[9px] bg-white/[.66] backdrop-blur-2xl backdrop-saturate-150 border border-white/[.82] rounded-full px-5 py-[9px]">
            <span class="text-[#CE5A43] text-[13px] leading-[13px]">✳</span>
            <span
              class="font-sans font-semibold text-xs leading-4 tracking-[2px] uppercase text-brand-brown whitespace-nowrap"><?php echo esc_html($s1['badge_text']); ?></span>
          </div>
          <h1
            class="font-serif font-bold mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[64px]">
            <?php echo esc_html($s1['heading']); ?>
          </h1>
          <p class="text-lg lg:text-xl text-[#3A1811] leading-[1.6] mt-[22px] mb-0">
            <?php echo esc_html($s1['description']); ?>
          </p>
          <div class="mt-8 flex flex-col sm:flex-row items-start sm:items-center gap-4 lg:gap-5">
            <a href="<?php echo esc_url($s1['primary_button_url']); ?>"
              class="inline-flex items-center justify-center px-8 py-4 bg-[#C24C33] text-white rounded-full font-bold text-base transition hover:bg-opacity-90">
              <?php echo esc_html($s1['primary_button_text']); ?>
              <span class="ml-2 inline-flex items-center"><?php if (!empty($sic['primary_arrow_icon'])): ?><img
                    src="<?php echo esc_url(bergen_img_url($sic['primary_arrow_icon'])); ?>"
                    alt="<?php echo esc_attr(bergen_img_alt($sic['primary_arrow_icon'], 'External Link Icon')); ?>"
                    class="h-[20px] w-[12px] mt-0.5 object-contain" /><?php endif; ?></span>
            </a>
            <a href="<?php echo esc_url($s1['secondary_button_url']); ?>"
              class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-[#A93E28] text-[#A93E28] rounded-full font-bold text-base transition hover:bg-gray-100">
              <?php echo esc_html($s1['secondary_button_text']); ?>
              <span class="ml-2 inline-flex items-center"><?php if (!empty($sic['secondary_arrow_icon'])): ?><img
                    src="<?php echo esc_url(bergen_img_url($sic['secondary_arrow_icon'])); ?>"
                    alt="<?php echo esc_attr(bergen_img_alt($sic['secondary_arrow_icon'], 'External Link Icon')); ?>"
                    class="h-[20px] w-[12px] mt-0.5 object-contain" /><?php endif; ?></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 2: FEATURE CARDS ================= -->
  <section class="pt-[48px] pb-[64px]" data-reveal>
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-[16px]">
        <?php
        $feature_bg = ['#FCEAE4', '#E9EFE6', '#E6EFF5', '#F6EEDC', '#EFE9F4'];
        $feature_border = ['#B84E38', '#687A5B', '#42637D', '#987A36', '#614B82'];
        if (!empty($s2['cards'])):
          foreach ($s2['cards'] as $i => $card):
            $bg = $feature_bg[$i % count($feature_bg)];
            $border = $feature_border[$i % count($feature_border)];
            ?>
            <div
              class="rounded-[16px] p-6 md:py-[32px] md:px-[24px] flex flex-col items-center text-center justify-start transition-transform hover:-translate-y-1"
              style="background-color: <?php echo esc_attr($bg); ?>; border-top: 4px solid <?php echo esc_attr($border); ?>;">
              <div class="w-[52px] h-[52px] mb-6"><?php if (!empty($card['icon'])): ?><img
                    src="<?php echo esc_url(bergen_img_url($card['icon'])); ?>"
                    alt="<?php echo esc_attr(bergen_img_alt($card['icon'], $card['title'])); ?>"
                    class="object-contain" /><?php endif; ?></div>
              <h3 class="font-serif text-[16px] md:text-[18px] text-[#241C19] font-bold mb-[8px] leading-snug">
                <?php echo esc_html($card['title']); ?>
              </h3>
              <p class="text-[#5B5B5B] text-[14px]"><?php echo esc_html($card['subtitle']); ?></p>
            </div>
          <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 3: DO YOU NEED A PSYCHOLOGIST ================= -->
  <section class="pb-[90px]">
    <div class="container">
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[727px_550px] items-center gap-10">
        <div>
          <h2
            class="font-serif text-[36px] md:text-[48px] text-[#241C19] font-bold leading-[1.2] lg:leading-[64.8px] mb-8">
            <?php echo esc_html($s3['heading']); ?>
          </h2>
          <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.7] mb-[14px]">
            <?php echo esc_html($s3['paragraph_1']); ?>
          </p>
          <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.7] mb-[14px]">
            <?php echo esc_html($s3['paragraph_2']); ?>
          </p>
        </div>
        <div><?php if (!empty($s3['image'])): ?><img src="<?php echo esc_url(bergen_img_url($s3['image'])); ?>"
              alt="<?php echo esc_attr(bergen_img_alt($s3['image'], 'Psychologist session in Bergen')); ?>"
              class="w-full h-auto rounded-[12px] shadow-sm object-cover" /><?php endif; ?></div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 4: PRIVATE VS PUBLIC ================= -->
  <section class="section bg-[#FCF8F5]" data-reveal>
    <div class="container">
      <h2 class="font-serif text-[32px] md:text-[44px] text-[#241C19] font-bold leading-[1.2] mb-4">
        <?php echo esc_html($s4['heading']); ?>
      </h2>
      <p class="text-[16px] md:text-[20px] text-[#5B5B5B] mt-4 mb-10 leading-[1.6]">
        <?php echo esc_html($s4['description']); ?>
      </p>
      <div class="mt-8 bg-white rounded-[20px] overflow-x-auto shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
        <table class="w-full text-left border-collapse min-w-[800px]">
          <thead>
            <tr class="bg-[#C24C33]">
              <th class="px-8 py-6 w-[35%]"></th>
              <th class="px-8 py-6 font-bold text-[13px] md:text-[16px] tracking-[1.5px] uppercase text-white w-[32%]">
                <?php echo esc_html($s4['table_col1_header']); ?>
              </th>
              <th class="px-8 py-6 font-bold text-[13px] md:text-[16px] tracking-[1.5px] uppercase text-white w-[33%]">
                <?php echo esc_html($s4['table_col2_header']); ?>
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-[#F5EAE4]">
            <?php if (!empty($s4['rows'])):
              foreach ($s4['rows'] as $row): ?>
                <tr class="hover:bg-[#FCF8F5] transition-colors">
                  <td class="p-4 lg:p-6">
                    <div class="flex items-center gap-4">
                      <span class="w-[36px] h-[36px]"><?php if (!empty($row['icon'])): ?><img
                            src="<?php echo esc_url(bergen_img_url($row['icon'])); ?>"
                            alt="<?php echo esc_attr(bergen_img_alt($row['icon'], $row['feature'])); ?>"
                            class="object-contain" /><?php endif; ?></span>
                      <span
                        class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19]"><?php echo esc_html($row['feature']); ?></span>
                    </div>
                  </td>
                  <td class="p-4 lg:p-6 text-[16px] text-[#6F6259]"><?php echo esc_html($row['public_value']); ?></td>
                  <td class="p-4 lg:p-6 text-[16px] text-[#241C19] font-semibold">
                    <?php echo esc_html($row['private_value']); ?>
                  </td>
                </tr>
              <?php endforeach; endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 5: WHO DO WE HELP ================= -->
  <section class="section" data-reveal>
    <div class="container">
      <div class="grid grid-cols1 lg:grid-cols-2 xl:grid-cols-[797px_462px] items-center gap-10 lg:gap-16">
        <div>
          <span
            class="text-[#C24C33] text-[14px] font-bold tracking-[1.5px] uppercase block mb-3"><?php echo esc_html($s5['eyebrow']); ?></span>
          <h2 class="font-serif text-[36px] md:text-[48px] text-[#241C19] font-bold leading-[1.2] mb-6">
            <?php echo esc_html($s5['heading']); ?>
          </h2>
          <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] mb-8">
            <?php echo esc_html($s5['description']); ?>
          </p>
          <div class="flex flex-wrap gap-3">
            <?php if (!empty($s5['tags'])):
              foreach ($s5['tags'] as $tag): ?>
                <div
                  class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer">
                  <?php if (!empty($tag['icon'])): ?><img src="<?php echo esc_url(bergen_img_url($tag['icon'])); ?>"
                      alt="<?php echo esc_attr(bergen_img_alt($tag['icon'], $tag['label'])); ?>"
                      class="w-[28px] h-[28px] object-contain" /><?php endif; ?>
                  <span class="text-[#4E403B] text-[16px] font-semibold"><?php echo esc_html($tag['label']); ?></span>
                </div>
              <?php endforeach; endif; ?>
          </div>
        </div>
        <div class="relative">
          <div class="relative rounded-[24px] overflow-hidden shadow-sm">
            <?php if (!empty($s5['image'])): ?><img src="<?php echo esc_url(bergen_img_url($s5['image'])); ?>"
                alt="<?php echo esc_attr(bergen_img_alt($s5['image'], 'People sitting together in a group session')); ?>"
                class="w-full h-auto lg:h-[441px] object-cover rounded-[24px]" /><?php endif; ?>
            <div
              class="absolute bottom-6 left-6 bg-white/20 backdrop-blur-md border border-white/30 rounded-full px-4 py-2 flex items-center gap-2">
              <span class="w-6 h-6 rounded-full bg-[#C85237] flex items-center justify-center flex-none">
                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </span>
              <span
                class="text-white text-[12px] font-bold tracking-[1.2px] uppercase pr-2"><?php echo esc_html($s5['badge_text']); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 6: WHAT MAKES US DIFFERENT (FLIP CARDS) ================= -->
  <section class="section" data-reveal>
    <div class="container">
      <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="h2 mb-4"><?php echo esc_html($s6['heading']); ?></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6]"><?php echo esc_html($s6['description']); ?>
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if (!empty($s6['cards'])):
          foreach ($s6['cards'] as $i => $card):
            $num = str_pad($i + 1, 2, '0', STR_PAD_LEFT);
            $card_id = 'card-' . $num;
            ?>
            <div class="flip-card-perspective h-[380px]" data-flip-card="<?php echo esc_attr($card_id); ?>">
              <div class="flip-card-inner" id="flip-inner-<?php echo esc_attr($num); ?>">
                <div class="flip-card-face">
                  <?php if (!empty($card['photo'])): ?><img src="<?php echo esc_url(bergen_img_url($card['photo'])); ?>"
                      alt="<?php echo esc_attr(bergen_img_alt($card['photo'], $card['title'])); ?>"
                      class="w-full h-full object-cover" /><?php endif; ?>
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                  <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end">
                    <div class="flex items-end justify-between w-full">
                      <div class="flex flex-col">
                        <span
                          class="text-[#E78768] font-serif text-[18px] md:text-[20px] mb-1"><?php echo esc_html($num); ?></span>
                        <h3 class="font-serif text-white text-[24px] md:text-[28px] font-bold leading-tight">
                          <?php echo esc_html($card['title']); ?>
                        </h3>
                      </div>
                      <button
                        class="inline-flex items-center justify-center flex-shrink-0 transition-transform hover:scale-105 mb-1 cursor-pointer"
                        data-flip-btn="<?php echo esc_attr($card_id); ?>" aria-label="Flip card to read more">
                        <?php if (!empty($sic['flip_front_icon'])): ?><img
                            src="<?php echo esc_url(bergen_img_url($sic['flip_front_icon'])); ?>"
                            alt="<?php echo esc_attr(bergen_img_alt($sic['flip_front_icon'], 'Flip')); ?>"
                            class="w-[44px] h-[44px] object-contain" /><?php endif; ?>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="flip-card-face flip-card-back bg-[#C85237] p-8 flex flex-col justify-between">
                  <div>
                    <div class="flex items-start justify-between mb-6">
                      <?php if (!empty($card['back_icon'])): ?><img
                          src="<?php echo esc_url(bergen_img_url($card['back_icon'])); ?>"
                          alt="<?php echo esc_attr(bergen_img_alt($card['back_icon'], $card['title'])); ?>"
                          class="w-10 h-10 object-contain" /><?php endif; ?>
                      <span class="text-white/60 font-serif text-[18px]"><?php echo esc_html($num); ?></span>
                    </div>
                    <h3 class="font-serif text-white text-[22px] font-bold mb-3 leading-snug">
                      <?php echo esc_html($card['title']); ?>
                    </h3>
                    <p class="text-white/90 text-[15px] leading-[1.65]"><?php echo esc_html($card['description']); ?></p>
                  </div>
                  <button
                    class="inline-flex items-center gap-2 text-white text-[14px] font-bold transition-opacity hover:opacity-80 cursor-pointer"
                    data-flip-btn="<?php echo esc_attr($card_id); ?>" aria-label="Flip back to photo">
                    <?php if (!empty($sic['flip_back_icon'])): ?><img
                        src="<?php echo esc_url(bergen_img_url($sic['flip_back_icon'])); ?>"
                        alt="<?php echo esc_attr(bergen_img_alt($sic['flip_back_icon'], '')); ?>"
                        class="w-[34px] h-[34px] object-contain" /><?php endif; ?>
                    Back to photo
                  </button>
                </div>
              </div>
            </div>
          <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 7: BENEFIT OF VIDEO CONSULTATION ================= -->
  <section class="section bg-[#FFF7F3]">
    <div class="container">
      <div class="mb-10 lg:mb-14">
        <h2 class="font-serif text-[32px] sm:text-[38px] lg:text-[44px] font-bold text-[#241C19] leading-[1.2] mb-4">
          <?php echo esc_html($s7['heading']); ?>
        </h2>
        <p class="text-[#5B5B5B] text-[14px] lg:text-[18px] leading-relaxed"><?php echo esc_html($s7['description']); ?>
        </p>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
        <div
          class="bg-white rounded-[28px] p-7 sm:p-8 lg:p-9 shadow-[0_4px_24px_rgba(0,0,0,0.02)] flex flex-col justify-between gap-8">
          <?php if (!empty($s7['left_benefits'])):
            foreach ($s7['left_benefits'] as $b): ?>
              <div>
                <div class="flex items-center gap-3.5 mb-3">
                  <?php if (!empty($b['icon'])): ?><img src="<?php echo esc_url(bergen_img_url($b['icon'])); ?>"
                      alt="<?php echo esc_attr(bergen_img_alt($b['icon'], $b['title'])); ?>"
                      class="w-[48px] h-[48px] object-contain" /><?php endif; ?>
                  <h3 class="font-serif font-bold text-[18px] text-[#241C19]"><?php echo esc_html($b['title']); ?></h3>
                </div>
                <p class="text-[#6F6259] text-[13.5px] md:text-[18px] leading-[1.6] m-0">
                  <?php echo esc_html($b['description']); ?>
                </p>
              </div>
            <?php endforeach; endif; ?>
        </div>
        <div
          class="relative rounded-[28px] overflow-hidden min-h-[360px] lg:min-h-[460px] shadow-[0_4px_24px_rgba(0,0,0,0.02)] bg-gray-100">
          <?php if (!empty($s7['center_image'])): ?><img
              src="<?php echo esc_url(bergen_img_url($s7['center_image'])); ?>"
              alt="<?php echo esc_attr(bergen_img_alt($s7['center_image'], 'Woman on video consultation with psychologist')); ?>"
              class="absolute inset-0 w-full h-full object-cover object-center" /><?php endif; ?>
        </div>
        <div
          class="bg-white rounded-[28px] p-7 sm:p-8 lg:p-9 shadow-[0_4px_24px_rgba(0,0,0,0.02)] flex flex-col justify-between gap-8">
          <?php if (!empty($s7['right_benefits'])):
            foreach ($s7['right_benefits'] as $b): ?>
              <div>
                <div class="flex items-center gap-3.5 mb-3">
                  <?php if (!empty($b['icon'])): ?><img src="<?php echo esc_url(bergen_img_url($b['icon'])); ?>"
                      alt="<?php echo esc_attr(bergen_img_alt($b['icon'], $b['title'])); ?>"
                      class="w-[48px] h-[48px] object-contain" /><?php endif; ?>
                  <h3 class="font-serif font-bold text-[18px] text-[#241C19]"><?php echo esc_html($b['title']); ?></h3>
                </div>
                <p class="text-[#6F6259] text-[13.5px] md:text-[18px] leading-[1.6] m-0">
                  <?php echo esc_html($b['description']); ?>
                </p>
              </div>
            <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 8: HOW TO JOIN A VIDEO SESSION ================= -->
  <section class="py-16 lg:py-24 bg-white">
    <div class="container mx-auto px-4 max-w-[1280px]">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <span
          class="text-[#C24C33] text-[13px] font-bold tracking-[0.15em] uppercase mb-4 block"><?php echo esc_html($s8['eyebrow']); ?></span>
        <h2 class="h2 m-0"><?php echo esc_html($s8['heading']); ?></h2>
      </div>
      <div class="relative grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-10 lg:gap-4">
        <div class="hidden lg:block absolute top-[36px] left-[10%] right-[10%] h-[2px] bg-[#F2EAE5] z-0"></div>
        <div
          class="block lg:hidden absolute top-[36px] bottom-[36px] left-[50%] w-[2px] -translate-x-1/2 bg-[#F2EAE5] z-0">
        </div>
        <?php if (!empty($s8['steps'])):
          foreach ($s8['steps'] as $i => $step): ?>
            <div class="relative z-10 flex flex-col items-center text-center">
              <?php if (!empty($step['icon'])): ?><img src="<?php echo esc_url(bergen_img_url($step['icon'])); ?>"
                  alt="<?php echo esc_attr(bergen_img_alt($step['icon'], 'Step Icon')); ?>"
                  class="w-[72px] h-[72px] object-contain" /><?php endif; ?>
              <div class="bg-[#FFF7F3] text-[#6F6259] text-[12px] font-bold tracking-widest px-3 py-1 rounded-full mb-4">
                <?php echo esc_html(str_pad($i + 1, 2, '0', STR_PAD_LEFT)); ?>
              </div>
              <p class="text-[#524B48] text-[14.5px] leading-[1.6] max-w-[220px] mx-auto m-0">
                <?php echo esc_html($step['description']); ?>
              </p>
            </div>
          <?php endforeach; endif; ?>
      </div>
      <div class="mt-14 lg:mt-20 text-center">
        <a href="<?php echo esc_url($s8['button_url']); ?>"
          class="inline-flex items-center justify-center gap-2 bg-[#C24C33] hover:bg-[#A94836] text-white px-8 py-3.5 rounded-full font-sans text-[16px] font-bold transition-colors">
          <?php echo esc_html($s8['button_text']); ?> <?php if (!empty($sic['primary_arrow_icon'])): ?><img
              src="<?php echo esc_url(bergen_img_url($sic['primary_arrow_icon'])); ?>"
              alt="<?php echo esc_attr(bergen_img_alt($sic['primary_arrow_icon'], 'Right Arrow Icon')); ?>"
              class="w-4 h-4 object-contain inline-block" /><?php endif; ?>
        </a>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 9: WHAT CAN OUR PSYCHOLOGISTS HELP WITH ================= -->
  <section class="section bg-[#FFF7F3]">
    <div class="container" data-reveal>
      <div class="mb-8">
        <h2 class="h2 mb-4"><?php echo esc_html($s9['heading']); ?></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6]"><?php echo esc_html($s9['description']); ?>
        </p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php if (!empty($s9['cards'])):
          foreach ($s9['cards'] as $card): ?>
            <div
              class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow">
              <div>
                <div class="w-[40px] h-[40px] mb-5"><?php if (!empty($card['icon'])): ?><img
                      src="<?php echo esc_url(bergen_img_url($card['icon'])); ?>"
                      alt="<?php echo esc_attr(bergen_img_alt($card['icon'], $card['title'])); ?>"
                      class="object-contain" /><?php endif; ?></div>
                <h3 class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2">
                  <?php echo esc_html($card['title']); ?>
                </h3>
                <p class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.6]">
                  <?php echo esc_html($card['description']); ?>
                </p>
              </div>
            </div>
          <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 10: WHAT YOU NEED FOR A VIDEO SESSION ================= -->
  <section class="section">
    <div class="container">
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[537px_744px] gap-10 lg:gap-16 items-center">
        <div
          class="relative w-full aspect-[4/3] sm:aspect-[3/2] lg:aspect-[4/3] rounded-[28px] overflow-hidden shadow-sm bg-gray-100">
          <?php if (!empty($s10['image'])): ?><img src="<?php echo esc_url(bergen_img_url($s10['image'])); ?>"
              alt="<?php echo esc_attr(bergen_img_alt($s10['image'], 'Woman setting up for a video session')); ?>"
              class="absolute inset-0 w-full h-full object-cover object-center" /><?php endif; ?>
          <div
            class="absolute bottom-6 left-6 inline-flex items-center gap-3 bg-[#FFFFFF29] backdrop-blur-md border border-white/20 rounded-full p-2 pr-6 shadow-lg">
            <div class="w-8 h-8 rounded-full bg-[#C2543F] flex items-center justify-center shrink-0 text-white">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z">
                </path>
              </svg>
            </div>
            <span
              class="text-white text-[10px] font-bold tracking-[0.15em] uppercase mt-px"><?php echo esc_html($s10['badge_text']); ?></span>
          </div>
        </div>
        <div class="flex flex-col pr-0 lg:pr-6">
          <h2 class="font-serif text-[36px] sm:text-[40px] lg:text-[44px] font-bold text-[#241C19] leading-[1.2] mb-10">
            <?php echo esc_html($s10['heading']); ?>
          </h2>
          <div class="flex flex-col gap-7">
            <?php if (!empty($s10['items'])):
              foreach ($s10['items'] as $i => $item):
                $bg = $video_need_bg[$i % count($video_need_bg)];
                $fg = $video_need_fg[$i % count($video_need_fg)];
                ?>
                <div class="flex items-center gap-5">
                  <div class="w-[52px] h-[52px] rounded-[14px] flex items-center justify-center shrink-0"
                    style="background-color: <?php echo esc_attr($bg); ?>; color: <?php echo esc_attr($fg); ?>;">
                    <?php echo bergen_video_need_icon($item['icon_key']); ?>
                  </div>
                  <p class="text-[#524B48] text-[16px] lg:text-[20px] leading-snug m-0">
                    <?php echo esc_html($item['description']); ?>
                  </p>
                </div>
              <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 11: OUR SERVICES FOR BERGEN CLIENTS ================= -->
  <section class="pt-[90px]" data-reveal>
    <div class="container">
      <div
        class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[minmax(0,759px)_minmax(0,500px)] gap-12 lg:gap-20 items-center">
        <div class="min-w-0">
          <h2 class="h2 mb-4"><?php echo esc_html($s11['heading']); ?></h2>
          <p class="text-[#6B6B6B] text-[16px] md:text-[20px] leading-[1.6] mb-6">
            <?php echo esc_html($s11['description']); ?>
          </p>
          <div class="flex flex-col">
            <?php if (!empty($s11['services'])):
              $chunks = array_chunk($s11['services'], 2);
              foreach ($chunks as $ci => $chunk):
                $last = $ci === count($chunks) - 1;
                ?>
                <div
                  class="grid grid-cols-1 md:grid-cols-2 gap-6 py-5 <?php echo $last ? '' : 'border-b border-[#F2E4DC]'; ?>">
                  <?php foreach ($chunk as $svc): ?>
                    <div class="flex items-center gap-4">
                      <?php if (!empty($svc['icon'])): ?>
                        <img src="<?php echo esc_url(bergen_img_url($svc['icon'])); ?>"
                          alt="<?php echo esc_attr(bergen_img_alt($svc['icon'], $svc['label'])); ?>"
                          class="w-[46px] h-[46px]" />
                      <?php endif; ?>
                      <span
                        class="font-serif text-[#241C19] font-bold text-[16px] md:text-[22px] leading-[24px]"><?php echo esc_html($svc['label']); ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endforeach; endif; ?>
          </div>

          <?php if (!empty($s11['profile_link_text']) || !empty($s11['book_link_text'])): ?>
            <div class="flex items-center gap-2 mt-8">
              <?php if (!empty($s11['profile_link_text'])): ?>
                <a href="<?php echo esc_url($s11['profile_url']); ?>"
                  class="flex-1 min-w-0 inline-flex items-center justify-between gap-2 py-3 px-5 bg-[#A93E28] text-white rounded-full font-bold text-[13px] transition hover:bg-[#8f3320]">
                  <span class="truncate"><?php echo wp_kses_post($s11['profile_link_text']); ?></span>
                  <span class="shrink-0">→</span>
                </a>
              <?php endif; ?>
              <?php if (!empty($s11['book_link_text'])): ?>
                <a href="<?php echo esc_url($s11['book_url']); ?>"
                  class="flex-1 min-w-0 inline-flex items-center justify-between gap-2 py-3 px-5 bg-[#FFF7F3] text-[#C24C33] rounded-full font-bold text-[13px] transition hover:bg-[#f5ede9] border border-[#F2E4DC]">
                  <span class="truncate"><?php echo wp_kses_post($s11['book_link_text']); ?></span>
                  <span class="shrink-0">→</span>
                </a>
              <?php endif; ?>
            </div>
          <?php endif; ?>

        </div>
        <div
          class="relative w-full aspect-square md:h-[500px] md:aspect-auto rounded-3xl overflow-hidden shadow-lg bg-gray-100">
          <?php if (!empty($s11['image'])): ?>
            <img src="<?php echo esc_url(bergen_img_url($s11['image'])); ?>"
              alt="<?php echo esc_attr(bergen_img_alt($s11['image'], 'Bergen Clinic Background')); ?>"
              class="absolute inset-0 w-full h-full object-cover" />
          <?php endif; ?>
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
          <div class="absolute bottom-6 left-6 right-6">
            <div class="bg-white rounded-full px-4 py-2 inline-flex items-center gap-2 mb-3 shadow-md">
              <?php if (!empty($sic['location_pin_icon'])): ?>
                <img src="<?php echo esc_url(bergen_img_url($sic['location_pin_icon'])); ?>"
                  alt="<?php echo esc_attr(bergen_img_alt($sic['location_pin_icon'], 'Location pin')); ?>"
                  class="w-[24px] h-[24px]" />
              <?php endif; ?>
              <span
                class="text-[10px] sm:text-xs font-bold tracking-widest text-[#241C19] uppercase"><?php echo esc_html($s11['image_badge_label']); ?></span>
            </div>
            <h3 class="text-white text-[20px] md:text-[24px] font-bold font-serif">
              <?php echo esc_html($s11['image_heading']); ?>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  </section>

  <!-- ================= SECTION 12: WHY CHOOSE ================= -->
  <section class="section" data-reveal>
    <div class="container">
      <div class="bg-[#C24C33] rounded-[28px] p-6 sm:p-10 md:p-12 shadow-md relative overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[551px_612px] gap-8 lg:gap-10">
          <div class="flex flex-col justify-between">
            <h2 class="font-serif text-white text-[32px] md:text-[48px] font-bold leading-[1.25] mb-6">
              <?php echo esc_html($s12['heading']); ?>
            </h2>
            <div class="rounded-[24px] overflow-hidden w-full h-[360px] sm:h-[420px] lg:h-[480px]">
              <?php if (!empty($s12['image'])): ?><img src="<?php echo esc_url(bergen_img_url($s12['image'])); ?>"
                  alt="<?php echo esc_attr(bergen_img_alt($s12['image'], 'Therapy session at Psykolog.no')); ?>"
                  class="w-full h-full object-cover" /><?php endif; ?>
            </div>
          </div>
          <div class="flex flex-col justify-center">
            <div class="bg-[#FFFFFF0E] border border-[#FFFFFF21] rounded-[22px] p-6 md:p-8 backdrop-blur-sm">
              <ul class="divide-y divide-white/20">
                <?php if (!empty($s12['list_items'])):
                  foreach ($s12['list_items'] as $item): ?>
                    <li class="py-3.5 flex items-start gap-3.5 text-white">
                      <?php if (!empty($sic['checklist_tick_icon'])): ?><img
                          src="<?php echo esc_url(bergen_img_url($sic['checklist_tick_icon'])); ?>"
                          alt="<?php echo esc_attr(bergen_img_alt($sic['checklist_tick_icon'], 'Check')); ?>"
                          class="w-[26px] h-[26px] mt-0.5 flex-shrink-0" /><?php endif; ?>
                      <p class="text-[13px] md:text-[16px] leading-relaxed"><strong
                          class="font-bold"><?php echo esc_html($item['label']); ?></strong>
                        <?php echo esc_html($item['text']); ?></p>
                    </li>
                  <?php endforeach; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 13: MEET OUR PSYCHOLOGISTS ================= -->
  <section class="section bg-[#FFF7F3]" data-reveal>
    <div class="container">
      <div class="mb-12">
        <h2 class="h2 mb-4"><?php echo esc_html($s13['heading']); ?></h2>
        <p class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6]"><?php echo esc_html($s13['description']); ?>
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php if (!empty($s13['doctors'])):
            foreach ($s13['doctors'] as $doc): ?>
            <div class="bg-white rounded-[24px] p-3 shadow-[0_2px_10px_rgba(0,0,0,0.03)] flex flex-col h-full">
              <div class="relative w-full h-[260px] md:h-[280px] rounded-[16px] overflow-hidden">
                  <?php if (!empty($doc['image'])): ?>
                  <img src="<?php echo esc_url(bergen_img_url($doc['image'])); ?>"
                    alt="<?php echo esc_attr(bergen_img_alt($doc['image'], $doc['name'])); ?>"
                    class="w-full h-full object-cover" />
                  <?php endif; ?>
                <div
                  class="absolute bottom-3 left-3 right-3 bg-white/10 backdrop-blur-md border border-[#FFFFFF57] shadow-lg rounded-[12px] px-5 py-4 bg-[#FFFFFF33] text-white">
                  <h3 class="font-serif text-[20px] text-white font-bold leading-snug"><?php echo esc_html($doc['name']); ?>
                  </h3>
                  <p class="text-white text-[12px] mt-0.5"><?php echo esc_html($doc['role']); ?></p>
                </div>
              </div>
              <div class="flex flex-col flex-grow justify-between px-3 pt-5 pb-4">
                <p class="text-[#6B5F5A] text-[14px] md:text-[16px] leading-[1.6] mb-6"><?php echo esc_html($doc['bio']); ?>
                </p>
                <div class="flex items-center gap-2 mt-auto w-full">
                    <?php if (!empty($doc['profile_link_text'])): ?>
                    <a href="<?php echo esc_url($doc['profile_link_url']); ?>"
                      class="flex-1 min-w-0 inline-flex items-center justify-between gap-2 py-3 px-5 bg-[#A93E28] text-white rounded-full font-bold text-[13px] transition hover:bg-[#8f3320]">
                      <span class="truncate"><?php echo esc_html($doc['profile_link_text']); ?></span>
                      <span class="shrink-0">→</span>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($doc['book_link_text'])): ?>
                    <a href="<?php echo esc_url($doc['book_link_url']); ?>"
                      class="flex-1 min-w-0 inline-flex items-center justify-between gap-2 py-3 px-5 bg-[#FFF7F3] text-[#C24C33] rounded-full font-bold text-[13px] transition hover:bg-[#f5ede9] border border-[#F2E4DC]">
                      <span class="truncate"><?php echo esc_html($doc['book_link_text']); ?></span>
                      <span class="shrink-0">→</span>
                    </a>
                    <?php endif; ?>
                </div>
              </div>
            </div>
            <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 14: PRICES + CRISIS ================= -->
  <section class="section" data-reveal>
    <div class="container">
      <div
        class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[minmax(0,465px)_minmax(0,1fr)] gap-12 lg:gap-16 items-center">
        <div class="pt-2">
          <span
            class="block text-[#A93E28] text-[11px] md:text-[14px] font-bold tracking-[1.5px] uppercase mb-4"><?php echo esc_html($s14['eyebrow']); ?></span>
          <h2 class="h2 mb-6"><?php echo esc_html($s14['heading']); ?></h2>
          <p class="text-[#5B5B5B] text-[15px] md:text-[20px] leading-[1.6]">
            <?php echo esc_html($s14['description']); ?>
          </p>
        </div>
        <div class="min-w-0">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-stretch">
            <?php if (!empty($s14['pricing_cards'])):
              foreach ($s14['pricing_cards'] as $i => $card):
                $dark = $i === 1; ?>
                <div
                  class="rounded-[24px] p-6 md:p-8 flex flex-col justify-between transition-shadow hover:shadow-md <?php echo $dark ? 'shadow-sm bg-[#C85237]' : 'border border-[#F09367] bg-white'; ?>">
                  <div>
                    <div class="w-[56px] h-[56px] mb-6"><?php if (!empty($card['icon'])): ?><img
                          src="<?php echo esc_url(bergen_img_url($card['icon'])); ?>"
                          alt="<?php echo esc_attr(bergen_img_alt($card['icon'], $card['title'])); ?>"
                          class="object-contain" /><?php endif; ?></div>
                    <h3
                      class="font-serif text-[22px] md:text-[28px] font-bold mb-5 <?php echo $dark ? 'text-white' : 'text-[#241C19]'; ?>">
                      <?php echo esc_html($card['title']); ?>
                    </h3>
                    <div class="mb-5">
                      <span
                        class="block text-[13px] md:text-[16px] mb-1 <?php echo $dark ? 'text-white/90' : 'text-[#635A52]'; ?>"><?php echo esc_html($card['price_prefix']); ?></span>
                      <div class="flex items-baseline gap-2"><span
                          class="font-serif text-[36px] md:text-[40px] font-bold leading-none <?php echo $dark ? 'text-white' : 'text-[#C24C33]'; ?>"><?php echo esc_html($card['price']); ?></span>
                      </div>
                      <span
                        class="block text-[13px] md:text-[15px] font-medium mt-1.5 <?php echo $dark ? 'text-white' : 'text-[#393939]'; ?>"><?php echo esc_html($card['price_unit']); ?></span>
                    </div>
                    <p
                      class="text-[14px] md:text-[18px] leading-relaxed mb-8 max-w-[320px] <?php echo $dark ? 'text-white/90' : 'text-[#5B5B5B]'; ?>">
                      <?php echo esc_html($card['description']); ?>
                    </p>
                  </div>
                  <a href="<?php echo esc_url($card['button_url']); ?>"
                    class="inline-flex justify-center items-center font-bold text-[14px] md:text-[18px] py-3.5 px-6 rounded-full w-fit transition-colors <?php echo $dark ? 'bg-white text-[#241C19] hover:bg-gray-50' : 'bg-[#C85237] text-white hover:bg-[#b0452e]'; ?>"><?php echo esc_html($card['button_text']); ?></a>
                </div>
              <?php endforeach; endif; ?>
          </div>
        </div>
      </div>

      <div class="mt-8 md:mt-12 rounded-[16px] p-8 md:p-12 lg:p-16 bg-[#C24C33]">
        <div class="mb-10">
          <h3 class="font-serif text-white text-[20px] md:text-[32px] font-bold mb-4">
            <?php echo esc_html($s14['crisis_heading']); ?>
          </h3>
          <p class="text-white text-[15px] md:text-[18px] leading-[1.6]"><?php echo esc_html($s14['crisis_text']); ?>
          </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
          <?php if (!empty($s14['crisis_contacts'])):
            foreach ($s14['crisis_contacts'] as $c): ?>
              <a href="<?php echo esc_url($c['url']); ?>"
                class="bg-white rounded-[20px] p-5 flex items-center gap-4 transition-transform hover:-translate-y-1 hover:shadow-sm">
                <div class="w-12 h-12"><?php if (!empty($c['icon'])): ?><img
                      src="<?php echo esc_url(bergen_img_url($c['icon'])); ?>"
                      alt="<?php echo esc_attr(bergen_img_alt($c['icon'], $c['label'])); ?>"
                      class="object-contain" /><?php endif; ?></div>
                <div>
                  <span
                    class="block text-[#5C2A20] font-serif text-[10px] md:text-[14px] font-bold uppercase tracking-[1px] mb-[8px]"><?php echo esc_html($c['label']); ?></span>
                  <span
                    class="block text-[#C24C33] text-[20px] md:text-[24px] font-bold leading-none"><?php echo esc_html($c['number']); ?></span>
                </div>
              </a>
            <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 15: FAQ ================= -->
  <section id="mh-faq" class="section bg-[#FFF7F3]">
    <div class="container" data-reveal>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
        <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col items-start">
          <span
            class="text-[#C24C33] text-[12px] font-normal tracking-[0.15em] uppercase mb-4 block"><?php echo esc_html($s15['eyebrow']); ?></span>
          <h2 class="h2 mb-6"><?php echo esc_html($s15['heading']); ?></h2>
          <p class="text-[15px] sm:text-[18px] leading-[26px] text-[#6B5F5A] m-0 mb-8 max-w-[420px]">
            <?php echo esc_html($s15['description']); ?>
          </p>
          <button type="button"
            class="border border-[#C24C33] text-[#C24C33] bg-transparent hover:bg-[#C24C33] hover:text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors mb-12 cursor-pointer"><?php echo esc_html($s15['button_text']); ?></button>
          <hr class="border-t border-[#E8DDD7] w-full max-w-[420px] mb-10" />
          <div class="flex items-center gap-3 mb-5">
            <div class="flex -space-x-2">
              <span class="w-7 h-7 rounded-full bg-[#EADDCD] border-2 border-[#FEF7F4]"></span>
              <span class="w-7 h-7 rounded-full bg-[#DCE4DA] border-2 border-[#FEF7F4]"></span>
              <span class="w-7 h-7 rounded-full bg-[#F3DADA] border-2 border-[#FEF7F4]"></span>
              <span class="w-7 h-7 rounded-full bg-[#F6EBE2] border-2 border-[#FEF7F4]"></span>
            </div>
            <span
              class="font-sans font-bold text-[14px] md:text-[16px] text-[#A93E28]"><?php echo esc_html($s15['info_label']); ?></span>
          </div>
          <p class="text-[14px] md:text-[16px] leading-[22px] text-[#6B5F5A] m-0 mb-6 max-w-[340px]">
            <?php echo esc_html($s15['info_text']); ?>
          </p>
          <button type="button" onclick="location.href = '#mh-book'"
            class="bg-[#C24C33] hover:bg-[#924A3D] text-white font-sans font-bold text-[16px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer shadow-sm">
            <span><?php echo esc_html($s15['info_button_text']); ?></span>
            <?php if (!empty($sic['primary_arrow_icon'])): ?><img
                src="<?php echo esc_url(bergen_img_url($sic['primary_arrow_icon'])); ?>"
                alt="<?php echo esc_attr(bergen_img_alt($sic['primary_arrow_icon'], 'Right Arrow')); ?>"
                class="w-6 h-6 object-contain" /><?php endif; ?>
          </button>
        </div>
        <div class="lg:col-span-7 flex flex-col gap-4">
          <?php if (!empty($s15['faq_items'])):
            foreach ($s15['faq_items'] as $faq): ?>
              <div
                class="faq-item bg-white border border-[#E8DDD7] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
                <button
                  class="w-full flex items-center justify-between p-5 sm:px-7 sm:py-6 bg-transparent border-0 cursor-pointer text-left group">
                  <span
                    class="font-serif font-bold text-[16px] md:text-[20px] text-ink-900 group-hover:text-[#A85848] transition-colors pr-4"><?php echo esc_html($faq['question']); ?></span>
                  <span
                    class="faq-icon text-[#A85848] flex-none transition-transform duration-300 font-medium text-4xl leading-none">+</span>
                </button>
                <div class="faq-content hidden px-5 sm:px-7 pb-6 pt-0">
                  <p class="text-[15px] leading-[26px] text-gray-600 m-0"><?php echo esc_html($faq['answer']); ?></p>
                </div>
              </div>
            <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SECTION 16: FINAL CTA ================= -->
  <section class="section" data-reveal>
    <div class="container">
      <div
        class="rounded-[32px] px-8 py-12 md:py-20 md:px-[56px] shadow-sm flex flex-col md:flex-row items-center justify-between gap-10"
        style="background: radial-gradient(46% 62% at 92% 88%, rgba(240, 147, 103, 0.14) 0%, rgba(240, 147, 103, 0) 70%), radial-gradient(46% 62% at 8% 84%, rgba(248, 216, 212, 0.55) 0%, rgba(248, 216, 212, 0) 70%), radial-gradient(58% 74% at 50% 0%, rgba(248, 235, 226, 0.9) 0%, rgba(248, 235, 226, 0) 72%);">
        <div class="text-center md:text-left max-w-[665px]">
          <h2 class="font-serif text-[30px] md:text-[36px] text-[#241C19] mb-4 font-bold">
            <?php echo esc_html($s16['heading']); ?>
          </h2>
          <p
            class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6] max-w-[620px] mx-auto md:mx-0 mb-8 font-normal">
            <?php echo esc_html($s16['description']); ?>
          </p>
          <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
            <a href="<?php echo esc_url($s16['primary_button_url']); ?>"
              class="inline-flex items-center justify-center gap-2 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors">
              <?php echo esc_html($s16['primary_button_text']); ?>
              <?php if (!empty($sic['final_cta_arrow_icon'])): ?><img
                  src="<?php echo esc_url(bergen_img_url($sic['final_cta_arrow_icon'])); ?>"
                  alt="<?php echo esc_attr(bergen_img_alt($sic['final_cta_arrow_icon'], 'Right Arrow Icon')); ?>"
                  class="h-6 w-6 object-contain" /><?php endif; ?>
            </a>
            <a href="<?php echo esc_url($s16['secondary_button_url']); ?>"
              class="inline-flex items-center justify-center gap-2 bg-white hover:bg-[#FBF3EF] text-[#C24C33] border border-[#C24C33] font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors"><?php echo esc_html($s16['secondary_button_text']); ?></a>
          </div>
        </div>
        <div class="shrink-0">
          <div class="w-[421px] h-[280px]"><?php if (!empty($s16['image'])): ?><img
                src="<?php echo esc_url(bergen_img_url($s16['image'])); ?>"
                alt="<?php echo esc_attr(bergen_img_alt($s16['image'], 'Chat/Support Icon')); ?>"
                class="object-contain" /><?php endif; ?></div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>