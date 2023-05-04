<?php
/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
 * CSSやJavaScriptの読み込み
 */
function my_script_init() 
  {
    // fontawsome(アイコン)
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v6.0.0/css/all.css', array(), '6.0.0', 'all');

    //swiper.css（スライドアニメーション）
    // wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), '1.0.0', 'all');

    //slick.css(スライダーアニメーション)
    // wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), '1.0.0', 'all');

    // css
    // wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");

    // swiper-js
    // wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array( 'jquery' ), '1.0.0', true);

    // slick.js
    // wp_enqueue_script('js-slick', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0.0', true);

    // js
    wp_enqueue_script("my", get_template_directory_uri() . "/js/main.js", array("jquery"), filemtime(get_theme_file_path('js/main.js')), true);
  }
    add_action('wp_enqueue_scripts', 'my_script_init');

    function custom_widgets_init() {
      register_sidebar( array(
          'name'          => 'カスタムウィジェットエリア',
          'id'            => 'custom_widget_area',
          'description'   => 'カスタムウィジェットエリアです。',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widget-title">',
          'after_title'   => '</h2>',
      ) );
  }
  add_action( 'widgets_init', 'custom_widgets_init' );
  

    // 各テンプレートごとにメイン画像を表示


    //メイン画像上にテンプレートごとの文字列を表示

    
    //メイン画像上にテンプレートごとの英語タイトルを表示

?>