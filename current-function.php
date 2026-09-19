<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}


add_action('wp_enqueue_scripts', function () {

    $theme_uri  = get_stylesheet_directory_uri();
    $theme_path = get_stylesheet_directory();

    // Fonts
    wp_enqueue_style(
        'sysinn-fonts',
        $theme_uri . '/assets/fonts.css',
        [],
        file_exists($theme_path . '/assets/fonts.css')
            ? filemtime($theme_path . '/assets/fonts.css')
            : null
    );

    // Main styles
    wp_enqueue_style(
        'sysinn-style',
        $theme_uri . '/assets/styles.css',
        ['sysinn-fonts'],
        file_exists($theme_path . '/assets/styles.css')
            ? filemtime($theme_path . '/assets/styles.css')
            : null
    );

    // Tailwind
    wp_enqueue_style(
        'sysinn-tailwind',
        $theme_uri . '/assets/tailwind.css',
        ['sysinn-style'],
        file_exists($theme_path . '/assets/tailwind.css')
            ? filemtime($theme_path . '/assets/tailwind.css')
            : null
    );

    // Responsive CSS
    wp_enqueue_style(
        'sysinn-responsive',
        $theme_uri . '/assets/responsive.css',
        ['sysinn-tailwind'],
        file_exists($theme_path . '/assets/responsive.css')
            ? filemtime($theme_path . '/assets/responsive.css')
            : null
    );

    // JavaScript
    wp_enqueue_script(
        'sysinn-script',
        $theme_uri . '/assets/script.js',
        [],
        file_exists($theme_path . '/assets/script.js')
            ? filemtime($theme_path . '/assets/script.js')
            : null,
        true
    );

});


add_filter('wp_preload_resources', function ($resources) {

    $resources[] = [
        'href' => get_template_directory_uri() . '/assets/fonts.css',
        'as'   => 'style',
    ];

    return $resources;

});

/**
 * Remove Editor, Comments and Revisions from Pages only.
 */
function customize_page_supports() {
    remove_post_type_support('page', 'editor');
    remove_post_type_support('page', 'comments');
    remove_post_type_support('page', 'revisions');
}
add_action('init', 'customize_page_supports');

// Enable Featured Images (post thumbnails)
add_theme_support( 'post-thumbnails' );

// Enable WordPress automatic <title> tag
add_theme_support( 'title-tag' );


// ===============================================================
// MEGA MENU — Dynamic Header
// ===============================================================

// 1. Include Walker Class
require_once get_template_directory() . '/inc/class-mega-menu-walker.php';

// 2. Register Nav Menu Locations
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

// 3. ACF Options Pages for Sidebar Content
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

// 4. Helper: Render one mega menu section (content + sidebar)
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

    // ACF Sidebar (image, title, description, CTA button)
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
}
