<?php
/* Template Name: ADHD */
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
?>
<main>

    <section id="adhd-hero" class="hero" data-top>
        <span class="hero__media">
            <?php if (!empty($s1['hero_image'])): ?>
                <img src="<?php echo esc_url($s1['hero_image']); ?>" alt="<?php echo esc_attr($s1['title']); ?>">
            <?php endif; ?>
        </span>
        <div class="adhd-container hero__copy">
            <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
  		<?php yoast_breadcrumb( '<nav class="page-hero__crumb" aria-label="Breadcrumb">', '</nav>' ); ?>
	 <?php endif; ?>

            <h1 class="hero__title"><?php echo esc_html($s1['title']); ?></h1>
            <p class="hero__lede"><?php echo nl2br(esc_html($s1['lede'])); ?></p>
        </div>
    </section>

    <div class="container jump-nav">
        <div class="jump-nav__wrap">
            <span class="jump-nav__fade jump-nav__fade--left"></span>
            <span class="jump-nav__fade jump-nav__fade--right"></span>
            <nav class="jump-nav__list" id="jumpNav" aria-label="On this page">
                <a href="#adhd-what" data-jump="what" class="is-active">Hva er ADHD</a>
                <a href="#adhd-subtypes" data-jump="subtypes">Undertyper</a>
                <a href="#adhd-causes" data-jump="causes">Årsaker</a>
                <a href="#adhd-symptoms" data-jump="symptoms">Symptomer</a>
                <a href="#adhd-ages" data-jump="ages">Livsstadier</a>
                <a href="#adhd-assessment" data-jump="assessment">Vurdering</a>
                <a href="#adhd-treatment" data-jump="treatment">Behandling</a>
                <a href="#adhd-living" data-jump="living">Dagligliv</a>
                <a href="#adhd-help" data-jump="help">Kjenn deg selv igjen</a>
                <a href="#adhd-cooccurring" data-jump="cooccurring">Samtidig forekommende</a>
                <a href="#adhd-myths" data-jump="myths">Myter</a>
                <a href="#adhd-faq" data-jump="faq">FAQ</a>
            </nav>
        </div>
    </div>



    <!-- SECTION 2: WHAT IS ADHD -->
    <section id="adhd-what" class="pt-[60px] section--white" data-sec="what">
        <div class="container">
            <div class="info-aside">
                <div class="lg:sticky lg:top-0" data-reveal>
                    <h2 class="h2"><?php echo esc_html($s2['heading']); ?>
                        <em><?php echo esc_html($s2['heading_highlight']); ?></em>
                    </h2>
                    <div class="lede"><?php echo $s2['paragraph_1']; ?></div>
                    <div class="lede"><?php echo $s2['paragraph_2']; ?></div>
                    <div class="lede"><?php echo $s2['paragraph_3']; ?></div>
                </div>
                <div class="info-aside__rail" data-reveal>
                    <div class="stat-box">
                        <span class="icon-circle">
                            <?php if (!empty($s2['stat_icon'])): ?>
                                <img src="<?php echo esc_url($s2['stat_icon']); ?>" alt="Brain Icon" class="icon">
                            <?php endif; ?>
                        </span>

                        <p class="stat-box__n"><?php echo esc_html($s2['stat_number']); ?></p>
                        <div class="stat-box__d"><?php echo wp_kses_post($s2['stat_description']); ?></div>
                    </div>
                    <div class="add-box" id="addBox">
                        <p class="add-box__q"><?php echo esc_html($s2['add_box_question']); ?></p>
                        <p class="add-box__a"><?php echo esc_html($s2['add_box_answer']); ?></p>
                        <div class="accordion" id="addAccordion">
                            <div class="accordion__panel" id="addPanel">
                                <div class="accordion__panel-inner">
                                    <p class="add-box__extra"><?php echo esc_html($s2['add_box_extra']); ?></p>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="add-box__toggle" id="addToggle" aria-expanded="false"
                            aria-label="Read more">+</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: VIDEO 
    <section id="adhd-video" class="section--white">
        <div class="container">
            <div class="video-head" data-reveal>
                <div>
                    <p class="video-head__kicker"><?php echo esc_html($s3['kicker']); ?></p>
                    <h2 class="h2 h2--sm"><?php echo esc_html($s3['heading']); ?>
                        <em><?php echo esc_html($s3['heading_highlight']); ?></em>
                    </h2>
                </div>
            </div>
            <button type="button" class="video-btn" id="adhdVideoBtn"
                aria-label="Play video: <?php echo esc_attr($s3['video_label']); ?>"
                data-video-url="<?php echo esc_url($s3['video_url']); ?>" data-reveal>
                <?php if (!empty($s3['video_thumbnail'])): ?>
                    <img src="<?php echo esc_url($s3['video_thumbnail']); ?>"
                        alt="<?php echo esc_attr($s3['video_label']); ?>">
                <?php endif; ?>
                <span class="video-btn__scrim"></span>
                <span class="video-btn__play"><span class="video-btn__play-icon"></span></span>
                <span class="video-btn__label"><span><?php echo esc_html($s3['video_label']); ?></span></span>
            </button>
        </div>
    </section> -->

    <!-- SECTION 4: SUBTYPES -->
    <section id="adhd-subtypes" class="section section--peach" data-sec="subtypes">
        <div class="container">
            <div class="section-head section-head--center" data-reveal>
                <h2 class="h2"><?php echo esc_html($s4['heading']); ?>
                    <em><?php echo esc_html($s4['heading_highlight']); ?></em>
                </h2>
                <p class="lede"><?php echo esc_html($s4['lede']); ?></p>
            </div>
            <div class="subtypes" data-reveal>
                <div class="sub-head">
                    <span><?php echo !empty($s4['sub_type_1']) ? esc_html($s4['sub_type_1']) : 'Subtype'; ?></span>
                    <span><?php echo !empty($s4['sub_type_2']) ? esc_html($s4['sub_type_2']) : 'How it presents'; ?></span>
                </div>
                <?php if (!empty($s4['subtypes'])):
                    $i = 0;
                    foreach ($s4['subtypes'] as $row): ?>
                        <div class="sub-row" data-subtype="<?php echo $i; ?>">
                            <span class="sub-row__bar"></span>
                            <div class="sub-row__id">
                                <span class="sub-row__art">
                                    <?php if (!empty($row['image'])): ?><img src="<?php echo esc_url($row['image']); ?>"
                                            alt="<?php echo esc_attr($row['title']); ?>"><?php endif; ?>
                                </span>
                                <span>
                                    <span class="sub-row__n"><?php echo esc_html($row['number']); ?></span>
                                    <span class="sub-row__t"><?php echo esc_html($row['title']); ?></span>
                                </span>
                            </div>
                            <p class="sub-row__d"><?php echo esc_html($row['description']); ?></p>
                        </div>
                        <?php $i++; endforeach; endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 5: CAUSES -->
    <section id="adhd-causes" class="section section--white" data-sec="causes">
        <div class="container">
            <div class="section-head-full" data-reveal>
                <h2 class="h2"><?php echo esc_html($s5['heading_before']); ?>
                    <em><?php echo esc_html($s5['heading_highlight']); ?></em>
                    <?php echo esc_html($s5['heading_after']); ?>
                </h2>
                <p class="lede"><?php echo esc_html($s5['lede']); ?></p>
            </div>
            <div class="cause-grid" data-reveal>
                <?php if (!empty($s5['causes'])):
                    foreach ($s5['causes'] as $row): ?>
                        <div class="cause-card">
                            <span class="icon-circle--md">
                                <?php if (!empty($row['icon'])): ?>
                                    <img src="<?php echo esc_url($row['icon']); ?>" alt="Icon" class="icon">
                                <?php endif; ?>
                            </span>
                            <div>
                                <h3><?php echo esc_html($row['title']); ?></h3>
                                <p><?php echo esc_html($row['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>
            </div>
            <div class="not-cause" data-reveal>
                <span class="icon-circle--md not-cause__icon">
                    <?php if (!empty($s5['not-a-cause_icon'])): ?>
                        <img src="<?php echo esc_url($s5['not-a-cause_icon']); ?>" alt="Icon" class="icon">
                    <?php endif; ?>
                </span>
                <div>
                    <h3><?php echo esc_html($s5['not_cause_heading']); ?></h3>
                    <p><?php echo esc_html($s5['not_cause_text']); ?></p>
                </div>
                <?php if (!empty($s5['not_cause_image'])): ?>
                    <img class="not-cause__art" src="<?php echo esc_url($s5['not_cause_image']); ?>" alt="">
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 6: SYMPTOMS -->
    <section id="adhd-symptoms" class="section section--peach" data-sec="symptoms">
        <div class="container">
            <div class="section-head section-head--center">
                <h2 class="h2"><?php echo esc_html($s6['heading']); ?>
                    <em><?php echo esc_html($s6['heading_highlight']); ?></em>
                </h2>
                <p class="lede"><?php echo esc_html($s6['lede']); ?></p>
            </div>

            <div class="ps-symgroups" id="symptomGroups">
                <?php if (!empty($s6['symptom_groups'])):
                    $gi = 0;
                    foreach ($s6['symptom_groups'] as $group): ?>
                        <div class="ps-symgroup<?php echo $gi === 0 ? ' is-open' : ''; ?>" data-symgroup="<?php echo $gi; ?>">
                            <button type="button" class="ps-symgroup__trigger">
                                <svg class="icon accordion__chevron" data-icon="chevron-down"></svg>
                                <span class="icon-circle icon-circle--lg">
                                    <?php if (!empty($row['icon'])): ?>
                                        <img src="<?php echo esc_url($group['icon']); ?>" alt="Icon" class="icon">
                                    <?php endif; ?>
                                </span>
                                <span class="ps-symgroup__title"><?php echo esc_html($group['title']); ?></span>
                                <span class="ps-symgroup__count"><?php echo esc_html($group['count_label']); ?></span>
                            </button>
                            <div class="accordion__panel">
                                <div class="accordion__panel-inner">
                                    <div class="ps-symlist">
                                        <?php if (!empty($group['signs'])):
                                            foreach ($group['signs'] as $sign): ?>
                                                <div><span>✓</span><span><?php echo esc_html($sign['text']); ?></span></div>
                                            <?php endforeach; endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $gi++; endforeach; endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 7: AGES / LIFE STAGES -->
    <section id="adhd-ages" class="section section--white" data-sec="ages">
        <div class="container">
            <div class="section-head-full" data-reveal>
                <h2 class="h2 h2--lg"><?php echo esc_html($s7['heading']); ?>
                    <em><?php echo esc_html($s7['heading_highlight']); ?></em>
                </h2>
                <p class="lede"><?php echo esc_html($s7['lede']); ?></p>
            </div>

            <?php if (!empty($s7['life_stages'])):
                foreach ($s7['life_stages'] as $row):
                    $media_first = ($row['image_position'] ?? 'left') === 'left'; ?>
                    <div class="life-row" data-reveal>
                        <?php if ($media_first): ?>
                            <div class="age-media">
                                <?php if (!empty($row['image'])): ?>
                                    <img src="<?php echo esc_url($row['image']); ?>" alt="<?php echo esc_attr($row['title']); ?>">
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <div class="age-content">
                            <p class="age-kicker"><?php echo esc_html($row['kicker']); ?></p>
                            <h3 class="age-title"><?php echo esc_html($row['title']); ?></h3>
                            <?php if (!empty($row['paragraph_1'])): ?>
                                <div class="lede lede--sm"><?php echo $row['paragraph_1']; ?></div>
                            <?php endif; ?>
                            <?php if (!empty($row['paragraph_2'])): ?>
                                <div class="lede lede--sm"><?php echo $row['paragraph_2']; ?></div>
                            <?php endif; ?>
                            <?php if (!empty($row['paragraph_3'])): ?>
                                <div class="lede lede--sm"><?php echo $row['paragraph_3']; ?></div>
                            <?php endif; ?>
                        </div>
                        <?php if (!$media_first): ?>
                            <div class="age-media age-media--end">
                                <?php if (!empty($row['image'])): ?>
                                    <img src="<?php echo esc_url($row['image']); ?>" alt="<?php echo esc_attr($row['title']); ?>">
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; endif; ?>

            <div class="women-wrap" data-reveal>
                <div class="women-panel">
                    <p class="age-kicker"><?php echo esc_html($s7['women_kicker']); ?></p>
                    <h3 class="age-title"><?php echo esc_html($s7['women_title']); ?></h3>
                    <div class="lede lede--sm"><?php echo $s7['women_paragraph_1']; ?></div>
                    <div class="lede lede--sm"><?php echo $s7['women_paragraph_2']; ?></div>
                    <div class="women-grid">
                        <div class="women-grid__panel">
                            <p class="women-grid__title"><?php echo esc_html($s7['women_signs_title']); ?></p>
                            <p class="women-grid__lede"><?php echo esc_html($s7['women_signs_intro']); ?></p>
                            <div class="women-grid__list">
                                <?php if (!empty($s7['women_signs'])):
                                    foreach ($s7['women_signs'] as $sign): ?>
                                        <span><span class="check-list__dot"></span><?php echo esc_html($sign['text']); ?></span>
                                    <?php endforeach; endif; ?>
                            </div>
                        </div>
                        <div class="women-grid__media">
                            <?php if (!empty($s7['women_image'])): ?>
                                <img src="<?php echo esc_url($s7['women_image']); ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 8: CLINIC BANNER -->
    <section id="adhd-clinic" class="pb-[60px] section--white">
        <div class="container">
            <div class="clinic-banner" data-reveal>
                <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/Border.webp"
                    class="clinic-banner__bg" aria-hidden="true" alt="">
                <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/Brain.webp"
                    class="clinic-banner__character" alt="ADHD Psychologist">
                <span class="tex-grid"></span>
                <div class="clinic-banner__copy">

                    <h2 class="h2 h2--light"><?php echo esc_html($s8['heading']); ?>
                        <em><?php echo esc_html($s8['heading_highlight']); ?></em>
                    </h2>
                    <div class="lede lede--light"><?php echo $s8['paragraph_1']; ?></div>
                    <div class="lede lede--light"><?php echo $s8['paragraph_2']; ?></div>
                </div>
                <div class="clinic-grid">
                    <?php if (!empty($s8['features'])):
                        foreach ($s8['features'] as $f): ?>
                            <div>
                                <span class="icon-dark">
                                    <?php if (!empty($f['icon'])): ?>
                                        <img src="<?php echo esc_url($f['icon']); ?>" alt="Icon" class="icon">
                                    <?php endif; ?>
                                </span>
                                <span><?php echo esc_html($f['text']); ?></span>
                            </div>
                        <?php endforeach; endif; ?>
                </div>
                <a type="button" class="btn btn--accent btn--arrow clinic-banner__btn" data-scroll
                    href="<?php echo esc_attr($s8['cta_target']); ?>"><?php echo esc_html($s8['cta_button_text']); ?>
                    <span>→</span></a>
            </div>
        </div>
    </section>

    <!-- SECTION 9: ASSESSMENT -->

    <section id="adhd-assessment" class="pb-[60px] section--white" data-sec="assessment" data-assess>
        <div class="container">
            <div class="mb-10" data-reveal>
                <h2 class="h2"><?php echo esc_html($s9['heading']); ?>
                    <em><?php echo esc_html($s9['heading_highlight']); ?></em>
                </h2>
                <div class="lede"><?php echo $s9['paragraph_1']; ?></div>
                <div class="lede"><?php echo $s9['paragraph_2']; ?></div>
            </div>
            <div class="split-top">
                <div data-reveal>
                    <div class="steps" id="assessSteps">
                        <?php if (!empty($s9['steps'])):
                            $si = 0;
                            foreach ($s9['steps'] as $step): ?>
                                <div class="steps__item" data-step="<?php echo $si; ?>">
                                    <span class="steps__num"><?php echo $si + 1; ?></span>
                                    <div>
                                        <h3><?php echo esc_html($step['title']); ?></h3>
                                        <div><?php echo wp_kses_post($step['description']); ?></div>
                                    </div>
                                </div>
                                <?php $si++; endforeach; endif; ?>
                    </div>
                    <div class="mt-8">
                        <a href="http://sysinn.net/psykolog.no/bestill-time/" type="button" class="btn btn--primary"
                            data-scroll data-target="#adhd-cta"><?php echo esc_html($s9['button_text']); ?></a>
                    </div>
                </div>
                <div class="shots-sticky" data-reveal>
                    <div class="shots" id="assessPreview">
                        <?php if (!empty($s9['preview_shots'])):
                            $pi = 0;
                            foreach ($s9['preview_shots'] as $shot): ?>
                                <?php if (!empty($shot['image'])): ?>
                                    <img data-shot="<?php echo $pi; ?>" src="<?php echo esc_url($shot['image']); ?>"
                                        alt="<?php echo esc_attr($shot['label']); ?>" <?php echo $pi === 0 ? ' class="is-active"' : ''; ?>>
                                <?php endif; ?>
                                <?php $pi++; endforeach; endif; ?>
                        <span class="shots__scrim"></span>
                        <span class="shots__badge"><span id="shotNum">1</span><span
                                id="shotLabel"><?php echo esc_html($s9['preview_shots'][0]['label'] ?? ''); ?></span></span>
                        <div class="shots__caption">
                            <p id="shotCaption"><?php echo esc_html($s9['preview_shots'][0]['caption'] ?? ''); ?></p>
                            <p id="shotSub"><?php echo esc_html($s9['preview_shots'][0]['subcaption'] ?? ''); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 10: TREATMENT -->
    <section id="adhd-treatment" class="section section--peach" data-sec="treatment">
        <div class="container">
            <div class="section-head-full" data-reveal>
                <h2 class="h2"><?php echo esc_html($s10['heading']); ?>
                    <em><?php echo esc_html($s10['heading_highlight']); ?></em>
                </h2>
                <p class="lede"><?php echo esc_html($s10['lede']); ?></p>
            </div>
            <div class="treatments" id="treatmentRows" data-reveal>
                <?php if (!empty($s10['treatments'])):
                    $ti = 0;
                    foreach ($s10['treatments'] as $t): ?>
                        <div class="tx-card" data-treat="<?php echo $ti; ?>">
                            <img src="https://sysinn.net/psykolog.no/wp-content/uploads/2026/08/card-overly.webp" alt=""
                                class="tx-card__bg-overlay" aria-hidden="true">
                            <div class="tx-row">
                                <div>
                                    <div class="tx-card__head">
                                        <span class="icon-circle icon-circle--sm">
                                            <?php if (!empty($t['icon'])): ?>
                                                <img src="<?php echo esc_url($t['icon']); ?>" alt="Icon" class="icon">
                                            <?php endif; ?>
                                        </span>
                                        <h3><?php echo esc_html($t['title']); ?></h3>
                                    </div>
                                    <p><?php echo esc_html($t['description']); ?></p>
                                    <?php if (!empty($t['list_items'])): ?>
                                        <div class="tx-card__list">
                                            <?php foreach ($t['list_items'] as $li): ?>
                                                <span><span class="check-list__dot"></span><?php echo esc_html($li['text']); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <span class="tx-art">
                                    <?php if (!empty($t['image'])): ?><img src="<?php echo esc_url($t['image']); ?>"
                                            alt="<?php echo esc_attr($t['title']); ?>"><?php endif; ?>
                                </span>
                            </div>
                        </div>
                        <?php $ti++; endforeach; endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 11: LIVING -->
    <section id="adhd-living" class="section section--white" data-sec="living">
        <div class="container">
            <div class="section-head-full" data-reveal>
                <h2 class="h2 h2--lg"><?php echo esc_html($s11['heading']); ?>
                    <em><?php echo esc_html($s11['heading_highlight']); ?></em>
                </h2>
                <p class="lede"><?php echo esc_html($s11['lede']); ?></p>
            </div>
            <div class="living-grid" data-reveal>
                <?php
                $themes = ['time', 'mood', 'work', 'sleep'];

                if (!empty($s11['living_cards'])):
                    $li_i = 0;
                    foreach ($s11['living_cards'] as $card):
                        $current_theme = $themes[$li_i % 4];
                        ?>
                        <a href="<?php echo esc_url($card['link_target'] ?: '#'); ?>"
                            class="living-card living-card--<?php echo $current_theme; ?>" data-living="<?php echo $li_i; ?>"
                            data-scroll data-target="<?php echo esc_attr($card['link_target']); ?>">

                            <div class="living-card__top">
                                <span class="living-card__head">
                                    <span class="icon-square">
                                        <?php if (!empty($card['icon'])): ?>
                                            <img src="<?php echo esc_url($card['icon']); ?>" class="icon"
                                                alt="<?php echo esc_attr($t['title']); ?>">
                                        <?php endif; ?>
                                    </span>
                                    <span>
                                        <span class="living-card__n"><?php echo esc_html($card['number']); ?></span>
                                        <span class="living-card__t"><?php echo esc_html($card['title']); ?></span>
                                    </span>
                                </span>

                                <span class="living-card__illus">
                                    <?php if (!empty($card['image'])): ?><img src="<?php echo esc_url($card['image']); ?>"
                                            alt=""><?php endif; ?>
                                </span>

                            </div>

                            <div class="living-card__list">
                                <?php if (!empty($card['list_items'])):
                                    foreach ($card['list_items'] as $li): ?>
                                        <div class="living-card__item">
                                            <span class="check-list__arrow">
                                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                                </svg>
                                            </span>
                                            <span class="check-list__text"><?php echo esc_html($li['text']); ?></span>
                                        </div>
                                    <?php endforeach; endif; ?>
                            </div>

                            <span class="living-card__link">
                                Lær mer
                                <span class="link-arrow">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </span>
                        </a>
                        <?php $li_i++; endforeach; endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 12: RECOGNISE YOURSELF -->
    <section id="adhd-help" class="section section--cream section--decor" data-sec="help">
        <div class="container">
            <div class="section-head-max section-head--center" data-reveal>
                <h2 class="h2 h2--lg"><?php echo esc_html($s12['heading']); ?>
                    <em><?php echo esc_html($s12['heading_highlight']); ?></em>
                </h2>
                <p class="lede"><?php echo esc_html($s12['lede']); ?></p>
            </div>
            <div class="audience-grid" data-reveal>
                <?php
                $default_bgs = ['#E4EDDF', '#E1EBF3', '#F6E7C9', '#FDE7E1'];

                if (!empty($s12['audience_cards'])):
                    $ai = 0;
                    foreach ($s12['audience_cards'] as $card):
                        $card_bg = !empty($card['bg_color']) ? $card['bg_color'] : $default_bgs[$ai % 4];
                        ?>
                        <a href="<?php echo esc_url($card['link_target'] ?: '#'); ?>" class="audience-card"
                            style="background-color: <?php echo esc_attr($card_bg); ?>;" data-audience="<?php echo $ai; ?>"
                            data-scroll>
                            <?php if (!empty($card['has_placeholder'])): ?>
                                <span class="audience-card__ph" aria-label="Placeholder for a photograph">
                                    <span class="icon-circle"><svg class="icon" data-icon="image"></svg></span>
                                    <span><?php echo esc_html($card['placeholder_text']); ?></span>
                                </span>
                            <?php else: ?>
                                <span class="audience-card__img"><?php if (!empty($card['image'])): ?><img
                                            src="<?php echo esc_url($card['image']); ?>" alt=""><?php endif; ?></span>
                            <?php endif; ?>
                            <span class="audience-card__t"><?php echo esc_html($card['title']); ?></span>
                            <span class="audience-card__d"><?php echo esc_html($card['description']); ?></span>
                            <span class="audience-card__go"
                                style="color: <?php echo esc_attr(!empty($card['link_color']) ? $card['link_color'] : '#B25946'); ?>;">
                                <?php echo !empty($card['link_label']) ? esc_html($card['link_label']) : 'Get started'; ?>
                                <span>›</span>
                            </span>
                        </a>
                        <?php $ai++; endforeach; endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 13: CO-OCCURRING -->
    <section id="adhd-cooccurring" class="pb-[60px] pt-[40px] section--white" data-sec="cooccurring">
        <div class="container">
            <div class="section-head-full" data-reveal>
                <h2 class="h2 h2--lg"><?php echo esc_html($s13['heading']); ?>
                    <em><?php echo esc_html($s13['heading_highlight']); ?></em>
                </h2>
                <p class="lede"><?php echo esc_html($s13['lede']); ?></p>
            </div>
            <div class="cooccur-grid" data-reveal>
                <?php if (!empty($s13['cooccur_cards'])):
                    foreach ($s13['cooccur_cards'] as $card): ?>
                        <a href="<?php echo esc_url($card['url'] ?: '#'); ?>" class="cooccur-card">
                            <span class="cooccur-card__top">
                                <span class="icon-circle">
                                    <?php if (!empty($card['icon'])): ?>
                                        <img src="<?php echo esc_url($card['icon']); ?>" alt="icon" class="icon">
                                    <?php endif; ?>
                                </span>
                                <span>→</span>
                            </span>
                            <h3><?php echo esc_html($card['title']); ?></h3>
                            <p><?php echo esc_html($card['description']); ?></p>
                        </a>
                    <?php endforeach; endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 14: WHY CHOOSE / CTA -->
    <section id="adhd-cta" class="section--white" data-book>
        <div class="container">
            <div class="why" data-reveal>
                <div class="why__content">
                    <h2 class="h2"><?php echo esc_html($s14['heading']); ?>
                        <em><?php echo esc_html($s14['heading_highlight']); ?></em>
                    </h2>
                    <div class="lede"><?php echo $s14['paragraph_1']; ?></div>
                    <div class="lede"><?php echo $s14['paragraph_2']; ?></div>
                    <a href="https://sysinn.net/psykolog.no/bestill-time" type="button"
                        class="btn btn--primary btn--lg btn--arrow"><?php echo esc_html($s14['button_text']); ?>
                        <span>→</span></a>
                </div>
                <div class="why__media">
                    <?php if (!empty($s14['image'])): ?><img src="<?php echo esc_url($s14['image']); ?>"
                            alt=""><?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 15: MYTHS -->
    <section id="adhd-myths" class="section section--cream" data-sec="myths">
        <div class="container">
            <div class="section-head" data-reveal>
                <h2 class="h2"><?php echo esc_html($s15['heading']); ?>
                    <em><?php echo esc_html($s15['heading_highlight']); ?></em>
                </h2>
            </div>
            <div class="myth-list" data-reveal>
                <?php if (!empty($s15['myths'])):
                    $mi = 0;
                    foreach ($s15['myths'] as $myth): ?>
                        <div class="myth-row" data-myth="<?php echo $mi; ?>">
                            <div class="myth-row__myth">
                                <span class="myth-row__icon myth-row__icon--myth"><svg class="icon" data-icon="x"></svg></span>
                                <div>
                                    <span class="myth-row__label"><?php echo esc_html($myth['number']); ?></span>
                                    <p><?php echo esc_html($myth['myth_text']); ?></p>
                                </div>
                            </div>
                            <span class="myth-row__avatar">
                                <?php if (!empty($myth['avatar_image'])): ?><img
                                        src="<?php echo esc_url($myth['avatar_image']); ?>" alt=""><?php endif; ?>
                            </span>
                            <div class="myth-row__fact">
                                <span class="myth-row__icon myth-row__icon--fact"><svg class="icon"
                                        data-icon="check"></svg></span>
                                <div>
                                    <span class="myth-row__label">Faktum</span>
                                    <p><?php echo esc_html($myth['fact_text']); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php $mi++; endforeach; endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 16: FAQ -->
    <section id="adhd-faq" class="section section--white" data-sec="faq">
        <div class="container">
            <div class="split-top">
                <div class="faq-side" data-reveal>
                    <h2 class="h2 h2--lg"><?php echo esc_html($s16['heading']); ?>
                        <em><?php echo esc_html($s16['heading_highlight']); ?></em>
                    </h2>
                    <p class="lede"><?php echo esc_html($s16['lede']); ?></p>
                   
                    <div class="patient-card">
                        <div class="patient-card__header">
                            <div class="avatar-group">
                                <span class="avatar" style="background-color: #e4e9e4;"></span>
                                <span class="avatar" style="background-color: #e0f2d8;"></span>
                                <span class="avatar" style="background-color: #f6dbd5;"></span>
                                <span class="avatar" style="background-color: #fbe5d6;"></span>
                            </div>
                            <h3 class="patient-card__title"><?php echo esc_html($s16['card_title']); ?></h3>
                        </div>
                        <p><?php echo esc_html($s16['card_description']); ?></p>

                        <a href="<?php echo esc_url($s16['card_button']['url'] ?? '#'); ?>" class="btn--primary">
                            <span><?php echo esc_html($s16['card_button']['label'] ?? 'Ask Your Own Question'); ?></span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="btn-icon">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="faq-list" id="adhdFaqList" data-reveal>
                    <?php if (!empty($s16['faq_items'])):
                        foreach ($s16['faq_items'] as $faq): ?>
                            <div class="faq-item group">
                                <button
                                    class="w-full flex items-center justify-between p-6 sm:px-8 sm:py-6 bg-transparent border-0 cursor-pointer text-left">
                                    <h2 class="font-serif font-bold text-[20px] pr-4"><?php echo esc_html($faq['question']); ?>
                                    </h2>
                                    <span class="relative w-4 h-4 flex-none shrink-0 transition-transform duration-300">
                                        <span
                                            class="absolute top-1/2 left-0 w-full h-[2px] bg-[#C24C33] -translate-y-1/2"></span>
                                        <span
                                            class="absolute top-0 left-1/2 w-[2px] h-full bg-[#C24C33] -translate-x-1/2 transition-transform duration-300 group-[.is-open]:rotate-90"></span>
                                    </span>
                                </button>
                                <div class="faq-content hidden px-6 sm:px-8 pb-7 pt-0"><?php echo $faq['answer']; ?></div>
                            </div>
                        <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>