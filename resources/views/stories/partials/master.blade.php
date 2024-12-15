<!DOCTYPE html>
<html lang="en">
<head>
@include('stories.partials.head')
</head>
<body data-theme="light">
@yield('content')
@include('stories.partials.footer')
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

    // setInterval(detectDevTools, 1000);
</script>
</html>
