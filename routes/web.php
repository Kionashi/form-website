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
    Route::get('/peticion/regresar/{lastStep}','RequestController@return')->name('request/return/');
    
    //Datos Basicos
    Route::get('/peticion/{serviceRequestId}/datos-basicos','RequestController@goBasicData')->name('request/basic-data/');
    Route::post('/peticion/datos-basicos','RequestController@processBasicData')->name('request/basic-data');
    
    //Datos Complementarios
    Route::get('/peticion/{serviceRequestId}/datos-complementarios','RequestController@goComplementaryData')->name('request/complementary-data/');
    Route::post('/peticion/datos-complementarios','RequestController@processComplementaryData')->name('request/complementary-data');
    Route::post('/peticion/datos-complementarios/nuevo-color','RequestController@addColor')->name('request/complementary-data/add-color');
    
    //Regrabación
    Route::get('/peticion/{serviceRequestId}/regrabacion','RequestController@goRecording')->name('request/recording/');
    Route::post('/peticion/regrabacion','RequestController@processRecording')->name('request/recording');
    
    //Controru
    Route::get('/peticion/{serviceRequestId}/control','RequestController@goControl')->name('request/control/');
    Route::post('/peticion/control','RequestController@processControl')->name('request/control');
    
     //RTC
    Route::get('/peticion/{serviceRequestId}/rtc','RequestController@goRTC')->name('request/rtc/');
    Route::post('/peticion/rtc','RequestController@processRTC')->name('request/rtc');
    
    //Imprimir
    Route::get('/peticion/{serviceRequestId}/imprimir','RequestController@goPrint')->name('request/print/');
    
    //Inspección
    Route::get('/peticion/{serviceRequestId}/inspection','RequestController@goInspection')->name('request/inspection/');
    Route::post('/peticion/inspection','RequestController@processInspection')->name('request/inspection');
    
    //Peticiones Ajax
    Route::get('/peticion/campos-valoracion-visual/{visualValueFieldId}','RequestController@getVisualValueFields')->name('request/inspection/visual-value-fields/');
    Route::get('/peticion/modelos/{brandId}','RequestController@getModels')->name('request/get-models/');
    Route::get('/peticion/cilindrajes/modelo/{model}/marca/{brandId}','RequestController@getCylinders')->name('request/get-cylinders/');
    Route::get('/peticion/servicio/modelo/{model}/marca/{brandId}/cilindraje/{cylinderId}','RequestController@getVehicleService')->name('request/get-vehicle-service/');
    Route::get('/peticion/combustible/modelo/{model}/marca/{brandId}/cilindraje/{cylinderId}/servicio/{vehicleServiceId}','RequestController@getFuelTypes')->name('request/get-fuel-types/');
    
    //Servicios Actuales
    Route::post('/servicios-actuales/','RequestController@goCurrentServices')->name('current-services/');
    
    //Servicios Actuales
    Route::post('/consulta-placa/','RequestController@goPlateSearch')->name('plate-search/');
    
    //testing
    Route::get('/test','RequestController@goTest')->name('test');
    Route::post('/testing','RequestController@processTest')->name('testing');
});