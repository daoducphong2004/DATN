@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách thể loại sách
@endsection

@push('styles')
@endpush

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
    <div class="p-4" style="min-height: 800px;">
        <form action="{{ route('user_update', $id->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Tên người dùng</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp"
                    value="{{ $id->username }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" aria-describedby="emailHelp"
                    value="{{ $id->email }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input type="string" class="form-control" name="password" aria-describedby="emailHelp"
                    value="{{ $id->password }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên đầy đủ</label>
                <input type="text" class="form-control" name="full_name" aria-describedby="emailHelp"
                    value="{{ $id->full_name }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giới tính</label>
                <select name="gender" class="form-control">
                    <option value="male" {{ $id->gender == 'male' ? 'selected' : '' }}>male</option>
                    <option value="female" {{ $id->gender == 'female' ? 'selected' : '' }}>female</option>
                    <option value="other" {{ $id->gender == 'other' ? 'selected' : '' }}>other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ngày sinh</label>
                <input type="date" class="form-control" name="date_of_birth" aria-describedby="emailHelp"
                    value="{{ $id->date_of_birth }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ảnh Đại Diện</label>
                <img src="{{ asset('/storage/' . $id->avatar_url) }}" alt="" width="200">
                <input type="file" class="form-control" name="avatar_url" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Trạng thái</label>
                <select name="status" class="form-control">
                    <option value="active" {{ $id->status == 'active' ? 'selected' : '' }}>active</option>
                    <option value="inactive" {{ $id->status == 'inactive' ? 'selected' : '' }}>inactive</option>
                    <option value="banned" {{ $id->status == 'banned' ? 'selected' : '' }}>banned</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số xu</label>
                <input type="number" class="form-control" name="coin_earned" aria-describedby="emailHelp"
                    value="{{ $id->coin_earned }}">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection

@push('scripts')
@endpush
