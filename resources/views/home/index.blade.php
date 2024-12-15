@extends('home.layout.master')
@section('title')
    Trang chủ - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="at-index">
        <div class="container" style="margin-bottom: 40px;">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="daily-recent_views">
                        <header class="title">
                            <span class="top-tab_title title-active"><i class="fas fa-trophy"></i> Nổi bật</span>
                            <span class="top-tab_title"><a href="/danh-sach?truyendich=1&sapxep=topthang">Top
                                    tháng</a></span>
                            <span class="top-tab_title"><a href="/danh-sach?truyendich=1&sapxep=top">Toàn t/gian</a></span>
                        </header>
                        <script>
                            @if (session('error'))
                                alert("{{ session('error') }}");
                            @endif
                        </script>
                        <main class="row slider d-block">
                            @foreach ($truyen_noibat as $item)
                                {{-- bắt đầu truyện đơn --}}
                                <div class="popular-thumb-item mr-1">
                                    <div class="thumb-wrapper">
                                        <a href="{{ route('truyen.truyen', $item->slug) }}" title="{{ $item->title }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('{{ !empty($item->book_path) ? asset(Storage::url($item->book_path)) : asset('img/noava.png') }}">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr series-title" title="{{ $item->title }}"><a
                                                    href="{{ route('truyen.truyen', $item->slug) }}">{{ $item->title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- kết thúc truyện đơn --}}
                            @endforeach
                        </main>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <section class="last-topics index-section">
                        <header class="section-title">
                            <a href="{{ route('thao-luan') }}"><span class="sts-bold">Thảo</span><span
                                    class="sts-empty">Luận</span></a>
                        </header>
                        <main>
                            {{-- bắt đầu bài thảo luận đơn --}}
                            @foreach ($data_forum_home as $item_forum_home)
                                <div class="topic-item">
                                    <div class="row">
                                        <div class="col-9 line-ellipsis">
                                            <i class="fas fa-circle"
                                                style="color: {{ $item_forum_home->color }}; margin-right: 4px;"></i>
                                            <a href="{{ route('chi-tiet-thao-luan', $item_forum_home->id) }}"
                                                title="{{ $item_forum_home->title }}">
                                                {{ $item_forum_home->title }}
                                            </a>
                                        </div>
                                        <div class="col-3 topic-data text-right">
                                            <time class="timeago" title="{{ $item_forum_home->created_at }}"
                                                datetime="{{ $item_forum_home->created_at }}"></time>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- kết thúc thảo luận đơn --}}

                        </main>
                    </section>
                    {{-- Lịch sử truyện vừa đọc --}}
                    <div class="d-lg-none" style="margin-top: 20px">
                        <section id="reading-history" class="index-section" x-data="{ storage: (JSON.parse(localStorage.getItem('reading_series')) || []).slice(0, 4) }">
                            <header class="section-title">
                                <a href="{{ route('lich-su') }}">
                                    <span class="sts-bold">Truyện</span><span class="sts-empty">vừa đọc</span>
                                </a>
                            </header>
                            <main class="sect-body">
                                {{-- Phần hiển thị cho màn hình mobile --}}
                                <div class="d-lg-none">
                                    @if (empty($readingHistories))
                                        <p>Chưa có lịch sử đọc!</p>
                                    @else
                                        {{-- {{ dd($readingHistories) }} --}}
                                        @foreach ($readingHistories as $chapter)
                                            {{-- {{ dd($chapter) }} --}}
                                            <div class="row ml-1 mb-3">
                                                <div class="col-2 col-md-1 col-lg-2 a6-ratio">
                                                    <div class="img-contain-ratio content"
                                                        style="background-image: url('{{ asset(Storage::url(!empty($chapter->book->book_path) ? $chapter->book->book_path : '')) }}')">
                                                    </div>
                                                </div>

                                                <div class="col-8 col-md-9 col-lg-8">
                                                    <a href="/truyen/{{ !empty($chapter->book->slug) ? $chapter->book->slug : '' }}"
                                                        class="text-truncate block font-weight-bold">{{ !empty($chapter->book->title) ? $chapter->book->title : '' }}</a>
                                                        @if (!Auth::check())
                                                        <div class="small mb-3 text-truncate">{{ $chapter->episode->title }}
                                                        </div>
                                                        <a href="/truyen/{{ !empty($chapter->book->slug) ? $chapter->book->slug : '' }}/{{ !empty($chapter->slug) ? $chapter->slug : '' }}"
                                                            class="text-truncate block">{{ $chapter->title }}</a>
                                                    @else
                                                        <div class="small mb-3 text-truncate">
                                                            {{ $chapter->chapter->episode->title }}
                                                        </div>
                                                        <a href="/truyen/{{ !empty($chapter->chapter->book->slug) ? $chapter->chapter->book->slug : '' }}/{{ !empty($chapter->chapter->slug) ? $chapter->chapter->slug : '' }}"
                                                            class="text-truncate block">{{ $chapter->chapter->title }}</a>
                                                    @endif
                                                </div>
                                              

                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                            </main>
                        </section>
                    </div>
                    {{-- Kết thúc truyện vừa đọc --}}

                </div>
            </div>

        </div>

        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <section class="index-section thumb-section-flow last-chapter original one-row">
                        <header class="section-title"><span class="sts-bold">Sáng tác</span><span class="sts-empty">Mới
                                Nhất</span></header>
                        <main class="row">
                            @foreach ($sangtac_moinhat as $item)
                                {{-- Bắt đầu truyện đơn --}}
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="{{ route('truyen.chuong', ['slug' => $item->book->slug, 'chapter_slug' => $item->slug]) }}"
                                            title="{{ $item->title }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="{{ asset(Storage::url($item->book->book_path)) }}">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="{{ $item->title }}">
                                                <a href="{{ route('truyen.chuong', ['slug' => $item->book->slug, 'chapter_slug' => $item->slug]) }}"
                                                    title="{{ $item->title }}">
                                                    {{ $item->title }}
                                                </a>
                                            </div>
                                            <div class="thumb_attr volume-title">{{ $item->book->title }}</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="{{ route('truyen.truyen', $item->book->slug) }}"
                                            title="{{ $item->book->title }}">{{ $item->book->title }}</a>
                                    </div>
                                </div>
                                {{-- kết thúc truyện đơn --}}
                            @endforeach

                            <div class="thumb-item-flow col-4 col-lg-2 see-more">
                                <div class="thumb-wrapper">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio"
                                            style="background-image: url('img/nocover.jpg');">
                                        </div>
                                    </div>
                                    <a href="/sang-tac">
                                        <div class="thumb-see-more">
                                            <div class="see-more-inside">
                                                <div class="see-more-content">
                                                    <div class="see-more-icon"><i class="fas fa-arrow-circle-right"></i>
                                                    </div>
                                                    <div class="see-more-text">Xem thêm</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </main>
                    </section>

                    <section class="index-section thumb-section-flow last-chapter translation three-row">
                        <header class="section-title">
                            <span class="sts-bold">Chương</span><span class="sts-empty">mới nhất</span>
                        </header>
                        <main class="row">
                            @foreach ($chuong_moinhat as $item)
                                @php

                                @endphp
                                {{-- Bắt đầu truyện đơn  --}}
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="{{ route('truyen.chuong', ['slug' => $item->book->slug, 'chapter_slug' => $item->slug]) }}"
                                            title="{{ $item->title }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    data-bg="{{ asset(Storage::url($item->book->book_path ?? 'img/nocover.jpg')) }}">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chap 54: Em ấy đã quên"><a
                                                    href="{{ route('truyen.chuong', ['slug' => $item->book->slug, 'chapter_slug' => $item->slug]) }}"
                                                    title="{{ $item->title }}">{{ $item->title }}</a></div>
                                            <div class="thumb_attr volume-title">{{ $item->book->title }}</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="{{ route('truyen.truyen', $item->book->slug) }}"
                                            title="{{ $item->book->title }}">{{ $item->book->title }}</a>
                                    </div>
                                </div>
                                {{-- Kết thúc truyện đơn --}}
                            @endforeach


                            <div class="thumb-item-flow col-4 col-lg-2 see-more">
                                <div class="thumb-wrapper">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio"
                                            style="background-image: url('img/nocover.jpg');"></div>
                                    </div>
                                    <a href="/danh-sach?truyendich=1&amp;sapxep=capnhat">
                                        <div class="thumb-see-more">
                                            <div class="see-more-inside">
                                                <div class="see-more-content">
                                                    <div class="see-more-icon"><i class="fas fa-arrow-circle-right"></i>
                                                    </div>
                                                    <div class="see-more-text">Xem thêm</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </main>
                    </section>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="d-none d-lg-block">
                        <section id="reading-history" class="index-section" x-data="{ storage: (JSON.parse(localStorage.getItem('reading_series')) || []).slice(0, 4) }">
                            <header class="section-title">
                                <a href="{{ route('lich-su') }}">
                                    <span class="sts-bold">Truyện</span><span class="sts-empty">vừa đọc</span>
                                </a>
                            </header>
                            <main class="sect-body">
                                @if (empty($readingHistories))
                                    <p>Chưa có lịch sử đọc!</p>
                                @else
                                    {{-- {{ dd($readingHistories) }} --}}
                                    @foreach ($readingHistories as $chapter)
                                        {{-- {{ dd($history) }} --}}
                                        {{-- @if (auth()->check())
                                            @php
                                                $episode = $history->episode; // Lấy episode tương ứng
                                                $book = $history->book ?? null; // Lấy book từ episode (nếu episode tồn tại)
                                                $chapter = $history->chapter;
                                            @endphp
                                        @else
                                            @php
                                                // Người dùng chưa đăng nhập, lấy episode trước, sau đó lấy book từ episode
                                                $episode = $history->episode; // Lấy episode tương ứng
                                                $book = $episode->book ?? null; // Lấy book từ episode (nếu episode tồn tại)
                                            @endphp
                                        @endif --}}

                                        {{-- Kiểm tra nếu book hoặc chapter có title trống thì bỏ qua mục này --}}
                                        {{-- @if (empty($book->title) || empty($chapter->title))
                                            @continue
                                        @endif --}}

                                        {{-- {{ dd($chapter) }} --}}
                                        <div class="row ml-1 mb-3">
                                            <div class="col-2 col-md-1 col-lg-2 a6-ratio">
                                                <div class="img-contain-ratio content"
                                                    style="background-image: url('{{ asset(Storage::url(!empty($chapter->book->book_path) ? $chapter->book->book_path : '')) }}')">
                                                </div>
                                            </div>
                                            <div class="col-8 col-md-9 col-lg-8">
                                                <a href="/truyen/{{ !empty($chapter->book->slug) ? $chapter->book->slug : '' }}"
                                                    class="text-truncate block font-weight-bold">{{ !empty($chapter->book->title) ? $chapter->book->title : '' }}</a>
                                                @if (!Auth::check())
                                                    <div class="small mb-3 text-truncate">{{ $chapter->episode->title }}
                                                    </div>
                                                    <a href="/truyen/{{ !empty($chapter->book->slug) ? $chapter->book->slug : '' }}/{{ !empty($chapter->slug) ? $chapter->slug : '' }}"
                                                        class="text-truncate block">{{ $chapter->title }}</a>
                                                @else
                                                    <div class="small mb-3 text-truncate">
                                                        {{ $chapter->chapter->episode->title }}
                                                    </div>
                                                    <a href="/truyen/{{ !empty($chapter->chapter->book->slug) ? $chapter->chapter->book->slug : '' }}/{{ !empty($chapter->chapter->slug) ? $chapter->chapter->slug : '' }}"
                                                        class="text-truncate block">{{ $chapter->chapter->title }}</a>
                                                @endif

                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </main>
                        </section>
                    </div>

                    <section id="recent-comments" class="index-section">
                        <header class="section-title">
                            <span class="sts-bold">Bình luận</span><span class="sts-empty">gần đây</span>
                        </header>
                        <main class="sect-body pr-5">
                            @foreach ($bookComments as $comment)
                                <div class="comment-item-at-index">
                                    <div class="comment-info">
                                        <span class="series-name"><a
                                                href="{{ route('truyen.truyen', $comment->book->slug) }}">{{ $comment->book->title }}</a>
                                        </span>
                                        <div class="comment-content">
                                            {{ $comment->content }}
                                        </div>

                                        <div class="comment-top">
                                            <div class="comment-user_ava">
                                                <a href="{{ route('user.books', ['userId' => $comment->user->id]) }}">
                                                    <img src="{{ !empty($comment->user->avatar_url) ? Storage::url($comment->user->avatar_url) : asset('img/noava.png') }}"
                                                        alt="Commenter's avatar">
                                                </a>
                                            </div>
                                            <a href="{{ route('user.books', ['userId' => $comment->user->id]) }}"
                                                rel="nofollow"
                                                class="comment-user_name strong">{{ $comment->user->username }}</a>
                                            <small class="comment-location">
                                                <a href="#">
                                                    <time class="timeago" datetime="{{ $comment->created_at }}">
                                                        {{ $comment->created_at->diffForHumans() }}
                                                    </time>
                                                </a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </main>
                    </section>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="bottom-part at-index">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-9">
                        <section class="index-section new-series">
                            <header class="section-title"><span class="sts-bold">Truyện</span><span class="sts-empty">Vừa
                                    Đăng</span>
                            </header>
                            <main class="sect-body">
                                <div class="row">
                                    @foreach ($truyen_vuadang as $item)
                                        {{-- bắt đầu truyện  --}}
                                        <article class="list-item list-none col-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-4 col-md-3 col-lg-4">
                                                    <div class="series-cover">
                                                        <a href="{{ route('truyen.truyen', $item->slug) }}">
                                                            <div class="a6-ratio">
                                                                <div class="content img-in-ratio lazyload"
                                                                    data-bg="{{ asset(Storage::url($item->book_path)) }}">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-9 col-lg-8">
                                                    <div class="list-detail">
                                                        <h4 class="series-title text-xl font-bold"><a
                                                                href="{{ route('truyen.truyen', $item->slug) }}">{{ $item->title }}</a>
                                                        </h4>
                                                        <div class="series-summary">{!! Str::words($item->description, 25, '...') !!}</div>
                                                        <div class="lastest-chapter">
                                                            <!--<a href="/truyen/19103-ngoi-nha-quy-di/c142100-chuong-1-xe-buyt">Chương 1: Xe Buýt</a>
                                                                                                                    <small>cánh cửa thứ nhất</small>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        {{-- kết thúc truyện --}}
                                    @endforeach
                                </div>
                            </main>
                            <div class="see-more_cover">
                                <a class="see-more" href="/danh-sach?truyendich=1&sapxep=truyenmoi">
                                    <i class="fas fa-hand-point-right"></i>Xem thêm
                                </a>
                            </div>
                        </section>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <section class="index-section rank-cirle most-followed">
                            <header class="section-title">
                                <span class="sts-bold">Theo dõi</span><span class="sts-empty">nhiều</span>
                            </header>
                            <main>
                                {{-- truyện top bắt đầu( chỉ có 3 truyện top mới có ảnh) --}}

                                @foreach ($theodoi_nhieu as $index => $item)
                                    <div class="rank-circle-item">
                                        <span class="rank-number">{{ $index + 1 }}</span>
                                        <div class="series-detail clear">
                                            @if ($index < 3 && $item->book_path)
                                                <!-- Chỉ hiển thị ảnh cho 3 truyện đầu tiên -->
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio"
                                                            style="background-image: url('{{ !empty($item->book_path) ? asset(Storage::url($item->book_path)) : asset('img/noava.png') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <h5 class="series-title">
                                                <a href="{{ route('truyen.truyen', $item->slug) }}"
                                                    title="{{ $item->title }}">
                                                    {{ $item->title }}
                                                </a>
                                            </h5>
                                            <small class="rank-count">{{ $item->like }} theo dõi</small>
                                        </div>
                                    </div>
                                @endforeach
                            </main>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pad-top-40">
            <section class="index-section js-finished-series">
                <header class="section-title">
                    <span class="sts-bold">Truyện</span><span class="sts-empty">đã hoàn thành</span>
                </header>
                <main class="row slider">
                    @foreach ($truyen_dahoanthanh as $item)
                        {{-- truyện bắt đầu ( ở đây sẽ lấy chapter cuối) --}}
                        <div class="thumb-item-flow thumb-slider">
                            <div class="thumb-wrapper">
                                <a href="{{ route('truyen.chuong', ['slug' => $item->book->slug, 'chapter_slug' => $item->slug]) }}"
                                    title="{{ $item->title }}">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio lazyload"
                                            data-bg="{{ asset(Storage::url($item->book->book_path ?? 'img/nocover.jpg')) }}">
                                        </div>
                                    </div>
                                </a>
                                <div class="thumb-detail">
                                    <div class="thumb_attr chapter-title" title="Oneshot"><a
                                            href="{{ route('truyen.chuong', ['slug' => $item->book->slug, 'chapter_slug' => $item->slug]) }}"
                                            title="{{ $item->title }}">{{ $item->title }}</a></div>
                                    <div class="thumb_attr volume-title">{{ $item->book->title }}</div>
                                </div>
                            </div>
                            <div class="thumb_attr series-title"><a
                                    href="{{ route('truyen.truyen', $item->book->slug) }}"
                                    title="{{ $item->book->title }}">{{ $item->book->title }}</a></div>
                        </div>
                        {{-- truyện kết thúc --}}
                    @endforeach


                    <div class="thumb-item-flow see-more">
                        <div class="thumb-wrapper">
                            <div class="a6-ratio">
                                <div class="content img-in-ratio" style="background-image: url('img/nocover.jpg');"></div>
                            </div>
                            <a href="/danh-sach?truyendich=1&amp;hoanthanh=1&amp;sapxep=capnhat">
                                <div class="thumb-see-more">
                                    <div class="see-more-inside">
                                        <div class="see-more-content">
                                            <div class="see-more-icon"><i class="fas fa-arrow-circle-right"></i></div>
                                            <div class="see-more-text">Xem thêm</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </main>
            </section>
        </div>


    @endsection
