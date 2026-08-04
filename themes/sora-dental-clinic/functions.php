<?php

  function sora_theme_setup() {
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'sora_theme_setup');

  function sora_enqueue_scripts() {
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'sora-theme-common',
        get_template_directory_uri().'/assets/js/main.js',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'googlefonts-IBM',
        'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP:wght@400;500;600&display=swap',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'googlefonts-Open-Sans',
        'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap',
        array(),
        '1.0.0'
    );


    wp_enqueue_style(
        'googlefonts-Material',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'reset-styles',
        'https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'sora-dental-clinic-theme-styles',
        get_template_directory_uri().'/assets/css/app.css',
        array(),
        '1.0.0'
    );
  }

  add_action('wp_enqueue_scripts', 'sora_enqueue_scripts');

  function custom_archives_link($link_html) {
    $link_html = preg_replace( '/<\/a>\s*(&nbsp;)\((\d+)\)/', '<span class="post-count"> ($2)</span></a>', $link_html );
    return $link_html;
  }

  add_filter( 'get_archives_link', 'custom_archives_link' );

  define( 'WP_SCSS_ALWAYS_RECOMPILE', true );