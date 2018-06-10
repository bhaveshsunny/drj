<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Viralblog
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-item clearfix'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="thumbnail">
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
		</div>
	<?php endif; ?>
	<div class="post-item-desc <?php if ( has_post_thumbnail() ) { echo 'has-thumbnail'; } else { echo 'no-thumbnail'; } ?>">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php viralblog_lite_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php

				the_excerpt();

			?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'viralblog-lite' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<?php edit_post_link( __( 'Edit', 'viralblog-lite' ), '<span class="edit-link">', '</span>' ); ?>
		
		<a class="read-more-btn" href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo esc_attr(get_the_title()); ?>"><?php esc_html_e( 'Read More', 'viralblog-lite' ); ?></a>
		
	</div>
</article><!-- #post-## --
