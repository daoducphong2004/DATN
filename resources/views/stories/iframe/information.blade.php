<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="NoIndex, NoFollow">
    <title>Bảng điều khiển</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app_dark.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link href="{{ asset('css/action.css?t=3') }}" rel="stylesheet">
</head>

<body data-theme="light">

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Series</div>

                    <div class="panel-body">


                        <script>
                            referrer = document.referrer
                            if (referrer.indexOf('/action/nav') < 0 && referrer.indexOf('/manage') < 0) {
                                parent.nav.location.href = parent.nav.location.href.split('?')[0]
                            }

                            if (/(book|chapter)\/\d+\/delete/.test(referrer)) {
                                console.log('Im here');
                                parent.history.pushState({}, '', parent.location.pathname)
                            }
                        </script>

                        <form role="form" method="POST" action="{{route('story.update',$data->id)}}">
							@csrf
							@method('PUT')
							<input type="hidden" name="series_id" value="{{$data->id}}">

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>
                            </div>


                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label text-right"><b>Nội dung nhạy cảm?</b></label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="adult" value="{{$data->adult}}">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Ảnh bìa</label>
                                <div class="col-md-8">
                                    <div id="upload" class="series_cover">
                                        <div id="drop">
                                            <a>Chọn ảnh</a>
                                            <input type="file" name="cover" />
                                        </div>
                                        <div class="alert alert-danger alert-dismissible" role="alert"
                                            style="display: none">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div id="progress" class="progress" style="display: none">
                                            <div class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                    <img style="max-height: 100px; max-width: 100px" id="SeriesCoverPreview"
                                        src="">
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Tác giả</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="author" value="{{$data->author}}">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Họa sĩ</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="painter" value="{{$data->painter}}">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-5 text-right">Loại truyện</label>
                                <div class="col-md-10">
                                    <select class="input-sm" name="type" disabled>
                                        <option value="1" selected>Truyện dịch</option>
                                        <option value="2">Truyện convert</option>
                                        <option value="3">Truyện sáng tác</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-5 text-right">Nhóm dịch</label>
                                <div class="col-md-10">
                                    <select class="input-sm" name="group_id" id="select-group">
                                        <option value="1" selected>Hako Translation</option>
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
                                        <option value="1" selected>Action</option>
                                        <option value="49" selected>Adapted to Anime</option>
                                        <option value="51" selected>Adapted to Drama CD</option>
                                        <option value="50">Adapted to Manga</option>
                                        <option value="28">Adult</option>
                                        <option value="2">Adventure</option>
                                        <option value="52">Age Gap</option>
                                        <option value="60">Boys Love</option>
                                        <option value="54">Character Growth</option>
                                        <option value="39">Chinese Novel</option>
                                        <option value="3">Comedy</option>
                                        <option value="43">Cooking</option>
                                        <option value="56">Different Social Status</option>
                                        <option value="4">Drama</option>
                                        <option value="5">Ecchi</option>
                                        <option value="40">English Novel</option>
                                        <option value="6">Fantasy</option>
                                        <option value="59">Female Protagonist</option>
                                        <option value="45">Game</option>
                                        <option value="7">Gender Bender</option>
                                        <option value="8">Harem</option>
                                        <option value="35">Historical</option>
                                        <option value="9">Horror</option>
                                        <option value="10">Incest</option>
                                        <option value="30">Isekai</option>
                                        <option value="33">Josei</option>
                                        <option value="34">Korean Novel</option>
                                        <option value="44">Magic</option>
                                        <option value="37">Martial Arts</option>
                                        <option value="27">Mature</option>
                                        <option value="11">Mecha</option>
                                        <option value="36">Military</option>
                                        <option value="58">Misunderstanding</option>
                                        <option value="12">Mystery</option>
                                        <option value="32">Netorare</option>
                                        <option value="38">One shot</option>
                                        <option value="46">Otome Game</option>
                                        <option value="61">Parody</option>
                                        <option value="23">Psychological</option>
                                        <option value="47">Reverse Harem</option>
                                        <option value="22">Romance</option>
                                        <option value="13">School Life</option>
                                        <option value="14">Science Fiction</option>
                                        <option value="31">Seinen</option>
                                        <option value="15">Shoujo</option>
                                        <option value="16">Shoujo ai</option>
                                        <option value="26">Shounen</option>
                                        <option value="17">Shounen ai</option>
                                        <option value="18">Slice of Life</option>
                                        <option value="55">Slow Life</option>
                                        <option value="19">Sports</option>
                                        <option value="24">Super Power</option>
                                        <option value="20">Supernatural</option>
                                        <option value="25">Suspense</option>
                                        <option value="21">Tragedy</option>
                                        <option value="53">Wars</option>
                                        <option value="29">Web Novel</option>
                                        <option value="57">Workplace</option>
                                        <option value="48">Yuri</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label text-right">Tóm tắt</label>
                                <div class="col-md-10">
                                    <textarea id="LN_Series_Summary" name="summary">&lt;p&gt;truyenej tesst&lt;/p&gt;</textarea>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label text-right">Chú thích thêm</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="extrainfo" name="extra">&lt;p&gt;truyenej tesst&lt;/p&gt;</textarea>
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-5 text-right">Tình trạng dịch</label>
                                <div class="col-md-10">
                                    <select class="input-sm" name="status">
                                        <option value="1">Đang tiến hành</option>
                                        <option value="2" selected>Tạm ngưng</option>
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
                                        Cập nhật
                                    </button>
                                </div>
                            </div>
                        </form>

                        <script>
                            $(document).ready(function() {
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


    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
    <link href="https://docln.net/scripts/plugins/upload/css/upload.css" rel="stylesheet" />

    <!-- jQuery File Upload Dependencies -->
    <script src="https://docln.net/scripts/plugins/upload/js/jquery.ui.widget.js"></script>
    <script src="https://docln.net/scripts/plugins/upload/js/jquery.iframe-transport.js"></script>
    <script src="https://docln.net/scripts/plugins/upload/js/jquery.fileupload.js"></script>

    <script>
        uploadSeriesUrl = 'https://docln.net/action/upload/series';
        uploadBookUrl = 'https://docln.net/action/upload/book';
        uploadChapterUrl = 'https://docln.net/action/upload/image';
        uploadAvatarUrl = 'https://docln.net/action/upload/avatar';
        remoteUploadUrl = 'https://docln.net/action/upload/remote';

        coverSeriesUrl = 'https://docln.net/covers/series';
        coverBookUrl = 'https://docln.net/covers/books';
    </script>

    <!-- Main Script -->
    <script src="https://docln.net/scripts/plugins/upload/js/upload.js?v=7"></script>
    <script src="/livewire/livewire.js?id=f121a5df" data-csrf="1s68PBJKsMIU4nn1Wn9P2EbTNQaf2eWqi4pV2RqT"
        data-update-uri="/livewire/update" data-navigate-once="true"></script>
</body>

</html>
