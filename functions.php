<?php
// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );
// Load in our CSS
function portfolio_enqueue_styles() {
  // wp_enqueue_style( 'font_awesome_css', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css' );
  wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Ubuntu:400,400i,500,500i&display=swap' );
  wp_enqueue_style( 'lightbox-css', get_stylesheet_directory_uri() . '/css/ekko-lightbox.css', [], time(), 'all' );
  wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/css/custom.css', [], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_styles' );
// Load in our JavaScript
function portfolio_enqueue_js() {
  wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'), true);
  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), true);
  wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), true);
  wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/55ef6b9bff.js' );
  wp_enqueue_script( 'elevator', get_template_directory_uri() . '/js/elevator.js' );
	//wp_enqueue_script( 'dropdown_js', get_template_directory_uri() . '/js/example.js' );
}
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_js');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
// Register Menu Locations
register_nav_menus( [
  'main-menu' => esc_html__( 'Main Menu', 'portfolio' ),
  'social-menu' => esc_html__( 'Social Menu', 'portfolio' ),
  'footer-menu' => esc_html__( 'Footer Menu', 'portfolio' ),
]);
?>
