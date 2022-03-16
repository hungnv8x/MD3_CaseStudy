<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
    return view('backend.dashboard');
})->name('dashboard');
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showFormRegister'])->name('showRegister');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::prefix('/users')->group(function () {
    Route::get('/', [UserController::class, 'getAll'])->name('users.list');
    Route::get('/{id}/delete', [UserController::class, 'deleteById'])->name('users.delete');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/{id}/edit', [UserController::class, 'update'])->name('users.update');
});

Route::prefix('/posts')->group(function (){
    Route::get('/',[PostController::class,'getAll'])->name('posts.list');
    Route::get('/{id}/delete',[PostController::class,'deleteById'])->name('posts.delete');
});

