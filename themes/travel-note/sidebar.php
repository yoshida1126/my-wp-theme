<aside class="aside">
  <?php get_search_form(); ?>
  <div class="archive-aside">
    <h3 class="archive-title">月別一覧</h3>
    <ul>
      <?php
        $args = array(
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
  <div class="archive-aside">
    <h3 class="archive-title">カテゴリー別一覧</h3>
    <ul>
      <?php 
        wp_list_categories(array(
          'title_li' => '',
        ));
      ?>
    </ul>
  </div>
</aside>