<?php namespace Em\Landing\Components;

use Cms\Classes\ComponentBase;
use Em\Landing\Models\Service;

class ListServices extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'ListServices Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['services'] = Service::all();
    }
}
