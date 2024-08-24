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
                
                <th scope="col"><button class="btn btn-primary"><a href="{{route('events_create')}}">Create</a></button></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($letters as $letter)
                <tr>
                    <td>{{ $letter->letter_name }}</td>
                    <td>{{ $letter->date }}</td>
                    <td>{{ $letter->location }}</td>
                    <td>{{ $letter->description }}</td>
                    <td>
                        <button class="btn"><a href="{{route('events_edit', $letter->id)}}">Edit</a> </button>
                        <form action="{{route('events_delete', $letter->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Xác nhận xóa')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>


