@extends('user.layout.master')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form role="form" method="POST" action="{{ route('author.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group clearfix">
            <label class="col-md-2 control-label text-right">Tên của bạn</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="username", id="user" value="{{ Auth::check() ? Auth::user()->username : old('username') }}" readonly>
            </div>
        </div>

        <div class="form-group clearfix">
            <label class="col-md-2 control-label text-right">Email</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}" readonly>
            </div>
        </div>

        <div class="form-group clearfix">
            <label class="col-md-2 control-label text-right">Số điện thoại</label>
            <div class="col-md-8">
                <input type="number" class="form-control" name="phone" id="phone" value="">
            </div>
        </div>

        <div class="form-group clearfix">
            <label class="col-md-2 control-label text-right">Vai trò hiện tại</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="role" id="role" value="{{ $user->role->name }}" readonly>
            </div>
        </div>

        <div class="form-group clearfix required">
            <label class="col-md-2 control-label text-right">Ảnh CMND/CCCD Mặt Trước:</label>
             <div class="col-md-8">
                <input type="file" class="form-control" name="front_id_image" id="front_id_image" accept="image/*" required>
             </div>
        </div>

        <div class="form-group clearfix required">
            <label class="col-md-2 control-label text-right">Ảnh CMND/CCCD Mặt Sau:</label>
             <div class="col-md-8">
                <input type="file" class="form-control" name="back_id_image" id="back_id_image" accept="image/*" required>
             </div>
        </div>

        <div class="form-group clearfix required">
            <label class="col-md-2 control-label text-right">Ảnh Chân Dung:</label>
             <div class="col-md-8">
                <input type="file" class="form-control" name="portrait_image" id="portrait_image" accept="image/*" required>
             </div>
        </div>

        <div class="form-group clearfix required">
            <label class="col-md-2 control-label text-right">Lý do</label>
            <div class="col-md-10">
                <textarea  name="reason" id="reason"></textarea>
            </div>
        </div>

        @include('layouts.TinyMCEscript')
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button type="submit" class="btn btn-primary">
                    Gửi yêu cầu
                </button>
            </div>
        </div>
    </form>
@endsection
