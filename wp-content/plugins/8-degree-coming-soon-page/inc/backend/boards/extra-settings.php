<?php $maintenance_setting = get_option( 'maintenance_settings' ); ?>
<div class="extra-wrap settings-content" style="display: none;">

    <h2><?php _e( 'Extra Setting', '8degree-maintenance' ) ?></h2>

    <div class="edmm-field-wrap">
        <label><?php _e( 'Disable Coming Soon Mode For ', '8degree-maintenance' ) ?></label>
        <div class="edmm-field">
            <?php
            global $wp_roles;


            $wp_roles = new WP_Roles();

            $all_roles = $wp_roles->get_names();
            foreach ( $all_roles as $roles => $value ) {
                ?>

                <label class="edmm-plain-label">
                    <input type="checkbox" name="roles[]" value="<?php echo $roles; ?>" <?php
                    if ( isset( $maintenance_setting['roles'] ) && in_array( $roles, $maintenance_setting['roles'] ) ) {
                        echo 'checked';
                    }
                    ?> />
                           <?php echo $value; ?>
                </label>  
            <?php } ?>
        </div>
    </div> 

    <div class="edmm-field-wrap">
        <label><?php _e( 'Google Analytics Code ', '8degree-maintenance' ) ?></label>
        <div class="edmm-field">
            <textarea name="google_analytics"><?php echo $maintenance_setting['google_analytics']; ?></textarea>
            <p class="description"><?php _e( 'Note: Copy and paste the google analytics code in this area.', '8degree-maintenance' ); ?></p>
        </div>

    </div> 

    <div class="edmm-field-wrap">
        <label><?php _e( 'Hide From Search Engines', '8degree-maintenance' ) ?></label>
        <div class="edmm-field">
            <input type="checkbox" name="hide_search_engines" value="1" <?php if ( $maintenance_setting['hide_search_engines'] == '1' ) echo 'checked' ?> /></label> 
        </div>
    </div> 


    <div class="edmm-field-wrap">
        <label><?php _e( 'Meta Tag Name', '8degree-maintenance' ) ?></label>
        <div class="edmm-field">
            <input type="text" name="meta_name" value="<?php echo $maintenance_setting['meta_name']; ?>" /> 
        </div>
    </div>
    <div class="edmm-field-wrap">
        <label><?php _e( 'Meta Tag Content', '8degree-maintenance' ) ?></label>
        <div class="edmm-field">
            <input type="text" name="meta_content" value="<?php echo $maintenance_setting['meta_content']; ?>" /> 
        </div>
    </div>

    <div class="edmm-field-wrap">
        <label><?php _e( 'Choose Favicon', '8degree-maintenance' ) ?></label>
        <div class="edmm-field">
            <input id="upload_favicon" type="text" placeholder="<?php _e( 'Enter a URL or upload favicon', '8degree-maintenance' ) ?>" name="favicon" value="<?php
            if ( !empty( $maintenance_setting ['favicon'] ) ) {
                echo esc_attr( $maintenance_setting ['favicon'] );
            }
            ?>" /> 
            <input class="edm_upload_image button" type="button" value="Upload Favicon" />
            
        </div>
    </div>

    <h2><?php _e( 'Custom CSS', '8degree-maintenance' ) ?></h2>
    <div class="edmm-field-wrap">
        <label><?php _e( 'CSS code here', '8degree-maintenance' ) ?></label>
        <div class="edmm-field">
            <textarea name="custom_css_code" class="custom_css_code"><?php echo $maintenance_setting['custom_css_code']; ?></textarea>
            <p class="description"><?php _e( 'Note: Add your personalized CSS code here.', '8degree-maintenance' ); ?></p>
        </div>

    </div> 

</div>