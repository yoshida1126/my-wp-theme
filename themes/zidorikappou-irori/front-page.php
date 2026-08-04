<?php get_header(); ?>
  <main class="main">
    <section class="about">
      <div class="about-contents">
        <div class="about-text js-fade">
          <h2>最高の一品を味わう</h2>
          <div class="mark-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mark.png">
          </div>
          <p>
            厳選された比内地鶏をはじめ<br>
            旬の魚や季節の野菜を使った<br>
            最高の一品をお作りしています<br>
            隠れ家のような店内で<br>
            日本酒と料理をお楽しみください
          </p>
        </div>
        <div class="about-img js-fade">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about.jpg" alt="厨房の画像">
        </div>
      </div>
    </section>
      
    <section class="menu" id="menu">
      <h2>お品書き</h2>
      <?php
        $args = array (
          'post_type'      => 'menu',
          'meta_query'     => array(
            array(
              'key'     => 'menu-type',
              'value'   => 'メイン',
              'compare' => '=',
            ),
          ),
        );
        $news_query = new WP_Query($args);
        if($news_query->have_posts()):
        while($news_query->have_posts()):
        $news_query->the_post();
      ?>
        <div class="menu-container">
          <?php
            $image = get_field('menu-image');
            echo wp_get_attachment_image($image['ID'], 'full', false, array('class' => 'js-fade-left'));
          ?>
          <div class="menu-text">
            <div class="menu-detail">
              <p><?php the_field('menu-description'); ?></p>
              <p>
                <?php
                  $price = get_field('menu-price');
                  echo number_format($price).'yen~';
                ?>
              </p>
            </div>
            <div class="menu-name">
              <p class="name-jp"><?php the_title(); ?></p>
              <p class="name-en"><?php the_field('menu-name-en'); ?></p>
            </div>
          </div>
        </div>
      <?php
        endwhile;
        wp_reset_postdata();
        endif;
      ?>
      <div class="recommend">
        <div class="recommend-container">
          <h2>おすすめの一皿</h2>
          <table>
            <tbody>
              <?php
                $args = array (
                  'post_type'      => 'menu',
                  'meta_query'     => array(
                    array(
                      'key'     => 'menu-type',
                      'value'   => 'おすすめ',
                      'compare' => '=',
                    ),
                  ),
                );
                $news_query = new WP_Query($args);
                if($news_query->have_posts()):
                while($news_query->have_posts()):
                $news_query->the_post();
             ?>
                <tr>
                  <th><?php the_title(); ?></th>
                  <td>
                    <?php
                      $price = get_field('menu-price');
                      echo number_format($price).'yen';
                    ?>
                  </td>
                </tr>
              <?php
                endwhile;
                wp_reset_postdata();
                endif;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="news" id="news">
      <div class="news-container js-fade">
        <header class="header-news">
          <h2>
            お知らせ
          </h2>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mark.png">
          <p>NEWS</p>
        </header>
        <ul>
          <?php
            $irori_args = array(
              'post_type' => 'news',
              'posts_per_page' => 3,
            );
            $irori_news_query = new WP_Query($irori_args);
            if($irori_news_query->have_posts()):
            while($irori_news_query->have_posts()):
            $irori_news_query->the_post();
          ?>
            <?php get_template_part('template-parts/loop', 'news'); ?>
          <?php
            endwhile;
            wp_reset_postdata();
            endif;
          ?>
        </ul>
      </div>
    </section>

    <section id="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6483.500935083426!2d139.69319484317668!3d35.658519090378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b562ec4d62f%3A0x1bcc5680aa0a44e2!2z44CSMTUwLTAwNDMg5p2x5Lqs6YO95riL6LC35Yy66YGT546E5Z2C!5e0!3m2!1sja!2sjp!4v1710223549291!5m2!1sja!2sjp"
        width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </section>

    <section class="info" id="info">
      <div class="info-container">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/info.jpg" alt="店舗外観画像" class="js-fade">
        <header class="header-info">
          <h2>
            店舗案内
          </h2>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mark.png">
          <p>INFORMATION</p>
        </header>
        <div class="info-text">
          <h3>地鶏割烹 IRORI</h3>
          <p>〒150-0043 東京都渋谷区道玄坂X-XX-XX</p>
          <p>TEL/ 090-XXXX-XXXX</p>
          <p>MAIL/ info@irori.com</p>
          <p>営業時間/17:00〜24:00（L.O 23:30）</p>
          <p>定休日/毎週月曜日・年末年始</p>
          <?php
            $page = get_page_by_path('reservation');
            if($page):
          ?>
            <a href="<?php echo esc_url(get_permalink($page->ID)); ?>"><p>WEB予約はこちら</p></a>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>