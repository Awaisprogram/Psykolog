<?php
/**
 * Template Name: Book an appointment
 */
if (!defined('ABSPATH')) exit;

/* ------------------------------------------------------------------ helpers */

if (!function_exists('ba_heading')) {
    /** Escapes text, then turns {{x}} into <em>x</em> and || into <br>. */
    function ba_heading($text, $em_class = 'text-[#C24C33] italic') {
        $html = esc_html((string) $text);
        $open = $em_class !== '' ? '<em class="' . esc_attr($em_class) . '">' : '<em>';
        $html = preg_replace('/\{\{(.+?)\}\}/u', $open . '$1</em>', $html);
        return str_replace('||', '<br />', $html);
    }
}

if (!function_exists('ba_link')) {
    function ba_link($link, $default_label = '', $default_url = '#') {
        $link = is_array($link) ? $link : [];
        return [
            'url'    => !empty($link['url']) ? $link['url'] : $default_url,
            'title'  => !empty($link['title']) ? $link['title'] : $default_label,
            'target' => $link['target'] ?? '',
        ];
    }
}

if (!function_exists('ba_target')) {
    function ba_target($link) {
        return ($link['target'] ?? '') === '_blank' ? ' target="_blank" rel="noopener"' : '';
    }
}

if (!function_exists('ba_img')) {
    /** Image by attachment ID, falling back to a theme asset if the field is empty. */
    function ba_img($id, $fallback, $alt, $class, $attr = []) {
        $id = is_array($id) ? (int) ($id['ID'] ?? 0) : (int) $id;
        if ($id) {
            $args = array_merge(['class' => $class], $attr);
            if (!get_post_meta($id, '_wp_attachment_image_alt', true)) $args['alt'] = $alt;
            $html = wp_get_attachment_image($id, 'full', false, $args);
            if ($html) return $html;
        }
        $extra = '';
        foreach ($attr as $k => $v) $extra .= ' ' . esc_attr($k) . '="' . esc_attr($v) . '"';
        return '<img src="' . esc_url(get_theme_file_uri($fallback)) . '" alt="' . esc_attr($alt) . '" class="' . esc_attr($class) . '"' . $extra . ' />';
    }
}


get_header();
?>

