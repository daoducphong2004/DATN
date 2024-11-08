<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    function isValidImageUrl(url) {
        return new Promise((resolve) => {
            const img = new Image();
            img.onload = () => resolve(true);   // Image loaded successfully
            img.onerror = () => resolve(false); // Error loading image
            img.src = url;
        });
    }

    tinymce.init({
        selector: 'textarea',
        inline: false,
        height: 300,
        skin: 'oxide',
        content_css: 'default',
        branding: false,
        contextmenu: false,
        entities: '160,nbsp,38,amp,60,lt,62,gt',
        paste_word_valid_elements: 'b,strong,i,em,u,s,a,p,br,img',
        element_format: 'html',
        formats: {
            strikethrough: { inline: 's', remove: 'all' },
            underline: { inline: 'u', remove: 'all' }
        },
        plugins: 'wordcount link  code fullscreen paste emoticons',
        toolbar: 'undo redo | bold italic underline strikethrough forecolor | link | removeformat | fullscreen',

    //     images_upload_handler: function(blobInfo, success, failure) {
    //         let xhr = new XMLHttpRequest();
    //         let formData = new FormData();
    //         xhr.open('POST', '/upload-image', true);
    //         xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

    //         xhr.onload = function() {
    //             if (xhr.status !== 200) {
    //                 failure('Error: ' + xhr.status);
    //                 return;
    //             }
    //             let json = JSON.parse(xhr.responseText);
    //             if (!json || typeof json.location !== 'string') {
    //                 failure('Invalid JSON: ' + xhr.responseText);
    //                 return;
    //             }
    //             success(json.location);
    //         };

    //         formData.append('file', blobInfo.blob());
    //         xhr.send(formData);
    //     },
    });
</script>
