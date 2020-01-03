<!- -- Style for social icons --->
<?php
if (isset($settings_data['custom_css_code']) && !empty($settings_data['custom_css_code'])){
    ?>
    <style class="edn-custom-css">
        <?php _e($settings_data['custom_css_code']);?>
    </style>
    <?php

}

?>
<style>
    .edn-coming-soon-body{
        background-color: <?php echo $settings_data['bg_color']; ?>;
        <?php
        if ( $settings_data['bg_type'] == 'image' ) {
            $bg_available_image = $settings_data['bg-available-options'];
            $bg_available_image_id = str_replace( 'image', '', $bg_available_image );
            $bg_available_image_url = MAINTENANCE_IMAGE_DIR . '/bg' . $bg_available_image_id . '.jpg';
            $bg_image = ($settings_data['bg-image'] == 'new') ? $settings_data['ad_image'] : $bg_available_image_url;
            ?>background-image: url(<?php echo $bg_image; ?>); 
        <?php } ?>
    }
    .social-links-div a{
        background-color: <?php echo $settings_data['socialicon_bg_color']; ?>;
    }
    .social-links-div a:hover{
        background-color: <?php echo $settings_data['socialicon_hoverbg_color']; ?>;
    }
    .social-links-div a{
        color: <?php echo $settings_data['socialicon_font_color']; ?>;
    }
    .social-links-div a:hover{
        color: <?php echo $settings_data['socialicon_hovertext_color']; ?>;
    }

    .contact-button a{
        background-color: <?php echo $settings_data['contactus_bg_color']; ?>;
    }
    .contact-button a:hover{
        background-color: <?php echo $settings_data['contactus_hoverbg_color']; ?>;
    }
    .contact-button a{
        color: <?php echo $settings_data['contactus_font_color']; ?>;
    }
    .contact-button a:hover{
        color: <?php echo $settings_data['contactus_hovertext_color']; ?>;
    }
    .subscriber-wrap .sub-email-label{
        color:<?php echo $settings_data['subscribe_text_color']; ?> !important;
        font-size:<?php echo $settings_data['subscribe_font_size']; ?>px !important;
    }
    .subscriber-wrap h3{
        color:<?php echo $settings_data['subscribe_text_color']; ?> !important;
    }
    .subscriber-wrap input[type="text"]::-webkit-input-placeholder{
        color:<?php echo $settings_data['subscribe_text_color']; ?> !important;

    }
    .subscriber-wrap input[type="text"]{
        border-color:<?php echo $settings_data['subscribe_text_color']; ?> !important;
    }
    .subscriber-wrap{color:<?php echo $settings_data['subscribe_text_color']; ?>;}
    .subscriber-wrap input[type="submit"]{
        background-color:<?php echo $settings_data['subscribe_button_background_color']; ?> !important;
        color:<?php echo $settings_data['subscribe_button_font_color']; ?> !important;
        border-color:<?php echo $settings_data['subscribe_button_background_color']; ?> !important;
    }
    .edmm-subscribe-trigger{color:<?php echo $settings_data['subscribe_button_font_color']; ?> !important;}
    .subscriber-wrap input[type="submit"]:hover
    {

        background-color:<?php echo $settings_data['subscribe_button_hover_background_color']; ?> !important;
        color:<?php echo $settings_data['subscribe_button_hover_font_color']; ?> !important;
        border-color:<?php echo $settings_data['subscribe_button_hover_background_color']; ?> !important;
    }
    .subscriber-wrap input[type="text"]{border-color:<?php echo $settings_data['subscribe_button_background_color']; ?>;}

    .error_email{color:<?php echo $settings_data['subscribe_error_color']; ?>;}
    
    /** CountDown Styles **/
    ul.countdown li span{
        color:<?php echo $settings_data['timer_font_color'] ?> !important;
        border-color:<?php echo $settings_data['timer_font_color'] ?> !important;
        
    }
    ul.countdown li p{color:<?php echo $settings_data['timer_font_color'] ?> !important;}
</style>


