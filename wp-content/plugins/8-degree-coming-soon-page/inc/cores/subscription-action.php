<?php

if ( isset( $_GET['act_code'] ) ) {

    $code = $_GET['act_code'];
    $email = $_GET['email'];
    $si_id = $_GET['s_id'];

    $current_time = current_time( 'Y-m-d' );

    global $wpdb;
    $table_name = $wpdb->prefix . '8degree_maintenance';
    $user_sets = $wpdb->get_results( "SELECT * FROM $table_name WHERE act_code = '$code'" );

    if ( $user_sets ) {
        $query = $wpdb->update( $table_name, array( 'flag' => '1' ), array( 'act_code' => $code ), array( '%d' ) );
        $_SESSION['msg'] = ($settings_data['note_subscriber'] == '') ? __( 'Subscription successfull!', '8degree-maintenance' ) : $settings_data['note_subscriber'];
        wp_redirect( home_url() );
        exit;
    } else {
        echo __( 'Error', '8degree-maintenance' );
    }
}

