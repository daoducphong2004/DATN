@extends('admin.layouts.default')
@section('title')
    Sửa Banner
@endsection
@section('content')
<div class="container">
    <h1>Sửa Banner</h1>
    <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $banner->title }}" required>
        </div>

        <div class="form-group">
            <label for="current_image">Current Image</label><br>
            <img src="{{ asset(Storage::url($banner->image_path)) }}" alt="Current Image" style="width: 100px; height: auto;">
        </div>

        <div class="form-group">
            <label for="image_path">Upload New Image (optional)</label>
            <input type="file" name="image_path" class="form-control">
        </div>

        <div class="form-group">
            <label for="device_type">Device Type</label>
            <select name="device_type" class="form-control">
                <option value="mobile" {{ $banner->device_type == 'mobile' ? 'selected' : '' }}>Mobile</option>
                <option value="pc" {{ $banner->device_type == 'pc' ? 'selected' : '' }}>PC</option>
            </select>
        </div>

        <div class="form-group">
            <label for="is_active">Is Active</label>
            <input type="checkbox" name="is_active" {{ $banner->is_active ? 'checked' : '' }}>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>
@endsection
