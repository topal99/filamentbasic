<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//get route from landingpagecontroller
Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('landingpage');


// Route::resource('guest-book', 'App\Http\Controllers\GuestBookController')
//     ->only(['index', 'create', 'store']);
