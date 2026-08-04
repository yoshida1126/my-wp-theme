<?php

  function irori_theme_setup() {
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'irori_theme_setup');

  function irori_enqueue_scripts() {
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'irori-theme_common',
        get_template_directory_uri().'/assets/js/main.js',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'googlefonts',
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Noto+Serif+JP:wght@200..900&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'zidorikappou-irori-theme-styles',
        get_template_directory_uri().'/assets/css/app.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'reset-styles',
        'https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css',
        array(),
        '1.0.0'
    );
  }

  add_action('wp_enqueue_scripts', 'irori_enqueue_scripts');

  function custom_archives_link($link_html) {
    $link_html = preg_replace( '/<\/a>\s*(&nbsp;)\((\d+)\)/', '<span class="post-count"> ($2)</span></a>', $link_html );
    return $link_html;
  }

  add_filter( 'get_archives_link', 'custom_archives_link' );

  define( 'WP_SCSS_ALWAYS_RECOMPILE', true );