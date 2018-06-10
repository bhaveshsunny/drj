<?php
/**
 * Viralblog Theme Customizer.
 *
 * @package Viralblog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function viralblog_lite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/**
	|------------------------------------------------------------------------------
	| GENERAL OPTIONS
	|------------------------------------------------------------------------------
	*/
	if ( class_exists( 'WP_Customize_Panel' ) ) {


		/**
		|-------------------------------------------------------------------------------
		| Panel: General Options
		|-------------------------------------------------------------------------------
		|
		*/

		require_once get_template_directory() . '/inc/customizer/general-options.php';


		/**
		|-------------------------------------------------------------------------------
		| Panel: Single Options
		|-------------------------------------------------------------------------------
		|
		*/
		require_once get_template_directory() . '/inc/customizer/single-options.php';

	}

		
}
add_action( 'customize_register', 'viralblog_lite_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function viralblog_lite_customize_preview_js() {
	wp_enqueue_script( 'viralblog_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ), '20160501', true );

	wp_localize_script( 'viralblog_lite_customizer', 'viralbogliteCustomizerObject', array(
		
		'documentation' => __( 'View Documentation', 'viralblog-lite' ),
		'pro' 			=> __('Upgrade to PRO','viralblog-lite'),
		'proURL'		=> VIRALBLOG_LITE_PRO_URL

	) );
}
add_action( 'customize_controls_enqueue_scripts', 'viralblog_lite_customize_preview_js' );
/**
|------------------------------------------------------------------------------
| Callback Functions
|------------------------------------------------------------------------------
*/
function viralblog_lite_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Sanitize checkbox values
 * @since 1.0.0
 */
function viralblog_lite_sanitize_checkbox( $input ) {
	if ( $input ) {
		$output = '1';
	} else {
		$output = false;
	}
	return $output;
}

/* Pro Version Sanitize */
function viralblog_lite_sanitize_pro_version( $input ) {
    return $input;
}

function viralblog_lite_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}
