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

// Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::prefix('home')->group(function () {
    Route::get('/', [
        'as' => 'home.index',
        'uses' => 'App\Http\Controllers\HomeController@index'
    ]);
    //gotoviewtheem
    
});

Route::prefix('artist')->group(function () {
    Route::get('/', [
        'as' => 'artist.index',
        'uses' => 'App\Http\Controllers\ArtistController@index'
    ]);
    //gotoviewtheem
    
});

Route::prefix('genres')->group(function () {
    Route::get('/', [
        'as' => 'genres.index',
        'uses' => 'App\Http\Controllers\GenresController@index'
    ]);
    //gotoviewtheem
    
});