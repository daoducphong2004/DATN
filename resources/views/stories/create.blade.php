<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="NoIndex, NoFollow">
    <title>Bảng điều khiển</title>

    <link rel="shortcut icon" href="http://datn.test/img/favicon.png">
    <link href="http://datn.test/css/app.css" rel="stylesheet">
    <link href="http://datn.test/css/app_dark.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <link href="http://datn.test/css/action.css?t=3" rel="stylesheet">

</head>

<body data-theme="light">
    <nav class="navbar navbar-default" style="z-index: 999">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://docln.net/action">Bảng điều khiển</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                    <li><a href="https://docln.net" target="_blank"><i class="fas fa-home"></i><span
                                class="hidden-md hidden-lg"> Cổng Light Novel</span></a></li>
                    <li><a href="https://docln.net/action/series/create" style="color: red">Thêm Truyện</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false" style="color: #10b591">Truyện dịch <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/series/index?type=translation&amp;of=self">Truyện đã
                                    đăng</a></li>
                            <li><a href="https://docln.net/action/series/index?type=translation&amp;of=shared">Truyện
                                    tham gia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false" style="color: #e3953e">Convert <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/series/index?type=convert&amp;of=self">Convert đã
                                    đăng</a></li>
                            <li><a href="https://docln.net/action/series/index?type=convert&amp;of=shared">Convert tham
                                    gia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false" style="color: #1389c6">Sáng tác <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/series/index?type=original&amp;of=self">OLN đã
                                    đăng</a></li>
                            <li><a href="https://docln.net/action/series/index?type=original&amp;of=shared">OLN tham
                                    gia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Thảo luận <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/page/create">Thêm thảo luận</a></li>
                            <li><a href="https://docln.net/action/page/mypages">Thảo luận của bạn</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Tiện ích <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/genre">Thể loại</a></li>
                            <li><a href="https://docln.net/action/page_category">Thư viện</a></li>
                            <li><a href="https://docln.net/action/image">Minh họa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Nhóm dịch <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/group/mygroups">Nhóm sở hữu</a></li>
                            <li><a href="https://docln.net/action/group/jointgroups">Nhóm tham gia</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><span class="glyphicon glyphicon-user"> </span><span
                                class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a>Phongdeeptry2993</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="https://docln.net/action/profile">Đổi Thông Tin</a></li>
                            <li><a href="https://docln.net/action/password">Đổi Mật Khẩu</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="https://docln.net/action/email">Đổi Email</a></li>
                            <li><a href="https://docln.net/action/username">Đổi Username</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="https://docln.net/logout">Thoát</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Series</div>

                    <div class="panel-body">


                        {{-- <div class="alert alert-info">
                            Quy định chung khi đăng truyện <a class="alert-link"
                                href="/thao-luan/20-quy-dinh-chung-doi-voi-cac-du-an-dang-tai-cong-light-novel-bao-gom-truyen-dichconvert-va-oln"
                                rel="nofollow" target="_blank">tại đây</a><br>
                            Quy định về Truyện sáng tác <a class="alert-link"
                                href="/thao-luan/77-quy-dinh-doi-voi-oln" rel="nofollow" target="_blank">tại
                                đây</a><br><br>
                            Cần đọc <a class="alert-link" href="/thao-luan/368-huong-dan-dang-truyen" rel="nofollow"
                                target="_blank">Hướng dẫn đăng truyện</a>
                        </div> --}}

                        <form role="form" method="POST" action="{{ route('story.store') }}" enctype="multipart/form-data">
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
                                    <input type="checkbox" name="adult" value="1">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Ảnh bìa</label>
                                <div class="col-md-8">
                                    <div id="upload" class="series_cover">
                                        <div id="drop">
                                            <a>Chọn ảnh</a>
                                            <input type="file" name="book_path" accept="image/*" />
                                        </div>
                                        <div class="alert alert-danger alert-dismissible" role="alert" style="display: none">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div id="progress" class="progress" style="display: none">
                                            <div class="progress-bar progress-bar-success"></div>
                                        </div>
                                        <img style="max-height: 100px; max-width: 100px" id="SeriesCoverPreview" src="" />
                                    </div>
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
                                    <select class="input-sm" name="genres[]" id="select-genre" multiple
                                        style="width: 100%">
                                        {{-- <option value="1">Action</option> --}}
                                        @foreach ($genres as $key=>$value)
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
                                    <select class="input-sm" name="status">
                                        <option value="1">Đang tiến hành</option>
                                        <option value="2">Tạm ngưng</option>
                                        <option value="3">Đã hoàn thành</option>
                                    </select>
                                </div>
                            </div>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
                            <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    inline: false,
                                    height: 300,
                                    skin: 'oxide',
                                    content_css: 'default',
                                    branding: false,
                                    menubar: false,
                                    contextmenu: false,
                                    entities: '160,nbsp,38,amp,60,lt,62,gt',
                                    paste_word_valid_elements: 'b,strong,i,em,u,s,a,p,br,img',
                                    element_format: 'html',
                                    formats: {
                                        strikethrough: {
                                            inline: 's',
                                            remove: 'all'
                                        },
                                        underline: {
                                            inline: 'u',
                                            remove: 'all'
                                        },
                                    },
                                    plugins: 'wordcount link image code fullscreen paste emoticons',
                                    toolbar: 'undo redo | bold italic underline strikethrough forecolor | link image | removeformat | fullscreen'
                                });
                            </script>

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

  

                        <script>
                            
                            $(document).ready(function() {
                                $('#select-type').on('change', function() {
                                    var value = $(this).val();
                                    if (value == '3') {
                                        $('#select-group').parent().parent().hide();
                                    } else {
                                        $('#select-group').parent().parent().show();
                                    }
                                });

                                $('#select-group').select2();
                                $('#select-genre').select2({
                                    closeOnSelect: false,
                                });
                            });
                            
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>



    {{-- <script src="/livewire/livewire.js?id=f121a5df"   data-csrf="AqIsI0onQAhmDz321oidHlpiqtEBxY2rv4wo0wZo" data-update-uri="/livewire/update" data-navigate-once="true"></script> --}}
</body>

</html>
