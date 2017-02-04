<?php namespace Em\Landing\Components;

use Cms\Classes\ComponentBase;
use Em\Landing\Models\Advantage;

class ListAdvantages extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'ListAdvantages Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['advantages'] = Advantage::all();
    }
}
