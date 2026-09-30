<?php
/**
 * Template Name: Privacy policy
 * Fields: inc/acf-privacy-policy.php  (every section is one ACF Group field)
 */
if (!defined('ABSPATH')) exit;

/* ------------------------------------------------------------------ helpers */

if (!function_exists('pp_link')) {
    function pp_link($link, $default_label = '', $default_url = '#') {
        $link = is_array($link) ? $link : [];
        return [
            'url'    => !empty($link['url']) ? $link['url'] : $default_url,
            'title'  => !empty($link['title']) ? $link['title'] : $default_label,
            'target' => $link['target'] ?? '',
        ];
    }
}

if (!function_exists('pp_target')) {
    function pp_target($link) {
        return ($link['target'] ?? '') === '_blank' ? ' target="_blank" rel="noopener"' : '';
    }
}

if (!function_exists('pp_img')) {
    function pp_img($id, $fallback, $alt, $class, $attr = []) {
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

$arrow_white = esc_url(get_theme_file_uri('assets/oslo/white-arrow.webp'));
$arrow_brown = esc_url(get_theme_file_uri('assets/oslo/Brown-arrow.webp'));
$tick_icon   = esc_url(get_theme_file_uri('assets/privacy/Tick.webp'));

$hero      = get_field('hero') ?: [];
$nav       = get_field('nav') ?: [];
$safety    = get_field('safety') ?: [];
$recorded  = get_field('recorded') ?: [];
$contact   = get_field('contact') ?: [];
$what_data = get_field('what_data') ?: [];
$disclosure = get_field('disclosure') ?: [];
$storage   = get_field('storage') ?: [];
$deletion  = get_field('deletion') ?: [];
$rights    = get_field('rights') ?: [];
$cookies   = get_field('cookies') ?: [];
$security  = get_field('security') ?: [];
$external  = get_field('external') ?: [];
$questions = get_field('questions') ?: [];

get_header();
?>

<main id="privacy-policy" class="privacy-policy">

  <?php /* ============================ HERO ============================ */
  $b1 = pp_link($hero['btn_primary'] ?? null, 'Book a time', '#');
  $b2 = pp_link($hero['btn_secondary'] ?? null, 'See prices', '#');
  ?>
  <section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[700px]">
    <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
      <?= pp_img($hero['image'] ?? 0, 'assets/privacy/hero.webp', $hero['title'] ?? '', 'absolute inset-0 w-full h-full object-cover object-[100%_50%]', ['loading' => 'eager', 'fetchpriority' => 'high']) ?>
      <span class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent lg:hidden"></span>
    </span>

    <div class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
      <div class="max-w-[1312px] mx-auto">
        <div class="max-w-full lg:max-w-[701px]">
          <h1 class="font-serif font-bold text-[#C24C33] mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[56px]"><?= esc_html($hero['title'] ?? '') ?></h1>

          <?php if ($t = ($hero['text'] ?? '')) : ?>
            <p class="text-lg lg:text-xl leading-[1.6] text-[#33170F] mt-[22px] mb-0"><?= esc_html($t) ?></p>
          <?php endif; ?>

          <div class="mt-8 flex flex-col sm:flex-row items-start sm:items-center gap-4 lg:gap-5">
            <a href="<?= esc_url($b1['url']) ?>"<?= pp_target($b1) ?> class="inline-flex items-center justify-center px-8 py-3.5 bg-[#C24C33] text-white rounded-full font-bold text-base transition hover:bg-opacity-90">
              <?= esc_html($b1['title']) ?>
              <span class="ml-2 inline-flex items-center"><img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/white-arrow-1.webp" alt="" aria-hidden="true" class="h-[20px] w-[12px] mt-0.5 object-contain" /></span>
            </a>
            <a href="<?= esc_url($b2['url']) ?>"<?= pp_target($b2) ?> class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-[#A93E28] text-[#A93E28] rounded-full font-bold text-base transition hover:bg-gray-100">
              <?= esc_html($b2['title']) ?>
              <span class="ml-2 inline-flex items-center"><img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/Brown-arrow-1.webp" alt="" aria-hidden="true" class="h-[20px] w-[12px] mt-0.5 object-contain" /></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php /* ============================ CONTENT ============================ */
  $nav_items = $nav['items'] ?? [];
  ?>
  <section class="section">
    <div class="container">
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[290px_990px] gap-10 lg:gap-14 xl:gap-16 items-start">

        <?php if ($nav_items) : ?>
          <aside class="lg:sticky lg:top-32 self-start">
            <span class="block text-[14px] font-bold tracking-[0.15em] uppercase text-[#88736B] mb-3 ml-4"><?= esc_html(($nav['eyebrow'] ?? '') ?: 'ON THIS PAGE') ?></span>
            <nav id="privacyNav" class="privacy-nav flex flex-col text-[14.5px] font-medium text-[#4D3A33]" aria-label="On this page">
              <?php foreach ($nav_items as $i => $n) :
                $last = $i === count($nav_items) - 1; ?>
                <a href="#<?= esc_attr($n['anchor'] ?? '') ?>" data-privacy-section="<?= esc_attr($n['anchor'] ?? '') ?>" class="privacy-nav__link py-3.5 px-4 border-b <?= $last ? 'border-transparent' : 'border-[#F8F0EB]' ?> transition-colors no-underline text-[#4E403B] text-[16px] font-medium<?= $i === 0 ? ' is-active' : '' ?> hover:text-[#B2462E]">
                  <?= esc_html($n['label'] ?? '') ?>
                </a>
              <?php endforeach; ?>
            </nav>
          </aside>
        <?php endif; ?>

        <div class="flex flex-col gap-[30px]  text-[16px] md:text-[17px] leading-[1.75] text-[#33170F]">

          <?php /* ---- Safety, security, responsibility ---- */
          $summary = $safety['summary_items'] ?? []; ?>
          <article id="safety" class="privacy-section scroll-mt-36" data-privacy-block="safety">
            <h2 class="font-serif text-[32px] md:text-[36px] lg:text-[40px] text-[#241C19] mb-5 mt-0 font-bold"><?= esc_html($safety['title'] ?? '') ?></h2>
            <p class="mb-8 text-[16px] md:text-[20px] leading-[1.6] text-[#5B5B5B]"><?= esc_html($safety['text'] ?? '') ?></p>

            <?php if ($summary) : ?>
              <ul class="privacy-summary list-none p-0 m-0 flex flex-col border-t border-[#F8F0EB]">
                <?php foreach ($summary as $s) : ?>
                  <li class="border-b border-[#F8EBE6]">
                    <a href="#<?= esc_attr($s['anchor'] ?? '') ?>" class="privacy-summary__link flex items-center gap-4 py-2 md:py-4 no-underline hover:bg-black/[0.02] transition-colors">
                      <span class="shrink-0 w-10 h-10" aria-hidden="true"><?= pp_img($s['icon'] ?? 0, '', $s['label'] ?? '', 'object-contain', ['loading' => 'lazy', 'alt' => '']) ?></span>
                      <span class="text-[#241C19] font-semibold text-[16px] md:text-[18px]"><?= esc_html($s['label'] ?? '') ?></span>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </article>

          <?php /* ---- What is recorded? ---- */ ?>
          <article id="what-is-recorded" class="privacy-section scroll-mt-36" data-privacy-block="what-is-recorded">
            <h2 class="font-serif font-bold text-[28px] md:text-[34px] text-[#241C19] mb-[20px] mt-0"><?= esc_html($recorded['title'] ?? '') ?></h2>
            <?php if ($p1 = ($recorded['para1'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p1) ?></p><?php endif; ?>
            <?php if ($p2 = ($recorded['para2'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p2) ?></p><?php endif; ?>
            <?php if ($nt = ($recorded['notice_text'] ?? '')) : ?>
              <div class="privacy-notice flex gap-4 items-start bg-white rounded-[16px] p-5 md:p-8 border border-[#F2E4DC] border-l-[4px] border-l-brand">
                <span class="shrink-0 w-10 h-10" aria-hidden="true"><?= pp_img($recorded['notice_icon'] ?? 0, '', '', 'object-contain', ['loading' => 'lazy', 'alt' => '']) ?></span>
                <div><p class="mb-0 text-[15px] md:text-[16px] text-[#241C19] leading-[1.65]"><?= esc_html($nt) ?></p></div>
              </div>
            <?php endif; ?>
          </article>

          <?php /* ---- Contact information ---- */
          $cells = $contact['cells'] ?? []; ?>
          <article id="contact" class="privacy-section scroll-mt-36" data-privacy-block="contact">
            <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-4 mt-0"><?= esc_html($contact['title'] ?? '') ?></h2>
            <?php if ($intro = ($contact['intro'] ?? '')) : ?><p class="mb-4 text-ink-body"><?= esc_html($intro) ?></p><?php endif; ?>
            <?php if ($cells) : ?>
              <div class="privacy-contact-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 rounded-[16px] border border-[#E8DDD7] overflow-hidden bg-white">
                <?php foreach ($cells as $c) : ?>
                  <div class="privacy-contact-grid__cell p-5 md:p-6 border border-[#F2E4DC] -mt-px -ml-px">
                    <span class="block text-[11px] font-semibold tracking-[0.12em] uppercase text-ink-faint mb-2"><?= esc_html($c['label'] ?? '') ?></span>
                    <span class="block font-bold text-[16px] md:text-[17px] text-ink-900 leading-snug"><?= esc_html($c['value'] ?? '') ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </article>

          <?php /* ---- What personal data do we process, and for what purpose? ---- */
          $wd_link = pp_link($what_data['link'] ?? null, 'lovdata.no', 'https://lovdata.no/'); ?>
          <article id="what-data" class="privacy-section scroll-mt-36" data-privacy-block="what-data">
            <h2 class="font-serif font-bold text-[28px] md:text-[32px] lg:text-[36px] text-ink-900 mb-5 mt-0 lg:w-[880px]"><?= esc_html($what_data['title'] ?? '') ?></h2>
            <?php if ($p1 = ($what_data['para1'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p1) ?></p><?php endif; ?>
            <?php if ($p2 = ($what_data['para2'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p2) ?></p><?php endif; ?>
            <?php if ($lb = ($what_data['link_before'] ?? '')) : ?>
              <p class="text-[#5B5B5B] text-[16px] md:text-[20px]">
                <?= esc_html($lb) ?> <a href="<?= esc_url($wd_link['url']) ?>"<?= pp_target($wd_link) ?> class="text-brand font-semibold hover:underline"><?= esc_html($wd_link['title']) ?></a>.
              </p>
            <?php endif; ?>
          </article>

          <?php /* ---- Disclosure of personal data ---- */ ?>
          <article id="disclosure" class="privacy-section scroll-mt-36" data-privacy-block="disclosure">
            <h2 class="font-serif font-bold text-[28px] md:text-[34px] text-[#241C19] mb-[20px] mt-0"><?= esc_html($disclosure['title'] ?? '') ?></h2>
            <?php if ($t = ($disclosure['text'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($t) ?></p><?php endif; ?>
          </article>

          <?php /* ---- Secure storage of personal data ---- */ ?>
          <article id="secure-storage" class="privacy-section scroll-mt-36" data-privacy-block="secure-storage">
            <h2 class="font-serif font-bold text-[28px] md:text-[34px] text-[#241C19] mb-[20px] mt-0"><?= esc_html($storage['title'] ?? '') ?></h2>
            <?php if ($p1 = ($storage['para1'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p1) ?></p><?php endif; ?>
            <?php if ($p2 = ($storage['para2'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p2) ?></p><?php endif; ?>
            <?php if ($p3 = ($storage['para3'] ?? '')) : ?><p class="text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p3) ?></p><?php endif; ?>
          </article>

          <?php /* ---- Deletion of information ---- */ ?>
          <article id="deletion" class="privacy-section scroll-mt-36" data-privacy-block="deletion">
            <h2 class="font-serif font-bold text-[28px] md:text-[34px] text-[#241C19] mb-[20px] mt-0"><?= esc_html($deletion['title'] ?? '') ?></h2>
            <?php if ($p1 = ($deletion['para1'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p1) ?></p><?php endif; ?>
            <?php if ($p2 = ($deletion['para2'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p2) ?></p><?php endif; ?>
          </article>

          <?php /* ---- Your rights ---- */
          $right_items = $rights['items'] ?? []; ?>
          <article id="your-rights" class="privacy-section scroll-mt-36" data-privacy-block="your-rights">
            <h2 class="font-serif font-bold text-[28px] md:text-[34px] text-[#241C19] mb-[20px] mt-0"><?= esc_html($rights['title'] ?? '') ?></h2>
            <?php if ($right_items) : ?>
              <ul class="privacy-rights list-none p-0 m-0 flex flex-col gap-3">
                <?php foreach ($right_items as $r) : ?>
                  <li class="privacy-rights__item flex items-start gap-3 bg-[#FFF7F3] rounded-[16px] px-4 py-4 md:px-[22px] md:py-[20px]">
                    <span class="shrink-0 w-6 h-6 mt-0.5" aria-hidden="true"><?= pp_img($r['icon'] ?? 0, 'assets/privacy/Tick.webp', '', 'object-contain w-full h-full', ['loading' => 'lazy', 'alt' => '']) ?></span>
                    <span class="text-[16px] md:text-[20px] text-[#5B5B5B] leading-[1.6]"><?= esc_html($r['text'] ?? '') ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </article>

          <?php /* ---- Cookies ---- */
          $cookie_rows = $cookies['rows'] ?? []; ?>
          <article id="cookies" class="privacy-section scroll-mt-36" data-privacy-block="cookies">
            <h2 class="font-serif font-bold text-[28px] md:text-[34px] text-[#241C19] mb-[20px] mt-0"><?= esc_html($cookies['title'] ?? '') ?></h2>
            <?php if ($t = ($cookies['text'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($t) ?></p><?php endif; ?>
            <?php if ($cookie_rows) : ?>
              <div class="privacy-cookies overflow-hidden rounded-[16px] border border-[#E8DDD7]">
                <table class="w-full border-collapse text-left text-[15px] md:text-[16px]">
                  <thead>
                    <tr class="bg-brand text-white">
                      <th class="font-bold px-5 py-4 md:px-6 md:py-[18px] w-[178px]"><?= esc_html($cookies['col_category'] ?? '') ?></th>
                      <th class="font-bold px-5 py-4 md:px-6 md:py-[18px]"><?= esc_html($cookies['col_purpose'] ?? '') ?></th>
                    </tr>
                  </thead>
                  <tbody class="bg-white text-ink-body">
                    <?php foreach ($cookie_rows as $row) : ?>
                      <tr class="border-t border-[#E8DDD7]">
                        <td class="px-5 py-4 md:px-6 md:py-[18px] font-bold font-serif text-[15px] md:text-[18px] text-[#241C19] align-top"><?= esc_html($row['category'] ?? '') ?></td>
                        <td class="px-5 py-4 md:px-6 md:py-[18px] align-top text-[#5B5B5B]"><?= esc_html($row['purpose'] ?? '') ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            <?php endif; ?>
          </article>

          <?php /* ---- Security ---- */ ?>
          <article id="security" class="privacy-section scroll-mt-36" data-privacy-block="security">
            <h2 class="font-serif font-bold text-[28px] md:text-[34px] text-[#241C19] mb-[20px] mt-0"><?= esc_html($security['title'] ?? '') ?></h2>
            <?php if ($t = ($security['text'] ?? '')) : ?><p class="text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($t) ?></p><?php endif; ?>
          </article>

          <?php /* ---- External links and IP addresses ---- */ ?>
          <article id="external-links" class="privacy-section scroll-mt-36" data-privacy-block="external-links">
            <h2 class="font-serif font-bold text-[28px] md:text-[34px] text-[#241C19] mb-[20px] mt-0"><?= esc_html($external['title'] ?? '') ?></h2>
            <?php if ($p1 = ($external['para1'] ?? '')) : ?><p class="mb-4 text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p1) ?></p><?php endif; ?>
            <?php if ($p2 = ($external['para2'] ?? '')) : ?><p class="text-[#5B5B5B] text-[16px] md:text-[20px]"><?= esc_html($p2) ?></p><?php endif; ?>
          </article>

          <?php /* ---- Do you have questions? (final CTA) ---- */
          $qemail = $questions['email'] ?? ''; ?>
          <article id="questions" class="privacy-section scroll-mt-36" data-privacy-block="questions">
            <div class="privacy-cta rounded-[24px] bg-brand text-white px-6 py-10 md:px-12 md:py-14">
              <h2 class="font-serif font-bold text-[26px] md:text-[32px] lg:text-[40px] text-white mb-4 mt-0 leading-[1.25]"><?= esc_html($questions['title'] ?? '') ?></h2>
              <?php if ($t = ($questions['text'] ?? '')) : ?>
                <p class="text-white/90 text-[16px] md:text-[20px] leading-[1.65] mb-8"><?= esc_html($t) ?></p>
              <?php endif; ?>
              <?php if ($qemail) : ?>
                <a href="mailto:<?= esc_attr($qemail) ?>" class="privacy-cta__email inline-flex items-center justify-center gap-3 bg-white text-ink-900 font-bold text-[15px] md:text-[16px] px-8 py-4 rounded-[16px] hover:bg-brand-cream transition-colors no-underline">
                  <span class="w-9 h-9 shrink-0" aria-hidden="true"><?= pp_img($questions['icon'] ?? 0, '', '', 'object-contain', ['loading' => 'lazy', 'alt' => '']) ?></span>
                  <?= esc_html($qemail) ?>
                </a>
              <?php endif; ?>
            </div>
          </article>

        </div>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>