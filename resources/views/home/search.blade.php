@extends('home.layout.master')
@section('content')


<div class="page-top-group  at-index ">
    <a href="/truyen/13957">
        <div class="index-background d-none d-lg-block"
            style="background-image: url('{{ asset('/images/banners/fbg_d.jpg') }}')"></div>
        <div class="index-background d-lg-none"
            style="background-image: url('{{ asset('/images/banners/fbg_m.jpg') }}'); background-size: cover">
        </div>
    </a>
</div>

<main id="mainpart" class="search-page" style="min-height: 181px;">
    <header class="page-title">
        <div class="page-name_wrapper">
            <div class="container">
                <span class="page-name"><i class="fas fa-circle"></i>Tìm kiếm</span>
            </div>
        </div>
    </header>

    <div class="search-form_wrapper">
        <div class="container">
            <form class="search-form clear" action="{{route('search')}}" method="get">
                <div class="row">
                    <input id="search-page-input" class="search-form in col-8 col-md-10 col-lg-10" type="text" placeholder="Tối thiểu 2 kí tự" name="title" size="40" value="{{$title}}">
                    <input id="search-go" class="search-go_form search-form submit col-4 col-md-2 col-lg-2" type="submit" value="Tìm kiếm">
                </div>
                <a class="search-advance_toggle" href="tim-kiem-nang-cao" style="margin-top: 10px;"><i class="fas fa-filter"></i> Tìm kiếm nâng cao</a>
            </form>
        </div>
    </div>

    <div class="container">
        <section class="basic-section has-pagination">
            <main class="sect-body">
                <div class="row">
                    @foreach ($data_book as $item)
                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_6650">
                            <a href="{{ route('truyen.truyen', $item->slug) }}" title="{!!$item->title!!}">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyloaded" data-bg="{{ asset(Storage::url($item->book_path)) }}" style="background-image: url('{{ asset(Storage::url($item->book_path)) }}');"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="{!!$item->title!!}"><a href="{{ route('truyen.truyen', $item->slug) }}" title="{!!$item->title!!}">{!!$item->title!!}</a></div>
                                <div class="thumb_attr volume-title">{!!$item->description!!}</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="{{ route('truyen.truyen', $item->slug) }}" title="{!!$item->note!!}">{!!$item->note!!}</a></div>
                    </div>
                    @endforeach
                </div>
            </main>

            <div class="pagination-footer">
                <div class="pagination_wrap">
                    <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                    <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=1" class="paging_item paging_prevnext prev  disabled ">Đầu</a>

                    <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=1" class="paging_item page_num  current ">1</a>
                    <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=2" class="paging_item page_num ">2</a>
                    <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=3" class="paging_item page_num ">3</a>
                    <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=4" class="paging_item page_num ">4</a>
                    <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=5" class="paging_item page_num ">5</a>

                    <!--<a href=" https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                    <a href="https://ln.hako.vn/tim-kiem?query=truy%E1%BB%87n&amp;keywords=truy%E1%BB%87n&amp;page=27" class="paging_item paging_prevnext next ">Cuối</a>
                </div>
            </div>
        </section>
    </div>
</main>

@endsection