# メモ
## wordpressの階層構造
個別投稿ページと固定ページのレイアウトが違う場合、 個別投稿ベージ: single.php, 固定ページ: page.php
個別投稿ページと固定ページのレイアウトが同じ場合、singular.php

## パーツファイル
パーツファイル: 他のファイルでも利用する記述を1つのファイルにまとめたもの。利用者側のファイルから呼びだす
header.php: header情報をパーツファイルにしたファイル。get_header();で呼び出せる
footer.php: footer情報をパーツファイルにしたファイル。get_footer();で呼び出せる
sidebar.php: sidebar情報をパーツファイルにしたファイル。get_sidebar();で呼び出せる

## functions.php
フックを記述する。wordpressの各ファイルが参照する設定ファイル。
関数を定義できる。
phpファイルにphpの記述しかしない場合、phpの閉じタグを省略できる。htmlのコメントを書く場合は省略できない。

## 配列
$変数 = []; or array(); 角かっこの方が新しい。
$連想配列: 添え字に文字を付けられる。$変数['文字']で出力できる。

## 投稿、固定ページのループ
have_posts()で投稿があるか確認、その後whileでhave_posts()からthe_post()で投稿を１つずつ取り出して
titleやcontentを表示する

## パーマリンク(リソースファイルのURL)
固定ページのパーマリンク : ページを公開してから固定ページの編集: 設定: パーマリンク: URLスラッグで変更
固定ページの階層パーマリンク : 固定ページの編集:ページ属性で親ページを指定、親スラッグ/子スラッグの形でURLを登録できる
投稿ページのパーマリンク : 設定:パーマリンク設定でurlに日付を入れる。
おすすめの投稿ページパーマリンク設定 : /year/month/post_id ; 日付と投稿idをつけることで他のリソースと被らず簡単に識別できるため。
パーマリンクの設定の保存をするとブログのディレクトリに.htaccessファイルが作成されパーマリンクの変更を保存する
"."から始まるためcmd + shift + .で隠しファイルを表示させて確認。消した場合はもう一度パーマリンクの変更を保存する

## お問い合わせフォーム作成プラグイン(MW WP Form)
localだとメールサーバーの確認ができない
テキストで作成する場合、textareaタグやbuttonタグをマウス操作で作成できる
作成したらフォーム識別子内のショートコードをコピーして固定ページに貼り付ける
バリデーションルールでショートコードのname属性を指定してバリデーションを作成できる

## カテゴリーとタグ
カテゴリー: 親子関係可。カテゴリーを登録しなくても未分類(unauthorized)カテゴリーに分類される。
タグ: 親子関係不可。タグをつけないことも可能。
設定:パーマリンクでカテゴリベースのurlを変更できる。

## wp_title(separator,出力フラグ,separatotlocation)タグ
ページの種類によって出力内容が変わる
固定ページ、投稿: 記事タイトル、カテゴリーアーカイブ: カテゴリー名、タグアーカイブ: タグ名、日付アーカイブ: 日付、トップページ: なし

## テーマユニットテスト
テーマ作成時、レイアウトのズレがないか確認するためにいろんなテストファイルを読み込んで正しく表示されるかテストする
ツール:インポートからwordpressのインポーターをインストール、xmlのテストファイルをアップロード

## メニューの作成
方法１: wp_nav_menu(設定array)で出力
方法２: wp_get_nav_menu_items(menuのid)でメニューの項目を配列で取得して出力(難)

## エスケープ処理
dbのデータを直接出力するときは出力するものによって関数を使い分けてエスケープ処理をする。

# 基本操作
## ブロックエディタ
グループ: 複数のブロックをグループにすることで１つのブロックとして扱える
再利用ブロック: ブロック、グループをコピーして他の場所に貼り付けられる

## seo simple pack(簡単にSEOを設定できるプラグイン)
インデックス : ブラウザ検索時に追跡させるか
ブラウザ検索時にどう表示されるか、カテゴリやタグ、メディア、ユーザーごとにアーカイブページを用意するか、インデックスさせるかどうかを編集可能

