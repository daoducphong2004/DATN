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
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">status</th>
                <th scope="col">receiver_id</th>
                <th scope="col">sender_id</th>

                <th scope="col">
                    <a class="btn btn-primary" href="{{ route('letter_create') }}">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($letters as $letter)
                <tr>
                    <td>{{ $letter->title }}</td>
                    <td>{{ $letter->content }}</td>
                    <td>{{ $letter->status }}</td>
                    <td>{{ $letter->receiver_id }}</td>
                    <td>{{ $letter->sender_id }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('letter_edit', $letter->id) }}">Edit</a>
                        <form action="{{ route('letter_delete', $letter->id) }}" method="post">
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

    {{ $letters->links() }}
</body>

</html>
