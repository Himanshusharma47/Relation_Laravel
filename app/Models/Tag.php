<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guards = [];
    public $timstamps = false;

    function taggable()
    {
        return $this->morphedByMany(User::class,'taggable');
    }

}
