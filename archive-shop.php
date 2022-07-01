<header class="util-header-shop">
  <div class="util-header-title">
    <h1 class="section-title util-page-title">Shop<span class="section-title-inline">店舗一覧</span></h1>
  </div>
  <?php get_header(); ?>
</header>

<?php get_template_part('template-parts/breadcrumb'); ?>

<?php
while (have_posts()) :
  the_post();
?>

  <div class="shop-wrapper inner-small">
    <h2 class="shop-title">OPEN CAFE　<?php the_title(); ?></h2>
    <div class="shop-map-iframe map-iframe">
      <div class="map-iframe-wrap">
        <iframe src="<?php the_field('map'); ?>" width="688" height="387" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <dl class="shop-access-list access-list">
      <div class="access-list-left">
        <div class="access-list-item row-2">
          <dt>住所</dt>
          <?php if (get_field('address')) : ?>
            <dd><?php the_field('address'); ?></dd>
          <?php endif; ?>
        </div>
        <div class="access-list-item">
          <dt>TEL</dt>
          <?php if (get_field('tel')) : ?>
            <dd class="hidden-sp hidden-tab"><?php the_field('tel'); ?></dd>
            <dd><a href="tel:<?php the_field('tel'); ?>" class="hidden-pc"><?php the_field('tel'); ?></a></dd>
          <?php endif; ?>
        </div>
        <div class="access-list-item">
          <dt>Mail</dt>
          <?php if (get_field('email')) : ?>
            <dd><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></dd>
          <?php endif; ?>
        </div>
      </div>
      <div class="access-list-right">
        <div class="access-list-item row-2">
          <dt>営業時間</dt>
          <?php if (get_field('time')) : ?>
            <dd><?php the_field('time'); ?></dd>
          <?php endif; ?>
        </div>
        <div class="access-list-item">
          <dt>定休日</dt>
          <?php if (get_field('holiday')) : ?>
            <dd><?php the_field('holiday'); ?></dd>
          <?php endif; ?>
        </div>
        <div class="access-list-item">
          <dt>座席</dt>
          <?php if (get_field('count')) : ?>
            <dd><?php the_field('count'); ?></dd>
          <?php endif; ?>
        </div>
      </div>
    </dl>
  </div><!-- /.inner-small -->
<?php endwhile; ?>


<?php get_footer(); ?>