<?php

function fed_register_style() {
   // wp_enqueue_style('roboto-fonts', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('normalize', get_theme_file_uri('assets/css/normalize.css'), array(), '1.0', 'all');
    wp_enqueue_style('style', get_theme_file_uri('style.css'), array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'fed_register_style' );

