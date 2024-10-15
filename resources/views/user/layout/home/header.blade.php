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
            <a class="navbar-brand" href="/UserHome">Bảng điều khiển</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <li>
                    @can('create', App\Models\Story::class)
                        <a href="{{ route('story.create') }}" style="color: red">Thêm truyện</a>
                    @endcan
                </li>
                {{-- <li><a href="/" target="_blank"><i class="fas fa-home"></i><span class="hidden-md hidden-lg">
                            Cổng Light Novel</span></a></li>

                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false" style="color: #10b591">Truyện dịch <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('manage.mytranslatebook') }}">Truyện đã đăng</a></li>
                        <li><a href="{{ route('manage.booktranslateshared') }}">Truyện tham gia</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-expanded="false" style="color: #e3953e">Convert <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('manage.myConvertbook') }}">Convert đã đăng</a>
                        </li>
                        <li><a href="{{ route('manage.bookConvertshared') }}">Convert tham
                                gia</a></li>
                    </ul>
                </li> --}}
                <li class="dropdown">
                    @if(!Auth::check())
                        <a href="{{ route('login') }}" class="" style="color: #10b591"
                            onclick="alert(' Bạn cần phải đăng nhập trước')">Truyện dịch</a>
                    @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false" style="color: #10b591">Truyện dịch <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ route('manage.mytranslatebook') }}">Truyện đã đăng</a></li>
                        <li><a href="{{ route('manage.booktranslateshared') }}">Truyện tham gia</a></li>
                        </ul>
                    @endif
                </li>
                <li class="dropdown">
                    @if(!Auth::check())
                        <a href="{{ route('login') }}" class="" style="color: #e3953e"
                            onclick="alert(' Bạn cần phải đăng nhập trước')">Convert <span class="caret"></span></a>
                    @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false" style="color: #e3953e">Convert <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="{{ route('manage.myConvertbook') }}">Convert đã đăng</a>
                        </li>
                        <li><a href="{{ route('manage.bookConvertshared') }}">Convert tham
                                gia</a></li>
                        </ul>
                    @endif
                </li>
                <li class="dropdown">
                    @if(!Auth::check())
                        <a href="{{ route('login') }}" class="" style="color: #1389c6"
                            onclick="alert(' Bạn cần phải đăng nhập trước')">Sáng tác <span class="caret"></span></a>
                    @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false" style="color: #1389c6">Sáng tác <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('manage.mybookOLN') }}">OLN đã đăng</a>
                        </li>
                        <li><a href="{{ route('manage.bookOLNshared') }}">OLN tham gia</a>
                        </li>
                        </ul>
                    @endif
                </li>
                <li class="dropdown">
                    @if(!Auth::check())
                        <a href="{{ route('login') }}" class=""
                            onclick="alert(' Bạn cần phải đăng nhập trước')">Thảo luận <span class="caret"></span></a>
                    @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Thảo luận <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="themThaoLuan">Thêm thảo luận</a></li>
                            <li><a href="thaoLuanCuaBan">Thảo luận của bạn</a></li>
                        </ul>
                    @endif
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
                    @if(!Auth::check())
                        <a href="{{ route('login') }}" class=""
                            onclick="alert(' Bạn cần phải đăng nhập trước')">Nhóm dịch <span class="caret"></span></a>
                    @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Nhóm dịch <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="nhomSoHuu">Nhóm sở hữu</a></li>
                            <li><a href="nhomThamGia">Nhóm tham gia</a></li>
                        </ul>
                    @endif
                </li>
                <li>
                    @if(!Auth::check())
                        <a href="{{ route('login') }}" class="" style="color: rgb(242, 0, 255)"
                            onclick="alert('Bạn cần phải đăng nhập trước')">Nâng cấp</a>
                    @else
                        @can('upgrade', Auth::user())
                            <a href="{{ route('author.create') }}" style="color: rgb(242, 0, 255)">Nâng cấp</a>
                        @endcan
                    @endif
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li>
                        <a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><span class="glyphicon glyphicon-user"> </span><span
                                class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a>
                                    @if (Auth::check() && Auth::user()->username)
                                        {{ Auth::user()->username }}
                                    @endif
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="">Đổi Thông Tin</a></li>
                            <li><a href="">Đổi Mật Khẩu</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="">Đổi Email</a></li>
                            <li><a href="">Đổi Username</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"  class="link-underline link-underline-opacity-0"><i
                                    class="fas me-2 fa-sign-out-alt"></i><span>Thoát</span></a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                {{-- <a href="https://docln.net/logout">Thoát</a> --}}
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
