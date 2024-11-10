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
                    <form class="" action="{{ route('search') }}">
                        <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="title">
                        <button type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                    </form>
                </div>


                <li><a class="nav-menu_item" href="{{ route('sangtac') }}"><span class="">Sáng tác</span></a>
                </li>
                <li><a class="nav-menu_item" href="{{ route('convert') }}"><span class="">Máy dịch</span></a>
                </li>
                <li><a class="nav-menu_item" href="{{ route('xuatban') }}"><span class="">Xuất bản</span></a>
                </li>
                <li><a class="nav-menu_item" href="{{ route('thao-luan') }}"><span class="">Thảo
                            luận</span></a></li>
                <li><a class="nav-menu_item" href="{{ route('filterDanhSach') }}"><span class="">Danh
                            sách</span></a></li>


                <li class="nav-has-submenu">
                    <a class="nav-menu_item">
                        <span class="">Hướng dẫn</span>
                        <i class="fas fa-chevron-down dropdown-icon" style="float: right; margin-top: 6px"></i>
                    </a>

                    <ul class="nav-submenu list-unstyled none">
                        <li><a href="{{ route('huongdan_dangtruyen') }}"><span>Đăng truyện</span></a></li>
                        <li><a href="{{ route('huongdan_gioithieu') }}"><span>Giới thiệu</span></a></li>
                        <li><a href="{{ route('huongdan_gopy') }}"><span>Góp ý - Báo lỗi</span></a></li>
                    </ul>
                </li>
                <li>
                    @can('access-admin')
                        <a class="nav-menu_item" href="{{ url('/admin') }}"><span class="">Thống kê</span></a>
                    @endcan
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
                                <a href="{{ route('user.books', ['userId' => Auth::user()->id]) }}">
                                    <i class="fas fa-user"></i><span>Tài khoản</span>
                                </a>
                            </li>
                            <li>
                                <a class="coin-earned">
                                    <i class="fas fa-coins" style="color: gold"></i>
                                    <span>{{ Auth::user()->coin_earned }} Coins</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('indexPayment') }}"><i class="fas fa-user"></i><span>Nạp
                                        tiền</span></a>
                            </li>
                            <li>
                                <a href="{{ url('lich-su') }}">
                                    <i class="fas fa-history"></i><span>Lịch sử</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('purchase.history') }}">
                                    <i class="fas fa-history"></i><span>Lịch sử mua</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('paymentHistory', Auth::id()) }}">
                                    <i class="fas fa-history"></i><span>Lịch sử nạp tiền</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('bookmark') }}">
                                    <i class="fas fa-bookmark"></i><span>Đánh dấu</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('ke-sach') }}">
                                    <i class="fas fa-heart"></i><span>Kệ sách</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('bookshelf.index') }}">
                                    <i class="fas fa-heart"></i><span>Sách đã mua</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('tin-nhan') }}">
                                    <i class="fas fa-envelope"></i><span>Tin nhắn</span>
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
                                <a href="/UserHome">
                                    <i class="fas fa-cog"></i><span>Hệ thống</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="link-underline link-underline-opacity-0">
                                    <i class="fas me-2 fa-sign-out-alt"></i><span>Thoát</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div id="noti-icon" class="user-sublink">
                        <div class="icon-wrapper">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div id="noti-sidebar" class="noti-sidebar hidden-block none">
                            <div class="noti-wrapper">
                                <div id="noti-content" class="noti-content" style="padding: 15px">
                                    @php
                                        $notifications = auth()->user()->notifications()->latest()->take(5)->get();
                                    @endphp

                                    @if ($notifications->count() > 0)
                                        @foreach ($notifications as $notification)
                                            <div>
                                                - {!! $notification->data['message'] !!}

                                                @if ($notification->type == 'App\Notifications\BookPendingNotification')
                                                    <a class="dropdown-item" style="color: red"
                                                        href="{{ route('books.approval') }}">
                                                        xem ngay
                                                    </a>
                                                @endif

                                                @if(isset($notification->data['user_id']))
                                                    <a class="dropdown-item" style="color: red" href="{{ route('author.index') }}">
                                                        xem ngay
                                                    </a>
                                                @endif

                                                @if ($notification->type == 'App\Notifications\StoryApprovedNotification')
                                                    @if (isset($notification->data['slug']))
                                                        <a class="dropdown-item" style="color: red" href="{{ route('truyen.truyen', ['slug' => $notification->data['slug']]) }}">
                                                            Xem ngay
                                                        </a>

                                                    @endif
                                                @endif

                                                @if ($notification->type == 'App\Notifications\AuthorApprovedNotification')
                                                        <span>Từ giờ bạn có thể đăng truyện. <a style="color: red" href="{{ route('story.create') }}">Thêm truyện</a></span>
                                                @endif
                                            </div>
                                        @endforeach
                                    @else
                                        <a class="dropdown-item" href="#">Không có thông báo nào.</a>
                                    @endif
                                </div>

                                <div class="noti-more">
                                    <a class="noti-url" href="/thong-bao">Xem tất cả</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Icon kệ sách --}}
                    <div id="series-unread-icon" class="user-sublink appearing">
                        <a class="link-item" href="{{ route('ke-sach') }}">
                            <div class="icon-wrapper">
                                <i class="fas fa-heart"></i>
                            </div>
                        </a>
                    </div>
                    {{-- Icon giỏ hàng --}}
                    <div id="series-cart" class="user-sublink appearing">
                        <a class="link-item" href="{{ route('cart') }}">
                            <div class="icon-wrapper">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="cart-count">0</span>
                                <!-- Số lượng chương sẽ được cập nhật bởi JavaScript -->
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endif

    </div>
    <div class="navbar-mainblock">
        <div class="navbar-search none block-m">
            <form class="" action="{{ route('search') }}" method="get">
                <input id="search" class="search-input" type="text" placeholder="Tối thiểu 2 kí tự"
                    name="title">
                <button class="search-submit" type="submit" value="Tìm kiếm"><i
                        class="fas fa-search"></i></button>
                <div id="search-results"></div>
            </form>
        </div>
        <ul class="navbar-menu at-navbar none d-xl-block unstyled">

            <li><a class="nav-menu_item" href="{{ route('sangtac') }}"><i
                        class="fas fa-pen-nib menu-icon"></i><span class="">Sáng tác</span></a></li>

            <li><a class="nav-menu_item" href="{{ route('convert') }}"><i
                        class="fas fa-book menu-icon"></i><span class="">Máy dịch</span></a></li>

            <li><a class="nav-menu_item" href="{{ route('xuatban') }}"><i
                        class="fas fa-calendar menu-icon"></i><span class="">Xuất bản</span></a></li>

            <li><a class="nav-menu_item" href="{{ route('thao-luan') }}"><i
                        class="fas fa-users menu-icon"></i><span class="">Thảo luận</span></a></li>

            <li><a class="nav-menu_item" href="{{ route('filterDanhSach') }}"><i
                        class="fas fa-th-list menu-icon"></i><span class="">Danh sách</span></a></li>

            <li class="nav-has-submenu">
                <a class="nav-menu_item">
                    <i class="fas fa-question menu-icon"></i><span class="">Hướng dẫn</span>
                    <i class="fas fa-chevron-down dropdown-icon"></i>
                    <i class="fas fa-chevron-right dropdown-icon"></i>
                </a>

                <ul class="nav-submenu hidden-block unstyled none">
                    <li><a href="{{ route('huongdan_dangtruyen') }}"><span>Đăng truyện</span></a></li>
                    <li><a href="{{ route('huongdan_gioithieu') }}"><span>Giới thiệu</span></a></li>
                    <li><a href="{{ route('huongdan_gopy') }}"><span>Góp ý - Báo
                                lỗi</span></a></li>
                </ul>
            </li>
            <li>
                @can('access-admin')
                    <a class="nav-menu_item" href="{{ url('/admin') }}" target="_blank"><span class="">Thống
                            kê</span></a>
                @endcan
                {{-- <a class="nav-menu_item" href="{{ url('/admin') }}"><span class="">Hệ thống</span></a> --}}
            </li>
        </ul>
    </div>

    <!--<section id="nav-search"></section>-->
</div>
</body>
