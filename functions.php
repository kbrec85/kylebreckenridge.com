<?php
/**
 * KyleBreckenridge.com functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package KyleBreckenridge.com
 * @since 0.1.0
 */
 
 // Useful global constants
define( '_KB__VERSION', '0.1.0' );
 
 /**
  * Enqueue scripts and styles for front-end.
  *
  * @since 0.1.0
  */
 function _kb__scripts_styles() {
	$postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';

  if (in_array($_SERVER['SERVER_ADDR'], array('127.0.0.1')) || pathinfo($_SERVER['SERVER_NAME'], PATHINFO_EXTENSION) == 'dev') {
    wp_enqueue_script( 'livereload', '//localhost:35729/livereload.js', '', false, true );
  }

	wp_enqueue_script('jquery');

	wp_enqueue_script( '_kb_', get_template_directory_uri() . "/assets/js/kylebreckenridge_com{$postfix}.js", array(), _KB__VERSION, true );
		
	wp_enqueue_style( '_kb_', get_template_directory_uri() . "/assets/css/kylebreckenridge_com{$postfix}.css", array(), _KB__VERSION );
 }
 add_action( 'wp_enqueue_scripts', '_kb__scripts_styles' );

 function _kb__register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', '_kb__register_my_menus' );

function _kb__widgets_init() {
  register_sidebar( array(
    'name' => 'Default',
    'id' => 'default',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', '_kb__widgets_init' );

/* Edit Excerpt Read More link */
function _kb__replace_excerpt($content) {
     return '&hellip; <a href="'. get_permalink() .'" class="read-more">Continue Reading >></a>';
  }
add_filter('excerpt_more', '_kb__replace_excerpt');

/*Includes*/
require_once 'includes/theme_options.php';
require_once 'includes/shortcodes.php';