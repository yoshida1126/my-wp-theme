<?php get_header(); ?>
<div class="container">
  <main class="main">
    <h2>
      <?php 
        if(is_month()):
        global $wp_query;
        $post_count = $wp_query->found_posts;
        echo get_the_date('Y年n月').' ('.$post_count.')';
      ?>
      <?php else: ?>
        お知らせ一覧
      <?php endif; ?>
    </h2>
    <?php
      if(have_posts()): 
      while(have_posts()):
      the_post();
    ?>
      <ul class="index">
        <?php get_template_part('template-parts/loop', 'news'); ?>
      <ul>
    <?php endwhile; endif; ?>
    <?php
      the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => '« 前へ',
        'next_text' => '次へ »',
      ) );
    ?>
  </main>

  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>