<?php namespace Em\Landing\Models;

use Model;

/**
 * Model
 */
class Slider extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'em_landing_slider';

    public $attachOne = [
        'slide' => 'System\Models\File'
    ];
}