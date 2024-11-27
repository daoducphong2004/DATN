<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
    selector: 'textarea',
    inline: false,
    height: 500,
    skin: 'oxide',
    content_css: 'default',
    branding: false,
    contextmenu: false,
    entities: '160,nbsp,38,amp,60,lt,62,gt',
    paste_word_valid_elements: 'b,strong,i,em,u,s,a,p,br,img,ul,ol,li,table,tr,td,th',
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
    plugins: 'wordcount link code fullscreen paste emoticons  lists advlist charmap textcolor colorpicker',
    toolbar: 'undo redo | fontselect fontsizeselect | bold italic underline strikethrough superscript subscript | forecolor backcolor | alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | link charmap emoticons | removeformat fullscreen',
    menubar: 'file edit view insert format tools  help',
    advlist_bullet_styles: 'default,square,circle',
    advlist_number_styles: 'default,lower-alpha,lower-roman,upper-alpha,upper-roman'
});



</script>
