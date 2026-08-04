<?php get_header(); ?>
<div class="container">
  <main class="main">
    <?php
      if(have_posts()):
      while(have_posts()):
      the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="content-header">
          <h1><?php the_title(); ?></h1>
          <div class="post-meta">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/clock.svg">
            <p><?php echo get_the_date('Y.m.d'); ?></p>
          </div>
        </header>
        <div class="content-body">
          <?php the_content(); ?>
        </div>
      </article>
    <?php 
      endwhile;
      endif;
    ?>
    <a href="<?php echo esc_url(home_url()); ?>" class="btn">
        <p>ホームへ戻る</p>
    </a>
  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>