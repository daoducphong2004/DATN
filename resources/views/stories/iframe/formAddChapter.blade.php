@include('stories.iframe.partials.header')

<body data-theme="light">

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Chapter</div>
                    <div class="panel-body">
                        <form role="form" method="POST"  action="{{ route('chapter.store') }}">
                            <input type="hidden" name="episode_id" value="{{ $episode->id }}">
                            @csrf
                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7">Tiêu đề</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title" value="Chương 01 ">
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
                                    <textarea id="LN_Chapter_Content" name="content"></textarea>
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


    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
    <link href="https://docln.net/scripts/plugins/upload/css/upload.css" rel="stylesheet" />

    <!-- jQuery File Upload Dependencies -->
    <script src="https://docln.net/scripts/plugins/upload/js/jquery.ui.widget.js"></script>
    <script src="https://docln.net/scripts/plugins/upload/js/jquery.iframe-transport.js"></script>
    <script src="https://docln.net/scripts/plugins/upload/js/jquery.fileupload.js"></script>

    <script>
        uploadSeriesUrl = 'https://docln.net/action/upload/series';
        uploadBookUrl = 'https://docln.net/action/upload/book';
        uploadChapterUrl = '{{ route('upload.image') }}';
        uploadAvatarUrl = 'https://docln.net/action/upload/avatar';
        remoteUploadUrl = 'https://docln.net/action/upload/remote';

        coverSeriesUrl = 'https://docln.net/covers/series';
        coverBookUrl = 'https://docln.net/covers/books';
    </script>

    <!-- Main Script -->
    <script src="{{ asset('scripts/plugins/upload.js') }}"></script>
    <script src="/livewire/livewire.js?id=f121a5df" data-csrf="uCO9Jgcs28O5t0bPzQEnbIfru6kgF6hfI24f8bER"
        data-update-uri="/livewire/update" data-navigate-once="true"></script>
</body>

</html>
