<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

//praktikum 1
Route::get('/hello', function () {
    return 'Hello World';
   });
Route::get('/world', function () {
    return 'World';
   });
Route::get('/', function () {
    return 'Selamat Datang';
   });
Route::get('/about', function () {
    return '2241760040';
   });
Route::get('/user/{taufiq}', function ($name) {
    return 'Nama saya '.$name;
    });
Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
Route::get('/articles/{id}', function($Id) {
     return 'Halaman Artikeldengan ID '.$Id;
    });
Route::get('/user/{name?}', function ($name='john') {
        return 'Nama saya '.$name;
        });*/
//praktikum 2
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->only(['create', 'store', 'update', 'destroy']);
//praktikum 3
/*Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Taufiq']);
    }); */   
Route::get('/greeting', [WelcomeController::class,
    'greeting']);
    
?>   