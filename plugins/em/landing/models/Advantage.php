<?php namespace Em\Landing\Models;

use Model;

/**
 * Model
 */
class Advantage extends Model
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
    public $table = 'em_landing_advantages';

    public $attachOne = [
        'img' => 'System\Models\File'
    ];
}