<?php
/**
 * Template Name: Prices
 * Fields: inc/acf-prices.php  (every section is one ACF Group field)
 */
if (!defined('ABSPATH')) exit;

/* ------------------------------------------------------------------ helpers */

if (!function_exists('pr_heading')) {
    /** Escapes text, then turns {{x}} into <em>x</em> and || into <br>. */
    function pr_heading($text, $em_class = 'text-[#C24C33] italic') {
        $html = esc_html((string) $text);
        $open = $em_class !== '' ? '<em class="' . esc_attr($em_class) . '">' : '<em>';
        $html = preg_replace('/\{\{(.+?)\}\}/u', $open . '$1</em>', $html);
        return str_replace('||', '<br />', $html);
    }
}

if (!function_exists('pr_link')) {
    function pr_link($link, $default_label = '', $default_url = '#') {
        $link = is_array($link) ? $link : [];
        return [
            'url'    => !empty($link['url']) ? $link['url'] : $default_url,
            'title'  => !empty($link['title']) ? $link['title'] : $default_label,
            'target' => $link['target'] ?? '',
        ];
    }
}

if (!function_exists('pr_target')) {
    function pr_target($link) {
        return ($link['target'] ?? '') === '_blank' ? ' target="_blank" rel="noopener"' : '';
    }
}

if (!function_exists('pr_img')) {
    /** Image by attachment ID, falling back to a theme asset if the field is empty. */
    function pr_img($id, $fallback, $alt, $class, $attr = []) {
        $id = is_array($id) ? (int) ($id['ID'] ?? 0) : (int) $id;
        if ($id) {
            $args = array_merge(['class' => $class], $attr);
            if (!get_post_meta($id, '_wp_attachment_image_alt', true)) $args['alt'] = $alt;
            $html = wp_get_attachment_image($id, 'full', false, $args);
            if ($html) return $html;
        }
        if (!$fallback) return '';
        $extra = '';
        foreach ($attr as $k => $v) $extra .= ' ' . esc_attr($k) . '="' . esc_attr($v) . '"';
        return '<img src="' . esc_url(get_theme_file_uri($fallback)) . '" alt="' . esc_attr($alt) . '" class="' . esc_attr($class) . '"' . $extra . ' />';
    }
}

$arrow_white = esc_url(get_theme_file_uri('assets/oslo/white-arrow.webp'));
$arrow_brown = esc_url(get_theme_file_uri('assets/oslo/Brown-arrow.webp'));
$tick_icon   = esc_url(get_theme_file_uri('assets/Priser/tick.webp'));

get_header();
?>

