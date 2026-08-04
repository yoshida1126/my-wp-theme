<?php get_header(); ?>
  <main class="main">
    <div class="reservation-container">
      <?php
        if(have_posts()):
        while(have_posts()):
        the_post();
      ?>
        <header class="content-header">
          <h2><?php the_title(); ?></h2>
        </header>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </main>
<?php get_footer(); ?>