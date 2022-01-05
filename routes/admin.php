<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\AboutUsController;
use App\Http\Controllers\admin\ForgotPasswordController;
use App\Http\Controllers\admin\ChangePasswordController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;

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
    return view('admin.login');
});
Route::prefix('/admin')-> group(function(){
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/logout', [UserController::class, 'logout']);

    Route::get('/forgot-password',[ForgotPasswordController::class, 'forgotPasswordForm']);
    Route::post('/forgot-password-verificationcode',[ForgotPasswordController::class, 'send_verification_code']);
    Route::get('/verify-code', [ForgotPasswordController::class, 'verify_code']);
    Route::post('/verify-code',[ForgotPasswordController::class, 'Check_verification_code']);
    Route::get('/reset-password', [ForgotPasswordController::class, 'reset_password']);
    Route::post('/reset-email-password', [ForgotPasswordController::class, 'reset_password']);


    Route::get('/company',[CompanyController::class,'list']);
    Route::get('/company/upate/{id}',[CompanyController::class,'update']);
    Route::post('/company/update',[CompanyController::class,'update']);

    Route::get('/company/about-us',[AboutUsController::class,'aboutUsUpdate']);
    Route::get('/company/about-us/update/{id}',[AboutUsController::class,'update']);
    Route::post('/company/about-us/update',[AboutUsController::class,'update']);

    Route:: get('/change-password', [ChangePasswordController::class, 'change_password']);
    Route:: post('/change-password', [ChangePasswordController::class, 'change_password']);

    Route::get('/category-list', [CategoryController::class, 'category_list']);
    Route::get('/category-add', [CategoryController::class, 'category_add']);
    Route::post('/category-add', [CategoryController::class, 'category_add']);
    Route::get('/category-update/{id}', [CategoryController::class, 'category_update']);
    Route::post('/category-update', [CategoryController::class, 'category_update']);
    Route::get('/category-delete/{id}', [CategoryController::class, 'category_delete']);

    Route::get('/subcategory-list', [SubCategoryController::class, 'sub_category_list']);
    Route::get('/subcategory-add', [SubCategoryController::class, 'sub_category_add']);
    Route::post('/subcategory-add', [SubCategoryController::class, 'sub_category_add']);
    Route::get('/subcategory-update/{id}', [SubCategoryController::class, 'sub_category_update']);
    Route::post('/subcategory-update', [SubCategoryController::class, 'sub_category_update']);
    Route::get('/subcategory-delete/{id}', [SubCategoryController::class, 'sub_category_delete']);





    

});    