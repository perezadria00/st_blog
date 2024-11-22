<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts;

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



Route::view('/posts', 'livewire.posts');
Route::get('/posts/{id}', [Posts::class, 'show'])->name('post.show');

Route::view('/','livewire.home');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



require __DIR__.'/auth.php';
