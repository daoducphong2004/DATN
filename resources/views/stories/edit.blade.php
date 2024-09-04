@extends('stories.partials.master')
@section('content')
@include('stories.partials.header')
<body data-theme="light">
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
                <a class="navbar-brand" href="https://docln.net/action">Bảng điều khiển</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                    <li><a href="https://docln.net" target="_blank"><i class="fas fa-home"></i><span
                                class="hidden-md hidden-lg"> Cổng Light Novel</span></a></li>
                    <li><a href="https://docln.net/action/series/create" style="color: red">Thêm Truyện</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false" style="color: #10b591">Truyện dịch <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/series/index?type=translation&amp;of=self">Truyện đã
                                    đăng</a></li>
                            <li><a href="https://docln.net/action/series/index?type=translation&amp;of=shared">Truyện
                                    tham gia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false" style="color: #e3953e">Convert <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/series/index?type=convert&amp;of=self">Convert đã
                                    đăng</a></li>
                            <li><a href="https://docln.net/action/series/index?type=convert&amp;of=shared">Convert tham
                                    gia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false" style="color: #1389c6">Sáng tác <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/series/index?type=original&amp;of=self">OLN đã
                                    đăng</a></li>
                            <li><a href="https://docln.net/action/series/index?type=original&amp;of=shared">OLN tham
                                    gia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Thảo luận <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/page/create">Thêm thảo luận</a></li>
                            <li><a href="https://docln.net/action/page/mypages">Thảo luận của bạn</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Tiện ích <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/genre">Thể loại</a></li>
                            <li><a href="https://docln.net/action/page_category">Thư viện</a></li>
                            <li><a href="https://docln.net/action/image">Minh họa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">Nhóm dịch <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://docln.net/action/group/mygroups">Nhóm sở hữu</a></li>
                            <li><a href="https://docln.net/action/group/jointgroups">Nhóm tham gia</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><span class="glyphicon glyphicon-user"> </span><span
                                class="caret"></span></a>
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

    <div class="wrapper container-fluid">
        <div class="visible-xs-block visible-sm-block"
            style="
        position: absolute;
        top: 70px;
        left: 0;
        z-index: 10000;
        padding: 10px;
        border: 2px solid #de2222;
        border-radius: 2px;
        background-color: #f5f5f5;"
            id="action-tree-toggle">
            Click để bật/tắt khung Quản lý
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 hidden-xs hidden-sm" id="action-tree"
            style="border-right: 1px solid #ccc; padding: 0">
            <iframe name="nav" src="{{ route('storytree', $book->id) }}"></iframe>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9" style="padding: 0 0px">
            <iframe name="action" src="{{ route('storyinformation', $book->id) }}"></iframe>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#action-tree-toggle').on('click', function() {
                $('#action-tree').toggleClass('hidden-xs hidden-sm');
            });

            if (/iPhone|iPod|iPad/.test(navigator.userAgent)) {
                $('iframe').parent().css({
                    width: '100%',
                    height: '100%',
                    overflow: 'auto',
                    '-webkit-overflow-scrolling': 'touch'
                });
            }
        });
    </script>
@endsection
