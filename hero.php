<?php
/* Template Name: Home Page */
get_header();


if (!function_exists('psy_img_url')) {
  function psy_img_url($field)
  {
    if (empty($field))
      return '';
    if (is_array($field)) {
      return $field['url'] ?? '';
    }
    if (is_object($field)) {
      return $field->url ?? '';
    }
    return $field;
  }
}

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
$s17 = get_field('section_17');
?>
<main>

  <!-- SECTION 1: HERO -->
 <section id="home-hero" class="hero">
    <video class="hero__video" autoplay muted loop playsinline preload="auto" 
      <?php if (!empty($s1['hero_poster'])): ?>
        poster="<?php echo esc_url(psy_img_url($s1['hero_poster'])); ?>" 
      <?php endif; ?> 
      aria-label="A woman standing on the shore at sunset, breathing">
      
      <!-- Small Screen Video (Mobile - max 768px width) -->
      <source media="(max-width: 768px)" src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/09/VIDEO-2026-09-23-14-55-52.mp4" type="video/mp4">

      <!-- Large Screen Video (Desktop - min 769px width) -->
      <?php if (!empty($s1['hero_video_url'])): ?> 
        <source media="(min-width: 769px)" src="<?php echo esc_url(psy_img_url($s1['hero_video_url'])); ?>" type="video/mp4">
      <?php endif; ?>
    </video>

    <span class="hero__blur"></span>
    <span class="hero__tint"></span>
    <span class="hero__glow"></span>
    <span class="hero__bottom-fade"></span>

    <div class="container hero__inner">
      <div class="hero__badge">
        <span class="hero__badge-dot">✳</span>
        <span><?php echo esc_html($s1['badge_text']); ?></span>
      </div>

      <div class="hero__grid">
        <h1 class="hero__title">
          <?php echo esc_html($s1['heading']); ?> <em><?php echo esc_html($s1['heading_highlight']); ?></em>
        </h1>

        <div class="hero__copy">
          <p><?php echo wp_kses_post($s1['description']); ?></p>

          <div class="hero__cta-row">
            <?php if (!empty($s1['primary_button_text'])): ?>
              <a href="<?php echo esc_url($s1['primary_button_url']); ?>" class="btn btn--primary btn--lg">
                <?php echo esc_html($s1['primary_button_text']); ?>
              </a>
            <?php endif; ?>
            <?php if (!empty($s1['secondary_button_text'])): ?>
              <a href="<?php echo esc_url($s1['secondary_button_url']); ?>" class="btn btn--glass btn--lg">
                <?php echo esc_html($s1['secondary_button_text']); ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <?php if (!empty($s1['stats'])): ?>
        <div class="hero__stats">
          <?php foreach ($s1['stats'] as $stat): ?>
            <div class="hero__stat">
              <?php if (!empty($stat['stat_icon'])): ?>
                <img src="<?php echo esc_url(psy_img_url($stat['stat_icon'])); ?>"
                  alt="<?php echo esc_attr($stat['stat_alt']); ?>" class="hero__stat-icon">
              <?php endif; ?>
              <span>
                <span class="hero__stat-n"><?php echo esc_html($stat['stat_number']); ?></span>
                <span class="hero__stat-l"><?php echo esc_html($stat['stat_label']); ?></span>
              </span>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
