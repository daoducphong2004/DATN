@extends('admin.layouts.default')

@section('title')
    @parent
    Thùng rác - Danh sách truyện đã xóa
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <h2 class="text-primary mb-4">Thùng Rác - Danh Sách Truyện Đã Xóa</h2>
        <a href="{{ route('admin_storylist') }}" class="btn btn-primary mb-4">
            <i class="fas fa-arrow-left"></i> Quay lại danh sách truyện
        </a>
        <br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên truyện</th>
                    <th>Người đăng</th>
                    <th>Nhóm đăng</th>
                    <th>Lượt xem</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trashedStories as $story)
                    <tr>
                        <td>{{ $story->title }}</td>
                        <td>{{ $story->user->username }}</td>
                        <td>{{ $story->group->name }}</td>
                        <td>{{ $story->view }}</td>
                        <td>
                            <form action="{{ route('admin_story_restore', $story->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success">Khôi phục</button>
                            </form>

                            <form action="{{ route('admin_story_forceDelete', $story->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa vĩnh viễn</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $trashedStories->links() }}
    </div>
@endsection
