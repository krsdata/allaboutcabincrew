<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eight_Paper
 */

?>
</div><!-- .ed-container -->
</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="ed-container">
		<?php
		if ( is_active_sidebar( 'eight-paper-footer' ) ) {
			echo '<div class="top-footer-wrap ed-clearfix">';
			dynamic_sidebar( 'eight-paper-footer' );
			echo '</div>';
		}
		?>
		<div class="site-info">
			<?php
			$copyright = get_theme_mod('eight_paper_footer_copyright',__('Copyright &copy; 2020',''));
			if($copyright && ""!=$copyright){
				echo '<div class="copyright-wrap">';
				echo wp_kses_post($copyright);
				echo '</div>';
			}?>
			<div class="credit-wrap">
				<?php esc_html_e( '', ' All Rights Reserved' );  ?><a  title="<?php esc_attr_e('','');?>" href="<?php echo esc_url( __( '#', '#' ) ); ?>"><?php esc_html_e( '', '' ); ?> </a>
				<span><?php esc_html_e(' ','All Rights Reserved');?></span>
			</div>
		</div><!-- .site-info -->
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
3
