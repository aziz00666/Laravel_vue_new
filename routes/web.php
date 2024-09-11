<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MainMiddleware;
Route::get('/home', [HomeController::class, 'index']);
Route::get('/', function () {
    return view('welcome');

});
