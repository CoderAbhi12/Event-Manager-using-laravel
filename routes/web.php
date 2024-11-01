<?php

use App\Http\Controllers\userAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/log',[userAuth::class,'check']);
Route::get('/register', function () {
    return view('register');
});
Route::post('/reg',[userAuth::class,'save']);

Route::get('/logout',[userAuth::class,'logout']);