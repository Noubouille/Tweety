<?php

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

Route::get('/', function () {
    return redirect("/tweets");
});

Route::middleware('auth')->group(function() {
    Route::get('/tweets', 'App\Http\Controllers\TweetController@index')->name('home');
    Route::post('/tweets', 'App\Http\Controllers\TweetController@store');
    Route::post("/profiles/{user:username}/follow", 'App\Http\Controllers\FollowsController@store');
    Route::get("/profiles/{user:username}/edit", 'App\Http\Controllers\ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'App\Http\Controllers\ProfilesController@update')->middleware('can:edit,user');
    Route::get('/explore', "App\Http\Controllers\ExploreController");

    Route::post('/tweets/{tweet}/like', "App\Http\Controllers\TweetLikesController@store");
    Route::delete('/tweets/{tweet}/like', "App\Http\Controllers\TweetLikesController@destroy");
});

Route::get('profiles/{user:username}', 'App\Http\Controllers\ProfilesController@show')->name('profile');

Auth::routes();
