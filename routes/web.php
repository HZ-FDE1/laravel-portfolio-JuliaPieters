<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperHeroController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/forms', FormController::class)->middleware('auth');;
Route::get('/', [\App\Http\Controllers\HomepageController::class, 'show'])->middleware('auth');;

Route::get('/test-500', function () {
    throw new Exception("Test 500 Exception");
});

Route::get('/api/{id}', [SuperHeroController::class, 'get_hero'])->name('hero.load')->middleware('auth');
Route::get('/hero', [SuperHeroController::class, 'show_hero'])->name('hero.show')->middleware('auth');
require __DIR__.'/auth.php';
