<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
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



Route::get('/admin', [ ProductsController::class, 'products'])->middleware(['auth', 'isAdmin']);

Route::get('/admin/adminProducts', [ ProductsController::class, 'products'])->middleware(['auth', 'isAdmin'])->name('admin.products');

Route::get('editar', [ProductsController::class, 'editar']) -> name('admin.editar');


Route::get('borrar', [ProductsController::class, 'borrar']) -> name('admin.borrar');

Route::put('editar/{id?}', [ProductsController::class, 'actualizar']) -> name('admin.actualizar');

Route::delete('borrar/{id?}', [ ProductsController::class, 'eliminar' ]) -> name('admin.eliminar');

Route::get('/admin/buscar', [ProductsController::class, 'buscar']) -> name('admin.detalle');

Route::get('insert', [ProductsController::class, 'creacion']) -> name('admin.creacion');

Route::put('insert', [ProductsController::class, 'crear']) -> name('admin.crear');


//USERS

Route::get('editarUser', [UsersController::class, 'editarUser']) -> name('admin.editarUser');

Route::put('editarUser/{id?}', [UsersController::class, 'actualizarUser']) -> name('admin.actualizarUser');

Route::get('/admin/buscarUser', [UsersController::class, 'buscarUser']) -> name('admin.detalleUser');

Route::get('insertUser', [UsersController::class, 'creacionUser']) -> name('admin.creacionUser');

Route::post('insertUser', [UsersController::class, 'crearUser']) -> name('admin.crearUser');

Route::delete('borrarUser/{id?}', [ UsersController::class, 'eliminarUser' ]) -> name('admin.eliminarUser');

Route::get('borrarUser', [UsersController::class, 'borrarUser']) -> name('admin.borrarUser');


//SINGUP, SINGIN

Route::get('/', function () {
    return view('index');
})->name('home');
//Route::get('/admin', [ ProductsController::class, 'products'])->middleware(['auth', 'isAdmin']);
Route::post('admin', [ ProductsController::class, 'crear' ]) -> name('admin.crear')->middleware(['auth', 'isAdmin']);;



Route::get('/products', [ ProductsController::class, 'getAllProducts'])->name('products');
Route::get('/basicjuice', function () {
    return view('products.basicjuice');
})->name('basicjuice');

