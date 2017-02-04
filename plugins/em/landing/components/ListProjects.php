<?php namespace Em\Landing\Components;

use Cms\Classes\ComponentBase;
use Em\Landing\Models\Project;

class ListProjects extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'ListProjects Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['projects'] = Project::all();
    }
}