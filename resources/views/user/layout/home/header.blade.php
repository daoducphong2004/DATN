<div id="navbar" class="headroom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"><a class="navbar-brand mt-3" href="">
                    <h5>Bảng điều khiển</h5>
                </a></div>
            <div class="col-9">
                <ul class="nav navbar-nav d-flex flex-row-reverse">
                    <li class="nav-menu_item link-underline link-underline-opacity-0 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Nhóm dịch
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('nhomSoHuu')}}" class="nav-menu_item link-underline link-underline-opacity-0">Nhóm sở
                                    hữu</a></li>
                            <li><a href="{{url('nhomThamGia')}}" class="nav-menu_item link-underline link-underline-opacity-0">Nhóm tham
                                    gia</a></li>
                        </ul>
                    </li>
                    <li class="nav-menu_item link-underline link-underline-opacity-0 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Tiện ích
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('theLoai')}}" class="nav-menu_item link-underline link-underline-opacity-0">Thể
                                    loại</a></li>
                            <li><a href="{{url('thuVien')}}" class="nav-menu_item link-underline link-underline-opacity-0">Thư
                                    viện</a></li>

                        </ul>
                    </li>

                    <li class="nav-menu_item link-underline link-underline-opacity-0 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Thảo luận
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('themThaoLuan')}}" class="nav-menu_item link-underline link-underline-opacity-0">Thêm thảo
                                    luận</a></li>
                            <li><a href="{{url('thaoLuanCuaBan')}}" class="nav-menu_item link-underline link-underline-opacity-0">Thảo luận
                                    của bạn</a></li>
                        </ul>
                    </li>
                    <li class="nav-menu_item link-underline link-underline-opacity-0 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #1389c6">Sáng tác
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('OLNDaDang')}}" class="nav-menu_item link-underline link-underline-opacity-0">OLN đã
                                    đăng</a></li>
                            <li><a href="{{url('OLNThamGia')}}" class="nav-menu_item link-underline link-underline-opacity-0">OLN tham
                                    gia</a></li>
                        </ul>
                    </li>
                    <li class="nav-menu_item link-underline link-underline-opacity-0 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #e3953e">Convert
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('conventDaDang')}}" class="nav-menu_item link-underline link-underline-opacity-0">Convert đã
                                    đăng</a></li>
                            <li><a href="{{url('conventThamGia')}}" class="nav-menu_item link-underline link-underline-opacity-0">Convert
                                    tham
                                    gia</a></li>
                        </ul>
                    </li>
                    <li class="nav-menu_item link-underline link-underline-opacity-0 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #10b591">
                            Truyện dịch
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('truyenDaDang')}}" class="nav-menu_item link-underline link-underline-opacity-0">Truyện đã
                                    đăng</a></li>
                            <li><a href="{{url('truyenThamGia')}}" class="nav-menu_item link-underline link-underline-opacity-0">Truyện tham
                                    gia</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('createTruyen')}}" class="nav-menu_item link-underline link-underline-opacity-0" style="color: red">Thêm
                            Truyện</a></li>
                    <li><a class="nav-menu_item link-underline link-underline-opacity-0" href="{{url('UserHome')}}"><i
                                class="fas fa-home text-black"></i><span class="hidden-md hidden-lg"> Home</span></a></li>
                </ul>
            </div>
            <div class="col-1 navbar-mainblock mt-2">
                <li class="nav-item dropdown" style="list-style: none;">
                    <a class="nav-link nav-user_avatar" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{asset('users/user/img/apple-touch-icon-114x114.png')}}" class="icon rounded-full rounded-circle"
                            style="width: 35px;" alt="Your avatar">
                    </a>
                    <ul class="dropdown-menu hidden-block mt-3" style="left: -80px;">
                        <li><a class="dropdown-item" href="#">Tên đăng nhập</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Đổi Thông Tin</a></li>
                        <li><a class="dropdown-item" href="#">Đổi Mật Khẩu</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Đổi Email</a></li>
                        <li><a class="dropdown-item" href="#">Đổi Username</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Thoát</a></li>
                    </ul>
                </li>
            </div>
        </div>

    </div>
</div>

