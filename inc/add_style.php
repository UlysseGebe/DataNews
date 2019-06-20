<?php
    add_action('wp_enqueue_scripts', 'add_styles');
    function add_styles(){
        wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap' );

        wp_register_style( 'Mainstyle', CSS_URL.'/style.css' );
        wp_enqueue_style( 'Mainstyle' );
    }