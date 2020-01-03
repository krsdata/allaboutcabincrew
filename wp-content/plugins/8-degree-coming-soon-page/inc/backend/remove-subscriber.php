<?php
defined('ABSPATH') or die("No direct script allowed!!");
global $wpdb;
$si_id = $_POST['rem'];
$table_name =  $wpdb->prefix . "8degree_maintenance";
$wpdb->delete( $table_name, array( 'id' => $si_id ), array( '%d' ) );
//$_SESSION['aps_message'] = __('User deleted successfully.','8degree-maintenance');
wp_redirect(admin_url().'admin.php?page=8degree-maintenance');
exit;