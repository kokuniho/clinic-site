<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>渡邊脳神経外科クリニック</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="robots" content="noindex">
  <!-- ogp -->
  <meta property="og:title" content="渡邊脳神経外科クリニック" />
  <meta property="og:type" content="ホームページ" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="WEBページ" />
  <meta property="og:description" content="渡邊脳神経外科クリニックのホームページです。説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明説明。" />
  <!-- ファビコン -->
  <link rel="shortcut icon" href="/image/favicon.ico" type="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
  <!-- JavaScript -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
  <script defer src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
  <?php wp_head(); ?>
</head>
<body>
<header class="header header-top">
  <div class="header__wrap">
    <div class="header__logo">
      <a href="<?php echo home_url(); ?>/">
        <img src="<?php echo get_template_directory_uri();?>/img/common/header.logo.svg" alt="ヘッダーロゴ">
      </a>
    </div>

    <button class="hamburger-menu js-hamburger">
      <span class="hamburger-menu__bar"></span>
      <span class="hamburger-menu__bar"></span>
      <span class="hamburger-menu__bar"></span>
    </button>

    <?php
  $args = array(
    'menu'            => 'header-nav',
    'container'       => 'nav',
    'container_class' => 'header__nav header-nav',
  );
  wp_nav_menu( $args );
  ?>
    <div class="circle-bg"></div>
  </div>

</header>