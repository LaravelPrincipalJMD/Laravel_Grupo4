<?php

use App\Http\Controllers\ProductsController;
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




Route::get('/admin', [ ProductsController::class, 'products']);

Route::post('admin', [ ProductsController::class, 'crear' ]) -> name('admin.crear');

Route::get('editar', [ProductsController::class, 'editar']) -> name('admin.editar');

Route::get('borrar', [ProductsController::class, 'borrar']) -> name('admin.borrar');


Route::put('editar/{id?}', [ProductsController::class, 'actualizar']) -> name('admin.actualizar');

Route::delete('borrar/{id?}', [ ProductsController::class, 'eliminar' ]) -> name('admin.eliminar');

Route::get('/admin/buscar', [ProductsController::class, 'buscar']) -> name('admin.detalle');
