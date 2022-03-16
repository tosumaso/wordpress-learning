
<?php
/* functions.php : wordpressの設定ファイル
テーマにサムネイル編集機能を追加
phpの記述しかない場合はphpの閉じタグを省略できる。 */
add_action('init', function () {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');

  // テーマの外観に'メニュー'の項目を追加(テーマに’メニュー’項目がない場合)
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション'
  ]);
});

# 関数を定義できる

#アイキャッチ画像がなければ標準画像を表示する。
function get_eyecatch_with_default(){

  # 投稿にサムネイルがあるならそのサムネイルを表示
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  # var_dump(変数) : 変数の値を出力する
  # var_dump($image);
  # 投稿にサムネイルがないならデフォルトのサムネイルを表示
  else :
    # 現在のディレクトリとデフォルトの画像のパスを結合。'.'で文字列結合。配列で出力するため配列にして変数に格納
    $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
  endif;

  return $img;
}
