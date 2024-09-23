<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<table class="broad-table  table-borderless">
                <thead>
                    <tr class="d-flex">
                        <th class="col-8 col-md-4 col-lg-5 col-xl-5">Chủ đề</th>
                        <th class="col-md-3 col-lg-2 d-none d-md-block">Chuyên mục</th>
                        <th class="col-1 d-none d-lg-block">Bình luận</th>
                        <th class="col-md-2 col-lg-1 d-none d-lg-block">Lượt xem</th>
                        <th class="col-md-2 col-lg-1 d-none d-md-block">Gần nhất</th>
                        <th class="col-4 col-md-3 col-lg-2 text-right">Người đăng cuối</th>
                        <th class="col-4 col-md-3 col-lg-2 text-right">Hành động</th>
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
                        <td class="col-4 col-md-3 col-lg-2 text-right"><a href="{{route('editforum',$item_forums->id)}}">Sửa</a>
                        <form method="post" action="{{route('deleteforum',$item_forums->id)}}"  onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
                            @csrf
                            @method('DELETE')
                        <button type="submit" >delete</button>

                        </form>
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
</body>

</html>
