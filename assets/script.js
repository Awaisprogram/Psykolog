/* =====================================================================
   psykolog.no — production script (merged: main site + ADHD page)
   Vanilla JS, no dependencies. Organised by feature block.
   ===================================================================== */
(() => {
  'use strict';

  const $ = (sel, ctx) => (ctx || document).querySelector(sel);
  const $$ = (sel, ctx) => Array.from((ctx || document).querySelectorAll(sel));

  function debounce(fn, wait) {
    let t;
    return function (...args) {
      clearTimeout(t);
      t = setTimeout(() => fn.apply(this, args), wait);
    };
  }

  /* -------------------------------------------------------------------
     0. Icon renderer — lightweight inline-SVG icon set
     ------------------------------------------------------------------- */
  const ICONS = {
    'calendar-clock': '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/><circle cx="16" cy="16" r="3"/><path d="M16 14.8V16l1 1"/>',
    'file-x': '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9.5 13.5l5 5M14.5 13.5l-5 5"/>',
    'shield-check': '<path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6z"/><path d="M8.5 12l2.5 2.5L15.5 9"/>',
    video: '<rect x="2" y="5" width="14" height="14" rx="2"/><path d="M16 10l6-3v10l-6-3z"/>',
    brain: '<path d="M9 4a3 3 0 0 0-3 3 3 3 0 0 0-2 5 3 3 0 0 0 2 5 3 3 0 0 0 5 1v-1.5a2 2 0 0 1 0-15z"/><path d="M15 4a3 3 0 0 1 3 3 3 3 0 0 1 2 5 3 3 0 0 1-2 5 3 3 0 0 1-5 1v-1.5a2 2 0 0 0 0-15z"/>',
    moon: '<path d="M20 14.5A8.5 8.5 0 1 1 9.5 4 7 7 0 0 0 20 14.5z"/>',
    'battery-low': '<rect x="2" y="7" width="18" height="10" rx="2"/><path d="M22 10v4M5 10v4"/>',
    target: '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/>',
    'cloud-rain': '<path d="M6 16a4 4 0 0 1 0-8 5 5 0 0 1 9.6-1.5A4.5 4.5 0 0 1 18 16z"/><path d="M8 19l-1 2M12 19l-1 2M16 19l-1 2"/>',
    flame: '<path d="M12 2c1 3-3 4-3 8a3 3 0 0 0 6 0c0-1.5-1-2-1-3 2 1 4 3 4 6a6 6 0 1 1-12 0c0-4 3-6 6-11z"/>',
    'graduation-cap': '<path d="M2 9l10-5 10 5-10 5z"/><path d="M6 11.5v4c0 1.5 2.5 3 6 3s6-1.5 6-3v-4"/><path d="M22 9v6"/>',
    pill: '<rect x="3" y="9" width="18" height="6" rx="3" transform="rotate(-45 12 12)"/><path d="M8.5 8.5l7 7"/>',
    'message-circle': '<path d="M21 11.5a8.5 8.5 0 1 1-4-7.2L21 3z"/><path d="M21 11.5c0 4.7-3.8 8.5-8.5 8.5A8.4 8.4 0 0 1 8 19l-5 1 1-4.5"/>',
    users: '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><circle cx="17.5" cy="9.5" r="2.8"/><path d="M15.5 14.5a5.2 5.2 0 0 1 6 5.5"/>',
    'heart-handshake': '<path d="M12 6.5c-1.4-2-4.7-2.4-6.2-.4-1.6 2-1 4.7 1 6.5l5.2 4.4 5.2-4.4c2-1.8 2.6-4.5 1-6.5-1.5-2-4.8-1.6-6.2.4z"/>',
    baby: '<circle cx="12" cy="8" r="4"/><path d="M9 8.5c0 1.5 1.3 2 3 2s3-.5 3-2"/><path d="M5.5 20a6.5 6.5 0 0 1 13 0"/>',
    heart: '<path d="M12 20 4 12.5A5 5 0 0 1 12 6a5 5 0 0 1 8 6.5z"/>',
    'file-search': '<path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><path d="M13 2v7h7"/><circle cx="11" cy="16" r="2.3"/><path d="M13 18l2 2"/>',
    wind: '<path d="M3 8h11a3 3 0 1 0-3-3"/><path d="M3 13h15a3 3 0 1 1-3 3"/><path d="M3 18h8a2.3 2.3 0 1 0-2.3-2.3"/>',
    activity: '<path d="M2 12h4l3 8 4-16 3 8h6"/>',
    shuffle: '<path d="M3 6h4l9 12h5M14 6h6M17 3l3 3-3 3M3 18h4l3-4M17 18h3l-3 3 3 3" />',
    utensils: '<path d="M6 2v8M9 2v8M6 10a3 3 0 0 1 3 3v9M15 2c-1.5 1-2 3-2 5s.5 4 2 5v9M15 2v9"/>',
    user: '<circle cx="12" cy="8" r="4"/><path d="M4 20a8 8 0 0 1 16 0"/>',
    'chevron-down': '<path d="M6 9l6 6 6-6"/>',
    repeat: '<path d="M17 2l4 4-4 4"/><path d="M3 11V9a4 4 0 0 1 4-4h14"/><path d="M7 22l-4-4 4-4"/><path d="M21 13v2a4 4 0 0 1-4 4H3"/>',
    history: '<path d="M3 12a9 9 0 1 0 3-6.7"/><path d="M3 4v5h5"/><path d="M12 8v4l3 2"/>',
    eye: '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/>',
    lock: '<rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/>',
    'map-pin': '<path d="M12 21s7-6.6 7-11.5A7 7 0 0 0 5 9.5C5 14.4 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.3"/>',
    clock: '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/>',
    briefcase: '<rect x="2" y="7" width="20" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>',
    stethoscope: '<path d="M6 3v6a4 4 0 0 0 8 0V3"/><path d="M10 13v2a6 6 0 0 0 12 0v-2"/><circle cx="20" cy="10" r="2"/>',
    'arrow-right': '<path d="M5 12h14M13 6l6 6-6 6"/>',
    instagram: '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/>',
    linkedin: '<rect x="3" y="3" width="18" height="18" rx="3"/><path d="M7 10v7M7 7v.01M11 17v-4.5a2 2 0 0 1 4 0V17M11 12.5v0"/>',
    facebook: '<path d="M15 3h-2a5 5 0 0 0-5 5v2H6v4h2v7h4v-7h3l1-4h-4V8a1 1 0 0 1 1-1h3z"/>',
    sparkles: '<path d="M12 3l1.5 4.5L18 9l-4.5 1.5L12 15l-1.5-4.5L6 9l4.5-1.5z"/><path d="M19 15l.7 2 2 .7-2 .7-.7 2-.7-2-2-.7 2-.7z"/>',
    pencil: '<path d="M4 20h4l10-10-4-4L4 16z"/><path d="M13 6l4 4"/>',
    compass: '<circle cx="12" cy="12" r="9"/><path d="M15 9l-2 6-6 2 2-6z"/>',
    'building-2': '<rect x="3" y="8" width="8" height="13"/><rect x="13" y="3" width="8" height="18"/><path d="M6 12h2M6 16h2M16 7h2M16 11h2M16 15h2"/>',
    info: '<circle cx="12" cy="12" r="9"/><path d="M12 8h.01M11 12h1v5h1"/>',
    waves: '<path d="M2 12c2-4 4-4 6 0s4 4 6 0 4-4 6 0"/><path d="M2 17c2-4 4-4 6 0s4 4 6 0 4-4 6 0"/>',
    dna: '<path d="M9 3v4M9 17v4M15 3v4M15 17v4"/><path d="M9 7c2 2 4 2 6 0M9 11c2 2 4 2 6 0M9 15c2 2 4 2 6 0"/>',
    leaf: '<path d="M6 20C14 20 20 14 20 6c-8 0-14 6-14 14z"/><path d="M6 20c0-6 4-10 10-10"/>',
    puzzle: '<path d="M10 3h4v3a2 2 0 0 0 4 0V3h3v4a2 2 0 0 0 0 4h-3v3h-4v-3a2 2 0 0 0-4 0v3H3v-4a2 2 0 0 0 0-4h3V3z"/>',
    'user-round': '<circle cx="12" cy="8" r="4"/><path d="M4 20a8 8 0 0 1 16 0"/>',
    check: '<path d="M5 12l5 5L20 7"/>',
    x: '<path d="M18 6L6 18M6 6l12 12"/>',
    image: '<rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M21 17l-5-5-4 4-3-3-5 5"/>',
    'calendar-check': '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/><path d="M9 15l2 2 4-4"/>',
    'refresh-cw': '<path d="M3 12a9 9 0 0 1 15-6.7"/><path d="M21 3v6h-6"/><path d="M21 12a9 9 0 0 1-15 6.7"/><path d="M3 21v-6h6"/>',
    percent: '<circle cx="9" cy="9" r="2"/><path d="M15 15l-6-6"/><circle cx="17" cy="17" r="2"/>',
    'circle-x': '<circle cx="12" cy="12" r="9"/><path d="M15 9l-6 6M9 9l6 6"/>',
    layers: '<path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>',
    zap: '<path d="M13 2L3 14h8l-1 8 10-12h-8l1-8z"/>',
    cloud: '<path d="M6 16a4 4 0 0 1 0-8 5 5 0 0 1 9.6-1.5A4.5 4.5 0 0 1 18 16z"/>'
  };

  function renderIcons(root = document) {
    root.querySelectorAll('svg.icon[data-icon]').forEach((svg) => {
      const name = svg.getAttribute('data-icon');
      const inner = ICONS[name];
      if (!inner || svg.dataset.rendered) return;
      svg.setAttribute('viewBox', '0 0 24 24');
      svg.setAttribute('fill', 'none');
      svg.setAttribute('stroke', 'currentColor');
      svg.setAttribute('stroke-width', '1.8');
      svg.setAttribute('stroke-linecap', 'round');
      svg.setAttribute('stroke-linejoin', 'round');
      svg.innerHTML = inner;
      svg.dataset.rendered = 'true';
    });
  }

  const headerBar = document.querySelector('.site-header__bar');

  /* ---------------------------------------------------------
     Header: shrink/shadow state once the page has scrolled
     (single implementation — replaces the two near-duplicates)
  --------------------------------------------------------- */
  function initHeaderScroll() {
    const bar = headerBar || $(".site-header__bar");
    if (!bar) return;
    const onScroll = () => {
      bar.classList.toggle("is-scrolled", window.scrollY > 12);
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }

  /* ---------------------------------------------------------
     Mobile off-canvas nav drawer (side drawer)
     single implementation — kept from adhd.js, since this is
     the markup the site actually ships (#navDrawer / #navBackdrop)
  --------------------------------------------------------- */
  function initMobileNav() {
    const toggle = $("#navToggle");
    const drawer = $("#mobileNav") || $("#navDrawer");
    const backdrop = $("#navBackdrop") || $(".nav-backdrop");
    const closeBtn = $("#navDrawerClose") || $("#mobileNavClose");
    if (!toggle || !drawer || !backdrop) return;

    function open() {
      drawer.hidden = false;
      backdrop.classList.add("is-visible");
      requestAnimationFrame(() => {
        drawer.classList.add("is-open");
        backdrop.classList.add("is-open");
      });
      toggle.classList.add("is-active");
      toggle.setAttribute("aria-expanded", "true");
      headerBar && headerBar.classList.add("is-nav-open");
      document.body.style.overflow = "hidden";
    }

    function close() {
      drawer.classList.remove("is-open");
      backdrop.classList.remove("is-open");
      toggle.classList.remove("is-active");
      toggle.setAttribute("aria-expanded", "false");
      headerBar && headerBar.classList.remove("is-nav-open");
      document.body.style.overflow = "";
      const onEnd = () => {
        drawer.hidden = true;
        backdrop.classList.remove("is-visible");
        drawer.removeEventListener("transitionend", onEnd);
      };
      drawer.addEventListener("transitionend", onEnd);
    }

    toggle.addEventListener("click", () => {
      const isOpen = drawer.classList.contains("is-open");
      isOpen ? close() : open();
    });
    closeBtn && closeBtn.addEventListener("click", close);
    backdrop.addEventListener("click", close);
    $$("[data-close-nav]", drawer).forEach((el) =>
      el.addEventListener("click", close)
    );
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && drawer.classList.contains("is-open")) close();
    });
  }

  /* ---------------------------------------------------------
     Smooth-scroll for [data-scroll][data-target] and #jumpNav
     links, offset by the sticky header's height.
     single implementation — kept from adhd.js (superset of
     the main script's version, which only handled [data-scroll])
  --------------------------------------------------------- */
  function initSmoothScroll() {
    const header = $(".site-header");
    const offset = () => (header ? header.offsetHeight + 24 : 24);

    $$("[data-scroll]").forEach((btn) => {
      btn.addEventListener("click", () => {
        const targetSel = btn.getAttribute("data-target") || btn.getAttribute("href");
        const target = targetSel && $(targetSel);
        if (!target) return;
        const top =
          target.getBoundingClientRect().top + window.scrollY - offset();
        window.scrollTo({ top, behavior: "smooth" });
      });
    });

    $$('#jumpNav a[href^="#"]').forEach((link) => {
      link.addEventListener("click", (e) => {
        const target = $(link.getAttribute("href"));
        if (!target) return;
        e.preventDefault();
        const top =
          target.getBoundingClientRect().top + window.scrollY - offset();
        window.scrollTo({ top, behavior: "smooth" });
      });
    });
  }

  /* ---------------------------------------------------------
     Fade/slide-up reveal for [data-reveal] elements
     single implementation — kept from adhd.js (adds a support
     check + rootMargin over the main script's version)
  --------------------------------------------------------- */
  function initReveal() {
    const items = $$("[data-reveal]");
    if (!items.length) return;

    if (!("IntersectionObserver" in window) || matchMedia('(prefers-reduced-motion: reduce)').matches) {
      items.forEach((el) => el.classList.add("is-visible"));
      return;
    }

    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            io.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: "0px 0px -60px 0px" }
    );

    items.forEach((el) => io.observe(el));
  }

  /* -------------------------------------------------------------------
     Signs — toggleable recognition list
     ------------------------------------------------------------------- */
  function initSigns() {
    const list = document.getElementById('signsList');
    const note = document.getElementById('signsNote');
    if (!list) return;
    const items = list.querySelectorAll('.signs__item');

    function update() {
      const active = list.querySelectorAll('.signs__item.is-active').length;
      if (!note) return;
      if (active === 0) {
        note.textContent = "If several of these statements feel familiar, it's time to talk to a psychologist.";
      } else if (active < 3) {
        note.textContent = `You recognised ${active}. A psychologist can help you to understand the condition and give the right treatment plan.`;
      } else {
        note.textContent = `You recognised ${active} of 6. A psychologist can help you to understand the condition and give the right treatment plan, and you can book without a referral.`;
      }
      note.style.color = active >= 3 ? 'var(--brand-primary)' : 'var(--ink-body)';
    }

    items.forEach((btn) => {
      btn.addEventListener('click', () => { btn.classList.toggle('is-active'); update(); });
    });
  }

  /* -------------------------------------------------------------------
     How it works — sticky-stack stepper
     ------------------------------------------------------------------- */
  function initHiw() {
    const list = document.getElementById('hiwList');
    if (!list) return;
    list.addEventListener('click', (e) => {
      const step = e.target.closest('.hiw__step');
      if (!step) return;
      list.querySelectorAll('.hiw__step').forEach((s) => s.classList.toggle('is-active', s === step));
    });
  }

  /* -------------------------------------------------------------------
     Conditions — category filter + accordion panel + show all
     ------------------------------------------------------------------- */
  function initConditions() {
    const catBar = document.getElementById('condCats');
    const grid = document.getElementById('condGrid');
    if (catBar && grid) {
      catBar.addEventListener('click', (e) => {
        const btn = e.target.closest('[data-cond-cat]');
        if (!btn) return;
        catBar.querySelectorAll('.tab').forEach((t) => t.classList.toggle('is-active', t === btn));
        const cat = btn.dataset.condCat;
        grid.querySelectorAll('.cond-card').forEach((card) => {
          const show = cat === 'all' || card.dataset.cat === cat;
          card.classList.toggle('is-hidden', !show);
        });
      });
    }

    const toggle = document.getElementById('allCondToggle');
    const accordion = document.getElementById('allCondAccordion');
    if (toggle && accordion) {
      toggle.addEventListener('click', () => {
        const open = accordion.classList.toggle('is-open');
        toggle.querySelector('span').textContent = open ? 'Hide the full list' : 'See all disorders';
      });
    }
  }

  /* -------------------------------------------------------------------
     Therapy formats — picker + preview swap
     ------------------------------------------------------------------- */
  function initTabbedPreview(config) {
    const list = document.getElementById(config.listId);
    const preview = document.getElementById(config.previewId);
    if (!list || !preview) return;

    const titleEl = config.titleId ? document.getElementById(config.titleId) : null;
    const descEl = config.descId ? document.getElementById(config.descId) : null;
    const chipEl = config.chipId ? document.getElementById(config.chipId) : null;

    list.addEventListener('click', function (e) {
      const btn = e.target.closest(`[${config.itemAttr}]`);
      if (!btn) return;

      const idx = btn.getAttribute(config.itemAttr);

      list.querySelectorAll(config.itemClass).forEach(function (it) {
        it.classList.toggle('is-active', it === btn);
      });

      preview.querySelectorAll(`[${config.imgAttr}]`).forEach(function (img) {
        img.classList.toggle('is-active', img.getAttribute(config.imgAttr) === idx);
      });

      if (chipEl) chipEl.textContent = btn.getAttribute('data-chip') || '';
      if (titleEl) titleEl.textContent = btn.getAttribute('data-title') || '';
      if (descEl) descEl.textContent = btn.getAttribute('data-desc') || '';
    });
  }

  function initFormats() {
    initTabbedPreview({
      listId: 'formatsList',
      previewId: 'formatsPreview',
      chipId: 'formatsChip',
      titleId: 'formatsTitle',
      descId: 'formatsDesc',
      itemAttr: 'data-format',
      itemClass: '.formats__item',
      imgAttr: 'data-format-img'
    });

    initTabbedPreview({
      listId: 'valuesList',
      previewId: 'valuesPreview',
      titleId: 'valuesTitle',
      descId: 'valuesDesc',
      itemAttr: 'data-value',
      itemClass: '.values__item',
      imgAttr: 'data-value-img'
    });
  }

  function initPsyTasks() {
    initTabbedPreview({
      listId: 'psyTasksList',
      previewId: 'psyTasksPreview',
      chipId: 'psyTasksChip',
      titleId: 'psyTasksTitle',
      descId: 'psyTasksDesc',
      itemAttr: 'data-task',
      itemClass: '.psy-tasks__item',
      imgAttr: 'data-task-img'
    });
  }

  /* -------------------------------------------------------------------
     Psychotherapies — "read more" accordion
     ------------------------------------------------------------------- */
  function initMoreTherapies() {
    const toggle = document.getElementById('moreTxToggle');
    const accordion = document.getElementById('moreTxAccordion');
    if (!toggle || !accordion) return;
    toggle.addEventListener('click', () => {
      const open = accordion.classList.toggle('is-open');
      toggle.querySelector('span').textContent = open ? 'Show fewer therapies' : 'Read about more therapies';
    });
  }

  /* -------------------------------------------------------------------
     Pricing card selection
     ------------------------------------------------------------------- */
  function initPricing() {
    const grid = document.getElementById('priceGrid');
    if (!grid) return;
    grid.addEventListener('click', (e) => {
      const card = e.target.closest('.price-card');
      if (!card) return;
      grid.querySelectorAll('.price-card').forEach((c) => c.classList.toggle('is-active', c === card));
    });
  }

  /* -------------------------------------------------------------------
     Locations — clinic tabs + map + book button
     ------------------------------------------------------------------- */
  const CLINIC_DATA = [
    { short: 'Oslo', mapTitle: 'Map of Oslo', map: 'https://www.openstreetmap.org/export/embed.html?bbox=10.70%2C59.895%2C10.80%2C59.93&layer=mapnik' },
    { short: 'Ski', mapTitle: 'Map of Ski', map: 'https://www.openstreetmap.org/export/embed.html?bbox=10.80%2C59.70%2C10.87%2C59.74&layer=mapnik' }
  ];
  function initLocations() {
    const list = document.getElementById('clinicList');
    const map = document.getElementById('clinicMap');
    const mapTag = document.getElementById('clinicMapTag');
    const bookBtn = document.getElementById('clinicBookBtn');
    if (!list || !map) return;

    list.addEventListener('click', (e) => {
      const card = e.target.closest('[data-clinic]');
      if (!card) return;
      list.querySelectorAll('[data-clinic]').forEach((c) => {
        const isActive = c === card;
        c.classList.toggle('is-active', isActive);
        c.classList.toggle('bg-[#F8D8D4]', isActive);
        c.classList.toggle('border-[#A93E28]', isActive);
        c.classList.toggle('bg-white', !isActive);
        c.classList.toggle('border-[#EBE1DA]', !isActive);
        c.setAttribute('aria-pressed', String(isActive));
      });
      const idx = +card.dataset.clinic;
      const d = CLINIC_DATA[idx];
      if (!d) return;
      map.src = d.map;
      map.title = d.mapTitle;
      mapTag.textContent = `${d.short} clinic`;
      if (bookBtn) bookBtn.textContent = `Bestill time hos ${d.short}`;
    });
  }

  /* -------------------------------------------------------------------
     Mental health checklist tally
     ------------------------------------------------------------------- */
  function initChecklistTally() {
    const tallyScore = document.getElementById('mhTallyScore');
    const tallyProgress = document.getElementById('mhTallyProgress');
    const checkboxes = document.querySelectorAll('.form-checkbox');
    if (!tallyScore || !tallyProgress || !checkboxes.length) return;

    const update = () => {
      const checkedCount = [...checkboxes].filter((cb) => cb.checked).length;
      tallyScore.textContent = checkedCount;

      const percentage = (checkedCount / checkboxes.length) * 100;
      tallyProgress.style.width = `${percentage}%`;

      if (checkedCount > 5) {
        tallyProgress.style.backgroundColor = 'var(--brand-primary)';
      } else if (checkedCount > 0) {
        tallyProgress.style.backgroundColor = '#8F3420';
      } else {
        tallyProgress.style.backgroundColor = '#DFD0C7';
      }
    };

    checkboxes.forEach((cb) => cb.addEventListener('change', update));
    update();
  }

  /* -------------------------------------------------------------------
     FAQ accordion (main site FAQ list — #faqList)
     ------------------------------------------------------------------- */
  function initFaq() {
    const items = $$('.faq-item');
    if (!items.length) return;
    const minusIcon = 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"%3E%3Cpath d="M4 10h12" fill="none" stroke="%23C24C33" stroke-width="2" stroke-linecap="round"/%3E%3C/svg%3E';

    items.forEach((item, index) => {
      const trigger = item.querySelector('.faq-item__trigger, button');
      const panel = item.querySelector('.faq-item__panel, .faq-content');
      const icon = trigger && trigger.querySelector('img');
      if (!trigger || !panel) return;

      if (!panel.id) panel.id = `faq-answer-${index + 1}`;
      trigger.type = 'button';
      trigger.setAttribute('aria-controls', panel.id);
      trigger.setAttribute('aria-expanded', 'false');
      const plusIcon = icon && icon.getAttribute('src');

      trigger.addEventListener('click', () => {
        const isOpen = item.classList.toggle('is-open');
        trigger.setAttribute('aria-expanded', String(isOpen));
        if (icon && plusIcon) {
          icon.src = isOpen ? minusIcon : plusIcon;
          icon.alt = isOpen ? 'Minus Icon' : 'Plus Icon';
        }

        if (panel.classList.contains('faq-content')) {
          panel.classList.toggle('hidden', !isOpen);
        }
      });
    });
  }

  /* -------------------------------------------------------------------
     Mental health page — youth accordion, FAQs, and relative support tabs
     ------------------------------------------------------------------- */
  function toggleAccordion(button) {
    const item = button.closest('.accordion-item');
    if (!item) return;
    const content = item.querySelector('.accordion-content');
    const iconWrap = item.querySelector('.accordion-icon');
    const isOpen = !item.classList.contains('is-open');
    item.classList.toggle('is-open', isOpen);

    if (content) {
      content.classList.remove('hidden');
      if (isOpen) {
        content.style.maxHeight = `${content.scrollHeight}px`;
        content.style.opacity = '1';
      } else {
        content.style.maxHeight = '0px';
        content.style.opacity = '0';
        setTimeout(() => content.classList.add('hidden'), 260);
      }
    }
    if (iconWrap) {
      const svg = iconWrap.querySelector('svg');
      if (svg) svg.style.transform = isOpen ? 'rotate(180deg)' : 'rotate(0deg)';
    }
  }

  function switchRelativeTab(index) {
    const cards = document.querySelectorAll('.relative_tab_card');
    if (!cards.length) return;

    cards.forEach((card, idx) => {
      const title = card.querySelector('.relative_tab_title');
      const isActive = idx === index;
      card.classList.toggle('border-l-[#A85848]', isActive);
      card.classList.toggle('border-l-transparent', !isActive);
      if (title) {
        title.classList.toggle('text-[#A85848]', isActive);
        title.classList.toggle('text-ink-900', !isActive);
      }
    });

    const selectedCard = document.getElementById(`rel-card-${index}`);
    if (!selectedCard) return;

    const newImage = selectedCard.getAttribute('data-image');
    const newTitle = selectedCard.getAttribute('data-title');
    const imgElement = document.getElementById('mhRelativesActiveImg');
    const titleElement = document.getElementById('mhRelativesActiveTitle');

    if (imgElement) {
      imgElement.style.opacity = '0.4';
      setTimeout(() => {
        if (newImage) imgElement.src = newImage;
        imgElement.style.opacity = '1';
      }, 150);
    }

    if (titleElement && newTitle) {
      titleElement.textContent = newTitle;
    }
  }

  function initMentalHealthInteractions() {
    const youthButtons = document.querySelectorAll('#mh-youth .accordion-item button');
    youthButtons.forEach((button) => {
      button.addEventListener('click', () => toggleAccordion(button));
    });

    const relativeCards = document.querySelectorAll('.relative_tab_card');
    relativeCards.forEach((card) => {
      const idx = Number(card.id.replace('rel-card-', ''));
      card.addEventListener('click', () => switchRelativeTab(idx));
      card.addEventListener('mouseenter', () => switchRelativeTab(idx));
    });

    if (relativeCards.length) switchRelativeTab(0);
  }

  /* -------------------------------------------------------------------
     Articles pagination (static demo data, 4 pages)
     ------------------------------------------------------------------- */
  function initArticlesPagination() {
    const pag = document.getElementById('articlesPagination');
    if (!pag) return;
    const nums = pag.querySelectorAll('.pagination__num');
    const prev = pag.querySelector('[data-page-prev]');
    const next = pag.querySelector('[data-page-next]');
    let page = 1;
    const max = nums.length;

    function render() {
      nums.forEach((n) => n.classList.toggle('is-active', +n.dataset.page === page));
      prev.disabled = page === 1;
      next.disabled = page === max;
    }
    pag.addEventListener('click', (e) => {
      const num = e.target.closest('[data-page]');
      if (num) { page = +num.dataset.page; render(); return; }
      if (e.target.closest('[data-page-prev]')) { page = Math.max(1, page - 1); render(); }
      if (e.target.closest('[data-page-next]')) { page = Math.min(max, page + 1); render(); }
    });
    render();
  }

  /* -------------------------------------------------------------------
     AI matching assistant — full multi-step wizard
     ------------------------------------------------------------------- */
  const AI_CONCERNS = [
    { id: 'anxiety', t: 'Anxiety', d: 'Worry that is hard to switch off', icon: 'activity' },
    { id: 'stress', t: 'Stress', d: 'Ongoing pressure and overload', icon: 'target' },
    { id: 'burnout', t: 'Burnout', d: 'Exhaustion after long strain', icon: 'battery-low' },
    { id: 'depression', t: 'Depression', d: 'Low mood and lost interest', icon: 'cloud-rain' },
    { id: 'panic', t: 'Panic attacks', d: 'Sudden, intense physical fear', icon: 'heart' },
    { id: 'sleep', t: 'Sleep problems', d: 'Trouble falling or staying asleep', icon: 'moon' },
    { id: 'trauma', t: 'Trauma', d: 'Memories that still intrude', icon: 'cloud-rain' },
    { id: 'relationships', t: 'Relationship issues', d: 'Strain with a partner or family', icon: 'heart-handshake' },
    { id: 'grief', t: 'Grief', d: 'A loss that is hard to carry', icon: 'heart' },
    { id: 'social', t: 'Social anxiety', d: 'Fear of judgement around others', icon: 'users' },
    { id: 'parenting', t: 'Parenting challenges', d: 'Finding the parenting role hard', icon: 'baby' },
    { id: 'ocd', t: 'OCD', d: 'Intrusive thoughts and rituals', icon: 'repeat' },
    { id: 'adhd', t: 'ADHD', d: 'Attention, restlessness, impulsivity', icon: 'shuffle' },
    { id: 'eating', t: 'Eating disorders', d: 'A hard relationship with food', icon: 'utensils' },
    { id: 'work', t: 'Work pressure', d: 'Demands that feel unmanageable', icon: 'briefcase' },
    { id: 'exhaustion', t: 'Emotional exhaustion', d: 'Nothing left to give', icon: 'battery-low' },
    { id: 'esteem', t: 'Self-esteem', d: 'A harsh inner critic', icon: 'user' },
    { id: 'lonely', t: 'Loneliness', d: 'Disconnected from other people', icon: 'user' },
    { id: 'change', t: 'Major life changes', d: 'Adjusting to something new', icon: 'compass' }
  ];

  const AI_QUESTION_BANK = {
    anxiety: [
      { id: 'anx1', q: 'Do you feel anxious most days?', o: ['Most days', 'Some days', 'Now and then'] },
      { id: 'anx2', q: 'Does it affect work or studies?', o: ['Yes, noticeably', 'Sometimes', 'Not really'] },
      { id: 'anx3', q: 'Do you avoid certain situations?', o: ['Often', 'Occasionally', 'No'] }
    ],
    burnout: [
      { id: 'bo1', q: 'Do you feel emotionally exhausted?', o: ['Most days', 'Some days', 'Now and then'] },
      { id: 'bo2', q: 'Is work the main source?', o: ['Mainly work', 'Work and home', 'Mainly home'] },
      { id: 'bo3', q: 'Do you struggle to recover after rest?', o: ['Yes', 'Sometimes', 'No'] }
    ],
    depression: [
      { id: 'dp1', q: 'Have you noticed changes in sleep?', o: ['Sleeping less', 'Sleeping more', 'No change'] },
      { id: 'dp2', q: 'Have you lost interest in things you enjoyed?', o: ['Yes', 'Somewhat', 'No'] },
      { id: 'dp3', q: 'Has your concentration changed?', o: ['Yes', 'Somewhat', 'No'] }
    ],
    relationships: [
      { id: 'rl1', q: 'Who is this mainly about?', o: ['My partner', 'Family', 'Friends'] },
      { id: 'rl2', q: 'What feels hardest right now?', o: ['Communication', 'Trust', 'Conflict'] },
      { id: 'rl3', q: 'Would you consider coming together?', o: ["Yes", 'Maybe', "I'd prefer alone"] }
    ],
    sleep: [
      { id: 'sl1', q: 'What is hardest about sleep?', o: ['Falling asleep', 'Staying asleep', 'Waking too early'] },
      { id: 'sl2', q: 'Do worries keep you awake?', o: ['Often', 'Sometimes', 'Rarely'] }
    ],
    trauma: [
      { id: 'tr1', q: 'Do difficult memories arrive unexpectedly?', o: ['Often', 'Sometimes', 'Rarely'] },
      { id: 'tr2', q: 'Do you avoid reminders of it?', o: ['Often', 'Sometimes', 'No'] }
    ],
    adhd: [
      { id: 'ad1', q: 'Has this been present since childhood?', o: ['Yes', 'Not sure', 'No'] },
      { id: 'ad2', q: 'Where does it affect you most?', o: ['Work', 'Studies', 'Home life'] },
      { id: 'ad3', q: 'Have you been assessed before?', o: ['Yes', 'No'] }
    ],
    panic: [
      { id: 'pa1', q: 'How often do attacks happen?', o: ['Weekly or more', 'Monthly', 'Rarely'] },
      { id: 'pa2', q: 'Do you avoid places where they happened?', o: ['Yes', 'Sometimes', 'No'] }
    ],
    stress: [
      { id: 'st1', q: 'Where does the pressure come from?', o: ['Work', 'Studies', 'Home', 'Several places'] },
      { id: 'st2', q: 'Do you get time to recover?', o: ['Rarely', 'Sometimes', 'Often'] }
    ],
    work: [
      { id: 'wk1', q: 'How long have the demands felt this high?', o: ['Recently', 'Several months', 'As long as I can recall'] },
      { id: 'wk2', q: 'Is stepping back an option right now?', o: ['No', 'Perhaps', 'Yes'] }
    ],
    grief: [
      { id: 'gr1', q: 'Is this a recent loss?', o: ['Recent', 'Within the year', 'Longer ago'] },
      { id: 'gr2', q: 'Do you have people around you?', o: ['Yes', 'A few', 'Not really'] }
    ],
    social: [
      { id: 'so1', q: 'Which situations feel hardest?', o: ['Groups', 'Speaking up', 'Meeting new people'] },
      { id: 'so2', q: 'Do you turn down invitations because of it?', o: ['Often', 'Sometimes', 'Rarely'] }
    ],
    ocd: [
      { id: 'oc1', q: 'Do rituals take up much of your day?', o: ['Over an hour', 'Some time', 'A little'] },
      { id: 'oc2', q: 'Do the thoughts feel distressing?', o: ['Very', 'Somewhat', 'Manageable'] }
    ],
    eating: [
      { id: 'ea1', q: 'Would you like this handled with extra care?', o: ['Yes, please', 'Not sure'] },
      { id: 'ea2', q: 'Has anyone supported you with it before?', o: ['Yes', 'No'] }
    ],
    parenting: [
      { id: 'pr1', q: 'Which stage are your children at?', o: ['Young children', 'School age', 'Teenagers'] },
      { id: 'pr2', q: 'Is this about them, or about you?', o: ['Them', 'Me', 'Both'] }
    ],
    esteem: [
      { id: 'es1', q: 'How often is your inner voice critical?', o: ['Most days', 'Some days', 'Rarely'] },
      { id: 'es2', q: 'Does it hold you back from things?', o: ['Yes', 'Sometimes', 'No'] }
    ],
    lonely: [
      { id: 'lo1', q: 'Has this changed recently?', o: ['Yes, recently', 'Gradually', "It's long-standing"] },
      { id: 'lo2', q: 'Would you like support building connection?', o: ['Yes', 'Maybe'] }
    ],
    change: [
      { id: 'ch1', q: 'What kind of change is it?', o: ['Work', 'A relationship', 'Health', 'Moving'] },
      { id: 'ch2', q: 'Was it your choice?', o: ['Yes', 'Partly', 'No'] }
    ],
    exhaustion: [
      { id: 'ex1', q: 'Do you feel you have anything left to give?', o: ['Very little', 'Some', 'Enough'] },
      { id: 'ex2', q: 'Who is carrying most of the load?', o: ['Me', 'Shared', 'Not sure'] }
    ]
  };

  const AI_PSYCHOLOGISTS = [
    { name: 'Ingrid Halvorsen', title: 'Specialist Psychologist', specs: ['ADHD', 'ADHD women', 'Low Self-Esteem'], treats: ['adhd', 'esteem', 'change', 'work'], avail: 'Next available Thursday', img: 'https://images.unsplash.com/photo-1590650153855-d9e808231d41?auto=format&fit=crop&w=400&q=70' },
    { name: 'Mathias Bjørnstad', title: 'Psychologist', specs: ['Anxiety', 'Panic Anxiety', 'Agoraphobia'], treats: ['anxiety', 'panic', 'social', 'sleep', 'ocd'], avail: 'Next available tomorrow', img: 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=400&q=70' },
    { name: 'Sofie Lindqvist', title: 'Psychologist', specs: ['Breakup / Jealousy', 'Children and Adolescents', 'Grief'], treats: ['relationships', 'parenting', 'lonely', 'grief'], avail: 'Next available Monday', img: 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=400&q=70' },
    { name: 'Anders Vik', title: 'Specialist Psychologist', specs: ['Depression', 'Bipolar Disorder', 'Guilt / Shame'], treats: ['depression', 'esteem', 'lonely', 'grief', 'change'], avail: 'Next available Wednesday', img: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=70' },
    { name: 'Nora Fjeldstad', title: 'Psychologist', specs: ['PTSD / Trauma', 'OCD', 'Specific Phobias'], treats: ['trauma', 'panic', 'grief', 'eating'], avail: 'Next available Friday', img: 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=400&q=70' },
    { name: 'Henrik Aasen', title: 'Psychologist', specs: ['Burnout', 'Stress', 'Sleep Problems'], treats: ['burnout', 'stress', 'work', 'exhaustion', 'sleep'], avail: 'Next available tomorrow', img: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=400&q=70' }
  ];

  function initAiAssistant() {
    const launcher = document.getElementById('aiLauncher');
    const scrim = document.getElementById('aiScrim');
    const modal = document.getElementById('aiModal');
    const closeBtn = document.getElementById('aiCloseBtn');
    const backBtn = document.getElementById('aiBackBtn');
    const nextBtn = document.getElementById('aiNextBtn');
    const foot = document.getElementById('aiFoot');
    const body = document.getElementById('aiBody');
    const stepLabel = document.getElementById('aiStepLabel');
    const progressBar = document.getElementById('aiProgressBar');
    const concernCards = document.getElementById('aiConcernCards');
    const selCount = document.getElementById('aiSelCount');
    const ownToggle = document.getElementById('aiOwnToggle');
    const ownPanel = document.getElementById('aiOwnPanel');
    const ownWords = document.getElementById('aiOwnWords');
    const durationsWrap = document.getElementById('aiDurations');
    const questionsWrap = document.getElementById('aiQuestions');
    const prefsWrap = document.getElementById('aiPrefs');
    const matchLinesWrap = document.getElementById('aiMatchLines');
    const matchBar = document.getElementById('aiMatchBar');
    const matchIntro = document.getElementById('aiMatchIntro');
    const resultsWrap = document.getElementById('aiResults');
    const restartBtn = document.getElementById('aiRestartBtn');

    if (!launcher || !scrim) return;

    const state = {
      step: 0,
      concerns: [],
      ownWords: '',
      duration: -1,
      answers: {},
      prefs: [],
      matchTimer: null
    };

    function renderConcerns() {
      concernCards.innerHTML = AI_CONCERNS.map((c) => `
        <button type="button" class="ai-concern${state.concerns.includes(c.id) ? ' is-active' : ''}" data-concern="${c.id}">
          <span class="icon-circle icon-circle--sm"><svg class="icon" data-icon="${c.icon}"></svg></span>
          <span><strong>${c.t}</strong><small>${c.d}</small></span>
          <span class="ai-concern__check">✓</span>
        </button>`).join('');
      renderIcons(concernCards);
      updateSelCount();
    }

    function updateSelCount() {
      selCount.textContent = state.concerns.length === 0
        ? 'Select everything that applies, there is no wrong answer.'
        : `${state.concerns.length} selected`;
    }

    function renderDurations() {
      durationsWrap.querySelectorAll('.ai-seg__opt').forEach((btn) => {
        btn.classList.toggle('is-active', +btn.dataset.duration === state.duration);
      });
    }

    function activeQuestions() {
      const picked = [{ id: 'impact', q: 'How much is this affecting your daily life right now?', scale: true }];
      let round = 0;
      while (picked.length < 4 && round < 3) {
        for (const id of state.concerns) {
          const set = AI_QUESTION_BANK[id];
          if (set && set[round] && picked.length < 4) picked.push(set[round]);
        }
        round++;
      }
      return picked;
    }

    const SCALE_OPTS = [
      { t: 'Barely', icon: 'compass' }, { t: 'A little', icon: 'compass' }, { t: 'Moderately', icon: 'compass' },
      { t: 'A lot', icon: 'compass' }, { t: 'Overwhelmingly', icon: 'compass' }
    ];

    function renderQuestions() {
      const qs = activeQuestions();
      questionsWrap.innerHTML = qs.map((q) => {
        if (q.scale) {
          const cur = state.answers[q.id];
          return `<div class="ai-question" data-qid="${q.id}"><p>${q.q}</p>
            <div class="ai-scale">${SCALE_OPTS.map((sc, si) => `<button type="button" class="${cur === si ? 'is-active' : ''}" data-scale="${si}"><svg class="icon" data-icon="${sc.icon}"></svg><span>${sc.t}</span></button>`).join('')}</div>
          </div>`;
        }
        const cur = state.answers[q.id];
        return `<div class="ai-question" data-qid="${q.id}"><p>${q.q}</p>
          <div class="ai-chips">${q.o.map((o) => `<button type="button" class="${cur === o ? 'is-active' : ''}" data-opt="${o}">${o}</button>`).join('')}</div>
        </div>`;
      }).join('');
      renderIcons(questionsWrap);
    }

    function renderPrefs() {
      prefsWrap.querySelectorAll('.ai-pref').forEach((btn) => {
        btn.classList.toggle('is-active', state.prefs.includes(btn.dataset.pref));
      });
    }

    function canAdvance() {
      switch (state.step) {
        case 0: return state.concerns.length > 0 || state.ownWords.trim().length > 0;
        case 1: return state.duration > -1;
        case 2: return true;
        case 3: return state.prefs.length > 0;
        default: return true;
      }
    }

    function updateNav() {
      const ok = canAdvance();
      nextBtn.disabled = !ok;
      nextBtn.textContent = state.step === 3 ? 'See My Matches' : 'Continue';
      backBtn.style.visibility = state.step > 0 ? 'visible' : 'hidden';
      foot.style.display = state.step < 4 ? 'flex' : 'none';
      stepLabel.style.display = state.step < 4 ? 'inline' : 'none';
      stepLabel.textContent = `Step ${Math.min(state.step + 1, 4)} of 4`;
      const pct = state.step >= 5 ? 100 : Math.round(((Math.min(state.step, 4) + 1) / 5) * 100);
      progressBar.style.width = pct + '%';
    }

    function showStep() {
      body.querySelectorAll('.ai-screen').forEach((scr) => {
        scr.classList.toggle('is-active', +scr.dataset.aiStep === state.step);
      });
      if (state.step === 0) renderConcerns();
      if (state.step === 1) renderDurations();
      if (state.step === 2) renderQuestions();
      if (state.step === 3) renderPrefs();
      if (state.step === 5) renderResults();
      updateNav();
      body.scrollTop = 0;
    }

    function runMatch() {
      const reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
      if (state.matchTimer) clearInterval(state.matchTimer);
      const lines = matchLinesWrap.querySelectorAll('span');
      if (reduced) {
        matchBar.style.width = '100%';
        state.step = 5;
        showStep();
        return;
      }
      let t = 0;
      const total = 2400, tick = 60;
      matchBar.style.width = '0%';
      lines.forEach((l, i) => l.classList.toggle('is-active', i === 0));
      state.matchTimer = setInterval(() => {
        t += tick;
        const p = Math.min(1, t / total);
        matchBar.style.width = Math.round(p * 100) + '%';
        const lineIdx = Math.min(2, Math.floor(p * 3));
        lines.forEach((l, i) => l.classList.toggle('is-active', i === lineIdx));
        if (p >= 1) {
          clearInterval(state.matchTimer);
          state.matchTimer = null;
          state.step = 5;
          showStep();
        }
      }, tick);
    }

    function computeMatches() {
      const nameOf = (id) => (AI_CONCERNS.find((c) => c.id === id) || {}).t || id;
      return AI_PSYCHOLOGISTS
        .map((p) => {
          const hits = p.treats.filter((t) => state.concerns.includes(t));
          return { p, hits, score: hits.length };
        })
        .sort((a, b) => b.score - a.score)
        .slice(0, 3)
        .map((m, i) => ({
          ...m.p,
          rank: i === 0 ? 'Closest match' : 'Also a good fit',
          isTop: i === 0,
          why: m.hits.length
            ? 'Works with ' + m.hits.slice(0, 3).map(nameOf).map((x) => x.toLowerCase()).join(', ')
            : 'Broad experience across common concerns'
        }));
    }

    function renderResults() {
      matchIntro.textContent = state.concerns.length
        ? 'Based on what you have shared, these psychologists may be well suited to support you.'
        : 'These psychologists work across the concerns people most often bring to us.';
      const matches = computeMatches();
      resultsWrap.innerHTML = matches.map((m) => `
        <div class="ai-result-card">
          <div class="ai-result-card__head">
            <img src="${m.img}" alt="Portrait of ${m.name}">
            <span class="ai-result-card__rank${m.isTop ? ' is-top' : ''}">${m.rank}</span>
          </div>
          <h3>${m.name}</h3>
          <p>${m.title}</p>
          <div class="tag-row">${m.specs.map((s) => `<span class="tag">${s}</span>`).join('')}</div>
          <p>${m.why}</p>
          <span class="ai-result-card__avail"><svg class="icon icon--sm" data-icon="clock"></svg>${m.avail}</span>
          <div class="ai-result-card__actions">
            <button type="button" class="btn btn--primary">Book Appointment</button>
            <button type="button" class="btn btn--outline">View Full Profile</button>
          </div>
        </div>`).join('');
      renderIcons(resultsWrap);
    }

    function openModal() {
      scrim.hidden = false;
      launcher.classList.add('is-hidden');
      document.body.style.overflow = 'hidden';
      setTimeout(() => { const f = modal.querySelector('button, [href], input, textarea'); f && f.focus(); }, 90);
    }
    function closeModal() {
      scrim.hidden = true;
      launcher.classList.remove('is-hidden');
      document.body.style.overflow = '';
      launcher.focus();
    }
    function resetWizard() {
      state.step = 0; state.concerns = []; state.ownWords = ''; state.duration = -1;
      state.answers = {}; state.prefs = [];
      if (ownWords) ownWords.value = '';
      if (ownPanel) ownPanel.classList.remove('is-open');
      showStep();
    }

    launcher.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);
    scrim.addEventListener('click', (e) => { if (e.target === scrim) closeModal(); });
    document.addEventListener('keydown', (e) => {
      if (scrim.hidden) return;
      if (e.key === 'Escape') closeModal();
    });

    backBtn.addEventListener('click', () => {
      if (state.step <= 0) return;
      state.step -= 1;
      showStep();
    });
    nextBtn.addEventListener('click', () => {
      if (!canAdvance()) return;
      if (state.step === 3) { state.step = 4; showStep(); runMatch(); return; }
      state.step += 1;
      showStep();
    });
    restartBtn && restartBtn.addEventListener('click', resetWizard);

    concernCards.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-concern]');
      if (!btn) return;
      const id = btn.dataset.concern;
      const i = state.concerns.indexOf(id);
      if (i > -1) state.concerns.splice(i, 1); else state.concerns.push(id);
      renderConcerns();
      updateNav();
    });

    ownToggle.addEventListener('click', () => ownPanel.classList.toggle('is-open'));
    ownWords.addEventListener('input', () => { state.ownWords = ownWords.value; updateNav(); });

    durationsWrap.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-duration]');
      if (!btn) return;
      state.duration = +btn.dataset.duration;
      renderDurations();
      updateNav();
    });

    questionsWrap.addEventListener('click', (e) => {
      const scaleBtn = e.target.closest('[data-scale]');
      const optBtn = e.target.closest('[data-opt]');
      if (scaleBtn) {
        const qid = scaleBtn.closest('.ai-question').dataset.qid;
        state.answers[qid] = +scaleBtn.dataset.scale;
        renderQuestions();
      } else if (optBtn) {
        const qid = optBtn.closest('.ai-question').dataset.qid;
        state.answers[qid] = optBtn.dataset.opt;
        renderQuestions();
      }
    });

    prefsWrap.addEventListener('click', (e) => {
      const btn = e.target.closest('.ai-pref');
      if (!btn) return;
      const pref = btn.dataset.pref;
      const i = state.prefs.indexOf(pref);
      if (i > -1) state.prefs.splice(i, 1); else state.prefs.push(pref);
      renderPrefs();
      updateNav();
    });

    showStep();
  }

  /* ---------------------------------------------------------
     Jump nav: highlight the section in view + edge fades
     for the horizontally-scrollable pill bar (ADHD page)
  --------------------------------------------------------- */
  function initJumpNav() {
    const nav = $("#jumpNav");
    const wrap = nav && nav.closest(".ps-jump-wrap");
    if (!wrap || !nav) return;

    const links = $$("a[data-jump]", nav);
    const sections = $$("[data-sec]");
    const headerOffset = () => {
      const header = $(".site-header");
      return (header ? header.offsetHeight : 0) + wrap.offsetHeight + 40;
    };

    function setActive(name) {
      links.forEach((l) =>
        l.classList.toggle("is-active", l.dataset.jump === name)
      );
    }

    const onScroll = debounce(() => {
      let current = sections[0] && sections[0].dataset.sec;
      const scrollPos = window.scrollY + headerOffset();
      sections.forEach((sec) => {
        if (sec.offsetTop <= scrollPos) current = sec.dataset.sec;
      });
      if (current) setActive(current);
    }, 50);

    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    function updateFades() {
      const maxScroll = nav.scrollWidth - nav.clientWidth - 2;
      wrap.classList.toggle("is-scrollable-left", nav.scrollLeft > 2);
      wrap.classList.toggle("is-scrollable-right", nav.scrollLeft < maxScroll);
    }
    nav.addEventListener("scroll", updateFades, { passive: true });
    window.addEventListener("resize", debounce(updateFades, 100));
    updateFades();
  }

  /* ---------------------------------------------------------
     Single "What does ADD mean?" accordion toggle
  --------------------------------------------------------- */
  function initAddAccordion() {
    const toggle = $("#addToggle");
    const wrapper = $("#addAccordion");
    if (!toggle || !wrapper) return;

    toggle.addEventListener("click", () => {
      const isOpen = wrapper.classList.toggle("is-open");
      toggle.setAttribute("aria-expanded", String(isOpen));
      toggle.textContent = isOpen ? "\u2212" : "+";
    });
  }

  /* ---------------------------------------------------------
     ADHD subtypes — row hover highlight
  --------------------------------------------------------- */
  function initSubtypesHover() {
    const rows = $$(".ps-sub-row");
    if (!rows.length) return;
    rows.forEach((row) => {
      row.addEventListener("mouseenter", () => {
        rows.forEach((r) => r.classList.remove("is-active"));
        row.classList.add("is-active");
      });
      row.addEventListener("mouseleave", () => row.classList.remove("is-active"));
    });
    rows[0]?.classList.add("is-active");
  }

  /* ---------------------------------------------------------
     "Watch video" button — placeholder play/pause state
  --------------------------------------------------------- */
  function initVideoButton() {
    const btn = $("#adhdVideoBtn");
    if (!btn) return;

    btn.addEventListener("click", () => {
      const playing = btn.classList.toggle("is-playing");
      btn.dispatchEvent(
        new CustomEvent("ps:video-toggle", { detail: { playing }, bubbles: true })
      );
      btn.setAttribute("aria-label", playing ? "Pause video" : btn.dataset.label || "Play video");
    });
  }

  /* ---------------------------------------------------------
     Generic accordion-group helper — used for the symptom
     groups and the ADHD FAQ list. exclusive: true closes siblings.
  --------------------------------------------------------- */
  function initAccordionGroup({ groupSelector, itemSelector, triggerSelector, exclusive }) {
    const group = $(groupSelector);
    if (!group) return;
    const items = $$(itemSelector, group);

    items.forEach((item) => {
      const trigger = $(triggerSelector, item);
      if (!trigger) return;
      trigger.addEventListener("click", () => {
        const willOpen = !item.classList.contains("is-open");
        if (exclusive) {
          items.forEach((i) => i.classList.remove("is-open"));
        }
        item.classList.toggle("is-open", willOpen);
      });
    });
  }

  /* ---------------------------------------------------------
     Assessment steps <-> preview image sync
  --------------------------------------------------------- */
  function initAssessmentSteps() {
    const stepsWrap = $("#assessSteps");
    const preview = $("#assessPreview");
    if (!stepsWrap || !preview) return;

    const steps = $$(".steps__item, .ps-steps__item", stepsWrap);
    const shots = $$("img[data-shot]", preview);
    const shotNum = $("#shotNum");
    const shotLabel = $("#shotLabel");
    const shotCaption = $("#shotCaption");
    const shotSub = $("#shotSub");

    const meta = [
      {
        label: "Initial screening",
        caption: "A conversation about how things actually are",
        sub: "Your difficulties, daily life, work or school, and history.",
      },
      {
        label: "Assessment",
        caption: "Questionnaires, interviews and testing",
        sub: "Structured tools measuring attention, memory and executive function.",
      },
      {
        label: "Feedback & diagnosis",
        caption: "Going through the results together",
        sub: "A clear explanation of what the assessment found.",
      },
      {
        label: "Treatment plan",
        caption: "Building a plan that fits your life",
        sub: "Therapy, coaching, and referral to a psychiatrist if needed.",
      },
    ];

    function activate(index) {
      steps.forEach((s, i) => s.classList.toggle("is-active", i === index));
      shots.forEach((img) =>
        img.classList.toggle("is-active", Number(img.dataset.shot) === index)
      );
      const m = meta[index];
      if (!m) return;
      if (shotNum) shotNum.textContent = String(index + 1);
      if (shotLabel) shotLabel.textContent = m.label;
      if (shotCaption) shotCaption.textContent = m.caption;
      if (shotSub) shotSub.textContent = m.sub;
    }

    steps.forEach((step, i) => {
      step.addEventListener("click", () => activate(i));
      step.addEventListener("mouseenter", () => activate(i));
    });

    activate(0);
  }

  function initBurnoutRecoverySteps() {
    const list = document.getElementById('burnoutRecoverySteps');
    const preview = document.getElementById('burnoutRecoveryPreview');
    if (!list) return;

    const steps = Array.from(list.querySelectorAll('[data-recovery-step]'));
    function activate(step) {
      steps.forEach((item) => {
        const active = item === step;
        item.classList.toggle('bg-[#FFF7F3]', active);
        item.classList.toggle('border-[#C24C33]', active);
        item.setAttribute('aria-pressed', String(active));
      });
      if (preview && step.dataset.image) {
        preview.src = step.dataset.image;
        preview.alt = step.dataset.imageAlt || '';
      }
    }

    steps.forEach((step) => {
      step.addEventListener('click', () => activate(step));
      step.addEventListener('mouseenter', () => activate(step));
      step.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          activate(step);
        }
      });
    });

    activate(steps[0]);
  }

  /* ---------------------------------------------------------
     Appointment steps image preview
  --------------------------------------------------------- */
  function initAppointmentSteps() {
    const steps = document.querySelectorAll('.appointment-step');
    const previewImg = document.getElementById('appointment-step-img');
    const badge = document.getElementById('appointment-step-badge');
    if (!steps.length || !previewImg || !badge) return;

    function activate(step) {
      steps.forEach((item) => {
        const active = item === step;
        item.classList.toggle('border-[#C24C33]', active);
        item.classList.toggle('border-[#F2E4DC]', !active);
        const numWrap = item.querySelector('span');
        if (numWrap) {
          numWrap.classList.toggle('text-[#C24C33]', active);
          numWrap.classList.toggle('text-[#ECA997]', !active);
        }
        const title = item.querySelector('h4');
        if (title) {
          title.classList.toggle('text-[#C24C33]', active);
          title.classList.toggle('text-[#241C19]', !active);
        }
      });
      if (step.dataset.image) {
        previewImg.style.opacity = '0.5';
        setTimeout(() => {
          previewImg.src = step.dataset.image;
          previewImg.style.opacity = '1';
        }, 150);
      }
      badge.textContent = step.dataset.step;
    }

    steps.forEach((step) => {
      step.addEventListener('click', () => activate(step));
      step.addEventListener('mouseenter', () => activate(step));
    });

    activate(steps[0]);
  }

  /* ---------------------------------------------------------
     Footer newsletter: consent checkbox + fake submit
  --------------------------------------------------------- */
  function initNewsletterForm() {
    const form = $("#newsletterForm");
    const consentBox = $("#consentBox");
    if (!form) return;

    let consented = true; // matches the pre-checked "✓" markup
    if (consentBox) {
      consentBox.classList.add("is-checked");
      consentBox.closest(".ps-consent").addEventListener("click", (e) => {
        e.preventDefault();
        consented = !consented;
        consentBox.classList.toggle("is-checked", consented);
      });
    }

    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const input = $('input[type="email"]', form);
      if (!input || !input.value || !consented) {
        input && input.focus();
        return;
      }
      const submitBtn = $(".btn--subscribe", form);
      const originalText = submitBtn ? submitBtn.textContent : "";
      if (submitBtn) submitBtn.textContent = "Subscribed";
      input.value = "";
      setTimeout(() => {
        if (submitBtn) submitBtn.textContent = originalText;
      }, 2500);
    });
  }

  /* -------------------------------------------------------------------
     Habit cards interaction
     ------------------------------------------------------------------- */
  function initHabitCards() {
    const groups = document.querySelectorAll('.habit-card-group');
    const fallbackCards = document.querySelectorAll('.habit-card');
    const groupsToInit = groups.length ? groups : [{ querySelectorAll: () => fallbackCards }];

    groupsToInit.forEach((group) => {
      const habitCards = group.querySelectorAll ? group.querySelectorAll('.habit-card') : fallbackCards;
      const previewImg = group.querySelector ? group.querySelector('.habit-preview-img') : document.getElementById('habit-preview-img');
      const previewTitle = group.querySelector ? group.querySelector('.habit-preview-title') : document.getElementById('habit-preview-title');
      const previewDesc = group.querySelector ? group.querySelector('.habit-preview-desc') : document.getElementById('habit-preview-desc');

      // Only require habitCards and previewImg; title and desc are optional
      if (!habitCards.length || !previewImg) return;

      const setActiveCard = (card) => {
        habitCards.forEach((c) => {
          c.classList.remove('shadow-sm', 'active-card');
          c.classList.remove('border-[#C24C33]');
          c.classList.add('border-[#E8B8AC]');
        });

        card.classList.add('shadow-sm', 'active-card');
        card.classList.remove('border-[#E8B8AC]');
        card.classList.add('border-[#C24C33]');

        const title = card.getAttribute('data-title');
        const desc = card.getAttribute('data-desc');
        const imgSrc = card.getAttribute('data-img');

        if (title && previewTitle) previewTitle.textContent = title;
        if (desc && previewDesc) previewDesc.textContent = desc;

        if (imgSrc) {
          previewImg.style.opacity = '0.35';
          // Preload image before displaying it
          const tempImg = new Image();
          tempImg.onload = () => {
            previewImg.src = imgSrc;
            previewImg.alt = title || '';
            previewImg.style.opacity = '1';
          };
          tempImg.onerror = () => {
            // If image fails to load, still update and show it
            previewImg.src = imgSrc;
            previewImg.alt = title || '';
            previewImg.style.opacity = '1';
          };
          tempImg.src = imgSrc;
        }
      };

      habitCards.forEach((card) => {
        ['mouseenter', 'click'].forEach((evt) => {
          card.addEventListener(evt, () => setActiveCard(card));
        });
      });

      // Keep the preview empty until the user hovers or clicks a card.
      if (previewTitle && previewDesc) {
        const previewTitleText = previewTitle.textContent.trim();
        const previewDescText = previewDesc.textContent.trim();
        if (!previewTitleText && !previewDescText && !previewImg.getAttribute('src')) {
          previewImg.style.opacity = '0';
        }
      }
    });
  }

  /* -------------------------------------------------------------------
     Generic tab-group helper
     Usage: initTabGroup('stress', 'physical')
       - looks for elements with  data-{prefix}-tab="key"
       - looks for elements with  data-{prefix}-panel="key"
       - activates defaultKey on load
     To register a new section just call initTabGroup(prefix, defaultKey).
     ------------------------------------------------------------------- */
  function initTabGroup(prefix, defaultKey) {
    // Convert 'my-prefix' -> camelCase 'myPrefix' for dataset access
    const camel = prefix.replace(/-([a-z])/g, (_, c) => c.toUpperCase());
    const tabAttr   = `data-${prefix}-tab`;
    const panelAttr = `data-${prefix}-panel`;

    const tabs   = document.querySelectorAll(`[${tabAttr}]`);
    const panels = document.querySelectorAll(`[${panelAttr}]`);
    if (!tabs.length || !panels.length) return;

    function activate(key) {
      // If key doesn't match any panel, activate first tab instead
      const keyExists = Array.from(panels).some(p => p.dataset[`${camel}Panel`] === key);
      const activeKey = keyExists ? key : tabs[0]?.dataset[`${camel}Tab`];

      tabs.forEach((tab) => {
        const active = tab.dataset[`${camel}Tab`] === activeKey;
        tab.classList.toggle('border-[#E8B8AC]',  active);
        tab.classList.toggle('text-[#C24C33]',     active);
        tab.classList.toggle('bg-transparent',     active);
        tab.classList.toggle('border-[#F2E4DC]',  !active);
        tab.classList.toggle('text-[#333333]',    !active);
        tab.classList.toggle('bg-white',          !active);
        tab.setAttribute('aria-selected', String(active));
      });
      panels.forEach((panel) => {
        const active = panel.dataset[`${camel}Panel`] === activeKey;
        panel.hidden = !active;
        panel.classList.toggle('hidden', !active);
        panel.classList.toggle('flex',   active);
      });
    }

    tabs.forEach((tab) => {
      tab.addEventListener('click', () => activate(tab.dataset[`${camel}Tab`]));
    });

    activate(defaultKey);
  }

  /* -------------------------------------------------------------------
     Depression causes accordion (per-item active colors)
     ------------------------------------------------------------------- */
  function initBurnoutOverlapAccordion() {
    const wrap = document.getElementById('burnoutOverlapAccordion');
    if (!wrap) return;

    const items = wrap.querySelectorAll('.burnout-accordion-item');

    items.forEach((item) => {
      const trigger = item.querySelector('.burnout-accordion-trigger');
      const panel = item.querySelector('.burnout-accordion-panel');
      const icon = item.querySelector('.burnout-accordion-icon');

      if (!trigger) return;

      const setOpenState = (open) => {
        item.classList.toggle('is-open', open);
        item.classList.toggle('bg-[#FDF6F3]', open);
        item.classList.toggle('bg-white', !open);
        item.classList.toggle('border-[#EAD4CD]', open);
        item.classList.toggle('border-[#F2E8E5]', !open);

        if (panel) {
          panel.classList.toggle('hidden', !open);
          panel.style.maxHeight = open ? `${panel.scrollHeight}px` : '0px';
          panel.style.opacity = open ? '1' : '0';
        }
        if (icon) {
          icon.style.transform = open ? 'rotate(180deg)' : 'rotate(0deg)';
        }
      };

      trigger.addEventListener('click', () => {
        const shouldOpen = !item.classList.contains('is-open');

        items.forEach((otherItem) => {
          const otherPanel = otherItem.querySelector('.burnout-accordion-panel');
          const otherIcon = otherItem.querySelector('.burnout-accordion-icon');
          otherItem.classList.remove('is-open');
          otherItem.classList.remove('bg-[#FDF6F3]');
          otherItem.classList.add('bg-white');
          otherItem.classList.remove('border-[#EAD4CD]');
          otherItem.classList.add('border-[#F2E8E5]');
          if (otherPanel) {
            otherPanel.classList.add('hidden');
            otherPanel.style.maxHeight = '0px';
            otherPanel.style.opacity = '0';
          }
          if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
        });

        if (shouldOpen) {
          setOpenState(true);
        }
      });

      setOpenState(item.classList.contains('is-open'));
    });
  }

  function initDepressionCausesAccordion() {
    const wrap = document.getElementById('depressionCausesAccordion');
    if (!wrap) return;

    const items = wrap.querySelectorAll('.dep-cause-item');

    items.forEach(function (item) {
      const header = item.querySelector('.dep-cause-header');
      if (!header) return;

      header.addEventListener('click', function () {
        const isOpen = item.classList.contains('is-open');

        // Close every item first
        items.forEach(function (it) {
          it.classList.remove('is-open');
          it.style.background = '#ffffff';
          it.style.border = '1px solid #EAEAEA';
          var content = it.querySelector('.dep-cause-content');
          if (content) { content.style.maxHeight = '0'; content.style.opacity = '0'; }
          var arrow = it.querySelector('.dep-cause-arrow');
          if (arrow) arrow.style.transform = 'rotate(0deg)';
        });

        // If it was closed, open the clicked one
        if (!isOpen) {
          item.classList.add('is-open');
          item.style.background = item.dataset.activeBg || '#FFF7F3';
          item.style.border = '1px solid ' + (item.dataset.activeBorder || '#C24C33');
          var content = item.querySelector('.dep-cause-content');
          if (content) { content.style.maxHeight = content.scrollHeight + 'px'; content.style.opacity = '1'; }
          var arrow = item.querySelector('.dep-cause-arrow');
          if (arrow) arrow.style.transform = 'rotate(180deg)';
        }
      });
    });
  }

  /* -------------------------------------------------------------------
     Depression co-occurrence tabs
     ------------------------------------------------------------------- */
  function initDepCooccurTabs() {
    const wrap = document.getElementById('depCooccurTabs');
    if (!wrap) return;

    const tabs = wrap.querySelectorAll('.dep-co-tab');
    const panels = wrap.querySelectorAll('.dep-co-panel');

    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        var idx = tab.getAttribute('data-dep-tab');

        // Reset all tabs to inactive classes
        tabs.forEach(function (t) {
          t.classList.remove('is-active');
          t.classList.remove('bg-[#FCF6F4]', 'border-[#F2E8E3]');
          t.classList.add('bg-white', 'border-[#EAEAEA]');
          var arrow = t.querySelector('.dep-co-arrow');
          if (arrow) arrow.style.display = 'none';
        });

        // Activate clicked tab classes
        tab.classList.add('is-active');
        tab.classList.remove('bg-white', 'border-[#EAEAEA]');
        tab.classList.add('bg-[#FCF6F4]', 'border-[#F2E8E3]');
        var arrow = tab.querySelector('.dep-co-arrow');
        if (arrow) arrow.style.display = '';

        // Show matching panel, hide others
        panels.forEach(function (p) {
          var isMatch = p.getAttribute('data-dep-panel') === idx;
          p.classList.toggle('hidden', !isMatch);
          if (isMatch) {
            p.classList.add('flex');
          } else {
            p.classList.remove('flex');
          }
        });
      });
    });
  }

  function initBipolarTreatmentTabs() {
    const wrap = document.getElementById('bipolarTreatTabs');
    if (!wrap) return;

    const tabs = wrap.querySelectorAll('.bipolar-tab');
    const panels = wrap.querySelectorAll('.bipolar-panel');
    if (!tabs.length || !panels.length) return;

    function activate(index) {
      tabs.forEach((tab, tabIndex) => {
        const isActive = tabIndex === index;
        tab.classList.toggle('is-active', isActive);
        tab.classList.toggle('bg-[#FAF0EC]', isActive);
        tab.classList.toggle('border-[#F2E4DC]', isActive);
        tab.classList.toggle('bg-white', !isActive);
        tab.classList.toggle('border-[#F2E8E3]', !isActive);
        tab.classList.toggle('hover:bg-[#FAF0EC]', !isActive);

        const arrow = tab.querySelector('.bipolar-arrow');
        if (arrow) {
          arrow.classList.toggle('hidden', !isActive);
          arrow.classList.toggle('flex', isActive);
          arrow.classList.toggle('items-center', isActive);
          arrow.classList.toggle('justify-center', isActive);
        }
      });

      panels.forEach((panel, panelIndex) => {
        const isActive = panelIndex === index;
        panel.classList.toggle('hidden', !isActive);
        panel.classList.toggle('flex', isActive);
      });
    }

    tabs.forEach((tab, index) => {
      tab.addEventListener('click', () => activate(index));
    });

    activate(0);
  }

  /* -------------------------------------------------------------------
     Article Filters (Categories, Search, View All)
     ------------------------------------------------------------------- */
  function initArticleFilters() {
    const filterContainer = document.querySelector('.flex-wrap.items-center.gap-3');
    const searchInput = document.querySelector('input[placeholder="Search articles"]');
    const allCards = document.querySelectorAll('.js-article-card');
    const viewAllBtn = document.getElementById('viewAllArticlesBtn');
    
    if (!allCards.length) return;
    
    const filterButtons = filterContainer ? filterContainer.querySelectorAll('button') : [];
    
    // Dynamic counts
    const categoryCounts = { all: allCards.length };
    allCards.forEach(card => {
      const cat = (card.getAttribute('data-category') || '').trim().toLowerCase();
      if (!cat) return;
      categoryCounts[cat] = (categoryCounts[cat] || 0) + 1;
    });

    if (filterButtons.length > 0) {
      filterButtons.forEach(btn => {
        let catName = '';
        btn.childNodes.forEach(node => {
          if (node.nodeType === Node.TEXT_NODE) catName += node.nodeValue;
        });
        catName = catName.trim().toLowerCase();
        
        const activeSpan = btn.querySelector('span');
        if (activeSpan) {
          activeSpan.textContent = categoryCounts[catName] || 0;
        }
      });
    }

    let currentCategory = 'all';
    let currentSearch = '';
    
    function applyFilters() {
      allCards.forEach(card => {
        const cardCategory = (card.getAttribute('data-category') || '').toLowerCase();
        const cardTitle = (card.getAttribute('data-title') || '').toLowerCase();
        
        const matchesCategory = currentCategory === 'all' || cardCategory === currentCategory;
        const matchesSearch = currentSearch === '' || cardTitle.includes(currentSearch);
        
        const isHiddenLatest = card.classList.contains('js-latest-card') && card.dataset.hiddenByDefault === 'true';
        
        let shouldShow = matchesCategory && matchesSearch;
        
        if (currentCategory === 'all' && currentSearch === '' && isHiddenLatest) {
          shouldShow = false;
        }
        
        card.classList.toggle('hidden', !shouldShow);
      });
    }

    if (filterButtons.length > 0) {
      filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          filterButtons.forEach(b => {
            b.classList.remove('bg-[#5C2A20]', 'text-white', 'border-[#5C2A20]', 'font-bold');
            b.classList.add('bg-transparent', 'text-[#33170F]', 'border-[#F2E4DC]', 'font-medium');
            const span = b.querySelector('span');
            if (span) {
              span.classList.remove('text-[#F09367]');
              span.classList.add('text-[#33170F]/50');
            }
          });
          
          btn.classList.add('bg-[#5C2A20]', 'text-white', 'border-[#5C2A20]', 'font-bold');
          btn.classList.remove('bg-transparent', 'text-[#33170F]', 'border-[#F2E4DC]', 'font-medium');
          const activeSpan = btn.querySelector('span');
          if (activeSpan) {
            activeSpan.classList.add('text-[#F09367]');
            activeSpan.classList.remove('text-[#33170F]/50');
          }
          
          let catText = btn.childNodes[0].textContent.trim().toLowerCase();
          currentCategory = catText;
          
          applyFilters();
        });
      });
    }
    
    if (searchInput) {
      searchInput.addEventListener('input', (e) => {
        currentSearch = e.target.value.toLowerCase().trim();
        applyFilters();
      });
    }
    
    if (viewAllBtn) {
      const latestCards = document.querySelectorAll('.js-latest-card');
      if (latestCards.length > 6) {
        for (let i = 6; i < latestCards.length; i++) {
          latestCards[i].dataset.hiddenByDefault = 'true';
        }
      }
      
      viewAllBtn.addEventListener('click', () => {
        latestCards.forEach(c => c.dataset.hiddenByDefault = 'false');
        viewAllBtn.style.display = 'none';
        applyFilters();
      });
    }
    
    applyFilters();
  }

  /* -------------------------------------------------------------------
     Hero Article Carousel
     ------------------------------------------------------------------- */
  function initHeroCarousel() {
    const sidebarArticles = document.querySelectorAll('.js-hero-sidebar-article');
    if (!sidebarArticles.length) return;

    const mainImage = document.getElementById('heroMainImage');
    const mainCategory = document.getElementById('heroCategory');
    const mainTime = document.getElementById('heroTime');
    const mainDate = document.getElementById('heroDate');
    const mainTitle = document.getElementById('heroTitle');
    const mainDesc = document.getElementById('heroDesc');
    const prevArrow = document.getElementById('heroPrevArrow');
    const nextArrow = document.getElementById('heroNextArrow');
    const indicatorsContainer = document.getElementById('heroIndicators');
    
    if (!mainImage || !mainTitle) return;

    let currentIndex = 0;
    const totalItems = sidebarArticles.length;
    const indicators = indicatorsContainer ? indicatorsContainer.querySelectorAll('div') : [];

    function updateCarousel(index) {
      if (index < 0) index = totalItems - 1;
      if (index >= totalItems) index = 0;
      currentIndex = index;

      const activeSidebar = Array.from(sidebarArticles).find(el => parseInt(el.dataset.heroIndex, 10) === currentIndex);
      if (!activeSidebar) return;

      // Update Main Card Content (with a slight fade effect)
      mainTitle.style.opacity = 0;
      mainDesc.style.opacity = 0;
      
      setTimeout(() => {
        mainImage.src = activeSidebar.dataset.heroImageMain;
        mainCategory.textContent = activeSidebar.dataset.heroCategory;
        mainCategory.style.color = activeSidebar.dataset.heroCategoryColor;
        mainTime.textContent = activeSidebar.dataset.heroTime;
        mainDate.textContent = activeSidebar.dataset.heroDate;
        mainTitle.textContent = activeSidebar.dataset.heroTitle;
        mainDesc.textContent = activeSidebar.dataset.heroDesc;
        
        mainTitle.style.opacity = 1;
        mainDesc.style.opacity = 1;
      }, 150);

      // Update Sidebar Styling
      sidebarArticles.forEach((sidebar, idx) => {
        if (idx === currentIndex) {
          sidebar.classList.add('bg-white', 'border-[#C24C33]', 'shadow-[0_4px_24px_rgba(194,76,51,0.08)]');
          sidebar.classList.remove('bg-[#FCF0EB]/60', 'border-transparent');
        } else {
          sidebar.classList.remove('bg-white', 'border-[#C24C33]', 'shadow-[0_4px_24px_rgba(194,76,51,0.08)]');
          sidebar.classList.add('bg-[#FCF0EB]/60', 'border-transparent');
        }
      });

      // Update bottom indicators
      indicators.forEach((ind, idx) => {
        if (idx === currentIndex) {
          ind.classList.remove('bg-white/30');
          ind.classList.add('bg-[#F09367]');
        } else {
          ind.classList.remove('bg-[#F09367]', 'bg-[#C24C33]');
          ind.classList.add('bg-white/30');
        }
      });
    }

    // Attach click events to sidebar articles
    sidebarArticles.forEach(sidebar => {
      sidebar.addEventListener('click', (e) => {
        e.preventDefault();
        const index = parseInt(sidebar.dataset.heroIndex, 10);
        updateCarousel(index);
      });
    });

    // Attach click events to arrows
    if (prevArrow) {
      prevArrow.addEventListener('click', () => updateCarousel(currentIndex - 1));
    }
    if (nextArrow) {
      nextArrow.addEventListener('click', () => updateCarousel(currentIndex + 1));
    }
  }

  /* ---------------------------------------------------------
     Mega Menu — hover with delayed close (setTimeout)
     so it doesn't close too quickly when moving the mouse
  --------------------------------------------------------- */
  function initMegaMenu() {
    const navItems = $$('.nav-item.has-dropdown');
    if (!navItems.length) return;

    navItems.forEach((item) => {
      let closeTimer = null;

      function openMenu() {
        clearTimeout(closeTimer);
        // Close all other open menus first
        navItems.forEach((other) => {
          if (other !== item) other.classList.remove('is-mega-open');
        });
        item.classList.add('is-mega-open');
      }

      function scheduleClose() {
        closeTimer = setTimeout(() => {
          item.classList.remove('is-mega-open');
        }, 250); // 250ms delay — enough time to move mouse into the dropdown
      }

      function cancelClose() {
        clearTimeout(closeTimer);
      }

      item.addEventListener('mouseenter', openMenu);
      item.addEventListener('mouseleave', scheduleClose);

      const menu = item.querySelector('.mega-menu');
      if (menu) {
        menu.addEventListener('mouseenter', cancelClose);
        menu.addEventListener('mouseleave', scheduleClose);
      }

      // --- Search filtering ---
      const searchInput = item.querySelector('.mega-menu__search input');
      const grid = item.querySelector('.mega-menu__grid');
      if (!searchInput || !grid) return;

      // Create a "no results" message element
      const noResults = document.createElement('p');
      noResults.className = 'mega-menu__no-results';
      noResults.textContent = 'No results found.';
      noResults.style.cssText = 'display:none; grid-column:1/-1; font-size:14px; color:#999; padding:8px 12px; margin:0;';
      grid.appendChild(noResults);

      searchInput.addEventListener('input', () => {
        const query = searchInput.value.trim().toLowerCase();
        const links = Array.from(grid.querySelectorAll('.mega-menu__link'));
        // Section headings (e.g. "For Businesses") are plain divs, not anchors
        const headings = Array.from(grid.children).filter(
          (el) => el.tagName !== 'A' && !el.classList.contains('mega-menu__no-results')
        );

        let visibleCount = 0;

        links.forEach((link) => {
          const title = (link.querySelector('.mega-menu__title')?.textContent || '').toLowerCase();
          const desc  = (link.querySelector('.mega-menu__desc')?.textContent  || '').toLowerCase();
          const matches = !query || title.includes(query) || desc.includes(query);
          link.style.display = matches ? '' : 'none';
          if (matches) visibleCount++;
        });

        // Hide section headings when nothing below them is visible
        headings.forEach((heading) => {
          // Find all sibling links that come after this heading until the next heading
          let sibling = heading.nextElementSibling;
          let anyVisible = false;
          while (sibling && sibling.tagName === 'A') {
            if (sibling.style.display !== 'none') anyVisible = true;
            sibling = sibling.nextElementSibling;
          }
          heading.style.display = anyVisible ? '' : 'none';
        });

        noResults.style.display = visibleCount === 0 ? '' : 'none';
      });

      // Clear search when the menu closes
      item.addEventListener('mouseleave', () => {
        searchInput.value = '';
        const links = Array.from(grid.querySelectorAll('.mega-menu__link'));
        links.forEach((link) => (link.style.display = ''));
        const headings = Array.from(grid.children).filter(
          (el) => el.tagName !== 'A' && !el.classList.contains('mega-menu__no-results')
        );
        headings.forEach((h) => (h.style.display = ''));
        noResults.style.display = 'none';
      });
    });

    // Close any open mega menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!e.target.closest('.nav-item.has-dropdown')) {
        navItems.forEach((item) => item.classList.remove('is-mega-open'));
      }
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    renderIcons();
    initHeaderScroll();
    initMobileNav();
    initMegaMenu();
    initSmoothScroll();
    initReveal();

    initSigns();
    initHiw();
    initConditions();
    initFormats();
    initPsyTasks();
    initMoreTherapies();
    initPricing();
    initLocations();
    initChecklistTally();
    initFaq();
    initMentalHealthInteractions();
    initArticlesPagination();
    initAiAssistant();
    initHabitCards();
    initTabGroup('depression', 'emotional');  // depression.html
    initTabGroup('stress',     'physical');   // stress.html
    initTabGroup('bipolar',    'mania');      // bipolar.html symptom tabs
    initTabGroup('ocd',        'obsessions'); // ocd.html symptom tabs
    initBipolarTreatmentTabs();               // bipolar.html treatment tabs
    initBurnoutOverlapAccordion();            // burnout.html overlap accordion
    initDepressionCausesAccordion();
    initDepCooccurTabs();

    initJumpNav();
    initAddAccordion();
    initSubtypesHover();
    initVideoButton();
    initAccordionGroup({
      groupSelector: "#symptomGroups",
      itemSelector: ".ps-symgroup",
      triggerSelector: ".ps-symgroup__trigger",
      exclusive: true,
    });
    initAccordionGroup({
      groupSelector: "#adhdFaqList",
      itemSelector: ".faq-item",
      triggerSelector: ".faq-item__trigger",
      exclusive: true,
    });
    initAccordionGroup({
      groupSelector: "#mhFaqList",
      itemSelector: ".faq-item",
      triggerSelector: ".faq-item__trigger",
      exclusive: true,
    });
    initAssessmentSteps();
    initBurnoutRecoverySteps();
    initAppointmentSteps();
    initNewsletterForm();
    initArticleFilters();
    initHeroCarousel();

    // hero video: attempt autoplay, fall back to poster only
    const heroVideo = document.querySelector('[data-hero-video]');
    if (heroVideo) {
      const src = heroVideo.dataset.heroVideo;
      if (src) {
        heroVideo.src = src;
        heroVideo.muted = true;
        const tryPlay = () => { const p = heroVideo.play(); if (p && p.catch) p.catch(() => {}); };
        heroVideo.addEventListener('canplay', tryPlay, { once: true });
        setTimeout(tryPlay, 800);
      }
    }

    initSearchOverlay();
    initFlipCards();
    initSelfReflectionQuiz();
    initIncludedTabs();
  });

  /* -------------------------------------------------------------------
     Included Tabs (Pricing)
  ------------------------------------------------------------------- */
  function initIncludedTabs() {
    const tabs = document.querySelectorAll('.included-tab');
    if (!tabs.length) return;
    
    tabs.forEach(tab => {
      tab.addEventListener('mouseenter', () => {
        const tabId = tab.getAttribute('data-tab');
        const dataImage = tab.getAttribute('data-image');
        
        // Update cards
        tabs.forEach(t => {
          if (t === tab) {
            t.classList.add('border-[#C24C33]');
            t.classList.remove('border-[#E8DDD7]');
          } else {
            t.classList.remove('border-[#C24C33]');
            t.classList.add('border-[#E8DDD7]');
          }
        });
        
        // Update image with crossfade
        const img = document.getElementById('included-image');
        if (img) {
          img.style.opacity = '0.5';
          setTimeout(() => {
            if (dataImage) {
              img.src = dataImage;
            } else {
              if(tabId === 'payment') img.src = 'assets/Priser/Payment Options.webp';
              if(tabId === 'cancellation') img.src = 'assets/Priser/Cancellation.webp';
              if(tabId === 'change') img.src = 'assets/Priser/Change psychologist.webp';
            }
            img.style.opacity = '1';
          }, 150);
        }
      });
    });
  }

  /* -------------------------------------------------------------------
     Self-Reflection Quiz
  ------------------------------------------------------------------- */
  function initSelfReflectionQuiz() {
    const box = document.querySelector('.js-reflection-box');
    if (!box) return;

    const options = box.querySelectorAll('.js-reflection-option');
    const noneOption = box.querySelector('.js-reflection-none');
    const counter = box.querySelector('.js-reflection-counter');

    function updateCounter() {
      if (!counter) return;
      const selectedCount = box.querySelectorAll('.js-reflection-option.is-active').length;
      counter.textContent = selectedCount;
    }

    options.forEach(opt => {
      opt.addEventListener('click', (e) => {
        e.preventDefault();
        opt.classList.toggle('is-active');
        if (opt.classList.contains('is-active') && noneOption) {
          noneOption.classList.remove('is-active');
        }
        updateCounter();
      });
    });

    if (noneOption) {
      noneOption.addEventListener('click', (e) => {
        e.preventDefault();
        const isActive = noneOption.classList.toggle('is-active');
        if (isActive) {
          options.forEach(o => o.classList.remove('is-active'));
        }
        updateCounter();
      });
    }
  }

  /* -------------------------------------------------------------------
     Header Search — expandable inline search triggered by icon
     ------------------------------------------------------------------- */
  function initSearchOverlay() {
    const searchForm = document.getElementById('headerSearchForm');
    const searchBtn = document.getElementById('headerSearchBtn');
    const searchInput = document.getElementById('headerSearchInput');
    
    if (!searchForm || !searchBtn || !searchInput) return;

    // Toggle search on button click
    searchBtn.addEventListener('click', (e) => {
      // If the form is already active, we submit it if there's a value, otherwise close it
      if (searchForm.classList.contains('is-active')) {
        if (searchInput.value.trim() !== '') {
          searchForm.submit();
        } else {
          searchForm.classList.remove('is-active');
        }
      } else {
        searchForm.classList.add('is-active');
        setTimeout(() => searchInput.focus(), 150);
      }
    });

    // Close when clicking outside
    document.addEventListener('click', (e) => {
      if (!searchForm.contains(e.target) && searchForm.classList.contains('is-active')) {
        searchForm.classList.remove('is-active');
        searchInput.value = '';
      }
    });

    // Close on escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && searchForm.classList.contains('is-active')) {
        searchForm.classList.remove('is-active');
        searchInput.value = '';
      }
    });
  }

  /* -------------------------------------------------------------------
     Flip Cards — 3D page-turn toggle (independent per card)
     Each card wrapper carries data-flip-card="card-NN".
     Buttons inside carry data-flip-btn="card-NN".
     The inner rotating element has id="flip-inner-NN".
     Toggling .is-flipped on that inner element triggers the CSS
     rotateY(-180deg) transition around the left-spine origin.
  ------------------------------------------------------------------- */
  function initFlipCards() {
    // Use event delegation on the document so future dynamic cards
    // also work without re-initialising.
    document.addEventListener('click', function (e) {
      const btn = e.target.closest('[data-flip-btn]');
      if (!btn) return;

      const cardId = btn.dataset.flipBtn;           // e.g. "card-01"
      const innerId = 'flip-inner-' + cardId.replace('card-', ''); // "flip-inner-01"
      const inner = document.getElementById(innerId);
      if (!inner) return;

      inner.classList.toggle('is-flipped');
    });
  }

})();