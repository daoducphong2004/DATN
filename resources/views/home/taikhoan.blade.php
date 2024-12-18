@extends('home.layout.master')
@section('title')
    Thành viên {{ !empty($userInfor) ? $userInfor->username : '' }} - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
    <main id="mainpart" class="profile-page">
        <div class="profile-feature-wrapper">
            <div class="container">
                <div class="profile-feature">
                    <div class="profile-cover">
                        <div class="fourone-ratio">
                            <div class="content img-in-ratio"
                                style="background-image: url('{{ !empty($userInfor->background) ? asset(Storage::url($userInfor->background)) : asset('/img/user-cover.gif') }}');">
                            </div>
                        </div>
                        @if (Auth::id() == $userInfor->id)
                            <div id="profile-changer_cover" class="profile-changer block-m">
                                <label for="user_cover_file" class="p-c_wrapper" style="cursor: pointer;">
                                    <i class="fas fa-camera"></i>
                                    <span class="p-c_text">Yêu cầu 1200 x 300 px</span>
                                </label>
                            </div>
                            <form id="backgroundForm{{ $userInfor->id }}" class="update-background"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="file" id="user_cover_file" name="background"
                                    data-user-id="{{ $userInfor->id }}" style="display: none;">
                            </form>
                        @endif
                    </div>

                    <div class="profile-nav">
                        <div class="profile-ava-wrapper">
                            <div class="profile-ava">
                                @if (Auth::id() == $userInfor->id)
                                    <div id="profile-changer_ava" class="profile-changer">
                                        <label for="user_avatar_file" class="p-c_text" style="cursor: pointer;">
                                            <i class="fas fa-camera"></i>
                                        </label>
                                    </div>
                                @endif
                                <img src="{{ !empty($userInfor->avatar_url) ? asset(Storage::url($userInfor->avatar_url)) : asset('img/noava.png') }}"
                                    alt="Avatar">
                            </div>
                        </div>

                        <form id="avatarForm{{ $userInfor->id }}" class="update-avatar" enctype="multipart/form-data">
                            @csrf
                            <input type="file" id="user_avatar_file" name="avatar" data-user-id="{{ $userInfor->id }}"
                                style="display: none;">
                        </form>

                        <div class="profile-function at-desktop none block-m">
                            <a href="" class="button to-contact button-green"><i class="fas fa-paper-plane"></i> Liên
                                hệ</a>
                        </div>
                        <div class="profile-intro">
                            <!-- <span class="line-through decoration-4"></span>-->
                            <h3 class="profile-intro_name text-lg font-bold ">
                                {{ !empty($userInfor) ? $userInfor->username : '' }}
                            </h3>
                            <div class="flex flex-wrap gap-x-2 gap-y-2 align-middle pt-1 justify-center md:justify-start">
                            </div>
                        </div>
                        <div class="profile-function at-mobile none-m">
                            <a href="https://docln.net/tin-nhan/moi?to=LinhLinh931993"
                                class="button to-contact button-green"><i class="fas fa-paper-plane"></i> Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <section class="basic-section clear">
                        {{-- <ul class="statistic-top row">
                            <div class="mb-5 flex flex-col flex-1 mx-5">
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm capitalize font-medium text-blue-700 dark:text-white">mới
                                        isekai</span>
                                    <span class="text-sm capitalize font-medium text-blue-700 dark:text-white">học
                                        nghề</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 relative">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center h-5 leading-none rounded-full"
                                        style="width: 0%"></div>
                                    <div class="w-full flex absolute top-0 left-0 justify-between p-0.5 text-white">
                                        <div class="text-xs ml-0.5">Lên cấp</div>
                                        <div class="text-xs">0,00%</div>
                                        <div class="text-xs mr-0.5">Bước 1</div>
                                    </div>
                                </div>
                                <div class="text-xs mt-2 mx-auto">
                                    Cấp 0 (0,00 / 31,25)
                                </div>
                                <div class="text-base mt-2">
                                    Thử nghiệm, chưa dùng chính thức.
                                    <span class="text-sm block text-center mt-5">
                                        Mới Isekai • Học Nghề • Nhà Mạo Hiểm • Chuyên Gia • Đại Sư • Thách Đấu • Quán Quân •
                                        Truyền Kỳ • Sử Thi • Thần Thoại • Vô Địch • Phi Thăng • Thánh Vực • Thần Vực • Hằng
                                        Tinh • Thiên Hà • Đại Vũ Trụ • Đa Vũ Trụ • Siêu Việt • Toàn Trí • Toàn Năng
                                    </span>
                                </div>
                            </div>
                        </ul> --}}
                        <ul class="statistic-top row">
                            <li class="col-6">
                                <div class="statistic-value">
                                    {{ $countChapters }}
                                </div>
                                <div class="statistic-name">Chương đã đăng</div>
                            </li>
                            <li class="col-6">
                                <div class="statistic-value">{{ $countBookmark }}</div>
                                <div class="statistic-name">Đang theo dõi</div>
                            </li>
                            <li class="col-12 mt-2">
                                <div class="statistic-value"><a href="#">{{ $countComment }}</a></div>
                                <div class="statistic-name">Bình luận</div>
                            </li>
                        </ul>
                        <main class="sect-body">
                            <div class="profile-info-item">
                                <span class="info-name"><i class="fas fa-calendar"></i> Tham gia: </span><span
                                    class="info-value">{{ $userInfor->created_at->format('d/m/Y') }}</span>
                            </div>
                        </main>
                    </section>
                </div>
                <div class="col-12 col-md-12 col-lg-9 col-xl-9">
                    <!-- Section for "Truyện đã đăng" -->
                    <section class="profile-showcase">
                        <header><span class="number">{{ $userBooks->count() }}</span><span class="showcase-title">Truyện
                                đã
                                đăng</span></header>
                        <div class="row">
                            @foreach ($userBooks as $book)
                                <div class="col-12 col-md-6">
                                    <div class="showcase-item">
                                        <div class="row">
                                            <div class="series-cover col-4">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('{{ asset(Storage::url($book->book_path)) }}')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="series-info">
                                                    <div class="series-type-wrapper">
                                                        <small class="series-type type-translation">
                                                            {{ $book->is_VIP ? 'Truyện VIP' : 'Truyện thường' }}
                                                        </small>
                                                    </div>
                                                    <h5 class="series-name text-base font-bold">
                                                        <a
                                                            href="{{ route('truyen.truyen', $book->slug) }}">{{ $book->title }}</a>
                                                    </h5>
                                                </div>
                                                <div class="series-status">
                                                    <div class="status-item">
                                                        <span class="status-name">Tình trạng:</span>
                                                        <span
                                                            class="status-value">{{ $book->status == 1 ? 'Đang tiến hành' : 'Đã hoàn thành' }}</span>
                                                    </div>
                                                    <div class="status-item">
                                                        <span class="status-name">Lần cuối:</span>
                                                        <span class="status-value">
                                                            <time class="timeago"
                                                                title="{{ $book->updated_at->format('d/m/Y H:i:s') }}"
                                                                datetime="{{ $book->updated_at }}">{{ $book->updated_at->diffForHumans() }}</time>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <!-- Section for "Truyện đang tham gia" -->
                    <section class="profile-showcase">
                        <header><span class="number">0</span><span class="showcase-title">Truyện đang tham gia</span>
                        </header>
                        <div class="row">
                            @if ($bookHasJoin->isNotEmpty())
                                @foreach ($bookHasJoin as $book)
                                    <div class="col-12 col-md-6">
                                        <div class="showcase-item">
                                            <div class="row">
                                                <div class="series-cover col-4">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio"
                                                            style="background-image: url('{{ asset(Storage::url($book->book_path)) }}')">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="series-info">
                                                        <div class="series-type-wrapper">
                                                            <small class="series-type type-translation">
                                                                {{ $book->is_VIP ? 'Truyện VIP' : 'Truyện thường' }}
                                                            </small>
                                                        </div>
                                                        <h5 class="series-name text-base font-bold">
                                                            <a
                                                                href="{{ route('truyen.truyen', $book->slug) }}">{{ $book->title }}</a>
                                                        </h5>
                                                    </div>
                                                    <div class="series-status">
                                                        <div class="status-item">
                                                            <span class="status-name">Tình trạng:</span>
                                                            <span
                                                                class="status-value">{{ $book->status == 1 ? 'Đang tiến hành' : 'Đã hoàn thành' }}</span>
                                                        </div>
                                                        <div class="status-item">
                                                            <span class="status-name">Lần cuối:</span>
                                                            <span class="status-value">
                                                                <time class="timeago"
                                                                    title="{{ $book->updated_at->format('d/m/Y H:i:s') }}"
                                                                    datetime="{{ $book->updated_at }}">{{ $book->updated_at->diffForHumans() }}</time>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </main>
    <script>
      $(document).on('change', 'input[name="avatar"]', function() {
    let userId = $(this).data('user-id'); // Lấy ID người dùng từ input file
    let form = $(`#avatarForm${userId}`); // Form tương ứng
    let formData = new FormData(form[0]); // Lấy dữ liệu form
    
    $.ajax({
        url: `/user/${userId}/update-avatar`, // API cập nhật avatar
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Đảm bảo CSRF token
        },
        success: function(response) {
            alert('Avatar updated successfully!');
            location.reload(); // Reload để thấy thay đổi
        },
        error: function(xhr, status, error) {
            if (xhr.status === 419) {
                alert('Session expired. Please refresh the page and try again.');
            } else {
                alert('Failed to update avatar');
            }
        }
    });
});


$(document).on('change', 'input[name="background"]', function() {
    let userId = $(this).data('user-id'); // Lấy ID người dùng từ input file
    let form = $(`#backgroundForm${userId}`); // Lấy form tương ứng
    let formData = new FormData(form[0]); // Lấy dữ liệu từ form

    $.ajax({
        url: `/user/${userId}/update-background`, // API cập nhật ảnh nền
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token cho Laravel
        },
        success: function(response) {
            alert('Background updated successfully!');
            location.reload(); // Reload để thấy thay đổi
        },
        error: function(xhr, status, error) {
            if (xhr.status === 419) {
                alert('Session expired. Please refresh the page and try again.');
            } else {
                alert('Failed to update background');
            }
        }
    });
});

    </script>
@endsection
