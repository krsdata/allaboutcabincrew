<?php
defined('ABSPATH') or die("No script kiddies please!");
/**
 * Posted Data
 * Array
(
    [edn_optons] => 1
    [edn_mobile_optons] => 1
    [social_network] => 1
    [social_heading_text] => Link us
    [socail_controls] => Array
        (
            [facebook] => 1
            [twitter] => 1
            [linkedin] => 1
            [googlePlus] => 1
        )

    [socail_icons] => Array
        (
            [facebook] => Array
                (
                    [url] => https://www.facebook.com/
                )

            [twitter] => Array
                (
                    [url] => http://www.twitter.com/
                )

            [linkedin] => Array
                (
                    [url] => http://www.linkedin.com/
                )

            [googlePlus] => Array
                (
                    [url] => https://plus.google.com/
                )

        )

    [social_order] => Array
        (
            [0] => facebook
            [1] => twitter
            [2] => linkedin
            [3] => googlePlus
        )

    [edn_type] => 1
    [display_mode] => 2
    [noti_text] => safsadfasd
    [slider_text] => Array
        (
            [0] => what 
            [1] => do
            [2] => you
            [3] => want ?
        )

    [slide_duration] => 500
    [slide_transition] => 500
    [ticker_hover] => 
    [ticker_text] => 
    [news_heading_text] => 
    [subs_button_text] => 
    [email_placeholder] => 
    [thank_note] => 
    [check_confirm] => 
    [nb_controls] => 1
    [enable_show_once] => 0
    [noti_placement] => Top
    [noti_height] => 
    [edn_background_color] => #8224e3
    [edn_font_color] => #81d742
    [social_bg_color] => #eeee22
    [social_bg_hover_color] => #dd9933
    [social_font_color] => #dbdbdb
    [social_font_hover_color] => #636363
    [notification_font] => Font 2
)
*/
$edn_data = $this->edn_settings;
if($edn_data['edn_optons']==1){if(!is_feed()){
    $dstyle= !(isset($_COOKIE["setcookie_time"]))?'':'style="display:none;"';
?>

<!--INDEX PAGE FOR DISPLAYING NOTIFICATION BAR-->
<div class="edn_close_section" <?php echo $dstyle;?>>
    <div class="edn-notify-bar edn-position-<?php echo esc_attr($edn_data['noti_placement']);?>">
        <div class="edn_container_wrapper">
            <?php if(!empty($edn_data['social_network'])){;?>
            <!-- -------- Social network -------- -->
                <?php
                    $slider_array = ($edn_data['slider_text']);
                    $count = count($slider_array);
                    if($edn_data['edn_type']==1 && $edn_data['noti_text']=='' && $edn_data['ticker_text']=='' && ($slider_array[0]=='' && $count<2)){$class = 'edn-social-center-wrap';}else{$class = '';}
                ?>
                <div class="edn-social-network-wrapper <?php echo $class;?>">
                    <div class="edn-front-title"><?php echo $edn_data['social_heading_text'];?></div>
                    <?php 
                        foreach($edn_data['social_order'] as $social_icons)
                        {
                            if(isset($edn_data['socail_controls'][$social_icons]) && $edn_data['socail_controls'][$social_icons] == 1)
                            {
                                $url = $edn_data['socail_icons'][$social_icons]['url'];
                                if($social_icons=='facebook'){$icons_class="fa fa-facebook";}elseif($social_icons=='twitter'){$icons_class='fa fa-twitter';}
                                elseif($social_icons=='linkedin'){$icons_class='fa fa-linkedin';}elseif($social_icons='googlePlus'){$icons_class='fa fa-google-plus';}
                                ?>
                                    <div class="edn-social-icon-buttons">
                                        <a href="<?php echo $url;?>" target="_blank"><i class="<?php echo $icons_class;?>"></i></a>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
                <!-- End Social network -->
            <?php }?>
            
            <!---------- Notification type ---------->
            <?php 
                $slider_array = ($edn_data['slider_text']);
                $count = count($slider_array);
                if($edn_data['edn_type']==1 && $edn_data['noti_text']=='' && $edn_data['ticker_text']=='' && ($slider_array[0]=='' && $count<2)){}else{
                if(empty($edn_data['social_network'])){$edn_type_main_class='edn-type-main-center-wrap';}else{$edn_type_main_class='';} // check empty
            ?> 
            <div class="edn-type-main-wrapper <?php echo $edn_type_main_class;?>">
                <?php if($edn_data['edn_type']==1){?>
                    <div class="edn-type-text-wrap">
                        <?php switch ($edn_data['display_mode']) {
                                case '1':
                                    ?>
                                        <div class="edn-display-mode-normal">
                                            <p><?php echo $edn_data['noti_text'];?></p>    
                                        </div>
                                    <?php
                                break;
                                case '2';
                                    ?>
                                        <div class="edn-display-mode-slider">
                                            <ul class="notify_slider" data-slide-duration="<?php echo $edn_data['slide_duration'];?>" data-slide-transition="<?php echo $edn_data['slide_transition'];?>" data-slide-controls="<?php echo $edn_data['slider_controls'];?>">
                                                <?php
                                                    foreach($edn_data['slider_text'] as $slider_text)
                                                    {
                                                        ?>
                                                            <li><?php echo $slider_text;?></li>
                                                        <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    <?php
                                break;
                                case '3';
                                    ?>
                                        <div class="edn-display-mode-ticker">
                                            <div class="edn-ticker-slider" data-ticker-hover="<?php if($edn_data['ticker_hover']==1){echo 'true';}else{echo 'false';}?>" data-ticker-speed="<?php echo $edn_data['ticker_speed'];?>" >
                                                <div class="edn-ticker">
                                                    <span class="f-left"><?php echo html_entity_decode($edn_data['ticker_text']);?></span>
                                                    <span class="f-left"><?php echo html_entity_decode($edn_data['ticker_text']);?></span>
                                                    <span class="f-left"><?php echo html_entity_decode($edn_data['ticker_text']);?></span>
                                                    <span class="f-left"><?php echo html_entity_decode($edn_data['ticker_text']);?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                break;
                            default:
                                break;
                            }
                        ?>
                    </div>
                <?php }else{?>
                    <div class="edn-type-newsletter-wrap">
                        <div class="edn-subscribe-form">
                            <div class="edn-front-title"><?php echo esc_attr($edn_data['news_heading_text']);?></div>
                            <form method="post" action="" id="subscribeform">
                                <?php
                                    $valid = __('Please enter a valid email address','edn-plugin');
                                    $success = $edn_data['thank_note'];
                                    $already = __('You have already subscribe','edn-plugin');
                                    $check_to_conform = __('Please check your mail to confirm.','edn-plugin');
                                ?>
                                <input type="email" name="edn_email" placeholder="<?php echo esc_attr($edn_data['email_placeholder']);?>" class="edn_subs_email_r" />
                                <input type="button" name="edn_subscribe_submit" value="<?php echo esc_attr($edn_data['subs_button_text']);?>" id="edn_subs_submit_ajax" />
                                <?php 
                                /**
                                 * Creating a nonce field
                                 * */
                                 wp_nonce_field('edn-subs-nonce','edn_subs_nonce_field');
                                ?>
                            </form>
                            <div class="edn-subs-massage-wrap">
                                <span class="error">
                                    <?php
                                        if(isset($_SESSION['edn-subs-sms'])){echo $_SESSION['edn-subs-sms'];unset($_SESSION['edn-subs-sms']);}
                                    ?>
                                </span>
                                <span id="edn-msg" data-valid-msg="<?php echo $valid;?>" data-success="<?php echo $success;?>"
                                data-aready-subs="<?php echo $already;?>" data-check-conform="<?php echo $check_to_conform;?>"
                                ></span>
                                <span id="edn-loading" style="display: none;"><img src="<?php echo  EDN_IMAGE_DIR;?>/loader.gif" /></span>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div><!-- End Notification type -->
            <?php }?><!-- check empty -->
        </div><!-- edn_container_wrapper -->
    </div>
    <!-- -------- Notification Controls -------- -->
    <?php if($edn_data['nb_controls']!=='1'){?>
    <div class="edn-cntrol-wrap edn-controls-<?php echo esc_attr($edn_data['noti_placement']);?>">
        <?php
            if($edn_data['nb_controls']==1)
            {
                ?>
                <?php
            }elseif($edn_data['nb_controls']==2){
                if($edn_data['noti_placement']=='Top'){
                ?>
                    <a href="javascript:void(0)" class="edn-controls-dismiss">
                        <div class="edn-top-up-arrow"><i class="fa fa-angle-up"></i></div>
                        <div class="edn-top-down-arrow" style="display: none;"><i class="fa fa-angle-down"></i></div>
                    </a>
                <?php
                }else{
                    ?>
                        <a href="javascript:void(0)" class="edn-controls-dismiss">
                            <div class="edn-bottom-down-arrow"><i class="fa fa-angle-down"></i></div>
                            <div class="edn-bottom-up-arrow" style="display: none;"><i class="fa fa-angle-up"></i></div>
                        </a>
                    <?php
                }
            }else{
                ?>
                    <a href="javascript:void(0)" class="edn-controls-close"><i class="fa fa-close"></i>
                        <img src="<?php echo  EDN_IMAGE_DIR;?>/loader.gif" id="edn-close-load" style="display: none;" />
                    </a>
                <?php
            }
        ?>
    </div><!-- End of Notification Controls -->
    <?php }?>
</div>
<?php
    $heights = (int)$edn_data['noti_height'];
    if($heights == 50){$container_padding = 10;}else{if($heights<36){$container_padding = $heights*0.0200;}elseif($heights<45){$container_padding = $heights*0.1300;}elseif($heights<50){$container_padding = $heights*0.1600;}elseif($heights>99){$container_padding = $heights*0.3400;}elseif($heights>50){$container_padding = $heights*0.30;}}
    $font_s =  (int)$edn_data['font_size'];
    $val_8 = round($font_s*0.5000);
    $val_21 = round($font_s*1.3125);
    $val_30 = round($font_s*1.8750);
    $val_60 = round($font_s*3.7500);
    $slider_w = 79;
        $change_width = $val_21-21; // change width in social incon wrap
        $slider_width = round($slider_w-$change_width);
        
        /** -------------------------- **/
        /** responsive conversion */
        /** -------------------------- **/
        
        $val_26 = round($font_s*1.6250);
        $ed_tmw = 74;
        $c_w = $val_26-26; // change width in social incon wrap
        $ed_t_m_w = round($ed_tmw-$c_w);
        /** *********************************************** **/
        $ed_tmw2 = 70;
        $c_w2 = $val_30-30; // change width in social incon wrap
        $ed_t_m_w2 = round($ed_tmw2-$c_w2);
        /** *********************************************** **/
        $val_35 = round($font_s*2.1875);
        $ed_tmw3 = 65;
        $c_w3 = $val_35-35; // change width in social incon wrap
        $ed_t_m_w3 = round($ed_tmw3-$c_w3);
        /** *********************************************** **/
        $val_25 = round($font_s*1.5625);
        $ed_tmw4 = 75;
        $c_w4 = $val_25-25; // change width in social incon wrap
        $ed_t_m_w4 = round($ed_tmw4-$c_w4);
        /** *********************************************** **/
        $val_21 = round($font_s*1.1667);
        $val_10 = round($font_s*0.6250);
        if($edn_data['edn_type']==2 && $edn_data['news_heading_text']!==''){
            $padding_top = 0;
        }else{
            $padding_top = $val_10;
        }
?>
<?php if(is_user_logged_in()){ ?>
<style type='text/css'>
.edn-notify-bar.edn-position-Top{
    top: 32px;
    }
.edn-controls-Top{
    top: 46px;
}
</style>
<?php } ?>
<style type='text/css'>
     .edn-notify-bar{
        height: <?php echo $edn_data['noti_height'];?>;
        background-color:<?php echo $edn_data['edn_background_color'];?> !important;
        color:<?php echo $edn_data['edn_font_color'];?> !important;
        font-family: <?php echo $edn_data['notification_font'];?>;
        font-size: <?php echo $font_s;?>px;
     }
     /* added new css  */
      .edn-ticker .js-marquee-wrapper .js-marquee {
       color: <?php echo $edn_data['edn_font_color'];?> !important;
       }
         /* end new css  */
     .edn_container_wrapper {
        padding:<?php echo $container_padding;?>px 0;
     }
      .edn-social-network-wrapper .edn-social-icon-buttons{
        background-color: <?php echo $edn_data['social_bg_color'];?>; 
        height:<?php echo $val_30;?>px;
        width:<?php echo $val_30;?>px;
     }
     .edn-social-icon-buttons:hover{
        background-color: <?php echo $edn_data['social_bg_hover_color'];?>;
     }
     .edn-social-icon-buttons a:hover{
        color: <?php echo $edn_data['social_font_hover_color'];?>;
     }
     .edn-social-icon-buttons a{
        color: <?php echo $edn_data['social_font_color'];?>;
     }
     .edn-social-icon-buttons .fa {
        padding: <?php echo $val_8;?>px ;
     }
     .edn-type-main-wrapper {
        width: <?php echo $slider_width;?>%;
     }
     .edn-type-text-wrap {
        width: <?php echo $val_60;?>%;
     }
     .edn-display-mode-normal > p {
        color:<?php echo $edn_data['edn_font_color'];?>;
     }
     .edn-notify-bar .edn-front-title{
        color:<?php echo $edn_data['edn_font_color'];?>;
     }
     .bx-viewport .notify_slider li, .edn-notify-bar .edn-front-title, .edn-display-mode-normal > p {
        color:<?php echo $edn_data['edn_font_color'];?>;
     }
    /*.................. Responsive media query .................*/
    @media screen and (max-width:1180px){
        .edn-social-network-wrapper {
            width: <?php echo $val_26;?>%;
        }
        .edn-type-main-wrapper {
            width: <?php echo $ed_t_m_w;?>%;
        } 

    }
    @media screen and (max-width:1024px){
        .edn-social-network-wrapper {
            width: <?php echo $val_30;?>%;
        }
        .edn-type-main-wrapper {
            width: <?php echo $ed_t_m_w2;?>%;
        }   
    }
    @media screen and (max-width:980px){
        .edn-social-network-wrapper {
            width: <?php echo $val_35;?>%;
        }
        .edn-type-main-wrapper {
            width: <?php echo $ed_t_m_w3;?>%;
        }  
    }
    @media screen and (max-width:800px){
        .edn-social-network-wrapper {
            width: <?php echo $val_25;?>%;
        }
        .edn-type-main-wrapper {
            width: <?php echo $ed_t_m_w4;?>%;
            padding-top:<?php echo $padding_top;?>px;
        }
    }
</style>

<?php }}?>
<?php if(isset($edn_data['edn_mobile_optons']) && $edn_data['edn_mobile_optons']==1){?>
<style>
    @media screen and (max-width:910px){
           .edn_close_section{
            display: none;
           }
    }

</style>
<?php } ?>