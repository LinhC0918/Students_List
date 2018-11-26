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

//Route::post('/sendEmail', 'EmailController@sendEmail')->name('sendEmail');

Route::group(['prefix' => 'students'], function () {

    Route::get('/', 'StudentsController@index')->name('students.index');

    Route::get('/create', 'StudentsController@create')->name('students.create');

    Route::post('/create', 'StudentsController@store')->name('students.store');

    Route::get('/{id}/edit', 'StudentsController@edit')->name('students.edit');

    Route::post('/{id}/edit', 'StudentsController@update')->name('students.update');

    Route::get('/{id}/destroy', 'StudentsController@destroy')->name('students.destroy');

    Route::get('/filter', 'StudentsController@filterByCity')->name('students.filterByCity');

    Route::get('/search', 'StudentsController@search')->name('students.search');

    Route::get('/export','StudentsController@export')->name('students.export');
});
