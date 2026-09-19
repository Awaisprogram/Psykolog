<?php
/**
 * Psykolog Theme Functions
 */

// -------------------------------------------------------
// 1. Include Walker Class
// -------------------------------------------------------
require_once get_template_directory() . '/inc/class-mega-menu-walker.php';

// -------------------------------------------------------
// 2. Theme Setup — Register Nav Menu Locations
// -------------------------------------------------------
function psykolog_setup() {
    register_nav_menus([
        'mega-conditions' => __('Mega Menu: Conditions', 'psykolog'),
        'mega-therapies'  => __('Mega Menu: Therapies',  'psykolog'),
        'mega-services'   => __('Mega Menu: Services',   'psykolog'),
        'mega-about'      => __('Mega Menu: About Us',   'psykolog'),
        'mega-resources'  => __('Mega Menu: Resources',  'psykolog'),
    ]);
}
add_action('after_setup_theme', 'psykolog_setup');

// -------------------------------------------------------
// 3. ACF Options Pages (Mega Menu Sidebars)
// -------------------------------------------------------
if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title' => 'Mega Menu Settings',
        'menu_title' => 'Mega Menu',
        'menu_slug'  => 'mega-menu-settings',
        'capability' => 'edit_posts',
        'parent_slug'=> 'themes.php',
        'icon_url'   => 'dashicons-menu-alt',
    ]);

    $sections = [
        ['mega-conditions-sidebar', 'Conditions Sidebar'],
        ['mega-therapies-sidebar',  'Therapies Sidebar'],
        ['mega-services-sidebar',   'Services Sidebar'],
        ['mega-about-sidebar',      'About Us Sidebar'],
        ['mega-resources-sidebar',  'Resources Sidebar'],
    ];

    foreach ($sections as $section) {
        acf_add_options_sub_page([
            'page_title'  => $section[1],
            'menu_title'  => $section[1],
            'parent_slug' => 'mega-menu-settings',
            'menu_slug'   => $section[0],
        ]);
    }
}

// -------------------------------------------------------
// 4. Helper: Render one mega menu section in header.php
// -------------------------------------------------------
function psykolog_mega_menu( $location, $acf_option_slug ) {

    // Content wrapper (search + grid)
    echo '<div class="mega-menu__content">';


    // Search bar
    echo '<div class="mega-menu__search">';
    echo '<svg class="icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>';
    echo '<input type="text" placeholder="' . esc_attr__('Type To Search Here', 'psykolog') . '">';
    echo '</div>';

    // Grid of menu items via Walker
    echo '<div class="mega-menu__grid">';
    wp_nav_menu([
        'theme_location' => $location,
        'walker'         => new Mega_Menu_Walker(),
        'items_wrap'     => '%3$s',
        'container'      => false,
        'fallback_cb'    => false,
    ]);
    echo '</div>';

    echo '</div>'; // end .mega-menu__content


    // ACF Sidebar
    $img   = get_field( 'sidebar_image',       $acf_option_slug );
    $title = get_field( 'sidebar_title',       $acf_option_slug ) ?: 'Speak To A Psychologist';
    $desc  = get_field( 'sidebar_description', $acf_option_slug ) ?: 'Most people are offered an appointment within 1 to 3 days, by video or in our clinics in Oslo and Ski.';
    $url   = get_field( 'sidebar_cta_url',     $acf_option_slug ) ?: get_home_url() . '/kontakt-oss/';

    echo '<div class="mega-menu__sidebar">';
    if ( $img ) {
        echo '<img src="' . esc_url($img['url']) . '" alt="' . esc_attr($img['alt']) . '" class="mega-menu__sidebar-img">';
    }
    echo '<div class="mega-menu__sidebar-content">';
    echo '<h4 class="mega-menu__sidebar-title">' . esc_html($title) . '</h4>';
    echo '<p class="mega-menu__sidebar-desc">' . esc_html($desc) . '</p>';
    echo '<a href="' . esc_url($url) . '" class="btn btn--primary btn--sidebar">';
    echo '<svg class="icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>';
    echo ' Contact Us</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

// -------------------------------------------------------
// 5. Under-Development Page — Auto-redirect for unbuilt pages
// -------------------------------------------------------
/**
 * Any WP Page assigned the "Under Development" page template
 * will automatically render under-development.php.
 * WordPress handles this natively — no extra redirect needed.
 *
 * USAGE (WordPress Admin):
 *   1. Go to Pages → Add New
 *   2. Set the page title (e.g. "Sleep Problems")
 *   3. Set the slug (e.g. "sleep-problems")
 *   4. In Page Attributes → Template, choose "Under Development"
 *   5. Publish — done. WordPress serves under-development.php automatically.
 *
