<?php

	
	/**
	|------------------------------------------------------------------------------
	| OPTIONS
	|------------------------------------------------------------------------------
	*/
	$wp_customize->add_panel( 'viralblog_lite_tc_panel_single', array(
			'priority' 				=> 33,
			'capability' 			=> 'edit_theme_options',
			'theme_supports'		=> '',
			'title' 				=> __( 'Single Options', 'viralblog-lite' )
		));

		

	   /**************************
		* Section: Related Posts *
		**************************/
		$wp_customize->add_section( 'viralblog_lite_single_related_post_section' , array(
				'title'       		=> __( 'Related Posts', 'viralblog-lite' ),
				'priority'    		=> 1,
				'panel' 			=> 'viralblog_lite_tc_panel_single'
		));

		/* Related Post Taxonmy */
		$wp_customize->add_setting('viralblog_lite_single_related_post_taxonomy', array(
	        'default'        		=> 'category',
	        'sanitize_callback' => 'viralblog_lite_sanitize_choices'
  	  	));
 
	    $wp_customize->add_control('viralblog_lite_single_related_post_taxonomy', array(
	        'label'      			=> __('Related Posts Taxonomy', 'viralblog-lite'),
	        'section'    			=> 'viralblog_lite_single_related_post_section',
	        'type'       			=> 'radio',
	        'priority'				=> 2,
	        'choices'    			=> array(
	            'category' 				=> __('Categories', 'viralblog-lite'),
	            'tag' 					=> __('Tags', 'viralblog-lite'),
	        ),
	    ));

		
