@include('stories.iframe.partials.header')

<body data-theme="light">

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Chapter</div>

                    <div class="panel-body">


                        <script>
                            referrer = document.referrer
                            if (referrer.indexOf('/action/nav') < 0 && referrer.indexOf('/manage') < 0) {
                                parent.nav.location.href = parent.nav.location.href.split('?')[0] + '?chapter_id=142047';

                                if (window !== window.parent) {
                                    parent.history.pushState({}, '', parent.location.pathname + '?chapter_id=142047&action=editchapter');
                                }
                            }
                        </script>

                        <form role="form" method="POST" action="https://docln.net/action/chapter/update">
                            <input type="hidden" name="_token" value="CZY8MzWet55g6VaMAOwLgbG1HJSL019pBZHrMbIm">
                            <input type="hidden" name="chapter_id" value="142047">

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7">Tiêu đề</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title" value="Chương 01">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7">Tiến độ</label>
                                <div class="col-md-8 pt-7">
                                    <input type="radio" name="complete" id="complete_cb1" value="1" checked>
                                    <label for="complete_cb1">Đã hoàn thành</label>&nbsp;&nbsp;&nbsp;

                                    <input type="radio" name="complete" id="complete_cb2" value="0">
                                    <label for="complete_cb2">Chưa hoàn thành</label>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label" style="padding-top: 20px">Upload Ảnh</label>
                                <div class="col-md-8">
                                    <div id="upload" class="chapter_content">
                                        <div id="drop">
                                            <a>Chọn ảnh</a>
                                            <input type="file" name="image" multiple />
                                        </div>

                                        <div class="alert alert-danger alert-dismissible" role="alert"
                                            style="display: none">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span>&times;</span>
                                            </button>
                                        </div>

                                        <div id="progress" class="progress" style="display: none">
                                            <div class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group clearfix required">
                                <div class="col-md-12">
                                    <label class="control-label">Nội dung</label>
                                    <textarea id="LN_Chapter_Content" class="form-control" name="content">&lt;p id=&quot;1&quot;&gt;test&lt;/p&gt;</textarea>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7">Lí do sửa</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Có thể bỏ trống" class="form-control"
                                        name="reason" value="">
                                </div>
                            </div>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
                            <script>
                                tinymce.init({
                                    selector: '#LN_Chapter_Content',
                                    inline: false,
                                    height: 400,
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
                                    toolbar: 'undo redo | bold italic underline strikethrough fore |  image | removeformat | fullscreen'
                                });
                            </script>

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        Cập nhật
                                    </button>
                                </div>

                                <div class="col-md-2">
                                    <a class="btn btn-warning"
                                        href="https://docln.net/action/chapter/142047/revisions?navbar=0"
                                        style="color:white !important">
                                        Xem lịch sử
                                    </a>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>

                <style>
                    .note-input {
                        margin-bottom: 10px;
                    }

                    .note-result {
                        display: block;
                    }

                    .note-toolkit {
                        margin-bottom: 10px;
                    }

                    .notegroup {
                        margin-bottom: 30px;
                    }

                    .note-guide {
                        margin-bottom: 30px;
                        color: orange;
                    }
                </style>

                <div class="panel panel-default">
                    <div class="panel-heading">Chú thích (Giới hạn 500 ký tự cho mỗi note)</div>

                    <div class="panel-body">
                        <span class="note-guide col-xs-12"> Dấu '+' để thêm note / Dấu 'x' để bỏ note <br> Nhấn 'v' để
                            lưu note rồi chép BBcode xuất hiện bên dưới lên trên chỗ cần ghi chú <br> Khi cần cập nhật
                            note chỉ cần sửa trong mục ghi chú, bấm 'v' để lưu lại
                        </span>
                        <div class="form-group clearfix">
                            <div class="notegroup clearfix">
                                <div class="note-input col-md-9">
                                    <textarea class="form-control block note-content" name="note"></textarea>
                                    <input type="hidden" class="note_id" value="">
                                </div>
                                <div class="note-toolkit col-md-3">
                                    <span type="button" class="btn btn-default noteicon noteplus"><i
                                            class="fas fa-plus"></i></span>

                                    <span type="button" class="btn btn-success noteicon notesave"><i
                                            class="fas fa-check"></i></span>

                                    <span type="button" class="btn btn-danger noteicon noteremove"><i
                                            class="fas fa-times"></i></span>

                                </div>
                                <div style="clear: both"></div>
                                <div class="note-result col-xs-12">
                                    <span class="block notekey"></span>
                                    <span class="block response"></span>
                                </div>
                            </div>
                        </div>
                        <span class="note-guide col-xs-12">Dùng &lt;a href=&quotlink&quot&gt;Tên link&lt;&sol;a&gt; đễ
                            dẫn link <br> Dùng &lt;strong&gt;&lt;&sol;strong&gt; để tô đậm <br> Dùng
                            &lt;m&gt;&lt;&sol;em&gt; để in nghiêng <br> Dùng &lt;u&gt;&lt;&sol;u&gt; để gạch dưới
                        </span>
                    </div>
                </div>

                <script>
                    var token = 'CZY8MzWet55g6VaMAOwLgbG1HJSL019pBZHrMbIm'

                    $('.noteplus').on('click', function() {
                        var parent = $(this).parent().parent()

                        parent.clone(true)
                            .find('textarea[name=note]').val('').end()
                            .find('input.note_id').val('').end()
                            .find('span.notekey').text('').end()
                            .appendTo(parent.parent());
                    })

                    $('.notesave').on('click', function() {
                        var parent = $(this).parent().parent()

                        var chapter_id = $('input[name=chapter_id]').val()
                        var note_id = parent.find('input.note_id').val()
                        var content = parent.find('textarea[name=note]').val()

                        var url = parseInt(note_id) ? 'https://docln.net/action/note/update' :
                            'https://docln.net/action/note/store'

                        if (content.trim() == '') {
                            alert('Nội dung chú thích không thể bỏ trống')
                            return;
                        }

                        $.post(url, {
                            _token: token,
                            note_id: note_id,
                            chapter_id: chapter_id,
                            content: content
                        }, function(data) {
                            if (data.status == 'success') {
                                parent.find('span.notekey').text((parseInt(note_id) ? 'Đã lưu - ' : '') + '[note' + data
                                    .note_id + ']')
                                parent.find('input.note_id').val(data.note_id)
                            } else {
                                parent.find('span.response').text(data.message)
                            }
                        }, 'json')
                    })

                    $('.noteremove').on('click', function() {
                        var parent = $(this).parent().parent()

                        var note_id = parent.find('.note_id').val()

                        if (!note_id.length) {
                            parent.remove()
                            return false;
                        }

                        if (confirm('Bạn có chắc muốn xóa Chú thích này không?')) {
                            $.post('https://docln.net/action/note/destroy', {
                                _token: token,
                                note_id: note_id
                            }, function(data) {
                                if (data.status == 'success') {
                                    parent.remove()
                                } else {
                                    parent.find('span.response').text(data.message)
                                }
                            }, 'json')
                        }
                    })
                </script>
            </div>
        </div>
    </div>


