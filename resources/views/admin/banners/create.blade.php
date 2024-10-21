@extends('admin.layouts.default')

@section('content')
    <div class="container">
        <h1>Create Banner</h1>
        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image_path">Image</label>
                <input type="file" name="image_path" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="device_type">Device Type</label>
                <select name="device_type" class="form-control">
                    <option value="mobile">Mobile</option>
                    <option value="pc">PC</option>
                </select>
            </div>

            <div class="form-group">
                <label for="is_active">Is Active</label>
                <input type="checkbox" name="is_active">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>
@endsection
