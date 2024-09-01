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

                                                {{-- <div class="flex flex-row self-center md:self-start gap-2">

                                                    <div wire:snapshot="{&quot;data&quot;:{&quot;series&quot;:[null,{&quot;class&quot;:&quot;App\\Models\\Series&quot;,&quot;key&quot;:18997,&quot;s&quot;:&quot;mdl&quot;}],&quot;ignored&quot;:false},&quot;memo&quot;:{&quot;id&quot;:&quot;0Cek5OK0oIRCFPYPDpoC&quot;,&quot;name&quot;:&quot;pub.series.member.notification-ignore-button&quot;,&quot;path&quot;:&quot;truyen\/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;vi&quot;},&quot;checksum&quot;:&quot;ea83d1e4c76abce38d83bcd7f8353e6fc10fbfb69c2439266c354cf35450bda2&quot;}"
                                                        wire:effects="[]" wire:id="0Cek5OK0oIRCFPYPDpoC">
                                                        <button
                                                            class="self-center md:self-start rounded-full bg-amber-600 mt-3 mb-3 px-4 py-2 text-sm font-semibold text-white  shadow-sm hover:bg-amber-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#d43f3a] justify-center"
                                                            wire:click="handle">
                                                            <i class="fas fa-bullhorn" style="margin-right: 6px;"></i>Tắt
                                                            nhận thông báo
                                                        </button>
                                                    </div>
                                                </div> --}}
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
                                                $updatedAt = Carbon::parse($book->updated_at);
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
                                                <div class="statistic-value">38.117</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-wrapper other-facts col-12">
                                        <div class="fact-item">
                                            <div class="fact-name">Tên khác:</div>
                                            <div class="fact-value">
                                                <div class="block pad-bottom-5">ギャルの自転車を直したら懐かれた</div>
                                                <div class="block pad-bottom-5">Gyaru no jitensha o naoshitara idakareta
                                                </div>
                                                <div class="block pad-bottom-5">I Fixed a Gyaru’s Bicycle and She Became
                                                    Attached to Me</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-wrapper col-12">
                                        <div class="series-summary">
                                            <h4 class="font-bold">Tóm tắt</h4>
                                            <div class="summary-content">
                                                <p>Trên đường về nhà như thường lệ, tôi vô tình cứu một cô gái gyaru khỏi
                                                    việc bị ngã xe và tiện sửa xe giúp cô ấy.<br><br>Đang định rời đi thì
                                                    chẳng hiểu sao cô ấy lại có cảm tình với tôi? Sau một loạt sự kiện, cuối
                                                    cùng tôi, một thằng đụt đã có một người bạn... <br><br>À không, chết dở,
                                                    hình như cô ấy không có ý định dừng lại ở mức bạn bè...</p>
                                                <p> </p>
                                                <p> </p>
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
                                <p>Lần đầu dịch truyện ;P<br><br>Link raw: <a href="https://ncode.syosetu.com/n5522if/"
                                        rel="nofollow noreferrer noopener"
                                        target="_blank">ギャルの自転車を直したら懐かれた【８月２５日・第１巻発売予定】</a><br><br>Mình dịch từ eng, có thể
                                    sẽ dịch từ jap khi đã tự tin...<br><br>Bản Light Novel đã ra mắt vào
                                    25/8/2024!<br><br><strong>Dịch theo eng tới chết, free chap nào quất chap đó.</strong>
                                </p>
                                <p>Cơ mà tụi nó lock chap cả đống huhu, ước ai đó đô nết để mình mở khóa 20 chap của tụi
                                    nó:(((<br><br>Link momo cho các bạn có lòng thành nhé, cảm ơn mọi ngườiiii<br><br><img
                                        src="https://i.postimg.cc/g2KNst0y/n-t.png" alt=""></p>
                                <p> </p>
                                <p> </p>
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
                                            class="list_vol-title">{{ $item->title }})</span></li>
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
                                            <a
                                                href="#
                                            {{-- {{route('episode.show', ['id' => $item->id]) }} --}}
                                                 ">
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
                                            <form class="comment_form">
                                                <textarea class="comment_content"></textarea>
                                                <div class="comment_toolkit clear">
                                                    <input class="button" type="button" value="Đăng bình luận">
                                                </div>
                                            </form>
                                        </div>

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
                                                                            href="/thanh-vien/199104">KadminNodi</a>
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
                                                                Đừng spoil nhé các anh ơi huhu
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2559913#ln-comment-2559913"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="22-08-2024 09:59:00"
                                                                        datetime="2024-08-22T09:59:00+07:00">
                                                                        22-08-2024 09:59:00
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold">4</span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

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
                                                                                href="/thanh-vien/140203">shukiii</a>
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
                                                                    Ok baby
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2559913&amp;reply_id=2560870#ln-comment-2560870"
                                                                        class="text-slate-500">
                                                                        <time class="timeago" title="22-08-2024 23:44:19"
                                                                            datetime="2024-08-22T23:44:19+07:00">
                                                                            22-08-2024 23:44:19
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold"></span>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                        <i class="fas fa-comment me-1"></i>
                                                                        <span class="font-semibold">Trả lời</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="ln-comment-2570516" class="ln-comment-item mt-3 clear"
                                                    data-comment="2570516" data-parent="2559913">
                                                    <div class="flex gap-1 max-w-full">
                                                        <div class="w-[50px]">
                                                            <div class="mx-1 my-1">
                                                                <img src="https://i.docln.net/lightnovel/users/ua105527-0e9ac0d2-cf44-45e4-a54f-24cf6bfeb61f.jpg"
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
                                                                                href="/thanh-vien/105527">Kurogane
                                                                                Lunar</a>
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
                                                                    Bị spoil thì delay. Dễ mà, trị chúng nó
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2559913&amp;reply_id=2570516#ln-comment-2570516"
                                                                        class="text-slate-500">
                                                                        <time class="timeago" title="29-08-2024 11:45:52"
                                                                            datetime="2024-08-29T11:45:52+07:00">
                                                                            29-08-2024 11:45:52
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold"></span>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                        <i class="fas fa-comment me-1"></i>
                                                                        <span class="font-semibold">Trả lời</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="fetch_reply" data-parent="2559913">
                                                    Xem thêm 1 trả lời <i class="fas fa-chevron-down"
                                                        style="margin-left: 4px;"></i>
                                                </div>
                                                <img class="loading" src="/img/loading.svg"
                                                    style="width: auto; height: 15px; margin-left: 10px; display: none">

                                            </div>
                                        </div>

                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2571950" class="ln-comment-item mt-3 clear"
                                                data-comment="2571950" data-parent="2571950">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i2.docln.net/ln/users/avatars/u158095-5018c7a4-5c73-4ce3-8943-a56e8e6aa0fd.jpg"
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
                                                                            href="/thanh-vien/158095">Timmie2407</a>
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
                                                                Lên chương liên tục, trans mạnh ác 🗣
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2571950#ln-comment-2571950"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="30-08-2024 12:31:48"
                                                                        datetime="2024-08-30T12:31:48+07:00">
                                                                        30-08-2024 12:31:48
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold">2</span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2570561" class="ln-comment-item mt-3 clear"
                                                data-comment="2570561" data-parent="2570561">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i2.docln.net/ln/users/avatars/u176255-41748819-a4a6-44cf-956f-c8d8da1f3d82.jpg"
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
                                                                            href="/thanh-vien/176255">_proslimevn</a>
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
                                                                Đừng để mấy a sửa xe đạp thấy tác phẩm này 🐧
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2570561#ln-comment-2570561"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="29-08-2024 12:26:07"
                                                                        datetime="2024-08-29T12:26:07+07:00">
                                                                        29-08-2024 12:26:07
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2568466" class="ln-comment-item mt-3 clear"
                                                data-comment="2568466" data-parent="2568466">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua46237-a1e60d3f-c9c1-4c68-a17c-cc8205d03409.jpg"
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
                                                                            href="/thanh-vien/46237">Handsome</a>
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
                                                                đù sửa xe đạp mà có bồ, thì ko bt tui có bao nhiêu bồ r ....
                                                                :((
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2568466#ln-comment-2568466"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="27-08-2024 22:17:47"
                                                                        datetime="2024-08-27T22:17:47+07:00">
                                                                        27-08-2024 22:17:47
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2565617" class="ln-comment-item mt-3 clear"
                                                data-comment="2565617" data-parent="2565617">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i2.docln.net/ln/users/avatars/u173017-ae5b07a7-3c5e-4e2c-abcf-bab0a6941d5a.jpg"
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
                                                                            href="/thanh-vien/173017">Kevinn</a>
                                                                    </div>
                                                                    <div class="self-center">
                                                                        <div
                                                                            class="flex gap-1 rounded-sm bg-[#1aadf9]/50 dark:bg-[#0d5980]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#0d5980] dark:text-[#8ac4e0]">
                                                                            <img class="my-auto h-[14px]"
                                                                                src="/img/badge/author3.png" />
                                                                            <div class="leading-4">AUTHOR</div>
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
                                                                    <div class="self-center">
                                                                        <div
                                                                            class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                                                            <img class="my-auto h-[14px]"
                                                                                src="/img/badge/cvter2.png" />
                                                                            <div class="leading-4">AI MASTER</div>
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
                                                                Update chap 5 đê
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2565617#ln-comment-2565617"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="26-08-2024 11:04:46"
                                                                        datetime="2024-08-26T11:04:46+07:00">
                                                                        26-08-2024 11:04:46
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ln-comment-reply">
                                                <div id="ln-comment-2565618" class="ln-comment-item mt-3 clear"
                                                    data-comment="2565618" data-parent="2565617">
                                                    <div class="flex gap-1 max-w-full">
                                                        <div class="w-[50px]">
                                                            <div class="mx-1 my-1">
                                                                <img src="https://i2.docln.net/ln/users/avatars/u199104-3ced19eb-d041-4ebb-bf96-845de5cd2f9b.jpg"
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
                                                                                href="/thanh-vien/199104">KadminNodi</a>
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
                                                                    sửa lại rồi ấy ạ huhu
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2565617&amp;reply_id=2565618#ln-comment-2565618"
                                                                        class="text-slate-500">
                                                                        <time class="timeago" title="26-08-2024 11:05:22"
                                                                            datetime="2024-08-26T11:05:22+07:00">
                                                                            26-08-2024 11:05:22
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold"></span>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                        <i class="fas fa-comment me-1"></i>
                                                                        <span class="font-semibold">Trả lời</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="ln-comment-2565619" class="ln-comment-item mt-3 clear"
                                                    data-comment="2565619" data-parent="2565617">
                                                    <div class="flex gap-1 max-w-full">
                                                        <div class="w-[50px]">
                                                            <div class="mx-1 my-1">
                                                                <img src="https://i2.docln.net/ln/users/avatars/u173017-ae5b07a7-3c5e-4e2c-abcf-bab0a6941d5a.jpg"
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
                                                                                href="/thanh-vien/173017">Kevinn</a>
                                                                        </div>
                                                                        <div class="self-center">
                                                                            <div
                                                                                class="flex gap-1 rounded-sm bg-[#1aadf9]/50 dark:bg-[#0d5980]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#0d5980] dark:text-[#8ac4e0]">
                                                                                <img class="my-auto h-[14px]"
                                                                                    src="/img/badge/author3.png" />
                                                                                <div class="leading-4">AUTHOR</div>
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
                                                                        <div class="self-center">
                                                                            <div
                                                                                class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                                                                <img class="my-auto h-[14px]"
                                                                                    src="/img/badge/cvter2.png" />
                                                                                <div class="leading-4">AI MASTER</div>
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
                                                                    <a href="/thanh-vien/199104">@KadminNodi:</a> Auge,
                                                                    mình thấy rồi. Nãy đọc khó hiểu quá trời.
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2565617&amp;reply_id=2565619#ln-comment-2565619"
                                                                        class="text-slate-500">
                                                                        <time class="timeago" title="26-08-2024 11:06:01"
                                                                            datetime="2024-08-26T11:06:01+07:00">
                                                                            26-08-2024 11:06:01
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold"></span>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                        <i class="fas fa-comment me-1"></i>
                                                                        <span class="font-semibold">Trả lời</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="fetch_reply" data-parent="2565617">
                                                    Xem thêm 2 trả lời <i class="fas fa-chevron-down"
                                                        style="margin-left: 4px;"></i>
                                                </div>
                                                <img class="loading" src="/img/loading.svg"
                                                    style="width: auto; height: 15px; margin-left: 10px; display: none">

                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2563930" class="ln-comment-item mt-3 clear"
                                                data-comment="2563930" data-parent="2563930">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i2.docln.net/ln/users/avatars/u140843-9f8dad19-1eea-46c3-8921-e6d098f19557.jpg"
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
                                                                            href="/thanh-vien/140843">Wibu trường C</a>
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
                                                                Main 6 múi nha ae, ko phải cứ sửa xe là gái theo đâu
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2563930#ln-comment-2563930"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="25-08-2024 10:47:12"
                                                                        datetime="2024-08-25T10:47:12+07:00">
                                                                        25-08-2024 10:47:12
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold">3</span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ln-comment-reply">
                                                <div id="ln-comment-2565623" class="ln-comment-item mt-3 clear"
                                                    data-comment="2565623" data-parent="2563930">
                                                    <div class="flex gap-1 max-w-full">
                                                        <div class="w-[50px]">
                                                            <div class="mx-1 my-1">
                                                                <img src="https://i2.docln.net/ln/users/avatars/u177890-7e9016b8-c3e4-4dfe-9bfa-5374676da28e.jpg"
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
                                                                                href="/thanh-vien/177890">ShinuKare</a>
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
                                                                    ước có 6 múi:(
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2563930&amp;reply_id=2565623#ln-comment-2565623"
                                                                        class="text-slate-500">
                                                                        <time class="timeago" title="26-08-2024 11:08:09"
                                                                            datetime="2024-08-26T11:08:09+07:00">
                                                                            26-08-2024 11:08:09
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold"></span>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                        <i class="fas fa-comment me-1"></i>
                                                                        <span class="font-semibold">Trả lời</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="ln-comment-2565700" class="ln-comment-item mt-3 clear"
                                                    data-comment="2565700" data-parent="2563930">
                                                    <div class="flex gap-1 max-w-full">
                                                        <div class="w-[50px]">
                                                            <div class="mx-1 my-1">
                                                                <img src="https://i.docln.net/lightnovel/users/ua145638-4bba0e9c-61dd-47ef-8707-1eec9dcf83d8.jpg"
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
                                                                                href="/thanh-vien/145638">Aisuurufu</a>
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
                                                                    <a href="/thanh-vien/177890">@ShinuKare:</a> tập calis
                                                                    hoặc tập ở nhà cỡ 4 tháng đến 1 năm là có nhé. Tôi có 6
                                                                    múi rồi chỉ cần thêm 2cm nữa là m76:))
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2563930&amp;reply_id=2565700#ln-comment-2565700"
                                                                        class="text-slate-500">
                                                                        <time class="timeago" title="26-08-2024 12:21:32"
                                                                            datetime="2024-08-26T12:21:32+07:00">
                                                                            26-08-2024 12:21:32
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold">2</span>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                        <i class="fas fa-comment me-1"></i>
                                                                        <span class="font-semibold">Trả lời</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="fetch_reply" data-parent="2563930">
                                                    Xem thêm 2 trả lời <i class="fas fa-chevron-down"
                                                        style="margin-left: 4px;"></i>
                                                </div>
                                                <img class="loading" src="/img/loading.svg"
                                                    style="width: auto; height: 15px; margin-left: 10px; display: none">

                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2563737" class="ln-comment-item mt-3 clear"
                                                data-comment="2563737" data-parent="2563737">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua101519-82a138d9-c859-4c18-8f11-855de0c6e1fc.jpg"
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
                                                                            href="/thanh-vien/101519">DayDreaminYuki</a>
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
                                                                Illustration tập 1 LN đây nhé: <a
                                                                    href="https://twitter.com/Shisuberu/status/1827386739255865561?t=IgS8zyJeG1tn40Q53VgWhg&amp;s=19"
                                                                    rel="nofollow noreferrer noopener"
                                                                    target="_blank">https://twitter.com/Shisuberu/status/1827386739255865561?t=IgS8zyJeG1tn40Q53VgWhg&amp;s=19</a>
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2563737#ln-comment-2563737"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="25-08-2024 03:11:27"
                                                                        datetime="2024-08-25T03:11:27+07:00">
                                                                        25-08-2024 03:11:27
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ln-comment-reply">
                                                <div id="ln-comment-2563816" class="ln-comment-item mt-3 clear"
                                                    data-comment="2563816" data-parent="2563737">
                                                    <div class="flex gap-1 max-w-full">
                                                        <div class="w-[50px]">
                                                            <div class="mx-1 my-1">
                                                                <img src="https://i2.docln.net/ln/users/avatars/u199104-3ced19eb-d041-4ebb-bf96-845de5cd2f9b.jpg"
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
                                                                                href="/thanh-vien/199104">KadminNodi</a>
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
                                                                    mình cảm ơn ạ
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2563737&amp;reply_id=2563816#ln-comment-2563816"
                                                                        class="text-slate-500">
                                                                        <time class="timeago" title="25-08-2024 08:15:16"
                                                                            datetime="2024-08-25T08:15:16+07:00">
                                                                            25-08-2024 08:15:16
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold">1</span>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                        <i class="fas fa-comment me-1"></i>
                                                                        <span class="font-semibold">Trả lời</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="ln-comment-2569480" class="ln-comment-item mt-3 clear"
                                                    data-comment="2569480" data-parent="2563737">
                                                    <div class="flex gap-1 max-w-full">
                                                        <div class="w-[50px]">
                                                            <div class="mx-1 my-1">
                                                                <img src="https://i.docln.net/lightnovel/users/ua101519-82a138d9-c859-4c18-8f11-855de0c6e1fc.jpg"
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
                                                                                href="/thanh-vien/101519">DayDreaminYuki</a>
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
                                                                    <a href="/thanh-vien/199104">@KadminNodi:</a> k hẳn là
                                                                    mình áp đặt nhưng có bìa v1 thì ông để vào phần wn cho
                                                                    đỡ trống trải á
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2563737&amp;reply_id=2569480#ln-comment-2569480"
                                                                        class="text-slate-500">
                                                                        <time class="timeago"
                                                                            title="28-08-2024 17:47:43"
                                                                            datetime="2024-08-28T17:47:43+07:00">
                                                                            28-08-2024 17:47:43
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold"></span>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                        <i class="fas fa-comment me-1"></i>
                                                                        <span class="font-semibold">Trả lời</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2562830" class="ln-comment-item mt-3 clear"
                                                data-comment="2562830" data-parent="2562830">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i.docln.net/lightnovel/users/ua93036-7eb5f004-af7f-43e7-a1d0-1b916a301614.jpg"
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
                                                                            href="/thanh-vien/93036">TheLazyStalker</a>
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
                                                                <br>
                                                                cô nàng gyaru đột nhiên tiếp cận tôi sau khi tôi lụm cục tẩy
                                                                cho cô ấy <span>🗣🔥</span><br>
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2562830#ln-comment-2562830"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="24-08-2024 14:57:33"
                                                                        datetime="2024-08-24T14:57:33+07:00">
                                                                        24-08-2024 14:57:33
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold">4</span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ln-comment-reply">
                                                <div id="ln-comment-2562938" class="ln-comment-item mt-3 clear"
                                                    data-comment="2562938" data-parent="2562830">
                                                    <div class="flex gap-1 max-w-full">
                                                        <div class="w-[50px]">
                                                            <div class="mx-1 my-1">
                                                                <img src="https://i2.docln.net/ln/users/avatars/u199104-3ced19eb-d041-4ebb-bf96-845de5cd2f9b.jpg"
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
                                                                                href="/thanh-vien/199104">KadminNodi</a>
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
                                                                    peakk
                                                                </div>
                                                                <div class="comment_see_more expand none">Xem thêm</div>
                                                                <div
                                                                    class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                    <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2562830&amp;reply_id=2562938#ln-comment-2562938"
                                                                        class="text-slate-500">
                                                                        <time class="timeago"
                                                                            title="24-08-2024 16:28:50"
                                                                            datetime="2024-08-24T16:28:50+07:00">
                                                                            24-08-2024 16:28:50
                                                                        </time>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                        <i class="fas fa-thumbs-up me-1"></i>
                                                                        <span class="likecount font-semibold"></span>
                                                                    </a>
                                                                    <a
                                                                        class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                        <i class="fas fa-comment me-1"></i>
                                                                        <span class="font-semibold">Trả lời</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2561217" class="ln-comment-item mt-3 clear"
                                                data-comment="2561217" data-parent="2561217">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i2.docln.net/ln/users/avatars/u199104-3ced19eb-d041-4ebb-bf96-845de5cd2f9b.jpg"
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
                                                                            href="/thanh-vien/199104">KadminNodi</a>
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
                                                                Đọc xong chap 3 thì mình thấy các anh học cơ khí kĩ thuật
                                                                sắp sướng rồi:))
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2561217#ln-comment-2561217"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="23-08-2024 11:37:19"
                                                                        datetime="2024-08-23T11:37:19+07:00">
                                                                        23-08-2024 11:37:19
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2561118" class="ln-comment-item mt-3 clear"
                                                data-comment="2561118" data-parent="2561118">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i2.docln.net/ln/users/avatars/u150468-daf46b52-3d3c-4a3b-9cca-c3f1d73d260d.jpg"
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
                                                                            href="/thanh-vien/150468">Khanhkhanhlmao</a>
                                                                    </div>
                                                                    <div class="self-center">
                                                                        <div
                                                                            class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                                                            <img class="my-auto h-[14px]"
                                                                                src="/img/badge/trans5.png" />
                                                                            <div class="leading-4">TRANS</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="self-center">
                                                                        <div
                                                                            class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                                                            <img class="my-auto h-[14px]"
                                                                                src="/img/badge/cvter2.png" />
                                                                            <div class="leading-4">AI MASTER</div>
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
                                                                Đợi tôi đi rải đinh phát
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2561118#ln-comment-2561118"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="23-08-2024 09:57:53"
                                                                        datetime="2024-08-23T09:57:53+07:00">
                                                                        23-08-2024 09:57:53
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold">1</span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="ln-comment-group">
                                            <div id="ln-comment-2560982" class="ln-comment-item mt-3 clear"
                                                data-comment="2560982" data-parent="2560982">
                                                <div class="flex gap-1 max-w-full">
                                                    <div class="w-[50px]">
                                                        <div class="mx-1 my-1">
                                                            <img src="https://i2.docln.net/ln/users/avatars/u160088-724292d1-4776-4067-9251-870b5bb309d3.jpg"
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
                                                                            href="/thanh-vien/160088">Nguoz</a>
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
                                                                Hóng
                                                            </div>
                                                            <div class="comment_see_more expand none">Xem thêm</div>
                                                            <div
                                                                class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                <a href="/truyen/18997-co-nang-gyaru-dot-nhien-tiep-can-toi-sau-khi-toi-sua-xe-cho-co-ay?comment_id=2560982#ln-comment-2560982"
                                                                    class="text-slate-500">
                                                                    <time class="timeago" title="23-08-2024 02:48:09"
                                                                        datetime="2024-08-23T02:48:09+07:00">
                                                                        23-08-2024 02:48:09
                                                                    </time>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                    <i class="fas fa-thumbs-up me-1"></i>
                                                                    <span class="likecount font-semibold"></span>
                                                                </a>
                                                                <a
                                                                    class="self-center visible-toolkit-item do-reply cursor-pointer">
                                                                    <i class="fas fa-comment me-1"></i>
                                                                    <span class="font-semibold">Trả lời</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

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
                                @endsection
