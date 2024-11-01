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
        strikethrough: { inline: 's', remove: 'all' },
        underline: { inline: 'u', remove: 'all' }
    },
    plugins: 'wordcount link image code fullscreen paste emoticons',
    toolbar: 'undo redo | bold italic underline strikethrough forecolor | link image | removeformat | fullscreen',

    setup: function(editor) {
        editor.ui.registry.addButton('alignleft', {
            text: 'Align Left',
            onAction: function() {
                editor.execCommand('JustifyLeft');
            }
        });
        editor.ui.registry.addButton('aligncenter', {
            text: 'Align Center',
            onAction: function() {
                editor.execCommand('JustifyCenter');
            }
        });
        editor.ui.registry.addButton('alignright', {
            text: 'Align Right',
            onAction: function() {
                editor.execCommand('JustifyRight');
            }
        });
        editor.ui.registry.addButton('alignjustify', {
            text: 'Justify',
            onAction: function() {
                editor.execCommand('JustifyFull');
            }
        });
    },

    // Cảnh báo khi người dùng nhập link ảnh thay vì tải lên
    file_picker_callback: function(callback, value, meta) {
        if (meta.filetype === 'image') {
            const imageUrl = prompt('Nhập URL ảnh:');
            if (imageUrl) {
                alert('Cảnh báo: Sử dụng URL ảnh có thể dẫn đến mất ảnh nếu link bị hỏng. Nên tải ảnh lên trực tiếp để tránh rủi ro này.');
                callback(imageUrl, { title: 'Image URL' });
            }
        }
    },

    images_upload_handler: function(blobInfo, success, failure) {
        let xhr = new XMLHttpRequest();
        let formData = new FormData();
        xhr.open('POST', '/upload-image', true);
        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

        xhr.onload = function() {
            if (xhr.status !== 200) {
                failure('Error: ' + xhr.status);
                return;
            }
            let json = JSON.parse(xhr.responseText);
            if (!json || typeof json.location !== 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
            success(json.location);
        };

        formData.append('file', blobInfo.blob());
        xhr.send(formData);
    }
});

</script>
