<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Models\User;
use App\Models\Country;
use App\Models\Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', function () {
    //     return view('welcome');
// });
    
    
// for one to one relation
Route::get('/data', [IndexController::class, 'index']);

// many to many relation

// this route for get the data first from the user then role function
// Route::get('/roles',function() {  
    //     return User::with('role')->get();   
    // }); 

// this route for get the data first from the role then user function
Route::get('/roles',function() {  
    return Role::with('user')->get();   
}); 

/// haas many through 
Route::get('/user/country',function()  
{  
  
   return Country::find(1)->posts;  
});  