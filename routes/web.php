<?php

use App\Http\Controllers\Web\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Web\Admin\Projects\ProjectsController;
use App\Http\Controllers\Web\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::resource('/login', LoginController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class)->only(['index']);
    Route::resource('projects', ProjectsController::class);
});
