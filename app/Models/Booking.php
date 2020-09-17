<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Booking
 * @package App\Models
 * @version September 15, 2020, 12:40 am UTC
 *
 * @property \App\Models\ $
 * @property \App\Models\ $1
 * @property 1t1 Customer
 * @property integer $from
 * @property integer $to
 * @property string $date
 * @property time $time
 * @property string $flight
 * @property tinyinteger $type
 * @property integer $customer_id
 * @property string $info
 */
class Booking extends Model
{
    use SoftDeletes;

    public $table = 'bookings';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'from',
        'to',
        'date',
        'time',
        'flight',
        'type',
        'customer_id',
        'info'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'from' => 'integer',
        'to' => 'integer',
        'date' => 'date',
        'flight' => 'string',
        'customer_id' => 'integer',
        'info' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'from' => 'required',
        'to' => 'required',
        'date' => 'required'
    ];

    public function from()
    {
        return $this->belongsTo('App\Models\Location');
    }
    public function to()
    {
        return $this->belongsTo('App\Models\Location');
    }
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

}
