@extends('admin.layouts.default')

@section('title')
    @parent
    Quản lý Banner - Cổng Light Novel - Đọc Light Novel
@endsection

@push('styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Quản Lý Banner</h5>
                    <div>
                        <a href="{{ route('banners.create') }}" class="btn btn-secondary">
                            <i class="ri-add-circle-fill"></i> Thêm Banner Mới
                        </a>
                    </div>
                    <!-- Display Success Messages -->
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Ảnh Banner</th>
                                <th>Loại thiết bị</th>
                                <th>Trạng thái</th>
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
                                        <img src="{{ asset(Storage::url($banner->image_path)) }}" alt="Banner Image"
                                            class="img-thumbnail" style="width: 100px; height: auto;">
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
                                        <a href="{{ route('banners.edit', $banner->id) }}"
                                            class="btn btn-warning btn-sm">Sửa</a>
                                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this banner?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection
