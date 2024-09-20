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
        <table border="1" id="list-story" class="table">
            <thead>
                <tr>
                    <th>Tên truyện</th>
                    <th>Ảnh truyện</th>
                    <th>Người đăng</th>
                    <th>Lượt xem</th>
                    <th>Lượt thích</th>
                    <th>VIP</th>
                    <th>Trạng thái</th>
                    <th>
                        <a class="btn btn-primary" href="">Thêm Truyện</a>
                    </th>
                </tr>
            </thead>
            <tbody>
            {{-- @foreach ($stories as $story) --}}
                <tr>
                    <td></td>
                    <td>
                        <img width="50px" src="" alt="Không có ảnh bìa  ">
                    </td>
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
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        jQuery(document).ready(function() {
            console.log("jQuery version:", jQuery.fn.jquery);
            jQuery('#list-story').DataTable();
        });
    </script>
@endpush

