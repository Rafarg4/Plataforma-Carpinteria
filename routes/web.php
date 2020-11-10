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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
Route::resource('users', 'UserController')->middleware('auth');
Route::resource('venta', 'VentaController')->names('ventas')->middleware('auth');

Route::get('/venta/pdf/{id}', 'VentaController@pdf')->name('pdf');
Route::resource('cliente', 'ClienteController')->names('clientes')->middleware('auth');

Route::resource('transferencias', 'TransferenciaController')->middleware('auth');

Route::resource('depositos', 'DepositoController')->middleware('auth');

Route::resource('stocks', 'StockController')->middleware('auth');

Route::resource('categorias', 'CategoriaController');

Route::resource('proveedors', 'ProveedorController');

Route::resource('productos', 'ProductoController');

Route::resource('compras', 'CompraController');

