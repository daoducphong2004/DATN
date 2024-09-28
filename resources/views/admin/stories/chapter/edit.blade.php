@extends('admin.layouts.default')

@section('title')
    @parent
    Sửa Chương
@endsection

@section('content')

    <form role="form" method="POST" action="{{ route('admin_chapterupdate', $chapter->id) }}">
        @csrf
        @method('PUT') <!-- Sử dụng method PUT cho cập nhật -->

        <!-- Tiêu đề chương -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-7 text-right">Tiêu đề Chương</label>
            <div class="col-md-8">
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $chapter->title) }}" placeholder="Nhập tiêu đề chương">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Nội dung chương -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-7 text-right">Nội dung</label>
            <div class="col-md-10">
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Nhập nội dung chương">{{ old('content', $chapter->content) }}</textarea>
                @error('content')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Hidden input để chứa episode_id (không cho người dùng sửa) -->
        <input type="hidden" name="episode_id" value="{{ $chapter->episode_id }}">

        <!-- Chọn Người Đăng -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-7 text-right">Người Đăng</label>
            <div class="col-md-8">
                <select class="form-control @error('user_id') is-invalid @enderror" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id', $chapter->user_id) == $user->id ? 'selected' : '' }}>
                            {{ $user->username }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Nút lưu và quay lại -->
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button type="submit" class="btn btn-primary">
                    Cập nhật Chương
                </button>
                <a href="{{ route('admin_storyshow', ['id' => $chapter->episode->book_id]) }}" class="btn btn-warning">
                    Quay lại
                </a>
            </div>
        </div>
    </form>
@endsection
