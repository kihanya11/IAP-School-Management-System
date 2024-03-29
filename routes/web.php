<?php
use App\Http\Controllers\crudcontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\controller;
use App\Http\Controllers\coursecontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\removeController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', function () {
   if (session()->has('user')){

    session()-> pull('user');
   }
   
   
    return redirect('/');
});

Route::get('logouts', function () {
    if (session()->has('user')){
 
     session()-> pull('user');
    }
    
    
     return redirect('/');
 });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\pagecontroller::class, 'dashboard']);

//Route::get('/student_profile', [App\Http\Controllers\pagecontroller::class, 'student_profile']);
Route::view('student_profile', 'student_profile');
Route::get('student_profile',[UserController::class, 'show']);


Route::get('/reg', [App\Http\Controllers\pagecontroller::class, 'reg']);


Route::post('/reg',[App\Http\Controllers\crudcontroller::class, 'save']);
Route::get('show',[App\Http\Controllers\crudcontroller::class, 'show']);

Route::view('list','list');
Route::get('list',[coursecontroller::class, 'show']);


Route::view('log','log');
Route::post('log',[AuthController::class, 'loginprocess']);

Route::get('/registration',[AuthController::class, 'registration']);
Route::post('/registration',[AuthController::class, 'registeruser']);

Route::get('/admin',[AuthController::class, 'admin']);
Route::get('/faculty',[AuthController::class, 'faculty']);

Route::view('adminlog','adminlog');
Route::post('adminlog',[AuthController::class, 'adminlogprocess']);




