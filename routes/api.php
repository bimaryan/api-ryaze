<?php

use App\Http\Controllers\Api\ProjectsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('projects', [ProjectsController::class, 'index']);
Route::get('projects/{projectName}', [ProjectsController::class, 'show']);
