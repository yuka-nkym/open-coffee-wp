<div class="top-wrapper">
  <header class="header hidden-sp hidden-tab">
    <div class="header__inner">
      <h1 class="header__logo">
        <a class="header__logo--link" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/image/logo_dark.svg" alt="OpenCafe"></a>
      </h1>
      <nav class="header-nav">
        <ul class="header-nav-list">
          <li class="header-nav-item menu-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="header-nav-link">Top<span class="header-nav-inline menu-inline">トップ</span></a></li>
          <li class="header-nav-item menu-item"><a href="<?php echo esc_url(home_url('/concept/')); ?>" class="header-nav-link">Concept<span class="header-nav-inline menu-inline">コンセプト</span></a></li>
          <li class="header-nav-item menu-item"><a href="<?php echo get_post_type_archive_link('menu'); ?>" class="header-nav-link">Menu<span class="header-nav-inline menu-inline">メニュー</span></a></li>
          <li class="header-nav-item menu-item"><a href="<?php echo esc_url(home_url('/news/')); ?>" class="header-nav-link">News<span class="header-nav-inline menu-inline">お知らせ</span></a></li>
          <li class="header-nav-item menu-item"><a href="<?php echo get_post_type_archive_link('shop'); ?>" class="header-nav-link">Shop<span class="header-nav-inline menu-inline">店舗情報</span></a></li>
          <li class="header-nav-item menu-item"><a href="<?php echo get_post_type_archive_link('products'); ?>" class="header-nav-link">Gift<span class="header-nav-inline menu-inline">ギフト・贈り物</span></a></li>
          <li class="header-nav-item menu-item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="header-nav-link">Contact<span class="header-nav-inline menu-inline">お問い合わせ</span></a></li>
          <div class="header-sns-list sns-list">
            <a href="#" class="twitter" rel="nofollow" target="_blank"><i class="fa-brands fa-twitter fa-fw"></i></a>
            <a href="#" class="instagram" rel="nofollow" target="_blank"><i class="fa-brands fa-instagram fa-fw"></i></a>
            <a href="#" class="youtube" rel="nofollow" target="_blank"><i class="fa-brands fa-youtube fa-fw"></i></a>
          </div>
        </ul>
      </nav>
    </div>
  </header>