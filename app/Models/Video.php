<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public $timstamps = false;
    protected $guards = [];

    function tags()
    {
        return $this->morphedByMany(Tag::class,'taggable');
    }
}
