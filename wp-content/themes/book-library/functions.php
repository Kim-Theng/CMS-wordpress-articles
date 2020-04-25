<?php 
  function book_library_files() {
    wp_enqueue_style('customize-font-google', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('book_library_main_styles', get_stylesheet_uri());
    wp_enqueue_script('main-scrpt-file', get_theme_file_uri('/assets/js/scripts-bundled.js'), NULL, '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'book_library_files');
  
  function university_title_header() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('bookLandscape', 400, 260, true);
    add_image_size('professorPortrait', 480, 650, true);
  }
  add_action('after_setup_theme', 'university_title_header');

  function university_adjust_queries($query) {
    if (!is_admin() AND is_post_type_archive('event')) {
      $today = date('Ymd');
      $query->set('meta_key', 'event_date');
      $query->set('orderby', 'meta_value_num');
      $query->set('order', 'ASC');
      $query->set('meta_query', array(
        array(
          'key' => 'event_date',
          'compare' => '>=',
          'value' => $today,
          'type' => 'numeric'
        )
        ));
    }
  } 
  add_action('pre_get_posts', 'university_adjust_queries');