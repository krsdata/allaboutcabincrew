<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eight_Paper
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		<div class="meta-comment-wrap ep-clearfix">
			<?php
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					eight_paper_posted_on();
					eight_paper_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			<footer class="entry-footer">
				<?php eight_paper_entry_footer(); ?>
			</footer><!-- .entry-footer -->

		</div>
	</header><!-- .entry-header -->

	<?php eight_paper_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if(is_single()){
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'eight-paper' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		}else{
			the_excerpt();
			echo '<a class="continue-reading" href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.esc_html__('Continue Reading','eight-paper').'</a>';
		}

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eight-paper' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
