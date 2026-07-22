<?php

use App\Http\Controllers\MajorController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Manajemen data siswa (Action Controller)
Route::name('students.')->prefix('students') ->group(function() {
// Halaman daftar siswa
Route::get('/', [StudentController::class, 'index'])->name('index');

// Halaman detail siswa
Route::get('/{id}', [StudentController::class, 'show'])->name('show');

//Halaman tambah siswa
Route::get('/create', [StudentController::class, 'create'])->name('create');

//Halaman edit siswa
Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

//Logic add student
Route::post('/', [StudentController::class, 'store'])->name('store');

//Logic edit student
Route::put('/{id}', [StudentController::class, 'update'])->name('update');

//Logic delete student
Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');

});

//Manajemen data guru (Action Controller)
Route::name('teachers.')->prefix('teachers') ->group(function() {
//Halaman daftar guru
Route::get('/', [TeacherController::class, 'index'])->name('index');

//Halaman detail guru
Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

//Halaman tambah guru
Route::get('/create', [TeacherController::class, 'create'])->name('create');

//Halaman edit guru
Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

//Logic add teacher
Route::post('/', [TeacherController::class, 'store'])->name('store');

//Logic edit teacher
Route::put('/{id}', [TeacherController::class, 'update'])->name('update');

//Logic delete teacher
Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');

});

//Manajemen data kelas (invokable controller)
Route::name('classes.')->prefix('classes')->group(function () {
    //Halaman daftar kelas
    Route::get('/', IndexController::class)->name('index');

    //Halaman detail kelas
    Route::get('/{id}', ShowController::class)->name('show');

    //Halaman tambah kelas
    Route::get('/create', CreateController::class)->name('create');

    //Halaman edit kelas
    Route::get('/{id}/edit', EditController::class)->name('edit');

    //Logic add kelas
    Route::post('/', StoreController::class)->name('store');

    //Logic edit kelas
    Route::put('/{id}', UpdateController::class)->name('update');

    //Logic delete kelas
    Route::delete('/{id}', DestroyController::class)->name('destroy');
});

//Manajemen data jurusan (Resource Controller)
Route::resource('majors', MajorController::class);