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

Route::get('/', 'WebController@home');

Route::prefix('pokemon')->name('pokemon.')->group(function () {
    Route::get('/','Pokemon@index')->name('pokemons');
    Route::get('/new','Pokemon@create')->name('newpokemon');
    Route::post('/','Pokemon@store')->name('storepokemon');
    Route::get('/{pokemon}','Pokemon@show')->name('pokemon');
    Route::get('/{pokemon}/edit','Pokemon@edit')->name('editpokemon');
    Route::put('/{pokemon}','Pokemon@update')->name('updatepokemon');
    Route::delete('/{pokemon}','Pokemon@desroyt')->name('deletepokemon');

});

Route::get('/type','TypeController@index')->name('types');
Route::get('/type/{type}','TypeController@show')->name('type');