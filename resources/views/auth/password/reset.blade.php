@extends('login.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Đặt Lại Mật Khẩu</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="https://docln.net/password/email">
                            <input type="hidden" name="_token" value="2jWxkFxRgh4jHZZhX91HqtG38rhoyVQmdPpewFZ9"
                                autocomplete="off">

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="">
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
                                    <input id="password-confirm" type="password" class="form-control text-center"
                                        name="XacNhanMatKhau">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Đổi Mật Khẩu
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
