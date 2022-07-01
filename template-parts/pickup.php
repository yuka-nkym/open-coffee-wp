<?php
$pickup_posts = get_posts(array(
  'post_type' => 'post',
  'posts_per_page' => '1',
  'tag' => 'pickup',
  'orderby' => 'DESC',
));
?>
<?php foreach ($pickup_posts as $post) : setup_postdata($post); ?>
  <a href="<?php echo esc_url(get_permalink()); ?>" class="pickup-news-link">
    <p class="pickup-news-category news-category"><span class="pickup-ribbon-inline news-ribbon-inline"></span><?php my_the_post_category(false); ?></p>
    <div class="pickup-news-card">
      <div class="pickup-news-img">
        <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail('large');
        } else {
          echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/mv-1.jpg"" alt="">';
        }
        ?>
      </div>
      <div class="pickup-news-content">
        <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
        <div class="pickup-news-title">
          <?php
          if (mb_strlen($post->post_title) > 40) {
            $title = mb_substr($post->post_title, 0, 40);
            echo $title . '...';
          } else {
            echo $post->post_title;
          }
          ?>
        </div>
      </div>
    </div>
  </a>
<?php endforeach;
wp_reset_postdata(); ?>