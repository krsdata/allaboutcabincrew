<?php
/**
 * Create a metabox to added some custom filed in pages.
 *
 * @package Eight_Paper
 */

add_action( 'add_meta_boxes', 'eight_paper_page_meta_options' );

if( ! function_exists( 'eight_paper_page_meta_options' ) ):
 function  eight_paper_page_meta_options() {
  add_meta_box(
    'eight_paper_page_meta',
    esc_html__( 'Page Meta Options', 'eight-paper' ),
    'eight_paper_page_meta_callback',
    'page',
    'normal',
    'high'
  );
}
endif;

$eight_paper_post_sidebar_options = array(
  'default-sidebar' => array(
    'id'		=> 'post-default-sidebar',
    'value'     => 'default_sidebar',
    'label'     => esc_html__( 'Default Sidebar', 'eight-paper' ),
    'thumbnail' => get_template_directory_uri() . '/assets/images/default-sidebar.png'
  ), 
  'left-sidebar' => array(
    'id'		=> 'post-right-sidebar',
    'value'     => 'left_sidebar',
    'label'     => esc_html__( 'Left sidebar', 'eight-paper' ),
    'thumbnail' => get_template_directory_uri() . '/assets/images/left-sidebar.png'
  ), 
  'right-sidebar' => array(
    'id'		=> 'post-left-sidebar',
    'value'     => 'right_sidebar',
    'label'     => esc_html__( 'Right sidebar', 'eight-paper' ),
    'thumbnail' => get_template_directory_uri() . '/assets/images/right-sidebar.png'
  ),
  'no-sidebar' => array(
    'id'		=> 'post-no-sidebar',
    'value'     => 'no_sidebar',
    'label'     => esc_html__( 'No sidebar Full width', 'eight-paper' ),
    'thumbnail' => get_template_directory_uri() . '/assets/images/no-sidebar.png'
  )
);

/**
 * Callback function for post option
 */
if( ! function_exists( 'eight_paper_page_meta_callback' ) ):
	function eight_paper_page_meta_callback() {
		global $post, $eight_paper_post_sidebar_options;

    $get_post_meta_identity = get_post_meta( $post->ID, 'post_meta_identity', true );
    $post_identity_value = empty( $get_post_meta_identity ) ? 'ep-metabox-info' : $get_post_meta_identity;

    wp_nonce_field( basename( __FILE__ ), 'eight_paper_page_meta_nonce' );
    ?>
    <div class="ep-meta-container ep-clearfix">
     <ul class="ep-meta-menu-wrapper">
      <li class="ep-meta-tab <?php if( $post_identity_value == 'ep-metabox-info' ) { echo 'active'; } ?>" data-tab="ep-metabox-info"><span class="dashicons dashicons-clipboard"></span><?php esc_html_e( 'Information', 'eight-paper' ); ?></li>
      <li class="ep-meta-tab <?php if( $post_identity_value == 'ep-metabox-sidebar' ) { echo 'active'; } ?>" data-tab="ep-metabox-sidebar"><span class="dashicons dashicons-exerpt-view"></span><?php esc_html_e( 'Sidebars', 'eight-paper' ); ?></li>
    </ul><!-- .ep-meta-menu-wrapper -->
    <div class="ep-metabox-content-wrapper">

      <!-- Info tab content -->
      <div class="ep-single-meta active" id="ep-metabox-info">
       <div class="content-header">
        <h4><?php esc_html_e( 'About Metabox Options', 'eight-paper' ) ;?></h4>
      </div><!-- .content-header -->
      <div class="meta-options-wrap"><?php esc_html_e( 'In this section we have lots of features which make your post unique and completely different.', 'eight-paper' ); ?></div><!-- .meta-options-wrap  -->
    </div><!-- #ep-metabox-info -->

    <!-- Sidebar tab content -->
    <div class="ep-single-meta" id="ep-metabox-sidebar">
     <div class="content-header">
      <h4><?php esc_html_e( 'Available Sidebars', 'eight-paper' ) ;?></h4>
      <span class="section-desc"><em><?php esc_html_e( 'Select sidebar from available options which replaced sidebar layout from customizer settings.', 'eight-paper' ); ?></em></span>
    </div><!-- .content-header -->
    <div class="ep-meta-options-wrap">
      <div class="buttonset">
       <?php
       foreach ( $eight_paper_post_sidebar_options as $field ) {
        $eight_paper_post_sidebar = get_post_meta( $post->ID, 'ep_single_post_sidebar', true );
        $eight_paper_post_sidebar = ( $eight_paper_post_sidebar ) ? $eight_paper_post_sidebar : 'default_sidebar';
        ?>
        <input type="radio" id="<?php echo esc_attr( $field['id'] ); ?>" value="<?php echo esc_attr( $field['value'] ); ?>" name="ep_single_post_sidebar" <?php checked( $field['value'], $eight_paper_post_sidebar ); ?> />
        <label for="<?php echo esc_attr( $field['id'] ); ?>">
         <span class="screen-reader-text"><?php echo esc_html( $field['label'] ); ?></span>
         <img src="<?php echo esc_url( $field['thumbnail'] ); ?>" title="<?php echo esc_attr( $field['label'] ); ?>" alt="<?php echo esc_attr( $field['label'] ); ?>" />
       </label>

     <?php } ?>
   </div><!-- .buttonset -->
 </div><!-- .meta-options-wrap  -->
</div><!-- #ep-metabox-sidebar -->

<div class="clear"></div>
<input type="hidden" id="post-meta-selected" name="post_meta_identity" value="<?php echo esc_attr( $post_identity_value ); ?>" />
</div><!-- .ep-meta-container -->
<?php
}
endif;

