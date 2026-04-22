<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xem chi tiết - Lập trình web</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .form-box {
            width: 100%;
            max-width: 900px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>Lập trình web</header>
        
        <nav>
            <a href="{{ url('/') }}">Home</a> | <a href="{{ route('users.index') }}">Danh sách</a>
        </nav>

        <div class="main-content">
            <div class="form-box">
                <h2>Màn hình chi tiết</h2>
                <p><strong>Username:</strong> {{ $user->username }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <a href="{{ route('users.edit', $user->id) }}">
                    <button>Chỉnh sửa</button>
                </a>
            </div>
        </div>

        <footer>
            <p>Lập trình web @2026</p>
        </footer>
    </div>
</body>
</html>
