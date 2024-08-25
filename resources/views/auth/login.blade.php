@extends('login.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Đăng nhập</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label ">Email hoặc Tên đăng nhập</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control text-center" name="TenDangNhap"
                                        value>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label text-center">Mật khẩu</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="MatKhau">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-btn fa-sign-in"></i> Đăng nhập
                                    </button>
                                    <a class="btn btn-link" href="">Quên mật khẩu?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
