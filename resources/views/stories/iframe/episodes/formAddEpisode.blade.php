@extends('stories.iframe.layouts.master')
@section('content')

    <body data-theme="light">

        <div class="container-fuild">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">

                        <div class="panel-heading">Episode</div>
                        <!-- Thêm hiển thị thông báo thành công hoặc lỗi -->
                        <div id="notification" style="display: none;"></div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="panel-body">


                            <form role="form" id="RePage" method="POST" enctype="multipart/form-data"
                                action="{{ route('episode.store') }}">
                                @csrf
                                <input type="hidden" name="book_id" value="{{ $book->id }}">

                                <div class="form-group clearfix required">
                                    <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title" value="">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-md-2 control-label pt-7 text-right">Ảnh bìa </label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="episode_path" value="">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-2 control-label text-right">Tóm tắt</label>
                                    <div class="col-md-10">
                                        <textarea id="LN_Book_Summary" name="description"></textarea>
                                    </div>
                                </div>


                                @include('layouts.TinyMCEscript')

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary">
                                            Thêm Tập
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
