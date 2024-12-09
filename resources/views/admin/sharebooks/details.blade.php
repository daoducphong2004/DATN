@extends('admin.layouts.default')

@section('content')
    <h1>Chi tiết đồng tác giả - {{ $book->title }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên người dùng</th>
                <th>Email</th>
                <th>Quyền chỉnh sửa</th>
                <th>Ngày thêm</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shareBooks as $shareBook)
                <tr>
                    <td>{{ $shareBook->id }}</td>
                    <td>{{ $shareBook->user->name }}</td>
                    <td>{{ $shareBook->user->email }}</td>
                    <td>{{ $shareBook->can_edit ? 'Có' : 'Không' }}</td>
                    <td>{{ $shareBook->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
