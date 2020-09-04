<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CarType
 * @package App\Models
 * @version September 4, 2020, 10:44 am UTC
 *
 * @property string $name
 */
class CarType extends Model
{
    use SoftDeletes;

    public $table = 'car_types';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique:car_types'
    ];

    public function car(){
        return $this->belongsTo('App\Models\Car');
    }


}
