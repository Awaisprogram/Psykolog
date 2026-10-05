<?php
/**
 * Template Name: Patient questions
 * Fields: inc/acf-patient-questions.php  (every section is one ACF Group field)
 */
if (!defined('ABSPATH')) exit;

/* ------------------------------------------------------------------ helpers */

if (!function_exists('pq_mark')) {
    function pq_mark($text, $class = 'text-[#C24C33] italic', $tag = 'em') {
        $html = esc_html((string) $text);
        $open = '<' . $tag . ($class !== '' ? ' class="' . esc_attr($class) . '"' : '') . '>';
        $html = preg_replace('/\{\{(.+?)\}\}/u', $open . '$1</' . $tag . '>', $html);
        return str_replace('||', '<br />', $html);
    }
}

if (!function_exists('pq_link')) {
    function pq_link($link, $default_label = '', $default_url = '#') {
        $link = is_array($link) ? $link : [];
        return [
            'url'    => !empty($link['url']) ? $link['url'] : $default_url,
            'title'  => !empty($link['title']) ? $link['title'] : $default_label,
            'target' => $link['target'] ?? '',
        ];
    }
}

if (!function_exists('pq_target')) {
    function pq_target($link) {
        return ($link['target'] ?? '') === '_blank' ? ' target="_blank" rel="noopener"' : '';
    }
}

if (!function_exists('pq_img')) {
    function pq_img($id, $fallback, $alt, $class, $attr = []) {
        $id = is_array($id) ? (int) ($id['ID'] ?? 0) : (int) $id;
        if ($id) {
            $args = array_merge(['class' => $class], $attr);
            if (!isset($args['alt']) && !get_post_meta($id, '_wp_attachment_image_alt', true)) $args['alt'] = $alt;
            $html = wp_get_attachment_image($id, 'full', false, $args);
            if ($html) return $html;
        }
        if (!$fallback) return '';
        $attr = array_merge(['alt' => $alt], $attr);
        $extra = '';
        foreach ($attr as $k => $v) $extra .= ' ' . esc_attr($k) . '="' . esc_attr($v) . '"';
        return '<img src="' . esc_url(get_theme_file_uri($fallback)) . '" class="' . esc_attr($class) . '"' . $extra . ' />';
    }
}

$hero  = get_field('hero') ?: [];
$form  = get_field('form') ?: [];
$faq   = get_field('faq') ?: [];
$items = $faq['items'] ?? [];
$cats  = $faq['categories'] ?? [];

get_header();
?>

