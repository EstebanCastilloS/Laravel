<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //relacion polimorfica image
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
