(function ($) {
    $(function () {
        
        /* Click function start to display related block as click on menu */
        $('.edn-tabs-trigger').click(function(){
            $('.edn-tabs-trigger').removeClass('edn-active-tab');
            $(this).addClass('edn-active-tab');
            var block_id = 'edn-'+$(this).attr('id');
            $('.edn-blocks-tabs').hide();
            $('#'+block_id).show();
            if((block_id=="edn-subscribe-settings")||(block_id=="edn-how-to-use")||(block_id=="edn-about")){$('.edn_setting_form').hide();}
            else{$('.edn_setting_form').show();}
        });
        /* Click function end */
        
/*************************************** General Settings ************************************/      
  
        /* Social Network Section */
            //social network main option 
            $('#social_show').change(function () {
                if ($(this).is(':checked')) {
                    $('#social_option_show').show(400);
                }else{
                    $('#social_option_show').hide(400);
                }
            });
            if ($('#social_show').is(':checked')) {
                $('#social_option_show').show();
            }else{
                $('#social_option_show').hide();
            }//End social network main option 
            
        /* End of Socail Network Section */ 
               
        
        /* Notification Type option */      
            /* Select text or newsletter type */
            $('input:radio[name="edn_type"]').change(function(){
                if($(this).val() == '1'){
                    $('#edn_notification_type_text').show(400);
                    $('#edn-notification-type-newsletter').hide(400);
                }else{
                    $('#edn-notification-type-newsletter').show(400);
                    $('#edn_notification_type_text').hide(400);
                }
            });
            if($('input:radio[name="edn_type"]#edn_type_text').is(':checked')){
                $('#edn_notification_type_text').show(400);
                $('#edn-notification-type-newsletter').hide(400);
            }else{
                $('#edn-notification-type-newsletter').show(400);
                $('#edn_notification_type_text').hide(400);
            }//End of Select text or newsletter type 
            
            /* Dispaly mode function of text type */
            $('input:radio[name="display_mode"]').change(function(){
                if($(this).val() == '1'){
                    $('#edn_mode_text').show(400);
                    $('#edn_mode_slider').hide(400);
                    $('#edn_mode_ticker').hide(400);
                }else if($(this).val() == '2'){
                    $('#edn_mode_text').hide(400);
                    $('#edn_mode_slider').show(400);
                    $('#edn_mode_ticker').hide(400);
                }else{
                    $('#edn_mode_text').hide(400);
                    $('#edn_mode_slider').hide(400);
                    $('#edn_mode_ticker').show(400);
                }
            });
            if($('input:radio[name="display_mode"]#mode_normal').is(':checked')){
                $('#edn_mode_text').show(400);
                $('#edn_mode_slider').hide(400);
                $('#edn_mode_ticker').hide(400);
            }else if($('input:radio[name="display_mode"]#mode_slider').is(':checked')){
                $('#edn_mode_text').hide(400);
                $('#edn_mode_slider').show(400);
                $('#edn_mode_ticker').hide(400);
            }else{
                $('#edn_mode_text').hide(400);
                $('#edn_mode_slider').hide(400);
                $('#edn_mode_ticker').show(400);
            }//End of Select text or newsletter type 
            
            /* Add slider text field */
            var id = $('.add_last').attr('id');
            var split_id = id.split('text');
            var add = parseInt(split_id[1])+1;
            var counter = add;
            $("#edn_add_slide").click(function () {
            	if(counter>10){
                    alert("Only 10 textboxes allow");
                    return false;
            	}
                var newTextBoxDiv = $(document.createElement('div')).attr("id", 'edn-slider-text' + counter);
                newTextBoxDiv.after().html('<label>Slider Text '+ counter + '</label>' +
        	      '<input type="text" name="slider_text[]" id="textbox' + counter + '" value="" class="edn-slide-input" /><a href="javascript:void(0);" class="edn_remove_slider"><i class="fa fa-times"></i></a>');
                newTextBoxDiv.appendTo("#append_field");
                counter++;
            });// End Add slider text field 
            $('#append_field').on("click",".edn_remove_slider", function(e){ //user click on remove text
                e.preventDefault();$(this).parent('div').remove(); counter--;
            });//remove slider text field
            
        /* End Notification Type option */
          
            
  /*************************************** General Settings End ************************************/
/*****************************************************************************************************/
  /*************************************** Display Settings ***************************************/
  
        $('#edn_background_color').wpColorPicker();//background color of notification bar
        $('#edn_font_color').wpColorPicker();//font color of notification bar
        $('#edn_social_bg_color').wpColorPicker();// background color of Social network icons
        $('#edn_social_bg_hover_color').wpColorPicker();// Hover background color of Social network icons
        $('#edn_social_font_color').wpColorPicker();// background color of Social network Font
        $('#edn_social_font_hover_color').wpColorPicker();// Hover background color of Social network Fonts  
        
        /**
        * For sortable 
        */
        $('.edn-sortable').sortable({containment: "parent"});
       
        /* Subscriber check all */
        $('#edn-subs-checkall').change(function() {
            if ($(this).prop('checked')) {
                $(".edn-select-all-subs").prop( "checked", true );
            }
            else {
                $(".edn-select-all-subs").prop( "checked", false );
            }
        });//check all end
        


         /* Demo font style change */
        $(".ednfont").change(function(){
            var font_family = $(this).val();
            $('#edn-font-family').css("font-family",font_family);
            WebFont.load({
                google: {
                    families: [font_family]
                }
            });
        });
        


        $("#ednsize").change(function(){
            var size = $(this).val();
            $('#edn-font-family').css("font-size",size+"px");
        });
        
	});//$(function () end
}(jQuery));
