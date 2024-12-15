@extends('admin.layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thêm Thảo Luận Mới
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('admin.forum.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="title" required>
                            </div>
                        </div>

                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label text-right">Nội dung</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="content" rows="5" required></textarea>
                            </div>
                        </div>

                        <div class="form-group clearfix required">
                            <label class="col-md-2 control-label pt-7 text-right">Chọn chuyên mục</label>
                            <div class="col-md-8">
                                <select class="form-control" name="category_id" required>
                                    <option value="">--- Chọn chuyên mục ---</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->content }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label class="col-md-2 control-label pt-7 text-right">Chọn truyện</label>
                            <div class="col-md-8">
                                <select class="form-control" name="book_id">
                                    <option value="">--- Không chọn truyện ---</option>
                                    @foreach ($books as $book)
                                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        

                        
                        <div class="form-group clearfix">
                            <label class="col-md-2 control-label pt-7 text-right">Chọn Khóa Bình Luận</label>
                            <div class="col-md-8">
                                <select class="form-control" name="lock" id="">
                                    <option value="0">Không khóa</option>
                                    <option value="1">Khóa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-md-2 control-label pt-7 text-right">Chọn Nổi Bật</label>
                            <div class="col-md-8">
                                <select class="form-control" name="is_featured" id="">
                                    <option value="0">Bình thường</option>
                                    <option value="1">Nổi bật</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Thêm Thảo Luận
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
