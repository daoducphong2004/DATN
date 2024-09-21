@extends('home.layout.master')
@section('content')


    <div class="page-top-group  at-index ">
        <a href="/truyen/13957">
            <div class="index-background d-none d-lg-block"
                style="background-image: url('{{asset('/images/banners/fbg_d.jpg')}}')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('{{asset('/images/banners/fbg_m.jpg')}}'); background-size: cover">
            </div>
        </a>
    </div>

    <main id="mainpart" class="at-index">
        <div class="container" style="margin-bottom: 40px;">
            <div class="row">
                <div class="no-push col-12 push-2-l col-8-l">
                    <div id="announcements" class="index-top_notification">

                        <div class="annoucement-item">
                            <a href="/thao-luan/2871-su-kien-chon-banner-trang-chu-ky-4-khao-sat"
                                style=" color:  Violet">SỰ KIỆN CHỌN BANNER TRANG CHỦ KỲ 4 - GIAI ĐOẠN ĐĂNG KÝ</a>
                        </div>

                        <div class="annoucement-item">
                            <a href="/thao-luan/2859-thay-doi-ve-nhom-dich" style=" color:  red">Thay đổi về nhóm
                                dịch</a>
                        </div>

                        <div class="annoucement-item">
                            <a href="/thao-luan/2789-bao-cao-truyen-vi-pham" style="">Báo cáo truyện vi phạm</a>
                        </div>

                        <div class="annoucement-item">
                            <a href="/thao-luan/2766-khong-the-su-dung-facebook-login-nua" style=" color:  red">Không
                                thể sử dụng Facebook đăng nhập nữa</a>
                        </div>

                        <div class="annoucement-item">
                            <a href="/thao-luan/2336-donate-ho-tro-cong-ln" style=" color:  red">Donate hỗ trợ Cổng
                                LN</a>
                        </div>

                        <div class="annoucement-item">
                            <a href="/thao-luan/2267-khong-dang-manga" style=" color:  red">Không đăng Manga</a>
                        </div>

                        <div class="annoucement-item">
                            <a href="/thao-luan/2250-hako-faqs-nhung-cau-hoi-thuong-gap-tren-hako"
                                style=" color:  blue">(HAKO FAQs) NHỮNG CÂU HỎI THƯỜNG GẶP TRÊN HAKO</a>
                        </div>

                        <div class="annoucement-item">
                            <a href="/thao-luan/1122-thu-nghiem-thong-bao-chuong-moi" style="">Thử nghiệm thông
                                báo chương mới</a>
                        </div>

                        <div class="annoucement-item">
                            <a href="/thao-luan/20-quy-dinh-chung-doi-voi-cac-du-an-dang-tai-cong-light-novel-bao-gom-truyen-dichconvert-va-oln"
                                style=" color:  red">Quy định chung đối với các dự án đăng tại Cổng Light Novel</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="daily-recent_views">
                        <header class="title">
                            <span class="top-tab_title title-active"><i class="fas fa-trophy"></i> Nổi bật</span>
                            <span class="top-tab_title"><a
                                    href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=topthang">Top
                                    tháng</a></span>
                            <span class="top-tab_title"><a
                                    href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=top">Toàn
                                    t/gian</a></span>
                        </header>
                        <main class="row slider d-block">
                            @foreach ($data as $item)
                                {{-- bắt đầu truyện đơn --}}
                                <div class="popular-thumb-item mr-1">
                                        <div class="thumb-wrapper">
                                            <a href="{{route('truyen.truyen', $item->slug)}}">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('{{ asset(Storage::url($item->book_path)) }}')">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="thumb-detail">
                                                <div class="thumb_attr series-title"
                                                    title="Cô nàng Yankee Shimizu-san bàn bên đã nhuộm tóc đen mất rồi"><a
                                                        href="{{route('truyen.truyen', $item->slug)}}">{{ $item->title}}</a></div>
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
                            <a href="https://docln.net/thao-luan"><span class="sts-bold">Thảo</span><span
                                    class="sts-empty">Luận</span></a>
                        </header>
                        <main>
                            {{-- bắt đầu bài thảo luận đơn --}}
                            <div class="topic-item">
                                <div class="row">
                                    <div class="col-9 line-ellipsis">
                                        <i class="fas fa-circle" style="color: #1ee865; margin-right: 4px;"></i>
                                        <a href="/thao-luan/2849-hoi-truyen-tu-az-goc-chat-nham-cho-con-dan-hako-30?comment_id=2572581&amp;reply_id=2573000#ln-comment-2573000"
                                            title="Hỏi Truyện từ A&gt;Z. Góc chat nhảm cho con dân Hako 3.0">
                                            Hỏi Truyện từ A&gt;Z. Góc chat nhảm cho con dân Hako 3.0
                                        </a>
                                    </div>
                                    <div class="col-3 topic-data text-right">
                                        <time class="timeago" title="31-08-2024 07:18:30"
                                            datetime="2024-08-31T07:18:30+07:00"></time>
                                    </div>
                                </div>
                            </div>
                            {{-- kết thúc thảo luận đơn --}}
                            <div class="topic-item">
                                <div class="row">
                                    <div class="col-9 line-ellipsis">
                                        <i class="fas fa-circle" style="color: #eb1d57; margin-right: 4px;"></i>
                                        <a href="/thao-luan/1610-trang-yeu-cau-xoa-truyentapchuong?comment_id=2572306&amp;reply_id=2572686#ln-comment-2572686"
                                            title="Trang yêu cầu xóa truyện/tập/chương">
                                            Trang yêu cầu xóa truyện/tập/chương
                                        </a>
                                    </div>
                                    <div class="col-3 topic-data text-right">
                                        <time class="timeago" title="30-08-2024 22:12:52"
                                            datetime="2024-08-30T22:12:52+07:00"></time>
                                    </div>
                                </div>
                            </div>
                            <div class="topic-item">
                                <div class="row">
                                    <div class="col-9 line-ellipsis">
                                        <i class="fas fa-circle" style="color: #28e1e8; margin-right: 4px;"></i>
                                        <a href="/thao-luan/2874-ai-doc-roi-cho-minh-xin-xiu-y-de-sua"
                                            title="Ai đọc rồi cho mình xin xíu ý đê sửa">
                                            Ai đọc rồi cho mình xin xíu ý đê sửa
                                        </a>
                                    </div>
                                    <div class="col-3 topic-data text-right">
                                        <time class="timeago" title="30-08-2024 21:59:16"
                                            datetime="2024-08-30T21:59:16+07:00"></time>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </section>

                    {{-- Lịch sử truyện vừa đọc --}}
                    <div class="d-lg-none" style="margin-top: 20px">
                        <section id="reading-history" class="index-section" x-data="{ storage: (JSON.parse(localStorage.getItem('reading_series')) || []).slice(0, 4) }">
                            <header class="section-title">
                                <a href="https://docln.net/lich-su-doc">
                                    <span class="sts-bold">Truyện</span><span class="sts-empty">vừa đọc</span>
                                </a>
                            </header>
                            <main class="sect-body">
                                Chưa có lịch sử đọc!
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
                        <header class="section-title"><span class="sts-bold">Sáng tác</span><span
                                class="sts-empty">Mới Nhất</span></header>
                        <main class="row">

                            {{-- Bắt đầu truyện đơn --}}
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/sang-tac/17768-tro-thanh-quy-toc-tai-di-gioi/c142234-chuong-15-con-duong-thanh-than"
                                        title="Chương 15: Con đường thành thần">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s17768-3949a606-d319-4347-8411-283a037baf06.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 15: Con đường thành thần">
                                            <a href="/sang-tac/17768-tro-thanh-quy-toc-tai-di-gioi/c142234-chuong-15-con-duong-thanh-than"
                                                title="Chương 15: Con đường thành thần">Chương 15: Con đường thành
                                                thần</a>
                                        </div>
                                        <div class="thumb_attr volume-title">Quyển 1: Dị giới</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/sang-tac/17768-tro-thanh-quy-toc-tai-di-gioi"
                                        title="Trở Thành Quý Tộc Ở Thế Giới Khác">Trở Thành Quý Tộc Ở Thế Giới Khác</a>
                                </div>
                            </div>
                            {{-- kết thúc truyện đơn --}}

                            <div class="thumb-item-flow col-4 col-lg-2 see-more">
                                <div class="thumb-wrapper">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio"
                                            style="background-image: url('img/nocover.jpg');"></div>
                                    </div>
                                    <a href="https://docln.net/sang-tac">
                                        <div class="thumb-see-more">
                                            <div class="see-more-inside">
                                                <div class="see-more-content">
                                                    <div class="see-more-icon"><i
                                                            class="fas fa-arrow-circle-right"></i></div>
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
                            {{-- Bắt đầu truyện đơn  --}}
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18315-chuyen-sinh-vao-game-romcom-yandere-co-nang-nguy-hiem-bong-nhien-tro-thanh-em-gai-toi/c142233-chap-54-em-ay-da-quen"
                                        title="Chap 54: Em ấy đã quên">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://docln.net/img/nocover.jpg"></div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chap 54: Em ấy đã quên"><a
                                                href="/truyen/18315-chuyen-sinh-vao-game-romcom-yandere-co-nang-nguy-hiem-bong-nhien-tro-thanh-em-gai-toi/c142233-chap-54-em-ay-da-quen"
                                                title="Chap 54: Em ấy đã quên">Chap 54: Em ấy đã quên</a></div>
                                        <div class="thumb_attr volume-title">WN</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18315-chuyen-sinh-vao-game-romcom-yandere-co-nang-nguy-hiem-bong-nhien-tro-thanh-em-gai-toi"
                                        title="Chuyển sinh vào game Romcom Yandere, cô nàng nguy hiểm bỗng nhiên trở thành em gái tôi.">Chuyển
                                        sinh vào game Romcom Yandere, cô nàng nguy hiểm bỗng nhiên trở thành em gái
                                        tôi.</a>
                                </div>
                            </div>
                            {{-- Kết thúc truyện đơn --}}


                            <div class="thumb-item-flow col-4 col-lg-2 see-more">
                                <div class="thumb-wrapper">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio"
                                            style="background-image: url('img/nocover.jpg');"></div>
                                    </div>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=capnhat">
                                        <div class="thumb-see-more">
                                            <div class="see-more-inside">
                                                <div class="see-more-content">
                                                    <div class="see-more-icon"><i
                                                            class="fas fa-arrow-circle-right"></i></div>
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
                                <a href="https://docln.net/lich-su-doc">
                                    <span class="sts-bold">Truyện</span><span class="sts-empty">vừa đọc</span>
                                </a>
                            </header>
                            <main class="sect-body">
                                Chưa có lịch sử đọc!
                            </main>
                        </section>
                    </div>
                    <section id="recent-comments" class="index-section">
                        <header class="section-title">
                            <span class="sts-bold">Bình luận</span><span class="sts-empty">gần đây</span>
                        </header>
                        <main class="sect-body pr-5">
                            {{-- Bắt đầu comment --}}
                            <div class="comment-item-at-index">
                                <div class="comment-info">
                                    <span class="series-name"><a
                                            href="https://docln.net/truyen/16865-hakuyoku-no-polaris?comment_id=2573031#ln-comment-2573031">Hakuyoku
                                            no Polaris</a></span>

                                    <div class="comment-content">
                                        var
                                    </div>

                                    <div class="comment-top">
                                        <div class="comment-user_ava">
                                            <a href="https://docln.net/thanh-vien/142791">
                                                <img src="https://i2.docln.net/ln/users/avatars/u142791-c5ea9c36-b7e4-4103-b69f-6dfa31fd9dee.jpg"
                                                    alt="Commenter's avatar">
                                            </a>
                                        </div>
                                        <a href="https://docln.net/truyen/16865-hakuyoku-no-polaris?comment_id=2573031#ln-comment-2573031"
                                            rel="nofollow" class="comment-user_name strong">m4dness</a>
                                        <small class="comment-location">
                                            <a
                                                href="https://docln.net/truyen/16865-hakuyoku-no-polaris?comment_id=2573031#ln-comment-2573031">
                                                <time class="timeago" title="31-08-2024 08:15:25"
                                                    datetime="2024-08-31T08:15:25+07:00">
                                                    31-08-2024 08:15:25
                                                </time>
                                            </a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            {{-- kết thúc comment --}}
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
                            <header class="section-title"><span class="sts-bold">Truyện</span><span
                                    class="sts-empty">Vừa Đăng</span>
                            </header>
                            <main class="sect-body">
                                <div class="row">

                                    {{-- bắt đầu truyện  --}}
                                    <article class="list-item list-none col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-4 col-md-3 col-lg-4">
                                                <div class="series-cover">
                                                    <a href="/truyen/19103-ngoi-nha-quy-di">
                                                        <div class="a6-ratio">
                                                            <div class="content img-in-ratio lazyload"
                                                                data-bg="https://i2.docln.net/ln/series/covers/s19103-11931bc8-0477-4e2c-95d0-5266dad9d570.jpg">
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8 col-md-9 col-lg-8">
                                                <div class="list-detail">
                                                    <h4 class="series-title text-xl font-bold"><a
                                                            href="/truyen/19103-ngoi-nha-quy-di">ngôi nhà quỷ dị</a>
                                                    </h4>
                                                    <div class="series-summary">Một chiếc xe buýt không có tài xế, chở
                                                        theo một nhóm người bị nguyền rủa, tiến đến một ngôi nhà ma quái
                                                        màu đen...
                                                        Trong...</div>
                                                    <div class="lastest-chapter">
                                                        <!--<a href="/truyen/19103-ngoi-nha-quy-di/c142100-chuong-1-xe-buyt">Chương 1: Xe Buýt</a>
                                            <small>cánh cửa thứ nhất</small>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    {{-- kết thúc truyện --}}

                                </div>
                            </main>
                            <div class="see-more_cover">
                                <a class="see-more"
                                    href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=truyenmoi">
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
                                <div class="rank-circle-item">
                                    <span class="rank-number">1</span>
                                    <div class="series-detail clear">
                                        <div class="series-cover">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('https://i.docln.net/lightnovel/covers/s8115-eedb5d53-c2ec-465c-b352-875cead20179-m.jpg') ">
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="series-title"><a
                                                href="/truyen/8115-ryoushin-no-shakkin-wo-katagawari-shite-morau-jouken-wa-nihon-ichi"
                                                title="Ryoushin no Shakkin wo Katagawari shite Morau Jouken wa Nihon Ichi">Ryoushin
                                                no Shakkin wo Katagawari shite Morau Jouken wa Nihon Ichi</a></h5>
                                        <small class="rank-count">12,406 theo dõi</small>
                                    </div>
                                </div>

                                <div class="rank-circle-item">
                                    <span class="rank-number">2</span>
                                    <div class="series-detail clear">
                                        <div class="series-cover">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('https://i.docln.net/lightnovel/covers/s3569-4f9d3270-6d42-4301-8ad7-761e917fc3b6-m.jpg') ">
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="series-title"><a
                                                href="/truyen/3569-in-no-jitsury-okusha-ni-naritakute-new"
                                                title="In no jitsury okusha ni naritakute!">In no jitsury okusha ni
                                                naritakute!</a></h5>
                                        <small class="rank-count">11,946 theo dõi</small>
                                    </div>
                                </div>
                                <div class="rank-circle-item">
                                    <span class="rank-number">3</span>
                                    <div class="series-detail clear">
                                        <div class="series-cover">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('https://i2.docln.net/ln/series/covers/s11586-a810d8f0-3973-41fb-ae79-63c968a7a12e.jpg') ">
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="series-title"><a href="/truyen/11586-shimotsuki-wa-mob-ga-suki"
                                                title="Shimotsuki wa Mob ga Suki">Shimotsuki wa Mob ga Suki</a></h5>
                                        <small class="rank-count">10,586 theo dõi</small>
                                    </div>
                                </div>
                                <div class="rank-circle-item">
                                    <span class="rank-number">4</span>
                                    <div class="series-detail clear">
                                        <h5 class="series-title"><a
                                                href="/truyen/8252-ket-hon-voi-dua-con-gai-ma-toi-cuc-ghet-trong-lop"
                                                title="Kết hôn với đứa con gái mà tôi cực ghét trong lớp.">Kết hôn với
                                                đứa con gái mà tôi cực ghét trong lớp.</a></h5>
                                        <small class="rank-count">10,491 theo dõi</small>
                                    </div>
                                </div>
                                {{-- truyện top kết thúc --}}
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
                    {{-- truyện bắt đầu ( ở đây sẽ lấy chapter cuôis) --}}
                    <div class="thumb-item-flow thumb-slider">
                        <div class="thumb-wrapper">
                            <a href="/truyen/5842-ngay-ay-co-trai-bom-roi/c56348-oneshot" title="Oneshot">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload"
                                        data-bg="https://i.docln.net/lightnovel/covers/s5842-b6df17ff-6eed-4121-9057-4899fa49ed34-m.jpg">
                                    </div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Oneshot"><a
                                        href="/truyen/5842-ngay-ay-co-trai-bom-roi/c56348-oneshot"
                                        title="Oneshot">Oneshot</a></div>
                                <div class="thumb_attr volume-title">Truyện ngắn</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/5842-ngay-ay-co-trai-bom-roi"
                                title="Ngày ấy, có trái bom rơi">Ngày ấy, có trái bom rơi</a></div>
                    </div>
                    {{-- truyện kết thúc --}}
                </main>
            </section>
        </div>


@endsection
