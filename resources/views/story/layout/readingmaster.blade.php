<!DOCTYPE html>
<html lang="en">

@include('story.layout.reading.head')
@include('story.partials.css')
@if (session('error'))
    <div id="toast-message" class="toast-message">
        {{ session('error') }}
    </div>
@endif
@if (session('message'))
    <div id="toast-message" class="toast-message success">
        {{ session('message') }}
    </div>
@endif

@if (session('success'))
    <div id="toast-message" class="toast-message success">
        {{ session('success') }}
    </div>
@endif

@include('story.layout.reading.slidebar')

@yield('content')

@include('story.layout.reading.footer')
@include('story.partials.bookmarkscript')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const defaultMusicPath = '/path/to/default-music.mp3'; // Đường dẫn tới file nhạc mặc định
        const audioElement = document.getElementById('background-music');
        const musicSource = document.getElementById('music-source');
        const playDefaultButton = document.getElementById('play-default-music');
        const uploadMusicInput = document.getElementById('upload-music');
        const playUploadedButton = document.getElementById('play-uploaded-music');

        // Phát nhạc mặc định
        playDefaultButton.addEventListener('click', function() {
            musicSource.src = defaultMusicPath;
            audioElement.load();
            audioElement.play();
        });

        // Xử lý nhạc tải lên
        uploadMusicInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const fileURL = URL.createObjectURL(file);
                musicSource.src = fileURL;
                playUploadedButton.disabled = false;

                // Phát nhạc khi nhấn nút
                playUploadedButton.addEventListener('click', function() {
                    audioElement.load();
                    audioElement.play();
                });
            }
        });
    });
    uploadMusicInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const formData = new FormData();
            formData.append('music', file);

            fetch('/upload-music', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    musicSource.src = data.url;
                    playUploadedButton.disabled = false;

                    playUploadedButton.addEventListener('click', function() {
                        audioElement.load();
                        audioElement.play();
                    });
                })
                .catch(error => console.error('Error uploading music:', error));
        }
    });
    document.querySelectorAll('.rd_sd-button_item').forEach(button => {
        button.addEventListener('click', function() {
            // Lấy ID của sidebar mà nút ảnh hưởng
            const targetId = this.getAttribute('data-affect');
            const targetElement = document.querySelector(targetId);

            // Đóng tất cả các sidebar khác
            document.querySelectorAll('.rd_sidebar').forEach(el => {
                if (el !== targetElement) {
                    el.classList.remove('active');
                }
            });

            // Hiển thị hoặc ẩn sidebar tương ứng
            if (targetElement) {
                targetElement.classList.toggle('active');
            }
        });
    });
</script>

</html>
