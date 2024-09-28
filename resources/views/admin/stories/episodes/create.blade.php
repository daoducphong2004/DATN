@extends('admin.layouts.default')

@section('title')
    @parent
    Thêm Episode
@endsection

@section('content')
    <form role="form" method="POST" action="{{ route('admin_episodestore') }}" enctype="multipart/form-data">
        @csrf

        <!-- Hidden input để chứa book_id -->
        <input type="hidden" name="book_id" value="{{ $book_id }}">

        <!-- Tiêu đề -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-7 text-right">Tiêu đề Episode</label>
            <div class="col-md-8">
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}" placeholder="Nhập tiêu đề của Episode">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Mô tả Episode -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-7 text-right">Mô tả Episode</label>
            <div class="col-md-10">
                <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                    placeholder="Mô tả tập truyện">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Ảnh Episode -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-7 text-right">Ảnh Episode</label>
            <div class="col-md-8">
                <input type="file" class="form-control @error('episode_path') is-invalid @enderror" name="episode_path"
                    accept="image/*">
                @error('episode_path')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Chọn User -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-5 text-right">Người đăng (user_id)</label>
            <div class="col-md-10">
                <select class="form-control @error('user_id') is-invalid @enderror" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                            {{ $user->username }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- TinyMCE for description -->
        @include('layouts.TinyMCEscript')

        <!-- Submit and Back Buttons -->
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button type="submit" class="btn btn-primary">
                    Thêm Episode
                </button>
                <a href="javascript: history.back()" class="btn btn-warning">
                    Quay lại
                </a>
            </div>
        </div>

    </form>
@endsection
