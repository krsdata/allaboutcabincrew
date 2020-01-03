<?php
/**
 * Template Name: Archive Grid
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package eight-paper
 */

function the100_pro_web_layout_c($classes){
	$classes[] = "archive archive-grid";
	return $classes;
}    
add_filter( 'body_class', 'the100_pro_web_layout_c' );
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header><!-- .page-header -->
		<div class="archive-wrap ed-clearfix">
			<?php
			$blog_args = array(
				'post_type' => 'post',
				'post_per_page' => -1,
				'cat' => '2'
			);
			$blog_query = new WP_Query($blog_args);
			if($blog_query->have_posts()):
				while($blog_query->have_posts()):
					$blog_query->the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
eight_paper_get_sidebar();
get_footer();
