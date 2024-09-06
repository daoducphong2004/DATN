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
        <table border="1" class="table">
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Tác giả</th>
                <th>Lượt xem</th>
                <th>Lượt thích</th>
                <th>Họa sĩ minh họa</th>
                <th>Ảnh bìa</th>
                <th>Mô tả</th>
                <th>Ghi chú</th>
                <th>VIP</th>
                <th>Trạng thái</th>
                <th>Độ tuổi</th>
                <th>Thể loại</th>
                <th>
                    <a class="btn btn-primary" href="">Thêm Truyện</a>
                </th>
            </tr>
            {{-- @foreach ($stories as $story) --}}
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <img width="50px" src="" alt="Không có ảnh bìa  ">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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

