<?php

use App\Http\Controllers\VitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [VitController::class, 'index']);

Auth::routes();

Route::get('/home2', [VitController::class, 'index'])->name('home2');
