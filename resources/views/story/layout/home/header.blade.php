<body>
    <div id="page-top"></div>
    <div data-scrollto="#page-top" class="backtoTop"><i class="fas fa-angle-double-up"></i></div>
    <div id="navbar" class="headroom">
        <div class="container">
            <div id="sidenav-icon" class="none-xl">
                <div class="sidenav-icon-content">
                    <span class="sidenav-icon_white"></span>
                    <span class="sidenav-icon_white"></span>
                    <span class="sidenav-icon_white"></span>
                </div>
                <ul class="navbar-menu none hidden-block at-mobile unstyle">
                    <div class="navbar-search block none-m in-navbar-menu">
                        <form class="" action="/tim-kiem" method="get">
                            <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords"
                                value="">
                            <button class="search-submit" type="submit" value="Tìm kiếm"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <li><a class="nav-menu_item" href="/sang-tac"><span class="">Sáng tác</span></a></li>
                    <li><a class="nav-menu_item" href="/convert"><span class="">Máy dịch</span></a></li>
                    <li><a class="nav-menu_item" href="/xuat-ban"><span class="">Xuất bản</span></a></li>
                    <li><a class="nav-menu_item" href="/thao-luan"><span class="">Thảo luận</span></a></li>
                    <li><a class="nav-menu_item" href="/danh-sach"><span class="">Danh sách</span></a></li>

                    <li class="nav-has-submenu">
                        <a class="nav-menu_item">
                            <span class="">Hướng dẫn</span>
                            <i class="fas fa-chevron-down dropdown-icon" style="float: right; margin-top: 6px"></i>
                        </a>

                        <ul class="nav-submenu list-unstyled none">
                            <li><a href="/huongdan_dangtruyen"><span>Đăng truyện</span></a></li>
                            <li><a href="/thao-luan/2-gioi-thieu-cong-light-novel"><span>Giới thiệu</span></a></li>
                            <li><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><span>Góp ý - Báo
                                        lỗi</span></a></li>
                            <li><a href="/privacy-policy"><span>Privacy Policy</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="navbar-logo-wrapper">
                <a href="/" class="navbar-logo" style="background-image: url('{{ asset('img/logo-9.png') }}')"
                    title="Trang chủ"></a>
            </div>
            <div id="navbar-user">
                <div class="nav-user_icon">
                    <div class="nav-user_avatar">
                        <img src="{{ asset('img/noava.png') }}" alt="Your avatar">
                    </div>
                    <div class="at-user_avatar"></div>
                    <ul class="account-sidebar hidden-block unstyled none">
                        <li>
                            <a href="/thanh-vien/199850"><i class="fas fa-user"></i><span>Tài khoản</span></a>
                        </li>
                        <li>
                            <a href="/lich-su-doc"><i class="fas fa-history"></i><span>Lịch sử</span></a>
                        </li>
                        <li>
                            <a href="/bookmark"><i class="fas fa-bookmark"></i><span>Đánh dấu</span></a>
                        </li>
                        <li>
                            <a href="/ke-sach"><i class="fas fa-heart"></i><span>Kệ sách</span></a>
                        </li>
                        <li>
                            <a href="/tin-nhan"><i class="fas fa-envelope"></i><span>Tin nhắn</span>
                                <div class="at-user_list"></div>
                            </a>
                        </li>
                        <hr class="none block-l">
                        <li>
                            <div class="nightmode-toggle">
                                <i class="fas fa-moon"></i><span>Nền tối</span>
                                <div class="toggle-icon"><i class="fas fa-toggle-off"></i></div>
                            </div>
                        </li>
                        <li>
                            <a href="/action"><i class="fas fa-cog"></i><span>Hệ thống</span></a>
                        </li>
                        <li>
                            <a href="/logout"><i class="fas fa-sign-out-alt"></i><span>Thoát</span></a>
                        </li>
                    </ul>
                </div>

                <div id="noti-icon" class="user-sublink">
                    <div class="icon-wrapper">
                        <i class="fas fa-bell"></i>
                    </div>

                    <div id="noti-sidebar" class="noti-sidebar hidden-block none">
                        <div class="noti-wrapper">
                            <!--<header class="sect-header"><span class="sect-title notification">Thông báo</span></header>-->
                            <div id="noti-content" class="noti-content no-padding">

                                {{-- Thông báo đơn --}}
                                <article class="noti-item series-based clear untouch"
                                    data-notification="0b27c0ee-f2c7-4083-8cb2-f30054c6b1d6">
                                    <a class="noti-url" href="/truyen/19083-test?comment_id=2572911#ln-comment-2572911">
                                        <div class="noti-item_img">
                                            <img
                                                src="https://i.docln.net/lightnovel/users/ua154519-a2dea527-8832-4109-9e0f-c4f97f0c73f2.jpg">
                                        </div>
                                        <div class="noti-item_info">
                                            <div class="noti-content">
                                                <span><b>Hanashiraki raki</b> vừa bình luận trong <b>truyện</b>
                                                    <b>test</b> của bạn</span>
                                                <time class="timeago block" title="31-08-2024 01:09:10"
                                                    datetime="2024-08-31T01:09:10+07:00"></time>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                                {{-- hết thông báo đơn --}}

                            </div>
                            <div class="noti-more">
                                <a class="noti-url" href="/thong-bao"> Xem tất cả </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="series-unread-icon" class="user-sublink appearing">
                    <a class="link-item" href="https://docln.net/ke-sach">
                        <div class="icon-wrapper">
                            <i class="fas fa-heart"></i>
                        </div>
                    </a>
                </div>

            </div>
            <div class="navbar-mainblock">
                <div class="navbar-search none block-m">
                    <form class="" action="/tim-kiem" method="get">
                        <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords"
                            value="">
                        <button class="search-submit" type="submit" value="Tìm kiếm"><i
                                class="fas fa-search"></i></button>
                    </form>
                </div>
                <ul class="navbar-menu at-navbar none d-xl-block unstyled">
                    <li><a class="nav-menu_item" href="/sang-tac"><i class="fas fa-pen-nib menu-icon"></i><span
                                class="">Sáng tác</span></a></li>

                    <li><a class="nav-menu_item" href="/convert"><i class="fas fa-book menu-icon"></i><span
                                class="">Máy dịch</span></a></li>

                    <li><a class="nav-menu_item" href="/xuat-ban"><i class="fas fa-calendar menu-icon"></i><span
                                class="">Xuất bản</span></a></li>

                    <li><a class="nav-menu_item" href="/thao-luan"><i class="fas fa-users menu-icon"></i><span
                                class="">Thảo luận</span></a></li>

                    <li><a class="nav-menu_item" href="/danh-sach"><i class="fas fa-th-list menu-icon"></i><span
                                class="">Danh sách</span></a></li>

                    <li class="nav-has-submenu">
                        <a class="nav-menu_item">
                            <i class="fas fa-question menu-icon"></i><span class="">Hướng dẫn</span>
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>

                        <ul class="nav-submenu hidden-block unstyled none">
                            <li><a href="huongdan_dangtruyen"><span>Đăng truyện</span></a></li>
                            <li><a href="/thao-luan/2-gioi-thieu-cong-light-novel"><span>Giới thiệu</span></a></li>
                            <li><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><span>Góp ý - Báo
                                        lỗi</span></a></li>
                            <li><a href="/privacy-policy"><span>Privacy Policy</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!--<section id="nav-search"></section>-->
        </div>
    </div>
