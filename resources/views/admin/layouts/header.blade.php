<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="img/apple-touch-icon-114x114" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="img/apple-touch-icon-114x114" alt="" height="17">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="img/apple-touch-icon-114x114" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="img/apple-touch-icon-114x114" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm ..."
                                        aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>
                @if(Auth::check())
                    <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                        @php
                            $notifications = auth()->user()->notifications()->get();
                        @endphp
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-bell fs-22'></i>
                            <span
                                class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">{{ $notifications->count() }} <span
                                    class="visually-hidden">unread messages</span></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">

                            <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                @php
                                    $notifications = auth()->user()->notifications()->get();
                                @endphp
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                        </div>
                                        <div class="col-auto dropdown-tabs">
                                            <span class="badge bg-light-subtle text-body fs-13">{{ $notifications->count() }} </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-2 pt-2">
                                    <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true"
                                        id="notificationItemsTab" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab"
                                                role="tab" aria-selected="true">
                                                All ({{ $notifications->count() }})
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="tab-content position-relative" id="notificationItemsTabContent">
                                <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                                        <div class="text-reset notification-item d-block dropdown-item position-relative">
                                            @php
                                                $notifications = auth()->user()->notifications()->latest()->take(5)->get();
                                            @endphp

                                            @if ($notifications->count() > 0)
                                                @foreach ($notifications as $notification)
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mt-0 mb-2 lh-base">{!! $notification->data['message'] !!}</h6>

                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> {{ $notification->created_at->diffForHumans() }}</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            @if ($notification->type == 'App\Notifications\MonthlyRevenueNotification')
                                                                <a  style="color: red"
                                                                    href="{{ url('/admin') }}">
                                                                    view
                                                                </a>
                                                            @endif

                                                            @if ($notification->type == 'App\Notifications\BookPendingNotification')
                                                                <a style="color: red"
                                                                    href="{{ route('admin_stories_approval') }}">
                                                                view
                                                                </a>
                                                            @endif

                                                            @if(isset($notification->data['user_id']))
                                                                <a style="color: red" href="{{ route('author.index') }}">
                                                                view
                                                                </a>
                                                            @endif

                                                            @if ($notification->type == 'App\Notifications\StoryApprovedNotification')
                                                                @if (isset($notification->data['slug']))
                                                                    <a style="color: red" href="{{ route('truyen.truyen', ['slug' => $notification->data['slug']]) }}">
                                                                    view
                                                                    </a>

                                                                @endif
                                                            @endif

                                                            @if ($notification->type == 'App\Notifications\AuthorApprovedNotification')
                                                                    <span>Từ giờ bạn có thể đăng truyện. <a style="color: red" href="{{ route('story.create') }}">Thêm truyện</a></span>
                                                            @endif

                                                            @if ($notification->type == 'App\Notifications\NewChapterNotification' && isset($notification->data['slug']))
                                                                <a style="color: red" href="{{ route('truyen.truyen', ['slug' => $notification->data['slug']]) }}">view</a>
                                                            @endif

                                                            @if ($notification->type == 'App\Notifications\AutoPurchasesNotification' && isset($notification->data['slug']))
                                                                <a style="color: red" href="{{ route('truyen.truyen', ['slug' => $notification->data['slug']]) }}">view</a>
                                                            @endif

                                                            @if ($notification->type == 'App\Notifications\NewBookCommentNotification' && isset($notification->data['slug']))
                                                                <a style="color: red" href="{{ route('truyen.truyen', ['slug' => $notification->data['slug']]) }}">view</a>
                                                            @endif

                                                            @if ($notification->type == 'App\Notifications\NewChapCommentNotification' && isset($notification->data['chapter_slug']) && $notification->type == 'App\Notifications\NewChapCommentNotification')
                                                                <a style="color: red" href="{{ route('truyen.chuong', ['slug' => $notification->data['slug'], 'chapter_slug' => $notification->data['chapter_slug']]) }}">view</a>
                                                            @endif
                                                            @if ($notification->type == 'App\Notifications\NewForumCommentNotification' && isset($notification->data['id']))
                                                                <a style="color: red" href="{{ route('chi-tiet-thao-luan', ['id' => $notification->data['id']]) }}">view</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <a class="dropdown-item" href="#">Không có thông báo nào.</a>
                                            @endif
                                        </div>

                                        {{-- <div class="my-3 text-center view-all">
                                            <a href="{{ route('thong-bao') }}">
                                            <button type="button"
                                                class="btn btn-soft-success waves-effect waves-light">View
                                                All Notifications <i class="ri-arrow-right-line align-middle"></i></button></a>
                                        </div> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ asset(Storage::url(Auth::user()->avatar_url ?: 'img/noava.png')) }}"
                                alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">
                                    <a href="{{ Auth::check() ? '#' : route('login') }}">
                                        @if (Auth::check() && Auth::user()->username)
                                            {{ Auth::user()->username }}
                                        @else
                                            Bạn cần đăng nhập để xem thông tin này.
                                        @endif
                                    </a>
                                </span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Admin</span>
                            </span>
                        </span>
                    </button>
                    @if (Auth::check())
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Xin chào '{{ Auth::user()->username }}'</h6>
                            <a class="dropdown-item" href="{{ route('user.books', ['userId' => Auth::user()->id]) }}"><i
                                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Tài khoản</span></a>
                            <a class="dropdown-item" href="{{ route('Letter.create') }}"><i
                                    class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                                <span class="align-middle">Tin nhắn</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages-profile.html"><i
                                    class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Số dư: <b>{{ Auth::user()->coin_earned }}💎</b></span></a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i
                                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle" data-key="t-logout">Đăng xuất</span></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
