<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>Tên người dùng</th>
                <th>Email</th>
                <th>Mật khẩu</th>
                <th>Tên đầy đủ</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Ảnh Đại Diện</th>
                <th>Trạng thái</th>
                <th>Số xu</th>

                <th scope="col">
                    <a class="btn btn-primary" href="{{ route('user_create') }}">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->date_of_birth }}</td>
                    <td>
                        <img width="50px" src="{{ asset('/storage/' . $user->avatar_url) }}"
                            alt="Không có ảnh đại diện">
                    </td>
                    <td>{{ $user->status }}</td>
                    <td>{{ $user->coin_earned }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('user_edit', $user->id) }}">Edit</a>
                        <form action="{{ route('user_delete', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Xác nhận xóa')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
</body>

</html>
