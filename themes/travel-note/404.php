<?php get_header(); ?>
  <div class="container">
    <main class="main">
      <div class="not-found">
        <h1>ページが見つかりません。</h1>
        <p>
          お探しのページは、移動もしくは削除された可能性があります。
          <br>
          <a href="<?php echo esc_url(home_url()); ?>">トップページ</a>よりお探しください。
        </p>
      </div>
    </main>
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>