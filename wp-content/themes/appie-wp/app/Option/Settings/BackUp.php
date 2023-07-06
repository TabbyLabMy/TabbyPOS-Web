<?php 

   // backup option
   CSF::createSection( APPIE_OPTION_KEY, array(
           
    'title'  => esc_html__( 'Backup Options', 'appie' ),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(
        array(
            'id'    => 'backup_options',
            'type'  => 'backup',
            'title' => esc_html__( 'Backup Your All Options', 'appie' ),
            'desc'  => esc_html__( 'If you want to take backup your option you can backup here.', 'appie' ),
        ),
    ),
) );