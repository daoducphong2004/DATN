@extends('admin.layouts.default')

@section('content')
    <h1>Danh sách truyện</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên truyện</th>
                <th>Số đồng tác giả</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->share_books_count }}</td>
                    <td>
                        <a href="{{ route('admin.sharebooks.details', $book->id) }}" class="btn btn-info">Chi tiết</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
