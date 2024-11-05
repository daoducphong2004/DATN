@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="user-page">
        <div class="container">
            <div class="row d-block clearfix">
                <div class="col-12 col-lg-3 float-right">
                    <section class="private-tabs">
                        <header>
                            <h4 class="section-name">Tài khoản</h4>
                            <span class="user-name">{{ Auth::user()->username }}</span>
                        </header>
                        <ul class="user-private-tabs">
                            <li class=""><a href="/ke-sach"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Kệ sách</a></li>
                            <li class="current"><a href="/bookmark"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Bookmark</a></li>
                            <li class=""><a href="/tin-nhan"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Hộp thư</a></li>
                        </ul>
                    </section>
                </div>

                <div style="text-align: center; margin: 0 auto 10px auto;">
                </div>

                <div class="col-12 col-lg-9 float-left">
                    <section class="bookmark-section basic-section">
                        <header class="sect-header"><span class="sect-title">Danh sách đánh dấu</span></header>
                        <main class="sect-body">
                            {{-- {{ dd($bookmarks) }} --}}
                            @foreach($bookmarks as $bookmark)
                            <article class="bookmark-item clear">
                                <div class="series-cover">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio" style="background-image: url('https://i.hako.vn/ln/series/covers/s18800-25238b64-eb85-47c7-afd8-19f595d6312a.jpg');"></div>
                                    </div>
                                </div>
                                <div class="series-title">
                                    <a href="{{ url('/truyen/' . $bookmark->book_id . '-sau-khi-duoc-toi-an-ui-co-em-gai-cung-cha-khac-me-da-khong-the-song-thieu-toi-duoc-nua') }}" class="">
                                        Sau khi được tôi an ủi, em gái đã không thể sống thiếu tôi được nữa
                                    </a>
                                    <span class="bm-toggle_symbol" style="cursor: pointer">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </div>
                                <div class="none bm-toggle clear">
                                    <ul class="bookmarks_list unstyled clear">
                                        @foreach($bookmark as $chapter)
                                        <li>
                                            <div class="chapter-title">
                                                <a href="{{ url('/truyen/' . $bookmark->book_id . '/c' . $chapter->id . '-' . str_slug($chapter->title)) }}">
                                                    {{ $chapter->title }}
                                                </a>
                                            </div>
                                            <div class="volume-title line-ellipsis">
                                                <small>Web novel</small>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </article>
                            @endforeach
                            

                        </main>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.querySelector(".bm-toggle_symbol");
    const toggleContent = document.querySelector(".bm-toggle.clear");

    toggleButton.addEventListener("click", function() {
        toggleContent.classList.toggle("none");
    });
});

    </script>
@endsection
