@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách bình luận
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
        <h2 class="text-primary mb-4">Danh Sách Bình Luận</h2>
        <table border="1" class="table">
            <tr>
                <th>ID Users</th>
                <th>Người Bình Luận</th>
                <th>Nội Dung</th>
                <th>Ngày Bình Luận</th>
                <th>Hành Động</th>
            </tr>
           @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->content}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        <a class="btn btn-warning" href="">Sửa</a>
                        <a class="btn btn-danger" href="" onclick="return confirmDelete()">Xoá</a>
                    </td>
                </tr>
             @endforeach
        </table>
    </div>
@endsection

@push('scripts')

@endpush

