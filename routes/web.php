<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'] );
Route::get('/sair', [SiteController::class, 'exit'] );
Route::get('/users/{qnt}', [SiteController::class, 'users']);