<main>

  <?php /* ============================ HERO ============================ */
  $hero = get_field('hero') ?: [];
  $hero_title = $hero['title'] ?? '';
  $b1 = ba_link($hero['btn_primary'] ?? null, 'See available hours', '#booking-calendar');
  $b2 = ba_link($hero['btn_secondary'] ?? null, 'Choose a psychologist first', '#');
  ?>
  <section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[700px]">
    <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
      <?= ba_img($hero['image'] ?? 0, 'assets/bestill-time/hero.webp', $hero_title, 'absolute inset-0 w-full h-full object-cover object-[100%_50%]', ['loading' => 'eager', 'fetchpriority' => 'high']) ?>
      <span class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent lg:hidden"></span>
    </span>

    <div class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
      <div class="max-w-[1312px] mx-auto">
        <div class="max-w-full lg:max-w-[635px]">
          <h1 class="font-serif font-bold text-[#C24C33] mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[56px]">
            <?= esc_html($hero_title) ?>
          </h1>

          <?php if ($t = ($hero['text'] ?? '')) : ?>
            <p class="text-lg lg:text-xl leading-[1.6] text-[#33170F] mt-[22px] mb-0"><?= esc_html($t) ?></p>
          <?php endif; ?>

          <div class="mt-8 flex flex-col sm:flex-row items-start sm:items-center gap-4 lg:gap-5">
            <a href="<?= esc_url($b1['url']) ?>"<?= ba_target($b1) ?> class="inline-flex items-center justify-center px-8 py-3.5 bg-[#C24C33] text-white rounded-full font-bold text-base transition hover:bg-opacity-90">
              <?= esc_html($b1['title']) ?>
              <span class="ml-2 inline-flex items-center"><img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/white-arrow-1.webp" alt="" aria-hidden="true" class="h-[20px] w-[12px] mt-0.5 object-contain" /></span>
            </a>
           
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php /* ====================== BOOKING CALENDAR ====================== */
  $cal = get_field('calendar') ?: [];
  $iframe_url = $cal['iframe_url'] ?? '';
  ?>
  <section id="booking-calendar" class="section" data-reveal>
    <div class="container">
      <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6 lg:gap-[50px]">
        <div class="w-full lg:w-[45%] xl:w-[616px] lg:pt-8 lg:sticky top-20 self-start">
    	<h2 class="font-serif font-bold text-[#241C19] text-[40px] md:text-[48px] leading-[1.1] mb-6"><?= ba_heading($cal['title'] ?? '') ?></h2>
    	<p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] m-0"><?= esc_html($cal['text'] ?? '') ?></p>
	</div>
        <?php if ($iframe_url) : ?>
          <div class="w-full lg:w-[55%] xl:w-[655px]">
            <div class="w-full h-[350px] md:h-[380px]">
              <iframe src="<?= esc_url($iframe_url) ?>" class="w-full h-full border-0" title="<?= esc_attr(($cal['iframe_title'] ?? '') ?: 'Booking system') ?>" loading="lazy"></iframe>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php /* ========================= HOW TO BOOK ========================= */
  $how   = get_field('how_to') ?: [];
  $steps = $how['steps'] ?? [];
  ?>
  <section class="section bg-[#FFF7F3]">
    <div class="container" data-reveal>
      <div class="text-center max-w-[700px] mx-auto mb-12 md:mb-16">
        <h2 class="font-serif font-bold text-[#241C19] text-[36px] md:text-[48px] mb-4"><?= ba_heading($how['title'] ?? '') ?></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6] m-0"><?= esc_html($how['text'] ?? '') ?></p>
      </div>

      <?php if ($steps) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
          <?php foreach ($steps as $i => $s) : ?>
            <div class="bg-transparent border border-[#C24C3333] rounded-[24px] p-5">
              <div class="relative w-full h-[240px] md:h-[220px] lg:h-[210px] rounded-[16px] overflow-hidden mb-[22px]">
                <?= ba_img($s['image'] ?? 0, '', $s['title'] ?? '', 'w-full h-full object-cover', ['loading' => 'lazy']) ?>
                <div class="absolute top-4 left-4 <?= $i === 0 ? 'bg-[#C24C33] text-white' : 'bg-white text-[#241C19]' ?> font-bold text-[13px] px-5 py-1.5 rounded-full">
                  <?= esc_html(sprintf('Trinn  %02d', $i + 1)) ?>
                </div>
              </div>
              <h3 class="font-serif font-bold text-[#241C19] text-[22px] md:text-[24px] mb-3"><?= esc_html($s['title'] ?? '') ?></h3>
              <p class="text-[#6B5F5A] text-[15px] leading-[1.6] m-0 pr-4"><?= esc_html($s['text'] ?? '') ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php /* ========================== SERVICES ========================== */
  $svc   = get_field('services') ?: [];
  $cards = $svc['cards'] ?? [];
  $from  = ($svc['from_label'] ?? '') ?: 'From';
  ?>
  <section class="section bg-[#F8EBE2]">
    <div class="container" data-reveal>
      <div class="mb-[24px]">
        <h2 class="font-serif font-bold text-[#241C19] text-[36px] md:text-[48px] mb-4"><?= ba_heading($svc['title'] ?? '') ?></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] m-0"><?= esc_html($svc['text'] ?? '') ?></p>
      </div>

      <?php if ($cards) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
          <?php foreach ($cards as $c) : ?>
            <div class="bg-white rounded-[24px] p-6 lg:p-[30px] shadow-sm flex flex-col h-full border border-[#F2E8E3] md:border-0">
              <div class="w-[52px] h-[52px] mb-6">
                <?= ba_img($c['icon'] ?? 0, '', $c['title'] ?? '', 'object-contain mix-blend-multiply', ['loading' => 'lazy']) ?>
              </div>
              <h3 class="font-serif font-bold text-[#241C19] text-[20px] md:text-[22px] mb-3"><?= esc_html($c['title'] ?? '') ?></h3>
              <p class="text-[#6B5F5A] text-[15px] leading-[1.6] m-0 flex-1"><?= esc_html($c['text'] ?? '') ?></p>

              <div class="mt-10 flex items-end justify-between">
                <div>
                  <span class="block text-[#6B5F5A] text-[13px] mb-[2px]"><?= esc_html($from) ?></span>
                  <span class="block font-semibold text-[#241C19] text-[15px]"><?= esc_html($c['unit'] ?? '') ?></span>
                </div>
                <div class="font-serif font-bold text-[#C24C33] text-[22px] leading-none mb-[2px]"><?= esc_html($c['price'] ?? '') ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php /* ============== CHOOSE PSYCHOLOGIST + OPENING HOURS ============== */
  $pick  = get_field('choose') ?: [];
  $hours = $pick['hours'] ?? [];
  $today = (int) wp_date('N'); // 1 = Monday … 7 = Sunday, in the site's timezone
  ?>
  <section class="section" data-reveal>
    <div class="container">
      <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-[56px]">
        <div class="w-full lg:w-[45%] xl:w-[716px] lg:pt-16">
          <h2 class="font-serif font-bold text-[#241C19] text-[36px] md:text-[44px] leading-[1.2] mb-6"><?= ba_heading($pick['title'] ?? '') ?></h2>
          <p class="text-[#393939] text-[16px] md:text-[20px] leading-[1.6] m-0"><?= esc_html($pick['text'] ?? '') ?></p>
        </div>

        <div class="w-full lg:w-[55%] xl:w-[556px] lg:ml-auto">
          <div class="bg-[#C24C33] rounded-[12px] p-8 md:px-[48px] md:py-[36px] text-white shadow-sm">
            <h3 class="font-serif font-bold text-[28px] md:text-[34px] mb-4 text-white"><?= esc_html($pick['card_title'] ?? '') ?></h3>
            <p class="text-white/90 text-[15px] md:text-[16px] leading-[1.6] mb-10"><?= esc_html($pick['card_text'] ?? '') ?></p>

            <div class="font-bold text-[12px] md:text-[13px] tracking-[1.5px] uppercase mb-6 text-white/90"><?= esc_html(($pick['hours_label'] ?? '') ?: 'Opening hours') ?></div>

            <?php if ($hours) : ?>
              <div class="flex flex-col space-y-3 md:space-y-4">
                <?php foreach ($hours as $h) :
                  $is_today = (int) ($h['weekday'] ?? 0) === $today;
                  if ($is_today) : ?>
                    <div class="flex justify-between items-center text-[14px] md:text-[15px] bg-white text-[#241C19] rounded-[10px] px-[12px] py-3 shadow-sm font-medium">
                      <div class="flex items-center gap-2.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#C24C33]"></span>
                        <span class="font-bold"><?= esc_html($h['day'] ?? '') ?></span>
                      </div>
                      <span class="text-[#6B5F5A]"><?= esc_html($h['hours'] ?? '') ?></span>
                    </div>
                  <?php else : ?>
                    <div class="flex justify-between items-center text-[14px] md:text-[15px] px-4">
                      <span><?= esc_html($h['day'] ?? '') ?></span>
                      <span class="text-white/90"><?= esc_html($h['hours'] ?? '') ?></span>
                    </div>
                  <?php endif;
                endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php /* ========================= FIRST SESSION ========================= */
  $first = get_field('first_session') ?: [];
  $tabs  = $first['tabs'] ?? [];
  
  $first_panel_val = $tabs[0]['panel_image'] ?? '';
  $first_panel_url = '';
  $first_panel_alt = $tabs[0]['title'] ?? 'Payment options';
  if (is_array($first_panel_val)) {
      $first_panel_url = $first_panel_val['sizes']['large'] ?? $first_panel_val['url'] ?? '';
      $first_panel_alt = $first_panel_val['alt'] ?: $first_panel_alt;
  } elseif (is_numeric($first_panel_val)) {
      $first_panel_url = wp_get_attachment_image_url((int)$first_panel_val, 'large');
      $first_panel_alt = get_post_meta((int)$first_panel_val, '_wp_attachment_image_alt', true) ?: $first_panel_alt;
  } elseif (is_string($first_panel_val) && filter_var($first_panel_val, FILTER_VALIDATE_URL)) {
      $first_panel_url = $first_panel_val;
  }
  
  if (empty($first_panel_url)) {
      $first_panel_url = get_theme_file_uri('assets/Priser/Payment Options.webp');
  }
  ?>
  <section class="section bg-[#FFF7F3]">
    <div class="container" data-reveal>
      <div class="flex flex-col lg:flex-row gap-6 lg:gap-[32px] items-start">

        <div class="w-full lg:w-[55%] xl:w-[672px]">
          <h2 class="font-serif font-bold text-[#241C19] text-[32px] md:text-[44px] mb-6"><?= ba_heading($first['title'] ?? '') ?></h2>
          <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] mb-10"><?= esc_html($first['text'] ?? '') ?></p>

          <?php if ($tabs) : ?>
            <div class="flex flex-col gap-4">
              <?php foreach ($tabs as $i => $t) :
                $panel_val = $t['panel_image'] ?? '';
                $panel_url = '';
                $panel_alt = $t['title'] ?? '';
                if (is_array($panel_val)) {
                    $panel_url = $panel_val['sizes']['large'] ?? $panel_val['url'] ?? '';
                    $panel_alt = $panel_val['alt'] ?: $panel_alt;
                } elseif (is_numeric($panel_val)) {
                    $panel_url = wp_get_attachment_image_url((int)$panel_val, 'large');
                    $panel_alt = get_post_meta((int)$panel_val, '_wp_attachment_image_alt', true) ?: $panel_alt;
                } elseif (is_string($panel_val) && filter_var($panel_val, FILTER_VALIDATE_URL)) {
                    $panel_url = $panel_val;
                }
              ?>
                <div class="included-tab cursor-pointer bg-white rounded-[20px] p-6 border <?= $i === 0 ? 'border-[#C24C33]' : 'border-[#E8DDD7]' ?> transition-all"
                     data-tab="<?= esc_attr(sanitize_title($t['title'] ?? '')) ?>"
                     data-image="<?= esc_url($panel_url) ?>"
                     data-alt="<?= esc_attr($panel_alt) ?>">
                  <div class="flex items-center gap-4 mb-3">
                    <div class="w-10 h-10">
                      <?= ba_img($t['icon'] ?? 0, '', $t['title'] ?? '', 'object-contain', ['loading' => 'lazy']) ?>
                    </div>
                    <h3 class="font-serif font-bold text-[20px] text-[#241C19] m-0"><?= esc_html($t['title'] ?? '') ?></h3>
                  </div>
                  <p class="text-[#5B5B5B] text-[16px] leading-[1.6] m-0"><?= esc_html($t['text'] ?? '') ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="w-full lg:w-[45%] xl:w-[608px] sticky top-32 mt-10 lg:mt-0">
          <img id="included-image" src="<?= esc_url($first_panel_url) ?>" alt="<?= esc_attr($first_panel_alt) ?>" class="w-full h-auto rounded-[24px] object-cover shadow-sm transition-opacity duration-300" loading="lazy" />
        </div>

      </div>
    </div>
  </section>

  <?php /* ========================== URGENT HELP ========================== */
  $urgent   = get_field('urgent') ?: [];
  $contacts = $urgent['contacts'] ?? [];
  ?>
  <section class="pt-12 pb-6">
    <div class="container">
      <div class="bg-[#C24C33] rounded-[12px] p-8 lg:p-[30px] text-white w-full">
        <h2 class="font-serif font-bold text-[32px] md:text-[40px] mb-4 text-white"><?= esc_html($urgent['title'] ?? '') ?></h2>
        <p class="text-white/90 text-[16px] md:text-[18px] leading-[1.6] mb-10 max-w-[1000px]"><?= esc_html($urgent['text'] ?? '') ?></p>

        <?php if ($contacts) : ?>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($contacts as $c) : ?>
              <div class="bg-white rounded-[20px] p-6 lg:py-[32px] flex items-center gap-5 shadow-sm">
                <div class="w-[52px] h-[52px]">
                  <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/call-6.webp" alt="" aria-hidden="true" />
                </div>
                <div>
                  <div class="font-serif font-bold text-[#5C2A20] text-[10px] md:text-[14px] tracking-[1px] mb-[8px]"><?= esc_html($c['label'] ?? '') ?></div>
                  <a href="tel:<?= esc_attr(preg_replace('/\s+/', '', $c['number'] ?? '')) ?>" class="block font-bold text-[#C24C33] text-[22px] md:text-[28px] leading-none no-underline"><?= esc_html($c['number'] ?? '') ?></a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php /* ============================== FAQ ============================== */
  $faqg     = get_field('faq') ?: [];
  $faq      = $faqg['items'] ?? [];
  $faq_cta  = ba_link($faqg['cta'] ?? null, 'Book a time', '#booking-calendar');
  $faq_ask  = ba_link($faqg['ask_link'] ?? null, 'Ask Your Own Question', '#mh-book');
  ?>
  <section id="mh-faq" class="section">
    <div class="container" data-reveal>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

        <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-6">
          <div>
            <span class="text-[#C24C33] text-[11px] font-bold tracking-widest uppercase mb-3 block"><?= esc_html(($faqg['eyebrow'] ?? '') ?: 'FAQS') ?></span>
            <h2 id="faq" class="h2 mb-4"><?= ba_heading($faqg['title'] ?? '', '') ?></h2>
            <p class="text-[16px] leading-[26px] text-[#6B5F5A] m-0 mb-6 max-w-[420px]"><?= esc_html($faqg['text'] ?? '') ?></p>
           
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
              <span class="font-sans font-bold text-[14px] text-[#C24C33]"><?= esc_html($faqg['badge_text'] ?? '') ?></span>
            </div>

            <p class="text-[14px] leading-[22px] text-[#6B5F5A] m-0 mb-5 max-w-[380px]"><?= esc_html($faqg['badge_desc'] ?? '') ?></p>

            <a href="<?= esc_url($faq_ask['url']) ?>"<?= ba_target($faq_ask) ?> class="bg-[#C24C33] hover:bg-[#B34A34] text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer w-fit border-0 no-underline">
              <span><?= esc_html($faq_ask['title']) ?></span>
              <span class="inline-flex items-center"><img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/white-arrow-1.webp" alt="" aria-hidden="true" class="h-[20px] w-[12px] mt-0.5 object-contain" /></span>
            </a>
          </div>
        </div>

        <div class="lg:col-span-7 flex flex-col gap-4">
          <?php foreach ((array) $faq as $item) : ?>
            <div class="faq-item group bg-white border border-[#F2E8E3] rounded-[16px] overflow-hidden shadow-sm transition-all duration-300">
              <button class="w-full flex items-center justify-between p-6 sm:px-8 sm:py-6 bg-transparent border-0 cursor-pointer text-left">
                <span class="font-serif font-bold text-[18px] sm:text-[20px] text-[#241C19] group-[.is-open]:text-[#C24C33] transition-colors pr-4"><?= esc_html($item['question'] ?? '') ?></span>
                <span class="relative w-4 h-4 flex-none shrink-0 transition-transform duration-300">
                  <span class="absolute top-1/2 left-0 w-full h-[2px] bg-[#C24C33] -translate-y-1/2"></span>
                  <span class="absolute top-0 left-1/2 w-[2px] h-full bg-[#C24C33] -translate-x-1/2 transition-transform duration-300 group-[.is-open]:rotate-90"></span>
                </span>
              </button>
              <div class="faq-content hidden px-6 sm:px-8 pb-7 pt-0">
                <p class="text-[15px] leading-[26px] text-[#6B5F5A] m-0"><?= esc_html($item['answer'] ?? '') ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </section>

</main>


<?php get_footer(); ?>