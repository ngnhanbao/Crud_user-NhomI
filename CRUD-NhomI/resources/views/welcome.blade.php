<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lập trình web - Trang chủ</title>
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
            <h1>Chào mừng đến với Website - Nhóm I</h1>
        </div>
        <footer>Lập trình web @2026</footer>
    </div>
</body>
</html>