<?php

use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SuscripcionController;
use App\Http\Controllers\SucursalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PostController::class,'index'])->name('posts.index');

Route::get('/crear-cuenta', [RegisterController::class,'index'])->name('register');
Route::post('/crear-cuenta', [RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::post('/logout',[LogoutController::class,'store'])->name('logout');


Route::get('/proveedor',[ProveedorController::class,'index'])->name('proveedores.index');
Route::get('/proveedor/create',[ProveedorController::class,'create'])->name('proveedores.create');
Route::post('/proveedor/store',[ProveedorController::class,'store'])->name('proveedores.store');

Route::get('/empresa',[EmpresaController::class,'index'])->name('empresas.index');
Route::get('/empresa/create',[EmpresaController::class,'create'])->name('empresas.create');
Route::post('/empresa/store',[EmpresaController::class,'store'])->name('empresas.store');

Route::get('/sucursal',[SucursalController::class,'index'])->name('sucursales.index');
Route::get('/sucursal/create',[SucursalController::class,'create'])->name('sucursales.create');
Route::post('/sucursal/store',[SucursalController::class,'store'])->name('sucursales.store');

Route::get('/almacen',[AlmacenController::class,'index'])->name('almacenes.index');
Route::get('/almacen/create',[AlmacenController::class,'create'])->name('almacenes.create');
Route::post('/almacen/store',[AlmacenController::class,'store'])->name('almacenes.store');

Route::get('/categoria',[CategoriaController::class,'index'])->name('categorias.index');
Route::get('/categoria/create',[CategoriaController::class,'create'])->name('categorias.create');
Route::post('/categoria/store',[CategoriaController::class,'store'])->name('categorias.store');

Route::get('/producto',[ProductoController::class,'index'])->name('productos.index');
Route::get('/producto/create',[ProductoController::class,'create'])->name('productos.create');
Route::post('/producto/store',[ProductoController::class,'store'])->name('productos.store');

Route::get('/compra',[CompraController::class,'index'])->name('compras.index');
Route::get('/compra/create',[CompraController::class,'create'])->name('compras.create');
Route::post('/compra/store',[CompraController::class,'store'])->name('compras.store');


Route::get('/suscripciones',[SuscripcionController::class,'index'])->name('suscripciones');
Route::post('/procesar-pago',[SuscripcionController::class,'procesarPago'])->name('procesar-pago');