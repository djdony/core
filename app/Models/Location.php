<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

/**
 * Class Location
 * @package App\Models
 * @version September 4, 2020, 2:40 pm UTC
 *
 * @property string $name
 * @property string $type
 * @property string $code
 */
class Location extends Model
{
    use SoftDeletes,  NodeTrait;

    public $table = 'locations';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'type',
        'code',
        'lat',
        'lon',
        'parent_id'
    ];

    const COUNTRY = 1;
    const REGION = 2;
    const CITY = 3;
    const AIRPORT = 4;
    const SUBREGION = 5;
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'integer',
        'parent_id' => 'integer',
        'code' => 'string',
        'lat' => 'string',
        'lon' => 'string'
    ];




}
