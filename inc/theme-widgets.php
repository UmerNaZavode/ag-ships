<?php

function ag_ships_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'ag-ships'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'ag-ships'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'ag_ships_widgets_init');
