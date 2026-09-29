<?php
  function ku_theme_setup() {
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'ku_theme_setup');

  function ku_enqueue_scripts() {
    wp_enqueue_script('jquery');

    wp_enqueue_script(
      'ku-theme-common',
      get_template_directory_uri().'/assets/js/main.js',
      array(),
      '1.0.0',
    );

    wp_enqueue_style(
      'googlefonts',
      'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700&display=swap',
      array(),
      '1.0.0'
    );

    wp_enqueue_style(
        'reset_styles',
        'https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css',
        array(),
        '1.0.0',
    );

    wp_enqueue_style(
        'ku_theme_styles',
        get_template_directory_uri().'/assets/css/app.css',
        array(),
        '1.0.0'
    );
  }

  add_action('wp_enqueue_scripts', 'ku_enqueue_scripts');