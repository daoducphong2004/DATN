@extends('admin.layouts.default')

@section('content')
    <div class="container mt-4">
        <!-- Card cho thông tin sách -->
        <div class="card mb-4">
            <div class="card-body">
                <h1 class="card-title">{{ $book->title }}</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset(Storage::url($book->book_path)) }}" class="img-fluid" alt="{{ $book->title }}">
                    </div>
                    <div class="col-md-8">
                        <h3>Thông tin chi tiết</h3>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Tác giả:</strong> {{ $book->author }}</li>
                            <li class="list-group-item"><strong>Lượt xem:</strong> {{ $book->view }}</li>
                            <li class="list-group-item"><strong>Lượt Thích:</strong> {{ $book->like }}</li>
                            <li class="list-group-item"><strong>Họa Sĩ:</strong> {{ $book->painter }}</li>
                            <li class="list-group-item"><strong>Mô Tả:</strong> {!! $book->description !!}</li>
                            <li class="list-group-item"><strong>Chú Thích:</strong> {!! $book->note !!}</li>
                            <li class="list-group-item"><strong>Tình trạng:</strong> {{ $book->status == 1 ? 'Active' : 'Inactive' }}</li>
                            <li class="list-group-item"><strong>Is VIP:</strong> {{ $book->is_VIP == 1 ? 'Yes' : 'No' }}</li>
                            <li class="list-group-item"><strong>Ngày Tạo:</strong> {{ $book->created_at->format('d-m-Y') }}</li>
                            <li class="list-group-item"><strong>Cập Nhật Gần Nhất:</strong> {{ $book->updated_at->format('d-m-Y') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thể loại sách -->
        <div class="card mb-4">
            <div class="card-body">
                <h3>Thể loại</h3>
                <ul class="list-group">
                    @foreach ($book->genres as $genre)
                        <li class="list-group-item">{{ $genre->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Danh sách tập -->
        <div class="card">
            <div class="card-body">
                <h2>Danh sách tập</h2>
                <a href="{{ route('admin_episodecreate', $book->id) }}" class="btn btn-primary btn-sm mb-3">Thêm tập</a>
                <div class="list-group">
                    @foreach ($episodes as $episode)
                        <div class="episode-item mb-3">
                            <div class="episode-header d-flex justify-content-between align-items-center">
                                <h3>{{ $episode->title }}</h3>
                                <div>
                                    <a href="{{ route('admin_episodeedit', $episode->id) }}" class="btn btn-warning btn-sm">Sửa tập</a>
                                    <a href="{{ route('admin_chaptercreate', ['episode_id' => $episode->id]) }}" class="btn btn-primary btn-sm">Thêm chương</a>
                                    <form action="{{ route('admin_episdestroy', $episode->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc muốn xóa tập này không?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Xóa tập</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Hiển thị các chương đã duyệt -->
                            @if ($episode->chapters->count() > 0)
                                <h4 class="mt-3">Chương:</h4>
                                <ul class="list-group">
                                    @foreach ($episode->chapters as $chapter)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $chapter->title }}
                                            <div>
                                                <a href="{{ route('admin_chapteredit', $chapter->id) }}" class="btn btn-sm btn-warning">Sửa chương</a>
                                                <form action="{{ route('admin_chapterdestroy', $chapter->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc muốn xóa chương này không?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Xóa chương</button>
                                                </form>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Không có chương nào đã được duyệt.</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
