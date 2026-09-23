<?php
/**
 * Template Name: Our psychologists
 * Fields: inc/acf-our-psychologists.php  (every section is one ACF Group field)
 */
if (!defined('ABSPATH')) exit;

/* ------------------------------------------------------------------ helpers */

if (!function_exists('op_mark')) {
    /**
     * Escapes text, then turns {{x}} into <$tag class="$class">x</$tag> and || into <br>.
     * Defaults to the highlighted <em> used in headings.
     */
    function op_mark($text, $class = 'text-[#C24C33] italic', $tag = 'em') {
        $html = esc_html((string) $text);
        $open = '<' . $tag . ($class !== '' ? ' class="' . esc_attr($class) . '"' : '') . '>';
        $html = preg_replace('/\{\{(.+?)\}\}/u', $open . '$1</' . $tag . '>', $html);
        return str_replace('||', '<br />', $html);
    }
}

if (!function_exists('op_link')) {
    function op_link($link, $default_label = '', $default_url = '#') {
        $link = is_array($link) ? $link : [];
        return [
            'url'    => !empty($link['url']) ? $link['url'] : $default_url,
            'title'  => !empty($link['title']) ? $link['title'] : $default_label,
            'target' => $link['target'] ?? '',
        ];
    }
}

if (!function_exists('op_target')) {
    function op_target($link) {
        return ($link['target'] ?? '') === '_blank' ? ' target="_blank" rel="noopener"' : '';
    }
}

if (!function_exists('op_lines')) {
    /** Non-empty trimmed lines of a textarea value. */
    function op_lines($value) {
        return array_values(array_filter(array_map('trim', preg_split('/\R/', (string) $value))));
    }
}

