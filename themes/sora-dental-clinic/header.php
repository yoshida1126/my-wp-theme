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
    <?php if(is_front_page()): ?>
      <div class="loader">
        <div class="loader-item">
            <div class="pop-dental"></div>
            <div class="pop-dental"></div>
            <div class="pop-dental"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <span>LOADING</span>
        </div>
      </div>
    <?php endif; ?>
    <header>
      <div class="header">
        <div class="header-flex">
          <a href="<?php echo esc_url(home_url()); ?>">
            <div class="header-logo">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="ロゴ">
              <h1>そらデンタルクリニック</h1>
            </div>
          </a>
          <div class="tel">
            <p>
              tel:<span>03-0000-0000</span>
            </p>
          </div>
          <div class="header-hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <ul class="header-nav">
          <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
          <li><a href="<?php echo esc_url(home_url()); ?>#feature">当院の特徴</a></li>
          <li><a href="<?php echo esc_url(home_url()); ?>#medical-menu">診療科目</a></li>
          <li><a href="<?php echo esc_url(home_url()); ?>#consultation-hours">診療時間</a></li>
          <li><a href="<?php echo esc_url(home_url()); ?>#news">お知らせ</a></li>
          <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/line_icon.png" alt="ラインのロゴ"></a></li>
          <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/insta_icon.png" alt="インスタグラムのロゴ"></a></li>
        </ul>
        <ul class="sp-header-nav">
          <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
          <li><a href="<?php echo esc_url(home_url()); ?>#feature">当院の特徴</a></li>
          <li><a href="<?php echo esc_url(home_url()); ?>#medical-menu">診療科目</a></li>
          <li><a href="<?php echo esc_url(home_url()); ?>#consultation-hours">診療時間</a></li>
          <li><a href="<?php echo esc_url(home_url()); ?>#news">お知らせ</a></li>
          <li>tel:03-0000-0000</li>
        </ul>
      </div>
      <?php if(is_front_page()): ?>
        <div class="header-fv">
          <div class="header-fv-contents">
            <picture>
              <source media="(max-width: 800px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sp_top_me.png">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pc_top_me.png" alt="ロゴ">
            </picture>
            <p>
              すこやかな毎日のために
            </p>
          </div>
          <div class="scrolldown">
              <span>Scroll</span>
          </div>
        </div>
      <?php endif; ?>
    </header>