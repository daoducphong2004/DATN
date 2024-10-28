<script>
    $(document).ready(function() {

        $(".mobile-toggle header").click(function() {
            $(this).parent().find(".listall_summary").toggle();
            $(this).parent().find(".sect-body").toggle();
        });

        //listab(".daily-recent_views");

    });
</script>
{{-- Lấy số lượng chapter có trong giỏ hang --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to update cart count
        function updateCartCount() {
            fetch('/cart/count', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        const cartIcon = document.querySelector('#series-cart .icon-wrapper');
                        cartIcon.innerHTML = `
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">${data.count}</span>
                `;
                    } else {
                        console.error('Failed to fetch cart count');
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        // Initial call to update cart count on page load
        updateCartCount();
    });
</script>
<script>
    // Toggle lớp "none" khi bấm vào nút mục lục
    document.querySelector('.catalog-icon').addEventListener('click', function() {
        var listVolSection = document.getElementById('list-vol');
        listVolSection.classList.toggle('none');
    });

    // Cuộn màn hình đến tập truyện khi bấm vào mục lục
    document.querySelectorAll('.list-volume li').forEach(function(item) {
        item.addEventListener('click', function() {
            var targetId = this.getAttribute('data-scrollTo');
            var targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    // Ẩn mục lục khi bấm vào nút "list-vol_off"
    document.querySelector('.list-vol_off').addEventListener('click', function() {
        var listVolSection = document.getElementById('list-vol');
        listVolSection.classList.add('none');
    });

    // Ẩn mục lục khi bấm ra ngoài mục lục
    document.addEventListener('click', function(event) {
        var listVolSection = document.getElementById('list-vol');
        var isClickInside = listVolSection.contains(event.target) || document.querySelector('.catalog-icon')
            .contains(event.target);
        if (!isClickInside) {
            listVolSection.classList.add('none');
        }
    });
</script>

</main>

<script src="{{ asset('js/app.js?id=b8198cd1707d7a5e169b') }}"></script>



{{-- <script async type='text/javascript' src='//pl16314303.highcpmgate.com/d5/6b/4b/d56b4bd6c3d2c1e161c4ab3c78c27670.js'></script> --}}


<footer id="footer">
    <div class="container">
        <!--<span><a href="">Hako.re</a></span>-->
        <span class="right">Liên hệ: <a href="mailto:daoducphong2004@gmail.com" target="_blank"
                style="color: #5fff46">daoducphong2004@gmail.com</a></span>

        <span>© 2016 - 2024 Cổng Light Novel - Đọc Light Novel</span>
    </div>
</footer>


</html>
