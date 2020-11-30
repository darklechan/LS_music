<?php

use App\Http\Controllers\LSController;
use App\Models\Song;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', 'LSController@home');
// Route::get('/home', 'LSController@home');
// Route::get('/contact', 'LSController@contact');
// Route::get('/add', 'LSController@add');
// Route::get('/update', 'LSController@update');

Route::get('/', [LSController::class, 'home']);
Route::get('/home', [LSController::class, 'home']);
Route::get('/contact', [LSController::class, 'contact']);
Route::get('/add', [LSController::class, 'add']);
Route::get('/update', [LSController::class, 'update']);




// Route::get('/test', function(){
//     $songs = Song::all();
//     foreach($songs as $song) {
//         echo $song->Titulo . "<br>";
//     }
// });
