@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách tin tức
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
        <h2 class="text-primary mb-4">Danh Sách tin tức</h2>
        <a href="{{ route('admin_stories_trashed') }}" class="btn btn-secondary">
            <i class="fa fa-trash"></i> Thùng rác
        </a>
        <!-- Thêm nút Duyệt Truyện -->
        <table  id="list-story" class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Tác giả</th>
                    <th>Thời gian tạo</th>
                    <th>Xem Chi tiết</th>
                    <th style="width: 10%">
                        <a class="btn btn-success" href="{{ route('newsAdd') }}">Thêm tin tức</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($dataNews && count($dataNews)))
                    @foreach ($dataNews as $key => $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->content}}</td>
                            <td>{{$item->author}}</td>
                            <td>{{$item->created_at}}</td>
                            <td><a href="#" class="btn btn-success">Xem chi tiết</a></td>
                        </tr>
                    @endforeach
                @else
                        <tr>
                            <td colspan="7" class="text-center">Không có dữ liệu</td>
                        </tr>
                @endif

            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
@push('styles')

@endpush
