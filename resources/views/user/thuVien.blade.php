@extends('user.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Chuyên mục
                    </div>

                    <div class="panel-body">

                        <table class="table">
                            <tbody>
                                <tr>
                                    <td colspan="2" class="info" style="background-color: #eb1d57">
                                        <b>Thông báo</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nơi đăng thông báo của Cổng Light Novel</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="info" style="background-color: #e01bb4">
                                        <b>Tin tức</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tin tức Light Novel</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="info" style="background-color: #252eef">
                                        <b>Hỏi đáp</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hỏi đáp những vấn đề liên quan.</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="info" style="background-color: #28e1e8">
                                        <b>Đánh giá</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Đánh giá truyện</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="info" style="background-color: #1ee865">
                                        <b>Thảo luận</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
