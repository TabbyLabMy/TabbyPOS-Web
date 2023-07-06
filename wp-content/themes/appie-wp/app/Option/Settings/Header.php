<?php 

   // header a top-tab
    CSF::createSection( APPIE_OPTION_KEY, array(
        'id'    => 'header_tab', // Set a unique slug-like ID
        'title'   => esc_html__( 'Header', 'appie' ),
        'icon'     => 'fa fa-home',
    ) ); 


    // Header
    CSF::createSection( APPIE_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'   => esc_html__( 'Header', 'appie' ),
        'icon'   => 'fa fa-credit-card',
        'fields' => array(
 
            
            array(
                'id'      => 'header_style',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Header Style', 'appie' ),
                'desc'    => esc_html__( 'Select the header style which you want to show on your website.', 'appie' ),
                'options' => array(
                     
                 ),
                'default' => 'style1',
            ),
  
            array(
                'id'      => 'enable_sticky_header',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Sticky Header', 'appie' ),
                'desc'    => esc_html__( 'If you want to enable or disable sticky Header you can set ( YES / NO )', 'appie' ),
                'default' => false,
               
            ),
            
            array(
                'id'      => 'enable_transparent_header',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Transparent Header Disable', 'appie' ),
                'desc'    => esc_html__( 'If you want to enable or disable Transparent Header you can set ( YES / NO )', 'appie' ),
                'default' => false,
               
            ),

            //cta
            array(
                'id'      => 'enable_cta',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable CTA', 'appie' ),
                'desc'    => esc_html__( 'If you want to enable or disable button you can set ( YES / NO )', 'appie' ),
                'default' => false,
            ),
    
            array(
                'id'         => 'cta_text',
                'type'       => 'text',
                'title'      => esc_html__( 'Cta lebel', 'appie' ),
                'desc'       => esc_html__( 'Set the Button text.', 'appie' ),
                'default'    => esc_html__('Buy Now','appie'),
                'dependency' => array( 'header_style', '==', 'style1' ),
            ),
       
    
            array(
                'id'         => 'cta_link',
                'type'       => 'text',
                'title'      => esc_html__( 'Cta url', 'appie' ),
                'desc'       => esc_html__( 'Set the support url.', 'appie' ),
                'default'    => '#',
                'dependency' => array( 'enable_cta', '==', 'true' ),
            ),

            array(
                'id'      => 'enable_user_account',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable User Account', 'appie' ),
                'desc'    => esc_html__( 'If you want to enable or disable user account you can set ( YES / NO )', 'appie' ),
                'default' => false,
            ),

            
            array(
                'id'         => 'user_account_text',
                'type'       => 'text',
                'title'      => esc_html__( 'User Account Text', 'appie' ),
                'desc'       => esc_html__( 'Set the user account text.', 'appie' ),
                'default'    => esc_html__('Login','appie'),
                'dependency' => array( 'enable_user_account', '==', true ),
            ),

            array(
                'id'         => 'user_account_link',
                'type'       => 'text',
                'title'      => esc_html__( 'User Account Url', 'appie' ),
                'desc'       => esc_html__( 'Set the user account url.', 'appie' ),
                'default'    => '#',
                'dependency' => array( 'enable_user_account', '==', true ),
            ),
         
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Button Styling', 'appie' ),
            ),
              
            array(
                'id'     => 'button_one_text_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Login Button Color', 'appie' ),
                'output' => 'body .appie-btn-box .login-btn',
                'output_important' => true,
            ),  

            array(
                'id'     => 'button_one_icon_text_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Login Icon Color', 'appie' ),
                'output' => 'body .appie-btn-box .login-btn i',
                'output_important' => true,
            ), 

            array(
                'id'               => 'button_one_bg_color',
                'type'             => 'color',
                'output_important' => true,
                'title'            => esc_html__( 'Login Button Background Color', 'appie' ),
                'output'           => 'body .appie-btn-box .login-btn',
                'output_mode'      => 'background-color'
            ),

            

            array(
                'id'     => 'button_one_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Login Button Border', 'appie' ),
                'output' => 'body .appie-btn-box .login-btn'
            ),

            // 

            array(
                'id'     => 'button_cta_text_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Cta Button Color', 'appie' ),
                'output' => 'body .appie-btn-box .main-btn',
                'output_important' => true,
            ),  

            array(
                'id'               => 'button_cta_bg_color',
                'type'             => 'color',
                'output_important' => true,
                'title'            => esc_html__( 'Cta Button Background Color', 'appie' ),
                'output'           => 'body .appie-btn-box .main-btn',
                'output_mode'      => 'background-color'
            ),

            array(
                'id'     => 'button_cta_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Cta Button Border', 'appie' ),
                'output' => 'body .appie-btn-box .main-btn'
            ),
            
           
        )
    ) );

    // Main menu
    CSF::createSection( APPIE_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'      => esc_html__( 'Main Menu', 'appie' ),
        'icon'   => 'fa fa-sitemap',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Box', 'appie' ),
            ),

            array(
                'id'          => 'menu_header_padding',
                'type'        => 'spacing',
                'title'   => esc_html__( 'Post Padding', 'appie' ),
                'output'      => 'body .appie-header-area',
                'output_mode' => 'padding', // or margin, relative
                'default'     => array(
                  'unit'      => 'px',
                ),
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Background', 'appie' ),
            ),

            array(
                'id'      => 'menu_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Background', 'appie' ),
                'desc'    => esc_html__( 'Set the menu background form here.', 'appie' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => '',
                    'color'      => '',
                ),
                'output_important'=> true,
                'output' =>'header'
            ),
         
            array(
                'id'      => 'sticky_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Sticky Background', 'appie' ),
                'desc'    => esc_html__( 'Set the menu sticky background form here.', 'appie' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => '',
                    'color'      => '',
                ),
                'output_important'=> true,
                'output'      => 'body .appie-header-area.sticky',
            ),
         
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Color', 'appie' ),
            ),

            array(
                'id'      => 'menu_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Color', 'appie' ),
                'desc'    => esc_html__( 'Set the menu color by color picker', 'appie' ),
                'default' => '',
                'output'  => 'body .appie-header-main-menu ul > li > a',
               
                
            ),

            array(
                'id'      => 'menu_hover',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Hover Color', 'appie' ),
                'desc'    => esc_html__( 'Set the menu hover color by color picker', 'appie' ),
                'default' => '',
               
                'output'  => 'body .appie-header-main-menu ul > li:hover > a',
               
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Sticky Color', 'appie' ),
            ),
            
            array(
                'id'      => 'menu_sticky__color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Sticky Color', 'appie' ),
                'desc'    => esc_html__( 'Set the menu sticky color by color picker', 'appie' ),
                'default' => '',
                'output'  => '.sticky .appie-header-main-menu ul > li > a',
              
            ),

            array(
                'id'      => 'menu_sticky_hover_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Sticky Hover Color', 'appie' ),
                'desc'    => esc_html__( 'Set the menu sticky color by color picker', 'appie' ),
                'default' => '',
                'output'  => '.sticky .appie-header-main-menu ul > li:hover > a',
              
            ),
  
        )
    ) );

    //
    // Mobile menu
    CSF::createSection( APPIE_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'  => 'Offcanvas',
        'icon'   => 'fa fa-mobile',
            'fields' => array(

                array(
                    'id'           => 'offcanvas_footer_content',
                    'type'         => 'group',
                    'title'        => esc_html__( 'Footer Content', 'appie' ),
                    'button_title' => esc_html__( 'Add New Item', 'appie' ),
                    
                    'desc'         => esc_html__( 'Set the footer content. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'appie' ),
                    'fields'       => array(
                       
                        array(
                            'id'      => 'icon',
                            'type'    => 'icon',
                            'title'   => esc_html__( 'Icon', 'appie' ),
                            'desc'    => esc_html__( 'Set the  profile icon like ( location email phone ect. )', 'appie' ),
                            'default' => 'fal fa-envelope'
                        ),

                        array(
                            'id'          => 'link_type',
                            'type'        => 'select',
                            'title'       => 'Select',
                            'placeholder' => 'Link Type',
                            'options'     => array(
                                'phone' => 'Phone',
                                'email' => 'Email',
                                'url'   => 'Url',
                                ''      => 'Unknown',
                            ),
                            'default'     => 'url'
                        ),

                        array(
                            'id'      => 'link',
                            'type'    => 'text',
                            'title'   => esc_html__( 'Link ?', 'appie' ),
                        ),
    
                        array(
                            'id'      => 'content',
                            'type'    => 'textarea',
                            'title'   => esc_html__( 'Content', 'appie' ),
                            
                        ),
                       
                    ),
                ),

                array(
                    'id'      => 'mobile_menu_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Menu Color', 'appie' ),
                    'desc'    => esc_html__( 'Set the menu color by color picker', 'appie' ),
                    'output' => '.offcanvas_main_menu li a'
                   
                ),
                array(
                    'id'      => 'mobile_menu_hover',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Menu Hover Color', 'appie' ),
                    'desc'    => esc_html__( 'Set the menu item active &hover color by color picker', 'appie' ),
                    'output' => '.offcanvas_main_menu li:hover > a'
                   
                   
                ),
              
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Mobile Menu Hamberger Color & Background', 'appie' ),
                ),

                array(
                    'id'      => 'mobile_menu_hamberger_bgcolor',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Menu Hambarger Background', 'appie' ),
                    'desc'    => esc_html__( 'Set the menu hamberger background color by color picker', 'appie' ),
                    'output' => '.appie-btn-box .toggle-btn i',
                    'output_mode' => 'background-color'
                  
                    
                ),

                array(
                    'id'      => 'mobile_menu_hamberger_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Menu Hambarger Color', 'appie' ),
                    'desc'    => esc_html__( 'Set the menu hamberger color by color picker', 'appie' ),
                    'output' => '.appie-btn-box .toggle-btn i',
                ),

                array(
                    'id'      => 'mobile_sticky_menu_hamberger_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Sticky Menu Hambarger Color', 'appie' ),
                    'desc'    => esc_html__( 'Set the menu hamberger color by color picker', 'appie' ),
                    'output' => '.sticky .appie-btn-box .toggle-btn i',
                ),
                      
        
            )
    ) );

    
    // Logo section
    CSF::createSection( APPIE_OPTION_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'  => 'Logos',
        'icon'   => 'fa fa-file-image-o',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Main Image Logo', 'appie' ),
            ),

            array(
                'id'      => 'logo',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload Main Logo', 'appie' ),
                'desc'    => esc_html__( 'Upload main logo width 180px and height 65px.', 'appie' ),
                'default' => '',
                'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'appie' ),
            ),
         
            array(
                'id'      => 'sticky_logo',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload Sticky Logo', 'appie' ),
                'desc'    => esc_html__( 'Upload sticky logo width 180px and height 65px.', 'appie' ),
                'default' => '',
                'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'appie' ),
            ),

            array(
                'id'      => 'offcanvas_logo',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload offcanvas Logo', 'appie' ),
                'desc'    => esc_html__( 'Upload sticky offcanvas width 180px and height 65px.', 'appie' ),
                'default' => '',
                'help'    => esc_html__( 'Note: Please use offcanvas image max width: 250px and max height 100px.', 'appie' ),
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Text Logo Color', 'appie' ),
            ),

            array(
                'id'      => 'logo_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Text Logo Color', 'appie' ),
                'desc'    => esc_html__( 'Set the text logo color by color picker.', 'appie' ),
                'output' => '.appie-logo-box a',
                'output_important'=> true,
            ),
     
        )
    ) );