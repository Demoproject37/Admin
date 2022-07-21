<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
Route::get('/',[UserController::class,'login'])->name('login');
Route::get('/index',[UserController::class,'index'])->name('index');
Route::get('/showprofile',[UserController::class,'showprofile'])->name('showprofile');
Route::get('/edit',[UserController::class,'edit'])->name('edit');
Route::post('/editprofile',[UserController::class,'editprofile'])->name('editprofile');
Route::get('/signup',[UserController::class,'signup'])->name('signup');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/changepassword',[UserController::class,'changepassword'])->name('changepassword');
Route::post('/change',[UserController::class,'change'])->name('change');
Route::resource('/products',ProductController::class);