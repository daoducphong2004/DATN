<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Trang chủ - Cổng Light Novel - Đọc Light Novel</title>

    <meta name="description"
        content="Đọc Light Novel online, bình luận Light Novel. Thư viện Light Novel Tiếng Việt lớn nhất, chất lượng cao, cập nhật liên tục, nhiều chức năng hỗ trợ việc đọc truyện dễ dàng.">
    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="logged-in" content="1"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="https://datn.test">
    <meta property="og:image" content="https://datn.test/img/nocover.jpg">
    <link rel="preload" href="{{ asset('fonts/OpenSans-Regular.ttf') }}" as="font" type="font/ttf"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('/fonts/OpenSans-SemiBold.ttf') }}" as="font" type="font/ttf"
        crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/apple-touch-icon.png?v=3') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png?v=3') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png?v=3') }}">

    <link rel="stylesheet" href="{{ asset('css/interface.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script>
        // Hàm để lấy giá trị của cookie theo tên
        function getCookie(name) {
            let cookieArr = document.cookie.split(";");

            // Duyệt qua tất cả các cookie để tìm cookie với tên cần tìm
            for (let i = 0; i < cookieArr.length; i++) {
                let cookie = cookieArr[i].trim();

                // Kiểm tra xem cookie có phải là cookie mong muốn không
                if (cookie.indexOf(name + "=") === 0) {
                    return cookie.substring(name.length + 1); // Trả về giá trị của cookie
                }
            }
            return null; // Nếu không tìm thấy cookie
        }

        // Kiểm tra cookie 'nightmode'
        let nightMode = getCookie("night_mode");

        // Nếu cookie 'nightmode' tồn tại và có giá trị 'true', thêm link CSS vào trang
        if (nightMode === "true") {
            let nightModeCss = document.createElement("link");
            nightModeCss.rel = "stylesheet";
            nightModeCss.id = "night-mode-css";
            nightModeCss.href = "{{ asset('css/nightmode.css') }}"; // Thêm đường dẫn tới CSS nightmode

            // Thêm link CSS vào phần <head> của trang
            document.head.appendChild(nightModeCss);
        }
    </script>



</head>
<style>
    .user-sublink {
        display: grid;
        align-items: center;
    }

    .fas.fa-shopping-cart {
        font-size: 1rem;
        line-height: 1.875rem;
    }

    .cart-count {
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 0.2em 0.5em;
        font-size: 0.8em;
        position: absolute;
        top: -10px;
        right: -7px;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 20px;
        height: 20px;
    }
</style>
