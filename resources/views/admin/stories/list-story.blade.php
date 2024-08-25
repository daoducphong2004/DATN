@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách truyện
@endsection

@push('styles')
    
@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <h2 class="text-primary mb-4">Danh Sách Truyện</h2>
        <a class="btn btn-primary" href="">Thêm Truyện</a>
        <table border="1" class="table">
            <tr>
                <th>Mã Truyện</th>
                <th>Tên Truyện</th>
                <th>Hình ảnh </th>
                <th>Hành động</th>
            </tr>
            {{-- @foreach ($stories as $story) --}}
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <img src="" alt="" width="60px">
                    </td>
                    <td>
                        <a class="btn btn-success" href="">Chi tiết</a>
                        <a class="btn btn-warning" href="">Sửa</a>
                        <a class="btn btn-danger" href="" onclick="return confirmDelete()">Xoá</a>
                    </td>
                </tr>
            {{-- @endforeach --}}
        </table>
    </div>
@endsection

@push('scripts')

@endpush

