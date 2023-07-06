<?php 
    // Blog
     // footer a top-tab
     CSF::createSection( APPIE_OPTION_KEY, array(
        'id'    => 'banner_tab', // Set a unique slug-like ID
        'title'  => esc_html__( 'Banner', 'appie' ),
        'icon'     => 'fa fa-cog',
    ) );
    CSF::createSection( APPIE_OPTION_KEY, array(
        'parent' => 'banner_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Content Settings', 'appie' ),
        'fields' => array(
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Banner', 'appie' ),
            ),
         
            array(
                'id'      => 'blog_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Banner Show', 'appie' ),
                'default' => true
            ),

            
            array(
                'id'      => 'blog_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Breadcrumb', 'appie' ),
                'default' => true
            ),
            
            array(
                'id'      => 'banner_blog_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog title', 'appie' ),
                
            ), 

            array(

                'id'      => 'banner_blog_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'appie' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'appie' ),
                'output' => '.appie-page-title-area'
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Post / Details', 'appie' ),
            ),
         
            array(
                'id'      => 'blog_single_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Banner Show', 'appie' ),
                'default' => true
            ),

            
            array(
                'id'      => 'blog_single_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Post Breadcrumb', 'appie' ),
                'default' => true
            ),
            
            array(

                'id'      => 'banner_single_blog_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'appie' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'appie' ),
                'output' => '.single-post .appie-page-title-area'
            ),


            
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Banner', 'appie' ),
            ),
            
            array(

                'id'      => 'page_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Banner Show ', 'appie' ),
                'default' => true
            ),
            
            array(
                'id'      => 'page_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Breadcrumb', 'appie' ),
                'default' => true
            ),
            
            array(

                'id'      => 'banner_page_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Page Title', 'appie' ),
                'default' => ''
            ), 

            array(

                'id'      => 'banner_page_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'appie' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'appie' ),
                'output' => '.page .appie-page-title-area'
            ),
  
  
       
        )
    ) ); 
    CSF::createSection( APPIE_OPTION_KEY, array(
        'parent' => 'banner_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Style', 'appie' ),
        'fields' => array(
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Banner', 'appie' ),
            ),

            array(
                'id'    => 'banner_blog_title_color',
                'type'  => 'color',
                'title' => esc_html__( 'Title Color', 'appie' ),
                'output' => '.appie-page-title-item .title, .appie-page-title-item span'
            ),

            array(
                'id'     => 'banner_blog_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Color', 'appie' ),
                'output' => '.appie-page-title-item nav ol li, .appie-page-title-item nav ol li a',
                'output_important' => true
            ),

            array(
                'id'     => 'banner_blog_breadcrumb_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Icon Color', 'appie' ),
                'output' => '.appie-page-title-item nav ol li i',
                'output_important' => true
            ),
  
   
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Post', 'appie' ),
            ),

            array(
                'id'    => 'banner_post_title_color',
                'type'  => 'color',
                'title' => esc_html__( 'Title Color', 'appie' ),
                'output' => '.single-post .appie-page-title-item .title, .single-post .appie-page-title-item span'
            ),
            
            array(
                'id'     => 'banner_post_meta__color',
                'type'   => 'color',
                'title'  => esc_html__( 'Meta Color', 'appie' ),
                'output' => '.single .appie-page-title-area .bp-meta a'
            ),

            array(
                'id'     => 'banner_post_meta_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Meta Color Icon', 'appie' ),
                'output' => '.single .appie-page-title-area .bp-meta a i'
            ),

            array(
                'id'     => 'banner_post_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb ', 'appie' ),
                'output' => '.single .appie-page-title-item nav ol li a,.single .appie-page-title-item nav ol li'
            ),
           
            array(
                'id'    => 'banner_post_breadcrumb_hover_color',
                'type'  => 'color',
                'title' => esc_html__( 'Breadcrumb Hover', 'appie' ),
                'output' => '.single .appie-page-title-item nav ol li:hover a'
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Banner', 'appie' ),
            ),
       
            array(
                'id'     => 'banner_page_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Title Color', 'appie' ),
                'output' => '.page .appie-page-title-item .title'
            ),

            array(
                'id'     => 'banner_page_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Breadcrumb Color', 'appie' ),
                'output' => '.page .appie-page-title-item nav ol li, .page .appie-page-title-item nav ol li a',
                'output_important' => true
            ),

            array(
                'id'               => 'banner_page_breadcrumb_hover_color',
                'type'             => 'color',
                'title'            => esc_html__( 'Breadcrumb Hover Color', 'appie' ),
                'output'           => '.page .appie-page-title-item nav ol li:hover a',
                'output_important' => true
            ),

        
        )
    ) ); 