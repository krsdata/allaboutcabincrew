<?php
/**
 * ED: Featured Posts
 *
 * Widget show the featured posts from selected categories in different layouts.
 *
 * @package Eight_Paper
 */

class eight_paper_Featured_Posts extends WP_widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname' => 'eight_paper_featured_posts',
            'description' => __( 'Displays featured posts from selected categories in different layouts.', 'eight-paper' )
        );
        parent::__construct( 'eight_paper_featured_posts', __( 'ED: Featured Posts', 'eight-paper' ), $widget_ops );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {

        $eight_paper_categories_lists = eight_paper_categories_lists();
        
        $fields = array(

            'block_title' => array(
                'eight_paper_widgets_name'         => 'block_title',
                'eight_paper_widgets_title'        => __( 'Block title', 'eight-paper' ),
                'eight_paper_widgets_description'  => __( 'Enter your block title. (Optional - Leave blank to hide title.)', 'eight-paper' ),
                'eight_paper_widgets_field_type'   => 'text'
            ),

            'block_cat_slugs' => array(
                'eight_paper_widgets_name'         => 'block_cat_slugs',
                'eight_paper_widgets_title'        => __( 'Block Categories', 'eight-paper' ),
                'eight_paper_widgets_description'  => __( 'Shows maximum of 3 posts from each categories selected', 'eight-paper' ),
                'eight_paper_widgets_field_type'   => 'multicheckboxes',
                'eight_paper_widgets_field_options' => $eight_paper_categories_lists
            ),
            'block_layout' => array(
                'eight_paper_widgets_name'         => 'block_layout',
                'eight_paper_widgets_title'        => __( 'Featured Posts Layouts', 'eight-paper' ),
                'eight_paper_widgets_default'      => 'layout1',
                'eight_paper_widgets_field_type'   => 'selector',
                'eight_paper_widgets_field_options' => array(
                    'layout1' => esc_url( get_template_directory_uri() . '/assets/images/feat-layout1.png' ),
                    'layout2' => esc_url( get_template_directory_uri() . '/assets/images/feat-layout2.png' ),
                )
            ),

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

        $eight_paper_block_title     = empty( $instance['block_title'] ) ? '' : $instance['block_title'];
        $eight_paper_block_cat_slugs = empty( $instance['block_cat_slugs'] ) ? '' : $instance['block_cat_slugs'];
        $eight_paper_block_layout   = empty( $instance['block_layout'] ) ? 'layout1' : $instance['block_layout'];

        echo wp_kses_post($before_widget);
        ?>
        <div class="ep-block-wrapper featured-posts ep-clearfix <?php echo esc_attr( $eight_paper_block_layout ); ?>">
            <?php 
            if( !empty( $eight_paper_block_title ) ) {
                echo wp_kses_post($before_title) .'<span>'. esc_html( $eight_paper_block_title ) .'</span>'. wp_kses_post($after_title);
            }
            ?>
            <div class="ep-featured-posts-wrapper">
                <?php
                if( !empty( $eight_paper_block_cat_slugs ) ) {
                    $checked_cats = array();
                    foreach( $eight_paper_block_cat_slugs as $cat_key => $cat_value ){
                        $checked_cats[] = $cat_key;
                    }
                    if($eight_paper_block_layout=='layout2'){
                        $no_of_posts = 3;
                        foreach ($checked_cats as $get_checked_cat_slugs) {
                            echo '<div class="ep-feat-cat-wrap">';
                            $widget_title_args = array(
                                'title'    => '',
                                'cat_slug' => $get_checked_cat_slugs
                            );
                            do_action( 'eight_paper_widget_title', $widget_title_args );
                            $eight_paper_post_count = apply_filters( 'eight_paper_featured_posts_count', $no_of_posts );
                            $eight_paper_posts_args = array(
                                'post_type'      => 'post',
                                'category_name'  => wp_kses_post( $get_checked_cat_slugs ),
                                'posts_per_page' => absint( $eight_paper_post_count )
                            );
                            $eight_paper_posts_query = new WP_Query( $eight_paper_posts_args );
                            if( $eight_paper_posts_query->have_posts() ) {
                                $epi=1;
                                while( $eight_paper_posts_query->have_posts() ) {
                                    $eight_paper_posts_query->the_post();
                                    ?>
                                    <div class="ep-single-post-wrap ep-clearfix">
                                        <div class="ep-single-post">
                                            <?php if(1==$epi){
                                                if(has_post_thumbnail()){ ?>
                                                    <div class="ep-post-thumb">
                                                        <?php eight_paper_post_format();?>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php
                                                            if( has_post_thumbnail() ) {
                                                                the_post_thumbnail( 'eight-paper-featured-cat' );
                                                            }
                                                            ?>
                                                        </a>
                                                    </div><!-- .ep-post-thumb -->
                                                <?php }
                                            } ?>
                                            <div class="ep-post-content">
                                                <h3 class="ep-post-title small-size"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <?php if(1==$epi){ ?>
                                                    <div class="ep-post-meta ep-post-date">
                                                        <?php eight_paper_post_date();?>
                                                    </div>
                                                <?php } ?>
                                            </div><!-- .ep-post-content -->
                                        </div> <!-- ep-single-post -->
                                    </div><!-- .ep-single-post-wrap -->
                                    <?php
                                    $epi++;
                                }
                            }
                            echo '</div>';
                        }
                    }else{
                        $no_of_cats = count($checked_cats);
                        $no_of_posts = (int)$no_of_cats*3;
                        $get_checked_cat_slugs   = implode( ",", $checked_cats );
                        $eight_paper_post_count = apply_filters( 'eight_paper_featured_posts_count', $no_of_posts );
                        $eight_paper_posts_args = array(
                            'post_type'      => 'post',
                            'category_name'  => wp_kses_post( $get_checked_cat_slugs ),
                            'posts_per_page' => absint( $eight_paper_post_count )
                        );
                        $eight_paper_posts_query = new WP_Query( $eight_paper_posts_args );
                        echo '<div class="featured-slider-posts">';
                        if( $eight_paper_posts_query->have_posts() ) {
                            echo '<ul id="npSlider" class="cS-hidden ep-feat-slider">';
                            while( $eight_paper_posts_query->have_posts() ) {
                                $eight_paper_posts_query->the_post();
                                ?>
                                <li>
                                    <div class="ep-single-post-wrap ep-clearfix">
                                        <div class="ep-single-post">
                                            <div class="ep-post-thumb">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php
                                                    if( has_post_thumbnail() ) {
                                                        the_post_thumbnail( 'eight-paper-featured-medium' );
                                                    }
                                                    ?>
                                                </a>
                                            </div><!-- .ep-post-thumb -->
                                            <div class="ep-post-content">
                                                <div class="ep-post-meta ep-post-date">
                                                    <?php eight_paper_post_date();?>
                                                </div>
                                                <h3 class="ep-post-title small-size"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <div class="ep-post-meta ep-post-cate">
                                                    <?php eight_paper_post_categories_list(); ?>
                                                </div>
                                            </div><!-- .ep-post-content -->
                                        </div> <!-- ep-single-post -->
                                    </div><!-- .ep-single-post-wrap -->
                                </li>
                                <?php
                            }
                            echo '</ul>';
                        }
                        echo '</div>';
                    }
                }
                ?>
            </div><!-- .ep-featured-posts-wrapper -->
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