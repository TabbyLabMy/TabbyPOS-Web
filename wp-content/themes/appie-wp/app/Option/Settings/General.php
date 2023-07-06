<?php 

CSF::createSection( APPIE_OPTION_KEY, array(
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'General','appie'),
        'fields' => array(

            array(
                'id'         => 'general_blog_title',
                'type'       => 'text',
                'title'      => esc_html__( 'Blog Title', 'appie' ),
                'desc'       => esc_html__( 'Set global blog title', 'appie' ),
               
            ),
    
            array(
                'id'         => 'general_breadcrumb_limit',
                'type'       => 'number',
                'title'      => esc_html__( 'Breadcrumb limit', 'appie' ),
                'desc'       => esc_html__( 'Set the breadcrump text limit', 'appie' ),
                'default'    => '50',
             ),

             array(
                'id'      => 'general_breadcrumb_post_title_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Breadcrumb Post Title ?', 'appie' ),
                'default' => false
            ),

            array(
                'id'      => 'general_breadcrumb_page_title_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Breadcrumb Page Title ?', 'appie' ),
                'default' => false
            ),
 
        )
    ) ); 


    CSF::createSection( APPIE_OPTION_KEY, array(
        'icon'   => 'fa fa-cart',
        'title'  => esc_html__( 'Shop','appie'),
        'fields' => array(

            array(
                'id'         => 'shop_product_columns',
                'type'       => 'text',
                'title'      => esc_html__( 'Product Columns', 'appie' ),
               
               
            ),
    
             array(
                'id'      => 'shop_product_sidebar_enable',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Shop Sidebar?', 'appie' ),
                'default' => false
            ),
            
            array(
                'id'          => 'shop_sidebar',
                'type'        => 'select',
                'title'       => esc_html__('Sidebar', 'appie'),
                'placeholder' => 'Select an option',
                'options'     => array(
                    'no' => esc_html__('No sidebar', 'appie'),
                    'left' => esc_html__('Left Sidebar', 'appie'),
                    'right' => esc_html__('Right Sidebar', 'appie'),
                ),
                'default'     => '3'
              ),
 
           
 
        )
    ) ); 