<h1><?php _e('Display Settings','edn-plugin');?></h1>
<div class="edn-setting-body">
    <div id="edn-notification-placement-wrap">
        <label><?php _e('Notification Bar Position','edn-plugin');?></label>
        <select name="noti_placement" id="edn-noti-placement">
            <option><?php _e('Select','edn-plugin');?></option>
            <option value="Top" <?php if($edn_settings['noti_placement']=='Top')echo 'selected="selected"';?>><?php _e('Top','edn-plugin');?></option>
            <option value="Bottom" <?php if($edn_settings['noti_placement']=='Bottom')echo 'selected="selected"';?>><?php _e('Bottom','edn-plugin');?></option>
        </select>
    </div>
    <div id="edn-notification-height-wrap">
        <label><?php _e('Notification Bar Height','edn-plugin');?></label>
        <input type="text" name="noti_height" value="<?php echo esc_attr($edn_settings['noti_height']);?>" />
    </div>
    <div id="edn-notification-color-wrap">
        <div id="edn-background-color" class="noti-color">
            <label><?php _e('Background Color','edn-plugin');?></label>
            <input type="text" id="edn_background_color" name="edn_background_color" value="<?php echo esc_attr($edn_settings['edn_background_color']);?>" />
        </div>
        <div id="edn-font-color" class="noti-color">
            <label><?php _e('Font Color','edn-plugin');?></label>
            <input type="text" id="edn_font_color" name="edn_font_color" value="<?php echo esc_attr($edn_settings['edn_font_color']);?>" />
        </div>
    </div>
    <div id="edn-social-color-wrap">
        <div id="edn-social-background-color" class="noti-color">
            <label><?php _e('Social Background Color','edn-plugin');?></label>
            <input type="text" id="edn_social_bg_color" name="social_bg_color" value="<?php echo esc_attr($edn_settings['social_bg_color']);?>" />
        </div>
        <div id="edn-social-bg-hover-color" class="noti-color">
            <label><?php _e('Social Background Hover Color','edn-plugin');?></label>
            <input type="text" id="edn_social_bg_hover_color" name="social_bg_hover_color" value="<?php echo esc_attr($edn_settings['social_bg_hover_color']);?>" />
        </div>
        <div id="edn-social-font-color" class="noti-color">
            <label><?php _e('Social Font Color','edn-plugin');?></label>
            <input type="text" id="edn_social_font_color" name="social_font_color" value="<?php echo esc_attr($edn_settings['social_font_color']);?>" />
        </div>
        <div id="edn-social-font-hover-color" class="noti-color">
            <label><?php _e('Social Font Hover Color','edn-plugin');?></label>
            <input type="text" id="edn_social_font_hover_color" name="social_font_hover_color" value="<?php echo esc_attr($edn_settings['social_font_hover_color']);?>" />
        </div>
    </div>
    <div class="edn-font-wrap">
        <div class="edn-font">
            <?php
                $edn_fonts = get_option('edn_fonts');
                //echo '<pre>';
//                print_r($edn_fonts);
//                echo '</pre>';
            ?>
            <label><?php _e('Notification Bar Font','edn-plugin');?></label>
            <select name="notification_font" id="edn-noti-placement" class="ednfont">
                <option value="defalut">Default</option>
                <?php foreach ($edn_fonts as $fonts) { ?>
                            <option value="<?php echo $fonts;?>" <?php if( $edn_settings['notification_font']==$fonts )echo 'selected="selected"';?>><?php echo $fonts;?></option>
                <?php } ?>
            </select>
        </div>
        <div class="edn-font-demo-wrap">
            <span id="edn-font-family" style="font-family: <?php echo esc_attr($edn_settings['notification_font']);?>;font-size: <?php echo esc_attr($edn_settings['font_size']);?>px;">The Quick Brown Fox Jumps Over The Lazy Dog. 1234567890</span>
        </div>
        <div class="edn-font-size">
            <label><?php _e('Notification Bar Font Size','edn-plugin');?></label>
           	<span class="edn-fz-wrap">
                <select class="edn-select-font" id="ednsize" onchange="document.getElementById('edn-displayValue').value=this.options[this.selectedIndex].value;">
            		<?php
                        $sizes = array('8','9','10','11','12','14','16','18','20','22','24','26','28','36','48','72');
                        foreach($sizes as $size){
                            ?>
                                <option value="<?php echo $size;?>" <?php if($edn_settings['font_size']==$size)echo 'selected="selected"';?>><?php echo $size;?></option>
                            <?php
                        }
                    ?>
            	</select>
            	<input type="text" name="font_size" value="<?php echo esc_attr($edn_settings['font_size']);?>" id="edn-displayValue" class="edn-dis-value" onfocus="this.select()" />
            </span>
        </div>
    </div>
    <style>
        .edn-fz-wrap{
            position:relative;
        }
        .edn-select-font{
            position:absolute;
            top:0px;
            left:0px;
            width:150px;
            height:25px;
            line-height:20px;
            margin:0;
            padding:0;
        }
        .edn-dis-value{
            position:absolute;
            top:0px;
            left:0px;
            width:133px;
            height:26px;
            width:180px\9;#width:180px;
            height:21px\9;#height:18px;
        }
    </style>
        
    <div class="edn-social-option-field">
        <h4><?php _e('Social Icon Order','edn-plugin');?></h4>
        <ul class="edn-sortable">
            <?php
                $social_icons_ref = array(
                                        'facebook' => 'Facebook',
                                        'twitter' => 'Twitter',
                                        'linkedin' => 'Linkedin ',
                                        'googlePlus' => 'Google Plus'
                                        );
                //$social_orders = array('facebook', 'twitter','linkedin','googlePlus');
                $social_orders = $edn_settings['social_order'];
                foreach ($social_orders as $social_order) {
                    if($social_order=='facebook'){$icons_class="fa fa-facebook-square";}elseif($social_order=='twitter'){$icons_class='fa fa-twitter-square';}
                    elseif($social_order=='linkedin'){$icons_class='fa fa-linkedin-square';}elseif($social_order='googlePlus'){$icons_class='fa fa-google-plus-square';}
                    ?>
                    <li><i class="<?php echo $icons_class;?>"></i><span class="social-name"><?php _e($social_icons_ref[$social_order], 'edn-counter'); ?></span><span class="left-icon"><i class="fa fa-arrows"></i></span>
                        <input type="hidden" name="social_order[]" value="<?php echo $social_order; ?>"/>
                    </li>
                <?php } ?>
        </ul>
    </div>
    
</div>