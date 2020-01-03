<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Eight_Paper
 */


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function eight_paper_body_classes( $classes ) {

    global $post;
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    /**
     * Sidebar option for post/page/archive
     *
     * @since 1.0.0
     */
    if( 'post' === get_post_type() ) {
        $sidebar_meta_option = get_post_meta( $post->ID, 'ep_single_post_sidebar', true );
    }

    if( 'page' === get_post_type() ) {
        $sidebar_meta_option = get_post_meta( $post->ID, 'ep_single_post_sidebar', true );
    }

    if( is_home() ) {
        $home_id = get_option( 'page_for_posts' );
        $sidebar_meta_option = get_post_meta( $home_id, 'ep_single_post_sidebar', true );
    }
    
    if( empty( $sidebar_meta_option ) || is_archive() || is_search() ) {
        $sidebar_meta_option = 'default_sidebar';
    }
    $archive_sidebar        = get_theme_mod( 'eight_paper_archive_sidebar', 'right_sidebar' );
    $post_default_sidebar   = get_theme_mod( 'eight_paper_default_post_sidebar', 'right_sidebar' );        
    $page_default_sidebar   = get_theme_mod( 'eight_paper_default_page_sidebar', 'right_sidebar' );
    
    if( $sidebar_meta_option == 'default_sidebar' ) {
        if( is_single() ) {
            if( $post_default_sidebar == 'right_sidebar' ) {
                $classes[] = 'right-sidebar';
            } elseif( $post_default_sidebar == 'left_sidebar' ) {
                $classes[] = 'left-sidebar';
            } elseif( $post_default_sidebar == 'no_sidebar' ) {
                $classes[] = 'no-sidebar';
            } elseif( $post_default_sidebar == 'no_sidebar_center' ) {
                $classes[] = 'no-sidebar-center';
            }
        } elseif( is_page() && !is_page_template( 'templates/tpl-home.php' ) ) {
            if( $page_default_sidebar == 'right_sidebar' ) {
                $classes[] = 'right-sidebar';
            } elseif( $page_default_sidebar == 'left_sidebar' ) {
                $classes[] = 'left-sidebar';
            } elseif( $page_default_sidebar == 'no_sidebar' ) {
                $classes[] = 'no-sidebar';
            } elseif( $page_default_sidebar == 'no_sidebar_center' ) {
                $classes[] = 'no-sidebar-center';
            }
        } elseif( $archive_sidebar == 'right_sidebar' ) {
            $classes[] = 'right-sidebar';
        } elseif( $archive_sidebar == 'left_sidebar' ) {
            $classes[] = 'left-sidebar';
        } elseif( $archive_sidebar == 'no_sidebar' ) {
            $classes[] = 'no-sidebar';
        } elseif( $archive_sidebar == 'no_sidebar_center' ) {
            $classes[] = 'no-sidebar-center';
        }
    } elseif( $sidebar_meta_option == 'right_sidebar' ) {
        $classes[] = 'right-sidebar';
    } elseif( $sidebar_meta_option == 'left_sidebar' ) {
        $classes[] = 'left-sidebar';
    } elseif( $sidebar_meta_option == 'no_sidebar' ) {
        $classes[] = 'no-sidebar';
    } elseif( $sidebar_meta_option == 'no_sidebar_center' ) {
        $classes[] = 'no-sidebar-center';
    }

    /**
     * option for web site layout 
     */
    $eight_paper_website_layout = esc_attr( get_theme_mod( 'eight_paper_site_layout', 'ep-fullwidth' ) );
    
    if( !empty( $eight_paper_website_layout ) ) {
        $classes[] = $eight_paper_website_layout;
    }

    /**
     * Class for archive
     */
    if( is_archive() ) {
        $eight_paper_archive_layout = get_theme_mod( 'eight_paper_archive_layout', 'classic' );
        if( !empty( $eight_paper_archive_layout ) ) {
            $classes[] = 'archive-'.$eight_paper_archive_layout;
        }
    }

    return $classes;
}
add_filter( 'body_class', 'eight_paper_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function eight_paper_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'eight_paper_pingback_header' );

/**
 * Category list
 *
 * @return array();
 */

if( !function_exists( 'eight_paper_categories_lists' ) ):
    function eight_paper_categories_lists() {
        $eight_paper_cat_args = array(
            'type'       => 'post',
            'child_of'   => 0,
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => 1,
            'taxonomy'   => 'category',
        );
        $eight_paper_categories = get_categories( $eight_paper_cat_args );
        $eight_paper_categories_lists = array();
        foreach( $eight_paper_categories as $category ) {
            $eight_paper_categories_lists[esc_attr( $category->slug )] = esc_html( $category->name );
        }
        return $eight_paper_categories_lists;
    }
endif;
/**
 * Post Categories list
 *
 * @since 1.0.0
 */
if( ! function_exists( 'eight_paper_post_categories_list' ) ):
	function eight_paper_post_categories_list() {
		global $post;
		$post_id = $post->ID;
		$categories_list = get_the_category($post_id);
		if( !empty( $categories_list ) ) {
            ?>
            <div class="post-cats-list ep-clearfix">
               <?php 
               foreach ( $categories_list as $cat_data ) {
                 $cat_name = $cat_data->name;
                 $cat_id = $cat_data->term_id;
                 $cat_link = get_category_link( $cat_id );
                 ?>
                 <span class="category-button ep-cat-<?php echo esc_attr( $cat_id ); ?>"><a href="<?php echo esc_url( $cat_link ); ?>"><?php echo esc_html( $cat_name ); ?></a></span>
                 <?php 
             }
             ?>
         </div>
         <?php
     }
 }
endif;
/**
 * Post date for hoemapge posts
 */
if( ! function_exists( 'eight_paper_post_date' ) ) :
	function eight_paper_post_date() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( ' %s', 'post date', 'eight-paper' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
		echo '<span class="posted-on">' . $posted_on . '</span>';
	}
endif;


/**
 * Register Google fonts for Eight Paper.
 *
 * @return string Google fonts URL for the theme.
 * @since 1.0.0
 */
if ( ! function_exists( 'eight_paper_fonts_url' ) ) :
    function eight_paper_fonts_url() {
        $fonts_url = '';
        $font_families = array();

        /*
         * Translators: If there are characters in your language that are not supported
         * by Roboto, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Roboto font: on or off', 'eight-paper' ) ) {
            $font_families[] = 'Roboto:300,400,500,700';
        }

        /*
         * Translators: If there are characters in your language that are not supported
         * by Titillium Web, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Frank Ruhl Libre font: on or off', 'eight-paper' ) ) {
            $font_families[] = 'Frank Ruhl Libre:300,400,700';
        }
        /*
         * Translators: If there are characters in your language that are not supported
         * by Titillium Web, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Lato font: on or off', 'eight-paper' ) ) {
            $font_families[] = 'Lato:300,400,700';
        }      

        if( $font_families ) {
            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            );

            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }

        return $fonts_url;
    }
endif;


/*---------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Function define about page/post/archive sidebar
 *
 * @since 1.0.0
 */
if( ! function_exists( 'eight_paper_get_sidebar' ) ):
    function eight_paper_get_sidebar() {
        global $post;

        if( 'post' === get_post_type() ) {
            $sidebar_meta_option = get_post_meta( $post->ID, 'ep_single_post_sidebar', true );
        }

        if( 'page' === get_post_type() ) {
            $sidebar_meta_option = get_post_meta( $post->ID, 'ep_single_post_sidebar', true );
        }

        if(is_home() || is_front_page()){
            if ( is_page_template('templates/tpl-home.php') ) {
                $set_id = get_option( 'page_on_front' );
                $sidebar_meta_option = get_post_meta( $set_id, 'ep_single_post_sidebar', true );
            }
            elseif( is_front_page() ) {
                $sidebar_meta_option = '';
            }
            elseif( is_home() ) {
                $set_id = get_option( 'page_for_posts' );
                $sidebar_meta_option = get_post_meta( $set_id, 'ep_single_post_sidebar', true );
            }
        }

        if( empty( $sidebar_meta_option ) || is_archive() || is_search() ) {
            $sidebar_meta_option = 'default_sidebar';
        }
        
        $archive_sidebar      = get_theme_mod( 'eight_paper_archive_sidebar', 'right_sidebar' );
        $post_default_sidebar = get_theme_mod( 'eight_paper_default_post_sidebar', 'right_sidebar' );
        $page_default_sidebar = get_theme_mod( 'eight_paper_default_page_sidebar', 'right_sidebar' );

        if( $sidebar_meta_option == 'default_sidebar' ) {
            if( is_single() ) {
                if( $post_default_sidebar == 'right_sidebar' ) {
                    get_sidebar();
                } elseif( $post_default_sidebar == 'left_sidebar' ) {
                    get_sidebar( 'left' );
                }
            } elseif( is_page() ) {
                if( $page_default_sidebar == 'right_sidebar' ) {
                    get_sidebar();
                } elseif( $page_default_sidebar == 'left_sidebar' ) {
                    get_sidebar( 'left' );
                }
            } elseif( $archive_sidebar == 'right_sidebar' ) {
                get_sidebar();
            } elseif( $archive_sidebar == 'left_sidebar' ) {
                get_sidebar( 'left' );
            }
        } elseif( $sidebar_meta_option == 'right_sidebar' ) {
            get_sidebar();
        } elseif( $sidebar_meta_option == 'left_sidebar' ) {
            get_sidebar( 'left' );
        }
    }
endif;



/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Related Posts start
 *
 * @since 1.0.0
 */
if( ! function_exists( 'eight_paper_related_posts_start' ) ) :
    function eight_paper_related_posts_start() {
        echo '<div class="ep-related-section-wrapper">';
    }
endif;

/**
 * Related Posts section
 *
 * @since 1.0.0
 */
if( ! function_exists( 'eight_paper_related_posts_section' ) ) :
    function eight_paper_related_posts_section() {
        $eight_paper_related_option = get_theme_mod( 'eight_paper_related_posts_option', 'show' );
        if( $eight_paper_related_option == 'hide' ) {
            return;
        }
        $eight_paper_related_title = get_theme_mod( 'eight_paper_related_posts_title', __( 'Related Posts', 'eight-paper' ) );
        if( !empty( $eight_paper_related_title ) ) {
            echo '<h2 class="ep-related-title ep-clearfix">'. esc_html( $eight_paper_related_title ) .'</h2>';
        }
        global $post;
        if( empty( $post ) ) {
            $post_id = '';
        } else {
            $post_id = $post->ID;
        }
        $categories = get_the_category( $post_id );
        if ( $categories ) {
            $category_ids = array();
            foreach( $categories as $category_ed ) {
                $category_ids[] = $category_ed->term_id;
            }
        }
        $eight_paper_post_count = apply_filters( 'eight_paper_related_posts_count', 3 );
        
        $related_args = array(
            'no_found_rows'             => true,
            'update_post_meta_cache'    => false,
            'update_post_term_cache'    => false,
            'ignore_sticky_posts'       => 1,
            'orderby'                   => 'rand',
            'post__not_in'              => array( $post_id ),
            'category__in'              => $category_ids,
            'posts_per_page'            => $eight_paper_post_count
        );
        $related_query = new WP_Query( $related_args );
        if( $related_query->have_posts() ) {
            echo '<div class="ep-related-posts-wrap ep-clearfix">';
            while( $related_query->have_posts() ) {
                $related_query->the_post();
                ?>
                <div class="ep-single-post">
                    <div class="ep-post-thumb">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'eight-paper-block-four' ); ?>
                        </a>
                    </div><!-- .ep-post-thumb -->
                    <div class="ep-post-content">
                        <h3 class="ep-post-title small-size"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="ep-post-meta">
                            <?php eight_paper_posted_on(); ?>
                        </div>
                    </div><!-- .ep-post-content -->
                </div><!-- .ep-single-post -->
                <?php
            }
            echo '</div><!-- .ep-related-posts-wrap -->';
        }
        wp_reset_postdata();
    }
endif;

/**
 * Related Posts end
 *
 * @since 1.0.0
 */
if( ! function_exists( 'eight_paper_related_posts_end' ) ) :
    function eight_paper_related_posts_end() {
        echo '</div><!-- .ep-related-section-wrapper -->';
    }
endif;

/**
 * Managed functions for related posts section
 *
 * @since 1.0.0
 */
add_action( 'eight_paper_related_posts', 'eight_paper_related_posts_start', 5 );
add_action( 'eight_paper_related_posts', 'eight_paper_related_posts_section', 10 );
add_action( 'eight_paper_related_posts', 'eight_paper_related_posts_end', 15 );



/** rgb from hex color code */
/* Convert hexdec color string to rgb(a) string */ 
if(!function_exists('eight_paper_hex2rgba')){
    function eight_paper_hex2rgba($color, $opacity = false) {

        $default = 'rgb(0,0,0)';

     //Return default if no color provided
        if(empty($color))
            return $default; 

            //Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
            $color = substr( $color, 1 );
        }

            //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
            return $default;
        }

            //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);

            //Check if opacity is set(rgba or rgb)
        if($opacity){
            if(abs($opacity) > 1)
                $opacity = 1.0;
            $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(",",$rgb).')';
        }

            //Return rgb(a) color string
        return $output;
    }
}


