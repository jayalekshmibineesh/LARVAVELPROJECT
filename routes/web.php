<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DbController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Pagecontroller::class,'index'])->name('index');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/Staff_register',[PageController::class,'Staff_register'])->name('Staff_register');
Route::post('/staff_reg',[PageController::class,'staff_reg'])->name('staff_reg');
Route::get('/index2',[PageController::class,'index'])->name('index2');
Route::post('/showlogin',[LoginController::class,'showlogin'])->name('showlogin');
Route::get('/adminhome',[PageController::class,'adminhome'])->name('adminhome');
Route::get('/doctor_register',[Pagecontroller::class,'doctor_register'])->name('doctor_register');
Route::post('/doctor_reg',[PageController::class,'doctor_reg'])->name('doctor_reg');
Route::get('/view_doctors',[PageController::class,'view_doctors'])->name('view_doctors');
Route::get('/edit/{id}',[DbController::class,'edit'])->name('edit');
Route::post('/update/{id}',[DbController::class,'update'])->name('update');
Route::get('/delete/{id}',[DbController::class,'delete'])->name('delete');
Route::get('/staff_login',[LoginController::class,'staff_login'])->name('staff_login');
Route::post('/stafflog',[LoginController::class,'stafflog'])->name('stafflog');
Route::get('/staffhome',[LoginController::class,'staffhome'])->name('staffhome');
Route::get('/staff_view',[PageController::class,'staff_view'])->name('staff_view');
Route::get('/staff_edit/{id}',[DbController::class,'staff_edit'])->name('staff_edit');
Route::post('/staff_update/{id}',[DbController::class,'staff_update'])->name('staff_update');
Route::get('/deletestaff/{id}',[DbController::class,'deletestaff'])->name('deletestaff');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');