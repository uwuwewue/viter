<?php

use App\Http\Controllers\VitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::post('/vits', [VitController::class, 'store']);
    Route::get('/vits/{vit}/edit', [VitController::class, 'edit']);
    Route::put('/vits/{vit}', [VitController::class, 'update']);
    Route::delete('/vits/{vit}', [VitController::class, 'destroy']);
});

Auth::routes();

Route::get('/home2', [VitController::class, 'index'])->name('home2');
