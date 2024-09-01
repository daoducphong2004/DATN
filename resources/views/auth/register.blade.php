@extends('auth.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Đăng ký</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            <input type="hidden" name="Role" value="user">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Tên đăng nhập</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control text-center" name="TenDangNhap" value>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Địa chỉ E-Mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control text-center" name="Email" value>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Mật khẩu</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control text-center" name="MatKhau">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Xác nhận mật khẩu</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control text-center" name="XacNhanMatKhau">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-btn fa-user"></i> Đăng ký
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
