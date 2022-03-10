<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/post/{post}', [HomeController::class, 'show'])->name('post.show');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::post('/dashboard/post/create', [PostController::class, 'create'])->middleware(['auth'])->name('user.post.create');

Route::get('/dashboard/post/create/new', [DashboardController::class, 'showCreatePost'])->middleware(['auth'])->name('dashboard.post.create');

Route::get('/dashboard/post/{post}', [DashboardController::class, 'show'])->where('post', '[0-9]+')->middleware(['auth'])->name('dashboard.post.show');

