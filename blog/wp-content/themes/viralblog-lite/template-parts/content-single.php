<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Viralblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="thumbnail">
			<?php the_post_thumbnail('viralblog-lite-single-thumbnails'); ?>
		</div>
	<?php endif; ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
		<div class="meta-author clearfix">
			<?php viralblog_lite_posted_on(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'viralblog-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer clearfix">
		<?php viralblog_lite_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

