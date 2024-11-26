@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách bình luận chap
@endsection

@push('styles')
@endpush

@section('content')
    @if (session('message'))
        <div class="alert alert-primary" role="alert">
            {{ session('message') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Danh Sách Bình Luận Chap</h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Chapter</th>
                                <th>User</th>
                                <th>Content</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td><a href="{{ route('truyen.chuong',['slug'=>$comment->chapter->book->slug ,'chapter_slug'=> $comment->chapter->slug]) }}">{{ $comment->chapter->title }}</a></td>
                                    <td><a href="{{ route('user.books',$comment->user->id) }}">{{ $comment->user->username }}</a></td>
                                    <td>{!! Str::limit($comment->content, 50) !!}</td>
                                    <td>
                                        @if ($comment->is_delete)
                                            <a href="{{ route('admin.chaptercomments.restore', $comment->id) }}"
                                                class="btn btn-warning">Khôi phục</a>
                                            <a href="{{ route('admin.chaptercomments.destroy', $comment->id) }}"
                                                class="btn btn-danger">Xóa vĩnh viễn</a>
                                        @else
                                            <a href="{{ route('admin.chaptercomments.delete', $comment->id) }}"
                                                class="btn btn-danger">Xóa</a>
                                        @endif
                                        {{-- <a href="{{ route('admin.chaptercomments.show', $comment->id) }}"
                                            class="btn btn-primary">Chi Tiết</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $comments->links() }}
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection

@push('scripts')
@endpush
