<!DOCTYPE html>
<!-- language_attributes() : 設定のサイトの言語を読み込む -->
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>
<!-- body_class() : 表示されているページによってclassを自動で追加する -->
<body <?php body_class(); ?>>

  <!-- get_template_part('相対パス') : 汎用パーツファイルの読み込み -->
  <?php get_template_part('includes/header'); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!-- Page Header -->
      <!-- get_post_thumbnail_id() : 投稿に紐づいたサムネイルのidを表示 -->
      <!-- wp_get_attachment_image_src(imageId,size) : 投稿に紐づいた画像のidを指定して画像の情報を配列で取得 
    配列[0]: 画像のパス [1]: width [2]: height [3]: 表示可能かのboolean -->

      <!-- functions.phpで定義した関数を呼び出す -->
      <?php $img = get_eyecatch_with_default();?>

      <!-- 画像のパスを配列から１つずつ取り出して表示 -->
      <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?php the_title(); ?></h1>
                <span class="meta">Posted by
                  <?php the_author(); ?>
                  on <?php the_time(get_option('date_format')); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <!-- the_post_thumbnail(size,attr) : 投稿のサムネイル表示 -->
              <!-- array() : 配列 -->
              <?php the_post_thumbnail(array(400, 400), array('alt' => '写真が表示されません。')); ?>
              <!-- the_content() : 投稿の本文を出力 -->
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>

      <hr>

    <?php endwhile; ?>
  <?php endif; ?>
  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>