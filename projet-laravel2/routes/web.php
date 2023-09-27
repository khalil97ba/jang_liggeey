<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/modal', function () {
    return view('layouts.modals');
})->name('modal');

Route::get('/logins', function () {
    return view('layouts.login');
})->name('logins');

Route::get('/registers', function () {
    return view('layouts.register');
})->name('resgisters');

Route::get('/blank-page', function () {
    return view('layouts.blank');
})->name('blank-page');

Route::get('/charts', function () {
    return view('layouts.chart');
})->name('charts');


