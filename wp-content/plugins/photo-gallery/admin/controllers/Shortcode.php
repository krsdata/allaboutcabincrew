<?php

class ShortcodeController_bwg {

  public function __construct() {
    $this->model = new ShortcodeModel_bwg();
    $this->view = new ShortcodeView_bwg();
    $this->page = WDWLibrary::get('page');
    $this->from_menu = ((isset($_GET['page']) && (esc_html($_GET['page']) == 'shortcode_' . BWG()->prefix)) ? TRUE : FALSE);
  }

  public function execute() {
    $task = WDWLibrary::get('task');
    if ( $task != '' && $this->from_menu ) {
      if ( !WDWLibrary::verify_nonce(BWG()->nonce) ) {
        die('Sorry, your nonce did not verify.');
      }
    }
    if ( method_exists($this, $task) ) {
      $this->$task();
    }
    $this->display();
  }

  public function display() {
    $params = array();
    $params['gutenberg_callback'] = WDWLibrary::get('callback', 0);
    $params['gutenberg_id'] = WDWLibrary::get('edit', 0);
    $params['from_menu'] = $this->from_menu;
    $params['gallery_rows'] = WDWLibrary::get_galleries();
    $params['album_rows'] = WDWLibrary::get_gallery_groups();
    $params['theme_rows'] = WDWLibrary::get_theme_rows_data();
    $params['shortcodes'] = $this->model->get_shortcode_data();
    $params['shortcode_max_id'] = $this->model->get_shortcode_max_id();
    $params['tag_rows'] = WDWLibrary::get_tags();

    $params['watermark_fonts'] = WDWLibrary::get_fonts();
    $params['gallery_types_name'] = array(
      'thumbnails' => __('Thumbnails', BWG()->prefix),
      'thumbnails_masonry' => __('Masonry', BWG()->prefix),
      'thumbnails_mosaic' => __('Mosaic', BWG()->prefix),
      'slideshow' => __('Slideshow', BWG()->prefix),
      'image_browser' => __('Image Browser', BWG()->prefix),
      'blog_style' => __('Blog Style', BWG()->prefix),
      'carousel' => __('Carousel', BWG()->prefix),
    );
    $params['album_types_name'] = array(
      'album_compact_preview' => __('Compact', BWG()->prefix),
      'album_masonry_preview' => __('Masonry', BWG()->prefix),
      'album_extended_preview' => __('Extended', BWG()->prefix),
    );

    $this->view->display($params);
  }

  public function save() {
    global $wpdb;
    $tagtext = ((isset($_POST['tagtext'])) ? stripslashes($_POST['tagtext']) : '');

    if ($tagtext) {
      /* clear tags */
      $tagtext = " ".sanitize_text_field($tagtext);

      $id = ((isset($_POST['currrent_id'])) ? (int) esc_html(stripslashes($_POST['currrent_id'])) : 0);
      $insert = ((isset($_POST['bwg_insert'])) ? (int) esc_html(stripslashes($_POST['bwg_insert'])) : 0);
      if (!$insert) {
        $wpdb->update($wpdb->prefix . 'bwg_shortcode', array(
        'tagtext' => $tagtext
        ), array('id' => $id));
      }
      else {
        $wpdb->insert($wpdb->prefix . 'bwg_shortcode', array(
          'id' => $id,
          'tagtext' => $tagtext
        ), array(
          '%d',
          '%s'
        ));
      }
    }
  }
}
