<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\CinemaController;
use App\Http\Controllers\Admin\HomeController;
// use App\Http\Controllers\Admin\TheaterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::prefix('hoge')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('home.index');
    });

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::middleware('auth:admin')->group(function () {
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

        Route::get('home', [HomeController::class, 'index'])->name('home.index');

        Route::resource('cinema', CinemaController::class);
        // Route::resource('theater', TheaterController::class);
    });
});
