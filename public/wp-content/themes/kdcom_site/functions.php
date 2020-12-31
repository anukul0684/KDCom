<?php

/** 
 * Enabling functions for KDCom Website
 */


register_nav_menus();

add_theme_support('post-thumbnails');

if(!function_exists('kdcom_scripts'))
{
    function kdcom_scripts()
    {
        wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
                            [],'4.5.2',false);
        wp_enqueue_style('kdcom_style',get_stylesheet_uri(),['bootstrap'],'1.0',false);

    }
    add_action('wp_enqueue_scripts','kdcom_scripts');
}