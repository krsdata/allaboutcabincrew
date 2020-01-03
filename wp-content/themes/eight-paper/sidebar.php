<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eight_Paper
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area eight-paper-sidebar-right">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
