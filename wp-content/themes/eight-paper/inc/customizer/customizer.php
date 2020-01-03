<?php
/**
 * Eight Paper Theme Customizer
 *
 * @package Eight_Paper
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function eight_paper_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'eight_paper_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'eight_paper_customize_partial_blogdescription',
		) );
	}

	//footer sections
	$wp_customize->add_section( 'eight_paper_site_layout_section', array(
		'title'			=>	esc_html__( 'Website Layout','eight-paper' ),
		'priority'		=>	10,
	) );
	$wp_customize->add_setting('eight_paper_site_layout',array(
		'default' => 'ep-fullwidth',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'eight_paper_sanitize_site_layout',
	) );

	$wp_customize->add_control('eight_paper_site_layout', array(
		'type' => 'radio',
		'label' => esc_html__( 'Website Layout', 'eight-paper' ),
		'section' => 'eight_paper_site_layout_section',
		'setting' => 'eight_paper_site_layout',
		'choices' => array('ep-fullwidth'=>__('Full Width Layout','eight-paper'),
			'ep-boxed' => __('Boxed Layout', 'eight-paper')
		)
	) );

	//footer sections
	$wp_customize->add_section( 'eight_paper_footer', array(
		'title'			=>	esc_html__( 'Footer Setting','eight-paper' ),
		'priority'		=>	80,
	) );
	$wp_customize->add_setting('eight_paper_footer_copyright',array(
		'default' => __('Copyright 2018','eight-paper'),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control('eight_paper_footer_copyright', array(
		'type' => 'textarea',
		'label' => esc_html__( 'Copyright Text', 'eight-paper' ),
		'description'	=> esc_html__(' Enter the copyright text to show on the footer.','eight-paper' ),
		'section' => 'eight_paper_footer',
		'setting' => 'eight_paper_footer_copyright'
	) );

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'eight_paper_footer_copyright', array(
			'selector'        => '.site-info .copyright-wrap',
			'render_callback' => 'eight_paper_customize_partial_footer_copyright',
		) );
	}

}
add_action( 'customize_register', 'eight_paper_customize_register' );
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function eight_paper_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function eight_paper_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render the footer Copyright for the selective refresh partial.
 *
 * @return void
 */
function eight_paper_customize_partial_footer_copyright() {
	get_theme_mod('eight_paper_footer_copyright',__('Copyright &copy; 2018','eight-paper'));
}
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function eight_paper_customize_preview_js() {
	wp_enqueue_script( 'eight-paper-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'eight_paper_customize_preview_js' );


/**
 * Sanitize checkbox value
 *
 * @since 1.0.1
 */
function eight_paper_sanitize_checkbox( $input ) {
    //returns true if checkbox is checked
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

/**
 * Sanitize site layout
 *
 * @since 1.0.0
 */
function eight_paper_sanitize_site_layout( $input ) {
	$valid_keys = array(
		'ep-fullwidth' => __( 'Fullwidth Layout', 'eight-paper' ),
		'ep-boxed'     => __( 'Boxed Layout', 'eight-paper' )
	);
	if ( array_key_exists( $input, $valid_keys ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * switch option (show/hide)
 *
 * @since 1.0.0
 */
function eight_paper_sanitize_switch_option( $input ) {
	$valid_keys = array(
		'show'  => __( 'Show', 'eight-paper' ),
		'hide'  => __( 'Hide', 'eight-paper' )
	);
	if ( array_key_exists( $input, $valid_keys ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * sanitize function for multiple checkboxes
 *
 * @since 1.0.0
 */
function eight_paper_sanitize_mulitple_checkbox( $values ) {

	$multi_values = !is_array( $values ) ? explode( ',', $values ) : $values;

	return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Eight Paper 1.0.0
 * @see eight_paper_design_settings_register()
 *
 * @return void
 */
function eight_paper_customize_partial_related_title() {
	return get_theme_mod( 'eight_paper_related_posts_title' );
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Eight Paper 1.0.0
 * @see eight_paper_design_settings_register()
 *
 * @return void
 */
function eight_paper_customize_partial_archive_more() {
	return get_theme_mod( 'eight_paper_archive_read_more_text' );
}