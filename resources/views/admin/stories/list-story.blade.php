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
        <table border="1" id="list-story" class="table">
            <thead>
                <tr>
                    <th>Tên truyện</th>
                    <th>Ảnh truyện</th>
                    <th>Người đăng</th>
                    <th>Nhóm đăng</th>
                    <th>Lượt xem</th>
                    <th>Lượt thích</th>
                    <th>VIP</th>
                    <th>Trạng thái</th>
                    <th>
                        <a class="btn btn-primary" href="{{ route('story_add') }}">Thêm Truyện</a>
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
                    <td>{{ $story->view }}</td>
                    <td>{{ $story->like }}</td>
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
                        <a class="btn btn-success" href="{{ route('story.show', $story->id) }}">Chi tiết</a>
                        <a class="btn btn-warning" href="{{ route('story.edit', $story->id) }}">Sửa</a>
                        <a class="btn btn-danger" href="{{ route('story.destroy', $story->id) }}" onclick="return confirmDelete()">Xoá</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        jQuery(document).ready(function() {
            console.log("jQuery version:", jQuery.fn.jquery);
            jQuery('#list-story').DataTable();
        });
    </script>
@endpush
@push('styles')
    <style>
        .table th, .table td {
            vertical-align: middle;
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
