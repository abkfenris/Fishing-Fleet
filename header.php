<!DOCTYPE html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'autofocus' ), max( $paged, $page ) );

	?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
		
		
		
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments' )) wp_enqueue_script( 'comment-reply'); ?>
		
		<?php wp_head(); ?>

	</head>

<body class="wordpress">

	<div id="container">
	
		<header>
		
		<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
		
		
		
		</header>
		<nav><?php wp_nav_menu( array(
			'theme_location' => 'primary', // Setting up the location for the main-menu, Main Navigation
			'menu_class' => 'sf-menu', // Adding the class for drop downs
			'container_id' => 'navwrap', // Add css ID to the containers that wraps the menu.
			'fallback_cb' => 'wp_page_menu', // if wp_nav_menu is unavailable, WordPress displays wp_page_menu function, which displays the pages of your blog.
			)
		); ?></nav>
		
		<!-- #header -->
