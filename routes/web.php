<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
    return view('inicio');
});

Route::get('/bienvenidos', function () {
    return view('inicio');
});

Route::get('/producto', function () {
    return view('producto');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/usuario', function () {
    return view('usuario');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});



Route::get('/pedido', function () {
    return view('pedido');
});

Route::post('/usuario',[MainController::class,"store"]);

Route::post('/catalogo',[MainController::class,"storePedido"]);
    

