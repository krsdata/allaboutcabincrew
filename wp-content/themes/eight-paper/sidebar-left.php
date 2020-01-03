<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eight_Paper
 */

if ( ! is_active_sidebar( 'eight-paper-sidebar-left' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area eight-paper-sidebar-left">
	<?php dynamic_sidebar( 'eight-paper-sidebar-left' ); ?>
</div><!-- #secondary -->