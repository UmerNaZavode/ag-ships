<?php

function ag_ships_styles()
{
    wp_enqueue_style('ag-ships-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('ag-ships-main', get_template_directory_uri()."/assets/css/main.css", array(), _S_VERSION);
    wp_enqueue_style('ag-ships-slick-css', get_template_directory_uri()."/assets/libs/slick/slick.css", array(), _S_VERSION);
    wp_style_add_data('ag-ships-style', 'rtl', 'replace');
}

add_action('wp_enqueue_scripts', 'ag_ships_styles');
