<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    //Relaciones uno a muchos inversas

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relaciones muchos a muchos

    public function tags(){
       return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a muchos polimorfica

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
