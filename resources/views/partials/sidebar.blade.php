<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trang chủ - Cổng Light Novel - Đọc Light Novel</title>
    <meta name="description" content="Đọc Light Novel online, bình luận Light Novel. Thư viện Light Novel Tiếng Việt lớn nhất, chất lượng cao, cập nhật liên tục, nhiều chức năng hỗ trợ việc đọc truyện dễ dàng.">
    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://docln.net/img/nocover.jpg">
    <link rel="shortcut icon" href="img/favicon.png?v=3">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon.png?v=3">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png?v=3">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png?v=3">
    <link rel="stylesheet" href="{{asset('css/interface.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <script src="{{asset('js/plugins.js')}}"></script>



    <!---- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>



    @yield('noidung')
    {{-- @yield('setting') --}}

    @include('partials.footer');

    <!---- customer js file -->
    <script src="{{asset('frontend/script.js')}}"></script>
    <script src="{{asset('js/truyen.js')}}"></script>

</body>

</html>