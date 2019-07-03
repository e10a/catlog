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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pets', 'PetsController');
Route::resource('activity', 'ActivityController');
// Route::get('/activity', 'ActivityController@index');
// Route::get('/pets', 'PetsController@index');
// Route::post('/pets', 'PetsController@store');
// Route::get('/pets/create', 'PetsController@create');
