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
        <a href="{{ route('admin_stories_trashed') }}" class="btn btn-secondary">
            <i class="fa fa-trash"></i> Thùng rác
        </a>
        <!-- Thêm nút Duyệt Truyện -->
        <div class="mb-5">
            <a class="btn btn-info" href="{{ route('admin_stories_approval') }}">
                <i class="fas fa-check-circle"></i> Duyệt Truyện
            </a>
        </div>
        <table  id="list-story" class="table">
            <thead>
                <tr>
                    <th>Tên truyện</th>
                    <th>Ảnh truyện</th>
                    <th>Người đăng</th>
                    <th>Nhóm đăng</th>
                    <th>Số Tập</th>
                    <th>Lượt xem</th>
                    <th>Lượt thích</th>
                    <th>Đánh giá</th>
                    <th>VIP</th>
                    <th>Trạng thái</th>
                    <th>
                        <a class="btn btn-success" href="{{ route('admin_storycreate') }}">Thêm Truyện</a>
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($stories as $story)
                <tr>
                    <td>{{ $story->title }}</td>
                    <td>
                        <img width="50px" src="{{ asset(Storage::url($story->book_path)) }}" alt="Không có ảnh bìa">
                    </td>
                    <td>{{ $story->user->username }}</td>
                    <td>{{ $story->group->name }}</td>
                    <td>{{ $story->episodeCount() }}</td>
                    <td>{{ $story->view }}</td>
                    <td>{{ $story->like }}</td>
                    <td>{{ $story->average_stars }}/5 <i class="fas fa-star"></i></td>
                    <td>{{ $story->is_VIP ? 'Có' : 'Không' }}</td>
                    <td>
                        @if($story->status == 1)
                            Đang tiến hành
                        @elseif($story->status == 2)
                            Tạm ngưng
                        @elseif($story->status == 3)
                            Đã hoàn thành
                        @endif
                    </td>

                     <td>
                        <a class="btn btn-primary" href="{{ route('admin_storyshow', $story->id) }}">Chi tiết</a>
                        <a class="btn btn-warning" href="{{ route('admin_storyedit', $story->id) }}">Sửa</a>
                        <a class="btn btn-info" href="{{ route('showPublicationHistory',$story->id) }}">Lịch sử</a>
                        <form action="{{ route('admin_storydestroy', $story->id) }}" method="POST" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        function confirmDelete() {
    return confirm('Bạn có chắc chắn muốn xóa không?');
}
        jQuery(document).ready(function() {
            console.log("jQuery version:", jQuery.fn.jquery);
            jQuery('#list-story').DataTable();
        });
    </script>
@endpush
@push('styles')
    <style>
        .table th, .table td {
            vertical-align: middle !important;
            text-align: center;
        }

        .table th {
            font-size: 1rem;
            font-weight: 600;
        }

        .table td {
            font-size: 0.9rem;
        }

        .table img {
            max-width: 100%;
            height: auto;
        }

        .btn {
            margin: 2px;
        }
    </style>
@endpush
