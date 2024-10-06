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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toast = document.getElementById('toast-message');

        if (toast) {
            // Thêm class 'show' để hiển thị toast
            toast.classList.add('show');

            // Tự động ẩn sau 3 giây (3000 milliseconds)
            setTimeout(function () {
                toast.classList.remove('show');
            }, 3000); // 3000 ms = 3s
        }
    });
</script>

</html>
