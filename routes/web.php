<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostController;

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

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::group([
    'prefix' => 'admin'
], function () {
    Route::get('/post', [PostController::class, 'index'])->name('admin.post.root');
    Route::get('/post/form', [PostController::class, 'create'])->name('admin.post.create');
    Route::get('/post/form/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('admin.post.show');
    Route::post('/post', [PostController::class, 'store'])->name('admin.post.store');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('admin.post.destroy');
});


