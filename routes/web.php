<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/posts/{post}',  function($post){
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);

Route::post('/FAQ', [FAQController::class, 'store']);
Route::get('/FAQ/create', [FAQController::class, 'create']);
Route::get('/FAQ', [FAQController::class, 'show']);
Route::get('/FAQ/edit', [FAQController::class, 'edit']);

Route::get('/blog', [ArticleController::class, 'index'])->name('articles.index');
Route::post('/blog', [ArticleController::class, 'store']);
Route::get('/blog/create', [ArticleController::class, 'create']);
Route::get('/blog/{articles}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/blog/{articles}/edit', [ArticleController::class, 'edit']);
Route::put('/blog/{articles}', [ArticleController::class, 'update']);
Route::delete('/blog/{articles}', [ArticleController::class, 'destroy']);






