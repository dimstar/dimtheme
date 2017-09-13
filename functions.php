<?php

// Register the style like this for a theme:
// (First the unique name for the style (custom-style) then the src,
// then dependencies and ver no. and media type)
$date = date_create();
$version_timestamp = date_timestamp_get($date);
$version_timestamp = date_timestamp_get($date);
$version_timestamp = 'test7'.$version_timestamp;
//$version_timestamp = null;

wp_enqueue_style( 'cpmg',
  get_template_directory_uri() . '/style.css',
  array(),
  $version_timestamp,
  'all' );

wp_enqueue_style( 'cpmg-responsive',
  get_stylesheet_directory_uri() . '/assets/css/responsive.css',
  array('cpmg-main'),
  $version_timestamp,
  'all' );

// MAIN theme style
wp_enqueue_style( 'cpmg-main',
  get_stylesheet_directory_uri() . '/assets/css/main.css',
  array(),
  $version_timestamp,
  'all' );

// featherlight gallery style
wp_enqueue_style( 'featherlight-gallery',
  get_stylesheet_directory_uri() . '/assets/featherlight/featherlight.gallery.min.css',
  array(),
  $version_timestamp,
  'all' );

// featherlight style
wp_enqueue_style( 'featherlight',
  get_stylesheet_directory_uri() . '/assets/featherlight/featherlight.min.css',
  array(),
  $version_timestamp,
  'all' );

// MAIN theme scripts
wp_enqueue_script( 'cpmg-main',
  get_stylesheet_directory_uri() . '/assets/js/scripts.js',
  array(),
  $version_timestamp,
  true );

//fittext
wp_enqueue_script('fittext', (get_stylesheet_directory_uri().'/assets/fittext/jquery.fittext.js'), array('jquery'), $theme_version, true);
//fittext
wp_enqueue_script('pajinate', (get_stylesheet_directory_uri().'/assets/paginate/jquery.pajinate.min.js'), array('jquery'), $theme_version, true);

// featherlight scripts
wp_enqueue_script( 'featherlight-script',
  get_stylesheet_directory_uri() . '/assets/featherlight/featherlight.min.js',
  array('jquery'),
  $version_timestamp,
  true );

// featherlight scripts
wp_enqueue_script( 'featherlight-gallery-script',
  get_stylesheet_directory_uri() . '/assets/featherlight/featherlight.gallery.min.js',
  array('jquery'),
  $version_timestamp,
  true );

//instafeed
wp_enqueue_script('instafeed', (get_stylesheet_directory_uri().'/assets/instafeed/instafeed.js'), array('jquery'), $theme_version, true);

// Slick Carousel
wp_enqueue_script('slickjs', (get_stylesheet_directory_uri().'/assets/slick/slick/slick.min.js'), array('jquery'), $theme_version, true);
wp_register_style('slickcss', (get_stylesheet_directory_uri().'/assets/slick/slick/slick.css'), array('cutwater') , $theme_version);
wp_enqueue_style('slickcss');
wp_register_style('slicktheme', (get_stylesheet_directory_uri().'/assets/slick/slick/slick-theme.css'), array('cutwater') , $theme_version);
wp_enqueue_style('slicktheme');

// END STYLES/SCRIPTS

function remove_elipsis($excerpt){
  return str_replace( '[...]', '...', $excerpt );
}

function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');