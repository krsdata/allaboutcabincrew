<?php

defined( 'ABSPATH' ) or die( "No script kiddies please!" );
/**
 * FORM OUTPUT
 * Array
  (
  [action] => maintenance_settings_action
  [status] => 1
  [show_head] => 1
  [headline_text] => Coming Soon
  [show_description] => 1
  [description] => We will be coming soon with the site
  [show_subscribe] => 1
  [subscribe_heading_text] => Subscribe Us
  [subscribe_form_label] =>
  [subscribe_button_text] => Subscribe
  [note_subscriber] => Thank you! We will be back with the quote
  [show_social_network] => 1
  [social_controls] => Array
  (
  [facebook] => 1
  [twitter] => 1
  [pinterest] => 1
  [linkedin] => 1
  [googleplus] => 1
  [tumblr] => 1
  )

  [social_url] => Array
  (
  [facebook] => Array
  (
  [url] => https://www.facebook.com/
  )

  [twitter] => Array
  (
  [url] => https://twitter.com/
  )

  [pinterest] => Array
  (
  [url] => https://www.pinterest.com/
  )

  [linkedin] => Array
  (
  [url] => http://www.linkedin.com/
  )

  [googleplus] => Array
  (
  [url] => https://plus.google.com/up/accounts/upgrade/?continue=https://plus.google.com/
  )

  [tumblr] => Array
  (
  [url] => https://www.tumblr.com/
  )

  )

  [social_name] => Array
  (
  [0] => facebook
  [1] => twitter
  [2] => pinterest
  [3] => linkedin
  [4] => googleplus
  [5] => tumblr
  )

  [show_contact] => 1
  [email_address] =>
  [name_label] =>
  [email_label] =>
  [message_label] =>
  [submit_label] =>
  [countdown_date] =>
  [hour_timer] =>
  [minute_timer] =>
  [second_timer] =>
  [headline_color] => #000000
  [description_color] => #000000
  [bg_type] => image
  [bg_color] =>
  new [bg-available-options] => image0 [ad_image] => http://localhost/plugins/8degree-coming-soon/wp-content/uploads/2015/08/bridge.jpg [timerlayout] => layout1 [subs_layout] => layout1 [contactus_bg_color] => #6c8cd5 [contactus_font_color] => #ffffff [contactus_hoverbg_color] => [contactus_hovertext_color] => [socialicon_bg_color] => [socialicon_font_color] => #ffffff [socialicon_hoverbg_color] => [socialicon_hovertext_color] => [google_analytics] => [meta_name] => [meta_content] => [maintenance_nonce_field] => 18e53c81ad [_wp_http_referer] => /plugins/8degree-coming-soon/wp-admin/admin.php?page=8degree-maintenance [save_options] => Save Options )
 * */
