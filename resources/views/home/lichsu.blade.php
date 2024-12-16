@extends('home.layout.master')
@section('title')
    Lịch sử - Cổng Light Novel - Đọc Light Novel
@endsection
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
            max-width: 300px;
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
                    <main class="sect-body row" style="display: flex; flex-wrap: wrap; gap: 10px; margin: 0;">
                        @if (Auth::check())
                            @foreach ($readingHistories as $history)
                                @php
                                    $book = $history->book;
                                    $chapter = $history->chapter;
                                @endphp
                                <div class="thumb-item-flow col-md-3"
                                    style="flex: 1 1 24%; max-width: 24%; box-sizing: border-box;">
                                    <div class="thumb-wrapper"
                                        style="padding: 8px; background: #fff; border-radius: 8px; overflow: hidden; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                                        <a class="link at-cover"
                                            href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}"
                                            title="{{ $book->title ?? '' }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('{{ asset(Storage::url($book->book_path ?? 'default/path/to/image.jpg')) }}'); background-size: cover; background-position: center; position: absolute; top: 0; left: 0; right: 0; bottom: 0; border-radius: 5px;">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail" style="margin-top: 10px;">
                                            <div class="thumb_attr chapter-title" title="{{ $chapter->title ?? '' }}"
                                                style="font-size: 14px; font-weight: bold; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                <a href="{{ route('truyen.chuong', ['slug' => $book->slug ?? '', 'chapter_slug' => $chapter->slug ?? '']) }}"
                                                    title="{{ $chapter->title ?? '' }}">
                                                    {{ $chapter->title ?? '' }}
                                                </a>
                                            </div>
                                            <div class="thumb_attr volume-title"
                                                style="font-size: 12px; color: #777; margin-top: 5px;">
                                                <a href="#">{{ $book->title ?? '' }}</a>
                                            </div>
                                            <div class="thumb_title text-center pad-top-10"
                                                style="cursor: pointer; color: #d9534f; margin-top: 8px;">
                                                <i class="fas fa-times"></i> Xóa
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @foreach ($readingHistories as $history)
                                @php
                                    $book = $history['book'];
                                    $chapter = $history['chapter'];
                                    //  dd($chapter)
                                @endphp
                                @if (!$chapter || !$chapter->slug)
                                    @continue
                                @endif
                                <div class="thumb-item-flow col-md-3" data-book-id="{{ $book->id ?? '' }}"
                                    data-chapter-id="{{ $chapter->id ?? '' }}"
                                    style="flex: 1 1 24%; max-width: 24%; box-sizing: border-box;">
                                    <div class="thumb-wrapper"
                                        style="padding: 8px; background: #fff; border-radius: 8px; overflow: hidden; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                                        <a class="link at-cover"
                                            href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}"
                                            title="{{ $book->title ?? '' }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('{{ asset(Storage::url($book->book_path ?? 'default/path/to/image.jpg')) }}'); background-size: cover; background-position: center; position: absolute; top: 0; left: 0; right: 0; bottom: 0; border-radius: 5px;">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail" style="margin-top: 10px;">
                                            <div class="thumb_attr chapter-title" title="{{ $chapter->title ?? '' }}"
                                                style="font-size: 14px; font-weight: bold; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                <a href="{{ route('truyen.chuong', ['slug' => $book->slug ?? '', 'chapter_slug' => $chapter->slug ?? '']) }}"
                                                    title="{{ $chapter->title ?? '' }}">
                                                    {{ $chapter->title ?? '' }}
                                                </a>
                                            </div>
                                            <div class="thumb_attr volume-title"
                                                style="font-size: 12px; color: #777; margin-top: 5px;">
                                                <a
                                                    href="{{ route('truyen.truyen', ['slug' => $book->slug ?? '']) }}">{{ $book->title ?? '' }}</a>
                                            </div>
                                            <div class="thumb_title text-center pad-top-10"
                                                style="cursor: pointer; color: #d9534f; margin-top: 8px;">
                                                <i class="fas fa-times"></i> Xóa
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </main>
                    <div class="pagination-wrapper" style="margin-top: 20px;">
                        {{ $readingHistories->links('pagination::tailwind') }}
                    </div>

                </div>
                @auth
                    <input type="radio" name="my_tabs_2" role="tab" class="tab tab-custom" aria-label="Lịch sử mua" />
                    <div role="tabpanel" class="tab-content rounded-box p-6">
                        @if (empty($purchasedStories))
                            <p>Bạn chưa mua truyện nào.</p>
                        @else
                            <table  class="table table-striped">
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
                            {{ $purchasedStories->links() }}
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
                                            <p class="py-2">Tổng số coin bạn đã nhận được:
                                                <b>{{ number_format($totalCoin) }}
                                                    COIN</b>
                                            </p>
                                            <a href="{{ route('indexPayment') }}" class="btn btn-success">Nạp tiền</a>
                                            <a href="{{ route('home') }}" class="btn btn-primary">Trang chủ</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <input type="radio" name="my_tabs_2" role="tab" class="tab tab-custom"
                        aria-label="Tự động mua" />
                    <div role="tabpanel" class="tab-content rounded-box p-6">
                        <div class="row">
                            @foreach ($AutoPurchase as $auto)
                                @php
                                    $book = $auto->book;
                                @endphp
                                <div class="thumb-item-flow col-md-3 col-4 col-lg-2">
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
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>

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
        document.addEventListener('DOMContentLoaded', function() {
            // Lắng nghe sự kiện click trên các phần tử có class 'thumb_title'
            document.querySelectorAll('.thumb_title').forEach(function(button) {
                button.addEventListener('click', function() {
                    // Lấy bookId và chapterId từ các thuộc tính data trong phần tử cha
                    const thumbItem = this.closest('.thumb-item-flow');
                    const bookId = thumbItem.getAttribute('data-book-id');
                    const chapterId = thumbItem.getAttribute('data-chapter-id');

                    // Gọi hàm xóa với bookId và chapterId
                    deleteFromLocal(bookId, chapterId);

                    // Tùy chọn: Xóa phần tử khỏi DOM sau khi xóa từ cookie
                    thumbItem.remove();
                });
            });

            // Hàm xóa khỏi local (cookie)
            function deleteFromLocal(bookId, chapterId) {
                // Gửi yêu cầu AJAX tới server để xóa dữ liệu
                fetch('/delete-reading-history', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            book_id: bookId,
                            chapter_id: chapterId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            console.log(data.cookiedata)
                            console.log(data.aftercookie)
                            console.log('Xóa thành công lịch sử đọc');
                        } else {
                            console.log('Xóa không thành công');
                        }
                    })
                    .catch(error => {
                        console.error('Có lỗi xảy ra khi xóa:', error);
                    });
            }
        });
    </script>

@endsection
