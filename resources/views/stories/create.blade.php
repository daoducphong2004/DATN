@extends('user.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Series</div>

                    <div class="panel-body">
                        @include('stories.iframe.partials.css_script')


                        <form role="form" method="POST" action="{{ route('story.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-2 col-form-label text-right">Tiêu đề <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" id="title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="book_path" class="col-md-2 col-form-label text-right">Ảnh bìa</label>
                                <div class="col-md-10">
                                    <div id="upload" class="series_cover">
                                        <div id="drop">
                                            <a id="selectImageBtn" class="btn btn-outline-primary">Chọn ảnh</a>
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

                            <div class="form-group row">
                                <label for="author" class="col-md-2 col-form-label text-right">Tác giả <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="author" id="author" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="painter" class="col-md-2 col-form-label text-right">Họa sĩ</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="painter" id="painter">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="select-type" class="col-md-2 col-form-label text-right">Loại truyện <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <select class="form-control" name="type" id="select-type" required>
                                        <option value="1">Truyện dịch</option>
                                        <option value="2">Truyện convert</option>
                                        <option value="3">Truyện sáng tác</option>
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label for="select-group" class="col-md-2 col-form-label text-right">Nhóm dịch <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <select class="form-control" name="group_id" id="select-group" required>
                                        <option value="1">Hako Translation</option>
                                        <option value="2839">Nhóm của Phong</option>
                                        <option value="60">Tác Giả OLN</option>
                                    </select>
                                </div>
                            </div> --}}
                            <input type="hidden" value="{{ $user->group }}" name="group_id">
                            <div class="form-group row">
                                <label for="select-genre" class="col-md-2 col-form-label text-right">Thể loại <span
                                        class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <select class="form-control" name="genres[]" id="select-genre" multiple="multiple"
                                        style="width: 100%" required>
                                        @foreach ($genres as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-2 col-form-label text-right">Tóm tắt</label>
                                <div class="col-md-10">
                                    <textarea id="LN_Series_Summary" name="description" class="form-control" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="extrainfo" class="col-md-2 col-form-label text-right">Chú thích thêm</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="extrainfo" name="note" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="select-status" class="col-md-2 col-form-label text-right">Tình trạng dịch
                                    <span class="text-danger">*</span></label>
                                <div class="col-md-10">
                                    <select class="form-control" name="status" id="select-status" required>
                                        <option value="1">Đang tiến hành</option>
                                        <option value="2">Tạm ngưng</option>
                                        <option value="3">Đã hoàn thành</option>
                                    </select>
                                </div>
                            </div>

                            @include('layouts.TinyMCEscriptNoImport')

                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
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
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $('#select-genre').select2();
        });
    </script>
      <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: rgb(1, 1, 121) !important; 
        }
        /* Thay đổi màu chữ trong Select2 */
        .select2-container .select2-selection__rendered {
            color: black;
        }

        .select2-dropdown .select2-results__option {
            color: black;
        }

        .select2-dropdown .select2-results__option:hover {
            background-color: black; 
        }
    </style>
@endsection
