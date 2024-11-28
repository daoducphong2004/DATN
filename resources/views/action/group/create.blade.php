@extends('user.layout.master')
@section('content')
<div class="container">
    <form action="{{ route('action.group.store') }}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label for="name" class="control-label">Tên nhóm</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên nhóm" value="{{ old('name') }}" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="description" class="control-label">Mô tả</label>
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Nhập mô tả nhóm (không bắt buộc)">{{ old('description') }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Tạo nhóm</button>
        </div>
    </form>
    
</div>
@endsection
