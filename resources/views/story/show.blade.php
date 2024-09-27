@extends('story.layout.master')
@section('content')
    <div class="page-top-group ">
        <a href="/thao-luan/2591">
            <div class="index-background d-none d-lg-block" style="background-image: url('/images/banners/fbg_d.jpg')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('/images/banners/fbg_m.jpg'); background-size: cover"></div>
        </a>
    </div>
    <main id="mainpart" class="project-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb">
                        <span class="breadcrum-level"><a href="https://docln.net"><i class="fas fa-home"></i></a></span>
                        <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                        <span class="breadcrum-level"><a
                                href="https://docln.net">{{ $book->type == 1 ? 'Truyện dịch' : ($book->type == 2 ? 'Truyện Convert' : ($book->type == 3 ? 'Truyện sáng tác' : 'Loại truyện không xác định')) }}</a></span>
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
                                                    <a id="collect" class="side-feature-button button-follow follow">
                                                        <span class="block feature-value"><i
                                                                class="far fa-heart"></i></span>
                                                        <span class="block feature-name"> {{ $book->like }} </span>
                                                    </a>
                                                </div>

                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <div class="series-rating rated">
                                                        <a href="https://docln.net/truyen/18997/danh-gia">
                                                            <label for="open-rating"
                                                                class="side-feature-button button-rate">
                                                                <span class="block feature-value"><i
                                                                        class="far fa-star"></i></span>
                                                                <span class="block feature-name">Đánh giá( sẽ làm
                                                                    sau)</span>
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
                                                    <a href="#series-comments" class="side-feature-button">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-comments"></i></span>
                                                        <span class="block feature-name">Bàn luận</span>
                                                    </a>
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
                                                <div class="statistic-name">Số từ( Phần này sẽ làm sau )</div>
                                                <div class="statistic-value">8.681</div>
                                            </div>

                                            <div class="col-4 col-md-3 statistic-item">
                                                <div class="statistic-name">Đánh giá( phần này sẽ làm sau)</div>
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
                                            src="https://i2.docln.net/ln/users/avatars/u199104-3ced19eb-d041-4ebb-bf96-845de5cd2f9b.jpg"
                                            alt="Poster's avatar">
                                        <div class="series-owner-title">
                                            <span class="series-owner_name"><a
                                                    href="/thanh-vien/199104">KadminNodi</a></span>
                                        </div>
                                    </div>
                                    <div class="fantrans-section">
                                        <div class="fantrans-name">Nhóm dịch</div>
                                        <div class="fantrans-value"><a
                                                href="https://docln.net/nhom-dich/3122-dark-matter">♪ Dark Matter ⁂</a>
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
                                <li>
                                    <a href="https://docln.net/truyen/18997/danh-gia"
                                        class="block hover:bg-gray-50 dark:hover:!bg-zinc-700">
                                        <div class="px-4 py-4 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <p class="truncate text-sm font-bold text-indigo-600 dark:text-white">
                                                    KadminNodi</p>
                                                <div class="ml-2 flex flex-shrink-0">
                                                    <div class="d-flex justify-content-around">
                                                        <div class="text-base text-yellow-400">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="text-base text-yellow-400">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="text-base text-yellow-400">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="text-base text-yellow-400">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="text-base text-yellow-400">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 sm:flex sm:justify-between">
                                                <div class="sm:flex">
                                                    <p class="flex items-center text-sm text-gray-500 dark:text-white">
                                                        <svg class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor"
                                                            aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        tự đánh giá keke
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
                                                            datetime="2024-08-27T12:22:58+07:00"></time>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://docln.net/truyen/18997/danh-gia"
                                        class="block hover:bg-gray-50 dark:hover:!bg-zinc-700">
                                        <div class="px-4 py-4 sm:px-6">
                                            <div class="flex items-center justify-between">
                                                <p class="truncate text-sm font-bold text-indigo-600 dark:text-white">
                                                    Quanvndzai</p>
                                                <div class="ml-2 flex flex-shrink-0">
                                                    <div class="d-flex justify-content-around">
                                                        <div class="text-base text-yellow-400">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="text-base text-yellow-400">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="text-base text-yellow-400">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="text-base text-yellow-400">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <div class="text-base text-yellow-400">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 sm:flex sm:justify-between">
                                                <div class="sm:flex">
                                                    <p class="flex items-center text-sm text-gray-500 dark:text-white">
                                                        <svg class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor"
                                                            aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Trans mới dịch lần đâu mà dịch hay ó....
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
                                                        <time class="topic-time timeago" title="23-08-2024 01:03:50"
                                                            datetime="2024-08-23T01:03:50+07:00"></time>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>

                    @foreach ($book->episodes as $item)
                        <section class="volume-list at-series basic-section volume-mobile gradual-mobile ">
                            <header id="volume_{{ $item->id }}" class="sect-header">
                                <span class="mobile-icon"><i class="fas fa-chevron-down"></i></span>
                                <span class="sect-title">
                                    {{ $item->title }} <span style="color: red">*</span>
                                </span>
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
                                        <ul class="list-chapters at-series">
                                            @foreach ($item->chapters as $chapter)
                                                <li>
                                                    <div class="chapter-name">
                                                        @if ($chapter->is_new)
                                                            <div class="new-status badge">
                                                                <div class="badge-item new">Mới</div>
                                                            </div>
                                                        @endif
                                                        @if ($chapter->contains_image)
                                                            <i class="fas fa-image" aria-hidden="true"
                                                                title="Có chứa ảnh"></i>
                                                        @endif
                                                        <a href="{{ route('truyen.chuong', [$book->slug, $chapter->slug]) }}"
                                                            title="{{ $chapter->title }}">
                                                            {{ $chapter->title }}
                                                        </a>
                                                    </div>
                                                    <div class="chapter-time">{{ $chapter->created_at->format('d/m/Y') }}
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </main>
                        </section>
                    @endforeach



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
                                    class="comments-count">(282)</span></span>
                        </header>
                        <main id="fbcmt_root" class="comment-wrapper d-lg-block clear">
                            <span style="padding: 10px; display: inline-block;">Báo cáo bình luận không phù hợp ở <a
                                    href="/thao-luan/619-bao-cao-binh-luan" style="color: blue">đây</a></span>
                            <div id="tab-content-1" class="tab-content clear">
                                <section class="ln-comment">
                                    <header>
                                        <h3 class="text-lg font-bold dark:text-white">103 Bình luận </h3>
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
                                                <p><strong style="font-size: 15px">Bạn phải <a href="{{ route('login') }}" style="color: red">đăng nhập</a> để bình luận.</strong></p>
                                            @endif
                                        </div>

                                        @foreach ($comments as $comment)
                                            <div class="ln-comment-group">
                                                <div id="ln-comment-2559913" class="ln-comment-item mt-3 clear"
                                                    data-comment="2559913" data-parent="2559913">
                                                    <div class="flex gap-1 max-w-full">
                                                        <div class="w-[50px]">
                                                            <div class="mx-1 my-1">
                                                                <img src="https://i2.docln.net/ln/users/avatars/u199104-3ced19eb-d041-4ebb-bf96-845de5cd2f9b.jpg"
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
                                                                        <div class="self-center">
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
                                                                        </div>
                                                                    </div>
                                                                    <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                                        x-data="{ show: false }">
                                                                        <div class="" @click="show = !show">
                                                                            <i class="fas fa-angle-down"></i>
                                                                        </div>
                                                                        <div class="ln-comment-toolkit" x-show="show"
                                                                            @click.outside="show = false"
                                                                            style="display: none">


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ln-comment-content long-text">
                                                                    {{ $comment->content }}
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="#">
                                                                        <time class="timeago" title="22-08-2024 09:59:00"
                                                                            datetime="{{ $comment->created_at }}">
                                                                            {{ $comment->created_at->diffForHumans() }}
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold">4</span>
                                                                    </a>
                                                                    <a href="{{ route('truyen.truyen', [$book->slug]) }}?reply_to={{ $comment->id }}#reply-form-{{ $comment->id }}"
                                                                        class="self-center visible-toolkit-item cursor-pointer">
                                                                        <i class="fas fa-comment me-1"></i>
                                                                        <span class="likecount font-semibold">Trả lời</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if (request('reply_to') == $comment->id)
                                                    <div class="ln-comment-reply ln-comment-form mt-3" id="reply-form-{{ $comment->id }}">
                                                        @if (Auth::check())
                                                            <form action="{{ route('addComment', $book->id) }}" method="POST" class="reply_form">
                                                                @csrf
                                                                <textarea name="content" class="comment_reply form-control" required>{{ '@' . $comment->user->username .': '}}</textarea>
                                                                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                                                <div class="comment_toolkit clear">
                                                                    <input class="button" type="submit" value="Trả lời">
                                                                </div>
                                                            </form>
                                                        @else
                                                            <p><strong>Bạn phải <a href="{{ route('login') }}" style="color: red">đăng nhập</a> để trả lời bình luận.</strong></p>
                                                        @endif
                                                    </div>
                                                @endif
                                                <!-- Lặp qua các replies -->
                                                @if ($comment->replies->isNotEmpty())
                                                    @include('partials.comment', ['comments' => $comment->replies])
                                                @endif
                                                {{-- @foreach ($comment->replies as $reply)
                                                    <div class="ln-comment-reply">
                                                        <div id="ln-comment-2560870" class="ln-comment-item mt-3 clear"
                                                            data-comment="2560870" data-parent="2559913">
                                                            <div class="flex gap-1 max-w-full">
                                                                <div class="w-[50px]">
                                                                    <div class="mx-1 my-1">
                                                                        <img src="https://i.docln.net/lightnovel/users/ua140203-46c6955e-3d8b-4511-b60d-0606be323f2f.jpg"
                                                                            class="w-full rounded-full" />
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                                    <div class="flex min-w-0 flex-col px-2">
                                                                        <div class="flex align-top justify-between">
                                                                            <div
                                                                                class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                                <div class="self-center">
                                                                                    <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                                        href="{{ $reply->user->id }}">{{ $reply->user->username }}</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="px-2 md:px-3 md:py-1 text-lg md:text-xl cursor-pointer"
                                                                                x-data="{ show: false }">
                                                                                <div class="" @click="show = !show">
                                                                                    <i class="fas fa-angle-down"></i>
                                                                                </div>
                                                                                <div class="ln-comment-toolkit"
                                                                                    x-show="show"
                                                                                    @click.outside="show = false"
                                                                                    style="display: none">


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ln-comment-content long-text">
                                                                            {{ $reply->content }}
                                                                        </div>
                                                                        <div class="comment_see_more expand none">Xem thêm
                                                                        </div>
                                                                        <div
                                                                            class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                            <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2559913&amp;reply_id=2560870#ln-comment-2560870"
                                                                                class="text-slate-500">
                                                                                <time class="timeago"
                                                                                    title="22-08-2024 23:44:19" datetime="{{ $comment->created_at }}">
                                                                                    {{ $comment->created_at->diffForHumans() }}
                                                                                </time>
                                                                            </a>
                                                                            <a
                                                                                class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                                <i class="fas fa-thumbs-up me-1"></i>
                                                                                <span
                                                                                    class="likecount font-semibold"></span>
                                                                            </a>
                                                                            <a
                                                                                class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                                <i class="fas fa-comment me-1"></i>
                                                                                <a href="{{ route('truyen.truyen', [$book->slug]) }}?reply_to={{$reply->id }}"
                                                                                    class="likecount font-semibold">Trả lời</a>
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                @if (request('reply_to') == $reply->id)
                                                    <div class="ln-comment-reply ln-comment-form mt-3">
                                                        @if (Auth::check())
                                                            <form action="{{ route('addComment', $book->id) }}"
                                                                method="POST" class="reply_form">
                                                                @csrf
                                                                <textarea name="content" class="comment_reply form-control" required></textarea>
                                                                <input type="hidden" name="parent_id" value="{{  $reply->id }}">
                                                                <div class="comment_toolkit clear">
                                                                    <input class="button" type="submit" value="Trả lời">
                                                                </div>
                                                            </form>
                                                        @else
                                                            <p><strong>Bạn phải <a href="{{ route('login') }}" style="color: red">đăng nhập</a> để trả lời bình luận.</strong></p>
                                                        @endif
                                                    </div>
                                                @endif --}}
                                            </div>
                                        @endforeach


                                        <div class="ln-comment-page">
                                            <div class="pagination-footer">
                                                <div class="pagination_wrap">
                                                    <a href=""
                                                        class="paging_item paging_prevnext prev  disabled ">Trước</a>

                                                    <a href="https://docln.net/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?page=2"
                                                        class="paging_item paging_prevnext next">Sau</a>
                                                </div>
                                            </div>
                                        </div>
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

@endsection
