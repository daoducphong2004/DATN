@extends('admin.stories.partials.master') <!-- Bố cục cha của bạn -->

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset(Storage::url($book->book_path)) }}" class="img-responsive" alt="{{ $book->title }}">
            </div>
            <div class="col-md-6">
                <h3>Thông tin chi tiết</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Tác giả:</strong> {{ $book->author }}</li>
                    <li class="list-group-item"><strong>Lượt xem:</strong> {{ $book->view }}</li>
                    <li class="list-group-item"><strong>Lượt Thích:</strong> {{ $book->like }}</li>
                    <li class="list-group-item"><strong>Họa Sĩ:</strong> {{ $book->painter }}</li>
                    <li class="list-group-item"><strong>Mô Tả:</strong> {!! $book->description !!}</li>
                    <li class="list-group-item"><strong>Chú Thích:</strong> {!! $book->note !!}</li>
                    <li class="list-group-item"><strong>Tình trạng:</strong>
                        {{ $book->status == 1 ? 'Active' : 'Inactive' }}
                    </li>
                    <li class="list-group-item"><strong>Is VIP:</strong> {{ $book->is_VIP == 1 ? 'Yes' : 'No' }}</li>
                    <li class="list-group-item"><strong>Thể Loại:</strong> {{ $book->type }}</li>
                    <li class="list-group-item"><strong>Ngày Tạo:</strong> {{ $book->created_at }}</li>
                    <li class="list-group-item"><strong>Cập Nhật Gần Nhất:</strong> {{ $book->updated_at }}</li>
                    <li class="list-group-item"><strong>Tình trạng duyệt:</strong> {{ $book->Is_Inspect }}</li>
                    <li class="list-group-item"><strong>User ID:</strong> {{ $book->user_id }}</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Thể loại</h3>
                <ul class="list-group">
                    @foreach ($book->genres as $genre)
                        <li class="list-group-item">{{ $genre->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Danh sách tập</h2>
                <a href="{{ route('admin_episodecreate',$book->id) }}" class="btn btn-primary btn-sm">Thêm tập</a>
                <div class="list-group">
                    @foreach ($episodes as $episode)
                        <div class="episode-item">
                            <div class="episode-header">
                                <h3>{{ $episode->title }}</h3>

                                <div class="episode-actions">
                                    <!-- Nút sửa tập -->
                                    <a href="{{ route('admin_episodeedit', $episode->id) }}" class="btn btn-warning btn-sm">Sửa tập</a>
                                    <!-- Nút thêm chương -->
                                    <a href="{{ route('admin_chaptercreate', ['episode_id' => $episode->id]) }}" class="btn btn-primary btn-sm">Thêm chương</a>
                                    <!-- Nút xóa tập -->
                                    <form action="{{ route('admin_episdestroy', $episode->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xóa tập này không?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Xóa tập</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Hiển thị các chương (Chapters) của mỗi tập -->
                            @if ($episode->chapters->count() > 0)
                                <h4>Chương:</h4>
                                <ul class="chapter-list">
                                    @foreach ($episode->chapters as $chapter)
                                        <li>
                                            {{ $chapter->title }}

                                            <!-- Nút sửa chương -->
                                            <a href="{{ route('admin_chapteredit', $chapter->id) }}" class="btn btn-sm btn-warning chapter-action">Sửa chương</a>

                                            <!-- Nút xóa chương -->
                                            <form action="{{ route('admin_chapterdestroy', $chapter->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc muốn xóa chương này không?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger chapter-action">Xóa chương</button>
                                             </form>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Không có chương mới nào.</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<style>/* Tùy chỉnh cho danh sách tập */
    .episode-item {
        border: 1px solid #ddd;
        padding: 15px;
        margin-bottom: 10px;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .episode-item h3 {
        margin-top: 0;
    }

    .episode-item .action-buttons {
        display: flex;
        justify-content: flex-start;
        gap: 10px;
        margin-top: 10px;
    }

    .episode-item .chapter-list {
        margin-top: 15px;
        padding-left: 20px;
    }

    .episode-item .chapter-list li {
        margin-bottom: 5px;
    }

    .episode-item .chapter-list .chapter-action {
        display: inline-block;
        margin-left: 10px;
    }

    .btn-sm {
        padding: 5px 10px;
        font-size: 0.875rem;
    }

    /* Căn chỉnh các nút trong cùng một hàng */
    .episode-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .episode-actions {
        display: flex;
        gap: 10px;
    }
    </style>
    </div>
@endsection
