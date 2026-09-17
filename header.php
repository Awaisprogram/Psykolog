<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ============================================================
       TOPBAR
       ============================================================ -->
<div id="home-netbar" class="netbar">
  <div class="container">
    <div class="netbar__row">
      <span class="netbar__label">
        <span class="netbar__rule"></span>
        <span class="netbar__text">Vårt nettverk for psykisk helse</span>
      </span>
      <nav class="netbar__links" aria-label="Related sites">
        <a href="#" class="netbar__link" style="--rule:transparent">Dps.no <span class="netbar__go">↗</span></a>
        <a href="#" class="netbar__link">Psykiater.no <span class="netbar__go">↗</span></a>
        <a href="#" class="netbar__link">Spesialistpsykiatri.no <span class="netbar__go">↗</span></a>
      </nav>
    </div>
  </div>
</div>

<!-- ============================================================
     NAV
     ============================================================ -->
<header id="home-header" class="site-header" data-header>
  <div class="container">
    <div class="site-header__bar">
      <div class="site-header__row">
        <a href="https://sysinn.net/psykolog.no/" class="site-header__brand" data-scroll>
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="psykolog.no" class="site-header__logo">
        </a>

        <nav class="site-header__nav" aria-label="Primary">
          
          <div class="nav-item has-dropdown">
            <a href="#home-conditions" class="nav-link" data-scroll>Conditions <svg class="icon icon-chevron" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg></a>
            <div class="mega-menu">
              <div class="mega-menu__inner">
                <div class="mega-menu__content">
                  <div class="mega-menu__search">
                    <svg class="icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    <input type="text" placeholder="Type To Search Here">
                  </div>
                  <div class="mega-menu__grid">
                    <!-- Column 1 -->
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/brain.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">ADHD</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/ocd.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">OCD</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/addiction.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Addiction</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/emotions.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Emotions & Self Esteem</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <!-- Column 2 -->
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/anxiety.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Anxiety</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/trauma.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Trauma & Stress</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/sleep.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Sleep Problems</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/depression.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Depression</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <!-- Column 3 -->
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/mood.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Mood Disorders</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/eating.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Eating Disorder</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/children.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Children & Adolescents</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/bipolar.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Bipolar</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                  </div>
                </div>
                
                <div class="mega-menu__sidebar">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/psychologist-session.jpg" alt="Psychologist Session" class="mega-menu__sidebar-img" onerror="this.style.display='none'">
                  <div class="mega-menu__sidebar-content">
                    <h4 class="mega-menu__sidebar-title">Speak To A Psychologist</h4>
                    <p class="mega-menu__sidebar-desc">Most people are offered an appointment within 1 to 3 days, by video or in our clinics in Oslo and Ski.</p>
                    <a href="https://sysinn.net/psykolog.no/kontakt-oss/" class="btn btn--primary btn--sidebar">
                      <svg class="icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg> Contact Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="nav-item has-dropdown">
            <a href="#home-formats" class="nav-link" data-scroll>Therapies <svg class="icon icon-chevron" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg></a>
            <div class="mega-menu">
              <div class="mega-menu__inner">
                <div class="mega-menu__content">
                  <div class="mega-menu__search">
                    <svg class="icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    <input type="text" placeholder="Type To Search Here">
                  </div>
                  <div class="mega-menu__grid">
                    <!-- Column 1 -->
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/individual.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Individual Approaches</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/adhd-guidance.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">ADHD Guidance</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <!-- Column 2 -->
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/trauma-treatment.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Trauma Treatment</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/format.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Format</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <!-- Column 3 -->
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/couple.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Couple & Family</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                  </div>
                </div>
                
                <div class="mega-menu__sidebar">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/psychologist-session.jpg" alt="Psychologist Session" class="mega-menu__sidebar-img" onerror="this.style.display='none'">
                  <div class="mega-menu__sidebar-content">
                    <h4 class="mega-menu__sidebar-title">Speak To A Psychologist</h4>
                    <p class="mega-menu__sidebar-desc">Most people are offered an appointment within 1 to 3 days, by video or in our clinics in Oslo and Ski.</p>
                    <a href="https://sysinn.net/psykolog.no/kontakt-oss/" class="btn btn--primary btn--sidebar">
                      <svg class="icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg> Contact Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="nav-item has-dropdown">
            <a href="#" class="nav-link">Services <svg class="icon icon-chevron" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg></a>
            <div class="mega-menu">
              <div class="mega-menu__inner">
                <div class="mega-menu__content">
                  <div class="mega-menu__search">
                    <svg class="icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    <input type="text" placeholder="Type To Search Here">
                  </div>
                  <div class="mega-menu__grid">
                    <!-- Regular services -->
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/ocd.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">OCD</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/sleep.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Sleep Problems</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/adhd.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">ADHD Guidance</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/addiction.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Addiction</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/children.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Children & Adolescents</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <div style="grid-column: 1 / -1; font-weight: 700; font-size: 16px; margin-top: 12px; margin-bottom: -12px; color: var(--ink-800);">For Businesses</div>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/corporate.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Corporate / Employers</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/services-business.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Services for Business, Schools & Students</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/insurance.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Insurance Partners</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/partners.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Partners</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/careers.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Careers</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="mega-menu__sidebar">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/psychologist-session.jpg" alt="Psychologist Session" class="mega-menu__sidebar-img" onerror="this.style.display='none'">
                  <div class="mega-menu__sidebar-content">
                    <h4 class="mega-menu__sidebar-title">Speak To A Psychologist</h4>
                    <p class="mega-menu__sidebar-desc">Most people are offered an appointment within 1 to 3 days, by video or in our clinics in Oslo and Ski.</p>
                    <a href="https://sysinn.net/psykolog.no/kontakt-oss/" class="btn btn--primary btn--sidebar">
                      <svg class="icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg> Contact Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="nav-item has-dropdown">
            <a href="https://sysinn.net/psykolog.no/om-oss/" class="nav-link">About Us <svg class="icon icon-chevron" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg></a>
            <div class="mega-menu">
              <div class="mega-menu__inner">
                <div class="mega-menu__content">
                  <div class="mega-menu__search">
                    <svg class="icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    <input type="text" placeholder="Type To Search Here">
                  </div>
                  <div class="mega-menu__grid">
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/about.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">About Us</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/our-psychologists.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Our Psychologists</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/who-is.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Who is a Psychologist?</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/contact.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Contact Us</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/guide.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Guide to Choosing a Psychologist</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="mega-menu__sidebar">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/psychologist-session.jpg" alt="Psychologist Session" class="mega-menu__sidebar-img" onerror="this.style.display='none'">
                  <div class="mega-menu__sidebar-content">
                    <h4 class="mega-menu__sidebar-title">Speak To A Psychologist</h4>
                    <p class="mega-menu__sidebar-desc">Most people are offered an appointment within 1 to 3 days, by video or in our clinics in Oslo and Ski.</p>
                    <a href="https://sysinn.net/psykolog.no/kontakt-oss/" class="btn btn--primary btn--sidebar">
                      <svg class="icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg> Contact Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="nav-item has-dropdown">
            <a href="#" class="nav-link">Resources <svg class="icon icon-chevron" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg></a>
            <div class="mega-menu">
              <div class="mega-menu__inner">
                <div class="mega-menu__content">
                  <div class="mega-menu__search">
                    <svg class="icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    <input type="text" placeholder="Type To Search Here">
                  </div>
                  <div class="mega-menu__grid">
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/articles.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Articles</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/patient-handbook.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Patient Handbook / Knowledge Hub</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/test-yourself.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Test Yourself</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/news.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">News / Press</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/help-center.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">Help Center</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                    <a href="#" class="mega-menu__link">
                      <div class="mega-menu__icon-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/faq.svg" alt="Icon" onerror="this.style.display='none'"></div>
                      <div class="mega-menu__text">
                        <span class="mega-menu__title">FAQ</span>
                        <span class="mega-menu__desc">Lorem ipsum comes here.</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="mega-menu__sidebar">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/psychologist-session.jpg" alt="Psychologist Session" class="mega-menu__sidebar-img" onerror="this.style.display='none'">
                  <div class="mega-menu__sidebar-content">
                    <h4 class="mega-menu__sidebar-title">Speak To A Psychologist</h4>
                    <p class="mega-menu__sidebar-desc">Most people are offered an appointment within 1 to 3 days, by video or in our clinics in Oslo and Ski.</p>
                    <a href="https://sysinn.net/psykolog.no/kontakt-oss/" class="btn btn--primary btn--sidebar">
                      <svg class="icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg> Contact Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>

        <div class="site-header__actions">
          <button type="button" class="btn btn--primary" data-scroll data-target="#home-final-cta">
            <svg class="icon" style="margin-right:8px; width:18px; height:18px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            Book An Appointment
          </button>
          <button type="button" class="site-header__toggle" id="navToggle" aria-expanded="false" aria-label="Open menu" aria-controls="mobileNav">
            <span class="burger">
              <span class="burger__bar burger__bar--1"></span>
              <span class="burger__bar burger__bar--2"></span>
              <span class="burger__bar burger__bar--3"></span>
            </span>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Mobile nav drawer overlay -->
