<?php
/**
 * ED: Block Posts
 *
 * Widget show the block posts from selected category in different layouts.
 *
 * @package Eight_Paper
 */

class eight_paper_Block_Posts extends WP_widget {

	/**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname' => 'eight_paper_block_posts',
            'description' => __( 'Displays block posts from selected category in different layouts.', 'eight-paper' )
        );
        parent::__construct( 'eight_paper_block_posts', __( 'ED: Block Posts', 'eight-paper' ), $widget_ops );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {

        $fields = array(

            'block_title' => array(
                'eight_paper_widgets_name'         => 'block_title',
                'eight_paper_widgets_title'        => __( 'Block title', 'eight-paper' ),
                'eight_paper_widgets_description'  => __( 'Enter your block title. (Optional - Leave blank to hide title.)', 'eight-paper' ),
                'eight_paper_widgets_field_type'   => 'text'
            ),

            'block_cat_slug' => array(
                'eight_paper_widgets_name'         => 'block_cat_slug',
                'eight_paper_widgets_title'        => __( 'Block Category', 'eight-paper' ),
                'eight_paper_widgets_default'      => '',
                'eight_paper_widgets_field_type'   => 'category_dropdown'
            ),

            'block_layout' => array(
                'eight_paper_widgets_name'         => 'block_layout',
                'eight_paper_widgets_title'        => __( 'Block Layouts', 'eight-paper' ),
                'eight_paper_widgets_default'      => 'layout1',
                'eight_paper_widgets_field_type'   => 'selector',
                'eight_paper_widgets_field_options' => array(
                    'layout1' => esc_url( get_template_directory_uri() . '/assets/images/block-layout1.png' ),
                    'layout2' => esc_url( get_template_directory_uri() . '/assets/images/block-layout2.png' ),
                    'layout3' => esc_url( get_template_directory_uri() . '/assets/images/block-layout3.png' ),
                    'layout4' => esc_url( get_template_directory_uri() . '/assets/images/block-layout4.png' ),
                    'layout5' => esc_url( get_template_directory_uri() . '/assets/images/block-layout5.png' )
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

        $eight_paper_block_title    = empty( $instance['block_title'] ) ? '' : $instance['block_title'];
        $eight_paper_block_cat_slug = empty( $instance['block_cat_slug'] ) ? '' : $instance['block_cat_slug'];
        $eight_paper_block_layout   = empty( $instance['block_layout'] ) ? 'layout1' : $instance['block_layout'];

        $widget_title_args = array(
            'title'    => $eight_paper_block_title,
            'cat_slug' => $eight_paper_block_cat_slug
        );

        echo wp_kses_post($before_widget);
        ?>
        <div class="ep-block-wrapper block-posts ep-clearfix <?php echo esc_attr( $eight_paper_block_layout ); ?>">
            <?php 
            if( !empty( $eight_paper_block_title ) ) {
                do_action( 'eight_paper_widget_title', $widget_title_args );
            }
            ?>
            <div class="ep-block-posts-wrapper ep-clearfix">
            	<?php
              switch ( $eight_paper_block_layout ) {
                 case 'layout2':
                 eight_paper_block_second_layout_section( $eight_paper_block_cat_slug );
                 break;

                 case 'layout3':
                 eight_paper_block_third_layout_section( $eight_paper_block_cat_slug );
                 break;

                 case 'layout4':
                 eight_paper_block_fourth_layout_section( $eight_paper_block_cat_slug );
                 break;

                 case 'layout5':
                 eight_paper_block_fifth_layout_section( $eight_paper_block_cat_slug );
                 break;

                 default:
                 eight_paper_block_default_layout_section( $eight_paper_block_cat_slug );
                 break;
             }
             ?>
         </div><!-- .ep-block-posts-wrapper -->
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