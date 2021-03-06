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
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/KyleBreckenridge-apple-icon.png"/>
<link rel="apple-touch-icon-precomposed" href="icon" />
<?php wp_head(); ?>
<script type="text/javascript" src="//use.typekit.net/azz1znj.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<header role="banner" itemscope itemtype="http://schema.org/Organization">
    <meta itemprop="name" content="<?php bloginfo('name');?>" />
    <a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/images/KyleBreckenridge-logo.svg" alt="KyleBreckenridge.com Logo" /></a><nav role="navigation">
        <ul>
            <li><a href="/about">About</a></li><li><a href="/blog">Blog</a></li><!--<li><a href="/portfolio">Portfolio</a></li>--><li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>
