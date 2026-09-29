<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.ico">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
      <div class="header_logo">
        <h1 class="logo"><a href="<?php echo esc_url(home_url()); ?>">Portfolio Site</a></h1>
      </div>

      <div class="header-hamburger">
        <button class="hamburger">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/menu.svg">
        </button>
        <button class="close-menu">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/back.svg">
        </button>
      </div>

      <div class="header-menu" id="js-menu">

        <nav class="header_nav nav">
          <div class="nav-inner">     
            <ul>
              <li><a href="<?php echo esc_url(home_url()); ?>">TOP</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>/#works">WORKS</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>/#skills">SKILLS</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>/#profile">PROFILE</a></li>
            </ul>
          </div>
        </nav>

        <div class="contact-btn">
          <a href="#contact"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/contact.svg" alt=""></a>
        </div>
      </div>
    </header>