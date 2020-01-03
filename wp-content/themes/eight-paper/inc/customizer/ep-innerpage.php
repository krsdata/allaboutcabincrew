<?php
/**
 * Eight_Paper Design Settings panel at Theme Customizer
 *
 * @package Eight_Paper
 */

add_action( 'customize_register', 'eight_paper_design_settings_register' );

function eight_paper_design_settings_register( $wp_customize ) {

	// Register the radio image control class as a JS control type.
    $wp_customize->register_control_type( 'eight_paper_Customize_Control_Radio_Image' );

	/**
     * Add Design Settings Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
     'eight_paper_design_settings_panel',
     array(
         'priority'       => 90,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Innerpage Design Settings', 'eight-paper' ),
     )
 );

    /*---------------------------------------------------------------------------------------------------------------*/
    /**
     * Archive Settings
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
        'eight_paper_archive_settings_section',
        array(
            'title'     => esc_html__( 'Archive Settings', 'eight-paper' ),
            'panel'     => 'eight_paper_design_settings_panel',
            'priority'  => 5,
        )
    );      

    /**
     * Image Radio field for archive sidebar
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'eight_paper_archive_sidebar',
        array(
            'default'           => 'right_sidebar',
            'sanitize_callback' => 'sanitize_key',
        )
    );
    $wp_customize->add_control( new eight_paper_Customize_Control_Radio_Image(
        $wp_customize,
        'eight_paper_archive_sidebar',
        array(
            'label'    => esc_html__( 'Archive Sidebars', 'eight-paper' ),
            'description' => esc_html__( 'Choose sidebar from available layouts', 'eight-paper' ),
            'section'  => 'eight_paper_archive_settings_section',
            'choices'  => array(
                'left_sidebar' => array(
                    'label' => esc_html__( 'Left Sidebar', 'eight-paper' ),
                    'url'   => '%s/assets/images/left-sidebar.png'
                ),
                'right_sidebar' => array(
                    'label' => esc_html__( 'Right Sidebar', 'eight-paper' ),
                    'url'   => '%s/assets/images/right-sidebar.png'
                ),
                'no_sidebar' => array(
                    'label' => esc_html__( 'No Sidebar', 'eight-paper' ),
                    'url'   => '%s/assets/images/no-sidebar.png'
                )
            ),
            'priority' => 5
        )
    )
);

    /**
     * Image Radio field for archive layout
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'eight_paper_archive_layout',
        array(
            'default'           => 'classic',
            'sanitize_callback' => 'sanitize_key',
        )
    );
    $wp_customize->add_control( new eight_paper_Customize_Control_Radio_Image(
        $wp_customize,
        'eight_paper_archive_layout',
        array(
            'label'    => esc_html__( 'Archive Layouts', 'eight-paper' ),
            'description' => esc_html__( 'Choose layout from available layouts', 'eight-paper' ),
            'section'  => 'eight_paper_archive_settings_section',
            'choices'  => array(
                'classic' => array(
                    'label' => esc_html__( 'Classic', 'eight-paper' ),
                    'url'   => '%s/assets/images/archive-layout1.png'
                ),
                'grid' => array(
                    'label' => esc_html__( 'Grid', 'eight-paper' ),
                    'url'   => '%s/assets/images/block-layout3.png'
                )
            ),
            'priority' => 10
        )
    )
);

    /**
     * Text field for archive read more
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'eight_paper_archive_read_more_text',
        array(
            'default'      => __( 'Continue Reading', 'eight-paper' ),
            'transport'    => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'eight_paper_archive_read_more_text',
        array(
            'type'      	=> 'text',
            'label'        	=> esc_html__( 'Read More Text', 'eight-paper' ),
            'description'  	=> __( 'Enter read more button text for archive page.', 'eight-paper' ),
            'section'   	=> 'eight_paper_archive_settings_section',
            'priority'  	=> 15
        )
    );
    $wp_customize->selective_refresh->add_partial( 
        'eight_paper_archive_read_more_text', 
        array(
            'selector' => '.nv-archive-more > a',
            'render_callback' => 'eight_paper_customize_partial_archive_more',
        )
    );

    /*---------------------------------------------------------------------------------------------------------------*/
    /**
     * Page Settings
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
        'eight_paper_page_settings_section',
        array(
            'title'     => esc_html__( 'Page Settings', 'eight-paper' ),
            'panel'     => 'eight_paper_design_settings_panel',
            'priority'  => 10,
        )
    );      

    /**
     * Image Radio for page sidebar
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'eight_paper_default_page_sidebar',
        array(
            'default'           => 'right_sidebar',
            'sanitize_callback' => 'sanitize_key',
        )
    );
    $wp_customize->add_control( new eight_paper_Customize_Control_Radio_Image(
        $wp_customize,
        'eight_paper_default_page_sidebar',
        array(
            'label'    => esc_html__( 'Page Sidebars', 'eight-paper' ),
            'description' => esc_html__( 'Choose sidebar from available layouts', 'eight-paper' ),
            'section'  => 'eight_paper_page_settings_section',
            'choices'  => array(
                'left_sidebar' => array(
                    'label' => esc_html__( 'Left Sidebar', 'eight-paper' ),
                    'url'   => '%s/assets/images/left-sidebar.png'
                ),
                'right_sidebar' => array(
                    'label' => esc_html__( 'Right Sidebar', 'eight-paper' ),
                    'url'   => '%s/assets/images/right-sidebar.png'
                ),
                'no_sidebar' => array(
                    'label' => esc_html__( 'No Sidebar', 'eight-paper' ),
                    'url'   => '%s/assets/images/no-sidebar.png'
                )
            ),
            'priority' => 5
        )
    )
);

    /*---------------------------------------------------------------------------------------------------------------*/
    /**
     * Post Settings
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
        'eight_paper_post_settings_section',
        array(
            'title'     => esc_html__( 'Post Settings', 'eight-paper' ),
            'panel'     => 'eight_paper_design_settings_panel',
            'priority'  => 15,
        )
    );      

    /**
     * Image Radio for post sidebar
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'eight_paper_default_post_sidebar',
        array(
            'default'           => 'right_sidebar',
            'sanitize_callback' => 'sanitize_key',
        )
    );
    $wp_customize->add_control( new eight_paper_Customize_Control_Radio_Image(
        $wp_customize,
        'eight_paper_default_post_sidebar',
        array(
            'label'    => esc_html__( 'Post Sidebars', 'eight-paper' ),
            'description' => esc_html__( 'Choose sidebar from available layouts', 'eight-paper' ),
            'section'  => 'eight_paper_post_settings_section',
            'choices'  => array(
                'left_sidebar' => array(
                    'label' => esc_html__( 'Left Sidebar', 'eight-paper' ),
                    'url'   => '%s/assets/images/left-sidebar.png'
                ),
                'right_sidebar' => array(
                    'label' => esc_html__( 'Right Sidebar', 'eight-paper' ),
                    'url'   => '%s/assets/images/right-sidebar.png'
                ),
                'no_sidebar' => array(
                    'label' => esc_html__( 'No Sidebar', 'eight-paper' ),
                    'url'   => '%s/assets/images/no-sidebar.png'
                )
            ),
            'priority' => 5
        )
    )
);

    /**
     * Switch option for Related posts
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'eight_paper_related_posts_option',
        array(
            'default' => 'show',
            'sanitize_callback' => 'eight_paper_sanitize_switch_option',
        )
    );
    $wp_customize->add_control( new eight_paper_Customize_Switch_Control(
        $wp_customize,
        'eight_paper_related_posts_option',
        array(
            'type'      => 'switch',
            'label'     => esc_html__( 'Related Post Option', 'eight-paper' ),
            'description'   => esc_html__( 'Show/Hide option for related posts section at single post page.', 'eight-paper' ),
            'section'   => 'eight_paper_post_settings_section',
            'choices'   => array(
                'show'  => esc_html__( 'Show', 'eight-paper' ),
                'hide'  => esc_html__( 'Hide', 'eight-paper' )
            ),
            'priority'  => 10,
        )
    )
);

    /**
     * Text field for related post section title
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
        'eight_paper_related_posts_title',
        array(
            'default'    => __( 'Related Posts', 'eight-paper' ),
            'transport'  => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'eight_paper_related_posts_title',
        array(
            'type'      => 'text',
            'label'     => esc_html__( 'Related Post Section Title', 'eight-paper' ),
            'section'   => 'eight_paper_post_settings_section',
            'priority'  => 15
        )
    );
    $wp_customize->selective_refresh->add_partial(
        'eight_paper_related_posts_title', 
        array(
            'selector' => 'h2.nv-related-title',
            'render_callback' => 'eight_paper_customize_partial_related_title',
        )
    );
}