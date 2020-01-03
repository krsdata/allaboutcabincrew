<?php
defined('ABSPATH') or die("No script kiddies please!");
    /**
     * Get Settings from DB
     * */
     $edn_settings = $this->edn_settings;
     //echo '<pre>';
//     print_r($edn_settings);
//     echo '</pre>';
?>
<div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>
<div class="edn-settings-main-warapper">
    <div class="edn-header-section">
        <div class="edn-header-logo">
            <?php _e('Notification Bar','edn-plugin');?>
            <div><span class="edn-author"><a href="http://8degreethemes.com/" target="_blank"><?php _e('By 8Degree Themes','edn-plugin');?></a></span></div>
        </div>
        <div class="edn-version-wrap">
            <span>Version <?php echo EDN_VERSION;?></span>
        </div>
        <div class="edn-header-social-link">
            <p class="edn-follow-us"><?php _e('Follow us for new updates','edn-plugin');?></p>
            <div class="fb-like" data-href="https://www.facebook.com/8DegreeThemes" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
            <a href="https://twitter.com/8degreethemes" class="twitter-follow-button" data-show-count="false">Follow @8degreethemes</a>
        </div>
        <div class="edn-header-nb-settings"><?php _e('8Degree Notification Bar Settings','edn-plugin');?></div>
    </div>
    
    <?php if(isset($_SESSION['edn_message'])){ ?>
        <p class="edn-sesion-msg error"><?php echo $_SESSION['edn_message'];unset($_SESSION['edn_message']);?></p>
    <?php } ?>
    
    <menu class="edn-plugin-menu">
        <div id="general-settings" class="edn-tabs-trigger edn-active-tab"><a href="javascript:void(0);"><?php _e('General Settings','edn-plugin');?></a></div>
        <div id="display-settings" class="edn-tabs-trigger"><a href="javascript:void(0);"><?php _e('Display Settings','edn-plugin');?></a></div>
        <div id="subscribe-settings" class="edn-tabs-trigger"><a href="javascript:void(0);"><?php _e('Opt-in  Settings','edn-plugin');?></a></div>
        <div id="how-to-use" class="edn-tabs-trigger"><a href="javascript:void(0);"><?php _e('How to use','edn-plugin');?></a></div>
        <div id="about" class="edn-tabs-trigger"><a href="javascript:void(0);"><?php _e('About','edn-plugin');?></a></div>
    </menu>
    <div class="edn-setting">
        <form method="post" action="<?php echo admin_url('admin-post.php');?>" class="edn_setting_form"> 
        <input type="hidden" name="action" value="edn_settings_action"/>
            <div id="edn-general-settings" class="edn-blocks-tabs">
                <?php include_once('blocks/general-settings.php');?>
            </div><!-- end of general-settings -->
            
            <div id="edn-display-settings" class="edn-blocks-tabs" style="display: none;">
                <?php include_once('blocks/display-settings.php');?>
            </div><!-- end of display-settings -->
            
        
        <?php 
        /**
         * Creating a nonce field
         * */
         wp_nonce_field('edn-nonce','edn_nonce_field');
        ?>
        <div class="edn-plugin-submit-wrap">
          <input class="edn_buttons" type="submit" name="settings_submit" value="<?php _e('Save','edn-plugin');?>"/>
          <?php $nonce = wp_create_nonce('edn-restore-default-nonce');?>
          <a class="edn_buttons" href="<?php echo admin_url().'admin-post.php?action=edn_restore_default&_wpnonce='.$nonce;?>" onclick="return confirm('<?php _e('Are you sure you want to restore default settings?','edn-plugin');?>')"><input type="button" value="Restore Default" class="edn-reset-button"/></a>
        </div>
        </form>
        
        <div id="edn-subscribe-settings" class="edn-blocks-tabs" style="display: none;">
            <?php include_once('blocks/subscribe-settings.php');?>
        </div><!-- end of opt-in-settings -->
        
        <div id="edn-how-to-use" class="edn-blocks-tabs" style="display: none;">
            <?php include_once('blocks/how-to-use.php');?>
        </div><!-- end of edn-how-to-use -->
        
        <div id="edn-about" class="edn-blocks-tabs" style="display: none;">
            <?php include_once('blocks/about.php');?>
        </div><!-- end of edn-about -->
    </div>

        <menu class="edn-plugin-promobar">
      <div>
      <a href="http://codecanyon.net/item/8-degree-notification-bar-pro/16251068?s_rank=9" target="_blank" 
      class="edn-upgrade-first">
      <img src="<?php echo EDN_IMAGE_DIR;?>/pro_upgrade.jpg">
      </a>
      </div>
      <div class="edn-demo-links">
            <div class="edn-group">
                <a href="http://codecanyon.net/item/8-degree-notification-bar-pro/full_screen_preview/16251068" 
                target="_blank" class="edn-btn edn-btn-default edn-btn-demo">DEMO</a>
                <a href="http://codecanyon.net/item/8-degree-notification-bar-pro/16251068?s_rank=9" 
                target="_blank" class="edn-btn edn-btn-default edn-btn-upgrade">UPGRADE</a>
            </div>
        </div>
        <div>
      <a href="http://codecanyon.net/item/8-degree-notification-bar-pro/16251068?s_rank=9" target="_blank" 
      class="edn-upgrade-first">
      <img src="<?php echo EDN_IMAGE_DIR;?>/pro_upgrade2.jpg">
      </a>
       </div>
      <div class="edn-enquiry-block">
          <p><?php _e('If you have any questions regarding pro version, please contact us from ','edn-plugin');?>
          <a href="https://8degreethemes.com/contact/" target="_blank">here</a></p>
      </div>
    </menu>
    
</div>