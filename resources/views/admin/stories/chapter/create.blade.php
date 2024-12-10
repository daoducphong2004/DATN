@extends('admin.layouts.default')

@section('title')
    @parent
    Thêm Chương Truyện
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form role="form" method="POST" action="{{ route('admin_chapterstore') }}">
        @csrf

        <!-- Tiêu đề chương -->
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-right">Tiêu đề Chương</label>
            <div class="col-md-10">
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}" placeholder="Nhập tiêu đề chương">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Nội dung chương -->
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-right">Nội dung</label>
            <div class="col-md-10">
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Nhập nội dung chương">{{ old('content') }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        @include('layouts.TinyMCEscript')

        <!-- Hidden input để chứa episode_id -->
        <input type="hidden" name="episode_id" value="{{ $episode->id }}">
        <input type="hidden" name="book_id" value="{{ $episode->book_id }}">

        <!-- Giá -->
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-right">Giá</label>
            <div class="col-md-10">
                <input type="number" class="form-control" name="price" max="999999" value="0">
            </div>
        </div>

        <!-- Trạng thái duyệt -->
        <div class="form-group row">
            <label for="approval" class="col-md-2 col-form-label text-right">Trạng thái duyệt</label>
            <div class="col-md-10">
                <select name="approval" id="approval" class="form-control">
                    <option value="1">Đã duyệt</option>
                    <option value="0">Chờ duyệt</option>
                </select>
            </div>
        </div>

        <!-- Chọn Người Đăng -->
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-right">Người Đăng</label>
            <div class="col-md-10">
                <select class="form-control @error('user_id') is-invalid @enderror" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                            {{ $user->username }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Nút lưu và quay lại -->
        <div class="form-group row">
            <div class="col-md-10 offset-md-2">
                <button type="submit" class="btn btn-primary">
                    Thêm Chương
                </button>
                <a href="{{ route('admin_storyshow', ['id' => $episode->book_id]) }}" class="btn btn-warning">
                    Quay lại
                </a>
            </div>
        </div>
    </form>
@endsection
