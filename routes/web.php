<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home2');
});

Auth::routes();

Route::get('/home2', [App\Http\Controllers\Home2Controller::class, 'index'])->name('home2');
