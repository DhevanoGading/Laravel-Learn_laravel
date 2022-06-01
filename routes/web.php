<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Muhammad Dhevano Gading Az Zamzami",
        "email" => "dhevanogading@gmail.com",
        "image" => "alluka zoldyck.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

//single post page

Route::get('posts/{slug}', [PostController::class, 'show']);
