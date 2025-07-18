<?php

/**
 * ag-ships functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ag-ships
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '2.0.0');
}

//include_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . "/inc/theme-setup.php";

require_once __DIR__ . "/inc/acf.php";

require_once __DIR__ . "/inc/theme-widgets.php";

require_once __DIR__ . "/inc/theme-styles.php";

require_once __DIR__ . "/inc/theme-scripts.php";

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function clear_phone($phone)
{
    return preg_replace("/[^0-9]/", "", $phone);
}

function remove_pages_editor()
{
    $ids = [2, 91, 117];
    if (in_array(get_the_ID(), $ids)) {
        remove_post_type_support('page', 'editor');
    } // end if
} // end remove_pages_editor
add_action('add_meta_boxes', 'remove_pages_editor');

function vardump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}