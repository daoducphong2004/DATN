@extends('admin.layouts.default')
@section('title')
    Danh sách thảo luận - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
    <div class="container">
        <h1 class="my-4">Danh sách thảo luận</h1>

        <a href="{{ route('admin.forum.create') }}" class="btn btn-primary mb-3">Tạo mới thảo luận</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Chủ đề</th>
                    <th>Chuyên mục</th>
                    <th>Thảo luận</th>
                    <th>Lượt xem</th>
                    <th>Gần nhất</th>
                    <th>Người đăng cuối</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_forums as $item_forums)
                <tr>
                    <td>{{ $item_forums->id }}</td>
                    <td>
                        <a href="{{ $item_forums->link }}">{{ $item_forums->title }}</a>
                    </td>
                    <td>
                        <span>
                            <i class="fas fa-circle" style="color: {{ $item_forums->color }}"></i>
                        </span>
                        <a href="{{ $item_forums->category_link }}">
                            {{ $item_forums->content_categories }}
                        </a>
                    </td>
                    <td>
                        <button class="btn btn-link btn-sm view-comment" 
                                data-title="{{ $item_forums->title }}" 
                                data-content="{{ $item_forums->content }}">Xem Chi Tiết Thảo luận</button>
                    </td>
                    <td>{{ $item_forums->viewer }}</td>
                    <td>{{ $item_forums->time_ago }}</td>
                    <td>{{ $item_forums->username }}</td>
                    <td>
                        <a href="{{ route('editforum', $item_forums->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form method="post" action="{{ route('deleteforum', $item_forums->id) }}" style="display:inline;" 
                              onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        <div class="d-flex justify-content-center mt-4">
            {{-- {{ $banners->links() }} --}}
        </div>
    </div>

<!-- Modal for displaying comments -->
<div id="commentModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Chi tiết Thảo luận</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearCommentModal()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="commentContent" style="white-space: pre-wrap;"></div>
            </div>
        </div>
    </div>
</div>

@endsection