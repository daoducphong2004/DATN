@extends('story.layout.master')
@section('content')
<div class="page-top-group  at-index ">
    @include('partials.banner')
</div>


<form method="get">
    <main id="mainpart" class="browser-page">
        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="container">
            <div class="page-breadcrumb">
                <span class="breadcrum-level"><a href="/"><i class="fas fa-home"></i></a></span>
                <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                <span class="breadcrum-level"><a href="/danh-sach">Danh sách</a></span>
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
                            <a class="alphabet_item {{ $alphabet === null ? 'current' : '' }}" href="{{ url('danh-sach') }}">Tất cả</a>
                            <a class="alphabet_item {{ $alphabet === '#' ? 'current' : '' }}" href="{{ url('danh-sach/khac') }}">#</a>
                            <a class="alphabet_item {{ $alphabet === 'a' ? 'current' : '' }}" href="{{ url('danh-sach/a') }}">A</a>
                            <a class="alphabet_item {{ $alphabet === 'b' ? 'current' : '' }}" href="{{ url('danh-sach/b') }}">B</a>
                            <a class="alphabet_item {{ $alphabet === 'c' ? 'current' : '' }}" href="{{ url('danh-sach/c') }}">C</a>
                            <a class="alphabet_item {{ $alphabet === 'd' ? 'current' : '' }}" href="{{ url('danh-sach/d') }}">D</a>
                            <a class="alphabet_item {{ $alphabet === 'e' ? 'current' : '' }}" href="{{ url('danh-sach/e') }}">E</a>
                            <a class="alphabet_item {{ $alphabet === 'f' ? 'current' : '' }}" href="{{ url('danh-sach/f') }}">F</a>
                            <a class="alphabet_item {{ $alphabet === 'g' ? 'current' : '' }}" href="{{ url('danh-sach/g') }}">G</a>
                            <a class="alphabet_item {{ $alphabet === 'h' ? 'current' : '' }}" href="{{ url('danh-sach/h') }}">H</a>
                            <a class="alphabet_item {{ $alphabet === 'i' ? 'current' : '' }}" href="{{ url('danh-sach/i') }}">I</a>
                            <a class="alphabet_item {{ $alphabet === 'j' ? 'current' : '' }}" href="{{ url('danh-sach/j') }}">J</a>
                            <a class="alphabet_item {{ $alphabet === 'k' ? 'current' : '' }}" href="{{ url('danh-sach/k') }}">K</a>
                            <a class="alphabet_item {{ $alphabet === 'l' ? 'current' : '' }}" href="{{ url('danh-sach/l') }}">L</a>
                            <a class="alphabet_item {{ $alphabet === 'm' ? 'current' : '' }}" href="{{ url('danh-sach/m') }}">M</a>
                            <a class="alphabet_item {{ $alphabet === 'n' ? 'current' : '' }}" href="{{ url('danh-sach/n') }}">N</a>
                            <a class="alphabet_item {{ $alphabet === 'o' ? 'current' : '' }}" href="{{ url('danh-sach/o') }}">O</a>
                            <a class="alphabet_item {{ $alphabet === 'p' ? 'current' : '' }}" href="{{ url('danh-sach/p') }}">P</a>
                            <a class="alphabet_item {{ $alphabet === 'q' ? 'current' : '' }}" href="{{ url('danh-sach/q') }}">Q</a>
                            <a class="alphabet_item {{ $alphabet === 'r' ? 'current' : '' }}" href="{{ url('danh-sach/r') }}">R</a>
                            <a class="alphabet_item {{ $alphabet === 's' ? 'current' : '' }}" href="{{ url('danh-sach/s') }}">S</a>
                            <a class="alphabet_item {{ $alphabet === 't' ? 'current' : '' }}" href="{{ url('danh-sach/t') }}">T</a>
                            <a class="alphabet_item {{ $alphabet === 'u' ? 'current' : '' }}" href="{{ url('danh-sach/u') }}">U</a>
                            <a class="alphabet_item {{ $alphabet === 'v' ? 'current' : '' }}" href="{{ url('danh-sach/v') }}">V</a>
                            <a class="alphabet_item {{ $alphabet === 'w' ? 'current' : '' }}" href="{{ url('danh-sach/w') }}">W</a>
                            <a class="alphabet_item {{ $alphabet === 'x' ? 'current' : '' }}" href="{{ url('danh-sach/x') }}">X</a>
                            <a class="alphabet_item {{ $alphabet === 'y' ? 'current' : '' }}" href="{{ url('danh-sach/y') }}">Y</a>
                            <a class="alphabet_item {{ $alphabet === 'z' ? 'current' : '' }}" href="{{ url('danh-sach/z') }}">Z</a>
                        </div>
                    </section>

                    <section class="sub-index-style filter-section">
                        <div class="title-wrapper">
                            <div class="section-title">Phân loại</div>
                        </div>
                        <div class="section-content">
                            <ul class="filter-type unstyled">
                                <li><input type="checkbox" name="truyendich" value="1" {{ request('truyendich') ? 'checked' : '' }}> Truyện dịch</li>
                                <li><input type="checkbox" name="convert" value="1" {{ request('convert') ? 'checked' : '' }}> Convert</li>
                                <li><input type="checkbox" name="sangtac" value="1" {{ request('sangtac') ? 'checked' : '' }}> Truyện sáng tác</li>
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
                                <li><input type="checkbox" name="dangtienhanh" value="1" {{ request('dangtienhanh') ? 'checked' : '' }}> Đang tiến hành</li>
                                <li><input type="checkbox" name="tamngung" value="1" {{ request('tamngung') ? 'checked' : '' }}> Tạm ngưng</li>
                                <li><input type="checkbox" name="hoanthanh" value="1" {{ request('hoanthanh') ? 'checked' : '' }}> Đã hoàn thành</li>
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
                                <li class="filter-type_item">
                                    <a href="{{ route('filterTheLoai', ['slug' => $value]) }}">{{ $key }}</a>
                                    @endforeach
                            </ul>
                        </div>
                    </section>
                </div>

                <div class="col-12 float-left col-lg-9">
                    <section class="thumb-section-flow">
                        <header class="filter-container pad-bottom-10">
                            <form method="GET" action="{{ route('filterDanhSach') }}">
                                <select name="sapxep" onchange="this.form.submit()" class="block inline-m">
                                    <option value="tentruyen" {{ request('sapxep') == 'tentruyen' ? 'selected' : '' }}>A - Z</option>
                                    <option value="tentruyenza" {{ request('sapxep') == 'tentruyenza' ? 'selected' : '' }}>Z - A</option>
                                    <option value="capnhat" {{ request('sapxep') == 'capnhat' ? 'selected' : '' }}>Mới cập nhật</option>
                                    <option value="truyenmoi" {{ request('sapxep') == 'truyenmoi' ? 'selected' : '' }}>Truyện mới</option>
                                    <option value="theodoi" {{ request('sapxep') == 'theodoi' ? 'selected' : '' }}>Theo dõi</option>
                                    <option value="top" {{ request('sapxep') == 'top' ? 'selected' : '' }}>Top toàn thời gian</option>
                                    <option value="topthang" {{ request('sapxep') == 'topthang' ? 'selected' : '' }}>Top tháng</option>
                                    <option value="sotu" {{ request('sapxep') == 'sotu' ? 'selected' : '' }}>Số từ</option>
                                </select>
                            </form>

                            <div class="text-right inline-block-m right-m none-l">
                                <span class="button button-green js-call-filters-wrapper"><i class="fas fa-filter"
                                        style="margin-right: 10px;"></i>Bộ lọc</span>
                            </div>
                        </header>
                        <main class="row">

                            {{-- Bắt đầu truyện đơn --}}
                            @if ($data->isEmpty())
                            <p>Không tìm thấy kết quả nào</p>
                            @endif
                            @foreach ($data as $item)
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip"
                                    data-tooltip-content="#series_{{ $item->id }}">
                                    <a href="truyen/{{ $item->slug }}"
                                        title="{{ $item->episodes->last()->latestChapter->title ?? 'Chưa có chương truyện' }}">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                style="background-image: url('{{ !empty($item->book_path) ? asset(Storage::url($item->book_path)) : asset('img/noava.png') }}');">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="{{ $item->episodes->last()->latestChapter->title ?? 'Chưa có chương truyện' }}">
                                            <a href="truyen/{{ $item->slug }}"
                                                title="{{ $item->episodes->last()->latestChapter->title ?? 'Chưa có chương truyện' }}">
                                                {{ $item->episodes->last()->latestChapter->title ?? 'Chưa có chương truyện' }}
                                            </a>
                                        </div>
                                        <div class="thumb_attr volume-title">
                                            {{ $item->episodes->last()->title ?? 'Chưa có tập truyện' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title">
                                    <a href="truyen/{{ $item->title }}"
                                        title="{{ $item->title }}">{{ $item->title }}</a>
                                </div>
                            </div>
                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_{{ $item->id }}">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">{{ $item->title }}</p>
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