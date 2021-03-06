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
Route::resource('projects','projectscontroller')->middleware('auth');
/*
Route::get('/projects','ProjectsController@index');
Route::get('/projects/create','ProjectsController@create');
Route::post('/projects','ProjectsController@store');
Route::patch('/projects/{project} ','ProjectsController@update');
Route::get('/projects/{project}/edit','ProjectsController@edit');
*/

Auth::routes();

Route::get('/home','HomeController@index')->name('home');