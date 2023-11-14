<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
       
        // return post::find(10)->getUser;
        // return User::with(['contact','post'])->find(1);
        
    }

}
