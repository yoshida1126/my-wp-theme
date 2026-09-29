<?php get_header(); ?>
  <main class="main">
    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <section class="section section-detail" id="detail">
          <div class="section-inner">
            <div class="wrapper">
              <?php
                $terms = get_the_terms($post->ID,'work-type');
                if ($terms && !is_wp_error($terms)) {
	                foreach( $terms as $term ) {
	                	echo '<p class="tag"><a href="'.get_term_link($term->slug, 'work-type').'">#'.$term->name.'</a></p>';
	                }
                }
              ?>
              <h1 class="title"><?php the_title(); ?></h1>
            </div>
            <div class="slideshow-background">
              <div class="slideshow-container">
                <div class="slideshow-wrapper" id="slideshow">
                  <?php
                    for ($i = 1; $i <= 4; $i++) :

                    $image = get_field('slide_image' . $i);

                    if ($image):
                  ?>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                  <?php
                    endif;
                    endfor;
                  ?>
                </div>
                <button class="prev" id="prevBtn">&#10094;</button>
                <button class="next" id="nextBtn">&#10095;</button>
                <div class="slideshow-dots" id="dotsContainer"></div>
              </div>
            </div>
            <div class="work-description">
              <?php the_content(); ?>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>

    <section class="section section-contact" id="contact">
      <?php get_template_part('template-parts/contact'); ?>
    </section>
  </main>
<?php get_footer(); ?>