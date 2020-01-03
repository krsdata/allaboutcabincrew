jQuery(document).ready(function ($) {
    jQuery('.cpa-color-picker').wpColorPicker();
    jQuery('.cpa-color-picker2').wpColorPicker();

    /*Code mirror*/
     $('#extras-menu').on('click', function() {
        codeMirrorDisplay();
     });

     function codeMirrorDisplay() {
        var $codeMirrorEditors = $('.edmm-maintenance-wrapper .custom_css_code');
        $codeMirrorEditors.each(function(i, el) {
            var $active_element = $(el);
            if ($active_element.data('cm')) {
                $active_element.data('cm').doc.cm.toTextArea();
            }
            var codeMirrorEditor = CodeMirror.fromTextArea(el, {
                lineNumbers: true,
                lineWrapping: true
            });
            $active_element.data('cm', codeMirrorEditor);
        });
     }


    /*pre display of fields*/

    //DESIGN OPTIONS
    if ($('#option_colorbg').is(":checked")) {
        $('.bg-color-type').show();
    }
    if ($('#option_imagebg').is(":checked")) {
        $('.background-image').show();
    }
    if ($('#pre_img').is(":selected")) {
        $('.bg-available-type').show();
    }
    if ($('#new_img').is(":selected")) {
        $('.bg-img-type').show();
    }

    //Extra Options

    /*pre display of fields ends*/


    $('.menu-click').click(function () {
        $('.menu-click').removeClass('edmm-menu-active');
        $(this).addClass('edmm-menu-active');
        var menu_id = $(this).attr('id');
        if (menu_id == 'general-menu') {
            $('.settings-content').hide();
            $('.general-settings-wrap').show();
            // $('.background-settings-wrap').show();
        }
        if (menu_id == 'design-menu') {
            $('.settings-content').hide();
            $('.design-wrap').show();
        }
        if (menu_id == 'subscribers-menu') {
            $('.settings-content').hide();
            $('.subscribers-settings-wrap').show();
            $('.backend-submit-buttons').hide();
        } else {
            $('.backend-submit-buttons').show();
        }
        if (menu_id == 'extras-menu') {
            $('.settings-content').hide();
            $('.extra-wrap').show();
        }
        if (menu_id == 'how-to-use') {
            $('.settings-content').hide();
            $('.documentation-wrap').show();
            $('.backend-submit-buttons').hide();
        }
        if (menu_id == 'about-panel') {
            $('.settings-content').hide();
            $('.about-content-wrap').show();
            $('.backend-submit-buttons').hide();
        }

    });

    //Show/hide fields

    $('.status-mode').change(function () {
        if ($(this).val() == '1') {
            $('.edmm-general-settings-wrap').show();
        } else {
            $('.edmm-general-settings-wrap').hide();
        }
    });





    $('.field-display-trigger').change(function () {

        var id_field = $(this).attr('id');
        var split_num = id_field.split('-');
        var num = split_num[1];

        if ($(this).prop('checked')) {
            $('#field-' + num).show();
        } else {
            $('#field-' + num).hide();
        }
    });

    // Sort social icons
    $('.sortable').sortable({containment: "parent"});

    $('.background-image-type').change(function () {
        var background_type = $(this).val();
        $('.edmm-background-ref').hide();
        $('.edmm-background-ref[data-background-ref="'+background_type+'"]').show();
    });
    //Show hide pre-available/new image bg

    $('.bg-image-choose').change(function () {
        var image_type = $(this).val();
         $('.edmm-background-image-ref').hide();
         $('.edmm-background-image-ref[data-image-type="'+image_type+'"]').show();
        
    });



    //Pre available image hide/show
    $('.bg-select-class').change(function () {
        var image = $(this).val();
        var image_id = image.replace('image', '');
        $('.bg-img-preview').hide();
        $('.image-preview-' + image_id).show();
    });




    $('#checkall').change(function () {
        if ($(this).prop('checked')) {
            $(".select_subs").prop("checked", true);
        } else {
            $(".select_subs").prop("checked", false);
        }
    });


    //DATE PICKER SCRIPT
    $('.custom_date').datepicker({
        dateFormat: 'yy-mm-dd'
    });

    var custom_uploader;



    jQuery("input[class^='edm_upload_image']").click(function (e) {
        e.preventDefault();
        row_id = jQuery(this).prev().attr('id');
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function () {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            jQuery('#' + row_id).val(attachment.url);
        });

        //Open the uploader dialog
        custom_uploader.open();
    });

    var myOptions = {
        // you can declare a default color here,
        // or in the data-default-color attribute on the input
        defaultColor: false,
        // a callback to fire whenever the color changes to a valid color
        change: function (event, ui) {
        },
        // a callback to fire when the input is emptied or an invalid color
        clear: function () {
        },
        // hide the color picker controls on load
        hide: true,
        // show a group of common colors beneath the square
        // or, supply an array of colors to customize further
        palettes: true
    };

    jQuery('#headline_color,#description_color').wpColorPicker(myOptions);

    $('.field-display-trigger').click(function () {
        if ($(this).is(':checked')) {
            $(this).closest('.general-common-section').find('.edmm-show-fields-wrap').show();
        } else {
            $(this).closest('.general-common-section').find('.edmm-show-fields-wrap').hide();

        }
    });
    
    $('.edmm-timer-layout-trigger').click(function () {
            $(this).closest('.edmm_timer_layout_wrap').find('.edmm-timer-layout-trigger').removeClass('edmm-checked-layout');
            $(this).addClass('edmm-checked-layout');
        });


});
