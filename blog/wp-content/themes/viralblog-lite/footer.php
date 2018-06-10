<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Viralblog
 */

?>
			<div class="clearfix"></div>
		</div><!-- .inner -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<?php get_sidebar('footer'); ?>
		
		<div class="site-info">
			<div class="inner clearfix">
				<div class="copyright">
				
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'viralblog-lite' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'viralblog-lite' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'viralblog-lite' ), 'viralblog-lite', '<a href="'. VIRALBLOG_LITE_PRO_URL .'" rel="designer">ThemeCountry</a>' ); ?>
				
				</div>
				<?php if(has_nav_menu('footer'))  : ?>
				<div class="menu-footer" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'menu clearfix' ) ); ?>
				</div>
				<?php endif; ?>
			</div><!-- .inner -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
