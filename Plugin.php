<?php namespace Dimti\Bettersettings;

use Backend;
use System\Classes\PluginBase;

/**
 * bettersettings Plugin Information File
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
            'name'        => 'bettersettings',
            'description' => 'No description provided yet...',
            'author'      => 'dimti',
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
        return []; // Remove this line to activate

        return [
            'Dimti\Bettersettings\Components\MyComponent' => 'myComponent',
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
            'dimti.bettersettings.some_permission' => [
                'tab' => 'bettersettings',
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
            'bettersettings' => [
                'label'       => 'bettersettings',
                'url'         => Backend::url('dimti/bettersettings/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['dimti.bettersettings.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'filters'   => [

            ],
            'functions' => [
                /**
                 * @param string|object $class
                 * @param string $constant
                 * @return mixed
                 * @author Eduard Termiyants
                 * @desc Get value of class constant
                 */
                'getClassConstant'          => function ($class, $constant) {
                    return constant((is_object($class) ? get_class($class) : $class) . "::$constant");
                },
            ],
        ];
    }

}
