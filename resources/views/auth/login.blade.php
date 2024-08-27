@extends('auth.logs.log')
@section('noidung')
<nav class="navbar navbar-default" style="z-index: 999">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Bảng điều khiển</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav navbar-right">
                                            <li><a href="{{route('login')}}">Đăng nhập</a></li>
                    <li><a href="{{route('register')}}">Đăng ký</a></li>
                                    </ul>
        </div>
    </div>
</nav>
    
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Đăng nhập</div>
        <div class="panel-body">
                                
            <form class="form-horizontal" role="form" method="POST" action="{{route('login')}}">
                <input type="hidden" name="_token" value="RoVR3vbYqJwRLPo31OeRWpuk5IYzEa1XubKSx458" autocomplete="off">

                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Email hoặc Tên đăng nhập</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="">

                                                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">

                                                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Ghi nhớ
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-btn fa-sign-in"></i> Đăng nhập
                        </button>

                        <a class="btn btn-link" href="https://docln.net/password/reset">Quên mật khẩu?</a>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4 font-bold">
                        <strong>Facebook không cho sử dụng đăng nhập nữa, lý do <a href="https://docln.net/thao-luan/2766" target="_blank">tại đây</a><br>
                        Làm theo hướng dẫn trong bài để lấy lại mật khẩu tài khoản.</strong>
                    </div>
                    <div class="col-md-6 col-md-offset-4">
                        
                        
                        <a href="https://docln.net/login/google" class="btn btn-danger ml-2">
                            <i class="fab fa-google"></i> Google
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
