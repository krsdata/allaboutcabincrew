<?php
/**
 * Export to CSV for subscriber list.
 **/
require_once '../../../../../wp-load.php';
	header("Content-type: application/force-download"); 
	header('Content-Disposition: inline; filename="subscribers'.date('YmdHis').'.csv"');  
	$results = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix . "8degree_maintenance");
	echo "Email, Date\r\n";
    if (count($results))  {
		foreach($results as $row) {
		/*echo $row->email; 
        echo ' '.$row->date."\r\n"; */
        echo $row->email.", ".$row->date."\r\n";
		}
	}