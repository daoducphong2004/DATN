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
                        <form class="" action="{{route('search')}}" >
                            <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="title"
                                >
                            <button  type="submit" value="Tìm kiếm"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <li><a class="nav-menu_item" href="{{ url('sangtac') }}"><span class="">Sáng tác</span></a></li>
                    <li><a class="nav-menu_item" href="{{ url('convert') }}"><span class="">Máy dịch</span></a></li>
                    <li><a class="nav-menu_item" href="{{ url('xuatban') }}"><span class="">Xuất bản</span></a></li>
                    <li><a class="nav-menu_item" href="{{ url('thao-luan') }}"><span class="">Thảo luận</span></a></li>
                    <li><a class="nav-menu_item" href="{{ url('danh-sach') }}"><span class="">Danh sách</span></a></li>

                    <li class="nav-has-submenu">
                        <a class="nav-menu_item">
                            <span class="">Hướng dẫn</span>
                            <i class="fas fa-chevron-down dropdown-icon" style="float: right; margin-top: 6px"></i>
                        </a>

                        <ul class="nav-submenu list-unstyled none">
                            <li><a href="{{ url('huongdan_dangtruyen') }}"><span>Đăng truyện</span></a></li>
                            <li><a href="{{ url('huongdan_gioithieu') }}"><span>Giới thiệu</span></a></li>
                            <li><a href="{{ url('huongdan_gopy') }}"><span>Góp ý - Báo
                                        lỗi</span></a></li>
                        </ul>
                    </li>
                    <li>
                        @if (Auth::check() && (Auth::user()->role->name === 'super_admin' || Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'mod'))
                            <a class="nav-menu_item" href="{{ url('/admin') }}"><span class="">Thống kê</span></a>
                        @endif
                    </li>
                </ul>
            </div>

            <div class="navbar-logo-wrapper">
                <a href="/" class="navbar-logo" style="background-image: url('{{ asset('img/logo-9.png') }}')"
                    title="Trang chủ"></a>
            </div>

            @if (!Auth::check())
                <div id="navbar-user" class="guest">
                    <a class="login-link" href="{{ route('login') }}">Đăng nhập</a>
                </div>
                <div id="navbar-user" class="guest">
                    <a class="login-link" href="{{ route('register') }}">Đăng ký</a>
                </div>
            @else
                <div id="navbar-user" class="guest">
                    <div id="navbar-user">
                        <div class="nav-user_icon">
                            <div class="nav-user_avatar">
                                <img src="{{ asset(Auth::user()->avatar_url ?? 'img/noava.png') }}" alt="Your avatar">
                            </div>
                            <div class="at-user_avatar"></div>
                            <ul class="account-sidebar hidden-block unstyled none">
                                <li>
                                    <a href="{{ route('user.books',['userId' => Auth::user()->id]) }}"><i class="fas fa-user"></i><span>Tài khoản</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('lich-su') }}"><i class="fas fa-history"></i><span>Lịch sử</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('purchase.history') }}"><i class="fas fa-history"></i><span>Lịch sử mua</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('bookmark') }}"><i class="fas fa-bookmark"></i><span>Đánh dấu</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('ke-sach') }}"><i class="fas fa-heart"></i><span>Kệ sách</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('tin-nhan') }}"><i class="fas fa-envelope"></i><span>Tin nhắn</span>
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
                                    <a href="/UserHome"><i class="fas fa-cog"></i><span>Hệ thống</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"
                                        class="link-underline link-underline-opacity-0"><i
                                            class="fas me-2 fa-sign-out-alt"></i><span>Thoát</span></a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                            </li>
                        </div>
                    </div>
                    <a class="login-link">{{ Auth::user()->username}}</a>
                </div>
            @endif

        </div>
        <div class="navbar-mainblock">
            <div class="navbar-search none block-m">
                <form class="" action="{{route('search')}}" method="get">
                    <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="title">
                    <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <ul class="navbar-menu at-navbar none d-xl-block unstyled">
                <li><a class="nav-menu_item" href="{{ url('sangtac') }}"><i class="fas fa-pen-nib menu-icon"></i><span
                            class="">Sáng tác</span></a></li>

                <li><a class="nav-menu_item" href="{{ url('convert') }}"><i class="fas fa-book menu-icon"></i><span
                            class="">Máy dịch</span></a></li>

                <li><a class="nav-menu_item" href="{{ url('xuatban') }}"><i class="fas fa-calendar menu-icon"></i><span
                            class="">Xuất bản</span></a></li>

                <li><a class="nav-menu_item" href="{{ route('thao-luan') }}"><i class="fas fa-users menu-icon"></i><span
                            class="">Thảo luận</span></a></li>

                <li><a class="nav-menu_item" href="{{ url('danh-sach') }}"><i class="fas fa-th-list menu-icon"></i><span
                            class="">Danh sách</span></a></li>

                <li class="nav-has-submenu">
                    <a class="nav-menu_item">
                        <i class="fas fa-question menu-icon"></i><span class="">Hướng dẫn</span>
                        <i class="fas fa-chevron-down dropdown-icon"></i>
                        <i class="fas fa-chevron-right dropdown-icon"></i>
                    </a>

                    <ul class="nav-submenu hidden-block unstyled none">
                        <li><a href="{{ url('huongdan_dangtruyen') }}"><span>Đăng truyện</span></a></li>
                        <li><a href="{{ url('huongdan_gioithieu') }}"><span>Giới thiệu</span></a></li>
                        <li><a href="{{ url('huongdan_gopy') }}"><span>Góp ý - Báo
                                    lỗi</span></a></li>
                    </ul>
                </li>
                <li>
                    @if (Auth::check() && (Auth::user()->role->name === 'super_admin' || Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'mod'))
                        <a class="nav-menu_item" href="{{ url('/admin') }}"><span class="">Thống kê</span></a>
                    @endif
                    {{-- <a class="nav-menu_item" href="{{ url('/admin') }}"><span class="">Hệ thống</span></a> --}}
                </li>
            </ul>
        </div>

        <!--<section id="nav-search"></section>-->
    </div>
</body>
