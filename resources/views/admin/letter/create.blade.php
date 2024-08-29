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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container">
        <form action="{{ route('letter_store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">content</label>
                <input type="text" class="form-control" name="content" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">receiver_id</label>
                <input type="number" class="form-control" name="receiver_id" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">sender_id</label>
                <input type="number" class="form-control" name="sender_id" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">status</label>
                <input type="text" class="form-control" name="status" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="mt-3 btn btn-success">Create</button>
        </form>
    </div>
</body>

</html>
