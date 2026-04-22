<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Danh sách user</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .form-box {
            width: 100%;
            /* 👈 full container */
            max-width: 900px;
            /* 👈 to hơn */
            margin: auto;
        }
    </style>
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
                <h2>Danh sách user</h2>

                @php
                    $perPage = 5;
                    $currentPage = request()->get('page', 1);
                    $total = count($users);

                    $items = $users->slice(($currentPage - 1) * $perPage, $perPage);
                @endphp

                <table border="1" cellpadding="10" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $index => $user)
                            <tr>
                                <td>{{ ($currentPage - 1) * $perPage + $index + 1 }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}">Edit</a> |
                                    <a href="{{ route('users.show', $user->id) }}">View</a> |
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa user này không?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background:none; border:none; color:-webkit-link; color:blue; padding:0; cursor:pointer; font:inherit; text-decoration:underline;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination -->
                @php
                    $totalPages = ceil($total / $perPage);
                @endphp

                <div style="margin-top: 15px;">
                    @if($currentPage > 1)
                        <a href="?page={{ $currentPage - 1 }}">Previous</a>
                    @endif

                    @for ($i = 1; $i <= $totalPages; $i++)
                        <a href="?page={{ $i }}" style="margin: 0 5px; {{ $i == $currentPage ? 'font-weight:bold;' : '' }}">
                            {{ $i }}
                        </a>
                    @endfor

                    @if($currentPage < $totalPages)
                        <a href="?page={{ $currentPage + 1 }}">Next</a>
                    @endif
                </div>
            </div>
        </div>

        <footer>Lập trình web @2026</footer>
    </div>
</body>

</html>