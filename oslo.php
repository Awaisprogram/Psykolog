<?php
/**
 * Template Name: Oslo
 */

get_header();

// Fetch all sections
$s1 = get_field('field_707c93ea9f8f4'); // section_1
$s2 = get_field('field_df05bb689d58c'); // section_2
$s3 = get_field('field_cf791bd889e39'); // section_3
$s4 = get_field('field_29e2e5c9b7a53'); // section_4
$s5 = get_field('field_da4f893579340'); // section_5
$s6 = get_field('field_e8c11c8369589'); // section_6
$s7 = get_field('field_b4c17c9ac59f6'); // section_7
$s8 = get_field('field_1c83f8c0404c5'); // section_8
$s9 = get_field('field_fa4c36c10692f'); // section_9
$s10 = get_field('field_e027152d55159'); // section_10
$s11 = get_field('field_47f911210165e'); // section_11
$s12 = get_field('field_737e3fee5397c'); // section_12
$s13 = get_field('field_984f3c102de10'); // section_13
$s14 = get_field('field_873f94a336d77'); // section_14
$s15 = get_field('field_c8dc6074c2c14'); // section_15
$s16 = get_field('field_2de12f264984f'); // section_16

// Mapping helper for card colors in section 2
$s2_card_colors = [
    ['bg' => 'bg-[#FCEAE4]', 'border' => 'border-t-[#B84E38]'],
    ['bg' => 'bg-[#E9EFE6]', 'border' => 'border-t-[#687A5B]'],
    ['bg' => 'bg-[#E6EFF5]', 'border' => 'border-t-[#42637D]'],
    ['bg' => 'bg-[#F6EEDC]', 'border' => 'border-t-[#987A36]'],
    ['bg' => 'bg-[#EFE9F4]', 'border' => 'border-t-[#614B82]'],
];
?>

