@extends('stories.iframe.layouts.master')
@section('content')
<body data-theme="light">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Chapter</div>
                    <div class="panel-body">
                        <form role="form" method="POST" id="RePage" action="{{ route('chapter.update',$chapter->id) }}">
                            <input type="hidden" name="episode_id" value="{{ $chapter['episode_id'] }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7">Tiêu đề</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title" value="{{ $chapter['title'] }}">
                                </div>
                            </div>
                            <div class="form-group clearfix required">
                                <div class="col-md-12">
                                    <label class="control-label">Nội dung</label>
                                    <textarea id="NP-Content" name="content">{{ $chapter['content'] }}</textarea>
                                </div>
                            </div>
                            @include('layouts.TinyMCEscript')

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
