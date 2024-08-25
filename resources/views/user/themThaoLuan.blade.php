@extends('user.layout.master')

@section('content')
    <!-- container -->
    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Thêm thảo luận</div>

                    <div class="panel-body">
                        <form role="form" method="POST" action="https://docln.net/action/series/store">
                            <input type="hidden" name="_token" value="2jWxkFxRgh4jHZZhX91HqtG38rhoyVQmdPpewFZ9">

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title" value="">
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label text-right">Nội dung</label>
                                <div class="col-md-10">
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="form-group required">
                                <div class="row">
                                    <label class="col-md-2 control-label  text-right">Chuyên mục</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="status">
                                            <option value="1">Thông báo</option>
                                            <option value="2">Tin tức</option>
                                            <option value="3">Hỏi đáp</option>
                                            <option value="3">Đánh giá</option>
                                            <option value="3">Thảo luận</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group required">
                                <div class="row">
                                    <label class="col-md-2 control-label  text-right">Chọn truyện</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="status">
                                            <option value="1">sadgdsaad</option>
                                            <option value="2">gávzcz</option>
                                            <option value="3">ưegsrng</option>
                                            <option value="3">kjfvd</option>
                                            <option value="3">fesfnch</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
                            <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    inline: false,
                                    height: 300,
                                    skin: 'oxide',
                                    content_css: 'default',
                                    branding: false,
                                    menubar: false,
                                    contextmenu: false,
                                    entities: '160,nbsp,38,amp,60,lt,62,gt',
                                    paste_word_valid_elements: 'b,strong,i,em,u,s,a,p,br,img',
                                    element_format: 'html',
                                    formats: {
                                        strikethrough: {
                                            inline: 's',
                                            remove: 'all'
                                        },
                                        underline: {
                                            inline: 'u',
                                            remove: 'all'
                                        },
                                    },
                                    plugins: 'wordcount link image code fullscreen paste emoticons',
                                    toolbar: 'undo redo | bold italic underline strikethrough forecolor | link image | removeformat | fullscreen'
                                });
                            </script>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Thêm thảo luận
                                    </button>
                                    <a href="javascript: history.back()" class="btn btn-warning">
                                        Quay lại
                                    </a>
                                </div>
                            </div>
                        </form>

                        <script>
                            $(document).ready(function() {
                                $('#select-type').on('change', function() {
                                    var value = $(this).val();
                                    if (value == '3') {
                                        $('#select-group').parent().parent().hide();
                                    } else {
                                        $('#select-group').parent().parent().show();
                                    }
                                });

                                $('#select-group').select2();
                                $('#select-genre').select2({
                                    closeOnSelect: false,
                                });
                            });
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
