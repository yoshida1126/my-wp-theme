<?php get_header(); ?>
  <main class="main">
    <div class="news-container">
      <div class="news-index">
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
        <ul>
            <?php
              if(have_posts()): 
              while(have_posts()):
              the_post();
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
                        <p><?php echo $term->name; ?></p>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                  <p><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; endif; ?>
        </ul>
        <?php
          the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => '« 前へ',
            'next_text' => '次へ »',
          ) );
        ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>
<?php get_footer(); ?>