<main>

  <?php /* ============================ HERO ============================ */
  $hero       = get_field('hero') ?: [];
  $hero_title = $hero['title'] ?? '';
  $b1 = pr_link($hero['btn_primary'] ?? null, 'Book a time', '#');
  $b2 = pr_link($hero['btn_secondary'] ?? null, 'See prices', '#prices');
  ?>
  <section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[700px]">
    <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
      <?= pr_img($hero['image'] ?? 0, 'assets/Priser/hero.webp', $hero_title, 'absolute inset-0 w-full h-full object-cover object-[100%_50%]', ['loading' => 'eager', 'fetchpriority' => 'high']) ?>
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
            <a href="<?= esc_url($b1['url']) ?>"<?= pr_target($b1) ?> class="inline-flex items-center justify-center px-8 py-3.5 bg-[#C24C33] text-white rounded-full font-bold text-base transition hover:bg-opacity-90">
              <?= esc_html($b1['title']) ?>
              <span class="ml-2 inline-flex items-center"><img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/white-arrow-1.webp" alt="" aria-hidden="true" class="h-[20px] w-[12px] mt-0.5 object-contain" /></span>
            </a>
            <a href="<?= esc_url($b2['url']) ?>"<?= pr_target($b2) ?> class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-[#A93E28] text-[#A93E28] rounded-full font-bold text-base transition hover:bg-gray-100">
              <?= esc_html($b2['title']) ?>
              <span class="ml-2 inline-flex items-center"><img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Brown-arrow-1.webp" alt="" aria-hidden="true" class="h-[20px] w-[12px] mt-0.5 object-contain" /></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php /* ======================== SESSION FORMATS ======================== */
  $formats = get_field('formats') ?: [];
  $fcards  = $formats['cards'] ?? [];
  ?>
  <section class="section" data-reveal>
    <div class="container">
      <h2 class="font-serif font-bold text-[#241C19] text-[32px] md:text-[44px] mb-6 md:mb-[24px]"><?= esc_html($formats['title'] ?? '') ?></h2>

      <?php if ($fcards) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10">
          <?php foreach ($fcards as $c) : ?>
            <div class="flex flex-col">
              <div class="w-full mb-[24px]">
                <?= pr_img($c['image'] ?? 0, '', $c['title'] ?? '', 'w-full h-auto md:h-[220px] lg:h-[196px] object-cover rounded-[14px]', ['loading' => 'lazy']) ?>
              </div>
              <h3 class="font-serif font-bold text-[#241C19] text-[24px] mb-3"><?= esc_html($c['title'] ?? '') ?></h3>
              <p class="text-[#6B5F5A] text-[16px] leading-[1.6] m-0"><?= esc_html($c['text'] ?? '') ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php /* =========================== PRICE TABLE =========================== */
  $pricing = get_field('pricing') ?: [];
  $rows    = $pricing['rows'] ?? [];
  $cta     = pr_link($pricing['cta'] ?? null, 'Book a time', '#');
  $used    = ($pricing['used_for_label'] ?? '') ?: 'Often used for';
  ?>
  <section id="prices" class="section bg-[#FCF8F5]">
    <div class="container">

      <div class="text-center mb-[24px]">
        <h2 class="h2 italic mb-4"><?= pr_heading($pricing['title'] ?? '', '') ?></h2>
        <p class="text-[#5B5B5B] text-[16px] md:text-[20px] leading-[1.6] m-0"><?= esc_html($pricing['text'] ?? '') ?></p>
      </div>

      <div class="bg-white rounded-[20px] md:rounded-[24px] border border-[#E8B8AC] overflow-hidden shadow-sm">

        <div class="bg-[#C24C33] px-6 md:px-12 py-5 flex items-center text-white text-[13px] font-bold tracking-[1.5px] uppercase">
          <div class="w-[30%]"><?= esc_html($pricing['col_price'] ?? '') ?></div>
          <div class="w-[35%]"><?= esc_html($pricing['col_format'] ?? '') ?></div>
          <div class="w-[35%]"><?= esc_html($pricing['col_session'] ?? '') ?></div>
        </div>

        <?php $last = count($rows) - 1;
        foreach ($rows as $i => $r) :
          $rl    = pr_link($r['link'] ?? null, '', $cta['url']);
          $items = array_filter(array_map('trim', preg_split('/\R/', (string) ($r['uses'] ?? ''))));
        ?>
          <div class="px-6 md:px-[30px] py-6 md:py-8 flex flex-col md:flex-row md:items-center <?= $i < $last ? 'border-b border-[#462E2C17]' : '' ?> gap-4 md:gap-0">
            <div class="w-full md:w-[30%]">
              <div class="font-serif font-bold text-[#C24C33] text-[26px] md:text-[30px]"><?= esc_html($r['price'] ?? '') ?></div>
            </div>
            <div class="w-full md:w-[35%]">
              <div class="text-[#6B5F5A] text-[16px]"><?= esc_html($r['format'] ?? '') ?></div>
            </div>
            <div class="w-full md:w-[35%] flex items-center justify-between gap-4">
              <div>
                <div class="font-bold text-[#241C19] text-[16px] mb-3"><?= esc_html($r['session'] ?? '') ?></div>
                <?php if ($items) : ?>
                  <div class="text-[12px] font-bold tracking-[1px] uppercase text-[#E58863] mb-3"><?= esc_html($used) ?></div>
                  <div class="flex flex-col gap-2">
                    <?php foreach ($items as $item) : ?>
                      <div class="flex items-start gap-2.5">
                        <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/tick.webp" alt="" aria-hidden="true" class="w-[20px] h-[20px] mt-0.5 object-contain" />
                        <span class="text-[#6B5F5A] text-[15px]"><?= esc_html($item) ?></span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
              <a href="<?= esc_url($rl['url']) ?>"<?= pr_target($rl) ?> aria-label="<?= esc_attr(($cta['title'] ?: 'Book') . ' – ' . ($r['session'] ?? '')) ?>" class="w-10 h-10 md:w-11 md:h-11 rounded-full bg-[#E58863] text-white flex items-center justify-center hover:bg-[#D57B57] transition-colors shrink-0 border-0 cursor-pointer no-underline">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

      <div class="mt-[25px] flex justify-center">
        <a href="<?= esc_url($cta['url']) ?>"<?= pr_target($cta) ?> class="inline-flex items-center gap-2 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[16px] px-8 py-3.5 rounded-full transition-colors">
          <?= esc_html($cta['title']) ?>
          <span class="inline-flex items-center"><img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/white-arrow-1.webp" alt="" aria-hidden="true" class="h-[20px] w-[12px] mt-0.5 object-contain" /></span>
        </a>
      </div>

    </div>
  </section>

  <?php /* ========================= WHAT'S INCLUDED ========================= */
  $inc        = get_field('included') ?: [];
  $tabs       = $inc['tabs'] ?? [];
  
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
  <section class="section" data-reveal>
    <div class="container">
      <div class="flex flex-col lg:flex-row gap-6 lg:gap-[32px] items-start">

        <div class="w-full lg:w-[55%]">
          <h2 class="font-serif font-bold text-[#241C19] text-[32px] md:text-[40px] mb-6"><?= pr_heading($inc['title'] ?? '') ?></h2>
          <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] mb-10"><?= esc_html($inc['text'] ?? '') ?></p>

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
                      <?= pr_img($t['icon'] ?? 0, '', $t['title'] ?? '', 'object-contain', ['loading' => 'lazy']) ?>
                    </div>
                    <h3 class="font-serif font-bold text-[20px] text-[#241C19] m-0"><?= esc_html($t['title'] ?? '') ?></h3>
                  </div>
                  <p class="text-[#5B5B5B] text-[16px] leading-[1.6] m-0"><?= esc_html($t['text'] ?? '') ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="w-full lg:w-[45%] sticky top-32 mt-10 lg:mt-0">
          <img id="included-image" src="<?= esc_url($first_panel_url) ?>" alt="<?= esc_attr($first_panel_alt) ?>" class="w-full h-auto rounded-[24px] object-cover shadow-sm transition-opacity duration-300" loading="lazy" />
        </div>

      </div>
    </div>
  </section>

  <?php /* ============================== FAQ ============================== */
  $faqg    = get_field('faq') ?: [];
  $faq     = $faqg['items'] ?? [];
  $faq_cta = pr_link($faqg['cta'] ?? null, 'Book a time', '#');
  $faq_ask = pr_link($faqg['ask_link'] ?? null, 'Ask Your Own Question', '#mh-book');
  ?>
  <section id="mh-faq" class="section bg-[#FFF7F3] mb-[64px]">
    <div class="container" data-reveal>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

        <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-6">
          <div>
            <span class="text-[#C24C33] text-[11px] font-bold tracking-widest uppercase mb-3 block"><?= esc_html(($faqg['eyebrow'] ?? '') ?: 'FAQS') ?></span>
            <h2 id="faq" class="h2 mb-4"><?= pr_heading($faqg['title'] ?? '', '') ?></h2>
            <p class="text-[16px] leading-[26px] text-[#6B5F5A] m-0 mb-6 max-w-[420px]"><?= esc_html($faqg['text'] ?? '') ?></p>
            <a href="<?= esc_url($faq_cta['url']) ?>"<?= pr_target($faq_cta) ?> class="inline-flex items-center justify-center px-6 py-2.5 bg-transparent border border-[#C24C33] text-[#C24C33] hover:bg-[#C24C33] hover:text-white text-[15px] font-bold rounded-full transition-colors duration-300 no-underline w-fit">
              <?= esc_html($faq_cta['title']) ?>
            </a>
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

            <a href="<?= esc_url($faq_ask['url']) ?>"<?= pr_target($faq_ask) ?> class="bg-[#C24C33] hover:bg-[#B34A34] text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer w-fit border-0 no-underline">
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