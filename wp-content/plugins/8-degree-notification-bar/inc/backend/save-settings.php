<?php
defined('ABSPATH') or die("No script kiddies please!");
/**
 * Posted Data
 * Array
(
    [action] => edn_settings_action
    [social_network] => 1
    [social_heading_text] => Follow Us
    [socail_icons] => Array
        (
            [facebook] => Array
                (
                    [url] => 
                )

            [twitter] => Array
                (
                    [url] => 
                )

            [linkedin] => Array
                (
                    [url] => 
                )

            [googlePlus] => Array
                (
                    [url] => 
                )

        )

    [edn_type] => 1
    [display_mode] => 1
    [noti_text] => 

    [slider_text] => Array
        (
            [0] => 
        )

    [slide_duration] => 4000
    [slide_transition] => 500
    [slider_controls] => 1
    [ticker_text] => 
    [ticker_speed] => 5000
    [news_heading_text] => 
    [subs_button_text] => Subscribe
    [email_placeholder] => 
    [thank_note] => Thank you for subscribe
    [nb_controls] => 1
    [enable_show_once] => 0
    [noti_placement] => Top
    [noti_height] => 50px
    [edn_background_color] => #81d742
    [edn_font_color] => #ffffff
    [social_bg_color] => #ffffff
    [social_bg_hover_color] => #dd9933
    [social_font_color] => #24890d
    [social_font_hover_color] => #1e73be
    [notification_font] => PT Sans
    [font_size] => 16
    [social_order] => Array
        (
            [0] => facebook
            [1] => twitter
            [2] => linkedin
            [3] => googlePlus
        )

    [edn_nonce_field] => 8244ce6aa7
    [_wp_http_referer] => /8degree-plugins/wp-admin/admin.php?page=edn-plugin
    [settings_submit] => Save
)
*/
//$this->edn_print_array($_POST);
/**
 * general settings
 * */
  $_POST = array_map( 'stripslashes_deep', $_POST );
foreach($_POST as $key=>$val)
{
    $$key = $val;
}
$allowedtags = array(
    'a' => array(
        'href' => array (),
        'target' => array(),
        'title' => array ()),
    'abbr' => array(
        'title' => array ()),
    'acronym' => array(
        'title' => array ()),
    'b' => array(),
    'blockquote' => array(
        'cite' => array ()),
    'cite' => array (),
    'code' => array(),
    'del' => array(
        'datetime' => array ()),
    'em' => array (),
    'i' => array (),
    'q' => array(
        'cite' => array ()),
    'strike' => array(),
    'strong' => array(),
    );
$edn_settings = array();
$edn_settings['edn_optons'] = (isset($_POST['edn_optons'])&& $_POST['edn_optons'] == 1)?sanitize_text_field($_POST['edn_optons']):'';
$edn_settings['edn_mobile_optons'] = (isset($_POST['edn_mobile_optons'])&& $_POST['edn_mobile_optons'] == 1)?sanitize_text_field($_POST['edn_mobile_optons']):'0';
$edn_settings['social_network'] = (isset($_POST['social_network'])&& $_POST['social_network'] == 1)?sanitize_text_field($_POST['social_network']):'';
$edn_settings['social_heading_text'] = (isset($_POST['social_heading_text'])&& $_POST['social_heading_text'] !='')?sanitize_text_field($_POST['social_heading_text']):'';
$edn_settings['socail_controls'] = (isset($socail_controls)&& !empty($socail_controls))?$socail_controls:array();
$edn_settings['socail_icons'] = $socail_icons;
$edn_settings['social_order'] = $social_order;
$edn_settings['edn_type'] = sanitize_text_field($_POST['edn_type']);
$edn_settings['display_mode'] = sanitize_text_field($_POST['display_mode']);
$edn_settings['noti_text'] = wp_kses($_POST['noti_text'],$allowedtags);
$edn_settings['slider_text'] = $slider_text;
$edn_settings['slide_duration'] = (isset($_POST['slide_duration'])&& $_POST['slide_duration'] != '')?sanitize_text_field($_POST['slide_duration']):'';
$edn_settings['slide_transition'] = (isset($_POST['slide_transition'])&& $_POST['slide_transition'] != '')?sanitize_text_field($_POST['slide_transition']):'500';
$edn_settings['slider_controls'] = (isset($_POST['slider_controls'])&& $_POST['slider_controls'] == 1)?sanitize_text_field($_POST['slider_controls']):'';
$edn_settings['ticker_hover'] = (isset($_POST['ticker_hover'])&& $_POST['ticker_hover'] == 1)?sanitize_text_field($_POST['ticker_hover']):'';
$edn_settings['ticker_text'] = wp_kses($_POST['ticker_text'],$allowedtags);
$edn_settings['ticker_speed'] = (isset($_POST['ticker_speed'])&& $_POST['ticker_speed'] != '')?sanitize_text_field($_POST['ticker_speed']):'';
$edn_settings['news_heading_text'] = sanitize_text_field($_POST['news_heading_text']);
$edn_settings['subs_button_text'] = sanitize_text_field($_POST['subs_button_text']);
$edn_settings['email_placeholder'] = sanitize_text_field($_POST['email_placeholder']);
$edn_settings['thank_note'] = sanitize_text_field($_POST['thank_note']);
$edn_settings['check_confirm'] = (isset($_POST['check_confirm'])&& $_POST['check_confirm'] == 1)?sanitize_text_field($_POST['check_confirm']):'';
$edn_settings['nb_controls'] = sanitize_text_field($_POST['nb_controls']);
if(isset($_POST['enable_show_once'])){
  $check_show_once  = $_POST['enable_show_once'];
}else{
  $check_show_once  = 0;
}
$edn_settings['enable_show_once'] = sanitize_text_field($check_show_once);
/**
 * End general settings
 * */

 /**
 * Display settings
 * */
$edn_settings['noti_placement'] = sanitize_text_field($_POST['noti_placement']);
$edn_settings['noti_height'] = sanitize_text_field($_POST['noti_height']);
$edn_settings['edn_background_color'] = sanitize_text_field($_POST['edn_background_color']);
$edn_settings['edn_font_color'] = sanitize_text_field($_POST['edn_font_color']);
$edn_settings['social_bg_color'] = sanitize_text_field($_POST['social_bg_color']);
$edn_settings['social_bg_hover_color'] = sanitize_text_field($_POST['social_bg_hover_color']);
$edn_settings['social_font_color'] = sanitize_text_field($_POST['social_font_color']);
$edn_settings['social_font_hover_color'] = sanitize_text_field($_POST['social_font_hover_color']);
$edn_settings['notification_font'] = sanitize_text_field($_POST['notification_font']);
$edn_settings['font_size'] = sanitize_text_field($_POST['font_size']);
update_option('edn_settings',$edn_settings);
$_SESSION['edn_message'] = __('Settings Saved Successfully','edn-plugin');
wp_redirect(admin_url('admin.php?page=edn-plugin'));
exit();

