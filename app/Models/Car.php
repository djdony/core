<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Car
 * @package App\Models
 * @version September 4, 2020, 11:03 am UTC
 *
 * @property \App\Models\CarType $carType
 * @property max_luggage integer:unsigned number
 * @property string $name
 * @property integer $car_type_id
 * @property integer $max_pax
 * @property integer $max_luggage
 * @property string $description
 */
class Car extends Model
{
    use SoftDeletes;

    public $table = 'cars';

    protected $keyType = 'string';

    protected $dates = ['deleted_at'];

    protected $with = ['images'];

    public $fillable = [
        'name',
        'car_type_id',
        'max_pax',
        'max_luggage',
        'description',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'car_type_id' => 'integer',
        'max_pax' => 'integer',
        'max_luggage' => 'integer',
        'description' => 'string'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToOne
     **/
    public function carType()
    {
        return $this->belongsTo('App\Models\CarType');
    }

    public function images()
    {
        return $this->morphMany('App\Models\Image','imageable');
    }
}
