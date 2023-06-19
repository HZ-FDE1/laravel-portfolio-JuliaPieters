<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SuperHeroController;
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

Route::resource('/forms', FormController::class);
Route::get('/', [\App\Http\Controllers\HomepageController::class, 'show']);

Route::get('/test-500', function () {
    throw new Exception("Test 500 Exception");
});


Route::get('/api/{id}', [SuperHeroController::class, 'get_hero'])->name('hero.load');
Route::get('/hero', [SuperHeroController::class, 'show_hero'])->name('hero.show');
