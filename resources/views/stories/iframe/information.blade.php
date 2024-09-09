@extends('stories.partials.master')
@section('content')

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

                            <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('story.update', $book->id) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="series_id" value="{{ $book->id }}">

                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $book->title }}">
                                    </div>
                                </div>


                                <div class="form-group clearfix">
                                    <label class="col-md-2 control-label text-right"><b>Nội dung nhạy cảm?</b></label>
                                    <div class="col-md-8">
                                        <input type="checkbox" name="adult" value="{{ $book->adult }}">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-2 control-label pt-7 text-right">Ảnh bìa</label>
                                    <div class="col-md-8">
                                        <div id="upload" class="series_cover">
                                            <div id="drop">
                                                <a>Chọn ảnh</a>
                                                <input type="file" name="book_path" />
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
                                        <input type="text" class="form-control" name="author"
                                            value="{{ $book->author }}">
                                    </div>
                                </div>
                                {{-- {{ dd($book->genres) }} --}}
                                <div class="form-group clearfix">
                                    <label class="col-md-2 control-label pt-7 text-right">Họa sĩ</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="painter"
                                            value="{{ $book->painter }}">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-2 control-label pt-5 text-right">Loại truyện</label>
                                    <div class="col-md-10">
                                        <select class="input-sm" name="type_display" disabled>
                                            <option @selected($book->type==1) value="1">Truyện dịch</option>
                                            <option @selected($book->type==2) value="2">Truyện convert</option>
                                            <option @selected($book->type==3) value="3">Truyện sáng tác</option>
                                        </select>
                                        <!-- Hidden input to pass the value -->
                                        <input type="hidden" name="type" value="{{ $book->type }}">
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
                                            @foreach ($genres as $key => $value)
                                                <option @selected(in_array($value, $book->genres->pluck('id')->all())) value="{{ $value }}">
                                                    {{ $key }}</option>
                                                {{-- <option value="{{ $value }}" @if (in_array($value, $book->genres->pluck('id')->all())) selected @endif>{{ $key }}</option> --}}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label text-right">Tóm tắt</label>
                                    <div class="col-md-10">
                                        <textarea id="LN_Series_Summary" name="description">{!! $book->description !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-2 control-label text-right">Chú thích thêm</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="extrainfo" name="note">{!! $book->note !!}</textarea>
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
    @endsection
