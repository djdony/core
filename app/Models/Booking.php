<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    public $table = 'bookings';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'from',
        'to',
        'date',
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
