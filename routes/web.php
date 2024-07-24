<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;

Route::get('/guru', [TeacherController::class, 'index'])->name('teacher.gallery');
Route::get('/', [HomeController::class, 'index'])->name('home');
