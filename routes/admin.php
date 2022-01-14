<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\AboutUsController;
use App\Http\Controllers\admin\ForgotPasswordController;
use App\Http\Controllers\admin\ChangePasswordController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\BlogController;


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

Route::get('/admin', function () {
    return view('admin.login');
});
Route::prefix('/admin')-> group(function(){
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/dashboard', [UserController::class, 'dashboard']) -> middleware('check_status');
    Route::get('/logout', [UserController::class, 'logout']);

    Route::get('/forgot-password',[ForgotPasswordController::class, 'forgotPasswordForm']);
    Route::post('/forgot-password-verificationcode',[ForgotPasswordController::class, 'send_verification_code']);
    Route::get('/verify-code', [ForgotPasswordController::class, 'verify_code']);
    Route::post('/verify-code',[ForgotPasswordController::class, 'Check_verification_code']);
    Route::get('/reset-password', [ForgotPasswordController::class, 'reset_password']);
    Route::post('/reset-email-password', [ForgotPasswordController::class, 'reset_password']);


    Route::get('/company',[CompanyController::class,'list']) -> middleware('check_status');
    Route::get('/company/upate/{id}',[CompanyController::class,'update']) -> middleware('check_status');
    Route::post('/company/update',[CompanyController::class,'update']) -> middleware('check_status');

    Route::get('/company/about-us',[AboutUsController::class,'aboutUsUpdate']) -> middleware('check_status');
    Route::get('/company/about-us/update/{id}',[AboutUsController::class,'update']) -> middleware('check_status');
    Route::post('/company/about-us/update',[AboutUsController::class,'update']) -> middleware('check_status');

    Route:: get('/change-password', [ChangePasswordController::class, 'change_password']) -> middleware('check_status');
    Route:: post('/change-password', [ChangePasswordController::class, 'change_password']) -> middleware('check_status');

    Route::get('/category-list', [CategoryController::class, 'category_list']) -> middleware('check_status');
    Route::get('/category-add', [CategoryController::class, 'category_add']) -> middleware('check_status');
    Route::post('/category-add', [CategoryController::class, 'category_add']) -> middleware('check_status');
    Route::get('/category-update/{id}', [CategoryController::class, 'category_update']) -> middleware('check_status');
    Route::post('/category-update', [CategoryController::class, 'category_update']) -> middleware('check_status');
    Route::get('/category-delete/{id}', [CategoryController::class, 'category_delete']) -> middleware('check_status');

    Route::get('/subcategory-list', [SubCategoryController::class, 'sub_category_list']) -> middleware('check_status');
    Route::get('/subcategory-add', [SubCategoryController::class, 'sub_category_add']) -> middleware('check_status');
    Route::post('/subcategory-add', [SubCategoryController::class, 'sub_category_add']) -> middleware('check_status');
    Route::get('/subcategory-update/{id}', [SubCategoryController::class, 'sub_category_update']) -> middleware('check_status');
    Route::post('/subcategory-update', [SubCategoryController::class, 'sub_category_update']) -> middleware('check_status');
    Route::get('/subcategory-delete/{id}', [SubCategoryController::class, 'sub_category_delete']) -> middleware('check_status');
    


    Route::get('/blog-list', [BlogController :: class, 'blog_list']) -> middleware('check_status');
    Route::get('/blog-add', [BlogController :: class, 'blog_add']) -> middleware('check_status');
    Route::post('/blog-add', [BlogController :: class, 'blog_add']) -> middleware('check_status');
    Route::get('/blog-update/{id}', [BlogController :: class, 'blog_update']) -> middleware('check_status');
    Route::post('/blog-update', [BlogController :: class, 'blog_update']) -> middleware('check_status');
    Route::get('/blog-delete/{id}', [BlogController :: class, 'blog_delete']) -> middleware('check_status');
    Route::get('/blog/getSubCategory', [BlogController::class, 'getSubCategory']) -> middleware('check_status');

 



    

});    


