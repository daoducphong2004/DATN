@extends('home.layout.master')

@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="orinovel-page convert-type">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container">
                    <span class="page-name"><a href="convert"><i class="fas fa-circle"></i>Convert (Máy dịch)</a></span>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <section id="ln-newest" class="detail-list has-pagination">
                        <header class="section-title"><span>Mới cập nhật</span></header>
                        <main class="sect-body">

                            @foreach ($moi_cap_nhat as $item)
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a
                                            href="{{ route('truyen.truyen', $item->book->slug) }}">
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
                                            <a
                                                href="{{ route('truyen.truyen', $item->book->slug) }}">{{ $item->book->title }}</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a
                                                    href="/thanh-vien/173017">Kevinn</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>{{ $item->book->word_count }}</a></span>
                                            </div>
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

                        </main>
                        {{-- <div class="pagination-footer">
                            <div class="pagination_wrap">
                                <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                                <a href="https://docln.net/convert?page=1"
                                    class="paging_item paging_prevnext prev  disabled ">Đầu</a>

                                <a href="https://docln.net/convert?page=1" class="paging_item page_num  current ">1</a>
                                <a href="https://docln.net/convert?page=2" class="paging_item page_num ">2</a>
                                <a href="https://docln.net/convert?page=3" class="paging_item page_num ">3</a>
                                <a href="https://docln.net/convert?page=4" class="paging_item page_num ">4</a>
                                <a href="https://docln.net/convert?page=5" class="paging_item page_num ">5</a>

                                <!--<a href=" https://docln.net/convert?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                                <a href="https://docln.net/convert?page=24"
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

                <div class="col-12 col-lg-4">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            @foreach ($convert->random(1) as $item)
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
                            <section id="recent-comments" class="index-section">
                                <div class="title-wrapper">
                                    <div class="section-title">Bình luận mới</div>
                                </div>
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
                                                        <a href="{{ route('user.books',['userId' => $comment->user->id]) }}">
                                                            <img src="{{ !empty($comment->user->avatar_url) ? $comment->user->avatar_url : asset('img/noava.png') }}"
                                                                alt="Commenter's avatar">
                                                        </a>
                                                    </div>
                                                    <a href="{{ route('user.books',['userId' => $comment->user->id]) }}" rel="nofollow"
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
                                                    href="/convert/5140-otonari-no-tenshi-sama-ni-itsu-no-aida-ni-ka-dame-ningen-ni-sareteiru-ken">Otonari
                                                    no Tenshi-sama ni Itsu no Aida ni ka Dame Ningen ni Sareteiru ken</a>
                                            </h5>
                                            <small style="display: block; opacity: 0.6;">1.353.531</small>
                                        </div>
                                    </article>
                                    <article class="topview-item">
                                        <div class="topview_rank">02</div>
                                        <div class="topview_name">
                                            <h5 class="series-name"><a href="/convert/6260-ankoku-kishi-monogatari">Ankoku
                                                    kishi monogatari~Yuusha wo taosu tameni Maou ni Shoukansaremashita~</a>
                                            </h5>
                                            <small style="display: block; opacity: 0.6;">930.151</small>
                                        </div>
                                    </article>
                                    <article class="topview-item">
                                        <div class="topview_rank">03</div>
                                        <div class="topview_name">
                                            <h5 class="series-name"><a
                                                    href="/convert/737-after-transformation-mine-and-her-wild-fantasy">AFTER
                                                    TRANSFORMATION, MINE AND HER WILD FANTASY</a></h5>
                                            <small style="display: block; opacity: 0.6;">838.556</small>
                                        </div>
                                    </article>
                                    <article class="topview-item">
                                        <div class="topview_rank">04</div>
                                        <div class="topview_name">
                                            <h5 class="series-name"><a href="/convert/4-date-a-live">Date a Live</a></h5>
                                            <small style="display: block; opacity: 0.6;">817.026</small>
                                        </div>
                                    </article>
                                    <article class="topview-item">
                                        <div class="topview_rank">05</div>
                                        <div class="topview_name">
                                            <h5 class="series-name"><a
                                                    href="/convert/128-kono-subarashii-sekai-ni-shukufuku-o">Kono
                                                    Subarashii Sekai Ni Shukufuku o!</a></h5>
                                            <small style="display: block; opacity: 0.6;">633.157</small>
                                        </div>
                                    </article>

                                    <div class="see-more_text">
                                        <a href="https://docln.net/convert-xem-nhieu-nhat/tat-ca"><i
                                                class="fas fa-hand-o-right"></i> Xem thêm</a>
                                    </div>
                                </div>

                            </section>
                            <section class="sub-index-style">
                                <div class="title-wrapper">
                                    <div class="section-title">Truyện convert mới</div>
                                </div>
                                <div class="section-content">
                                    <ul class="others-list">
                                        <li>
                                            <div class="others-img no-padding">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/series/covers/s19079-0470a46d-1b0b-441f-9c9f-3ae2a609d460.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="others-info">
                                                <h5 class="others-name"><a
                                                        href="/convert/19079-i-was-caught-up-in-a-hero-summoning-but-that-world-is-at-peace-gg-trans">I
                                                        Was Caught up in a Hero Summoning, but That World Is at Peace</a>
                                                </h5>
                                                <small class="series-summary">Mọi chuyện diễn ra quá đột ngột. Sau khi cuối
                                                    cùng cũng hiểu được tình h...</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="others-img no-padding">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/series/covers/s19073-102b93a2-6e62-4109-a5fe-4968bda3f007.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="others-info">
                                                <h5 class="others-name"><a
                                                        href="/convert/19073-chrome-shelled-regios">Chrome Shelled
                                                        Regios</a></h5>
                                                <small class="series-summary">Regios là những thành phố di động, che chở
                                                    cho nhân loại trên Trái đất c...</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="others-img no-padding">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/series/covers/s18942-65b806e4-3d88-4e45-8b01-b2a6d1619877.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="others-info">
                                                <h5 class="others-name"><a
                                                        href="/convert/18942-y-kien-ca-nhan-cua-dau-hoang">Ý kiến cá nhân
                                                        của Đấu hoàng</a></h5>
                                                <small class="series-summary">Mọi người đều là phàm nhân, và để giết ai đó,
                                                    đạn là đủ. Đây là suy nghĩ...</small>
                                            </div>
                                        </li>
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
                                                        href="/convert/18911-chuyen-sinh-thanh-lap-trinh-vien-toi-hoc-lam-game">tôi
                                                        học làm game.</a></h5>
                                                <small class="series-summary">Hãy tưởng tượng bạn đang bước vào một khu
                                                    rừng đầy bí ẩn, nơi mọi thứ đề...</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="others-img no-padding">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/series/covers/s18909-7a1954d3-a336-47a1-b202-c4c07836e9a1.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="others-info">
                                                <h5 class="others-name"><a
                                                        href="/convert/18909-ore-no-imouto-ga-saikou-no-okazudatta">Ore no
                                                        Imouto ga Saikou no Okazudatta</a></h5>
                                                <small class="series-summary">Một ngày nọ, khi tôi đang chơi trò chơi khiêu
                                                    dâm thì bị em gái bắt gặp....</small>
                                            </div>
                                        </li>
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
