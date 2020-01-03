<h1><?php _e('General Settings','edn-plugin');?></h1>
<!-- Plugin Enable and Disable Section -->
<div class="edn-enable-wrap">
    <span class="edn-enable">
    <label><?php _e('Enable Notification bar','edn-plugin');?>
        <input type="checkbox" name="edn_optons" value="1" <?php if($edn_settings['edn_optons']==1){echo 'checked="checked"';}?> />
    </label>
    <p class="note"><?php _e('Note: Check to enable notification bar in your site.','edn-plugin');?></p>
    </span>
    <br/>
    <span class="edn-enable">
    <label><?php _e('Disable bar in mobile','edn-plugin');?>
        <input type="checkbox" name="edn_mobile_optons" value="1" <?php if(isset($edn_settings['edn_mobile_optons']) && $edn_settings['edn_mobile_optons']==1){echo 'checked="checked"';}?> />
    </label>
    <p class="note"><?php _e('Note: Check to disable notification bar on mobile in your site.','edn-plugin');?></p>
    </span>

    </div> <!-- Enable and Disable Section -->
    <!-- Social Network -->
    <div class="edn-social-network-opt-wrap"><strong></strong>
        <h3><?php _e('Social Network Section','edn-plugin');?></h3>
        <label><?php _e('Show/hide','edn-plugin');?>
            <input type="checkbox" name="social_network" value="1" id="social_show" <?php if($edn_settings['social_network']==1){echo 'checked="checked"';}?> />
        </label>
        <div class="edn-social-option-warp" id="social_option_show" style="display: none;">
            <div class="heading_text">
                <label><?php _e('Heading Text','edn-plugin');?></label>
                <input type="text" name="social_heading_text" value="<?php echo esc_attr($edn_settings['social_heading_text']);?>" placeholder="<?php _e('Follow Us');?>" />
            </div>
            <div id="edn-fb-opt-wrap" class="sort">
                <label><?php _e('Facebook','edn-plugin');?></label>
                <input type="checkbox" name="socail_controls[facebook]" id="fb_show" value="1" <?php if(isset($edn_settings['socail_controls']['facebook'])){if($edn_settings['socail_controls']['facebook']==1){echo 'checked="checked"';}}?> />
                <span id="fb-url" style="display: ;">
                <label><?php _e('URL','edn-plugin');?> :</label>
                <input type="text" name="socail_icons[facebook][url]" value="<?php echo esc_attr($edn_settings['socail_icons']['facebook']['url']);?>" placeholder="<?php _e('https://www.facebook.com/8DegreeThemes','edn-plugin');?>"/>
                </span>
            </div>
            <div id="edn-tw-opt-wrap" class="sort">
                <label><?php _e('Twitter','edn-plugin');?></label>
                <input type="checkbox" name="socail_controls[twitter]" id="tw_show" value="1" <?php if(isset($edn_settings['socail_controls']['twitter'])){if($edn_settings['socail_controls']['twitter']==1){echo 'checked="checked"';}}?> />
                <span id="tw-url" style="display: ;">
                <label><?php _e('URL','edn-plugin');?> :</label>
                <input type="text" name="socail_icons[twitter][url]" value="<?php echo esc_attr($edn_settings['socail_icons']['twitter']['url']);?>" placeholder="<?php _e('https://twitter.com/8degreethemes','edn-plugin');?>"/>
                </span>
            </div>
            <div id="edn-lnk-opt-wrap" class="sort">
                <label><?php _e('Linkedin','edn-plugin');?></label>
                <input type="checkbox" name="socail_controls[linkedin]" id="lnk_show" value="1" <?php if(isset($edn_settings['socail_controls']['linkedin'])){if($edn_settings['socail_controls']['linkedin']==1){echo 'checked="checked"';}}?> />
                <span id="lnk-url" style="display: ;">
                <label><?php _e('URL','edn-plugin');?> :</label>
                <input type="text" name="socail_icons[linkedin][url]" value="<?php echo esc_attr($edn_settings['socail_icons']['linkedin']['url']);?>" placeholder="<?php _e('https://linkedin.com/8degreethemes','edn-plugin');?>"/>
                </span>
            </div>
            <div id="edn-gp-opt-wrap" class="sort">
                <label><?php _e('Google+','edn-plugin');?></label>
                <input type="checkbox" name="socail_controls[googlePlus]" id="gp_show" value="1" <?php if(isset($edn_settings['socail_controls']['googlePlus'])){if($edn_settings['socail_controls']['googlePlus']==1){echo 'checked="checked"';}}?> />
                <span id="gp-url" style="display: ;">
                <label><?php _e('URL','edn-plugin');?> :</label>
                <input type="text" name="socail_icons[googlePlus][url]" value="<?php echo esc_attr($edn_settings['socail_icons']['googlePlus']['url']);?>" placeholder="<?php _e('https://plus.google.com/+8DegreeThemes','edn-plugin');?>"/>
                </span>
            </div>
        </div>
        </div><!-- End Social Network -->
        <!-- Notification Type -->
        <div class="edn-notification-type-main-wrap">
            <h3><?php _e('Notification Type','edn-plugin');?></h3>
            <!-- Notification Type -->
            <div class="edn-choose-option" id="edn-type">
                <span class="edn-type-radio-wrap1">
                <label>
                    <input type="radio" name="edn_type" id="edn_type_text" value="1" <?php if($edn_settings['edn_type']==1){{echo 'checked="checked"';}}?> />
                <?php _e('Text','edn-plugin');?></label>
                </span>
                <span class="edn-type-radio-wrap2">
                <label>
                    <input type="radio" name="edn_type" id="edn_type_newsletter" value="2" <?php if($edn_settings['edn_type']==2){echo 'checked="checked"';}?> />
                <?php _e('Opt-in form','edn-plugin');?></label>
                </span>
            </div>
            <!-- text type -->
            <div class="" id="edn_notification_type_text">
                <!-- Display mode -->
                <div class="edn-choose-option" id="edn-display-mode">
                    <h4><?php _e('Display Mode','edn-plugin');?></h4>
                    <label>
                        <span class="normal"><input type="radio" name="display_mode" id="mode_normal" value="1" <?php if($edn_settings['display_mode']==1){echo 'checked="checked"';}?> /></span>
                        <?php _e('Normal','edn-plugin');?>
                    </label>
                    <label>
                        <span class="slider"><input type="radio" name="display_mode" id="mode_slider" value="2" <?php if($edn_settings['display_mode']==2){echo 'checked="checked"';}?> /></span>
                        <?php _e('Slider','edn-plugin');?>
                    </label>
                    <label>
                        <span class="ticker"><input type="radio" name="display_mode" id="mode_ticker" value="3" <?php if($edn_settings['display_mode']==3){echo 'checked="checked"';}?> /></span>
                        <?php _e('Ticker','edn-plugin');?>
                    </label>
                </div>
                <div class="edn-display-mode-option">
                    <div id="edn_mode_text">
                        <label><?php _e('Notification Text','edn-plugin');?></label>
                        <textarea name="noti_text"><?php echo esc_attr(stripslashes($edn_settings['noti_text']));?></textarea>
                    </div>
                    <div id="edn_mode_slider" style="display: none;">
                        <div class="edn-slider-warp">
                            <div id="append_field">
                                <?php
                                    $slidertext = $edn_settings['slider_text'];
                                    //print_r($slidertext);
                                    $last = count($slidertext);
                                    if($slidertext)
                                    {
                                        $sn = 1;
                                        foreach($edn_settings['slider_text'] as $key=>$val)
                                        {
                                            $slider_text = $$key = $val;
                                ?>
                                <div id="edn-slider-text<?php echo $sn;?>" <?php if($sn==$last)echo 'class="add_last"';?>>
                                    <label><?php _e('Slider Text '.$sn,'edn-plugin');?></label>
                                    <input type="text" name="slider_text[]" value="<?php echo $slider_text;?>" />
                                    <a href="javascript:void(0);" class="edn_remove_slider"><i class="fa fa-times"></i></a>
                                </div>
                                <?php
                                        $sn++;
                                        }
                                    }
                                else
                                {
                                ?>
                                <div id="edn-slider-text1" class="add_last">
                                    <label><?php _e('Slider Text 1','edn-plugin');?></label>
                                    <input type="text" name="slider_text[]" value="<?php echo esc_attr($edn_settings['slider_text'][0]);?>" />
                                </div>
                                <?php }?>
                            </div>
                            <input class="edn_buttons" type="button" value="Add Slide" id="edn_add_slide"/>
                        </div>
                        <div id="edn-slide-duration">
                            <label><?php _e('Slide Duration','edn-plugin');?></label>
                            <input type="text" name="slide_duration" value="<?php echo esc_attr($edn_settings['slide_duration']);?>" placeholder="<?php _e('eg: 500','edn-plugin');?>" />
                            <p class="note"><?php _e('Note: Duration between each slide in milliseconds(pause).','edn-plugin');?></p>
                        </div>
                        <div id="edn_slide_transition">
                            <label><?php _e('Slide Transition','edn-plugin');?></label>
                            <input type="text" name="slide_transition" value="<?php echo esc_attr($edn_settings['slide_transition']);?>" placeholder="<?php _e('eg: 500','edn-plugin');?>" />
                            <p class="note"><?php _e('Note: Duration of each slide in milliseconds(speed).','edn-plugin');?></p>
                        </div>
                        <div id="edn-slide-control-wrap">
                            <h3><?php _e('Slider Controls','edn-plugin');?></h3>
                            <label><?php _e('Show/hide','edn-plugin');?></label>
                            <input type="checkbox" name="slider_controls" value="1" id="edn_slider_controls" <?php if($edn_settings['slider_controls']==1){echo 'checked="checked"';}?> />
                        </div>
                        </div><!-- end edn_mode_slider -->

                        <div id="edn_mode_ticker" style="display: none;">
                            <label><?php _e('Ticker Pause on Hover','edn-plugin');?></label>
                            <input type="checkbox" name="ticker_hover" value="1" <?php if($edn_settings['ticker_hover']==1){echo 'checked="checked"';}?> />
                            <div id="edn_ticker_text">
                                <label><?php _e('Notification Text','edn-plugin');?></label>
                                <textarea name="ticker_text"><?php echo $edn_settings['ticker_text'];?></textarea>
                            </div>
                            <div id="edn_ticker_speed">
                                <label><?php _e('Ticker Speed','edn-plugin');?></label>
                                <input type="text" name="ticker_speed" value="<?php echo esc_attr($edn_settings['ticker_speed']);?>" placeholder="<?php _e('eg: 5000','edn-plugin');?>" />
                                <p class="note"><?php _e('Note: Speed of ticker slide in milliseconds.','edn-plugin');?></p>
                            </div>
                            </div><!-- edn_mode_slider -->
                            </div><!-- edn-display-mode-option -->
                            </div><!-- edn_notification_type_text -->

                            <!-- Newsletter type -->
                            <div id="edn-notification-type-newsletter" style="display: none;">
                                <div id="edn_newsletter_heading_text">
                                    <label><?php _e('Form Header Text','edn-plugin');?></label>
                                    <input type="text" name="news_heading_text" value="<?php echo esc_attr($edn_settings['news_heading_text']);?>" />
                                </div>
                                <div id="edn_subscribe_button_text">
                                    <label><?php _e('Button Text','edn-plugin');?></label>
                                    <input type="text" name="subs_button_text" value="<?php echo esc_attr($edn_settings['subs_button_text']);?>" />
                                </div>
                                <div id="edn_email_placeholder">
                                    <label><?php _e('Form (email) Field Label','edn-plugin');?></label>
                                    <input type="text" name="email_placeholder" value="<?php echo esc_attr($edn_settings['email_placeholder']);?>" />
                                </div>
                                <div id="edn_thank_note">
                                    <label><?php _e('Thank You Note','edn-plugin');?></label>
                                    <textarea name="thank_note"><?php echo esc_attr($edn_settings['thank_note']);?></textarea>
                                </div>
                                <div id="edn_enable_check_confirm">
                                    <label><?php _e('Enable Check Conformation','edn-plugin');?></label>
                                    <input type="checkbox" name="check_confirm" value="1" <?php if($edn_settings['check_confirm']==1){echo 'checked="checked"';}?> />
                                    <p class="note"><?php _e('Check if you want users to confirm their address before subscription.');?></p>
                                </div>
                            </div>

                            </div><!-- Notification Type -->
                            <!-- Notification Bar Controls -->
                            <div class="edn-bar-control-wrap">
                                <h3><?php _e('Notification Bar Controls','edn-plugin');?></h3>
                                    <span class="show-only-once"><label>
                                      <?php _e('Show Only Once','edn-plugin')?>
                                    <input type="checkbox" name="enable_show_once" value="1" <?php if(isset($edn_settings['enable_show_once']) && ($edn_settings['enable_show_once']==1)){
                                        echo 'checked="checked"';}?> />
                                       </label> 
                                       <p class="note"><?php _e('Note: Check to enable if want to show only once after user close. Default: Cookies set for 1 day after user click on close button.','edn-plugin');?></p>   
                                    </span>
                                    <br/> 
                                <span class="always-show">
                                <label><input type="radio" name="nb_controls" value="1" <?php if($edn_settings['nb_controls']==1){echo 'checked="checked"';}?> />
                            <?php _e('Always Show','edn-plugin')?></label></span>
                            <span class="dismiss"><label><input type="radio" name="nb_controls" value="2" <?php if($edn_settings['nb_controls']==2){echo 'checked="checked"';}?> />
                        <?php _e('User Can Dismiss','edn-plugin')?></label> </span>
                        <span class="user-close"><label><input type="radio" name="nb_controls" value="3" <?php if($edn_settings['nb_controls']==3){echo 'checked="checked"';}?> />
                    <?php _e('User Can Close','edn-plugin')?></label>    </span>
                    </div><!-- Notification Bar Controls -->