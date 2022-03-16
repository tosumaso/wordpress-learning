  <!-- ナビゲーションのパーツファイル -->
  <!-- wp_body_open() : bodyタグが開いた直後にコードを追加できる関数 -->
  <?php wp_body_open(); ?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <!-- home_url('パス','scheme') : ブログのホームURLを返す。esc_url()でエスケープもしておく -->
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')) ;?>"><?php bloginfo('name');?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <!-- wp_nav_menu(設定array) : 外観:メニューで設定したメニューを表示する -->
      <!-- <?php wp_nav_menu()?> -->
      
      <?php
      // functions.phpで定義したグローバルナビゲーションの名前を取得
      $menu_name = 'global_nav';
      // 登録されているグローバルナビゲーションの場所を配列で取得
      $locations = get_nav_menu_locations();
      // グローバルナビゲーションオブジェクトを取得
      $menu = wp_get_nav_menu_object($locations[$menu_name]);
      // オブジェクト -> キー : オブジェクト内のキーに対応する値を取得できる
      // グローバルメニュー内の項目の情報を配列で受け取る
      $menu_items = wp_get_nav_menu_items($menu -> term_id);
      ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- foreach (コレクション as 変数) endforeach : コレクションを１つずつ取り出してまわす-->
          <?php foreach ($menu_items as $item) : ?>
            <li>
            <!-- グローバルメニューの情報を１つずつ取り出してその項目のurl,titleを出力する -->
            <!-- 関数でエスケープ処理をして表示。エスケープ内容によって関数を変更 -->
              <a class="nav-link" href="<?php echo esc_attr($item ->url); ?>"><?php echo esc_html($item -> title);?></a>
            </li>  
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>