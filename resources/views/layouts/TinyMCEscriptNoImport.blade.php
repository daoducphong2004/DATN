<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
<script>
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
            strikethrough: {
                inline: 's',
                remove: 'all'
            },
            underline: {
                inline: 'u',
                remove: 'all'
            }
        },
        plugins: 'wordcount link  code fullscreen paste emoticons',
        toolbar: 'undo redo | bold italic underline strikethrough forecolor | link | removeformat | fullscreen',
    });


</script>
