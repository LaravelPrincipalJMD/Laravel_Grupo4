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


Route::get('/admin', [ ProductsController::class, 'products']);
Route::post('admin', [ ProductsController::class, 'crear' ]) -> name('admin.crear');
Route::get('editar/{id}', [ProductsController::class, 'editar'])->name('admin.editar');
Route::put('editar/{id}', [ProductsController::class, 'actualizar'])->name('admin.actualizar');
Route::get('/', function () {
    return view('index');
});
Route::get('/signUp', function () {
    return view('signup');
})->name('signup');
Route::get('/signIn', function () {
    return view('signin');
})->name('signin');
// Route::get('/users', [UsersController::class, 'getUsers']);
Route::post('/up', [UsersController::class, 'signup']) -> name('singup');
Route::post('/in', [UsersController::class, 'signin']) -> name('singin');
