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

    <form method="get">
        <main id="mainpart" class="browser-page">
            <div style="text-align: center; margin: 0 auto 10px auto;">
            </div>
            <div class="container">
                <div class="page-breadcrumb">
                    <span class="breadcrum-level"><a href="{{ url('home') }}" class="text-black"><i
                                class="fas fa-home"></i></a></span>
                    <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                    <span class="breadcrum-level"><a href="{{ url('danhsach') }}"
                            class="text-black link-underline link-underline-opacity-0">Danh sách</a></span>
                </div>
            </div>
            <div class="container">
                <div class="row d-block clear">
                    <div class="col-12 none d-lg-block col-lg-3 float-right filters-wrapper">
                        <div class="none-l pad-bottom-20 text-right pad-top-20">
                            <span class="js-off-filters-wrapper button button-red">Tắt bộ lọc</span>
                        </div>
                        <section class="sub-index-style">
                            <div class="title-wrapper">
                                <div class="section-title">Chữ cái</div>
                            </div>
                            <div class="browse-alphabet">
                                <a class="alphabet_item link-underline link-underline-opacity-0  current "
                                    href="">Tất cả</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">#</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">A</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">B</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">C</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">D</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">E</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">F</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">G</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">H</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">I</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">J</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">K</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">L</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">M</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">N</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">O</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">P</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">Q</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">R</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">S</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">T</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">U</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">V</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">W</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">X</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">Y</a>
                                <a class="alphabet_item link-underline link-underline-opacity-0 " href="">Z</a>
                            </div>
                        </section>
                        <section class="sub-index-style filter-section">
                            <div class="title-wrapper">
                                <div class="section-title">Phân loại</div>
                            </div>
                            <div class="section-content">
                                <ul class="filter-type unstyled">
                                    <li><input type="checkbox" name="truyendich" value="1" checked> Truyện dịch</li>
                                    <li><input type="checkbox" name="sangtac" value="1"> Truyện sáng tác</li>
                                    <li><input type="checkbox" name="convert" value="1"> Convert</li>
                                </ul>
                                <div class="submit-wrapper">
                                    <input type="submit" class="btn btn-success text-white" value="Áp dụng">
                                </div>
                            </div>
                        </section>
                        <section class="sub-index-style filter-section">
                            <div class="title-wrapper">
                                <div class="section-title">Tình trạng</div>
                            </div>
                            <div class="section-content">
                                <ul class="filter-type unstyled">
                                    <li><input type="checkbox" name="dangtienhanh" value="1" checked> Đang tiến hành
                                    </li>
                                    <li><input type="checkbox" name="tamngung" value="1" checked> Tạm ngưng</li>
                                    <li><input type="checkbox" name="hoanthanh" value="1" checked> Đã hoàn thành
                                    </li>
                                </ul>
                                <div class="submit-wrapper">
                                    <input type="submit" class="btn btn-success text-white" value="Áp dụng">
                                </div>
                            </div>
                        </section>
                        <section class="sub-index-style">
                            <div class="title-wrapper">
                                <div class="section-title">Danh mục</div>
                            </div>

                            <div class="section-content">
                                <ul class="filter-type unstyled clear">
                                    @foreach ($genres as $key => $value)
                                        <li class="filter-type_item"><a
                                                class="text-black link-underline link-underline-opacity-0"
                                                href="the-loai/{{ $value }}">{{ $key }}</a>
                                    @endforeach
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-12 float-left col-lg-9">
                        <section class="thumb-section-flow">
                            <header class="filter-container pad-bottom-10">

                                <select name="sapxep" onchange="this.form.submit()" class="block inline-m">
                                    <option value="tentruyen">A - Z</option>
                                    <option value="tentruyenza">Z - A</option>
                                    <option value="capnhat">Mới cập nhật</option>
                                    <option value="truyenmoi">Truyện mới</option>
                                    <option value="theodoi">Theo dõi</option>
                                    <option value="top">Top toàn thời gian</option>
                                    <option value="topthang">Top tháng</option>
                                    <option value="sotu">Số từ</option>
                                </select>
                                <div class="text-right inline-block-m right-m none-l">
                                    <span class="button button-green js-call-filters-wrapper"><i class="fas fa-filter"
                                            style="margin-right: 10px;"></i>Bộ lọc</span>
                                </div>
                            </header>
                            {{-- <main class="row">

                                <!-- start truyện -->

                                <div class="thumb-item-flow col-4  col-lg-4">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#serie">
                                        <a href="" title="">
                                            <div class="content " data-bg="">
                                                <img src="{{ asset('users/user/img/apple-touch-icon-114x114.png') }}"
                                                    width="100%" alt="">
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr volume-title">tên vol</div>
                                        </div>
                                    </div>
                                    <div class="text text-center mt-3"><h5>Tên truyện</h5></div>
                                </div>

                                <div class="thumb-item-flow col-4  col-lg-4">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#serie">
                                        <a href="" title="">
                                            <div class="content " data-bg="">
                                                <img src="{{ asset('users/user/img/apple-touch-icon-114x114.png') }}"
                                                    width="100%" alt="">
                                            </div>
                                        </a>
                                        <div class="thumb-detail">

                                            <div class="thumb_attr volume-title">tên vol</div>
                                        </div>
                                    </div>
                                    <div class="text text-center mt-3"><h5>Tên truyện</h5></div>
                                </div>

                                <div class="thumb-item-flow col-4  col-lg-4">
                                    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#serie">
                                        <a href="" title="">
                                            <div class="content " data-bg="">
                                                <img src="{{ asset('users/user/img/apple-touch-icon-114x114.png') }}"
                                                    width="100%" alt="">
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr volume-title">tên vol</div>
                                        </div>
                                    </div>
                                    <div class="text text-center mt-3"><h5>Tên truyện</h5></div>
                                </div>

                            </main> --}}

                            <main class="row">
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="{{ url('gioithieu') }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{ asset('users/user/img/path/image18.jpg') }}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 3.3: Nữ hoàng đổi thay (3)">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 3.3: Nữ hoàng đổi thay
                                                    (3)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Light Novel Tập 2 [ĐANG TIẾN HÀNH]</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Sống
                                            chung với Nữ hoàng kiêu ngạo thời cao trung hoá ra lại không hề khó chịu đến
                                            thế</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image14.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 3: Cô lệnh nữ quý tộc tới Nhật du học ngoại ngữ, tận hưởng cuộc sống ở nơi đây (5)">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương
                                                    3: Cô lệnh nữ quý tộc tới Nhật du học ngoại ngữ, tận hưởng cuộc sống ở
                                                    nơi
                                                    đây (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Cô
                                            tiểu thư quý tộc đi du học nước ngoài, nhưng tại sao lại chỉ toàn học cách làm
                                            dâu?</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image15.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 03: Nơi đăng kí">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 03: Nơi đăng kí</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Web Novel</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0"
                                            href="">Transferred
                                            to Another World and Became a Teacher, but Being Feared as a Witch ~ Listen
                                            Seriously to the Lessons Because Royalty and Nobility Don’t Matter!</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image17.jpg')}}')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 50: Tôi sẽ cho
                                                    cậu nếm mùi thất bại (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">01-99</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Pick
                                            Me Up! Gacha Vô Hạn!</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="/truyen/18964-isekai-apocalypse-mynoghra/c141192-chuong-1-khoi-dau-moi"
                                            title="Chương 1: Khởi đầu mới">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image13.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 1: Khởi đầu mới">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 1: Khởi đầu mới</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Vol 1</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0"
                                            href="">Mynoghra: Dị Giới
                                            Diệt Vong (Isekai Apocalypse Mynoghra)</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="/truyen/18108-hay-chi-em-cach-de-ghi-nho-tinh-yeu-nay-di/c141191-chuong-21-vien-so-co-la-den-ngot-ngao-va-dang-dau-tien"
                                            title="Chương 2.1: Viên sô cô la đen ngọt ngào và đắng đầu tiên">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image12.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 2.1:
                                                    Viên sô cô la đen ngọt ngào và đắng đầu tiên</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Volume 1</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Hãy
                                            Chỉ Em Cách Để Ghi Nhớ Tình
                                            Yêu Này Đi</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{ asset('users/user/img/path/image18.jpg') }}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 3.3: Nữ hoàng đổi thay (3)">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 3.3: Nữ hoàng đổi thay
                                                    (3)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Light Novel Tập 2 [ĐANG TIẾN HÀNH]</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Sống
                                            chung với Nữ hoàng kiêu ngạo thời cao trung hoá ra lại không hề khó chịu đến
                                            thế</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="/truyen/18108-hay-chi-em-cach-de-ghi-nho-tinh-yeu-nay-di/c141191-chuong-21-vien-so-co-la-den-ngot-ngao-va-dang-dau-tien"
                                            title="Chương 2.1: Viên sô cô la đen ngọt ngào và đắng đầu tiên">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image12.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 2.1:
                                                    Viên sô cô la đen ngọt ngào và đắng đầu tiên</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Volume 1</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Hãy
                                            Chỉ Em Cách Để Ghi Nhớ Tình
                                            Yêu Này Đi</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image14.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 3: Cô lệnh nữ quý tộc tới Nhật du học ngoại ngữ, tận hưởng cuộc sống ở nơi đây (5)">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương
                                                    3: Cô lệnh nữ quý tộc tới Nhật du học ngoại ngữ, tận hưởng cuộc sống ở
                                                    nơi
                                                    đây (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Cô
                                            tiểu thư quý tộc đi du học nước ngoài, nhưng tại sao lại chỉ toàn học cách làm
                                            dâu?</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image15.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 03: Nơi đăng kí">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 03: Nơi đăng kí</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Web Novel</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0"
                                            href="">Transferred
                                            to Another World and Became a Teacher, but Being Feared as a Witch ~ Listen
                                            Seriously to the Lessons Because Royalty and Nobility Don’t Matter!</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image17.jpg')}}')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 50: Tôi sẽ cho
                                                    cậu nếm mùi thất bại (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">01-99</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Pick
                                            Me Up! Gacha Vô Hạn!</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="/truyen/18964-isekai-apocalypse-mynoghra/c141192-chuong-1-khoi-dau-moi"
                                            title="Chương 1: Khởi đầu mới">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image13.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 1: Khởi đầu mới">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 1: Khởi đầu mới</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Vol 1</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0"
                                            href="">Mynoghra: Dị Giới
                                            Diệt Vong (Isekai Apocalypse Mynoghra)</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{ asset('users/user/img/path/image18.jpg') }}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 3.3: Nữ hoàng đổi thay (3)">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 3.3: Nữ hoàng đổi thay
                                                    (3)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Light Novel Tập 2 [ĐANG TIẾN HÀNH]</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Sống
                                            chung với Nữ hoàng kiêu ngạo thời cao trung hoá ra lại không hề khó chịu đến
                                            thế</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image14.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 3: Cô lệnh nữ quý tộc tới Nhật du học ngoại ngữ, tận hưởng cuộc sống ở nơi đây (5)">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương
                                                    3: Cô lệnh nữ quý tộc tới Nhật du học ngoại ngữ, tận hưởng cuộc sống ở
                                                    nơi
                                                    đây (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Cô
                                            tiểu thư quý tộc đi du học nước ngoài, nhưng tại sao lại chỉ toàn học cách làm
                                            dâu?</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image15.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 03: Nơi đăng kí">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 03: Nơi đăng kí</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Web Novel</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0"
                                            href="">Transferred
                                            to Another World and Became a Teacher, but Being Feared as a Witch ~ Listen
                                            Seriously to the Lessons Because Royalty and Nobility Don’t Matter!</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image17.jpg')}}')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 50: Tôi sẽ cho
                                                    cậu nếm mùi thất bại (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">01-99</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Pick
                                            Me Up! Gacha Vô Hạn!</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="/truyen/18964-isekai-apocalypse-mynoghra/c141192-chuong-1-khoi-dau-moi"
                                            title="Chương 1: Khởi đầu mới">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image13.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 1: Khởi đầu mới">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 1: Khởi đầu mới</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Vol 1</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0"
                                            href="">Mynoghra: Dị Giới
                                            Diệt Vong (Isekai Apocalypse Mynoghra)</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image17.jpg')}}')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 50: Tôi sẽ cho
                                                    cậu nếm mùi thất bại (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">01-99</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Pick
                                            Me Up! Gacha Vô Hạn!</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="/truyen/18964-isekai-apocalypse-mynoghra/c141192-chuong-1-khoi-dau-moi"
                                            title="Chương 1: Khởi đầu mới">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image13.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 1: Khởi đầu mới">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 1: Khởi đầu mới</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Vol 1</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0"
                                            href="">Mynoghra: Dị Giới
                                            Diệt Vong (Isekai Apocalypse Mynoghra)</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="/truyen/18108-hay-chi-em-cach-de-ghi-nho-tinh-yeu-nay-di/c141191-chuong-21-vien-so-co-la-den-ngot-ngao-va-dang-dau-tien"
                                            title="Chương 2.1: Viên sô cô la đen ngọt ngào và đắng đầu tiên">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image12.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 2.1:
                                                    Viên sô cô la đen ngọt ngào và đắng đầu tiên</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Volume 1</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Hãy
                                            Chỉ Em Cách Để Ghi Nhớ Tình
                                            Yêu Này Đi</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{ asset('users/user/img/path/image18.jpg') }}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 3.3: Nữ hoàng đổi thay (3)">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 3.3: Nữ hoàng đổi thay
                                                    (3)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Light Novel Tập 2 [ĐANG TIẾN HÀNH]</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Sống
                                            chung với Nữ hoàng kiêu ngạo thời cao trung hoá ra lại không hề khó chịu đến
                                            thế</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="/truyen/18108-hay-chi-em-cach-de-ghi-nho-tinh-yeu-nay-di/c141191-chuong-21-vien-so-co-la-den-ngot-ngao-va-dang-dau-tien"
                                            title="Chương 2.1: Viên sô cô la đen ngọt ngào và đắng đầu tiên">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image12.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 2.1:
                                                    Viên sô cô la đen ngọt ngào và đắng đầu tiên</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Volume 1</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Hãy
                                            Chỉ Em Cách Để Ghi Nhớ Tình
                                            Yêu Này Đi</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image14.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 3: Cô lệnh nữ quý tộc tới Nhật du học ngoại ngữ, tận hưởng cuộc sống ở nơi đây (5)">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương
                                                    3: Cô lệnh nữ quý tộc tới Nhật du học ngoại ngữ, tận hưởng cuộc sống ở
                                                    nơi
                                                    đây (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Cô
                                            tiểu thư quý tộc đi du học nước ngoài, nhưng tại sao lại chỉ toàn học cách làm
                                            dâu?</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image15.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 03: Nơi đăng kí">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 03: Nơi đăng kí</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Web Novel</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0"
                                            href="">Transferred
                                            to Another World and Became a Teacher, but Being Feared as a Witch ~ Listen
                                            Seriously to the Lessons Because Royalty and Nobility Don’t Matter!</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image17.jpg')}}')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 50: Tôi sẽ cho
                                                    cậu nếm mùi thất bại (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">01-99</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Pick
                                            Me Up! Gacha Vô Hạn!</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="/truyen/18964-isekai-apocalypse-mynoghra/c141192-chuong-1-khoi-dau-moi"
                                            title="Chương 1: Khởi đầu mới">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image13.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 1: Khởi đầu mới">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 1: Khởi đầu mới</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Vol 1</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0"
                                            href="">Mynoghra: Dị Giới
                                            Diệt Vong (Isekai Apocalypse Mynoghra)</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{ asset('users/user/img/path/image18.jpg') }}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 3.3: Nữ hoàng đổi thay (3)">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 3.3: Nữ hoàng đổi thay
                                                    (3)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Light Novel Tập 2 [ĐANG TIẾN HÀNH]</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Sống
                                            chung với Nữ hoàng kiêu ngạo thời cao trung hoá ra lại không hề khó chịu đến
                                            thế</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image14.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Chương 3: Cô lệnh nữ quý tộc tới Nhật du học ngoại ngữ, tận hưởng cuộc sống ở nơi đây (5)">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương
                                                    3: Cô lệnh nữ quý tộc tới Nhật du học ngoại ngữ, tận hưởng cuộc sống ở
                                                    nơi
                                                    đây (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Tập 01</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Cô
                                            tiểu thư quý tộc đi du học nước ngoài, nhưng tại sao lại chỉ toàn học cách làm
                                            dâu?</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image15.jpg')}}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 03: Nơi đăng kí">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 03: Nơi đăng kí</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Web Novel</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0"
                                            href="">Transferred
                                            to Another World and Became a Teacher, but Being Feared as a Witch ~ Listen
                                            Seriously to the Lessons Because Royalty and Nobility Don’t Matter!</a>
                                    </div>
                                </div>

                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyloaded"
                                                    style="background-image: url('{{asset('users/user/img/path/image17.jpg')}}')">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title">
                                                <a class="text-white link-underline link-underline-opacity-0"
                                                    href="">Chương 50: Tôi sẽ cho
                                                    cậu nếm mùi thất bại (5)</a>
                                            </div>
                                            <div class="thumb_attr volume-title">01-99</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title">
                                        <a class="text-black link-underline link-underline-opacity-0" href="">Pick
                                            Me Up! Gacha Vô Hạn!</a>
                                    </div>
                                </div>
                            </main>
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
                </div>
            </div>
        </main>
    </form>
@endsection
