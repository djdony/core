<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = [
      'imageable_id',
      'imageable_type',
      'url',
    ];

    protected $keyType = 'string';

    protected $dates = ['deleted_at'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
