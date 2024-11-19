@extends('stories.iframe.layouts.master')
@section('content')

    <body data-theme="light">
        <div class="container-fuild">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Chapter</div>
                        <div class="panel-body">
                            <form role="form" method="POST" id="RePage"
                                action="{{ route('chapter.update', $chapter->id) }}">
                                <input type="hidden" name="episode_id" value="{{ $chapter['episode_id'] }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label pt-7">Tiêu đề</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $chapter['title'] }}">
                                    </div>
                                </div>
                                <div class="form-group clearfix required">
                                    <div class="col-md-12">
                                        <label class="control-label">Nội dung</label>
                                        <textarea id="LN_Chapter_Content"  name="content">{{ $chapter['content'] }}</textarea>
                                    </div>
                                </div>
                                @include('layouts.TinyMCEscript')

                                <div class="form-group clearfix">
                                    <label class="col-md-2 control-label pt-7 text-right">Giá</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" max='999999' name="price"
                                            value="{{ $chapter->price }}">
                                    </div>
                                </div>
                                <!-- Nút tải ảnh -->
                                <div class="form-group clearfix" id="form-add-image">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="fileInput">Chọn ảnh</label>
                                        <input type="file" id="fileInput" class="form-control" />

                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <label for="imageWidth">Chiều rộng (px)</label>
                                                <input type="number" id="imageWidth" class="form-control"
                                                    placeholder="Nhập chiều rộng" />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="imageHeight">Chiều cao (px)</label>
                                                <input type="number" id="imageHeight" class="form-control"
                                                    placeholder="Nhập chiều cao" />
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-info mt-3" id="uploadImageButton">Tải ảnh
                                            lên</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            Sửa chương
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        @include('stories.iframe.partials.scriptAjaxforChapter')
    @endsection
