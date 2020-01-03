<?php
/**
 * ED: Featured Slider
 *
 * Widget to display posts from selected categories in featured slider ( slider + featured section )
 *
 * @package Eight_Paper
 */

class eight_paper_Featured_Slider extends WP_widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname' => 'eight_paper_featured_slider',
            'description' => __( 'Displays posts from selected categories in slider with featured section.', 'eight-paper' )
        );
        parent::__construct( 'eight_paper_featured_slider', __( 'ED: Featured Slider', 'eight-paper' ), $widget_ops );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {

        $eight_paper_categories_lists = eight_paper_categories_lists();

        $fields = array(
            'slider_cat_slugs' => array(
                'eight_paper_widgets_name'         => 'slider_cat_slugs',
                'eight_paper_widgets_title'        => __( 'Slider Categories', 'eight-paper' ),
                'eight_paper_widgets_description'        => __( 'Selects maximum of 4 posts from all categories', 'eight-paper' ),
                'eight_paper_widgets_field_type'   => 'multicheckboxes',
                'eight_paper_widgets_field_options' => $eight_paper_categories_lists
            ),

            'featured_cat_slugs' => array(
                'eight_paper_widgets_name'         => 'featured_cat_slugs',
                'eight_paper_widgets_title'        => __( 'Featured Post Categories', 'eight-paper' ),
                'eight_paper_widgets_description'        => __( 'Selects maximum of 3 posts from all categories', 'eight-paper' ),
                'eight_paper_widgets_field_type'   => 'multicheckboxes',
                'eight_paper_widgets_field_options' => $eight_paper_categories_lists
            )
        );
        return $fields;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        if( empty( $instance ) ) {
            return ;
        }

        $eight_paper_slider_cat_slugs    = empty( $instance['slider_cat_slugs'] ) ? '' : $instance['slider_cat_slugs'];
        $eight_paper_featured_cat_slugs  = empty( $instance['featured_cat_slugs'] ) ? '' : $instance['featured_cat_slugs'];

        echo wp_kses_post($before_widget);
        ?>
        <div class="ep-block-wrapper ep-clearfix">
            <div class="slider-posts">
                <?php
                if( !empty( $eight_paper_slider_cat_slugs ) ) {
                    $checked_cats = array();
                    foreach( $eight_paper_slider_cat_slugs as $cat_key => $cat_value ){
                        $checked_cats[] = $cat_key;
                    }
                    $get_checked_cat_slugs = implode( ",", $checked_cats );
                    $eight_paper_post_count = apply_filters( 'eight_paper_slider_posts_count', 4 );
                    $eight_paper_slider_args = array(
                        'post_type'      => 'post',
                        'category_name'  => wp_kses_post( $get_checked_cat_slugs ),
                        'posts_per_page' => absint( $eight_paper_post_count )
                    );
                    $eight_paper_slider_query = new WP_Query( $eight_paper_slider_args );
                    if( $eight_paper_slider_query->have_posts() ) {
                        echo '<ul id="npSlider" class="cS-hidden ep-main-slider">';
                        while( $eight_paper_slider_query->have_posts() ) {
                            $eight_paper_slider_query->the_post();
                            if( has_post_thumbnail() ) {
                                ?>
                                <li>
                                    <div class="ep-single-slide-wrap">
                                        <div class="ep-slide-thumb">
                                            <?php eight_paper_post_format();?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail( 'eight-paper-slider-medium' ); ?>
                                            </a>
                                        </div><!-- .ep-slide-thumb -->
                                        <div class="ep-slide-content-wrap">
                                            <?php eight_paper_post_categories_list(); ?>
                                            <h3 class="ep-post-title large-size"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div> <!-- ep-slide-content-wrap -->
                                    </div><!-- .single-slide-wrap -->
                                </li>
                                <?php
                            }
                        }
                        echo '</ul>';
                    }
                    wp_reset_postdata();
                }
                ?>
            </div><!-- .slider-posts -->
            <div class="slider-featured-posts">
                <div class="featured-posts-wrapper ep-clearfix">
                    <?php
                    if( !empty( $eight_paper_featured_cat_slugs ) ) {
                        $checked_cats = array();
                        foreach( $eight_paper_featured_cat_slugs as $cat_key => $cat_value ){
                            $checked_cats[] = $cat_key;
                        }
                        $get_checked_cat_slugs = implode( ",", $checked_cats );
                        $eight_paper_post_count = apply_filters( 'eight_paper_slider_featured_posts_count', 3 );
                        $eight_paper_slider_args = array(
                            'post_type'      => 'post',
                            'category_name'  => wp_kses_post( $get_checked_cat_slugs ),
                            'posts_per_page' => absint( $eight_paper_post_count )
                        );
                        $eight_paper_slider_query = new WP_Query( $eight_paper_slider_args );
                        if( $eight_paper_slider_query->have_posts() ) {
                            while( $eight_paper_slider_query->have_posts() ) {
                                $eight_paper_slider_query->the_post();
                                ?>
                                <div class="ep-single-post-wrap ep-clearfix">
                                    <div class="ep-single-post">
                                        <div class="wp-img-title-wrap">
                                            <?php if( has_post_thumbnail() ) {?>
                                                <div class="ep-post-thumb">
                                                    <?php eight_paper_post_format();?>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail( 'thumbnail' );?>
                                                    </a>
                                                </div><!-- .ep-post-thumb -->
                                                <?php
                                            }?>
                                            <div class="wp-title-cat">
                                                <?php eight_paper_post_categories_list(); ?>
                                                <h3 class="ep-post-title medium-size"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                        </div>
                                        <div class="ep-post-content">
                                            <div class="ep-post-excerpt">
                                                <?php the_excerpt();?>
                                            </div>
                                            <div class="ep-post-meta">
                                                <?php
                                                eight_paper_post_date();
                                                eight_paper_posted_by();
                                                ?>
                                            </div>
                                        </div><!-- .ep-post-content -->
                                    </div> <!-- ep-single-post -->
                                </div><!-- .ep-single-post-wrap -->

                                <?php
                            }
                        }
                        wp_reset_postdata();
                    }
                    ?>
                    </div>
                    </div><!-- .featured-posts -->
                    </div><!--- .ep-block-wrapper -->
                    <?php
                    echo wp_kses_post($after_widget);
                }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param   array   $new_instance   Values just sent to be saved.
     * @param   array   $old_instance   Previously saved values from database.
     *
     * @uses    eight_paper_widgets_updated_field_value()     defined in ep-widget-fields.php
     *
     * @return  array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ( $widget_fields as $widget_field ) {

            extract( $widget_field );

            // Use helper function to get updated field values
            $instance[$eight_paper_widgets_name] = eight_paper_widgets_updated_field_value( $widget_field, $new_instance[$eight_paper_widgets_name] );
        }

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param   array $instance Previously saved values from database.
     *
     * @uses    eight_paper_widgets_show_widget_field()       defined in ep-widget-fields.php
     */
    public function form( $instance ) {
        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ( $widget_fields as $widget_field ) {

            // Make array elements available as variables
            extract( $widget_field );
            $eight_paper_widgets_field_value = !empty( $instance[$eight_paper_widgets_name] ) ? wp_kses_post( $instance[$eight_paper_widgets_name] ) : '';
            eight_paper_widgets_show_widget_field( $this, $widget_field, $eight_paper_widgets_field_value );
        }
    }
}