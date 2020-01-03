<?php
/**
 * Define custom fields for widgets
 * 
 * @package Eight_Paper
 */

function eight_paper_widgets_show_widget_field( $instance = '', $widget_field = '', $eight_paper_widget_field_value = '' ) {

    extract( $widget_field );

    switch ( $eight_paper_widgets_field_type ) {

        /**
         * text widget field
         */
        case 'text'
        ?>
        <p>
            <span class="field-label"><label for="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>"><?php echo esc_html( $eight_paper_widgets_title ); ?></label></span>
            <input class="widefat" id="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $eight_paper_widgets_name ) ); ?>" type="text" value="<?php echo esc_html( $eight_paper_widget_field_value ); ?>" />

            <?php if ( isset( $eight_paper_widgets_description ) ) { ?>
                <br />
                <em><?php echo wp_kses_post( $eight_paper_widgets_description ); ?></em>
            <?php } ?>
        </p>
        <?php
        break;

        /**
         * url widget field
         */
        case 'url' :
        ?>
        <p>
            <span class="field-label"><label for="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>"><?php echo esc_html( $eight_paper_widgets_title ); ?></label></span>
            <input class="widefat" id="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $eight_paper_widgets_name ) ); ?>" type="text" value="<?php echo esc_url( $eight_paper_widget_field_value ); ?>" />

            <?php if ( isset( $eight_paper_widgets_description ) ) { ?>
                <br />
                <em><?php echo wp_kses_post( $eight_paper_widgets_description ); ?></em>
            <?php } ?>
        </p>
        <?php
        break;
        
        /**
         * checkbox widget field
         */
        case 'checkbox' :
        ?>
        <p>
            <input id="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $eight_paper_widgets_name ) ); ?>" type="checkbox" value="1" <?php checked( '1', $eight_paper_widget_field_value ); ?>/>
            <label for="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>"><?php echo esc_html( $eight_paper_widgets_title ); ?></label>

            <?php if ( isset( $eight_paper_widgets_description ) ) { ?>
                <br />
                <em><?php echo wp_kses_post( $eight_paper_widgets_description ); ?></em>
            <?php } ?>
        </p>
        <?php
        break;

        /**
         * category dropdown widget field
         */
        case 'category_dropdown' :
        if( empty( $eight_paper_widget_field_value ) ) {
            $eight_paper_widget_field_value = $eight_paper_widgets_default;
        }
        ?>
        <p>
            <label for="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>"><?php echo esc_html( $eight_paper_widgets_title ); ?>:</label>
            <?php
            $dropdown_args = wp_parse_args( array(
                'taxonomy'          => 'category',
                'show_option_none'  => __( '- - Select Category - -', 'eight-paper' ),
                'selected'          => esc_attr( $eight_paper_widget_field_value ),
                'show_option_all'   => '',
                'orderby'           => 'id',
                'order'             => 'ASC',
                'show_count'        => 0,
                'hide_empty'        => 1,
                'child_of'          => 0,
                'exclude'           => '',
                'hierarchical'      => 1,
                'depth'             => 0,
                'tab_index'         => 0,
                'hide_if_empty'     => false,
                'option_none_value' => 0,
                'value_field'       => 'slug',
                'name' => esc_attr( $instance->get_field_name( $eight_paper_widgets_name ) ),
                'id' => esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ),
                'class' => 'widefat'
            ) );
            wp_dropdown_categories( $dropdown_args );
            ?>
        </p>
        <?php
        break;

        /**
         * number widget field
         */
        case 'number' :
        if( empty( $eight_paper_widget_field_value ) ) {
            $eight_paper_widget_field_value = $eight_paper_widgets_default;
        }
        ?>
        <p>
            <label for="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>"><?php echo esc_html( $eight_paper_widgets_title ); ?></label>
            <input name="<?php echo esc_attr( $instance->get_field_name( $eight_paper_widgets_name ) ); ?>" type="number" step="1" min="1" id="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>" value="<?php echo esc_html( $eight_paper_widget_field_value ); ?>" class="small-text" />

            <?php if ( isset( $eight_paper_widgets_description ) ) { ?>
                <br />
                <em><?php echo wp_kses_post( $eight_paper_widgets_description ); ?></em>
            <?php } ?>
        </p>
        <?php
        break;

        /**
         * multi checkboxes widget field
         */
        case 'multicheckboxes':
        ?>
        <p><span class="field-label"><label><?php echo esc_html( $eight_paper_widgets_title ); ?></label></span></p>

        <?php
        foreach ( $eight_paper_widgets_field_options as $checkbox_option_name => $checkbox_option_title ) {
            if( isset( $eight_paper_widget_field_value[$checkbox_option_name] ) ) {
                $eight_paper_widget_field_value[$checkbox_option_name] = 1;
            }else{
                $eight_paper_widget_field_value[$checkbox_option_name] = 0;
            }
            $eight_paper_random = 'ep-'.rand('0000','9999').'-';
            ?>
            <p>
                <input id="<?php echo esc_attr( $eight_paper_random.$instance->get_field_id( $checkbox_option_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $eight_paper_widgets_name ).'['.$checkbox_option_name.']' ); ?>" type="checkbox" value="1" <?php checked( '1', $eight_paper_widget_field_value[$checkbox_option_name] ); ?>/>
                <label for="<?php echo esc_attr( $eight_paper_random.$instance->get_field_id( $checkbox_option_name )); ?>"><?php echo esc_html( $checkbox_option_title ); ?></label>
            </p>
            <?php
        }
        if ( isset( $eight_paper_widgets_description ) ) {
            ?>
            <em><?php echo wp_kses_post( $eight_paper_widgets_description ); ?></em>
            <?php
        }
        break;

        /**
         * selector widget field
         */
        case 'selector':
        if( empty( $eight_paper_widget_field_value ) ) {
            $eight_paper_widget_field_value = $eight_paper_widgets_default;
        }
        ?>
        <p><span class="field-label"><label class="field-title"><?php echo esc_html( $eight_paper_widgets_title ); ?></label></span></p>
        <?php            
        echo '<div class="selector-labels">';
        foreach ( $eight_paper_widgets_field_options as $option => $val ){
            $class = ( $eight_paper_widget_field_value == $option ) ? 'selector-selected': '';
            echo '<label class="'.esc_attr($class).'" data-val="'.esc_attr( $option ).'">';
            echo '<img src="'.esc_url( $val ).'"/>';
            echo '</label>'; 
        }
        echo '</div>';
        echo '<input data-default="'.esc_attr( $eight_paper_widget_field_value ).'" type="hidden" value="'.esc_attr( $eight_paper_widget_field_value ).'" name="'.esc_attr( $instance->get_field_name( $eight_paper_widgets_name ) ).'"/>';
        break;

        /**
         * upload widget field
         */
        case 'upload':
        $image = $image_class = "";
        if( $eight_paper_widget_field_value ){ 
            $image = '<img src="'.esc_url( $eight_paper_widget_field_value ).'" style="max-width:100%;"/>';    
            $image_class = ' hidden';
        }
        ?>
        <div class="attachment-media-view">

            <p><span class="field-label"><label for="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>"><?php echo esc_html( $eight_paper_widgets_title ); ?>:</label></span></p>
            
            <div class="placeholder<?php echo esc_attr( $image_class ); ?>">
                <?php esc_html_e( 'No image selected', 'eight-paper' ); ?>
            </div>
            <div class="thumbnail thumbnail-image">
                <?php echo wp_kses_post($image); ?>
            </div>

            <div class="actions ep-clearfix">
                <button type="button" class="button ep-delete-button align-left"><?php esc_html_e( 'Remove', 'eight-paper' ); ?></button>
                <button type="button" class="button ep-upload-button alignright"><?php esc_html_e( 'Select Image', 'eight-paper' ); ?></button>

                <input name="<?php echo esc_attr( $instance->get_field_name( $eight_paper_widgets_name ) ); ?>" id="<?php echo esc_attr( $instance->get_field_id( $eight_paper_widgets_name ) ); ?>" class="upload-id" type="hidden" value="<?php echo esc_url( $eight_paper_widget_field_value ) ?>"/>
            </div>

            <?php if ( isset( $eight_paper_widgets_description ) ) { ?>
                <br />
                <em><?php echo wp_kses_post( $eight_paper_widgets_description ); ?></em>
            <?php } ?>

        </div>
        <?php
        break;
    }
}

function eight_paper_widgets_updated_field_value( $widget_field, $new_field_value ) {

    extract( $widget_field );
    
    if ( $eight_paper_widgets_field_type == 'number') {
        return absint( $new_field_value );
    } elseif ( $eight_paper_widgets_field_type == 'url' ) {
        return esc_url( $new_field_value );
    } elseif( $eight_paper_widgets_field_type == 'multicheckboxes' ) {
        return wp_kses_post( $new_field_value );
    } else {
        return sanitize_text_field( $new_field_value );
    }
}