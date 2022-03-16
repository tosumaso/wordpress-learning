<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<!-- パーツファイルでheaderをレンダリングしている(Bootstrap,フォント,css,wp_head) -->
<?php get_header(); ?>
</head>

<body>

<!-- get_template_part('相対パス(拡張子ははずす)') : 汎用パーツファイルの読み込み -->
<?php get_template_part('includes/header'); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <!-- is_category() : ページがカテゴリーアーカイブならtrue,違うならfalse -->
            <?php if (is_category()) : ?>
            <h1>Category</h1>
            <!-- is_author() : 投稿者アーカイブならtrue,違うならfalse -->
            <?php elseif(is_author()): ?>
              <h1>Author</h1>
            <?php elseif(is_date()): ?>
              <h1>Date</h1>
            <?php else: ?>
              <h1>Tag</h1>
            <?php endif; ?>
            <span class="subheading"><?php the_title(); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!-- have_posts() : 投稿があるか-->
        <!-- if (true or false 条件式): else: endif;-->
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="post-preview">
              <!-- the_permalink() : パーマリンク(投稿に紐づいたURL)を表示する -->
              <a href="<?php the_permalink(); ?>">
                <h2 class="post-title">
                  <!-- $variable = : 変数を定義できる-->
                  <!-- the_post(); : 一番新しい投稿を取得する。２回目は二番目に新しい記事を取得。-->
                  <?php the_title(); ?>
                </h2>
                <h3 class="post-subtitle">
                  <!-- the_excerpt() : 抜粋(投稿の抜粋欄の文章を表示する。抜粋欄が空なら投稿のコンテンツの最初の数百文字を表示する) -->
                  <?php the_excerpt(); ?>
                </h3>
              </a>
              <p class="post-meta">Posted by
                <!-- the:author() 投稿者の表示 -->
                <?php the_author(); ?>
                <!-- the_date() : 記事の投稿日を出力する。(同じ日に複数投稿された場合、最初の記事のみ日付が出力される)-->
                <!-- the_time(dateformat) : 引数の日付フォーマットで日付を表示する。(同じ日の複数の投稿に対応できる) -->
                <!-- the_time(get_option('date_format')) : wordpressの一般設定の形式を使い日付を表示する -->
                <?php the_time(get_option('date_format')); ?>
              </p>
            </div>
            <hr>
          <?php endwhile; ?>

          <!-- Pager -->
          <div class="clearfix">
          <?php
            $link = get_previous_posts_link('&larr; 新しい記事へ;');
            if ($link) {
              $link = str_replace('<a', '<a class="btn btn-primary float-left"', $link);
              echo $link;
            }
            ?>

            <?php
            $link = get_next_posts_link('古い記事へ &rarr;');
            if ($link) {
              $link = str_replace('<a', '<a class="btn btn-primary float-right"', $link);
              echo $link;
            }
            ?>
          </div>
        <?php else : ?>
          <p>記事が見つかりませんでした。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <hr>

<?php get_template_part('includes/footer'); ?>

<!-- パーツファイルでfooter情報をレンダリングしている(JS,Custom script,wp_footerの情報)-->
<?php get_footer(); ?>
</body>

</html>