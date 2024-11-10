@extends('user.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Series</div>

                    <div class="panel-body">
                        <div class="alert alert-info">
                            Quy định chung khi đăng truyện <a class="alert-link"
                                href="/thao-luan/20-quy-dinh-chung-doi-voi-cac-du-an-dang-tai-cong-light-novel-bao-gom-truyen-dichconvert-va-oln"
                                rel="nofollow" target="_blank">tại đây</a><br>
                            Quy định về Truyện sáng tác <a class="alert-link" href="/thao-luan/77-quy-dinh-doi-voi-oln"
                                rel="nofollow" target="_blank">tại đây</a><br><br>
                            Cần đọc <a class="alert-link" href="/thao-luan/368-huong-dan-dang-truyen" rel="nofollow"
                                target="_blank">Hướng dẫn đăng truyện</a>
                        </div>

                        @include('stories.iframe.partials.css_script')

                        <form role="form" method="POST" action="{{ route('story.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title" value="">
                                </div>
                            </div>

                            {{-- <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Tên khác</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Ngăn cách nhiều tên bằng dấu chấm phẩy ;"
                                        class="form-control" name="altname" value="">
                                </div>
                            </div> --}}

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label text-right"><b>Nội dung nhạy cảm?</b></label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="adult">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Ảnh bìa</label>
                                <div class="col-md-8">
                                    <div id="upload" class="series_cover">
                                        <div id="drop">
                                            <a id="selectImageBtn">Chọn ảnh</a>
                                            <input type="file" name="book_path" id="fileInput" style="display: none" />
                                        </div>
                                        <div class="alert alert-danger alert-dismissible" role="alert"
                                            style="display: none">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div id="progress" class="progress" style="display: none">
                                            <div class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                    <img style="max-height: 300px; max-width: 300px" id="SeriesCoverPreview" src="">
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Tác giả</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="author" value="">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Họa sĩ</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="painter" value="">
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-5 text-right">Loại truyện</label>
                                <div class="col-md-10">
                                    <select class="input-sm" name="type" id="select-type">
                                        <option value="1">Truyện dịch</option>
                                        <option value="2">Truyện convert</option>
                                        <option value="3">Truyện sáng tác</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-5 text-right">Nhóm dịch</label>
                                <div class="col-md-10">
                                    <select class="input-sm" name="group_id" id="select-group">
                                        <option value="1">Hako Translation</option>
                                        <option value="2839">Nhóm của Phong</option>
                                        <option value="60">Tác Giả OLN</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Thể loại</label>
                                <div class="col-md-10">
                                    <select class="input-sm" name="genres[]" id="select-genre" multiple style="width: 100%">
                                        @foreach ($genres as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label text-right">Tóm tắt</label>
                                <div class="col-md-10">
                                    <textarea id="LN_Series_Summary" name="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label text-right">Chú thích thêm</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="extrainfo" name="note"></textarea>
                                </div>
                            </div>


                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-5 text-right">Tình trạng dịch</label>
                                <div class="col-md-10">
                                    <select class="input-sm" name="status" id='select-status'>
                                        <option value="1">Đang tiến hành</option>
                                        <option value="2">Tạm ngưng</option>
                                        <option value="3">Đã hoàn thành</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Giá</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" max='999999' name="price"
                                        id='input-price' value="0">
                                </div>
                            </div>

                            @include('layouts.CKEditor')
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Thêm truyện
                                    </button>
                                    <a href="javascript: history.back()" class="btn btn-warning">
                                        Quay lại
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
