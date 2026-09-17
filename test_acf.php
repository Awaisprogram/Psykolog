<?php
require 'wp-load.php';
$page = get_page_by_path('ocd');
if ($page) {
    $s2 = get_field('section_2', $page->ID);
    print_r($s2);
} else {
    echo "Page not found.";
}
