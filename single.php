<header class="util-header-news">
  <div class="util-header-title">
    <h1 class="section-title util-page-title">News<span class="section-title-inline">お知らせ</span></h1>
  </div>
  <?php get_header(); ?>
</header>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="inner-small">
  <main class="news-details-main">
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
        <article class="news-cards news-posts-details">
          <div class="news-card">
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
              <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?>
                <span class="time-inline">｜</span><?php my_the_post_category(false); ?>
              </time>
            </div>

            <?php
            the_content(); ?>
            <?php
            wp_link_pages(
              array(
                'before' => '<nav class="entry-links">',
                'after' => '</nav>',
                'link_before' => '',
                'link_after' => '',
                'next_or_number' => 'number',
                'separator' => '',
              )
            );
            ?>

        </article>

        <?php get_template_part('template-parts/pagination-ja'); ?>

    <?php
      endwhile;
    endif;
    ?>
  </main>

  <aside class="news-details-aside">
    <p class="news-details-aside-title">関連記事</p>
    <?php if (has_category()) {
      $post_cats = get_the_category();
      $cat_ids = array();
      foreach ($post_cats as $cat) {
        $cat_ids[] = $cat->term_id;
      }
    }

    $myposts = get_posts(array(
      'post_type' => 'post',
      'posts_per_page' => '6',
      'post__not_in' => array($post->ID),
      'category__in' => $cat_ids,
      'orderby' => 'rand'
    ));
    if ($myposts) : ?>
      <div class="news-details-aside-inner">
        <?php foreach ($myposts as $post) : setup_postdata($post); ?>
          <div class="news-card-wrapper">
            <?php
            $category = get_the_category();
            if ($category[0]) {
              echo '<p class="news-card-category news-category"><span class="news-ribbon-inline"></span>' . $category[0]->cat_name . '</p>';
            }
            ?>
            <a href="<?php the_permalink(); ?>" class="news-card">
              <figure class="news-card-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('medium');
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/img_news1.jpg" alt="">';
                }
                ?>
              </figure>
              <div class="news-card-body">
                <p class="news-card-title">
                  <?php
                  if (mb_strlen($post->post_title) > 20) {
                    $title = mb_substr($post->post_title, 0, 20);
                    echo $title . '...';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                </p>
                <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
              </div>
            </a>
          </div>
        <?php endforeach;
        wp_reset_postdata(); ?>
      <?php endif; ?>
      </div>
  </aside>
</div>
<!-- /.inner-small -->

<?php get_footer(); ?>