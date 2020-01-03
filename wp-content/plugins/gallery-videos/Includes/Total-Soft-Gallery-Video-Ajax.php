<?php
	// Admin Menu
	add_action( 'wp_ajax_TotalSoftGallery_Video_Del', 'TotalSoftGallery_Video_Del_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_Del', 'TotalSoftGallery_Video_Del_Callback' );

	function TotalSoftGallery_Video_Del_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name2 WHERE id = %d", $GalleryV_ID));
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name3 WHERE GalleryV_ID = %s", $GalleryV_ID));
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_Clone', 'TotalSoftGallery_Video_Clone_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_Clone', 'TotalSoftGallery_Video_Clone_Callback' );

	function TotalSoftGallery_Video_Clone_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name1 = $wpdb->prefix . "totalsoft_galleryv_id";
		$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVManager = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id = %d", $GalleryV_ID));
		$Total_Soft_GalleryVVideos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $GalleryV_ID));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftGallery_Video_Gallery_Title, TotalSoftGallery_Video_Option, TotalSoftGallery_Video_ShowType, TotalSoftGallery_Video_PerPage, TotalSoftGallery_LoadMore) VALUES (%d, %s, %s, %s, %s, %s)", '', $Total_Soft_GalleryVManager[0]->TotalSoftGallery_Video_Gallery_Title, $Total_Soft_GalleryVManager[0]->TotalSoftGallery_Video_Option, $Total_Soft_GalleryVManager[0]->TotalSoftGallery_Video_ShowType, $Total_Soft_GalleryVManager[0]->TotalSoftGallery_Video_PerPage, $Total_Soft_GalleryVManager[0]->TotalSoftGallery_LoadMore));

		$New_GalleryV_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id>%d order by id desc limit 1",0));
		$New_Total_SoftGVID=$New_GalleryV_ID[0]->id;
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, GalleryV_ID) VALUES (%d, %s)", '', $New_Total_SoftGVID));

		for($j = 0; $j < count($Total_Soft_GalleryVVideos); $j++)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name3 (id, TotalSoftGallery_Video_VT, TotalSoftGallery_Video_VDesc, TotalSoftGallery_Video_VLink, TotalSoftGallery_Video_VONT, TotalSoftGallery_Video_VURL, TotalSoftGallery_Video_IURL, TotalSoftGallery_Video_Video, GalleryV_ID) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Total_Soft_GalleryVVideos[$j]->TotalSoftGallery_Video_VT, $Total_Soft_GalleryVVideos[$j]->TotalSoftGallery_Video_VDesc, $Total_Soft_GalleryVVideos[$j]->TotalSoftGallery_Video_VLink, $Total_Soft_GalleryVVideos[$j]->TotalSoftGallery_Video_VONT, $Total_Soft_GalleryVVideos[$j]->TotalSoftGallery_Video_VURL, $Total_Soft_GalleryVVideos[$j]->TotalSoftGallery_Video_IURL, $Total_Soft_GalleryVVideos[$j]->TotalSoftGallery_Video_Video, $New_Total_SoftGVID));
		}

		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_Edit', 'TotalSoftGallery_Video_Edit_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_Edit', 'TotalSoftGallery_Video_Edit_Callback' );

	function TotalSoftGallery_Video_Edit_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";

		$Total_Soft_GalleryVManager = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id = %d", $GalleryV_ID));

		print json_encode($Total_Soft_GalleryVManager);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_Edit_Videos', 'TotalSoftGallery_Video_Edit_Videos_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_Edit_Videos', 'TotalSoftGallery_Video_Edit_Videos_Callback' );

	function TotalSoftGallery_Video_Edit_Videos_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVVideos=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID=%s order by id", $GalleryV_ID));

		for($i = 0; $i < count($Total_Soft_GalleryVVideos); $i++)
		{
			$Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VT = html_entity_decode($Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VT);
			$Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VDesc = html_entity_decode($Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VDesc);
		}

		print json_encode($Total_Soft_GalleryVVideos);
		die();
	}

	add_action( 'wp_ajax_TSoft_Vimeo_Video_Image', 'TSoft_Vimeo_Video_Image_Callback' );
	add_action( 'wp_ajax_nopriv_TSoft_Vimeo_Video_Image', 'TSoft_Vimeo_Video_Image_Callback' );

	function TSoft_Vimeo_Video_Image_Callback()
	{
		$GET_Video_Video_Src = sanitize_text_field($_POST['foobar']);
		$TSoft_GV_Image_Src = explode('video/',$GET_Video_Video_Src);
		// $TSoft_GV_Image_Src_Real = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$TSoft_GV_Image_Src[1].php"));
		$url = "https://vimeo.com/api/v2/video/".$TSoft_GV_Image_Src[1].".json";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($ch);
		curl_close($ch);
		$x = json_decode($data, true);
		print_r($x[0]['thumbnail_large']);
		die();
	}

	add_action( 'wp_ajax_TSoft_Wistia_Video_Image', 'TSoft_Wistia_Video_Image_Callback' );
	add_action( 'wp_ajax_nopriv_TSoft_Wistia_Video_Image', 'TSoft_Wistia_Video_Image_Callback' );

	function TSoft_Wistia_Video_Image_Callback()
	{
		$GET_Video_Video_Src = sanitize_text_field($_POST['foobar']);
		$Video_Id = sanitize_text_field($_POST['video_id']);
		// $wistia_api_uri = 'http://fast.wistia.com/oembed?url=' . $GET_Video_Video_Src;
		$wistia_api_uri = 'https://fast.wistia.com/oembed?url=http%3A%2F%2Fhome.wistia.com%2Fmedias%2F'.$Video_Id;
		$wistia_response = wp_remote_get( $wistia_api_uri );
		$wistia_response = json_decode( $wistia_response['body'], true );
		echo $wistia_response['thumbnail_url'];
		die();
	}
	// Theme Menu
	add_action( 'wp_ajax_TotalSoftGallery_VideoOpt_Del', 'TotalSoftGallery_VideoOpt_Del_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_VideoOpt_Del', 'TotalSoftGallery_VideoOpt_Del_Callback' );

	function TotalSoftGallery_VideoOpt_Del_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
		$table_name4_1 = $wpdb->prefix . "totalsoft_galleryv_dbt_1";
		$table_name4_2 = $wpdb->prefix . "totalsoft_galleryv_dbt_2";

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name4 WHERE id = %d", $GalleryV_ID));
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name4_1 WHERE TotalSoftGalleryV_SetID = %d", $GalleryV_ID));
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name4_2 WHERE TotalSoftGalleryV_SetID = %d", $GalleryV_ID));

		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_VideoOpt_Edit', 'TotalSoftGallery_VideoOpt_Edit_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_VideoOpt_Edit', 'TotalSoftGallery_VideoOpt_Edit_Callback' );

	function TotalSoftGallery_VideoOpt_Edit_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name4_1 = $wpdb->prefix . "totalsoft_galleryv_dbt_1";
		
		$Total_Soft_GalleryVSet = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_1 WHERE TotalSoftGalleryV_SetID = %s", $GalleryV_ID));
		
		print json_encode($Total_Soft_GalleryVSet);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_VideoOpt_Edit1', 'TotalSoftGallery_VideoOpt_Edit1_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_VideoOpt_Edit1', 'TotalSoftGallery_VideoOpt_Edit1_Callback' );

	function TotalSoftGallery_VideoOpt_Edit1_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name4_2 = $wpdb->prefix . "totalsoft_galleryv_dbt_2";
		
		$Total_Soft_GalleryVSet = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_2 WHERE TotalSoftGalleryV_SetID = %s", $GalleryV_ID));
		
		print json_encode($Total_Soft_GalleryVSet);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGalleryV_Clone_Option', 'TotalSoftGalleryV_Clone_Option_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGalleryV_Clone_Option', 'TotalSoftGalleryV_Clone_Option_Callback' );

	function TotalSoftGalleryV_Clone_Option_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
		$table_name4_1 = $wpdb->prefix . "totalsoft_galleryv_dbt_1";
		$table_name4_2 = $wpdb->prefix . "totalsoft_galleryv_dbt_2";

		$Total_Soft_GalleryVName = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id = %d", $GalleryV_ID));
		$Total_Soft_GalleryVSet1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_1 WHERE TotalSoftGalleryV_SetID = %s", $GalleryV_ID));
		$Total_Soft_GalleryVSet2 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_2 WHERE TotalSoftGalleryV_SetID = %s", $GalleryV_ID));
		
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', $Total_Soft_GalleryVName[0]->TotalSoftGalleryV_SetName, $Total_Soft_GalleryVName[0]->TotalSoftGalleryV_SetType));

		$TotalSoftGalleryV_SetNameID = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id>%d order by id desc limit 1", 0));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4_1 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_GV_1_01, TotalSoft_GV_1_02, TotalSoft_GV_1_03, TotalSoft_GV_1_04, TotalSoft_GV_1_05, TotalSoft_GV_1_06, TotalSoft_GV_1_07, TotalSoft_GV_1_08, TotalSoft_GV_1_09, TotalSoft_GV_1_10, TotalSoft_GV_1_11, TotalSoft_GV_1_12, TotalSoft_GV_1_13, TotalSoft_GV_1_14, TotalSoft_GV_1_15, TotalSoft_GV_1_16, TotalSoft_GV_1_17, TotalSoft_GV_1_18, TotalSoft_GV_1_19, TotalSoft_GV_1_20, TotalSoft_GV_1_21, TotalSoft_GV_1_22, TotalSoft_GV_1_23, TotalSoft_GV_1_24, TotalSoft_GV_1_25, TotalSoft_GV_1_26, TotalSoft_GV_1_27, TotalSoft_GV_1_28, TotalSoft_GV_1_29, TotalSoft_GV_1_30, TotalSoft_GV_1_31, TotalSoft_GV_1_32, TotalSoft_GV_1_33, TotalSoft_GV_1_34, TotalSoft_GV_1_35, TotalSoft_GV_1_36, TotalSoft_GV_1_37, TotalSoft_GV_1_38, TotalSoft_GV_1_39) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, $Total_Soft_GalleryVSet1[0]->TotalSoftGalleryV_SetName, $Total_Soft_GalleryVSet1[0]->TotalSoftGalleryV_SetType, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_01, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_02, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_03, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_04, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_05, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_06, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_07, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_08, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_09, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_10, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_11, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_12, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_13, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_14, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_15, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_16, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_17, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_18, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_19, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_20, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_21, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_22, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_23, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_24, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_25, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_26, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_27, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_28, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_29, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_30, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_31, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_32, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_33, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_34, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_35, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_36, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_37, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_38, $Total_Soft_GalleryVSet1[0]->TotalSoft_GV_1_39));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4_2 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_GV_2_01, TotalSoft_GV_2_02, TotalSoft_GV_2_03, TotalSoft_GV_2_04, TotalSoft_GV_2_05, TotalSoft_GV_2_06, TotalSoft_GV_2_07, TotalSoft_GV_2_08, TotalSoft_GV_2_09, TotalSoft_GV_2_10, TotalSoft_GV_2_11, TotalSoft_GV_FG_PT, TotalSoft_GV_FG_PD, TotalSoft_GV_2_12, TotalSoft_GV_2_13, TotalSoft_GV_2_14, TotalSoft_GV_2_15, TotalSoft_GV_2_16, TotalSoft_GV_2_17, TotalSoft_GV_2_18, TotalSoft_GV_2_19, TotalSoft_GV_2_20, TotalSoft_GV_2_21, TotalSoft_GV_2_22, TotalSoft_GV_2_23, TotalSoft_GV_2_24, TotalSoft_GV_2_25, TotalSoft_GV_2_26, TotalSoft_GV_2_27, TotalSoft_GV_2_28, TotalSoft_GV_2_29, TotalSoft_GV_2_30, TotalSoft_GV_2_31, TotalSoft_GV_2_32, TotalSoft_GV_2_33, TotalSoft_GV_2_34, TotalSoft_GV_2_35, TotalSoft_GV_2_36, TotalSoft_GV_2_37, TotalSoft_GV_2_38, TotalSoft_GV_2_39) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, $Total_Soft_GalleryVSet2[0]->TotalSoftGalleryV_SetName, $Total_Soft_GalleryVSet2[0]->TotalSoftGalleryV_SetType, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_01, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_02, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_03, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_04, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_05, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_06, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_07, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_08, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_09, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_10, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_11, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_FG_PT, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_FG_PD, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_12, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_13, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_14, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_15, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_16, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_17, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_18, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_19, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_20, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_21, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_22, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_23, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_24, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_25, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_26, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_27, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_28, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_29, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_30, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_31, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_32, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_33, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_34, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_35, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_36, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_37, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_38, $Total_Soft_GalleryVSet2[0]->TotalSoft_GV_2_39));
		die();
	}
	// Widget
	add_action( 'wp_ajax_TotalSoftGallery_Video_Page', 'TotalSoftGallery_Video_Page_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_Page', 'TotalSoftGallery_Video_Page_Callback' );

	function TotalSoftGallery_Video_Page_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVVideos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $GalleryV_ID));

		for($i = 0; $i < count($Total_Soft_GalleryVVideos); $i++)
		{
			$Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VDesc = html_entity_decode($Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VDesc);
		}

		print_r($Total_Soft_GalleryVVideos);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_PageGO', 'TotalSoftGallery_Video_PageGO_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_PageGO', 'TotalSoftGallery_Video_PageGO_Callback' );

	function TotalSoftGallery_Video_PageGO_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
		$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
		$table_name5 = $wpdb->prefix . "totalsoft_galleryv_gvg";

		$Total_Soft_GalleryMan = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id = %d", $GalleryV_ID));
		$Total_Soft_GalleryVName = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName = %s", $Total_Soft_GalleryMan[0]->TotalSoftGallery_Video_Option));
		if($Total_Soft_GalleryVName[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery')
		{
			$Total_Soft_GalleryVSet = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryVName[0]->id));
		}

		print_r($Total_Soft_GalleryVSet);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_CP_Popup', 'TotalSoftGallery_Video_CP_Popup_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_CP_Popup', 'TotalSoftGallery_Video_CP_Popup_Callback' );

	function TotalSoftGallery_Video_CP_Popup_Callback()
	{
		$TotalSoftGV_CP_VID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVVideos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id = %d order by id", $TotalSoftGV_CP_VID));
		for($i = 0; $i < count($Total_Soft_GalleryVVideos); $i++)
		{
			$Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VDesc = html_entity_decode($Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VDesc);
		}

		print_r($Total_Soft_GalleryVVideos);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_CP_Popup_Left', 'TotalSoftGallery_Video_CP_Popup_Left_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_CP_Popup_Left', 'TotalSoftGallery_Video_CP_Popup_Left_Callback' );

	function TotalSoftGallery_Video_CP_Popup_Left_Callback()
	{
		$TotalSoft_GV_CP_VID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVVideo = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id = %d order by id", $TotalSoft_GV_CP_VID));
		$Total_Soft_GalleryVVideos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $Total_Soft_GalleryVVideo[0]->GalleryV_ID));

		for($i=0;$i<count($Total_Soft_GalleryVVideos);$i++)
		{
			if($Total_Soft_GalleryVVideos[$i]->id==$TotalSoft_GV_CP_VID)
			{
				if($i!=0)
				{
					$Total_Soft_GalleryVVid = $Total_Soft_GalleryVVideos[$i-1];
				}
				else
				{
					$Total_Soft_GalleryVVid = $Total_Soft_GalleryVVideos[count($Total_Soft_GalleryVVideos)-1];
				}
			}
		}

		for($i = 0; $i < count($Total_Soft_GalleryVVideos); $i++)
		{
			$Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VDesc = html_entity_decode($Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VDesc);
		}
		print_r($Total_Soft_GalleryVVid);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_CP_Popup_Right', 'TotalSoftGallery_Video_CP_Popup_Right_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_CP_Popup_Right', 'TotalSoftGallery_Video_CP_Popup_Right_Callback' );

	function TotalSoftGallery_Video_CP_Popup_Right_Callback()
	{
		$TotalSoft_GV_CP_VID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVVideo = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id = %d order by id", $TotalSoft_GV_CP_VID));
		$Total_Soft_GalleryVVideos = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $Total_Soft_GalleryVVideo[0]->GalleryV_ID));

		for($i=0;$i<count($Total_Soft_GalleryVVideos);$i++)
		{
			if($Total_Soft_GalleryVVideos[$i]->id==$TotalSoft_GV_CP_VID)
			{
				if($i!=count($Total_Soft_GalleryVVideos)-1)
				{
					$Total_Soft_GalleryVVid = $Total_Soft_GalleryVVideos[$i+1];
				}
				else
				{
					$Total_Soft_GalleryVVid = $Total_Soft_GalleryVVideos[0];
				}
			}
		}
		for($i = 0; $i < count($Total_Soft_GalleryVVideos); $i++)
		{
			$Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VDesc = html_entity_decode($Total_Soft_GalleryVVideos[$i]->TotalSoftGallery_Video_VDesc);
		}
		print_r($Total_Soft_GalleryVVid);
		die();
	}

	add_action( 'wp_ajax_TS_PTable_New_MTable_DisMiss_VG', 'TS_PTable_New_MTable_DisMiss_Callback_VG' );
	add_action( 'wp_ajax_nopriv_TS_PTable_New_MTable_DisMiss_VG', 'TS_PTable_New_MTable_DisMiss_Callback_VG' );

	function TS_PTable_New_MTable_DisMiss_Callback_VG()
	{
		$val = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_namenp  = $wpdb->prefix . "totalsoft_new_plugin";

		$wpdb->query($wpdb->prepare("UPDATE $table_namenp set Dismiss = %s WHERE New_Plugin_Name = %s AND Our_Plugin_Name = %s", '1', 'Pricing Table', 'Gallery Video'));
		die();
	}

	add_action( 'wp_ajax_TS_VG_Question_DisMiss', 'TS_VG_Question_DisMiss_Callback' );
	add_action( 'wp_ajax_nopriv_TS_VG_Question_DisMiss', 'TS_VG_Question_DisMiss_Callback' );

	function TS_VG_Question_DisMiss_Callback()
	{
		$val = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_namenp  = $wpdb->prefix . "totalsoft_new_plugin";

		$wpdb->query($wpdb->prepare("UPDATE $table_namenp set Dismiss = %s WHERE New_Plugin_Name = %s AND Our_Plugin_Name = %s", '1', 'Gallery Video Question', 'Gallery Video'));
		die();
	}

	add_action( 'wp_ajax_Total_Soft_GV_Prev', 'Total_Soft_GV_Prev_Callback' );
	add_action( 'wp_ajax_nopriv_Total_Soft_GV_Prev', 'Total_Soft_GV_Prev_Callback' );

	function Total_Soft_GV_Prev_Callback()
	{
		$GVideo_TSet = json_decode(stripcslashes(sanitize_text_field($_POST['foobar'])));
		global $wpdb;

		$table_name4_3 = $wpdb->prefix . "totalsoft_galleryv_dbt_3";
		$table_name4_4 = $wpdb->prefix . "totalsoft_galleryv_dbt_4";

		$TS_GVideo_Set = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4_3 WHERE id > %d order by id", 0));

		if($TS_GVideo_Set && !empty($TS_GVideo_Set))
		{
			$wpdb->query($wpdb->prepare("UPDATE $table_name4_3 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_1_01 = %s, TotalSoft_GV_1_02 = %s, TotalSoft_GV_1_03 = %s, TotalSoft_GV_1_04 = %s, TotalSoft_GV_1_05 = %s, TotalSoft_GV_1_06 = %s, TotalSoft_GV_1_07 = %s, TotalSoft_GV_1_08 = %s, TotalSoft_GV_1_09 = %s, TotalSoft_GV_1_10 = %s, TotalSoft_GV_1_11 = %s, TotalSoft_GV_1_12 = %s, TotalSoft_GV_1_13 = %s, TotalSoft_GV_1_14 = %s, TotalSoft_GV_1_15 = %s, TotalSoft_GV_1_16 = %s, TotalSoft_GV_1_17 = %s, TotalSoft_GV_1_18 = %s, TotalSoft_GV_1_19 = %s, TotalSoft_GV_1_20 = %s, TotalSoft_GV_1_21 = %s, TotalSoft_GV_1_22 = %s, TotalSoft_GV_1_23 = %s, TotalSoft_GV_1_24 = %s, TotalSoft_GV_1_25 = %s, TotalSoft_GV_1_26 = %s, TotalSoft_GV_1_27 = %s, TotalSoft_GV_1_28 = %s, TotalSoft_GV_1_29 = %s, TotalSoft_GV_1_30 = %s, TotalSoft_GV_1_31 = %s, TotalSoft_GV_1_32 = %s, TotalSoft_GV_1_33 = %s, TotalSoft_GV_1_34 = %s, TotalSoft_GV_1_35 = %s, TotalSoft_GV_1_36 = %s, TotalSoft_GV_1_37 = %s, TotalSoft_GV_1_38 = %s, TotalSoft_GV_1_39 = %s WHERE id > %d", $GVideo_TSet[0], $GVideo_TSet[1], $GVideo_TSet[2], $GVideo_TSet[3], $GVideo_TSet[4], $GVideo_TSet[5], $GVideo_TSet[6], $GVideo_TSet[7], $GVideo_TSet[8], $GVideo_TSet[9], $GVideo_TSet[10], $GVideo_TSet[11], $GVideo_TSet[12], $GVideo_TSet[13], $GVideo_TSet[14], $GVideo_TSet[15], $GVideo_TSet[16], $GVideo_TSet[17], $GVideo_TSet[18], $GVideo_TSet[19], $GVideo_TSet[20], $GVideo_TSet[21], $GVideo_TSet[22], $GVideo_TSet[23], $GVideo_TSet[24], $GVideo_TSet[25], $GVideo_TSet[26], $GVideo_TSet[27], $GVideo_TSet[28], $GVideo_TSet[29], $GVideo_TSet[30], $GVideo_TSet[31], $GVideo_TSet[32], $GVideo_TSet[33], $GVideo_TSet[34], $GVideo_TSet[35], $GVideo_TSet[36], $GVideo_TSet[37], $GVideo_TSet[38], $GVideo_TSet[39], $GVideo_TSet[40], 0));
			$wpdb->query($wpdb->prepare("UPDATE $table_name4_4 set TotalSoftGalleryV_SetName = %s, TotalSoftGalleryV_SetType = %s, TotalSoft_GV_2_01 = %s, TotalSoft_GV_2_02 = %s, TotalSoft_GV_2_03 = %s, TotalSoft_GV_2_04 = %s, TotalSoft_GV_2_05 = %s, TotalSoft_GV_2_06 = %s, TotalSoft_GV_2_07 = %s, TotalSoft_GV_2_08 = %s, TotalSoft_GV_2_09 = %s, TotalSoft_GV_2_10 = %s, TotalSoft_GV_2_11 = %s, TotalSoft_GV_2_12 = %s, TotalSoft_GV_2_13 = %s, TotalSoft_GV_2_14 = %s, TotalSoft_GV_2_15 = %s, TotalSoft_GV_2_16 = %s, TotalSoft_GV_2_17 = %s, TotalSoft_GV_2_18 = %s, TotalSoft_GV_2_19 = %s, TotalSoft_GV_2_20 = %s, TotalSoft_GV_2_21 = %s, TotalSoft_GV_2_22 = %s, TotalSoft_GV_2_23 = %s, TotalSoft_GV_2_24 = %s, TotalSoft_GV_2_25 = %s, TotalSoft_GV_2_26 = %s, TotalSoft_GV_2_27 = %s, TotalSoft_GV_2_28 = %s, TotalSoft_GV_2_29 = %s, TotalSoft_GV_2_30 = %s, TotalSoft_GV_2_31 = %s, TotalSoft_GV_2_32 = %s, TotalSoft_GV_2_33 = %s, TotalSoft_GV_2_34 = %s, TotalSoft_GV_2_35 = %s, TotalSoft_GV_2_36 = %s, TotalSoft_GV_2_37 = %s, TotalSoft_GV_2_38 = %s, TotalSoft_GV_2_39 = %s WHERE id > %d", $GVideo_TSet[0], $GVideo_TSet[1], $GVideo_TSet[41], $GVideo_TSet[42], $GVideo_TSet[43], $GVideo_TSet[44], $GVideo_TSet[45], $GVideo_TSet[46], $GVideo_TSet[47], $GVideo_TSet[48], $GVideo_TSet[49], $GVideo_TSet[50], $GVideo_TSet[51], $GVideo_TSet[52], $GVideo_TSet[53], $GVideo_TSet[54], $GVideo_TSet[55], $GVideo_TSet[56], $GVideo_TSet[57], $GVideo_TSet[58], $GVideo_TSet[59], $GVideo_TSet[60], $GVideo_TSet[61], $GVideo_TSet[62], $GVideo_TSet[63], $GVideo_TSet[64], $GVideo_TSet[65], $GVideo_TSet[66], $GVideo_TSet[67], $GVideo_TSet[68], $GVideo_TSet[69], $GVideo_TSet[70], $GVideo_TSet[71], $GVideo_TSet[72], $GVideo_TSet[73], $GVideo_TSet[74], $GVideo_TSet[75], $GVideo_TSet[76], $GVideo_TSet[77], $GVideo_TSet[78], $GVideo_TSet[79], 0));
		}
		else
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name4_3 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_GV_1_01, TotalSoft_GV_1_02, TotalSoft_GV_1_03, TotalSoft_GV_1_04, TotalSoft_GV_1_05, TotalSoft_GV_1_06, TotalSoft_GV_1_07, TotalSoft_GV_1_08, TotalSoft_GV_1_09, TotalSoft_GV_1_10, TotalSoft_GV_1_11, TotalSoft_GV_1_12, TotalSoft_GV_1_13, TotalSoft_GV_1_14, TotalSoft_GV_1_15, TotalSoft_GV_1_16, TotalSoft_GV_1_17, TotalSoft_GV_1_18, TotalSoft_GV_1_19, TotalSoft_GV_1_20, TotalSoft_GV_1_21, TotalSoft_GV_1_22, TotalSoft_GV_1_23, TotalSoft_GV_1_24, TotalSoft_GV_1_25, TotalSoft_GV_1_26, TotalSoft_GV_1_27, TotalSoft_GV_1_28, TotalSoft_GV_1_29, TotalSoft_GV_1_30, TotalSoft_GV_1_31, TotalSoft_GV_1_32, TotalSoft_GV_1_33, TotalSoft_GV_1_34, TotalSoft_GV_1_35, TotalSoft_GV_1_36, TotalSoft_GV_1_37, TotalSoft_GV_1_38, TotalSoft_GV_1_39) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', '', $GVideo_TSet[0], $GVideo_TSet[1], $GVideo_TSet[2], $GVideo_TSet[3], $GVideo_TSet[4], $GVideo_TSet[5], $GVideo_TSet[6], $GVideo_TSet[7], $GVideo_TSet[8], $GVideo_TSet[9], $GVideo_TSet[10], $GVideo_TSet[11], $GVideo_TSet[12], $GVideo_TSet[13], $GVideo_TSet[14], $GVideo_TSet[15], $GVideo_TSet[16], $GVideo_TSet[17], $GVideo_TSet[18], $GVideo_TSet[19], $GVideo_TSet[20], $GVideo_TSet[21], $GVideo_TSet[22], $GVideo_TSet[23], $GVideo_TSet[24], $GVideo_TSet[25], $GVideo_TSet[26], $GVideo_TSet[27], $GVideo_TSet[28], $GVideo_TSet[29], $GVideo_TSet[30], $GVideo_TSet[31], $GVideo_TSet[32], $GVideo_TSet[33], $GVideo_TSet[34], $GVideo_TSet[35], $GVideo_TSet[36], $GVideo_TSet[37], $GVideo_TSet[38], $GVideo_TSet[39], $GVideo_TSet[40]));
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name4_4 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_GV_2_01, TotalSoft_GV_2_02, TotalSoft_GV_2_03, TotalSoft_GV_2_04, TotalSoft_GV_2_05, TotalSoft_GV_2_06, TotalSoft_GV_2_07, TotalSoft_GV_2_08, TotalSoft_GV_2_09, TotalSoft_GV_2_10, TotalSoft_GV_2_11, TotalSoft_GV_2_12, TotalSoft_GV_2_13, TotalSoft_GV_2_14, TotalSoft_GV_2_15, TotalSoft_GV_2_16, TotalSoft_GV_2_17, TotalSoft_GV_2_18, TotalSoft_GV_2_19, TotalSoft_GV_2_20, TotalSoft_GV_2_21, TotalSoft_GV_2_22, TotalSoft_GV_2_23, TotalSoft_GV_2_24, TotalSoft_GV_2_25, TotalSoft_GV_2_26, TotalSoft_GV_2_27, TotalSoft_GV_2_28, TotalSoft_GV_2_29, TotalSoft_GV_2_30, TotalSoft_GV_2_31, TotalSoft_GV_2_32, TotalSoft_GV_2_33, TotalSoft_GV_2_34, TotalSoft_GV_2_35, TotalSoft_GV_2_36, TotalSoft_GV_2_37, TotalSoft_GV_2_38, TotalSoft_GV_2_39) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', '', $GVideo_TSet[0], $GVideo_TSet[1], $GVideo_TSet[41], $GVideo_TSet[42], $GVideo_TSet[43], $GVideo_TSet[44], $GVideo_TSet[45], $GVideo_TSet[46], $GVideo_TSet[47], $GVideo_TSet[48], $GVideo_TSet[49], $GVideo_TSet[50], $GVideo_TSet[51], $GVideo_TSet[52], $GVideo_TSet[53], $GVideo_TSet[54], $GVideo_TSet[55], $GVideo_TSet[56], $GVideo_TSet[57], $GVideo_TSet[58], $GVideo_TSet[59], $GVideo_TSet[60], $GVideo_TSet[61], $GVideo_TSet[62], $GVideo_TSet[63], $GVideo_TSet[64], $GVideo_TSet[65], $GVideo_TSet[66], $GVideo_TSet[67], $GVideo_TSet[68], $GVideo_TSet[69], $GVideo_TSet[70], $GVideo_TSet[71], $GVideo_TSet[72], $GVideo_TSet[73], $GVideo_TSet[74], $GVideo_TSet[75], $GVideo_TSet[76], $GVideo_TSet[77], $GVideo_TSet[78], $GVideo_TSet[79]));
		}
		die();
	}
?>