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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Backend','middleware' => ['web']],function () {
    
    Route::get('/administrador', 'HomeController@index')->name('admin');
    
    //Usuario
    Route::get('/administrador/usuarios', 'UsersController@index')->name('admin/users');
    Route::get('/administrador/usuarios/{id}', 'UsersController@show')->name('admin/user/');
    Route::get('/administrador/usuarios/eliminar/{id}', 'UsersController@delete')->name('admin/user/delete/');
    Route::get('/administrador/usuario/crear', 'UsersController@create')->name('admin/user/create');
    Route::post('/administrador/usuario/registro', 'UsersController@register')->name('admin/user/register');
    Route::get('/administrador/usuario/editar/{id}', 'UsersController@update')->name('admin/user/update/');
    Route::post('/administrador/usuario/editar', 'UsersController@edit')->name('admin/user/edit/');
    Route::post('/administrador/usuario/cambiar-contrasena', 'UsersController@editPassword')->name('admin/user/edit-password/');
    Route::get('/administrador/usuario/cambiar-contrasena/{id}', 'UsersController@newPassword')->name('admin/user/new-password/');
    Route::post('/administrador/usuario/buscar', 'UsersController@search')->name('admin/user/search/');
    Route::get('/cerrar-sesion','UsersController@logout')->name('logout');

    
});
Route::group(['namespace' => 'Frontend','middleware' => ['auth','web']],function () {
    
    Route::get('/', 'HomeController@index')->name('/');
    
    //Request
    Route::post('/peticion/crear','RequestController@start')->name('request/start');
    Route::post('/peticion/buscar','RequestController@search')->name('request/search');
    Route::post('/peticion/datos-basicos','RequestController@basicData')->name('request/basic-data');
    Route::get('/peticion/regresar/{lastStep}','RequestController@return')->name('request/return/');
    
});