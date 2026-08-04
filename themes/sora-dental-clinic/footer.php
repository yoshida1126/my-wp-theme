    <footer>
      <div class="footer-contents">
        <div class="footer-contents-text">
          <div class="footer-logo">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="ロゴ">
          </div>
          <h2>そらデンタルクリニック</h2>
          <p class="address">〒144-0043 東京都大田区羽田X-X-X
            <br class="br-sp">
            羽田クリニックビル３F
          </p>
          <div class="access">
            <h3>アクセス</h3>
            <p>電車からお越しの方：JRより徒歩3分</p>
            <p>バスからお越しの方：バス停より徒歩3分</p>
            <p>車でお越しの方：契約駐車場があります</p>
          </div>
          <div class="reservation">
            <div class="footer-tel">
              <p>
                tel:<span>03-0000-0000</span>
              </p>
            </div>
            <?php
              $page = get_page_by_path('reservation');
              if($page):
            ?>
              <a href="<?php echo esc_url(get_permalink($page->ID)); ?>">
                <button>
                  WEB予約はこちら
                </button>
              </a>
            <?php endif; ?>
          </div>
          <div class="sns">
            <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/line_icon.png" alt="ラインのロゴ"></a>
            <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/insta_icon.png" alt="インスタグラムのロゴ"></a>
          </div>
        </div>
        <div class="footer-contents-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6492.449772145497!2d139.74163269315537!3d35.54814779052154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018613e8e5ff96d%3A0x816cdc730df3a3a5!2z44CSMTQ0LTAwNDM!5e0!3m2!1sja!2sjp!4v1712128618164!5m2!1sja!2sjp"></iframe>
          <a href="https://maps.app.goo.gl/Zr2AuwqmZcFdZ9Cx6">大きな地図で見る</a>
        </div>
      </div>
      <div class="footer-menu">
        <div class="footer-menu-flex">
          <div class="footer-menu-nav">
            <ul>
              <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>#feature">当院の特徴</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>#medical-menu">診療科目</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>#consultation-hours">診療時間</a></li>
              <li><a href="<?php echo esc_url(home_url()); ?>#news">お知らせ</a></li>
            </ul>
          </div>
          <p>©2024 Sora Dental Clinic</p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>