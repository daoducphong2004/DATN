@extends('home.layout.master')
@section('content')
    <div class="page-top-group ">
        <a href="/thao-luan/2591">
            <div class="index-background d-none d-lg-block"
                style="background-image: url('{{ asset('users/user/img/path/12890_d_l.jpg') }}')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('{{ asset('users/user/img/path/12890_d_l.jpg') }}'); background-size: cover">
            </div>
        </a>
    </div>

    <main id="mainpart" class="page-board"
        style="background: url('img/background/bg-violet.jpg') no-repeat fixed 70px center; background: none;">
        <header class="page-title">
            <div class="page-name_wrapper">
                <div class="container relative">
                    <span class="page-name"><a href="thao-luan"><i class="fas fa-circle"></i>Thảo luận</a></span>
                </div>
            </div>
        </header>

        <div class="container clear">
            <section class="board-toolkit clear">
                <div class="board_categ-list">
                    <ul class="ln-list-default">
                        <li class="l-l-d_item">Chuyên mục <i class="fas fa-caret-down"></i></li>
                    </ul>
                    <ul class="ln-list-option none">
                        <li class="l-l-o_item"><a href="https://docln.net/thao-luan"><i class="fas fa-circle"
                                    aria-hidden="true" style="color: black"></i> Tất cả</a></li>
                        <li class="l-l-o_item"><a href="/thao-luan?chuyen-muc=1"><i class="fas fa-circle" aria-hidden="true"
                                    style="color: #eb1d57"></i> Thông báo</a></li>
                        <li class="l-l-o_item"><a href="/thao-luan?chuyen-muc=2"><i class="fas fa-circle" aria-hidden="true"
                                    style="color: #e01bb4"></i> Tin tức</a></li>
                        <li class="l-l-o_item"><a href="/thao-luan?chuyen-muc=3"><i class="fas fa-circle" aria-hidden="true"
                                    style="color: #252eef"></i> Hỏi đáp</a></li>
                        <li class="l-l-o_item"><a href="/thao-luan?chuyen-muc=4"><i class="fas fa-circle" aria-hidden="true"
                                    style="color: #28e1e8"></i> Đánh giá</a></li>
                        <li class="l-l-o_item"><a href="/thao-luan?chuyen-muc=5"><i class="fas fa-circle" aria-hidden="true"
                                    style="color: #1ee865"></i> Thảo luận</a></li>
                    </ul>
                </div>
                <a class="button button-newpost button-green" href="https://docln.net/action/page/create"><i
                        class="fas fa-plus"></i> Thêm</a>
                <!-- <ul class="board-toolkit-list">
                        <li class="b-t-l_item choosed"><a href="">Gần đây</a></li>
                        <li class="b-t-l_item"><a href="">Bài viết mới</a></li>
                        <li class="b-t-l_item"><a href="">Chuyên mục</a></li>
                    </ul> -->
            </section>
            <section class="board-list has-pagination" style="margin-top: 20px;">
                <table class="broad-table table table-borderless">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-8 col-md-4 col-lg-5 col-xl-5">Chủ đề</th>
                            <th class="col-md-3 col-lg-2 d-none d-md-block">Chuyên mục</th>
                            <th class="col-1 d-none d-lg-block">Bình luận</th>
                            <th class="col-md-2 col-lg-1 d-none d-lg-block">Lượt xem</th>
                            <th class="col-md-2 col-lg-1 d-none d-md-block">Gần nhất</th>
                            <th class="col-4 col-md-3 col-lg-2 text-right">Người đăng cuối</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title" href="https://docln.net/thao-luan/2266-thao-luan-cho-tac-gia-oln"><i
                                        class="fas fa-star"></i> Thảo luận cho tác giả OLN</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #1ee865"></i></span>
                                    <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #1ee865"></i></span>
                                <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">12026</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">1.096.407</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="01-09-2024 13:29:00"
                                    datetime="2024-09-01T13:29:00+07:00">2 phút</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua147882-7be81ecb-c5e4-49d2-bb70-2acaa6c4eff1.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/147882">Kachou Fuugetsu</a>
                                    <time class="topic-time block md:hidden timeago" title="01-09-2024 13:29:00"
                                        datetime="2024-09-01T13:29:00+07:00">2 phút</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><i
                                        class="fas fa-star"></i> Góp ý và báo lỗi</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">5457</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">623.608</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="01-09-2024 10:29:09"
                                    datetime="2024-09-01T10:29:09+07:00">3 giờ</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i2.docln.net/ln/users/avatars/u176255-0b232fec-4279-4d6e-92d6-20d218f2ec2b.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/176255">_proslimevn</a>
                                    <time class="topic-time block md:hidden timeago" title="01-09-2024 10:29:09"
                                        datetime="2024-09-01T10:29:09+07:00">3 giờ</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title" href="https://docln.net/thao-luan/77-quy-dinh-doi-voi-oln"><i
                                        class="fas fa-star"></i> Quy Định Đối Với Truyện Sáng Tác - OLN</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">6260</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">774.713</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="01-09-2024 09:06:33"
                                    datetime="2024-09-01T09:06:33+07:00">4 giờ</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua118777-52732184-13b3-4e1c-8c00-0401cd429706.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/118777">Thiên Ý</a>
                                    <time class="topic-time block md:hidden timeago" title="01-09-2024 09:06:33"
                                        datetime="2024-09-01T09:06:33+07:00">4 giờ</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/1610-trang-yeu-cau-xoa-truyentapchuong"><i
                                        class="fas fa-star"></i> Trang yêu cầu xóa truyện/tập/chương</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">3530</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">257.305</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="31-08-2024 21:01:09"
                                    datetime="2024-08-31T21:01:09+07:00">17 giờ</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i2.docln.net/ln/users/avatars/u196592-41e37e0a-c17b-4bc5-96be-23dc79da9a4b.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/196592">DDH</a>
                                    <time class="topic-time block md:hidden timeago" title="31-08-2024 21:01:09"
                                        datetime="2024-08-31T21:01:09+07:00">17 giờ</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title" href="https://docln.net/thao-luan/368-huong-dan-dang-truyen"><i
                                        class="fas fa-star"></i> Hướng dẫn đăng truyện</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">2864</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">480.764</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="31-08-2024 20:18:14"
                                    datetime="2024-08-31T20:18:14+07:00">17 giờ</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua59827-01692547-f48f-443a-b1ba-cf142484bc59.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/59827">UNIVERSE</a>
                                    <time class="topic-time block md:hidden timeago" title="31-08-2024 20:18:14"
                                        datetime="2024-08-31T20:18:14+07:00">17 giờ</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/2745-quy-dinh-doi-voi-truyen-dich"><i
                                        class="fas fa-star"></i> Quy Định Đối Với Truyện Dịch</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">5</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">3.694</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="28-08-2024 21:55:53"
                                    datetime="2024-08-28T21:55:53+07:00">4 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i2.docln.net/ln/users/avatars/u55780-e82ee35c-d626-4725-b992-f0864bab9b0e.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/55780">Ashir_kei</a>
                                    <time class="topic-time block md:hidden timeago" title="28-08-2024 21:55:53"
                                        datetime="2024-08-28T21:55:53+07:00">4 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/4-convert-la-gi-tai-sao-lai-doc-light-novel-convert"><i
                                        class="fas fa-star"></i> Convert là gì? Tại sao lại đọc Light Novel Convert?</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #252eef"></i></span>
                                    <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #252eef"></i></span>
                                <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">173</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">47.916</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="28-08-2024 20:09:47"
                                    datetime="2024-08-28T20:09:47+07:00">4 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img src="https://docln.net/img/noava.png">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/200411">rip_zero</a>
                                    <time class="topic-time block md:hidden timeago" title="28-08-2024 20:09:47"
                                        datetime="2024-08-28T20:09:47+07:00">4 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/2662-cap-nhat-nhung-thay-doi-chuc-nang-trong-cln"><i
                                        class="fas fa-star"></i> Cập nhật những thay đổi chức năng trong CLN</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">3</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">1.928</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="27-08-2024 18:22:08"
                                    datetime="2024-08-27T18:22:08+07:00">5 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/1">Embers</a>
                                    <time class="topic-time block md:hidden timeago" title="27-08-2024 18:22:08"
                                        datetime="2024-08-27T18:22:08+07:00">5 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/614-cam-nang-cho-cac-translator"><i
                                        class="fas fa-star"></i> Phòng hỗ trợ dịch thuật</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #1ee865"></i></span>
                                    <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #1ee865"></i></span>
                                <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">13100</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">889.349</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="26-08-2024 19:16:54"
                                    datetime="2024-08-26T19:16:54+07:00">6 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i2.docln.net/ln/users/avatars/u187359-c85ce786-6cac-4bbe-b141-0abddca7cdaa.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/187359">Kai9206</a>
                                    <time class="topic-time block md:hidden timeago" title="26-08-2024 19:16:54"
                                        datetime="2024-08-26T19:16:54+07:00">6 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/20-quy-dinh-chung-doi-voi-cac-du-an-dang-tai-cong-light-novel-bao-gom-truyen-dichconvert-va-oln"><i
                                        class="fas fa-star"></i> Quy định chung đối với các dự án đăng tại Cổng Light
                                    Novel</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">1180</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">301.740</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="25-08-2024 18:15:55"
                                    datetime="2024-08-25T18:15:55+07:00">7 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua28271-87da1ac1-69cb-4cb8-a3ae-91f4e6e63206.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/28271">Magnet</a>
                                    <time class="topic-time block md:hidden timeago" title="25-08-2024 18:15:55"
                                        datetime="2024-08-25T18:15:55+07:00">7 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/2766-khong-the-su-dung-facebook-login-nua"><i
                                        class="fas fa-star"></i> Không thể sử dụng Facebook đăng nhập nữa</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">21</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">21.455</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="12-05-2024 23:52:35"
                                    datetime="2024-05-12T23:52:35+07:00">4 tháng</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img src="https://docln.net/img/noava.png">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/168196">Dangbulu</a>
                                    <time class="topic-time block md:hidden timeago" title="12-05-2024 23:52:35"
                                        datetime="2024-05-12T23:52:35+07:00">4 tháng</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/2376-quy-chuan-duyet-banner-box-sang-tac"><i
                                        class="fas fa-star"></i> Quy chuẩn duyệt Banner box Sáng tác</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">5</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">6.228</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="14-06-2023 11:14:53"
                                    datetime="2023-06-14T11:14:53+07:00">1 năm</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/1">Embers</a>
                                    <time class="topic-time block md:hidden timeago" title="14-06-2023 11:14:53"
                                        datetime="2023-06-14T11:14:53+07:00">1 năm</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title" href="https://docln.net/thao-luan/2560-event-cho-cong-ln"><i
                                        class="fas fa-star"></i> Event cho Cổng LN?</a>
                                <div class="subtitle-category none-m">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">79</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">18.067</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block">
                                <time class="topic-time timeago" title="20-05-2023 18:36:47"
                                    datetime="2023-05-20T18:36:47+07:00">1 năm</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar creator none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/1">Embers</a>
                                    <time class="topic-time block md:hidden timeago" title="20-05-2023 18:36:47"
                                        datetime="2023-05-20T18:36:47+07:00">1 năm</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/2849-hoi-truyen-tu-az-goc-chat-nham-cho-con-dan-hako-30">
                                    Hỏi Truyện từ A&gt;Z. Góc chat nhảm cho con dân Hako 3.0</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #1ee865"></i></span>
                                        <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #1ee865"></i></span>
                                <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">2011</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">63.270</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="01-09-2024 13:17:31" datetime="2024-09-01T13:17:31+07:00">14 phút</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i.docln.net/lightnovel/users/ua39-dcda761a-ec2c-40a4-bf98-f7faee936682.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/39">medassin</a>
                                        <time class="topic-time block md:hidden timeago" title="01-09-2024 13:17:31" datetime="2024-09-01T13:17:31+07:00">14 phút</time>
                                    </div>
                                </td>
                                                                            </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/2876-moi-nguoi-co-the-doc-bo-truyen-cua-minh-va-danh-gia-no-duoc-khongdieu-do-se-la-thu-minh-hoc-hoicam-on-cac-ban-da-toi">  Mọi người có thể đọc bộ truyện của mình và đánh giá nó được không.Điều đó sẽ là thứ mình học hỏi,cảm ơn các bạn đã tới.</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i></span>
                                            <a href="/thao-luan?chuyen-muc=4">Đánh giá</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i></span>
                                    <a href="/thao-luan?chuyen-muc=4">Đánh giá</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">2</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">118</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="01-09-2024 12:59:54"
                                    datetime="2024-09-01T12:59:54+07:00">32 phút</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i2.docln.net/ln/users/avatars/u78290-4d034e5e-4860-4b75-9da8-2cbe931ebd1e.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/78290">Loy</a>
                                    <time class="topic-time block md:hidden timeago" title="01-09-2024 12:59:54"
                                        datetime="2024-09-01T12:59:54+07:00">32 phút</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/2871-su-kien-chon-banner-trang-chu-ky-4-khao-sat"> SỰ
                                    KIỆN CHỌN BANNER TRANG CHỦ KỲ 4 - GIAI ĐOẠN ĐĂNG KÝ</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #eb1d57"></i></span>
                                        <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">99</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">7.235</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="01-09-2024 08:16:02" datetime="2024-09-01T08:16:02+07:00">5 giờ</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i2.docln.net/ln/users/avatars/u56379-60c8ea2e-2362-4076-ad37-015523cd2217.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/56379">Thỏ Tuyết</a>
                                        <time class="topic-time block md:hidden timeago" title="01-09-2024 08:16:02" datetime="2024-09-01T08:16:02+07:00">5 giờ</time>
                                    </div>
                                </td>
                                                                            </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/85-de-xuat-lnwn-cho-cac-trans">  Đề xuất LN/WN cho các trans</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                            <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                    <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">10166</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">1.016.671</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="31-08-2024 21:52:42"
                                    datetime="2024-08-31T21:52:42+07:00">16 giờ</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img src="https://docln.net/img/noava.png">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/94482">Hakumo</a>
                                    <time class="topic-time block md:hidden timeago" title="31-08-2024 21:52:42"
                                        datetime="2024-08-31T21:52:42+07:00">16 giờ</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title" href="https://docln.net/thao-luan/2875-cach-tao-note-trong-chuong">
                                    cách tạo note trong chương</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #252eef"></i></span>
                                        <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #252eef"></i></span>
                                <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">2</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">174</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="31-08-2024 17:07:33" datetime="2024-08-31T17:07:33+07:00">20 giờ</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i.docln.net/lightnovel/users/ua4870-23959c2c-b327-4dbd-bef9-e452c6a2e263.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/4870">Sakamaki yuuta</a>
                                        <time class="topic-time block md:hidden timeago" title="31-08-2024 17:07:33" datetime="2024-08-31T17:07:33+07:00">20 giờ</time>
                                    </div>
                                </td>
                                                                            </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/2874-ai-doc-roi-cho-minh-xin-xiu-y-de-sua"> <i class="fas fa-paperclip"></i> Ai đọc rồi cho mình xin xíu ý đê sửa</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i></span>
                                            <a href="/thao-luan?chuyen-muc=4">Đánh giá</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i></span>
                                    <a href="/thao-luan?chuyen-muc=4">Đánh giá</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">1</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">358</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="31-08-2024 12:15:12"
                                    datetime="2024-08-31T12:15:12+07:00">1 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua49602-1345a49b-cfc6-4ad2-a2f2-843cb2ba7183.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/49602">Kuriiro Cà Phê</a>
                                    <time class="topic-time block md:hidden timeago" title="31-08-2024 12:15:12"
                                        datetime="2024-08-31T12:15:12+07:00">1 ngày</time>
                                </div>
                            </td>
                            <!--<div class="board-topic-series none col-12">
                                    <a href="/sang-tac/19076-last-birthday" class="b-t-s_item">{&quot;id&quot;:19076,&quot;title&quot;:&quot;LAST BIRTHDAY!&quot;,&quot;slug&quot;:&quot;19076-last-birthday&quot;,&quot;user_id&quot;:162758,&quot;member_ids&quot;:[],&quot;group_id&quot;:60,&quot;summary&quot;:&quot;&lt;p&gt;Ng\u00e0y l\u00e0m vi\u1ec7c cu\u1ed1i c\u00f9ng.&lt;\/p&gt;&quot;,&quot;extra&quot;:&quot;&quot;,&quot;status&quot;:3,&quot;author&quot;:&quot;AnXemH*n&quot;,&quot;illustrator&quot;:&quot;&quot;,&quot;altname&quot;:&quot;Sinh nh\u1eadt cu\u1ed1i c\u00f9ng.&quot;,&quot;type&quot;:3,&quot;view_count&quot;:320,&quot;last_month_view_count&quot;:307,&quot;last_month_view_count_at&quot;:&quot;2024-09-01 00:00:03&quot;,&quot;collection&quot;:1,&quot;cover&quot;:&quot;&quot;,&quot;locked&quot;:1,&quot;is_mature&quot;:0,&quot;latestchapter_id&quot;:141889,&quot;comment_experiment&quot;:1,&quot;show_to_role&quot;:null,&quot;commentable&quot;:1,&quot;word_count&quot;:4749,&quot;comment_count&quot;:0,&quot;rating_count&quot;:0,&quot;rating_sum&quot;:0,&quot;pin_comment_id&quot;:0,&quot;comment_page_id&quot;:0,&quot;created_at&quot;:&quot;2024-08-27T10:10:07.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-08-27T10:14:10.000000Z&quot;,&quot;deleted_at&quot;:null,&quot;delete_reason&quot;:null,&quot;redirect_series_id&quot;:0,&quot;notification_ignore_users&quot;:[],&quot;readable_status&quot;:&quot;\u0110\u00e3 ho\u00e0n th\u00e0nh&quot;,&quot;average_rating&quot;:0}</a>
                                </div>-->
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/2865-de-toi-chi-ban-viet-ban-thao-theo-cach-chuyen-nghiep-hon-nhe">
                                    Để tôi chỉ bạn viết bản thảo theo cách chuyên nghiệp hơn nhé.</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #1ee865"></i></span>
                                        <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #1ee865"></i></span>
                                <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">7</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">928</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="30-08-2024 22:16:58" datetime="2024-08-30T22:16:58+07:00">1 ngày</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i2.docln.net/ln/users/avatars/u195774-3ca196cc-ef94-4c6e-ad8a-315eea3300cb.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/195774">tư bản vô danh</a>
                                        <time class="topic-time block md:hidden timeago" title="30-08-2024 22:16:58" datetime="2024-08-30T22:16:58+07:00">1 ngày</time>
                                    </div>
                                </td>
                                                                            </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/2789-bao-cao-truyen-vi-pham">  Báo cáo truyện vi phạm</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">239</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">32.097</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="30-08-2024 20:05:48"
                                    datetime="2024-08-30T20:05:48+07:00">1 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua102504-397e52e1-5e71-4f7e-b303-173c9a2a2a4e.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/102504">namLN</a>
                                    <time class="topic-time block md:hidden timeago" title="30-08-2024 20:05:48"
                                        datetime="2024-08-30T20:05:48+07:00">1 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/2515-quan-bong-da-hako-chuyen-phuc-vu-dan-bong-da">
                                    Quán Bóng Đá Hako - Chuyên phục vụ dân bóng đá.</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #1ee865"></i></span>
                                        <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #1ee865"></i></span>
                                <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">1270</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">134.385</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="30-08-2024 09:23:22" datetime="2024-08-30T09:23:22+07:00">2 ngày</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i.docln.net/lightnovel/users/ua39-dcda761a-ec2c-40a4-bf98-f7faee936682.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/39">medassin</a>
                                        <time class="topic-time block md:hidden timeago" title="30-08-2024 09:23:22" datetime="2024-08-30T09:23:22+07:00">2 ngày</time>
                                    </div>
                                </td>
                                                                            </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/2873-nho-tim-truyen">  Nhờ tìm truyện</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                            <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                    <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">4</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">189</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="29-08-2024 22:00:20"
                                    datetime="2024-08-29T22:00:20+07:00">3 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua59827-01692547-f48f-443a-b1ba-cf142484bc59.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/59827">UNIVERSE</a>
                                    <time class="topic-time block md:hidden timeago" title="29-08-2024 22:00:20"
                                        datetime="2024-08-29T22:00:20+07:00">3 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title" href="https://docln.net/thao-luan/1434-sakura-chan-that-de-thuong">
                                    <i class="fas fa-paperclip"></i> Sakura-chan thật dễ thương!!!</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #1ee865"></i></span>
                                        <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #1ee865"></i></span>
                                <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">35</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">4.825</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="29-08-2024 21:37:18" datetime="2024-08-29T21:37:18+07:00">3 ngày</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/1">Embers</a>
                                        <time class="topic-time block md:hidden timeago" title="29-08-2024 21:37:18" datetime="2024-08-29T21:37:18+07:00">3 ngày</time>
                                    </div>
                                </td>
                                                                                <!--<div class="board-topic-series none col-12">
                                    <a href="/truyen/5236-miyamoto-sakura-ga-kawaii-dake-no-shousetsu" class="b-t-s_item">{&quot;id&quot;:5236,&quot;title&quot;:&quot;Miyamoto Sakura ga Kawaii Dake no Shousetsu.&quot;,&quot;slug&quot;:&quot;5236-miyamoto-sakura-ga-kawaii-dake-no-shousetsu&quot;,&quot;user_id&quot;:16122,&quot;member_ids&quot;:[],&quot;group_id&quot;:415,&quot;summary&quot;:&quot;&lt;p&gt;Miyamoto Sakura th\u1eadt d\u1ec5 th\u01b0\u01a1ng. T\u1ea1i sao \u01b0?&lt;\/p&gt;&lt;p&gt;1) C\u00f4 \u1ea5y tr\u00f4ng th\u1eadt d\u1ec5 th\u01b0\u01a1ng.&lt;\/p&gt;&lt;p&gt;2) C\u00e1i c\u00e1ch m\u00e0 v\u1ebb m\u1eb7t c\u00f4 li\u00ean t\u1ee5c thay \u0111\u1ed5i th\u1eadt l\u00e0 d\u1ec5 th\u01b0\u01a1ng.&lt;\/p&gt;&lt;p&gt;3) C\u00e1ch c\u00f4 \u1ea5y d\u1ec5 d\u00e0ng b\u1ecb k\u00edch th\u00edch l\u00e0 d\u1ec5 th\u01b0\u01a1ng.&lt;\/p&gt;&lt;p&gt;4) V\u1eabn nh\u1edb l\u1eddi c\u1ea7u h\u00f4n t\u1eeb khi ch\u00fang t\u00f4i c\u00f2n nh\u1ecf th\u1eadt l\u00e0 d\u1ec5 th\u01b0\u01a1ng.&lt;\/p&gt;&lt;p&gt;5) Ng\u1ef1c c\u1ee7a c\u00f4 \u1ea5y l\u1edbn \u0111\u1ebfn ng\u1ea1c nhi\u00ean.&lt;\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\/p&gt;&lt;p&gt;\u2026.Th\u1ea5y ch\u01b0a, v\u1edbi t\u1ea5t c\u1ea3 nh\u1eefng \u0111i\u1ec1u n\u00e0y c\u1ed9ng l\u1ea1i, c\u00f4 \u1ea5y c\u00f2n c\u00f3 th\u1ec3 l\u00e0 g\u00ec kh\u00e1c?&lt;\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\/p&gt;&lt;p&gt;V\u00e0 v\u00ec v\u1eady, cu\u1ed1n ti\u1ec3u thuy\u1ebft n\u00e0y t\u1ed3n t\u1ea1i l\u00e0 \u0111\u1ec3 ca ng\u1ee3i c\u00f4, cu\u1ed1n ti\u1ec3u thuy\u1ebft thu\u1ea7n khi\u1ebft nh\u1ea5t tr\u00ean th\u1ebf gi\u1edbi. Ti\u1ec7n \u0111\u00e2y, t\u00ean t\u00f4i l\u00e0 Oogami Hikaru, t\u00f4i l\u00e0 ng\u01b0\u1eddi b\u1ea1n thu\u1edf nh\u1ecf c\u1ee7a Sakura, v\u00e0 h\u00ecnh nh\u01b0 l\u00e0 chuy\u1ec3n sinh c\u1ee7a Th\u1ea7n B\u1eafc \u00c2u Odin.&lt;\/p&gt;&quot;,&quot;extra&quot;:&quot;&lt;p&gt;Links page: &lt;a href=\&quot;https:\/\/www.facebook.com\/AsiaTranslationTeam\/\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;https:\/\/www.facebook.com\/AsiaTranslationTeam\/&lt;\/a&gt;&lt;\/p&gt;&lt;p&gt;Ti\u1ebfn \u0111\u1ed9 T\u1eadp 1: 100%&lt;\/p&gt;&lt;p&gt;Ti\u1ebfn \u0111\u1ed9 T\u1eadp 2: Ch\u01b0a r\u00f5.&lt;\/p&gt;&lt;p&gt;Link ENG: &lt;a href=\&quot;https:\/\/www.novelupdates.com\/series\/just-a-story-about-miyamoto-sakura-being-cute\/\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;https:\/\/www.novelupdates.com\/series\/just-a-story-about-miyamoto-sakura-being-cute\/&lt;\/a&gt;&lt;\/p&gt;&lt;p&gt;B\u1ea3n d\u1ecbch \u0111\u00e3 c\u00f3 s\u1ef1 cho ph\u00e9p c\u1ee7a translator ENG: Frozen&lt;\/p&gt;&quot;,&quot;status&quot;:1,&quot;author&quot;:&quot;Daisuke Suzuki&quot;,&quot;illustrator&quot;:&quot;rurudo&quot;,&quot;altname&quot;:&quot;Just a Story About Miyamoto Sakura Being Cute.; \u5bae\u672c\u30b5\u30af\u30e9\u304c\u53ef\u611b\u3044\u3060\u3051\u306e\u5c0f\u8aac\u3002; Ch\u1ec9 L\u00e0 M\u1ed9t C\u00e2u Chuy\u1ec7n V\u1ec1 Vi\u1ec7c Miyamoto Sakura Th\u1eadt D\u1ec5 Th\u01b0\u01a1ng&quot;,&quot;type&quot;:1,&quot;view_count&quot;:126244,&quot;last_month_view_count&quot;:126236,&quot;last_month_view_count_at&quot;:&quot;2024-09-01 00:00:03&quot;,&quot;collection&quot;:790,&quot;cover&quot;:&quot;https:\/\/c1.hako.re\/lightnovel\/covers\/s5236-4019b6e1-157a-4ac8-9fbd-c5a2fc86bf96.jpg&quot;,&quot;locked&quot;:1,&quot;is_mature&quot;:0,&quot;latestchapter_id&quot;:52717,&quot;comment_experiment&quot;:1,&quot;show_to_role&quot;:null,&quot;commentable&quot;:1,&quot;word_count&quot;:34616,&quot;comment_count&quot;:142,&quot;rating_count&quot;:0,&quot;rating_sum&quot;:0,&quot;pin_comment_id&quot;:0,&quot;comment_page_id&quot;:0,&quot;created_at&quot;:&quot;2019-07-15T08:32:01.000000Z&quot;,&quot;updated_at&quot;:&quot;2019-07-25T06:40:41.000000Z&quot;,&quot;deleted_at&quot;:null,&quot;delete_reason&quot;:null,&quot;redirect_series_id&quot;:0,&quot;notification_ignore_users&quot;:[],&quot;readable_status&quot;:&quot;\u0110ang ti\u1ebfn h\u00e0nh&quot;,&quot;average_rating&quot;:0}</a>
                                </div>-->
                                                    </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/35-co-nhom-nao-ranh-dich-dum-bo-seiun-wo-kakeru">  Có Nhóm nào rảnh dịch dum bộ Seiun wo Kakeru</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                            <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                    <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">3</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">1.211</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="29-08-2024 21:29:01"
                                    datetime="2024-08-29T21:29:01+07:00">3 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar  creator  none block-m">
                                    <img src="https://docln.net/img/noava.png">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/1716">ArthurLancel</a>
                                    <time class="topic-time block md:hidden timeago" title="29-08-2024 21:29:01"
                                        datetime="2024-08-29T21:29:01+07:00">3 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/22-muon-dich-chuyen-convert-da-ngung"> Muốn dịch
                                    chuyện convert đã ngưng</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #252eef"></i></span>
                                        <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #252eef"></i></span>
                                <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">18</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">1.504</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="29-08-2024 21:22:20" datetime="2024-08-29T21:22:20+07:00">3 ngày</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i2.docln.net/ln/users/avatars/u184859-50f8655f-378d-4e73-a4b4-0e7c6dfcf007.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/184859">Vux Thanh</a>
                                        <time class="topic-time block md:hidden timeago" title="29-08-2024 21:22:20" datetime="2024-08-29T21:22:20+07:00">3 ngày</time>
                                    </div>
                                </td>
                                                                            </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/2467-che-truyen-cuoc-song-thuong-nhat-cua-yukito-toi-da-lam">  Chê truyện - Cuộc sống thường nhật của Yukito - Tôi đã lầm</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i></span>
                                            <a href="/thao-luan?chuyen-muc=4">Đánh giá</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i></span>
                                    <a href="/thao-luan?chuyen-muc=4">Đánh giá</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">112</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">12.540</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="29-08-2024 20:34:39"
                                    datetime="2024-08-29T20:34:39+07:00">3 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i2.docln.net/ln/users/avatars/u176255-0b232fec-4279-4d6e-92d6-20d218f2ec2b.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/176255">_proslimevn</a>
                                    <time class="topic-time block md:hidden timeago" title="29-08-2024 20:34:39"
                                        datetime="2024-08-29T20:34:39+07:00">3 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title" href="https://docln.net/thao-luan/619-bao-cao-binh-luan"> Báo cáo
                                    bình luận</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #eb1d57"></i></span>
                                        <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">1836</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">325.689</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="29-08-2024 14:05:33" datetime="2024-08-29T14:05:33+07:00">3 ngày</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i2.docln.net/ln/users/avatars/u176255-0b232fec-4279-4d6e-92d6-20d218f2ec2b.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/176255">_proslimevn</a>
                                        <time class="topic-time block md:hidden timeago" title="29-08-2024 14:05:33" datetime="2024-08-29T14:05:33+07:00">3 ngày</time>
                                    </div>
                                </td>
                                                                            </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/27-upload-anh-dang-bi-loi"><i class="fas fa-lock"></i>  Upload ảnh đang bị lỗi</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">4</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">877</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="29-08-2024 08:28:05"
                                    datetime="2024-08-29T08:28:05+07:00">3 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i2.docln.net/ln/users/avatars/u103595-3eb87fa1-c9a1-4489-8b7c-9509a52ba24d.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/103595">(||-_-)</a>
                                    <time class="topic-time block md:hidden timeago" title="29-08-2024 08:28:05"
                                        datetime="2024-08-29T08:28:05+07:00">3 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/2872-ve-ten-cua-cac-nhan-vat-trong-truyen"> <i
                                        class="fas fa-paperclip"></i> Về tên của các nhân vật trong truyện</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #1ee865"></i></span>
                                        <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #1ee865"></i></span>
                                <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">6</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">679</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="28-08-2024 23:37:14" datetime="2024-08-28T23:37:14+07:00">4 ngày</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i2.docln.net/ln/users/avatars/u176255-0b232fec-4279-4d6e-92d6-20d218f2ec2b.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/176255">_proslimevn</a>
                                        <time class="topic-time block md:hidden timeago" title="28-08-2024 23:37:14" datetime="2024-08-28T23:37:14+07:00">4 ngày</time>
                                    </div>
                                </td>
                                                                                <!--<div class="board-topic-series none col-12">
                                    <a href="/truyen/19027-tieu-thu-bang-gia-chuyen-sinh-khong-muon-ai-den-gan" class="b-t-s_item">{&quot;id&quot;:19027,&quot;title&quot;:&quot;Ti\u1ec3u th\u01b0 b\u0103ng gi\u00e1 chuy\u1ec3n sinh kh\u00f4ng mu\u1ed1n ai \u0111\u1ebfn g\u1ea7n&quot;,&quot;slug&quot;:&quot;19027-tieu-thu-bang-gia-chuyen-sinh-khong-muon-ai-den-gan&quot;,&quot;user_id&quot;:52885,&quot;member_ids&quot;:[],&quot;group_id&quot;:1,&quot;summary&quot;:&quot;&lt;p&gt;Di\u1ec7p Ch\u1ec9 B\u1ea1ch b\u1ecb car-chan h\u00f4n \u0111i \u0111\u1ea7u thai. M\u1ed9t v\u1ecb th\u1ea7n \u0111\u00e3 bi\u1ebfn c\u1eadu tr\u1edf th\u00e0nh m\u1ef9 nh\u00e2n t\u00f3c b\u1ea1c, m\u1eaft t\u00edm l\u1ea1nh l\u00f9ng v\u00e0 l\u00e0 ti\u1ec3u th\u01b0 gi\u00e0u c\u00f3. Ti\u1ec1n ki\u1ebfp ph\u1eadn va ph\u1ea3i c\u00e1i s\u1ed1 l\u00e0m \u0111\u1ed7 ngh\u00e8o kh\u1ec9, Di\u1ec7p Ch\u1ec9 B\u1ea1ch lu\u00f4n ph\u1ea3i lo l\u1eafng v\u1ec1 b\u1eefa t\u1ed1i ch\u1ec9 v\u1edbi v\u00e0i c\u1ecdng h\u00e0nh l\u00e1. \u0110\u1ed9t d\u01b0ng b\u01b0\u1edbc ngo\u1eb7t cu\u1ed9c \u0111\u1eddi x\u1ea3y \u0111\u1ebfn! \u2014 Ngo\u1ea1i tr\u1eeb vi\u1ec7c c\u1eadu \u0111\u00e3 tr\u1edf th\u00e0nh thi\u1ebfu n\u1eef! May m\u1eafn thay, v\u1edbi v\u1ebb m\u1eb7t l\u1ea1nh l\u00f9ng kh\u00f3 ti\u1ebfp c\u1eadn n\u00e0y, s\u1ebd kh\u00f4ng ai d\u00e1m...&lt;\/p&gt;\n&lt;p&gt;\&quot;Hehe... Ch\u1ec9 B\u1ea1ch c\u01b0\u1eddi \u0111\u1eb9p thi\u1ec7t lu\u00f4n \u0111\u00f3~\&quot;&lt;\/p&gt;\n&lt;p&gt;\&quot;Ti\u1ec3u B\u1ea1ch \u00e0, c\u1eadu c\u00f2n n\u1ee3 t\u1edb m\u1ed9t n\u1ee5 h\u00f4n t\u1eeb h\u00f4m qua \u0111\u00f3.\&quot;&lt;\/p&gt;\n&lt;p&gt;\&quot;Ch\u1ecb c\u00f3 th\u1ec3 gi\u1eef kho\u1ea3ng c\u00e1ch v\u1edbi em m\u1ed9t ch\u00fat \u0111\u01b0\u1ee3c kh\u00f4ng!\&quot;&lt;\/p&gt;\n&lt;p&gt;(\u2609_\u2609)&lt;\/p&gt;\n&lt;p&gt;L\u1ea1nh l\u00f9ng v\u00e0 xa l\u00e1nh th\u1ebf n\u00e0y, l\u00e0m sao m\u00e0 h\u1ecd d\u00e1m ti\u1ebfp c\u1eadn m\u00ecnh!&lt;\/p&gt;&quot;,&quot;extra&quot;:&quot;&lt;p&gt;Ehehe, r\u1ea3nh n\u00ean \u0111i pick b\u1ed9 n\u00e0y d\u1ecbch ch\u01a1i ch\u01a1i. V\u00ec b\u1ed9 n\u00e0y g\u1ed1c CN n\u00ean Eng nhi\u1ec1u khi s\u1ebd kh\u00f4ng l\u1ed9t t\u1ea3 \u0111\u01b0\u1ee3c h\u1ebft ngh\u0129a m\u00e0 m\u00ecnh c\u0169ng ch\u1ec9 c\u00f3 m\u1ed7i k\u1ef9 n\u0103ng d\u1ecbch Eng. \u0110o\u1ea1n n\u00e0o kh\u00f4ng r\u00f5 ho\u1eb7c sai ngh\u0129a mong c\u00e1c b\u1ea1n g\u00f3p \u00fd cho m\u00ecnh. M\u1ecdi th\u1eafc m\u1eafc, \u0111\u00e1nh gi\u00e1 hay ph\u1ea3n h\u1ed3i mang t\u00ednh x\u00e2y d\u1ef1ng v\u1ec1 b\u1ea3n d\u1ecbch m\u00ecnh lu\u00f4n n\u1ed3ng h\u1eadu \u0111\u00f3n nh\u1eadn :&amp;gt;&lt;\/p&gt;\n&lt;p&gt;\u00a0&lt;\/p&gt;\n&lt;p&gt;Eng: &lt;a href=\&quot;https:\/\/etherreads.com\/series\/reincarnated-ice-cold-young-lady-dont-let-them-stick-to-you\/\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;\u0110\u00e2y&lt;\/a&gt;\u00a0&lt;\/p&gt;\n&lt;p&gt;CN: &lt;a href=\&quot;https:\/\/book.sfacg.com\/Novel\/568750\/\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;\u0110\u00e2y&lt;\/a&gt;\u00a0&lt;\/p&gt;\n&lt;p&gt;\u00a0&lt;\/p&gt;\n&lt;p&gt;V\u1ec1 ti\u1ebfn \u0111\u1ed9 r\u1ea3i ch\u01b0\u01a1ng th\u00ec tu\u1ea7n n\u00e0o c\u0169ng s\u1ebd c\u00f3 ch\u01b0\u01a1ng, s\u1ed1 ch\u01b0\u01a1ng t\u00f9y v\u00e0o h\u1ee9ng c\u1ee7a m\u00ecnh v\u00e0 s\u1ebd c\u00f3 l\u00fac ch\u1ea1m s\u1ed1 mo.&lt;\/p&gt;&quot;,&quot;status&quot;:1,&quot;author&quot;:&quot;\u5317\u661f - B\u1eafc Tinh&quot;,&quot;illustrator&quot;:&quot;N\/A&quot;,&quot;altname&quot;:&quot;Reincarnated Ice-Cold Young Lady, Don\u2019t Let Them Stick to You; \u8f6c\u751f\u51b0\u5c71\u5927\u5c0f\u59d0\u4e5f\u4e0d\u8981\u88ab\u5979\u4eec\u8d34&quot;,&quot;type&quot;:1,&quot;view_count&quot;:14217,&quot;last_month_view_count&quot;:13223,&quot;last_month_view_count_at&quot;:&quot;2024-09-01 00:00:03&quot;,&quot;collection&quot;:159,&quot;cover&quot;:&quot;https:\/\/i2.docln.net\/ln\/series\/covers\/s19027-b1bf95af-1523-46b4-ab6a-0f4276e47d0e.jpg&quot;,&quot;locked&quot;:1,&quot;is_mature&quot;:0,&quot;latestchapter_id&quot;:142290,&quot;comment_experiment&quot;:1,&quot;show_to_role&quot;:null,&quot;commentable&quot;:1,&quot;word_count&quot;:18490,&quot;comment_count&quot;:28,&quot;rating_count&quot;:0,&quot;rating_sum&quot;:0,&quot;pin_comment_id&quot;:2567011,&quot;comment_page_id&quot;:0,&quot;created_at&quot;:&quot;2024-08-23T15:09:05.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-08-31T14:54:54.000000Z&quot;,&quot;deleted_at&quot;:null,&quot;delete_reason&quot;:null,&quot;redirect_series_id&quot;:0,&quot;notification_ignore_users&quot;:[179820,95986,141877,158664],&quot;readable_status&quot;:&quot;\u0110ang ti\u1ebfn h\u00e0nh&quot;,&quot;average_rating&quot;:0}</a>
                                </div>-->
                                                    </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/227-tot-nhat-khong-nen-xin-spoil">  Tốt nhất không nên xin spoil!</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                            <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                    <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">13</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">959</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="28-08-2024 23:06:12"
                                    datetime="2024-08-28T23:06:12+07:00">4 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i2.docln.net/ln/users/avatars/u176255-0b232fec-4279-4d6e-92d6-20d218f2ec2b.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/176255">_proslimevn</a>
                                    <time class="topic-time block md:hidden timeago" title="28-08-2024 23:06:12"
                                        datetime="2024-08-28T23:06:12+07:00">4 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/283-chia-se-project-len-app-cua-nhom-valvrare"><i
                                        class="fas fa-lock"></i> Chia sẻ Project lên App của nhóm Valvrare</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #eb1d57"></i></span>
                                        <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i></span>
                                <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">26</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">10.491</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="28-08-2024 21:31:18" datetime="2024-08-28T21:31:18+07:00">4 ngày</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/1">Embers</a>
                                        <time class="topic-time block md:hidden timeago" title="28-08-2024 21:31:18" datetime="2024-08-28T21:31:18+07:00">4 ngày</time>
                                    </div>
                                </td>
                                                                            </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/456-ve-quang-cao"><i class="fas fa-lock"></i>  Về quảng cáo</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">21</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">2.128</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="28-08-2024 20:58:41"
                                    datetime="2024-08-28T20:58:41+07:00">4 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i2.docln.net/ln/users/avatars/u176255-0b232fec-4279-4d6e-92d6-20d218f2ec2b.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/176255">_proslimevn</a>
                                    <time class="topic-time block md:hidden timeago" title="28-08-2024 20:58:41"
                                        datetime="2024-08-28T20:58:41+07:00">4 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title" href="https://docln.net/thao-luan/1302-nghe-thuat-nem-da"> Nghệ
                                    thuật ném đá</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #1ee865"></i></span>
                                        <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #1ee865"></i></span>
                                <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">55</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">11.095</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="28-08-2024 19:42:18" datetime="2024-08-28T19:42:18+07:00">4 ngày</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i2.docln.net/ln/users/avatars/u176255-0b232fec-4279-4d6e-92d6-20d218f2ec2b.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/176255">_proslimevn</a>
                                        <time class="topic-time block md:hidden timeago" title="28-08-2024 19:42:18" datetime="2024-08-28T19:42:18+07:00">4 ngày</time>
                                    </div>
                                </td>
                                                                            </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/2859-thay-doi-ve-nhom-dich">  Thay đổi về nhóm dịch</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                    <a href="/thao-luan?chuyen-muc=1">Thông báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">30</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">4.649</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="27-08-2024 23:01:46"
                                    datetime="2024-08-27T23:01:46+07:00">5 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/1">Embers</a>
                                    <time class="topic-time block md:hidden timeago" title="27-08-2024 23:01:46"
                                        datetime="2024-08-27T23:01:46+07:00">5 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/19-muon-nho-nguoi-dich-bo-lv999-no-murabito"> muốn
                                    nhờ người dịch bộ LV999 no Murabito</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #252eef"></i></span>
                                        <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #252eef"></i></span>
                                <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">6</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">2.609</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="26-08-2024 15:42:00" datetime="2024-08-26T15:42:00+07:00">6 ngày</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar  creator  none block-m">
                                        <img src="https://1.bp.blogspot.com/-zDMOS_DNpbM/Ws4kQxUj9LI/AAAAAAABHGQ/HUMgMpamHw8jnPYQ9QqzhBJdmBc5SoWygCHMYCw/w100/default.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/131">weed</a>
                                        <time class="topic-time block md:hidden timeago" title="26-08-2024 15:42:00" datetime="2024-08-26T15:42:00+07:00">6 ngày</time>
                                    </div>
                                </td>
                                                                            </tr>
                                                                <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title" href="https://docln.net/thao-luan/116-help-tim-lnnovel-hay">  [Help] Tìm LN/Novel hay</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                            <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                    <a href="/thao-luan?chuyen-muc=5">Thảo luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">3</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">1.006</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                <time class="topic-time timeago" title="26-08-2024 12:46:48"
                                    datetime="2024-08-26T12:46:48+07:00">6 ngày</time>
                            </td>

                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                <div class="topic-avatar none block-m">
                                    <img
                                        src="https://i2.docln.net/ln/users/avatars/u176255-0b232fec-4279-4d6e-92d6-20d218f2ec2b.jpg">
                                </div>
                                <div class="topic-username block-m">
                                    <a href="/thanh-vien/176255">_proslimevn</a>
                                    <time class="topic-time block md:hidden timeago" title="26-08-2024 12:46:48"
                                        datetime="2024-08-26T12:46:48+07:00">6 ngày</time>
                                </div>
                            </td>
                        </tr>
                        <tr class="d-flex">
                            <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                <a class="topic-title"
                                    href="https://docln.net/thao-luan/2250-hako-faqs-nhung-cau-hoi-thuong-gap-tren-hako">
                                    (HAKO FAQs) NHỮNG CÂU HỎI THƯỜNG GẶP TRÊN HAKO</a>
                                <div class="b-t-m_tag clear">
                                    <div class="b-t-m_t-item b-t-m_category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #252eef"></i></span>
                                        <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-3 col-lg-2 d-none d-md-block">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #252eef"></i></span>
                                <a href="/thao-luan?chuyen-muc=3">Hỏi đáp</a>
                            </td>
                            <td class="col-1 d-none d-lg-block">567</td>
                            <td class="col-md-2 col-lg-1 d-none d-lg-block">204.911</td>


                            <td class="col-md-2 col-lg-1 d-none d-md-block" "="">
                                                                <time class="topic-time timeago" title="26-08-2024 12:21:09" datetime="2024-08-26T12:21:09+07:00">6 ngày</time>
                                                            </td>

                                                        <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://i2.docln.net/ln/users/avatars/u176255-0b232fec-4279-4d6e-92d6-20d218f2ec2b.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="/thanh-vien/176255">_proslimevn</a>
                                        <time class="topic-time block md:hidden timeago" title="26-08-2024 12:21:09" datetime="2024-08-26T12:21:09+07:00">6 ngày</time>
                                    </div>
                                </td>
                                                                            </tr>
                                        </tbody>
                    </table>
                    <div class="pagination-footer">
                <div class="pagination_wrap">
                    <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                    <a href="https://docln.net/thao-luan?page=1" class="paging_item paging_prevnext prev  disabled ">Đầu</a>

                                <a href="https://docln.net/thao-luan?page=1" class="paging_item page_num  current ">1</a>
                                <a href="https://docln.net/thao-luan?page=2" class="paging_item page_num ">2</a>
                                <a href="https://docln.net/thao-luan?page=3" class="paging_item page_num ">3</a>
                                <a href="https://docln.net/thao-luan?page=4" class="paging_item page_num ">4</a>
                                <a href="https://docln.net/thao-luan?page=5" class="paging_item page_num ">5</a>

                    <!--<a href=" https://docln.net/thao-luan?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                    <a href="https://docln.net/thao-luan?page=69" class="paging_item paging_prevnext next ">Cuối</a>
                </div>
            </div>
                    </section>

            </div>
        </main>
@endsection
