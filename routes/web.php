<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('user',[UserController::class,'getUser']);
Route::get('user/{name}',[UserController::class,'getUserName']);


Route::get('/',[StudentController::class,'getStudents']);
Route::view('/addStudentform','addStudent');

Route::post('/add',[StudentController::class,'addStudent']);
Route::get('delete/{id}',[StudentController::class,'deleteStudent']);
Route::get('edit/{id}',[StudentController::class,'editStudent']);
Route::get('update/{id}',[StudentController::class,'updateStudent']);







require __DIR__.'/auth.php';
