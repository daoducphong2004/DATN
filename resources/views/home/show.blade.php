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
                    <span class="breadcrum-level"><a href=""><i class="fas fa-home"></i></a></span>
                    <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                    <span class="breadcrum-level"><a href="">Danh sách</a></span>
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
                                <a class="alphabet_item  current " href="">Tất cả</a>
                                <a class="alphabet_item " href="">#</a>
                                <a class="alphabet_item " href="">A</a>
                                <a class="alphabet_item " href="">B</a>
                                <a class="alphabet_item " href="">C</a>
                                <a class="alphabet_item " href="">D</a>
                                <a class="alphabet_item " href="">E</a>
                                <a class="alphabet_item " href="">F</a>
                                <a class="alphabet_item " href="">G</a>
                                <a class="alphabet_item " href="">H</a>
                                <a class="alphabet_item " href="">I</a>
                                <a class="alphabet_item " href="">J</a>
                                <a class="alphabet_item " href="">K</a>
                                <a class="alphabet_item " href="">L</a>
                                <a class="alphabet_item " href="">M</a>
                                <a class="alphabet_item " href="">N</a>
                                <a class="alphabet_item " href="">O</a>
                                <a class="alphabet_item " href="">P</a>
                                <a class="alphabet_item " href="">Q</a>
                                <a class="alphabet_item " href="">R</a>
                                <a class="alphabet_item " href="">S</a>
                                <a class="alphabet_item " href="">T</a>
                                <a class="alphabet_item " href="">U</a>
                                <a class="alphabet_item " href="">V</a>
                                <a class="alphabet_item " href="">W</a>
                                <a class="alphabet_item " href="">X</a>
                                <a class="alphabet_item " href="">Y</a>
                                <a class="alphabet_item " href="">Z</a>
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
                                    <input type="submit" class="button bg-green-600 text-white hover:bg-green-700"
                                        value="Áp dụng">
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
                                    <input type="submit" class="button bg-green-600 text-white hover:bg-green-700"
                                        value="Áp dụng">
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
                                        <li class="filter-type_item"><a class="text-black link-underline link-underline-opacity-0"
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
                            <main class="row">

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
                                            {{-- <div class="thumb_attr chapter-title" title=""><a href=""
                                                    title=""></a></div> --}}
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
                                            {{-- <div class="thumb_attr chapter-title" title=""><a href=""
                                                    title=""></a></div> --}}
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

                            </main>
                            <div class="pagination-footer">
                                <div class="pagination_wrap">

                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=1"
                                        class="paging_item paging_prevnext prev  disabled ">Đầu</a>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=1"
                                        class="paging_item page_num  current ">1</a>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=2"
                                        class="paging_item page_num ">2</a>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=3"
                                        class="paging_item page_num ">3</a>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=4"
                                        class="paging_item page_num ">4</a>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=5"
                                        class="paging_item page_num ">5</a>

                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;amp%3Bsapxep=topthang&amp;page=68"
                                        class="paging_item paging_prevnext next ">Cuối</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </form>
@endsection
