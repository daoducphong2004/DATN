@include('stories.iframe.partials.header')

<body data-theme="light">

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Book</div>

                    <div class="panel-body">


                        <form role="form" method="POST" action="https://docln.net/action/book/store">
                            <input type="hidden" name="_token" value="CY8UdDcA5sTShlgxI6F6TI0VGHI79s7VKXoAPqFr">
                            <input type="hidden" name="series_id" value="19083">

                            <div class="form-group clearfix required">
                                <label class="col-md-2 control-label pt-7 text-right">Tiêu đề</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title" value="Tập 01 ">
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-5 text-right">Loại truyện</label>
                                <div class="col-md-10">
                                    <select class="input-sm" name="seriestype" disabled>
                                        <option value="1" selected>Truyện dịch</option>
                                        <option value="2">Truyện convert</option>
                                        <option value="3">Truyện sáng tác</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label text-right">Tóm tắt</label>
                                <div class="col-md-10">
                                    <textarea id="LN_Book_Summary" name="summary"></textarea>
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label pt-7 text-right">Link down</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="download" value="">
                                </div>
                            </div>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
                            <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    inline: false,
                                    height: 200,
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
                                        Thêm sách
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="/livewire/livewire.js?id=f121a5df" data-csrf="CY8UdDcA5sTShlgxI6F6TI0VGHI79s7VKXoAPqFr"
        data-update-uri="/livewire/update" data-navigate-once="true"></script>
</body>

</html>
