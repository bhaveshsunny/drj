<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Viralblog
 */

if ( ! function_exists('viralblog_lite_header_title') ) :
	function viralblog_lite_header_title() {
		
		?>
			<?php if (function_exists( 'has_custom_logo' ) && has_custom_logo()) : ?>
				
				<?php if( is_front_page() || is_home() ) : ?>
				<h1 class="site-title logo" itemprop="headline">
					<?php the_custom_logo() ?>
				</h1>
				<?php else : ?>
					<h2 class="site-title logo" itemprop="headline">
						<?php the_custom_logo() ?>
					</h2>
				<?php endif ?>
			<?php else : ?>

				<?php if( is_front_page() || is_home() ) : ?>
					<h1 itemprop="headline" class="site-title">
						<a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'description' ); ?>">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					<h2 class="site-description" itemprop="description"><?php bloginfo( 'description' ); ?></h2>
					<?php else : ?>
						<h2 class="site-title">
						<a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'description' ); ?>">
							<?php bloginfo( 'name' ); ?>
						</a>
						</h2>
						<h3 class="site-description" itemprop="description"><?php bloginfo( 'description' ); ?></h3>
					<?php endif ?>
			<?php endif ?>
		<?php
	}
endif;


if ( ! function_exists( 'viralblog_lite_the_posts_navigation' ) ) :
/**
 |------------------------------------------------------------------------------
 | Display navigation to next/previous set of posts when applicable.
 |------------------------------------------------------------------------------
 |
 | @todo Remove this function when WordPress 4.3 is released.
 |
 */
function viralblog_lite_the_posts_navigation() {
	
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$nav_style = get_theme_mod ('viralblog_lite_general_pagination_mode', 'default');

	
	if ( $nav_style == 'numberal') :
		// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'viralblog-lite' ),
				'next_text'          => __( 'Next page', 'viralblog-lite' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'viralblog-lite' ) . ' </span>',
			) );
	
	else :
		
	?>
	<nav class="navigation paging-navigation clearfix" role="navigation">
		<span class="screen-reader-text"><?php _e( 'Posts navigation', 'viralblog-lite' ); ?></span>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<i class="fa fa-angle-double-left"></i> Older posts', 'viralblog-lite' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <i class="fa fa-angle-double-right"></i>', 'viralblog-lite' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
	
	
	endif;
}
endif;


if ( ! function_exists( 'viralblog_lite_the_post_navigation' ) ) :
/**
 |------------------------------------------------------------------------------
 | Display navigation to next/previous post when applicable.
 |------------------------------------------------------------------------------
 |
 | @todo Remove this function when WordPress 4.3 is released.
 |
 */
function viralblog_lite_the_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation clearfix" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Post navigation', 'viralblog-lite' ); ?></h2>
		<div class="nav-links clearfix">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', '<i class="fa fa-angle-double-left"></i> %title' );
				next_post_link( '<div class="nav-next">%link</div>', '%title <i class="fa fa-angle-double-right"></i>' );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'viralblog_lite_posted_on' ) ) :

/**
|------------------------------------------------------------------------------
| Prints HTML with meta information for the current post-date/time and author.\
|------------------------------------------------------------------------------
|
*/

function viralblog_lite_posted_on() {
	$time_string = '<time class="meta entry-date published updated" datetime="%1$s" itemprop="datePublished">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s" itemprop="datePublished">%2$s</time><!--time class="updated" datetime="%3$s">%4$s</time-->';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( '<span class="hide">On&nbsp;</span>%s', 'post date', 'viralblog-lite' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( '<span class="hide">By&nbsp;</span>%s', 'post author', 'viralblog-lite' ),
		'<span class="author vcard" itemprop="name"><a itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author" class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	$tg_list = '';
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'viralblog-lite' ) );
		if ( $tags_list ) {
			$tg_list = sprintf( '<span class="tags-links">' . __( 'Tagged %1$s&nbsp;', 'viralblog-lite' ) . '</span>', $tags_list );
		}
	}


		echo '<div class="entry-meta">';
			
				echo '<div class="bio-avatar hide">'.get_avatar(get_the_author_meta('user_email'),'50').'</div>';
			
			echo '<div class="meta-wrap">';
				
					echo '<span class="byline">' . $byline . '</span>';
				

				
					echo '<span class="posted-on"> ' . $posted_on . '</span>';
				



				if ( ! post_password_required()  && ( comments_open() || get_comments_number() ) ) {
					echo '<span class="comments-link">';
						comments_popup_link( __( '0 <i class="fa fa-comments"></i>', 'viralblog-lite' ), __( '1 <i class="fa fa-comment"></i>', 'viralblog-lite' ), __( '% <i class="fa fa-comments"></i>', 'viralblog-lite' ) );
					echo '</span>';

				}

		echo '</div></div><!-- .entry-meta -->';
	
}
endif;



if ( ! function_exists( 'viralblog_lite_meta_categories' ) ) :

/**
|------------------------------------------------------------------------------
| Prints Category
|------------------------------------------------------------------------------
|
*/

function viralblog_lite_meta_categories() {
	
	$cat_list = '';
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'viralblog-lite' ) );

		if ( ($categories_list && viralblog_lite_categorized_blog())) {
			$cat_list  = sprintf( '<span class="cat-links">' . __( '%1$s&nbsp;', 'viralblog-lite' ) . '</span>', $categories_list );
		}
	}
	
	echo '<div class="entry-meta-cat">', $cat_list, '</div><!-- .entry-meta -->';
	
}
endif;


if ( ! function_exists( 'viralblog_lite_entry_footer' ) ) :

/**
|------------------------------------------------------------------------------
| Prints HTML with meta information for the categories, tags and comments.
|------------------------------------------------------------------------------
|
*/

function viralblog_lite_entry_footer() {
	echo '<div class="meta-wrap">';

	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'viralblog-lite' ) );

		if ( $categories_list && viralblog_lite_categorized_blog() ) {
			printf( '<span class="cat-links">' . __( 'In %1$s&nbsp;', 'viralblog-lite' ) . '</span>', $categories_list );
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'viralblog-lite' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . __( 'Tagged %1$s&nbsp;', 'viralblog-lite' ) . '</span>', $tags_list );
		}
	}

	if ( is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {

		echo '<span class="comments-link">';
		comments_popup_link( __( 'Leave a comment&nbsp;', 'viralblog-lite' ), __( '1 Comment&nbsp;', 'viralblog-lite' ), __( '% Comments', 'viralblog-lite' ) );
		echo '</span>';
	}

	edit_post_link( __( 'Edit', 'viralblog-lite' ), '<span class="edit-link">', '</span>' );
	echo "</div>";
}
endif;

/**
 |------------------------------------------------------------------------------
 | Returns true if a blog has more than 1 category.
 |------------------------------------------------------------------------------
 |
 | @return bool
 */
function viralblog_lite_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'viralblog_lite_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'viralblog_lite_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so viralblog_lite_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so viralblog_lite_categorized_blog should return false.
		return false;
	}
}

/**
|------------------------------------------------------------------------------
| Flush out the transients used in viralblog_lite_categorized_blog.
|------------------------------------------------------------------------------
|
*/

function viralblog_lite_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'viralblog_lite_categories' );
}
add_action( 'edit_category', 'viralblog_lite_category_transient_flusher' );
add_action( 'save_post',     'viralblog_lite_category_transient_flusher' );