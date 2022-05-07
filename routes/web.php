<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;

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



Auth::routes();

Route::get('/email', function(){
    return new NewUserWelcomeMail();
});

Route::post('follow/{user}', [App\Http\Controllers\followsController::class, 'store']);
Route::get('/', [App\Http\Controllers\PostsController::class, 'index']);
Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create'])->name('posts.create');

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);

Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/Profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('Profile.show');

Route::get('/Profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profiles.edit');

Route::patch('/Profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profiles.update');
