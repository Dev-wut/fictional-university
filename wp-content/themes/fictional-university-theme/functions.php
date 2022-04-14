<?php

function university_feature(){
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_feature');

function university_files() {
  wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
 
  wp_enqueue_script('university_extra_script', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'university_files');

// Adjust Main Queries On ->New Archive And ->Advance Custom Field (event date)
function university_adjust_queries($query){

  // Program Query
  if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()) {

    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);

  }

  // Event Query
  if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
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
      ),
    ));
  }
}

add_action('pre_get_posts', 'university_adjust_queries');