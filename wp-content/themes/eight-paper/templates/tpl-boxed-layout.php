<?php
/**
 *	Template Name: Boxed Homepage
 *
 */

function the100_pro_web_layout_c($classes){
	$classes[] = "home ep-boxed no-sidebar";
	return $classes;
}    
add_filter( 'body_class', 'the100_pro_web_layout_c' );
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php
		if ( is_active_sidebar( 'eight-paper-homepage-top' ) ) {
			echo '<div class="homepage-top">';
			dynamic_sidebar( 'eight-paper-homepage-top' );
			echo '</div>';
		}
		$ep_home_class = 'empty-content';
		if ( is_active_sidebar( 'eight-paper-homepage-middle-content' ) && is_active_sidebar( 'eight-paper-homepage-middle-sidebar' ) ) {
			$ep_home_class = 'middle-content-sidebar';
		}else{
			if ( is_active_sidebar( 'eight-paper-homepage-middle-content' ) ) {
				$ep_home_class = 'middle-content-only';
			}
			elseif ( is_active_sidebar( 'eight-paper-homepage-middle-sidebar' ) ) {
				$ep_home_class = 'middle-sidebar-only';
			}
		}
		echo '<div class="homepage-middle-wrap '.esc_attr($ep_home_class).' ep-clearfix">';
		if ( is_active_sidebar( 'eight-paper-homepage-middle-content' ) ) {
			echo '<div class="homepage-middle-content">';
			dynamic_sidebar( 'eight-paper-homepage-middle-content' );
			echo '</div>';
		}
		if ( is_active_sidebar( 'eight-paper-homepage-middle-sidebar' ) ) {
			echo '<div class="homepage-middle-sidebar">';
			dynamic_sidebar( 'eight-paper-homepage-middle-sidebar' );
			echo '</div>';
		}
		echo '</div>';
		if ( is_active_sidebar( 'eight-paper-homepage-middle' ) ) {
			echo '<div class="homepage-middle">';
			dynamic_sidebar( 'eight-paper-homepage-middle' );
			echo '</div>';
		}
		$ep_home_class = 'empty-content';
		if ( is_active_sidebar( 'eight-paper-homepage-bottom-content' ) && is_active_sidebar( 'eight-paper-homepage-bottom-sidebar' ) ) {
			$ep_home_class = 'bottom-content-sidebar';
		}else{
			if ( is_active_sidebar( 'eight-paper-homepage-bottom-content' ) ) {
				$ep_home_class = 'bottom-content-only';
			}
			elseif ( is_active_sidebar( 'eight-paper-homepage-bottom-sidebar' ) ) {
				$ep_home_class = 'bottom-sidebar-only';
			}
		}
		echo '<div class="homepage-bottom-wrap '.esc_attr($ep_home_class).' ep-clearfix">';
		if ( is_active_sidebar( 'eight-paper-homepage-bottom-content' ) ) {
			echo '<div class="homepage-bottom-content">';
			dynamic_sidebar( 'eight-paper-homepage-bottom-content' );
			echo '</div>';
		}
		if ( is_active_sidebar( 'eight-paper-homepage-bottom-sidebar' ) ) {
			echo '<div class="homepage-bottom-sidebar">';
			dynamic_sidebar( 'eight-paper-homepage-bottom-sidebar' );
			echo '</div>';
		}
		echo '</div>';
		if ( is_active_sidebar( 'eight-paper-homepage-bottom' ) ) {
			echo '<div class="homepage-bottom">';
			dynamic_sidebar( 'eight-paper-homepage-bottom' );
			echo '</div>';
		}
		?>
	</main>
</div>
<?php
//eight_paper_get_sidebar();
get_footer();