@extends('partials.sidebar')
@section('gioithieu')



<section id="header">
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
                        <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value="">
                        <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <ul id="navbar">
                    <li><a class="active" href="{{route('home')}}">Home</a></li>
                    <li><a class="nav-menu_item" href="{{route('composer')}}"><span class="">Sáng tác</span></a></li>
                    <li><a class="nav-menu_item" href="{{route('pandemic')}}"><span class="">Máy dịch</span></a></li>
                    <li><a class=" nav-menu_item" href="{{route('publish')}}"><span class="">Xuất bản</span></a></li>
                    <li><a class="nav-menu_item" href="{{route('discuss')}}"><span class="">Thảo luận</span></a></li>
                    <li><a class=" nav-menu_item" href="{{route('list')}}"><span class="">Danh sách</span></a></li>
                    <a href=" #" id="close"><i class="fas fa-times"></i></a>
                </ul>

                <li class="nav-has-submenu">
                    <a class="nav-menu_item">
                        <span class="">Hướng dẫn</span>
                        <i class="fas fa-chevron-down dropdown-icon" style="float: right; margin-top: 6px"></i>
                    </a>

                    <ul class="nav-submenu list-unstyled none">
                        <li><a href="{{route('create')}}"><span>Đăng truyện</span></a></li>
                        <li><a href="{{route('about')}}"><span>Giới thiệu</span></a></li>
                        <li><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><span>Góp ý - Báo lỗi</span></a></li>
                        <li><a href="/privacy-policy"><span>Privacy Policy</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="navbar-logo-wrapper">
            <a href="/" class="navbar-logo" style="background-image: url('/img/logo-9.png')" title="Trang chủ"></a>
        </div>

        <div id="navbar-user" class="guest">
            <a class="login-link" href="{{route('login')}}">Đăng nhập</a>
            <div id="guest-menu">
                <div class="icon">
                    <span class="white-point"></span>
                    <span class="white-point"></span>
                    <span class="white-point"></span>
                </div>
                <ul class="nav-submenu hidden-block unstyled none">
                    <li>
                        <div class="nightmode-toggle li-inner" onclick="toggleNightMode(this)">
                            <span><i class="fas fa-moon"></i>Nền tối</span>
                            <div class="toggle-icon">
                                <i class="fa fa-toggle-off"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="li-inner" href="/lich-su-doc">
                            <i class="fas fa-history"></i><span>Lịch sử</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-mainblock">
            <div class="navbar-search none block-m">
                <form class="" action="/tim-kiem" method="get">
                    <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value="">
                    <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <ul class="navbar-menu at-navbar none d-xl-block unstyled">
                <li><a class="nav-menu_item" href="{{route('composer')}}"><i class="fas fa-pen-nib menu-icon"></i><span class="">Sáng tác</span></a></li>

                <li><a class="nav-menu_item" href="{{route('pandemic')}}"><i class=" fas fa-book menu-icon"></i><span class="">Máy dịch</span></a></li>

                <li><a class="nav-menu_item" href="{{route('publish')}}"><i class="fas fa-calendar menu-icon"></i><span class="">Xuất bản</span></a></li>

                <li><a class="nav-menu_item" href="{{route('discuss')}}"><i class="fas fa-users menu-icon"></i><span class="">Thảo luận</span></a></li>

                <li><a class="nav-menu_item" href="{{route('list')}}"><i class="fas fa-th-list menu-icon"></i><span class="">Danh sách</span></a></li>

                <li class="nav-has-submenu">
                    <a class="nav-menu_item" href="javascript:void(0);" onclick="toggleSubmenu(this)">
                        <i class="fas fa-question menu-icon"></i><span class="">Hướng dẫn</span>
                        <i class="fas fa-chevron-down dropdown-icon"></i>
                    </a>
                
                    <ul class="nav-submenu hidden-block unstyled none">
                        <li><a href="{{route('create')}}"><span>Đăng truyện</span></a></li>
                        <li><a href="{{route('about')}}"><span>Giới thiệu</span></a></li>
                        <li><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><span>Góp ý - Báo lỗi</span></a></li>
                        <li><a href="/privacy-policy"><span>Privacy Policy</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!--<section id="nav-search"></section>-->
    </div>
    </div>
    <div class="page-top-group  at-index ">
        <a href="/truyen/13957">
            <div class="index-background d-none d-lg-block" style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_d.png')"></div>
            <div class="index-background d-lg-none" style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_m.png'); background-size: cover"></div>
        </a>
    </div>
