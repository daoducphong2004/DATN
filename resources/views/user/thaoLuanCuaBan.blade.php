@extends('user.layout.master')

@section('content')
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thảo luận
                    </div>
                    <div class="panel-body">

                        <div style="float: right; margin-bottom: 20px">
                            <form class="form-inline" method="post">
                                <input type="hidden" name="_token" value="2jWxkFxRgh4jHZZhX91HqtG38rhoyVQmdPpewFZ9">
                                <div class="input-group">
                                    <input style="width: 300px" type="text" class="form-control" name="keywords"
                                        placeholder="Tên truyện" id="keywords_input" value="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" value="Tìm kiếm">Tìm kiếm</button>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="col-xs-7 col-sm-6 col-md-5 col-lg-6">Tên truyện</th>
                                    <th class="hidden-xs col-sm-3 col-md-2 col-lg-2">Người đăng</th>
                                    <th class="hidden-xs hidden-sm col-md-2 col-lg-2">Nhóm dịch</th>
                                    <th class="col-xs-5 col-sm-3 col-md-3 col-lg-2 text-right">Quản lý</th>
                                </tr>

                                <tr>
                                    <td colspan="4">Không có truyện nào</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
