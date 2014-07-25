<?php
/**
 * The template for displaying the header.
 *
 * @package KyleBreckenridge.com
 * @since 0.1.0
 */
 ?><!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<title><?php wp_title( '|', true, 'right' ); ?><?php get_bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<div itemscope itemtype="http://schema.org/Organization">
	<a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img itemprop="logo" src="http://www.example.com/logo.png" /></a>
	<meta itemprop="name" content="<?php bloginfo('name');?>" />
</div>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false) ); ?>