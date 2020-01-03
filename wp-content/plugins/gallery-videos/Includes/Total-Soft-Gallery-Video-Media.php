<?php
	global $wpdb;

	$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
	$Total_Soft_Gallery_Video = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id > %d", 0));
?>
<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery('#TS_GV_Media_Insert').on('click', function () {
			var id = jQuery('#TS_GV_Media_Select option:selected').val();
			window.send_to_editor('[Total_Soft_Gallery_Video id="' + id + '"]');
			tb_remove();
			return false;
		});
	});
</script>
<form method="POST">
	<div id="TSVGallery" style="display: none;">
		<?php
			$new_gallery_link = admin_url('admin.php?page=Total_Soft_Gallery_Video');
			$new_gallery_link_n = wp_nonce_url( '', 'edit-menu_', 'TS_VGallery_Nonce' );

			if ($Total_Soft_Gallery_Video && !empty($Total_Soft_Gallery_Video)) { ?>
				<h3>Select The Gallery</h3>
				<select id="TS_GV_Media_Select">
					<?php
						foreach ($Total_Soft_Gallery_Video as $Total_Soft_Gallery_Video1)
						{
							?> <option value="<?php echo $Total_Soft_Gallery_Video1->id; ?>"> <?php echo $Total_Soft_Gallery_Video1->TotalSoftGallery_Video_Gallery_Title; ?> </option> <?php
						}
					?>
				</select>
				<button class='button primary' id='TS_GV_Media_Insert'>Insert Gallery</button>
			<?php } else {
				printf('<p>%s<a class="button" href="%s">%s</a></p>', 'You have not created any galleries yet' . '<br>', $new_gallery_link . $new_gallery_link_n, 'Create New Gallery');
			}
		?>
	</div>
</form>