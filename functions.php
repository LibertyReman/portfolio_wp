<?php

  // CSS, JSの読み込み
  function portfolio_script() {
    wp_enqueue_style('ress', get_template_directory_uri() . '/css/ress.css');
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.css');
    wp_enqueue_style('ityped', get_template_directory_uri() . '/css/ityped.css');
    wp_enqueue_style('portfolio', get_template_directory_uri() . '/css/portfolio.css');

    wp_enqueue_script('swiper-bundle', get_template_directory_uri(). '/js/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('swiper-config', get_template_directory_uri(). '/js/swiper-config.js', array(), false, true);
    wp_enqueue_script('ityped', get_template_directory_uri(). '/js/ityped.min.js', array(), false, true);
    wp_enqueue_script('ityped-config', get_template_directory_uri(). '/js/ityped-config.js', array(), false, true);
    wp_enqueue_script('hamburger', get_template_directory_uri(). '/js/hamburger.js', array(), false, true);
    wp_enqueue_script('modal', get_template_directory_uri(). '/js/modal.js', array(), false, true);
  }
  add_action('wp_enqueue_scripts', 'portfolio_script');



