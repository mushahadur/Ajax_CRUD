<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/add-student', [StudentController::class, 'addStudent'])->name('addStudent');
//
//Route::post('/edit-student', [StudentController::class, 'editStudent'])->name('editStudent');

Route::post('/edit-student', [StudentController::class, 'updateStudent'])->name('editStudent');


Route::post('/delete-student', [StudentController::class, 'deleteStudent'])->name('deleteStudent');
