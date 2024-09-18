<script>
    document.getElementById('RePage').addEventListener('submit', function(event) {
    event.preventDefault(); // Ngăn chặn form submit mặc định

    // Đồng bộ nội dung TinyMCE về textarea trước khi lấy FormData
    tinymce.triggerSave();

    // Tính số chữ và cập nhật trường ẩn
    var wordCount = tinymce.get('LN_Chapter_Content').plugins.wordcount.getCount();
    document.getElementById('word_count').value = wordCount;

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
