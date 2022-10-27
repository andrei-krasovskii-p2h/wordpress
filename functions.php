<?php

function fed_theme_support() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'fed_theme_support');

function fed_register_style() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('roboto-fonts', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', array(), $version, 'all');
    wp_enqueue_style('normalize', get_theme_file_uri('assets/css/normalize.css'), array(), $version, 'all');
    wp_enqueue_style('style', get_theme_file_uri('style.css'), array(), $version, 'all');
}
add_action( 'wp_enqueue_scripts', 'fed_register_style' );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'add_link_class')) {
        $atts['class'] = $args->add_link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function fed_menu() {
    $location = array(
        'pre-menu' => 'Menu before navigation bar',
        'nav-menu' => 'Menu in navigation bar'
    );
    register_nav_menus( $location );
}
add_action('init', 'fed_menu');
