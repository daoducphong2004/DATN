<!DOCTYPE html>
<html lang="en">

@include('story.layout.home.head')
@include('story.partials.css')

<body>
    @if (session('error'))
        <div id="toast-message" class="toast-message">
            {{ session('error') }}
        </div>
    @endif

    @include('story.layout.home.header')

    @yield('content')

    @include('story.layout.home.footer')
</body>
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
    function confirmPurchase(title, price, url) {
        // Hiển thị modal
        var modal = document.getElementById("purchaseModal");
        modal.style.display = "block";

        // Thay đổi nội dung modal
        document.getElementById("modalTitle").innerText = `Xác nhận mua chương: ${title}`;
        document.getElementById("chapterPrice").innerText = price;

        // Thay đổi href của nút xác nhận để chuyển đến URL mua chương
        document.getElementById("confirmPurchaseButton").href = url;
    }

    function closeModal() {
        var modal = document.getElementById("purchaseModal");
        modal.style.display = "none";
    }

    // Đóng modal khi nhấn ra ngoài khung
    window.onclick = function(event) {
        var modal = document.getElementById("purchaseModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</html>
