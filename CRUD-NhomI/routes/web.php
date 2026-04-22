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
})->name('login'); // Đặt tên route để Laravel dễ redirect khi cần

Route::post('/login', [AuthController::class, 'login']);

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('password.request');

// ==========================================
// 3. ĐĂNG KÝ (Sử dụng CrudUserController)
// ==========================================
// Trỏ GET /register vào hàm create() để hiển thị form
Route::get('/register', [CrudUserController::class, 'create'])->name('register');

// Trỏ POST /register vào hàm store() để lưu user vào database
Route::post('/register', [CrudUserController::class, 'store']);

// ==========================================
// 4. QUẢN LÝ USER (CRUD)
// ==========================================
// Route::resource sẽ tự động tạo các route: users.index, users.edit, users.update, users.destroy
// Ta dùng except(['create', 'store']) vì 2 chức năng này đã gán cho /register ở trên
Route::resource('users', CrudUserController::class)->except(['create', 'store']);
// Danh sách người dùng
Route::get('list', [CrudUserController::class, 'list'])->name('users.list');
Route::get('/', function () {
    return view('welcome');
});
