<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\OrderManager;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/shoes', function(){
//     return view('shoes');
// });

Route::get('/home', function(){
    return view('home');
});
Route::get('/history', function(){
    return view('History');
});
// Route::get('/order',function(){
//     return view('Order');
// })->name('home');
// Route::get('/login', function(){
//     return view('Login');
// });
// Route::get('/register', function(){
//     return view('Register');
// });
// Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
// Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login',[AuthManager::class, 'login'])->name('login');
Route::post('/login',[AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register',[AuthManager::class, 'registration'])->name('registration');
Route::post('/register',[AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/order',[OrderManager::class, 'order_page'])->name('Order');
Route::post('/order',[OrderManager::class, 'submit_order'])->name('Order.post');
Route::get('/shoes',[AuthManager::class, 'shoes_page'])->name('Shoes');
Route::get('/history', [OrderManager::class, 'order_history'])->name('order.history');
