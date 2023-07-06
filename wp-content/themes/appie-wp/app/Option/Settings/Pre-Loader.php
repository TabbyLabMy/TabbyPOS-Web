<?php 


        // pre-loader
        CSF::createSection( APPIE_OPTION_KEY, array(
       
			'title'   => esc_html__( 'Preloader', 'appie' ),
            'icon'   => 'fa fa-spinner',
		    'fields' => array(
				array(
				  'type'    => 'subheading',
				  'content' => esc_html__( 'Preloader Type', 'appie' ),
				),
				array(
					'id'      => 'enable_preloader',
					'type'    => 'switcher',
					'title'   => esc_html__( 'Enable Preloader', 'appie' ),
					'desc'    => esc_html__( 'If you want to enable or disable preloader you can set ( YES / NO )', 'appie' ),
					'default' => false,
				),

				array(
					'id'      => 'enable_close_preloader',
					'type'    => 'switcher',
					'title'   => esc_html__( 'Enable Close Button', 'appie' ),
					'desc'    => esc_html__( 'If you want to enable or disable preloader you can set ( YES / NO )', 'appie' ),
					'default' => true,
				),

				array(
					'id'     => 'preloader_close_text',
					'type'   => 'text',
					'title'  => esc_html__( 'Close Text', 'appie' ),
					'default' => esc_html__('Close','appie'),
					'dependency' => array( 'enable_close_preloader', '==', true ),
				),
				
				array(
				  'type'    => 'subheading',
				  'content' => esc_html__( 'Preloader Background & Color', 'appie' ),
				),
				
				array(
					'id'      => 'preloader_bg',
					'type'    => 'background',
					'title'   => esc_html__( 'Preloader Background', 'appie' ),
					'output'  => '.loader-wrap .preloader',
					'desc'    => esc_html__( 'Upload a new background image or select color to set the preloader background.', 'appie' ),
				),

				array(
					'id'      => 'preloader_overlay_bg',
					'type'    => 'background',
					'title'   => esc_html__( 'Preloader Background Overlay', 'appie' ),
					'output'  => 'body .loader-wrap .layer .overlay',
					
				),
	
				array(
					'id'      => 'preloader_bg_icon',
					'type'    => 'background',
					'title'   => esc_html__( 'Preloader Close Icon', 'appie' ),
					'output'  => 'body .preloader .preloader-close',
					'dependency' => array( 'enable_close_preloader', '==', true ),
					
				),

				array(
					'id'     => 'preloader_text_colors',
					'type'   => 'color',
					'title'  => esc_html__( 'Close Color', 'appie' ),
					'output' => 'body .preloader .preloader-close',
					'dependency' => array( 'enable_close_preloader', '==', true ),
				),
				

		    ),
        ) ); 