<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index'); 

Route::get('/homepage', function () {
    return view ('homepage');
});
