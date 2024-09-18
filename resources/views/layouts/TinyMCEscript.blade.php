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
        plugins: 'wordcount link code fullscreen paste emoticons',
        toolbar: 'undo redo | bold italic underline strikethrough fore | alignleft aligncenter alignright alignjustify | removeformat | fullscreen',
        setup: function (editor) {
            editor.ui.registry.addButton('alignleft', {
                text: 'Align Left',
                onAction: function () {
                    editor.execCommand('JustifyLeft');
                }
            });
            editor.ui.registry.addButton('aligncenter', {
                text: 'Align Center',
                onAction: function () {
                    editor.execCommand('JustifyCenter');
                }
            });
            editor.ui.registry.addButton('alignright', {
                text: 'Align Right',
                onAction: function () {
                    editor.execCommand('JustifyRight');
                }
            });
            editor.ui.registry.addButton('alignjustify', {
                text: 'Justify',
                onAction: function () {
                    editor.execCommand('JustifyFull');
                }
            });
        }
    });
</script>
