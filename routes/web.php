<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[StudentController::class,'admin'])->name('admin');
Route::get('/student',[StudentController::class,'student'])->name('student');
Route::get('/create',[StudentController::class,'create'])->name('create');
Route::post('/student',[StudentController::class,'store'])->name('store');
Route::get('/student/{student}/edit',[StudentController::class,'edit'])->name('edit');
Route::put('/student/{student}/update',[StudentController::class,'update'])->name('update');
Route::delete('/student/{student}/destroy',[StudentController::class,'destroy'])->name('destroy');