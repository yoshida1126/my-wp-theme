<?php
  function ps_theme_setup() {
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'ps_theme_setup');

  function ps_enqueue_scripts() {
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'portfolio-theme-common',
        get_template_directory_uri().'/assets/js/main.js',
        array(),
        '1.0.0',
    );

    wp_enqueue_style(
        'googlefonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&display=swap',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'ps_theme_styles',
        get_template_directory_uri().'/assets/css/app.css',
        array(),
        '1.0.0'
    );
  }

  add_action('wp_enqueue_scripts', 'ps_enqueue_scripts');

  function ps_block_setup() {
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');

    add_theme_support(
      'editor-color-palette',
      array(
        array(
          'name' => 'ブルー',
          'slug' => 'blue',
          'color' => '#5D6D7E',
        ),
        
        array(
          'name' => 'オレンジ',
          'slug' => 'orange',
          'color' => '#D35400',
        ),

        array(
          'name' => 'ホワイト',
          'slug' => 'white',
          'color' => '#FAFAFA',
        ),

        array(
          'name' => 'ブラック',
          'slug' => 'black',
          'color' => '#252525',
        ),

        array(
          'name' => 'グレー',
          'slug' => 'gray',
          'color' => '#E8E8E8',
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

    add_editor_style('assets/css/editor-styles.css');

    add_editor_style('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&display=swap');
  }

  add_action('after_setup_theme', 'ps_block_setup');

  function ps_wpcf7_autop() {
    return false;
  }
  add_filter('wpcf7_autop_or_not', 'ps_wpcf7_autop');

  add_action('wp_footer', function() {
    ?>
    <script>
      document.addEventListener('wpcf7mailsent', function(event) {
        const responseOutput = document.querySelector('.wpcf7-response-output');
    
        if (responseOutput) {
          responseOutput.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
          });
        }
      }, false);
    </script>
    <?php
  }, 999);

  define( 'WP_SCSS_ALWAYS_RECOMPILE', true );