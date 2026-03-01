<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::resource('students', StudentController::class);
