<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * Automatically redirects all missing pages to the "Under Development" page.
 */

// Clear output buffer if needed
if ( ob_get_length() ) {
    ob_clean();
}

// Redirect to the /under-utvikling/ page
wp_redirect( home_url( '/under-utvikling/' ), 302 );
exit;
