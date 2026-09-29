<?php get_header(); ?>
  <main class="main">
    <div class="not-found">
      <h1>ページが見つかりません。</h1>
      <p>
        お探しのページは、移動もしくは削除された可能性があります。
        <br>
        <a href="<?php echo esc_url(home_url()); ?>">トップページ</a>よりお探しください。
      </p>
    </div>

    <section class="section section-contact" id="contact">
      <?php get_template_part('template-parts/contact'); ?>
    </section>
  </main>
<?php get_footer(); ?>