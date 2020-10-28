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

<<<<<<< HEAD
Route::get('/admin/{id}', 'App\Http\Controllers\prodeditController@edit')->name('gestion');

Route::get('/index', 'App\Http\Controllers\ProductosController@inicio');
=======
Route::get('/{id}', 'App\Http\Controllers\prodeditController@edit');

>>>>>>> 435904debbe3c16cd12fc6cde27e951964dc28d2

Route::get('admin', 'App\Http\Controllers\adminController@admin');

Route::get('productos', 'App\Http\Controllers\ProductosController@inicio');

<<<<<<< HEAD

/*Route::get('inicio', function () {
=======
Route::get('/', function () {
>>>>>>> 435904debbe3c16cd12fc6cde27e951964dc28d2
    return view('index');
});
