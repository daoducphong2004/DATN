@extends('home.layout.master')
@section('content')
        <div class="page-top-group ">
            <a href="/truyen/13957">
                <div class="index-background d-none d-lg-block"
                    style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_d.png')"></div>
                <div class="index-background d-lg-none"
                    style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_m.png'); background-size: cover">
                </div>
            </a>
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
                                <div class="popular-thumb-item mr-1">
                                    <div class="thumb-wrapper">
                                        <a href="/sang-tac/16682-cot-truyen-cua-nhan-vat-phu"
                                            title="Cốt Truyện Của Nhân Vật Phụ">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('https://i2.docln.net/ln/series/covers/s16682-ad6f16e2-acb3-4d4f-acb2-0e4d488f97dc.jpg')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr series-title" title="Cốt Truyện Của Nhân Vật Phụ"><a
                                                    href="/sang-tac/16682-cot-truyen-cua-nhan-vat-phu"
                                                    title="Cốt Truyện Của Nhân Vật Phụ">Cốt Truyện Của Nhân Vật Phụ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- kết thúc truyện  --}}
                            </main>
                        </div>

                        <section id="ln-newest" class="detail-list has-pagination">
                            <header class="section-title"><span>Mới cập nhật</span></header>
                            <main class="sect-body">
                                {{-- Bắt đầu truyện  --}}
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="/sang-tac/19121-hon-nguyen-the-loan-hang-that-thu">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio"
                                                        style="background-image: url('https://i2.docln.net/ln/series/covers/s19121-adb7ea65-775b-402a-bcdb-ed164af8fbb2.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="/sang-tac/19121-hon-nguyen-the-loan-hang-that-thu">Hỗn Nguyên Thể:
                                                Loạn Hàng Thất Thứ</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a
                                                    href="/thanh-vien/62311">Lwy C.Theory</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số
                                                    từ</span>14,007</a></span></div>
                                        </div>
                                        <div class="series-summary">Trong suốt hàng nghìn năm, nhân loại không nhận ra sức
                                            mạnh tiềm ẩn bên trong mình, thứ năng lượng vô hạn tạo nền tảng cho Hòa thuật
                                            định hình thế giới.
                                            Thứ được gọi là Hòa Thuật này dựa trên hai nguồn năng lượng cơ bản: Dương Năng,
                                            đại diện cho sức mạnh vật lý và khả năng thay đổi thực tại, và Âm...</div>
                                        <div class="lastest-chapter">
                                            <a
                                                href="/sang-tac/19121-hon-nguyen-the-loan-hang-that-thu/c142322-chuong-03-cuoc-chien-trong-rung">Chương
                                                03: Cuộc Chiến Trong Rừng</a>
                                            <small>Tập 01</small>
                                        </div>
                                    </div>
                                </article>
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
                            Pagination sau PHP sẽ có
                        </section>
                    </div>

                    <div class="col-12 col-lg-3">
                        <div class="row">

                            <div class="col-12 col-md-6 col-lg-12">
                                {{-- Bắt đầu giới thiệu truyện --}}
                                <section class="sub-index-style sub-index-introduce">
                                    <div class="title-wrapper">
                                        <div class="section-title">Giới thiệu truyện</div>
                                    </div>
                                    <div class="section-content">
                                        <div class="series-cover">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio"
                                                    style="background-image: url('https://i2.docln.net/ln/series/covers/s8476-c787cc41-7cd3-4740-a0ee-a7e1e2b6ff0b.jpg')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="series-information">
                                            <h3 class="series-title"><a
                                                    href="/sang-tac/8476-kiep-nay-la-anh-trai-cua-nhan-vat-chinh">Anh Trai
                                                    Nhân Vật Chính</a></h3>
                                            <div class="series-summary">ANH TRAI NHÂN VẬT CHÍNH - TẬP 1 ĐÃ ĐƯỢC XUẤT BẢN!
                                                ---
                                                Huyền Thoại Tái Sinh là cuốn tiểu thuyết em gái của Khang viết ra, và hắn
                                                tái sinh thành một nhâ...</div>
                                        </div>
                                    </div>
                                </section>
                                {{-- kết thúc giới thiệu truyện --}}

                                <section id="recent-comments" class="sub-index-style">
                                    <div class="title-wrapper">
                                        <div class="section-title">Bình luận mới</div>
                                    </div>
                                    <div class="section-content">
                                        {{-- Bắt đầu bình luận --}}
                                        <div class="comment-item">
                                            <div class="comment-user_ava">
                                                <a href="https://docln.net/thanh-vien/179387">
                                                    <img
                                                        src="https://i2.docln.net/ln/users/avatars/u179387-8c1e17e4-6ed8-4de2-8d43-7c76aa2993cd.jpg">
                                                </a>
                                            </div>
                                            <div class="comment-info">
                                                <div class="comment-top">
                                                    <a href="https://docln.net/sang-tac/18947-thien-menh-cuu-roi-cua-nguoi-chua-lanh?comment_id=2574461&amp;reply_id=2574625#ln-comment-2574625"
                                                        rel="nofollow" class="comment-user_name strong">Sagi_YD</a>
                                                    <small class="comment-location">
                                                        <a
                                                            href="https://docln.net/sang-tac/18947-thien-menh-cuu-roi-cua-nguoi-chua-lanh?comment_id=2574461&amp;reply_id=2574625#ln-comment-2574625">
                                                            <time class="timeago" title="01-09-2024 11:56:08"
                                                                datetime="2024-09-01T11:56:08+07:00">
                                                                01-09-2024 11:56:08
                                                            </time>
                                                        </a>
                                                    </small>
                                                </div>

                                                <div class="comment-content">
                                                    @Yuhhh: với tư cách người mới bị mod gõ thì tui tới để chia sẻ kinh
                                                    nghiệm đây. Các dấu ---, viết th...
                                                </div>

                                                <span class="series-name"><a
                                                        href="https://docln.net/sang-tac/18947-thien-menh-cuu-roi-cua-nguoi-chua-lanh?comment_id=2574461&amp;reply_id=2574625#ln-comment-2574625">Thiên
                                                        Mệnh Cứu Rỗi Của Người Chữa Lành</a></span>
                                            </div>
                                        </div>
                                        {{-- kết thúc bình luận  --}}

                                    </div>
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
