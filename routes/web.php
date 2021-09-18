<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard/post', [PostController::class, 'index'])->name('post.root');
Route::get('/dashboard/post/form', [PostController::class, 'create'])->name('post.create');
Route::get('/dashboard/post/form/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::get('/dashboard/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::post('/dashboard/post', [PostController::class, 'store'])->name('post.store');
Route::put('/dashboard/post/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('dashboard/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');
