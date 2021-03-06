<?php

/**
 * Widgets registrieren
 * Menüs
 * Side-Bars
 * Mudole 
 * 
 */


//
add_theme_support('post-thumbnails');


/**
 * Menü registrieren "Main Menue"
 */
function register_my_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'meta-menu' => __('Meta Menu')
        )
    );
}

add_action('init', 'register_my_menus');
