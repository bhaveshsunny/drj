<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Viralblog
 */
get_header(); ?>
	
	<?php 
		$enable_slideshow = get_theme_mod('viralblog_lite_general_home_slideshow_options');

		if ( $enable_slideshow && (is_front_page() || is_home()) && !is_paged())  {
			viralblog_lite_render_home_grid(); 
		}
	?>
	
	<div id="primary" class="content-area" itemprop="mainContentOfPage">
		<main id="main" class="site-main" role="main" itemscope="itemscope" itemtype="http://schema.org/Blog">
			<?php if ( is_active_sidebar( 'viralblog-late-home-banner' )) : ?>
					<div class="ads-468x60">
						<?php dynamic_sidebar( 'viralblog-late-home-banner' ); ?>
					</div>
				<?php endif; ?>
			<?php if ( have_posts() ) : ?>
			<div class="post-container clearfix">

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					?>

				<?php endwhile; ?>
			</div>
			<?php viralblog_lite_the_posts_navigation(); ?>
			<?php else : ?>
			<div class="post-container">
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			</div>
			<?php endif; ?>
		</main><!-- #main -->

	</div><!-- #primary -->

<?php
	
		get_sidebar();
		get_footer();
	
?>