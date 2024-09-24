<nav class="navbar navbar-default" style="z-index: 999">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Bảng điều khiển</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <li><a href="" target="_blank"><i class="fas fa-home"></i><span class="hidden-md hidden-lg"> Cổng Light Novel</span></a></li>
                <li><a href="{{ route('story_index') }}" style="color: red">Danh Sách Truyện</a></li>
                <li><a href="{{ route('user_index') }}" style="color: #3107dc">User</a></li>
                <li><a href="{{ route('category_index') }}" style="color: #e3953e">Thể Loại</a></li>
                <li><a href="{{ route('comment_index') }}" style="color: #d54cac">Bình luận</a></li>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #1389c6">Sáng tác <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="https://docln.net/action/series/index?type=original&amp;of=self">OLN đã đăng</a></li>
                        <li><a href="https://docln.net/action/series/index?type=original&amp;of=shared">OLN tham gia</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Thảo luận <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="https://docln.net/action/page/create">Thêm thảo luận</a></li>
                        <li><a href="https://docln.net/action/page/mypages">Thảo luận của bạn</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tiện ích <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="https://docln.net/action/genre">Thể loại</a></li>
                        <li><a href="https://docln.net/action/page_category">Thư viện</a></li>
                        <li><a href="https://docln.net/action/image">Minh họa</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nhóm dịch <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="https://docln.net/action/group/mygroups">Nhóm của bạn</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"> </span><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a>Phongdeeptry2993</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://docln.net/action/profile">Đổi Thông Tin</a></li>
                        <li><a href="https://docln.net/action/password">Đổi Mật Khẩu</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://docln.net/action/email">Đổi Email</a></li>
                        <li><a href="https://docln.net/action/username">Đổi Username</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://docln.net/logout">Thoát</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>