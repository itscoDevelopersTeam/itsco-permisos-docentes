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

Route::middleware(['auth'])->group(function() {
    // Roles
    Route::get('roles', 'RoleController@index')->name('roles.index')->middleware('can:roles.index');
    Route::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('can:roles.create');
    Route::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('can:roles.create');
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')->middleware('can:roles.show');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('can:roles.edit');
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')->middleware('can:roles.edit');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('can:roles.destroy');

    // Areas
    Route::get('areas', 'AreaController@index')->name('areas.index')->middleware('can:areas.index');
    Route::get('areas/create', 'AreaController@create')->name('areas.create')->middleware('can:areas.create');
    Route::post('areas/store', 'AreaController@store')->name('areas.store')->middleware('can:areas.create');
    Route::get('areas/{area}', 'AreaController@show')->name('areas.show')->middleware('can:areas.show');
    Route::get('areas/{area}/edit', 'AreaController@edit')->name('areas.edit')->middleware('can:areas.edit');
    Route::put('areas/{area}', 'AreaController@update')->name('areas.update')->middleware('can:areas.edit');
    Route::delete('areas/{area}', 'AreaController@destroy')->name('areas.destroy')->middleware('can:areas.destroy');

    // Users
    Route::get('users', 'UserController@index')->name('users.index')->middleware('can:users.index');
    Route::get('users/create', 'UserController@create')->name('users.create')->middleware('can:users.create');
    Route::post('users/store', 'UserController@store')->name('users.store')->middleware('can:users.create');
    Route::get('users/{user}', 'UserController@show')->name('users.show')->middleware('can:users.show');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')->middleware('can:users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update')->middleware('can:users.edit');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')->middleware('can:users.destroy');

    // Solicitudes
    Route::get('solicitudes', 'SolicitudPermisoController@index')->name('solicitudes.index')->middleware('can:solicitudes.index');
    Route::get('solicitudes/create', 'SolicitudPermisoController@create')->name('solicitudes.create')->middleware('can:solicitudes.create');
    Route::post('solicitudes/store', 'SolicitudPermisoController@store')->name('solicitudes.store')->middleware('can:solicitudes.create');
    Route::get('solicitudes/{solicitudPermiso}', 'SolicitudPermisoController@show')->name('solicitudes.show')->middleware('can:solicitudes.show');
    Route::get('solicitudes/{solicitudPermiso}/edit', 'SolicitudPermisoController@edit')->name('solicitudes.edit')->middleware('can:solicitudes.edit');
    Route::put('solicitudes/{solicitudPermiso}', 'SolicitudPermisoController@update')->name('solicitudes.update')->middleware('can:solicitudes.edit');
    Route::delete('solicitudes/{solicitudPermiso}', 'SolicitudPermisoController@destroy')->name('solicitudes.destroy')->middleware('can:solicitudes.destroy');

    // Notificaciones
    Route::get('notificaciones', 'NotificacionController@index')->name('notificaciones.index')->middleware('can:notificaciones.index');
    Route::get('notificaciones/{notificacion}', 'NotificacionController@show')->name('notificaciones.show')->middleware('can:notificaciones.show');
    Route::delete('notificaciones/{notificacion}', 'NotificacionController@destroy')->name('notificaciones.destroy')->middleware('can:notificaciones.destroy');
});