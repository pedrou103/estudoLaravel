<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'] );

Route::get('/config', [SiteController::class, 'config'] );
Route::post('/config', [SiteController::class, 'config'] );