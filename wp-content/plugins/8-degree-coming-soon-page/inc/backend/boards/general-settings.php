<div class="general-settings-wrap settings-content">
    <h2><?php _e( 'General Settings', '8degree-maintenance' ) ?></h2>
    <?php
    $maintenance_setting = get_option( 'maintenance_settings' );
    $subscriber_setting = get_option( 'maintenance_subscriber_settings' );
    $maintenance_setting = (empty( $maintenance_setting )) ? array( 'status' => '', 'headline_text' => '', 'description' => '', 'headline_color' => '' ) : $maintenance_setting;
    ?>

    <div class="select-status-div">
        <label class="disabled"><input type="radio" name="status" value="0" class="status-mode disable"  <?php if ( $maintenance_setting['status'] == '0' ) echo 'checked' ?>/><?php _e( 'Disable', '8degree-maintenance' ) ?></label>
        <label class="enabled"><input type="radio" name="status" value="1" class="status-mode enable" <?php if ( $maintenance_setting['status'] == '1' ) echo 'checked' ?>/><?php _e( 'Enable Maintenance Mode', '8degree-maintenance' ) ?></label>

        <div class="info-note"><span class="note-text">Note:</span> Check to enable to enable coming soon page.</div>
    </div>
    <div class="edmm-general-settings-wrap" <?php echo ($maintenance_setting['status']!=1)?'style="display:none"':'';?>>
        <div class="headline-div general-common-section">
            <h3>Header Section</h3>
            <div class="head-section">
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Show', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="checkbox" class="field-display-trigger" name="show_head" value="1" <?php if ( $maintenance_setting['show_head'] == '1' ) echo 'checked' ?> /> 
                    </div>
                </div>
                <div  class="edmm-show-fields-wrap" <?php if ( $maintenance_setting['show_head'] != '1' ) { ?>style="display:none;"<?php } ?>>
                      <div class="edmm-field-wrap">
                        <label><?php _e( 'Header Text', '8degree-maintenance' ) ?></label>
                        <div class="edmm-field">
                            <input type="text" name="headline_text" class="head-section-input" value="<?php echo esc_attr( $maintenance_setting ['headline_text'] ); ?>"  />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="description general-common-section">
            <h3><?php _e( 'Description Section', '8degree-maintenance' ) ?></h3>
            <div class="edmm-field-wrap">
                <label> <?php _e( 'Show', '8degree-maintenance' ) ?> </label>
                <div class="edmm-field">
                    <input type="checkbox" name="show_description" class="field-display-trigger" value="1" <?php if ( $maintenance_setting['show_description'] == '1' ) echo 'checked' ?> />
                </div>  
            </div>
            <div class="edmm-show-fields-wrap" <?php if ( $maintenance_setting['show_description'] != '1' ) { ?>style="display:none;"<?php } ?>>
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Description', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <textarea name="description"><?php echo esc_attr( stripslashes( $maintenance_setting ['description'] ) ); ?></textarea>
                    </div>
                </div> 
            </div>
        </div>

        <div class="subscribe-section general-common-section">
            <h3><?php _e( 'Subscriber Section', '8degree-maintenance' ) ?></h3>
            <div class="edmm-field-wrap">
                <label><?php _e( 'Show', '8degree-maintenance' ) ?> </label>
                <div class="edmm-field">
                    <input type="checkbox" name="show_subscribe" class="field-display-trigger" value="1" <?php if ( $maintenance_setting['show_subscribe'] == '1' ) echo 'checked' ?> />
                </div>
            </div>
            <?php $show_subscribe = isset( $maintenance_setting['show_subscribe'] ) ? $maintenance_setting['show_subscribe'] : 0; ?>
            <div class="subscribe-fields edmm-show-fields-wrap" <?php if ( $show_subscribe != '1' ) { ?>style="display: none;"<?php } ?>>
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Confirm Email Address', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="checkbox" name="confirm_email_subscribe" value="1" <?php if ( $maintenance_setting['confirm_email_subscribe'] == '1' ) echo 'checked' ?> />
                        <p class="description"><?php _e( 'Note: Check confirm email address to enable the email confirmation system for valid subscribers.', '8degree-maintenance' ); ?></p>
                    </div>
                </div>
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Heading Text', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text" name="subscribe_heading_text" class="subscribe-input" value="<?php echo esc_attr( $maintenance_setting ['subscribe_heading_text'] ); ?>" />
                    </div>
                </div>
                <div class="edmm-field-wrap"> 
                    <label><?php _e( 'Form Label', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text" name="subscribe_form_label" class="subscribe-input" value="<?php echo esc_attr( $maintenance_setting ['subscribe_form_label'] ); ?>" />
                    </div>
                </div> 
                <div class="edmm-field-wrap">     
                    <label><?php _e( 'Subscribe Button Text', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text" class="subscribe-input" name="subscribe_button_text" value="<?php echo esc_attr( $maintenance_setting ['subscribe_button_text'] ); ?>" />
                    </div>
                </div>
                <div class="edmm-field-wrap">      
                    <label><?php _e( 'Thank you note', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <textarea name="note_subscriber"><?php echo esc_attr( $maintenance_setting ['note_subscriber'] ); ?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="social-network-section general-common-section">
            <h3><?php _e( 'Social Network Section', '8degree-maintenance' ) ?></h3>
            <div class="edmm-field-wrap">
                <label><?php _e( 'Show', '8degree-maintenance' ) ?></label>
                <div class="edmm-field">
                    <input type="checkbox" class="field-display-trigger" name="show_social_network" value="1" <?php if ( $maintenance_setting['show_social_network'] == '1' ) echo 'checked' ?> />
                </div>
            </div>
            <div class="social-network-fields edmm-show-fields-wrap" <?php if ( $maintenance_setting['show_social_network'] != '1' ) { ?>style="display: none;"<?php } ?>>
                <ul class="sortable">
                    <?php if ( empty( $maintenance_setting['social_name'] ) ) { ?>
                        <li>
                            <div class="single-social-bar">
                                <label class="first-social-wrap"><?php _e( 'facebook', '8degree-maintenance' ) ?></label>
                                <label class="edmm_strong_texts">Show<input type="checkbox"  name="social_controls[facebook]" class="space1"  value="1" <?php if ( $maintenance_setting['social_controls']['facebook'] == '1' ) echo 'checked' ?> /></label>
                                <label class="url edmm_strong_texts">URL<input type="text" class="widthbar social-url-wrap" name="social_url[facebook][url]" placeholder="e.g; https://www.facebook.com/8DegreeThemes" value="<?php echo esc_attr( $maintenance_setting['social_url']['facebook']['url'] ); ?>"  /></label>
                                <input type="hidden" name="social_name[]" value="facebook" />
                            </div>    

                        </li>
                        <li>
                            <div class="single-social-bar">
                                <label class="first-social-wrap"><?php _e( 'twitter', '8degree-maintenance' ) ?></label>
                                <label class="edmm_strong_texts"> Show<input type="checkbox" name="social_controls[twitter]" value="1" <?php if ( $maintenance_setting['social_controls']['twitter'] == '1' ) echo 'checked' ?> /></label>
                                <label class="url edmm_strong_texts">URL<input type="url" class="widthbar social-url-wrap" name="social_url[twitter][url]" value="<?php echo esc_attr( $maintenance_setting['social_url']['twitter']['url'] ); ?>" placeholder="e.g; https://twitter.com/8degreethemes" /></label>
                                <input type="hidden" name="social_name[]" value="twitter" />
                            </div>

                        </li>
                        <li>
                            <div class="single-social-bar">
                                <label class="first-social-wrap"><?php _e( 'pinterest', '8degree-maintenance' ) ?></label>
                                <label class="edmm_strong_texts"> Show<input type="checkbox" name="social_controls[pinterest]" value="1" <?php if ( $maintenance_setting['social_controls']['pinterest'] == '1' ) echo 'checked' ?> /></label>
                                <label class="url edmm_strong_texts">URL<input type="url" class="widthbar social-url-wrap" name="social_url[pinterest][url]" value="<?php echo esc_attr( $maintenance_setting['social_url']['pinterest']['url'] ); ?>" placeholder="e.g; https://www.pinterest.com/8degreethemes/"  /></label>
                                <input type="hidden" name="social_name[]" value="pinterest" />
                            </div> 
                        </li>
                        <li>
                            <div class="single-social-bar">
                                <label class="first-social-wrap"><?php _e( 'linked in', '8degree-maintenance' ) ?></label>
                                <label class="edmm_strong_texts"> Show<input type="checkbox" name="social_controls[linkedin]" value="1" <?php if ( $maintenance_setting['social_controls']['linkedin'] == '1' ) echo 'checked' ?> /></label>
                                <label class="url edmm_strong_texts">URL<input type="url" class="widthbar social-url-wrap" name="social_url[linkedin][url]" value="<?php echo esc_attr( $maintenance_setting['social_url']['linkedin']['url'] ); ?>" placeholder="e.g; https://www.linkedin.com/8degreethemes/" /></label>
                                <input type="hidden" name="social_name[]" value="linkedin" />
                            </div> 
                        </li>
                        <li>
                            <div class="single-social-bar">
                                <label class="first-social-wrap"><?php _e( 'google plus', '8degree-maintenance' ) ?></label>
                                <label class="edmm_strong_texts"> Show<input type="checkbox" name="social_controls[googleplus]" value="1" <?php if ( $maintenance_setting['social_controls']['googleplus'] == '1' ) echo 'checked' ?> /></label>
                                <label class="url edmm_strong_texts">URL<input type="url" class="widthbar social-url-wrap" name="social_url[googleplus][url]" value="<?php echo esc_attr( $maintenance_setting['social_url']['googleplus']['url'] ); ?>" placeholder="e.g; https://plus.google.com/+8DegreeThemes" /></label>
                                <input type="hidden" name="social_name[]" value="googleplus" />
                            </div>
                        </li>
                        <li>
                            <div class="single-social-bar">
                                <label class="first-social-wrap"><?php _e( 'tumblr', '8degree-maintenance' ) ?></label>
                                <label class="edmm_strong_texts"> Show<input type="checkbox" name="social_controls[tumblr]" value="1" <?php if ( $maintenance_setting['social_controls']['tumblr'] == '1' ) echo 'checked' ?> /></label>
                                <label class="url edmm_strong_texts">URL<input type="url" class="widthbar social-url-wrap" name="social_url[tumblr][url]" value="<?php echo esc_attr( $maintenance_setting['social_url']['tumblr']['url'] ); ?>" placeholder="e.g; https://www.tumblr.com/8DegreeThemes" /></label>
                                <input type="hidden" name="social_name[]" value="tumblr" />
                            </div> 
                        </li> 
                        <?php
                    } else {
                        foreach ( $maintenance_setting['social_name'] as $social_icon ) {
                            ?>
                            <li>
                                <div class="single-social-bar">
                                    <label class="first-social-wrap"><?php _e( ucfirst( $social_icon ), '8degree-maintenance' ) ?></label>
                                    <label class="edmm_strong_texts"><?php _e( 'Show', '8degree-maintenance' ) ?> <input type="checkbox" name="social_controls[<?php echo $social_icon; ?>]" value="1" <?php if ( isset( $maintenance_setting['social_controls'][$social_icon] ) && $maintenance_setting['social_controls'][$social_icon] == '1' ) echo 'checked' ?> /></label>
                                    <label class="url edmm_strong_texts"><?php _e( 'URL', '8degree-maintenance' ) ?><input type="url" class="social-url-wrap" name="social_url[<?php echo $social_icon ?>][url]" value="<?php echo esc_attr( $maintenance_setting['social_url'][$social_icon]['url'] ); ?>" placeholder="e.g; https://example.com/8degreethemes" /></label>
                                    <input type="hidden" name="social_name[]" value="<?php echo $social_icon; ?>" />
                                </div>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>

            </div>
        </div>

        <div class="contactus-section general-common-section">
            <h3><?php _e( 'Contact Us Section', '8degree-maintenance' ) ?></h3>
            <div class="edmm-field-wrap">
                <label><?php _e( 'Show', '8degree-maintenance' ) ?></label>
                <div class="edmm-field">
                    <input type="checkbox" class="field-display-trigger" name="show_contact" value="1"  <?php if ( $maintenance_setting['show_contact'] == '1' ) echo 'checked' ?> />
                </div>
            </div>
            <div class="contact-us-fields edmm-show-fields-wrap" <?php if ( $maintenance_setting['show_contact'] != '1' ) { ?>style="display: none;"<?php } ?>>
                <div class="edmm-field-wrap">     
                    <label><?php _e( 'Contact Us Button Label', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text" name="contact_us_button_label" value="<?php echo isset($maintenance_setting['contact_us_button_label'])?esc_attr( $maintenance_setting['contact_us_button_label'] ):__('Contact Us','8degree-maintenance'); ?>" />
                    </div>
                </div>
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Email address', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="email" class="subscribe-input" name="email_address" value="<?php
                        if ( $maintenance_setting['email_address'] == '' ) {
                            $admin_email = get_option( 'admin_email' );
                            echo $admin_email;
                        } else {
                            echo esc_attr( $maintenance_setting['email_address'] );
                        }
                        ?>" />
                    </div>
                </div>
                <div class="edmm-field-wrap">     
                    <label><?php _e( 'Name Label', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text" class="subscribe-input" name="name_label" value="<?php echo esc_attr( $maintenance_setting['name_label'] ); ?>" />
                    </div>
                </div>
                <div class="edmm-field-wrap"> 
                    <label><?php _e( 'Email Label', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text" name="email_label" class="subscribe-input" value="<?php echo esc_attr( $maintenance_setting['email_label'] ); ?>" />
                    </div>
                </div>
                <div class="edmm-field-wrap"> 
                    <label><?php _e( 'Message Label', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text" class="subscribe-input" name="message_label" value="<?php echo esc_attr( $maintenance_setting['message_label'] ); ?>" />
                    </div>
                </div>
                <div class="edmm-field-wrap"> 
                    <label><?php _e( 'Submit Button Label', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text" class="subscribe-input" name="submit_label" value="<?php echo esc_attr( $maintenance_setting['submit_label'] ); ?>" />
                    </div>
                </div>
            </div>
        </div>

        <div class="timer-section general-common-section">
            <h3><?php _e( 'Countdown Timer Section', '8degree-maintenance' ) ?></h3>
            <div class="edmm-field-wrap">
                <label><?php _e( 'Enable Countdown', '8degree-maintenance' ) ?></label>
                <div class="edmm-field">
                    <input type="checkbox" class="field-display-trigger" name="show_countdown" value="1" <?php if ( $maintenance_setting['show_countdown'] == '1' ) echo 'checked' ?> />
                    <p class="description"><?php _e( 'Note: Check enable countdown to display countdown timer in coming soon page.', '8degree-maintenance' ); ?></p>
                </div>
            </div>

            <div class="countdown-fields edmm-show-fields-wrap" <?php if ( $maintenance_setting['show_countdown'] != '1' ) { ?>style="display: none;"<?php } ?>>
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Countdown Expiry Date:', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text"  name="countdown_date" class="custom_date"  value="<?php echo esc_attr( $maintenance_setting['countdown_date'] ); ?>" placeholder=""/>   
                    </div>
                </div>
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Days Label', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text"  class="subscribe-input size" name="days_timer" value="<?php echo isset($maintenance_setting['days_timer'])?esc_attr( $maintenance_setting['days_timer'] ):''; ?>" placeholder="<?php _e( 'Days', '8degree-maintenance' ); ?>" />
                    </div>
                </div>
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Hour Label', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text"  class="subscribe-input size" name="hour_timer" value="<?php echo esc_attr( $maintenance_setting['hour_timer'] ); ?>" placeholder="<?php _e( 'Hour', '8degree-maintenance' ); ?>" />
                    </div>
                </div>
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Minute Label', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text" class="subscribe-input size" name="minute_timer" value="<?php echo esc_attr( $maintenance_setting['minute_timer'] ); ?>" placeholder="<?php _e( 'Min', '8degree-maintenance' ); ?>" />
                    </div>
                </div>
                <div class="edmm-field-wrap">
                    <label><?php _e( 'Second Label', '8degree-maintenance' ) ?></label>
                    <div class="edmm-field">
                        <input type="text" class="subscribe-input size" name="second_timer" value="<?php echo esc_attr( $maintenance_setting['second_timer'] ); ?>" placeholder="<?php _e( 'Sec', '8degree-maintenance' ); ?>" />
                    </div>
                </div>


            </div>
        </div>
    </div>




</div> <!--General Settings Wrap End-->