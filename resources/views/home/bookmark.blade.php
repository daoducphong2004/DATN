@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        <a href="">
            <div class="index-background d-none d-lg-block"
                style="background-image: url('{{ asset('/images/banners/fbg_d.jpg') }}')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('{{ asset('/images/banners/fbg_m.jpg') }}'); background-size: cover">
            </div>
        </a>
    </div>

    <main id="mainpart" class="user-page">
        <div class="container">
            <div class="row d-block clearfix">
                <div class="col-12 col-lg-3 float-right">
                    <section class="private-tabs">
                        <header>
                            <h4 class="section-name">Tài khoản</h4>
                            <span class="user-name">LinhLinh931993</span>
                        </header>
                        <ul class="user-private-tabs">
                            <li class=""><a href="kesach"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Kệ sách</a></li>
                            <li class="current"><a href="bookmark"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Bookmark</a></li>
                            <li class=""><a href="tinnhan"><span class="none inline-l"><i
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
                        </main>

                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
