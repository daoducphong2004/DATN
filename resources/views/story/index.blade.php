@extends('home.layout.master')
@section('content')
<div class="page-top-group ">
    <a href="truyen/13957.html">
        <div class="index-background d-none d-lg-block"
            style="background-image: url('../i2.docln.net/ln/banners/2024-06-23/13957_d.png')"></div>
        <div class="index-background d-lg-none"
            style="background-image: url('../i2.docln.net/ln/banners/2024-06-23/13957_m.png'); background-size: cover">
        </div>
    </a>
</div>


<form method="get">
    <main id="mainpart" class="browser-page">
        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="container">
            <div class="page-breadcrumb">
                <span class="breadcrum-level"><a href="index.html"><i class="fas fa-home"></i></a></span>
                <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                <span class="breadcrum-level"><a href="danh-sach.html">Danh sách</a></span>
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
                            <a class="alphabet_item  current " href="danh-sach.html">Tất cả</a>
                            <a class="alphabet_item " href="danh-sach/khac.html">#</a>
                            <a class="alphabet_item " href="danh-sach/a.html">A</a>
                            <a class="alphabet_item " href="danh-sach/b.html">B</a>
                            <a class="alphabet_item " href="danh-sach/c.html">C</a>
                            <a class="alphabet_item " href="danh-sach/d.html">D</a>
                            <a class="alphabet_item " href="danh-sach/e.html">E</a>
                            <a class="alphabet_item " href="danh-sach/f.html">F</a>
                            <a class="alphabet_item " href="danh-sach/g.html">G</a>
                            <a class="alphabet_item " href="danh-sach/h.html">H</a>
                            <a class="alphabet_item " href="danh-sach/i.html">I</a>
                            <a class="alphabet_item " href="danh-sach/j.html">J</a>
                            <a class="alphabet_item " href="danh-sach/k.html">K</a>
                            <a class="alphabet_item " href="danh-sach/l.html">L</a>
                            <a class="alphabet_item " href="danh-sach/m.html">M</a>
                            <a class="alphabet_item " href="danh-sach/n.html">N</a>
                            <a class="alphabet_item " href="danh-sach/o.html">O</a>
                            <a class="alphabet_item " href="danh-sach/p.html">P</a>
                            <a class="alphabet_item " href="danh-sach/q.html">Q</a>
                            <a class="alphabet_item " href="danh-sach/r.html">R</a>
                            <a class="alphabet_item " href="danh-sach/s.html">S</a>
                            <a class="alphabet_item " href="danh-sach/t.html">T</a>
                            <a class="alphabet_item " href="danh-sach/u.html">U</a>
                            <a class="alphabet_item " href="danh-sach/v.html">V</a>
                            <a class="alphabet_item " href="danh-sach/w.html">W</a>
                            <a class="alphabet_item " href="danh-sach/x.html">X</a>
                            <a class="alphabet_item " href="danh-sach/y.html">Y</a>
                            <a class="alphabet_item " href="danh-sach/z.html">Z</a>

                        </div>
                    </section>

                    <section class="sub-index-style filter-section">
                        <div class="title-wrapper">
                            <div class="section-title">Phân loại</div>
                        </div>
                        <div class="section-content">
                            <ul class="filter-type unstyled">
                                <li><input type="checkbox" name="truyendich" value="1" checked> Truyện dịch
                                </li>
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
                                <li><input type="checkbox" name="dangtienhanh" value="1" checked> Đang tiến
                                    hành</li>
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
                            <div class="section-title">Phân loại</div>
                        </div>
                        <div class="section-content">
                            <ul class="filter-type unstyled clear">
                                @foreach ($genres as $key => $value)
                                    <li class="filter-type_item"><a
                                            href="the-loai/{{ $value }}">{{ $key }}</a>
                                @endforeach
                                <li class="filter-type_item"><a href="the-loai/action.html">Action</a>

                            </ul>
                        </div>
                    </section>
                </div>

                <div class="col-12 float-left col-lg-9">


                    <section class="thumb-section-flow">
                        <header class="filter-container pad-bottom-10">
                            <!-- <button class="button button-general" type="submit" name="sapxep" value="tentruyen">
                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i> A - Z
                        </button>
                        <button class="button button-general" type="submit" name="sapxep" value="tentruyenza">
                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i> Z - A
                        </button>
                        <button class="button button-general" type="submit" name="sapxep" value="capnhat">
                            <i class="fa fa-sort-amount-desc" aria-hidden="true"></i> Mới cập nhật
                        </button>
                        <button class="button button-general" type="submit" name="sapxep" value="truyenmoi">
                            <i class="fa fa-sort-amount-desc" aria-hidden="true"></i> Truyện mới
                        </button>
                        <button class="button button-general" type="submit" name="sapxep" value="theodoi">
                            <i class="fa fa-heart" aria-hidden="true"></i> Theo dõi
                        </button>
                        <button class="button button-general button-primary-green" type="submit" name="sapxep" value="top">
                            <i class="fa fa-fire" aria-hidden="true"></i> Top
                        </button>
                        <button class="button button-general type="submit" name="sapxep" value="topthang">
                            <i class="fa fa-fire" aria-hidden="true"></i> Top tháng
                        </button>  -->
                            <select name="sapxep" onchange="this.form.submit()" class="block inline-m">
                                <option value="tentruyen">A - Z</option>
                                <option value="tentruyenza">Z - A</option>
                                <option value="capnhat">Mới cập nhật</option>
                                <option value="truyenmoi">Truyện mới</option>
                                <option value="theodoi">Theo dõi</option>
                                <option value="top" selected=&quot;selected&quot;>Top toàn thời gian</option>
                                <option value="topthang">Top tháng</option>
                                <option value="sotu">Số từ</option>
                            </select>
                            <div class="text-right inline-block-m right-m none-l">
                                <span class="button button-green js-call-filters-wrapper"><i class="fas fa-filter"
                                        style="margin-right: 10px;"></i>Bộ lọc</span>
                            </div>
                        </header>
                        <main class="row">

                            {{-- Bắt đầu truyện đơn --}}
                            @foreach ($data as $item)
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip"
                                        data-tooltip-content="#series_{{ $item->id }}">
                                        <a href="truyen/{{ $item->slug }}"
                                            title="Sau có chương truyện thì lấy tên chương truyện mới nhất để vào">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload"
                                                    style="background-image: url('{{ asset($item->book_path) }}');">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title"
                                                title="Sau có chương truyện thì lấy tên chương truyện mới nhất để vào">
                                                <a href="truyen/{{ $item->slug }}"
                                                    title="Sau có chương truyện thì lấy tên chương truyện mới nhất để vào">Sau
                                                    có chương truyện thì lấy tên chương truyện mới nhất để vào</a>
                                            </div>
                                            <div class="thumb_attr volume-title">Tên của tập truyện mới nhất</div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a href="truyen/{{ $item->title }}"
                                            title="{{ $item->title }}">{{ $item->title }}</a></div>
                                </div>
                                <!-- Tooltip -->
                                <div style="display: none">
                                    <div id="series_{{ $item->id }}">
                                        <div style="margin: 10px 0; width: 250px">
                                            <p style="color: white; font-weight: bold">
                                                {{ $item->title }}
                                            </p>
                                            <p>
                                                {{-- <div>Số từ: 1.625.237</div> --}}
                                            <div>Lượt xem: {{ $item->view }}</div>
                                            <div>Lượt thích: {{ $item->like }}</div>
                                            </p>
                                            {!! $item->description !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- Kết thúc truyện đơn --}}

                        </main>
                        <style>
                            .pagination {
                                display: flex;
                                justify-content: center;
                                padding: 10px 0;
                                list-style: none;
                            }

                            .pagination li {
                                margin: 0 5px;
                            }

                            .pagination li a,
                            .pagination li span {
                                display: inline-block;
                                padding: 8px 14px;
                                text-decoration: none;
                                border-radius: 50%;
                                background-color: transparent;
                                color: #31726e;
                                font-weight: bold;
                            }

                            .pagination li a:hover,
                            .pagination li a:focus {
                                text-decoration: none;
                                color: #31726e;
                            }

                            .pagination li.active span {
                                background-color: #31726e;
                                color: white;
                            }

                            .pagination li.disabled span {
                                color: #b3c6c6;
                            }
                        </style>
                        {{ $data->links() }}
                    </section>
                </div>
            </div>
        </div>
    </main>
</form>

<script>
    $(document).ready(function() {
        $('.js-call-filters-wrapper').on('click', function() {
            $('.filters-wrapper').toggle();
            $('html').toggleClass('overflow-hiden');
        });
        $('.js-off-filters-wrapper').on('click', function() {
            $('.filters-wrapper').hide();
            $('html').removeClass('overflow-hiden');
        });

        tippy('.ln-tooltip', {
            delay: 50,
            maxWidth: 500,
            interactive: false,
            touch: ['hold', 1000],
            placement: 'right',
            ignoreAttributes: true,
            content(ref) {
                const selector = ref.getAttribute('data-tooltip-content');
                const template = document.querySelector(selector);
                return template.innerHTML;
            },
            onShow(instance) {
                tippyHideAll({
                    exclude: instance
                });
            }
        });
    });
</script>


@endsection

