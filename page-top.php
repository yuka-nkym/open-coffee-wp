<?php get_header(); ?>
<?php get_template_part('template-parts/header-top'); ?>

<div class="swiper-wrap">
  <div class="swiper">
    <div class="swiper__logo hidden-pc hidden-tab">
      <a class="swiper__logo--link" href="#"><img src="<?php echo get_template_directory_uri() ?>/image/logo_light.svg" alt="OpenCafe"></a>
    </div>
    <p class="swiper-text">パスタとコーヒーが<br class="hidden-pc">とってもおいしい、<br>ほっと落ち着くのんびり空間。 </p>

    <?php get_template_part('template-parts/pickup'); ?>

    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-img">
          <img src="<?php echo get_template_directory_uri() ?>/image/img_mainvisual1.jpg" class="hidden-sp" alt="hoge">
          <img src="<?php echo get_template_directory_uri() ?>/image-sp/img_mainvisual1_sp.jpg" class="hidden-pc hidden-tab" alt="hoge">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img">
          <img src="<?php echo get_template_directory_uri() ?>/image/img_mainvisual2.jpg" class="hidden-sp" alt="hoge">
          <img src="<?php echo get_template_directory_uri() ?>/image-sp/img_mainvisual2_sp.jpg" class="hidden-pc hidden-tab" alt="hoge">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-img">
          <img src="<?php echo get_template_directory_uri() ?>/image/img_mainvisual3.jpg" class="hidden-sp" alt="hoge">
          <img src="<?php echo get_template_directory_uri() ?>/image-sp/img_mainvisual3_sp.jpg" class="hidden-pc hidden-tab" alt="hoge">
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
</div>

<section id="concept" class="concept">
  <div class="concept-wrapper">
    <div class="concept-inner">
      <h2 class="concept-title section-title">Concept<span class="section-title-inline">当店のこだわり</span></h2>
      <p class="concept-message util-concept-title">最高のコーヒーと、<br>時の流れを味わうことができる<br>手作りカフェ</p>
      <p class="concept-text util-concept-text">ダミー_国内外から賞賛を<br>受けた選りすぐりのデザイナーが集結し、
        ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、
        あらゆる空間が誕生。<br><br>
        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、
        ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
      <div class="concept-btn-link-box btn-link-box"><a href="<?php echo esc_url(home_url('/concept/')); ?>" class="concept-btn-link btn-link">詳しくはこちら</a></div>
    </div>
    <div class="concept-img"><img src="<?php echo get_template_directory_uri() ?>/image/img_concept.jpg" alt="concept"></div>
  </div>
</section>
<!-- /#concept.concept -->

