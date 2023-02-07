<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/add-student', [StudentController::class, 'addStudent'])->name('addStudent');
Route::post('/edit-student', [StudentController::class, 'editStudent'])->name('editStudent');
Route::post('/delete-student', [StudentController::class, 'deleteStudent'])->name('deleteStudent');
Route::get('/pagination/paginate-data', [StudentController::class, 'pagination']);
Route::get('/search-student', [StudentController::class, 'searchStudent'])->name('searchStudent');
