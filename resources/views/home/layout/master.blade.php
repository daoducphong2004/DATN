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

    .toast {
    position: fixed;
    top: 60px;
    right: 20px;
    background-color: rgba(244, 67, 54, 0.8); /* Màu nền nhạt hơn */
    color: white;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    font-size: 16px;
    z-index: 1000;
    opacity: 0;
    transform: translateY(-50%);
    transition: opacity 0.3s, transform 0.3s;
}

.toast.show {
    opacity: 1;
    transform: translateY(0);
}

.toast-body {
    display: flex;
    align-items: center;
}

.toast.hidden {
    display: none;
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

    ///
    // Hàm hiển thị toast
function showToast(message) {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');
    
    toastMessage.textContent = message;
    toast.classList.remove('hidden');
    toast.classList.add('show');

    // Tự động ẩn sau 3 giây
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.classList.add('hidden'), 300);
    }, 3000);
}

// Kiểm tra nếu có lỗi từ server và hiển thị
@if ($errors->has('chapters'))
    document.addEventListener('DOMContentLoaded', () => {
        showToast("{{ $errors->first('chapters') }}");
    });
@endif

</script>
</html>
