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
        <h1>Danh Sách Truyện</h1>
        <table border="1" class="table">
            <tr>
                <th>Mã Truyện</th>
                <th>Tên Truyện</th>
                <th>Hình ảnh </th>
                <th>
                    <a href="">Thêm Truyện</a>
                </th>
            </tr>
            {{-- @foreach ($stories as $story) --}}
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <img src="" alt="" width="60px">
                    </td>
                    <td>
                        <a href="">Chi tiết</a>
                        <a href="">Sửa</a>
                        <a href="" onclick="return confirmDelete()">Xoá</a>
                    </td>
                </tr>
            {{-- @endforeach --}}
        </table>
    </div>
@endsection

@push('scripts')

@endpush

