<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', function () {
    return view('student');
});

//Route::get('/student/$students', function () {
 //   return view('studentunique');
//});

Route::get('/studentunique', function () {
    return view('studentunique');
});

Route:: middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

                    });

