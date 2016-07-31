<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>->>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">      
                         <?php
                    /* 	if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			/*endif; */?>
                    
		</div><!-- .site-branding --> 
                   
		<nav id="site-navigation" class="navbar navbar-default navbar_menu" role="navigation">
                    <div class="container">
<!--                
   <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> <?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
-->
			<?php wp_nav_menu( array( 
                            'theme_location' => 'primary', 
                            //'menu_id' => 'primary-menu',
                            'container' => false,
                            'menu_class' => 'nav navbar-nav nav_top_menu',
                            'container_class' => 'container',
                            //'link_after' => '<li class="divider"></li>',
                            'walker' => ''
                            )); ?>
<!--
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
-->                 </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">