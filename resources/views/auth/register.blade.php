@extends('partials.sidebar')
@section('register')

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
                                    <li><a href="https://docln.net/login">Đăng nhập</a></li>
            <li><a href="https://docln.net/register">Đăng ký</a></li>
                            </ul>
</div>
</div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Đăng ký</div>
<div class="panel-body">
    <form class="form-horizontal" role="form" method="POST" action="https://docln.net/register">
        <input type="hidden" name="_token" value="oZ3xExBl3lpGKuFOyIhg5hXaMXtpxIWT5HXo9BXA" autocomplete="off">

        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Tên đăng nhập</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="">

                                            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-md-4 control-label">Địa chỉ E-Mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="">

                                            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-md-4 control-label">Mật khẩu</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password">

                                            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Xác nhận mật khẩu</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                            </div>
        </div>

        <div class="form-group">
            <label for="" class="col-md-4 control-label"></label>

            <div class="col-md-6">
                <div data-sitekey="6Lepy_8SAAAAAHR0slgcLDesjl1_Hgg9A9KsBEs9" class="g-recaptcha"></div>
                <script src="https://www.google.com/recaptcha/api.js?hl=vi" async defer></script>


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
