<?php
/**
 * Eight Paper custom function and work related to widgets.
 *
 * @package Eight_Paper
 */
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function eight_paper_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'eight-paper' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Left', 'eight-paper' ),
		'id'            => 'eight-paper-sidebar-left',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header Ad Area', 'eight-paper' ),
		'id'            => 'eight-paper-headerad',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Top Fullwidth Area', 'eight-paper' ),
		'id'            => 'eight-paper-homepage-top',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Middle Content Area', 'eight-paper' ),
		'id'            => 'eight-paper-homepage-middle-content',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Middle Sidebar Area', 'eight-paper' ),
		'id'            => 'eight-paper-homepage-middle-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Middle Fullwidth Area', 'eight-paper' ),
		'id'            => 'eight-paper-homepage-middle',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Bottom Content Area', 'eight-paper' ),
		'id'            => 'eight-paper-homepage-bottom-content',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Bottom Sidebar Area', 'eight-paper' ),
		'id'            => 'eight-paper-homepage-bottom-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Bottom Fullwidth Area', 'eight-paper' ),
		'id'            => 'eight-paper-homepage-bottom',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area', 'eight-paper' ),
		'id'            => 'eight-paper-footer',
		'description'   => esc_html__( 'Add widgets here.', 'eight-paper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'eight_paper_widgets_init' );

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Register different widgets
 *
 * @since 1.0.1
 */
add_action( 'widgets_init', 'eight_paper_register_widgets' );

function eight_paper_register_widgets() {

	// Featured Slider
	register_widget( 'eight_paper_Featured_Slider' );
	// Featured Posts
	register_widget( 'eight_paper_Featured_Posts' );
	// Block Posts
	register_widget( 'eight_paper_Block_Posts' );
	// Default Tabbed
	register_widget( 'eight_paper_Default_Tabbed' );
	// Recent Posts
	register_widget( 'eight_paper_Recent_Posts' );
	//Social Icons
	register_widget('eight_paper_Social_Icons');
}

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Load widget required files
 *
 * @since 1.0.0
 */

get_template_part('/inc/widgets/ep-widget','fields');// Widget fields
get_template_part('/inc/widgets/ep-featured','slider');// Featured Slider
get_template_part('/inc/widgets/ep-featured','posts');// Featured posts
get_template_part('/inc/widgets/ep-block','posts');// Block posts widget
get_template_part('/inc/widgets/ep-recent','posts');// Recent Posts
get_template_part('/inc/widgets/ep-default','tabbed');// Default Tabbed 
get_template_part('/inc/widgets/ep-widget','socialicons');// Social Icons