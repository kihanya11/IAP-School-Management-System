<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\pagecontroller::class, 'dashboard']);
Route::get('/student_profile', [App\Http\Controllers\pagecontroller::class, 'student_profile']);
Route::get('/course', [App\Http\Controllers\pagecontroller::class, 'course']);
Route::get('/reg', [App\Http\Controllers\pagecontroller::class, 'reg']);


