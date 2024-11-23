@extends('home.layout.master')

<style>
    /* Phong cách cho hộp thoại report (report-modal) */
    .report-modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        /* Điều chỉnh độ tối nhẹ */
    }

    /* Nội dung của hộp thoại report */
    .report-modal-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 400px;
        border-radius: 8px;
        position: relative;
    }

    .report-modal-content button {
        background-color: #4CAF50;
        color: white;
        margin-top: 10px;
        padding: 5px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .report-modal-content button:hover {
        background-color: #45a049;
        /* Màu nền khi hover */
    }

    /* Nút đóng (X) */
    .report-close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 20px;
        cursor: pointer;
    }

    /* Căn chỉnh các phần tử bên trong hộp thoại */
    .report-modal-content h3 {
        margin-top: 0;
    }

    .report-modal-content textarea {
        width: 100%;
    }
</style>

@section('content')
    @include('partials.banner')
    <main id="mainpart" class="project-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb">
                        <span class="breadcrum-level"><a href="/"><i class="fas fa-home"></i></a></span>
                        <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                        <span class="breadcrum-level"><a
                                href="{{ $book->type == 1 ? '/danh-sach?truyendich=1&dangtienhanh=1&tamngung=1&hoanthanh=1&sapxep=tentruyen' : ($book->type == 2 ? '/convert' : ($book->type == 3 ? '/sang-tac' : '/loai-khong-xac-dinh')) }}">
                                {{ $book->type == 1 ? 'Truyện dịch' : ($book->type == 2 ? 'Truyện Convert' : ($book->type == 3 ? 'Truyện sáng tác' : 'Loại truyện không xác định')) }}</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-block clearfix">
                <div class="col-12 col-lg-9 float-left">
                    <section class="feature-section at-series clear">
                        <main class="section-body">
                            <div class="top-part">
                                <div class="row">
                                    <div class="left-column col-12 col-md-3">
                                        <div class="series-cover">
                                            <div class="series-type">
                                                <span>{{ $book->type == 1 ? 'Truyện dịch' : ($book->type == 2 ? 'Truyện Convert' : ($book->type == 3 ? 'Truyện sáng tác' : 'Loại truyện không xác định')) }}</span>
                                            </div>
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('{{ asset(Storage::url($book->book_path)) }}')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-9 flex flex-col">
                                        <div class="flex-1">
                                            <div class="series-name-group">
                                                <span class="series-name">
                                                    <a href="{{ route('truyen.truyen', $book->slug) }}">
                                                        {{ $book->title }}</a>
                                                </span>
                                            </div>
                                            <div class="series-information mb-0 flex flex-col">
                                                <div class="series-gernes" x-data="{ more: false }">
                                                    @foreach ($book->genres as $item)
                                                        <a class="series-gerne-item"
                                                            href="https://datn.test/the-loai/{{ $item->slug }}">{{ $item->name }}</a>
                                                    @endforeach
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-name">Tác giả:</span>
                                                    <span class="info-value "><a
                                                            href="https://datn.test/tac-gia?{{ $book->author }}">{{ $book->author }}</a></span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-name">Họa sĩ:</span>
                                                    <span class="info-value"><a
                                                            href="https://datn.test/hoa-si?{{ $book->painter }}">{{ $book->painter }}</a></span>
                                                </div>

                                                <div class="info-item">
                                                    <span class="info-name">Tình trạng:</span>
                                                    <span class="info-value">
                                                        <a href="https://datn.test/truyen-dang-tien-hanh">Đang tiến hành(sẽ
                                                            tạo trang riêng sau)</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="side-features flex-none">
                                            <div class="row">
                                                <div class="col-4 col-md feature-item width-auto-xl">

                                                    <form action="{{ route('book.like', $book->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="side-feature-button button-follow follow">
                                                            @if (auth()->user() &&
                                                                    auth()->user()->likedBooks()->where('book_id', $book->id)->exists())
                                                                <span class="block feature-value" id="favorite-icon">
                                                                    <i class="fas fa-heart"></i>
                                                                </span>
                                                            @else
                                                                <span class="block feature-value" id="favorite-icon">
                                                                    <i class="far fa-heart"></i>
                                                                </span>
                                                            @endif
                                                            <span class="block feature-name">{{ $book->like }}</span>
                                                        </button>
                                                    </form>
                                                </div>

                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <div class="series-rating rated">
                                                        <a href="/rating/{{ $book->slug }}">
                                                            <label for="open-rating"
                                                                class="side-feature-button button-rate">
                                                                <span class="block feature-value"><i
                                                                        class="far fa-star"></i></span>
                                                                <span class="block feature-name">Đánh giá</span>
                                                            </label>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <div class="catalog-icon side-feature-button">
                                                        <span class="block feature-value"><i class="fas fa-list"></i></span>
                                                        <span class="block feature-name">Mục lục</span>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <div onclick="autoPurchase({{ $book->id }})"
                                                        class="catalog-icon side-feature-button">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-cart-plus"></i></span>
                                                        <span class="block feature-name">
                                                            <button class="btn btn-primary">Mua tự động</button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <a href="#series-comments" class="side-feature-button">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-comments"></i></span>
                                                        <span class="block feature-name">Bàn luận</span>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <label for="open-report" class="side-feature-button" id="reportButton">
                                                        <span class="block feature-value"><i class="fas fa-flag"></i></span>
                                                        <span class="block feature-name">Report</span>
                                                    </label>
                                                </div>
                                                <!-- Hộp thoại báo cáo -->
                                                <div id="reportModal" class="report-modal" onclick="closeOutsideBox(event)">
                                                    <div class="report-modal-content">
                                                        <span class="report-close"
                                                            onclick="toggleReportBox()">&times;</span>
                                                        <h3>Vui lòng chọn lý do (bắt buộc):</h3>
                                                        <label><input type="checkbox" name="error"
                                                                value="Nội dung gây sốc, phản cảm"> Nội dung gây sốc, phản
                                                            cảm</label><br>
                                                        <label><input type="checkbox" name="error"
                                                                value="Thù ghét và quấy rối"> Thù ghét và quấy
                                                            rối</label><br>
                                                        <label><input type="checkbox" name="error"
                                                                value="Chính trị, tôn giáo"> Chính trị, tôn
                                                            giáo</label><br>
                                                        <label><input type="checkbox" name="error" value="Đạo văn"> Đạo
                                                            văn</label><br>
                                                        <label><input type="checkbox" name="error" value="Bản quyền">
                                                            Bản quyền</label><br>
                                                        <label><input type="checkbox" name="error" value="Khác">
                                                            Khác</label><br>

                                                        <h3>Mô tả chi tiết:</h3>
                                                        <textarea id="user-note" rows="4" placeholder="Mô tả chi tiết..."></textarea><br>

                                                        <input type="hidden" id="book_id"
                                                            value="{{ $book->id }}">
                                                        <button onclick="submitReport()">Gửi</button>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-4 col-md feature-item width-auto-xl">
                                                    <label for="open-sharing" class="side-feature-button">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-share-alt"></i></span>
                                                        <span class="block feature-name">Chia sẻ</span>
                                                    </label>
                                                    <input type="checkbox" id="open-sharing" />
                                                    <div class="sharing-box">
                                                        <a x-data href="#" class="sharing-item"
                                                            @click.prevent="window.navigator.clipboard.writeText('https://docln.net/truyen/18997'); $store.toast.show('Copy thành công!')">Link
                                                            rút gọn</a>
                                                        <a class="sharing-item"
                                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdocln.net%2Ftruyen%2F18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay"
                                                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        <a class="sharing-item"
                                                            href="https://twitter.com/intent/tweet?text=Cô nàng Gyaru đột nhiên tiếp cận tôi sau khi tôi sửa xe đạp cho cô ấy&url=https%3A%2F%2Fdocln.net%2Ftruyen%2F18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay"
                                                            target="_blank"><i class="fab fa-twitter"></i></a>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-part">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row statistic-list">
                                            @php
                                                use Carbon\Carbon;
                                                use Carbon\CarbonInterval;
                                                use Illuminate\Support\Facades\App;

                                                App::setLocale('vi'); // Đặt ngôn ngữ là tiếng Việt

                                                $updatedAt = Carbon::parse($book->updated_at);
                                                CarbonInterval::setLocale('vi'); // Đặt ngôn ngữ cho CarbonInterval
                                            @endphp

                                            <div class="col-12 col-md-3 statistic-item block-wide at-mobile">
                                                <div class="statistic-name">Lần cuối</div>
                                                <div class="statistic-value">
                                                    <time class="timeago" title="{{ $updatedAt->format('d/m/Y H:i:s') }}"
                                                        datetime="{{ $updatedAt->toIso8601String() }}">
                                                        {{ $updatedAt->diffForHumans() }}
                                                    </time>
                                                </div>
                                            </div>
                                            <div class="col-4 col-md-3 statistic-item">
                                                <div class="statistic-name">Số từ</div>
                                                <div class="statistic-value">{{ $book->word_count ?? 0 }}</div>

                                            </div>

                                            <div class="col-4 col-md-3 statistic-item">
                                                <div class="statistic-name">Đánh giá</div>
                                                <div class="statistic-value">5,00 / <small>2</small></div>
                                            </div>
                                            <div class="col-4 col-md-3 statistic-item">
                                                <div class="statistic-name">Lượt xem</div>
                                                <div class="statistic-value">{{ $book->view }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-wrapper col-12">
                                        <div class="series-summary">
                                            <h4 class="font-bold">Tóm tắt</h4>
                                            <div class="summary-content">
                                                {!! $book->description !!}
                                            </div>
                                            <div class="summary-more none more-state">
                                                <div class="see_more">Xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </section>
                </div>
                <div id="rd-sidebar" class="col-12 col-lg-3 float-right">
                    <div class="row top-group">
                        <div class="col-12 no-push push-3-m col-md-6 no-push-l col-lg-12">
                            <section class="series-users">
                                <main>
                                    <div class="series-owner group-mem">
                                        <img width="50px" height="50px"
                                            src="{{ asset($book->user->avatar_url ?? 'img/noava.png') }}"
                                            alt="Poster's avatar">
                                        <div class="series-owner-title">
                                            <span class="series-owner_name"><a
                                                    href="{{ route('user.books', $book->user_id) }}">{{ $book->user->username }}</a></span>
                                        </div>
                                    </div>
                                    <div class="fantrans-section">
                                        <div class="fantrans-name">Nhóm dịch</div>
                                        <div class="fantrans-value"><a
                                                href="{{ route('group.showU', $book->group->slug) }}">{{ $book->group->name }}</a>
                                        </div>
                                    </div>
                                    <div class="owner-donate" style="padding: 0">
                                        <!-- <span class="donate-intro">Bạn muốn tiến độ đều hơn ?</span>
                                                                                                                                                                                                            <span class="button button-red" onclick="alert('Chức năng đang được hoàn thiện')">Hãy Ủng hộ !!</span> -->
                                    </div>
                                </main>
                            </section>
                        </div>
                    </div>



                    <section class="series-note basic-section gradual-mobile">
                        <header class="sect-header"><span class="sect-title">Chú thích thêm</span><span
                                class="mobile-icon"><i class="fas fa-chevron-down"></i></span></header>
                        <main class="d-lg-block">
                            <div class="long-text" style='word-wrap: break-word;'>
                                {!! $book->note !!}
                            </div>
                        </main>
                    </section>



                    <section class="basic-section gradual-mobile">
                        <header class="sect-header"><span class="sect-title">Thảo luận</span><span class="mobile-icon"><i
                                    class="fas fa-chevron-down"></i></span></header>
                        <main class="d-lg-block">
                            <div class="text-right pad-10">
                                <a class="button button-green"
                                    href="https://docln.net/action/page/create?series_id=18997">
                                    <i class="fas fa-plus"></i> Tạo bài viết
                                </a>
                            </div>
                        </main>
                    </section>

                    <section id='list-vol' class="none list_vol-section">
                        <div class="list-volume-wrapper basic-section">
                            <header class="sect-header"><span class="sect-title">Mục lục</span></header>
                            <span class="list-vol_off">
                                <i class="fas fa-times"></i>
                            </span>
                            <ol class="list-volume unstyled no-margin no-padding">

                                @foreach ($book->episodes as $item)
                                    <li data-scrollTo="#volume_{{ $item->id }}"><span
                                            class="list_vol-order">{{ $loop->index }}.</span><span
                                            class="list_vol-title">{{ $item->title }}</span>
                                    </li>
                                @endforeach

                            </ol>
                        </div>
                    </section>
                </div>
                <div class="col-12 col-lg-9 float-left">
                    <div style="text-align: center; margin: 0 auto 10px auto;">
                    </div>

                    <section id="series-reviews" class="basic-section">
                        <header class="sect-header tab-list">
                            <span class="sect-title tab-title" data-tab-index="1">Reviews mới</span></span>
                        </header>
                        <div class="overflow-hidden shadow">
                            <ul role="list" class="">
                                @foreach ($ratings as $item)
                                    <li>
                                        <a href="https://docln.net/truyen/18997/danh-gia"
                                            class="block hover:bg-gray-50 dark:hover:!bg-zinc-700">
                                            <div class="px-4 py-4 sm:px-6">
                                                <div class="flex items-center justify-between">
                                                    <p class="truncate text-sm font-bold text-indigo-600 dark:text-white">
                                                        {{ !empty($item->user->full_name) ? $item->user->full_name : $item->user->username }}
                                                    </p>
                                                    <div class="ml-2 flex flex-shrink-0">
                                                        <div class="d-flex justify-content-around">
                                                            @for ($i = 0; $i < $item->rating; $i++)
                                                                <div class="text-base text-yellow-400">
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-2 sm:flex sm:justify-between">
                                                    <div class="sm:flex">
                                                        <p class="flex items-center text-sm text-gray-500 dark:text-white">
                                                            <svg class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            {{ !empty($item->comment) ? $item->comment : 'Không có nội dung' }}
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 dark:text-white">
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <p>
                                                            <time class="topic-time timeago" title="27-08-2024 12:22:58"
                                                                datetime="{{ $item->created_at }}"></time>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>


                    @if ($isAuthor)
                        <h3>Thống kê mua truyện</h3>

                        <!-- Biểu đồ thống kê -->
                        <canvas id="purchaseStatisticsChart"></canvas>

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            const ctx = document.getElementById('purchaseStatisticsChart').getContext('2d');
                            const purchaseStatisticsChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: @json($purchaseStats['dates']), // Mảng các ngày
                                    datasets: [{
                                            label: 'Số lượt mua',
                                            data: @json($purchaseStats['purchases']), // Dữ liệu số lượt mua theo ngày
                                            borderColor: '#FF6384',
                                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                            pointBackgroundColor: '#FF6384',
                                            borderWidth: 2,
                                            pointRadius: 5
                                        },
                                        {
                                            label: 'Yêu thích',
                                            data: @json($purchaseStats['likes']), // Dữ liệu yêu thích theo ngày
                                            borderColor: '#36A2EB',
                                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                            pointBackgroundColor: '#36A2EB',
                                            borderWidth: 2,
                                            pointRadius: 5
                                        },
                                        {
                                            label: 'Bình luận',
                                            data: @json($purchaseStats['comments']), // Dữ liệu bình luận theo ngày
                                            borderColor: '#FFCE56',
                                            backgroundColor: 'rgba(255, 206, 86, 0.2)',
                                            pointBackgroundColor: '#FFCE56',
                                            borderWidth: 2,
                                            pointRadius: 5
                                        },
                                        {
                                            label: 'Lượt xem',
                                            data: @json($purchaseStats['views']), // Dữ liệu lượt xem theo ngày
                                            borderColor: '#4BC0C0',
                                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                            pointBackgroundColor: '#4BC0C0',
                                            borderWidth: 2,
                                            pointRadius: 5
                                        }
                                    ]
                                },
                                options: {
                                    responsive: true,
                                    plugins: {
                                        legend: {
                                            display: true
                                        }
                                    },
                                    scales: {
                                        x: {
                                            title: {
                                                display: true,
                                                text: 'Ngày'
                                            },
                                            grid: {
                                                display: true
                                            }
                                        },
                                        y: {
                                            title: {
                                                display: true,
                                                text: 'Số lượng'
                                            },
                                            beginAtZero: true,
                                            grid: {
                                                display: true
                                            }
                                        }
                                    }
                                }
                            });
                        </script>

                        <!-- Bảng thống kê chi tiết -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Loại thống kê</th>
                                    <th>Tổng cộng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Số lượt mua</td>
                                    <td>{{ $purchaseStats['total_purchases'] }}</td>
                                </tr>
                                <tr>
                                    <td>Số yêu thích</td>
                                    <td>{{ $purchaseStats['total_likes'] }}</td>
                                </tr>
                                <tr>
                                    <td>Số bình luận</td>
                                    <td>{{ $purchaseStats['total_comments'] }}</td>
                                </tr>
                                <tr>
                                    <td>Lượt xem</td>
                                    <td>{{ $purchaseStats['total_views'] ?? 0 }}</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif

                    @php
                        $allChaptersPurchased = $book->allChaptersPurchased(auth()->id());
                    @endphp
                    @if (Auth::id() != $book->user_id)
                        {{-- {{ dd(!$allChaptersPurchased) }} --}}

                        @if (!$allChaptersPurchased)
                            <form style="width: 100%; text-align: center"
                                action="{{ route('books.purchaseAllChapters', $book->id) }}" method="POST"
                                onsubmit="return confirm('Bạn có chắc chắn muốn mua tất cả chương trong truyện với giá {{ $totalPrice }}?');">
                                @csrf
                                <button
                                    style="background-color: #f56565; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 1rem; border: none;"
                                    type="submit" class="btn btn-primary">
                                    Mua tất cả chương trong truyện với giá
                                </button>
                                <a
                                    style="background-color: #3490dc; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 1rem; border: none;">
                                    {{ $totalPrice }}
                                </a>
                                <br><br>
                            </form>
                        @endif
                    @endif


                    @include('story.partials.noti')


                    @foreach ($book->episodes->sortBy('order') as $item)
                        {{-- Sắp xếp theo order --}}
                        <section class="volume-list at-series basic-section volume-mobile gradual-mobile ">
                            <header id="volume_{{ $item->id }}" class="sect-header"
                                style="display: flex; align-items: center;">
                                <span class="mobile-icon"><i class="fas fa-chevron-down"></i></span>
                                <span class="sect-title" style="flex-grow: 1; margin-right: 10px;">
                                    {{ $item->title }} <span style="color: red">*</span>
                                </span>
                                @if (!$allChaptersPurchased && Auth::id() !== $item->user_id)
                                    <span class="buy-all-button">
                                        <form action="{{ route('episode.purchase', $item->id) }}" method="POST"
                                            style="display: inline;"
                                            onsubmit="return confirm('Bạn có chắc chắn muốn mua tất cả các chương không?');">
                                            @csrf
                                            <button type="submit"
                                                style="background-color: #f56565; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 1rem; border: none;">
                                                Mua tất cả chương
                                            </button>
                                        </form>
                                    </span>
                                @endif
                            </header>
                            <main class="d-lg-block">
                                <div class="row">
                                    <div class="col-12 col-md-2">
                                        <div class="volume-cover">
                                            <a href="{{ route('truyen.tap', [$book->slug, $item->slug]) }}">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('{{ asset(Storage::url($item->episode_path)) }}')">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <form id="addChaptersForm" method="POST"
                                            action="{{ route('cart.addMultiple') }}">
                                            @csrf
                                            <ul class="list-chapters at-series">
                                                @foreach ($item->chapters->sortBy('order') as $index =>$chapter)
                                                    <li class="{{ $index >= 6 ? 'none' : '' }}">
                                                        <div class="chapter-name"
                                                            style="display: flex; align-items: center;">
                                                            {{-- Hiển thị icon nếu chương chứa hình ảnh --}}
                                                            @if ($chapter->contains_image)
                                                                <i class="fas fa-image" aria-hidden="true"
                                                                    title="Có chứa ảnh"></i>
                                                            @endif
                                                            {{-- Kiểm tra giá của chương --}}
                                                            @if ($chapter->price == 0)
                                                                {{-- Nếu chương có giá 0đ, hiển thị liên kết đọc miễn phí --}}
                                                                <a 
                                                                    href="{{ route('truyen.chuong', [$book->slug, $chapter->slug]) }}"
                                                                    title="{{ $chapter->title }}">
                                                                    {{ $chapter->title }} (Miễn phí)
                                                                </a>
                                                            @else
                                                                {{-- Kiểm tra người dùng đã mua chương chưa --}}
                                                                @if (auth()->check() &&
                                                                        auth()->user()->hasPurchased($chapter->id))
                                                                    {{-- Nếu đã mua, hiển thị liên kết đọc chương --}}
                                                                    <a href="{{ route('truyen.chuong', [$book->slug, $chapter->slug]) }}"
                                                                        title="{{ $chapter->title }}">
                                                                        {{ $chapter->title }}
                                                                    </a>
                                                                @else
                                                                    {{-- Nếu chưa mua, hiển thị nút mua chương --}}
                                                                    <span class="chapter-locked"
                                                                        title="Bạn cần mua chương để đọc"
                                                                        style="display: flex; align-items: center;">
                                                                        <a href="{{ route('truyen.chuong', [$book->slug, $chapter->slug]) }}"
                                                                            title="{{ $chapter->title }}">
                                                                            {{ $chapter->title }}
                                                                        </a>
                                                                        <span
                                                                            style="margin-left: 10px;">{{ $chapter->price }}
                                                                            coins</span>
                                                                    </span>
                                                                @endif
                                                            @endif
                                                        </div>
                                                        {{-- Hiển thị thời gian tạo chương --}}
                                                        <div class="chapter-time">
                                                            {{-- Hiển thị checkbox nếu chương chưa mua --}}
                                                            @if (
                                                                $chapter->price > 0 &&
                                                                    (!auth()->check() ||
                                                                        !auth()->user()->hasPurchased($chapter->id)))
                                                                <input type="checkbox" name="chapters[]"
                                                                    value="{{ $chapter->id }}"
                                                                    style="margin-right: 10px;">
                                                            @endif
                                                            {{ $chapter->created_at->format('d/m/Y') }}
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>

                                            <div class="mobile-more" >
                                                <div class="see_more">
                                                    <span style="padding-left: 30px">Xem tiếp</span>
                                                </div>
                                            </div>

                                            @php
                                                $allChaptersFreeOrPurchased = $item->chapters->every(function (
                                                    $chapter,
                                                ) {
                                                    return $chapter->price == 0 ||
                                                        (auth()->check() &&
                                                            auth()
                                                                ->user()
                                                                ->hasPurchased($chapter->id));
                                                });
                                            @endphp
                                            @if (!$allChaptersFreeOrPurchased && Auth::id() !== $item->user_id)
                                                <button type="submit" class="btn btn-secondary mt-3"
                                                    style="background-color: #3490dc; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 1rem; border: none;">
                                                    Thêm các chương đã chọn vào giỏ hàng
                                                </button>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </main>
                        </section>
                    @endforeach

                    <div id="purchaseModal" class="purchase-modal" style="display:none;">
                        <div class="purchase-modal-content">
                            <span class="close" onclick="closeModal()">&times;</span>
                            <h2 id="modalTitle">Xác nhận mua chương</h2>
                            <p id="modalContent">Bạn có chắc chắn muốn mua chương này với giá <span
                                    id="chapterPrice"></span> coin?</p>
                            <a href="#" id="confirmPurchaseButton" class="btn btn-primary">Xác nhận</a>
                            <div style="display: block; width: 10px;"></div>
                            <button onclick="closeModal()" class="btn btn-secondary">Hủy</button>
                        </div>
                    </div>



                    <div wire:snapshot="{&quot;data&quot;:{&quot;readyToLoad&quot;:false,&quot;series&quot;:[null,{&quot;class&quot;:&quot;App\\Models\\Series&quot;,&quot;key&quot;:18997,&quot;s&quot;:&quot;mdl&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;FKmR9yuSjC3dnTcnNEsm&quot;,&quot;name&quot;:&quot;pub.series.view.components.relevance&quot;,&quot;path&quot;:&quot;truyen\/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;vi&quot;},&quot;checksum&quot;:&quot;16ba6b08dc04ac8d46368687a31fb2c02025c6e1d6060cdbd828db7e3347cd7d&quot;}"
                        wire:effects="[]" wire:id="FKmR9yuSjC3dnTcnNEsm" wire:init="loadRelevantSeries">
                        <section class="basic-section gradual-mobile">
                            <header class="sect-header"><span class="sect-title">Có thể bạn quan tâm</span><span
                                    class="mobile-icon"><i class="fas fa-chevron-down"></i></span></header>
                            <main class="d-lg-block">
                                <ul class="others-list">
                                    <div class="row">
                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </ul>
                                <div class="mobile-more none">
                                    <div class="see_more">
                                        <span>Xem thêm</span>
                                    </div>
                                </div>
                            </main>
                        </section>
                    </div>
                    <section id="series-comments" class="basic-section">
                        <header class="sect-header tab-list">
                            <span class="sect-title tab-title" data-tab-index="1">Tổng bình luận <span
                                    class="comments-count">({{ $totalComments }})</span></span>
                        </header>
                        <main id="fbcmt_root" class="comment-wrapper d-lg-block clear">
                            <span style="padding: 10px; display: inline-block;">Báo cáo bình luận không phù hợp ở <a
                                    href="/thao-luan/619-bao-cao-binh-luan" style="color: blue">đây</a></span>
                            <div id="tab-content-1" class="tab-content clear">
                                <section class="ln-comment">
                                    <header>
                                        <h3 class="text-lg font-bold dark:text-white">{{ $totalComments }} Bình luận </h3>
                                        <!-- <i id="refresh_comment" class="fas fa-refresh" aria-hidden="true" style="margin-left: 10px; font-size: 18px"></i></h3> -->
                                    </header>

                                    <main class="ln-comment-body">
                                        <div id="ln-comment-submit" class="ln-comment-form clear">
                                            @if (Auth::check())
                                                <form action="{{ route('addComment', $book->id) }}" method="POST"
                                                    class="comment_form">
                                                    @csrf
                                                    <textarea name="content" class="" required></textarea>

                                                    <div class="comment_toolkit clear">
                                                        <input class="button" type="submit" value="Đăng bình luận">
                                                    </div>
                                                </form>
                                            @else
                                                <p><strong style="font-size: 15px">Bạn phải <a
                                                            href="{{ route('login') }}" style="color: red">đăng nhập</a>
                                                        để bình luận.</strong></p>
                                            @endif
                                        </div>

                                        @foreach ($comments as $comment)
                                            @if (!$comment->is_deleted)
                                                <div class="ln-comment-group">
                                                    <div id="ln-comment-2559913" class="ln-comment-item mt-3 clear"
                                                        data-comment="2559913" data-parent="2559913" x-data="{ showReplies: false, showReplyForm: false }">
                                                        <div class="flex gap-1 max-w-full">
                                                            <div class="w-[50px]">
                                                                <div class="mx-1 my-1">
                                                                    <img src="{{ asset(Auth::user()->avatar_url ?? 'img/noava.png') }}"
                                                                        class="w-full rounded-full" />
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ring-2 ring-cyan-500 dark:ring-cyan-900">
                                                                <div class="flex min-w-0 flex-col px-2">
                                                                    <div class="flex align-top justify-between">
                                                                        <div
                                                                            class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                            <div class="self-center">
                                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                                    href="">{{ $comment->user->username }}</a>
                                                                            </div>
                                                                            {{-- <div class="self-center">
                                                                                <div
                                                                                    class="flex gap-1 rounded-sm shadow-[inset_0px_0px_0px_2px_#E63950] dark:bg-[#E63950]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#E63950] dark:text-[#FDCB02]">
                                                                                    <img class="my-auto h-[14px]"
                                                                                        src="/img/badge/owner.png" />
                                                                                    <div class="leading-4">CHỦ THỚT</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="self-center">
                                                                                <div
                                                                                    class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                                    <img class="my-auto h-[14px]"
                                                                                        src="/img/badge/trans5.png" />
                                                                                    <div class="leading-4">TRANS</div>
                                                                                </div>
                                                                            </div> --}}
                                                                        </div>
                                                                        @if (Auth::check())
                                                                            <div
                                                                                class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer">
                                                                                <div @click="showReplies = !showReplies">
                                                                                    <i
                                                                                        :class="showReplies ? 'fas fa-angle-up' :
                                                                                            'fas fa-angle-down'"></i>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="ln-comment-content long-text">
                                                                        {{ $comment->content }}
                                                                    </div>
                                                                    <div
                                                                        class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                        <a href="#">
                                                                            <time class="timeago" title="22-08-2024 09:59:00"
                                                                                datetime="{{ $comment->created_at }}">
                                                                                {{ $comment->created_at->diffForHumans() }}
                                                                            </time>
                                                                        </a>

                                                                        @if (Auth::check())
                                                                            <a @click.prevent="showReplyForm = !showReplyForm"
                                                                                class="self-center visible-toolkit-item cursor-pointer">
                                                                                <i class="fas fa-comment me-1"></i>
                                                                                <span class="likecount font-semibold">Trả
                                                                                    lời</span>
                                                                            </a>
                                                                        @endif

                                                                        <a class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                            @if (Auth::check() && Auth::user()->id === $comment->user_id)
                                                                                <form action="{{ route('deleteComment', $comment->id) }}" method="POST" class="inline">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit" class="likecount font-semibold">
                                                                                        <i class="fas fa-trash"></i> Xóa
                                                                                    </button>
                                                                                </form>
                                                                            @endif
                                                                        </a>

                                                                        <a href="">
                                                                            <span class="likecount font-semibold">{{ $comment->replies->count() }} đã trả
                                                                                lời</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div x-show="showReplyForm"
                                                            class="ln-comment-reply ln-comment-form mt-3"
                                                            id="reply-form-{{ $comment->id }}" x-cloak>
                                                            <div class="ln-comment-reply ln-comment-form mt-3"
                                                                id="reply-form-{{ $comment->id }}">
                                                                @if (Auth::check())
                                                                    <form action="{{ route('addComment', $book->id) }}"
                                                                        method="POST" class="reply_form">
                                                                        @csrf
                                                                        <textarea name="content" class="comment_reply form-control" required>{{ '@' . $comment->user->username . ': ' }}</textarea>
                                                                        <input type="hidden" name="parent_id"
                                                                            value="{{ $comment->id }}">
                                                                        <div class="comment_toolkit clear">
                                                                            <input class="button" type="submit"
                                                                                value="Trả lời">
                                                                        </div>
                                                                    </form>
                                                                @else
                                                                    <p><strong>Bạn phải <a href="{{ route('login') }}"
                                                                                style="color: red">đăng nhập</a> để trả lời
                                                                            bình luận.</strong></p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div x-show="showReplies" class="mt-3" x-cloak>
                                                            <!-- Lặp qua các replies -->
                                                            @if ($comment->replies->isNotEmpty())
                                                                @include('partials.comment', [
                                                                    'comments' => $comment->replies,
                                                                ])
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="ln-comment-group">
                                                    <div id="ln-comment-2559913" class="ln-comment-item mt-3 clear"
                                                        data-comment="2559913" data-parent="2559913" x-data="{ showReplies: false, showReplyForm: false }">
                                                        <div class="flex gap-1 max-w-full">
                                                            <div class="w-[50px]">
                                                                <div class="mx-1 my-1">
                                                                    <img src="{{ asset(Auth::user()->avatar_url ?? 'img/noava.png') }}"
                                                                        class="w-full rounded-full" />
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ring-2 ring-cyan-500 dark:ring-cyan-900">
                                                                <div class="flex min-w-0 flex-col px-2">
                                                                    <div class="flex align-top justify-between">
                                                                        <div
                                                                            class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                            <div class="self-center">
                                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                                    href="">{{ $comment->user->username }}</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer">
                                                                            <div @click="showReplies = !showReplies">
                                                                                <i :class="showReplies ? 'fas fa-angle-up' : 'fas fa-angle-down'"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment">
                                                                        <p><i>Bình luận này đã bị xoá bởi {{ $comment->user->username}}.</i></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    {{ $comments->links() }}
                                    </main>
                                    {{-- @include('layouts.TinyMCEscript') --}}
                                </section>
                            </div>
                        </main>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function confirmPurchaseEpisode(episodeTitle, episodeId) {
                document.getElementById('modalTitle').innerText = 'Xác nhận mua tất cả chương trong tập: ' +
                    episodeTitle;
                document.getElementById('modalContent').innerText =
                    'Bạn có chắc chắn muốn mua tất cả các chương trong tập này?';
                document.getElementById('confirmPurchaseForm').action = '/purchase/episode/' + episodeId;
                document.getElementById('purchaseModal').style.display = 'block';
            }

            function closeModal() {
                document.getElementById('purchaseModal').style.display = 'none';
            }
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    const chapterId = this.dataset.chapterId;

                    fetch('/cart/add', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({
                                chapter_id: chapterId
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                alert(data.message);
                                updateCartCount(); // Update cart count after adding item
                            } else {
                                alert(data.message);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });

        // Bật tắt hộp thoại Report Truyện
        document.getElementById("reportButton").addEventListener("click", toggleReportBox);

        function toggleReportBox() {
            var reportBox = document.getElementById("reportModal");
            reportBox.style.display = reportBox.style.display === "block" ? "none" : "block";
        }

        function closeOutsideBox(event) {
            if (event.target === document.getElementById("reportModal")) {
                toggleReportBox();
            }
        }

        // Lấy dữ liệu báo cáo
        function submitReport() {
            // Lấy lý do đã chọn, mô tả và book_id
            const reasons = Array.from(document.querySelectorAll('input[name="error"]:checked')).map(el => el.value);
            const description = document.getElementById('user-note').value;
            const bookId = document.getElementById('book_id').value;

            // Kiểm tra nếu lý do trống
            if (reasons.length === 0) {
                return alert('Vui lòng chọn ít nhất một lý do.');
            }

            // Gửi AJAX đến backend
            fetch('/report', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        reasons,
                        description,
                        book_id: bookId
                    })
                })
                .then(response => response.text())
                .then(text => {
                    try {
                        const data = JSON.parse(text);
                        alert('Báo cáo của bạn đã được gửi.');
                        toggleReportBox(); // Đóng hộp thoại báo cáo
                    } catch (e) {
                        alert('Có lỗi xảy ra: ' + text);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Có lỗi xảy ra.');
                });
        }
    </script>
    <script>
        function autoPurchase(bookId) {
            // Make an AJAX call to the backend to handle auto purchase
            fetch('/auto-purchase', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        book_id: bookId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Đăng ký tự động mua thành công!');
                    } else {
                        alert('Đã đăng ký tự động mua truyện này rồi');
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
@endsection
