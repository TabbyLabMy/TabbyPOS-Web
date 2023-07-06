<?php 
 

 // Post Page
CSF::createSection( APPIE_OPTION_KEY, array(
    'icon'   => 'fa fa-book',
    'title' => esc_html__( 'Post & Page', 'appie' ),
    'fields' => array(

        array(
          'type'    => 'subheading',
          'content' => esc_html__( 'Post Setting', 'appie' ),
        ),

        array(
            'id'      => 'single_post_thumnnail',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Post Thumbnail', 'appie' ),
            'desc'    => esc_html__( 'If you want to enable or disable post Thumbnail Image you can set ( YES / NO )', 'appie' ),
            'default' => true,
        ),
        array(
            'id'      => 'single_post_tags',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Post tags', 'appie' ),
            'desc'    => esc_html__( 'If you want to enable or disable post tags you can set ( YES / NO )', 'appie' ),
            'default' => true,
        ),
      

        array(
            'id'      => 'blog_single_author_box',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Author About', 'appie' ),
            'default' => false
        ),

      
    ),
) );

CSF::createSection( APPIE_OPTION_KEY, array(
    'icon'   => 'fa fa-book',
    'title' => esc_html__( '404', 'appie' ),
    'fields' => array(

          array(
            'type'    => 'subheading',
            'content' => esc_html__( '404 Error Page Setting', 'appie' ),
          ),

          array(
            'id'      => 'disable_header_footer',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Disable Header Footer', 'appie' ),
            'desc'    => esc_html__( 'If you want to enable or disable header footer you can set ( YES / NO )', 'appie' ),
            'default' => false,
         ),

          array(
            'id'      => 'enable_404_transparent_header',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable 404 Transparent header', 'appie' ),
            'desc'    => esc_html__( 'If you want to enable or disable home page header you can set ( YES / NO )', 'appie' ),
            'default' => true,
        ),
         
          array(
            'id'         => 'error_title',
            'type'       => 'text',
            'title'      => esc_html__( '404 Error Page Text', 'appie' ),
            'desc'       => esc_html__( 'Set your 404 error title.', 'appie' ),
            'default'    => esc_html__( 'The page can’t be found.', 'appie' )
          ),

          array(
            'id'     => 'error__text_color',
            'type'   => 'color',
            'title'  => esc_html__( '404 Error Page Text Color', 'appie' ),
            
            'output' => '
                .appie-error-content span
             '
             
        ),

          array(
            'id'     => 'error_title_text_color',
            'type'   => 'color',
            'title'  => esc_html__( '404 Error Title Color', 'appie' ),
            'default' => '#000000',
            'output' => '
               body .appie-error-area .appie-error-content h3
             '
             
        ),

          array(
              'id'         => 'error_text',
              'type'       => 'text',
              'title'      => esc_html__( '404 Error Page description', 'appie' ),
              'desc'       => esc_html__( 'Set your 404 error description.', 'appie' ),
              'default'    => esc_html__( "The page you're looking for isn't available. Try with another page or use the go home button below", 'appie' )
          ),

          array(
            'id'     => 'error_descv_text_color',
            'type'   => 'color',
            'title'  => esc_html__( '404 Error Desc Color', 'appie' ),
            'default' => '#000000',
            'output' => '
                .appie-error-content p
             '
         ),
  
          array(
              'id'      => 'enable_404_return_home_button',
              'type'    => 'switcher',
              'title'   => esc_html__( 'Enable 404 Home Button', 'appie' ),
              'desc'    => esc_html__( 'If you want to enable or disable home page button you can set ( YES / NO )', 'appie' ),
              'default' => true,
          ),

          array(
            'id'     => 'error_button_text_color',
            'type'   => 'color',
            'title'  => esc_html__( '404 Error Button Color', 'appie' ),
            'default' => '',
            'output' => '
                .appie-error-content a
             '
         ),

         array(
          'id'     => 'error_button_border_color',
          'type'   => 'border',
          'title'  => esc_html__( '404 Error Button Border', 'appie' ),
          'output' => '.appie-error-content a'
        ),

         array(
            'id'                              => 'error_404_button_image',
            'type'                            => 'background',
            'title'                           => esc_html__('Button Background','appie'),
            'background_gradient'             => true,
            'background_origin'               => true,
            'background_clip'                 => true,
            'background_blend_mode'           => true,
            'output'                => '.appie-error-content a',
        ),

 
         array(
            'id'      => 'error_404_image',
            'type'    => 'upload',
            'title'   => esc_html__( 'Upload 404 Image', 'appie' ),
            'desc'    => esc_html__( 'Upload 404 image width 706px and height 431px.', 'appie' ),
            'default' => '',
            
        ),

        array(
            'id'                              => 'error_404_body_image',
            'type'                            => 'background',
            'title'                           => esc_html__('Body Background','appie'),
            'background_gradient'             => true,
            'background_origin'               => true,
            'background_clip'                 => true,
            'background_blend_mode'           => true,
            'output'                => '.error404',
        ),
          
       
        array(
            'id'      => 'error_enable_main_container',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Container', 'appie' ),
            'desc'    => esc_html__( 'If you want to enable or disable 404 page footer you can set ( YES / NO )', 'appie' ),
            'default' => true,
        ),

    ),
    ) );