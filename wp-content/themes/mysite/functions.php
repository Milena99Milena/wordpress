<?php

function register_nav()
{
    register_nav_menus (
        array( 'header'=> 'Header' )
    );
    register_nav_menus (
        array( 'footer'=> 'Footer' )
    );
    register_nav_menus (
        array('404'=> '404')
    );
}

if (! function_exists('setup')):
    function setup(){
        register_nav();
        add_theme_support('post-thumbnails');
        add_image_size('team', 475, 475, array('center','center'));
    }
endif;

function scripts_header(){
    wp_enqueue_style('init', get_stylesheet_uri());
}

function scripts_footer(){

}

add_action('after_setup_theme', 'setup');
add_action('wp_enqueue_style', 'scriptes_header');


function lawfirm_styles_scripts() {
    //main stylesheet, style.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );}

add_action( 'wp_enqueue_scripts', 'lawfirm_styles_scripts' );

//shortcodes

require_once('shortcodes/practice-areas.php');
require_once('shortcodes/team.php');