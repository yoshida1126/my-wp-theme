<?php

  function travel_theme_setup() {
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 670, 372, true ); 

    add_theme_support('html5', array('search-form'));
  }

  add_action('after_setup_theme', 'travel_theme_setup');

  function travel_enqueue_scripts() {
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'travel-theme-common',
        get_template_directory_uri().'/assets/js/main.js',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'googlefonts',
        'https://fonts.googleapis.com/css2?family=MonteCarlo&family=Noto+Sans+JP:wght@100..900&family=Zen+Old+Mincho:wght@400;500;600&display=swap',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'travel-note-theme-styles',
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

  add_action('wp_enqueue_scripts', 'travel_enqueue_scripts');

  function travel_block_setup() {
    add_theme_support('wp-block-styles');

    add_theme_support('responsive-embeds');

    add_theme_support('align-wide');

    add_theme_support(
      'editor-color-palette',
      array(
        array(
          'name' => 'ピンク',
          'slug' => 'pink',
          'color' => '#CC8E8E',
        ),

        array(
          'name' => '茶色',
          'slug' => 'brown',
          'color' => '#4D2E2E',
        ),

        array(
          'name' => '白',
          'slug' => 'white',
          'color' => '#FAFAFA',
        ),
      )
    );

    add_theme_support(
      'editor-font-sizes',
      array(
        array(
          'name' => '小',
          'size' => 14,
          'slug' => 'small',
        ),

        array(
          'name' => '標準',
          'size' => 16,
          'slug' => 'normal',
        ),

        array(
          'name' => '大',
          'size' => 24,
          'slug' => 'large',
        ),

        array(
          'name' => '特大',
          'size' => 32,
          'slug' => 'huge',
        ),
      )
    );

    add_theme_support('editor-styles');

    add_editor_style('assets/css/editor-styles.css');

    add_editor_style('https://fonts.googleapis.com/css2?family=MonteCarlo&family=Noto+Sans+JP:wght@100..900&family=Zen+Old+Mincho:wght@400;500;600&display=swap');
  }

  add_action('after_setup_theme', 'travel_block_setup');

  function custom_archives_link($link_html) {
    $link_html = preg_replace( '/<\/a>\s*(&nbsp;)\((\d+)\)/', '<span class="post-count"> ($2)</span></a>', $link_html );
    return $link_html;
  }

  add_filter( 'get_archives_link', 'custom_archives_link' );

    define( 'WP_SCSS_ALWAYS_RECOMPILE', true );