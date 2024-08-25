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
                <th scope="col">page_number</th>
                <th scope="col">note</th>
                <th scope="col">status</th>
                <th scope="col">book_id</th>
                <th scope="col">user_id</th>

                <th scope="col">
                    <a class="btn btn-primary" href="{{ route('bookmarks_create') }}">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookmarks as $bookmark)
                <tr>
                    <td>{{ $bookmark->name }}</td>
                    <td>{{ $bookmark->description }}</td>
                    <td>{{ $bookmark->page_number }}</td>
                    <td>{{ $bookmark->note }}</td>
                    <td>{{ $bookmark->status }}</td>
                    <td>{{ $bookmark->book_id }}</td>
                    <td>{{ $bookmark->user_id }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('bookmarks_edit', $bookmark->id) }}">Edit</a>
                        <form action="{{ route('bookmarks_delete', $bookmark->id) }}" method="post">
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
</body>

</html>
