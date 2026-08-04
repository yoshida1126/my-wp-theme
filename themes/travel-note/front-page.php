<?php get_header(); ?>
  <div class="container">
    <main class="main">
      <section class="feature" id="feature">
        <h2 class="heading-jp">おすすめ記事</h2>
        <p class="heading-en">Feature</p>
        <div class="contents">
          <?php
            $args = array(
              'post_type'      => 'post',
              'category_name'  => 'My favorite',
              'posts_per_page' => 2
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()):
            while ($the_query->have_posts()):
            $the_query->the_post();
          ?>
            <?php get_template_part('template-parts/loop', 'post'); ?>
          <?php
            endwhile;
            wp_reset_postdata();
            endif;
          ?>
        </div>
      </section>

      <section class="new" id="new">
        <h2 class="heading-jp">新着記事</h2>
        <p class="heading-en">New</p>
        <div class="contents grid-3">
          <?php
            $args = array(
              'post_type'      => 'post',
              'posts_per_page' => 9
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()):
            while ($the_query->have_posts()):
            $the_query->the_post();
          ?>
            <?php get_template_part('template-parts/loop', 'post'); ?>
          <?php
            endwhile;
            wp_reset_postdata();
            endif;
          ?>
        </div>
        <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn">
          <p>過去の記事を見る</p>
        </a>
      </section>
    </main>

    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>