//$this->print_array($_POST);
//die();
$_POST = array_map( 'stripslashes_deep', $_POST );
if ( isset( $_POST['save_options'] ) ) {
    foreach ( $_POST as $key => $val ) {
        $$key = $val;
    }
    $maintenance_data = array();
    $maintenance_data['status'] = sanitize_text_field( $_POST['status'] );
    $maintenance_data['show_head'] = sanitize_text_field( $_POST['show_head'] );
    $maintenance_data['headline_text'] = sanitize_text_field( $_POST['headline_text'] );

    $maintenance_data['show_description'] = sanitize_text_field( $_POST['show_description'] );


    $allowedtags = array(
        'a' => array(
            'href' => array(),
            'target' => array(),
            'title' => array() ),
        'abbr' => array(
            'title' => array() ),
        'acronym' => array(
            'title' => array() ),
        'b' => array(),
        'blockquote' => array(
            'cite' => array() ),
        'cite' => array(),
        'code' => array(),
        'del' => array(
            'datetime' => array() ),
        'em' => array(),
        'i' => array(),
        'q' => array(
            'cite' => array() ),
        'strike' => array(),
        'strong' => array(),
    );

    $maintenance_data['description'] = wp_kses( $_POST['description'], $allowedtags ); // sanitize_text_field(stripslashes_deep($_POST['description']));


    /* settings for subscriber */
    $maintenance_data['show_subscribe'] = sanitize_text_field( $_POST['show_subscribe'] );
    $maintenance_data['confirm_email_subscribe'] = isset( $_POST['confirm_email_subscribe'] ) ? sanitize_text_field( $_POST['confirm_email_subscribe'] ) : 0;
    $maintenance_data['subscribe_heading_text'] = sanitize_text_field( $_POST['subscribe_heading_text'] );
    $maintenance_data['subscribe_button_text'] = sanitize_text_field( $_POST['subscribe_button_text'] );
    $maintenance_data['subscribe_form_label'] = sanitize_text_field( $_POST['subscribe_form_label'] );
    $maintenance_data['note_subscriber'] = sanitize_text_field( stripslashes_deep( $_POST['note_subscriber'] ) );



    $maintenance_data['show_contact'] = sanitize_text_field( $_POST['show_contact'] );
    $maintenance_data['contact_us_button_label'] = sanitize_text_field( $_POST['contact_us_button_label'] );
    $maintenance_data['email_address'] = sanitize_text_field( $_POST['email_address'] );
    $maintenance_data['name_label'] = sanitize_text_field( $_POST['name_label'] );
    $maintenance_data['email_label'] = sanitize_text_field( $_POST['email_label'] );
    $maintenance_data['message_label'] = sanitize_text_field( $_POST['message_label'] );
    $maintenance_data['submit_label'] = sanitize_text_field( $_POST['submit_label'] );

    /* Save settings of social network links */
    $maintenance_data['show_social_network'] = isset( $_POST['show_social_network'] ) ? sanitize_text_field( $_POST['show_social_network'] ) : 0;
    /* show/hide social icons */
    $maintenance_data['show_fb'] = isset( $_POST['show_fb'] ) ? sanitize_text_field( $_POST['show_fb'] ) : 0;
    $maintenance_data['show_twitter'] = isset( $_POST['show_twitter'] ) ? sanitize_text_field( $_POST['show_twitter'] ) : 0;
    $maintenance_data['show_pin'] = isset( $_POST['show_pin'] ) ? sanitize_text_field( $_POST['show_pin'] ) : 0;
    $maintenance_data['show_linkedin'] = isset( $_POST['show_linkedin'] ) ? sanitize_text_field( $_POST['show_linkedin'] ) : 0;
    $maintenance_data['show_googleplus'] = isset( $_POST['show_googleplus'] ) ? sanitize_text_field( $_POST['show_googleplus'] ) : 0;
    $maintenance_data['show_tumblr'] = isset( $_POST['show_tumblr'] ) ? sanitize_text_field( $_POST['show_tumblr'] ) : 0;
    /* show/hide social icons end */


    $maintenance_data['social_controls'] = isset( $social_controls ) ? $social_controls : array();
    $maintenance_data['social_url'] = $social_url;
    $maintenance_data['social_name'] = $social_name;



    /* Save settings for countdown timer */
    $maintenance_data['countdown_date'] = sanitize_text_field( $_POST['countdown_date'] );
    $maintenance_data['show_countdown'] = isset( $_POST['show_countdown'] ) ? sanitize_text_field( $_POST['show_countdown'] ) : 0;
    $maintenance_data['days_timer'] = sanitize_text_field( $_POST['days_timer'] );
    $maintenance_data['hour_timer'] = sanitize_text_field( $_POST['hour_timer'] );
    $maintenance_data['minute_timer'] = sanitize_text_field( $_POST['minute_timer'] );
    $maintenance_data['second_timer'] = sanitize_text_field( $_POST['second_timer'] );

    /*     * ***SAVE SETTINGS FOR DESIGN OPTIONS**** */

    //Text Settings Save
    $maintenance_data['headline_color'] = sanitize_text_field( $_POST['headline_color'] );
    $maintenance_data['description_color'] = sanitize_text_field( $_POST['description_color'] );

    //Background Settings Save
    $maintenance_data['bg-select-options'] = isset( $_POST['bg-select-options'] ) ? sanitize_text_field( $_POST['bg-select-options'] ) : 0;


    $maintenance_data['bg_type'] = sanitize_text_field( $_POST['bg_type'] );
    $maintenance_data['bg_color'] = sanitize_text_field( $_POST['bg_color'] );


    $maintenance_data['bg-image'] = sanitize_text_field( $_POST['bg-image'] );
    $maintenance_data['ad_image'] = sanitize_text_field( $_POST['ad_image'] );
    $maintenance_data['bg-available-options'] = sanitize_text_field( $_POST['bg-available-options'] );
    $maintenance_data['favicon'] = sanitize_text_field( $_POST['favicon'] );

    // Timer Settings Save
    $maintenance_data['timerlayout'] = sanitize_text_field( $_POST['timerlayout'] );
    $maintenance_data['timer_background_color'] = sanitize_text_field( $_POST['timer_background_color'] );
    $maintenance_data['timer_font_color'] = sanitize_text_field( $_POST['timer_font_color'] );

    // Subscribe Form Layout Save
    $maintenance_data['subs_layout'] = sanitize_text_field( $_POST['subs_layout'] );
     $maintenance_data['subscribe_button_background_color'] = sanitize_text_field( $_POST['subscribe_button_background_color'] );
    $maintenance_data['subscribe_button_font_color'] = sanitize_text_field( $_POST['subscribe_button_font_color'] );
    $maintenance_data['subscribe_button_hover_background_color'] = sanitize_text_field( $_POST['subscribe_button_hover_background_color'] );
    $maintenance_data['subscribe_button_hover_font_color'] = sanitize_text_field( $_POST['subscribe_button_hover_font_color'] );
    $maintenance_data['subscribe_text_color'] = sanitize_text_field( $_POST['subscribe_text_color'] );
    $maintenance_data['subscribe_error_color'] = sanitize_text_field( $_POST['subscribe_error_color'] );

    //Contact Us form design settings save
    $maintenance_data['contactus_bg_color'] = sanitize_text_field( $_POST['contactus_bg_color'] );
    $maintenance_data['contactus_font_color'] = sanitize_text_field( $_POST['contactus_font_color'] );
    $maintenance_data['contactus_hoverbg_color'] = sanitize_text_field( $_POST['contactus_hoverbg_color'] );
    $maintenance_data['contactus_hovertext_color'] = sanitize_text_field( $_POST['contactus_hovertext_color'] );

    //Social Icons  design settings save
    $maintenance_data['socialicon_bg_color'] = sanitize_text_field( $_POST['socialicon_bg_color'] );
    $maintenance_data['socialicon_font_color'] = sanitize_text_field( $_POST['socialicon_font_color'] );
    $maintenance_data['socialicon_hoverbg_color'] = sanitize_text_field( $_POST['socialicon_hoverbg_color'] );
    $maintenance_data['socialicon_hovertext_color'] = sanitize_text_field( $_POST['socialicon_hovertext_color'] );


    /*     * ***SAVE SETTINGS FOR DESIGN OPTIONS END**** */

    /*     * *** SAVE SETTINGS FOR EXTRA OPTIONS START **** */
    $maintenance_data['google_analytics'] = $_POST['google_analytics'];
    $maintenance_data['disable_for'] = isset( $_POST['disable_for'] ) ? sanitize_text_field( $_POST['disable_for'] ) : 0;
    $maintenance_data['hide_search_engines'] = isset( $_POST['hide_search_engines'] ) ? sanitize_text_field( $_POST['hide_search_engines'] ) : 0;

    $maintenance_data['meta_name'] = sanitize_text_field( $_POST['meta_name'] );
    $maintenance_data['meta_content'] = sanitize_text_field( $_POST['meta_content'] );

   
    $maintenance_data['roles'] = isset( $roles ) ? $roles : array();
    $maintenance_data['custom_css_code'] = isset( $_POST['custom_css_code'] ) ? sanitize_text_field( $_POST['custom_css_code'] ) : '';




    /*     * *** SAVE SETTINGS FOR EXTRA OPTIONS END **** */
    /* echo '<pre>';
      print_r($_POST);
      echo '</pre>'; die(); */
    $update = update_option( 'maintenance_settings', $maintenance_data );

    $_SESSION['save_msg'] = __( 'Settings Saved Successfully', '8degree-maintenance' );





    wp_redirect( admin_url() . 'admin.php?page=8degree-maintenance' );
    exit;
}
     
     
    
  
    
    