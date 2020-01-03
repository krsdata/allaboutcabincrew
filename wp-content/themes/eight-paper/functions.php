<?php
/**
 * Eight Paper functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Eight_Paper
 */

if ( ! function_exists( 'eight_paper_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function eight_paper_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Eight Paper, use a find and replace
		 * to change 'eight-paper' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'eight-paper', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_image_size( 'eight-paper-slider-medium', 775, 700, true );
		add_image_size( 'eight-paper-featured-medium', 168, 117, true );
		add_image_size( 'eight-paper-featured-cat', 100, 123, true );
		//block lay 1 large image = 507x290
		//block lay 1 small + block lay 2 small
		add_image_size( 'eight-paper-block-small', 242, 136, true );
		//block lay 2 large 776x390
		add_image_size( 'eight-paper-block-three', 368, 216, true );
		add_image_size( 'eight-paper-block-four', 275, 165, true );
		//block lay 5 large = 1096x915
		add_image_size( 'eight-paper-block-five', 272, 155, true );
		add_image_size( 'eight-paper-sidebar-widget', 308, 150, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'eight-paper' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
        * Enable support for Post Formats.
        * See http://codex.wordpress.org/Post_Formats
        */
		add_theme_support('post-formats', array(
			'video',
			'audio',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'eight_paper_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'eight_paper_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eight_paper_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'eight_paper_content_width', 640 );
}
add_action( 'after_setup_theme', 'eight_paper_content_width', 0 );

/**
 * Set the theme version
 *
 * @global int $eight_paper_version
 * @since 1.0.0
 */
function eight_paper_theme_version() {
	$eight_paper_theme_info = wp_get_theme();
	$GLOBALS['eight_paper_version'] = $eight_paper_theme_info->get( 'Version' );
}
add_action( 'after_setup_theme', 'eight_paper_theme_version', 0 );
/**
 * Enqueue scripts and styles.
 */
function eight_paper_scripts() {
	global $eight_paper_version;

	wp_enqueue_style( 'eight-paper-fonts', eight_paper_fonts_url(), array(), null );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/library/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );

	wp_enqueue_style( 'lightslider-style', get_template_directory_uri().'/assets/library/lightslider/css/lightslider.min.css', array(), '1.1.6' );

	wp_enqueue_style( 'eight-paper-style', get_stylesheet_uri(), array(), esc_attr( $eight_paper_version ) );

	wp_enqueue_style( 'eight-paper-responsive-style', get_template_directory_uri().'/assets/css/ep-responsive.css', array(), '1.0.0' );

	wp_enqueue_style( 'eight-paper-keybaord-style', get_template_directory_uri().'/assets/css/ep-keyboard.css', array(), '1.0.0' );

	if(is_rtl()){
		wp_enqueue_style( 'eight-paper-rtl', get_template_directory_uri().'/assets/css/ep-rtl.css', array(), '1.0.0' );
	}

	wp_enqueue_script( 'eight-paper-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), esc_attr( $eight_paper_version ), true );

	wp_enqueue_script( 'eight-paper-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), esc_attr( $eight_paper_version ), true );

	wp_enqueue_script( 'jquery-lightslider', get_template_directory_uri().'/assets/library/lightslider/js/lightslider.min.js', array('jquery'), '1.1.6', true );

	wp_enqueue_script( 'jquery-ui-tabs' );

	wp_enqueue_script( 'eight-paper-custom-script', get_template_directory_uri().'/assets/js/ep-custom-scripts.js', array('jquery'), esc_attr( $eight_paper_version ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eight_paper_scripts' );

/**
 * Enqueue scripts and styles for admin.
 */
function eight_paper_admin_scripts($hook) {
	
	global $eight_paper_version;
	
	if( 'widgets.php' != $hook && 'customize.php' != $hook ) {
		return;
	}

	wp_enqueue_style( 'eight-paper-admin-style', get_template_directory_uri() . '/assets/css/ep-admin.css', array(), esc_attr( $eight_paper_version )  );
	
	wp_enqueue_script( 'jquery-ui-button' );
	wp_enqueue_script( 'eight-paper-customizer-controls-script', get_template_directory_uri() . '/assets/js/ep-customizer-controls.js', array('jquery'), $eight_paper_version, true );

	wp_enqueue_script( 'eight-paper-admin-script', get_template_directory_uri() . '/assets/js/ep-admin.js', array('jquery'), $eight_paper_version, true );
}
add_action( 'admin_enqueue_scripts', 'eight_paper_admin_scripts' );

//adding custom scripts and styles in header for favicon and other
function eight_paper_header_scripts(){
	$header_bg_v = get_header_image();
	$header_bg_c = get_background_color();
	echo "<style type='text/css' media='all'>";
	if(($header_bg_v)){
		$header_bg_v =   '.site-header { background: url("'.esc_url($header_bg_v).'") no-repeat scroll left top rgba(0, 0, 0, 0); position: relative; z-index: 1;background-size: cover; }';
		echo wp_kses_post($header_bg_v);
		echo "\n";
		echo '.site-header .ed-container:before {
			content: "";
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: '.esc_attr(eight_paper_hex2rgba($header_bg_c,'0.6')).';
			z-index: -1;
		}';
	}
	echo "</style>\n";
}
add_action('wp_head','eight_paper_header_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/customizer/ep-innerpage.php';
require get_template_directory() . '/inc/customizer/ep-custom-classes.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load Custom Metaboxes
 */
require get_template_directory() . '/inc/metaboxes/ep-page-metabox.php';
require get_template_directory() . '/inc/metaboxes/ep-post-metabox.php';
/**
 * Load Custom Widgets and areas
 */
require get_template_directory() . '/inc/widgets/ep-widget-functions.php';
require get_template_directory() . '/inc/widgets/ep-widget-hooks.php';
/**
 * Demo Import
 */
require get_template_directory() . '/welcome/welcome-config.php';
add_filter('adi_git_config_location', 'eight_paper_git_url_config' );
function eight_paper_git_url_config(){
	$git_url = 'https://raw.githubusercontent.com/8degreethemes/8degreethemes.github.io/master/demos/eight-paper/config.json';
	return $git_url;
}

if(!is_admin()){
	if(!function_exists('eight_paper_excerpt_length')){
		function eight_paper_excerpt_length( $length ) {
			return 30;
		}
	}
	add_filter( 'excerpt_length', 'eight_paper_excerpt_length', 999);
}