<div class="nav-backdrop" id="navBackdrop" aria-hidden="true"></div>

<!-- Mobile nav drawer -->
<nav class="nav-drawer" id="mobileNav" role="dialog" aria-modal="true" aria-label="Site navigation" hidden>
  <div class="nav-drawer__header">
    <a href="#home-hero" class="site-header__brand" data-scroll data-close-nav>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="psykolog.no" class="site-header__logo">
    </a>
    <button type="button" class="nav-drawer__close" id="navDrawerClose" aria-label="Close menu">
      <svg class="icon" data-icon="x" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
  </div>

  <div class="nav-drawer__body">
    <a href="#home-conditions" class="nav-drawer__link" data-scroll data-close-nav>
      <span class="nav-drawer__link-text">Services</span>
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
    <a href="#home-formats" class="nav-drawer__link" data-scroll data-close-nav>
      <span class="nav-drawer__link-text">Therapy</span>
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
    <a href="https://sysinn.net/psykolog.no/om-oss/" class="nav-drawer__link" data-scroll data-close-nav>
      <span class="nav-drawer__link-text">About Us</span>
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
    <a href="#home-pricing" class="nav-drawer__link" data-scroll data-close-nav>
      <span class="nav-drawer__link-text">Pricing</span>
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
    <a href="https://sysinn.net/psykolog.no/kontakt-oss/" class="nav-drawer__link" data-scroll data-close-nav>
      <span class="nav-drawer__link-text">Contact</span>
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
  </div>

  <div class="nav-drawer__footer">
    <button type="button" class="btn btn--primary nav-drawer__cta" data-scroll data-target="#home-final-cta" data-close-nav>Book An Appointment</button>
    <p class="nav-drawer__tagline">No referral needed &middot; Available within 1&ndash;3 days</p>
  </div>
</nav>
