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


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Frontend'],function () {
    //testing
    Route::get('/test','RequestController@goTest')->name('test');
    Route::post('/testing','RequestController@processTest')->name('testing');
});
Auth::routes();

Route::group(['namespace' => 'Backend','middleware' => ['web','isAdmin']],function () {
    
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
    
    //Administrador de documentos
    Route::get('administrador/documentos','DocumentsController@index')->name('admin/documents');
    Route::get('administrador/documentos/{id}/{parentId}','DocumentsController@folders')->name('admin/documents/');
    Route::post('administrador/documentos/nueva-carpeta','DocumentsController@addFolder')->name('admin/documents/add-folder');
    Route::post('administrador/documentos/nuevo-archivo','DocumentsController@addFile')->name('admin/documents/add-file');
    Route::get('administrador/documentos/descarga/{id}','DocumentsController@download')->name('admin/documents/download/');
    
    
    
});


//EXTERNAL
Route::group(['namespace' => 'Frontend','middleware' => ['auth','web']],function () {
    
    Route::get('/cerrar-sesion','HomeController@logout')->name('logout');
    Route::get('/', 'HomeController@index')->name('/');
    
    //Request
    Route::post('/peticion/crear','RequestController@start')->name('request/start');
    Route::get('/peticion/crear','HomeController@index')->name('request/start');
    
    Route::post('/peticion/buscar','RequestController@search')->name('request/search');
    Route::get('/peticion/buscar','HomeController@index')->name('request/search');
    Route::get('/peticion/regresar/{lastStep}','RequestController@return')->name('request/return/');
    
    //Datos Basicos
    Route::get('/peticion/{serviceRequestId}/datos-basicos','RequestController@goBasicData')->name('request/basic-data/');
    Route::post('/peticion/{serviceRequestId}/datos-basicos','RequestController@processBasicData')->name('request/basic-data');
    
    //Imprimir
    Route::get('/peticion/{serviceRequestId}/imprimir','RequestController@goPrint')->name('request/print/');
    
     // Ajax request
    Route::get('/peticion/campos-valoracion-visual/{visualValueFieldId}','RequestController@getVisualValueFields')->name('request/inspection/visual-value-fields/');
    
    Route::get('/peticion/modelos/{brandId}','RequestController@getModels')->name('request/get-models/');
    
    Route::get('/peticion/cilindrajes/modelo/{model}/marca/{brandId}','RequestController@getCylinders')->name('request/get-cylinders/');
    
    Route::get('/peticion/servicio/modelo/{model}/marca/{brandId}/cilindraje/{cylinderId}','RequestController@getVehicleServices')->name('request/get-vehicle-service/');
    
    Route::get('/peticion/combustible/modelo/{model}/marca/{brandId}/cilindraje/{cylinderId}/servicio/{vehicleServiceId}','RequestController@getFuelTypes')->name('request/get-fuel-types/');
    
    Route::get('/peticion/servicios/actuales/placa/{plate}','RequestController@getCurrentServices')->name('request/get-current-services/');
     Route::get('/peticion/servicio/placa/{plate}','RequestController@getServices')->name('request/get-services/');
     Route::get('/peticion/referencia/{firstReference}/solicitud/{serviceRequestId}','RequestController@getReferences')->name('request/get-references/');
     Route::get('/peticion/fasecolda/referencia1/{firstReference}/referencia2/{secondReference}/solicitud/{serviceRequestId}','RequestController@getFasecolda')->name('request/get-fasecolda/');
     Route::get('/peticion/clases/modelo/{model}/marca/{brandId}/cilindraje/{cylinderId}/servicio/{serviceId}/combustible/{fuelType}','RequestController@getvehicleClasses')->name('request/get-vehicle-classes/');
    //Servicios Actuales
    Route::get('/servicios-actuales/','HomeController@index')->name('current-services');
    Route::post('/servicios-actuales/','RequestController@goCurrentServices')->name('current-services/');
    
    //Busqueda por placa
    Route::get('/consulta-placa/','HomeController@index')->name('plate-search');
    Route::post('/consulta-placa/','RequestController@goPlateSearch')->name('plate-search/');
});

//EXCLUDE EXTERNAL AND INTERNAL
Route::group(['namespace' => 'Frontend','middleware' => ['auth','web','excludeExternal','excludeInternal']],function () {
    
    //Datos Complementarios
    Route::get('/peticion/{serviceRequestId}/datos-complementarios','RequestController@goComplementaryData')->name('request/complementary-data/');
    Route::post('/peticion/{serviceRequestId}/datos-complementarios','RequestController@processComplementaryData')->name('request/complementary-data');
    
     //RTC
    Route::get('/peticion/{serviceRequestId}/rtc','RequestController@goRTC')->name('request/rtc/');
    Route::post('/peticion/{serviceRequestId}/rtc','RequestController@processRTC')->name('request/rtc');
    
    
    //Inspección
    Route::get('/peticion/{serviceRequestId}/inspection','RequestController@goInspection')->name('request/inspection/');
    Route::post('/peticion/{serviceRequestId}/inspection','RequestController@processInspection')->name('request/inspection');
    
});

//EXCLUDE EXTERNAL
Route::group(['namespace' => 'Frontend','middleware' => ['auth','web','excludeExternal']],function () {
    
    //Regrabación
    Route::get('/peticion/{serviceRequestId}/regrabacion','RequestController@goRecording')->name('request/recording/');
    Route::post('/peticion/{serviceRequestId}/regrabacion','RequestController@processRecording')->name('request/recording');
    
    
    
    
   
  
});

//CONTROL
Route::group(['namespace' => 'Frontend','middleware' => ['auth','web','isController']],function(){
    
    //Control
    Route::get('/peticion/{serviceRequestId}/control','RequestController@goControl')->name('request/control/')->middleware('excludeInspector');
    Route::post('/peticion/{serviceRequestId}/control','RequestController@processControl')->name('request/control')->middleware('excludeInspector');
});