</section>
	
  <!-- SECTION 2: SIGNS -->
  <section id="home-signs" class="section section--peach">
    <div class="container">
      <div class="grid">
        <div class="signs__intro" data-reveal>
          <h2 class="h2"><?php echo wp_kses_post($s2['heading']); ?></h2>
          <div class="signs__intro__para"><?php echo wp_kses_post($s2['paragraph']); ?></div>

          <?php if (!empty($s2['button_text'])): ?>
            <div class="mt-12">
              <a href="<?php echo esc_url($s2['button_url'] ?: '#'); ?>" type="button"
                class="btn btn--primary"><?php echo esc_html($s2['button_text']); ?></a>
            </div>
          <?php endif; ?>
        </div>

        <div class="signs__panel" data-reveal>
          <?php if (!empty($s2['signs_list'])): ?>
            <div class="signs__list" id="signsList">
              <?php $i = 0;
              foreach ($s2['signs_list'] as $item): ?>
                <button type="button" class="signs__item" data-sign="<?php echo $i; ?>">
                  <span class="signs__chip">
                    <img class="icon" src="<?php echo esc_url($item['icon']); ?>" alt="Icon">
                  </span>
                  <span class="signs__text"><?php echo esc_html($item['sign_text']); ?></span>
                  <span class="signs__check">✓</span>
                </button>
                <?php $i++; endforeach; ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($s2['panel_note'])): ?>
            <p class="signs__note" id="signsNote"><?php echo esc_html($s2['panel_note']); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: AM I IN THE RIGHT PLACE -->
  <section id="home-right-place" class="section section--white section--center">
    <div class="container">
      <div class="eyebrow" data-reveal>
        <span class="eyebrow__dot">
          <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
        </span>
        <span><?php echo esc_html($s3['eyebrow_text']); ?></span>
      </div>

      <h2 class="h2-italic" data-reveal>
        <?php echo esc_html($s3['heading']); ?> <em><?php echo esc_html($s3['heading_highlight']); ?></em>
      </h2>

      <p class="lede lede--wide" data-reveal><?php echo esc_html($s3['description']); ?></p>

      <div class="compare" data-reveal>
        <div class="compare__table" id="compareTable">
          <div class="compare__row compare__row--head">
            <span class="compare__col--empty"></span>
            <span class="compare__col compare__col--psy"
              data-col="psykolog"><?php echo esc_html($s3['comparison_column_1_title']); ?></span>
            <span class="compare__col"
              data-col="psykiater"><?php echo esc_html($s3['comparison_column_2_title']); ?></span>
          </div>

          <?php if (!empty($s3['comparison_rows'])):
            foreach ($s3['comparison_rows'] as $row): ?>
              <div class="compare__row">
                <span class="compare__label">
                  <?php if (!empty($row['row_icon'])): ?>
                    <span class="icon-circle">
                      <img src="<?php echo esc_url(psy_img_url($row['row_icon'])); ?>" class="icon"
                        alt="<?php echo esc_attr($row['row_label']); ?>">
                    </span>
                  <?php endif; ?>
                  <?php echo esc_html($row['row_label']); ?>
                </span>
                <span class="compare__cell" data-col="psykolog"><?php echo esc_html($row['column_1_value']); ?></span>
                <span class="compare__cell" data-col="psykiater"><?php echo esc_html($row['column_2_value']); ?></span>
              </div>
            <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: WHO WE HELP -->
  <section id="who-we-help-section">
    <div class="container">
      <div class="wwh-header" data-reveal>
        <div class="wwh-header__media">
          <?php if (!empty($s4['header_image'])): ?>
            <img src="<?php echo esc_url(psy_img_url($s4['header_image'])); ?>"
              alt="<?php echo esc_attr($s4['title']); ?>" class="wwh-image" loading="lazy">
          <?php endif; ?>
          <?php if (!empty($s4['header_image_tag'])): ?>
            <span class="wwh-image-tag"><?php echo esc_html($s4['header_image_tag']); ?></span>
          <?php endif; ?>
        </div>

        <div class="wwh-header__content">
          <div class="wwh-badge">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
            <span class="wwh-badge__text"><?php echo esc_html($s4['badge_text']); ?></span>
          </div>


          <h2 class="wwh-title">
            <?php echo esc_html($s4['title']); ?> <em><?php echo esc_html($s4['title_highlight']); ?></em>
          </h2>

          <p class="wwh-description"><?php echo esc_html($s4['description']); ?></p>

          <?php if (!empty($s4['pills'])): ?>
            <div class="wwh-pills">
              <?php foreach ($s4['pills'] as $pill_item): ?>
                <span class="wwh-pill"><?php echo esc_html($pill_item['pill_text']); ?></span>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($s4['button_text'])): ?>
            <a href="<?php echo esc_url($s4['button_url'] ?: '#'); ?>"
              class="btn btn--primary btn--lg"><?php echo esc_html($s4['button_text']); ?></a>
          <?php endif; ?>
        </div>
      </div>

      <?php if (!empty($s4['audience_cards'])): ?>
        <div class="audience-grid" data-reveal>
          <?php $i = 0;
          foreach ($s4['audience_cards'] as $card): ?>
            <div class="audience-card" data-audience="<?php echo $i; ?>">
              <span class="icon-circle">
                <?php if (($card['icon_type'] ?? 'image') === 'svg' && !empty($card['icon_name'])): ?>
                  <svg class="icon" data-icon="<?php echo esc_attr($card['icon_name']); ?>"></svg>
                <?php elseif (!empty($card['icon_image'])): ?>
                  <img src="<?php echo esc_url(psy_img_url($card['icon_image'])); ?>"
                    alt="<?php echo esc_attr($card['title']); ?>" class="icon">
                <?php endif; ?>
              </span>
              <h3><?php echo esc_html($card['title']); ?></h3>
              <p><?php echo esc_html($card['description']); ?></p>
            </div>
            <?php $i++; endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- SECTION 5: SHORT WAITING TIME -->
  <section id="home-short-wait" class="section section--rose">
    <div class="container">
      <div class="split split--stretch">
        <div class="intro-video" data-reveal>
          <?php if (!empty($s5['video_poster_image'])): ?>
            <img src="<?php echo esc_url(psy_img_url($s5['video_poster_image'])); ?>"
              alt="<?php echo esc_attr($s5['presenter_name']); ?>" class="intro-video__img">
          <?php endif; ?>
          <span class="intro-video__scrim"></span>

         
        </div>

        <div data-reveal>
          <div class="eyebrow">
            <span class="eyebrow__dot">
              <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
            </span>
            <span><?php echo esc_html($s5['eyebrow_text']); ?></span>
          </div>

          <h2 class="h2-italic">
            “<?php echo esc_html($s5['heading']); ?>” <i><?php echo esc_html($s5['heading_highlight']); ?></i>
          </h2>

          <div class="paragraph"><?php echo wp_kses_post($s5['description_paragraph']); ?></div>

          <!--           <?php if (!empty($s5['stats'])): ?>
            <div class="stats-row">
              <?php foreach ($s5['stats'] as $stat): ?>
                <div class="stat-item">
                  <span class="stat-number"><?php echo esc_html($stat['stat_number']); ?></span>
                  <span class="stat-label"><?php echo esc_html($stat['stat_label']); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?> -->

          <?php if (!empty($s5['button_text'])): ?>
            <div class="mt-10">
              <a href="<?php echo esc_url($s5['button_url'] ?: '#'); ?>"
                class="btn btn--primary"><?php echo esc_html($s5['button_text']); ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: HOW IT WORKS -->
  <section id="home-hiw" class="section section--white">
    <div class="container">
      <div class="section-head section-head--center">
        <div class="eyebrow">
          <span class="eyebrow__dot">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
          </span>
          <span><?php echo esc_html($s6['eyebrow_text']); ?></span>
        </div>

        <h2 class="h2">
          <?php echo esc_html($s6['heading_prefix']); ?>
          <span class="heading-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </span>
          <em><?php echo esc_html($s6['heading_highlight']); ?></em>
        </h2>

        <p class="lede"><?php echo esc_html($s6['description']); ?></p>
      </div>

      <?php if (!empty($s6['steps'])): ?>
        <div class="hiw" id="hiwList">
          <?php $i = 0;
          foreach ($s6['steps'] as $step): ?>
            <article class="hiw__step<?php echo $i === 0 ? ' is-active' : ''; ?>" data-hiw="<?php echo $i; ?>">
              <div class="hiw__media">
                <?php if (!empty($step['step_image'])): ?>
                  <img src="<?php echo esc_url(psy_img_url($step['step_image'])); ?>"
                    alt="<?php echo esc_attr($step['title']); ?>" loading="lazy">
                <?php endif; ?>
                <?php if (!empty($step['step_tag'])): ?>
                  <span class="hiw__step-tag"><?php echo esc_html($step['step_tag']); ?></span>
                <?php endif; ?>
              </div>
              <div class="hiw__body">
                <h3><?php echo esc_html($step['title']); ?></h3>
                <p><?php echo esc_html($step['description']); ?></p>
                <?php if (!empty($step['button_text'])): ?>
                  <a href="<?php echo esc_url($step['button_url'] ?: '#'); ?>"
                    class="btn btn--primary"><?php echo esc_html($step['button_text']); ?> →</a>
                <?php endif; ?>
              </div>
            </article>
            <?php $i++; endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- SECTION 7: CONDITIONS -->
  <section id="home-conditions" class="section section--rose">
    <div class="container">
      <div class="section-head section-head--center">
        <div class="eyebrow">
          <span class="eyebrow__dot">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
          </span>
          <span><?php echo esc_html($s7['eyebrow_text']); ?></span>
        </div>

        <h2 class="h2">
          <?php echo esc_html($s7['heading']); ?> <em><?php echo esc_html($s7['heading_highlight']); ?></em>
        </h2>

        <div class="lede"><?php echo wp_kses_post($s7['description']); ?></div>
      </div>

      <?php if (!empty($s7['condition_cards'])): ?>
        <div class="cond-grid" id="condGrid">
          <?php $i = 0;
          foreach ($s7['condition_cards'] as $card):
            $cat_key = is_array($card['category_key']) ? ($card['category_key']['value'] ?? reset($card['category_key'])) : ($card['category_key'] ?? 'worry');
            ?>
            <a href="<?php echo esc_url($card['card_url'] ?: '#'); ?>" class="cond-card"
              data-cat="<?php echo esc_attr($cat_key); ?>" data-cond="<?php echo $i; ?>">
              <?php if (!empty($card['icon'])): ?>
                <span class="icon-circle">
                  <img src="<?php echo esc_url(psy_img_url($card['icon'])); ?>" alt="<?php echo esc_attr($card['title']); ?>"
                    class="icon">
                </span>
              <?php endif; ?>

              <h3><?php echo esc_html($card['title']); ?></h3>
              <p><?php echo esc_html($card['description']); ?></p>


            </a>
            <?php $i++; endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="accordion" id="allCondAccordion">
        <button type="button" class="accordion__trigger" id="allCondToggle">
          <span><?php echo esc_html($s7['accordion_button_text'] ?: 'See all disorders'); ?></span>
          <svg class="icon accordion__chevron" data-icon="chevron-down"></svg>
        </button>
        <div class="accordion__panel" id="allCondPanel">
          <div class="accordion__panel-inner">
            <?php if (!empty($s7['all_disorders_list'])): ?>
              <div class="all-cond-list">
                <?php foreach ($s7['all_disorders_list'] as $item): ?>
                  <a href="<?php echo esc_url($item['url'] ?: '#'); ?>"><?php echo esc_html($item['title']); ?></a>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: THERAPY FORMATS -->
  <section id="home-formats" class="section section--white">
    <div class="container">
      <div class="section-head--center">
        <div class="eyebrow"><span class="eyebrow__dot">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
          </span><span><?php echo esc_html($s8['eyebrow_text']); ?></span></div>

        <h2 class="h2">
          <?php echo esc_html($s8['heading']); ?> <em><?php echo esc_html($s8['heading_highlight']); ?></em>
        </h2>

        <p class="lede"><?php echo esc_html($s8['description']); ?></p>
      </div>

      <?php if (!empty($s8['format_items'])): ?>
        <div class="formats">
          <div class="formats__list" id="formatsList">
            <?php $i = 0;
            foreach ($s8['format_items'] as $item): ?>
              <button type="button" class="formats__item<?php echo $i === 0 ? ' is-active' : ''; ?>"
                data-format="<?php echo $i; ?>" data-chip="<?php echo esc_attr($item['chip_text']); ?>"
                data-title="<?php echo esc_attr($item['name']); ?>"
                data-desc="<?php echo esc_attr($item['description']); ?>">
                <?php if (!empty($item['icon'])): ?>
                  <span class="icon-circle"><img src="<?php echo esc_url(psy_img_url($item['icon'])); ?>"
                      alt="<?php echo esc_attr($item['name']); ?>"></span>
                <?php endif; ?>
                <span class="formats__name"><?php echo esc_html($item['name']); ?></span>
                <span class="formats__arrow">→</span>
              </button>
              <?php $i++; endforeach; ?>

            <?php if (!empty($s8['footer_note'])): ?>
              <p class="formats__note"><?php echo esc_html($s8['footer_note']); ?></p>
            <?php endif; ?>
          </div>

          <div class="formats__preview" id="formatsPreview">
            <?php $i = 0;
            foreach ($s8['format_items'] as $item): ?>
              <?php if (!empty($item['preview_image'])): ?>
                <img src="<?php echo esc_url(psy_img_url($item['preview_image'])); ?>"
                  alt="<?php echo esc_attr($item['name']); ?>" data-format-img="<?php echo $i; ?>" <?php echo $i === 0 ? ' class="is-active"' : ''; ?>>
              <?php endif; ?>
              <?php $i++; endforeach;

            $first_item = reset($s8['format_items']);
            ?>

            <span class="formats__preview-scrim"></span>

            <div class="formats__preview-caption">
              <span class="chip" id="formatsChip"><?php echo esc_html($first_item['chip_text']); ?></span>
              <h3 id="formatsTitle"><?php echo esc_html($first_item['name']); ?></h3>
              <p id="formatsDesc"><?php echo esc_html($first_item['description']); ?></p>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- SECTION 9: PSYCHOTHERAPIES -->
  <section id="home-psychotherapies" class="section section--rose">
    <div class="container">
      <div class="section-head--center">
        <div class="eyebrow"><span class="eyebrow__dot">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
          </span><span><?php echo esc_html($s9['eyebrow_text']); ?></span></div>

        <h2 class="h2">
          <?php echo esc_html($s9['heading']); ?> <em><?php echo esc_html($s9['heading_highlight']); ?></em>
        </h2>

        <p class="lede"><?php echo esc_html($s9['description']); ?></p>
      </div>

      <?php if (!empty($s9['method_cards'])): ?>
        <div class="method-grid">
          <?php $i = 0;
          foreach ($s9['method_cards'] as $card): ?>
            <div class="method-card" data-method="<?php echo $i; ?>">
              <?php if (!empty($card['image'])): ?>
                <span class="method-card__media">
                  <img src="<?php echo esc_url(psy_img_url($card['image'])); ?>" alt="<?php echo esc_attr($card['title']); ?>"
                    loading="lazy">
                </span>
              <?php endif; ?>

              <div class="method-card__body">
                <h3><?php echo esc_html($card['title']); ?></h3>
                <p><?php echo esc_html($card['description']); ?></p>
              </div>
            </div>
            <?php $i++; endforeach; ?>
        </div>
      <?php endif; ?>

      <button type="button" class="accordion__trigger accordion__trigger--pill" id="moreTxToggle">
        <span><?php echo esc_html($s9['toggle_button_text'] ?: 'Read about more therapies'); ?></span>
        <svg class="icon accordion__chevron" data-icon="chevron-down"></svg>
      </button>

      <div class="accordion" id="moreTxAccordion">
        <div class="accordion__panel" id="moreTxPanel">
          <div class="accordion__panel-inner">
            <?php if (!empty($s9['more_therapies_tags'])): ?>
              <div class="tag-row">
                <?php foreach ($s9['more_therapies_tags'] as $tag_item): ?>
                  <span class="tags"><?php echo esc_html($tag_item['tag_name']); ?></span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 10: PSYCHOLOGISTS -->
