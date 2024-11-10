<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('textarea'))
        .then(editor => {
            console.log('Editor was initialized', editor);
        })
        .catch(error => {
            console.error('Error during initialization of the editor', error);
        });
</script>