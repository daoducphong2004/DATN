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
        <h2 class="text-primary mb-4">Danh sách người dùng</h2>
        <table border="1" class="table">
            <tr>
                <th>STT</th>
                <th>Tên người dùng</th>
                <th>Email</th>
                <th>Mật khẩu</th>
                <th>Tên đầy đủ</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Ảnh Đại Diện</th>
                <th>Trạng thái</th>
                <th>Số xu</th>
                <th>
                    <a class="btn btn-primary" href="">Thêm Tài Khoản</a>
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
                    <td></td>
                    <td>
                        <img width="50px" src="" alt="Không có ảnh đại diện">
                    </td>
                    <td></td>
                    <td></td>
                    <td>
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

