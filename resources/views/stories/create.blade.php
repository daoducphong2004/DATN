@extends('partials.sidebar')
@section('noidung')

    <div class="container" style="margin-top: 60px;">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">Thêm mới truyện</div>
            
                                <div class="panel-body">
                                    <form role="form" method="POST" action="https://docln.net/action/series/store">
                                        <input type="hidden" name="_token" value="2jWxkFxRgh4jHZZhX91HqtG38rhoyVQmdPpewFZ9">
            
                                        <div class="form-group clearfix required">
                                            <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="title" value="">
                                            </div>
                                        </div>
            
                                        <div class="form-group clearfix">
                                            <label class="col-md-2 control-label pt-7 text-right">Tên khác</label>
                                            <div class="col-md-8">
                                                <input type="text" placeholder="Ngăn cách nhiều tên bằng dấu chấm phẩy ;"
                                                    class="form-control" name="altname" value="">
                                            </div>
                                        </div>
            
                                        <div class="form-group d-flex ms-3">
                                            <label class="control-label text-right"><b>Nội dung nhạy cảm?</b></label>
                                            <div class="col">
                                                <input type="checkbox" name="is_mature" value="1">
                                            </div>
                                        </div>
            
                                        <div class="form-group clearfix required">
                                            <label class="col-md-2 control-label pt-7 text-right">Tác giả</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="author" value="">
                                            </div>
                                        </div>
            
                                        <div class="form-group clearfix">
                                            <label class="col-md-2 control-label pt-7 text-right">Họa sĩ</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="illustrator" value="">
                                            </div>
                                        </div>
            
                                        <div class="form-group required">
                                            <div class="row">
                                                <label class="col-2 control-label  text-right">Loại truyện</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control" name="type" id="select-type">
                                                        <option value="1">Truyện dịch</option>
                                                        <option value="2">Truyện convert</option>
                                                        <option value="3">Truyện sáng tác</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group clearfix required">
                                            <div class="row">
                                                <label class="col-md-2 control-label text-right">Nhóm dịch</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="type" id="select-type">
                                                        <option value="1">Sdfj</option>
                                                        <option value="2">Tthoapn</option>
                                                        <option value="3">sfdgs</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group clearfix required">
                                            <label class="col-md-2 control-label pt-7 text-right">Thể loại</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="genres[]" id="select-genre" multiple="">
                                                    <option value="1">Action</option>
                                                    <option value="49">Adapted to Anime</option>
                                                    <option value="51">Adapted to Drama CD</option>
                                                    <option value="50">Adapted to Manga</option>
                                                    <option value="28">Adult</option>
                                                    <option value="2">Adventure</option>
                                                    <option value="52">Age Gap</option>
                                                    <option value="60">Boys Love</option>
                                                    <option value="54">Character Growth</option>
                                                    <option value="39">Chinese Novel</option>
                                                    <option value="3">Comedy</option>
                                                    <option value="43">Cooking</option>
                                                    <option value="56">Different Social Status</option>
                                                    <option value="4">Drama</option>
                                                    <option value="5">Ecchi</option>
                                                    <option value="40">English Novel</option>
                                                    <option value="6">Fantasy</option>
                                                    <option value="59">Female Protagonist</option>
                                                    <option value="45">Game</option>
                                                    <option value="7">Gender Bender</option>
                                                    <option value="8">Harem</option>
                                                    <option value="35">Historical</option>
                                                    <option value="9">Horror</option>
                                                    <option value="10">Incest</option>
                                                    <option value="30">Isekai</option>
                                                    <option value="33">Josei</option>
                                                    <option value="34">Korean Novel</option>
                                                    <option value="44">Magic</option>
                                                    <option value="37">Martial Arts</option>
                                                    <option value="27">Mature</option>
                                                    <option value="11">Mecha</option>
                                                    <option value="36">Military</option>
                                                    <option value="58">Misunderstanding</option>
                                                    <option value="12">Mystery</option>
                                                    <option value="32">Netorare</option>
                                                    <option value="38">One shot</option>
                                                    <option value="46">Otome Game</option>
                                                    <option value="61">Parody</option>
                                                    <option value="23">Psychological</option>
                                                    <option value="47">Reverse Harem</option>
                                                    <option value="22">Romance</option>
                                                    <option value="13">School Life</option>
                                                    <option value="14">Science Fiction</option>
                                                    <option value="31">Seinen</option>
                                                    <option value="15">Shoujo</option>
                                                    <option value="16">Shoujo ai</option>
                                                    <option value="26">Shounen</option>
                                                    <option value="17">Shounen ai</option>
                                                    <option value="18">Slice of Life</option>
                                                    <option value="55">Slow Life</option>
                                                    <option value="19">Sports</option>
                                                    <option value="24">Super Power</option>
                                                    <option value="20">Supernatural</option>
                                                    <option value="25">Suspense</option>
                                                    <option value="21">Tragedy</option>
                                                    <option value="53">Wars</option>
                                                    <option value="29">Web Novel</option>
                                                    <option value="57">Workplace</option>
                                                    <option value="48">Yuri</option>
                                                </select>
                                            </div>
                                        </div>
            
                                        <div class="form-group clearfix required">
                                            <label class="col-md-2 control-label text-right">Tóm tắt</label>
                                            <div class="col-md-10">
                                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
            
                                        <div class="form-group clearfix">
                                            <label class="col-md-2 control-label text-right">Chú thích thêm</label>
                                            <div class="col-md-10">
                                                <div class="col-md-10">
                                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="form-group required">
                                            <div class="row">
                                                <label class="col-md-2 control-label  text-right">Tình trạng dịch</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="status">
                                                        <option value="1">Đang tiến hành</option>
                                                        <option value="2">Tạm ngưng</option>
                                                        <option value="3">Đã hoàn thành</option>
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
                                                    Thêm truyện
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
        