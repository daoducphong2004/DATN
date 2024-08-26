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
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">location</th>
                <th scope="col">status</th>
                <th scope="col">book_id</th>
                <th scope="col">user_id</th>

                <th scope="col">
                    <a class="btn btn-primary" href="{{ route('bookshelves_create') }}">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookshelves as $bookshelve)
                <tr>
                    <td>{{ $bookshelve->name }}</td>
                    <td>{{ $bookshelve->description }}</td>
                    <td>{{ $bookshelve->location }}</td>
                    <td>{{ $bookshelve->status }}</td>
                    <td>{{ $bookshelve->book_id }}</td>
                    <td>{{ $bookshelve->user_id }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('bookshelves_edit', $bookshelve->id) }}">Edit</a>
                        <form action="{{ route('bookshelves_delete', $bookshelve->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class=" btn btn-danger" type="submit"
                                onclick="return confirm('Xác nhận xóa')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $bookshelves->links() }}
</body>

</html>
