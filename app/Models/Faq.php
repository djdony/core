<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Faq
 * @package App\Models
 * @version September 3, 2020, 4:03 pm UTC
 *
 * @property string $question
 * @property string $answer
 * @property number $type
 * @property number $sort_order
 */
class Faq extends Model
{
    use SoftDeletes;

    public $table = 'faqs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'question',
        'answer',
        'type',
        'sort_order'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question' => 'string',
        'answer' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'question' => 'required',
        'answer' => 'required'
    ];

    
}
