@extends('story.layout.master')
@section('content')
    <div class="page-top-group ">
        <a href="/thao-luan/2591">
            <div class="index-background d-none d-lg-block" style="background-image: url('/images/banners/fbg_d.jpg')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('/images/banners/fbg_m.jpg'); background-size: cover"></div>
        </a>
    </div>

    <main id="mainpart" class="volume-page ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="page-breadcrumb">
                        <span class="breadcrum-level"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></span>
                        <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                        <span class="breadcrum-level"><a href="{{ route('home') }}">Truyện dịch</a></span>
                    </div>

                </div>
                <div class="col-12 col-lg-3">

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-block clearfix">
                <div class="col-12 col-lg-9 float-left">
                    <section class="feature-section at-volume clear">
                        <main class="section-body">
                            <div class="top-part">
                                <div class="row">
                                    <div class="left-column col-12 col-md-3">
                                        <div class="series-cover">
                                            <div class="series-type">

                                                <span>Truyện dịch</span>

                                            </div>
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('{{ asset(Storage::url($episode->episode_path)) }}')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="series-name-group">
                                            <span class="volume-name">
                                                <a href="{{ route('truyen.truyen',$book->slug) }}">{{ $episode->title }}</a>
                                            </span>
                                            <span class="series-name">
                                                <a href="{{ route('truyen.truyen',$book->slug) }}">{{ $book->title }}</a>
                                            </span>
                                        </div>
                                        <div class="series-information">
                                            <div class="info-item">
                                                <span class="info-name">Tác giả:</span>
                                                <span class="info-value "><a
                                                        href="https://docln.net/tac-gia/Amamori%20Takibi%20%E9%9B%A8%E6%A3%AE%E3%81%9F%E3%81%8D%E3%81%B3">
                                                        {{ $book->author }}</a></span>
                                            </div>

                                            <div class="info-item">
                                                <span class="info-name">Họa sĩ:</span>
                                                <span class="info-value"><a
                                                        href="https://docln.net/hoa-si/Imigimuru%20%E3%81%84%E3%81%BF%E3%81%8E%E3%82%80%E3%82%8B">
                                                        {{ $book->painter }}</a></span>
                                            </div>
                                            @php
                                                use Carbon\Carbon;
                                                $updatedAt = Carbon::parse($episode->updated_at);
                                            @endphp
                                            <div class="info-item">
                                                <span class="info-name">Cập nhật cuối</span>
                                                <span class="info-value">
                                                    <time class="timeago" title="{{ $updatedAt->format('d/m/Y H:i:s') }}"
                                                        datetime="{{ $updatedAt->toIso8601String() }}">Đang chạy...</time>
                                                </span>
                                            </div>
                                            <!--<div class="info-item"><span class="info-name">Bình luận</span><span class="info-value"><a href="https://docln.net/truyen/10279-co-qua-nhieu-nu-chinh-thua-cuoc/t15356-vol-1#series-comments">Xuống dưới</a></span></div>-->
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-9">
                                        <div class="side-features">
                                            <div class="row">
                                                {{-- <div class="col-4 col-md feature-item width-auto-xl  disabled ">
                                                    <a href="" class="side-feature-button">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-download"></i></span>
                                                        <span class="block feature-name">Tải xuống</span>
                                                    </a>
                                                </div> --}}
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <a href="#series-comments" class="side-feature-button">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-comments"></i></span>
                                                        <span class="block feature-name">Bàn luận</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </section>
                </div>
                <div class="col-12 col-md-3 float-right">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <section class="series-users">
                                <main class="clear">
                                    <div class="series-owner group-mem">
                                        <img width="50px" height="50px"
                                            src="{{ asset(Storage::url($book->book_path)) }}" />
                                        <div class="series-owner-title">
                                            <span class="series-owner_name"><a href="/thanh-vien/68792">Miko Iino</a></span>
                                        </div>
                                    </div>
                                    <div class="fantrans-section">
                                        <div class="fantrans-name">Nhóm dịch</div>
                                        <div class="fantrans-value"><a href="https://docln.net/nhom-dich/76-3ktan">3ktan</a>
                                        </div>
                                    </div>
                                    <div class="series-owner_share">
                                        <span class="owner_share-title" title="Tham gia">Tham gia</span>
                                        <a class="ln_info-name" href="/thanh-vien/660"
                                            style="padding-left: 5px; color: #1d5268">Abraham Winchester</a>
                                    </div>

                                </main>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-9 float-left">
                    <section class="ln_chapters-volume basic-section gradual-mobile">
                        <header class="sect-header">
                            <span class="sect-title">Danh sách chương</span>
                            <span class="mobile-icon"><i class="fas fa-chevron-down"></i></span>
                        </header>
                        <main class="sect-body mobile-toggle_body d-lg-block none clear">
                            <ul class="list-chapters">
                                @foreach ($episode->chapters as $chapter)
                                    <li>
                                        <div class="chapter-name">
                                            @if (str_contains($chapter->content, '<img'))
                                                <!-- Kiểm tra nếu nội dung chứa ảnh -->
                                                <i class="fas fa-picture-o" aria-hidden="true" title="Có chứa ảnh"></i>
                                            @endif

                                            <a href="/truyen/{{ $book->slug }}/{{ $chapter->slug }}"
                                                title="{{ $chapter->title }}">
                                                {{ $chapter->title }}
                                            </a>
                                        </div>

                                        <div class="chapter-time">
                                            {{ \Carbon\Carbon::parse($chapter->created_at)->format('d/m/Y') }}</div>
                                    </li>
                                @endforeach
                            </ul>
                        </main>

                    </section>

                    <section class="list-section basic-section gradual-mobile">
                        <header class="sect-header">
                            <span class="sect-title border-color-primary">Các tập khác</span>
                            <span class="mobile-icon"><i class="fas fa-chevron-down"></i></span>
                        </header>
                        <main class="sect-body d-lg-flex row">
                            @foreach ($book->episodes as $episode)
                            <div class="thumb-item-flow col-6 col-md-3">
                                <div class="thumb-wrapper">
                                    <a href="/truyen/{{ $episode->slug }}" title="{{ $episode->title }}">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('{{ Storage::url($episode->episode_path) }}')">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="{{ $episode->title }}">{{ $episode->title }}</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title">
                                    <a href="/truyen/{{ $episode->book->slug }}" title="{{ $episode->book->title }}">
                                        {{ $episode->book->title }}
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </main>
                    </section>

                @endsection
