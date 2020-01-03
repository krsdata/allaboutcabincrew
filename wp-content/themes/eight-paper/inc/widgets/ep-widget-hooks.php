<?php
/**
 * Custom hooks functions for different layout in widget section.
 *
 * @package Eight_Paper
 */

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Widget Title
 *
 * @since 1.0.0
 */
add_action( 'eight_paper_widget_title', 'eight_paper_widget_title_callback' );
if( ! function_exists( 'eight_paper_widget_title_callback' ) ) :
	function eight_paper_widget_title_callback( $eight_paper_title_args ) {
		$eight_paper_block_title     = $eight_paper_title_args['title'];
		$eight_paper_block_cat_slug  = $eight_paper_title_args['cat_slug'];
		$eight_paper_get_cat_info 	  = get_category_by_slug( $eight_paper_block_cat_slug );
		$eight_paper_block_cat_id 	  = $eight_paper_get_cat_info->term_id;
		if(empty($eight_paper_block_title)){
			$eight_paper_block_title = $eight_paper_get_cat_info->name;
		}
		$eight_paper_title_cat_link  = 'show';
		$title_class = 'ep-title';
		if( !empty( $eight_paper_block_cat_id ) && $eight_paper_title_cat_link == 'show' ) {
			$eight_paper_blcok_cat_link = get_category_link( $eight_paper_block_cat_id );
			echo '<h2 class="ep-block-title"><a href="'. esc_url( $eight_paper_blcok_cat_link ) .'"><span class="'. esc_attr( $title_class ) .'">'. esc_html( $eight_paper_block_title ) .'</span></a></h2>';
		} else {
			echo '<h2 class="ep-block-title"><span class="'. esc_attr( $title_class ) .'">'. esc_html( $eight_paper_block_title ) .'</span></h2>';
		}		
	}
endif;


/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Block Default Layout
 *
 * @since 1.0.0
 */
if( ! function_exists( 'eight_paper_block_default_layout_section' ) ) :
	function eight_paper_block_default_layout_section( $cat_slug ) {
		if( empty( $cat_slug ) ) {
			return;
		}
		$eight_paper_post_count = apply_filters( 'eight_paper_block_default_posts_count', 3 );
		$block_args = array(
			'category_name'  => esc_attr( $cat_slug ),
			'posts_per_page' => absint( $eight_paper_post_count ),
		);
		$block_query = new WP_Query( $block_args );
		$total_posts_count = $block_query->post_count;
		if( $block_query->have_posts() ) {
			$post_count = 1;
			while( $block_query->have_posts() ) {
				$block_query->the_post();
				if( $post_count == 1 ) {
					echo '<div class="ep-primary-block-wrap">';
					$title_size = 'medium-size';
				} elseif( $post_count == 2 ) {
					echo '<div class="ep-secondary-block-wrap">';
					$title_size = 'small-size';
				} else {
					$title_size = 'small-size';
				}
				?>
				<div class="ep-single-post ep-clearfix">
					<?php
					if(has_post_thumbnail()){
						?>
						<div class="ep-post-thumb">
							<a href="<?php the_permalink(); ?>">
								<?php 
								eight_paper_post_format();
								if( $post_count == 1 ) {
									the_post_thumbnail( 'full' );
								} else {
									the_post_thumbnail( 'eight-paper-block-small' );
								}
								?>
							</a>
						</div><!-- .ep-post-thumb -->
						<?php 
					}?>
					<div class="ep-post-content">
						<?php if( $post_count == 1 ) {eight_paper_post_categories_list();
						}?>
						<h3 class="ep-post-title <?php echo esc_attr( $title_size ); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="ep-post-meta date-author">
							<?php
							eight_paper_post_date();
							eight_paper_posted_by();
							?>
						</div>
						<?php 
						if( $post_count == 1 ) { ?>
							<div class="ep-post-excerpt"><?php the_excerpt(); ?></div>
							<?php
							echo '<div class="ep-post-meta comments">';
							eight_paper_post_comment();
							echo '</div>';
						} ?>
					</div><!-- .ep-post-content -->
				</div><!-- .ep-single-post -->
				<?php
				if( $post_count == 1 ) {
					echo '</div><!-- .ep-primary-block-wrap -->';
				} elseif( $post_count == $total_posts_count ) {
					echo '</div><!-- .ep-secondary-block-wrap -->';
				}
				$post_count++;
			}
		}
		wp_reset_postdata();
	}
