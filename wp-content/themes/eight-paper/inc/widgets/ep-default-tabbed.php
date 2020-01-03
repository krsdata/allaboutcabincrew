<?php
/**
 * ED: Default Tabbed
 *
 * Widget to display latest posts and comment in tabbed layout.
 *
 * @package Eight_Paper
 */

class eight_paper_Default_Tabbed extends WP_widget {

	/**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname' => 'eight_paper_default_tabbed',
            'description' => __( 'A widget shows recent posts and comment in tabbed layout.', 'eight-paper' )
        );
        parent::__construct( 'eight_paper_default_tabbed', __( 'ED: Default Tabbed', 'eight-paper' ), $widget_ops );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {

        $fields = array(

            'latest_tab_title' => array(
                'eight_paper_widgets_name'         => 'latest_tab_title',
                'eight_paper_widgets_title'        => __( 'Latest Tab title', 'eight-paper' ),
                'eight_paper_widgets_default'      => __( 'Latest', 'eight-paper' ),
                'eight_paper_widgets_field_type'   => 'text'
            ),

            'comments_tab_title' => array(
                'eight_paper_widgets_name'         => 'comments_tab_title',
                'eight_paper_widgets_title'        => __( 'Comments Tab title', 'eight-paper' ),
                'eight_paper_widgets_default'      => __( 'Comments', 'eight-paper' ),
                'eight_paper_widgets_field_type'   => 'text'
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

        $eight_paper_latest_title   = empty( $instance['latest_tab_title'] ) ? __( 'Latest', 'eight-paper' ) : $instance['latest_tab_title'];
        $eight_paper_comments_title  = empty( $instance['comments_tab_title'] ) ? __( 'Comments', 'eight-paper' ) : $instance['comments_tab_title'];

        echo wp_kses_post($before_widget);
        ?>
        <div class="ep-default-tabbed-wrapper ep-clearfix" id="ep-tabbed-widget">

            <ul class="widget-tabs ep-clearfix" id="ep-widget-tab">
                <li><a href="#latest"><?php echo esc_html( $eight_paper_latest_title ); ?></a></li>
                <li><a href="#comments"><?php echo esc_html( $eight_paper_comments_title ); ?></a></li>
            </ul><!-- .widget-tabs -->

            <div id="latest" class="ep-tabbed-section ep-clearfix">
                <?php
                $eight_paper_post_count = apply_filters( 'eight_paper_latest_tabbed_posts_count', 5 );
                $latest_args = array(
                    'posts_per_page' => $eight_paper_post_count
                );
                $latest_query = new WP_Query( $latest_args );
                if( $latest_query->have_posts() ) {
                    while( $latest_query->have_posts() ) {
                        $latest_query->the_post();
                        ?>
                        <div class="ep-single-post ep-clearfix">
                            <?php if(has_post_thumbnail()){ ?>
                                <div class="ep-post-thumb">
                                    <?php eight_paper_post_format();?>
                                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'eight-paper-block-small' ); ?> </a>
                                </div><!-- .ep-post-thumb -->
                            <?php } ?>
                            <div class="ep-post-content">
                                <h3 class="ep-post-title small-size"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="ep-post-meta">
                                    <?php
                                    eight_paper_post_date();
                                    eight_paper_post_comment();
                                    ?>
                                </div>
                            </div><!-- .ep-post-content -->
                        </div><!-- .ep-single-post -->
                        <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div><!-- #latest -->

            <div id="comments" class="ep-tabbed-section ep-clearfix">
                <ul>
                    <?php
                    $eight_paper_comments_count = apply_filters( 'eight_paper_comment_tabbed_posts_count', 5 );
                    $eight_paper_tabbed_comments = get_comments( array( 'number' => $eight_paper_comments_count ) );
                    foreach( $eight_paper_tabbed_comments as $comment  ) {
                        ?>
                        <li class="ep-single-comment ep-clearfix">
                            <?php
                            $title = get_the_title( $comment->comment_post_ID );
                            echo '<div class="ep-comment-avatar">'. get_avatar( $comment, '55' ) .'</div>';
                            ?>
                            <div class="ep-comment-desc-wrap">
                                <strong><?php echo esc_html(strip_tags( $comment->comment_author )); ?></strong>
                                <?php esc_html_e( '&nbsp;commented on', 'eight-paper' ); ?> 
                                <a href="<?php echo esc_url(get_permalink( $comment->comment_post_ID )); ?>" rel="external nofollow" title="<?php echo esc_attr( $title ); ?>"> <?php echo esc_html( $title ); ?></a>: <?php echo esc_html(wp_html_excerpt( $comment->comment_content, 50 )); ?>
                            </div><!-- .ep-comment-desc-wrap -->
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div><!-- #comments -->

        </div><!-- .ep-default-tabbed-wrapper -->
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