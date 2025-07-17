<?php

function ag_ships_scripts()
{
    wp_enqueue_script('ag-ships-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('ag-ships-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);
    wp_enqueue_script('ag-ships-custom-jquery-js', get_template_directory_uri() . '/assets/js/custom-jquery.js', array(), _S_VERSION, true);
    wp_enqueue_script('ag-ships-slick-js', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'ag_ships_scripts');
