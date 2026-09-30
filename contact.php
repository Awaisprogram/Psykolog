<?php
/**
 * Template Name: Contact
 */
get_header();

$s1 = get_field('section_1') ?: [];
$s2 = get_field('section_2') ?: [];
$s3 = get_field('section_3') ?: [];
$s4 = get_field('section_4') ?: [];
$s5 = get_field('section_5') ?: [];
$s6 = get_field('section_6') ?: [];

if (!function_exists('psy_contact_img_url')) {
  function psy_contact_img_url($image_field)
  {
    return is_array($image_field) && !empty($image_field['url']) ? $image_field['url'] : '';
  }
}

if (!function_exists('psy_contact_img_alt')) {
  function psy_contact_img_alt($image_field, $fallback = '')
  {
    return is_array($image_field) && !empty($image_field['alt']) ? $image_field['alt'] : $fallback;
  }
}
?>
<main>
  <section
    class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[120px] min-h-[500px] lg:min-h-[700px]">
    <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
      <?php if (!empty($s1['image'])): ?>
        <img src="<?php echo esc_url(psy_contact_img_url($s1['image'])); ?>"
          alt="<?php echo esc_attr(psy_contact_img_alt($s1['image'], 'Anxiety')); ?>"
           class="absolute inset-0 w-full h-full object-cover object-[25%_50%] lg:object-[100%_50%]" />
      <?php endif; ?>
    </span>
    <div
      class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
      <div class="max-w-[1312px] mx-auto">
        <div class="max-w-full md:max-w-[450px] lg:max-w-[566px]">
          <div class="ml-2">
			<?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
  			<?php yoast_breadcrumb( '<nav class="page-hero__crumb" aria-label="Breadcrumb">', '</nav>' ); ?>
	 	     <?php endif; ?>
		  	</div>
          <h1
            class="font-serif font-bold mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[64px]">
            <?php echo esc_html($s1['title'] ?? ''); ?></h1>
          <p class="text-lg lg:text-xl leading-[1.6] text-[#3A1811] mt-[22px] mb-0">
            <?php echo esc_html($s1['description'] ?? ''); ?></p>
          <div class="mt-8 flex flex-col sm:flex-row sm:items-center gap-4 lg:gap-5">
  			<a href="<?php echo esc_url($s1['cta_primary_url'] ?? ''); ?>"
    			class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-[#C24C33] text-white rounded-full font-bold text-base transition hover:bg-opacity-90">
    			<?php echo esc_html($s1['cta_primary_text'] ?? ''); ?>
				<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/white-arrow-1.webp"
        			alt="External Link Icon" class="h-[20px] ml-2  w-[12px]  object-contain" />
  			</a>
  			<a href="<?php echo esc_url($s1['cta_secondary_url'] ?? ''); ?>"
    			class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 bg-white text-[#5C2A20] rounded-full font-bold text-base transition hover:bg-gray-100">
    			<?php echo esc_html($s1['cta_secondary_text'] ?? ''); ?>
				<img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/arrow-hero.webp"
        			alt="External Link Icon" class="h-[20px] ml-2 w-[12px]  object-contain" />
  			</a>
			</div>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-[48px]" data-reveal>
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-[16px]">
        <?php
        $card_styles = [
          ['bg' => 'bg-[#FBEAE7]', 'border' => 'border-t-[#C2543F]', 'text' => 'text-[#C2543F]', 'label' => 'text-[#A93E28]', 'title' => 'text-[#393939]'],
          ['bg' => 'bg-[#E8EFE5]', 'border' => 'border-t-[#5C7454]', 'text' => 'text-[#5C7454]', 'label' => 'text-[#4A5D46]', 'title' => 'text-[#393939]'],
          ['bg' => 'bg-[#E6EDF3]', 'border' => 'border-t-[#40627C]', 'text' => 'text-[#40627C]', 'label' => 'text-[#40627C]', 'title' => 'text-[#3F5568]']
        ];
        if (!empty($s2['cards']) && is_array($s2['cards'])):
          foreach ($s2['cards'] as $i => $card):
            $style = $card_styles[$i % 3];
            ?>
            <a href="<?php echo esc_url($card['link_url'] ?? ''); ?>"
              class="<?php echo esc_attr($style['bg']); ?> border-t-[4px] <?php echo esc_attr($style['border']); ?> rounded-[24px] p-6 lg:p-[32px] flex flex-col justify-start transition-transform hover:-translate-y-1">
              <div class="w-full flex justify-between items-start mb-[24px]">
                <div
                  class="w-[48px] h-[48px] bg-white rounded-[16px] flex items-center justify-center <?php echo esc_attr($style['text']); ?>">
                  <?php if (!empty($card['icon'])): ?>
                    <img src="<?php echo esc_url(psy_contact_img_url($card['icon'])); ?>"
                      alt="<?php echo esc_attr(psy_contact_img_alt($card['icon'], ($card['label'] ?? '') . ' Icon')); ?>"
                      class="object-contain" />
                  <?php endif; ?>
                </div>
                <?php if (!empty($card['arrow_icon'])): ?>
                  <img src="<?php echo esc_url(psy_contact_img_url($card['arrow_icon'])); ?>"
                    alt="<?php echo esc_attr(psy_contact_img_alt($card['arrow_icon'], 'Arrow Up Right Icon')); ?>"
                    class="w-5 h-5 object-contain" />
                <?php endif; ?>
              </div>
              <span
                class="<?php echo esc_attr($style['label']); ?> text-[11px] font-bold tracking-[0.15em] uppercase mb-2"><?php echo esc_html($card['label'] ?? ''); ?></span>
              <h3 class="font-serif text-[22px] md:text-[26px] <?php echo esc_attr($style['title']); ?> mb-3 font-bold">
                <?php echo esc_html($card['title'] ?? ''); ?></h3>
              <p class="text-[#5B5B5B] text-[14px] md:text-[16px] leading-relaxed m-0">
                <?php echo esc_html($card['description'] ?? ''); ?></p>
            </a>
          <?php endforeach; endif; ?>
      </div>
    </div>
  </section>

  <section class="section" data-reveal>
    <div class="container">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-6 items-stretch">
        <div class="bg-[#FFF7F3] border-[#F2E4DC] rounded-[24px] p-8 lg:p-[46px] flex flex-col justify-center">
          <span
            class="text-[#C24C33] text-[11px] md:text-[14px] font-semibold tracking-[0.15em] uppercase mb-4 block"><?php echo esc_html($s3['form_label'] ?? ''); ?></span>
          <h2 class="font-serif text-[32px] md:text-[38px] lg:text-[40px] text-[#241C19] font-bold mb-8 leading-[1.2]">
            <?php echo esc_html($s3['form_heading'] ?? ''); ?></h2>
          <?php echo do_shortcode('[contact-form-7 id="e1ac475" title="Contact form"]'); ?>
        </div>
        <div class="relative w-full h-[500px] lg:h-auto rounded-[24px] overflow-hidden bg-gray-100">
          <?php if (!empty($s3['image'])): ?>
            <img src="<?php echo esc_url(psy_contact_img_url($s3['image'])); ?>"
              alt="<?php echo esc_attr(psy_contact_img_alt($s3['image'], 'Therapist speaking with patient')); ?>"
              class="absolute inset-0 w-full h-full object-cover object-center" />
          <?php endif; ?>
          <div
            class="absolute top-6 left-6 inline-flex items-center gap-2.5 bg-white/95 backdrop-blur-md shadow-sm rounded-full pl-2 pr-5 py-2 z-10 border border-[#F09367]">
            <div class="w-[22px] h-[22px] flex-shrink-0">
              <?php if (!empty($s3['badge1_icon'])): ?>
                <img src="<?php echo esc_url(psy_contact_img_url($s3['badge1_icon'])); ?>"
                  alt="<?php echo esc_attr(psy_contact_img_alt($s3['badge1_icon'], 'Phone Icon')); ?>"
                  class="object-contain" />
              <?php endif; ?>
            </div>
            <span
              class="text-[12px] font-bold text-[#F09367] uppercase"><?php echo esc_html($s3['badge1_text'] ?? ''); ?></span>
          </div>
          <div
            class="absolute bottom-6 left-6 right-6 bg-white rounded-[20px] p-5 md:p-6 shadow-[0_12px_30px_rgba(0,0,0,0.08)] z-10 flex items-start gap-4 border-l-[3px] border-l-[#F09367]">
            <div class="w-[34px] h-[34px] flex-shrink-0">
              <?php if (!empty($s3['badge2_icon'])): ?>
                <img src="<?php echo esc_url(psy_contact_img_url($s3['badge2_icon'])); ?>"
                  alt="<?php echo esc_attr(psy_contact_img_alt($s3['badge2_icon'], 'Info Icon')); ?>"
                  class="object-contain" />
              <?php endif; ?>
            </div>
            <div>
              <span
                class="block text-[11px] md:text-[16px] font-bold text-[#F09367] uppercase mb-1.5"><?php echo esc_html($s3['badge2_label'] ?? ''); ?></span>
              <p class="text-[14px] md:text-[16px] text-[#5B5B5B] leading-[1.6] m-0 pr-4">
                <?php echo esc_html($s3['badge2_text'] ?? ''); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section bg-[#F8EBE2]">
    <div class="container" data-reveal>
      <div class="mb-10">
        <span
          class="text-[#A93E28] text-[11px] md:text-[14px] font-bold tracking-[0.15em] uppercase mb-3 block"><?php echo esc_html($s4['eyebrow'] ?? ''); ?></span>
        <h2 class="font-serif text-[36px] md:text-[44px] font-bold text-[#241C19] mb-4 leading-tight">
          <?php echo esc_html($s4['heading'] ?? ''); ?></h2>
        <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-relaxed m-0">
          <?php echo esc_html($s4['description'] ?? ''); ?></p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[420px_820px] gap-6 items-stretch">
        <div class="flex flex-col justify-between gap-4" id="clinicList">
          <div class="flex flex-col gap-3">
            <?php if (!empty($s4['clinics']) && is_array($s4['clinics'])): ?>
              <?php foreach ($s4['clinics'] as $i => $clinic):
                $active = !empty($clinic['is_active']);
                ?>
                <div
                  class="<?php echo $active ? 'bg-[#F8D8D4] border border-[#A93E28] is-active' : 'bg-white border border-[#EBE1DA] hover:border-[#CE5A43]/40'; ?> rounded-[20px] p-5 flex items-center gap-4 cursor-pointer transition-all lg:h-[108px]"
                  data-clinic="<?php echo esc_attr($i); ?>"
                  data-map-url="<?php echo esc_url($clinic['map_embed_url'] ?? ''); ?>"
                  data-map-tag="<?php echo esc_attr($clinic['map_tag'] ?? ''); ?>" role="button" tabindex="0"
                  aria-pressed="<?php echo $active ? 'true' : 'false'; ?>">
                  <div class="w-[40px] h-[40px]">
                    <?php if (!empty($clinic['icon'])): ?>
                      <img src="<?php echo esc_url(psy_contact_img_url($clinic['icon'])); ?>"
                        alt="<?php echo esc_attr(psy_contact_img_alt($clinic['icon'], 'Location Pin Icon')); ?>"
                        class="object-contain" />
                    <?php endif; ?>
                  </div>
                  <div>
                    <h3 class="font-serif font-bold text-[20px] text-[#241C19] leading-snug">
                      <?php echo esc_html($clinic['name'] ?? ''); ?></h3>
                    <p class="text-[#665D59] text-[14px] m-0"><?php echo esc_html($clinic['address'] ?? ''); ?></p>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

          <div class="mt-2">
            <a id="clinicBookBtn" href="<?php echo esc_url($s4['book_btn_url'] ?? ''); ?>"
              class="inline-flex items-center justify-center bg-[#A93E28] hover:bg-[#A94836] text-white px-7 py-3.5 rounded-full font-sans text-[15px] md:text-[18px] font-bold transition-colors"><?php echo esc_html($s4['book_btn_text'] ?? ''); ?></a>
          </div>
        </div>

        <div
          class="relative min-h-[320px] rounded-[24px] overflow-hidden border border-[#EBE1DA] shadow-sm bg-[#E5E9E7]">
          <?php
          $default_map = !empty($s4['clinics'][0]['map_embed_url']) ? $s4['clinics'][0]['map_embed_url'] : '';
          $default_tag = !empty($s4['clinics'][0]['map_tag']) ? $s4['clinics'][0]['map_tag'] : '';
          ?>
          <iframe id="clinicMap" title="Map of clinic location" loading="lazy"
            src="<?php echo esc_url($default_map); ?>" class="absolute inset-0 w-full h-full border-0"></iframe>
          <div
            class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-sm rounded-full px-4 py-2 shadow-md border border-white flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-[#CE5A43]"></span>
            <span id="clinicMapTag"
              class="text-[11px] font-bold tracking-[0.12em] text-[#CE5A43] uppercase"><?php echo esc_html($default_tag); ?></span>
          </div>
        </div>
      </div>

      <div
        class="mt-10 bg-[#C24C33] rounded-[24px] p-8 lg:p-10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 shadow-sm relative overflow-hidden">
        <div
          class="absolute -right-28 top-[-152px] w-[320px] h-[320px] rounded-full border-[26px] border-[#F093671A] pointer-events-none">
        </div>
        <span class="absolute right-36 -bottom-4 text-white/15 text-5xl pointer-events-none select-none">✦</span>
        <div class="max-w-2xl relative z-10">
          <h3 class="font-serif text-[28px] lg:text-[32px] font-bold text-white mb-2 leading-tight">
            <?php echo esc_html($s4['urgent_heading'] ?? ''); ?></h3>
          <p class="text-white text-[15px] md:text-[17px] leading-relaxed m-0">
            <?php echo esc_html($s4['urgent_text'] ?? ''); ?></p>
        </div>
        <div
          class="bg-[#FFFFFF1A] border border-white/20 backdrop-blur-md rounded-[20px] p-5 lg:p-6 flex items-center gap-4 shrink-0 w-full sm:w-auto sm:min-w-[340px] relative z-10">
          <div class="w-12 h-12">
            <?php if (!empty($s4['urgent_icon'])): ?>
              <img src="<?php echo esc_url(psy_contact_img_url($s4['urgent_icon'])); ?>"
                alt="<?php echo esc_attr(psy_contact_img_alt($s4['urgent_icon'], 'Phone Icon')); ?>"
                class="object-contain" />
            <?php endif; ?>
          </div>
          <div>
            <span
              class="font-serif block text-[11px] md:text-[16px] font-bold text-white uppercase mb-[8px]"><?php echo esc_html($s4['urgent_phone_label'] ?? ''); ?></span>
            <span
              class="md:text-[24px] text-[20px] font-bold text-white leading-none block"><?php echo esc_html($s4['urgent_phone_number'] ?? ''); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" data-reveal>
    <div class="container">
      <div
        class="rounded-[32px] px-8 py-12 md:py-20 md:px-[56px] shadow-sm flex flex-col md:flex-row items-center justify-between gap-10"
        style="background:radial-gradient(46% 62% at 92% 88%,rgba(240,147,103,.14) 0%,rgba(240,147,103,0) 70%),radial-gradient(46% 62% at 8% 84%,rgba(248,216,212,.55) 0%,rgba(248,216,212,0) 70%),radial-gradient(58% 74% at 50% 0%,rgba(248,235,226,.9) 0%,rgba(248,235,226,0) 72%);">
        <div class="text-center md:text-left max-w-[665px]">
          <h2 class="font-serif text-[30px] md:text-[38px] text-[#241C19] mb-4 font-bold">
            <?php echo esc_html($s5['heading'] ?? ''); ?></h2>
          <p
            class="text-[#6B5F5A] text-[15px] md:text-[18px] leading-[1.6] max-w-[620px] mx-auto md:mx-0 mb-8 font-normal">
            <?php echo esc_html($s5['description'] ?? ''); ?></p>
          <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-[10px]">
            <a href="<?php echo esc_url($s5['cta_url'] ?? ''); ?>"
              class="inline-flex items-center justify-center bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors">
              <?php echo esc_html($s5['cta_text'] ?? ''); ?>
              <?php if (!empty($s5['cta_icon'])): ?>
                <img src="<?php echo esc_url(psy_contact_img_url($s5['cta_icon'])); ?>" alt="Right Arrow Icon"
                  class="h-6 w-6 object-contain mt-0.5" />
              <?php endif; ?>
            </a>
          </div>
        </div>
        <div class="shrink-0">
          <div class="w-[421px] h-[280px]">
            <?php if (!empty($s5['image'])): ?>
              <img src="<?php echo esc_url(psy_contact_img_url($s5['image'])); ?>"
                alt="<?php echo esc_attr(psy_contact_img_alt($s5['image'], 'Chat/Support Icon')); ?>"
                class="object-contain" />
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

 
</main>
<?php get_footer(); ?>