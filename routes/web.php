<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::get('about', [WebController::class, 'about'])->name('web.about');
Route::any('contact', [WebController::class, 'contact'])->name('web.contactus');
Route::get('bloglist', [WebController::class, 'bloglist'])->name('web.bloglist');
Route::get('blogdeatils', [WebController::class, 'blogdeatils'])->name('web.blogdeatils');
//   admin  //
Route::group(['prefix' => 'my-admin', 'middleware' => 'auth'], function () {
    Route::get('index', [adminController::class, 'index'])->name('dashboard');
    Route::get('form', [adminController::class, 'form'])->name('admin.form');
    Route::get('contactus', [adminController::class, 'contactus'])->name('view.contactus');
    Route::post('viewcontact', [adminController::class, 'contactusform'])->name('submit.contactus');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
// admin . blog   //
Route::get('create' , [adminController::class, 'submitblogform'])->name('create.blog');

 });


Route::group(['prefix' => 'my-admin', 'middleware' => 'guest'], function () {
    // Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('login');
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('post-login', [AuthController::class, 'login'])->name('login.save');
});


