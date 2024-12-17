<div class="app-menu navbar-menu" style="background-color: #333336;">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('img/apple-touch-icon-114x114.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('img/apple-touch-icon-114x114.png') }}" alt="" height="50">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('img/apple-touch-icon-114x114.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('img/apple-touch-icon-114x114.png') }}" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>


            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Action</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('action.') }}">
                        <i class="ri-home-line"></i></i> <span data-key="t-widgets">Home</span>
                    </a>
                </li>
            </ul>
            @can('create')
                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Hợp đồng</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('contracts.index') }}">
                            <i class="ri-file-paper-2-line"></i> <span data-key="t-widgets">Tạo hợp đồng</span>
                        </a>
                    </li>
                </ul>
            @endcan

            @can('create')
                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Group</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('action.group.index') }}">
                            <i class="ri-group-line"></i> <span data-key="t-widgets">Nhóm dịch</span>
                        </a>
                    </li>
                </ul>
            @endcan

            @can('view-action')
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Truyện của tôi</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('action.statistics-list') }}">
                            <i class="ri-pie-chart-2-line"></i> <span data-key="t-widgets">Thống kê</span>
                        </a>
                    </li>
                    @can('create')
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('story.create') }}">
                                <i class="bx bx-book-add"></i> <span data-key="t-widgets">Thêm mới</span>
                            </a>
                        </li>
                    @endcan

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarDang" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarDang">
                            <i class="ri-book-2-line"></i> <span data-key="t-pages">Truyện đã đăng</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDang">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('manage.mytranslatebook') }}" class="nav-link" data-key="t-starter">
                                        Truyện dịch </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('manage.myConvertbook') }}" class="nav-link" data-key="t-starter">
                                        Truyên convert </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('manage.mybookOLN') }}" class="nav-link" data-key="t-starter">
                                        Truyện sáng tác </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarThamgia" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarThamgia">
                            <i class="ri-book-mark-line"></i> <span data-key="t-pages">Truyện tham gia</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarThamgia">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('manage.booktranslateshared') }}" class="nav-link" data-key="t-starter">
                                        Truyện dịch </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('manage.bookConvertshared') }}" class="nav-link" data-key="t-starter">
                                        Truyên convert </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('manage.bookOLNshared') }}" class="nav-link" data-key="t-starter">
                                        Truyện sáng tác </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            @endcan

            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Thảo luận</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('thao-luan')}}">
                        <i class="ri-discuss-line"></i> <span data-key="t-widgets">Thảo luận</span>
                    </a>
                </li>
            </ul>
            @can('upgrade', Auth::user())
                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Nâng cấp tài khoản</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{ route('author.create') }}">
                            <i class="ri-vip-crown-line"></i> <span data-key="t-widgets">Nâng cấp</span>
                        </a>
                    </li>
                </ul>
            @endcan
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
