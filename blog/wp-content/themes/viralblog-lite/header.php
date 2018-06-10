<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Viralblog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'viralblog-lite' ); ?></a>

	<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
		
		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
		<div class="topbar">
			<div class="inner clearfix">

				<nav class="top-navigation" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu( array('theme_location' => 'secondary', 'container' => false, 'menu_class' => 'menu topbar-menu clearfix') ); ?> 
				</nav>
				
			</div>
		</div>
		<?php endif; ?>

		<div class="header-inner">
			<div class="inner clearfix">
				<div class="site-branding">
					<div class="logo">
						<?php viralblog_lite_header_title() ?>
					</div>
				</div><!-- .site-branding -->
				<?php //TODO: Banner Ads?>
				<?php if ( is_active_sidebar( 'viralblog-late-header-banner' )) : ?>
					<div class="ads-728x90 ads-top">
						<?php dynamic_sidebar( 'viralblog-late-header-banner' ); ?>
					</div>
				<?php endif; ?>
			</div>
			<div  class="menu-wraper">
				
				<div class="main-nav">
					<div class="inner clearfix">
						<a class="mobile-only toggle-mobile-menu" href="#" title="<?php _e('Main Navigation', 'viralblog-lite') ?>"><i class="fa fa-bars"></i></a>
						<nav id="site-navigation" class="main-navigation" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix', 'container' => '' ) ); ?>
						</nav><!-- #site-navigation -->
						
						<span class="btn-search"><i class="fa fa-search">&nbsp;</i></span>
						
					</div>
				</div>
				
				<div class="search-wraper">
					<div class="inner clearfix">
						<div class="search-box cleafix">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
				
			</div>
			<div id="catcher"></div>
		</div>
	</header><!-- #masthead -->
	
	<?php 

		$class = ' sidebar-right';
		// for page condition
		if (is_page()) {
			if ( is_page_template( 'sidebar-left.php' )) {
				$class = ' sidebar-left';
			} else {
				$class = ' sidebar-right';
			}
		}

		$classView = '';
		$layout_style = get_theme_mod ('viralblog_lite_general_home_layout_style', 'grid');
		if ( $layout_style == 'grid' ) {
			$classView = ' grid-style';
		}
	?>
	<div id="content" class="site-content<?php echo $class; ?>">
		<div class="inner clearfix<?php echo $classView; ?>">

