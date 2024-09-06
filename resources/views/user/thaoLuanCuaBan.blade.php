@extends('user.layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Trang
                    </div>

                    <div class="panel-body">

                        <style>
                            tr .btn {
                                font-size: 10px;
                            }

                            td {
                                vertical-align: middle !important;
                            }
                        </style>

                        <div style="float: right; margin-bottom: 20px">
                            <form class="form-inline" method="post">
                                <input type="hidden" name="_token" value="jwWx2XZgKdafViWEIuBZwpYwXT8I1GyckmudwpxK">
                                <div class="input-group">
                                    <input style="width: 300px" type="text" class="form-control" name="keywords"
                                        placeholder="Tên trang" id="keywords_input" value="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" value="Tìm kiếm">Tìm kiếm</button>

                                    </span>
                                </div><!-- /input-group -->

                            </form>
                        </div>

                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <th>Người đăng</th>
                                    <th>Ngày đăng</th>
                                    <th class="text-right col-md-2">Điều khiển</th>
                                </tr>

                                <tr>
                                    <td colspan="4">Không có trang nào</td>
                                </tr>
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
