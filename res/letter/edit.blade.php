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
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    @endif
    <form action="{{route('events_update' , $id->id)}}" method="post"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">event_name</label>
            <input type="text" class="form-control" name="event_name" aria-describedby="emailHelp" placeholder="Enter email" value="{{$id->event_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">banner</label>
            <img src="{{'/storage/' . $id->banner}}" alt="" width="50px">
            <input type="file" class="form-control" name="banner" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">date</label>
            <input type="date" class="form-control" name="date" aria-describedby="emailHelp" placeholder="Enter email" value="{{$id->date}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">location</label>
            <input type="text" class="form-control" name="location" aria-describedby="emailHelp" placeholder="Enter email" value="{{$id->location}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">description</label>
            <input type="text" class="form-control" name="description" aria-describedby="emailHelp" placeholder="Enter email" value="{{$id->description}}">
          </div>
          <button type="submit" class="btn">Save</button>
    </form>
</body>
</html>