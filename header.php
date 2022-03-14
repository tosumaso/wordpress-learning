<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title><?php the_title(); ?></title>

<!-- Bootstrap core CSS -->
<!-- echo get_template_directory_uri(): テンプレートファイルが保存されているディレクトリを取得。echoで出力して動的にパスを作成。-->
<link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="<?php echo get_template_directory_uri(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- '//' : //の前に来るプロトコルがなにかを指定しない場合。http,httpsでも対応可能 -->
<link href='//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="<?php echo get_template_directory_uri(); ?>/css/clean-blog.min.css" rel="stylesheet">

<!-- 必須,</head>の終了直前に記述 -->
<?php wp_head(); ?>