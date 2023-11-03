<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Models\Blog;

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
    return view('Home',
    ["title" => "home"]);
});

Route::get('/about', function () {
    return view('about' ,[
        "name" => "Bayu Aditya",
        "email" => "masbayu589@gmail.com",
        "foto" => "p.jpeg"
        
    ] );
});

// Route::get('/blog', [ArtikelController::class, 'index'])->name('artikel.index');
// Route::get('/detail/{id}', [artikelController::class, 'detail'])->name('artikel.detail');

Route::get('/nim', function () {
    return ('21.31.0002');
});

Route::get('index', function () {
    return view('layouts/index');
});

Route::get('/blog', function() {
    return view('blog2', [
        "title" => "post",
        "posts" => Blog::all()

    ]);
});

Route::get('/blog/{slug}', function ($slug) {

    return view('post', [
        "title" => "single post",
        "post" =>Blog::getBySlack($slug)

    ]);

});