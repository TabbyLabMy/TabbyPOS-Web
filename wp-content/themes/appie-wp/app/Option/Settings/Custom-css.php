<?php 
 

/*-----------------------------------
    CUSTOM CSS SECTION
------------------------------------*/
CSF::createSection( APPIE_OPTION_KEY,
    array(
       
        'title'  => esc_html__( 'Custom Css', 'appie' ),
        'icon'   => 'fa fa-css3',
        'fields' => array(

            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( All Device )', 'appie' ),
            ),
            array(
                'id'       => 'custom_css',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post.', 'appie' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
            
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( Medium Device or Ipad Pro )', 'appie' ),
            ),
            array(
                'id'       => 'custom_css_ipad',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be  minimum 1024px maximum 1366px.', 'appie' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
            
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( Medium Device or Tablet )', 'appie' ),
            ),
            array(
                'id'       => 'custom_css_tablet',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be  minimum 768px maximum 992px.', 'appie' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
            
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( Mobile Device )', 'appie' ),
            ),
            
            array(
                'id'       => 'custom_css_mobile',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be maximum 767px.', 'appie' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
        ),
    )
);