<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="robots" content="noindex">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.ico">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
      <div class="header">
        <?php if(is_front_page()): ?>
          <h1 class="header-logo fade-in">
            <a href="<?php echo esc_url(home_url()); ?>">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="ロゴ">
            </a>
          </h1>
        <?php else: ?>
          <h1 class="header-logo">
            <a href="<?php echo esc_url(home_url()); ?>">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="ロゴ">
            </a>
          </h1>
        <?php endif; ?>
      </div>
    </header>