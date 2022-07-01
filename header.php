<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <title>Open Cafe</title>
  <meta name="description" content="架空のカフェです。">
  <meta property="og:title" content="Open Cafe">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/">
  <meta property="og:image" content="https://example.com/image/img_mainvisual1.jpg">
  <meta property="og:site_name" content="Open Cafe">
  <meta property="og:description" content="">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="robots" content="noindex">

  <?php wp_head(); ?>
</head>

<body>
  <div id="js-drawer">
    <button id="js-toggle" class="header-burger" aria-label="menu">
      <span class="header-burger-inline"></span>
      <span class="header-burger-inline"></span>
      <span class="header-burger-inline"></span>
    </button>
    <div class="header-drawer-list">
      <div class="drawer__logo">
        <a class="drawer__logo--link" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?>"><img src="<?php echo get_template_directory_uri() ?>/image/logo_light.svg" alt="OpenCafe"></a>
      </div>
      <nav class="drawer-nav">
        <ul class="drawer-nav-list">
          <li class="header-drawer-item menu-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="header-drawer-link js-drawer-link">Top<span class="drawer-menu-inline menu-inline">トップ</span></a></li>
          <li class="header-drawer-item menu-item"><a href="<?php echo esc_url(home_url('/concept/')); ?>" class="header-drawer-link js-drawer-link">Concept<span class="drawer-menu-inline menu-inline">コンセプト</span></a></li>
          <li class="header-drawer-item menu-item"><a href="<?php echo get_post_type_archive_link('menu'); ?>" class="header-drawer-link js-drawer-link">Menu<span class="drawer-menu-inline menu-inline">メニュー</span></a></li>
          <li class="header-drawer-item menu-item"><a href="<?php echo esc_url(home_url('/news/')); ?>" class="header-drawer-link js-drawer-link">News<span class="drawer-menu-inline menu-inline">お知らせ</span></a></li>
          <li class="header-drawer-item menu-item"><a href="<?php echo get_post_type_archive_link('shop'); ?>" class="header-drawer-link js-drawer-link">Shop<span class="drawer-menu-inline menu-inline">店舗情報</span></a></li>
          <li class="header-drawer-item menu-item"><a href="<?php echo get_post_type_archive_link('products'); ?>" class="header-drawer-link js-drawer-link">Gift<span class="drawer-menu-inline menu-inline">贈り物</span></a></li>
          <li class="header-drawer-item menu-item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="header-drawer-link js-drawer-link">Contact<span class="drawer-menu-inline menu-inline">お問い合わせ</span></a></li>
        </ul>
      </nav>
      <div class="drawer-sns-list sns-list">
        <a href="#" class="twitter" rel="nofollow" target="_blank"><i class="fa-brands fa-twitter fa-fw fa-2x"></i></a>
        <a href="#" class="instagram" rel="nofollow" target="_blank"><i class="fa-brands fa-instagram fa-fw fa-2x"></i></a>
        <a href="#" class="youtube" rel="nofollow" target="_blank"><i class="fa-brands fa-youtube fa-fw fa-2x"></i></a>
      </div>
    </div>
    <div id="js-overlay" class="drawer-overlay"></div>
  </div>