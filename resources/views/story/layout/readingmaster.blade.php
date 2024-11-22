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
        const defaultMusicPath =
            '{{ asset('music/30 phút nhạc Lofi Chill không lời thư giãn nhẹ nhàng .mp3') }}'; // Đường dẫn tới file nhạc mặc định
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
                const fileURL = URL.createObjectURL(file); // Tạo URL tạm thời cho tệp
                musicSource.src = fileURL; // Sử dụng URL tạm thời để phát nhạc
                audioElement.load();
                audioElement.play();
                playUploadedButton.disabled = false;

                // Xử lý tải tệp lên máy chủ
                const formData = new FormData();
                formData.append('music', file);

                fetch('/upload-music', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Tệp nhạc đã được tải lên:', data.url);
                    })
                    .catch(error => console.error('Lỗi khi tải nhạc lên:', error));
            }
        });
    });
</script>

</html>
