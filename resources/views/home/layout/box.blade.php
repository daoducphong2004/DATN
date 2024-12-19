<div class="col-12 col-lg-3 float-right">
    <section class="private-tabs">
        <header>
            <h4 class="section-name">Tài khoản</h4>
            @if(Auth::check())
                <span class="user-name">{{ Auth::user()->username }}</span>
            @endif
        </header>
        <ul class="user-private-tabs">
            <li class=""><a href="{{ route('ke-sach') }}"><span class="none inline-l"><i
                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                            class="fas fa-chevron-down"></i></span>Kệ sách</a></li>
            <li class=""><a href="{{ route('bookmark') }}"><span class="none inline-l"><i
                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                            class="fas fa-chevron-down"></i></span>Bookmark</a></li>
            <li class=""><a href="{{ route('Letter.index') }}"><span class="none inline-l"><i
                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                            class="fas fa-chevron-down"></i></span>Hộp thư</a></li>
            <li class=""><a href="/thong-bao"><span class="none inline-l"><i
                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                            class="fas fa-chevron-down"></i></span>Thông báo</a></li>
            </ul>
    </section>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Lấy đường dẫn URI hiện tại
    const currentPath = window.location.pathname;

    // Định nghĩa nhóm menu và từ khóa đại diện
    const menuMapping = {
        "ke-sach": "Kệ sách",
        "bookmark": "Bookmark",
        "tin-nhan": "Hộp thư" // "tin-nhan" đại diện cho "Hộp thư"
    };

    // Lấy tất cả các mục menu
    const menuItems = document.querySelectorAll(".user-private-tabs li");

    // Duyệt qua từng mục menu để gán class 'current'
    menuItems.forEach((item) => {
        const link = item.querySelector("a");

        if (link) {
            // Lấy href từ thẻ <a> và kiểm tra xem nó có chứa phần từ khóa hay không
            const linkPath = new URL(link.href, window.location.origin).pathname;

            // Kiểm tra nếu đường dẫn hiện tại chứa từ khóa của menu
            for (const [key, value] of Object.entries(menuMapping)) {
                if (currentPath.includes(key)) {
                    // Nếu tìm thấy, thêm class 'current' cho menu phù hợp
                    if (linkPath.includes(key)) {
                        item.classList.add("current");
                    } else {
                        item.classList.remove("current");
                    }
                }
            }
        }
    });
});


</script>
