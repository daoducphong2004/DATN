@extends('home.layout.master')
@section('title')
Thảo luận
@endsection
@section('content')
<style>
    .cricle_forum {
        height: 10px;
        width: 10px;
        background-color: black;
    }

    .pagination {
        display: flex;
        width: auto;
        justify-content: space-between;
        font-size: 16px;
    }

    .pagination .page-item {
        width: 25px;
        height: 25px;
        border-radius: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 800;
        color: #097059;
        margin-left: 5px;
        margin-right: 5px;
    }

    .pagination .active {
        background-color: #097059;
        color: white;
    }
</style>
<div class="page-top-group  at-index ">
    @include('partials.banner')
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
            <form method="GET" action="{{ route('thao-luan') }}">
                <select name="category" id="category" class="board_categ-list" onchange="this.form.submit()">
                    <option value="" {{ request('category')  }} selected>
                        Tất cả
                    </option>
                    @foreach ($categories as $item_categories)
                    <option value="{{ $item_categories->id }}" {{ request('category') == $item_categories->id ? 'selected' : '' }}>
                        {{ $item_categories->content }}
                    </option>
                    @endforeach
                </select>
            </form>

            @if (Auth::check())
            <a class="button button-newpost button-green" href="{{ route('themthaoluan') }}"><i class="fas fa-plus"></i>
                Thêm</a>
            @else
            <p style="margin-top:10px"><strong>Bạn phải <a href="{{ route('login') }}" style="color: red">đăng nhập</a> để tạo thảo luận</strong></p>
            @endif
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
                    @if ($data_forums->isEmpty())
                    <td>Không có thảo luận nào</td>
                    @else
                    @foreach ($data_forums as $item_forums)
                    <tr class="d-flex">
                        <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                            <a class="topic-title" href="{{ route('chi-tiet-thao-luan', $item_forums->id) }}">
                                @if ($item_forums->featured)
                                <i
                                    class="fas fa-star"></i>
                                @endif
                                {{ $item_forums->title }}</a>
                            <div class="subtitle-category none-m">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color:
                                        {{ $item_forums->color }}
                                      "></i></span>
                                <a href="/thao-luan?chuyen-muc=5">
                                    {{ $item_forums->content_categories }}
                                </a>
                            </div>
                        </td>
                        <td class="col-md-3 col-lg-2 d-none d-md-block">
                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                    style="color:
                                        {{ $item_forums->color }}
                                        "></i></span>
                            <a href="/thao-luan?chuyen-muc=5">
                                {{ $item_forums->content_categories }}
                            </a>
                        </td>
                        <td class="col-1 d-none d-lg-block">{{$totalforumcomment[$item_forums->id]}}</td>
                        <td class="col-md-2 col-lg-1 d-none d-lg-block">{{ $item_forums->viewer }}</td>


                        <td class="col-md-2 col-lg-1 d-none d-md-block">
                            <time class="topic-time timeago" title="{{ $item_forums->created_at }}"
                                datetime="{{ $item_forums->created_at }}">{{ $item_forums->time_ago }}</time>
                        </td>

                        <td class="col-4 col-md-3 col-lg-2 text-right">
                            <div class="topic-avatar none block-m">
                                <imgsrc="{{ $item_forums->avt_user }}">
                            </div>
                            <div class="topic-username block-m">
                                <a href="/thanh-vien/147882">
                                    {{ $item_forums->username }}
                                </a>
                                <time class="topic-time block md:hidden timeago"
                                    title="{{ $item_forums->created_at }}"
                                    datetime="{{ $item_forums->created_at }}">2 phút</time>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @endif

                </tbody>
            </table>
            <div class="pagination-footer">
                <div class="pagination_wrap">
                    <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->


                    {{$data_forums->links()}}

                    <!--<a href=" https://docln.net/thao-luan?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->

                </div>
            </div>
        </section>

    </div>
</main>
@endsection