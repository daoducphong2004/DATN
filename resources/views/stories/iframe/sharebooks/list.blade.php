@extends('stories.iframe.layouts.master')

@section('content')
<div class="container">
    <h1>Danh sách người dùng được chia sẻ quyền chỉnh sửa cho truyện: {{ $book->title }}
        <br>
        Nếu muốn xóa quyền chỉnh sửa hãy liên hệ admin!
    </h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if($book->sharedUsers->isEmpty())
        <p>Không có người dùng nào được chia sẻ quyền chỉnh sửa.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    {{-- <th>Thao tác</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($book->sharedUsers as $sharedBook)
                    <tr>
                        <td>{{ $sharedBook->user->username  }}</td>
                        <td>{{  $sharedBook->user->email }}</td>
                        {{-- <td>
                            <!-- Form để thu hồi quyền chỉnh sửa -->
                            <form action="{{ route('book.sharerevoke', $book->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $sharedBook->user->id }}">
                                <button type="submit" class="btn btn-danger">Thu hồi quyền</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <!-- Form chia sẻ quyền chỉnh sửa -->
    <form action="{{ route('book.shareAccess', $book->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_email">Chọn người dùng để chia sẻ quyền chỉnh sửa:</label>
            <input type="email" name="user_email" class="form-control" placeholder="Nhập email người dùng" required>
        </div>
        <button type="submit" class="btn btn-primary">Chia sẻ quyền</button>
    </form>

</div>
@endsection
