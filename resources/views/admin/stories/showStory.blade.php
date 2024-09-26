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
                    <li class="list-group-item"><strong>Tình trạng:</strong> {{ $book->status == 1 ? 'Active' : 'Inactive' }}
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
                <!-- Hiển thị các tập (Episodes) -->
                <h2>Tập</h2>
                <div class="list-group">
                    @foreach ($episodes as $episode)
                        <div class="list-group-item">
                            <h3>{{ $episode->title }}</h3>

                            <!-- Hiển thị các chương (Chapters) của mỗi tập -->
                            @if ($episode->chapters->count() > 0)
                                <h4>Chương:</h4>
                                <ul>
                                    @foreach ($episode->chapters as $chapter)
                                        <li>{{ $chapter->title }}</li>
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
@endsection
