<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudUserController;

// ==========================================
// 1. TRANG CHỦ
// ==========================================
Route::get('/', function () {
    return view('welcome');
});

// ==========================================
// 2. XÁC THỰC (ĐĂNG NHẬP & QUÊN MẬT KHẨU)
// ==========================================
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
