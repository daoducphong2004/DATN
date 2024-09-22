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
                <th>ID</th>
                <th>Truyện</th>
                <th>Người Bình Luận</th>
                <th>ID bình luận (nếu có)</th>
                <th>Nội Dung</th>
                <th>Ngày Bình Luận</th>
                <th>Hành Động</th>
            </tr>
            @foreach ($bookcomment as $comment)
                <tr>
                    <td>{{ $comment -> id }}</td>
                    <td>{{ $comment->book->title }}</td>
                    <td>{{ $comment->user->username }}</td>
                    <td>{{ $comment -> parent_id }}</td>
                    <td>{{ $comment -> content }}</td>
                    <td>{{ $comment -> created_at->format('H:i, d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('bookComment.create') }}" class="btn btn-primary">Thêm</a>
                        <a class="btn btn-warning" href="">Sửa</a>
                        <form action="{{ route('bookComment.destroy', $comment) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không?')">Xóa</button>
                        </form>
                        {{-- <a class="btn btn-danger" href="" onclick="return confirmDelete()">Xoá</a> --}}
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $bookcomment->links() }}
    </div>
@endsection

@push('scripts')

@endpush

