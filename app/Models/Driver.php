<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Driver
 * @package App\Models
 * @version September 4, 2020, 3:07 pm UTC
 *
 * @property string $name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 */
class Driver extends Model
{
    use SoftDeletes;

    public $table = 'drivers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'last_name',
        'phone',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'last_name' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
