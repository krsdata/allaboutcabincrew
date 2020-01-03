<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eight_Paper
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eight-paper' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="ed-container ep-clearfix">
				<div class="site-branding">
					<?php
					the_custom_logo();
					echo '<div class="site-text-wrap">';
					if ( is_front_page() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$eight_paper_description = get_bloginfo( 'description', 'display' );
					if ( $eight_paper_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $eight_paper_description; /* WPCS: xss ok. */ ?></p>
					<?php endif;
					echo '</div>';
					?>
				</div><!-- .site-branding -->
				<?php
				if ( is_active_sidebar( 'eight-paper-headerad' ) ) {
					echo '<div class="header-beside">';
					dynamic_sidebar( 'eight-paper-headerad' );
					echo '</div>';
				}
				?>
			</div>
			<nav id="site-navigation" class="main-navigation ep-clearfix">
				<div class="ed-container ep-clearfix">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> 
						<span class="menu-bar-wrap">
							<span class="menu-bar"></span>
							<span class="menu-bar bar-middle"></span>
							<span class="menu-bar"></span>
						</span>
					</button>
					<?php 
					if(has_nav_menu('menu-1')){
						wp_nav_menu( array( 
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
							'container' => false,
							'items_wrap' => '<ul class="nav ep-clearfix">%3$s</ul>',
						) );
					}else{
						?>
						<ul><li><a><?php esc_html_e('Select Primary Menu','eight-paper');?></a></li></ul>
						<?php
					} ?>
					<div class="ep-header-search-wrapper">
						<span class="search-main"><i class="fa fa-search"></i></span>
					</div>
				</div>
			</nav><!-- #site-navigation -->
			<div class="search-form-main">
				<div class="ed-container">
					<?php get_search_form();?>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
			<div class="ed-container">