<section id="lunch" class="lunch">
  <div class="lunch-inner">
    <h2 class="section-title">SPECIAL LUNCH SET<span class="section-title-inline hidden-pc hidden-tab">今月のスペシャルランチセット</span></h2>
    <div class="lunch-content">
      <div class="lunch-cards">
        <div class="lunch-card">
          <figure class="lunch-card-img">
            <?php if (get_field('lunch_1')['lunch1-image']) : ?>
              <img src="<?php echo $group_field = get_field('lunch_1')['lunch1-image']; ?>" alt="hoge">
            <?php endif; ?>
          </figure>
          <div class="lunch-card-text">
            <p class="lunch-card-number">A</p>
            <?php if (get_field('lunch_1')['lunch1-title']) : ?>
              <p class="lunch-card-title"><?php echo $group_field = get_field('lunch_1')['lunch1-title']; ?></p>
            <?php endif; ?>
          </div>
        </div>
        <div class="lunch-card">
          <figure class="lunch-card-img">
            <?php if (get_field('lunch_2')['lunch2-image']) : ?>
              <img src="<?php echo $group_field = get_field('lunch_2')['lunch2-image']; ?>" alt="hoge">
            <?php endif; ?>
          </figure>
          <div class="lunch-card-text">
            <p class="lunch-card-number">B</p>
            <?php if (get_field('lunch_2')['lunch2-title']) : ?>
              <p class="lunch-card-title"><?php echo $group_field = get_field('lunch_2')['lunch2-title']; ?></p>
            <?php endif; ?>
          </div>
        </div>
        <div class="lunch-card">
          <figure class="lunch-card-img">
            <?php if (get_field('lunch_3')['lunch3-image']) : ?>
              <img src="<?php echo $group_field = get_field('lunch_3')['lunch3-image']; ?>" alt="hoge">
            <?php endif; ?>
          </figure>
          <div class="lunch-card-text">
            <p class="lunch-card-number">C</p>
            <?php if (get_field('lunch_3')['lunch3-title']) : ?>
              <p class="lunch-card-title"><?php echo $group_field = get_field('lunch_3')['lunch3-title']; ?></p>
            <?php endif; ?>
          </div>
        </div>
        <div class="lunch-card">
          <figure class="lunch-card-img">
            <?php if (get_field('lunch_4')['lunch4-image']) : ?>
              <img src="<?php echo $group_field = get_field('lunch_4')['lunch4-image']; ?>" alt="hoge">
            <?php endif; ?>
          </figure>
          <div class="lunch-card-text">
            <p class="lunch-card-number">D</p>
            <?php if (get_field('lunch_4')['lunch4-title']) : ?>
              <p class="lunch-card-title"><?php echo $group_field = get_field('lunch_4')['lunch4-title']; ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="lunch-price">
        <figure class="lunch-price-img"><img src="<?php echo get_template_directory_uri() ?>/image/img_lunch-detail.png" alt="hoge"></figure>
        <div class="lunch-price-text">
          <p class="lunch-price-title">スペシャルランチセット<br>【選べる3品】</p>
          <p class="lunch-price-yen">1,280 yen</p>
          <p class="lunch-price-time">(11:00 AM〜14:00 PMまで)</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /#lunch.lunch -->