<!-- # [Start Bootstrap - Clean Blog](https://startbootstrap.com/theme/clean-blog/)

[Clean Blog](https://startbootstrap.com/theme/clean-blog/) is a stylish, responsive blog theme for [Bootstrap](https://getbootstrap.com/) created by [Start Bootstrap](https://startbootstrap.com/). This theme features a blog homepage, about page, contact page, and an example post page along with a working PHP contact form.

## Preview

[![Clean Blog Preview](https://assets.startbootstrap.com/img/screenshots/themes/clean-blog.png)](https://startbootstrap.github.io/startbootstrap-clean-blog/)

**[View Live Preview](https://startbootstrap.github.io/startbootstrap-clean-blog/)**

## Status

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/StartBootstrap/startbootstrap-clean-blog/master/LICENSE)
[![npm version](https://img.shields.io/npm/v/startbootstrap-clean-blog.svg)](https://www.npmjs.com/package/startbootstrap-clean-blog)
[![Build Status](https://travis-ci.org/StartBootstrap/startbootstrap-clean-blog.svg?branch=master)](https://travis-ci.org/StartBootstrap/startbootstrap-clean-blog)
[![dependencies Status](https://david-dm.org/StartBootstrap/startbootstrap-clean-blog/status.svg)](https://david-dm.org/StartBootstrap/startbootstrap-clean-blog)
[![devDependencies Status](https://david-dm.org/StartBootstrap/startbootstrap-clean-blog/dev-status.svg)](https://david-dm.org/StartBootstrap/startbootstrap-clean-blog?type=dev)

## Download and Installation

To begin using this template, choose one of the following options to get started:

* [Download the latest release on Start Bootstrap](https://startbootstrap.com/theme/clean-blog/)
* Install via npm: `npm i startbootstrap-clean-blog`
* Clone the repo: `git clone https://github.com/StartBootstrap/startbootstrap-clean-blog.git`
* [Fork, Clone, or Download on GitHub](https://github.com/StartBootstrap/startbootstrap-clean-blog)

## Usage

### Basic Usage

After downloading, simply edit the HTML and CSS files included with the template in your favorite text editor to make changes. These are the only files you need to worry about, you can ignore everything else! To preview the changes you make to the code, you can open the `index.html` file in your web browser.

### Advanced Usage

After installation, run `npm install` and then run `npm start` which will open up a preview of the template in your default browser, watch for changes to core template files, and live reload the browser when changes are saved. You can view the `gulpfile.js` to see which tasks are included with the dev environment.

#### Gulp Tasks

* `gulp` the default task that builds everything
* `gulp watch` browserSync opens the project in your default browser and live reloads when changes are made
* `gulp css` compiles SCSS files into CSS and minifies the compiled CSS
* `gulp js` minifies the themes JS file
* `gulp vendor` copies dependencies from node_modules to the vendor directory

You must have npm installed globally in order to use this build environment.

## Bugs and Issues

Have a bug or an issue with this template? [Open a new issue](https://github.com/StartBootstrap/startbootstrap-clean-blog/issues) here on GitHub or leave a comment on the [template overview page at Start Bootstrap](https://startbootstrap.com/theme/clean-blog/).

## About

Start Bootstrap is an open source library of free Bootstrap templates and themes. All of the free templates and themes on Start Bootstrap are released under the MIT license, which means you can use them for any purpose, even for commercial projects.

* <https://startbootstrap.com>
* <https://twitter.com/SBootstrap>

Start Bootstrap was created by and is maintained by **[David Miller](https://davidmiller.io/)**, Owner of [Blackrock Digital](https://startbootstrap.io/).

* <https://davidmiller.io>
* <https://twitter.com/davidmillerhere>
* <https://github.com/davidtmiller>

Start Bootstrap is based on the [Bootstrap](https://getbootstrap.com/) framework created by [Mark Otto](https://twitter.com/mdo) and [Jacob Thorton](https://twitter.com/fat).

## Copyright and License

Copyright 2013-2020 Start Bootstrap LLC. Code released under the [MIT](https://github.com/StartBootstrap/startbootstrap-clean-blog/blob/gh-pages/LICENSE) license. -->
