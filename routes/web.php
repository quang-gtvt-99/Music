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

Route::get('/search', [
    'as' => 'home.search',
    'uses' => 'App\Http\Controllers\HomeController@getSearch'
]);

// Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::prefix('home')->group(function () {
    Route::get('/', [
        'as' => 'home.index',
        'uses' => 'App\Http\Controllers\HomeController@index'
    ]);
    
    
    
});

Route::prefix('artist')->group(function () {
    Route::get('/', [
        'as' => 'artist.index',
        'uses' => 'App\Http\Controllers\ArtistController@index'
    ]);
    
    Route::get('/detail/{id}', [
        'as' => 'artist.detail',
        'uses' => 'App\Http\Controllers\ArtistController@details'
    ]);
    
});

Route::prefix('genres')->group(function () {
    Route::get('/', [
        'as' => 'genres.index',
        'uses' => 'App\Http\Controllers\GenresController@index'
    ]);
    //gotoviewtheem
    
});

Route::prefix('topDL')->group(function () {
    Route::get('/', [
        'as' => 'topDL.index',
        'uses' => 'App\Http\Controllers\TDownloadController@index'
    ]);
    //gotoviewtheem
    
});

Route::prefix('album')->group(function () {
    Route::get('/', [
        'as' => 'album.index',
        'uses' => 'App\Http\Controllers\AlbumController@index'
    ]);
    //gotoviewtheem
    
});

Route::prefix('song')->group(function () {
    Route::get('/', [
        'as' => 'song.index',
        'uses' => 'App\Http\Controllers\SongController@index'
    ]);
    //gotoviewtheem
    
});