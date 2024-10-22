@extends('admin.layouts.default')

@section('content')
<div class="container">
    <h1>Banner Details</h1>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $banner->title }}" readonly>
    </div>
    <div class="form-group">
        <label for="image_path">Image Path</label>
        <input type="text" name="image_path" class="form-control" value="{{ $banner->image_path }}" readonly>
    </div>
    <div class="form-group">
        <label for="device_type">Device Type</label>
        <input type="text" name="device_type" class="form-control" value="{{ $banner->device_type }}" readonly>
    </div>
    <div class="form-group">
        <label for="is_active">Is Active</label>
        <input type="checkbox" name="is_active" {{ $banner->is_active ? 'checked' : '' }} disabled>
    </div>
    <a href="{{ route('banners.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
