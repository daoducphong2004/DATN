@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách bình luận
@endsection

@push('styles')

@endpush

@section('content')
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="p-4" style="min-height: 800px;">
        <h2 class="text-primary mb-4">Danh Sách Bình Luận</h2>
        <table border="1" class="table">
            <tr>
                <th>ID</th>
                <th>Truyện</th>
                <th>Người Bình Luận</th>
                <th>Email</th>
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
                    <td>{{ $comment->user->email }}</td>
                    <td>{{ $comment -> parent_id }}</td>
                    <td>{{ $comment -> content }}</td>
                    <td>{{ $comment -> created_at->format('H:i, d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('truyen.truyen', ['slug' => $comment->book->slug, 'reply_to' => $comment->id]) }}#reply-form-{{ $comment->id }}" class="btn btn-primary">Chi tiết</a>
                        {{-- <a class="btn btn-warning" href="">Sửa</a> --}}
                        @if (!Auth::check())
                            <a href="{{ route('login') }}" class="btn btn-danger"
                                onclick="alert('Bạn phải đăng nhập để thực hiện tính năng này!')">Xóa</a>
                        @elseif (Auth::user() && Auth::user()->role->name === 'mod' || Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'super_admin')
                            <form action="{{ route('bookComment.destroy', $comment) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không?')">Xóa</button>
                            </form>
                        @else
                            <a href="#" class="btn btn-danger"
                                onclick="alert('Bạn không có quyền truy cập tính năng này!')">Xoá</a>
                        @endif
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

