<?php namespace Kurt\Test;

use Backend;
use System\Classes\PluginBase;

/**
 * Test Plugin Information File
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
            'name' => 'Test',
            'description' => 'No description provided yet...',
            'author' => 'Kurt',
            'icon' => 'icon-leaf',
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Kurt\Test\Components\Rrdate' => 'Rrdate',
            'Kurt\Test\Components\Flux' => 'Flux',
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
            'kurt.test.some_permission' => [
                'tab' => 'Test',
                'label' => 'Some permission',
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
            'test' => [
                'label' => 'Test',
                'url' => Backend::url('kurt/test/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['kurt.test.*'],
                'order' => 500,
            ],
        ];
    }

}
