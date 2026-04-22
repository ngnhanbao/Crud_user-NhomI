<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Hoặc App\Models\Account tùy theo tên model bạn đặt
use Illuminate\Support\Facades\Hash;

class CrudUserController extends Controller
{
    // 1. Hiển thị danh sách User (Trang Index)
   public function index() {
    $users = User::all();
    return view('list', compact('users'));
}
    // 2. Hiển thị form Đăng ký (Trang Create)
    public function create() {
        return view('register');
    }

    // 3. Xử lý Lưu User mới (Store)
    public function store(Request $request) {
        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed', // 'confirmed' kiểm tra khớp với password_confirmation
        ]);

        // Tạo mới user
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Mã hóa mật khẩu
        ]);

        return redirect()->route('users.index')->with('success', 'Thêm thành viên thành công!');
    }

    // 4. Hiển thị form Sửa (Edit)
    public function edit($id) {
        $user = User::findOrFail($id); // Tìm user, nếu không thấy sẽ báo lỗi 404
        return view('edit', compact('user'));
    }

    // 5. Cập nhật dữ liệu (Update)
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);

        $request->validate([
            'username' => 'required|unique:users,username,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        $user->update([
            'username' => $request->username,
            'email' => $request->email,
        ]);

        return redirect()->route('users.index')->with('success', 'Cập nhật thành công!');
    }

    // 6. Xóa User (Delete)
    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Đã xóa thành viên!');
    }
}