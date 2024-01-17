<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //agregar campos a la tabla

    protected $fillable = [
        'url',
        'imageable_id',
        'imageable_type'
    ];

    //protected $guarded = [];


    public function imageable()
    {
        return $this->morphTo();
    }
}
