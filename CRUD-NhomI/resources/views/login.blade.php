<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lập trình web - Đăng nhập</title>
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
                <h2>Màn hình đăng nhập</h2>
                
                <form action="{{ url('/login') }}" method="POST">
                    @csrf <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="{{ old('username') }}" required>
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" required>
                    </div>

                    <div style="margin-left: 100px; font-size: 0.8em; display: flex; align-items: center; gap: 5px;">
                        <input type="checkbox" name="remember" id="remember"> 
                        <label for="remember" style="width: auto; margin: 0;">Ghi nhớ đăng nhập</label>
                    </div>

                    <div style="margin-top: 20px; display: flex; justify-content: space-between; align-items: center;">
                        <a href="{{ url('/forgot-password') }}" style="font-size: 0.8em; color: blue; text-decoration: none;">Quên mật khẩu?</a>
                        <button type="submit" class="btn-blue">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>

        <footer>Lập trình web @2026</footer>
    </div>
</body>
</html>