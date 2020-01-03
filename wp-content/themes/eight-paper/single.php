<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Eight_Paper
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			eight_paper_the_post_navigation();

			/**
		     * eight_paper_related_posts hook
		     *
		     * @hooked - eight_paper_related_posts_start - 5
		     * @hooked - eight_paper_related_posts_section - 10
		     * @hooked - eight_paper_related_posts_end - 15
		     *
		     * @since 1.0.0
		     */
			if ( ! class_exists( 'WooCommerce' ) ) {
				do_action( 'eight_paper_related_posts' );
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
eight_paper_get_sidebar();
get_footer();
