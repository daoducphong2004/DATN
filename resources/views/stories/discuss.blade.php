@extends('partials.sidebar')
@section('noidung');

        
 <main id="mainpart" class="page-board" style="background: url('img/background/bg_yuudachi.jpg') no-repeat fixed 70px center; background: none;">
                <header class="page-title">
                    <div class="page-name_wrapper">
                        <div class="container relative">
                            <span class="page-name"><a href="thao-luan.html"><i class="fas fa-circle"></i>Thảo luận</a></span>                
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
                                <li class="l-l-o_item"><a href="{{route('thaoluan')}}"><i class="fas fa-circle" aria-hidden="true" style="color: black"></i> Tất cả</a></li>
                                                <li class="l-l-o_item"><a href="thao-luan7a2e.html?chuyen-muc=1"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i> Thông báo</a></li>
                                                <li class="l-l-o_item"><a href="thao-luan2284.html?chuyen-muc=2"><i class="fas fa-circle" aria-hidden="true" style="color: #e01bb4"></i> Tin tức</a></li>
                                                <li class="l-l-o_item"><a href="thao-luane18d.html?chuyen-muc=3"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i> Hỏi đáp</a></li>
                                                <li class="l-l-o_item"><a href="thao-luand20e.html?chuyen-muc=4"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i> Đánh giá</a></li>
                                                <li class="l-l-o_item"><a href="thao-luan6b2d.html?chuyen-muc=5"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i> Thảo luận</a></li>
                                            </ul>
                        </div>
                        <a class="button button-newpost button-green" href="https://docln.net/action/page/create"><i class="fas fa-plus"></i> Thêm</a>
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
                                        <a class="topic-title" href="thao-luan/77-quy-dinh-doi-voi-oln.html"><i class="fas fa-star"></i>  Quy Định Đối Với Truyện Sáng Tác - OLN</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">6242</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">768.774</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="23-08-2024 08:13:53" datetime="2024-08-23T08:13:53+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua118777-52732184-13b3-4e1c-8c00-0401cd429706.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/118777.html">Thiên Ý</a>
                                            <time class="topic-time block md:hidden timeago" title="23-08-2024 08:13:53" datetime="2024-08-23T08:13:53+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi.html"><i class="fas fa-star"></i>  Góp ý và báo lỗi</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">5435</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">619.007</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="23-08-2024 01:57:58" datetime="2024-08-23T01:57:58+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua124404-96ea7862-0690-4d90-915f-40687108889b.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/124404.html">Perucia Shunya</a>
                                            <time class="topic-time block md:hidden timeago" title="23-08-2024 01:57:58" datetime="2024-08-23T01:57:58+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/614-cam-nang-cho-cac-translator.html"><i class="fas fa-star"></i>  Phòng hỗ trợ dịch thuật</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                            <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">13071</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">883.963</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="22-08-2024 21:33:56" datetime="2024-08-22T21:33:56+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u187792-b085dc97-59e4-4b3a-9585-b7942206f35b.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/187792.html">HirotoKuze5566</a>
                                            <time class="topic-time block md:hidden timeago" title="22-08-2024 21:33:56" datetime="2024-08-22T21:33:56+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="{{route('createTruyen')}}"><i class="fas fa-star"></i>  Hướng dẫn đăng truyện</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">2858</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">477.637</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="22-08-2024 16:07:16" datetime="2024-08-22T16:07:16+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="img/noava.png">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/199697.html">CoiSama</a>
                                            <time class="topic-time block md:hidden timeago" title="22-08-2024 16:07:16" datetime="2024-08-22T16:07:16+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2266-thao-luan-cho-tac-gia-oln.html"><i class="fas fa-star"></i>  Thảo luận cho tác giả OLN</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                            <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">11707</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">1.073.458</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="22-08-2024 12:59:38" datetime="2024-08-22T12:59:38+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u136911-8f592015-f541-49d6-a5c6-9bcef73cf852.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/136911.html">Bongtoivinhhang</a>
                                            <time class="topic-time block md:hidden timeago" title="22-08-2024 12:59:38" datetime="2024-08-22T12:59:38+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/1610-trang-yeu-cau-xoa-truyentapchuong.html"><i class="fas fa-star"></i>  Trang yêu cầu xóa truyện/tập/chương</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">3483</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">254.715</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="21-08-2024 21:41:39" datetime="2024-08-21T21:41:39+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u143918-34b8571b-456a-435b-8131-ba003d106f34.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/143918.html">Kastova Antonov</a>
                                            <time class="topic-time block md:hidden timeago" title="21-08-2024 21:41:39" datetime="2024-08-21T21:41:39+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/20-quy-dinh-chung-doi-voi-cac-du-an-dang-tai-cong-light-novel-bao-gom-truyen-dichconvert-va-oln.html"><i class="fas fa-star"></i>  Quy định chung đối với các dự án đăng tại Cổng Light Novel</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">1178</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">299.859</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="19-08-2024 22:45:56" datetime="2024-08-19T22:45:56+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u47116-2048df37-ead9-4835-97f6-201544957a81.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/47116.html">herorule</a>
                                            <time class="topic-time block md:hidden timeago" title="19-08-2024 22:45:56" datetime="2024-08-19T22:45:56+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2745-quy-dinh-doi-voi-truyen-dich.html"><i class="fas fa-star"></i>  Quy Định Đối Với Truyện Dịch</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">3</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">3.438</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="08-07-2024 09:34:12" datetime="2024-07-08T09:34:12+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u163517-4dd4fac1-5f72-4ed9-9dcf-2e1319c17d03.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/163517.html">Trần Công Huy</a>
                                            <time class="topic-time block md:hidden timeago" title="08-07-2024 09:34:12" datetime="2024-07-08T09:34:12+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2766-khong-the-su-dung-facebook-login-nua.html"><i class="fas fa-star"></i>  Không thể sử dụng Facebook đăng nhập nữa</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">21</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">20.568</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="12-05-2024 23:52:35" datetime="2024-05-12T23:52:35+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="img/noava.png">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/168196.html">Dangbulu</a>
                                            <time class="topic-time block md:hidden timeago" title="12-05-2024 23:52:35" datetime="2024-05-12T23:52:35+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/4-convert-la-gi-tai-sao-lai-doc-light-novel-convert.html"><i class="fas fa-star"></i>  Convert là gì? Tại sao lại đọc Light Novel Convert?</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                            <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                        <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">164</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">47.408</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="25-02-2024 20:41:08" datetime="2024-02-25T20:41:08+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="img/noava.png">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/154573.html">LeviathanOfEnvy</a>
                                            <time class="topic-time block md:hidden timeago" title="25-02-2024 20:41:08" datetime="2024-02-25T20:41:08+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2662-cap-nhat-nhung-thay-doi-chuc-nang-trong-cln.html"><i class="fas fa-star"></i>  Cập nhật những thay đổi chức năng trong CLN</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">1</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">1.528</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="02-09-2023 23:54:30" datetime="2023-09-02T23:54:30+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/1.html">Embers</a>
                                            <time class="topic-time block md:hidden timeago" title="02-09-2023 23:54:30" datetime="2023-09-02T23:54:30+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2376-quy-chuan-duyet-banner-box-sang-tac.html"><i class="fas fa-star"></i>  Quy chuẩn duyệt Banner box Sáng tác</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">5</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">6.124</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="14-06-2023 11:14:53" datetime="2023-06-14T11:14:53+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/1.html">Embers</a>
                                            <time class="topic-time block md:hidden timeago" title="14-06-2023 11:14:53" datetime="2023-06-14T11:14:53+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2560-event-cho-cong-ln.html"><i class="fas fa-star"></i>  Event cho Cổng LN?</a>
                                        <div class="subtitle-category none-m">
                                            <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                            <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">79</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">17.817</td>
                                    
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block">
                                                                    <time class="topic-time timeago" title="20-05-2023 18:36:47" datetime="2023-05-20T18:36:47+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar creator none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/1.html">Embers</a>
                                            <time class="topic-time block md:hidden timeago" title="20-05-2023 18:36:47" datetime="2023-05-20T18:36:47+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2849-hoi-truyen-tu-az-goc-chat-nham-cho-con-dan-hako-30.html">  Hỏi Truyện từ A&gt;Z. Góc chat nhảm cho con dân Hako 3.0</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">1545</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">47.334</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="23-08-2024 04:09:01" datetime="2024-08-23T04:09:01+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua28271-87da1ac1-69cb-4cb8-a3ae-91f4e6e63206.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/28271.html">Magnet</a>
                                            <time class="topic-time block md:hidden timeago" title="23-08-2024 04:09:01" datetime="2024-08-23T04:09:01+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/85-de-xuat-lnwn-cho-cac-trans.html">  Đề xuất LN/WN cho các trans</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">10131</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">1.010.513</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="22-08-2024 21:35:01" datetime="2024-08-22T21:35:01+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u187792-b085dc97-59e4-4b3a-9585-b7942206f35b.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/187792.html">HirotoKuze5566</a>
                                            <time class="topic-time block md:hidden timeago" title="22-08-2024 21:35:01" datetime="2024-08-22T21:35:01+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2789-bao-cao-truyen-vi-pham.html">  Báo cáo truyện vi phạm</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                                <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">220</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">28.506</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="22-08-2024 17:00:19" datetime="2024-08-22T17:00:19+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua162862-2a5bfd4b-5253-4b04-95ab-7c1bd35b8ed5.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/162862.html">Còng Lưng</a>
                                            <time class="topic-time block md:hidden timeago" title="22-08-2024 17:00:19" datetime="2024-08-22T17:00:19+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2515-quan-bong-da-hako-chuyen-phuc-vu-dan-bong-da.html">  Quán Bóng Đá Hako - Chuyên phục vụ dân bóng đá.</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">1268</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">133.023</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="22-08-2024 11:09:36" datetime="2024-08-22T11:09:36+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua39-dcda761a-ec2c-40a4-bf98-f7faee936682.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/39.html">medassin</a>
                                            <time class="topic-time block md:hidden timeago" title="22-08-2024 11:09:36" datetime="2024-08-22T11:09:36+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2770-megabura-thong-tin-tu-tac-gia.html"> <i class="fas fa-paperclip"></i> MegaBura - Thông tin từ tác giả</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #e01bb4"></i></span>
                                                <a href="thao-luan2284.html?chuyen-muc=2">Tin tức</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #e01bb4"></i></span>
                                        <a href="thao-luan2284.html?chuyen-muc=2">Tin tức</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">204</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">8.140</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="22-08-2024 00:26:51" datetime="2024-08-22T00:26:51+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u88077-4385bd65-ce08-46d9-8044-e9347fd47d6c.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/88077.html">Sivala</a>
                                            <time class="topic-time block md:hidden timeago" title="22-08-2024 00:26:51" datetime="2024-08-22T00:26:51+07:00"></time>
                                        </div>
                                    </td>
                                                                                    <!--<div class="board-topic-series none col-12">
                                        <a href="/truyen/225-slayers" class="b-t-s_item">{&quot;id&quot;:225,&quot;title&quot;:&quot;Slayers&quot;,&quot;slug&quot;:&quot;225-slayers&quot;,&quot;user_id&quot;:88077,&quot;member_ids&quot;:[1,160450],&quot;group_id&quot;:2204,&quot;summary&quot;:&quot;&lt;p&gt;Slayers l\u00e0 m\u1ed9t c\u00e2u chuy\u1ec7n h\u00e0i h\u01b0\u1edbc xoay quanh nh\u1eefng cu\u1ed9c phi\u00eau l\u01b0u c\u1ee7a n\u1eef ph\u00f9 th\u1ee7y tr\u1ebb Lina Inverse c\u00f9ng nh\u1eefng ng\u01b0\u1eddi b\u1ea1n \u0111\u1ed3ng h\u00e0nh trong 1 th\u1ebf gi\u1edbi fantasy. S\u1eed d\u1ee5ng l\u01b0\u1ee1i g\u01b0\u01a1m v\u00e0 ph\u00e1p thu\u1eadt h\u1ecd chi\u1ebfn \u0111\u1ea5u ch\u1ed1ng l\u1ea1i ph\u00f9 th\u1ee7y, qu\u00e1i v\u1eadt, ma t\u1ed9c \u00e2m m\u01b0u ph\u00e1 h\u1ee7y th\u1ebf gi\u1edbi v\u00e0 \u0111\u00f4i khi c\u1ea3 nh\u1eefng b\u0103ng c\u01b0\u1edbp lang thang t\u1ed9i nghi\u1ec7p. - Lina Inverse: M\u1ed9t c\u00f4 ph\u00f9 th\u1ee7y t\u00f3c n\u00e2u \u0111\u1ecf c\u1ef1c k\u1ef3 h\u00e1m ti\u1ec1n v\u00e0 \u0111\u1ed9c \u00e1c m\u1ed9t c\u00e1ch \u0111\u00e1ng y\u00eau. D\u00f9 v\u00f4 t\u00ecnh hay c\u1ed1 \u00fd, Lina \u0111em l\u1ea1i s\u1ef1 h\u1ee7y di\u1ec7t cho b\u1ea5t k\u1ef3 n\u01a1i n\u00e0o c\u00f4 \u0111i qua trong c\u00e1c cu\u1ed9c phi\u00eau l\u01b0u t\u00ecm s\u1ef1 gi\u00e0u c\u00f3. V\u00ec v\u1eady danh ti\u1ebfng c\u1ee7a Lina Inverse lu\u00f4n \u0111i tr\u01b0\u1edbc c\u00f4, v\u00e0 ng\u01b0\u1eddi ta bi\u1ebft \u0111\u1ebfn Lina Inverse nh\u01b0 l\u00e0 m\u1ed9t ph\u00f9 th\u1ee7y c\u1ef1c m\u1ea1nh, \u0111\u1ed9c \u00e1c, v\u00e0 c\u00f3 ng\u1ef1c l\u00e9p. V\u00e0 Lina lu\u00f4n t\u1eb7ng cho b\u1ea5t k\u1ef3 ng\u01b0\u1eddi n\u00e0o n\u00f3i \u0111\u1ebfn b\u1ed9 ng\u1ef1c l\u00e9p c\u1ee7a c\u00f4 m\u1ed9t qu\u1ea3 c\u1ea7u l\u1eeda. - Gourry Gabriev: M\u1ed9t ki\u1ebfm s\u0129 cao l\u1edbn \u0111\u1eb9p trai, c\u1ef1c gi\u1ecfi ki\u1ebfm thu\u1eadt nh\u01b0ng c\u0169ng c\u1ef1c k\u1ef3 ngu ng\u1ed1c. Gourry \u0111\u00e3 t\u00ecnh c\u1edd gi\u1ea3i c\u1ee9u Lina kh\u1ecfi b\u1ecdn c\u01b0\u1edbp tr\u01b0\u1edbc khi Lina thi\u00eau r\u1ee5i ch\u00fang v\u1edbi qu\u1ea3 c\u1ea7u l\u1eeda, v\u00e0 t\u1eeb \u0111\u00f3 tr\u1edf th\u00e0nh v\u1ec7 s\u0129 c\u1ee7a Lina. Gourry s\u1edf h\u1eefu thanh Quang Ki\u1ebfm, m\u1ed9t thanh g\u01b0\u01a1m truy\u1ec1n thuy\u1ebft c\u00f3 kh\u1ea3 n\u0103ng \u0111\u1ea3 th\u01b0\u01a1ng \u0111\u01b0\u1ee3c c\u1ea3 ma t\u1ed9c.&lt;\/p&gt;&quot;,&quot;extra&quot;:&quot;&lt;p&gt;+) T\u1eadp 1-8: &lt;a href=\&quot;..\/..\/..\/truyen\/12394-slayers\&quot;&gt;https:\/\/docln.net\/truyen\/12394-slayers&lt;\/a&gt;&lt;\/p&gt;\n&lt;p&gt;+) Translator t\u1eadp 9: sos505&lt;\/p&gt;&quot;,&quot;status&quot;:2,&quot;author&quot;:&quot;Hajime Kanzaka&quot;,&quot;illustrator&quot;:&quot;Rui Araizumi&quot;,&quot;altname&quot;:&quot;\u30b9\u30ec\u30a4\u30e4\u30fc\u30ba&quot;,&quot;type&quot;:1,&quot;view_count&quot;:83002,&quot;last_month_view_count&quot;:81557,&quot;last_month_view_count_at&quot;:&quot;2024-08-01 00:00:03&quot;,&quot;collection&quot;:60,&quot;cover&quot;:&quot;https:\/\/i2.docln.net\/ln\/series\/covers\/s225-f46da4ce-2edc-4edb-960f-39faa2e8aaf1.jpg&quot;,&quot;locked&quot;:1,&quot;is_mature&quot;:0,&quot;latestchapter_id&quot;:130992,&quot;comment_experiment&quot;:1,&quot;show_to_role&quot;:null,&quot;commentable&quot;:1,&quot;word_count&quot;:357723,&quot;comment_count&quot;:54,&quot;rating_count&quot;:0,&quot;rating_sum&quot;:0,&quot;pin_comment_id&quot;:2498962,&quot;comment_page_id&quot;:0,&quot;created_at&quot;:&quot;2016-11-10T17:43:31.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-05-01T12:45:41.000000Z&quot;,&quot;deleted_at&quot;:null,&quot;delete_reason&quot;:null,&quot;redirect_series_id&quot;:0,&quot;notification_ignore_users&quot;:[52215,160450,154514],&quot;readable_status&quot;:&quot;T\u1ea1m ng\u01b0ng&quot;,&quot;average_rating&quot;:0}</a>
                                    </div>-->
                                                        </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2865-de-toi-chi-ban-viet-ban-thao-theo-cach-chuyen-nghiep-hon-nhe.html">  Để tôi chỉ bạn viết bản thảo theo cách chuyên nghiệp hơn nhé.</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">6</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">708</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="21-08-2024 14:28:38" datetime="2024-08-21T14:28:38+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u194180-551260bc-9b2a-4faf-9202-46923ea3e2bc.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/194180.html">Kirito_chan~~</a>
                                            <time class="topic-time block md:hidden timeago" title="21-08-2024 14:28:38" datetime="2024-08-21T14:28:38+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2860-tuyen-thanh-vien.html">  Tuyển thành viên</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #e01bb4"></i></span>
                                                <a href="thao-luan2284.html?chuyen-muc=2">Tin tức</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #e01bb4"></i></span>
                                        <a href="thao-luan2284.html?chuyen-muc=2">Tin tức</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">60</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">3.471</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="20-08-2024 16:34:38" datetime="2024-08-20T16:34:38+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u140843-3bbe5839-7454-42f2-8496-8401deec5bba.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/140843.html">Wibu trường C</a>
                                            <time class="topic-time block md:hidden timeago" title="20-08-2024 16:34:38" datetime="2024-08-20T16:34:38+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2842-tong-hop-ebook-cac-loai-nhieu-nguon-tin-nhieu-the-loai-khac-nhau-dang-lai.html">  Tổng Hợp Ebook Các Loại, Nhiều Nguồn Tin, Nhiều Thể Loại Khác Nhau (Đăng lại)</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #e01bb4"></i></span>
                                                <a href="thao-luan2284.html?chuyen-muc=2">Tin tức</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #e01bb4"></i></span>
                                        <a href="thao-luan2284.html?chuyen-muc=2">Tin tức</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">8</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">1.650</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="19-08-2024 10:53:03" datetime="2024-08-19T10:53:03+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u194180-551260bc-9b2a-4faf-9202-46923ea3e2bc.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/194180.html">Kirito_chan~~</a>
                                            <time class="topic-time block md:hidden timeago" title="19-08-2024 10:53:03" datetime="2024-08-19T10:53:03+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2858-tim-vai-bo-de-doc.html">  tìm vài bộ để đọc</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                                <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                        <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">31</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">1.610</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="17-08-2024 21:34:18" datetime="2024-08-17T21:34:18+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua109450-33cedb00-ac5f-448b-8869-d1bdc0bd06cf.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/109450.html">Nhan enten</a>
                                            <time class="topic-time block md:hidden timeago" title="17-08-2024 21:34:18" datetime="2024-08-17T21:34:18+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2859-thay-doi-ve-nhom-dich.html">  Thay đổi về nhóm dịch</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                                <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">27</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">3.518</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="17-08-2024 19:57:01" datetime="2024-08-17T19:57:01+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua9342-0a917124-61b3-40dc-8fc0-8f6126fe42cb.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/9342.html">Kitexer</a>
                                            <time class="topic-time block md:hidden timeago" title="17-08-2024 19:57:01" datetime="2024-08-17T19:57:01+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2869-tai-light-novel-cho-may-doc-sach-file-epub.html">  Tải Light Novel cho máy đọc sách (File EPUB)</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                                <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                        <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">6</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">381</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="17-08-2024 11:44:57" datetime="2024-08-17T11:44:57+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u176255-939881ba-4ea6-48a4-b398-4cccb399d4d6.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/176255.html">_proslimevn</a>
                                            <time class="topic-time block md:hidden timeago" title="17-08-2024 11:44:57" datetime="2024-08-17T11:44:57+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2867-phien-dienkhong-hoan-hao.html">  Phiến Diện/Không Hoàn Hảo</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">55</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">2.058</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="17-08-2024 01:38:21" datetime="2024-08-17T01:38:21+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua67929-e5e1f9f7-3a2d-4396-990c-eb342f288cbe.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/67929.html">Yuukei</a>
                                            <time class="topic-time block md:hidden timeago" title="17-08-2024 01:38:21" datetime="2024-08-17T01:38:21+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2868-hoi-ve-viec-ket-noi-khong-an-toan.html">  Hỏi về việc kết nối không an toàn</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                                <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                        <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">1</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">272</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="16-08-2024 22:37:33" datetime="2024-08-16T22:37:33+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua102504-397e52e1-5e71-4f7e-b303-173c9a2a2a4e.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/102504.html">namLN</a>
                                            <time class="topic-time block md:hidden timeago" title="16-08-2024 22:37:33" datetime="2024-08-16T22:37:33+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2311-gop-y-ve-viec-lam-bai-review-va-danh-gia-mal.html">  Góc review và recommend MAL (Manga-Anime-Light Novel)</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i></span>
                                                <a href="thao-luand20e.html?chuyen-muc=4">Đánh giá</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i></span>
                                        <a href="thao-luand20e.html?chuyen-muc=4">Đánh giá</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">480</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">54.526</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="15-08-2024 16:46:21" datetime="2024-08-15T16:46:21+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua59827-01692547-f48f-443a-b1ba-cf142484bc59.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/59827.html">UNIVERSE</a>
                                            <time class="topic-time block md:hidden timeago" title="15-08-2024 16:46:21" datetime="2024-08-15T16:46:21+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2863-phuong-phap-hoc-tieng-nhat.html">  Cùng nhau học tiếng Nhật phần 1 - phương pháp</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">97</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">3.884</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="14-08-2024 21:10:59" datetime="2024-08-14T21:10:59+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua127520-e2d6defb-5409-45b6-bbdc-1b91fb98b428.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/127520.html">Vanmaxohp</a>
                                            <time class="topic-time block md:hidden timeago" title="14-08-2024 21:10:59" datetime="2024-08-14T21:10:59+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2862-ke-hoach-cua-thang-trans.html"> <i class="fas fa-paperclip"></i> Kế hoạch của thằng Trans</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                                <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                        <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">23</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">985</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="13-08-2024 20:53:17" datetime="2024-08-13T20:53:17+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u176255-939881ba-4ea6-48a4-b398-4cccb399d4d6.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/176255.html">_proslimevn</a>
                                            <time class="topic-time block md:hidden timeago" title="13-08-2024 20:53:17" datetime="2024-08-13T20:53:17+07:00"></time>
                                        </div>
                                    </td>
                                                                                    <!--<div class="board-topic-series none col-12">
                                        <a href="/truyen/18809-ho-da-thau-hieu-tinh-cam-cua-minh-nhung-hiep-si-da-tai-sinh-thanh-mot-con-cao-nho" class="b-t-s_item">{&quot;id&quot;:18809,&quot;title&quot;:&quot;K\u1ef5 s\u0129 \u0111\u00e3 t\u00e1i sinh th\u00e0nh h\u1ed3 ly nh\u1ecf&quot;,&quot;slug&quot;:&quot;18809-ho-da-thau-hieu-tinh-cam-cua-minh-nhung-hiep-si-da-tai-sinh-thanh-mot-con-cao-nho&quot;,&quot;user_id&quot;:175855,&quot;member_ids&quot;:[],&quot;group_id&quot;:3105,&quot;summary&quot;:&quot;&lt;p&gt;V\u1edbi s\u1ef1 suy t\u00e0n c\u1ee7a l\u1ee5c th\u1ea7n t\u1ed9c v\u00e0 s\u1ef1 tr\u1ed7i d\u1eady c\u1ee7a lo\u00e0i ng\u01b0\u1eddi, kh\u1eafp \u0111\u1ea1i l\u1ee5c li\u00ean ti\u1ebfp x\u1ea3y ra chi\u1ebfn tranh v\u00e0 \u0111\u1ed5 m\u00e1u. Trong th\u1eddi k\u1ef3 \u0111\u00f3, m\u1ed9t k\u1ef5 s\u0129 v\u00f4 danh \u0111\u00e3 tr\u1edf n\u00ean n\u1ed5i ti\u1ebfng. Sau h\u01a1n hai m\u01b0\u01a1i n\u0103m chinh chi\u1ebfn, k\u1ef5 s\u0129 \u0111\u00e3 k\u1ebft th\u00fac lo\u1ea1n th\u1ebf.&lt;\/p&gt;\n&lt;p&gt;Anh \u0111\u00e3 gi\u1ebft k\u1ebb cai tr\u1ecb \u0111\u1ed9c t\u00e0i v\u00e0 b\u1ea3o v\u1ec7 \u0111\u1ebf qu\u1ed1c non tr\u1ebb nh\u01b0ng cu\u1ed1i c\u00f9ng l\u1ea1i b\u1ecb t\u01b0\u1edbc \u0111o\u1ea1t quy\u1ec1n l\u1ef1c. Anh \u0111\u00e3 gi\u1ea3i c\u1ee9u C\u00f4ng ch\u00faa Elf v\u00e0 b\u1ea3o v\u1ec7 V\u00f9ng \u0111\u1ea5t Elf kh\u1ecfi chi\u1ebfn tranh nh\u01b0ng l\u1ea1i b\u1ecb xa l\u00e1nh.&lt;\/p&gt;\n&lt;p&gt;Anh gi\u00fap N\u1eef ho\u00e0ng h\u1ed3 t\u1ed9c lo\u1ea1i b\u1ecf quy\u1ec1n th\u1ea7n v\u00e0 l\u00ean ng\u00f4i nh\u01b0ng l\u1ea1i b\u1ecb ph\u1ea3n b\u1ed9i, gi\u00fap Yingran Fox tho\u00e1t tho\u00e1t kh\u1ecfi th\u00e2n ph\u1eadn th\u1ea5p k\u00e9m v\u00e0 l\u00ean \u0111\u1ebfn ch\u1ee9c v\u1ee5 t\u1ed5ng qu\u1ea3n nh\u01b0ng n\u00e0ng ch\u1ec9 coi anh l\u00e0 m\u1ed9t vi\u00ean \u0111\u00e1 l\u00f3t \u0111\u01b0\u1eddng s\u1eb5n s\u00e0ng v\u1ee9t b\u1ecf khi kh\u00f4ng c\u00f2n gi\u00e1 tr\u1ecb l\u1ee3i d\u1ee5ng.&lt;\/p&gt;\n&lt;p&gt;Anh \u0111\u00e3 gi\u00fap Th\u00e1nh qu\u1ed1c lo\u1ea1i b\u1ecf tai h\u1ecda t\u1eeb t\u00e0 gi\u00e1o nh\u01b0ng l\u1ea1i ph\u1ea3i g\u00e1nh ch\u1ecbu t\u1ed9i danh v\u00f4 l\u00fd. Nh\u00ecn th\u1ea5y \u0111\u1ea1i l\u1ee5c n\u00e0y kh\u00f4ng c\u00f2n c\u1ea7n \u0111\u1ebfn m\u00ecnh n\u1eefa,k\u1ef5 s\u0129 l\u1eb7ng l\u1ebd r\u1eddi \u0111i. Anh kh\u00f4ng c\u1ea7n s\u1ef1 c\u1ea3m k\u00edch c\u1ee7a b\u1ea5t c\u1ee9 ai. Anh ch\u1ec9 mu\u1ed1n \u0111em l\u1ea1i h\u00f2a b\u00ecnh tr\u00ean th\u1ebf gi\u1edbi , m\u1ee5c ti\u00eau c\u1ee7a anh \u0111\u00e3 \u0111\u1ea1t \u0111\u01b0\u1ee3c.&lt;\/p&gt;\n&lt;p&gt;K\u1ef5 s\u0129 \u0111\u00e3 kh\u00f4ng c\u00f2n tr\u1ebb n\u1eefa, anh r\u00fat thanh ki\u1ebfm c\u1ee7a m\u00ecnh, khi\u00eau chi\u1ebfn \u0111\u1ed1i th\u1ee7 kh\u00f4ng th\u1ec3 chi\u1ebfn th\u1eafng \u0111\u1ec3 l\u00e0m d\u1ea5u ch\u1ea5m h\u1ebft cho cu\u1ed9c \u0111\u1eddi m\u00ecnh. Tuy nhi\u00ean, anh kh\u00f4ng th\u1ec3 ch\u1ebft, huy\u1ebft th\u1ed1ng y\u00eau h\u1ed3 trong c\u01a1 th\u1ec3 \u0111\u00e3 c\u1ee9u m\u1ea1ng anh. Tuy nhi\u00ean gi\u1edbi t\u00ednh l\u1ea1i b\u1ecb thay \u0111\u1ed5i, anh(c\u00f4) quy\u1ebft \u0111\u1ecbnh t\u1eeb b\u1ecf qu\u00e1 kh\u1ee9 k\u1ef5 s\u0129 v\u00e0 s\u1ed1ng nh\u01b0 m\u1ed9t ng\u01b0\u1eddi b\u00ecnh th\u01b0\u1eddng.&lt;\/p&gt;\n&lt;p&gt;Tuy nhi\u00ean,k\u1ef5 s\u0129 kh\u00f4ng bi\u1ebft r\u1eb1ng c\u00e1c n\u1eef ho\u00e0ng v\u00e0 c\u00f4ng ch\u00faa c\u00f3 nhi\u1ec1u t\u00ecnh c\u1ea3m kh\u00e1c nhau d\u00e0nh cho m\u00ecnh, sau khi nghe tin \u0111\u00e3 \u00e2n h\u1eadn kh\u00f4ng th\u00f4i...&lt;\/p&gt;&quot;,&quot;extra&quot;:&quot;&lt;p&gt;B\u1ed9 n\u00e0y kh\u00e1 hay cho ai th\u00edch th\u1ec3 lo\u1ea1i gender bender nh\u01b0 b\u1ed9 Huy\u1ebft c\u01a1 v\u00e0 K\u1ef5 s\u0129 ( B\u1ed9 n\u00e0y c\u00f9ng t\u00e1c gi\u1ea3 v\u1edbi b\u1ed9 Huy\u1ebft c\u01a1 )\u00a0&lt;br&gt;Truy\u1ec7n \u0111\u1ea7u ti\u00ean m\u00ecnh d\u1ecbch c\u00f3 g\u00ec sai s\u00f3t mong mn th\u00f4ng c\u1ea3m :0&lt;br&gt;T\u00ean nh\u00e2n v\u1eadt hay g\u00ec ch\u01b0a \u0111\u01b0\u1ee3c h\u1ee3p l\u00fd mn g\u00f3p \u00fd m\u00ecnh s\u1ebd c\u1ed1 g\u1eafng fix :3&lt;br&gt;Tui s\u1ebd c\u1ed1 g\u1eafng kh\u00f4ng drop :0&lt;\/p&gt;\n&lt;p&gt;&lt;br&gt;Ae c\u00f3 th\u1ec3 \u1ee7ng h\u1ed9 m\u00ecnh b\u1eb1ng c\u00e1ch \u0111\u0103ng k\u00ed k\u00eanh youtube c\u1ee7a m\u00ecnh&lt;\/p&gt;\n&lt;p&gt;Name: phuthanh2020&lt;\/p&gt;\n&lt;p&gt;\u00a0&lt;\/p&gt;\n&lt;p&gt;Nh\u00f3m Discord: &lt;a href=\&quot;https:\/\/discord.gg\/fctg4HAfZK\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;https:\/\/discord.gg\/fctg4HAfZK&lt;\/a&gt;&lt;\/p&gt;\n&lt;p&gt;\u00a0&lt;\/p&gt;\n&lt;p&gt;LINK Raw: &lt;a href=\&quot;https:\/\/m.sfacg.com\/b\/677177\/\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;https:\/\/m.sfacg.com\/b\/677177\/&lt;\/a&gt;&lt;\/p&gt;\n&lt;p&gt;\u00a0&lt;\/p&gt;\n&lt;p&gt;G\u00f3c \u0103n xin c\u1ee7a th\u1eb1ng trans :v&lt;\/p&gt;\n&lt;p&gt;MOMO: 0989265269&lt;\/p&gt;\n&lt;p&gt;&lt;img src=\&quot;https:\/\/cdn.discordapp.com\/attachments\/996269919408771093\/1273437118978592838\/IMG_20240814_180319.jpg?ex=66be9c3c&amp;amp;is=66bd4abc&amp;amp;hm=982c0aeba154572bd31fd79e70007ae07da6a55d42f547b5688ebdc5427a8311&amp;amp;\&quot; alt=\&quot;\&quot;&gt;&lt;img src=\&quot;https:\/\/media.discordapp.net\/attachments\/1274636064220516443\/1276125512414134292\/IMG_20240814_180319.jpg?ex=66c863ff&amp;amp;is=66c7127f&amp;amp;hm=5bd956b9d6a8dcebd7079cd1209578aa8a1dfaa54dd0cc4a78fcc21820df33c2&amp;amp;=&amp;amp;format=webp&amp;amp;width=526&amp;amp;height=584\&quot; alt=\&quot;\&quot; width=\&quot;526\&quot; height=\&quot;584\&quot;&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;img src=\&quot;https:\/\/photos.google.com\/share\/AF1QipP6tcJ5w1p2FUKG5YJ-meTnIPuAbVy6wJGvqlikXZkRlYBhdod21xFTlXuohDqegQ\/photo\/AF1QipMP9E5PgYfake2usf8G2Am4R9JIvOzFIIwpIiR5?key=VHV2MmtGVndRVkc5dDE3ZEdDTDRrelk3emFOQnFR\&quot; alt=\&quot;\&quot;&gt;&lt;\/p&gt;&quot;,&quot;status&quot;:1,&quot;author&quot;:&quot;H\u00e1n \u0110\u01b0\u1eddng Quy Lai - \u6f22\u5510\u6b78\u4f86&quot;,&quot;illustrator&quot;:&quot;&quot;,&quot;altname&quot;:&quot;\u5979\u4eec\u8ba4\u6e05\u611f\u60c5\uff0c\u9a91\u58eb\u5374\u5df2\u8f6c\u751f\u5e7c\u72d0 ; H\u1ecd \u0111\u00e3 th\u1ea5u hi\u1ec3u t\u00ecnh c\u1ea3m c\u1ee7a m\u00ecnh, nh\u01b0ng hi\u1ec7p s\u0129 \u0111\u00e3 t\u00e1i sinh th\u00e0nh h\u1ed3 ly nh\u1ecf ; H\u1ecd nh\u1eadn ra t\u00ecnh c\u1ea3m c\u1ee7a m\u00ecnh, nh\u01b0ng hi\u1ec7p s\u0129 \u0111\u00e3 t\u00e1i sinh th\u00e0nh m\u1ed9t con c\u00e1o tr\u1ebb ; H\u00e1n \u0111\u01b0\u1eddng quy lai ; C\u00f9ng t\u00e1c gi\u1ea3 Huy\u1ebft c\u01a1 v\u00e0 k\u1ef5 s\u0129&quot;,&quot;type&quot;:1,&quot;view_count&quot;:23120,&quot;last_month_view_count&quot;:0,&quot;last_month_view_count_at&quot;:null,&quot;collection&quot;:183,&quot;cover&quot;:&quot;https:\/\/i2.docln.net\/ln\/series\/covers\/s18809-b4b015eb-ea5e-4f91-a657-f77a7a9796d8.jpg&quot;,&quot;locked&quot;:1,&quot;is_mature&quot;:0,&quot;latestchapter_id&quot;:141470,&quot;comment_experiment&quot;:1,&quot;show_to_role&quot;:null,&quot;commentable&quot;:1,&quot;word_count&quot;:20133,&quot;comment_count&quot;:142,&quot;rating_count&quot;:6,&quot;rating_sum&quot;:30,&quot;pin_comment_id&quot;:2549416,&quot;comment_page_id&quot;:0,&quot;created_at&quot;:&quot;2024-08-10T12:27:52.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-08-22T14:04:01.000000Z&quot;,&quot;deleted_at&quot;:null,&quot;delete_reason&quot;:null,&quot;redirect_series_id&quot;:0,&quot;notification_ignore_users&quot;:[154435,136402],&quot;readable_status&quot;:&quot;\u0110ang ti\u1ebfn h\u00e0nh&quot;,&quot;average_rating&quot;:5}</a>
                                    </div>-->
                                                        </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2866-ai-co-the-giai-thich-ki-cho-minh-quy-dinh-xoa-truyen-khi-khong-dang-dung-han-duoc-khong-a.html">  Ai có thể giải thích kĩ cho mình quy định xóa truyện khi không đăng đúng hạn được không ạ?</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">5</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">442</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="13-08-2024 19:22:11" datetime="2024-08-13T19:22:11+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar  creator  none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u196592-41e37e0a-c17b-4bc5-96be-23dc79da9a4b.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/196592.html">DDH</a>
                                            <time class="topic-time block md:hidden timeago" title="13-08-2024 19:22:11" datetime="2024-08-13T19:22:11+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/619-bao-cao-binh-luan.html">  Báo cáo bình luận</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                                <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">1831</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">324.131</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="09-08-2024 00:06:45" datetime="2024-08-09T00:06:45+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="img/noava.png">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/172498.html">IuBEEF...</a>
                                            <time class="topic-time block md:hidden timeago" title="09-08-2024 00:06:45" datetime="2024-08-09T00:06:45+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2466-black-hero-va-oi-khong-khum-num-tour-du-lich-cua-da.html"> <i class="fas fa-paperclip"></i> Black Hero (bản cũ) và “Ôi không, khúm núm!” [Tour du lịch của Đá]</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i></span>
                                                <a href="thao-luand20e.html?chuyen-muc=4">Đánh giá</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #28e1e8"></i></span>
                                        <a href="thao-luand20e.html?chuyen-muc=4">Đánh giá</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">58</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">12.088</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="08-08-2024 23:25:00" datetime="2024-08-08T23:25:00+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u21143-c67dfae1-0bdb-45f3-b4ed-22efca58f33e.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/21143.html">Dahlias</a>
                                            <time class="topic-time block md:hidden timeago" title="08-08-2024 23:25:00" datetime="2024-08-08T23:25:00+07:00"></time>
                                        </div>
                                    </td>
                                                                                    <!--<div class="board-topic-series none col-12">
                                        <a href="/sang-tac/9233-hanh-trinh-moi-tai-the-gioi-moi-anh-sang-hay-bong-toi-khong-lan-nay-hay-la-ca-hai" class="b-t-s_item">{&quot;id&quot;:9233,&quot;title&quot;:&quot;H\u1eafc anh h\u00f9ng - Huy\u1ec1n tho\u1ea1i v\u00f4 danh&quot;,&quot;slug&quot;:&quot;9233-hanh-trinh-moi-tai-the-gioi-moi-anh-sang-hay-bong-toi-khong-lan-nay-hay-la-ca-hai&quot;,&quot;user_id&quot;:63228,&quot;member_ids&quot;:[],&quot;group_id&quot;:60,&quot;summary&quot;:&quot;&lt;p&gt;Ch\u1ec9 c\u00f3 s\u1ed1 \u00edt ng\u01b0\u1eddi bi\u1ebft \u0111\u01b0\u1ee3c t\u00ean th\u1eadt c\u1ee7a \&quot;ng\u01b0\u1eddi \u1ea5y\&quot;. C\u00e0ng \u00edt ng\u01b0\u1eddi bi\u1ebft \&quot;ng\u01b0\u1eddi \u1ea5y\&quot; \u0111\u00e3 tr\u1ea3i qua chuy\u1ec7n g\u00ec, \u0111\u00e3 l\u00e0m \u0111\u01b0\u1ee3c nh\u1eefng g\u00ec.&lt;\/p&gt;\n&lt;p&gt;Nh\u01b0ng...&lt;\/p&gt;\n&lt;p&gt;Anh h\u00f9ng: \&quot;C\u1eadu ta l\u00e0 ng\u01b0\u1eddi b\u1ea1n t\u1ed1t nh\u1ea5t, c\u0169ng l\u00e0 x\u1ea5u nh\u1ea5t. T\u00f4i th\u1eadt s\u1ef1 r\u1ea5t may m\u1eafn v\u00ec c\u00f3 c\u1eadu ta l\u00e0m b\u1ea1n.\&quot;&lt;\/p&gt;\n&lt;p&gt;Vua th\u00fa: \&quot;T\u00ean \u0111\u00f3 l\u00e0 k\u1ebb m\u1ea1nh nh\u1ea5t ta t\u1eebng g\u1eb7p.\&quot;&lt;\/p&gt;\n&lt;p&gt;Ma v\u01b0\u01a1ng: \&quot;Qu\u1ea3 kh\u00f4ng h\u1ed5 l\u00e0 ng\u01b0\u01a1i.\&quot;&lt;\/p&gt;\n&lt;p&gt;\&quot;H\u1eafn m\u1edbi l\u00e0 k\u1ebb c\u1ee9u th\u1ebf th\u1ef1c s\u1ef1.\&quot;&lt;\/p&gt;\n&lt;p&gt;M\u1ecdi k\u1ebb th\u00f9 \u0111\u1ec1u khi\u1ebfp s\u1ee3 v\u00e0 d\u00e8 ch\u1eebng m\u1ed7i khi nh\u1eafc \u0111\u1ebfn \&quot;ng\u01b0\u1eddi \u1ea5y\&quot;. M\u1ed9t con m\u00e3nh long h\u1ed9i t\u1ee5 \u0111\u1ee7 c\u00e1c lo\u1ea1i ph\u1ea9m ch\u1ea5t c\u1ee7a m\u1ed9t k\u1ebb thi\u1ec7n chi\u1ebfn, l\u1ea1nh l\u00f9ng, m\u00e3nh li\u1ec7t, h\u1ee7y di\u1ec7t,... \u0110\u00e1nh b\u1ea1i k\u1ebb th\u00f9 m\u1ed9t c\u00e1ch ch\u1edbp nho\u00e1ng v\u00e0 k\u1ebft li\u1ec5u m\u00e0 kh\u00f4ng \u0111\u1ec3 \u0111\u1ed1i ph\u01b0\u01a1ng \u0111au \u0111\u1edbn, nh\u01b0 \&quot;ng\u01b0\u1eddi \u1ea5y\&quot; g\u1ecdi l\u00e0 nh\u00e2n t\u1eeb cu\u1ed1i c\u00f9ng.&lt;\/p&gt;\n&lt;p&gt;\&quot;Ng\u01b0\u1eddi \u1ea5y\&quot; \u0111\u1ebfn nh\u01b0 m\u1ed9t v\u1ecb ch\u00faa t\u1ec3, r\u1eddi \u0111i \u0111\u1ec3 l\u1ea1i m\u1ed9t huy\u1ec1n tho\u1ea1i m\u00e0 ch\u1ec9 c\u00f3 l\u00e1c \u0111\u00e1c nh\u1eefng k\u1ebb m\u1ea1nh m\u1ebd \u0111\u1ee9ng \u0111\u1ea7u m\u1edbi c\u00f3 t\u01b0 c\u00e1ch bi\u1ebft \u0111\u01b0\u1ee3c.&lt;\/p&gt;\n&lt;p&gt;***&lt;\/p&gt;\n&lt;p&gt;\&quot;Ha, n\u1ebfu nh\u01b0 ch\u1ec9 c\u1ea7n m\u1ed7i m\u00ecnh ta hi sinh l\u00e0 c\u00f3 th\u1ec3 \u0111\u1ed5i l\u1ea5y h\u00f2a b\u00ecnh mu\u00f4n thu\u1edf th\u00ec vi\u1ec7c g\u00ec ta l\u1ea1i t\u1eeb ch\u1ed1i?&lt;\/p&gt;\n&lt;p&gt;Ch\u1ec9 c\u1ea7n th\u1ebf gian an b\u00ecnh, ch\u1ec9 c\u1ea7n nh\u1eefng th\u1ee9 ta mu\u1ed1n b\u1ea3o v\u1ec7 v\u1eb9n nguy\u00ean th\u00ec ai l\u00e0 anh h\u00f9ng, ai l\u00e0 ma v\u01b0\u01a1ng, quan tr\u1ecdng sao?\&quot;\u00a0&lt;\/p&gt;&quot;,&quot;extra&quot;:&quot;&lt;p&gt;Truy\u1ec7n ra v\u1edbi ti\u1ebfn \u0111\u1ed9 c\u1ef1c k\u1ef3 kh\u00f4ng \u1ed5n \u0111\u1ecbnh. N\u1ebfu t\u00e1c r\u1ea3nh th\u00ec v\u00e0i tu\u1ea7n 1 ch\u01b0\u01a1ng, c\u00f2n b\u1eadn th\u00ec... T\u00f9y, ch\u1edd \u0111\u1ebfn khi r\u1ea3nh \u0111\u00e3.&lt;\/p&gt;\n&lt;p&gt;B\u1ea1n n\u00e0o h\u1ea3o t\u00e2m th\u00ec c\u00f3 th\u1ec3 \u1ee7ng h\u1ed9 m\u00ecnh qua tk BIDV 56010001459403 nha.&lt;\/p&gt;\n&lt;p&gt;Comment \u0111i m\u00e0. T\u01b0\u01a1ng t\u00e1c v\u1edbi mn vui l\u00e9m \u0111\u00f3! (\u2022\u032a o \u2022\u032a)&lt;\/p&gt;\n&lt;p&gt;thank mn nhi\u1ec1u v\u00ec \u0111\u00e3 \u0111\u1ecdc truy\u1ec7n!!&lt;\/p&gt;&quot;,&quot;status&quot;:1,&quot;author&quot;:&quot;Ph\u1ea1m Quang Trung&quot;,&quot;illustrator&quot;:&quot;Ph\u1ea1m Quang Trung,  Zen Ava, AI&quot;,&quot;altname&quot;:&quot;Black hero - anonymous legend&quot;,&quot;type&quot;:3,&quot;view_count&quot;:182630,&quot;last_month_view_count&quot;:177621,&quot;last_month_view_count_at&quot;:&quot;2024-08-01 00:00:03&quot;,&quot;collection&quot;:403,&quot;cover&quot;:&quot;https:\/\/i2.docln.net\/ln\/series\/covers\/s9233-aa1052a9-d163-4afb-a43c-8950b3fd1d92.jpg&quot;,&quot;locked&quot;:1,&quot;is_mature&quot;:0,&quot;latestchapter_id&quot;:132842,&quot;comment_experiment&quot;:1,&quot;show_to_role&quot;:null,&quot;commentable&quot;:1,&quot;word_count&quot;:357540,&quot;comment_count&quot;:429,&quot;rating_count&quot;:1,&quot;rating_sum&quot;:5,&quot;pin_comment_id&quot;:0,&quot;comment_page_id&quot;:0,&quot;created_at&quot;:&quot;2021-06-04T13:50:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-06-02T16:09:14.000000Z&quot;,&quot;deleted_at&quot;:null,&quot;delete_reason&quot;:null,&quot;redirect_series_id&quot;:0,&quot;notification_ignore_users&quot;:[59690,158441,115363,154514,69052],&quot;readable_status&quot;:&quot;\u0110ang ti\u1ebfn h\u00e0nh&quot;,&quot;average_rating&quot;:5}</a>
                                    </div>-->
                                                        </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2857-day-la-wn-dung-khong.html">  Đây là wn đúng không?</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                                <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #252eef"></i></span>
                                        <a href="thao-luane18d.html?chuyen-muc=3">Hỏi đáp</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">4</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">598</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="05-08-2024 19:26:10" datetime="2024-08-05T19:26:10+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua148208-5c2f4591-97c9-49d2-9a43-7af18d5fd192.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/148208.html">nhatphong</a>
                                            <time class="topic-time block md:hidden timeago" title="05-08-2024 19:26:10" datetime="2024-08-05T19:26:10+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2850-danh-gia-phan-tich-so-sanh-tac-pham-nihonkoku-shoukan.html"> <i class="fas fa-paperclip"></i> Đánh giá, phân tích, so sánh, tác phẩm &quot;Nihonkoku Shoukan&quot;</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">54</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">2.242</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="31-07-2024 22:31:38" datetime="2024-07-31T22:31:38+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="img/noava.png">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/172498.html">IuBEEF...</a>
                                            <time class="topic-time block md:hidden timeago" title="31-07-2024 22:31:38" datetime="2024-07-31T22:31:38+07:00"></time>
                                        </div>
                                    </td>
                                                                                    <!--<div class="board-topic-series none col-12">
                                        <a href="/truyen/5064-nihonkoku-shoukanwn" class="b-t-s_item">{&quot;id&quot;:5064,&quot;title&quot;:&quot;Nihonkoku Shoukan(WN)&quot;,&quot;slug&quot;:&quot;5064-nihonkoku-shoukanwn&quot;,&quot;user_id&quot;:696,&quot;member_ids&quot;:[],&quot;group_id&quot;:842,&quot;summary&quot;:&quot;&lt;p&gt;V\u00e0o m\u1ed9t ng\u00e0y Nh\u1eadt B\u1ea3n b\u1ecb d\u1ecbch chuy\u1ec3n t\u1edbi th\u1ebf gi\u1edbi kh\u00e1c.&lt;\/p&gt;\n&lt;p&gt;B\u1edfi kh\u1ea3 n\u0103ng t\u1ef1 s\u1ea3n xu\u1ea5t l\u01b0\u01a1ng th\u1ef1c k\u00e9m v\u00e0 l\u1ec7 thu\u1ed9c v\u00e0o ngu\u1ed3n nh\u1eadp kh\u1ea9u t\u1eeb c\u00e1c n\u01b0\u1edbc kh\u00e1c, Nh\u1eadt B\u1ea3n \u0111\u1ed1i m\u1eb7t v\u1edbi nguy c\u01a1 thi\u1ebfu h\u1ee5t l\u01b0\u01a1ng th\u1ef1c. \u0110\u1ec3 ng\u0103n ch\u1eb7n h\u1eadu qu\u1ea3, Nh\u1eadt B\u1ea3n \u0111\u00e3 ban b\u1ed1 t\u00ecnh tr\u1ea1ng kh\u1ea9n c\u1ea5p. L\u1ef1c l\u01b0\u1ee3ng Ph\u00f2ng v\u1ec7 Nh\u1eadt B\u1ea3n th\u0103m d\u00f2 c\u00e1c v\u00f9ng l\u00e2n c\u1eadn v\u00e0 ph\u00e1t hi\u1ec7n \u0111\u1ea5t li\u1ec1n kho\u1ea3ng 1000km v\u1ec1 ph\u00eda T\u00e2y Nam - L\u1ee5c \u0111\u1ecba Rodenius.&lt;\/p&gt;\n&lt;p&gt;Nh\u1eadt B\u1ea3n gi\u1ea3i quy\u1ebft \u0111\u01b0\u1ee3c v\u1ea5n \u0111\u1ec1 thi\u1ebfu h\u1ee5t l\u01b0\u01a1ng th\u1ef1c sau khi ti\u1ebfn h\u00e0nh \u0111\u00e0m ph\u00e1n v\u1edbi L\u00e3nh \u0111\u1ecba Kua Toine v\u00e0 V\u01b0\u01a1ng qu\u1ed1c Quira. Tuy nhi\u00ean c\u00f9ng l\u00fac \u0111\u00f3, m\u1ed9t qu\u1ed1c gia kh\u00e1c tr\u00ean c\u00f9ng l\u1ee5c \u0111\u1ecba l\u00e0 V\u01b0\u01a1ng qu\u1ed1c Rowlia, \u0111\u00e3 tuy\u00ean chi\u1ebfn v\u1edbi Kua Toine v\u00e0 Quira.&lt;\/p&gt;\n&lt;p&gt;Tr\u01b0\u1edbc hi\u1ec3m h\u1ecda m\u1edbi, Nh\u1eadt B\u1ea3n s\u1ebd ph\u1ea3n \u1ee9ng ra sao? M\u1ed9t c\u00e2u chuy\u1ec7n s\u1ed1ng c\u00f2n qui m\u00f4 m\u1ed9t qu\u1ed1c gia!&lt;\/p&gt;\n&lt;p&gt;( T\u00f3m t\u1eaft c\u1ee7a Tran: Truck-kun t\u1eeb tr\u00ean tr\u1eddi lao xu\u1ed1ng )&lt;\/p&gt;&quot;,&quot;extra&quot;:&quot;&lt;p&gt;Project \u0111\u1ea7u, n\u1ebfu c\u00f3 sai s\u00f3t g\u00ec, comment gi\u00fap m\u00ecnh.&lt;\/p&gt;\n&lt;p&gt;T\u1ed1c \u0111\u1ed9 d\u1ecbch hi\u1ec7n t\u1ea1i: 1 chap\/1 th\u00e1ng&lt;\/p&gt;\n&lt;p&gt;L\u01b0u \u00fd: \u0110\u00e2y l\u00e0 b\u1ea3n d\u1ecbch theo Webnovel, kh\u00f4ng ph\u1ea3i theo Lightnovel&lt;\/p&gt;\n&lt;p&gt;Ngu\u1ed3n:&lt;\/p&gt;\n&lt;p&gt;Eng:&lt;\/p&gt;\n&lt;p&gt;&lt;a href=\&quot;https:\/\/mobofdeer.wordpress.com\/summoning-japan\/\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;https:\/\/mobofdeer.wordpress.com\/summoning-japan\/&lt;\/a&gt;&lt;\/p&gt;\n&lt;p&gt;&lt;a href=\&quot;https:\/\/hanabarahana.wordpress.com\/home\/\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;https:\/\/hanabarahana.wordpress.com\/home\/&lt;\/a&gt;&lt;\/p&gt;\n&lt;p&gt;Raw:&lt;\/p&gt;\n&lt;p&gt;&lt;a href=\&quot;http:\/\/ncode.syosetu.com\/n6408bv\&quot; rel=\&quot;nofollow noreferrer noopener\&quot; target=\&quot;_blank\&quot;&gt;http:\/\/ncode.syosetu.com\/n6408bv&lt;\/a&gt;&lt;\/p&gt;&quot;,&quot;status&quot;:2,&quot;author&quot;:&quot;Minorou&quot;,&quot;illustrator&quot;:&quot;toi8&quot;,&quot;altname&quot;:&quot;Nipponkoku Shoukan;Summoning Japan;Nh\u1eadt B\u1ea3n xuy\u00ean kh\u00f4ng&quot;,&quot;type&quot;:1,&quot;view_count&quot;:755716,&quot;last_month_view_count&quot;:747874,&quot;last_month_view_count_at&quot;:&quot;2024-08-01 00:00:03&quot;,&quot;collection&quot;:813,&quot;cover&quot;:&quot;https:\/\/c1.hako.re\/lightnovel\/covers\/s5064-4a244767-7b91-4f2e-88ec-9d4c31f65628.jpg&quot;,&quot;locked&quot;:1,&quot;is_mature&quot;:0,&quot;latestchapter_id&quot;:102578,&quot;comment_experiment&quot;:1,&quot;show_to_role&quot;:null,&quot;commentable&quot;:1,&quot;word_count&quot;:239745,&quot;comment_count&quot;:1773,&quot;rating_count&quot;:2,&quot;rating_sum&quot;:6,&quot;pin_comment_id&quot;:0,&quot;comment_page_id&quot;:0,&quot;created_at&quot;:&quot;2019-06-26T08:45:34.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-09-13T15:11:04.000000Z&quot;,&quot;deleted_at&quot;:null,&quot;delete_reason&quot;:null,&quot;redirect_series_id&quot;:0,&quot;notification_ignore_users&quot;:[193597],&quot;readable_status&quot;:&quot;T\u1ea1m ng\u01b0ng&quot;,&quot;average_rating&quot;:3}</a>
                                    </div>-->
                                                        </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2794-bao-tri-doi-server.html"><i class="fas fa-lock"></i>  Hoãn bảo trì server</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                                <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #eb1d57"></i></span>
                                        <a href="thao-luan7a2e.html?chuyen-muc=1">Thông báo</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">20</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">9.659</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="28-07-2024 16:53:49" datetime="2024-07-28T16:53:49+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u103314-e630f458-37d8-47f5-ad08-4efb2059fa59.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/103314.html">Mming</a>
                                            <time class="topic-time block md:hidden timeago" title="28-07-2024 16:53:49" datetime="2024-07-28T16:53:49+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2851-choi-noi-tu-hok-ae.html"><i class="fas fa-lock"></i>  chơi nối từ hok ae</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">140</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">1.176</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="27-07-2024 22:15:09" datetime="2024-07-27T22:15:09+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/1.html">Embers</a>
                                            <time class="topic-time block md:hidden timeago" title="27-07-2024 22:15:09" datetime="2024-07-27T22:15:09+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2263-hoi-truyen-tu-az-goc-8-nham-cho-dich-gia-20.html"><i class="fas fa-lock"></i>  Hỏi Truyện từ A&gt;Z. Góc 8 nhảm cho dịch giả 2.0</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">26417</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">2.124.009</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="27-07-2024 09:51:32" datetime="2024-07-27T09:51:32+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i.docln.net/lightnovel/users/ua39-dcda761a-ec2c-40a4-bf98-f7faee936682.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/39.html">medassin</a>
                                            <time class="topic-time block md:hidden timeago" title="27-07-2024 09:51:32" datetime="2024-07-27T09:51:32+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                                                    <tr class="d-flex">
                                    <td class="col-8 col-md-4 col-lg-5 col-xl-5">
                                        <a class="topic-title" href="thao-luan/2848-kinh-nghiem-dich-thoat-y.html">  Kinh nghiệm dịch của bản thân</a>
                                        <div class="b-t-m_tag clear">
                                            <div class="b-t-m_t-item b-t-m_category none-m">
                                                <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                                <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                            </div>
                                        </div>    
                                    </td>
                                    <td class="col-md-3 col-lg-2 d-none d-md-block">
                                        <span class="category-circle"><i class="fas fa-circle" aria-hidden="true" style="color: #1ee865"></i></span>
                                        <a href="thao-luan6b2d.html?chuyen-muc=5">Thảo luận</a>
                                    </td>
                                    <td class="col-1 d-none d-lg-block">30</td>
                                    <td class="col-md-2 col-lg-1 d-none d-lg-block">1.436</td>
            
                                                    
                                    <td class="col-md-2 col-lg-1 d-none d-md-block"">
                                                                    <time class="topic-time timeago" title="27-07-2024 08:42:19" datetime="2024-07-27T08:42:19+07:00"></time>
                                                                </td>
            
                                                            <td class="col-4 col-md-3 col-lg-2 text-right">
                                        <div class="topic-avatar none block-m">
                                            <img src="../i2.docln.net/ln/users/avatars/u142791-c5ea9c36-b7e4-4103-b69f-6dfa31fd9dee.jpg">
                                        </div>
                                        <div class="topic-username block-m">
                                            <a href="thanh-vien/142791.html">m4dness</a>
                                            <time class="topic-time block md:hidden timeago" title="27-07-2024 08:42:19" datetime="2024-07-27T08:42:19+07:00"></time>
                                        </div>
                                    </td>
                                                                                </tr>
                                            </tbody>
                        </table>    
                        <div class="pagination-footer">
                    <div class="pagination_wrap">
                        <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                        <a href="thao-luan2679.html?page=1" class="paging_item paging_prevnext prev  disabled ">Đầu</a>
                        
                                    <a href="thao-luan2679.html?page=1" class="paging_item page_num  current ">1</a>
                                    <a href="thao-luan4658.html?page=2" class="paging_item page_num ">2</a>
                                    <a href="thao-luan9ba9.html?page=3" class="paging_item page_num ">3</a>
                                    <a href="thao-luanfdb0.html?page=4" class="paging_item page_num ">4</a>
                                    <a href="thao-luanaf4d.html?page=5" class="paging_item page_num ">5</a>
                        
                        <!--<a href=" https://docln.net/thao-luan?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                        <a href="thao-luancd6d.html?page=68" class="paging_item paging_prevnext next ">Cuối</a>
                    </div>
                </div>
                        </section>
            
                </div>
            </main>
@endsection