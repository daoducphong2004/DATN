@extends('stories.partials.master')
@section('content')
@include('stories.partials.header')

<form role="form" method="POST" action="{{ route('admin_storystore') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group clearfix required">
        <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
        <div class="col-md-8">
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group clearfix">
        <label class="col-md-2 control-label text-right"><b>Nội dung nhạy cảm?</b></label>
        <div class="col-md-8">
            <input type="checkbox" name="adult" {{ old('adult') ? 'checked' : '' }}>
        </div>
    </div>

    <div class="form-group clearfix">
        <label class="col-md-2 control-label pt-7 text-right">Ảnh bìa</label>
        <div class="col-md-8">
            <div id="upload" class="series_cover">
                <div id="drop">
                    <a>Chọn ảnh</a>
                    <input type="file" class="form-control @error('book_path') is-invalid @enderror" name="book_path" accept="image/*" />
                </div>
                <img style="max-height: 100px; max-width: 100px" id="SeriesCoverPreview" src="" />
                @error('book_path')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group clearfix required">
        <label class="col-md-2 control-label pt-7 text-right">Tác giả</label>
        <div class="col-md-8">
            <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}">
            @error('author')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group clearfix">
        <label class="col-md-2 control-label pt-7 text-right">Họa sĩ</label>
        <div class="col-md-8">
            <input type="text" class="form-control @error('painter') is-invalid @enderror" name="painter" value="{{ old('painter') }}">
            @error('painter')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group clearfix required">
        <label class="col-md-2 control-label pt-5 text-right">Loại truyện</label>
        <div class="col-md-10">
            <select class="input-sm form-control @error('type') is-invalid @enderror" name="type" id="select-type">
                <option value="1" {{ old('type') == 1 ? 'selected' : '' }}>Truyện dịch</option>
                <option value="2" {{ old('type') == 2 ? 'selected' : '' }}>Truyện convert</option>
                <option value="3" {{ old('type') == 3 ? 'selected' : '' }}>Truyện sáng tác</option>
            </select>
            @error('type')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group clearfix required">
        <label class="col-md-2 control-label pt-5 text-right">Nhóm dịch</label>
        <div class="col-md-10">
            <select class="input-sm form-control @error('group_id') is-invalid @enderror" name="group_id" id="select-group">
                <option value="1" {{ old('group_id') == 1 ? 'selected' : '' }}>Hako Translation</option>
                <option value="2839" {{ old('group_id') == 2839 ? 'selected' : '' }}>Nhóm của Phong</option>
                <option value="60" {{ old('group_id') == 60 ? 'selected' : '' }}>Tác Giả OLN</option>
            </select>
            @error('group_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group clearfix required">
        <label class="col-md-2 control-label pt-7 text-right">Thể loại</label>
        <div class="col-md-10">
            <select class="input-sm form-control @error('genres') is-invalid @enderror" name="genres[]" id="select-genre" multiple style="width: 100%">
                @foreach ($genres as $key => $value)
                    <option value="{{ $value }}" {{ collect(old('genres'))->contains($value) ? 'selected' : '' }}>{{ $key }}</option>
                @endforeach
            </select>
            @error('genres')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group clearfix required">
        <label class="col-md-2 control-label text-right">Tóm tắt</label>
        <div class="col-md-10">
            <textarea id="LN_Series_Summary" class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group clearfix">
        <label class="col-md-2 control-label text-right">Chú thích thêm</label>
        <div class="col-md-10">
            <textarea class="form-control @error('note') is-invalid @enderror" id="extrainfo" name="note">{{ old('note') }}</textarea>
            @error('note')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Include TinyMCE script if needed -->
    @include('layouts.TinyMCEscript')

    <div class="form-group clearfix required">
        <label class="col-md-2 control-label pt-5 text-right">Tình trạng dịch</label>
        <div class="col-md-10">
            <select class="input-sm form-control @error('status') is-invalid @enderror" name="status">
                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Đang tiến hành</option>
                <option value="2" {{ old('status') == 2 ? 'selected' : '' }}>Tạm ngưng</option>
                <option value="3" {{ old('status') == 3 ? 'selected' : '' }}>Đã hoàn thành</option>
            </select>
            @error('status')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Custom fields -->
    <div class="form-group clearfix required">
        <label class="col-md-2 control-label pt-7 text-right">Người đăng (user_id)</label>
        <div class="col-md-8">
            <select class="input-sm form-control @error('user_id') is-invalid @enderror" name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->username }}</option>
                @endforeach
            </select>
            @error('user_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group clearfix required">
        <label class="col-md-2 control-label pt-7 text-right">Lượt thích</label>
        <div class="col-md-8">
            <input type="number" class="form-control @error('like') is-invalid @enderror" name="like" value="{{ old('like', 0) }}" min="0">
            @error('like')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group clearfix required">
        <label class="col-md-2 control-label pt-7 text-right">Lượt xem</label>
        <div class="col-md-8">
            <input type="number" class="form-control @error('view') is-invalid @enderror" name="view" value="{{ old('view', 0) }}" min="0">
            @error('view')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group clearfix required">
        <label class="col-md-2 control-label pt-7 text-right">Trạng thái kiểm duyệt (Is_Inspect)</label>
        <div class="col-md-8">
            <input type="text" class="form-control @error('Is_Inspect') is-invalid @enderror" name="Is_Inspect" value="{{ old('Is_Inspect', 'đang duyệt') }}">
            @error('Is_Inspect')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-10 col-md-offset-2">
            <button type="submit" class="btn btn-primary">Thêm truyện</button>
            <a href="javascript: history.back()" class="btn btn-warning">Quay lại</a>
        </div>
    </div>
</form>

@endsection
