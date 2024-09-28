@extends('admin.layouts.default')

@section('title')
    @parent
    Sửa Episode
@endsection

@section('content')
    <form role="form" method="POST" action="{{ route('admin_episodeupdate', $episode->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Sử dụng method PUT cho cập nhật -->

        <!-- Tiêu đề Episode -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-7 text-right">Tiêu đề Episode</label>
            <div class="col-md-8">
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $episode->title) }}" placeholder="Nhập tiêu đề của Episode">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Mô tả Episode -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-7 text-right">Mô tả Episode</label>
            <div class="col-md-10">
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Mô tả tập truyện">{{ old('description', $episode->description) }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
@include('layouts.TinyMCEscript')
        <!-- Ảnh Episode -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-7 text-right">Ảnh Episode</label>
            <div class="col-md-8">
                <input type="file" class="form-control @error('episode_path') is-invalid @enderror" name="episode_path" accept="image/*">
                @error('episode_path')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <!-- Hiển thị ảnh hiện tại -->
                <img src="{{ asset(Storage::url($episode->episode_path)) }}" alt="Episode Image" style="max-height: 100px; max-width: 100px; margin-top: 10px;">
            </div>
        </div>

        <!-- Chọn Truyện (Không thể thay đổi book_id) -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-5 text-right">Truyện</label>
            <div class="col-md-10">
                <input type="text" class="form-control" value="{{ $episode->book->title }}" disabled>
                <input type="hidden" name="book_id" value="{{ $episode->book_id }}">
            </div>
        </div>

        <!-- Chọn Người Đăng -->
        <div class="form-group clearfix required">
            <label class="col-md-2 control-label pt-5 text-right">Người đăng (user_id)</label>
            <div class="col-md-10">
                <select class="form-control @error('user_id') is-invalid @enderror" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id', $episode->user_id) == $user->id ? 'selected' : '' }}>
                            {{ $user->username }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Submit và Quay lại -->
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button type="submit" class="btn btn-primary">
                    Cập nhật Episode
                </button>
                <a href="{{ route('episode.index') }}" class="btn btn-warning">
                    Quay lại
                </a>
            </div>
        </div>
    </form>
@endsection
