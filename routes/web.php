<?php

<<<<<<< HEAD
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use App\Models\Department;
=======
use App\Http\Controllers\StudentController;
>>>>>>> 035bb36a9d1b03611d34fa03981d20d296b14206
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentController::class, 'index']);

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}', [StudentController::class, 'update'])->name('student.update');
<<<<<<< HEAD
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');


Route::resource('department', DepartmentController::class);
Route::resource('lecturer', LecturerController::class);
=======
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
>>>>>>> 035bb36a9d1b03611d34fa03981d20d296b14206
