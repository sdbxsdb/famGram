<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ThanksForSigningUp_noreply;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
    ROUTE ORDER IS IMPORTANT - ANYTHING WITH VARIABLE SHOULD GO LAST
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/email', function () {
    return new ThanksForSigningUp_noreply(); 
});


Route::POST('follow/{user}', 'App\Http\Controllers\FollowsController@store');

Route::get('/', 'App\Http\Controllers\PostsController@index');
Route::get('/p/create', 'App\Http\Controllers\PostsController@create');
Route::POST('/p', 'App\Http\Controllers\PostsController@store');
Route::get('/p/{post}', 'App\Http\Controllers\PostsController@show');



Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::PATCH('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');
