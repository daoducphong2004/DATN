@extends('admin.layouts.default')
@section('title')
    Sửa thảo luận - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Chỉnh sửa Thảo Luận</h4>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('updateadmin', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Tiêu đề -->
                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label text-right">Tiêu đề</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title" value="{{ $data->title }}" required>
                                </div>
                            </div>

                            <!-- Nội dung -->
                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label text-right">Nội dung</label>
                                <div class="col-md-10">
                                    <textarea id="Page_Content" name="content" class="form-control" required>{{ $data->content }}</textarea>
                                </div>
                            </div>

                            <!-- Chọn chuyên mục -->
                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label text-right">Chọn chuyên mục</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="category_id" required>
                                        @foreach ($categories as $item_categories)
                                            <option value="{{ $item_categories->id }}" 
                                                @if ($item_categories->id == $data->category_id) selected @endif>
                                                {{ $item_categories->content }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Chọn truyện -->
                            
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label text-right">Chọn truyện</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="book_id">
                                        <option value="0">--- Chọn truyện ---</option>
                                        <optgroup label="Translations">
                                            @foreach ($books as $item_books)
                                                <option value="{{ $item_books->id }}" 
                                                    @if ($item_books->id == $data->book_id) selected @endif>
                                                    {{ $item_books->title }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <!-- Editor -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
                            <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    inline: false,
                                    height: 400,
                                    skin: 'oxide',
                                    content_css: 'default',
                                    branding: false,
                                    menubar: false,
                                    plugins: 'wordcount link image code fullscreen paste emoticons',
                                    toolbar: 'undo redo | bold italic underline strikethrough forecolor | link image | removeformat | fullscreen',
                                    formats: {
                                        strikethrough: { inline: 's', remove: 'all' },
                                        underline: { inline: 'u', remove: 'all' },
                                    },
                                });
                            </script>

                            <!-- Hidden inputs -->
                            <input type="hidden" name="viewer" value="0">
                            <input type="hidden" name="user_id" value="{{ $userID }}">

                            <!-- Submit button -->
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
