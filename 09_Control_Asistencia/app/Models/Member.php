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
        'full_name',
        'address',
        'phone',
        'birthdate',
        'gender',
        'email',
        'status',
        'ministry',
        'photo',
        'date_admission',
    ];
    protected $guarded = ['id'];
}
