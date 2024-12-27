<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.loginuser');
});


Route::get('/dash', function(){
    return view('public.dash');
});

Route::get('/dash/home', function(){
    return view('public.homeDash');
});
