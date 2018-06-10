/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );

	$('.preview-notice').append('<a class="viralblog-lite-upgrade-to-pro-button" href="' + viralbogliteCustomizerObject.proURL + '" target="_blank">'+ viralbogliteCustomizerObject.pro +'</a>');
	$('.viralblog-lite-upgrade-to-pro-button').css({
		'background': '#AA1801',
		'padding' : '2px 5px',
		'color': '#ffffff',
		'text-transform': 'uppercase',
		'font-size': '10px'

	})

} )( jQuery );