endif;
/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Block Second Layout
 *
 * @since 1.0.0
 */
if( ! function_exists( 'eight_paper_block_second_layout_section' ) ) :
	function eight_paper_block_second_layout_section( $cat_slug ) {
		if( empty( $cat_slug ) ) {
			return;
		}
		$eight_paper_post_count = apply_filters( 'eight_paper_block_box_posts_count', 4 );
		$block_args = array(
			'category_name'  => esc_attr( $cat_slug ),
			'posts_per_page' => absint( $eight_paper_post_count ),
		);
		$block_query = new WP_Query( $block_args );
		$total_posts_count = $block_query->post_count;
		if( $block_query->have_posts() ) {
			$post_count = 1;
			while( $block_query->have_posts() ) {
				$block_query->the_post();
				if( $post_count == 1 ) {
					echo '<div class="ep-primary-block-wrap">';
					$title_size = 'medium-size';
				} elseif( $post_count == 2 ) {
					echo '<div class="ep-secondary-block-wrap ep-clearfix">';
					$title_size = 'small-size';
				} else {
					$title_size = 'small-size';
				}
				?>
				<div class="ep-single-post">
					<?php
					if(has_post_thumbnail()){
						?>
						<div class="ep-post-thumb">
							<a href="<?php the_permalink(); ?>">
								<?php 
								eight_paper_post_format();
								if( $post_count == 1 ) {
									the_post_thumbnail( 'full' );
								} else {
									the_post_thumbnail( 'eight-paper-block-small' );
								}
								?>
							</a>
						</div><!-- .ep-post-thumb -->
						<?php
					}?>
					<div class="ep-post-content">
						<?php if( $post_count == 1 ) {eight_paper_post_categories_list();
						}?>
						<h3 class="ep-post-title <?php echo esc_attr( $title_size ); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="ep-post-meta">
							<?php
							eight_paper_post_date();
							eight_paper_posted_by();
							if( $post_count == 1 ) {
								echo '<div class="ep-post-excert">';
								the_excerpt();
								echo '</div>';
								eight_paper_post_comment();
							}
							?>
						</div>
					</div><!-- .ep-post-content -->
				</div><!-- .ep-single-post -->
				<?php
				if( $post_count == 1 ) {
					echo '</div><!-- .ep-primary-block-wrap -->';
				} elseif( $post_count == $total_posts_count ) {
					echo '</div><!-- .ep-secondary-block-wrap -->';
				}
				$post_count++;
			}
		}
		wp_reset_postdata();
	}
endif;

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Block Third Layout
 *
 * @since 1.0.0
 */

if( ! function_exists( 'eight_paper_block_third_layout_section' ) ) :
	function eight_paper_block_third_layout_section( $cat_slug ) {
		if( empty( $cat_slug ) ) {
			return;
		}
		$eight_paper_post_count = apply_filters( 'eight_paper_block_second_layout_posts_count', 4 );
		$block_args = array(
			'category_name'  => esc_attr( $cat_slug ),
			'posts_per_page' => absint( $eight_paper_post_count ),
		);
		$block_query = new WP_Query( $block_args );
		if( $block_query->have_posts() ) {
			while( $block_query->have_posts() ) {
				$block_query->the_post();
				?>
				<div class="ep-single-post">
					<?php if(has_post_thumbnail()){ ?>
						<div class="ep-post-thumb">
							<a href="<?php the_permalink(); ?>">
								<?php 
								eight_paper_post_format();
								the_post_thumbnail( 'eight-paper-block-three' );?>
							</a>
						</div><!-- .ep-post-thumb -->
					<?php } ?>
					<div class="ep-post-content">
						<?php eight_paper_post_categories_list();?>
						<h3 class="ep-post-title medium-size"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="ep-post-meta">
							<?php
							eight_paper_post_date();
							eight_paper_posted_by();
							?>
						</div>
					</div><!-- .ep-post-content -->
				</div><!-- .ep-single-post -->
				<?php
			}
		}
		wp_reset_postdata();
	}
