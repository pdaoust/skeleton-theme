<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 * @since _s 1.0
 */

// force conditional engine to start; no idea why this is required, but hey --
// that's Microsoft for ya
header('X-UA-Compatible: IE=edge,chrome=1');

?><!DOCTYPE html>
<!--[if IE 8]>
<html <?php language_attributes(); ?> class="no-js ie8 ltie9">
<![endif]-->
<!--[if IE 7 & (!IEMobile)]>
<html <?php language_attributes(); ?> class="no-js ie7 ltie9 ltie8">
<![endif]-->
<!--[if IE 7 & IEMobile]>
<html <?php language_attributes(); ?> class="no-js ie7 ie7mobile ltie9 ltie8">
<![endif]-->
<!--[if IE 6]>
<html <?php language_attributes(); ?> class="no-js ie6 ltie9 ltie8 ltie7">
<![endif]-->
<!--[if (gt IE 8)]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>
		<?php
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
			echo ' | ' . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );

		?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script>
		(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement);
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<? require('ga_account.php'); ?>']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/polyfills.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="site-header" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
		</hgroup>

		<nav role="navigation" class="site-navigation site-header-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', '_s' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', '_s' ); ?></a></div>

			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'site-header-menu',
				'menu_id' => 'site-header-menu'
			) ); ?>
			<?php get_template_part( 'searchform' ); ?>
		</nav>
	</header><!-- #masthead .site-header -->

	<div id="main">