<section id="grand-menu" class="grand-menu">
  <div class="grand-menu-inner inner">
    <h2 class="section-title">Grand Menu<span class="section-title-inline">グランドメニュー</span></h2>
    <div class="grand-menu-wrapper">
      <p class="grand-menu-category">パスタ</p>
      <div class="grand-menu-cards">
        <?php
        global $query_string;
        query_posts(
          array(
            'post_type' => array('menu'),
            'tax_query' => array(
              array(
                'taxonomy' => 'genre',
                'field' => 'slug',
                'terms' => 'pasta',
                'operator'  => 'IN'
              )
            ),
            'showposts' => 3,
            'posts_per_page' => 3,
            'paged' => get_query_var('paged')
          )
        );
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>

            <div class="grand-menu-card">
              <figure class="grand-menu-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/img_pasta1.jpg"" alt="">';
                }
                ?>
              </figure>
              <p class="grand-menu-text"><?php the_title(); ?></p>
              <?php if (get_field('price')) : ?>
                <p class="grand-menu-price"><?php the_field('price'); ?> yen</p>
              <?php endif; ?>
            </div>
        <?php
          }
        } else {
        }
        wp_reset_query();
        ?>
      </div>

      <p class="grand-menu-category">サラダ</p>
      <div class="grand-menu-cards">
        <?php
        global $query_string;
        query_posts(
          array(
            'post_type' => array('menu'),
            'tax_query' => array(
              array(
                'taxonomy' => 'genre',
                'field' => 'slug',
                'terms' => 'salad',
                'operator'  => 'IN'
              )
            ),
            'showposts' => 3,
            'posts_per_page' => 3,
            'paged' => get_query_var('paged')
          )
        );
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>

            <div class="grand-menu-card">
              <figure class="grand-menu-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/img_salad1.jpg"" alt="">';
                }
                ?>
              </figure>
              <p class="grand-menu-text"><?php the_title(); ?></p>
              <?php if (get_field('price')) : ?>
                <p class="grand-menu-price"><?php the_field('price'); ?> yen</p>
              <?php endif; ?>
            </div>
        <?php
          }
        } else {
        }
        wp_reset_query();
        ?>
      </div>

      <p class="grand-menu-category">パン & スイーツ</p>
      <div class="grand-menu-cards">
        <?php
        global $query_string;
        query_posts(
          array(
            'post_type' => array('menu'),
            'tax_query' => array(
              array(
                'taxonomy' => 'genre',
                'field' => 'slug',
                'terms' => 'breadsweets',
                'operator'  => 'IN'
              )
            ),
            'showposts' => 6,
            'posts_per_page' => 6,
            'paged' => get_query_var('paged')
          )
        );
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>

            <div class="grand-menu-card">
              <figure class="grand-menu-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else {
                  echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/img_salad1.jpg"" alt="">';
                }
                ?>
              </figure>
              <p class="grand-menu-text"><?php the_title(); ?></p>
              <?php if (get_field('price')) : ?>
                <p class="grand-menu-price"><?php the_field('price'); ?> yen</p>
              <?php endif; ?>
            </div>
        <?php
          }
        } else {
        }
        wp_reset_query();
        ?>
      </div>

      <div class="grand-menu-drink">
        <p class="grand-menu-category">ドリンク</p>
        <div class="grand-menu-drink-menus">
          <div class="grand-menu-card">
            <figure class="grand-menu-img hidden-sp hidden-tab"><img src="<?php echo get_template_directory_uri() ?>/image/img_drink.jpg" alt="hoge"></figure>
          </div>
          <ul class="drink-list">
            <li class="drink-list-title">コーヒー</li>
            <?php
            global $query_string;
            query_posts(
              array(
                'post_type' => array('menu'),
                'tax_query' => array(
                  array(
                    'taxonomy' => 'genre',
                    'field' => 'slug',
                    'terms' => 'coffee',
                    'operator'  => 'IN'
                  )
                ),
                'showposts' => 6,
                'posts_per_page' => 6,
                'paged' => get_query_var('paged')
              )
            );
            if (have_posts()) {
              while (have_posts()) {
                the_post();
            ?>


                <li class="drink-list-menu drink-menu-first">
                  <?php if (get_field('drink-genre')) : ?>
                    <p class="drink-menu"><?php the_field('drink-genre'); ?></p>
                  <?php endif; ?>
                  <?php if (get_field('price')) : ?>
                    <p class="drink-price"><?php the_field('price'); ?> yen</p>
                  <?php endif; ?>
                </li>
            <?php
              }
            } else {
            }
            wp_reset_query();
            ?>

          </ul>
          <ul class="drink-list">
            <li class="drink-list-title">紅茶</li>
            <?php
            global $query_string;
            query_posts(
              array(
                'post_type' => array('menu'),
                'tax_query' => array(
                  array(
                    'taxonomy' => 'genre',
                    'field' => 'slug',
                    'terms' => 'tea',
                    'operator'  => 'IN'
                  )
                ),
                'showposts' => 6,
                'posts_per_page' => 6,
                'paged' => get_query_var('paged')
              )
            );
            if (have_posts()) {
              while (have_posts()) {
                the_post();
            ?>


                <li class="drink-list-menu drink-menu-first">
                  <?php if (get_field('drink-genre')) : ?>
                    <p class="drink-menu"><?php the_field('drink-genre'); ?></p>
                  <?php endif; ?>
                  <?php if (get_field('price')) : ?>
                    <p class="drink-price"><?php the_field('price'); ?> yen</p>
                  <?php endif; ?>
                </li>
            <?php
              }
            } else {
            }
            wp_reset_query();
            ?>

          </ul>
          <ul class="drink-list">
            <li class="drink-list-title">ソフトドリンク</li>
            <?php
            global $query_string;
            query_posts(
              array(
                'post_type' => array('menu'),
                'tax_query' => array(
                  array(
                    'taxonomy' => 'genre',
                    'field' => 'slug',
                    'terms' => 'softdrink',
                    'operator'  => 'IN'
                  )
                ),
                'showposts' => 6,
                'posts_per_page' => 6,
                'paged' => get_query_var('paged')
              )
            );
            if (have_posts()) {
              while (have_posts()) {
                the_post();
            ?>


                <li class="drink-list-menu drink-menu-first">
                  <?php if (get_field('drink-genre')) : ?>
                    <p class="drink-menu"><?php the_field('drink-genre'); ?></p>
                  <?php endif; ?>
                  <?php if (get_field('price')) : ?>
                    <p class="drink-price"><?php the_field('price'); ?> yen</p>
                  <?php endif; ?>
                </li>
            <?php
              }
            } else {
            }
            wp_reset_query();
            ?>

          </ul>
        </div>
      </div>
      <div class="grand-menu-btn-link-box btn-link-box"><a href="<?php echo get_post_type_archive_link('menu'); ?>" class="grand-menu-btn-link btn-link">その他のメニュー</a></div>
    </div><!-- wrapper -->
  </div>
