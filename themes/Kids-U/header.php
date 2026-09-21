<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header">
      <h1 class="header-logo">
        <a href="#">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="ロゴ">
        </a>
      </h1>
      <nav class="nav-pc">
        <ul>
          <li><a href="#feature">特徴</a></li>
          <li><a href="#course">コース案内</a></li>
          <li><a href="#news">新着情報</a></li>
          <li><a href="#access">アクセス</a></li>
          <li><a href="#">TEL 000-123-4567</a></li>
        </ul>
      </nav>
      <nav class="nav-sp">
        <ul>
          <li><a href="#feature">特徴</a></li>
          <li><a href="#course">コース案内</a></li>
          <li><a href="#news">新着情報</a></li>
          <li><a href="#access">アクセス</a></li>
        </ul>
      </nav>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <a href="#" class="btn">体験申し込み</a>
    </header>