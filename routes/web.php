<?php


use App\Http\Controllers\MainController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\PostController;
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




Route::group(['prefix' => '/posts'], function () {
    Route::get('', App\Http\Controllers\Post\IndexController::class)->name('post.index');
    Route::get('/create', CreateController::class)->name('post.create');
    Route::post('', StoreController::class)->name('post.store');
    Route::get('/{post}', ShowController::class)->name('post.show');
    Route::get('/{post}/edit', EditController::class)->name('post.edit');
    Route::patch('/{post}', UpdateController::class)->name('post.update');
    Route::delete('/{post}', DestroyController::class)->name('post.destroy');
});

Route::get('/main', [MainController::class, 'index',])->name('main.index');


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => '/admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/posts', IndexController::class)->name('admin.post.index');
        Route::get('/posts/create', \App\Http\Controllers\Admin\Post\CreateController::class)->name('admin.post.create');
        Route::post('/posts', \App\Http\Controllers\Admin\Post\StoreController::class)->name('admin.post.store');
        Route::get('/posts/{post}', \App\Http\Controllers\Admin\Post\ShowController::class)->name('admin.post.show');
        Route::get('/posts/{post}/edit', \App\Http\Controllers\Admin\Post\EditController::class)->name('admin.post.edit');
        Route::patch('/posts/{post}', \App\Http\Controllers\Admin\Post\UpdateController::class)->name('admin.post.update');
        Route::delete('/posts/{post}', \App\Http\Controllers\Admin\Post\DestroyController::class)->name('admin.post.destroy');
    });
});








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
