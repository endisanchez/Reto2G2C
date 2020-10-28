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

Route::get('/admin/{id}', 'App\Http\Controllers\prodeditController@edit')->name('gestion');

Route::get('/index', 'App\Http\Controllers\ProductosController@inicio');

Route::get('admin', 'App\Http\Controllers\adminController@admin');



/*Route::get('inicio', function () {
    return view('index');
});*/