<main>
    <!-- Section 1: Hero -->
    <?php if ($s1): ?>
    <section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[700px]">
        <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
            <?php if (!empty($s1['hero_image'])): ?>
                <img src="<?php echo esc_url($s1['hero_image']); ?>" alt="" class="absolute inset-0 w-full h-full object-cover object-[100%_50%]" />
            <?php endif; ?>
        </span>

        <div class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
            <div class="max-w-[1312px] mx-auto">
                <div class="max-w-full lg:max-w-[566px]">
                    <?php if (!empty($s1['badge_text'])): ?>
                    <div class="inline-flex items-center gap-[9px] bg-white/[.66] backdrop-blur-2xl backdrop-saturate-150 border border-white/[.82] rounded-full px-5 py-[9px]">
                        <span class="text-[#CE5A43] text-[13px] leading-[13px]">✳</span>
                        <span class="font-sans font-semibold text-xs leading-4 tracking-[2px] uppercase text-brand-brown whitespace-nowrap"><?php echo esc_html($s1['badge_text']); ?></span>
                    </div>
                    <?php endif; ?>

                    <h1 class="font-serif font-bold mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[64px]">
                        <?php echo wp_kses_post($s1['heading']); ?>
                    </h1>

                    <p class="text-lg lg:text-xl text-[#3A1811] leading-[1.6] mt-[22px] mb-0">
                        <?php echo nl2br(esc_html($s1['description'])); ?>
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row items-start sm:items-center gap-4 lg:gap-5">
                        <?php if (!empty($s1['button_1_text'])): ?>
                        <a href="<?php echo esc_url($s1['button_1_url']); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-[#C24C33] text-white rounded-full font-bold text-base transition hover:bg-opacity-90">
                            <?php echo esc_html($s1['button_1_text']); ?>
                            <span class="ml-2 inline-flex items-center">
                                <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/hvit-pil.webp" alt="hvit-pil" class="h-[20px] w-[12px] mt-0.5 object-contain" />
                            </span>
                        </a>
                        <?php endif; ?>
                        <?php if (!empty($s1['button_2_text'])): ?>
                        <a href="<?php echo esc_url($s1['button_2_url']); ?>" class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-[#A93E28] text-[#A93E28] rounded-full font-bold text-base transition hover:bg-gray-100">
                            <?php echo esc_html($s1['button_2_text']); ?>
                            <span class="ml-2 inline-flex items-center">
                                <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Brun-pil.webp" alt="Brun-pil" class="h-[20px] w-[12px] mt-0.5 object-contain" />
                            </span>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 2: Features Cards -->
    <?php if ($s2 && !empty($s2['cards'])): ?>
    <section class="pt-[48px] pb-[64px]" data-reveal>
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-[16px]">
                <?php foreach ($s2['cards'] as $index => $card): 
                    $colors = $s2_card_colors[$index % count($s2_card_colors)];
                ?>
                <div class="<?php echo $colors['bg']; ?> border-t-[4px] <?php echo $colors['border']; ?> rounded-[16px] p-6 md:py-[32px] md:px-[24px] flex flex-col items-center text-center justify-start transition-transform hover:-translate-y-1">
                    <?php if (!empty($card['icon'])): ?>
                    <div class="w-[52px] h-[52px] mb-6">
                        <img src="<?php echo esc_url($card['icon']); ?>" alt="" class="object-contain" />
                    </div>
                    <?php endif; ?>
                    <h3 class="font-serif text-[16px] md:text-[18px] text-[#241C19] font-bold mb-[8px] leading-snug">
                        <?php echo esc_html($card['title']); ?>
                    </h3>
                    <p class="text-[#5B5B5B] text-[14px]">
                        <?php echo esc_html($card['subtitle']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 3: Do You Need -->
    <?php if ($s3): ?>
    <section class="pb-[90px]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[777px_510px] items-center gap-10">
                <div>
                    <h2 class="font-serif text-[36px] md:text-[48px] text-[#241C19] font-bold leading-[1.2] lg:leading-[64.8px] mb-8">
                        <?php echo wp_kses_post($s3['heading']); ?>
                    </h2>
                    <div class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.7] space-y-[14px] prose-p:mb-0">
                        <?php echo $s3['content']; ?>
                    </div>
                </div>
                <div>
                    <?php if (!empty($s3['side_image'])): ?>
                    <img src="<?php echo esc_url($s3['side_image']); ?>" alt="" class="w-full h-auto rounded-[12px] shadow-sm object-cover" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 4: Private vs Public -->
    <?php if ($s4): ?>
    <section class="section bg-[#FCF8F5]" data-reveal>
        <div class="container">
            <h2 class="font-serif text-[32px] md:text-[44px] text-[#241C19] font-bold leading-[1.2] mb-4">
                <?php echo wp_kses_post($s4['heading']); ?>
            </h2>
            <p class="text-[16px] md:text-[20px] text-[#5B5B5B] mt-4 mb-10 leading-[1.6]">
                <?php echo nl2br(esc_html($s4['description'])); ?>
            </p>

            <div class="mt-8 bg-white rounded-[20px] overflow-x-auto shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
                <table class="w-full text-left border-collapse min-w-[800px]">
                    <thead>
                        <tr class="bg-[#C24C33]">
                            <th class="px-8 py-6 w-[35%]"></th>
                            <th class="px-8 py-6 font-bold text-[13px] md:text-[16px] tracking-[1.5px] uppercase text-white w-[32%]">
                                <?php echo esc_html($s4['public_column']); ?>
                            </th>
                            <th class="px-8 py-6 font-bold text-[13px] md:text-[16px] tracking-[1.5px] uppercase text-white w-[33%]">
                                <?php echo esc_html($s4['private_column']); ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#F5EAE4]">
                        <?php if (!empty($s4['rows'])): foreach ($s4['rows'] as $row): ?>
                        <tr class="hover:bg-[#FCF8F5] transition-colors">
                            <td class="p-4 lg:p-6">
                                <div class="flex items-center gap-4">
                                    <?php if (!empty($row['icon'])): ?>
                                    <span class="w-[36px] h-[36px]">
                                        <img src="<?php echo esc_url($row['icon']); ?>" alt="" class="object-contain" />
                                    </span>
                                    <?php endif; ?>
                                    <span class="font-serif font-bold text-[16px] md:text-[18px] text-[#241C19]"><?php echo esc_html($row['title']); ?></span>
                                </div>
                            </td>
                            <td class="p-4 lg:p-6 text-[16px] text-[#6F6259]">
                                <?php echo esc_html($row['public_text']); ?>
                            </td>
                            <td class="p-4 lg:p-6 text-[16px] text-[#241C19] font-semibold">
                                <?php echo esc_html($row['private_text']); ?>
                            </td>
                        </tr>
                        <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 5: Who Do We Help -->
    <?php if ($s5): ?>
    <section class="section" data-reveal>
        <div class="container">
            <div class="grid grid-cols1 lg:grid-cols-2 xl:grid-cols-[797px_462px] items-center gap-10 lg:gap-16">
                <div>
                    <?php if (!empty($s5['subtitle'])): ?>
                    <span class="text-[#C24C33] text-[14px] font-bold tracking-[1.5px] uppercase block mb-3">
                        <?php echo esc_html($s5['subtitle']); ?>
                    </span>
                    <?php endif; ?>
                    <h2 class="font-serif text-[36px] md:text-[48px] text-[#241C19] font-bold leading-[1.2] mb-6">
                        <?php echo wp_kses_post($s5['heading']); ?>
                    </h2>
                    <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] mb-8">
                        <?php echo nl2br(esc_html($s5['description'])); ?>
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <?php if (!empty($s5['tags'])): foreach ($s5['tags'] as $index => $tag): ?>
                        <div class="inline-flex items-center gap-2.5 bg-[#FFF7F3] border border-[#F2E4DC] rounded-full px-5 py-2.5 transition-all duration-200 hover:bg-[#FDEDE4] hover:border-[#E8CFC1] hover:-translate-y-0.5 hover:shadow-[0_4px_12px_rgba(200,82,55,0.12)] cursor-pointer">
                            <?php if (!empty($tag['icon'])): ?>
                            <img src="<?php echo esc_url($tag['icon']); ?>" alt="" class="w-[28px] h-[28px] object-contain <?php echo ($index === 0) ? 'text-[#C85237]' : ''; ?>" />
                            <?php endif; ?>
                            <span class="text-[#4E403B] text-[16px] font-semibold"><?php echo esc_html($tag['text']); ?></span>
                        </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative rounded-[24px] overflow-hidden shadow-sm">
                        <?php if (!empty($s5['side_image'])): ?>
                        <img src="<?php echo esc_url($s5['side_image']); ?>" alt="" class="w-full h-auto lg:h-[441px] object-cover rounded-[24px]" />
                        <?php endif; ?>
                        <?php if (!empty($s5['badge_text'])): ?>
                        <div class="absolute bottom-6 left-6 bg-white/20 backdrop-blur-md border border-white/30 rounded-full px-4 py-2 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-[#C85237] flex items-center justify-center flex-none">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </span>
                            <span class="text-white text-[12px] font-bold tracking-[1.2px] uppercase pr-2"><?php echo esc_html($s5['badge_text']); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 6: Flip Cards -->
    <?php if ($s6): ?>
    <section class="section" data-reveal>
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="h2 mb-4"><?php echo wp_kses_post($s6['heading']); ?></h2>
                <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6]">
                    <?php echo nl2br(esc_html($s6['description'])); ?>
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if (!empty($s6['flip_cards'])): foreach ($s6['flip_cards'] as $index => $card): 
                    $card_id = 'card-0' . ($index + 1); 
                    $is_terracotta_front = ($index % 2 != 0 && $index != 4 && $index != 5) || ($index == 1 || $index == 3 || $index == 5); 
                    
                    $front_photo = ($index % 2 == 0);
                ?>
                <div class="flip-card-perspective h-[380px]" data-flip-card="<?php echo $card_id; ?>">
                    <div class="flip-card-inner" id="flip-inner-0<?php echo ($index + 1); ?>">
                        
                        <!-- FRONT -->
                        <div class="flip-card-face <?php echo (!$front_photo) ? 'bg-[#C85237] p-8 flex flex-col justify-between' : ''; ?>">
                            <?php if (!$front_photo): ?>
                                <div>
                                    <?php if (!empty($card['back_icon'])): ?>
                                    <img src="<?php echo esc_url($card['back_icon']); ?>" alt="" class="w-10 h-10 object-contain mb-6" />
                                    <?php endif; ?>
                                    <h3 class="font-serif text-white text-[22px] font-bold mb-3 leading-snug"><?php echo esc_html($card['back_title']); ?></h3>
                                    <p class="text-white text-[15px] leading-[1.65]"><?php echo nl2br(esc_html($card['back_description'])); ?></p>
                                </div>
                                <button class="inline-flex items-center gap-2 text-white text-[14px] font-bold transition-opacity hover:opacity-80 cursor-pointer" data-flip-btn="<?php echo $card_id; ?>">
                                    <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/roter-tekst.webp.webp" alt="roter-tekst.webp" class="w-[34px] h-[34px] object-contain" />
                                    Tilbake til bildet
                                </button>
                            <?php else: ?>
                                <?php if (!empty($card['front_image'])): ?>
                                <img src="<?php echo esc_url($card['front_image']); ?>" alt="" class="w-full h-full object-cover" />
                                <?php endif; ?>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                                <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end">
                                    <div class="flex items-end justify-between w-full">
                                        <div class="flex flex-col">
                                            <span class="text-[#E78768] font-serif text-[18px] md:text-[20px] mb-1"><?php echo esc_html($card['number']); ?></span>
                                            <h3 class="font-serif text-white text-[24px] md:text-[28px] font-bold leading-tight"><?php echo esc_html($card['front_title']); ?></h3>
                                        </div>
                                        <button class="inline-flex items-center justify-center flex-shrink-0 transition-transform hover:scale-105 mb-1 cursor-pointer" data-flip-btn="<?php echo $card_id; ?>">
                                            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/roter-bilde.webp" alt="Flip" class="w-[44px] h-[44px] object-contain" />
                                        </button>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- BACK -->
                        <div class="flip-card-face flip-card-back <?php echo ($front_photo) ? 'bg-[#C85237] p-8 flex flex-col justify-between' : ''; ?>">
                            <?php if ($front_photo): ?>
                                <div>
                                    <div class="flex items-start justify-between mb-6">
                                        <?php if (!empty($card['back_icon'])): ?>
                                        <img src="<?php echo esc_url($card['back_icon']); ?>" alt="" class="w-10 h-10 object-contain" />
                                        <?php endif; ?>
                                        <span class="text-white/60 font-serif text-[18px]"><?php echo esc_html($card['number']); ?></span>
                                    </div>
                                    <h3 class="font-serif text-white text-[22px] font-bold mb-3 leading-snug"><?php echo esc_html($card['back_title']); ?></h3>
                                    <p class="text-white/90 text-[15px] leading-[1.65]"><?php echo nl2br(esc_html($card['back_description'])); ?></p>
                                </div>
                                <button class="inline-flex items-center gap-2 text-white text-[14px] font-bold transition-opacity hover:opacity-80 cursor-pointer" data-flip-btn="<?php echo $card_id; ?>">
                                    <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/roter-tekst.webp.webp" alt="" class="w-[34px] h-[34px] object-contain" />
                                    Tilbake til bildet
                                </button>
                            <?php else: ?>
                                <?php if (!empty($card['front_image'])): ?>
                                <img src="<?php echo esc_url($card['front_image']); ?>" alt="" class="w-full h-full object-cover" />
                                <?php endif; ?>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                                <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end">
                                    <div class="flex items-end justify-between w-full">
                                        <div class="flex flex-col">
                                            <span class="text-[#E78768] font-serif text-[18px] md:text-[20px] mb-1"><?php echo esc_html($card['number']); ?></span>
                                            <h3 class="font-serif text-white text-[24px] md:text-[28px] font-bold leading-tight"><?php echo esc_html($card['front_title']); ?></h3>
                                        </div>
                                        <button class="inline-flex items-center justify-center flex-shrink-0 transition-transform hover:scale-105 mb-1 cursor-pointer" data-flip-btn="<?php echo $card_id; ?>">
                                            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/roter-bilde.webp" alt="Flip" class="w-[44px] h-[44px] object-contain" />
                                        </button>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 7: Video Consultation -->
    <?php if ($s7): ?>
    <section class="section" data-reveal>
        <div class="container">
            <div class="mb-12 text-left">
                <h2 class="h2 mb-4"><?php echo wp_kses_post($s7['heading']); ?></h2>
                <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6]">
                    <?php echo nl2br(esc_html($s7['description'])); ?>
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[537px_744px] gap-6 lg:gap-8 items-start">
                <div class="relative rounded-[24px] overflow-hidden shadow-sm">
                    <?php if (!empty($s7['side_image'])): ?>
                    <img src="<?php echo esc_url($s7['side_image']); ?>" alt="" class="w-full h-auto md:h-[390px] object-cover rounded-[24px]" />
                    <?php endif; ?>
                    <?php if (!empty($s7['badge_text'])): ?>
                    <div class="absolute bottom-6 left-6 bg-[#FFFFFF29] backdrop-blur-md border border-[#FFFFFF47] rounded-full p-2 pr-6 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-full bg-[#D66D4E] flex items-center justify-center flex-none shadow-sm">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/oslo/Video.webp" alt="" class="object-contain" />
                        </span>
                        <span class="text-white text-[11px] font-bold tracking-[1.5px] uppercase">
                            <?php echo esc_html($s7['badge_text']); ?>
                        </span>
                    </div>
                    <?php endif; ?>
                </div>

                <div>
                    <h3 class="font-serif text-[24px] md:text-[26px] text-[#241C19] font-bold mb-6 md:mb-8 leading-tight">
                        <?php echo esc_html($s7['benefits_heading']); ?>
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php if (!empty($s7['benefits'])): foreach ($s7['benefits'] as $benefit): ?>
                        <div class="bg-[#FFF7F3] border border-[#F2E4DC] rounded-[20px] p-6 flex flex-col gap-4">
                            <div class="flex items-start gap-4">
                                <?php if (!empty($benefit['icon'])): ?>
                                <img src="<?php echo esc_url($benefit['icon']); ?>" alt="" class="w-10 h-10 object-contain" />
                                <?php endif; ?>
                                <div>
                                    <h4 class="font-serif text-[18px] font-bold text-[#241C19] mb-1.5 leading-snug"><?php echo esc_html($benefit['title']); ?></h4>
                                    <p class="text-[#6B6B6B] text-[16px] leading-[1.6]"><?php echo nl2br(esc_html($benefit['description'])); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 8: Video Vs In Person -->
    <?php if ($s8): ?>
    <section class="section" data-reveal>
        <div class="container">
            <div class="mb-8">
                <h2 class="h2 mb-4"><?php echo wp_kses_post($s8['heading']); ?></h2>
                <p class="text-[#393939] text-[16px] md:text-[20px] leading-[1.6]">
                    <?php echo nl2br(esc_html($s8['description'])); ?>
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
                <?php $op_a = $s8['option_a']; if ($op_a): ?>
                <div class="bg-[#FFF7F3] border border-[#F2E4DC] rounded-[24px] p-8 flex flex-col justify-between shadow-sm">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <span class="w-[56px] h-[56px]">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/oslo/top-1.webp" alt="" class="object-contain" />
                            </span>
                            <span class="text-[#A93E28] text-[14px] font-bold tracking-[1.5px] uppercase"><?php echo esc_html($op_a['label']); ?></span>
                        </div>
                        <h3 class="font-serif text-[24px] md:text-[32px] font-bold text-[#241C19] mb-8">
                            <?php echo esc_html($op_a['title']); ?>
                        </h3>
                        <div class="space-y-5 text-[14px]">
                            <?php if (!empty($op_a['details'])): foreach ($op_a['details'] as $detail): ?>
                            <div class="flex items-start gap-3.5">
                                <?php if (!empty($detail['icon'])): ?>
                                <img src="<?php echo esc_url($detail['icon']); ?>" alt="" class="w-8 h-8 object-contain" />
                                <?php endif; ?>
                                <div>
                                    <span class="block text-[#A93E28] font-bold tracking-[1.2px] text-[11px] md:text-[14px] uppercase mb-1"><?php echo esc_html($detail['title']); ?></span>
                                    <p class="<?php echo ($detail['title'] == 'LOCATION' ? 'text-[#5B5B5B] font-medium md:text-[16px]' : 'text-[#6B6B6B]'); ?>"><?php echo esc_html($detail['text']); ?></p>
                                </div>
                            </div>
                            <?php endforeach; endif; ?>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="<?php echo esc_url($op_a['button_url']); ?>" class="inline-flex items-center gap-[12px] border border-[#C24C33] hover:border-[#C85237] text-[#C85237] rounded-full px-6 py-3.5 text-[14px] font-bold transition-all">
                            <span><?php echo esc_html($op_a['button_text']); ?></span>
                            <span class="text-[#C85237]">→</span>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <div class="relative rounded-[24px] overflow-hidden shadow-sm h-full min-h-[550px] flex items-end">
                    <?php if (!empty($s8['center_image'])): ?>
                    <img src="<?php echo esc_url($s8['center_image']); ?>" alt="" class="absolute inset-0 w-full h-full object-cover" />
                    <?php endif; ?>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                </div>

                <?php $op_b = $s8['option_b']; if ($op_b): ?>
                <div class="bg-[#FFF7F3] border border-[#F2E4DC] rounded-[24px] p-8 flex flex-col justify-between shadow-sm">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <span class="w-[56px] h-[56px]">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/oslo/top-2.webp" alt="" class="object-contain" />
                            </span>
                            <span class="text-[#A93E28] text-[14px] font-bold tracking-[1.5px] uppercase"><?php echo esc_html($op_b['label']); ?></span>
                        </div>
                        <h3 class="font-serif text-[24px] md:text-[32px] font-bold text-[#241C19] mb-8">
                            <?php echo esc_html($op_b['title']); ?>
                        </h3>
                        <div class="space-y-5 text-[14px]">
                            <?php if (!empty($op_b['details'])): foreach ($op_b['details'] as $detail): ?>
                            <div class="flex items-start gap-3.5">
                                <?php if (!empty($detail['icon'])): ?>
                                <img src="<?php echo esc_url($detail['icon']); ?>" alt="" class="w-8 h-8 object-contain" />
                                <?php endif; ?>
                                <div>
                                    <span class="block text-[#A93E28] font-bold tracking-[1.2px] text-[11px] md:text-[14px] uppercase mb-1"><?php echo esc_html($detail['title']); ?></span>
                                    <p class="<?php echo ($detail['title'] == 'LOCATION' ? 'text-[#5B5B5B] font-medium md:text-[16px]' : 'text-[#6B6B6B]'); ?>"><?php echo esc_html($detail['text']); ?></p>
                                </div>
                            </div>
                            <?php endforeach; endif; ?>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="<?php echo esc_url($op_b['button_url']); ?>" class="inline-flex gap-[12px] items-center bg-[#C85237] hover:bg-[#b0432b] text-white rounded-full px-6 py-3.5 text-[14px] font-bold transition-all shadow-sm">
                            <span><?php echo esc_html($op_b['button_text']); ?></span>
                            <span>→</span>
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 9: Symptoms -->
    <?php if ($s9): ?>
    <section class="section bg-[#FFF7F3]">
        <div class="container" data-reveal>
            <div class="mb-8">
                <h2 class="h2 mb-4"><?php echo wp_kses_post($s9['heading']); ?></h2>
                <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6]">
                    <?php echo nl2br(esc_html($s9['description'])); ?>
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php if (!empty($s9['symptoms'])): foreach ($s9['symptoms'] as $sym): ?>
                <div class="bg-white border border-[#F2E4DC] rounded-[16px] p-6 flex flex-col justify-between transition-shadow">
                    <div>
                        <?php if (!empty($sym['icon'])): ?>
                        <div class="w-[40px] h-[40px] mb-5">
                            <img src="<?php echo esc_url($sym['icon']); ?>" alt="" class="object-contain" />
                        </div>
                        <?php endif; ?>
                        <h3 class="font-serif text-[16px] md:text-[20px] font-bold text-[#241C19] mb-2"><?php echo esc_html($sym['title']); ?></h3>
                        <p class="text-[#6B6B6B] text-[14px] md:text-[16px] leading-[1.6]"><?php echo nl2br(esc_html($sym['description'])); ?></p>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 10: Why Choose Psykolog.no -->
    <?php if ($s10): ?>
    <section class="section" data-reveal>
        <div class="container">
            <div class="bg-[#C24C33] rounded-[28px] p-6 sm:p-10 md:p-12 shadow-md relative overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[551px_612px] gap-8 lg:gap-10">
                    <div class="flex flex-col justify-between">
                        <h2 class="font-serif text-white text-[32px] md:text-[48px] font-bold leading-[1.25] mb-6">
                            <?php echo wp_kses_post($s10['heading']); ?>
                        </h2>
                        <?php if (!empty($s10['side_image'])): ?>
                        <div class="rounded-[24px] overflow-hidden w-full h-[360px] sm:h-[420px] lg:h-[480px]">
                            <img src="<?php echo esc_url($s10['side_image']); ?>" alt="" class="w-full h-full object-cover" />
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col justify-center">
                        <div class="bg-[#FFFFFF0E] border border-[#FFFFFF21] rounded-[22px] p-6 md:p-8 backdrop-blur-sm">
                            <ul class="divide-y divide-white/20">
                                <?php if (!empty($s10['list_items'])): foreach ($s10['list_items'] as $index => $item): ?>
                                <li class="<?php echo ($index == 0 ? 'pb-3.5' : ($index == count($s10['list_items']) - 1 ? 'pt-3.5' : 'py-3.5')); ?> flex items-start gap-3.5 text-white">
                                    <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/flatt.webp" alt="Check" class="w-[26px] h-[26px] mt-0.5 flex-shrink-0" />
                                    <p class="text-[13px] md:text-[16px] leading-relaxed">
                                        <strong class="font-bold"><?php echo esc_html($item['title']); ?></strong> <?php echo nl2br(esc_html($item['description'])); ?>
                                    </p>
                                </li>
                                <?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 11: Meet Our Psychologists -->
    <?php if ($s11): ?>
    <section class="section bg-[#FFF7F3]" data-reveal>
        <div class="container">
            <div class="mb-12">
                <h2 class="h2 mb-4"><?php echo wp_kses_post($s11['heading']); ?></h2>
                <p class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6]">
                    <?php echo nl2br(esc_html($s11['description'])); ?>
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if (!empty($s11['psychologists'])): foreach ($s11['psychologists'] as $psych): ?>
                <div class="bg-white rounded-[24px] p-3 shadow-[0_2px_10px_rgba(0,0,0,0.03)] flex flex-col h-full">
                    <div class="relative w-full h-[260px] md:h-[280px] rounded-[16px] overflow-hidden">
                        <?php if (!empty($psych['image'])): ?>
                        <img src="<?php echo esc_url($psych['image']); ?>" alt="" class="w-full h-full object-cover" />
                        <?php endif; ?>
                        <div class="absolute bottom-3 left-3 right-3 bg-white/10 backdrop-blur-md border border-[#FFFFFF57] shadow-lg rounded-[12px] px-5 py-4 bg-[#FFFFFF33] text-white">
                            <h3 class="font-serif text-[20px] text-white font-bold leading-snug"><?php echo esc_html($psych['name']); ?></h3>
                            <p class="text-white text-[12px] mt-0.5"><?php echo esc_html($psych['role']); ?></p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col flex-grow justify-between px-3 pt-5 pb-4">
                        <p class="text-[#6B5F5A] text-[14px] md:text-[16px] leading-[1.6] mb-6">
                            <?php echo nl2br(esc_html($psych['description'])); ?>
                        </p>
                        
                        <div class="flex items-center gap-6 mt-auto pt-4 border-t border-[#F5EAE4]">
                            <?php if (!empty($psych['profile_link_text'])): ?>
                            <a href="<?php echo esc_url($psych['profile_url']); ?>" class="inline-flex items-center gap-1.5 text-[#241C19] text-[13px] font-bold hover:text-[#C85237] transition-colors">
                                <span>→</span> <?php echo esc_html($psych['profile_link_text']); ?>
                            </a>
                            <?php endif; ?>
                            <?php if (!empty($psych['book_link_text'])): ?>
                            <a href="<?php echo esc_url($psych['book_url']); ?>" class="inline-flex items-center gap-1.5 text-[#241C19] text-[13px] font-bold hover:text-[#C85237] transition-colors">
                                <span>→</span> <?php echo esc_html($psych['book_link_text']); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 12: Find A Psychologist -->
    <?php if ($s12): ?>
    <section class="section" data-reveal>
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="w-full rounded-[24px] overflow-hidden bg-[#F7F7F7] h-[400px] lg:h-[580px]">
                    <?php if (!empty($s12['map_image'])): ?>
                    <img src="<?php echo esc_url($s12['map_image']); ?>" alt="Map" class="w-full h-full object-cover" />
                    <?php endif; ?>
                </div>

                <div class="flex flex-col">
                    <h2 class="h2 mb-6"><?php echo wp_kses_post($s12['heading']); ?></h2>

                    <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-6 mb-10">
                        <div class="flex items-center gap-4">
                            <div class="w-[52px] h-[52px] flex-shrink-0">
                                <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/posisjonsmarkor.webp" alt="Location" class="object-contain" />
                            </div>
                            <div class="pt-0.5">
                                <h2 class="font-serif text-[#2B211F] text-[15px] md:text-[18px] mb-1"><?php echo esc_html($s12['address']); ?></h2>
                                <?php if (!empty($s12['share_url'])): ?>
                                <a href="<?php echo esc_url($s12['share_url']); ?>" class="inline-flex items-center gap-1.5 text-[#C24C33] text-[13px] md:text-[15px] font-semibold hover:underline">
                                    Del posisjon
                                    <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/pil-opp.webp" alt="Share" class="w-2.5 h-2.5 object-contain" />
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if (!empty($s12['phone'])): ?>
                        <div class="pt-1">
                            <a href="<?php echo esc_url($s12['phone_url']); ?>" class="inline-flex items-center gap-1.5 text-[#C24C33] text-[13px] md:text-[15px] font-semibold hover:underline">
                                <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/pil-opp.webp" alt="Share" class="w-2.5 h-2.5 object-contain" />
                                <?php echo esc_html($s12['phone']); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>

                    <div>
                        <h3 class="text-[#5B5B5B] text-[13px] uppercase tracking-[1.2px] mb-4">ÅPNINGSTIDER</h3>
                        <ul class="flex flex-col divide-y divide-[#F2E5DF]">
                            <?php if (!empty($s12['opening_hours'])): foreach ($s12['opening_hours'] as $hour): 
                                // To mirror the "active state" visually without complex logic, we can just render the standard layout. 
                                // (The HTML hardcoded Wednesday as active, but since this is dynamic we will render them consistently)
                            ?>
                            <li class="py-[14px] flex justify-between items-center">
                                <span class="text-[#5B5B5B] text-[14px] md:text-[16px]"><?php echo esc_html($hour['day']); ?></span>
                                <span class="text-[#5B5B5B] text-[14px] md:text-[16px]"><?php echo esc_html($hour['hours']); ?></span>
                            </li>
                            <?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-[50px] pt-4 flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <h3 class="font-serif text-[#241C19] text-[20px] md:text-[24px] font-bold mb-1.5">
                        <?php echo wp_kses_post($s12['summary_title']); ?>
                    </h3>
                    <p class="text-[#6B5F5A] text-[14px] md:text-[16px]">
                        <?php echo esc_html($s12['summary_address']); ?>
                    </p>
                </div>
                <?php if (!empty($s12['button_text'])): ?>
                <a href="<?php echo esc_url($s12['button_url']); ?>" class="inline-flex items-center justify-center gap-2.5 bg-[#C85237] hover:bg-[#b0452e] text-white text-[15px] font-bold py-3.5 px-8 rounded-full transition-colors whitespace-nowrap">
                    <?php echo esc_html($s12['button_text']); ?>
                    <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/hvit-pil.webp" alt="Right Arrow" class="w-3 h-6 object-contain" />
                </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 13: 3 Easy Steps -->
    <?php if ($s13): ?>
    <section class="section bg-[#FFF7F3]">
        <div class="container" data-reveal>
            <div class="text-center max-w-3xl mx-auto mb-14">
                <h2 class="h2 mb-4">
                    <span><?php echo esc_html($s13['heading_1']); ?></span>
                    <span class="inline-flex items-center justify-center md:w-[52px] md:h-auto ">
                        <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Trinnpil.webp" alt="Trinnpil" class="object-contain" />
                    </span>
                    <em><?php echo esc_html($s13['heading_2']); ?></em>
                </h2>
                <p class="text-[#5B5B5B] text-[15px] md:text-[20px] leading-[1.6]">
                    <?php echo nl2br(esc_html($s13['description'])); ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-stretch">
                <?php if (!empty($s13['steps'])): foreach ($s13['steps'] as $index => $step): ?>
                <label class="group relative rounded-[24px] p-5 border-2 border-transparent bg-transparent transition-all duration-300 flex flex-col justify-between cursor-pointer has-[:checked]:border-[#C85237] has-[:checked]:shadow-md">
                    <input type="radio" name="step" value="<?php echo $index + 1; ?>" <?php echo $index === 0 ? 'checked' : ''; ?> class="peer sr-only" />
                    <div>
                        <div class="relative w-full h-[200px] sm:h-[220px] rounded-[16px] overflow-hidden mb-6">
                            <?php if (!empty($step['image'])): ?>
                            <img src="<?php echo esc_url($step['image']); ?>" alt="" class="w-full h-full object-cover" />
                            <?php endif; ?>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-white text-[#241C19] peer-checked:bg-[#C85237] peer-checked:text-white text-[12px] font-semibold tracking-wide transition-colors duration-300 shadow-sm">
                                <?php echo esc_html($step['step_label']); ?>
                            </span>
                        </div>
                        <h3 class="font-serif text-[20px] md:text-[24px] font-bold text-[#241C19] mb-3">
                            <?php echo esc_html($step['title']); ?>
                        </h3>
                        <p class="text-[#5B5B5B] text-[13px] md:text-[16px] leading-relaxed mb-6">
                            <?php echo nl2br(esc_html($step['description'])); ?>
                        </p>
                    </div>
                    <?php if (!empty($step['button_text'])): ?>
                    <a href="<?php echo esc_url($step['button_url']); ?>" class="inline-flex items-center justify-center gap-2 bg-white text-[#241C19] border border-[#E5E5E5] peer-checked:bg-[#C85237] peer-checked:text-white peer-checked:border-[#C85237] text-[13px] font-semibold py-3 px-6 rounded-full transition-all duration-300 w-fit">
                        <?php echo esc_html($step['button_text']); ?>
                    </a>
                    <?php endif; ?>
                </label>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 14: Pricing -->
    <?php if ($s14): ?>
    <section class="section" data-reveal>
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[465px_804px] gap-12 lg:gap-16 items-start">
                <div class="pt-2">
                    <?php if (!empty($s14['subtitle'])): ?>
                    <span class="block text-[#A93E28] text-[11px] md:text-[14px] font-bold tracking-[1.5px] uppercase mb-4">
                        <?php echo esc_html($s14['subtitle']); ?>
                    </span>
                    <?php endif; ?>
                    <h2 class="h2 mb-6"><?php echo wp_kses_post($s14['heading']); ?></h2>
                    <p class="text-[#5B5B5B] text-[15px] md:text-[20px] leading-[1.6]">
                        <?php echo nl2br(esc_html($s14['description'])); ?>
                    </p>
                </div>

                <div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 items-stretch">
                        <?php $ip = $s14['in_person']; if ($ip): ?>
                        <div class="border border-[#F09367] rounded-[24px] p-6 md:p-8 flex flex-col justify-between transition-shadow hover:shadow-md bg-white">
                            <div>
                                <?php if (!empty($ip['icon'])): ?>
                                <div class="w-[56px] h-[56px] mb-6">
                                    <img src="<?php echo esc_url($ip['icon']); ?>" alt="" class="object-contain" />
                                </div>
                                <?php endif; ?>
                                <h3 class="font-serif text-[24px] md:text-[28px] font-bold text-[#241C19] mb-5"><?php echo esc_html($ip['title']); ?></h3>
                                <div class="mb-5">
                                    <span class="block text-[#635A52] text-[13px] md:text-[16px] mb-1"><?php echo esc_html($ip['from_text']); ?></span>
                                    <div class="flex items-baseline gap-2">
                                        <span class="font-serif text-[36px] md:text-[40px] font-bold text-[#C24C33] leading-none"><?php echo esc_html($ip['price']); ?></span>
                                    </div>
                                    <span class="block text-[#393939] text-[13px] md:text-[15px] font-medium mt-1.5"><?php echo esc_html($ip['per_time']); ?></span>
                                </div>
                                <p class="text-[#5B5B5B] text-[14px] md:text-[18px] leading-relaxed mb-8 max-w-[320px]">
                                    <?php echo nl2br(esc_html($ip['description'])); ?>
                                </p>
                            </div>
                            <?php if (!empty($ip['button_text'])): ?>
                            <a href="<?php echo esc_url($ip['button_url']); ?>" class="inline-flex justify-center items-center bg-[#C85237] text-white font-bold text-[14px] md:text-[18px] py-3.5 px-6 rounded-full w-fit hover:bg-[#b0452e] transition-colors">
                                <?php echo esc_html($ip['button_text']); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <?php $vid = $s14['video']; if ($vid): ?>
                        <div class="rounded-[24px] p-6 md:p-8 flex flex-col justify-between shadow-sm transition-shadow hover:shadow-md bg-[#C85237]">
                            <div>
                                <?php if (!empty($vid['icon'])): ?>
                                <div class="w-[56px] h-[56px] mb-6">
                                    <img src="<?php echo esc_url($vid['icon']); ?>" alt="" class="object-contain" />
                                </div>
                                <?php endif; ?>
                                <h3 class="font-serif text-[22px] md:text-[28px] font-bold text-white mb-5"><?php echo esc_html($vid['title']); ?></h3>
                                <div class="mb-5">
                                    <span class="block text-white/90 text-[13px] md:text-[16px] mb-1"><?php echo esc_html($vid['from_text']); ?></span>
                                    <div class="flex items-baseline gap-2">
                                        <span class="font-serif text-[36px] md:text-[40px] font-bold text-white leading-none"><?php echo esc_html($vid['price']); ?></span>
                                    </div>
                                    <span class="block text-white font-medium text-[13px] md:text-[15px] mt-1.5"><?php echo esc_html($vid['per_time']); ?></span>
                                </div>
                                <p class="text-white/90 text-[14px] md:text-[18px] leading-relaxed mb-8 max-w-[320px]">
                                    <?php echo nl2br(esc_html($vid['description'])); ?>
                                </p>
                            </div>
                            <?php if (!empty($vid['button_text'])): ?>
                            <a href="<?php echo esc_url($vid['button_url']); ?>" class="inline-flex justify-center items-center bg-white text-[#241C19] font-bold text-[14px] md:text-[18px] py-3.5 px-6 rounded-full w-fit hover:bg-gray-50 transition-colors">
                                <?php echo esc_html($vid['button_text']); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="mt-16 md:mt-24 rounded-[16px] p-8 md:p-12 lg:p-16" style="background: linear-gradient(352.44deg, rgba(253, 231, 225, 0.2) 28.13%, rgba(240, 147, 103, 0.028) 136.14%);">
                <div class="mb-10">
                    <h3 class="font-serif text-[20px] md:text-[24px] text-[#393939] font-bold mb-4"><?php echo esc_html($s14['crisis_heading']); ?></h3>
                    <p class="text-[#5B5B5B] text-[15px] md:text-[18px] leading-[1.6]">
                        <?php echo nl2br(esc_html($s14['crisis_description'])); ?>
                    </p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                    <?php if (!empty($s14['emergency_contacts'])): foreach ($s14['emergency_contacts'] as $index => $contact): ?>
                    <a href="<?php echo esc_url($contact['phone_url']); ?>" class="bg-white rounded-[20px] p-5 flex items-center gap-4 transition-transform hover:-translate-y-1 hover:shadow-sm border-[#FFFFFF29]">
                        <div class="w-12 h-12 <?php echo $index > 0 ? 'rounded-full bg-[#ECA180] flex items-center justify-center flex-shrink-0' : ''; ?>">
                            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/NODETATENE.webp" alt="Phone" class="object-contain" />
                        </div>
                        <div>
                            <span class="block text-[#5C2A20] font-serif text-[10px] md:text-[14px] font-bold uppercase tracking-[1px] mb-[8px]"><?php echo esc_html($contact['title']); ?></span>
                            <span class="block text-[#C24C33] text-[20px] md:text-[24px] font-bold leading-none"><?php echo esc_html($contact['number']); ?></span>
                        </div>
                    </a>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 15: FAQ -->
    <?php if ($s15): ?>
    <section id="mh-faq" class="section bg-[#FFF7F3]">
        <div class="container" data-reveal>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col items-start">
                    <?php if (!empty($s15['subtitle'])): ?>
                    <span class="text-[#C24C33] text-[12px] font-normal tracking-[0.15em] uppercase mb-4 block">
                        <?php echo esc_html($s15['subtitle']); ?>
                    </span>
                    <?php endif; ?>
                    <h2 class="h2 mb-6"><?php echo wp_kses_post($s15['heading']); ?></h2>
                    <p class="text-[15px] sm:text-[18px] leading-[26px] text-[#6B5F5A] m-0 mb-8 max-w-[420px]">
                        <?php echo nl2br(esc_html($s15['description'])); ?>
                    </p>
                    <?php if (!empty($s15['book_btn_text'])): ?>
                    <button type="button" onclick="location.href = '<?php echo esc_url($s15['book_btn_url']); ?>'" class="border border-[#C24C33] text-[#C24C33] bg-transparent hover:bg-[#C24C33] hover:text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors mb-12 cursor-pointer">
                        <?php echo esc_html($s15['book_btn_text']); ?>
                    </button>
                    <?php endif; ?>

                    <hr class="border-t border-[#E8DDD7] w-full max-w-[420px] mb-10" />

                    <div class="flex items-center gap-3 mb-5">
                        <div class="flex -space-x-2">
                            <span class="w-7 h-7 rounded-full bg-[#EADDCD] border-2 border-[#FEF7F4]"></span>
                            <span class="w-7 h-7 rounded-full bg-[#DCE4DA] border-2 border-[#FEF7F4]"></span>
                            <span class="w-7 h-7 rounded-full bg-[#F3DADA] border-2 border-[#FEF7F4]"></span>
                            <span class="w-7 h-7 rounded-full bg-[#F6EBE2] border-2 border-[#FEF7F4]"></span>
                        </div>
                        <span class="font-sans font-bold text-[14px] md:text-[16px] text-[#A93E28]">
                            <?php echo esc_html($s15['patient_qs_heading']); ?>
                        </span>
                    </div>

                    <p class="text-[14px] md:text-[16px] leading-[22px] text-[#6B5F5A] m-0 mb-6 max-w-[340px]">
                        <?php echo nl2br(esc_html($s15['patient_qs_description'])); ?>
                    </p>

                    <?php if (!empty($s15['ask_btn_text'])): ?>
                    <button type="button" onclick="location.href = '<?php echo esc_url($s15['ask_btn_url']); ?>'" class="bg-[#C24C33] hover:bg-[#924A3D] text-white font-sans font-bold text-[16px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer shadow-sm">
                        <span><?php echo esc_html($s15['ask_btn_text']); ?></span>
                        <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/hvit-pil.webp" alt="hvit-pil" class="w-6 h-6 object-contain" />
                    </button>
                    <?php endif; ?>
                </div>

                <div class="lg:col-span-7 flex flex-col gap-4">
                    <?php if (!empty($s15['faqs'])): foreach ($s15['faqs'] as $faq): ?>
                    <div class="faq-item bg-white border border-[#E8DDD7] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
                        <button class="w-full flex items-center justify-between p-5 sm:px-7 sm:py-6 bg-transparent border-0 cursor-pointer text-left group">
                            <span class="font-serif font-bold text-[16px] md:text-[20px] text-ink-900 group-hover:text-[#A85848] transition-colors pr-4">
                                <?php echo esc_html($faq['question']); ?>
                            </span>
                            <span class="faq-icon text-[#A85848] flex-none transition-transform duration-300 font-medium text-4xl leading-none">
                                +
                            </span>
                        </button>
                        <div class="faq-content hidden px-5 sm:px-7 pb-6 pt-0">
                            <div class="text-[15px] leading-[26px] text-gray-600 m-0 prose-p:mb-0">
                                <?php echo $faq['answer']; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 16: CTA -->
    <?php if ($s16): ?>
    <section class="section" data-reveal>
        <div class="container">
            <div class="rounded-[32px] px-8 py-12 md:py-20 md:px-[56px] shadow-sm flex flex-col md:flex-row items-center justify-between gap-10" style="background: radial-gradient(46% 62% at 92% 88%, rgba(240, 147, 103, 0.14) 0%, rgba(240, 147, 103, 0) 70%), radial-gradient(46% 62% at 8% 84%, rgba(248, 216, 212, 0.55) 0%, rgba(248, 216, 212, 0) 70%), radial-gradient(58% 74% at 50% 0%, rgba(248, 235, 226, 0.9) 0%, rgba(248, 235, 226, 0) 72%);">
                <div class="text-center md:text-left max-w-[665px]">
                    <h2 class="font-serif text-[30px] md:text-[36px] text-[#241C19] mb-4 font-bold">
                        <?php echo wp_kses_post($s16['heading']); ?>
                    </h2>
                    <p class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6] max-w-[620px] mx-auto md:mx-0 mb-8 font-normal">
                        <?php echo nl2br(esc_html($s16['description'])); ?>
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
                        <?php if (!empty($s16['ask_btn_text'])): ?>
                        <a href="<?php echo esc_url($s16['ask_btn_url']); ?>" class="inline-flex items-center justify-center gap-2 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors">
                            <?php echo esc_html($s16['ask_btn_text']); ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Faqs/arrow.webp" alt="Right Arrow Icon" class="h-6 w-6 object-contain" />
                        </a>
                        <?php endif; ?>
                        <?php if (!empty($s16['book_btn_text'])): ?>
                        <a href="<?php echo esc_url($s16['book_btn_url']); ?>" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-[#FBF3EF] text-[#C24C33] border border-[#C24C33] font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors">
                            <?php echo esc_html($s16['book_btn_text']); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="shrink-0 hidden md:block">
                    <div class="w-[421px] h-[280px]">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Faqs/cta.webp" alt="Chat/Support Icon" class="object-contain" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>