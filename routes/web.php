<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    // sleep(2);
    return Inertia::render('Home');
})->name('home');



Route::inertia('/about', 'About', ['user' => "Faisal"])->name('about');

// Route::get('/about', function () {
//     // return Inertia::render('About');
//     // return inertia('About');
//     return inertia('About', ['user' => "Faisal"]);
// });
