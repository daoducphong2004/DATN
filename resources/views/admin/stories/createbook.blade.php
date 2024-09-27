@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách truyện
@endsection

@push('styles')

@endpush
@section('content')

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
                <input type="checkbox" name="adult">
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
@endsection
@push('scripts')
    <script>
        jQuery(document).ready(function() {
            console.log("jQuery version:", jQuery.fn.jquery);
            jQuery('#list-story').DataTable();
        });
    </script>
@endpush
@push('styles')
    <style>
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table th {
            font-size: 1rem;
            font-weight: 600;
        }

        .table td {
            font-size: 0.9rem;
        }

        .table img {
            max-width: 100%;
            height: auto;
        }

        .btn {
            margin: 2px;
        }
    </style>
@endpush
