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
                    <form class action="" method="get">
                        <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords"
                            value>
                        <button class="search-submit" type="submit" value="Tìm kiếm"><i
                                class="fas fa-search"></i></button>
                    </form>
                </div>
                <li><a class="nav-menu_item" href=""><span class>Sáng tác</span></a></li>
                <li><a class="nav-menu_item" href=""><span class>Thảo luận</span></a></li>
                <li><a class="nav-menu_item" href=""><span class>Danh sách</span></a></li>
                <li class="nav-has-submenu">
                    <a class="nav-menu_item">
                        <span class>Hướng dẫn</span>
                        <i class="fas fa-chevron-down dropdown-icon" style="float: right; margin-top: 6px"></i>
                    </a>
                    <ul class="nav-submenu list-unstyled none">
                        <li><a href="/thao-luan/368-huong-dan-dang-truyen"><span>Đăng truyện</span></a></li>
                        <li><a href="/thao-luan/2-gioi-thieu-cong-light-novel"><span>Giới thiệu</span></a></li>
                        <li><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><span>Góp ý - Báo
                                    lỗi</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="navbar-logo-wrapper">
            <a href="" class="navbar-logo"
                style="background-image: url('{{ asset('users/user/img/logo-9.png') }}')" title="Trang chủ"></a>
        </div>
        <div id="navbar-user">
            <div class="nav-user_icon">
                <li class="nav-user_avatar" style="appearance: auto">
                    {{-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                    <img class="nav-link dropdown-toggle" href="#" role="button"
                        src="{{ asset('users/user/img/apple-touch-icon-114x114.png') }}" alt="Your avatar"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- </a> --}}
                    <ul class="dropdown-menu">
                        <li>
                            <a href="" class="link-underline link-underline-opacity-0"><i
                                    class="fas me-2 fa-user"></i><span>Tài khoản</span></a>
                        </li>
                        <li>
                            <a href="" class="link-underline link-underline-opacity-0"><i
                                    class="fas me-2 fa-history"></i><span>Lịch sử</span></a>
                        </li>

                        <hr class="none block-l">

                        <li>
                            <a href="" class="link-underline link-underline-opacity-0"><i
                                    class="fas me-2 fa-cog"></i><span>Hệ thống</span></a>
                        </li>
                        <li>
                            <a href="" class="link-underline link-underline-opacity-0"><i
                                    class="fas me-2 fa-sign-out-alt"></i><span>Thoát</span></a>
                        </li>
                    </ul>
                </li>
            </div>
        </div>

        <div id="navbar-user" class="guest">
            <a class="login-link" href="">Đăng nhập</a>
            <div id="guest-menu">
                <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <div class="icon">
                        <span class="white-point"></span>
                        <span class="white-point"></span>
                        <span class="white-point"></span>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="li-inner link-underline link-underline-opacity-0" href="/lich-su-doc"><i class="fas me-2 fa-history"></i><span>Lịch
                                sử</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="navbar-mainblock">
            <div class="navbar-search none block-m">
                <form class action="" method="get">
                    <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value>
                    <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <ul class="navbar-menu at-navbar none d-xl-block unstyled">
                <li><a class="nav-menu_item link-underline link-underline-opacity-0 text-black" href=""><i
                            class="fas fa-pen-nib menu-icon"></i><span class>Sáng
                            tác</span></a></li>
                <li><a class="nav-menu_item link-underline link-underline-opacity-0 text-black" href=""><i
                            class="fas fa-users menu-icon"></i><span class>Thảo
                            luận</span></a></li>
                <li><a class="nav-menu_item link-underline link-underline-opacity-0 text-black" href=""><i
                            class="fas fa-th-list menu-icon"></i><span class>Danh
                            sách</span></a></li>
                <li class="nav-menu_item">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hướng dẫn
                    </a>
                    <ul class="nav-submenu hidden-block unstyled none">
                        <li><a href="/thao-luan/368-huong-dan-dang-truyen"><span>Đăng truyện</span></a></li>
                        <li><a href="/thao-luan/2-gioi-thieu-cong-light-novel"><span>Giới thiệu</span></a></li>
                        <li><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><span>Góp ý - Báo
                                    lỗi</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>
