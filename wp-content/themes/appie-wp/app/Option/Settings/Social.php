<?php 

    // social
    CSF::createSection( APPIE_OPTION_KEY, array(
        'title'  => esc_html__( 'Social', 'appie' ),
        'icon'   => 'fa fa-share-alt',
        'fields' => array(
            array(
                'id'      => 'enable_blog_social',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Blog Social Share', 'appie' ),
                'desc'    => esc_html__( 'Set the Blog social share hide or not.', 'appie' ),
                'default' => false,
            ),
         
            array(
                'id'           => 'social_share',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Bookmark', 'appie' ),
                'button_title' => esc_html__( 'Add New Bookmark', 'appie' ),
                'desc'         => esc_html__( 'Set the social bookmark icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'appie' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'appie' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'appie' ),
                        'default' => 'fa fa-facebook'
                    ),

                   
                    array(
                        'id'          => 'social_type',
                        'type'        => 'select',
                        'title'       => 'Select',
                        'placeholder' => esc_html__( 'Select an type' , 'appie' ),
                        'options'     => appie_social_share_list(),
                        
                      ),
                ),
            ),

            array(
                'id'      => 'enable_blog_social_link',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Blog Social Link', 'appie' ),
                'desc'    => esc_html__( 'Set the Blog social Link hide or not.', 'appie' ),
                'default' => false,
            ),

            array(
                'id'           => 'social_link',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Link', 'appie' ),
                'button_title' => esc_html__( 'Add New Bookmark', 'appie' ),
                'dependency' => array( 'enable_blog_social_link', '==', true ),
                'desc'         => esc_html__( 'Set the social bookmark icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'appie' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'appie' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'appie' ),
                        'default' => 'fa fa-facebook'
                    ),

                    array(
                        'id'      => 'bookmark_url',
                        'type'    => 'text',
                        'title'   => esc_html__( 'Profile Url', 'appie' ),
                        'desc'    => esc_html__( 'Type the social profile url lik http://facebook.com/yourpage. also you can add (facebook, twitter, linkedin, youtube etc.)', 'appie' ),
                        'default' => 'http://facebook.com/quomodosoft'
                    ),
                   
                ),
            ),


            array(
                'id'         => 'social_color',
                'type'       => 'color',
                'title'      => esc_html__( 'Footer Social Color', 'appie' ),
                'desc'       => esc_html__( 'Set the footer social bookmark color from here.', 'appie' ),
                'output'     => '.ab-social a'
                
            ),

            array(
                'id'         => 'social_hover_color',
                'type'       => 'color',
                'title'      => esc_html__( 'Footer Social Hover Color', 'appie' ),
                'desc'       => esc_html__( 'Set the footer social bookmark hover color from here.', 'appie' ),
                'output'     => '.ab-social a:hover'
               
            ),

        ),

    ) );