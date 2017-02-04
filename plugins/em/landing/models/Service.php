<?php namespace Em\Landing\Models;

use Model;

/**
 * Model
 */
class Service extends Model
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
    public $table = 'em_landing_service';

    public $attachOne = [
        'img' => 'System\Models\File'
    ];
}