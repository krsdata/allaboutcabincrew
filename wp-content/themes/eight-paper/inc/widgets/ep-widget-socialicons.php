<?php
/**
 * Social icons widget
 *
 * @package Eight Paper
 */
class eight_paper_Social_Icons extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname' => 'eight_paper_social_icons',
            'description' => __('Display links to your social network profiles, enter full profile URLs', 'eight-paper' )
        );
        parent::__construct( 'eight_paper_social_icons', __( 'ED: Social Icons', 'eight-paper' ), $widget_ops );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {
        $fields = array(
            // Title
            'widget_title' => array(
                'eight_paper_widgets_name' => 'widget_title',
                'eight_paper_widgets_title' => __('Title', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            // Other fields
            'twitter' => array(
                'eight_paper_widgets_name' => 'twitter',
                'eight_paper_widgets_title' => __('Twitter', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'facebook' => array(
                'eight_paper_widgets_name' => 'facebook',
                'eight_paper_widgets_title' => __('Facebook', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'linkedin' => array(
                'eight_paper_widgets_name' => 'linkedin',
                'eight_paper_widgets_title' => __('LinkedIn', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'gplus' => array(
                'eight_paper_widgets_name' => 'google-plus',
                'eight_paper_widgets_title' => __('Google+', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'pinterest' => array(
                'eight_paper_widgets_name' => 'pinterest',
                'eight_paper_widgets_title' => __('Pinterest', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'youtube' => array(
                'eight_paper_widgets_name' => 'youtube',
                'eight_paper_widgets_title' => __('YouTube', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'vimeo' => array(
                'eight_paper_widgets_name' => 'vimeo-square',
                'eight_paper_widgets_title' => __('Vimeo', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'flickr' => array(
                'eight_paper_widgets_name' => 'flickr',
                'eight_paper_widgets_title' => __('Flickr', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'dribbble' => array(
                'eight_paper_widgets_name' => 'dribbble',
                'eight_paper_widgets_title' => __('Dribbble', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'dribbble' => array(
                'eight_paper_widgets_name' => 'stumbleupon',
                'eight_paper_widgets_title' => __('Stumbleupon', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'tumblr' => array(
                'eight_paper_widgets_name' => 'tumblr',
                'eight_paper_widgets_title' => __('Tumblr', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'instagram' => array(
                'eight_paper_widgets_name' => 'instagram',
                'eight_paper_widgets_title' => __('Instagram', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'lastfm' => array(
                'eight_paper_widgets_name' => 'skype',
                'eight_paper_widgets_title' => __('Skype', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
            ),
            'soundcloud' => array(
                'eight_paper_widgets_name' => 'soundcloud',
                'eight_paper_widgets_title' => __('SoundCloud', 'eight-paper'),
                'eight_paper_widgets_field_type' => 'text'
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
    public function widget($args, $instance) {
        extract($args);

        $widget_title = apply_filters('widget_title', $instance['widget_title']);

        echo wp_kses_post($before_widget);

        // Show title
        if (isset($widget_title)) {
            echo wp_kses_post($before_title) . wp_kses_post($widget_title) . wp_kses_post($after_title);
        }

        echo '<ul class="clearfix widget-social-icons">';
        // Loop through fields
        $widget_fields = $this->widget_fields();
        foreach ($widget_fields as $widget_field) {
            // Make array elements available as variables
            extract($widget_field);
            // Check if field has value and skip title field
            unset($eight_paper_widgets_field_value);
            if (isset($instance[$eight_paper_widgets_name]) && 'widget_title' != $eight_paper_widgets_name) {
                $eight_paper_widgets_field_value = esc_attr($instance[$eight_paper_widgets_name]);
                if ('' != $eight_paper_widgets_field_value) {
                    ?>
                    <li class="<?php echo esc_attr($eight_paper_widgets_name); ?>"><a href="<?php echo esc_url($eight_paper_widgets_field_value); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr($eight_paper_widgets_name); ?>"></i></a></li>
                    <?php
                }
            }
        }
        echo '<!-- .widget-social-icons --></ul>';

        echo wp_kses_post($after_widget);
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param	array	$new_instance	Values just sent to be saved.
     * @param	array	$old_instance	Previously saved values from database.
     *
     * @uses	eight_paper_widgets_show_widget_field()		defined in widget-fields.php
     *
     * @return	array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ($widget_fields as $widget_field) {
            extract($widget_field);

            // Use helper function to get updated field values
            $instance[$eight_paper_widgets_name] = eight_paper_widgets_updated_field_value($widget_field, $new_instance[$eight_paper_widgets_name]);
        }

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     *
     * @uses	eight_paper_widgets_show_widget_field()		defined in widget-fields.php
     */
    public function form($instance) {
        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ($widget_fields as $widget_field) {

            // Make array elements available as variables
            extract($widget_field);
            $eight_paper_widgets_field_value = isset($instance[$eight_paper_widgets_name]) ? esc_attr($instance[$eight_paper_widgets_name]) : '';
            eight_paper_widgets_show_widget_field($this, $widget_field, $eight_paper_widgets_field_value);
        }
    }

}
