<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    function getUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function image()
    {
        // return $this->morphOne(Image::class,'imagable'); // for one to one (poly)
        return $this->morphMany(Image::class,'imagable'); // for one to many (poly)
    }

    function tags()
    {
        return $this->morphedByMany(Tag::class,'taggable');
    }
}
