<?php

use App\Http\Controllers\Home\IndexController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     // sleep(2);
//     return Inertia::render('Home');
// })->name('home');


// Route::get('/', [Home\IndexController::class])

Route::group(['namespace' => 'Home'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('home');
});


Route::get('/about', function () {
    // return Inertia::render('About');
    // return inertia('About');
    return inertia('About', ['user' => "Faisal"]);
});