if (!function_exists('op_img')) {
    /** Image by attachment ID, falling back to a theme asset if the field is empty. Pass ['alt' => …] in $attr to force alt text. */
    function op_img($id, $fallback, $alt, $class, $attr = []) {
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
$arrow_cta   = esc_url(get_theme_file_uri('assets/Faqs/arrow.webp'));

/* Inline SVG icons for the features bar (selected via the "icon" field). */
$feature_icons = [
    'badge' => [
        'bg' => 'bg-[#FCEAE4]', 'fg' => 'text-[#B84E38]',
        'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />',
    ],
    'document' => [
        'bg' => 'bg-[#E9EFE6]', 'fg' => 'text-[#687A5B]',
        'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />',
    ],
    'calendar' => [
        'bg' => 'bg-[#E6EFF5]', 'fg' => 'text-[#42637D]',
        'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /><circle cx="12" cy="13" r="3" />',
    ],
    'devices' => [
        'bg' => 'bg-[#F6EEDC]', 'fg' => 'text-[#987A36]',
        'svg' => '<rect x="2" y="5" width="16" height="11" rx="1" /><path d="M10 16v3m-3 0h6" /><rect x="15" y="11" width="7" height="10" rx="1" fill="#F6EEDC" />',
    ],
    'lock' => [
        'bg' => 'bg-[#EFE9F4]', 'fg' => 'text-[#614B82]',
        'svg' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />',
    ],
];

/* Tag colours for specialization pills (cycled). */
$pill_colors = [
    'bg-[#FCEAE4] text-[#B84E38]',
    'bg-[#F6EEDC] text-[#987A36]',
    'bg-[#E9EFE6] text-[#687A5B]',
    'bg-[#E6EFF5] text-[#42637D]',
];

get_header();
?>
<main>

  <?php /* ============================ HERO ============================ */
	 $hero       = get_field('hero') ?: [];
  $hero_title = $hero['title'] ?? '';
	 $b1 = op_link($hero['btn_primary'] ?? null, 'See available hours', '#');
  ?>
  <section class="relative w-full max-w-full overflow-hidden bg-brand-cream grid grid-cols-1 grid-rows-1 -mt-20 lg:-mt-[86px] min-h-[500px] lg:min-h-[700px]">
    <span class="[grid-area:1/1] relative w-full min-h-full lg:min-h-0 overflow-hidden">
      <?= op_img($hero['image'] ?? 0, 'assets/Our-psych/hero.webp', $hero_title, 'absolute inset-0 w-full h-full object-cover object-[25%_50%] lg:object-[100%_50%]', ['loading' => 'eager', 'fetchpriority' => 'high']) ?>
      <span class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent lg:hidden"></span>
    </span>

    <div class="px-4 md:px-12 lg:px-16 relative w-full [grid-area:1/1] place-self-center z-[2] bg-transparent pt-32 pb-10 lg:pt-[90px] lg:pb-[88px]">
      <div class="max-w-[1312px] mx-auto">
        <div class="max-w-full lg:max-w-[710px]">
          <h1 class="font-serif font-bold text-[#C24C33] mt-7 mb-0 text-[34px] leading-[1.25] md:text-[42px] lg:text-[48px] xl:text-[56px]">
            <?= esc_html($hero_title) ?>
          </h1>

          <?php if ($paras = op_lines($hero['text'] ?? '')) : ?>
            <div class="flex flex-col gap-[20px] text-lg lg:text-xl leading-[1.6] text-[#33170F] mt-[22px] mb-0">
              <?php foreach ($paras as $para) : ?><p><?= esc_html($para) ?></p><?php endforeach; ?>
            </div>
          <?php endif; ?>

          <div class="mt-8 w-full flex flex-col sm:flex-row items-start sm:items-center gap-4 lg:gap-5">
  			<a href="<?= esc_url($b1['url']) ?>"<?= op_target($b1) ?> class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 bg-[#C24C33] text-white rounded-full font-bold text-base transition hover:bg-opacity-90">
    			<?= esc_html($b1['title']) ?>
    			<span class="ml-2 inline-flex items-center"><img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/white-arrow-1.webp" alt="" aria-hidden="true" class="h-[20px] w-[12px] mt-0.5 object-contain" /></span>
  			</a>
  			
			</div>
        </div>
      </div>
    </div>
  </section>

  <?php /* ========================== FEATURES BAR ========================== */
  $features = (get_field('features') ?: [])['items'] ?? [];
  if ($features) : ?>
  <section class="section" data-reveal>
    <div class="container">
      <div class="flex flex-col md:flex-row items-center justify-between divide-y md:divide-y-0 md:divide-x divide-[#F2E8E3]">
        <?php foreach ($features as $f) :
          $ic = $feature_icons[$f['icon'] ?? 'badge'] ?? $feature_icons['badge']; ?>
          <div class="flex flex-col items-center text-center w-full md:flex-1 py-6 md:py-0 md:px-4">
            <div class="w-[48px] h-[48px] rounded-[14px] <?= $ic['bg'] ?> flex items-center justify-center mb-4">
              <svg class="w-[22px] h-[22px] <?= $ic['fg'] ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><?= $ic['svg'] ?></svg>
            </div>
            <h3 class="font-serif text-[17px] xl:text-[18px] text-[#241C19] font-bold mb-1.5"><?= esc_html($f['title'] ?? '') ?></h3>
            <p class="text-[#736862] text-[13px] xl:text-[14px]"><?= esc_html($f['text'] ?? '') ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php /* ================== PSYCHOLOGISTS DIRECTORY ================== */
  $dir   = get_field('directory') ?: [];
  $psys  = $dir['psychologists'] ?? [];
  $lbl = function ($key, $default) use ($dir) { return ($dir[$key] ?? '') ?: $default; };

  // Specialization filter options are built from the psychologists' own tags.
  $spec_options = [];
  foreach ($psys as $p) foreach (op_lines($p['specializations'] ?? '') as $s) $spec_options[sanitize_title($s)] = $s;

  $filter_selects = [
      ['spec', 'specialization', $lbl('label_specialization', 'Specialization'), $spec_options],
      ['avail', 'availability', $lbl('label_tilgjengelighet', 'Tilgjengelighet'), [
    	'morgen' => $lbl('opt_morgen', 'Morgen'),
    	'kveld'  => $lbl('opt_kveld', 'Kveld'),
    	'helg'   => $lbl('opt_helg', 'Helg'),
	]],	
      ['fmt', 'format', $lbl('label_format', 'Format'), [
          'in-person' => $lbl('opt_in_person', 'Personlig'), 'video' => $lbl('opt_video', 'Video'),
      ]],
     ['lang', 'language', $lbl('label_language', 'Language'), [
     'norsk'   => $lbl('opt_norsk', 'Norsk'),
    'svensk'  => $lbl('opt_svensk', 'Svensk'),
    'dansk'   => $lbl('opt_dansk', 'Dansk'),
    'engelsk' => $lbl('opt_engelsk', 'Engelsk'),
    'urdu'    => $lbl('opt_urdu', 'Urdu'),
    'polsk'   => $lbl('opt_polsk', 'Polsk'),
]],
  ];
  ?>
  <section id="psychologists-directory" class="section bg-[#FCF8F5]">
    <div class="container">
      <div class="section-head section-head--center mb-10">
        <h2 class="font-serif text-[36px] md:text-[48px] text-[#241C19] font-bold leading-[1.2] mb-4"><?= op_mark($dir['title'] ?? '') ?></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6]"><?= esc_html($dir['text'] ?? '') ?></p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-10" id="psychologist-filters">
        <?php foreach ($filter_selects as [$id, $attr, $label, $options]) : ?>
          <div class="relative">
            <select class="w-full appearance-none bg-white border border-[#EBE1DA] text-[#241C19] text-[15px] rounded-[12px] px-5 py-4 outline-none focus:border-[#C24C33] transition-colors" data-filter="<?= esc_attr($attr) ?>" aria-label="<?= esc_attr($label) ?>">
              <option value=""><?= esc_html($label) ?></option>
              <?php foreach ($options as $value => $text) : ?>
                <option value="<?= esc_attr($value) ?>"><?= esc_html($text) ?></option>
              <?php endforeach; ?>
            </select>
            <svg class="w-5 h-5 absolute right-4 top-1/2 -translate-y-1/2 text-[#A9A09A] pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </div>
        <?php endforeach; ?>
      </div>

      <?php if ($psys) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="psychologist-grid">
          <?php foreach ($psys as $p) :
            $specs = op_lines($p['specializations'] ?? '');
            $spec_slugs = implode(' ', array_map('sanitize_title', $specs));
            $formats   = implode(' ', (array) ($p['formats'] ?? []));
            $languages = implode(' ', (array) ($p['languages'] ?? []));
            $pl = op_link($p['link'] ?? null, '', '#');
            $name = $p['name'] ?? '';
          ?>
            <a href="<?= esc_url($pl['url']) ?>"<?= op_target($pl) ?> class="psy-filter-card bg-white rounded-[24px] overflow-hidden shadow-[0_4px_24px_rgba(0,0,0,0.04)] hover:shadow-[0_8px_32px_rgba(0,0,0,0.08)] transition-shadow border border-[#F2E8E3] block flex flex-col no-underline"
               data-specialization="<?= esc_attr($spec_slugs) ?>"
               data-availability="<?= esc_attr($p['availability'] ?? '') ?>"
               data-format="<?= esc_attr($formats) ?>"
               data-language="<?= esc_attr($languages) ?>">
              <div class="relative h-[300px] w-full bg-[#E5E7EB]">
                <?= op_img($p['photo'] ?? 0, '', $name, 'w-full h-full object-cover object-top', ['loading' => 'lazy', 'alt' => $name]) ?>
                <div class="absolute bottom-3 left-3 right-3 bg-[#FFFFFF33] backdrop-blur-[18px] border border-[#FFFFFF57] shadow-lg rounded-[12px] px-5 py-[12px] text-white">
                  <h3 class="font-serif text-[24px] font-bold mb-1 text-white"><?= esc_html($name) ?></h3>
                  <p class="text-[13px] opacity-90"><?= esc_html($p['role'] ?? '') ?></p>
                </div>
              </div>
              <div class="p-6 flex-1 flex flex-col">
                <?php if ($specs) : ?>
                  <div class="flex flex-wrap gap-2 mb-6">
                    <?php foreach ($specs as $i => $s) : ?>
                      <span class="px-3 py-1.5 rounded-full text-[12px] font-medium <?= $pill_colors[$i % count($pill_colors)] ?>"><?= esc_html($s) ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                <div class="mt-auto pt-4 flex items-center text-[#C24C33] font-medium text-[15px]">
                  <?= esc_html($lbl('profile_label', 'View profile')) ?>
                  <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php /* ========================== HOW IT WORKS ========================== */
  $how   = get_field('how') ?: [];
  $steps = $how['steps'] ?? [];
  ?>
  <section class="section bg-[#F8EBE2]">
    <div class="container" data-reveal>
      <div class="text-center max-w-[700px] mx-auto mb-12 md:mb-16">
        <h2 class="font-serif font-bold text-[#241C19] text-[36px] md:text-[48px] mb-4"><?= op_mark($how['title'] ?? '') ?></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6] m-0"><?= esc_html($how['text'] ?? '') ?></p>
      </div>

      <?php if ($steps) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
          <?php foreach ($steps as $i => $s) : ?>
            <div class="bg-[#FFF7F3] border border-[#C24C3333] rounded-[24px] p-5">
              <div class="relative w-full h-[240px] md:h-[220px] lg:h-[210px] rounded-[16px] overflow-hidden mb-[22px]">
                <?= op_img($s['image'] ?? 0, '', $s['title'] ?? '', 'w-full h-full object-cover', ['loading' => 'lazy']) ?>
                <div class="absolute top-4 left-4 <?= $i === 0 ? 'bg-[#C24C33] text-white' : 'bg-white text-[#241C19]' ?> font-bold text-[13px] px-5 py-1.5 rounded-full">
                  <?= esc_html(sprintf('Trinn %02d', $i + 1)) ?>
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

  <?php /* ========================= PART OF THE TEAM ========================= */
  $team  = get_field('team') ?: [];
  $render_team_col = function ($items) {
      foreach ((array) $items as $it) : ?>
        <div class="flex gap-5 items-start">
          <div class="w-[52px] h-[52px] shrink-0">
            <?= op_img($it['icon'] ?? 0, '', '', 'w-full h-full object-contain', ['loading' => 'lazy', 'alt' => '']) ?>
          </div>
          <div class="text-[#6B5F5A] text-[15px] md:text-[16px] leading-[1.6] m-0"><?= wp_kses_post($it['text'] ?? '') ?></div>
        </div>
      <?php endforeach;
  };
  ?>
  <section class="section">
    <div class="container" data-reveal>
      <div class="text-center max-w-[800px] mx-auto mb-12 md:mb-16">
        <h2 class="font-serif font-bold text-[#241C19] text-[36px] md:text-[48px] mb-4"><?= op_mark($team['title'] ?? '', '', 'span') ?></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6] m-0"><?= op_mark($team['text'] ?? '', 'underline decoration-[#E8DDD7] underline-offset-4', 'span') ?></p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch">
        <div class="bg-white rounded-[24px] p-6 lg:p-8 border border-[#E8DDD7] flex flex-col gap-8 md:gap-12 justify-center">
          <?php $render_team_col($team['left_items'] ?? []); ?>
        </div>

        <div class="rounded-[24px] overflow-hidden h-[300px] lg:h-auto border border-[#E8DDD7] bg-[#F9F7F5]">
          <?= op_img($team['image'] ?? 0, 'assets/Our-psych/What you get as part of  the team.webp', $team['title'] ?? '', 'w-full h-full object-cover', ['loading' => 'lazy']) ?>
        </div>

        <div class="bg-white rounded-[24px] p-6 lg:p-8 border border-[#E8DDD7] flex flex-col gap-8 md:gap-12 justify-center">
          <?php $render_team_col($team['right_items'] ?? []); ?>
        </div>
      </div>
    </div>
  </section>

  <?php /* ============================ JOIN CTA ============================ */
  $join = get_field('join_cta') ?: [];
  $jb   = op_link($join['button'] ?? null, 'Apply here', '#');
  $cta_bg = 'background: radial-gradient(46% 62% at 92% 88%, rgba(240,147,103,0.14) 0%, rgba(240,147,103,0) 70%), radial-gradient(46% 62% at 8% 84%, rgba(248,216,212,0.55) 0%, rgba(248,216,212,0) 70%), radial-gradient(58% 74% at 50% 0%, rgba(248,235,226,0.9) 0%, rgba(248,235,226,0) 72%);';
  ?>
  <section data-reveal>
    <div class="container">
      <div class="rounded-[32px] px-8 py-12 md:py-20 md:px-[56px] shadow-sm flex flex-col md:flex-row items-center justify-between gap-10" style="<?= esc_attr($cta_bg) ?>">
        <div class="text-center md:text-left max-w-[662px]">
          <?php if (!empty($join['eyebrow'])) : ?>
            <span class="text-[#A93E28] text-[13px] md:text-[14px] font-bold tracking-[0.15em] uppercase mb-[18px] block"><?= esc_html($join['eyebrow']) ?></span>
          <?php endif; ?>
          <h2 class="font-serif text-[30px] md:text-[36px] text-[#241C19] mb-4 font-bold"><?= esc_html($join['title'] ?? '') ?></h2>
          <p class="text-[#6B5F5A] text-[15px] md:text-[20px] leading-[1.6] max-w-[620px] mx-auto md:mx-0 mb-8 font-normal"><?= esc_html($join['text'] ?? '') ?></p>
          <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
            <a href="<?= esc_url($jb['url']) ?>"<?= op_target($jb) ?> class="inline-flex items-center justify-center gap-2 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors">
              <?= esc_html($jb['title']) ?>
              <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/white-arrow-1.webp" alt="" aria-hidden="true" class="h-6 w-6 object-contain" />
            </a>
          </div>
        </div>
        <div class="shrink-0 max-w-full">
          <div class="w-[513px] max-w-full h-[280px]">
            <?= op_img($join['image'] ?? 0, 'assets/article/cta.webp', '', 'object-contain', ['loading' => 'lazy', 'alt' => '']) ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php /* ================= PRIVATE PRACTICE / EARNINGS ================= */
  $pr    = get_field('practice') ?: [];
  $pmin  = (float) ($pr['slider_min'] ?? 5);
  $pmax  = (float) ($pr['slider_max'] ?? 30);
  $pval  = (float) ($pr['slider_value'] ?? 20);
  $pct   = $pmax > $pmin ? max(0, min(100, round(($pval - $pmin) / ($pmax - $pmin) * 100, 1))) : 0;
  $pbtn  = op_link($pr['button'] ?? null, 'Get started', '#');
  ?>
  <section class="section" data-reveal>
    <div class="container">
      <div class="text-center mb-16">
        <h2 class="font-serif font-bold text-[#241C19] text-[36px] md:text-[48px] mb-4"><?= esc_html($pr['title'] ?? '') ?></h2>
        <p class="text-[#6B5F5A] text-[16px] md:text-[18px] leading-[1.6] m-0"><?= esc_html($pr['text'] ?? '') ?></p>
      </div>

      <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-[32px]">
        <div class="w-full lg:w-1/2 xl:w-[724px]">
          <h3 class="font-serif font-bold text-[#241C19] text-[28px] md:text-[36px] mb-4"><?= op_mark($pr['subtitle'] ?? '') ?></h3>
          <p class="text-[#6B5F5A] text-[16px] md:text-[20px] leading-[1.6] mb-8 pr-4"><?= esc_html($pr['subtext'] ?? '') ?></p>

          <div class="flex flex-col gap-6">
            <?php foreach ((array) ($pr['items'] ?? []) as $it) : ?>
              <div class="flex gap-4 items-center">
                <div class="w-[48px] h-[48px] shrink-0">
                  <?= op_img($it['icon'] ?? 0, '', '', 'w-full h-full object-contain', ['loading' => 'lazy', 'alt' => '']) ?>
                </div>
                <p class="text-[#4E403B] text-[16px] md:text-[20px] m-0"><?= op_mark($it['text'] ?? '', '', 'strong') ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="w-full lg:w-1/2 xl:w-[560px]">
          <div class="bg-[linear-gradient(359.97deg,rgba(248,216,212,0.64)_2.93%,rgba(248,235,226,0.09)_99.95%)] border border-[#C24C3333] rounded-[12px] p-8 md:p-[48px] shadow-sm flex flex-col items-center">
            <h3 class="font-serif font-bold text-[#241C19] text-[20px] md:text-[22px] mb-8 text-center"><?= esc_html($pr['card_title'] ?? '') ?></h3>

            <div class="flex bg-white rounded-full p-1.5 shadow-sm border border-[#F2E8E3] mb-12 w-fit relative">
              <button type="button" class="bg-[#C24C33] text-white px-8 py-2 rounded-full text-[14px] font-bold shadow-sm transition-all z-10 relative"><?= esc_html(($pr['tab_full'] ?? '') ?: 'Full time') ?></button>
              <button type="button" class="text-[#6B5F5A] px-8 py-2 rounded-full text-[14px] font-bold hover:text-[#241C19] transition-all z-10 relative"><?= esc_html(($pr['tab_part'] ?? '') ?: 'Part-time') ?></button>
            </div>

            <div class="w-full mb-10 relative">
              <div class="flex justify-center mb-4 text-[#6B5F5A] text-[14px] font-medium absolute w-full -top-6">
                <span class="-translate-x-1/2 absolute" style="left: <?= esc_attr($pct) ?>%"><?= esc_html(rtrim(rtrim(number_format($pval, 1, '.', ''), '0'), '.')) ?></span>
              </div>
              <div class="relative w-full h-2.5 bg-[#F2E8E3] rounded-full mt-8">
                <div class="absolute left-0 top-0 h-full bg-[#C24C33] rounded-full" style="width: <?= esc_attr($pct) ?>%"></div>
                <div class="absolute top-1/2 -translate-y-1/2 w-[22px] h-[22px] bg-white rounded-full shadow border border-[#E8DDD7] -ml-3 cursor-pointer" style="left: <?= esc_attr($pct) ?>%"></div>
              </div>
              <div class="flex justify-between items-center mt-3 text-[#6B5F5A] text-[13px] font-medium">
                <span><?= esc_html(rtrim(rtrim(number_format($pmin, 1, '.', ''), '0'), '.')) ?></span>
                <span><?= esc_html($pr['slider_unit'] ?? '') ?></span>
                <span><?= esc_html(rtrim(rtrim(number_format($pmax, 1, '.', ''), '0'), '.')) ?></span>
              </div>
            </div>

            <div class="flex justify-between items-end w-full mb-10 border-t border-[#F2E8E3] pt-6">
              <span class="text-[#241C19] text-[15px] font-bold leading-[1.4] max-w-[120px]"><?= esc_html($pr['earnings_label'] ?? '') ?></span>
              <span class="text-[#C24C33] text-[24px] md:text-[28px] font-bold"><?= esc_html($pr['earnings_value'] ?? '') ?></span>
            </div>

            <a href="<?= esc_url($pbtn['url']) ?>"<?= op_target($pbtn) ?> class="bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] px-[32px] py-[14px] rounded-full transition-colors flex items-center justify-center gap-2 no-underline">
              <?= esc_html($pbtn['title']) ?>
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php /* =========================== REQUIREMENTS =========================== */
  $req = get_field('requirements') ?: [];
  ?>
  <section class="section pt-10 pb-20" data-reveal>
    <div class="container">
      <div class="mb-12">
        <h2 class="font-serif font-bold text-[#241C19] text-[32px] md:text-[40px] mb-4"><?= esc_html($req['title'] ?? '') ?></h2>
        <p class="text-[#5B5B5B] text-[15px] md:text-[20px] leading-[1.6]"><?= esc_html($req['text'] ?? '') ?></p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-8">
        <?php foreach ((array) ($req['items'] ?? []) as $it) : ?>
          <div class="flex gap-5 items-start">
            <div class="w-[52px] h-[52px] shrink-0">
              <?= op_img($it['icon'] ?? 0, '', '', 'w-full h-full object-contain', ['loading' => 'lazy', 'alt' => '']) ?>
            </div>
            <p class="text-[#4E403B] text-[16px] md:text-[20px] m-0"><?= esc_html($it['text'] ?? '') ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php /* ============================== FAQ ============================== */
  $faqg    = get_field('faq') ?: [];
  $faq     = $faqg['items'] ?? [];
  $faq_cta = op_link($faqg['cta'] ?? null, 'Book a time', '#');
  $faq_ask = op_link($faqg['ask_link'] ?? null, 'Ask Your Own Question', '#mh-book');
  ?>
  <section id="mh-faq" class="section bg-[#FFF7F3] mb-[64px]">
    <div class="container" data-reveal>
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

        <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-6">
          <div>
            <span class="text-[#C24C33] text-[11px] font-bold tracking-widest uppercase mb-3 block"><?= esc_html(($faqg['eyebrow'] ?? '') ?: 'FAQS') ?></span>
            <h2 id="faq" class="h2 mb-4"><?= op_mark($faqg['title'] ?? '', '') ?></h2>
            <p class="text-[16px] leading-[26px] text-[#6B5F5A] m-0 max-w-[420px]"><?= esc_html($faqg['text'] ?? '') ?></p>
            
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

            <a href="<?= esc_url($faq_ask['url']) ?>"<?= op_target($faq_ask) ?> class="bg-[#C24C33] hover:bg-[#B34A34] text-white font-sans font-bold text-[14px] py-3 px-6 rounded-full transition-colors inline-flex items-center gap-2 cursor-pointer w-fit border-0 no-underline">
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
                <p class="text-[16px] leading-[26px] text-[#6B5F5A] m-0"><?= esc_html($item['answer'] ?? '') ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </section>

  <?php /* ============================ FINAL CTA ============================ */
  $fin = get_field('final_cta') ?: [];
  $fb  = op_link($fin['button'] ?? null, 'Book appointment', '#');
  ?>
  <section class="pb-[60px]" data-reveal>
    <div class="container">
      <div class="rounded-[32px] px-8 py-12 md:py-20 md:px-[56px] shadow-sm flex flex-col md:flex-row items-center justify-between gap-10" style="<?= esc_attr($cta_bg) ?>">
        <div class="text-center md:text-left max-w-[662px]">
          <h2 class="font-serif text-[30px] md:text-[36px] text-[#241C19] mb-4 font-bold"><?= esc_html($fin['title'] ?? '') ?></h2>
          <p class="text-[#6B5F5A] text-[15px] md:text-[20px] leading-[1.6] max-w-[620px] mx-auto md:mx-0 mb-8 font-normal"><?= esc_html($fin['text'] ?? '') ?></p>
          <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
            <a href="<?= esc_url($fb['url']) ?>"<?= op_target($fb) ?> class="inline-flex items-center justify-center gap-2 bg-[#C24C33] hover:bg-[#A93E28] text-white font-bold text-[15px] px-[24px] py-[12px] rounded-full transition-colors">
              <?= esc_html($fb['title']) ?>
              <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/white-arrow-1.webp" alt="" aria-hidden="true" class="h-6 w-6 object-contain" />
            </a>
          </div>
        </div>
        <div class="shrink-0 max-w-full">
          <div class="w-[386px] max-w-full h-[247px]">
            <?= op_img($fin['image'] ?? 0, 'assets/Our-psych/cta.webp', '', 'object-contain', ['loading' => 'lazy', 'alt' => '']) ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php /* Directory filters. Remove if your global JS already handles #psychologist-filters. */ ?>


<?php get_footer(); ?>