<?php
/**
 * The template for displaying search forms in _skeleton
 *
 * @package _skeleton
 * @since _skeleton 1.0
 */
?>
	<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', '_skeleton' ); ?></label>
		<input type="search" class="searchform-field search" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', '_skeleton' ); ?>" />
		<input type="submit" class="searchform-submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', '_skeleton' ); ?>" />
	</form>
