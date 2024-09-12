@extends('user.layout.master')

@section('content')
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nhóm
                    </div>
                    <div class="panel-body">

                        <div style="float: right; margin-bottom: 20px">
                            <form class="form-inline" method="post">
                                <input type="hidden" name="_token" value="2jWxkFxRgh4jHZZhX91HqtG38rhoyVQmdPpewFZ9">
                                <div class="input-group">
                                    <input style="width: 300px" type="text" class="form-control" name="keywords"
                                        placeholder="Tên nhóm" id="keywords_input" value="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" value="Tìm kiếm">Tìm kiếm</button>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <table class="table">
                            <tbody>

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
