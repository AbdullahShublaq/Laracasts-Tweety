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
    return view('welcome');
});

Route::middleware('auth')->group(function (){
    //tweets
    Route::get('tweets', 'TweetsController@index')->name('home');
    Route::get('tweets/{tweet:id}', 'TweetsController@show');
    Route::post('tweets', 'TweetsController@store');
    Route::delete('tweets/{tweet:id}', 'TweetsController@destroy')->middleware('can:destroy,tweet');

    Route::post('tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('tweets/{tweet}/like', 'TweetLikesController@destroy');

    Route::post('tweets/{tweet}/comment', 'TweetCommentsController@store');
    Route::delete('tweets/{tweet}/comment/{comment}', 'TweetCommentsController@destroy')->middleware('can:destroy,comment');

    //profiles
    Route::get('profiles/{user:username}', 'ProfilesController@show')->name('profile');
    Route::post('profiles/{user:username}/follow', 'FollowsController@store')->name('follow');
    Route::get('profiles/{user:username}/edit', 'ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('profiles/{user:username}', 'ProfilesController@update')->middleware('can:edit,user');

    //explore
    Route::get('explore', 'ExploreController@index');
});

Auth::routes(['reset' => FALSE]);