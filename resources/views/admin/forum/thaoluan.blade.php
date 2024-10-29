

@extends('admin.layouts.default')

@section('content')
<div class="container">
    <h1 class="my-4">Danh sách thảo luận</h1>

    <a href="{{ route('banners.create') }}" class="btn btn-primary mb-3">Tạo mới thảo luận</a>

    <!-- Display Success Messages -->
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
                    <th>Bình luận</th>
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
                    <td><a class="topic-title" href="https://docln.net/thao-luan/2266-thao-luan-cho-tac-gia-oln"><i
                    class="fas fa-star"></i> {{$item_forums->title}}</a></td>
                    <td><span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                            style="color: 
                                        {{$item_forums->color}}
                                        "></i></span>
                    <a href="/thao-luan?chuyen-muc=5">
                        {{$item_forums->content_categories}}
                    </a></td>
                    <td>{!!$item_forums->content!!}</td>
                    <td>{{$item_forums->viewer}}</td>
                    <td><time class="topic-time timeago" title="{{$item_forums->created_at}}"
                    datetime="{{$item_forums->created_at}}">{{$item_forums->time_ago}}</time></td>
                    <td>{{$item_forums->username}}</td>
                    <td class="col-4 col-md-3 col-lg-2 text-right"><a href="{{route('editforum',$item_forums->id)}}" class="btn btn-warning btn-sm">Sửa</a>
                        <form method="post" action="{{route('deleteforum',$item_forums->id)}}" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination (if needed) -->
    <div class="d-flex justify-content-center mt-4">
        {{-- {{ $banners->links() }} --}}
    </div>
</div>
@endsection