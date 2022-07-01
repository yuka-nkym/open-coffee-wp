<header class="util-header-menu">
  <div class="util-header-title">
    <h1 class="section-title util-page-title">Menu<span class="section-title-inline">メニュー</span></h1>
  </div>
  <?php get_header(); ?>
</header>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="menu-wrap inner">
  <ul class="tab-items">
    <?php
    $genre_terms = get_terms('genre', ['parent' => 0]);
    foreach ($genre_terms as $genre_term) :
    ?>
      <?php
      $cat = get_queried_object();
      $cat_name = $cat->name;
      ?>
      <li class="tab-item-list">
        <a class="<?php if ($cat_name == esc_html($genre_term->name)) {
                    echo "is-active";
                  } ?> tab-item-btn" href="<?php echo esc_url(get_term_link($genre_term, 'genre')); ?>">
          <span><?php echo esc_html($genre_term->name); ?></span></a>
      </li>
    <?php
    endforeach;
    ?>
  </ul>

  <dl class="tab-content">
    <div class="tab-content-cards">
      <?php
      //記事数ぶんループ
      while (have_posts()) :
        the_post();
      ?>
        <div class="tab-content-card">
          <dd>
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/img_pasta1.jpg"" alt="">';
            }
            ?>
          </dd>
          <dt>
            <p class="tab-content-title"><?php the_title(); ?></p>
            <?php if (get_field('price')) : ?>
              <p class="tab-content-price"><?php the_field('price'); ?> yen</p>
            <?php endif; ?>
          </dt>
        </div>
      <?php endwhile; ?>
    </div><!-- tab-content-cards -->
  </dl>
  <!-- </div>tab-content-wrap -->
</div>

<?php get_footer(); ?>