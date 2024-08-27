@extends('home.layout.master')

@section('content')
    <div class="page-top-group  at-index ">
        <a href="/thao-luan/2591">
            <div class="index-background d-none d-lg-block"
                style="background-image: url('{{ asset('users/user/img/path/12890_d_l.jpg') }}')">
            </div>
            <div class="index-background d-lg-none"
                style="background-image: url('{{ asset('user/img/path/12890_m_l.jpg') }}'); background-size: cover"></div>
        </a>
    </div>

    <div class="container" style="margin-bottom: 40px;">
        <main id="mainpart" class="page-board" style="background: none; min-height: 233px;">
            <header class="page-title">
                <div class="page-name_wrapper">
                    <div class="container relative">
                        <span class="page-name"><a href="thao-luan"
                                class="link-underline link-underline-opacity-0 text-success"><i
                                    class="fas fa-circle"></i>Thảo luận</a></span>
                    </div>
                </div>
            </header>

            <div class="container clear">
                <section class="board-toolkit clear">
                    <div class="dropdown">
                        <button class="btn border dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Chuyên mục
                        </button>
                        <ul class="dropdown-menu">
                            <li class="l-l-o_item"><a class="link-underline link-underline-opacity-0 text-black"
                                    href="https://docln.net/thao-luan"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: black"></i> Tất cả</a></li>
                            <li class="l-l-o_item"><a class="link-underline link-underline-opacity-0 text-black"
                                    href="/thao-luan?chuyen-muc=1"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #eb1d57"></i> Thông báo</a></li>
                            <li class="l-l-o_item"><a class="link-underline link-underline-opacity-0 text-black"
                                    href="/thao-luan?chuyen-muc=2"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #e01bb4"></i> Tin tức</a></li>
                            <li class="l-l-o_item"><a class="link-underline link-underline-opacity-0 text-black"
                                    href="/thao-luan?chuyen-muc=3"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #252eef"></i> Hỏi đáp</a></li>
                            <li class="l-l-o_item"><a class="link-underline link-underline-opacity-0 text-black"
                                    href="/thao-luan?chuyen-muc=4"><i class="fas fa-circle" aria-hidden="true"
                                        style="color: #28e1e8"></i> Đánh giá</a></li>
                            <li class="l-l-o_item"><a class="link-underline link-underline-opacity-0 text-black"
                                    href="/thao-luan?chuyen-muc=5"><i class="fas fa-circle" aria-hidden="true"
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
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href=""><i class="fas fa-star"></i> Quy định chung đối với các dự án đăng tại
                                        Cổng
                                        Light Novel</a>
                                    <div class="subtitle-category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #eb1d57"></i></span>
                                        <a href="">Thông báo</a>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                        báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">1176</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">298.723</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class="topic-time timeago" title="19-08-2024 14:11:51"
                                        datetime="2024-08-19T14:11:51+07:00">19 phút</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i2.docln.net/ln/users/avatars/u47116-2048df37-ead9-4835-97f6-201544957a81.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">herorule</a>
                                        <time class="topic-time block md:hidden timeago" title="19-08-2024 14:11:51"
                                            datetime="2024-08-19T14:11:51+07:00">19 phút</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2266-thao-luan-cho-tac-gia-oln"><i
                                            class="fas fa-star"></i> Thảo luận cho tác giả OLN</a>
                                    <div class="subtitle-category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #1ee865"></i></span>
                                        <a href="" class="link-underline link-underline-opacity-0 text-black">Thảo
                                            luận</a>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #1ee865"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thảo
                                        luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">11669</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">1.066.625</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class="topic-time timeago" title="19-08-2024 11:38:51"
                                        datetime="2024-08-19T11:38:51+07:00">3 giờ</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i.docln.net/lightnovel/users/ua39-dcda761a-ec2c-40a4-bf98-f7faee936682.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">medassin</a>
                                        <time class="topic-time block md:hidden timeago" title="19-08-2024 11:38:51"
                                            datetime="2024-08-19T11:38:51+07:00">3 giờ</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/1610-trang-yeu-cau-xoa-truyentapchuong"><i
                                            class="fas fa-star"></i> Trang yêu cầu xóa truyện/tập/chương</a>
                                    <div class="subtitle-category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #eb1d57"></i></span>
                                        <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                            báo</a>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                        báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">3477</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">253.871</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class="topic-time timeago" title="18-08-2024 21:19:11"
                                        datetime="2024-08-18T21:19:11+07:00">17 giờ</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i2.docln.net/ln/users/avatars/u196592-41e37e0a-c17b-4bc5-96be-23dc79da9a4b.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">DDH</a>
                                        <time class="topic-time block md:hidden timeago" title="18-08-2024 21:19:11"
                                            datetime="2024-08-18T21:19:11+07:00">17 giờ</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/77-quy-dinh-doi-voi-oln"><i
                                            class="fas fa-star"></i> Quy Định Đối Với Truyện Sáng Tác - OLN</a>
                                    <div class="subtitle-category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #eb1d57"></i></span>
                                        <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                            báo</a>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                        báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">6233</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">766.109</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class="topic-time timeago" title="18-08-2024 10:32:26"
                                        datetime="2024-08-18T10:32:26+07:00">1 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i.docln.net/lightnovel/users/ua118777-52732184-13b3-4e1c-8c00-0401cd429706.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">Thiên Ý</a>
                                        <time class="topic-time block md:hidden timeago" title="18-08-2024 10:32:26"
                                            datetime="2024-08-18T10:32:26+07:00">1 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><i
                                            class="fas fa-star"></i> Góp ý và báo lỗi</a>
                                    <div class="subtitle-category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #eb1d57"></i></span>
                                        <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                            báo</a>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                        báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">5433</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">617.518</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class="topic-time timeago" title="15-08-2024 17:35:32"
                                        datetime="2024-08-15T17:35:32+07:00">4 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i2.docln.net/ln/users/avatars/u78290-4d034e5e-4860-4b75-9da8-2cbe931ebd1e.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">Loy</a>
                                        <time class="topic-time block md:hidden timeago" title="15-08-2024 17:35:32"
                                            datetime="2024-08-15T17:35:32+07:00">4 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/368-huong-dan-dang-truyen"><i
                                            class="fas fa-star"></i> Hướng dẫn đăng truyện</a>
                                    <div class="subtitle-category none-m">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                style="color: #eb1d57"></i></span>
                                        <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                            báo</a>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                        báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">2846</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">476.065</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class="topic-time timeago" title="15-08-2024 09:27:10"
                                        datetime="2024-08-15T09:27:10+07:00">4 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i.docln.net/lightnovel/users/ua39-dcda761a-ec2c-40a4-bf98-f7faee936682.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">medassin</a>
                                        <time class="topic-time block md:hidden timeago" title="15-08-2024 09:27:10"
                                            datetime="2024-08-15T09:27:10+07:00">4 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2866-ai-co-the-giai-thich-ki-cho-minh-quy-dinh-xoa-truyen-khi-khong-dang-dung-han-duoc-khong-a">
                                        Ai có thể giải thích kĩ cho mình quy định xóa truyện khi không đăng đúng hạn
                                        được không ạ?</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                    style="color: #1ee865"></i></span>
                                            <a href=""
                                                class="link-underline link-underline-opacity-0 text-black">Thảo
                                                luận</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #1ee865"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thảo
                                        luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">5</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">430</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="13-08-2024 19:22:11"
                                        datetime="2024-08-13T19:22:11+07:00">6 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar  creator  none block-m">
                                        <img
                                            src="https://i2.docln.net/ln/users/avatars/u196592-41e37e0a-c17b-4bc5-96be-23dc79da9a4b.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">DDH</a>
                                        <time class="topic-time block md:hidden timeago" title="13-08-2024 19:22:11"
                                            datetime="2024-08-13T19:22:11+07:00">6 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2865-de-toi-chi-ban-viet-ban-thao-theo-cach-chuyen-nghiep-hon-nhe">
                                        Để tôi chỉ bạn viết bản thảo theo cách chuyên nghiệp hơn nhé.</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                    style="color: #1ee865"></i></span>
                                            <a href=""
                                                class="link-underline link-underline-opacity-0 text-black">Thảo
                                                luận</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #1ee865"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thảo
                                        luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">3</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">382</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="13-08-2024 18:25:35"
                                        datetime="2024-08-13T18:25:35+07:00">6 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i.docln.net/lightnovel/users/ua98092-2144bdc4-b1aa-49ec-b9cb-dbafbb36949c.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">RioYami</a>
                                        <time class="topic-time block md:hidden timeago" title="13-08-2024 18:25:35"
                                            datetime="2024-08-13T18:25:35+07:00">6 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2861-tuyen-trans-en-cho-bo-tearmoon-empire-1-2-nguoi">
                                        <i class="fas fa-paperclip"></i> Tuyển trans (EN) cho bộ Tearmoon Empire (1-2
                                        người)</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                    style="color: #1ee865"></i></span>
                                            <a href=""
                                                class="link-underline link-underline-opacity-0 text-black">Thảo
                                                luận</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #1ee865"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thảo
                                        luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">0</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">232</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="11-08-2024 14:49:40"
                                        datetime="2024-08-11T14:49:40+07:00">8 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar  creator  none block-m">
                                        <img
                                            src="https://i.docln.net/lightnovel/users/ua23914-0943f621-de99-4742-ab48-a879a765f252.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">hoangbichht</a>
                                        <time class="topic-time block md:hidden timeago" title="11-08-2024 14:49:40"
                                            datetime="2024-08-11T14:49:40+07:00">8 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/619-bao-cao-binh-luan"> Báo
                                        cáo bình luận</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                    style="color: #eb1d57"></i></span>
                                            <a href=""
                                                class="link-underline link-underline-opacity-0 text-black">Thông
                                                báo</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                        báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">1831</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">323.589</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="09-08-2024 00:06:45"
                                        datetime="2024-08-09T00:06:45+07:00">11 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://docln.net/img/noava.png">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">IuBEEF...</a>
                                        <time class="topic-time block md:hidden timeago" title="09-08-2024 00:06:45"
                                            datetime="2024-08-09T00:06:45+07:00">11 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2466-black-hero-va-oi-khong-khum-num-tour-du-lich-cua-da">
                                        <i class="fas fa-paperclip"></i> Black Hero (bản cũ) và “Ôi không, khúm núm!”
                                        [Tour du lịch của Đá]</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                    style="color: #28e1e8"></i></span>
                                            <a href="/thao-luan?chuyen-muc=4">Đánh giá</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #28e1e8"></i></span>
                                    <a href="/thao-luan?chuyen-muc=4">Đánh giá</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">58</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">11.960</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="08-08-2024 23:25:00"
                                        datetime="2024-08-08T23:25:00+07:00">11 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i2.docln.net/ln/users/avatars/u21143-c67dfae1-0bdb-45f3-b4ed-22efca58f33e.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">Dahlias</a>
                                        <time class="topic-time block md:hidden timeago" title="08-08-2024 23:25:00"
                                            datetime="2024-08-08T23:25:00+07:00">11 ngày</time>
                                    </div>
                                </td>

                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2857-day-la-wn-dung-khong">
                                        Đây là wn đúng không?</a>
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
                                <td class="col-1 d-none d-lg-block">4</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">579</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="05-08-2024 19:26:10"
                                        datetime="2024-08-05T19:26:10+07:00">14 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i.docln.net/lightnovel/users/ua148208-5c2f4591-97c9-49d2-9a43-7af18d5fd192.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">nhatphong</a>
                                        <time class="topic-time block md:hidden timeago" title="05-08-2024 19:26:10"
                                            datetime="2024-08-05T19:26:10+07:00">14 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2850-danh-gia-phan-tich-so-sanh-tac-pham-nihonkoku-shoukan">
                                        <i class="fas fa-paperclip"></i> Đánh giá, phân tích, so sánh, tác phẩm
                                        "Nihonkoku Shoukan"</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                    style="color: #1ee865"></i></span>
                                            <a href=""
                                                class="link-underline link-underline-opacity-0 text-black">Thảo
                                                luận</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #1ee865"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thảo
                                        luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">54</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">2.215</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="31-07-2024 22:31:38"
                                        datetime="2024-07-31T22:31:38+07:00">19 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img src="https://docln.net/img/noava.png">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">IuBEEF...</a>
                                        <time class="topic-time block md:hidden timeago" title="31-07-2024 22:31:38"
                                            datetime="2024-07-31T22:31:38+07:00">19 ngày</time>
                                    </div>
                                </td>
                                <!--<div class="board-topic-series none col-12">
                                        <a href="/truyen/5064-nihonkoku-shoukanwn" class="b-t-s_item">{&quot;id&quot;:5064,&quot;title&quot;:&quot;Nihonkoku Shoukan(WN)&quot;,&quot;slug&quot;:&quot;5064-nihonkoku-shoukanwn&quot;,&quot;user_id&quot;:696,&quot;member_ids&quot;:[],&quot;group_id&quot;:842,&quot;summary&quot;:&quot;&lt;p&gt;V\u00e0o m\u1ed9t ng\u00e0y Nh\u1eadt B\u1ea3n b\u1ecb d\u1ecbch chuy\u1ec3n t\u1edbi th\u1ebf gi\u1edbi kh\u00e1c.&lt;\/p&gt;\n&lt;p&gt;B\u1edfi kh\u1ea3 n\u0103ng t\u1ef1 s\u1ea3n xu\u1ea5t l\u01b0\u01a1ng th\u1ef1c k\u00e9m v\u00e0 l\u1ec7 thu\u1ed9c v\u00e0o ngu\u1ed3n nh\u1eadp kh\u1ea9u t\u1eeb c\u00e1c n\u01b0\u1edbc kh\u00e1c, Nh\u1eadt B\u1ea3n \u0111\u1ed1i m\u1eb7t v\u1edbi nguy c\u01a1 thi\u1ebfu h\u1ee5t l\u01b0\u01a1ng th\u1ef1c. \u0110\u1ec3 ng\u0103n ch\u1eb7n h\u1eadu qu\u1ea3, Nh\u1eadt B\u1ea3n \u0111\u00e3 ban b\u1ed1 t\u00ecnh tr\u1ea1ng kh\u1ea9n c\u1ea5p. L\u1ef1c l\u01b0\u1ee3ng Ph\u00f2ng v\u1ec7 Nh\u1eadt B\u1ea3n th\u0103m d\u00f2 c\u00e1c v\u00f9ng l\u00e2n c\u1eadn v\u00e0 ph\u00e1t hi\u1ec7n \u0111\u1ea5t li\u1ec1n kho\u1ea3ng 1000km v\u1ec1 ph\u00eda T\u00e2y Nam - L\u1ee5c \u0111\u1ecba Rodenius.&lt;\/p&gt;\n&lt;p&gt;Nh\u1eadt B\u1ea3n gi\u1ea3i quy\u1ebft \u0111\u01b0\u1ee3c v\u1ea5n \u0111\u1ec1 thi\u1ebfu h\u1ee5t l\u01b0\u01a1ng th\u1ef1c sau khi ti\u1ebfn h\u00e0nh \u0111\u00e0m ph\u00e1n v\u1edbi L\u00e3nh \u0111\u1ecba Kua Toine v\u00e0 V\u01b0\u01a1ng qu\u1ed1c Quira. Tuy nhi\u00ean c\u00f9ng l\u00fac \u0111\u00f3, m\u1ed9t qu\u1ed1c gia kh\u00e1c tr\u00ean c\u00f9ng l\u1ee5c \u0111\u1ecba l\u00e0 V\u01b0\u01a1ng qu\u1ed1c Rowlia, \u0111\u00e3 tuy\u00ean chi\u1ebfn v\u1edbi Kua Toine v\u00e0 Quira.&lt;\/p&gt;\n&lt;p&gt;Tr\u01b0\u1edbc hi\u1ec3m h\u1ecda m\u1edbi, Nh\u1eadt B\u1ea3n s\u1ebd ph\u1ea3n \u1ee9ng ra sao? M\u1ed9t c\u00e2u chuy\u1ec7n s\u1ed1ng c\u00f2n qui m\u00f4 m\u1ed9t qu\u1ed1c gia!&lt;\/p&gt;\n&lt;p&gt;( T\u00f3m t\u1eaft c\u1ee7a Tran: Truck-kun t\u1eeb tr\u00ean tr\u1eddi lao xu\u1ed1ng )&lt;\/p&gt;&quot;,&quot;extra&quot;:&quot;&lt;p&gt;Project \u0111\u1ea7u, n\u1ebfu c\u00f3 sai s\u00f3t g\u00ec, comment gi\u00fap m\u00ecnh.&lt;\/p&gt;\n&lt;p&gt;T\u1ed1c \u0111\u1ed9 d\u1ecbch hi\u1ec7n t\u1ea1i: 1 chap\/1 th\u00e1ng&lt;\/p&gt;\n&lt;p&gt;L\u01b0u \u00fd: \u0110\u00e2y l\u00e0 b\u1ea3n d\u1ecbch theo Webnovel, kh\u00f4ng ph\u1ea3i theo Lightnovel&lt;\/p&gt;\n&lt;p&gt;Ngu\u1ed3n:&lt;\/p&gt;\n&lt;p&gt;Eng:&lt;\/p&gt;\n&lt;p&gt;&lt;a href=\&quot;https:\/\/mobofdeer.wordpress.com\/summoning-japan\/\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;https:\/\/mobofdeer.wordpress.com\/summoning-japan\/&lt;\/a&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;a href=\&quot;https:\/\/hanabarahana.wordpress.com\/home\/\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;https:\/\/hanabarahana.wordpress.com\/home\/&lt;\/a&gt;&lt;\/p&gt;\n&lt;p&gt;Raw:&lt;\/p&gt;\n&lt;p&gt;&lt;a href=\&quot;http:\/\/ncode.syosetu.com\/n6408bv\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;http:\/\/ncode.syosetu.com\/n6408bv&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;status&quot;:2,&quot;author&quot;:&quot;Minorou&quot;,&quot;illustrator&quot;:&quot;toi8&quot;,&quot;altname&quot;:&quot;Nipponkoku Shoukan;Summoning Japan;Nh\u1eadt B\u1ea3n xuy\u00ean kh\u00f4ng&quot;,&quot;type&quot;:1,&quot;view_count&quot;:753816,&quot;last_month_view_count&quot;:747874,&quot;last_month_view_count_at&quot;:&quot;2024-08-01 00:00:03&quot;,&quot;collection&quot;:812,&quot;cover&quot;:&quot;https:\/\/c1.hako.re\/lightnovel\/covers\/s5064-4a244767-7b91-4f2e-88ec-9d4c31f65628.jpg&quot;,&quot;locked&quot;:1,&quot;is_mature&quot;:0,&quot;latestchapter_id&quot;:102578,&quot;comment_experiment&quot;:1,&quot;show_to_role&quot;:null,&quot;commentable&quot;:1,&quot;word_count&quot;:239745,&quot;comment_count&quot;:1773,&quot;rating_count&quot;:2,&quot;rating_sum&quot;:6,&quot;pin_comment_id&quot;:0,&quot;comment_page_id&quot;:0,&quot;created_at&quot;:&quot;2019-06-26T08:45:34.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-09-13T15:11:04.000000Z&quot;,&quot;deleted_at&quot;:null,&quot;delete_reason&quot;:null,&quot;redirect_series_id&quot;:0,&quot;notification_ignore_users&quot;:[193597],&quot;readable_status&quot;:&quot;T\u1ea1m ng\u01b0ng&quot;,&quot;average_rating&quot;:3}</a>
                                    </div>-->
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2794-bao-tri-doi-server"><i
                                            class="fas fa-lock"></i> Hoãn bảo trì server</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                    style="color: #eb1d57"></i></span>
                                            <a href=""
                                                class="link-underline link-underline-opacity-0 text-black">Thông
                                                báo</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #eb1d57"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thông
                                        báo</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">20</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">9.629</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="28-07-2024 16:53:49"
                                        datetime="2024-07-28T16:53:49+07:00">22 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i2.docln.net/ln/users/avatars/u103314-e630f458-37d8-47f5-ad08-4efb2059fa59.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">Mming</a>
                                        <time class="topic-time block md:hidden timeago" title="28-07-2024 16:53:49"
                                            datetime="2024-07-28T16:53:49+07:00">22 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2851-choi-noi-tu-hok-ae"><i
                                            class="fas fa-lock"></i> chơi nối từ hok ae</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                    style="color: #1ee865"></i></span>
                                            <a href=""
                                                class="link-underline link-underline-opacity-0 text-black">Thảo
                                                luận</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #1ee865"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thảo
                                        luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">140</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">1.162</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="27-07-2024 22:15:09"
                                        datetime="2024-07-27T22:15:09+07:00">23 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">Embers</a>
                                        <time class="topic-time block md:hidden timeago" title="27-07-2024 22:15:09"
                                            datetime="2024-07-27T22:15:09+07:00">23 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2263-hoi-truyen-tu-az-goc-8-nham-cho-dich-gia-20"><i
                                            class="fas fa-lock"></i> Hỏi Truyện từ A&gt;Z. Góc 8 nhảm cho dịch
                                        giả 2.0</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                    style="color: #1ee865"></i></span>
                                            <a href=""
                                                class="link-underline link-underline-opacity-0 text-black">Thảo
                                                luận</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #1ee865"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thảo
                                        luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">26417</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">2.115.816</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="27-07-2024 09:51:32"
                                        datetime="2024-07-27T09:51:32+07:00">23 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i.docln.net/lightnovel/users/ua39-dcda761a-ec2c-40a4-bf98-f7faee936682.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">medassin</a>
                                        <time class="topic-time block md:hidden timeago" title="27-07-2024 09:51:32"
                                            datetime="2024-07-27T09:51:32+07:00">23 ngày</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="https://docln.net/thao-luan/2848-kinh-nghiem-dich-thoat-y"> Kinh nghiệm
                                        dịch của bản thân</a>
                                    <div class="b-t-m_tag clear">
                                        <div class="b-t-m_t-item b-t-m_category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                                    style="color: #1ee865"></i></span>
                                            <a href=""
                                                class="link-underline link-underline-opacity-0 text-black">Thảo
                                                luận</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-md-3 col-lg-2 d-none d-md-block">
                                    <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                            style="color: #1ee865"></i></span>
                                    <a href="" class="link-underline link-underline-opacity-0 text-black">Thảo
                                        luận</a>
                                </td>
                                <td class="col-1 d-none d-lg-block">30</td>
                                <td class="col-md-2 col-lg-1 d-none d-lg-block">1.427</td>


                                <td class="col-md-2 col-lg-1 d-none d-md-block">
                                    <time class=" topic-time timeago" title="27-07-2024 08:42:19"
                                        datetime="2024-07-27T08:42:19+07:00">23 ngày</time>
                                </td>

                                <td class="col-4 col-md-3 col-lg-2 text-right">
                                    <div class="topic-avatar none block-m">
                                        <img
                                            src="https://i2.docln.net/ln/users/avatars/u142791-c5ea9c36-b7e4-4103-b69f-6dfa31fd9dee.jpg">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="link-underline link-underline-opacity-0">m4dness</a>
                                        <time class="topic-time block md:hidden timeago" title="27-07-2024 08:42:19"
                                            datetime="2024-07-27T08:42:19+07:00">23 ngày</time>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination-footer">
                        <div class="pagination_wrap">
                            <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                            <a href="https://docln.net/thao-luan?page=1"
                                class="paging_item paging_prevnext prev  disabled ">Đầu</a>

                            <a href="https://docln.net/thao-luan?page=1" class="paging_item page_num  current ">1</a>
                            <a href="https://docln.net/thao-luan?page=2" class="paging_item page_num ">2</a>
                            <a href="https://docln.net/thao-luan?page=3" class="paging_item page_num ">3</a>
                            <a href="https://docln.net/thao-luan?page=4" class="paging_item page_num ">4</a>
                            <a href="https://docln.net/thao-luan?page=5" class="paging_item page_num ">5</a>

                            <!--<a href=" https://docln.net/thao-luan?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                            <a href="https://docln.net/thao-luan?page=68"
                                class="paging_item paging_prevnext next ">Cuối</a>
                        </div>
                    </div>
                </section>

            </div>
        </main>
    </div>
@endsection
