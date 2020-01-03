<?php
/**
 * Welcome Page Initiation
*/

include get_template_directory() . '/welcome/welcome.php';

/** Plugins **/
$plugins = array(
	// *** Companion Plugins
	'companion_plugins' => array(
		'access-demo-importer' 	=> array(
			'slug' 				=> 'access-demo-importer',
			'name' 				=> esc_html__('Instant Demo Importer', 'eight-paper'),
			'filename' 			=>'access-demo-importer.php',
 			// Use either bundled, remote, wordpress
			'host_type' 		=> 'wordpress',
			'class' 			=> 'Access_Demo_Importer',
			'info' => __('Access Demo Importer Plugin adds the feature to Import the Demo Conent with a single click.', 'eight-paper'),
		)
	),
	// *** Required Plugins
	'required_plugins' 			=> array(),

	// *** Recommended Plugins
	'recommended_plugins' => array(
			// Free Plugins
		'free_plugins' => array(
			'contact-form-7' => array(
				'slug' 		=> 'contact-form-7',
				'filename' 	=> 'wp-contact-form-7.php',
				'class' 	=> 'WPCF7_Submission'
			),
			'8-degree-coming-soon-page' => array(
				'slug' 		=> '8-degree-coming-soon-page',
				'filename' 	=> '8-degree-coming-soon-page.php',
				'class' 	=> 'Eight_Degree_Coming_Soon_Page'
			),
			'8-degree-notification-bar' => array(
				'slug' 		=> '8-degree-notification-bar',
				'filename' 	=> '8degree-notification.php',
				'class' 	=> 'Edn_Class'
			)
		),
		// Pro Plugins
		'pro_plugins' => array()
	),
);

$strings = array(
		// Welcome Page General Texts
	'welcome_menu_text' => esc_html__( 'Eight Paper Setup', 'eight-paper' ),
	'theme_short_description' => esc_html__( 'Eight Paper is a free magazine and newspaper theme for WordPress. It is one of the most simple and minimal designed magazine theme. It is FREE but fantastic with all the great features needed for a personal blog or news or magazine website. Get your online magazine and news portal done in just few minutes with EightPaper theme.
It is a fully responsive and beautifully designed theme for the new media, news bloggers, news journalists etc. and also can work for other websites like portfolio, personal and travel blogs etc. It offers homepage with the latest posts in grid format, category based grouping of posts, multiple blog layouts and many more.
The theme offers great widgets and areas for featured news slider, featured video content, popular news widgets, must read news widgets, news around the World, trending news, weekend read, editor\'s pick, social share options, great nested comments and more.', 'eight-paper' ),

	// Plugin Action Texts
	'install_n_activate' => esc_html__('Install and Activate', 'eight-paper'),
	'deactivate' => esc_html__('Deactivate', 'eight-paper'),
	'activate' => esc_html__('Activate', 'eight-paper'),

	// Recommended Plugins Section
	'pro_plugin_title' => esc_html__( 'Pro Plugins', 'eight-paper' ),
	'pro_plugin_description' => esc_html__( 'Take Advantage of some of our Premium Plugins.', 'eight-paper' ),
	'free_plugin_title' => esc_html__( 'Free Plugins', 'eight-paper' ),
	'free_plugin_description' => esc_html__( 'These Free Plugins might be handy for you.', 'eight-paper' ),

	// Demo Actions
	'installed_btn' => esc_html__('Activated', 'eight-paper'),
	'deactivated_btn' => esc_html__('Activated', 'eight-paper'),
	'demo_installing' => esc_html__('Installing Demo', 'eight-paper'),
	'demo_installed' => esc_html__('Demo Installed', 'eight-paper'),
	'demo_confirm' => esc_html__('Are you sure to import demo content ?', 'eight-paper'),

	// Actions Required
	'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'eight-paper' ),
	'customize_theme_btn' => esc_html__( 'Customize Theme', 'eight-paper' ),
);

/**
 * Initiating Welcome Page
*/
$my_theme_wc_page = new Eight_Paper_Welcome( $plugins, $strings );