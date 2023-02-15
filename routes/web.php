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
Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/admin', [ ProductsController::class, 'products']);
Route::post('admin', [ ProductsController::class, 'crear' ]) -> name('admin.crear');
Route::get('editar/{id}', [ProductsController::class, 'editar'])->name('admin.editar');
Route::put('editar/{id}', [ProductsController::class, 'actualizar'])->name('admin.actualizar');

Route::get('/signUp', function () {
    return view('index');
})->middleware('auth');
Route::get('/products', function () {
    return view('products');
});

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/basicjuice', function () {
    return view('products.basicjuice');
})->name('basicjuice');
