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
</script>
</html>
