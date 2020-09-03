<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Setting
 * @package App\Models
 * @version September 3, 2020, 10:30 am UTC
 *
 * @property string $title
 * @property string $about
 * @property string $service_title
 * @property json $services
 * @property string $contact_title
 * @property string $address
 * @property email $email
 * @property string $phone
 */
class Setting extends Model
{
    use SoftDeletes;

    public $table = 'settings';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'about',
        'service_title',
        'services',
        'contact_title',
        'address',
        'email',
        'phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'about' => 'string',
        'service_title' => 'string',
        'contact_title' => 'string',
        'address' => 'string',
        'phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'about' => 'required',
        'service_title' => 'required',
        'contact_title' => 'required',
        'address' => 'required',
    ];


}
