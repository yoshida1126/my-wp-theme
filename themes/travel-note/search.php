<?php get_header(); ?>
<div class="container">
  <main class="main">
    <h1 class="heading-jp">
        検索結果
    </h1>
    <p class="search-word">「<?php the_search_query(); ?>」の検索結果</p>
    <div class="contents grid-3">
      <?php
        if(have_posts()):
        while(have_posts()):
        the_post();
      ?>
        <?php get_template_part('template-parts/loop', 'post'); ?>
      <?php endwhile; ?>
      <? else: ?>
        <p class="search-no-result">検索キーワードに一致するものは見つかりませんでした。<br>他のキーワードで再度お試しください。</p>
      <?php endif; ?>
    </div>
    <?php get_template_part('template-parts/parts', 'pagination'); ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>