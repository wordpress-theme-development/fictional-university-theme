<?php
function fictional_university_files(){
      wp_enqueue_script('university-main-js', get_theme_file_uri('/build/index.js'), null, '1.0', true);

      wp_enqueue_style('university-custom-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
      wp_enqueue_style('university-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
      wp_enqueue_style('university-main-style', get_theme_file_uri('/build/style-index.css'));
      wp_enqueue_style('university-extra-style', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts', 'fictional_university_files');

// After Setup theme
function fictional_university_after_setup(){
      add_theme_support('title-tag');

      register_nav_menu( "header_menu", "Header Menu" );
      register_nav_menu( "footer_one", "Footer One" );
      register_nav_menu( "footer_two", "Footer Two" );
}
add_action('after_setup_theme', 'fictional_university_after_setup');