<main>

  <?php /* ============================ HERO ============================ */
  $card_link = pq_link($hero['card_link'] ?? null, 'Read answer', '#'); ?>
  <section class="relative w-full overflow-hidden bg-[#FBEFE9] pt-32 lg:pt-[160px] pb-16 lg:pb-[45px] -mt-20 lg:-mt-[86px]">
    <div class="absolute top-0 right-0 w-full max-w-[800px] h-[800px] bg-gradient-to-bl from-[#F4EBE3]/60 to-transparent rounded-bl-[100%] pointer-events-none transform translate-x-1/4 -translate-y-1/4" aria-hidden="true"></div>

    <div class="px-4 md:px-12 lg:px-16 relative z-[2]">
      <div class="max-w-[1312px] mx-auto grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[666px_550px] gap-12 lg:gap-[95px] items-center">

        <div class="max-w-[666px]">
          <nav class="flex items-center text-[14px] text-[#6B5F5A] mb-8 font-medium">
            <a href="<?= esc_url(home_url('/')) ?>" class="hover:text-[#C24C33] transition-colors no-underline">Home</a>
            <span class="mx-2">/</span>
            <span class="text-[#241C19]"><?= esc_html($hero['breadcrumb'] ?? '') ?></span>
          </nav>

          <h2 class="h2 mb-6"><?= pq_mark($hero['title'] ?? '') ?></h2>

          <?php if ($sub = ($hero['subheading'] ?? '')) : ?>
            <div class="flex items-center gap-4 mb-2">
              <span class="w-[30px] h-[1px] bg-[#C24C33]"></span>
              <span class="text-[#A93E28] font-bold italic font-serif text-[20px] md:text-[22px]"><?= esc_html($sub) ?></span>
            </div>
          <?php endif; ?>

          <p class="text-[#33170F] text-[16px] md:text-[20px] leading-[1.6] m-0"><?= esc_html($hero['text'] ?? '') ?></p>
        </div>

        <div class="relative w-full max-w-[550px] lg:ml-auto mt-10 lg:mt-0">
          <?= pq_img($hero['image'] ?? 0, 'assets/Patients/hero.webp', $hero['title'] ?? '', 'w-full h-auto rounded-[24px] object-cover shadow-sm', ['loading' => 'eager']) ?>

          <?php if ($hero['card_question'] ?? '') : ?>
            <div class="absolute -bottom-8 -left-4 md:bottom-8 md:-left-12 bg-white rounded-[18px] border-[#F2E4DC] shadow-[0px_26.51px_46.78px_-26.51px_#5C2A208C] p-4 md:py-[30px] md:px-[20px] w-[280px] md:w-[385px]">
              <h3 class="font-serif font-bold text-[#241C19] text-[14px] md:text-[16px] leading-[1.4] mb-5"><?= esc_html($hero['card_question']) ?></h3>
              <a href="<?= esc_url($card_link['url']) ?>"<?= pq_target($card_link) ?> class="inline-flex items-center gap-3 text-[#241C19] font-semibold text-[14px] hover:text-[#C24C33] transition-colors group no-underline">
                <?= esc_html($card_link['title']) ?>
                <span class="w-7 h-7 shrink-0"><img src='https://sysinn.net/psykolog.no/wp-content/uploads/2026/10/les-mer.webp' classs='rounded-full object-contain'/></span>
              </a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <?php /* ====================== QUESTION FORM SECTION ====================== */
  $points = $form['points'] ?? [];
  $topics = $form['topics'] ?? [];
  $limit  = (int) ($form['char_limit'] ?? 1000);
  ?>
  <section class="section">
    <div class="container">
      <div class="bg-[#C24C33] p-8 rounded-[24px] grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 xl:gap-[52px] items-center relative overflow-hidden">
        <div class="absolute -top-[100px] -left-[40px] text-[400px] leading-none font-serif text-white opacity-[0.03] pointer-events-none select-none" aria-hidden="true">?</div>

        <div>
          <div class="inline-flex items-center gap-2.5 bg-white rounded-full px-5 py-2 mb-8 shadow-sm">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/10/Anonym.webp" alt="" aria-hidden="true" class="w-4 h-4 object-contain opacity-70" />
            <span class="text-[#C24C33] text-[11px] font-bold tracking-[1.5px] uppercase mt-0.5"><?= esc_html($form['pill_label'] ?? '') ?></span>
          </div>

          <h2 class="font-serif font-bold text-white text-[32px] md:text-[46px] leading-[1.1] mb-6"><?= pq_mark($form['title'] ?? '', '', 'span') ?></h2>
          <p class="text-[18px] md:text-[20px] text-white/95 leading-[1.5] mb-12 max-w-[480px]"><?= esc_html($form['text'] ?? '') ?></p>

          <?php if ($points) : ?>
            <div class="flex flex-col gap-8">
              <?php foreach ($points as $pt) : ?>
                <div class="flex items-start gap-5">
                  <div class="w-[32px] h-[32px] shrink-0 mt-1"><?= pq_img($pt['icon'] ?? 0, '', '', 'w-full h-full object-contain', ['loading' => 'lazy', 'alt' => '']) ?></div>
                  <p class="text-[16px] md:text-[18px] text-white/90 leading-[1.5] m-0 max-w-[460px]"><?= esc_html($pt['text'] ?? '') ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="relative w-full max-w-[620px] lg:ml-auto">
          <div class="hidden md:block absolute -left-12 top-12 w-[85px] z-20">
            <img src='https://sysinn.net/psykolog.no/wp-content/uploads/2026/10/Skjema-merke.webp' class='w-full h-auto drop-shadow-lg' />
          </div>

          <div class="bg-white rounded-[24px] p-6 md:p-[22px] shadow-[0_20px_60px_rgba(0,0,0,0.15)] relative">
            <?php if ($topics) : ?>
              <div id="form-topic-btns" class="flex flex-nowrap items-center gap-3 mb-6 overflow-x-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                <span class="shrink-0 text-[#C24C33] text-[12px] font-bold tracking-[2px] uppercase mr-2">Temaer</span>
                <?php foreach ($topics as $t) : ?>
                  <button type="button" class="shrink-0 inline-flex items-center gap-2 px-5 py-[8px] rounded-full border border-[#EFD9CE] text-[#33170F] font-semibold text-[14px] hover:border-[#C24C33] hover:text-[#C24C33] transition-colors bg-white cursor-pointer">
                    <?= pq_img($t['icon'] ?? 0, '', $t['label'] ?? '', 'w-4 h-4 object-contain', ['loading' => 'lazy', 'alt' => '']) ?>
                    <?= esc_html($t['label'] ?? '') ?>
                  </button>
                <?php endforeach; ?>
              </div>
              <!-- Hidden field captures selected topic for form submission -->
              <input type="hidden" id="pq-topic" name="topic" value="" />
            <?php endif; ?>

            <div class="bg-[#FFF7F3] border border-[#EFD9CE] rounded-[16px] p-5 pb-4 mb-6 relative">
              <span class="absolute top-4 left-5 text-[#C24C33] font-serif text-[44px] leading-none opacity-50">&ldquo;</span>
              <textarea id="pq-question" maxlength="<?= esc_attr($limit) ?>" placeholder="<?= esc_attr($form['textarea_placeholder'] ?? '') ?>" class="w-full h-[120px] bg-transparent border-none outline-none resize-none pt-2 pl-8 pr-2 font-serif text-[22px] text-[#241C19] font-bold placeholder:text-[#B3A6A1]"></textarea>

              <div class="flex flex-wrap items-center justify-between gap-4 mt-2 text-[#8C7F78] text-[13px]">
                <div class="flex items-center gap-2">
                  <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/10/Vennligst-ikke-inkluder-navn-eller-detaljer-som-kan-identifisere-deg.webp" alt="" aria-hidden="true" class="w-3.5 h-3.5 object-contain shrink-0" />
                  <span><?= esc_html($form['privacy_note'] ?? '') ?></span>
                </div>
                <div class="flex items-center gap-2 ml-auto">
                  <div class="w-[18px] h-[18px] rounded-full border-[1.5px] border-[#D1C7C1]"></div>
                  <span class="font-medium text-[#463D39]"><span id="pq-char-count">0</span> / <?= esc_html($limit) ?></span>
                </div>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 mb-3">
              <div class="flex-1 relative lg:w-[300px]">
                <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                  <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/10/e-post.webp" alt="" aria-hidden="true" class="w-[22px] h-[22px] object-contain opacity-60" />
                </div>
                <input type="email" placeholder="<?= esc_attr($form['email_placeholder'] ?? '') ?>" class="w-full h-[54px] bg-[#FDF9F7] border border-[#F2E4DC] rounded-full pl-[50px] pr-5 text-[15px] text-[#241C19] outline-none focus:border-[#C24C33] transition-colors placeholder:text-[#A89F9A]" />
              </div>
              <button type="submit" class="h-[54px] px-2 bg-[#C24C33] hover:bg-[#A93E28] text-white rounded-full font-bold text-[15px] flex items-center justify-center gap-2.5 transition-colors shrink-0 lg:w-[230px] cursor-pointer">
                <?= esc_html($form['submit_label'] ?? '') ?>
                <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/10/Send-inn-sporsmal.webp" alt="" aria-hidden="true" class="w-[36px] h-[36px] object-contain mt-0.5" />
              </button>
            </div>

            <p class="text-[12px] text-[#8C7F78] mb-6 pl-5"><?= esc_html($form['email_note'] ?? '') ?></p>

            <label class="flex items-start gap-4 cursor-pointer mt-2 group">
              <div class="relative inline-block w-11 h-6 shrink-0 mt-0.5">
                <input type="checkbox" class="peer sr-only" />
                <div class="w-11 h-6 bg-[#E8DDD7] rounded-full peer peer-checked:bg-[#EAC8C1] transition-colors"></div>
                <div class="absolute top-[2px] left-[2px] bg-white rounded-full h-5 w-5 transition-transform peer-checked:translate-x-[20px] shadow-[0_2px_4px_rgba(0,0,0,0.1)]"></div>
              </div>
              <span class="text-[14px] text-[#6B5F5A] leading-[1.5] group-hover:text-[#463D39] transition-colors"><?= esc_html($form['consent_text'] ?? '') ?></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php /* ============================== FAQ ============================== */
  $help_link = pq_link($faq['help_link'] ?? null, 'Ask a question', '#');
  $page_size = max(1, (int) ($faq['page_size'] ?? 6));
  ?>
  <section class="section bg-[#FFF7F3]" id="patient-faq" aria-labelledby="faq-heading">
    <div class="container">

      <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12">
        <div>
          <div class="flex items-center gap-2 mb-4">
            <div class="w-5 h-5 bg-[#29A343] rounded flex items-center justify-center text-white shrink-0" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="2" x2="12" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line><line x1="4.93" y1="19.07" x2="19.07" y2="4.93"></line></svg>
            </div>
            <span class="text-[#C24C33] text-[12px] font-bold tracking-[1.5px] uppercase mt-0.5"><?= esc_html($faq['eyebrow'] ?? '') ?></span>
          </div>
          <h2 id="faq-heading" class="font-serif font-bold text-[#241C19] text-[36px] md:text-[42px] leading-tight m-0"><?= pq_mark($faq['title'] ?? '') ?></h2>
        </div>

        <div class="w-full md:w-[420px]">
          <form id="faq-search-form" role="search" class="relative w-full" onsubmit="return false">
            <label for="faq-search" class="sr-only">Søkespørsmål</label>
            <svg class="absolute left-[18px] top-[18px] text-[#C24C33] pointer-events-none" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            <input id="faq-search" type="text" autocomplete="off" spellcheck="false" placeholder="<?= esc_attr($faq['search_placeholder'] ?? '') ?>" class="w-full h-[52px] bg-white border border-[#EADFDB] rounded-full pl-[46px] pr-12 text-[15px] text-[#241C19] outline-none focus:border-[#C24C33] focus-visible:ring-2 focus-visible:ring-[#C24C33]/20 transition-colors placeholder:text-[#A89F9A] shadow-sm" />
            <button id="faq-search-clear" type="button" hidden aria-label="Clear search" class="absolute right-3 top-1/2 -translate-y-1/2 w-8 h-8 rounded-full flex items-center justify-center text-[#8C7F78] hover:text-[#C24C33] hover:bg-[#FDF0EC] transition-colors">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
          </form>
          <?php if ($note = ($faq['search_note'] ?? '')) : ?>
            <p class="text-[16px] text-[#6B5F5A] mt-3 pl-2 flex items-start gap-1.5 leading-[1.4]">
              <svg class="w-[14px] h-[14px] mt-[1px] shrink-0 text-[#C24C33]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
              <?= esc_html($note) ?>
            </p>
          <?php endif; ?>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[0.6fr_1fr] xl:grid-cols-[367px_913px] gap-8 lg:gap-10">

        <aside class="w-full shrink-0 lg:sticky lg:top-32 self-start">
          <div class="bg-white rounded-[24px] border border-[#F2E4DC] p-5 md:p-6 mb-6 shadow-sm">
            <h3 id="faq-cat-label" class="text-[13px] font-medium text-[#6B5F5A] mb-4"><?= esc_html($faq['categories_label'] ?? '') ?></h3>
            <div id="faq-categories" class="flex flex-col gap-1.5" role="group" aria-labelledby="faq-cat-label">
              <button type="button" data-cat="All" aria-pressed="true" class="cursor-pointer flex items-center justify-between w-full px-4 py-3 rounded-[14px] transition-colors group bg-[#FDF0EC] text-[#C24C33]">
                <span class="flex items-center gap-3 text-[#C24C33] transition-colors">
                  <?= pq_img($faq['all_icon'] ?? 0, '', '', 'w-[18px] h-[18px] object-contain transition-opacity', ['loading' => 'lazy', 'alt' => '']) ?>
                  <span class="text-[14px] font-bold transition-colors"><?= esc_html($faq['all_label'] ?? 'All') ?></span>
                </span>
                <span data-cat-count class="text-[11px] font-bold px-2 py-0.5 rounded-full min-w-[24px] text-center transition-colors bg-[#C24C33] text-white">0</span>
              </button>
              <?php foreach ($cats as $c) : ?>
                <button type="button" data-cat="<?= esc_attr($c['label'] ?? '') ?>" aria-pressed="false" class="cursor-pointer flex items-center justify-between w-full px-4 py-3 rounded-[14px] transition-colors group text-[#463D39] hover:bg-[#FDF9F7]">
                  <span class="flex items-center gap-3 text-[#A89F9A] group-hover:text-[#C24C33] transition-colors">
                    <?= pq_img($c['icon'] ?? 0, '', $c['label'] ?? '', 'w-[28px] h-[28px] object-contain', ['loading' => 'lazy', 'alt' => '']) ?>
                    <span class="text-[14px] font-medium text-[#463D39] group-hover:text-[#C24C33] transition-colors"><?= esc_html($c['label'] ?? '') ?></span>
                  </span>
                  <span data-cat-count class="text-[11px] font-bold px-2 py-0.5 rounded-full min-w-[24px] text-center transition-colors bg-[#F4EAE6] text-[#6B5F5A] group-hover:bg-[#FDF0EC] group-hover:text-[#C24C33]">0</span>
                </button>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="bg-[#5C2A20] rounded-[24px] p-8 text-white shadow-[0_20px_40px_rgba(0,0,0,0.1)]">
            <div class="w-[46px] h-[46px] bg-white/10 rounded-full flex items-center justify-center mb-6 border border-white/5" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-90 text-[#F1A284]"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            </div>
            <h3 class="font-serif font-bold text-[22px] leading-tight mb-3 text-white"><?= esc_html($faq['help_title'] ?? '') ?></h3>
            <p class="text-[15px] text-white/80 leading-snug mb-8"><?= esc_html($faq['help_text'] ?? '') ?></p>
            <a href="<?= esc_url($help_link['url']) ?>"<?= pq_target($help_link) ?> data-faq-ask class="inline-flex items-center gap-2 bg-[#F09367] hover:bg-[#E29274] text-[#4D3126] px-6 py-[14px] rounded-full font-bold text-[14px] transition-colors no-underline">
              <?= esc_html($help_link['title']) ?>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </aside>

        <div class="flex-1 min-w-0">
          <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-6 gap-4">
            <p id="faq-status" class="text-[14px] text-[#6B5F5A] font-medium m-0" role="status" aria-live="polite">&nbsp;</p>
            <button id="faq-sort" type="button" data-newest="<?= esc_attr($faq['sort_newest_label'] ?? 'Newest first') ?>" data-oldest="<?= esc_attr($faq['sort_oldest_label'] ?? 'Oldest first') ?>" class="flex items-center gap-1.5 text-[#C24C33] text-[13px] font-bold hover:opacity-80 transition-opacity self-start sm:self-auto cursor-pointer">
              <img id="faq-sort-icon" src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/10/filter.webp" alt="" class="w-4 h-4 object-contain transition-transform" />
              <span id="faq-sort-label"><?= esc_html($faq['sort_newest_label'] ?? 'Newest first') ?></span>
            </button>
          </div>

          <div id="faq-list" class="flex flex-col gap-4">
            <?php foreach ($items as $i => $it) :
              $n = $i + 1;
              $open = !empty($it['open']);
              $lm = pq_link($it['learn_more'] ?? null);
              $has_lm = !empty($it['learn_more']['url']);
              $by = trim(($it['specialist_name'] ?? '') ? 'Answered by ' . $it['specialist_name'] : '');
              $reviewed = $it['reviewed_date'] ?? '';
            ?>
              <article id="faq-<?= $n ?>" class="faq-item group bg-white rounded-[24px] border border-[#E8B8AC] hover:border-[#EADFDB] data-[open=true]:border-[#EADFDB] transition-colors shadow-sm p-6 md:px-8 md:py-6" data-id="<?= $n ?>" data-cat="<?= esc_attr($it['category'] ?? '') ?>" data-date="<?= esc_attr($it['date'] ?? '') ?>" data-open="<?= $open ? 'true' : 'false' ?>">
                <h3 class="m-0">
                  <button type="button" id="faq-btn-<?= $n ?>" class="faq-toggle flex items-start gap-4 md:gap-5 w-full text-left cursor-pointer bg-transparent border-0 p-0 rounded-xl focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-[6px] focus-visible:outline-[#C24C33]" aria-expanded="<?= $open ? 'true' : 'false' ?>" aria-controls="faq-panel-<?= $n ?>">
                    <span data-faq-num class="text-[#D1C7C1] group-hover:text-[#B3A6A1] transition-colors font-serif text-[18px] mt-1 shrink-0" aria-hidden="true"><?= esc_html(sprintf('%02d', $n)) ?></span>
                    <span class="flex-1 block">
                      <span class="inline-block px-3 py-1 rounded-full bg-[#FDF0EC] text-[#C24C33] text-[11px] font-bold tracking-widest uppercase mb-3"><?= esc_html($it['category'] ?? '') ?></span>
                      <span data-faq-q class="block font-serif font-bold text-[#241C19] text-[20px] md:text-[22px] leading-snug group-hover:text-[#C24C33] transition-colors"><?= esc_html($it['question'] ?? '') ?></span>
                    </span>
                    <span class="shrink-0 text-[#C24C33] w-8 h-8 flex items-center justify-center mt-1" aria-hidden="true">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><line class="origin-center [transform-box:fill-box] transition-transform duration-200 motion-reduce:transition-none group-data-[open=true]:scale-y-0" x1="12" y1="5" x2="12" y2="19"></line></svg>
                    </span>
                  </button>
                </h3>

                <div id="faq-panel-<?= $n ?>" data-faq-panel class="grid grid-rows-[0fr] data-[open=true]:grid-rows-[1fr] transition-[grid-template-rows] duration-300 ease-in-out motion-reduce:transition-none" role="region" aria-labelledby="faq-btn-<?= $n ?>" data-open="<?= $open ? 'true' : 'false' ?>"<?= $open ? '' : ' inert' ?>>
                  <div class="min-h-0 overflow-hidden invisible delay-300 transition-[visibility] group-data-[open=true]:visible group-data-[open=true]:delay-0 motion-reduce:transition-none">
                    <div class="mt-8 pt-8 border-t border-[#F2E4DC]">
                      <div class="bg-[#FDF9F7] rounded-[20px] p-6 md:p-8 relative">
                        <span class="absolute left-4 top-2 text-[#EADFDB] font-serif text-[60px] leading-none select-none" aria-hidden="true">&ldquo;</span>

                        <div class="flex items-start gap-4 mb-5 relative z-10 pl-2">
                           <div class="relative w-[42px] h-[42px] shrink-0">
                      <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/10/Avatar.webp" alt="" class="w-full h-full object-contain" loading="lazy" />
                      
                    </div>
                          <div class="mt-0.5">
                            <h4 class="font-bold text-[#241C19] text-[15px] m-0 leading-snug">Svar fra vår spesialist</h4>
                            <?php if ($by || $reviewed) : ?>
                              <p class="text-[12px] text-[#8C7F78] m-0 mt-0.5"><?= esc_html($by) ?><?= ($by && $reviewed) ? ' &middot; ' : '' ?><?= $reviewed ? 'Last reviewed ' . esc_html($reviewed) : '' ?></p>
                            <?php endif; ?>
                          </div>
                        </div>

                        <p data-faq-a class="text-[#463D39] text-[15px] md:text-[16px] leading-[1.6] mb-6 pl-2 md:pl-[62px] relative z-10"><?= esc_html($it['answer'] ?? '') ?></p>

                        <?php if ($has_lm) : ?>
                          <div class="pl-2 md:pl-[62px] relative z-10">
                            <a href="<?= esc_url($lm['url']) ?>"<?= pq_target($lm) ?> class="inline-flex items-center gap-2 text-[#C24C33] font-bold text-[14px] hover:underline">
                              <?= esc_html($lm['title'] ?: 'Learn more') ?>
                              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                          </div>
                        <?php endif; ?>

                        <div data-vote-box class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mt-8 pt-6 border-t border-[#EADFDB] pl-2 md:pl-[62px] relative z-10">
                          <span class="text-[13px] text-[#6B5F5A] font-medium">Var dette svaret nyttig?</span>
                          <div class="flex items-center gap-2">
                            <button type="button" data-vote="yes" class="inline-flex items-center gap-1.5 px-4 py-2 bg-white border border-[#CFDCC9] hover:border-[#EADFDB] rounded-full text-[14px] font-bold text-[#4A5D46] transition-colors shadow-sm cursor-pointer">
                              <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/10/Ja.webp" alt="" aria-hidden="true" class="w-[14px] h-[14px] object-contain" />
                             Ja
                            </button>
                            <button type="button" data-vote="no" class="inline-flex items-center font-bold gap-1.5 px-4 py-2 bg-white border border-[#A93E28] hover:border-[#EADFDB] rounded-full text-[14px] font-bold text-[#A93E28] transition-colors shadow-sm cursor-pointer">
                              <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/10/Ingen.webp" alt="" aria-hidden="true" class="w-[14px] h-[14px] object-contain" />
                             Ingen
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>

          <div id="faq-empty" hidden class="bg-white rounded-[24px] border border-[#F2E4DC] p-10 text-center shadow-sm">
            <h3 class="font-serif font-bold text-[#241C19] text-[22px] m-0 mb-2"><?= esc_html($faq['empty_title'] ?? '') ?></h3>
            <p class="text-[15px] text-[#6B5F5A] m-0 mb-6"><?= esc_html($faq['empty_text'] ?? '') ?></p>
            <button id="faq-reset" type="button" class="inline-flex items-center bg-[#FDF0EC] text-[#C24C33] hover:bg-[#F9E2DA] px-6 py-3 rounded-full font-bold text-[14px] transition-colors"><?= esc_html($faq['reset_label'] ?? '') ?></button>
          </div>

          <div id="faq-more-wrap" class="mt-10 flex justify-center" hidden>
            <button id="faq-more" type="button" data-page-size="<?= esc_attr($page_size) ?>" class="inline-flex items-center gap-2 bg-white border border-[#EADFDB] hover:border-[#C24C33] text-[#331811] hover:text-[#C24C33] transition-colors rounded-full px-7 py-[14px] font-bold text-[14px] shadow-sm cursor-pointer">
              <span id="faq-more-label"><?= esc_html($faq['more_label'] ?? '') ?></span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>