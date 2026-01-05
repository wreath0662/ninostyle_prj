<?php

/*-------------------------------------------*/
/*  ユーザー情報関連
/*-------------------------------------------*/

//投稿者アーカイブ非表示
// function author_archive_redirect()
// {
//   if (is_author()) {
//     wp_redirect(home_url());
//     exit;
//   }
// }
// add_action('template_redirect', 'author_archive_redirect');

// //REST APIのユーザー無効化
// function remove_rest_api_users($endpoints)
// {
//   if (isset($endpoints['/wp/v2/users'])) {
//     unset($endpoints['/wp/v2/users']);
//   }
//   if (isset($endpoints['/wp/v2/users/(?P[\d]+)'])) {
//     unset($endpoints['/wp/v2/users/(?P[\d]+)']);
//   }
//   return $endpoints;
// }
// add_filter('rest_endpoints', 'remove_rest_api_users');

// //コメントCSSクラスの除去
// function remove_comments_class($classes)
// {
//   foreach ($classes as $key => $class) {
//     if (strstr($class, 'comment-author-')) {
//       unset($classes[$key]);
//     }
//   }
//   return $classes;
// }
// add_filter('comment_class', 'remove_comments_class');

/*-------------------------------------------*/
/*  自動更新の無効化
/*-------------------------------------------*/

// すべての自動更新を無効にする
// add_filter('allow_major_auto_core_updates', '__return_false');
// add_filter('allow_minor_auto_core_updates', '__return_false');
// add_filter('auto_update_theme', '__return_false');
// add_filter('auto_update_plugin', '__return_false');

/*-------------------------------------------*/
/*  読み込み関連
/*-------------------------------------------*/

////////////
// タイトルタグ(出力)
////////////

function insert_title(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'insert_title');

////////////
// タイトルタグの出力を変更
////////////

function correct_title($title){
    if(is_archive()){
        $title['title'] = 'すべての記事';
    }elseif(is_404()){
        $title['title'] = 'お探しのページは見つかりません';
    }
    return $title;
}
add_filter('document_title_parts', 'correct_title');

////////////
// タイトルタグのデフォルト「-」を変更
////////////

function change_title_separator($sep){
    $sep = '|';
    return $sep;
}
add_filter('document_title_separator', 'change_title_separator');

////////////
// CSS, JSの読み込み
////////////

function add_files() {
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@500;600;700;900&family=Playfair+Display@400&display=swap', false );
  wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), false, 'all' );
  wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), false, true );
  wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), null, true );
  wp_enqueue_script( 'gsap-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', array('gsap'), null, true );
//   wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, true );
  wp_enqueue_script( 'turn', 'https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.min.js', array(), null, true );
  if ( is_front_page() ) {
    wp_enqueue_script( 'lenis', 'https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js', array(), null, true );
  }
  // wp_enqueue_script( 'gsap-scroll-smoother', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollSmoother.min.js', array('gsap', 'gsap-scroll-trigger'), null, true );
  wp_enqueue_script( 'theme-swiper', get_template_directory_uri().'/js/swiper.js', array(), false, true );
  wp_enqueue_script( 'theme-turn', get_template_directory_uri().'/js/turn.js', array('turn'), false, true );
  wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'add_files' );

////////////
// アイキャッチ画像
////////////

add_theme_support('post-thumbnails');

// ブログの投稿一覧
add_image_size( 'blog_archive_pick_thumb', 430, 286, true);
// ブログのpickupの投稿一覧
add_image_size( 'blog_archive_thumb', 315, 212, true);

// トップページの画像切り抜き
// add_image_size( 'top_topics_swiper', 294, 395, true );


/*-------------------------------------------*/
/*  削除関連
/*-------------------------------------------*/

