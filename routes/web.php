<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shoes', function(){
    return view('shoes');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/login', function(){
    return view('Login');
});
Route::get('/register', function(){
    return view('Register');
});
