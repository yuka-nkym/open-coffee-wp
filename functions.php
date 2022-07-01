<?php
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

/* contactform7の自動整形機能を無効化 */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

define('WPCF7_AUTOP', false);

add_action('after_setup_theme', 'my_setup');

/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init()
{
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '5.8.2', 'all');
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('swiper_css', get_template_directory_uri() . '/css/swiper-bundle.min.css',  array(), '7.4.1');
  wp_enqueue_style('css', get_template_directory_uri() . '/style.css', array(), filemtime(get_theme_file_path('/style.css')), 'all');
  wp_enqueue_script('bundle_js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), '7.4.1', true);
  wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery'), filemtime(get_theme_file_path('/js/script.js')), true);
  // indexページのみtop.jsを読み込み
  if (is_home())
    wp_enqueue_script('top_js', get_template_directory_uri() . '/js/top.js', array('jquery', 'bundle_js', 'script_js'), filemtime(get_theme_file_path('/js/top.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * メニューの登録 ヘッダーメニュー、フッターメニュー、スマホのドロワーメニュー
 */
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer-menu' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu_init');

/**
 * アーカイブタイトル書き換え カテゴリー名の前につく「カテゴリー:」を消す
 */
function my_archive_title($title)
{

  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_author()) {
    $title = get_the_author();
  } elseif (is_date()) {
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');

// 投稿のアーカイブページを作成
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// 表示するタイトルの文字数を30文字までに制限、超えた場合は...を末尾につける
function titlelimitchar($title)
{
  if (mb_strlen($title) > 30 && !(is_single()) && !(is_page())) {
    $title = mb_substr($title, 0, 30) . "…";
  }
  return $title;
}
add_filter('the_title', 'titlelimitchar');

/**
 * カテゴリーを1つだけ(1つ目)表示の独自関数
 */

function my_the_post_category($anchor = true, $id = 0)
{
  global $post;
  if (0 === $id) {
    $id = $post->ID;
  }

  //カテゴリー一覧を取得
  $this_categories = get_the_category($id);
  if ($this_categories[0]) {
    if ($anchor) {
      echo '<a href="' . esc_url(get_category_link($this_categories[0]->term_id)) . '">' . esc_html($this_categories[0]->cat_name) . '</a>';
    } else {
      echo esc_html($this_categories[0]->cat_name);
    }
  }
}

//投稿・固定ページ管理画面の記事一覧テーブルにIDカラムを作成
add_filter('manage_posts_columns', 'customize_admin_manage_posts_columns');
add_filter('manage_pages_columns', 'customize_admin_manage_posts_columns');
function customize_admin_manage_posts_columns($columns)
{
  $columns['post-id'] = 'ID';

  return $columns;
}

//投稿・固定ページ管理画面の記事一覧テーブルにIDを表示
add_action('manage_posts_custom_column', 'customize_admin_add_column', 10, 2);
add_action('manage_pages_custom_column', 'customize_admin_add_column', 10, 2);
function customize_admin_add_column($column_name, $post_id)
{
  if ('post-id' === $column_name) {
    $thum = $post_id;
  }
  if (isset($thum) && $thum) {
    echo $thum;
  }
}

//投稿・固定ページ管理画面の記事一覧テーブルにIDソートを可能にする
add_filter('manage_edit-post_sortable_columns', 'sort_term_columns');
add_filter('manage_edit-page_sortable_columns', 'sort_term_columns');
function sort_term_columns($columns)
{
  $columns['post-id'] = 'ID';
  return $columns;
}

/* contactform7からthanksページに飛ぶ */
add_action('wp_footer', 'mycustom_wp_footer');
function mycustom_wp_footer()
{
?> <script type="text/javascript">
    document.addEventListener('wpcf7mailsent', function(event) {
      location = 'http://deitoracoffee.wp/contact/thanks';
    }, false);
  </script>
<?php
}

//カスタム投稿menu 表示件数
function change_posts_per_page($query)
{
  if (!is_admin() && $query->is_main_query()) {
    if (is_post_type_archive('menu')) {
      $query->set('posts_per_page', '20');
    } else if (is_tax('genre')) {
      $query->set('posts_per_page', '15');
    }
  }
  return $query;
}

add_action('pre_get_posts', 'change_posts_per_page');

/**
 * ボタンのショートコードを作成
 */
function my_shortcode($atts, $content = '')
{
  return '<div class="btn-link-box"><a class="btn-link" href="' . $atts['link'] . '">' . $content . '</a></div><!-- /btn-link-box -->';
}
add_shortcode('btn', 'my_shortcode');
