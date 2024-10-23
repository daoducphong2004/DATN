@extends('admin.layouts.default')

@section('content')
<div class="container">
    <h1 class="my-4">Banner Management</h1>

    <a href="{{ route('banners.create') }}" class="btn btn-primary mb-3">Create New Banner</a>

    <!-- Display Success Messages -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Device Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <td>{{ $banner->id }}</td>
                        <td>{{ $banner->title }}</td>
                        <!-- Display a thumbnail of the image -->
                        <td>
                            <img src="{{ asset(Storage::url($banner->image_path)) }}" alt="Banner Image" class="img-thumbnail" style="width: 100px; height: auto;">
                        </td>
                        <td>{{ ucfirst($banner->device_type) }}</td>
                        <!-- Display Active Status -->
                        <td>
                            <span class="badge {{ $banner->is_active ? 'badge-success' : 'badge-danger' }}">
                                {{ $banner->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <!-- Action Buttons -->
                        <td>
                            <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this banner?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination (if needed) -->
    <div class="d-flex justify-content-center mt-4">
        {{-- {{ $banners->links() }} --}}
    </div>
</div>
@endsection
