<?php

use App\Http\Controllers\dashController;
use App\Http\Controllers\dashHomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.loginuser');
});

Route::get('/dash', [dashController::class, 'viewDash']);

Route::get('/dash/home', [dashHomeController::class, 'viewDashHome']);

Route::post('/adduser', [userController::class, 'addUser']);

Route::post('/login', [loginController::class, 'login']);

Route::get('/logout', [logoutController::class, 'logOut']);



