@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        .tab-custom {
            line-height: 25px;
            font-size: 16px;
            font-weight: 600;
            max-width: fit-content !important;
            height: fit-content !important;
            padding: 5px 15px !important;
            margin: 0 5px 0 0;
            color: black;
            background: white !important;
        }

        body {
            background: white;
        }
    </style>
    <main id="mainpart" class="browserpage" style="min-height: 212px;">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span style="font-size: 22px" class="page-name"><i class="fas fa-circle"></i>Tổng quát</span>
                </div>
            </div>
        </header>

        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="container">
            <div role="tablist" class="tabs tabs-lifted">
                <input type="radio" name="my_tabs_2" role="tab" class="tab tab-custom " aria-label="Lịch sử đọc"
                    checked="checked" />
                <div role="tabpanel" class="tab-content rounded-box p-6">
                    <main class="sect-body row">
                        @if (Auth::check())
                            {{-- Display reading history for logged-in users --}}
                            @foreach ($readingHistories as $history)
                                @php
                                    $book = $history->book;
                                    $chapter = $history->chapter;
                                @endphp
                                <div class="thumb-item-flow col-4 col-lg-2">
                                    <div class="thumb-wrapper">
                                        <a class="link at-cover"
                                            href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}"
                                            title="{{ $book->title ?? '' }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('{{ asset(Storage::url($book->book_path ?? 'default/path/to/image.jpg')) }}')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="{{ $chapter->title ?? '' }}">
                                                <a href="{{ route('truyen.chuong', ['slug' => $book->slug ?? '', 'chapter_slug' => $chapter->slug ?? '']) }}"
                                                    title="{{ $chapter->title ?? '' }}">
                                                    {{ $chapter->title ?? '' }}
                                                </a>
                                            </div>
                                            <div class="thumb_attr volume-title"><a
                                                    href="#">{{ $book->title ?? '' }}</a>
                                            </div>
                                            <div class="thumb_title text-center pad-top-10" style="cursor: pointer">
                                                <i class="fas fa-times"></i> Xóa
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="#"
                                            title="{{ $book->title ?? '' }}">{{ $book->title ?? '' }}</a></div>
                                </div>
                            @endforeach
                        @else
                            {{-- Display reading history for guest users --}}
                            @foreach ($readingHistories as $history)
                                @php
                                    $book = $history['book'];
                                    $chapter = $history['chapter'];
                                @endphp
                                <div class="thumb-item-flow col-4 col-lg-2">
                                    <div class="thumb-wrapper">
                                        <a class="link at-cover"
                                            href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}"
                                            title="{{ $book->title ?? '' }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('{{ asset(Storage::url($book->book_path ?? 'default/path/to/image.jpg')) }}')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="{{ $chapter->title ?? '' }}">
                                                <a href="{{ route('truyen.chuong', ['slug' => $book->slug ?? '', 'chapter_slug' => $chapter->slug ?? '']) }}"
                                                    title="{{ $chapter->title ?? '' }}">
                                                    {{ $chapter->title ?? '' }}
                                                </a>
                                            </div>
                                            <div class="thumb_attr volume-title">
                                                <a
                                                    href="{{ route('truyen.tap', ['slug' => $book->slug ?? '', 'episode_slug' => $chapter->episode->slug ?? '']) }}">{{ $chapter->episode->title ?? '' }}</a>
                                            </div>
                                            <div class="thumb_title text-center pad-top-10" id='delete_history_for_user' data-book_id="{{ $history->id }}" style="cursor: pointer">
                                                <i class="fas fa-times"></i> Xóa
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}"
                                            title="{{ $book->title ?? '' }}">
                                            {{ $book->title ?? '' }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </main>
                </div>
                @auth
                    <input type="radio" name="my_tabs_2" role="tab" class="tab tab-custom" aria-label="Lịch sử mua" />
                    <div role="tabpanel" class="tab-content rounded-box p-6">
                        @if ($purchasedStories->isEmpty())
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên truyện</th>
                                    <th>Chương</th>
                                    <th>Giá</th>
                                    <th>Ngày mua</th>
                                </tr>
                            </thead>
                            <tbody>
                            <p>Bạn chưa mua truyện nào.</p>
                            </tbody>
                        </table>
                        @else
                            <table id='table_history' class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên truyện</th>
                                        <th>Chương</th>
                                        <th>Giá</th>
                                        <th>Ngày mua</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchasedStories as $index => $purchasedStory)
                                        <tr>

                                            <td>{{ $index + 1 }}</td>
                                            <td><a
                                                    href="{{ route('truyen.truyen', $purchasedStory->book->slug) }}">{{ $purchasedStory->book->title ?? 'Truyện không tồn tại' }}</a>
                                            </td>
                                            <td><a
                                                    href="{{ route('truyen.chuong', [$purchasedStory->book->slug, $purchasedStory->chapter->slug]) }}">{{ $purchasedStory->chapter->title }}</a>
                                            </td>
                                            <td>{{ number_format($purchasedStory->price, 0, ',', '.') }} Coin</td>
                                            <td>{{ \Carbon\Carbon::parse($purchasedStory->purchase_date)->format('d/m/Y H:i') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>

                    <input type="radio" name="my_tabs_2" role="tab" class="tab tab-custom" aria-label="Lịch sử nạp" />
                    <div role="tabpanel" class="tab-content rounded-box p-6">
                        <div class="col-12">
                            <div class="pt-5 mt-5" style="margin-top: 3.25rem !important"></div>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã giao dịch</th>
                                        <th>Số tiền nạp</th>
                                        <th>Số coin nhận</th>
                                        <th>Hình thức nạp coin</th>
                                        <th>Thời gian nạp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($dataHistory))
                                        @foreach ($dataHistory as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->transaction_id }}</td>
                                                <td>{{ number_format($item->amount, 0, ',', '.') }} VNĐ</td>
                                                <td>{{ number_format($item->coin_earned, 0, ',', '.') }} coin</td>
                                                <td>{{ $item->description }}</td>
                                                <td>{{ $item->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6">Bạn chưa từng nạp tiền vào hệ thống <a
                                                    href="{{ route('choose_paymen') }}">nạp ngay</a></td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td colspan="6">
                                            <p class="py-2">Tổng số tiền bạn đã nạp: <b>{{ number_format($totalPayment) }}
                                                    VNĐ</b></p>
                                            <p class="py-2">Tổng số coin bạn đã nhận được: <b>{{ number_format($totalCoin) }}
                                                    COIN</b></p>
                                            <a href="{{ route('indexPayment') }}" class="btn btn-success">Nạp tiền</a>
                                            <a href="{{ route('home') }}" class="btn btn-primary">Trang chủ</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <input type="radio" name="my_tabs_2" role="tab" class="tab tab-custom" aria-label="Tự động mua" />
                    <div role="tabpanel" class="tab-content rounded-box p-6">
                        <div class="row">
                            @foreach ($AutoPurchase as $auto)
                                @php
                                    $book = $auto->book;
                                @endphp
                                <div class="thumb-item-flow col-4 col-lg-2">
                                    <div class="thumb-wrapper">
                                        <a class="link at-cover"
                                            href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}"
                                            title="{{ $book->title ?? '' }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('{{ asset(Storage::url($book->book_path ?? 'default/path/to/image.jpg')) }}')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr volume-title">
                                                <a
                                                    href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}">{{ $book->title ?? '' }}</a>
                                            </div>
                                            <div id="deleteAuto" class="thumb_title text-center pad-top-10"
                                                style="cursor: pointer" data-book_id="{{ $book->id }}">
                                                <i class="fas fa-times"></i> Xóa
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}"
                                            title="{{ $book->title ?? '' }}">{{ $book->title ?? '' }}</a></div>
                                </div>
                            @endforeach
                            <div>
                                {{ $AutoPurchase->links() }}
                            </div>
                        </div>
                    </div>
                @endauth
            </div>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#deleteAuto', function() {
                var book_id = $(this).data('book_id');
                var url = "{{ route('destroy-auto-purchase') }}";
                // Hiển thị hộp thoại xác nhận
                if (confirm("Bạn có chắc chắn muốn xóa tự động mua này không?")) {
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {
                            book_id: book_id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            if (data.success) {
                                alert(data.message);
                                location.reload();
                            } else {
                                alert(data.message);
                            }
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                            alert("Đã xảy ra lỗi, vui lòng thử lại.");
                        }
                    });
                }
            });
        });
        $('#table_history').DataTable({
            responsive: true,
            paging: true,
            searching: true,
            ordering: true,
            pageLength: 10
        });
    </script>
@endsection
