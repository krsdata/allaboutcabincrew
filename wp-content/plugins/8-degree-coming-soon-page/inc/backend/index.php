<?php
defined( 'ABSPATH' ) or die( "No script kiddies please!" );


$settings_data = get_option( 'maintenance_settings' );
//Checking post data
// echo '<pre>';
//  print_r($settings_data);
//  echo '</pre>'; 
?>
<!--INDEX PAGE FOR DISPLAYING COMMING SOON PAGE-->
<html>

    <head>

        <script src="<?php echo MAINTENANCE_JS_DIR . '/frontend/jquery-1.11.3.min.js' ?>"></script>
        <script src="<?php echo MAINTENANCE_JS_DIR . '/frontend/script-frontend.js' ?>"></script>
        <script src="<?php echo MAINTENANCE_JS_DIR . '/jquery.downCount.js' ?>"></script>


        <?php
        //Display Google analytics 


        if ( $settings_data['hide_search_engines'] == '1' ) {
            ?>
            <meta name='robots' content='noindex,nofollow' />
        <?php } ?>
        <!-- Meta Tags-->   
        <meta name="<?php echo $settings_data['meta_name']; ?>" content="<?php echo $settings_data['meta_content']; ?>" />

        <!-- Meta Tags end-->
        <link href="<?php echo MAINTENANCE_CSS_DIR . '/TimeCircles.css' ?>" rel="stylesheet" />
        <link href="<?php echo MAINTENANCE_CSS_DIR . '/styles.css' ?>" rel="stylesheet" /> 
        <link href="<?php echo MAINTENANCE_CSS_DIR . '/font-awesome.min.css' ?>" rel="stylesheet" />
        <link href="<?php echo MAINTENANCE_CSS_DIR . '/frontend-style.css' ?>" rel="stylesheet" />
        <link rel="shortcut icon" href="<?php
        if ( !empty( $settings_data['favicon'] ) ) {
            echo esc_attr( $settings_data ['favicon'] );
        }
        ?>" type="images/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!- -- Style for social icons --->
        <?php include(EDCSP_PATH.'/inc/frontend/dynamic-style.php');?>
        
        <!--Google Analytics Code-->
        <?php
        /* if(!$settings_data['google_analytics'] == ''){
          echo $settings_data['google_analytics'];
          } */

        if ( strpos( $settings_data['google_analytics'], '</script>' ) == true ) {
            //if($settings_data['google_analytics']){
            echo $settings_data['google_analytics'];
        }
        do_action('edmm_head',$settings_data);
        ?>

    </head>

    <title><?php _e( 'Site Under Maintenance', '8degree-maintenance' ) ?></title>

    <body class="edn-coming-soon-body">

        <div class="frontend-all-wrapper">    

            <!--Heading and Description Section-->  

            <div class="maintenance-note-wrapper">
                <?php if ( $settings_data['show_head'] == 1 ) { ?>
                    <h1 style="text-align: center; color: <?php echo $settings_data['headline_color']; ?>;">
                        <?php echo $settings_data['headline_text']; ?>
                    </h1>
                <?php } ?>

                <?php if ( $settings_data['show_description'] == 1 ) { ?>
                    <p style="text-align: center; color: <?php echo $settings_data['description_color']; ?>"><?php echo stripslashes( $settings_data['description'] ); ?></p>
                <?php } ?>
            </div>

            <?php
            $enable_countdown = $settings_data['show_countdown'];

            $day = $settings_data['countdown_date'];
            $hour = $settings_data['hour_timer'];
            $minute = $settings_data['minute_timer'];

            if ( $enable_countdown == '1' ) {
                ?> 

                <input type="hidden" name="hidden_date" class="date_val" value="<?php echo $settings_data['countdown_date']; ?>" />
                <input type="hidden" name="hidden_hour" class="day_val" value="<?php echo isset($settings_data['days_timer'])?esc_attr($settings_data['days_timer']):''; ?>" />
                <input type="hidden" name="hidden_hour" class="hour_val" value="<?php echo esc_attr($settings_data['hour_timer']); ?>" />
                <input type="hidden" name="hidden_minute" class="minute_val" value="<?php echo esc_attr($settings_data['minute_timer']); ?>" />
                <input type="hidden" name="hidden_second" class="second_val" value="<?php echo esc_attr($settings_data['second_timer']); ?>" />

            <?php } ?>

            <!--Countdown Timer Section--> 

            <div class="countdown-wrap"> 
                <?php if ( $settings_data['show_countdown'] == '1' ) { ?>       
                    <?php if ( $settings_data['timerlayout'] == 'layout1' ) { ?>
                        <ul class="countdown countdown-layout1">
                            <li>
                                <span class="days">00</span>
                                <p class="days_ref"><?php echo (isset($settings_data['days_timer']) && $settings_data['days_timer']!='')?esc_attr($settings_data['days_timer']):__('Days');?></p>
                            </li>
                            <li>
                                <span class="hours">00</span>
                                <p class="hours_ref"><?php echo (isset($settings_data['hour_timer']) && $settings_data['hour_timer']!='')?esc_attr($settings_data['hour_timer']):__('Hours');?></p>
                            </li>
                            <li>
                                <span class="minutes">00</span>
                                <p class="minutes_ref"><?php echo (isset($settings_data['minute_timer']) && $settings_data['minute_timer']!='')?esc_attr($settings_data['minute_timer']):__('Minutes');?></p>
                            </li>
                            <li>
                                <span class="seconds last">00</span>
                                <p class="seconds_ref"><?php echo (isset($settings_data['second_timer']) && $settings_data['second_timer']!='')?esc_attr($settings_data['second_timer']):__('Seconds');?></p>
                            </li>
                        </ul>
                    <?php } ?>
                    <?php if ( $settings_data['timerlayout'] == 'layout2' ) { ?>
                        <ul class="countdown countdown_layout2">
                            <li>
                                <span class="days lay2-days">00</span>
                                <p class="days_ref days-layout2">days</p>
                            </li>
                            <li>
                                <span class="hours lay2-hours">00</span>
                                <p class="hours_ref hours-layout2">hours</p>
                            </li>
                            <li>
                                <span class="minutes lay2-minute">00</span>
                                <p class="minutes_ref minute-layout2">minutes</p>
                            </li>
                            <li>
                                <span class="seconds last lay2-second">00</span>
                                <p class="seconds_ref seconds-layout2">seconds</p>
                            </li>
                        </ul>

                        <?php
                    }
                }
                ?>

            </div> 

            <!--Subscriber Form Section--> 
            <?php if(isset($settings_data['show_subscribe']) && $settings_data['show_subscribe'] == 1){?>
            <div class="subscriber-form-wrap">
                <form method="post" action="" class="subscriber-form" name="subscriber-form"> 
                    <input type="hidden" id="edmm-ajax-url" value="<?php echo admin_url( 'admin-ajax.php' ); ?>"/>
                    <div class="subscriber-wrap edmm-subscribe-<?php echo $settings_data['subs_layout']; ?>">
                        <?php if ( $settings_data['subscribe_heading_text'] != '' ) { ?> <h3><?php echo esc_attr( $settings_data['subscribe_heading_text'] ); ?></h3><?php } ?>

                        <div class="edmm_form_wrap">
                            <?php if ( $settings_data['subscribe_form_label'] != '' ) { ?><label class="edmm-subscribe-label"><?php echo $settings_data['subscribe_form_label']; ?></label><?php } ?>
                            <input type="text" name="subscribe_email" class="subscribe-input-layout1 s2email" id="edmm-sub-email2" placeholder="<?php _e( 'Please enter your email address', '8degree-maintenance' ); ?>" />
                            <?php
                            /**
                             * Creating a nonce field
                             * */
                            wp_nonce_field( 'subscriber-nonce', 'subscriber_nonce_field' );
                            ?>
                            <span class="fa-input-section">
                                <input type="submit" name="submit_subscriber" class="subscribe-submit-layout1 sub-submit" value="<?php echo ( $settings_data['subscribe_button_text'] != '' ) ? $settings_data['subscribe_button_text'] : __( 'Subscribe', '8degree-maintenance' ); ?>" />
                                
                            </span>
                            <img src="<?php echo MAINTENANCE_IMAGE_DIR . '/ajax-loader.gif'; ?>" class="edmm-subscribe-loader" style="display:none;"/>

                        </div>
                        <div id="error_email2" class="validation_error error_email" style="display: none;"></div>
                        <div class="subscribe-message"> </div>
                    </div>

                </form>      
            </div>
            <?php }?>

            <!--Social icon Section--> 

            <?php if ( $settings_data['show_social_network'] == '1' ) { ?>
                <div class="social-links-div">
                    <?php
                    /* echo '<pre>';
                      print_r($settings_data);
                      echo '</pre>'; */



                    foreach ( $settings_data['social_name'] as $social_icon ) {
                        if ( isset( $settings_data['social_controls'][$social_icon] ) && $settings_data['social_controls'][$social_icon] == 1 ) {
                            if ( $social_icon == 'facebook' ) {
                                $class = 'fa fa-facebook';
                            } elseif ( $social_icon == 'twitter' ) {
                                $class = 'fa fa-twitter';
                            } elseif ( $social_icon == 'pinterest' ) {
                                $class = 'fa fa-pinterest-p"';
                            } elseif ( $social_icon == 'linkedin' ) {
                                $class = 'fa fa-linkedin"';
                            } elseif ( $social_icon == 'googleplus' ) {
                                $class = 'fa fa-google-plus"';
                            } elseif ( $social_icon == 'tumblr' ) {
                                $class = 'fa fa-tumblr"';
                            }
                            ?><!--<div class="social-icons-bg">-->
                            <a href="<?php echo $settings_data['social_url'][$social_icon]['url']; ?>" target="_blank"><i class="<?php echo $class; ?>"></i></a>
                            <!--</div>-->
                            <?php
                        }
                    }
                    ?>
                </div> 
            <?php } ?>

            <!--Contact us Section-->  

            <div class="contact-section-wrapper">


                <?php if ( $settings_data['show_contact'] == 1 ) { ?>
                    <div class="contact-button">
                        <a href="javascript:void(0);" class="contact_pop_trigger"><?php echo (isset($settings_data['contact_us_button_label']) && $settings_data['contact_us_button_label']!='')?esc_attr($settings_data['contact_us_button_label']):_e( 'Contact Us', '8degree-maintenance' ) ?></a>    
                    </div>
                <?php } ?>
                <div class="contact-pop-main" style="display: none;">                    
                    <div class="contact-form-div" >
                        <a href="javascript:void(0)" class="contact-close">X</a> 

                        <form method="post" name="form_contact_data" >


                            <span id="edmm-msg"></span>

                            <label class="frontend-form"><?php
                                if ( $settings_data['name_label'] ) {
                                    echo $settings_data['name_label'];
                                } else {
                                    echo __( 'Name', '8degree-maintenance' );
                                }
                                ?></label><input type="text" name="name_person" id="edmm-contact-name"  class="contact_name_field empty-common-contact" />
                            <div id="error_contact_name" class="validation_error"></div>
                            <label class="frontend-form"><?php
                                if ( $settings_data['email_label'] ) {
                                    echo $settings_data['email_label'];
                                } else {
                                    echo __( 'Email', '8degree-maintenance' );
                                }
                                ?></label><input type="text" name="email_person" id="edmm-contact-email" class="contact_email_field empty-common-contact" />
                            <div id="error_contact_email" class="validation_error"></div>
                            <label class="frontend-form"><?php
                                if ( $settings_data['message_label'] ) {
                                    echo $settings_data['message_label'];
                                } else {
                                    echo __( 'Message', '8degree-maintenance' );
                                }
                                ?></label><textarea rows="5" cols="20" id="edmm-contact-msg" name="message_of_person" class="contact_msg_field empty-common-contact"></textarea>
                                 <div id="error_contact_msg" class="validation_error"></div>
                             <div class="edmm-data" data-url="<?php echo admin_url( 'admin-ajax.php' ); ?>" ></div>
                             <input type="button" class="submit_contact" name="submit_contact_details" value="<?php
                            if ( !$settings_data['submit_label'] == '' ) {
                                echo $settings_data['submit_label'];
                            } else {
                                _e( 'Send', '8degree-maintenance' );
                            }
                            ?>" />
                                                                                                                                         
                             <div id="edmm-loading" style="display:none"><img src="<?php echo MAINTENANCE_IMAGE_DIR . '/loader.gif' ?>" /></div>
                             <div class="contact-success-message"></div>
                             <input type="hidden" id="edn-ajax-nonce" value="<?php echo wp_create_nonce( 'edn-ajax-nonce' ); ?>"  />
                            
                             
                        </form>
                    </div>
                    </div>

            </div>
            
        
         
       </div>  
        
  </body> <!--Body part end-->
  

</html>