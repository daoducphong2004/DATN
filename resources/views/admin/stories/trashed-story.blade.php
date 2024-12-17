@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách truyện đã xóa - Cổng Light Novel - Đọc Light Novel
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-2 flex-grow-1">Thùng Rác - Danh Sách Truyện Đã Xóa</h5>
                    <div>
                        <a href="{{ route('admin_storylist') }}" class="btn btn-primary">
                            <i class="ri-arrow-left-line"></i> Quay lại danh sách truyện
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Tên truyện</th>
                                <th>Người đăng</th>
                                <th>Nhóm đăng</th>
                                <th>Lượt xem</th>
                                <th>Thao tác</th>
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
                                        <form action="{{ route('admin_story_restore', $story->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            <button type="submit" class="btn btn-success mb-1">Khôi phục</button>
                                        </form>

                                        <form action="{{ route('admin_story_forceDelete', $story->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Xóa vĩnh viễn</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection
