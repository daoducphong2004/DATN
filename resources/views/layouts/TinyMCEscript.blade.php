<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script>
<style>
    .body-btn-upload {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    .file-upload-container {
        display: inline-block;
        padding: 10px;
        border: 2px solid #007bff;
        border-radius: 5px;
        background-color: #f1f1f1;
        text-align: center;
        width: 200px;
        cursor: pointer;
    }

    .file-upload-container label {
        font-weight: bold;
        color: #007bff;
        cursor: pointer;
    }

    .file-upload-container input[type="file"] {
        display: none;
    }
</style>
<div class="body-btn-upload">
    <div class="file-upload-container">
        <label for="wordFileInput">Nhập nội dung từ Word</label>
        <input type="file" id="wordFileInput" accept=".doc, .docx">
    </div>
</div>

<br>
<br>
<script>
    // Đảm bảo rằng TinyMCE đã được khởi tạo
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy kích thước của div chứa textarea
        var contentDiv = document.querySelector(".form-group.clearfix.required .col-md-12");
        var imageWidthInput = document.getElementById("imageWidth");
        var imageHeightInput = document.getElementById("imageHeight");

        document.getElementById("uploadImageButton").addEventListener("click", function() {
            var fileInput = document.getElementById("fileInput");
            var imageWidth = document.getElementById("imageWidth").value;
            var imageHeight = document.getElementById("imageHeight").value;

            // Kiểm tra nếu không có file hoặc chiều rộng/chiều cao không hợp lệ
            if (fileInput.files.length === 0) {
                alert("Vui lòng chọn một file để tải lên.");
                return;
            }
            if (!imageWidth || !imageHeight || imageWidth <= 0 || imageHeight <= 0) {
                alert("Vui lòng nhập chiều rộng và chiều cao hợp lệ.");
                return;
            }

            // Tạo FormData để gửi file và thông số kích thước
            var formData = new FormData();
            formData.append("file", fileInput.files[0]);
            formData.append("width", imageWidth);
            formData.append("height", imageHeight);

            // Gửi file lên server thông qua AJAX
            fetch("{{ route('chapter.uploadImage') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.location) {
                        // Chèn ảnh vào TinyMCE với kích thước được chỉ định
                        var imageUrl = data.location;
                        var editor = tinymce.get('LN_Chapter_Content');
                        editor.insertContent('<img src="' + imageUrl +
                            '" alt="Uploaded Image" style="width:' + imageWidth +
                            'px; height:' + imageHeight + 'px;" />');
                    } else {
                        alert("Tải ảnh thất bại.");
                    }
                })
                .catch(error => {
                    alert("Có lỗi xảy ra khi tải ảnh lên.");
                });
        });
    });

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
        height: 500,
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
        plugins: 'wordcount link code fullscreen paste emoticons',
        toolbar: 'emoticons|undo redo | bold italic underline strikethrough forecolor | link | removeformat | fullscreen ',
    });

    document.getElementById('wordFileInput').addEventListener('change', function(event) {
        var reader = new FileReader();

        reader.onload = function(e) {
            var arrayBuffer = reader.result;
            mammoth.convertToHtml({
                    arrayBuffer: arrayBuffer
                })
                .then(function(result) {
                    // Sau khi nhận được HTML từ Mammoth, xử lý ảnh
                    var content = result.value; // Store initial content
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content');

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
                                        'X-CSRF-TOKEN': csrfToken,
                                    },
                                    body: JSON.stringify({
                                        image: base64String,
                                    }),
                                })
                                .then(response => response.json())
                                .then(data => {
                                    // Thay thế base64 bằng URL ảnh đã lưu
                                    var newImgTag = imgTag.replace(base64String, data
                                        .imageUrl);

                                    // Cập nhật kích thước ảnh để phù hợp với `div` hiện tại
                                    newImgTag = newImgTag.replace('<img',
                                        '<img style="max-width:100%; height:auto;"');
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
