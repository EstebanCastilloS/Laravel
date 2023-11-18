<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    //proteccion de campos
    public $table = 'members';
    protected $primaryKey = 'id';
    public $timestamps = True;

    protected $fillable =
    [
        'name',

    ];
    protected $guarded = ['id'];
}
