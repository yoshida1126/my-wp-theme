<?php get_header(); ?>
  <main class="main">
    <section class="section section-works" id="works">
      <div class="section-inner">
        <h1 class="section-title">WORKS</h1>
        <div class="works">
          <?php
            $args = array (
              'post_type'      => 'works',
              'posts_per_page' => '3',
            );
            $works_query = new WP_Query($args);
            if($works_query->have_posts()) :
          ?>
            <?php
              while($works_query->have_posts()) :
              $works_query->the_post();
            ?>
              <div class="content">
                <a href="<?php the_permalink(); ?>">
                  <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('page_eyecatch'); ?>
                  <?php endif; ?>
                  <?php
                    $terms = get_the_terms(get_the_ID(), 'work-type'); 
                    if ($terms && !is_wp_error($terms)): 
                    $first_term = reset($terms);
                  ?> 
                      <p class="works-tag">#<?php echo $first_term->name; ?></p>
                  <?php endif; ?>
                  <p class="work-title"><?php the_title(); ?></p>
                </a>
              </div>
            <?php
              endwhile;
              wp_reset_postdata();
            ?>
          <?php endif; ?>
        </div>
        <div class="btn">
          <a href="<?php echo esc_url(home_url('works')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/works.svg" alt="">
          </a>
        </div>
      </div>
    </section>

    <section class="section section-skills" id="skills">
      <div class="section-inner">
        <h1 class="section-title">SKILLS</h1>
        <div class="section-contents">
          <div class="card">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/coding.svg">
            <p class="card-title">HTML/CSS/JavaScript</p>
            <hr>
            <p class="card-description">Figmaで作成したデザインカンプをもとに、HTML / CSS / JavaScript を用いたWebサイト制作を行っています。可読性や保守性を意識したコーディングを心がけています。</p>
          </div>
          <div class="card">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/wordpress.svg">
            <p class="card-title">WordPress</p>
            <hr>
            <p class="card-description">オリジナルテーマ制作を通して、WordPressを用いたサイト構築を学習しています。PHPを用いたカスタマイズにも取り組んでいます。</p>
          </div>
          <div class="card">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/figma.svg">
            <p class="card-title">Figma</p>
            <hr>
            <p class="card-description">Figmaのデザインデータを確認しながら、HTML / CSS / JavaScript を用いたコーディングを行っています。</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-profile" id="profile">
      <div class="profile-section-inner">
        <h1 class="section-title">PROFILE</h1>
        <p class="eng-name">KODAI YOSHIDA</p>
        <p class="name">吉田 航大</p>
        <p class="introduction">バックエンド領域を中心に学習してきた経験を活かしながら、現在はWordPress制作やWebサイト制作にも取り組んでいます。<br>見やすく保守しやすいコーディングを意識し、実装力の向上を目指しています。</p>
        <table class="tech-stack">
          <tr class="item">
            <th class="category1">Frontend</td>
            <td class="item-name">HTML / CSS / JavaScript</td>
          </tr>
          <tr class="item">
            <th class="category2">Backend</td>
            <td class="item-name">PHP / WordPress / Ruby on Rails</td>
          </tr>
          <tr class="item">
            <th class="category1">DevOps/Tools</td>
            <td class="item-name">AWS / Docker / CircleCI</td>
          </tr>
          <tr class="item">
            <th class="category2">Others</td>
            <td class="item-name">Git / GitHub</td>
          </tr>
        </table>
      </div>
    </section>

    <section class="section section-contact" id="contact">
      <?php get_template_part('template-parts/contact'); ?>
    </section>

    <a href="#" class="top-btn1"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top.svg"></a>
    <a href="#" class="top-btn2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top-responsive.svg"></a>
  </main>
<?php get_footer(); ?>