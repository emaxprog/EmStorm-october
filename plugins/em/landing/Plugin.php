<?php namespace Em\Landing;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Em\Landing\Components\ListSlides' => 'listSlides',
            'Em\Landing\Components\ListServices' => 'listServices',
            'Em\Landing\Components\ListProjects' => 'listProjects',
            'Em\Landing\Components\ListAdvantages' => 'listAdvantages',
        ];
    }

    public function registerSettings()
    {
    }
}