/*--------------------------------------------------------------------------------------------------------------*/
/**
 * Function for save value of meta options
 *
 * @since 1.0.8
 */
add_action( 'save_post', 'eight_paper_save_page_meta' );

if( ! function_exists( 'eight_paper_save_page_meta' ) ):

  function eight_paper_save_page_meta( $post_id ) {

    global $post, $ep_allowed_textarea;

    // Verify the nonce before proceeding.
    if(isset( $_POST['eight_paper_page_meta_nonce'])){
      $eight_paper_post_nonce = sanitize_text_field(wp_unslash( $_POST['eight_paper_page_meta_nonce']));
    }

    $eight_paper_post_nonce_action = basename( __FILE__ );

    //* Check if nonce is set...
    if ( ! isset( $eight_paper_post_nonce ) ) {
      return;
    }

    //* Check if nonce is valid...
    if ( ! wp_verify_nonce( $eight_paper_post_nonce, $eight_paper_post_nonce_action ) ) {
      return;
    }

    //* Check if user has permissions to save data...
    if ( ! current_user_can( 'edit_page', $post_id ) ) {
      return;
    }

    //* Check if not an autosave...
    if ( wp_is_post_autosave( $post_id ) ) {
      return;
    }

    //* Check if not a revision...
    if ( wp_is_post_revision( $post_id ) ) {
      return;
    }

    /**
     * Post sidebar
     */
    $post_sidebar = get_post_meta( $post_id, 'ep_single_post_sidebar', true );
    if(isset($_POST['ep_single_post_sidebar'])){
      $stz_post_sidebar = sanitize_text_field( wp_unslash($_POST['ep_single_post_sidebar'] ));
    }


    if ( $stz_post_sidebar && $stz_post_sidebar != $post_sidebar ) {  
      update_post_meta ( $post_id, 'ep_single_post_sidebar', $stz_post_sidebar );
    } elseif ( '' == $stz_post_sidebar && $post_sidebar ) {  
      delete_post_meta( $post_id,'ep_single_post_sidebar', $post_sidebar );  
    }

    /**
     * post meta identity
     */
    $post_identity = get_post_meta( $post_id, 'post_meta_identity', true );
    if(isset($_POST['post_meta_identity'])){
      $stz_post_identity = sanitize_text_field( wp_unslash($_POST['post_meta_identity'] ));
    }

    if ( $stz_post_identity && '' == $stz_post_identity ){
      add_post_meta( $post_id, 'post_meta_identity', $stz_post_identity );
    }elseif ( $stz_post_identity && $stz_post_identity != $post_identity ) {
      update_post_meta($post_id, 'post_meta_identity', $stz_post_identity );
    } elseif ( '' == $stz_post_identity && $post_identity ) {
      delete_post_meta( $post_id, 'post_meta_identity', $post_identity );
    }
  }
endif;