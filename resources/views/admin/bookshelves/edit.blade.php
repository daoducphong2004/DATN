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

    <div class="container">
        <form action="{{ route('bookshelves_update', $id->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                    value="{{ $id->name }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">description</label>
                <input type="text" class="form-control" name="description" aria-describedby="emailHelp"
                    value="{{ $id->description }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">location</label>
                <input type="text" class="form-control" name="location" aria-describedby="emailHelp"
                    value="{{ $id->location }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">status</label>
                <input type="text" class="form-control" name="status" aria-describedby="emailHelp"
                    value="{{ $id->status }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">book_id</label>
                <input type="number" class="form-control" name="book_id" aria-describedby="emailHelp"
                    value="{{ $id->book_id }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">user_id</label>
                <input type="number" class="form-control" name="user_id" aria-describedby="emailHelp"
                    value="{{ $id->user_id }}">
            </div>
            <button type="submit" class="mt-3 btn btn-success">Save</button>
        </form>
    </div>
</body>

</html>
