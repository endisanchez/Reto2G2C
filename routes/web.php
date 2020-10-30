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

Route::get('/admin/{id}', 'App\Http\Controllers\ProductosController@edit')->name('gestion');
Route::put('/admin/{id}', 'App\Http\Controllers\ProductosController@updateProd')->name('update');

Route::get('admin', 'App\Http\Controllers\ProductosController@admin');

Route::get('productos', 'App\Http\Controllers\ProductosController@inicio');
Route::post('productos', 'App\Http\Controllers\ProductosController@productosPorTienda')->name('prodTiendas');

Route::post('index', 'App\Http\Controllers\ProductosController@crear')->name('crearprod');

Route::delete('/productos/{id}', 'App\Http\Controllers\ProductosController@eliminar')->name('eliminarProd');

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});
