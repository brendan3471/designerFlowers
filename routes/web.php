<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/{slug?}', [PageController::class, 'show'])->name('page.show');