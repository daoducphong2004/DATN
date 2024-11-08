@extends('stories.iframe.layouts.master')

@section('content')

    <body data-theme="light">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Chapter</div>
                        <div class="panel-body">
                            <form role="form" method="POST" id="RePage" action="{{ route('chapter.store') }}">
                                <input type="hidden" name="episode_id" value="{{ $episode->id }}">
                                @csrf
                                @error('error')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label pt-7">Tiêu đề</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title"
                                            value="{{ old('title', 'Chương  ') }}">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <input type="hidden" id="word_count" name="word_count" value="0">

                                <div class="form-group clearfix required">
                                    <div class="col-md-12">
                                        <label class="control-label">Nội dung</label>
                                        <textarea id="LN_Chapter_Content" name="content">{{ old('content') }}</textarea>
                                        @error('content')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-2 control-label pt-7 text-right">Giá</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="price" max='999999'
                                            value="{{ old('price', 0) }}">
                                        @error('price')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                @include('layouts.TinyMCEscript')

                                <div class="form-group">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            Thêm chương
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <!-- Form tải file DOCX để trích xuất nội dung -->
                            <form id="extractForm" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="form-group">
                                    <label for="docxFile" class="col-md-2 control-label">Chọn file DOCX</label>
                                    <div class="col-md-8">
                                        <input type="file" name="file" id="docxFile" class="form-control-file">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" id="extractBtn" class="btn btn-primary">Trích xuất nội
                                            dung</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('stories.iframe.partials.scriptAjaxforChapter')
    </body>

    
    
    
@endsection
