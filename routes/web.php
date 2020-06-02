<?php

use Illuminate\Support\Facades\Route;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
   $users = User::all();
   $user_names = $users->name;
   echo $users_names;
});

Route::get('/messages/{userId}', function($userId){
    $user = User::find($userId);
    return response()->json($user, 200);;
});

// Route::post('/send/{userId}', function($userId){
    
//     $user = User::find($userId);
//     $user->messages = ;
// })