</section>
<main id="mainpart" class="custome-page"> <!--style="background: url('img/background/bg_rem.jpg') no-repeat fixed 70px center"-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-breadcrumb">
    <span class="breadcrum-level"><a href="../index.html"><i class="fas fa-home"></i></a></span>
        <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
    <span class="breadcrum-level"><a href="../thao-luan.html">Thảo luận</a></span>
    </div>

            </div>
        </div>
        <section class="page-content basic-section">
            <header class="sect-header">
                <span class="sect-title"><a href="2-gioi-thieu-cong-light-novel.html"><i class="fas fa-lock"></i> Giới thiệu Cổng Light Novel</a></span>
            </header>
            <main class="sect-body">
                <div class="row">
                    <div class="col-8">
                        <div class="page-author group-mem">                    
                            <div class="author_ava">
                                <img src="../../3.bp.blogspot.com/-Yk-cAlYNDXg/WCdtQWo7LCI/AAAAAAAAv8Y/EJxI3Jh3w_Y/w100/ava2.png">                                
                            </div>
                            <div class="author-info">
                                <div class="author_name"><a href="../thanh-vien/3.html">thonglinh90</a></div>                           
                                <div class="author_role"><span>Members</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <time class="topic-time timeago" title="30/01/2017 19:49:15" datetime="2017-01-30T19:49:15+07:00">Monday, 30 Jan 2017</time>
                    </div>                
                </div>        
                <div class="forum-page-content long-text">
                    <p>Cổng Light Novel (từng được gọi với cái tên BBS Hako) là một cổng thông tin chuyên về Light Novel ra đời từ năm 2013 dưới sự cộng tác của Hako và Sonako Light Novel Wiki, trang hoạt động với các tiêu chí và mục đích sau đây:</p>

<ul><li>Tập hợp toàn bộ bản dịch Light Novel Tiếng Việt có trên mạng.</li>
	<li>Tạo điều kiện cho các nhóm dịch Light Novel chia sẻ, quảng bá và thảo luận thành quả của họ.</li>
	<li>Giúp người đọc tiếp cận với Light Novel một cách trực quan thông qua hệ thống đọc online chuyên biệt.</li>
</ul><p>Những yếu tố giúp Cổng Light Novel ưu việt hơn những dịch vụ chia sẻ Light Novel khác:</p>

<ul><li>Ở CLN, tốc độ được đặt lên trên hết, trang sử dụng server riêng và có khả năng lưu trữ toàn bộ dữ liệu, giúp cho việc truy cập và hiển thị ảnh nhanh hơn với chất lượng tốt nhất.</li>
	<li>Giao diện đọc online được tối ưu hóa với chức năng tăng size font và giãn cách line, cùng với hệ thống bookmark cho người dùng.</li>
	<li>CLN hỗ trợ người dùng đăng bản dịch với bộ công cụ nhanh và hiệu quả.</li>
	<li>Hỗ trợ đọc online trên thiết bị cầm tay và điện thoại di động.</li>
</ul>
                </div>   
                    
                            </main>
        </section>

        <section class="basic-section">
            <main>
            <section class="ln-comment">
    <header>
        <h3 class="text-lg font-bold dark:text-white">0 Bình luận </h3>
        <!-- <i id="refresh_comment" class="fas fa-refresh" aria-hidden="true" style="margin-left: 10px; font-size: 18px"></i></h3> -->
    </header>

    <main class="ln-comment-body">
                    <div class="ln-comment_sign-in long-text">
                Bạn phải <a href="../login.html">đăng nhập</a> hoặc <a href="../register.html">tạo tài khoản</a> để bình luận.
            </div>
                
        
        
        <div class="ln-comment-page">
</div>    </main>

    <script>
        var token = 'RoVR3vbYqJwRLPo31OeRWpuk5IYzEa1XubKSx458';
        var comment_type = 'page';
        var comment_typeid = '2';
    </script>

    </section>


            </main>
        </section>
    </div>
</main>
@endsection