<?php
    global $wpdb; // this is how you get access to the database
    if(isset($_POST['remove_subs'])){
        global $wpdb;
        $table_name = $wpdb->prefix . 'edn_subscriber';
        $si_id = $_POST['rem'];
        if(!$si_id ==''){
            foreach($si_id as $id){
                $wpdb->delete( $table_name, array( 'id' => $id ), array( '%d' ) );
                $_SESSION['edn_delete_smg'] = __('User deleted successfully.','edn-plugin');
            }
        }else{
            $_SESSION['edn_delete_smg'] = __('Fail to delete','edn-plugin');
       }
    }
?>
<h1><?php _e('Visitors Subscriptions','edn-plugin');?></h1>


<form method="post" action="" >
    <div class="edn-subscribe_list aps-panel-body">
        <input type="submit" name="remove_subs" class="button-primary edn_subs_remove_button" value="Remove Subscriber" onclick="return confirm('<?php _e('Are you sure you want to delete?', 'edn-plugin'); ?>')" />
        <a class="button-primary" href="<?php echo plugins_url( 'export-csv.php', __FILE__ ); ?>">Export as CSV</a>
        <?php if(isset($_SESSION['edn_delete_smg'])){ ?>
        <span class="edn-sesion-msg error"><?php echo $_SESSION['edn_delete_smg'];unset($_SESSION['edn_delete_smg']);?></span>
        <?php } ?>
        <table class="wp-list-table widefat fixed posts">
            <thead>
                <tr>
                    <th scope="col" id="sub_cbx" class="manage-column column-title sortable asc" style="width: 40px;">
                        <!--<span><?php _e('Select', 'edn-plugin'); ?></span> -->
                        <span><input type="checkbox" name="checkall_sub" value="1" id="edn-subs-checkall" /></span>
                    </th>
                    <th scope="col" id="sub_email" class="manage-column column-title sortable asc" style="">
                        <span><?php _e('Email', 'edn-plugin'); ?></span>
                    </th>
                    <th scope="col" id="sub_date" class="manage-column column-shortcode" style="">
                        <span><?php _e('Subscribtion Date', 'edn-plugin'); ?></span>
                    </th>
                </tr>
            </thead>
            <tbody id="the-list" data-wp-lists="list:post">
                <?php
                $table_name = $wpdb->prefix . 'edn_subscriber';
                $subs_datas = $wpdb->get_results( " SELECT * FROM $table_name WHERE email IS NOT NULL AND TRIM(email) <> ''");
                if (count($subs_datas) > 0) {
                foreach ($subs_datas as $subs_data) { ?>
                <tr>
                    <td class="shortcode column-shortcode"><tr>
                        <th class="check-column" style="padding:5px 0 2px 0;width: 40px;"><?php echo '<input type="checkbox" name="rem[]" class="edn-select-all-subs" value="'.esc_js(esc_html($subs_data->id)).'">'; ?>
                    </td>
                    <td class="shortcode column-shortcode"><?php echo $subs_data->email; ?></td>
                    <td class="shortcode column-shortcode"><?php echo $subs_data->date; ?></td>
                </tr>
                <?php }
                }
                else{ ?>
                <tr>
                    <td colspan="2">
                        <div class="aps-noresult"><?php _e('No Subscribers Found', 'edn-plugin'); ?></div>
                    </td>
                </tr>
                <?php } ?>
        </table>
    </div>
</form>
