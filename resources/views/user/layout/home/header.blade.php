<nav class="navbar navbar-default" style="z-index: 999">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="UserHome">Bảng điều khiển</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <li><a href="home" target="_blank"><i class="fas fa-home"></i><span class="hidden-md hidden-lg"> Cổng
                            Light Novel</span></a></li>
                <li><a href="createTruyen" style="color: red">Thêm Truyện</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false" style="color: #10b591">Truyện dịch <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="truyenDaDang">Truyện đã
                                đăng</a></li>
                        <li><a href="truyenThamGia">Truyện tham
                                gia</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false" style="color: #e3953e">Convert <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="conventDaDang">Convert đã đăng</a>
                        </li>
                        <li><a href="convertThamGia">Convert tham
                                gia</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false" style="color: #1389c6">Sáng tác <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="OLNDaDang">OLN đã đăng</a>
                        </li>
                        <li><a href="OLNThamGia">OLN tham gia</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false">Thảo luận <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="themThaoLuan">Thêm thảo luận</a></li>
                        <li><a href="thaoLuanCuaBan">Thảo luận của bạn</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false">Tiện ích <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="theLoai">Thể loại</a></li>
                        <li><a href="thuVien">Thư viện</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false">Nhóm dịch <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="nhomSoHuu">Nhóm sở hữu</a></li>
                        <li><a href="nhomThamGia">Nhóm tham gia</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false"><span class="glyphicon glyphicon-user"> </span><span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a>LinhLinh</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="">Đổi Thông Tin</a></li>
                        <li><a href="">Đổi Mật Khẩu</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="">Đổi Email</a></li>
                        <li><a href="">Đổi Username</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Thoát</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-default" style="z-index: 999">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="UserHome">Bảng điều khiển</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <li><a href="home" target="_blank"><i class="fas fa-home"></i><span
                            class="hidden-md hidden-lg"> Cổng Light Novel</span></a></li>
                <li><a href="createTruyen" style="color: red">Thêm Truyện</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false" style="color: #10b591">Truyện dịch <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="truyenDaDang">Truyện đã
                                đăng</a></li>
                        <li><a href="truyenThamGia">Truyện tham
                                gia</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false" style="color: #e3953e">Convert <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="conventDaDang">Convert đã đăng</a>
                        </li>
                        <li><a href="convertThamGia">Convert tham
                                gia</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false" style="color: #1389c6">Sáng tác <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="OLNDaDang">OLN đã đăng</a>
                        </li>
                        <li><a href="OLNThamGia">OLN tham gia</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false">Thảo luận <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="themThaoLuan">Thêm thảo luận</a></li>
                        <li><a href="thaoLuanCuaBan">Thảo luận của bạn</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false">Tiện ích <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="theLoai">Thể loại</a></li>
                        <li><a href="thuVien">Thư viện</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false">Nhóm dịch <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="nhomSoHuu">Nhóm sở hữu</a></li>
                        <li><a href="nhomThamGia">Nhóm tham gia</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false"><span class="glyphicon glyphicon-user"> </span><span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a>LinhLinh</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="">Đổi Thông Tin</a></li>
                        <li><a href="">Đổi Mật Khẩu</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="">Đổi Email</a></li>
                        <li><a href="">Đổi Username</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://docln.net/logout">Thoát</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
