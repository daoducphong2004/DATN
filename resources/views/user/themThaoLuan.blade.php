@extends('user.layout.master')

@section('content')
    <!-- container -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Trang
                    </div>

                    <div class="panel-body">

                        <form method="POST" action="{{ route('store_thaoluan') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label text-right">Nội dung</label>
                                <div class="col-md-10">
                                    <textarea id="Page_Content" name="content" aria-hidden="true"
                                        value="SQLSTATE[HY000]: General error: 1364 Field 'title' doesn't have a default value"></textarea>
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Chọn chuyên mục</label>
                                <div class="col-md-8">
                                    <select class="input-sm" name="category_id">
                                        @foreach ($categories as $item_categories)
                                            <option value="{{ $item_categories->id }}">{{ $item_categories->content }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Chọn truyện</label>
                                <div class="col-md-8">
                                    <select class="input-sm" name="book_id" style="width: 100%">
                                        <option value="">--- Chọn truyện ---</option>
                                        <optgroup label="translations">
                                            @foreach ($books as $item_books)
                                                <option value="{{ $item_books->id }}">{{ $item_books->title }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            @include('layouts.TinyMCEscriptNoImport')
                            <input type="hidden" name="viewer" value="0">
                            <input type="hidden" name="user_id" value="{{ $userID }}">
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Thêm trang
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Lấy tham số từ URL
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
    
        // Gán giá trị `book_id` vào select
        document.addEventListener("DOMContentLoaded", function () {
            const bookId = getQueryParam('book_id');
            if (bookId) {
                const bookSelect = document.querySelector('select[name="book_id"]');
                if (bookSelect) {
                    const options = bookSelect.options;
                    for (let i = 0; i < options.length; i++) {
                        if (options[i].value == bookId) {
                            options[i].selected = true;
                            break;
                        }
                    }
                }
            }
        });
    </script>
    
@endsection
