<?php namespace Em\Landing\Components;

use Cms\Classes\ComponentBase;
use Em\Landing\Models\Slider;

class ListSlides extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'ListSlides Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['slides'] = Slider::all();
    }
}
