<?php
/**
|------------------------------------------------------------------------------
| Static Control
|------------------------------------------------------------------------------
*/

class Viralbloglite_Theme_Info extends WP_Customize_Control
	{
		public function render_content()
		{
			echo $this->description;
		}
	}
/**
|------------------------------------------------------------------------------
| OPTIONS
|------------------------------------------------------------------------------
*/

		$wp_customize->add_panel( 'viralblog_lite_panel_general', array(
			'priority' => 30,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'General Options', 'viralblog-lite' )
		));
		/*******************
		* Section: Home Slideshow *
		********************/
		$wp_customize->add_section( 'viralblog_lite_general_home_slideshow_section' , array(
				'title'       		=> __( 'Home Slideshow', 'viralblog-lite' ),
				'priority'    		=> 1,
				'panel' 			=> 'viralblog_lite_panel_general'
		));

		/* Layout Style */
		$wp_customize->add_setting('viralblog_lite_general_home_slideshow_options', array('sanitize_callback' => 'sanitize_text_field', 'default' => false));
		$wp_customize->add_control( 'viralblog_lite_general_home_slideshow_options', array(
		  	'section' 				=> 'viralblog_lite_general_home_slideshow_section',
		  	'label' 				=> __( 'Enable Slideshow', 'viralblog-lite' ),
	        'priority'				=> 1,
	        'type'       			=> 'checkbox',
		));

		/*******************
		* Section: Home Layout *
		********************/
		$wp_customize->add_section( 'viralblog_lite_general_home_layout_section' , array(
				'title'       		=> __( 'Home Layout', 'viralblog-lite' ),
				'priority'    		=> 1,
				'panel' 			=> 'viralblog_lite_panel_general'
		));

		/* Layout Style */
		$wp_customize->add_setting('viralblog_lite_general_home_layout_style', array('sanitize_callback' => 'viralblog_lite_sanitize_choices', 'default' => 'grid'));
		$wp_customize->add_control( 'viralblog_lite_general_home_layout_style', array(
		  	'section' 				=> 'viralblog_lite_general_home_layout_section',
		  	'label' 				=> __( 'Layout Style', 'viralblog-lite' ),
		  	'type'    				=> 'radio',
	        'priority'				=> 1,
	        'choices'    			=> array(
	            'grid' 					=> __('Grid', 'viralblog-lite'),
	            'list' 					=> __('List', 'viralblog-lite'),
	        ),
		));


		/*******************
		* Section: Excerpt *
		********************/
		$wp_customize->add_section( 'viralblog_lite_general_excerpt_section' , array(
				'title'       		=> __( 'Excerpt', 'viralblog-lite' ),
				'priority'    		=> 2,
				'panel' 			=> 'viralblog_lite_panel_general'
		));

		/* Excerpt Length */
		$wp_customize->add_setting('viralblog_lite_general_excerpt_lengh', array('sanitize_callback' => 'absint', 'default' => 32));
		$wp_customize->add_control( 'viralblog_lite_general_excerpt_lengh', array(
		  	'type' 					=> 'number',
		  	'section' 				=> 'viralblog_lite_general_excerpt_section',
		  	'label' 				=> __( 'Excerpt Length', 'viralblog-lite' ),
		  	'description' 			=> __( 'Number of word as Expert Length To be Shown in Home/Archive pages when you choose to show entry text as Excerpt.', 'viralblog-lite'),
		));

		/* Excerpt End Text */
		$wp_customize->add_setting('viralblog_lite_general_excerpt_end_text', array('sanitize_callback' => 'sanitize_text_field', 'default' => '...'));
		$wp_customize->add_control( 'viralblog_lite_general_excerpt_end_text', array(
		  	'type' 					=> 'text',
		  	'section' 				=> 'viralblog_lite_general_excerpt_section',
		  	'label' 				=> __( 'Excerpt Length', 'viralblog-lite' ),
		));

		/***************************
		* Section: Post Meta Info *
		***************************/
		$wp_customize->add_section( 'viralblog_lite_single_post_meta_info_section' , array(
				'title'       		=> __( 'Post Meta Info', 'viralblog-lite' ),
				'priority'    		=> 3,
				'panel' 			=> 'viralblog_lite_panel_general'
		));
		
		/**********************
		* Section: Pagination *
		***********************/
		$wp_customize->add_section( 'viralblog_lite_general_pagination_section' , array(
			'title'       			=> __( 'Pagination Mode', 'viralblog-lite' ),
			'priority'    			=> 4,
			'panel' 				=> 'viralblog_lite_panel_general'
		));

		$wp_customize->add_setting('viralblog_lite_general_pagination_mode', array(
        	'default'        	=> 'default',
        	'capability'     	=> 'edit_theme_options',
        	'sanitize_callback' => 'viralblog_lite_sanitize_choices',
	    ));
	    $wp_customize->add_control( 'viralblog_lite_general_pagination_mode', array(
	        'label'   			=> 'Choose Pagination Type',
	        'section' 			=> 'viralblog_lite_general_pagination_section',
	        'type'    			=> 'radio',
	        'priority'			=> 1,
	        'choices'    		=> array(
	            'default' 				=> __('Default (Older Posts/Newer Posts)', 'viralblog-lite'),
	            'numberal' 				=> __('Numberal (1 2 3 ..)', 'viralblog-lite'),
	        ),
	    ));