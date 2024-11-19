@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />

    <style>
    .tab-custom {
        font-size: 1.25rem; /* Tăng kích thước chữ */
        background-color: rgb(54, 161, 137); /* Màu nền */
        color: white; /* Màu chữ */
        padding: 0.5rem 1rem; /* Khoảng cách bên trong */
        border-radius: 0.5rem; /* Bo góc */
        margin-right: 0.5rem; /* Khoảng cách giữa các tab */
        line-height: 1.5rem;
      }

      .tab-custom:checked {
        background-color: rgb(54, 161, 137); /* Màu nền khi được chọn */
        color: white; /* Màu chữ khi được chọn */
      }
      </style>

    <main id="mainpart" class="browserpage" style="min-height: 212px;">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span class="page-name"><i class="fas fa-circle"></i>Lịch sử</span>
                </div>
            </div>
        </header>

        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="container">
            <div role="tablist" class="tabs tabs-lifted">
                <input type="radio" name="my_tabs_2" role="tab" class="tab tab-custom " aria-label="Đọc" checked="checked" />
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
                                            <div class="thumb_title text-center pad-top-10" style="cursor: pointer">
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

                <input type="radio" name="my_tabs_2" role="tab" class="tab tab-custom" aria-label="Mua" />
                <div role="tabpanel" class="tab-content rounded-box p-6">
                    @if ($purchasedStories->isEmpty())
                        <p>Bạn chưa mua truyện nào.</p>
                    @else
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

                <input type="radio" name="my_tabs_2" role="tab" class="tab tab-custom" aria-label="Nạp tiền" />
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
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->transaction_id}}</td>
                                            <td>{{number_format($item->amount,0,',','.')}} VNĐ</td>
                                            <td>{{number_format($item->coin_earned,0,',','.')}} coin</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->created_at}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">Bạn chưa từng nạp tiền vào hệ thống <a href="{{route('choose_paymen')}}">nạp ngay</a></td>
                                    </tr>
                                @endif
                                <tr>
                                    <td colspan="6"
                                    >
                                        <p class="py-2">Tổng số tiền bạn đã nạp: <b>{{number_format($totalPayment)}} VNĐ</b></p>
                                        <p class="py-2">Tổng số coin bạn đã nhận được: <b>{{number_format($totalCoin)}} COIN</b></p>
                                        <a href="{{route('indexPayment')}}" class="btn btn-success">Nạp tiền</a>
                                        <a href="{{route('home')}}" class="btn btn-primary">Trang chủ</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <section class="browse-section">

            </section>
        </div>





    </main>
@endsection
