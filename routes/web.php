<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('Home', [
        "title" => "Home",
        "active"=>'home'
    ]);
});

Route::get('/about', function () {
    return view('About', [
        'title' => 'About',
        'active'=>'home',
        'name' => 'Nina Rosita',
        'email' => 'ninaarosita25@gmail.com',
        'image' => 'nina.jpg'

    ]);
});
Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories',function(){
    return view('categories',[
        'title'=>'Post Categories',
        'active'=>'categories',
        'categories'=>Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);