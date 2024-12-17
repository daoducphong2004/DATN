<!DOCTYPE html>
<html lang="en">
<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex: 1;
    }

    footer {
        background: #333;
        color: #fff;
        /* text-align: center; */
        /* padding: 1em 0; */
    }

    .sect-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sect-title {
        flex-grow: 1;
        margin-right: 10px;
    }

    .buy-all-button button {
        background-color: #f56565;
        color: white;
        font-weight: bold;
        padding: 0.5rem 1rem;
        border-radius: 1rem;
        border: none;
    }

    .toast.hidden {
    display: none; /* Ẩn Toast khi không có lớp này */
}

.toast {
    position: fixed;
    top: 10px; /* Vị trí từ trên cùng */
    right: 10px; /* Vị trí từ cạnh phải */
    background-color: rgba(255, 0, 0, 0.7); /* Màu đỏ mờ (0.7 là độ mờ, có thể điều chỉnh) */
    color: #fff;
    padding: 14px;
    font-weight: bold;
    border-radius: 10px; /* Bo góc mềm mại */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Thêm bóng mờ để tạo hiệu ứng nổi */
    display: none; /* Ban đầu ẩn Toast */
    z-index: 9999; /* Đảm bảo Toast xuất hiện trên cùng */
    transition: opacity 0.3s ease; /* Thêm hiệu ứng mờ dần */
}

.toast.show {
    display: block; /* Hiển thị Toast */
    opacity: 1; /* Đảm bảo Toast hiển thị với độ mờ đầy đủ */
}

.form-submit-btn .button {
    padding: 12px 25px;
    font-size: 16px;
    cursor: pointer;
    border: 1px solid #4CAF50;
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
    display: inline-block;
    text-align: center;
    transition: none !important; /* Bỏ tất cả hiệu ứng chuyển động */
}




</style>
<title>@yield('title')</title>

@include('home.layout.home.head')

<body>
    <main>
        @include('home.layout.home.header')

        @yield('content')
    </main>
    <footer>
        @include('home.layout.home.footer')
    </footer>
</body>
<script>
    
    //   document.addEventListener('contextmenu', function(event) {
    //     event.preventDefault(); // Chặn chuột phải
    //     // alert('Chuột phải đã bị vô hiệu hóa!');
    // });

    // document.addEventListener('keydown', function(event) {
    //     if (event.key === 'F12' || event.keyCode === 123) {
    //         event.preventDefault(); // Chặn F12
    //         // alert('Phím F12 đã bị vô hiệu hóa!');
    //     }
    // });

    // const detectDevTools = function() {
    //     const threshold = 160; // Kích thước DevTools
    //     const widthExceeded = window.outerWidth - window.innerWidth > threshold;
    //     const heightExceeded = window.outerHeight - window.innerHeight > threshold;
    //     if (widthExceeded || heightExceeded) {
    //         alert('Vui lòng đóng DevTools để tiếp tục!');
    //         window.location.reload(); // Tải lại trang
    //     }
    // };

    setInterval(detectDevTools, 1000);
</script>
</html>
