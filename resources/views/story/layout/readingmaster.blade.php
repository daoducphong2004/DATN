<!DOCTYPE html>
<html lang="en">
    <title>@yield('title')</title>

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
    const defaultMusicPath = '{{ asset('music/30 phút nhạc Lofi Chill không lời thư giãn nhẹ nhàng .mp3') }}'; // Đường dẫn tới file nhạc mặc định
    const audioElement = document.getElementById('background-music');
    const musicSource = document.getElementById('music-source');
    const playDefaultButton = document.getElementById('play-default-music');
    const uploadMusicInput = document.getElementById('upload-music');
    const playUploadedButton = document.getElementById('play-uploaded-music');
    const musicFileNameDisplay = document.getElementById('music-file-name'); // Phần tử để hiển thị tên file

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

            // Hiển thị tên file
            musicFileNameDisplay.textContent = `Tên file: ${file.name}`;

            // // Xử lý tải tệp lên máy chủ
            // const formData = new FormData();
            // formData.append('music', file);

            // fetch('/upload-music', {
            //         method: 'POST',
            //         headers: {
            //             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
            //                 .getAttribute('content')
            //         },
            //         body: formData
            //     })
            //     .then(response => response.json())
            //     .then(data => {
            //         console.log('Tệp nhạc đã được tải lên:', data.url);
            //     })
            //     .catch(error => console.error('Lỗi khi tải nhạc lên:', error));
        }
    });
});

</script>
<script>
      document.addEventListener('contextmenu', function(event) {
        event.preventDefault(); // Chặn chuột phải
        // alert('Chuột phải đã bị vô hiệu hóa!');
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === 'F12' || event.keyCode === 123) {
            event.preventDefault(); // Chặn F12
            // alert('Phím F12 đã bị vô hiệu hóa!');
        }
    });

    const detectDevTools = function() {
        const threshold = 160; // Kích thước DevTools
        const widthExceeded = window.outerWidth - window.innerWidth > threshold;
        const heightExceeded = window.outerHeight - window.innerHeight > threshold;
        if (widthExceeded || heightExceeded) {
            alert('Vui lòng đóng DevTools để tiếp tục!');
            window.location.reload(); // Tải lại trang
        }
    };

    setInterval(detectDevTools, 1000);
</script>
</html>
