<?php

namespace Appie\Core\Hook;

require_once APPIE_THEME_DIR . '/app/Plugins/class-tgm-plugin-activation.php';
/**
 * Required_Plugins auto install.
 */
class Required_Plugins
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {

        add_action('tgmpa_register', [$this, 'register_required_plugins']);
    }

    public function register_required_plugins()
    {
        //required plugins

        $plugins = array(

            array(
                'name'     => esc_html__('Elementor', 'appie'),
                'slug'     => 'elementor',
                'required' => true,
            ),

            array(
                'name'     => esc_html__('Contact form 7', 'appie'),
                'slug'     => 'contact-form-7',
                'required' => true,
            ),
            array(
                'name'     => esc_html__('Mailchimp', 'appie'),
                'slug'     => 'mailchimp-for-wp',
                'required' => true,
            ),
            array(
                'name'         => esc_html__('Unyson', 'appie'),
                'slug'         => 'unyson',
                'required'     => true,
                'source'     => 'https://github.com/quomodosoftbd/unyson/archive/refs/heads/main.zip',
            ),
            array(
                'name'     => esc_html__('Classic editor', 'appie'),
                'slug'     => 'classic-editor',
                'required' => true,
            ),
            array(
                'name'     => esc_html__('WooCommerce', 'appie'),
                'slug'     => 'woocommerce',
                'required' => false,
            ),
            array(
                'name'     => esc_html__('ElementsReady Lite', 'appie'),
                'slug'     => 'element-ready-lite',
                'required' => true

            ),
            array(
                'name'     => esc_html__('Appie Essentials', 'appie'),
                'slug'     => 'appie-essential',
                'required' => true,
                'source'   => get_template_directory() . '/app/Plugins/archive/appie-essential.zip', // The plugin source.
            ),
            array(
                'name'     => esc_html__('Quomodo Core', 'appie'),
                'slug'     => 'quomodo-core',
                'required' => true,
                'source'   => get_template_directory() . '/app/Plugins/archive/quomodo-core.zip', // The plugin source.
            )
        );

        $config = array(
            'id'           => 'appie',                   // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => '',                       // Default absolute path to bundled plugins.
            'menu'         => 'appie-install-plugins',   // Menu slug.
            'parent_slug'  => 'themes.php',             // Parent menu slug.
            'capability'   => 'edit_theme_options',     // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
            'has_notices'  => true,                     // Show admin notices or not.
            'dismissable'  => true,                     // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                       // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => true,                     // Automatically activate plugins after installation or not.
            'message'      => '',                       // Message to output right before the plugins table.
        );

        tgmpa($plugins, $config);
    }
}
