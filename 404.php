<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

	<div id="site-content" class="site-content" role="main">

		<article id="post-0" class="post error404 not-found">
			<header class="entry-header">
				<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', '_s' ); ?></h1>
			</header>

			<div class="entry-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_s' ); ?></p>

				<?php get_search_form(); ?>

				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

				<div class="widget">
					<h2 class="widget-title"><?php _e( 'Most Used Categories', '_s' ); ?></h2>
					<ul>
					<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
					</ul>
				</div>

				<?php
				$archive_content = '<p>' . __( 'Try looking in the monthly archives. %1$s', '_s' ) . '</p>';
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
				?>

				<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

			</div><!-- .entry-content -->
		</article><!-- #post-0 -->

	</div><!-- #content .site-content -->

<?php get_footer(); ?>