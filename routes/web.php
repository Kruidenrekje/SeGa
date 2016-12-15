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
    return view('home');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mechanics', 'MechanicsController@index')->name('mechanics');
Route::get('/mechanics/new', 'MechanicsController@create')->name('create-mechanic');
Route::get('/mechanic/{id}/edit', 'MechanicsController@edit')->name('edit-mechanic');
Route::get('/myprojects', 'MyProjectsController@index')->name('myprojects');
// Route::get('/myprojects/new', MyProjectsController@create)->name('create-project');
Route::post('mechanics/new','MechanicsController@store');
Route::delete('/mechanics/destroy/{id}', 'MechanicsController@destroy')->name('destroy-mechanic');
