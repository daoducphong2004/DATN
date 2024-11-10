@extends('stories.iframe.layouts.master')
@section('content')
<body data-theme="light">

    <div class="container-fuild">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Episode</div>

                    <div class="panel-body">


                        <form role="form" id='RePage' method="POST" enctype="multipart/form-data" action="{{ route('episode.update',$episode->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="episode_id" value="{{ $episode->id }}">

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title" value="{{ $episode->title }}">
                                </div>
                            </div>
                            @include('stories.iframe.partials.css_script')
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Ảnh bìa</label>
                                <div class="col-md-8">
                                    <div id="upload" class="series_cover">
                                        <div id="drop">
                                            <a id="selectImageBtn">Chọn ảnh</a>
                                            <input type="file" name="episode_path" id="fileInput" style="display: none" />
                                        </div>
                                        <img style="max-height: 300px; max-width: 300px" src="{{ asset(Storage::url($episode->episode_path)) }}">
                                        <div class="alert alert-danger alert-dismissible" role="alert" style="display: none">
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

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label text-right">Tóm tắt</label>
                                <div class="col-md-10">
                                    <textarea id="LN_Book_Summary" name="description">{!! $episode->description !!}</textarea>
                                </div>
                            </div>
                            @include('layouts.TinyMCEscriptNoImport')

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Sửa Tập
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('stories.iframe.partials.scriptAjaxForm')

@endsection
