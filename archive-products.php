<header class="util-header-gift">
  <div class="util-header-title">
    <h1 class="section-title util-page-title">Gift<span class="section-title-inline">ギフト・贈り物</span></h1>
  </div>
  <?php get_header(); ?>
</header>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="gift">
  <div class="inner">
    <div class="gift-content">
      <?php if (have_posts()) : while (have_posts()) : the_post();
          $counter++; ?>
          <?php if ($counter == 1) : ?>
            <div class="gift-top-card">
              <figure class="gift-top-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/img_item1.jpg"" alt="">';
                }
                ?>
              </figure>
              <div class="gift-top-body">
                <p class="gift-top-title"><?php the_title(); ?></p>
                <?php if (get_field('price')) : ?>
                  <p class="gift-top-price"><?php the_field('price'); ?> yen</p>
                <?php endif; ?>
                <div class="gift-btn-link-box"><a href="#" class="gift-btn-link">ショップで確認する</a></div>
              </div>
            </div>

            <div class="gift-cards">
            <?php elseif ($counter <= 5) : ?>
              <div class="gift-card">
                <figure class="gift-card-img">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail();
                  } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/img_item2.jpg"" alt="">';
                  }
                  ?>
                </figure>
                <div class="gift-card-body">
                  <p class="gift-card-title"><?php the_title(); ?></p>
                  <?php if (get_field('price')) : ?>
                    <p class="gift-top-price"><?php the_field('price'); ?> yen</p>
                  <?php endif; ?>
                  <div class="gift-btn-link-box"><a href="#" class="gift-btn-link">ショップで確認する</a></div>
                </div>
              </div>
            <?php endif; ?>
        <?php endwhile;
      endif; ?>
            </div><!-- gift-cards -->
    </div><!-- gift-content -->


    <div class="gift-cards-bottom">
      <?php
      $newslist = get_posts(array(
        'post_type' => 'products',
        'posts_per_page' => 12,
        'offset' => 5
      ));
      foreach ($newslist as $post) :
        setup_postdata($post);
      ?>

        <div class="gift-card">
          <figure class="gift-card-img">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/img_item6.jpg"" alt="">';
            }
            ?>
          </figure>
          <div class="gift-card-body">
            <p class="gift-card-title"><?php the_title(); ?></p>
            <?php if (get_field('price')) : ?>
              <p class="gift-top-price"><?php the_field('price'); ?> yen</p>
            <?php endif; ?>
            <div class="gift-btn-link-box"><a href="#" class="gift-btn-link">ショップで確認する</a></div>
          </div>
        </div>
      <?php
      endforeach;
      wp_reset_postdata();
      ?>

    </div> <!-- /.gift-cards-bottom -->
  </div><!-- inner -->
</section>
<!-- /#gift -->

<div class="gift-wrapping">
  <div class="gift-wrapping-inner inner">
    <div class="gift-message">
      <p class="gift-message-title">ラッピングは無料でお付けいたします。<br class="hidden-tab hidden-sp">お気軽にご相談ください。</p>
      <p class="gift-message-text">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
    </div>
    <figure class="gift-wrapping-img"><img src="<?php echo get_template_directory_uri() ?>/image/img_wrapping.jpg" alt=""></figure>
  </div>
</div>
<!-- /.gift-wrapping-->

<?php get_footer(); ?>