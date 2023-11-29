<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    use HasFactory;

    //proteccion de campos
    public $table = 'ministries';
    protected $primaryKey = 'id';
    public $timestamps = True;

    protected $fillable =
    [
        'name',
        'description',
        'status',
        'date_admission',
    ];
    protected $guarded = ['id'];
}
