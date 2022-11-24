<?php
use App\Http\Controllers\crudcontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\controller;
use App\Http\Controllers\coursecontroller;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\pagecontroller::class, 'dashboard']);
Route::get('/student_profile', [App\Http\Controllers\pagecontroller::class, 'student_profile']);

Route::get('/reg', [App\Http\Controllers\pagecontroller::class, 'reg']);


Route::post('/reg',[App\Http\Controllers\crudcontroller::class, 'save']);
Route::get('show',[App\Http\Controllers\crudcontroller::class, 'show']);

Route::view('list','list');
Route::get('list',[coursecontroller::class, 'show']);


