<?php get_header(); ?>
  <main class="main">
    <div class="news-container">
      <div class="news-contents">
        <article>
          <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <?php
	            $terms = get_the_terms(get_the_ID(), 'news-type');
                if ($terms && !is_wp_error($terms)):
              ?>
                <?php foreach($terms as $term): ?>
                  <p class="tag"><?php echo $term->name; ?></p>
                <?php endforeach; ?>
              <?php endif; ?>
              <h1><?php the_title(); ?></h1>
              <p><?php the_content(); ?></p>
            <?php endwhile; ?>
          <?php endif; ?>
        </article>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>
<?php get_footer(); ?>