if ( ! function_exists( 'eight_paper_the_post_navigation' ) ) :

    function eight_paper_the_post_navigation() {
        ?>
        <nav class="navigation post-navigation" role="navigation">
            <h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'eight-paper' ); ?></h2>
            <div class="nav-links ep-clearfix">
                <?php 
                // FOR PREVIOUS POST
                $prev_post = get_previous_post(); 
                if ( is_a( $prev_post , 'WP_Post' ) ) {
                    $id = $prev_post->ID ;
                    $permalink = get_permalink( $id );
                    ?>
                    <div class="previous-timeline">
                        <div class="prev-image-wrap">
                            <?php echo get_the_post_thumbnail($prev_post,'thumbnail')?>
                        </div>
                        <div class="prev-text-wrap">
                            <?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'eight-paper' ) ); ?> 
                            <h2><a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($prev_post->post_title); ?></a>
                            </h2>                           
                            <span><?php echo esc_html(mysql2date( get_option( 'date_format' ), $prev_post->post_date ));?></span>
                        </div>
                    </div>
                <?php }
                // FOR Next POST
                $next_post = get_next_post();
                if ( is_a( $next_post , 'WP_Post' ) ) {
                    $nid = $next_post->ID ;
                    $npermalink = get_permalink($nid);
                    ?>
                    <div class="next-timeline">
                        <div class="next-image-wrap">
                            <?php echo get_the_post_thumbnail($next_post,'thumbnail')?>
                        </div>
                        <div class="next-text-wrap">
                            <?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'eight-paper' ) ); ?>
                            <h2><a href="<?php echo esc_url($npermalink); ?>"><?php echo esc_html($next_post->post_title); ?></a>
                            </h2>
                            <span><?php echo esc_html(mysql2date( get_option( 'date_format' ), $next_post->post_date ));?></span>
                        </div>
                    </div>
                <?php }?>
            </div><!-- .nav-links -->
        </nav><!-- .navigation -->
        <?php
    }
endif;



/** adding ocdi compatibility */
function eight_paper_ocdi_import_files() {
    return array(
        array(
            'import_file_name'             => 'Eight Paper Demo',
            //'categories'                   => array( 'Category 1', 'Category 2' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'welcome/demo/eight-paper/content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'welcome/demo/eight-paper/widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'welcome/demo/eight-paper/customizer_options.dat',
            'import_preview_image_url'     => get_template_directory_uri().'/screenshot.png',
            'import_notice'                => __( 'After you import this demo, you might have to setup the menu separately.', 'eight-paper' ),
            'preview_url'                  => 'https://8degreethemes.com/demo/eight-paper/',
        )
    );
}
add_filter( 'pt-ocdi/import_files', 'eight_paper_ocdi_import_files' );


function eight_paper_ocdi_after_import( $selected_import ) {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
        'menu-1' => $main_menu->term_id,
    ));

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
}
add_action( 'pt-ocdi/after_import', 'eight_paper_ocdi_after_import' );