<?php
if (!isset($s10) || !is_array($s10)) {
    $s10 = $all_fields['section_10'] ?? [];
}
$lesmer_content    = $s10['lesmer_content'] ?? '';
$has_lesmer        = !empty($lesmer_content);
$lesmer_card_index = 2; // teesra card (0, 1, 2). Zarurat ho to badal do
?>

<section id="home-psychologists" class="section section--white">
  <div class="container">

    <div class="section-head section-head--center">
      <div class="eyebrow">
        <span class="eyebrow__dot">
          <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
        </span>
        <span><?php echo esc_html($s10['eyebrow_text'] ?? ''); ?></span>
      </div>

      <h2 class="h2">
        <?php echo esc_html($s10['heading'] ?? ''); ?>
        <em><?php echo esc_html($s10['heading_highlight'] ?? ''); ?></em>
      </h2>

      <p class="lede"><?php echo esc_html($s10['description'] ?? ''); ?></p>
    </div>

    <?php if (!empty($s10['psychologists'])): ?>
      <div class="grid">
        <?php foreach ($s10['psychologists'] as $psy_i => $psy):
          $is_lesmer_card = $has_lesmer && ((int) $psy_i === $lesmer_card_index);
        ?>
          <div class="psy-card">

            <div class="psy-card__media">
              <?php if (!empty($psy['profile_image'])): ?>
                <img src="<?php echo esc_url(psy_img_url($psy['profile_image'])); ?>"
                     alt="<?php echo esc_attr($psy['name'] ?? ''); ?>" loading="lazy">
              <?php endif; ?>
              <div class="psy-card__id">
                <h3><?php echo esc_html($psy['name'] ?? ''); ?></h3>
                <p><?php echo esc_html($psy['designation'] ?? ''); ?></p>
              </div>
            </div>

            <?php if (!empty($psy['tags'])): ?>
              <div class="tag-row">
                <?php foreach ($psy['tags'] as $tag_item): ?>
                  <span class="tag"><?php echo esc_html($tag_item['tag_name'] ?? ''); ?></span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <div class="psy-card__actions">
              <a href="<?php echo esc_url(!empty($psy['button_link']) ? $psy['button_link'] : '#'); ?>" class="psy-card__link">
                <?php echo esc_html(!empty($psy['button']) ? $psy['button'] : 'Vis profil'); ?>
                <span class="psy-card__arrow">→</span>
              </a>

              <a href="<?php echo $is_lesmer_card ? '#' : esc_url(!empty($psy['second_button_link']) ? $psy['second_button_link'] : '#'); ?>"
                 class="psy-card__btn<?php echo $is_lesmer_card ? ' lesmer-btn' : ''; ?>">
                <?php echo esc_html(!empty($psy['second_button']) ? $psy['second_button'] : 'Bestill time'); ?>
                <span class="psy-card__arrow">→</span>
              </a>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($s10['button_text'])): ?>
      <div class="text-center mt-10">
        <a href="<?php echo esc_url(!empty($s10['button_link']) ? $s10['button_link'] : '#'); ?>"
           class="btn btn--primary btn--lg">
          <?php echo esc_html($s10['button_text']); ?>
        </a>
      </div>
    <?php endif; ?>

  </div>

  <?php if ($has_lesmer): ?>
    <div class="lesmer-open" role="dialog" aria-modal="true">
      <div class="lesmer-modal">
        <button type="button" class="lesmer-close" aria-label="Lukk">✕</button>
        <div class="lesmer-content">
          <?php echo wp_kses_post($lesmer_content); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
	
	
  <!-- SECTION 11: PRICING -->
  <section id="home-pricing" class="section--white">
    <div class="container">
      <div class="pricing-layout">
        <div class="pricing-info">
          <span class="pricing-eyebrow"><?php echo esc_html($s11['eyebrow_text']); ?></span>
          <h2 class="h2"><?php echo esc_html($s11['heading']); ?></h2>
          <p class="lede"><?php echo esc_html($s11['description']); ?></p>
        </div>

        <?php if (!empty($s11['pricing_cards'])): ?>
          <div class="price-grid" id="priceGrid">
            <?php $i = 0;
            foreach ($s11['pricing_cards'] as $card):
              $is_active = !empty($card['is_active']);
              $card_class = $is_active ? 'price-card price-card--active' : 'price-card';
              $icon_class = $is_active ? 'price-card__icon price-card__icon--light' : 'price-card__icon';
              $btn_class = $is_active ? 'btn btn--light' : 'btn btn--dark';
              ?>
              <div class="<?php echo esc_attr($card_class); ?>" data-price="<?php echo $i; ?>">
                <?php if (!empty($card['icon'])): ?>
                  <div class="<?php echo esc_attr($icon_class); ?>">
                    <img src="<?php echo esc_url(psy_img_url($card['icon'])); ?>" class="icon"
                      alt="<?php echo esc_attr($card['title']); ?> Icon">
                  </div>
                <?php endif; ?>

                <h3><?php echo esc_html($card['title']); ?></h3>

                <div class="price-card__amount">
                  <span class="price-card__label"><?php echo esc_html($card['label'] ?: 'From'); ?></span>
                  <strong><?php echo esc_html($card['amount']); ?></strong>
                  <span class="price-card__sub"><?php echo esc_html($card['subtext']); ?></span>
                </div>

                <p><?php echo esc_html($card['description']); ?></p>

                <a href="<?php echo esc_url($card['button_link'] ?: '#'); ?>"
                  class="<?php echo esc_attr($btn_class); ?>"><?php echo esc_html($card['button_text'] ?: 'See Pricing'); ?></a>
              </div>
              <?php $i++; endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- SECTION 12: GIFT CARD -->
  <section id="home-gift" class="section section--peach">
    <div class="container">
      <div class="gift-split">
        <div class="gift-media-col" data-reveal>
          <?php if (!empty($s12['card_image'])): ?>
            <div class="gift-card__media">
              <img src="<?php echo esc_url(psy_img_url($s12['card_image'])); ?>" alt="Psykolog.no gift card"
                loading="lazy">
            </div>
          <?php endif; ?>

          <?php if (!empty($s12['check_highlights'])): ?>
            <div class="checks">
              <?php foreach ($s12['check_highlights'] as $highlight): ?>
                <div class="check-list__item">
                  <span class="check-list__mark">✓</span>
                  <span><?php echo esc_html($highlight['text']); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="gift-content-col" data-reveal>
          <div class="eyebrow">
            <span class="eyebrow__dot">
              <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
            </span>
            <span><?php echo esc_html($s12['eyebrow_text']); ?></span>
          </div>

          <h2 class="h2-italic">
            <?php echo esc_html($s12['heading']); ?> <em><?php echo esc_html($s12['heading_highlight']); ?></em>
          </h2>

          <p class="lede"><?php echo esc_html($s12['description']); ?></p>

          <?php if (!empty($s12['button_text'])): ?>
            <div class="mt-30">
              <a href="<?php echo esc_url($s12['button_link'] ?: '#'); ?>"
                class="btn btn--primary btn--lg"><?php echo esc_html($s12['button_text']); ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 13: LOCATIONS -->
  <?php
  $initial_map_url = '';
  $initial_map_tag = '';
  ?>
  <section id="home-locations" class="section section--rose">
    <div class="container">
      <div class="section-head section-head--center">
        <div class="eyebrow">
          <span class="eyebrow__dot">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
          </span>
          <span><?php echo esc_html($s13['eyebrow_text']); ?></span>
        </div>

        <h2 class="h2"><?php echo esc_html($s13['heading']); ?></h2>
        <p class="lede"><?php echo esc_html($s13['description']); ?></p>
      </div>

      <div class="locations">
        <div class="locations__list" id="clinicList">

          <?php if (!empty($s13['clinics'])):
            $i = 0;
            foreach ($s13['clinics'] as $clinic):
              if ($i === 0) {
                $initial_map_url = $clinic['map_embed_url'];
                $initial_map_tag = $clinic['map_tag'];
              }
              ?>
              <div class="clinic-card <?php echo $i === 0 ? 'is-active' : ''; ?>" data-clinic="<?php echo $i; ?>"
                data-map-src="<?php echo esc_url($clinic['map_embed_url'] ?? ''); ?>"
                data-map-tag="<?php echo esc_attr($clinic['map_tag'] ?? ''); ?>"
                data-name="<?php echo esc_attr($clinic['clinic_name'] ?? ''); ?>"
                data-button-text="<?php echo esc_attr($clinic['button_text'] ?? ''); ?>"
                data-button-link="<?php echo esc_url($clinic['button_link'] ?? ''); ?>"
                data-button-text-2="<?php echo esc_attr($clinic['button_text_2'] ?? ''); ?>"
                data-button-link-2="<?php echo esc_url($clinic['button_link_2'] ?? ''); ?>">
                <span class="icon-circle"><svg class="icon" data-icon="map-pin"></svg></span>
                <div>
                  <h3>
                    <?php echo esc_html($clinic['clinic_name'] ?? ''); ?>
                    <?php if (!empty($clinic['clinic_type'])): ?>
                      <em><?php echo esc_html($clinic['clinic_type']); ?></em>
                    <?php endif; ?>
                  </h3>
                  <p><?php echo esc_html($clinic['address'] ?? ''); ?></p>
                  <?php if (!empty($clinic['opening_hours'])): ?>
                    <div class="clinic-card__hours">
                      <svg class="icon icon--sm" data-icon="clock"></svg>
                      <span><?php echo esc_html($clinic['opening_hours']); ?></span>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <?php $i++; endforeach; endif; ?>

          <?php if (!empty($s13['video_card_title']) || !empty($s13['video_card_desc'])): ?>
            <div class="clinic-card clinic-card--video">
              <span class="icon-circle"><svg class="icon" data-icon="video"></svg></span>
              <div>
                <h4 class="clinic-card__title"><?php echo esc_html($s13['video_card_title']); ?></h4>
                <p><?php echo esc_html($s13['video_card_desc']); ?></p>
              </div>
            </div>
          <?php endif; ?>

          <?php if (!empty($s13['button_text']) || !empty($s13['button_text_2'])): ?>
            <div class="flex flex-wrap gap-[12px]">
              <?php if (!empty($s13['button_text'])): ?>
                <a href="<?php echo esc_url($s13['button_link'] ?: '#'); ?>" class="btn btn--primary btn--block"
                  id="clinicBookBtn">
                  <?php echo esc_html($s13['button_text']); ?>
                </a>
              <?php endif; ?>

              <?php if (!empty($s13['button_text_2'])): ?>
                <a href="<?php echo esc_url($s13['button_link_2'] ?: '#'); ?>" class="btn btn--primary btn--block" id="clinicBookBtn2">
                  <?php echo esc_html($s13['button_text_2']); ?>
                </a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="locations__map">
          <iframe id="clinicMap" title="Clinic Map" loading="lazy"
            src="<?php echo esc_url($initial_map_url); ?>"></iframe>

          <?php if ($initial_map_tag): ?>
            <span class="locations__map-tag" id="clinicMapTag">
              <?php echo esc_html($initial_map_tag); ?>
            </span>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 14: ORGANISATIONAL PSYCHOLOGY -->
  <section id="home-org" class="section section--cream">
    <div class="container">
      <div class="section-head section-head--center">
		<div class="eyebrow">
			<span class="eyebrow__dot">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
          </span>  
        <span><?php echo esc_html($s14['eyebrow_text']); ?></span>
		  </div>
		
        <h2 class="h2"><?php echo wp_kses_post(nl2br($s14['heading'])); ?></h2>
        <p class="lede"><?php echo wp_kses_post(nl2br($s14['description'])); ?></p>
      </div>

      <div class="org-grid">

        <div class="org-card">
          <div class="icon-square">
            <?php if (!empty($s14['left_card_icon'])): ?>
              <img src="<?php echo esc_url(psy_img_url($s14['left_card_icon'])); ?>" alt="Business Icon"
                class="icon-image" loading="lazy">
            <?php else: ?>
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="4" y="2" width="16" height="20" rx="2"></rect>
                <path d="M8 6h8M8 10h8M8 14h5"></path>
              </svg>
            <?php endif; ?>
          </div>

          <h3><?php echo esc_html($s14['left_card_title']); ?></h3>

          <?php if (!empty($s14['left_card_list'])): ?>
            <ul class="bullet-list">
              <?php foreach ($s14['left_card_list'] as $list_item): ?>
                <li><?php echo esc_html($list_item['list_item']); ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <?php if (!empty($s14['left_card_button_text'])): ?>
            <div class="org-card__footer">
              <a href="<?php echo esc_url($s14['left_card_button_link'] ?: '#'); ?>" class="btn-outline-pill">
                <?php echo esc_html($s14['left_card_button_text']); ?> <span class="arrow">→</span>
              </a>
            </div>
          <?php endif; ?>
        </div>

        <div class="org-media">
          <?php if (!empty($s14['central_media_image'])): ?>
            <img src="<?php echo esc_url(psy_img_url($s14['central_media_image'])); ?>"
              alt="Organisational psychologists standing together" loading="lazy">
          <?php endif; ?>
        </div>

        <div class="org-card">
          <div style="margin-bottom: 20px;">
            <?php if (!empty($s14['right_card_icon'])): ?>
              <img src="<?php echo esc_url(psy_img_url($s14['right_card_icon'])); ?>" alt="Healthcare Icon"
                class="icon-image" loading="lazy">
            <?php endif; ?>
          </div>

          <h3><?php echo esc_html($s14['right_card_title']); ?></h3>
          <p class="card-desc"><?php echo esc_html($s14['right_card_description']); ?></p>
			
			 <?php if (!empty($s14['right_card_list'])): ?>
            <ul class="bullet-list">
              <?php foreach ($s14['right_card_list'] as $list_item): ?>
                <li><?php echo wp_kses_post($list_item['list_item']); ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <?php if (!empty($s14['right_card_button_text'])): ?>
            <div class="org-card__footer">
              <a href="<?php echo esc_url($s14['right_card_button_link'] ?: '#'); ?>" class="btn-solid-pill">
                <?php echo esc_html($s14['right_card_button_text']); ?> <span class="arrow">→</span>
              </a>
            </div>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 15: INSURANCE BANNER -->
  <section class="insurance-banner">
    <div class="container insurance-banner__inner">

      <div class="insurance-banner__content">
        <h2 class="insurance-banner__title"><?php echo wp_kses_post(nl2br($s15['title'])); ?></h2>

        <?php if (!empty($s15['button_text'])): ?>
          <a href="<?php echo esc_url($s15['button_link'] ?: '#'); ?>" class="btn btn--white">
            <?php echo esc_html($s15['button_text']); ?>
            <img
              src="<?php echo esc_url(psy_img_url($s15['button_arrow_icon']) ?: 'https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/Arrow.svg'); ?>"
              alt="Right Arrow" />
          </a>
        <?php endif; ?>
      </div>

      <div class="insurance-banner__logos">
        <?php if (!empty($s15['logos_gallery'])):
          foreach ($s15['logos_gallery'] as $logo): ?>
            <?php if (!empty($logo)): ?>
              <div class="logo-box">
                <img src="<?php echo esc_url(psy_img_url($logo)); ?>" alt="Insurance Provider" loading="lazy">
              </div>
            <?php endif; ?>
          <?php endforeach; endif; ?>


      </div>

    </div>
  </section>

  <!-- SECTION 16: FAQ -->
  <section id="home-faq" class="section section--peach">
    <div class="container">
      <div class="faq-layout">

        <div class="faq-layout__left">
          <div class="eyebrow">
            <span class="eyebrow__dot">
              <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
            </span>
            <span><?php echo esc_html($s16['eyebrow_text']); ?></span>
          </div>

          <h2 class="h2">
            <?php echo esc_html($s16['heading']); ?> <em><?php echo esc_html($s16['heading_highlight']); ?></em>
          </h2>

          <p class="lede"><?php echo wp_kses_post(nl2br($s16['description'])); ?></p>

          <?php if (!empty($s16['patient_card_title']) || !empty($s16['patient_card_description'])): ?>
            <div class="patient-card">
              <div class="patient-card__header">
                <div class="avatar-group">
                  <span class="avatar" style="background-color: #e4e9e4;">?</span>
                  <span class="avatar" style="background-color: #e0f2d8;">?</span>
                  <span class="avatar" style="background-color: #f6dbd5;">?</span>
                  <span class="avatar" style="background-color: #fbe5d6;">?</span>
                </div>
                <h3 class="patient-card__title"><?php echo esc_html($s16['patient_card_title']); ?></h3>
              </div>

              <p><?php echo esc_html($s16['patient_card_description']); ?></p>

              <?php if (!empty($s16['patient_card_button_text'])): ?>
                <a href="<?php echo esc_url($s16['patient_card_button_link'] ?: '#'); ?>" class="btn btn--primary">
                  <span><?php echo esc_html($s16['patient_card_button_text']); ?></span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="btn-icon">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="faq-layout__right">
          <div class="faq-card">
            <?php if (!empty($s16['faq_items'])): ?>
              <div class="faq-list" id="faqList">
                <?php $i = 0;
                foreach ($s16['faq_items'] as $item): ?>
                  <div class="faq-item<?php echo (!empty($item['is_open']) || $i === 0) ? ' is-open' : ''; ?>">
                    <button type="button" class="faq-item__trigger">
                      <span><?php echo esc_html($item['question']); ?></span>
                      <span class="faq-icon">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="1.5" fill="none"
                          stroke-linecap="round">
                          <line x1="12" y1="5" x2="12" y2="19" class="icon-vertical" />
                          <line x1="5" y1="12" x2="19" y2="12" class="icon-horizontal" />
                        </svg>
                      </span>
                    </button>
                    <div class="faq-item__panel">
                      <div class="faq-item__panel-inner">
                        <?php echo wp_kses_post(wpautop($item['answer'])); ?>
                      </div>
                    </div>
                  </div>
                  <?php $i++; endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 17: FINAL CTA -->
  <section id="home-final-cta" class="section section--center">
    <div class="container">
      <div class="eyebrow">
        <span class="eyebrow__dot">
          <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Icon">
        </span>
        <span><?php echo esc_html($s17['eyebrow_text']); ?></span>
      </div>

      <h3 class="h2"><?php echo wp_kses_post(nl2br($s17['heading'])); ?></h3>
      <p class="lede"><?php echo wp_kses_post(nl2br($s17['description'])); ?></p>

      <?php if (!empty($s17['primary_button_text']) || !empty($s17['secondary_button_text'])): ?>
        <div class="cta-row">
          <?php if (!empty($s17['primary_button_text'])): ?>
            <a href="<?php echo esc_url($s17['primary_button_link'] ?: '#'); ?>" class="btn btn--primary btn--lg">
              <?php echo esc_html($s17['primary_button_text']); ?>
              <span class="btn__icon">
                <img
                  src="<?php echo esc_url(psy_img_url($s17['primary_button_icon']) ?: 'https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/↗.svg'); ?>"
                  alt="Arrow icon">
              </span>
            </a>
          <?php endif; ?>

          <?php if (!empty($s17['secondary_button_text'])): ?>
            <a href="<?php echo esc_url($s17['secondary_button_link'] ?: '#home-psychologists'); ?>"
              class="btn btn--outline btn--lg" <?php echo (strpos($s17['secondary_button_link'], '#') === 0) ? 'data-scroll data-target="' . esc_attr($s17['secondary_button_link']) . '"' : ''; ?>>
              <?php echo esc_html($s17['secondary_button_text']); ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <div class="cta-divider"></div>

      <?php if (!empty($s17['trust_checklist_items'])): ?>
        <div class="check-list check-list--row">
          <?php foreach ($s17['trust_checklist_items'] as $item): ?>
            <span class="check-list__item">
              <span class="check-list__mark">✓</span>
              <?php echo esc_html($item['item_text']); ?>
            </span>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    </div>
  </section>

  <!-- SECTION 18: ARTICLES -->
  <section id="home-articles" class="pb-[90px] px-4 section--white">
    <div class="container">
      <div class="section-head section-head--center">
        <div class="eyebrow">
          <span class="eyebrow__dot">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/star-1.webp" class="image" alt="Ikon">
          </span>
          <span>FRA VÅRE PSYKOLOGER</span>
        </div>
        <h2 class="h2">Lær mer om <em>psykisk helse.</em></h2>
      </div>

      <div class="grid-3">
        <a href="#" class="article-card">
          <div class="article-card__media">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/Article1.webp"
              alt="En forelder med et lite barn hjemme" loading="lazy">
          </div>
          <span class="article-chip">Depresjon</span>
          <h3>Depresjon og fødselspsykose</h3>
          <p>Hva du bør se etter, og når du bør be om hjelp tidlig.</p>
        </a>

        <a href="#" class="article-card">
          <div class="article-card__media">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/Article2.webp"
              alt="En notatbok og penn i dagslys" loading="lazy">
          </div>
          <span class="article-chip">Terapi</span>
          <h3>Kognitiv atferdsterapi som selvhjelp</h3>
          <p>Hvilke KAT-verktøy du kan bruke mellom timene.</p>
        </a>

        <a href="#" class="article-card">
          <div class="article-card__media">
            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/Article3.webp"
              alt="Stille morgenlys på et soverom" loading="lazy">
          </div>
          <span class="article-chip">Søvn</span>
          <h3>Søvn etter traumer</h3>
          <p>Hvorfor søvnen svikter etter vanskelige hendelser, og hva som hjelper.</p>
        </a>
      </div>

      <div class="text-center mt-10">
        <a class="btn btn--primary btn--lg" href="https://sysinn.net/psykolog.no/artikler/" class="link-arrow">Se alle artikler →</a>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>