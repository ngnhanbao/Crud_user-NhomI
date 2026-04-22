<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Màn hình cập nhật</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <header>Lập trình web</header>
        <nav>
            <a href="{{ url('/') }}">Home</a> | 
            <a href="{{ url('/login') }}">Đăng nhập</a> | 
            <a href="{{ url('/register') }}">Đăng ký</a>
        </nav>
        <div class="main-content">
            <div class="form-box">
                <h2>Màn hình cập nhật</h2>
                
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="{{ old('username', $user->username) }}">
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" name="password">
                    </div>

                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" name="password_confirmation">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}">
                    </div>

                    <div style="margin-top: 20px; text-align: right; display: flex; justify-content: flex-end; align-items: center; gap: 15px;">
                        <a href="{{ url('/login') }}" style="text-decoration: none; font-size: 14px; color: #428bca;">Đã có tài khoản</a>
                        <button type="submit" class="btn-blue" style="background-color: #0056b3; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
        <footer>Lập trình web @01/2026</footer>
    </div>
</body>
</html>
