<script>
    document.getElementById('RePage').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn chặn form submit mặc định

        // Đồng bộ nội dung TinyMCE về textarea trước khi lấy FormData
        tinymce.triggerSave();

        // Tạo đối tượng FormData từ form
        var formData = new FormData(this);

        // Ghi log tất cả dữ liệu trong FormData (để kiểm tra nội dung)
        for (let [key, value] of formData.entries()) {
            console.log(`${key}: ${value}`);
        }

        // Gửi request AJAX
        fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Thêm CSRF token để bảo mật
                }
            })
            .then(response => {
                if (response.ok) {
                    // Gửi thông báo tới trang cha để làm mới iframe "nav"
                    window.parent.postMessage('form-submitted', '*');

                    // Xử lý sau khi thành công (ví dụ: thông báo thành công)
                    // alert('Truyện đã được gửi thành công!');
                } else {
                    // Xử lý khi gửi form thất bại
                    alert('Đã xảy ra lỗi trong quá trình gửi form.');
                    console.error('Error:', response.statusText);
                }
            })
            .catch(error => {
                console.error('Lỗi:', error);
                alert('Đã xảy ra lỗi trong quá trình gửi form.');
            });
    });
</script>

<script>
    document.getElementById('extractForm').addEventListener('submit', function(e) {
        e.preventDefault();

        var formData = new FormData();
        var fileInput = document.getElementById('docxFile');
        formData.append('file', fileInput.files[0]);

        // Send AJAX request to the readWordFile method in the controller
        fetch('{{ route('chapter.readWordFile') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (Array.isArray(data)) {
                // Initialize extracted content
                let extractedContent = '';

                data.forEach(item => {
                    // Handle text content with styles
                    if (item.text && !item.type) {
                        let textStyle = '';

                        if (item.style) {
                            const style = JSON.parse(item.style); // Parse style from string to object
                            if (style.bold) textStyle += 'font-weight: bold;';
                            if (style.italic) textStyle += 'font-style: italic;';
                            if (style.font_size) textStyle += `font-size: ${style.font_size}px;`;
                            if (style.font_color) textStyle += `color: #${style.font_color};`;
                            if (style.font_family) textStyle += `font-family: ${style.font_family};`;
                        }

                        extractedContent += `<span style="${textStyle}">${item.text}</span>`;
                    } 
                    // Handle image content
                    else if (item.text && item.type === 'image') {
                        extractedContent += `<img src="${item.text}" style="max-width: 100%; height: auto;" />`;
                    } 
                    // Handle table content
                    else if (item.type === 'table' && item.content) {
                        extractedContent += item.content; // Assuming item.content is a valid HTML table
                    }

                    // Add line break after each element
                    extractedContent += '<br>';
                });

                // Update the TinyMCE editor content with the extracted content
                tinymce.get('LN_Chapter_Content').setContent(extractedContent);
            } else {
                alert('Unable to extract content from the DOCX file.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Check if there's a response from the API (in case there is old content in the session)
        const content = @json(old('content', '')); // Retrieve content from session if available
        if (content) {
            tinymce.get('LN_Chapter_Content').setContent(content); // Set content into TinyMCE
        }
    });
</script>
