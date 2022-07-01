<header class="util-header-news">
  <div class="util-header-title">
    <h1 class="section-title util-page-title">News<span class="section-title-inline">お知らせ</span></h1>
  </div>
  <?php get_header(); ?>
</header>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="inner">
  <div class="news-page-wrapper">
    <main class="news-page-main">
      <p><?php the_archive_description(); ?></p>

      <?php
      if (have_posts()) :
      ?>

        <article class="news-cards news-posts">
          <?php
          while (have_posts()) :
            the_post();
          ?>

            <div class="news-card-wrapper">
              <p class="news-top-category news-category"><span class="news-ribbon-inline"></span><?php my_the_post_category(false); ?></p>
              <a href="<?php the_permalink(); ?>" class="news-card">
                <figure class="news-card-img">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                  } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/img_news1.jpg"" alt="">';
                  }
                  ?>
                </figure>
                <div class="news-card-body">
                  <p class="news-card-title"><?php the_title(); ?></p>
                  <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        </article>
      <?php endif; ?>

      <?php get_template_part('template-parts/pagination'); ?>
    </main>

    <?php get_sidebar($name); ?>

  </div><!-- inner -->
</div><!-- /.news-wrapper -->

<?php get_footer(); ?>