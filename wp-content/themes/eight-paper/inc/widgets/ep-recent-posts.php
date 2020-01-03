<?php
/**
 * ED: Recent Posts
 *
 * Widget to display latest posts with thumbnail.
 *
 * @package Eight_Paper
 */

class eight_paper_Recent_Posts extends WP_widget {

	/**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname' => 'eight_paper_recent_posts',
            'description' => __( 'A widget shows recent posts with thumbnail.', 'eight-paper' )
        );
        parent::__construct( 'eight_paper_recent_posts', __( 'ED: Posts List', 'eight-paper' ), $widget_ops );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {

        $fields = array(

            'widget_title' => array(
                'eight_paper_widgets_name'         => 'widget_title',
                'eight_paper_widgets_title'        => __( 'Widget title', 'eight-paper' ),
                'eight_paper_widgets_field_type'   => 'text'
            ),

            'eight_paper_posts_count' => array(
                'eight_paper_widgets_name'         => 'eight_paper_posts_count',
                'eight_paper_widgets_title'        => __( 'No. of Posts', 'eight-paper' ),
                'eight_paper_widgets_default'      => '5',
                'eight_paper_widgets_field_type'   => 'number'
            ),
            'posts_layout' => array(
                'eight_paper_widgets_name'         => 'posts_layout',
                'eight_paper_widgets_title'        => __( 'Posts Layouts', 'eight-paper' ),
                'eight_paper_widgets_default'      => 'layout1',
                'eight_paper_widgets_field_type'   => 'selector',
                'eight_paper_widgets_field_options' => array(
                    'layout1' => esc_url( get_template_directory_uri() . '/assets/images/post-layout1.png' ),
                    'layout2' => esc_url( get_template_directory_uri() . '/assets/images/post-layout2.png' ),
                    'layout3' => esc_url( get_template_directory_uri() . '/assets/images/post-layout3.png' )
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

        $eight_paper_widget_title  = empty( $instance['widget_title'] ) ? '' : $instance['widget_title'];
        $eight_paper_posts_count   = empty( $instance['eight_paper_posts_count'] ) ? '' : $instance['eight_paper_posts_count'];
        $eight_paper_posts_layout   = empty( $instance['posts_layout'] ) ? 'layout1' : $instance['posts_layout'];

        $eight_paper_posts_args = array(
            'posts_per_page' => $eight_paper_posts_count
        );
        $eight_paper_post_query = new WP_Query( $eight_paper_posts_args );

        echo wp_kses_post($before_widget);
        ?>
        <div class="ep-recent-posts-wrapper <?php echo esc_attr($eight_paper_posts_layout);?>">
            <?php
            if( !empty( $eight_paper_widget_title ) ) {
                echo wp_kses_post($before_title) .'<span>'.esc_html( $eight_paper_widget_title ).'</span>'. wp_kses_post($after_title);
            }

            if( $eight_paper_post_query->have_posts() ) {
                echo '<ul class="ep-clearfix">';
                $epi = 1;
                while( $eight_paper_post_query->have_posts() ) {
                    $eight_paper_post_query->the_post();
                    ?>
                    <li>
                        <div class="ep-single-post ep-clearfix">
                            <?php 
                            if($eight_paper_posts_layout=='layout1'){
                                if(has_post_thumbnail()){
                                    ?>
                                    <div class="ep-post-thumb">
                                        <?php eight_paper_post_format();?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php 
                                            if(1== $epi){
                                                the_post_thumbnail( 'eight-paper-sidebar-widget' );
                                            }else{
                                                the_post_thumbnail( 'thumbnail' );
                                            }?>
                                        </a>
                                    </div><!-- .ep-post-thumb -->
                                    <?php
                                }
                            }
                            elseif($eight_paper_posts_layout=='layout2'){
                                echo '<div class="ep-post-thumb">';
                                if(1== $epi){
                                    if(has_post_thumbnail()){
                                        eight_paper_post_format();
                                        ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'eight-paper-sidebar-widget' );?>
                                        </a>
                                        <?php
                                    }
                                }
                                echo '<span>'.esc_html($epi).'</span>';
                                echo '</div>';
                            }else{
                                if(has_post_thumbnail()){
                                    echo '<div class="ep-post-thumb">';
                                    eight_paper_post_format();
                                    ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'eight-paper-sidebar-widget' );?>
                                    </a>
                                    <?php
                                    echo "</div>";
                                }
                            }
                            ?>
                            <div class="ep-post-content">
                                <h3 class="ep-post-title small-size"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="ep-post-meta">
                                    <?php
                                    eight_paper_post_date();
                                    if($eight_paper_posts_layout=='layout3'){
                                        eight_paper_posted_by();
                                    }else{
                                        if(1==$epi){
                                            eight_paper_posted_by();
                                        }
                                    }
                                    ?>
                                </div>
                            </div><!-- .ep-post-content -->
                        </div><!-- .ep-single-post -->
                    </li>
                    <?php
                    $epi++;
                }
                echo '</ul>';
            }
            wp_reset_postdata();
            ?>
        </div><!-- .ep-recent-posts-wrapper -->
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