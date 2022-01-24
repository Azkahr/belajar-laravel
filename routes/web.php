<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;
use App\Models\Category; 
use App\Models\Post; 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardPostController;

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

// cara memanggil data dari return view, itu adalah dengan menggunakan variabel, misal {{ $title }}

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        // dikirim ke navbar
        "active" => 'home',
    ]);
});

// untuk halaman about.blade.php
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        // dikirim ke navbar
        "active" => 'about',
        // dipanggil menggunakan variabel
        "name" => "Azka Hanifassalam Rabbani",
        "email" => "azkahar@gmail.com",
        "gambar" => "corey wp.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        // dikirim ke navbar
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index', [
        "posts" => Post::latest()->get()
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminPostController::class)->except('show')->middleware('admin');

// walaupun routenya sama tapi tergantung method di viewnya
Route::resource('/dashboard/categories', AdminPostController::class)->middleware('admin');
Route::resource('/dashboard/categories', AdminPostController::class)->middleware('admin');

Route::resource('/dashboard/admin', AdminController::class)->middleware('admin');