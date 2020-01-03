<?php

$visitor_email = sanitize_text_field( $_POST['subscribe_email'] );
$subscription_type = $settings_data['subscription_type'];
global $wpdb;
$table_name = $table_name = $wpdb->prefix . "8degree_maintenance";

$nonce = $_POST['subscriber_nonce_field'];
$email_check = $wpdb->get_results( "SELECT * FROM $table_name WHERE email = '$visitor_email'" );
$num_email = $wpdb->num_rows;
if ( $email_check ) {
    $response = __( 'You have already subscribed', '8degree-maintenance' );
} else {

    if ( $settings_data['confirm_email_subscribe'] == '1' ) {
        $visitor_email = sanitize_text_field( $_POST['subscribe_email'] );
        $current_time = current_time( 'Y-m-d' );
        // $act_code= substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 1) . substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
        $act_code = rand( 0, 10000 );

        $adminemail = get_bloginfo( 'admin_email' );
        $plugin_url = site_url();
        $blog_name = get_bloginfo( 'blogname' );
        $from_name = ($settings_data['from_name'] == '') ? $blog_name : $settings_data['from_name'];
        $from_email = ($settings_data['from_email'] == '') ? $adminemail : $settings_data['from_email'];

        //$headers = array('From: '.$adminemail);
        $headers = array();
        $headers[] = 'Content-type: text/html';
        $headers[] = "From:$from_name <$from_email>";
        $headers[] = 'Reply-To: ' . $adminemail;
        $headers[] = 'X-Mailer: PHP/' . phpversion();
        $subject = __( 'Signup Confirmation', '8degree-maintenance' );
        $confirmation_link = $plugin_url . '?act_code=' . $act_code . '&' . 'email=' . $visitor_email;
        $default_message = 'Hi there, <br/><br/>' . '	
                         Please confirm your email address by clicking below link.<br/><br/>
                         
                        <a href="' . $confirmation_link . '">' . $confirmation_link . '</a>'
                . '<br/><br/>'
                . ''
                . 'Thank you!';

       // $message = str_replace( '#link', $confirmation_link, $settings_data['confirmation_email_message'] );
        $message =  $default_message;

        $mail = wp_mail( $visitor_email, $subject, $message, $headers );

        if ( $mail ) {
            $response = $settings_data['note_subscriber'];
            global $wpdb;
            $table_name = $wpdb->prefix . '8degree_maintenance';
            $query = $wpdb->insert( $table_name, array( 'email' => $visitor_email, 'date' => $current_time, 'act_code' => $act_code, 'flag' => 0 ) );
        } else {
            $response = __( 'Unable to subscribe', '8degree-maintenance' );
        }
    } else {
        $visitor_email = sanitize_text_field( $_POST['subscribe_email'] );
        $current_time = current_time( 'Y-m-d' );

        global $wpdb;
        $table_name = $wpdb->prefix . '8degree_maintenance';
        $query = $wpdb->insert( $table_name, array( 'email' => $visitor_email, 'date' => $current_time, 'flag' => 1 ) );
        if ( $query ) {
            $response = $settings_data['note_subscriber'];
        } else {
            $response = __( 'Error', '8degree-maintenance' );
        }
    }
}

if ( isset( $response ) ) {
    echo $response;
    unset( $response );
}
if ( isset( $response ) ) {
    echo $response;
    unset( $response );
}
die();
