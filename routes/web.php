<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Housecontroller;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/house', [Housecontroller::class, 'index'])->name('houses.index');
    Route::get('/house/create', [Housecontroller::class, 'create'])->name('houses.create');
    Route::post('/house', [Housecontroller::class, 'store'])->name('houses.store');
    Route::get('/house/{house}/edit', [Housecontroller::class, 'edit'])->name('houses.edit');
    Route::put('/house/{house}/update', [Housecontroller::class, 'update'])->name('houses.update');
    Route::delete('/house/{house}/delete', [Housecontroller::class, 'delete'])->name('houses.delete');
    Route::get('/house/{house}/show', [Housecontroller::class, 'show'])->name('houses.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
