<?php

use Illuminate\Support\Facades\Route;


// Route để hiện trang đăng nhập
Route::get('/login', function () {
    return view('login');
});

// Route để xử lý khi nhấn nút Đăng nhập (POST)
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', function () {
    return view('register');
});
Route::get('/', function () {
    return view('welcome');
});
