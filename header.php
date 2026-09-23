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
        <a href="https://dps.no" class="netbar__link" style="--rule:transparent">Dps.no <span class="netbar__go">↗</span></a>
        <a href="https://psykiater.no/" class="netbar__link">Psykiater.no <span class="netbar__go">↗</span></a>
        <a href="https://spesialistipsykiatri.no/" class="netbar__link">Spesialistpsykiatri.no <span class="netbar__go">↗</span></a>
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
            <a href="https://sysinn.net/psykolog.no/psykisk-helse/" class="nav-link" data-scroll>Psykiske lidelser <svg class="icon icon-chevron" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg></a>
            <div class="mega-menu">
              <div class="mega-menu__inner">
                <?php psykolog_mega_menu( 'mega-conditions', 'option' ); ?>
              </div>
            </div>
          </div>

<!--           <div class="nav-item has-dropdown">
            <a href="#home-formats" class="nav-link" data-scroll>Therapies <svg class="icon icon-chevron" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg></a>
            <div class="mega-menu">
              <div class="mega-menu__inner">
                <?php psykolog_mega_menu( 'mega-therapies', 'option' ); ?>
              </div>
            </div>
          </div> -->

          <div class="nav-item">
            <a href="https://sysinn.net/psykolog.no/priser/" class="nav-link">Priser</a>
          </div>

          <div class="nav-item has-dropdown">
            <a href="https://sysinn.net/psykolog.no/om-oss/" class="nav-link">Om oss <svg class="icon icon-chevron" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg></a>
            <div class="mega-menu">
              <div class="mega-menu__inner">
                <?php psykolog_mega_menu( 'mega-about', 'option' ); ?>
              </div>
            </div>
          </div>

          <div class="nav-item">
            <a href="https://sysinn.net/psykolog.no/artikler/" class="nav-link">Artikler</a>
          </div>
			<div class="nav-item">
            <a href="https://sysinn.net/psykolog.no/kontakt-oss/" class="nav-link">Kontakt oss</a>
          </div>
        </nav>

        <div class="site-header__actions">
          <!-- Expandable Search -->
          <form class="header-search" id="headerSearchForm" action="<?php echo esc_url(home_url('/')); ?>" method="get" role="search">
            <input type="search" name="s" class="header-search__input" id="headerSearchInput" placeholder="Søk etter artikler..." aria-label="Search" autocomplete="off">
            <div id="headerSearchResults" class="header-search-results hidden absolute top-[calc(100%+10px)] right-0 w-[320px] bg-white border border-[#EAEAEA] rounded-[16px] shadow-[0_12px_40px_rgba(0,0,0,0.12)] z-[100] max-h-[400px] overflow-y-auto hidden"></div>
            <button type="button" class="site-header__search-btn" id="headerSearchBtn" aria-label="Toggle Search">
              <svg class="icon search-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:20px;height:20px;">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
            </button>
          </form>

          <a href="https://sysinn.net/psykolog.no/bestill-time/" type="button" class="btn btn--primary" data-scroll data-target="#home-final-cta">
            Bestill Time
            <svg class="icon" style="margin-left:8px; width:18px; height:18px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line><path d="M9 16l2 2 4-4"/></svg>
          </a>
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

    <!-- Mental Health Disorders (has dropdown) -->
    <div class="nav-drawer__accordion">
      <button type="button" class="nav-drawer__link nav-drawer__accordion-trigger" aria-expanded="false">
        <span class="nav-drawer__link-text">Psykiske lidelser</span>
        <svg class="icon nav-drawer__chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
      </button>
      <div class="nav-drawer__accordion-panel">
        <div class="nav-drawer__accordion-inner">
          <a href="https://sysinn.net/psykolog.no/psykisk-helse/" class="nav-drawer__sub-link nav-drawer__sub-link--main" data-close-nav>
            <span>Se alle lidelser</span>
            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
          <?php psykolog_mobile_menu( 'mega-conditions' ); ?>
        </div>
      </div>
    </div>

    <!-- Therapies (has dropdown) -->
<!--     <div class="nav-drawer__accordion">
      <button type="button" class="nav-drawer__link nav-drawer__accordion-trigger" aria-expanded="false">
        <span class="nav-drawer__link-text">Therapies</span>
        <svg class="icon nav-drawer__chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
      </button>
      <div class="nav-drawer__accordion-panel">
        <div class="nav-drawer__accordion-inner">
          <?php psykolog_mobile_menu( 'mega-therapies' ); ?>
        </div>
      </div>
    </div> -->

    <!-- Prices (no dropdown) -->
    <a href="https://sysinn.net/psykolog.no/priser/" class="nav-drawer__link" data-close-nav>
      <span class="nav-drawer__link-text">Priser</span>
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>

    <!-- About Us (has dropdown) -->
    <div class="nav-drawer__accordion">
      <button type="button" class="nav-drawer__link nav-drawer__accordion-trigger" aria-expanded="false">
        <span class="nav-drawer__link-text">Om oss</span>
        <svg class="icon nav-drawer__chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
      </button>
      <div class="nav-drawer__accordion-panel">
        <div class="nav-drawer__accordion-inner">
          <a href="https://sysinn.net/psykolog.no/om-oss/" class="nav-drawer__sub-link nav-drawer__sub-link--main" data-close-nav>
            <span>Oversikt over hvem vi er</span>
            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
          <?php psykolog_mobile_menu( 'mega-about' ); ?>
        </div>
      </div>
    </div>

    <!-- Articles (no dropdown) -->
    <a href="https://sysinn.net/psykolog.no/artikler/" class="nav-drawer__link" data-close-nav>
      <span class="nav-drawer__link-text">Artikler</span>
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
	  <a href="https://sysinn.net/psykolog.no/kontakt-oss/" class="nav-drawer__link" data-close-nav>
      <span class="nav-drawer__link-text">Kontakt oss</span>
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>

    <!-- Topbar / Network links -->
    <div class="nav-drawer__network">
      <span class="nav-drawer__network-label">Vårt nettverk for psykisk helse</span>
      <a href="https://dps.no" class="nav-drawer__network-link" data-close-nav>
        <span>Dps.no</span>
        <span class="nav-drawer__network-go">↗</span>
      </a>
      <a href="https://psykiater.no" class="nav-drawer__network-link" data-close-nav>
        <span>Psykiater.no</span>
        <span class="nav-drawer__network-go">↗</span>
      </a>
      <a href="https://spesialistipsykiatri.no/" class="nav-drawer__network-link" data-close-nav>
        <span>Spesialistpsykiatri.no</span>
        <span class="nav-drawer__network-go">↗</span>
      </a>
    </div>

  </div>

  <div class="nav-drawer__footer">
    <a href="https://sysinn.net/psykolog.no/bestill-time/" type="button" class="btn btn--primary nav-drawer__cta" data-scroll data-target="#home-final-cta" data-close-nav>Bestill time</a>
    <p class="nav-drawer__tagline">Ingen henvisning nødvendig · Tilgjengelig innen 1–3 dager</p>
  </div>
</nav>
