<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="癒しサロンForestGreenへようこそ。ForestGreenは心と体の総合癒しサロンです。">
    <meta name="keywords" content="Forest Green,癒し,ヒーリング,リラクゼーション,整体,マッサージ,西新宿,大久保,カードリーディング,フラワーエッセンス">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php the_title();?> | <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.inview.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jq.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" media="screen and (max-width: 600px)">
    <link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<?php wp_head(); ?>
</head>
<body id="top">
    <header>
        <div class="mainimg">
            <div class="intro_a">
              <h1><?php bloginfo('title'); ?></h1>
              <p>Welcome to <?php bloginfo('title'); ?>!<br>
                 We help Relaxing for your body and mind.<br><br>
                 TEL: 080-1234-5678<br><br>
                <a class="buttn" href="<?php echo get_permalink( get_page_by_path('contact')->ID); ?>"><span>ご予約・お問合せ</span></a>
              </p>
            </div>
        </div>
        <div id="globalNavi">
<!-- <nav> -->
   <?php //wp_nav_menu( array( 'theme_location' => 'mainnavi' ) ); ?>
<!-- </nav> -->

		 <?php
			 wp_nav_menu(array(
				 'menu' => '',
				 'menu_class' => 'navi'
			 ));
		 ?>
        </div>