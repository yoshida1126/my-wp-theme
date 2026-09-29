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
        <h1 class="header-logo">
          <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="ロゴ">
          </a>
        </h1>
        <ul class="header-nav">
          <li>
            <a href="<?php echo esc_url(home_url()); ?>#menu">お品書き</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url()); ?>#news">お知らせ</a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url()); ?>#info">店舗案内</a>
          </li>
          <li>
            <a href="#">お問い合わせ</a>
          </li>
        </ul>
      </div>

      <?php if(is_front_page()): ?>
        <div class="header-fv">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo_white.png" alt="ロゴ" class="fade-in">
        </div>
      <?php endif; ?>

      <div class="header-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <ul class="sp-header-nav">
        <li>
          <a href="<?php echo esc_url(home_url()); ?>#menu">お品書き</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url()); ?>#news">お知らせ</a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url()); ?>#info">店舗案内</a>
        </li>
        <li>
          <a href="#">お問い合わせ</a>
        </li>
      </ul>
    </header>
