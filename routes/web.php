<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\HomeController;

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
    return view('welcome');
});

Route::get('/about-us', [AboutUsController::class, 'aboutus']);
Route::get('/blog-detail/{id}', [BlogController::class, 'blog_detail']);
Route::get('/', [HomeController::class, 'home']);