<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;

    //proteccion de campos
    public $table = 'posts';
    protected $primaryKey = 'id';
    public $timestamps = True;

    protected $fillable =
    [
        'title',
        'slug',
        'excerpt',
        'body',
        'image_path',
        'published',
        'category_id',
        'user_id',
        'published_at',

    ];

    protected function title(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => ucfirst($value)
        );
    }

    protected function image(): Attribute
    {
        return new Attribute(
            get: fn() => $this->image_path ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ54lyv7VkhG0YO4R5Jr3dSiwoZbSwVrFgUWw&usqp=CAU'
        );
    }


    protected $guarded = ['id'];

    //relacion uno a muchos inversa con usuarios
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos inversa con categorias
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //relacion muchos a muchos  polimorfica con tags
    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }

    //relacion uno a muchos polimorfica con comments
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }


}



