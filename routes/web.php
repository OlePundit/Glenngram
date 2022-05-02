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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);

Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create'])->name('posts.create');

Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/Profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('Profile.show');

Route::get('/Profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profiles.edit');

Route::patch('/Profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profiles.update');
