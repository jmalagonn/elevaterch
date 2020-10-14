<?php

function el_enqueue(){
    $uri = get_theme_file_uri();
    $ver = EL_DEV_MODE ? time() : false;

    wp_register_style('el_fonts', $uri.'/assets/css/fonts.css', [], $ver);
    wp_register_style('el_bootstrap', $uri.'/assets/css/bootstrap-4.5.2-dist/css/bootstrap.css', [], $ver);
    wp_register_style('el_style', $uri.'/assets/css/style.css', [], $ver);
    wp_register_style('el_swiper_style', 'https://unpkg.com/swiper/swiper-bundle.min.css', [], $ver);

    wp_enqueue_style('el_fonts');
    wp_enqueue_style('el_bootstrap');
    wp_enqueue_style('el_style');
    wp_enqueue_style('el_swiper_style');

    wp_register_script('el_swiper_script', 'https://unpkg.com/swiper/swiper-bundle.min.js');
    wp_register_script('el_js', $uri.'/assets/js/js.js', [], $ver);

    wp_enqueue_script('jquery');
    wp_enqueue_script('el_swiper_script');
    wp_enqueue_script('el_js');
}