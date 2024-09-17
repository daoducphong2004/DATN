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
                <th scope="col">Slug</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>

                <th scope="col">
                    <a class="btn btn-primary" href="{{ route('genres_create') }}">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre->slug }}</td>
                    <td>{{ $genre->name }}</td>
                    <td>{{ $genre->description}}</td>

                    <td>
                        <a class="btn btn-success" href="{{ route('genres_edit', $genre->id) }}">Edit</a>
                        <form action="{{ route('genres_delete', $genre->id) }}" method="post">
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

    {{ $genres->links() }}
</body>

</html>
