<?php get_header(); ?>
  <main class="main">
    <section class="intro">
      <div class="img-intro">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/dental_illust.png" alt="歯のイラスト">
      </div>
      <p class="intro-heading js-fade">
        お口のお悩み、
        <br class="br-sp">
        <span>丸ごと</span>お任せください
      </p>
      <p class="js-fade">
        年齢やライフスタイルなどによって、 お口や歯のトラブルはさまざま。<br>そらデンタルクリニックでは、患者様ひとりひとりのお悩みに寄り添い、最適な治療方法をご提案しております。
      </p>
    </section>

    <section id="feature">
      <div class="container">
        <h2>当院の特徴</h2>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/title_under.png" alt="タイトル下の装飾">
        <p>features</p>
        <div class="feature-contents">

          <div class="feature-content blue js-fade">
            <div class="feature-content-img">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature_1.jpg" alt="治療中の画像">
            </div>
            <div class="feature-content-inner">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/num_01.png" alt="01">
              <div class="feature-content-text">
                <h3>確かな技術と質の高い治療</h3>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
              </div>
            </div>
          </div>

          <div class="feature-content white js-fade">
            <div class="feature-content-img">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature_2.jpg" alt="カウンセリングの画像">
            </div>
            <div class="feature-content-inner">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/num_02.png" alt="02">
              <div class="feature-content-text">
                <h3>丁寧なカウンセリング</h3>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
              </div>
            </div>
          </div>

          <div class="feature-content blue js-fade">
            <div class="feature-content-img">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature_3.jpg" alt="器具の画像">
            </div>
            <div class="feature-content-inner">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/num_03.png" alt="03">
              <div class="feature-content-text">
                <h3>徹底した減菌対策</h3>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="medical-menu">
      <div class="container">
        <h2>診療科目</h2>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/title_under.png" alt="タイトル下の装飾">
        <p>medical menu</p>
        <ul class="contents js-fade">
          <li>
            <picture>
              <source media="(max-width: 800px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_normal_sp.png">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_normal.png" alt="一般歯科のイラスト">
            </picture>
            <p>一般歯科</p>
          </li>
          <li>
            <picture>
              <source media="(max-width: 800px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_child_sp.png">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_child.png" alt="小児歯科のイラスト">
            </picture>
            <p>小児歯科</p>
          </li>
          <li>
            <picture>
              <source media="(max-width: 800px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_straight_sp.png">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_straight.png" alt="矯正歯科のイラスト">
            </picture>
            <p>矯正歯科</p>
          </li>
          <li>
            <picture>
              <source media="(max-width: 800px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_protect_sp.png">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_protect.png" alt="予防歯科のイラスト">
            </picture>
            <p>予防歯科</p>
          </li>
          <li>
            <picture>
              <source media="(max-width: 800px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_decay_sp.png">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_decay.png" alt="虫歯治療のイラスト">
            </picture>
            <p>むし歯治療</p>
          </li>
          <li>
            <picture>
              <source media="(max-width: 800px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_perio_sp.png">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_perio.png" alt="歯周病ケアのイラスト">
            </picture>
            <p>歯周病ケア</p>
          </li>
          <li>
            <picture>
              <source media="(max-width: 800px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_implant_sp.png">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_implant.png" alt="インプラントのイラスト">
            </picture>
            <p>インプラント</p>
          </li>
          <li>
            <picture>
              <source media="(max-width: 800px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_care_sp.png">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon_care.png" alt="訪問診療のイラスト">
            </picture>
            <p>訪問診療</p>
          </li>
        </ul>
      </div>
    </section>

    <section id="consultation-hours">
      <div class="container">
        <h2>診療時間</h2>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/title_under.png" alt="タイトル下の装飾">
        <p>consultation hours</p>
        <div class="img-hour">
          <picture>
            <source media="(max-width: 800px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sp_hour.png">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pc_hour.png" alt="診療時間の画像">
          </picture>
        </div>
        <p>定休日：木曜・日曜</p>
      </div>
    </section>

    <section id="news">
      <div class="container">
        <div class="section-title">
          <h2>お知らせ</h2>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/title_under.png" alt="タイトル下の装飾">
          <p>news</p>
        </div>
        <ul class="js-fade">
          <?php
            $args = array (
              'post_type'      => 'news',
              'posts_per_page' => '3',
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
                        <p><?php echo $term->name; ?></p>
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
      </div>
    </section>

    <div class="image"></div>
  </main>
<?php get_footer(); ?>