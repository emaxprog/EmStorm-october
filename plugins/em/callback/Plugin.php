<?php namespace Em\Callback;

use Backend;
use System\Classes\PluginBase;

/**
 * Callback Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Callback',
            'description' => 'No description provided yet...',
            'author'      => 'Em',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Em\Callback\Components\ContactForm' => 'contactForm',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'em.callback.some_permission' => [
                'tab' => 'Callback',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'callback' => [
                'label'       => 'Callback',
                'url'         => Backend::url('em/callback/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['em.callback.*'],
                'order'       => 500,
            ],
        ];
    }
}
