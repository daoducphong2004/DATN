@extends('admin.stories.partials.master') <!-- Bố cục cha của bạn -->

@section('content')
    <div class="container">
        <h1>Chỉnh sửa truyện: {{ $book->title }}</h1>
        <!-- Mở form chỉnh sửa truyện -->
        <form action="{{ route('admin_storyupdate', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Sử dụng PUT để cập nhật -->
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset(Storage::url($book->book_path)) }}" class="img-responsive" alt="{{ $book->title }}">
                    <div class="form-group">
                        <label for="book_path">Thay đổi ảnh bìa</label>
                        <input type="file" name="book_path" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Thông tin chi tiết</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <label for="title">Tiêu đề:</label>
                            <input type="text" name="title" class="form-control" value="{{ $book->title }}">
                        </li>
                        <li class="list-group-item">
                            <label for="slug">Slug:</label>
                            <input type="text" name="slug" class="form-control" value="{{ $book->slug }}">
                        </li>
                        <li class="list-group-item">
                            <label for="author">Tác giả:</label>
                            <input type="text" name="author" class="form-control" value="{{ $book->author }}">
                        </li>
                        <li class="list-group-item">
                            <label for="painter">Họa sĩ:</label>
                            <input type="text" name="painter" class="form-control" value="{{ $book->painter }}">
                        </li>
                        <li class="list-group-item">
                            <label for="view">Lượt xem:</label>
                            <input type="number" name="view" class="form-control" value="{{ $book->view }}">
                        </li>
                        <li class="list-group-item">
                            <label for="like">Lượt thích:</label>
                            <input type="number" name="like" class="form-control" value="{{ $book->like }}">
                        </li>
                        <li class="list-group-item">
                            <label for="type">Thể loại:</label>
                            <input type="text" name="type" class="form-control" value="{{ $book->type }}">
                        </li>
                        <li class="list-group-item">
                            <label for="description">Mô tả:</label>
                            <textarea name="description" class="form-control">{!! $book->description !!}</textarea>
                        </li>
                        <li class="list-group-item">
                            <label for="note">Chú thích:</label>
                            <textarea name="note" class="form-control">{!! $book->note !!}</textarea>
                        </li>
                        <li class="list-group-item">
                            <label for="status">Tình trạng:</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ $book->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $book->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </li>
                        <li class="list-group-item">
                            <label for="is_VIP">Is VIP:</label>
                            <select name="is_VIP" class="form-control">
                                <option value="1" {{ $book->is_VIP == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $book->is_VIP == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </li>
                        <li class="list-group-item">
                            <label for="adult">Adult:</label>
                            <select name="adult" class="form-control">
                                <option value="1" {{ $book->adult == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $book->adult == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </li>

                        <li class="list-group-item">
                            <label for="Is_Inspect">Tình trạng duyệt:</label>
                            <input type="text" name="Is_Inspect" class="form-control" value="{{ $book->Is_Inspect }}">
                        </li>
                        <li class="list-group-item">
                            <label for="user_id">User ID:</label>
                            <input type="number" name="user_id" class="form-control" value="{{ $book->user_id }}">
                        </li>
                        <li class="list-group-item">
                            <label for="group_id">Group ID:</label>
                            <input type="number" name="group_id" class="form-control" value="{{ $book->group_id }}">
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
    @include('layouts.TinyMCEscript')
@endsection
