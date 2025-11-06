<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () { return redirect('/dashboard'); });
Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/attendance', [StudentController::class, 'attendance'])->name('attendance');
Route::get('/marks', [StudentController::class, 'marks'])->name('marks');
Route::get('/fees', [StudentController::class, 'fees'])->name('fees');
