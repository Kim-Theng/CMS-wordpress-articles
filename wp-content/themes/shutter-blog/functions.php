<?php 
  function book_library_files() {
    wp_enqueue_style('customize-font-google', '//fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('book_library_main_styles', get_stylesheet_uri());
    wp_enqueue_script('main-scrpt-file', get_theme_file_uri('/assets/js/scripts-bundled.js'), NULL, '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'book_library_files');
?>