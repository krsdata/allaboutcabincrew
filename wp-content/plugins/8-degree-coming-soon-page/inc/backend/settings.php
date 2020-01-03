<?php
defined( 'ABSPATH' ) or die( "No script kiddies please!" );
$maintenance_setting = get_option( 'maintenance_settings' );
?>
<div class="edmm-maintenance-wrapper">
    <div class="plugin-backend-header">
        <div class="header-main-text">
            <h1><?php _e( '8 Degree Coming Soon Page ', '8degree-maintenance' ) ?></h1><font>&nbsp; Version <?php echo MAINTENANCE_VERSION; ?></font></div>
        <div class="social-links">
            <p><?php _e( 'Follow us for new updates', '8degree-maintenance' ) ?></p>
            <div class="head-social-inner">
                <div class="fb-like" data-href="https://www.facebook.com/8DegreeThemes" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
                <div id="fb-root">
                    <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                </div>
                <a href="https://twitter.com/8degreethemes" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @apthemes</a>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>
            </div>
        </div>
    </div>
    <div class="edmm-menu-settings">
        <ul>
            <li><a href="javascript:void(0);" class="menu-click edmm-menu-active" id="general-menu"><?php _e( 'General Settings', '8degree-maintenance' ) ?></a></li>
            <li><a href="javascript:void(0);" class="menu-click" id="design-menu"><?php _e( 'Design', '8degree-maintenance' ) ?></a></li>
            <li><a href="javascript:void(0);" class="menu-click" id="subscribers-menu"><?php _e( 'Subscribers', '8degree-maintenance' ) ?></a></li>
            <li><a href="javascript:void(0);" class="menu-click" id="extras-menu"><?php _e( 'Extras', '8degree-maintenance' ) ?></a></li>
            <li><a href="javascript:void(0);" class="menu-click" id="how-to-use"><?php _e( 'How to use', '8degree-maintenance' ) ?></a></li>
            <li><a href="javascript:void(0);" class="menu-click" id="about-panel"><?php _e( 'About', '8degree-maintenance' ) ?></a></li>
            <li><a href="http://wpallclub.com" target="_blank"><?php _e( 'More WP Resources', '8degree-maintenance' ) ?></a></li>
        </ul>
    </div>
    <div class="panels-container">

        
            <?php if ( isset( $_SESSION['save_msg'] ) ) { ?>
                <div id="message" class="updated notice notice-success is-dismissible">
                    <p><?php echo $_SESSION['save_msg'];unset( $_SESSION['save_msg'] );?></p>
                </div>

                <?php
            }
            ?>
        
        <form method="post" action="<?php echo admin_url() . 'admin-post.php' ?>">
            <input type="hidden" name="action" value="maintenance_settings_action"/>
            <?php
            /**
             * General Settings
             * */
            include_once('boards/general-settings.php');

            /**
             * Design Settings
             * */
            include_once('boards/design-settings.php');

            /**
             * Extras Settings
             * */
            include_once('boards/extra-settings.php');

            /**
             * How to use documentation
             * */
            include_once('boards/how-to-use.php');

            /**
             * About
             * */
            include_once('boards/about.php');

            /**
             * Creating a nonce field
             * */
            wp_nonce_field( 'maintenance-nonce', 'maintenance_nonce_field' );
            ?>

            <div class="backend-submit-buttons">
                <input type="submit" class="save-option" name="save_options" value="<?php _e( 'Save Options', '8degree-maintenance' ) ?>" class="submit_button" />
                <?php $nonce = wp_create_nonce( 'maintenance-restore-default-nonce' ); ?>
                <a href="<?php echo admin_url() . 'admin-post.php?action=maintenance_restore_default&_wpnonce=' . $nonce; ?>" onclick="return confirm('<?php _e( 'Are you sure you want to restore default settings?', '8degree-maintenance' ); ?>')"><input type="button" value="Restore Default" class="reset-button"/></a>
            </div>
        </form>

        <?php
        /**
         * Subscriber settings
         * */
        ?>

        <div class="subscribers-settings-wrap settings-content" style="display: none;">
            <?php
            if ( isset( $_POST['remove_subs'] ) ) {
                global $wpdb;
                $si_id = $_POST['rem'];
                $table_name = $wpdb->prefix . "8degree_maintenance";
                if ( !$si_id == '' ) {
                    foreach ( $si_id as $id ) {
                        $wpdb->delete( $table_name, array( 'id' => $id ), array( '%d' ) );
                    }
                } else {
                    
                }
            }
            ?>

            <form method="post" action=""> 
                <div class="edmm-panel-body">
                    <h2>Visitors Subscriptions</h2>
                    <div class="buttons">
                        <input type="submit" class="remove-subs" name="remove_subs" id="remove-sub" value="Remove Subscriber" onclick="return confirm('<?php _e( 'Are you sure you want to delete?', '8degree-maintenance' ); ?>')" />

                        <a class="button" href="<?php echo plugins_url( 'export-csv.php', __FILE__ ); ?>">Export as CSV</a>
                    </div>
                   <!-- <a class="button" href="<?php // echo plugins_url( 'remove-subscriber.php', __FILE__ );      ?>">Remove</a> -->
                    <table class="wp-list-table widefat fixed posts">
                        <thead>
                            <tr>
                                <th scope="col" id="sub_cbx" class="manage-column column-title sortable asc" style="">
                                    <label><span><?php _e( 'Select All', '8degree-maintenance' ); ?></span> <input type="checkbox" name="checkall_sub" value="1" id="checkall" /></label>
                                </th>
                                <th scope="col" id="sub_email" class="manage-column column-title sortable asc" style="">
                                    <span><?php _e( 'Email', '8degree-maintenance' ); ?></span> 
                                </th>
                                <th scope="col" id="sub_date" class="manage-column column-shortcode" style="">
                                    <span><?php _e( 'Subscribtion Date', '8degree-maintenance' ); ?></span> 
                                </th>
                                <th scope="col" id="sub_verification" class="manage-column column-title sortable asc" style="">
                                   <span title="<?php _e('Shows whether subscriber have confirmed the email address when Confirmed Email Address is checked in General Settings','8degree-maintenance');?>"><?php _e( 'Confirmed Email Address', '8degree-maintenance' ); ?></span> 
                               </th>
                            </tr>
                        </thead>


                        <?php
                        global $wpdb;
                        $table_name = $table_name = $wpdb->prefix . "8degree_maintenance";
                        $user_sets = $wpdb->get_results( "SELECT * FROM $table_name" );
                        ?>
                        <tbody id="the-list" data-wp-lists="list:post">
                            <?php
                            if ( count( $user_sets ) > 0 ) {

                                foreach ( $user_sets as $user_set ) {
                                    ?>
                                    <tr >
                                        <td class="shortcode column-shortcode">
                                    </tr>
                                    <tr style="background-color: #f9f6f6;">
                                        <th class="check-column" ><?php echo '<input type="checkbox" name="rem[]" class="select_subs" value="' . esc_js( esc_html( $user_set->id ) ) . '">'; ?></td>
                                        <td class="shortcode column-shortcode"><?php echo $user_set->email; ?></td>
                                        <td class="shortcode column-shortcode"><?php echo $user_set->date; ?></td>
                                        <td class="shortcode column-shortcode"><?php echo ($user_set->flag==1)? __( 'Yes', '8degree-maintenance' ):__( 'No', '8degree-maintenance' ); ?></td>
                                    </tr>
                                    <tr >
                                        <td class="shortcode column-shortcode">
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr><td colspan="2"><div class="edmm-noresult"><?php _e( 'No Subscribers Found.', '8degree-maintenance' ); ?></div></td></tr>
                            <?php } ?>

                    </table>
                </div>
            </form>
        </div>

    </div>
    <div class="edmm-upgrade-wrap">
        <img src="<?php echo MAINTENANCE_IMAGE_DIR . '/upgrade-top.jpg' ?>"/>
        <div class="edmm-upgrade-action">
            <a href="https://8degreethemes.com/demo/plugins/coming-soon-landing-page-and-maintenance-mode-wordpress-plugin/" target="_blank"><input type="button" class="button-primary" value="<?php _e( 'Demo', '8degree-maintenance' ); ?>"/></a>
            <a href="https://codecanyon.net/item/coming-soon-landing-page-and-maintenance-mode-wordpress-plugin/17015175?ref=8DegreeThemes" target="_blank"><input type="button" class="button-primary" value="<?php _e( 'Upgarde', '8degree-maintenance' ); ?>"/></a>
        </div>
        <img src="<?php echo MAINTENANCE_IMAGE_DIR . '/upgrade-bottom.jpg' ?>"/>
        <div class="edmm-upgrade-action">
            <a href="https://8degreethemes.com/demo/plugins/coming-soon-landing-page-and-maintenance-mode-wordpress-plugin/" target="_blank"><input type="button" class="button-primary" value="<?php _e( 'Demo', '8degree-maintenance' ); ?>"/></a>
            <a href="https://codecanyon.net/item/coming-soon-landing-page-and-maintenance-mode-wordpress-plugin/17015175?ref=8DegreeThemes" target="_blank"><input type="button" class="button-primary" value="<?php _e( 'Upgarde', '8degree-maintenance' ); ?>"/></a>
        </div>
    </div>

</div>