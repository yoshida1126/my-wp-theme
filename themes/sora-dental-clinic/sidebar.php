<aside>
  <?php if(is_archive()): ?>
    <div class="archive-aside">
      <h2 class="archive-title">月別一覧</h2>
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
  <?php else: ?>
    <h2>最近の投稿</h2>
    <ul>
      <?php
        $args = array (
          'post_type'      => 'news',
          'posts_per_page' => '5',
        );
        $news_query = new WP_Query($args);
        if($news_query->have_posts()) :
      ?>
        <?php
          while($news_query->have_posts()) :
          $news_query->the_post();
        ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="meta">
                <p><?php echo get_the_date(); ?></p>
                <?php
	              $terms = get_the_terms(get_the_ID(), 'news-type');
                  if ($terms && !is_wp_error($terms)):
                ?>
                  <?php foreach($terms as $term): ?>
                    <p class="tag"><?php echo $term->name; ?></p>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <p><?php the_title(); ?></p>
            </a>
          </li>
        <?php 
          endwhile;
          wp_reset_postdata();
        ?>
      <?php endif; ?>
    </ul>
  <?php endif; ?>
  <div class="btn">
    <a href="<?php echo get_post_type_archive_link('news'); ?>"><button>お知らせ一覧</button></a>
  </div>
</aside>