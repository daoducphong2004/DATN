@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="orinovel-page orinovel-type">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span class="page-name"><a href="sang-tac"><i class="fas fa-circle"></i>Truyện tự sáng tác</a>
                    </span>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="daily-recent_views mb-5">
                        <header class="title">
                            <span class="top-tab_title title-active"><i class="fas fa-trophy"></i> Nổi bật</span>
                        </header>
                        <main class="row slider d-block">
                            {{-- Bắt đầu truyện  --}}
                            @foreach ($sangtac_noibat as $item)
                                <div class="popular-thumb-item mr-1">
                                    <div class="thumb-wrapper">
                                        <a href="{{ route('truyen.truyen', $item->slug) }}"
                                            title="{{ $item->title }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('{{ !empty($item->book_path) ? asset(Storage::url($item->book_path)) : asset('img/noava.png') }}')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr series-title" title="{{ $item->title }}"><a
                                                    href="{{ route('truyen.truyen', $item->slug) }}"
                                                    title="{{ $item->title }}">{{ $item->title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- kết thúc truyện  --}}
                        </main>
                    </div>

                    <section id="ln-newest" class="detail-list has-pagination">
                        <header class="section-title"><span>Mới cập nhật</span></header>
                        <main class="sect-body">
                            {{-- Bắt đầu truyện  --}}
                            @foreach ($moi_cap_nhat as $item)
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="{{ route('truyen.truyen', $item->book->slug) }}">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('{{ !empty($item->book->book_path) ? asset(Storage::url($item->book->book_path)) : asset('img/noava.png') }}')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="{{ route('truyen.truyen', $item->book->slug) }}">{{ $item->book->title }}</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a
                                                    href="/thanh-vien/62311">Lwy C.Theory</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số
                                                    từ</span>{{ $item->book->word_count }}</a></span></div>
                                        </div>
                                        <div class="series-summary">{!! Str::words($item->book->description, 66, '...') !!}</div>
                                        <div class="lastest-chapter">
                                            <a
                                                href="{{ route('truyen.chuong', ['slug' => $item->book->slug, 'chapter_slug' => $item->slug]) }}">{{ $item->title }}</a>
                                            <small>{{ $item->episode->title }}</small>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                            {{-- Kết thúc truyện  --}}
                        </main>
                        {{-- <div class="pagination-footer">
                            <div class="pagination_wrap">
                                <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                                <a href="https://docln.net/sang-tac?page=1"
                                    class="paging_item paging_prevnext prev  disabled ">Đầu</a>

                                <a href="https://docln.net/sang-tac?page=1"
                                    class="paging_item page_num  current ">1</a>
                                <a href="https://docln.net/sang-tac?page=2" class="paging_item page_num ">2</a>
                                <a href="https://docln.net/sang-tac?page=3" class="paging_item page_num ">3</a>
                                <a href="https://docln.net/sang-tac?page=4" class="paging_item page_num ">4</a>
                                <a href="https://docln.net/sang-tac?page=5" class="paging_item page_num ">5</a>

                                <!--<a href=" https://docln.net/sang-tac?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                                <a href="https://docln.net/sang-tac?page=45"
                                    class="paging_item paging_prevnext next ">Cuối</a>
                            </div>
                        </div> --}}
                        
                        <div class="pagination-footer">
                            <div class="pagination_wrap">
                                {{-- Nút Đầu --}}
                                @if ($moi_cap_nhat->onFirstPage())
                                    <span class="paging_item paging_prevnext prev disabled">Đầu</span>
                                @else
                                    <a href="{{ $moi_cap_nhat->url(1) }}" class="paging_item paging_prevnext prev">Đầu</a>
                                @endif
                        
                                {{-- Các trang --}}
                                @foreach ($moi_cap_nhat->getUrlRange(1, $moi_cap_nhat->lastPage()) as $page => $url)
                                    @if ($page == $moi_cap_nhat->currentPage())
                                        <span class="paging_item page_num current">{{ $page }}</span>
                                    @else
                                        <a href="{{ $url }}" class="paging_item page_num">{{ $page }}</a>
                                    @endif
                                @endforeach
                        
                                {{-- Nút Cuối --}}
                                @if ($moi_cap_nhat->hasMorePages())
                                    <a href="{{ $moi_cap_nhat->url($moi_cap_nhat->lastPage()) }}" class="paging_item paging_prevnext next">Cuối</a>
                                @else
                                    <span class="paging_item paging_prevnext next disabled">Cuối</span>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-12">
                            {{-- Bắt đầu giới thiệu truyện --}}
                            @foreach ($sangtac_noibat->random(1) as $item)
                                <section class="sub-index-style sub-index-introduce">
                                    <div class="title-wrapper">
                                        <div class="section-title">Giới thiệu truyện</div>
                                    </div>
                                    <div class="section-content">
                                        <div class="series-cover">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('{{ !empty($item->book_path) ? asset(Storage::url($item->book_path)) : asset('img/noava.png') }}')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="series-information">
                                            <h3 class="series-title"><a
                                                    href="{{ route('truyen.truyen', $item->slug) }}">{{ $item->title }}</a></h3>
                                            <div class="series-summary">{!! Str::words($item->description, 33, '...') !!}</div>
                                        </div>
                                    </div>
                                </section>
                            @endforeach
                            {{-- kết thúc giới thiệu truyện --}}

                            <section id="recent-comments" class="index-section">
                                <div class="title-wrapper">
                                    <div class="section-title">Bình luận mới</div>
                                </div>
                                <main class="sect-body pr-5">
                                    @foreach($bookComments as $comment)
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
                                                        <a href="{{ route('user.books',['userId' => $comment->user->id]) }}">
                                                            <img src="{{ !empty($comment->user->avatar_url) ? $comment->user->avatar_url : asset('img/noava.png') }}"
                                                                alt="Commenter's avatar">
                                                        </a>
                                                    </div>
                                                    <a href="{{ route('user.books',['userId' => $comment->user->id]) }}"
                                                        rel="nofollow" class="comment-user_name strong">{{ $comment->user->username }}</a>
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

                        <div class="col-12 col-md-6 col-lg-12">
                            <section id="ln-topview" class="sub-index-style">
                                <div class="title-wrapper">
                                    <div class="section-title">Xem nhiều</div>
                                </div>
                                <div class="section-content">
                                    <article class="topview-item">
                                        <div class="topview_rank">01</div>
                                        <div class="topview_name">
                                            <h5 class="series-name"><a
                                                    href="/sang-tac/8476-kiep-nay-la-anh-trai-cua-nhan-vat-chinh">Anh
                                                    Trai Nhân Vật Chính</a></h5>
                                            <small class="ranked-attr">1.054.292</small>
                                        </div>
                                    </article>
                                    <article class="topview-item">
                                        <div class="topview_rank">02</div>
                                        <div class="topview_name">
                                            <h5 class="series-name"><a
                                                    href="/sang-tac/4638-useless-hero-from-another-world">Useless Hero
                                                    from Another World</a></h5>
                                            <small class="ranked-attr">963.347</small>
                                        </div>
                                    </article>
                                    <article class="topview-item">
                                        <div class="topview_rank">03</div>
                                        <div class="topview_name">
                                            <h5 class="series-name"><a
                                                    href="/sang-tac/14076-nhan-vat-phan-dien-hang-ba-muon-duoc-song-yen-binh">Nhân
                                                    Vật Phản Diện Hạng Ba Muốn Được Sống Yên Bình</a></h5>
                                            <small class="ranked-attr">857.979</small>
                                        </div>
                                    </article>
                                    <article class="topview-item">
                                        <div class="topview_rank">04</div>
                                        <div class="topview_name">
                                            <h5 class="series-name"><a
                                                    href="/sang-tac/481-ngai-vang-cua-hoang-de">Ngai Vàng Của Hoàng
                                                    Đế</a></h5>
                                            <small class="ranked-attr">787.925</small>
                                        </div>
                                    </article>
                                    <article class="topview-item">
                                        <div class="topview_rank">05</div>
                                        <div class="topview_name">
                                            <h5 class="series-name"><a href="/sang-tac/2980-huyen-thoai-co-ngoc">Huyền
                                                    Thoại Cổ Ngọc</a></h5>
                                            <small class="ranked-attr">542.642</small>
                                        </div>
                                    </article>

                                    <div class="see-more_text">
                                        <a href="https://docln.net/oln-xem-nhieu-nhat/tat-ca"><i
                                                class="fas fa-hand-o-right"></i> Xem thêm</a>
                                    </div>
                                </div>

                            </section>
                            <section class="sub-index-style">
                                <div class="title-wrapper">
                                    <div class="section-title">Truyện sáng tác mới</div>
                                </div>
                                <div class="section-content">
                                    {{-- Bắt đầu truyện  --}}
                                    <ul class="others-list">
                                        <li>
                                            <div class="others-img no-padding">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://docln.net/img/nocover.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="others-info">
                                                <h5 class="others-name"><a
                                                        href="/sang-tac/19128-cuoc-hanh-trinh-chinh-phuc-the-gioi-cua-co-cong-chua-tinh-nghich">Cuộc
                                                        hành trình chinh phục thế giới của cô công chúa tinh nghịch</a>
                                                </h5>
                                                <small class="series-summary">&quot;Hừm bạn nói bạn không có lỗi
                                                    sao?&quot;
                                                    &quot;Chịu trách nhiệm cho những việc mìn...</small>
                                            </div>
                                        </li>
                                        {{-- Kết thúc truyện  --}}

                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
