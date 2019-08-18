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


Route::get('index2', function() {
    return view('index2');
});

Route::get('listarvehiculos','VehiculoController@index')->name('listarvehiculos');
Route::get('estadisticasvehiculos','VehiculoController@estadistica')->name('estadisticasvehiculos');
Route::get('registrarvehiculos','DuenoController@index')->name('registrarvehiculos');
Route::get('/{id}', 'DuenoController@show');
Route::resource('duenos', 'DuenoController');

