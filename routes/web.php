<?php

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
Route::post('/user', [UsersController::class, 'singup']) -> name('singup');
