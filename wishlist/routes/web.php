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

use App\Http\Controllers\wishController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/wishlist', 'wishController@index');

Route::get('/editwishlist', function () {
    return view('editWishlist');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/wish/{id}/edit', 'wishController@edit');
Route::put('/wish/{id}', 'wishController@update');
Route::post('/wish', 'wishController@store');

Route::get('/delete/{id}', 'wishController@delete');
