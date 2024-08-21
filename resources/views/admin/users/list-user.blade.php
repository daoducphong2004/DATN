@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách người dùng
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
        <h4 class="text-primary mb-4">Danh sách người dùng</h4>
        <table border="1" class="table">
            <tr>
                <th>Tên Đăng Nhập</th>
                <th>Pass</th>
                <th>Email</th>
                <th>Kinh Nghiệm</th>
                <th>Cấp Độ</th>
                <th>Vai Trò</th>
                <th>Ảnh Đại Diện</th>
                <th>
                    <a href="">Thêm Tài Khoản</a>
                </th>
            </tr>
            {{-- @foreach ($data as $value) --}}
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <img width="50px" src="" alt="Không có ảnh đại diện">
                    </td>
                    <td><a href="">Sửa</a></td>
                    <td><a href="" onclick="return confirmDelete()">Xoá</a></td>
                </tr>
            {{-- @endforeach --}}
        </table>
    </div>
@endsection

@push('scripts')

@endpush

