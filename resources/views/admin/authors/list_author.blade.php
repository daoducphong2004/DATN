@extends('admin.layouts.default')
@section('title')
    Thống kê tác giả - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
<div class="container">
    <h1>Danh sách Tác giả</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Avatar</th>
                <th>Tổng số coin</th>
                <th>Coin tác giả</th>
                <th>Coin admin</th>
                <th>Sách</th>
                <th>Sách tham gia</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->username }}</td>
                    <td>
                        <img src="{{ asset(Storage::url($author->avatar_url)) }}" alt="Avatar" style="width: 50px; height: 50px; border-radius: 50%;">
                    </td>
                    <td>{{ $author->total_coin }}</td>
                    <td>{{ $author->total_user }}</td>
                    <td>{{ $author->total_admin }}</td>
                    <td>{{ $author->books_count }}</td>
                    <td>{{ $author->shared_books_count }}</td>
                    <td>
                        <a href="{{ route('admin.liststoryauthor',$author->id) }}" class="btn btn-primary">Chi tiết</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row" style="margin: 10px"></div>

@endsection