<?php
/**
 * Mega Menu Walker
 *
 * Renders each nav menu item as a .mega-menu__link block.
 * Uses two ACF fields set per menu item:
 *   - menu_icon        (Image field)
 *   - menu_description (Text field)
 *
 * Both fields must have Location → Nav Menu Item in ACF Pro.
 */
class Mega_Menu_Walker extends Walker_Nav_Menu {

    /**
     * Render one menu item as a mega-menu link card.
     */
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        // ACF fields attached to the nav menu item
        $icon = get_field( 'menu_icon',        $item );   // returns image array
        $desc = get_field( 'menu_description', $item );   // returns string

        // Build icon HTML
        $icon_html = '';
        if ( ! empty( $icon['url'] ) ) {
            $icon_html = '<img src="' . esc_url( $icon['url'] ) . '" alt="' . esc_attr( $item->title ) . '">';
        }

        $output .= '
        <a href="' . esc_url( $item->url ) . '" class="mega-menu__link">
            <div class="mega-menu__icon-wrapper">' . $icon_html . '</div>
            <div class="mega-menu__text">
                <span class="mega-menu__title">' . esc_html( $item->title ) . '</span>
                <span class="mega-menu__desc">'  . esc_html( $desc )        . '</span>
            </div>
        </a>';
    }

    // Suppress default <ul> and <li> wrappers — we only want bare <a> tags
    public function start_lvl( &$output, $depth = 0, $args = null ) {}
    public function end_lvl(   &$output, $depth = 0, $args = null ) {}
    public function end_el(    &$output, $item,  $depth = 0, $args = null ) {}
}
