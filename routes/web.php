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

Route::resource('Proyecto', 'ListProfessorController');

Route::post('Proyecto/update/{id}', 'ListProfessorController@update');

Route::get('Proyecto/destroy/{id}', 'ListProfessorController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Detalle de curriculum por profesor.
Route::get('home/{professor}/detalles', 'CurriculumProfessorController@data');
Route::post('home/{professor}/detalles', 'CurriculumProfessorController@store');