add_filter( 'body_class', '_remove_body_class' , 10, 2 );
// linkタグ
remove_action( 'wp_head', 'index_rel_link' );
// デフォルトパーマリンクのURL
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
// ショートリンクURL
remove_action('wp_head', 'wp_shortlink_wp_head');
// wlwmanifest
remove_action('wp_head', 'wlwmanifest_link');
// application/rsd+xml
remove_action('wp_head', 'rsd_link');
// RSSフィードのURL
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// 「?ver=~」
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
// 絵文字
function disable_emoji() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emoji' );
// bodyの余計なクラスたち
function _remove_body_class( $wp_classes, $extra_classes ){
    $wp_classes = preg_grep( "/template|\d/", $wp_classes, PREG_GREP_INVERT );
    return array_merge( $wp_classes, (array) $extra_classes );
}

/*-------------------------------------------*/
/*  ナビメニュー関連
/*-------------------------------------------*/

////////////
// ナビメニューの配置
////////////

function menus() {
    register_nav_menus(
      array(
        'header' => 'ヘッダー',
        'footer' => 'フッター',
      )
    );
}
add_action( 'init', 'menus' );

////////////
// 説明欄を出力
////////////

function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
    $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="en">' . $item->title . '</span>' . '<span class="ja">' . $item->description . '</span>' , $item_output );
    }
    return $item_output;
  }
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );

/*-------------------------------------------*/
/*  投稿関連
/*-------------------------------------------*/

////////////
// 表示名変更
////////////

function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'お知らせ';
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

////////////
// 抜粋の文字数変更
////////////

function twpp_change_excerpt_length( $length ) {
    return 64; 
  }
  add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

////////////
// 抜粋の省略記号を変更
////////////

  function twpp_change_excerpt_more( $more ) {
    return '...';
  }
  add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

////////////
// archive.php
////////////

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'news'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// カスタム投稿タイプblogの表示件数を8件に
function custom_modify_blog_query( $query ) {
  if ( ! is_admin() && $query->is_main_query() && $query->is_post_type_archive( 'blog' ) ) {
      $query->set( 'posts_per_page', 8 ); // ブログの投稿数を8に設定
  }
}
add_action( 'pre_get_posts', 'custom_modify_blog_query' );


// カラムの追加
function add_custom_columns_to_custom_posts($columns) {
  // サムネイルのカラムを追加
  $columns['featured_image'] = __('サムネイル');
  // タームのカラムを追加
  $columns['custom_taxonomy'] = __('ピックアップ');
  return $columns;
}
add_filter('manage_blog_posts_columns', 'add_custom_columns_to_custom_posts');

// コンテンツの表示
function show_custom_columns_content_in_custom_posts($column_name, $post_id) {
  // サムネイルの表示
  if ('featured_image' === $column_name) {
      $post_featured_image = get_the_post_thumbnail($post_id, 'thumbnail');
      if ($post_featured_image) {
          echo $post_featured_image;
      }
  }
  // タームの表示
  elseif ('custom_taxonomy' === $column_name) {
      $terms = get_the_terms($post_id, 'genre'); // 'your_taxonomy' を実際のタクソノミー名に置き換える
      if ($terms && !is_wp_error($terms)) {
          $term_names = array();
          foreach ($terms as $term) {
              $term_names[] = $term->name;
          }
          // ターム名をカンマ区切りで表示
          echo implode(', ', $term_names);
      } else {
          echo __('なし');
      }
  }
}
add_action('manage_blog_posts_custom_column', 'show_custom_columns_content_in_custom_posts', 10, 2);


/*-------------------------------------------*/
/*  お問い合わせページ
/*-------------------------------------------*/
$contact = 'contact';
$thanks = 'complete';

// お問い合わせフォームの送信後にサンクスページへ飛ばす
add_action('wp_footer', 'redirect_thanks_page');
function redirect_thanks_page() {
    global $contact;
    global $thanks;

    if (is_page($contact)) {
        ?>
        <script>
            document.addEventListener('wpcf7mailsent', function(event) {
                location.href = '<?php echo esc_js(home_url("/$contact/$thanks")); ?>'; // 遷移先のURL
            }, false);
        </script>
        <?php
    }
}

add_filter('allow_major_auto_core_updates', '__return_false');
add_filter('allow_minor_auto_core_updates', '__return_false');
add_filter('auto_update_theme', '__return_false');
add_filter('auto_update_plugin', '__return_false');