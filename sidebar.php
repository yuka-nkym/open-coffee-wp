<aside class="news-page-aside">
  <div class="new-post side-box">
    <h3 class="side-box-title">最近の記事</h3>
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5,
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
    ?>

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

      <?php
      endwhile;
    else :
      ?>
      <p>記事はありません。</p>

    <?php
    endif;
    wp_reset_postdata();
    ?>
  </div><!-- /.new-post side-box -->

  <div class="post-category side-box">
    <h3 class="side-box-title">カテゴリ</h3>
    <ul class="post-category-nav">
      <?php
      $args = array(
        'child_of' => 1,
        'orderby' => 'term_order',
        'order' => 'ASC'
      );
      $categories = get_categories($args);
      ?>

      <?php foreach ($categories as $category) : ?>
        <li class="post-category-list">
          <a class="post-category-link" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div><!-- /.post-category side-box -->
</aside>