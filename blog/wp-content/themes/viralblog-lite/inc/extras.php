<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Viralblog
 */


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function viralblog_lite_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'viralblog_lite_body_classes' );


if ( ! function_exists( 'viralblog_lite_excerpt_more' ) ) {
	/**
	|------------------------------------------------------------------------------
	| Excerpt ending
	|------------------------------------------------------------------------------
	| 
	| @return string
	|
	*/

	function viralblog_lite_excerpt_more( $more ) {
		return get_theme_mod('viralblog_lite_general_excerpt_end_text', '...');
	}
	
}

add_filter( 'excerpt_more', 'viralblog_lite_excerpt_more' );

if ( ! function_exists( 'viralblog_lite_excerpt_length' ) ) {

	/**
	|------------------------------------------------------------------------------
	| Excerpt length
	|------------------------------------------------------------------------------
	| 
	| @return integer
	|
	*/

	function viralblog_lite_excerpt_length() {
		
		return get_theme_mod('viralblog_lite_general_excerpt_lengh', 36);
		
	}
	
}

add_filter( 'excerpt_length', 'viralblog_lite_excerpt_length', 999 );


if (! function_exists('viralblog_lite_related_posts') ):

	/**
	|------------------------------------------------------------------------------
	| Related Posts
	|------------------------------------------------------------------------------
	|
	| You can show related posts by Categories or Tags. 
	| It has two options to show related posts
	|
	| 1. Thumbnail related posts (default)
	| 2. List of related posts
	| 
	| @return void
	|
	*/

	function viralblog_lite_related_posts() {
		global $post;

		$taxonomy = get_theme_mod('viralblog_lite_single_related_post_taxonomy', 'category');
		$numberRelated = 3;
		$args =  array();

		if ($taxonomy == 'tag') {

			$tags = wp_get_post_tags($post->ID);
			$arr_tags = array();
			foreach($tags as $tag) {
				array_push($arr_tags, $tag->term_id);
			}
			
			if (!empty($arr_tags)) { 
			    $args = array(  
				    'tag__in' => $arr_tags,  
				    'post__not_in' => array($post->ID),  
				    'posts_per_page'=> $numberRelated,
			    ); 
			}

		} else {

			 $args = array( 
			 	'category__in' => wp_get_post_categories($post->ID), 
			 	'posts_per_page' => $numberRelated, 
			 	'post__not_in' => array($post->ID) 
			 );

		}

		if (! empty($args) ) {
			
			$posts = get_posts($args);

			if ($posts) {
				
				?>
			<h3><?php _e('Related Posts', 'viralblog-lite') ?></h3>
				<ul class="related grid">
				<?php
				foreach ($posts as $p) :
					
					?>

					<li>
						<div class="related-entry">
							<div class="thumbnail">
								<a href="<?php echo get_the_permalink($p->ID) ?>">
							<?php if (has_post_thumbnail($p->ID)) : ?>
								<?php 
									echo get_the_post_thumbnail($p->ID, 'viralblog-lite-related-thumbnails') 
								?>
							<?php else : ?>
								<img src="<?php echo get_template_directory_uri() ?>/images/default-thumbnail.jpg" alt="<?php echo get_the_title($p->ID) ?>">
							<?php endif; ?>
								</a>
							</div>
							<a href="<?php echo get_the_permalink($p->ID) ?>"><?php echo get_the_title($p->ID) ?></a>
						</div>
					</li>
					<?php
				endforeach;
				?>
				</ul>
				<?php
			
			}
		}
	}
endif;

function viralblog_lite_render_home_grid() {
	global $post;

	
	$cat = 'all';
	$num = 5;


	$args = array (
		'posts_per_page' => $num,
	);

	if ($cat) {
		$args['category'] = $cat;
	}

	$posts = get_posts($args);

	?>
	<?php if ($posts) : ?>
		<div class="latest-post clearfix">
			<?php

			viralblog_lite_first_article_render($posts, true);
			
			$escape_first = true;

			foreach( $posts as $post ) :
				if ( ! $escape_first ) :
					setup_postdata($post);
				?>
				<div class="latest-post-item">
			 		<div class="thumbnail">
			 		<a href="<?php the_permalink() ?>" rel="bookmark">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail() ?>
						<?php else : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/default-250x200.jpg" />
						<?php endif; ?>
					</a>
					</div>
					<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				</div>
			<?php
				endif;
				$escape_first = false;
				endforeach;
				wp_reset_postdata();
			 ?>
		</div>
	<?php endif; ?>
	<?php
}

function viralblog_lite_first_article_render($posts, $second = false) {

	global $post;
	?>
	<div class="latest-post-item latest-post-item-first">
		<div class="thumbnail">
		<?php

		$post = $posts[0];
		setup_postdata( $post ); 
		if ($second) :
		?>
			<a href="<?php the_permalink() ?>">
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('viralblog-lite-first-thumbnails') ?>
				<?php else : ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/default-398x200.jpg" />
				<?php endif; ?>
			</a>
			<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<?php
		else :
		?>
			<?php if (has_post_thumbnail()) : ?>
				<a href="<?php  the_permalink() ?>"><?php the_post_thumbnail('viralblog-lite-first-thumbnails') ?></a>
			<?php else : ?>
				<a href="<?php  the_permalink() ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/thumbnail-default.jpg" /></a>
			<?php endif; ?>
		<?php endif; ?>
		</div>
		<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
	</div>
	<?php
	wp_reset_postdata();
}