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
Route::get('/home', 'HomeController@index');
Route::get('/mechanics', 'MechanicsController@index')->name('mechanics');
Route::get('/mechanics/new', 'MechanicsController@create')->name('create-mechanic');
Route::get('/mechanics/edit', 'MechanicsController@edit')->name('edit-mechanic');

Route::post('mechanics/new','MechanicsController@store');
