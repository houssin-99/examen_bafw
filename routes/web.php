<?php
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, 'index'])->name('courses.index');
Route::get('/create', function () {
    return view('courses.create');
})->name('courses.create');
Route::post('/store', [CourseController::class, 'store'])->name('courses.store');
Route::post('/courses/{course}/toggle', [CourseController::class, 'toggle'])->name('courses.toggle');