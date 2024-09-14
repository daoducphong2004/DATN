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
                <th scope="col">User</th>

                <th scope="col">
                    <a class="btn btn-primary" href="{{ route('groups_create') }}">Add</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user_group as $user)
                <tr>
                    <td>{{ $user->name }}</td>

                    <td>
                        <a class="btn btn-success" href="{{ route('groups_edit', $group->id) }}">Edit</a>
                        <form action="{{ route('groups_delete', $group->id) }}" method="post">
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

    {{ $groups->links() }}
</body>

</html>
