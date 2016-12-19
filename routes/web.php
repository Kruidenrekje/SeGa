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
    return view('categories');
});

Auth::routes();
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/mechanics', 'MechanicsController@index')->name('mechanics');
Route::get('/mechanics/new', 'MechanicsController@create')->name('create-mechanic');
Route::post('mechanics/new','MechanicsController@store');

Route::get('/mechanic/{id}/edit', 'MechanicsController@edit')->name('edit-mechanic');
Route::put('mechanics/{id}', 'MechanicsController@update')->name('update-mechanic');
Route::delete('/mechanics/destroy/{id}', 'MechanicsController@destroy')->name('destroy-mechanic');

Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::get('/projects/new', 'ProjectsController@create')->name('create-project');
Route::post('/projects/new', 'ProjectsController@store');
