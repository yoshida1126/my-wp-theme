<?php get_header(); ?>
  <main class="main">
    <section class="section section-works" id="works">
      <div class="section-inner">
        <h1 class="section-title">WORKS</h1>
          <div class="works">
            <?php if(have_posts()): ?>
              <?php
                while(have_posts()):
                the_post();
              ?>
                <div class="content">
                  <a href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail()): ?>
                      <img src="<?php the_post_thumbnail('page_eyecatch'); ?>
                    <?php endif; ?>
                    <?php
	                    $terms = get_the_terms(get_the_ID(), 'work-type');
                      if ($terms && !is_wp_error($terms)):
                    ?>
                      <?php foreach($terms as $term): ?>
                        <p class="works-tag">#<?php echo $term->name; ?></p>
                      <?php endforeach; ?>
                    <?php endif; ?>
                    <p class="work-title"><?php the_title(); ?></p>
                  </a>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-contact" id="contact">
      <?php get_template_part('template-parts/contact'); ?>
    </section>

    <a href="#" class="top-btn1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top.svg"></a>
    <a href="#" class="top-btn2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top-responsive.svg"></a>
  </main>
<?php get_footer(); ?>