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

                    <a class="button button-newpost button-green" href="{{url('themThaoLuan')}}"><i
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
                                        href="{{url('CDthaoluan')}}"><i class="fas fa-star"></i> Quy định chung đối với các dự án đăng tại
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
                                        <img src="{{asset('users/user/img/avatar/avatar pp.png')}}">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="text-black link-underline link-underline-opacity-0">herorule</a>
                                        <time class="topic-time block md:hidden timeago" title="19-08-2024 14:11:51"
                                            datetime="2024-08-19T14:11:51+07:00">19 phút</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="{{url('CDthaoluan')}}"><i
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
                                        <img src="{{asset('users/user/img/avatar/avatar pp.png')}}">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="text-black link-underline link-underline-opacity-0">medassin</a>
                                        <time class="topic-time block md:hidden timeago" title="19-08-2024 11:38:51"
                                            datetime="2024-08-19T11:38:51+07:00">3 giờ</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="{{asset('CDthaoluan')}}"><i
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
                                        <img src="{{asset('users/user/img/avatar/avatar pp.png')}}">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="text-black link-underline link-underline-opacity-0">DDH</a>
                                        <time class="topic-time block md:hidden timeago" title="18-08-2024 21:19:11"
                                            datetime="2024-08-18T21:19:11+07:00">17 giờ</time>
                                    </div>
                                </td>
                            </tr>
                            <tr class="d-flex">
                                <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                    <a class="topic-title link-underline link-underline-opacity-0 text-black"
                                        href="{{asset('CDthaoluan')}}"><i
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
                                        <img src="{{asset('users/user/img/avatar/avatar pp.png')}}">
                                    </div>
                                    <div class="topic-username block-m">
                                        <a href="" class="text-black link-underline link-underline-opacity-0">Thiên Ý</a>
                                        <time class="topic-time block md:hidden timeago" title="18-08-2024 10:32:26"
                                            datetime="2024-08-18T10:32:26+07:00">1 ngày</time>
                                    </div>
                                </td>
                            </tr>

                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination-footer">
                        <div class="pagination_wrap">
                            <a href="" class="paging_item link-underline link-underline-opacity-0 paging_prevnext prev  disabled ">Đầu</a>

                            <a href="" class="paging_item link-underline link-underline-opacity-0 page_num  current ">1</a>
                            <a href="" class="paging_item link-underline link-underline-opacity-0 page_num ">2</a>
                            <a href="" class="paging_item link-underline link-underline-opacity-0 page_num ">3</a>
                            <a href="" class="paging_item link-underline link-underline-opacity-0 page_num ">4</a>
                            <a href="" class="paging_item link-underline link-underline-opacity-0 page_num ">5</a>

                            <a href="" class="paging_item link-underline link-underline-opacity-0 paging_prevnext next ">Cuối</a>
                        </div>
                    </div>
                </section>

            </div>
        </main>
    </div>
@endsection
