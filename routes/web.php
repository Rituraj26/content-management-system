<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Website\PostController as WebsitePostController;

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
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {
    Route::get('/post', [PostController::class, 'index'])->name('admin.post.root');
    Route::get('/post/form', [PostController::class, 'create'])->name('admin.post.create');
    Route::get('/post/form/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('admin.post.show');
    Route::post('/post', [PostController::class, 'store'])->name('admin.post.store');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('admin.post.destroy');

    Route::get('/user', [UserController::class, 'index'])->name('admin.user.root');
    Route::get('/user/{id}/post', [UserController::class, 'show'])->name('admin.user.post');
    Route::get('/user/{id}/profile', [UserController::class, 'showProfile'])->name('admin.user.profile');

    Route::get('/task', [TaskController::class, 'index'])->name('admin.task');
});


Route::group([], function () {
    Route::get('/post', [WebsitePostController::class, 'index'])->name('website.post.root');
    Route::get('/post/form', [WebsitePostController::class, 'create'])->name('website.post.create');
    Route::get('/post/form/{id}', [WebsitePostController::class, 'edit'])->name('website.post.edit');
    Route::get('/post/{id}', [WebsitePostController::class, 'show'])->name('website.post.show');
    Route::post('/post', [WebsitePostController::class, 'store'])->name('website.post.store');
    Route::put('/post/{id}', [WebsitePostController::class, 'update'])->name('website.post.update');
    Route::delete('/post/{id}', [WebsitePostController::class, 'destroy'])->name('website.post.destroy');
});

