<div class="content js-fade" onclick="location.href='<?php echo esc_url(get_permalink()); ?>'">
  <?php the_post_thumbnail('page_eyecatch', array('class' => 'eye-catch')); ?>
  <h3 class="article-title"><?php echo get_the_title(); ?></h3>
  <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
  <div class="post-meta">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/clock.svg">
    <p><?php echo get_the_date('Y.m.d'); ?></p>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/folder.svg">
    <?php
      $categories = get_the_category();
      if ($categories) {
        $category = $categories[0];
        echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
      }
    ?>
  </div>
</div>