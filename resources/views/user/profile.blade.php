@extends('user.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Hồ sơ
                    </div>

                    <div class="panel-body">
                        <form role="form" method="POST" action="/user/update" enctype="multipart/form-data">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                            <!-- ID (Ẩn) -->
                            <input type="hidden" name="id" value="{{ $user->id }}">
                        
                            <!-- Tên đăng nhập -->
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Tên</label>
                                <div class="col-md-8">
                                    <input type="text" disabled class="form-control" name="username" value="{{ $user->username }}" required>
                                </div>
                            </div>
                        
                            <!-- Email -->
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Email</label>
                                <div class="col-md-8">
                                    <input type="email" disabled class="form-control" name="email" value="{{ $user->email }}" required>
                                </div>
                            </div>
                        
                            <!-- Họ và tên -->
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Họ và tên</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="full_name" value="{{ $user->full_name }}">
                                </div>
                            </div>
                        
                            <!-- Giới tính -->
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Giới tính</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="gender">
                                        <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Nam</option>
                                        <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Nữ</option>
                                        <option value="other" {{ $user->gender == 'other' ? 'selected' : '' }}>Khác</option>
                                    </select>
                                </div>
                            </div>
                        
                            <!-- Ngày sinh -->
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Ngày sinh</label>
                                <div class="col-md-8">
                                    <input type="date" class="form-control" name="date_of_birth" value="{{ $user->date_of_birth }}">
                                </div>
                            </div>
                        
                            <!-- Ảnh đại diện -->
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Ảnh đại diện</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" name="avatar_url">
                                    <img src="{{ asset(Storage::url($user->avatar_url)) }}" alt="Avatar" style="max-height: 200px; max-width: 200px;">
                                </div>
                            </div>
                            <!-- Nền (Background) -->
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Nền</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" name="background">
                                    <img src="{{ asset(Storage::url($user->background)) }}" alt="Avatar" style="max-height: 200px; max-width: 200px;">
                                </div>
                            </div>
                        
                            <!-- Nút cập nhật -->
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    <a href="javascript: history.back()" class="btn btn-warning">Quay lại</a>
                                </div>
                            </div>
                        </form>
                        @include('layouts.TinyMCEscriptNoImport')
                        <script>
                            $(document).ready(function() {
                                $('input[name=dateofbirth]').datepicker({
                                    format: 'dd-mm-yyyy',
                                    defaultViewDate: {
                                        year: 2000,
                                        month: 0,
                                        day: 1
                                    }
                                })
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    @endsection
