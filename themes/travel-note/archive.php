<?php get_header(); ?>
<div class="container">
  <main class="main">
    <h2 class="heading-jp">
      <?php
       $term = get_queried_object();
      ?>
      <?php if(is_month()): ?>
        <?php
          global $wp_query;
          $post_count = $wp_query->found_posts;
          echo get_the_date('Y年n月').' ('.$post_count.')'; 
        ?>
      <?php else: ?>
        カテゴリー: <?php single_term_title(); ?> (<?php echo $term->count ?>)
      <?php endif; ?>
    </h2>
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