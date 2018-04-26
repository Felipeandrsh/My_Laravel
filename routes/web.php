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


Route::get('/',['as'=>'home', 'uses'=>'UsersController@home']);

//Usuarios.

Route::get('usuario/index',['as'=>'user.index', 'uses'=>'UsersController@index']);
Route::get('usuario/create',['as'=>'user.create', 'uses'=>'UsersController@create']);
Route::post('usuario',['as'=>'user.store', 'uses'=>'UsersController@store']);
Route::get('usuario/{id}/edit',['as'=>'user.edit', 'uses'=>'UsersController@edit']);
Route::get('usuario/{id}',['as'=>'user.show', 'uses'=>'UsersController@show']);
Route::put('usuario/{id}',['as'=>'user.update', 'uses'=>'UsersController@update']);
Route::delete('usuario/{id}',['as'=>'user.destroy', 'uses'=>'UsersController@destroy']);
