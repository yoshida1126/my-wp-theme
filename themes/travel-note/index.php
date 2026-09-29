<?php get_header(); ?>
<div class="container">
  <main class="main">
    <h2 class="heading-jp">記事一覧</h2>
    <div class="contents grid-3">
      <?php
        if(have_posts()):
        while(have_posts()):
        the_post();
      ?>
        <?php get_template_part('template-parts/loop', 'post'); ?>
      <?php
        endwhile;
        endif;
      ?>
    </div>
    <?php get_template_part('template-parts/parts', 'pagination'); ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>