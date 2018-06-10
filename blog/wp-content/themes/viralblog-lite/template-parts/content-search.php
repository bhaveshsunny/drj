<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Viralblog
 */
$layout_style = get_theme_mod ('viralblog_lite_general_home_layout_style', 'grid');
if ($layout_style == 'list') :
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-item clearfix'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="thumbnail">
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array('itemprop' => 'image')); ?></a>
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

		<div class="entry-content" itemprop="text">
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
	</div>
</article><!-- #post-## -->
<?php else : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-item-grid clearfix'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<div class="thumbnail">
		<a href="<?php the_permalink() ?>" rel="bookmark">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail('viralblog-lite-grid-thumbnails'); ?>
		<?php else : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/default-398x200.jpg" itemprop="image" />
		<?php endif; ?>
		</a>
	</div>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
			<?php viralblog_lite_meta_categories(); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<?php viralblog_lite_posted_on(); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
<?php endif; ?>