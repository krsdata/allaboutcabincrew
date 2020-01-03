<div class="design-wrap settings-content" style="display: none;">

    <h2><?php _e( 'Design Settings', '8degree-maintenance' ) ?></h2>

    <div class="text-color">
        <h3><?php _e( 'Text Options', '8degree-maintenance' ) ?></h3>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Header Text Color', '8degree-maintenance' ) ?></label>
            <div class="edmm-field">
                <input type="text" name="headline_color" value="<?php echo esc_attr( $maintenance_setting ['headline_color'] ); ?>" id="headline_color" class="cpa-color-picker" data-default-color="#333333" />
            </div>
        </div>
        <div class="edmm-field-wrap">    
            <label><?php _e( 'Description Text Color', '8degree-maintenance' ) ?></label>
            <div class="edmm-field">
                <input type="text" name="description_color" value="<?php echo esc_attr( $maintenance_setting ['description_color'] ); ?>" id="description_color" class="cpa-color-picker" data-default-color="#333333" />
            </div>
        </div>    
    </div>


    <div class="background-option">

        <h3><?php _e( 'Background Options', '8degree-maintenance' ) ?></h3>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Select Background Type', '8degree-maintenance' ) ?></label>
            <div class="edmm-field">
                <label><input type="radio" name="bg_type" value="color" class="background-image-type" <?php if ( $maintenance_setting['bg_type'] == 'color' ) echo 'checked' ?>/><?php _e( 'Color', '8degree-maintenance' ) ?></label> 
                <label><input type="radio" name="bg_type" value="image" class="background-image-type" <?php if ( $maintenance_setting['bg_type'] == 'image' ) echo 'checked' ?>/><?php _e( 'Image', '8degree-maintenance' ) ?></label>
            </div>
        </div>
        <div class="edmm-background-ref" <?php if ( $maintenance_setting['bg_type'] != 'color' ) { ?>style="display:none;"<?php } ?> data-background-ref="color">
            <div class="edmm-field-wrap">
                <label><?php _e( 'Background Color', '8degree-maintenance' ) ?></label>
                <div class="edmm-field">
                    <input type="text" name="bg_color" class="cpa-color-picker2" id="background_color" data-default-color="#ffffff" value="<?php
                    if ( empty( $maintenance_setting['bg_color'] ) ) {
                        echo '#fff';
                    } else {
                        echo esc_attr( $maintenance_setting ['bg_color'] );
                    }
                    ?>" />
                </div>
            </div>
        </div>

        <div class="edmm-background-ref" <?php if ( $maintenance_setting['bg_type'] != 'image' ) { ?>style="display:none;"<?php } ?> data-background-ref="image">
            <div class="edmm-field-wrap">
                <label class="edmm_form_label"><?php _e( 'Background Image', '8degree-maintenance' ) ?></label>
                <div class="edmm-field">
                    <select name="bg-image" class="bg-image-choose">
                        <option value="pre" <?php if ( isset( $maintenance_setting['bg-image'] ) && $maintenance_setting['bg-image'] == 'pre' ) echo 'selected' ?>><?php _e( 'Pre Available', '8degree-maintenance' ); ?></option>
                        <option value="new" <?php if ( isset( $maintenance_setting['bg-image'] ) && $maintenance_setting['bg-image'] == 'new' ) echo 'selected' ?>><?php _e( 'New', '8degree-maintenance' ); ?></option>
                    </select>
                </div>
            </div>


            <div class="edmm-background-image-ref" <?php if ( $maintenance_setting['bg-image'] != 'pre' ) { ?>style="display: none;"<?php } ?> data-image-type="pre">
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Pre Available Image', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <select name="bg-available-options" class="bg-select-class">
                            <option value="image0"><?php _e( 'Choose Image', '8degree-maintenance' ); ?></option>
                            <?php for ( $i = 1; $i <= 12; $i++ ) {
                                ?>
                                <option value="image<?php echo $i; ?>" id="bg_img<?php echo $i; ?>" <?php if ( isset( $maintenance_setting['bg-available-options'] ) && $maintenance_setting['bg-available-options'] == 'image' . $i ) echo 'selected' ?>>Image <?php echo $i; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <div class="image-preview-div">
                            <?php
                            $background_image = $maintenance_setting['bg-available-options'];
                            $background_image_id = str_replace( 'image', '', $background_image );

                            for ( $i = 1; $i <= 12; $i++ ) {
                                ?>
                                <div class="image-preview-<?php echo $i; ?> bg-img-preview" <?php if ( $background_image_id != $i ) { ?>style="display: none;"<?php } ?>>
                                    <p><?php _e( 'Preview:', '8degree-maintenance' ) ?></p><img src="<?php echo MAINTENANCE_IMAGE_DIR . '/bg' . $i . '.jpg' ?>" height="200px" /> 
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="edmm-background-image-ref" <?php if ( $maintenance_setting['bg-image'] != 'new' ) { ?>style="display: none;"<?php } ?> data-image-type="new">
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Choose Image', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">

                        <input id="upload_image" type="text" size="36" placeholder="<?php _e( 'Enter a URL or upload an image', '8degree-maintenance' ) ?>" name="ad_image" value="<?php
                        if ( !empty( $maintenance_setting ['ad_image'] ) ) {
                            echo esc_attr( $maintenance_setting ['ad_image'] );
                        }
                        ?>" /> 
                        <input id="upload_image_button" class="edm_upload_image button" type="button" value="Upload Image" />
                        <?php if ( !empty( $maintenance_setting['ad_image'] ) ) { ?>
                        <div class="image-preview-div">
                            
                                <div class="bg-img-preview">
                                    <p><?php _e( 'Preview:', '8degree-maintenance' ) ?></p>
                                    <img src="<?php echo esc_attr( $maintenance_setting ['ad_image'] ); ?>" height="200px" /> 
                                </div>
                            
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="timer-options">

        <h3><?php _e( 'Timer Layouts', '8degree-maintenance' ) ?></h3>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Choose Layout', '8degree-maintenance' ); ?></label>
            <div class="edmm-field">
                <div class="edmm_timer_layout_wrap">
                    <?php for ( $i = 1; $i <= 2; $i++ ) {
                        ?>
                        <label>
                            <input type="radio" name="timerlayout" value="layout<?php echo $i; ?>" <?php if ( $maintenance_setting['timerlayout'] == 'layout' . $i ) echo 'checked' ?> />
                            <img src="<?php echo MAINTENANCE_IMAGE_DIR . '/counter-layout' . $i . '.png' ?>" class="edmm-timer-layout-trigger <?php echo ( $maintenance_setting['timerlayout'] == 'layout' . $i ) ? 'edmm-checked-layout' : ''; ?>"/> 
                        </label>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="edmm-field-wrap" style="display:none;">
            <label><?php _e( 'Timer Background Color', '8degree-maintenance' ); ?></label>
            <div class="edmm-field">
                <input type="text" name="timer_background_color" class="cpa-color-picker2" value="<?php echo isset( $maintenance_setting['timer_background_color'] ) ? esc_attr( $maintenance_setting['timer_background_color'] ) : ''; ?>"/>
            </div>
        </div>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Timer Font Color', '8degree-maintenance' ); ?></label>
            <div class="edmm-field">
                <input type="text" name="timer_font_color" class="cpa-color-picker2" value="<?php echo isset( $maintenance_setting['timer_font_color'] ) ? esc_attr( $maintenance_setting['timer_font_color'] ) : ''; ?>"/>
            </div>
        </div>


    </div>

    <div class="subscribe-options">
        <h3><?php _e( 'Subscribe Form Layouts', '8degree-maintenance' ) ?></h3>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Subscription Form Layout', '8degree-maintenance' ) ?></label>
            <div class="edmm-field">
                <div class="edmm_timer_layout_wrap">

                    <?php for ( $i = 1; $i <= 2; $i++ ) {
                        ?>
                        <label>
                            <input type="radio" name="subs_layout" value="layout<?php echo $i; ?>" <?php if ( $maintenance_setting['subs_layout'] == 'layout' . $i ) echo 'checked' ?> />
                            <img src="<?php echo MAINTENANCE_IMAGE_DIR . '/sub-lay' . $i . '.png' ?>" class="edmm-timer-layout-trigger <?php echo ( $maintenance_setting['subs_layout'] == 'layout' . $i ) ? 'edmm-checked-layout' : ''; ?>"/> 
                        </label>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Subscribe Button Background Color', '8degree-maintenance' ); ?></label>
            <div class="edmm-field">
                <input type="text" name="subscribe_button_background_color" value="<?php echo isset( $maintenance_setting['subscribe_button_background_color'] ) ? esc_attr( $maintenance_setting['subscribe_button_background_color'] ) : ''; ?>" class="cpa-color-picker2"/>
            </div>
        </div>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Subscribe Button Font Color', '8degree-maintenance' ); ?></label>
            <div class="edmm-field">
                <input type="text" name="subscribe_button_font_color" value="<?php echo isset( $maintenance_setting['subscribe_button_font_color'] ) ? esc_attr( $maintenance_setting['subscribe_button_font_color'] ) : ''; ?>" class="cpa-color-picker2"/>
            </div>
        </div>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Subscribe Button Hover Background Color', '8degree-maintenance' ); ?></label>
            <div class="edmm-field">
                <input type="text" name="subscribe_button_hover_background_color" value="<?php echo isset( $maintenance_setting['subscribe_button_hover_background_color'] ) ? esc_attr( $maintenance_setting['subscribe_button_hover_background_color'] ) : ''; ?>" class="cpa-color-picker2"/>
            </div>
        </div>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Subscribe Button Hover Font Color', '8degree-maintenance' ); ?></label>
            <div class="edmm-field">
                <input type="text" name="subscribe_button_hover_font_color" value="<?php echo isset( $maintenance_setting['subscribe_button_hover_font_color'] ) ? $maintenance_setting['subscribe_button_hover_font_color'] : ''; ?>" class="cpa-color-picker2"/>
            </div>
        </div>

        <div class="edmm-field-wrap">
            <label><?php _e( 'Subscribe Text Color', '8degree-maintenance' ); ?></label>
            <div class="edmm-field">
                <input type="text" name="subscribe_text_color" value="<?php echo isset( $maintenance_setting['subscribe_text_color'] ) ? esc_attr( $maintenance_setting['subscribe_text_color'] ) : ''; ?>" class="cpa-color-picker2"/>
            </div>
        </div>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Subscribe Error Color', '8degree-maintenance' ); ?></label>
            <div class="edmm-field">
                <input type="text" name="subscribe_error_color" value="<?php echo isset( $maintenance_setting['subscribe_error_color'] ) ? esc_attr( $maintenance_setting['subscribe_error_color'] ) : ''; ?>" class="cpa-color-picker2"/>
            </div>
        </div>


    </div>

    <div class="contactus-options">
        <h3><?php _e( 'Contact Us Button Options', '8degree-maintenance' ) ?></h3> 
        <div class="edmm-field-wrap">
            <label><?php _e( 'Background Color', '8degree-maintenance' ) ?> </label>
            <div class="edmm-field">
                <input type="text" name="contactus_bg_color" value="<?php echo esc_attr( $maintenance_setting ['contactus_bg_color'] ); ?>" id="contactus_bg_color" class="cpa-color-picker" data-default-color="#ffff" />
            </div>

        </div>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Font Color', '8degree-maintenance' ) ?> </label>
            <div class="edmm-field">
                <input type="text" name="contactus_font_color" value="<?php echo esc_attr( $maintenance_setting ['contactus_font_color'] ); ?>" id="contactus_font_color" class="cpa-color-picker" data-default-color="#000000" />
            </div>

        </div> 

        <div class="edmm-field-wrap">
            <label><?php _e( 'Hover Background Color', '8degree-maintenance' ) ?></label>
            <div class="edmm-field">
                <input type="text" name="contactus_hoverbg_color" value="<?php echo esc_attr( $maintenance_setting ['contactus_hoverbg_color'] ); ?>" id="contactus_hoverbg_color" class="cpa-color-picker" data-default-color="#ffff" />
            </div>

        </div>
        <div class="edmm-field-wrap">     
            <label><?php _e( 'Hover Font Color', '8degree-maintenance' ) ?></label>
            <div class="edmm-field">
                <input type="text" name="contactus_hovertext_color" value="<?php echo esc_attr( $maintenance_setting ['contactus_hovertext_color'] ); ?>" id="contactus_hovertext_color" class="cpa-color-picker" data-default-color="#ffff" />
            </div>

        </div>     
    </div>

    <div class="social-network-options">
        <h3><?php _e( 'Social Icon Options', '8degree-maintenance' ) ?></h3>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Background Color', '8degree-maintenance' ) ?></label>
            <div class="edmm-field">
                <input type="text" name="socialicon_bg_color" value="<?php echo esc_attr( $maintenance_setting ['socialicon_bg_color'] ); ?>" id="socialicon_bg_color" class="cpa-color-picker" data-default-color="#ffff" />
            </div>
        </div>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Font Color', '8degree-maintenance' ) ?></label>
            <div class="edmm-field">
                <input type="text" name="socialicon_font_color" value="<?php echo esc_attr( $maintenance_setting ['socialicon_font_color'] ); ?>" id="socialicon_font_color" class="cpa-color-picker" data-default-color="#000000" />
            </div>
        </div>
        <div class="edmm-field-wrap">
            <label><?php _e( 'Hover Background Color', '8degree-maintenance' ) ?> </label>
            <div class="edmm-field">
                <input type="text" name="socialicon_hoverbg_color" value="<?php echo esc_attr( $maintenance_setting ['socialicon_hoverbg_color'] ); ?>" id="socialicon_hoverbg_color" class="cpa-color-picker" data-default-color="#ffff" /> 
            </div>
        </div>
        <div class="edmm-field-wrap">   
            <label><?php _e( 'Hover Font Color', '8degree-maintenance' ) ?>  </label> 
            <div class="edmm-field">
                <input type="text" name="socialicon_hovertext_color" value="<?php echo esc_attr( $maintenance_setting ['socialicon_hovertext_color'] ); ?>" id="socialicon_hovertext_color" class="cpa-color-picker" data-default-color="#ffff" />
            </div>
        </div>

    </div>



</div>  
