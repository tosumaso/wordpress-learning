<!DOCTYPE html>
<html lang="en">

<head>
<!-- パーツファイルでheaderをレンダリングしている(Bootstrap,フォント,css,wp_head) -->
<?php get_header(); ?>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
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
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        <?php else : ?>
          <p>記事が見つかりませんでした。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer>
<!-- パーツファイルでfooter情報をレンダリングしている(JS,Custom script,wp_footerの情報)-->
<?php get_footer(); ?>
</body>

</html>