<?php
require_once '../../../../../../wp-load.php';
	header("Content-type: application/force-download"); 
	header('Content-Disposition: inline; filename="subscribers'.date('YmdHis').'.csv"');  
	$results = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "edn_subscriber");
	echo "Email, Date\r\n";
    if (count($results))  {
		foreach($results as $row) {
		echo $row->email.",".$row->date."\r\n";
		}
	}