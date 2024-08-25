<div id="page-top"></div>
<div data-scrollto="#page-top" class="backtoTop"><i class="fas fa-angle-double-up"></i></div>
<div id="navbar" class="headroom">
    <div class="container">
        <div class="navbar-logo-wrapper">
            <a href="{{url('home')}}" class="navbar-logo"
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
                            <a href="{{url('UserHome')}}" class="link-underline link-underline-opacity-0"><i
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
            <a class="login-link" href="{{url('login')}}">Đăng nhập</a>
        </div>
        <div id="navbar-user" class="guest">
            <a class="login-link" href="{{url('register')}}">Đăng ký</a>
        </div>

        <div class="navbar-mainblock">
            <div class="navbar-search none block-m">
                <form class action="" method="get">
                    <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value>
                    <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <ul class="navbar-menu at-navbar none d-xl-block unstyled">
                <li>
                    <a class="nav-menu_item text-black link-underline link-underline-opacity-0" href="{{url('sangtac')}}">
                        <i class="fas fa-pen-nib menu-icon"></i><span class>Sáng tác</span>
                    </a>
                </li>
                <li>
                    <a class="nav-menu_item text-black link-underline link-underline-opacity-0" href="{{url('xuatban')}}">
                        <i class="fas fa-users menu-icon"></i><span class>Xuất bản</span>
                    </a>
                </li>
                <li>
                    <a class="nav-menu_item text-black link-underline link-underline-opacity-0" href="{{url('thaoluan')}}">
                        <i class="fas fa-users menu-icon"></i><span class>Thảoluận</span>
                    </a>
                </li>
                <li><a class="nav-menu_item text-black link-underline link-underline-opacity-0" href="{{url('danhsach')}}"><i class="fas fa-th-list menu-icon"></i><span class>Danh
                            sách</span></a></li>
                <li>
                    <a class="nav-menu_item text-black link-underline link-underline-opacity-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hướng dẫn</a>

                    <ul class="dropdown-menu" style="max-width: min-content;">
                        <li><a href="{{url('huongdan_dangtruyen')}}" class="nav-menu_item link-underline link-underline-opacity-0"><span>Đăng truyện</span></a></li>
                        <li><a href="{{url('huongdan_gioithieu')}}" class="nav-menu_item link-underline link-underline-opacity-0"><span>Giới thiệu</span></a></li>
                        <li><a href="{{url('huongdan_gopy')}}" class="nav-menu_item link-underline link-underline-opacity-0"><span>Góp ý - Báo
                                    lỗi</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>


