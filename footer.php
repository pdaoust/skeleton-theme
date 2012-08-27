<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _skeleton
 * @since _skeleton 1.0
 */
?>

	</div><!-- #main -->

	<footer id="site-footer" class="site-footer" role="contentinfo">
		<nav role="navigation" class="site-navigation site-footer-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', '_skeleton' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_skeleton' ); ?>"><?php _e( 'Skip to content', '_skeleton' ); ?></a></div>

			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'site-footer-menu',
				'menu_id' => 'site-footer-menu'
			) ); ?>
			<?php get_template_part( 'searchform' ); ?>
		</nav>

		<div class="site-info">
			<?php do_action( '_skeleton_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_skeleton' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_skeleton' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_skeleton' ), '_skeleton', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>
