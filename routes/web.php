<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome.welcome');
});
Route::get('/users', [UserController::class, 'index']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home'); //
Route::get('/Save',[HomeController::class,'Save'])->middleware(['auth','admin']);
Route::get('/show',[HomeController::class,'show'])->middleware(['auth','admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('posts', PostsController::class);
Route::delete('/posts/{id}', 'PostsController@destroy')->name('posts.destroy');
Route::get('/posts/{id}/edit', 'PostsController@edit')->name('posts.edit');

Route::resource('product', ProductController::class);