<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'MaintenanceController@index')->name('home');

Route::group(['prefix' => 'veiculo'], function () {
    Route::get('/', 'VehicleController@index')->name('vehicles.list');
    Route::get('/editar/{id}', 'VehicleController@edit')->name('vehicles.edit');
    Route::put('/alterar/{id}', 'VehicleController@update')->name('vehicles.update');
    Route::get('/novo', 'VehicleController@create')->name('vehicles.create');
    Route::post('/salvar', 'VehicleController@store')->name('vehicles.store');
    Route::get('/delete/{id}', 'VehicleController@destroy')->name('vehicles.destroy');
});

Route::group(['prefix' => 'manutencao'], function () {
    Route::get('/', 'MaintenanceController@index')->name('maintances.list');
    Route::get('/novo', 'MaintenanceController@create')->name('maintances.create');
});


