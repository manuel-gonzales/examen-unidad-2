<?php

use Illuminate\Support\Facades\Route;

$controller_route = 'App\Http\Controllers\\';

Route::view('/', 'home')->name('home');

Route::get('ingreso', $controller_route.'AlumnosController@create')->name('ingreso');

Route::post('ingreso', $controller_route.'AlumnosController@store')->name('ingreso.store');

Route::get('listado', $controller_route.'AlumnosController@index')->name('listado');

Route::get('listado/{id}', $controller_route.'AlumnosController@show')->name('listado.show');