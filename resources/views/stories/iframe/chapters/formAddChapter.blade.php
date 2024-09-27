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
                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label pt-7">Tiêu đề</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title" value="Chương  ">
                                    </div>
                                </div>

                                {{-- <div class="form-group clearfix">
                                <label class="col-md-2 control-label">Tiến độ</label>
                                <div class="col-md-8 pt-7">
                                    <input type="radio" name="complete" id="complete_cb1" value="1" checked>
                                    <label for="complete_cb1">Đã hoàn thành</label>
                                    &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="complete" id="complete_cb2" value="0"> <label
                                        for="complete_cb2">Chưa hoàn thành</label>
                                </div>
                            </div> --}}
                                <input type="hidden" id="word_count" name="word_count" value="0">
                                <div class="form-group clearfix required">
                                    <div class="col-md-12">
                                        <label class="control-label">Nội dung</label>
                                        <textarea id="LN_Chapter_Content" name="content"></textarea>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('stories.iframe.partials.scriptAjaxforChapter')
    @endsection
