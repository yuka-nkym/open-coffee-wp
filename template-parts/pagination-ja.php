<div class="news-details-pager">
  <ul class="news-details-pagenation">
    <?php if (get_previous_post()) : ?>
      <li class="pre"><?php previous_post_link('%link', '前の記事', TRUE); ?></li>
    <?php endif; ?>
    <li class="news-details-link-box"><a href="/news/" class="news-details-link">記事一覧</a></li>
    <?php if (get_next_post()) : ?>
      <li class="next"><?php next_post_link('%link', '次の記事', TRUE); ?></li>
    <?php endif; ?>
  </ul>
</div>