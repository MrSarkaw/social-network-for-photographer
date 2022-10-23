<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\FollowController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\User\ProfileController;
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

Route::get('/', [PublicController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/getuser/{id}', [PublicController::class, 'getUser']);

Route::middleware(['auth'])->group(function () {
    //user
    Route::put('profile/update/cover', [ProfileController::class, 'updateCover'])->name('update.cover');
    Route::put('profile/update', [ProfileController::class, 'updateProfile'])->name('update.profile');
    Route::post('profile/create/category', [CategoryController::class, 'categoryStore'])->name('category.store');
    Route::delete('profile/delete/category/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
    Route::post('/profile/post', [PostController::class, 'store'])->name('post.store');
    Route::delete('/profile/delete/{id}', [PostController::class, 'delete'])->name('post.delete');


    //follow
    Route::post('/send/follow/{id}', [FollowController::class, 'store']);
});
