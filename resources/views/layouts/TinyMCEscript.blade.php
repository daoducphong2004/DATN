<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script>

<input type="file" id="wordFileInput" />

<script>
    function isValidImageUrl(url) {
        return new Promise((resolve) => {
            const img = new Image();
            img.onload = () => resolve(true); // Image loaded successfully
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

    document.getElementById('wordFileInput').addEventListener('change', function(event) {
    var reader = new FileReader();

    reader.onload = function(e) {
        var arrayBuffer = reader.result;
        mammoth.convertToHtml({ arrayBuffer: arrayBuffer })
            .then(function(result) {
                // Sau khi nhận được HTML từ Mammoth, xử lý ảnh
                var content = result.value;  // Store initial content
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                
                // Tìm tất cả các thẻ <img> có chứa ảnh base64
                var imgTags = content.match(/<img[^>]+src="data:image\/[^;]+;base64,[^"]+"[^>]*>/g);
                if (imgTags) {
                    // Lặp qua tất cả các ảnh base64 và gửi lên server để lưu
                    var imageUploadPromises = imgTags.map(function(imgTag) {
                        var base64String = imgTag.match(/src="([^"]+)"/)[1];

                        // Gửi base64 lên server để lưu
                        return fetch('/save-base64-image', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({ image: base64String })
                        })
                        .then(response => response.json())
                        .then(data => {
                            // Thay thế base64 bằng URL ảnh đã lưu
                            var newImgTag = imgTag.replace(base64String, data.imageUrl);
                            content = content.replace(imgTag, newImgTag);
                        })
                        .catch(error => console.error('Error uploading image:', error));
                    });

                    // Wait for all image uploads to complete
                    Promise.all(imageUploadPromises).then(() => {
                        // Chèn nội dung đã được xử lý vào TinyMCE sau khi xử lý xong tất cả ảnh
                        tinymce.activeEditor.setContent(content);
                        console.log("All images uploaded and content updated.");
                    });
                } else {
                    // If no base64 images are found, just insert the content
                    tinymce.activeEditor.setContent(content);
                }
            })
            .catch(function(err) {
                console.log("Error reading file: " + err);
            });
    };

    // Đọc file Word như ArrayBuffer
    reader.readAsArrayBuffer(this.files[0]);
});

</script>
