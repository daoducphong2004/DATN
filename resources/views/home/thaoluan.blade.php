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
                    @foreach ($categories as $item_categories)
                    <li class="l-l-o_item"><a href="/thao-luan?chuyen-muc={{$item_categories->id}}"><i class="fas fa-circle" aria-hidden="true"
                                style="color: {{$item_categories->color}}"></i>{{$item_categories->content}}</a></li>
                    @endforeach
                </ul>
            </div>
            <a class="button button-newpost button-green" href="{{route('themthaoluan')}}"><i
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
                    @foreach ($data_forums as $item_forums)

                    <tr class="d-flex">
                        <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                            <a class="topic-title" href="https://docln.net/thao-luan/2266-thao-luan-cho-tac-gia-oln"><i
                                    class="fas fa-star"></i> {{$item_forums->title}}</a>
                            <div class="subtitle-category none-m">
                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                        style="color:
                                        {{$item_forums->color}}
                                      "></i></span>
                                <a href="/thao-luan?chuyen-muc=5">
                                        {{$item_forums->content_categories}}
                                       </a>
                            </div>
                        </td>
                        <td class="col-md-3 col-lg-2 d-none d-md-block">
                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true"
                                    style="color: 
                                        {{$item_forums->color}}
                                        "></i></span>
                            <a href="/thao-luan?chuyen-muc=5">
                                        {{$item_forums->content_categories}}
                                       </a>
                        </td>
                        <td class="col-1 d-none d-lg-block">{{$item_forums->viewer}}</td>
                        <td class="col-md-2 col-lg-1 d-none d-lg-block">{{$item_forums->viewer}}</td>


                        <td class="col-md-2 col-lg-1 d-none d-md-block">
                            <time class="topic-time timeago" title="{{$item_forums->created_at}}"
                                datetime="{{$item_forums->created_at}}">{{$item_forums->time_ago}}</time>
                        </td>

                        <td class="col-4 col-md-3 col-lg-2 text-right">
                            <div class="topic-avatar none block-m">
                                <img
                                    src=" 
                                    {{$item_forums->avt_user}}
                                     ">
                            </div>
                            <div class="topic-username block-m">
                                <a href="/thanh-vien/147882">
                                    {{$item_forums->username}}
                                    </a>
                                <time class="topic-time block md:hidden timeago" title="{{$item_forums->created_at}}"
                                    datetime="{{$item_forums->created_at}}">2 phút</time>
                            </div>
                        </td>
                    </tr>
  
                    @endforeach
                    
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