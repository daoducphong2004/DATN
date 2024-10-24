@extends('user.layout.master')

@section('content')
<div class="container">
    <h1 class="my-4">Lịch Sử Đăng Của Bạn Cho Truyện: {{ $book->title }}</h1>

    <div class="card mb-4">
        <div class="card-header">
            <h2>Thông Tin Truyện</h2>
        </div>
        <div class="card-body">
            <p><strong>Tiêu đề:</strong> {{ $book->title }}</p>
            <p><strong>Tác giả:</strong> {{ $book->author }}</p>
            <p><strong>Mô tả:</strong> {{ $book->description }}</p>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <h2>Người Dùng Được Chia Sẻ Quyền Chỉnh Sửa</h2>
        </div>
        <div class="card-body">
            @if($book->sharedUsers->isEmpty())
                <p>Không có người dùng nào được chia sẻ quyền chỉnh sửa cho truyện này.</p>
            @else
                <ul>
                    @foreach ($book->sharedUsers as $sharedUser)
                        <li>
                            {{ $sharedUser->user->username }} (ID: {{ $sharedUser->user->id }})
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2>Tập Và Chương Đã Đăng</h2>
        </div>
        <div class="card-body">
            @foreach ($book->episodes as $episode)
            <div class="mb-4">
                <h3 class="mb-3">Tập: {{ $episode->title }}</h3>
                <p><strong>Người đăng tập:</strong> {{ $episode->user->username }} (ID: {{ $episode->user->id }})</p>
                <p><strong>Mô tả tập:</strong> {{ $episode->description }}</p>

                <table class="table table-bordered mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th>Chương</th>
                            <th>Người Đăng Chương</th>
                            <th>Nội Dung</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($episode->chapters as $chapter)
                        <tr>
                            <td>{{ $chapter->title }}</td>
                            <td>{{ $chapter->user->username }} (ID: {{ $chapter->user->id }})</td>
                            <td>
                                <a href="{{ $chapter->slug }}" class="btn btn-primary btn-sm">
                                    Xem Nội Dung
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
