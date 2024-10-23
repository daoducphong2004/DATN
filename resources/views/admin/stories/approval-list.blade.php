@extends('admin.layouts.default')

@section('title')
    @parent
    Duyệt truyện
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

        <h2 class="text-primary mb-4">Danh Sách Truyện Cần Duyệt</h2>
        <a href="{{ route('admin_storylist') }}" class="btn btn-primary mb-4">
            <i class="fas fa-arrow-left"></i> Quay lại danh sách truyện
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên truyện</th>
                    <th>Người đăng</th>
                    <th>Lượt xem</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendingStories as $story)
                    <tr>
                        <td>{{ $story->title }}</td>
                        <td>{{ $story->user->username }}</td>
                        <td>{{ $story->view }}</td>
                        <td>
                            <form action="{{ route('admin_story_approve', $story->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success">Duyệt</button>
                            </form>

                            <form action="{{ route('admin_story_reject', $story->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-danger">Từ chối</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $pendingStories->links() }}
    </div>
@endsection