</section>
<!-- /#grand-menu.grand-menu -->

<section id="gallery" class="gallery">
  <div class="inner">
    <h2 class="section-title">Gallery<span class="section-title-inline">ギャラリー</span></h2>
    <ul class="gallery-list">
      <li class="gallery-list-img"><img src="<?php echo get_template_directory_uri() ?>/image/img_gallery1.jpg" alt="hoge"></li>
      <li class="gallery-list-img"><img src="<?php echo get_template_directory_uri() ?>/image/img_gallery2.jpg" alt="hoge"></li>
      <li class="gallery-list-img"><img src="<?php echo get_template_directory_uri() ?>/image/img_gallery3.jpg" alt="hoge"></li>
      <li class="gallery-list-img"><img src="<?php echo get_template_directory_uri() ?>/image/img_gallery4.jpg" alt="hoge"></li>
    </ul>
    <div class="btn-link-box"><a href="#" class="btn-link">インスタグラムを見る</a></div>
  </div>
</section>
<!-- /#gallery.gallery -->

<section id="news" class="news">
  <div class="inner">
    <?php if (have_posts()) : while (have_posts()) : the_post();
        $counter++; ?>
        <?php if ($counter == 1) : ?>

          <h2 class="section-title">News<span class="section-title-inline">お知らせ</span></h2>
          <div class="news-content">
            <div class="news-top">
              <p class="news-top-category news-category"><span class="news-ribbon-inline"></span><?php my_the_post_category(false); ?></p>
              <a href="<?php the_permalink(); ?>" class="news-top-card">
                <figure class="news-top-img">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                  } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/img_news1.jpg"" alt="">';
                  }
                  ?>
                </figure>
                <div class="news-top-body">
                  <p class="news-top-title"><?php the_title(); ?></p>
                  <p class="news-top-text"><?php the_excerpt(); ?></p>
                  <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                </div>
              </a>
            </div><!-- news-top -->
            <div class="news-cards">
            <?php elseif ($counter <= 5) : ?>
              <div class="news-card-wrapper">
                <p class="news-card-category news-category"><span class="news-ribbon-inline"></span><?php my_the_post_category(false); ?></p>
                <a href="<?php the_permalink(); ?>" class="news-card">
                  <figure class="news-card-img">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail();
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
              </div><!-- news-card-wrapper -->
            <?php endif; ?>
        <?php endwhile;
    endif; ?>

            </div><!-- /news-cards -->
          </div><!-- news-content -->

          <div class="news-btn-link-box btn-link-box"><a href="<?php echo get_post_type_archive_link('news'); ?>" class="btn-link">過去のお知らせ</a></div>
  </div><!-- inner -->
</section>
<!-- /#news.news -->

<?php get_footer(); ?>