<nav class="navbar navbar-default custom-navbar" style="z-index: 999">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('action.') }}">Bảng điều khiển</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/" target="_blank" class="nav-link"><i class="fas fa-home"></i> Cổng Light Novel</a></li>
                <li>@can('create')<a href="{{ route('story.create') }}" class="nav-link text-danger">Thêm truyện</a>@endcan</li>
                <li class="dropdown">
                    @if(!Auth::check())
                        <a href="{{ route('login') }}" class="nav-link text-success" onclick="alert(' Bạn cần phải đăng nhập trước')">Truyện dịch</a>
                    @else
                        <a href="#" class="dropdown-toggle nav-link text-success" data-toggle="dropdown">Truyện dịch <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('manage.mytranslatebook') }}">Truyện đã đăng</a></li>
                            <li><a href="{{ route('manage.booktranslateshared') }}">Truyện tham gia</a></li>
                        </ul>
                    @endif
                </li>
                <!-- Các menu khác tương tự -->
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}" class="nav-link"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a>{{ Auth::check() && Auth::user()->username ? Auth::user()->username : '' }}</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('action.profile') }}">Đổi Thông Tin</a></li>
                            <li><a href="">Đổi Mật Khẩu</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Thoát</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<style>
.custom-navbar {
    background-color: #f8f9fa;
    border: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.navbar-brand {
    font-size: 18px;
    font-weight: bold;
    color: #333;
}

.navbar-brand:hover {
    color: #007bff;
}

.navbar-nav > li > a {
    font-size: 16px;
    color: #555;
    transition: color 0.3s ease;
}

.navbar-nav > li > a:hover {
    color: #007bff;
}

.navbar-nav .dropdown-menu {
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
}

.dropdown-menu > li > a {
    color: #555;
    font-size: 14px;
}

.dropdown-menu > li > a:hover {
    background-color: #f0f0f0;
    color: #007bff;
}

.navbar-right .dropdown-menu {
    right: 0;
    left: auto;
}

.nav-link {
    font-weight: 500;
}

.nav-link.text-danger {
    color: red !important;
}

.nav-link.text-success {
    color: #10b591 !important;
}

.navbar-toggle .icon-bar {
    background-color: #007bff;
}
</style>
