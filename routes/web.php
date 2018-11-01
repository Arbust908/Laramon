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

Route::get('/', 'WebController@inicio')->name('inicio');

Route::prefix('pokemon')->name('pokemon.')->group(function () {
    Route::get('/','Pokemon@todos')->name('todos');
    Route::get('/nuevo','Pokemon@nuevo')->name('nuevo');
    Route::post('/','Pokemon@guardar')->name('guardar');
    Route::get('/{pokemon}','Pokemon@uno')->name('uno');
    Route::get('/{pokemon}/editar','Pokemon@editar')->name('editar');
    Route::put('/{pokemon}', 'Pokemon@actualizar')->name('actualizar');
    Route::delete('/{pokemon}', 'Pokemon@borrar')->name('borrar');
});

Route::get('/type','TypeController@todos')->name('tipos');
Route::get('/type/{tipo}', 'TypeController@uno')->name('tipo');