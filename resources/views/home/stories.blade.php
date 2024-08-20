@extends('home.layout.master')

@section('content')
    <div class="page-top-group  at-index ">
        <a href="/thao-luan/2591">
            <div class="index-background d-none d-lg-block" style="background-image: url('{{asset('users/user/img/path/12890_d_l.jpg')}}')">
            </div>
            <div class="index-background d-lg-none"
                style="background-image: url('{{asset('users/user/img/path/12890_m_l.jpg')}}'); background-size: cover"></div>
        </a>
    </div>

    <div class="container">
        <div class="row d-block clearfix">
            <div class="col-12 col-lg-12 float-left">
                <section class="feature-section at-series clear">
                    <main class="section-body">
                        <div class="top-part">
                            <div class="row">
                                <div class="left-column col-4 col-md-4">
                                    <div class="series-cover">
                                        <div class="series-type">
                                            <span>Truyện dịch</span>
                                        </div>
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio">
                                                <img src="{{asset('users/user/img/path/image1.jpg')}}" width="100%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-8" style="font-size: large;">
                                    <div class="row">
                                        <div class="col-12 " style="flex: 0">
                                            <div class="series-name-group">
                                                <span class="series-name">
                                                    Tiêu đề truyện
                                                </span>
                                            </div>
                                            <div class="series-information mb-0 ">
                                                <div class="series-gernes" x-data="{ more: false }">
                                                    <a class="series-gerne-item link-underline link-underline-opacity-0 text-success"
                                                        href="">Comedy</a>
                                                    <a class="series-gerne-item link-underline link-underline-opacity-0 text-success"
                                                        href="">Harem</a>
                                                    <a class="series-gerne-item link-underline link-underline-opacity-0 text-success"
                                                        href="">Romance</a>
                                                    <a class="series-gerne-item link-underline link-underline-opacity-0 text-success"
                                                        href="">School Life</a>
                                                    <a class="series-gerne-item link-underline link-underline-opacity-0 text-success"
                                                        href="">Slice of Life</a>
                                                    <a class="series-gerne-item link-underline link-underline-opacity-0 text-success"
                                                        href="">Web Novel</a>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-name">Tác giả:</span>
                                                    <span class="info-value "><a href=""
                                                            class="link-underline link-underline-opacity-0 text-success">Kuroneko
                                                            Doragon</a></span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-name">Họa sĩ:</span>
                                                    <span class="info-value"><a href=""
                                                            class="link-underline link-underline-opacity-0 text-success">Monoto</a></span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-name">Tình trạng:</span>
                                                    <span class="info-value">
                                                        <a href=""
                                                            class="link-underline link-underline-opacity-0 text-success">Đang
                                                            tiến hành</a>
                                                    </span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-name">Tóm tắt: </span>
                                                    <div>
                                                        <p class="info-value">Mô tảnnnnnnnnnnnnnnnn
                                                            nnnnnnnnnnnnnnn
                                                            nnnnnnnnnnnnnnnnnnnnnnnnnn
                                                            nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn
                                                            nnnnnnnnnnnnnnnnnnnnnnn

                                                        </p>
                                                    </div>
                                                </div>

                                                <a href=""><button class="btn btn-primary mt-2  ms-3">Đọc tiếp</button></a>
                                            </div>
                                        </div>
                                        <div class="col-12 side-features mt-2" >
                                            <div class="row">
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <a id="collect"
                                                        class="side-feature-button button-follow follow link-underline link-underline-opacity-0 text-black"
                                                        href="https://docln.net/login">
                                                        <span class="block feature-value"><i
                                                                class="far fa-heart"></i></span>
                                                        <span class="block feature-name">Like</span>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <div class="series-rating rated">
                                                        <a href=""
                                                            class="link-underline link-underline-opacity-0 text-black">
                                                            <label for="open-rating"
                                                                class="side-feature-button button-rate">
                                                                <span class="block feature-value"><i
                                                                        class="far fa-star"></i></span>
                                                                <span class="block feature-name">Đánh giá</span>
                                                            </label>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <a href=""
                                                        class="side-feature-button link-underline link-underline-opacity-0 text-black">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-comments"></i></span>
                                                        <span class="block feature-name ">Bàn luận</span>
                                                    </a>
                                                </div>
                                                <div class="col-4 col-md feature-item width-auto-xl">
                                                    <label for="open-sharing" class="side-feature-button">
                                                        <span class="block feature-value"><i
                                                                class="fas fa-share-alt"></i></span>
                                                        <span class="block feature-name">Chia sẻ</span>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="bottom-part" style="margin-top: -10px;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row statistic-list">
                                        <div class="col-12 col-md-3 statistic-item block-wide at-mobile">
                                            <div class="statistic-name">Lần cuối</div>
                                            <div class="statistic-value"><time class="timeago"
                                                    title="18/01/2023 10:03:55" datetime="">Đang chạy...</time></div>
                                        </div>
                                        <div class="col-4 col-md-3 statistic-item">
                                            <div class="statistic-name">Số từ</div>
                                            <div class="statistic-value">Tổng số tử</div>
                                        </div>
                                        <div class="col-4 col-md-3 statistic-item">
                                            <div class="statistic-name">Đánh giá</div>
                                            <div class="statistic-value">0 / <small>0</small></div>
                                        </div>
                                        <div class="col-4 col-md-3 statistic-item">
                                            <div class="statistic-name">Lượt xem</div>
                                            <div class="statistic-value">25.374</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-wrapper other-facts col-12">

                                </div>
                            </div>
                        </div>
                    </main>
                </section>
            </div>
            <div id="rd-sidebar" class="col-12 col-lg-12 float-right">
                <div class="row top-group">
                    <div class="col-12 no-push push-3-m col-md-6 no-push-l col-lg-12">
                    </div>
                </div>
                <section id="list-vol" class="none list_vol-section">
                    <div class="list-volume-wrapper basic-section">
                        <header class="sect-header"><span class="sect-title">Mục lục</span></header>
                        <span class="list-vol_off">
                            <i class="fas fa-times"></i>
                        </span>
                        <ol class="list-volume unstyled no-margin no-padding">
                            <li data-scrollTo="#volume_23120"><span class="list_vol-order"></span><span
                                    class="list_vol-title">Chương</span></li>
                        </ol>
                    </div>
                </section>
            </div>
            <div class="col-12 col-lg-12 float-left">
                <div style="text-align: center; margin: 0 auto 10px auto;">
                </div>
                <section class="volume-list at-series basic-section volume-mobile gradual-mobile ">
                    <header id="volume_23120" class="sect-header">
                        <span class="mobile-icon"><i class="fas fa-chevron-down"></i></span>
                        <span class="sect-title">
                            Chương 1
                        </span>
                    </header>
                    <main class="d-lg-block">
                        <div class="row">

                            <div class="col-12 col-md-12">
                                <ul class="list-chapters at-series">
                                    <li class>
                                        <div class="chapter-name">
                                            <a href="" title="TieuDeChuong">Tiêu đề chương</a>
                                        </div>
                                        <div class="chapter-time">ThoiDiemXuatBan</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </main>
                </section>

                <section id="series-comments" class="basic-section">
                    <header class="sect-header tab-list">
                        <span class="sect-title tab-title" data-tab-index="1">Tổng bình luận <span
                                class="comments-count">(103)</span></span>
                    </header>
                    <main id="fbcmt_root" class="comment-wrapper d-lg-block clear">
                        <span style="padding: 10px; display: inline-block;">Báo cáo bình luận không phù hợp ở <a
                                href="/thao-luan/619-bao-cao-binh-luan" style="color: blue">đây</a></span>
                        <div id="tab-content-1" class="tab-content clear">
                            <section class="ln-comment">
                                <main class="ln-comment-body">
                                    <div class="ln-comment_sign-in long-text">
                                        Bạn phải <a href="/login">đăng nhập</a> hoặc <a href="/register">tạo tài
                                            khoản</a> để bình luận.
                                    </div>
                                    <!-- start comment -->
                                    <div class="ln-comment-group">
                                        <div id="ln-comment-2343587" class="ln-comment-item mt-3 clear"
                                            data-comment="2343587" data-parent="2343587">
                                            <div class="row">
                                                <div class="col-2 text-center">
                                                    <img src="https://i2.docln.net/ln/users/avatars/u173017-ef4b6219-34db-4bb7-9061-cf3c9471f8aa.jpg"
                                                        class="w-full rounded-full rounded-circle" width="50px">

                                                </div>
                                                <div class="col-2">
                                                    <a class="font-bold link-underline link-underline-opacity-0 text-secondary"
                                                        href="/thanh-vien/tên người dung">Tên Người dùng</a>
                                                </div>

                                                <div class=" col-md-8">
                                                    <ul class="list-chapters at-series">
                                                        <li class>
                                                            <div class="chapter-name">
                                                                <span>nội dung comment</span>
                                                            </div>
                                                            <div class="chapter-time">
                                                                <time>
                                                                    16-01-2024 11:59:43
                                                                </time>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                        </div>
            </div>
            <!-- end commnet  -->
            <div class="ln-comment-page">
                <div class="pagination-footer">
                    <div class="pagination_wrap">
                        <a href class="paging_item paging_prevnext prev  disabled ">Trước</a>
                        <a href="https://docln.net/truyen/16873-ban-thuo-nho-tro-thanh-than-tuong-noi-tieng-nhung-co-gai-de-thuong-dang-ung-ho-toi?page=2"
                            class="paging_item paging_prevnext next">Sau</a>
                    </div>
                </div>
            </div>
            </main>
            <script>
                var token = 'Y5fty94ZhGkdoX987eRk6NgUTxy4grERQLFLEjqk';
                var comment_type = 'series';
                var comment_typeid = '16873';
            </script>
            </section>
        </div>
    </div>
@endsection
