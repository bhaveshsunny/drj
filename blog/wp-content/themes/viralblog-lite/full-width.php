<?php
/**
 * Template Name: Full Width
 *
 * @package Viralblog
 */

get_header(); ?>

	<div id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				
		</main><!-- #main -->
			<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			

			<?php endwhile; // end of the loop. ?>
		
	</div><!-- #primary -->
<?php get_footer(); ?>
