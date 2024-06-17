<?php
/**
 * Functions
 */

/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
  // CSS読み込み
  wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('assets/css/style.css')),  'all');

  // JavaScript読み込み
  wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/script.js', array(), filemtime(get_theme_file_path('assets/js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
/**
 * セキュリティー対策
 */

/**
 * wordpressバージョン情報の削除
 * @see　https://qiita.com/Taka96/items/b541b1fef0fa20add47d
 */
  remove_action('wp_head', 'wp_generator');

/**
 * 投稿者一覧ページを自動で生成されないようにする
 * @see　https://qiita.com/Taka96/items/b541b1fef0fa20add47d
 */
add_filter('author_rewrite_rules', '__return_empty_array');
function disable_author_archive() {
  if( preg_match( '#/author/.+#', $_SERVER['REQUEST_URI'] ) ){
    wp_redirect( esc_url( home_url( '/404.php' ) ) );
    exit;
  }
}
add_action('init', 'disable_author_archive');

/**
 * /?author=1 などでアクセスしたらリダイレクトさせる
 * @see https://www.webdesignleaves.com/pr/wp/wp_user_enumeration.html
 */
if (!is_admin()) {
  if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
  add_filter('redirect_canonical', 'my_shapespace_check_enum', 10, 2);
}
function my_shapespace_check_enum($redirect, $request)
{
  if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
  else return $redirect;
}

/**
 * pタグとbrタグの自動挿入を解除
 */
add_action('init', 'disable_output');

function disable_output()
{
  remove_filter('the_content', 'wpautop');  // 本文欄
  // remove_filter('the_title', 'wpautop');  // タイトル蘭
  // remove_filter('comment_text', 'wpautop');  // コメント欄
  // remove_filter('the_excerpt', 'wpautop');  // 抜粋欄
}

/*
 * テンプレートパスを返す
 */
function temp_path()
{
  echo esc_url(get_template_directory_uri());
}
/* assetsパスを返す */
function assets_path()
{
  echo esc_url(get_template_directory_uri() . '/assets');
}
/* 画像パスを返す */
function img_path()
{
  echo esc_url(get_template_directory_uri() . '/assets/images');
}
/* mediaフォルダへのURL */
function uploads_path()
{
  echo esc_url(wp_upload_dir()['baseurl']);
}

/* ホームURLのパスを返す
 *
 * $page = worksの場合、https://xxxx.co.jp/works/ を返す
 * 呼び出しは、<?php page_path('works'); ?> で実施する
 *
*/
function page_path($page = "")
{
  $page = $page . '/';
  echo esc_url(home_url($page));
}

// カスタムロゴ

function add_custom_logo_support() {
  add_theme_support( 'custom-logo', array(
    'height'               => 80, // 推奨されるロゴの高さ 100px
    'width'                => 171, // 推奨されるロゴの幅 400px
    'flex-height'          => true, // 動的な高さを許可する
    'flex-width'           => true, // 動的な幅を許可する
    'unlink-homepage-logo' => true, // 訪問者がページにいるときにはホームページにリンクしない
  ) );
}
add_action( 'after_setup_theme', 'add_custom_logo_support' );


/* カスタムメニュー
---------------------------------------------------------- */
register_nav_menus(array(
  'header'    => 'ヘッダー',
  'drawer'    => 'スマホ ヘッダー',
  'footer'    => 'フッター',
  'side'    => 'サイドメニュー',
  'hospital'    => '病院案内メニュー',
  'care'    => '介護施設メニュー',
  'department'    => '診療科・部門メニュー',
  'outpatient'    => '外来の症状について',
  'recruit'    => '採用情報',
  'sitemap'    => 'サイトマップ',
));

function add_class_on_link($item_output, $item, $depth, $args) {
  // theme_locationをチェックして、特定のメニュー位置の場合だけクラスを追加
  if (isset($args->theme_location) && $args->theme_location === 'drawer') {
      // リンクが指定されていない場合にのみクラスを追加
      if (strpos($item_output, '<a') !== false && strpos($item_output, 'href') === false) {
          $item_output = preg_replace('/(<a.*?)/', '$1' . " class='js-accordion'", $item_output);
      }
  }
  return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);

// アイキャッチ画像を有効にする。
function my_theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'my_theme_setup');

// calendar ショートコード

function calendar_shortcode() {
  ob_start(); ?>
  <div class="p-time-table__container">
      <table class="c-time-table p-time-table">
          <tbody>
              <tr>
                  <th class="c-time-table__detail">受付<br class="u-mobile">時間</th>
                  <td class="c-time-table__time">8:30-17:30</td>
              </tr>
              <tr>
                  <th class="c-time-table__detail">診療<br class="u-mobile">時間</th>
                  <td class="c-time-table__time">
                      <ul class="c-time-table__time-lists">
                          <li>午前</li>
                          <li>9:00-12:30</li>
                      </ul>
                      <ul class="c-time-table__time-lists">
                          <li>午後</li>
                          <li>13:30-17:30</li>
                      </ul>
                  </td>
              </tr>
              <tr>
                  <th class="c-time-table__detail">診<br class="u-mobile">療<br class="u-mobile">日</th>
                  <td class="c-time-table__day">
                      <ul class="c-time-table__day-lists">
                          <li>月</li>
                          <li>火</li>
                          <li>水</li>
                          <li>木</li>
                          <li>金</li>
                          <li>土</li>
                          <li class="u-desktop">日・祝</li>
                      </ul>
                      <ul class="c-time-table__day-lists">
                          <li>○</li>
                          <li>○</li>
                          <li>○</li>
                          <li>△</li>
                          <li>○</li>
                          <li>○</li>
                          <li class="u-desktop">×</li>
                      </ul>
                  </td>
              </tr>
          </tbody>
      </table>
      <p class="p-time-table__text">
          ※休診日：木曜午後、日曜、祝日、年末年始<br>
          ※受診される診療科によって受付時間、診療時間、休診日が異なります
      </p>
      <a href="<?php echo get_field ('medical_list',685);?>" class="c-pdf p-tame-table__pdf" target="_blank">診療体制一覧表はこちら</a>
  </div>
  <?php
  return ob_get_clean();
}
add_shortcode('calendar', 'calendar_shortcode');

/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = '新着情報';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = '新着情報';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );



/* ---------- 投稿の「カテゴリー」と「タグ」の非表示 ---------- */
function my_unregister_taxonomies() {
  global $wp_taxonomies;
  // 「カテゴリー」の非表示
  if (!empty($wp_taxonomies['category']->object_type)) {
    foreach ($wp_taxonomies['category']->object_type as $i => $object_type) {
      if ($object_type == 'post') {
        unset($wp_taxonomies['category']->object_type[$i]);
      }
    }
  }
  // 「タグ」の非表示
  if (!empty($wp_taxonomies['post_tag']->object_type)) {
    foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
      if ($object_type == 'post') {
        unset($wp_taxonomies['post_tag']->object_type[$i]);
      }
    }
  }
  return true;
}
add_action('init', 'my_unregister_taxonomies');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
};





?>