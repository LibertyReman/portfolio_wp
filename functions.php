<?php
  // テーマサポート
  add_theme_support('title-tag');   // タイトルタグのサポートを許可
  add_theme_support('post-thumbnails'); // アイキャッチのサポートを追加
  add_theme_support('automatic-feed-links'); // フィードの有効化


  // タイトルタグの出力制御
  function portfolio_title_tag($title) {
    if (is_front_page() && is_home()) { //トップページなら
      $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) { //シングルページなら
      $title = single_post_title('', false);
    }
      return $title;
  }
  add_filter('pre_get_document_title', 'portfolio_title_tag');


  // CSS, JSの読み込み
  function portfolio_script() {
    wp_enqueue_style('ress', get_template_directory_uri() . '/css/ress.css');
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.css');
    wp_enqueue_style('ityped', get_template_directory_uri() . '/css/ityped.css');
    wp_enqueue_style('portfolio', get_template_directory_uri() . '/css/portfolio.css');

    wp_enqueue_script('swiper-bundle', get_template_directory_uri(). '/js/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('swiper-config', get_template_directory_uri(). '/js/swiper-config.js', array(), false, true);
    wp_enqueue_script('ityped', get_template_directory_uri(). '/js/ityped.min.js', array(), false, true);
    wp_enqueue_script('ityped-config', get_template_directory_uri(). '/js/ityped-config.js', array(), false, true);
    wp_enqueue_script('hamburger', get_template_directory_uri(). '/js/hamburger.js', array(), false, true);
    wp_enqueue_script('modal', get_template_directory_uri(). '/js/modal.js', array(), false, true);
  }
  add_action('wp_enqueue_scripts', 'portfolio_script');


  // SVGのアップロードを許可
  function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
  }
  add_action('upload_mimes', 'add_file_types_to_uploads');


  // カスタム投稿タイプ スキル を登録
  function create_post_type() {
    register_post_type(
      'skill',
      array(
        'label' => 'スキル',
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'supports' => array(
          'title',
          'editor',
          'thumbnail',
          'revisions',
        ),
      )
    );

    register_taxonomy(
      'skill-cat',
      'skill',
      array(
        'label' => 'カテゴリー',
        'hierarchical' => true,
        'public' => true,
        'show_in_rest' => true,
      )
    );

    register_taxonomy(
      'skill-tag',
      'skill',
      array(
        'label' => 'タグ',
        'hierarchical' => false,
        'public' => true,
        'show_in_rest' => true,
        'update_count_callback' => '_update_post_term_count',
      )
    );
  }
  add_action('init', 'create_post_type');

