<?php

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


Route::get('/', 'JokesController@index');

Route::resource('jokes', 'JokesController');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('/profile', 'ProfileController');

    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

// redirect to home if route does not exist
Route::fallback(function(){
    return redirect('/');
});