<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('skill', function () {
    return view('skill');
})->name('skill');
Route::get('service', [ServiceController::class,'show'])->name('service');
Route::get('contact', [ContactController::class,'show'])->name('contact');
Route::get('form', [FormController::class,'show'])->name('form');
Route::post('form', [FormController::class,'showPost'])->name('form');
// Route::get('student', [StudentController::class,'show'])->name('student');
Route::get('student', [StudentController::class,'showquery'])->name('student');

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
});