endif;
/*-----------------------------------------------------------------------------------------------------------------------*/
	/**
	* Block Fourth
	*
	* @since 1.0.0
	*/
	if( ! function_exists( 'eight_paper_block_fourth_layout_section' ) ) :
		function eight_paper_block_fourth_layout_section( $cat_slug ) {
			if( empty( $cat_slug ) ) {
				return;
			}
			$eight_paper_post_count = apply_filters( 'eight_paper_block_alternate_grid_posts_count', 4 );
			$block_args = array(
				'category_name'  => esc_attr( $cat_slug ),
				'posts_per_page' => absint( $eight_paper_post_count ),
			);
			$block_query = new WP_Query( $block_args );
			$total_posts_count = $block_query->post_count;
			if( $block_query->have_posts() ) {
				while( $block_query->have_posts() ) {
					$block_query->the_post();
					?>
					<div class="ep-alt-grid-post ep-single-post ep-clearfix">
						<?php if(has_post_thumbnail()){ ?>
							<div class="ep-post-thumb">
								<a href="<?php the_permalink(); ?>">
									<?php
									eight_paper_post_format();
									the_post_thumbnail( 'eight-paper-block-four' ); ?>
								</a>
							</div><!-- .ep-post-thumb -->
						<?php } ?>
						<div class="ep-post-content">
							<div class="ep-post-meta date-author">
								<?php
								eight_paper_post_date();
								eight_paper_posted_by();
								?>
							</div>
							<h3 class="ep-post-title medium-size"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="ep-post-excerpt"><?php the_excerpt(); ?></div>
							<div class="ep-post-meta comments">
								<?php
								eight_paper_post_comment();
								?>
							</div>
						</div><!-- .ep-post-content -->
					</div><!-- .ep-single-post -->
					<?php
				}
			}
			wp_reset_postdata();
		}
	endif;
	/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Block Fifth Layout
 *
 * @since 1.0.0
 */
if( ! function_exists( 'eight_paper_block_fifth_layout_section' ) ) :
	function eight_paper_block_fifth_layout_section( $cat_slug ) {
		if( empty( $cat_slug ) ) {
			return;
		}
		$eight_paper_post_count = apply_filters( 'eight_paper_block_box_posts_count', 7 );
		$block_args = array(
			'category_name'  => esc_attr( $cat_slug ),
			'posts_per_page' => absint( $eight_paper_post_count ),
		);
		$block_query = new WP_Query( $block_args );
		$total_posts_count = $block_query->post_count;
		if( $block_query->have_posts() ) {
			$post_count = 1;
			while( $block_query->have_posts() ) {
				$block_query->the_post();
				if( $post_count == 4 ) {
					echo '<div class="ep-primary-block-wrap">';
					$title_size = 'medium-size';
				} elseif( $post_count == 1 || $post_count == 5 ) {
					echo '<div class="ep-secondary-block-wrap">';
					$title_size = 'small-size';
				} else {
					$title_size = 'small-size';
				}
				?>
				<div class="ep-single-post">
					<?php if(has_post_thumbnail()){ ?>
						<div class="ep-post-thumb">
							<a href="<?php the_permalink(); ?>">
								<?php
								eight_paper_post_format(); 
								if( $post_count == 4 ) {
									the_post_thumbnail( 'full' );
								} else {
									the_post_thumbnail( 'eight-paper-block-five' );
								}
								?>
							</a>
						</div><!-- .ep-post-thumb -->
					<?php } ?>
					<div class="ep-post-content">
						<?php if( $post_count == 4 ) {eight_paper_post_categories_list();
						}?>
						<h3 class="ep-post-title <?php echo esc_attr( $title_size ); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="ep-post-meta date-author">
							<?php
							eight_paper_post_date();
							eight_paper_posted_by();
							?>
						</div>
						<?php
						if( $post_count == 4 ) {
							echo '<div class="ep-post-excerpt">';
							the_excerpt();
							echo '</div>';
							echo '<div class="ep-post-meta comments">';
							eight_paper_post_comment();	
							echo '</div>';
						}
						?>
					</div><!-- .ep-post-content -->
				</div><!-- .ep-single-post -->
				<?php
				if( $post_count == 4 ) {
					echo '</div><!-- .ep-primary-block-wrap -->';
				} elseif( $post_count == 3 || $post_count == $total_posts_count ) {
					echo '</div><!-- .ep-secondary-block-wrap -->';
				}
				$post_count++;
			}
		}
		wp_reset_postdata();
	}
endif;