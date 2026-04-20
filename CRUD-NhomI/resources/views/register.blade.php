<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lập trình web - Đăng ký</title>
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
                <h2>Màn hình đăng ký</h2>
                
                <form action="{{ url('/register') }}" method="POST">
                    @csrf <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="{{ old('username') }}">
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
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div style="margin-top: 20px; text-align: right; display: flex; justify-content: flex-end; align-items: center; gap: 15px;">
                        <a href="{{ url('/login') }}" style="text-decoration: none; font-size: 14px; color: #666;">Đã có tài khoản?</a>
                        <button type="submit" class="btn-blue">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
        <footer>Lập trình web @2026</footer>
    </div>
</body>
</html>