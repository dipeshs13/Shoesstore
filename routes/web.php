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
