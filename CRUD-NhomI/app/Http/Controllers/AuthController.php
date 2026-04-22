<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Lấy dữ liệu từ form
        $credentials = $request->only('username', 'password');
        $remember = $request->has('remember');

        // Thực hiện xác thực
        if (Auth::attempt($credentials, $remember)) {
            // Chuyển về route chuẩn của resource
            return redirect()->route('users.index');
        }

        // Đăng nhập thất bại, quay lại kèm thông báo lỗi
        return back()->withErrors([
            'username' => 'Tài khoản hoặc mật khẩu không chính xác.',
        ])->withInput($request->only('username'));
    }
}
