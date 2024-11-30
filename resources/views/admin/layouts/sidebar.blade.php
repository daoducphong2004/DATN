<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('img/favicon.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('img/favicon.png')}}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
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
                <li class="menu-title"><span data-key="t-menu">Bảng điều khiển</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/admin">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Admin</span>
                </li>

                <li class="nav-item">
                    @can('view-users', Auth::user())
                        <a class="nav-link menu-link" href="{{ route('user_index') }}">
                            <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Người dùng</span>
                        </a>
                    @endcan

                </li>

                <li class="nav-item">
                    @can('view-story', Auth::user())
                        <a class="nav-link menu-link" href="#sidebarBook" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarBook">
                            <i class=" ri-book-open-line"></i> <span data-key="t-pages">Truyện</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarBook">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('books.approval') }}" class="nav-link" data-key="t-starter">
                                        Duyệt truyện </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin_storylist') }}" class="nav-link" data-key="t-starter">
                                        Danh sách truyện </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin_storycreate') }}" class="nav-link" data-key="t-starter">
                                        Thêm truyện </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin_stories_trashed') }}" class="nav-link" data-key="t-starter">
                                        Thùng rác </a>
                                </li>
                            </ul>
                        </div>
                    @endcan
                </li>

                <li class="nav-item">
                    @can('view-author', Auth::user())
                        <a class="nav-link menu-link" href="#sidebarAuthor" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAuthor">
                            <i class="ri-shield-user-fill"></i> <span data-key="t-pages">Tác giả</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuthor">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('author.index') }}" class="nav-link" data-key="t-starter">
                                        Duyệt tác giả </a>
                                </li>
                            </ul>
                        </div>
                    @endcan
                </li>

                <li class="nav-item">
                    @can('view-contract', Auth::user())
                        <a class="nav-link menu-link" href="#sidebarContract" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarContract">
                            <i class="ri-file-paper-fill"></i> <span data-key="t-pages">Hợp đồng</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarContract">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('contracts-manage.index') }}" class="nav-link" data-key="t-starter">
                                        Danh sách hợp đồng </a>
                                </li>
                            </ul>
                        </div>
                    @endcan
                </li>

                <li class="nav-item">
                    @can('view-categories', Auth::user())
                        <a class="nav-link menu-link" href="{{ route('ListPurchaseUser') }}">
                            <i class="ri-shopping-cart-fill"></i> <span data-key="">Quản lý mua</span>
                        </a>
                    @endcan
                </li>

                <li class="nav-item">
                    @can('view-categories', Auth::user())
                        <a class="nav-link menu-link" href="{{ route('genres_index') }}">
                            <i class="ri-server-line"></i> <span data-key="">Thể loại</span>
                        </a>
                    @endcan
                </li>

                <li class="nav-item">
                    @can('view-categories', Auth::user())
                        <a class="nav-link menu-link" href="{{ route('reports.index') }}">
                            <i class="ri-flag-2-fill"></i> <span data-key="">Báo cáo</span>
                        </a>
                    @endcan
                </li>

                <li class="nav-item">
                    @can('view-comment', Auth::user())
                        <a class="nav-link menu-link" href="#sidebarComment" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarComment">
                            <i class="ri-chat-1-fill"></i> <span data-key="t-pages">Bình luận</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarComment">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('bookComment.index') }}" class="nav-link" data-key="t-starter">
                                        Bình luận truyện </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.chaptercomments.index') }}" class="nav-link" data-key="t-starter">
                                        Bình luận chap </a>
                                </li>
                            </ul>
                        </div>
                    @endcan
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
