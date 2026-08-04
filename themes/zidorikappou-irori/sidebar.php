<aside class="aside">
  <div class="archive-aside">
    <h3 class="archive-title">月別一覧</h3>
    <ul>
      <?php
        $args = array(
          'post_type'       => 'news',
          'type'            => 'monthly',
          'limit'           => 4,
          'format'          => 'html',
          'before'          => '',
          'after'           => '',
          'show_post_count' => true,
          'echo'            => 1,
          'order'           => 'DESC'
        );
        wp_get_archives( $args );
      ?>
    </ul>
  </div>
  <div class="btn">
    <a href="<?php echo get_post_type_archive_link('news'); ?>">お知らせ一覧</a>
  <div>
</aside>