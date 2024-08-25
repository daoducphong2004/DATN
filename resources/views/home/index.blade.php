@extends('partials.sidebar')
@section('noidung')

<section id="header">
    <div class="container">
        <div id="sidenav-icon" class="none-xl">
            <div class="sidenav-icon-content">
                <span class="sidenav-icon_white"></span>
                <span class="sidenav-icon_white"></span>
                <span class="sidenav-icon_white"></span>
            </div>
            <ul class="navbar-menu none hidden-block at-mobile unstyle">
                <div class="navbar-search block none-m in-navbar-menu">
                    <form class="" action="/tim-kiem" method="get">
                        <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value="">
                        <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <ul id="navbar">
                    <li><a class="active" href="{{route('home')}}">Home</a></li>
                    <li><a class="nav-menu_item" href="{{route('composer')}}"><span class="">Sáng tác</span></a></li>
                    <li><a class="nav-menu_item" href="{{route('pandemic')}}"><span class="">Máy dịch</span></a></li>
                    <li><a class=" nav-menu_item" href="{{route('publish')}}"><span class="">Xuất bản</span></a></li>
                    <li><a class="nav-menu_item" href="{{route('discuss')}}"><span class="">Thảo luận</span></a></li>
                    <li><a class=" nav-menu_item" href="{{route('list')}}"><span class="">Danh sách</span></a></li>
                    <a href=" #" id="close"><i class="fas fa-times"></i></a>
                </ul>

                <li class="nav-has-submenu">
                    <a class="nav-menu_item">
                        <span class="">Hướng dẫn</span>
                        <i class="fas fa-chevron-down dropdown-icon" style="float: right; margin-top: 6px"></i>
                    </a>

                    <ul class="nav-submenu list-unstyled none">
                        <li><a href="{{route('create')}}"><span>Đăng truyện</span></a></li>
                        <li><a href="{{route('about')}}"><span>Giới thiệu</span></a></li>
                        <li><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><span>Góp ý - Báo lỗi</span></a></li>
                        <li><a href="/privacy-policy"><span>Privacy Policy</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="navbar-logo-wrapper">
            <a href="/" class="navbar-logo" style="background-image: url('/img/logo-9.png')" title="Trang chủ"></a>
        </div>

        <div id="navbar-user" class="guest">
            <a class="login-link" href="{{route('login')}}">Đăng nhập</a>
            <div id="guest-menu">
                <div class="icon">
                    <span class="white-point"></span>
                    <span class="white-point"></span>
                    <span class="white-point"></span>
                </div>
                <ul class="nav-submenu hidden-block unstyled none">
                    <li>
                        <div class="nightmode-toggle li-inner" onclick="toggleNightMode(this)">
                            <span><i class="fas fa-moon"></i>Nền tối</span>
                            <div class="toggle-icon">
                                <i class="fa fa-toggle-off"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="li-inner" href="/lich-su-doc">
                            <i class="fas fa-history"></i><span>Lịch sử</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-mainblock">
            <div class="navbar-search none block-m">
                <form class="" action="/tim-kiem" method="get">
                    <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value="">
                    <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <ul class="navbar-menu at-navbar none d-xl-block unstyled">
                <li><a class="nav-menu_item" href="{{route('composer')}}"><i class="fas fa-pen-nib menu-icon"></i><span class="">Sáng tác</span></a></li>

                <li><a class="nav-menu_item" href="{{route('pandemic')}}"><i class=" fas fa-book menu-icon"></i><span class="">Máy dịch</span></a></li>

                <li><a class="nav-menu_item" href="{{route('publish')}}"><i class="fas fa-calendar menu-icon"></i><span class="">Xuất bản</span></a></li>

                <li><a class="nav-menu_item" href="{{route('discuss')}}"><i class="fas fa-users menu-icon"></i><span class="">Thảo luận</span></a></li>

                <li><a class="nav-menu_item" href="{{route('list')}}"><i class="fas fa-th-list menu-icon"></i><span class="">Danh sách</span></a></li>

                <li class="nav-has-submenu">
                    <a class="nav-menu_item" href="javascript:void(0);" onclick="toggleSubmenu(this)">
                        <i class="fas fa-question menu-icon"></i><span class="">Hướng dẫn</span>
                        <i class="fas fa-chevron-down dropdown-icon"></i>
                    </a>
                
                    <ul class="nav-submenu hidden-block unstyled none">
                        <li><a href="{{route('create')}}"><span>Đăng truyện</span></a></li>
                        <li><a href="{{route('about')}}"><span>Giới thiệu</span></a></li>
                        <li><a href="/thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi"><span>Góp ý - Báo lỗi</span></a></li>
                        <li><a href="/privacy-policy"><span>Privacy Policy</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!--<section id="nav-search"></section>-->
    </div>
    </div>
    <div class="page-top-group  at-index ">
        <a href="/truyen/13957">
            <div class="index-background d-none d-lg-block" style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_d.png')"></div>
            <div class="index-background d-lg-none" style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_m.png'); background-size: cover"></div>
        </a>
    </div>
</section>
<div class="container" style="margin-bottom: 40px;">
    <div class="row">
        <div class="no-push col-12 push-2-l col-8-l">
            <div id="announcements" class="index-top_notification">

                <div class="annoucement-item">
                    <a href="/thao-luan/2859-thay-doi-ve-nhom-dich" style=" color:  red">Thay đổi về nhóm dịch</a>
                </div>

                <div class="annoucement-item">
                    <a href="/thao-luan/2794-bao-tri-doi-server" style=" color:  red">Hoãn bảo trì server</a>
                </div>

                <div class="annoucement-item">
                    <a href="/thao-luan/2789-bao-cao-truyen-vi-pham">Báo cáo truyện vi phạm</a>
                </div>

                <div class="annoucement-item">
                    <a href="/thao-luan/2766-khong-the-su-dung-facebook-login-nua" style=" color:  red">Không thể sử dụng Facebook đăng nhập nữa</a>
                </div>

                <div class="annoucement-item">
                    <a href="/thao-luan/2336-donate-ho-tro-cong-ln" style=" color:  red">Donate hỗ trợ Cổng LN</a>
                </div>

                <div class="annoucement-item">
                    <a href="/thao-luan/2267-khong-dang-manga" style=" color:  red">Không đăng Manga</a>
                </div>

                <div class="annoucement-item">
                    <a href="/thao-luan/2250-hako-faqs-nhung-cau-hoi-thuong-gap-tren-hako" style=" color:  blue">(HAKO FAQs) NHỮNG CÂU HỎI THƯỜNG GẶP TRÊN HAKO</a>
                </div>

                <div class="annoucement-item">
                    <a href="/thao-luan/1122-thu-nghiem-thong-bao-chuong-moi">Thử nghiệm thông báo chương mới</a>
                </div>

                <div class="annoucement-item">
                    <a href="/thao-luan/20-quy-dinh-chung-doi-voi-cac-du-an-dang-tai-cong-light-novel-bao-gom-truyen-dichconvert-va-oln" style=" color:  red">Quy định chung đối với các dự án đăng tại Cổng Light Novel</a>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9">
            <div class="daily-recent_views">
                <header class="title">
                    <span class="top-tab_title title-active"><i class="fas fa-trophy"></i> Nổi bật</span>
                    <span class="top-tab_title"><a href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=topthang">Top tháng</a></span>
                    <span class="top-tab_title"><a href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=top">Toàn t/gian</a></span>
                </header>
                <main class="row slider d-block">
                    <div class="popular-thumb-item mr-1">
                        <div class="thumb-wrapper">
                            <a href="/truyen/18420-toi-co-mot-cuoc-gap-mat-voi-vo-trong-game-va-mot-co-be-tieu-hoc-xuat-hien-lieu-toi-co-phai-ra-toa-khong" title="Tôi có một cuộc gặp mặt với vợ trong game và một cô bé tiểu học xuất hiện. Liệu tôi có phải ra tòa không...?">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio" style="background-image: url('https://docln.net/img/nocover.jpg')"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr series-title" title="Tôi có một cuộc gặp mặt với vợ trong game và một cô bé tiểu học xuất hiện. Liệu tôi có phải ra tòa không...?"><a href="/truyen/18420-toi-co-mot-cuoc-gap-mat-voi-vo-trong-game-va-mot-co-be-tieu-hoc-xuat-hien-lieu-toi-co-phai-ra-toa-khong" title="Tôi có một cuộc gặp mặt với vợ trong game và một cô bé tiểu học xuất hiện. Liệu tôi có phải ra tòa không...?">Tôi có một cuộc gặp mặt với vợ trong game và một cô bé tiểu học xuất hiện. Liệu tôi có phải ra tòa không...?</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-thumb-item mr-1">
                        <div class="thumb-wrapper">
                            <a href="/truyen/18315-chuyen-sinh-vao-game-romcom-yandere-co-nang-nguy-hiem-bong-nhien-tro-thanh-em-gai-toi" title="Chuyển sinh vào game Romcom Yandere, cô nàng nguy hiểm bỗng nhiên trở thành em gái tôi.">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio" style="background-image: url('https://docln.net/img/nocover.jpg')"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr series-title" title="Chuyển sinh vào game Romcom Yandere, cô nàng nguy hiểm bỗng nhiên trở thành em gái tôi."><a href="/truyen/18315-chuyen-sinh-vao-game-romcom-yandere-co-nang-nguy-hiem-bong-nhien-tro-thanh-em-gai-toi" title="Chuyển sinh vào game Romcom Yandere, cô nàng nguy hiểm bỗng nhiên trở thành em gái tôi.">Chuyển sinh vào game Romcom Yandere, cô nàng nguy hiểm bỗng nhiên trở thành em gái tôi.</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-thumb-item mr-1">
                        <div class="thumb-wrapper">
                            <a href="/truyen/18768-dong-doi-duy-nhat-cua-anh-hung-bi-vut-bo" title="Đồng minh duy nhất của Anh hùng bị vứt bỏ">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio" style="background-image: url('https://docln.net/img/nocover.jpg')"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr series-title" title="Đồng minh duy nhất của Anh hùng bị vứt bỏ"><a href="/truyen/18768-dong-doi-duy-nhat-cua-anh-hung-bi-vut-bo" title="Đồng minh duy nhất của Anh hùng bị vứt bỏ">Đồng minh duy nhất của Anh hùng bị vứt bỏ</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-thumb-item mr-1">
                        <div class="thumb-wrapper">
                            <a href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan" title="Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio" style="background-image: url('https://i2.docln.net/ln/series/covers/s18741-0d1f09f8-6f69-408c-9cf1-cc27c040be2d.jpg')"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr series-title" title="Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần."><a href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan" title="Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.">Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-thumb-item mr-1">
                        <div class="thumb-wrapper">
                            <a href="/truyen/18156-picking-up-unrequited-love" title="Picking Up Unrequited Love">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio" style="background-image: url('https://i2.docln.net/ln/series/covers/s18156-55eb9f22-e8d0-4f98-92e8-fe1b6c94f04e.jpg')"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr series-title" title="Picking Up Unrequited Love"><a href="/truyen/18156-picking-up-unrequited-love" title="Picking Up Unrequited Love">Picking Up Unrequited Love</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-thumb-item mr-1">
                        <div class="thumb-wrapper">
                            <a href="/truyen/16774-maigo-ni-natteita-youjo-wo-tasuketara-otonari-ni-sumu-bishoujo-ryuugakusei-ga-ie-ni-asobi-ni-kuru-you-ni-natta-ken-nitsuite" title="Maigo ni Natteita Youjo wo Tasuketara, Otonari ni Sumu Bishoujo Ryuugakusei ga Ie ni Asobi ni Kuru You ni Natta Ken Nitsuite">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio" style="background-image: url('https://i2.docln.net/ln/series/covers/s16774-2ae3adb5-eddc-46ae-9f86-e314cebeabd9.jpg')"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr series-title" title="Maigo ni Natteita Youjo wo Tasuketara, Otonari ni Sumu Bishoujo Ryuugakusei ga Ie ni Asobi ni Kuru You ni Natta Ken Nitsuite"><a href="/truyen/16774-maigo-ni-natteita-youjo-wo-tasuketara-otonari-ni-sumu-bishoujo-ryuugakusei-ga-ie-ni-asobi-ni-kuru-you-ni-natta-ken-nitsuite" title="Maigo ni Natteita Youjo wo Tasuketara, Otonari ni Sumu Bishoujo Ryuugakusei ga Ie ni Asobi ni Kuru You ni Natta Ken Nitsuite">Maigo ni Natteita Youjo wo Tasuketara, Otonari ni Sumu Bishoujo Ryuugakusei ga Ie ni Asobi ni Kuru You ni Natta Ken Nitsuite</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-thumb-item mr-1">
                        <div class="thumb-wrapper">
                            <a href="/truyen/18670-thuong-dan-a-mong-muon-cuu-lay-nu-phan-dien-bang-moi-gia" title="Thường dân A mong muốn cứu lấy nữ phản diện bằng mọi giá!">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio" style="background-image: url('https://i2.docln.net/ln/series/covers/s18670-c7f1cf9c-d675-4429-8ed7-93082db310b1.jpg')"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr series-title" title="Thường dân A mong muốn cứu lấy nữ phản diện bằng mọi giá!"><a href="/truyen/18670-thuong-dan-a-mong-muon-cuu-lay-nu-phan-dien-bang-moi-gia" title="Thường dân A mong muốn cứu lấy nữ phản diện bằng mọi giá!">Thường dân A mong muốn cứu lấy nữ phản diện bằng mọi giá!</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-thumb-item mr-1">
                        <div class="thumb-wrapper">
                            <a href="/truyen/15461-bang-mot-cach-nao-do-dan-my-nhan-hang-s-lai-de-cap-den-toi" title="Không biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio" style="background-image: url('https://i2.docln.net/ln/series/covers/s15461-6f3027bb-2ab8-4ce6-8419-d3bc5404d715.jpg')"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr series-title" title="Không biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi"><a href="/truyen/15461-bang-mot-cach-nao-do-dan-my-nhan-hang-s-lai-de-cap-den-toi" title="Không biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi">Không biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi</a></div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <section class="last-topics index-section">
                <header class="section-title">
                    <a href="https://docln.net/thao-luan"><span class="sts-bold">Thảo</span><span class="sts-empty">Luận</span></a>
                </header>
                <main>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #1ee865; margin-right: 4px;"></i>
                                <a href="/thao-luan/2266-thao-luan-cho-tac-gia-oln?comment_id=2552418&amp;reply_id=2552927#ln-comment-2552927" title="Thảo luận cho tác giả OLN">
                                    Thảo luận cho tác giả OLN
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="17-08-2024 17:55:30" datetime="2024-08-17T17:55:30+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #1ee865; margin-right: 4px;"></i>
                                <a href="/thao-luan/2849-hoi-truyen-tu-az-goc-chat-nham-cho-con-dan-hako-30?comment_id=2552886&amp;reply_id=2552913#ln-comment-2552913" title="Hỏi Truyện từ A&gt;Z. Góc chat nhảm cho con dân Hako 3.0">
                                    Hỏi Truyện từ A&gt;Z. Góc chat nhảm cho con dân Hako 3.0
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="17-08-2024 17:45:25" datetime="2024-08-17T17:45:25+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #252eef; margin-right: 4px;"></i>
                                <a href="/thao-luan/2858-tim-vai-bo-de-doc?comment_id=2540166&amp;reply_id=2552787#ln-comment-2552787" title="tìm vài bộ để đọc">
                                    tìm vài bộ để đọc
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="17-08-2024 16:23:24" datetime="2024-08-17T16:23:24+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #e01bb4; margin-right: 4px;"></i>
                                <a href="/thao-luan/2860-tuyen-thanh-vien?comment_id=2552772&amp;reply_id=2552786#ln-comment-2552786" title="Tuyển thành viên">
                                    Tuyển thành viên
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="17-08-2024 16:22:58" datetime="2024-08-17T16:22:58+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #eb1d57; margin-right: 4px;"></i>
                                <a href="/thao-luan/2859-thay-doi-ve-nhom-dich?comment_id=2541559&amp;reply_id=2552606#ln-comment-2552606" title="Thay đổi về nhóm dịch">
                                    Thay đổi về nhóm dịch
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="17-08-2024 14:00:25" datetime="2024-08-17T14:00:25+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #252eef; margin-right: 4px;"></i>
                                <a href="/thao-luan/2869-tai-light-novel-cho-may-doc-sach-file-epub?comment_id=2552397&amp;reply_id=2552425#ln-comment-2552425" title="Tải Light Novel cho máy đọc sách (File EPUB)">
                                    Tải Light Novel cho máy đọc sách (File EPUB)
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="17-08-2024 11:44:57" datetime="2024-08-17T11:44:57+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #1ee865; margin-right: 4px;"></i>
                                <a href="/thao-luan/85-de-xuat-lnwn-cho-cac-trans?comment_id=2377479&amp;reply_id=2552273#ln-comment-2552273" title="Đề xuất LN/WN cho các trans">
                                    Đề xuất LN/WN cho các trans
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="17-08-2024 09:25:08" datetime="2024-08-17T09:25:08+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #1ee865; margin-right: 4px;"></i>
                                <a href="/thao-luan/2867-phien-dienkhong-hoan-hao?comment_id=2551959#ln-comment-2551959" title="Phiến Diện/Không Hoàn Hảo">
                                    Phiến Diện/Không Hoàn Hảo
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="17-08-2024 01:30:30" datetime="2024-08-17T01:30:30+07:00"></time>
                            </div>
                        </div>
                    </div>
                    <div class="topic-item">
                        <div class="row">
                            <div class="col-9 line-ellipsis">
                                <i class="fas fa-circle" style="color: #252eef; margin-right: 4px;"></i>
                                <a href="/thao-luan/2868-hoi-ve-viec-ket-noi-khong-an-toan?comment_id=2551664#ln-comment-2551664" title="Hỏi về việc kết nối không an toàn">
                                    Hỏi về việc kết nối không an toàn
                                </a>
                            </div>
                            <div class="col-3 topic-data text-right">
                                <time class="timeago" title="16-08-2024 22:37:33" datetime="2024-08-16T22:37:33+07:00"></time>
                            </div>
                        </div>
                    </div>
                </main>
            </section>

            <div class="d-lg-none" style="margin-top: 20px">
                <section id="reading-history" class="index-section" x-data="{ storage: (JSON.parse(localStorage.getItem('reading_series')) || []).slice(0,4) }">
                    <header class="section-title">
                        <a href="https://docln.net/lich-su-doc">
                            <span class="sts-bold">Truyện</span><span class="sts-empty">vừa đọc</span>
                        </a>
                    </header>
                    <main class="sect-body">
                        <template x-for="reading in storage">
                            <div class="row ml-1 mb-3">
                                <div class="col-2 col-md-1 col-lg-2 a6-ratio">
                                    <div class="img-contain-ratio content" :style="{ backgroundImage: reading.series_cover }"></div>
                                </div>
                                <div class="col-8 col-md-9 col-lg-8">
                                    <a x-text="reading.series_title" :href="reading.series_url" class="text-truncate block font-weight-bold"></a>
                                    <div x-text="reading.book_title" class="small mb-3 text-truncate"></div>
                                    <a x-text="reading.chapter_title" :href="reading.chapter_url" class="text-truncate block"></a>
                                </div>
                            </div>
                        </template>
                    </main>
                </section>
            </div>
        </div>
    </div>

</div>

<div style="text-align: center; margin: 0 auto 10px auto;">
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9">
            <section class="index-section thumb-section-flow last-chapter original one-row">
                <header class="section-title"><span class="sts-bold">Sáng tác</span><span class="sts-empty">Mới Nhất</span></header>
                <main class="row">
                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/sang-tac/15694-dead-world/c140888-chuong-251" title="Chương 25.1">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s15694-bc2a0220-5b85-427e-a1ba-0891baeaf583-m.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 25.1"><a href="/sang-tac/15694-dead-world/c140888-chuong-251" title="Chương 25.1">Chương 25.1</a></div>
                                <div class="thumb_attr volume-title">Dead World: Crime</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/sang-tac/15694-dead-world" title="Dead World">Dead World</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/sang-tac/14243-hon-phu-cua-nang-phan-dien/c140887-chuong-07-ansbach-von-lyngaheim" title="Chương 07: Ansbach Von Lyngaheim?">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload blur" data-bg="https://i2.docln.net/ln/series/covers/s14243-d8f1e732-1bc2-4da2-b6d2-9f4996a04290.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 07: Ansbach Von Lyngaheim?"><a href="/sang-tac/14243-hon-phu-cua-nang-phan-dien/c140887-chuong-07-ansbach-von-lyngaheim" title="Chương 07: Ansbach Von Lyngaheim?">Chương 07: Ansbach Von Lyngaheim?</a></div>
                                <div class="thumb_attr volume-title">Tập 1 Remake: Tận cùng tuyệt vọng</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/sang-tac/14243-hon-phu-cua-nang-phan-dien" title="Hôn phu của nàng phản diện">Hôn phu của nàng phản diện</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/sang-tac/18778-anh-hung-lac-loi/c140882-chuong-08-durandal" title="Chương 08 - Durandal">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18778-42d4df64-d7f3-42b0-a19b-bf21f267f229.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 08 - Durandal"><a href="/sang-tac/18778-anh-hung-lac-loi/c140882-chuong-08-durandal" title="Chương 08 - Durandal">Chương 08 - Durandal</a></div>
                                <div class="thumb_attr volume-title">Tập 01 - Layons</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/sang-tac/18778-anh-hung-lac-loi" title="Anh Hùng Lạc Lối">Anh Hùng Lạc Lối</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/sang-tac/18062-kho-bau-cua-bien-sao/c140880-phu-chuong-12-asuka" title="Phụ chương 1.2: Asuka">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18062-9a9b6cbd-1ca1-4896-ae1a-5dca4e99f950.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Phụ chương 1.2: Asuka"><a href="/sang-tac/18062-kho-bau-cua-bien-sao/c140880-phu-chuong-12-asuka" title="Phụ chương 1.2: Asuka">Phụ chương 1.2: Asuka</a></div>
                                <div class="thumb_attr volume-title">Phần 01: Bước Lên Hành Trình</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/sang-tac/18062-kho-bau-cua-bien-sao" title="Kho Báu Của Biển Sao">Kho Báu Của Biển Sao</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2 type-original ">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/sang-tac/18929-fuutoh-gio-va-hoa/c140879-chuong-1-set-danh-giua-troi-quang" title="Chương 1: Sét đánh giữa trời quang">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18929-a9777bfd-ea94-4c0b-8bd7-314f9ccd19cd.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 1: Sét đánh giữa trời quang"><a href="/sang-tac/18929-fuutoh-gio-va-hoa/c140879-chuong-1-set-danh-giua-troi-quang" title="Chương 1: Sét đánh giữa trời quang">Chương 1: Sét đánh giữa trời quang</a></div>
                                <div class="thumb_attr volume-title">Tập I - Khởi đầu để Gặp gỡ</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/sang-tac/18929-fuutoh-gio-va-hoa" title="Fuutoh: Gió và Hoa">Fuutoh: Gió và Hoa</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-lg-2 see-more">
                        <div class="thumb-wrapper">
                            <div class="a6-ratio">
                                <div class="content img-in-ratio" style="background-image: url('img/nocover.jpg');"></div>
                            </div>
                            <a href="https://docln.net/sang-tac">
                                <div class="thumb-see-more">
                                    <div class="see-more-inside">
                                        <div class="see-more-content">
                                            <div class="see-more-icon"><i class="fas fa-arrow-circle-right"></i></div>
                                            <div class="see-more-text">Xem thêm</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </main>
            </section>

            <section class="index-section thumb-section-flow last-chapter translation three-row">
                <header class="section-title">
                    <span class="sts-bold">Chương</span><span class="sts-empty">mới nhất</span>
                </header>
                <main class="row">
                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18749-ma-vuong-tu-zilbagias-cach-de-that-ma-vuong-tu-lat-do-ma-quoc/c140889-chuong-07-sung-da-phat-trien" title="Chương 07 Sừng đã phát triển">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18749-142cda65-3888-4df7-8293-7f73e1a7472b.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 07 Sừng đã phát triển"><a href="/truyen/18749-ma-vuong-tu-zilbagias-cach-de-that-ma-vuong-tu-lat-do-ma-quoc/c140889-chuong-07-sung-da-phat-trien" title="Chương 07 Sừng đã phát triển">Chương 07 Sừng đã phát triển</a></div>
                                <div class="thumb_attr volume-title">Web novel</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18749-ma-vuong-tu-zilbagias-cach-de-that-ma-vuong-tu-lat-do-ma-quoc" title="Ma vương tử Zilbagias: cách Đệ thất Ma vương tử lật đổ Ma quốc">Ma vương tử Zilbagias: cách Đệ thất Ma vương tử lật đổ Ma quốc</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18933-toi-thong-minh-ma-that-day/c140886-chuong-01-tai-sao-co-the-toi-lai-thanh-ra-the-nay" title="Chương 01: Tại sao cơ thể tôi lại thành ra thế này?">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18933-b8713713-4576-49a9-b0fd-cdd3d205ddd4.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 01: Tại sao cơ thể tôi lại thành ra thế này?"><a href="/truyen/18933-toi-thong-minh-ma-that-day/c140886-chuong-01-tai-sao-co-the-toi-lai-thanh-ra-the-nay" title="Chương 01: Tại sao cơ thể tôi lại thành ra thế này?">Chương 01: Tại sao cơ thể tôi lại thành ra thế này?</a></div>
                                <div class="thumb_attr volume-title">Cuộc sống sau khi bị thay đổi giới tính</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18933-toi-thong-minh-ma-that-day" title="Tôi thông minh mà (Thật đấy)">Tôi thông minh mà (Thật đấy)</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18251-star-embracing-swordmaster/c140884-chuong-41-1-chang-giong-ky-nghi-chut-nao" title="Chương 41: (1) Chẳng giống kỳ nghỉ chút nào">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18251-d291d5a2-604e-43ac-8d47-268100a64104.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 41: (1) Chẳng giống kỳ nghỉ chút nào"><a href="/truyen/18251-star-embracing-swordmaster/c140884-chuong-41-1-chang-giong-ky-nghi-chut-nao" title="Chương 41: (1) Chẳng giống kỳ nghỉ chút nào">Chương 41: (1) Chẳng giống kỳ nghỉ chút nào</a></div>
                                <div class="thumb_attr volume-title">WN</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18251-star-embracing-swordmaster" title="Tinh Tú Kiếm Sĩ">Tinh Tú Kiếm Sĩ</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18932-thanh-mai-truc-ma-cua-de-nhat/c140883-chuong-0-loi-mo-dau" title="Chương 0: Lời mở đầu">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18932-22975c36-5283-4392-bb1e-1e60f201e593.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 0: Lời mở đầu"><a href="/truyen/18932-thanh-mai-truc-ma-cua-de-nhat/c140883-chuong-0-loi-mo-dau" title="Chương 0: Lời mở đầu">Chương 0: Lời mở đầu</a></div>
                                <div class="thumb_attr volume-title">Phần 1</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18932-thanh-mai-truc-ma-cua-de-nhat" title="Thanh mai trúc mã của đệ nhất">Thanh mai trúc mã của đệ nhất</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/10574-tales-of-reincarnation-in-maydare/c140881-mot-goc-nhin-khac-airi-nhan-ra" title="Một góc nhìn khác: Airi, nhận ra">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s10574-fd78126b-d6b1-41bb-b45f-dced658b48c7.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Một góc nhìn khác: Airi, nhận ra"><a href="/truyen/10574-tales-of-reincarnation-in-maydare/c140881-mot-goc-nhin-khac-airi-nhan-ra" title="Một góc nhìn khác: Airi, nhận ra">Một góc nhìn khác: Airi, nhận ra</a></div>
                                <div class="thumb_attr volume-title">Quyển 3: Những Ma pháp sư bên kia cánh cửa I</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/10574-tales-of-reincarnation-in-maydare" title="Tales of Reincarnation in Maydare">Tales of Reincarnation in Maydare</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/1879-kuma-kuma-kuma-bear/c140878-chap-356-gau-san-biet-ve-hon-dao-bi-an-ngay-3" title="Chap 356: Gấu-san biết về hòn đảo bí ẩn (ngày 3)">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s1879-d83f75fe-da56-476b-b30c-a712a1408ae9-m.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chap 356: Gấu-san biết về hòn đảo bí ẩn (ngày 3)"><a href="/truyen/1879-kuma-kuma-kuma-bear/c140878-chap-356-gau-san-biet-ve-hon-dao-bi-an-ngay-3" title="Chap 356: Gấu-san biết về hòn đảo bí ẩn (ngày 3)">Chap 356: Gấu-san biết về hòn đảo bí ẩn (ngày 3)</a></div>
                                <div class="thumb_attr volume-title">Vol 11: Gấu-san đi du lịch cùng mọi người (330-376)</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/1879-kuma-kuma-kuma-bear" title="Kuma Kuma Kuma Bear">Kuma Kuma Kuma Bear</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18234-the-death-mage-who-doesnt-want-a-fourth-time/c140877-chuong-45-co-ve-nhu-toi-la-so-mot-va-duy-nhat-doi-voi-co-ay" title="Chương 45: Có vẻ như tôi là số một và duy nhất đối với cô ấy">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18234-e6a7893f-c45e-4da3-9ea0-34d228c5afba.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 45: Có vẻ như tôi là số một và duy nhất đối với cô ấy"><a href="/truyen/18234-the-death-mage-who-doesnt-want-a-fourth-time/c140877-chuong-45-co-ve-nhu-toi-la-so-mot-va-duy-nhat-doi-voi-co-ay" title="Chương 45: Có vẻ như tôi là số một và duy nhất đối với cô ấy">Chương 45: Có vẻ như tôi là số một và duy nhất đối với cô ấy</a></div>
                                <div class="thumb_attr volume-title">Tập 02: Thủ đô của mặt trời - Talosheim</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18234-the-death-mage-who-doesnt-want-a-fourth-time" title="The Death Mage Who Doesn&#039;t Want a Fourth Time">The Death Mage Who Doesn&#039;t Want a Fourth Time</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet/c140855-chuong-02" title="Chương 02">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://docln.net/img/nocover.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 02"><a href="/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet/c140855-chuong-02" title="Chương 02">Chương 02</a></div>
                                <div class="thumb_attr volume-title">WN</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet" title="Cô gái chuyển trường xinh đẹp tự nhận mình là vợ tương lai của tôi, xuất hiện trước mặt tôi - một kẻ cô độc. Và cô ấy còn là một siêu cấp “Yandere” , yêu tôi đến chết.">Cô gái chuyển trường xinh đẹp tự nhận mình là vợ tương lai của tôi, xuất hiện trước mặt tôi - một kẻ cô độc. Và cô ấy còn là một siêu cấp “Yandere” , yêu tôi đến chết.</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/16975-koukou-jidai-ni-gouman-datta-joou-sama-to-no-dousei-seikatsu-wa-igaito-igokochi-ga-warukunai/c140850-chuong-31-nu-hoang-doi-thay-1" title="Chương 3.1: Nữ hoàng đổi thay (1)">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s16975-46dc2789-639e-4d2e-9b17-5b67200cb4e8.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 3.1: Nữ hoàng đổi thay (1)"><a href="/truyen/16975-koukou-jidai-ni-gouman-datta-joou-sama-to-no-dousei-seikatsu-wa-igaito-igokochi-ga-warukunai/c140850-chuong-31-nu-hoang-doi-thay-1" title="Chương 3.1: Nữ hoàng đổi thay (1)">Chương 3.1: Nữ hoàng đổi thay (1)</a></div>
                                <div class="thumb_attr volume-title">Light Novel Tập 2 [ĐANG TIẾN HÀNH]</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/16975-koukou-jidai-ni-gouman-datta-joou-sama-to-no-dousei-seikatsu-wa-igaito-igokochi-ga-warukunai" title="Sống chung với Nữ hoàng kiêu ngạo thời cao trung hoá ra lại không hề khó chịu đến thế">Sống chung với Nữ hoàng kiêu ngạo thời cao trung hoá ra lại không hề khó chịu đến thế</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18156-picking-up-unrequited-love/c140848-chuong-19-hang-so-tich-phan" title="Chương 19 : Hằng số tích phân">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18156-55eb9f22-e8d0-4f98-92e8-fe1b6c94f04e.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 19 : Hằng số tích phân"><a href="/truyen/18156-picking-up-unrequited-love/c140848-chuong-19-hang-so-tich-phan" title="Chương 19 : Hằng số tích phân">Chương 19 : Hằng số tích phân</a></div>
                                <div class="thumb_attr volume-title">Wn</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18156-picking-up-unrequited-love" title="Picking Up Unrequited Love">Picking Up Unrequited Love</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18409-ariel-dalton-muon-duoc-tot-nghiep/c140845-chuong-04" title="Chương 04">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18409-19a4c5d0-4306-4edd-834d-f4cb7f4ee093.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 04"><a href="/truyen/18409-ariel-dalton-muon-duoc-tot-nghiep/c140845-chuong-04" title="Chương 04">Chương 04</a></div>
                                <div class="thumb_attr volume-title">Web novel</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18409-ariel-dalton-muon-duoc-tot-nghiep" title="Ariel Dalton muốn được tốt nghiệp!">Ariel Dalton muốn được tốt nghiệp!</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18807-mac-ket-noi-thien-duong/c140842-chuong-02-loi-khuyen" title="Chương 02: Lời khuyên">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18807-1ea2bed5-ce5e-4211-b905-9c905edc606b.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 02: Lời khuyên"><a href="/truyen/18807-mac-ket-noi-thien-duong/c140842-chuong-02-loi-khuyen" title="Chương 02: Lời khuyên">Chương 02: Lời khuyên</a></div>
                                <div class="thumb_attr volume-title">Vol 1</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18807-mac-ket-noi-thien-duong" title="Mắc kẹt nơi thiên đường">Mắc kẹt nơi thiên đường</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/17778-ma-vuong-voi-muc-luong-toi-thieu/c140838-chuong-07-tro-choi-cua-quy" title="Chương 07: Trò chơi của Quỷ">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://docln.net/img/nocover.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 07: Trò chơi của Quỷ"><a href="/truyen/17778-ma-vuong-voi-muc-luong-toi-thieu/c140838-chuong-07-tro-choi-cua-quy" title="Chương 07: Trò chơi của Quỷ">Chương 07: Trò chơi của Quỷ</a></div>
                                <div class="thumb_attr volume-title">Hồi 3: Khởi Động</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/17778-ma-vuong-voi-muc-luong-toi-thieu" title="Ma Vương Với Mức Lương Tối Thiểu">Ma Vương Với Mức Lương Tối Thiểu</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18420-toi-co-mot-cuoc-gap-mat-voi-vo-trong-game-va-mot-co-be-tieu-hoc-xuat-hien-lieu-toi-co-phai-ra-toa-khong/c140833-chap-31-bay-va-moi-nhu" title="Chap 31: Bẫy và mồi nhử">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://docln.net/img/nocover.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chap 31: Bẫy và mồi nhử"><a href="/truyen/18420-toi-co-mot-cuoc-gap-mat-voi-vo-trong-game-va-mot-co-be-tieu-hoc-xuat-hien-lieu-toi-co-phai-ra-toa-khong/c140833-chap-31-bay-va-moi-nhu" title="Chap 31: Bẫy và mồi nhử">Chap 31: Bẫy và mồi nhử</a></div>
                                <div class="thumb_attr volume-title">Lolicon</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18420-toi-co-mot-cuoc-gap-mat-voi-vo-trong-game-va-mot-co-be-tieu-hoc-xuat-hien-lieu-toi-co-phai-ra-toa-khong" title="Tôi có một cuộc gặp mặt với vợ trong game và một cô bé tiểu học xuất hiện. Liệu tôi có phải ra tòa không...?">Tôi có một cuộc gặp mặt với vợ trong game và một cô bé tiểu học xuất hiện. Liệu tôi có phải ra tòa không...?</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/15461-bang-mot-cach-nao-do-dan-my-nhan-hang-s-lai-de-cap-den-toi/c140830-chuong-3-gia-tri-den-tu-toi-2" title="Chương 3: Giá trị đến từ &quot;tôi&quot; (2)">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s15461-6f3027bb-2ab8-4ce6-8419-d3bc5404d715.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 3: Giá trị đến từ &quot;tôi&quot; (2)"><a href="/truyen/15461-bang-mot-cach-nao-do-dan-my-nhan-hang-s-lai-de-cap-den-toi/c140830-chuong-3-gia-tri-den-tu-toi-2" title="Chương 3: Giá trị đến từ &quot;tôi&quot; (2)">Chương 3: Giá trị đến từ &quot;tôi&quot; (2)</a></div>
                                <div class="thumb_attr volume-title">Light Novel, Vol 3</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/15461-bang-mot-cach-nao-do-dan-my-nhan-hang-s-lai-de-cap-den-toi" title="Không biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi">Không biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan/c140827-chuong-132-nguyen-do" title="Chương 132: Nguyên Do">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18741-0d1f09f8-6f69-408c-9cf1-cc27c040be2d.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Chương 132: Nguyên Do"><a href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan/c140827-chuong-132-nguyen-do" title="Chương 132: Nguyên Do">Chương 132: Nguyên Do</a></div>
                                <div class="thumb_attr volume-title">Đệ Tứ Chương</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan" title="Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.">Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                        <div class="thumb-wrapper ln-tooltip">
                            <a href="/truyen/18920-lam-ban-trai-gia-cua-co-nang-hoa-khoi-truong/c140821-loi-mo-dau" title="Lời mở đầu.">
                                <div class="a6-ratio">
                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18920-da6efe9b-82aa-42d7-926c-d5ceb548188b.jpg"></div>
                                </div>
                            </a>
                            <div class="thumb-detail">
                                <div class="thumb_attr chapter-title" title="Lời mở đầu."><a href="/truyen/18920-lam-ban-trai-gia-cua-co-nang-hoa-khoi-truong/c140821-loi-mo-dau" title="Lời mở đầu.">Lời mở đầu.</a></div>
                                <div class="thumb_attr volume-title">WN</div>
                            </div>
                        </div>
                        <div class="thumb_attr series-title"><a href="/truyen/18920-lam-ban-trai-gia-cua-co-nang-hoa-khoi-truong" title="Làm bạn trai giả của cô nàng hoa khôi trường">Làm bạn trai giả của cô nàng hoa khôi trường</a></div>
                    </div>

                    <div class="thumb-item-flow col-4 col-lg-2 see-more">
                        <div class="thumb-wrapper">
                            <div class="a6-ratio">
                                <div class="content img-in-ratio" style="background-image: url('img/nocover.jpg');"></div>
                            </div>
                            <a href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=capnhat">
                                <div class="thumb-see-more">
                                    <div class="see-more-inside">
                                        <div class="see-more-content">
                                            <div class="see-more-icon"><i class="fas fa-arrow-circle-right"></i></div>
                                            <div class="see-more-text">Xem thêm</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </main>
            </section>
        </div>
        <div class="col-12 col-lg-3">
            <div class="d-none d-lg-block">
                <section id="reading-history" class="index-section" x-data="{ storage: (JSON.parse(localStorage.getItem('reading_series')) || []).slice(0,4) }">
                    <header class="section-title">
                        <a href="https://docln.net/lich-su-doc">
                            <span class="sts-bold">Truyện</span><span class="sts-empty">vừa đọc</span>
                        </a>
                    </header>
                    <main class="sect-body">
                        <template x-for="reading in storage">
                            <div class="row ml-1 mb-3">
                                <div class="col-2 col-md-1 col-lg-2 a6-ratio">
                                    <div class="img-contain-ratio content" :style="{ backgroundImage: reading.series_cover }"></div>
                                </div>
                                <div class="col-8 col-md-9 col-lg-8">
                                    <a x-text="reading.series_title" :href="reading.series_url" class="text-truncate block font-weight-bold"></a>
                                    <div x-text="reading.book_title" class="small mb-3 text-truncate"></div>
                                    <a x-text="reading.chapter_title" :href="reading.chapter_url" class="text-truncate block"></a>
                                </div>
                            </div>
                        </template>
                    </main>
                </section>
            </div>
            <section id="recent-comments" class="index-section">
                <header class="section-title">
                    <span class="sts-bold">Bình luận</span><span class="sts-empty">gần đây</span>
                </header>
                <main class="sect-body pr-5">
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/18932-thanh-mai-truc-ma-cua-de-nhat?comment_id=2552926#ln-comment-2552926">Thanh mai trúc mã của đệ nhất</a></span>

                            <div class="comment-content">
                                Hình như đây là tu tiên mà
                            </div>

                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/59827">
                                        <img src="https://i.docln.net/lightnovel/users/ua59827-01692547-f48f-443a-b1ba-cf142484bc59.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/18932-thanh-mai-truc-ma-cua-de-nhat?comment_id=2552926#ln-comment-2552926" rel="nofollow" class="comment-user_name strong">UNIVERSE</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/18932-thanh-mai-truc-ma-cua-de-nhat?comment_id=2552926#ln-comment-2552926">
                                        <time class="timeago" title="17-08-2024 17:53:47" datetime="2024-08-17T17:53:47+07:00">
                                            17-08-2024 17:53:47
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet?comment_id=2552682&amp;reply_id=2552919#ln-comment-2552919">Cô gái chuyển trường xinh đẹp tự nhận mình là vợ tương lai của tôi, xuất hiện trước mặt tôi - một kẻ cô độc. Và cô ấy còn là một siêu cấp “Yandere” , yêu tôi đến chết.</a></span>

                            <div class="comment-content">
                                @injurasetgo: bộ này có vẻ đáng mong đợi kk
                            </div>

                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/131673">
                                        <img src="https://docln.net/img/noava.png" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet?comment_id=2552682&amp;reply_id=2552919#ln-comment-2552919" rel="nofollow" class="comment-user_name strong">Võ Lê Nhật Dũng</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet?comment_id=2552682&amp;reply_id=2552919#ln-comment-2552919">
                                        <time class="timeago" title="17-08-2024 17:49:15" datetime="2024-08-17T17:49:15+07:00">
                                            17-08-2024 17:49:15
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet?comment_id=2552899#ln-comment-2552899">Cô gái chuyển trường xinh đẹp tự nhận mình là vợ tương lai của tôi, xuất hiện trước mặt tôi - một kẻ cô độc. Và cô ấy còn là một siêu cấp “Yandere” , yêu tôi đến chết.</a></span>

                            <div class="comment-content">
                                Đọc Izayoi Alice cứ tưởng là Izayoi Sakuya. 😂
                            </div>

                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/158095">
                                        <img src="https://i2.docln.net/ln/users/avatars/u158095-5018c7a4-5c73-4ce3-8943-a56e8e6aa0fd.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet?comment_id=2552899#ln-comment-2552899" rel="nofollow" class="comment-user_name strong">Timmie2407</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet?comment_id=2552899#ln-comment-2552899">
                                        <time class="timeago" title="17-08-2024 17:34:06" datetime="2024-08-17T17:34:06+07:00">
                                            17-08-2024 17:34:06
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867&amp;reply_id=2552895#ln-comment-2552895">Tôi thông minh mà (Thật đấy)</a></span>

                            <div class="comment-content">
                                @SanTreEm: xem lại chương 1, sửa xưng hô, tút tát lại câu từ
                                còn nội dung bộ này đến giờ thấy khá xa...
                            </div>

                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/33638">
                                        <img src="https://i2.docln.net/ln/users/avatars/u33638-4a0619a0-d8d1-4a0e-90e7-4edf5f1bc934.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867&amp;reply_id=2552895#ln-comment-2552895" rel="nofollow" class="comment-user_name strong">Xã hội này tàn rồi</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867&amp;reply_id=2552895#ln-comment-2552895">
                                        <time class="timeago" title="17-08-2024 17:30:34" datetime="2024-08-17T17:30:34+07:00">
                                            17-08-2024 17:30:34
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/18670-thuong-dan-a-mong-muon-cuu-lay-nu-phan-dien-bang-moi-gia?comment_id=2549818&amp;reply_id=2552882#ln-comment-2552882">Thường dân A mong muốn cứu lấy nữ phản diện bằng mọi giá!</a></span>

                            <div class="comment-content">
                                @Yuigaiichi: +1 vote bác dịch bộ này
                            </div>

                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/140948">
                                        <img src="https://i2.docln.net/ln/users/avatars/u140948-1eae2be2-7fc8-48e4-b0fa-ee09a21b8be5.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/18670-thuong-dan-a-mong-muon-cuu-lay-nu-phan-dien-bang-moi-gia?comment_id=2549818&amp;reply_id=2552882#ln-comment-2552882" rel="nofollow" class="comment-user_name strong">Haru simp lỏd</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/18670-thuong-dan-a-mong-muon-cuu-lay-nu-phan-dien-bang-moi-gia?comment_id=2549818&amp;reply_id=2552882#ln-comment-2552882">
                                        <time class="timeago" title="17-08-2024 17:24:38" datetime="2024-08-17T17:24:38+07:00">
                                            17-08-2024 17:24:38
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867&amp;reply_id=2552875#ln-comment-2552875">Tôi thông minh mà (Thật đấy)</a></span>

                            <div class="comment-content">
                                @Xã hội này tàn rồi: tôi mới dịch nên cũng đang xem cmt mọi người để sửa dần đây
                            </div>

                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/199024">
                                        <img src="https://i2.docln.net/ln/users/avatars/u199024-e3447bd7-3d3e-4e91-a475-83966309736b.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867&amp;reply_id=2552875#ln-comment-2552875" rel="nofollow" class="comment-user_name strong">SanTreEm</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867&amp;reply_id=2552875#ln-comment-2552875">
                                        <time class="timeago" title="17-08-2024 17:19:56" datetime="2024-08-17T17:19:56+07:00">
                                            17-08-2024 17:19:56
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867&amp;reply_id=2552868#ln-comment-2552868">Tôi thông minh mà (Thật đấy)</a></span>

                            <div class="comment-content">
                                à ko, cái bộ truyện bị đần và dạy ta cần phải học toán đầy đủ
                                ngoài ra bản dịch thô và còn lỗi xưng...
                            </div>

                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/33638">
                                        <img src="https://i2.docln.net/ln/users/avatars/u33638-4a0619a0-d8d1-4a0e-90e7-4edf5f1bc934.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867&amp;reply_id=2552868#ln-comment-2552868" rel="nofollow" class="comment-user_name strong">Xã hội này tàn rồi</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867&amp;reply_id=2552868#ln-comment-2552868">
                                        <time class="timeago" title="17-08-2024 17:15:47" datetime="2024-08-17T17:15:47+07:00">
                                            17-08-2024 17:15:47
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867#ln-comment-2552867">Tôi thông minh mà (Thật đấy)</a></span>

                            <div class="comment-content">
                                chứng minh nó thông minh thì mắc mớ gì đến việc nó là gái
                                tự dưng nghe mùi phân biệt giới tính thế n...
                            </div>

                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/33638">
                                        <img src="https://i2.docln.net/ln/users/avatars/u33638-4a0619a0-d8d1-4a0e-90e7-4edf5f1bc934.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867#ln-comment-2552867" rel="nofollow" class="comment-user_name strong">Xã hội này tàn rồi</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552867#ln-comment-2552867">
                                        <time class="timeago" title="17-08-2024 17:14:27" datetime="2024-08-17T17:14:27+07:00">
                                            17-08-2024 17:14:27
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/16466-throne-of-magical-arcana?comment_id=2549890&amp;reply_id=2552864#ln-comment-2552864">Throne of Magical Arcana</a></span>

                            <div class="comment-content">
                                @Shin Sensei mê romcom: phải qua 1 arc nữa cơ, đợi trans đi, dịch đọc cho nó đã
                            </div>

                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/48687">
                                        <img src="https://i.docln.net/lightnovel/users/ua48687-6c32eaf3-f39e-49d1-89ad-7ee4ce09ed2f.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/16466-throne-of-magical-arcana?comment_id=2549890&amp;reply_id=2552864#ln-comment-2552864" rel="nofollow" class="comment-user_name strong">Messi</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/16466-throne-of-magical-arcana?comment_id=2549890&amp;reply_id=2552864#ln-comment-2552864">
                                        <time class="timeago" title="17-08-2024 17:10:57" datetime="2024-08-17T17:10:57+07:00">
                                            17-08-2024 17:10:57
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="comment-item-at-index">
                        <div class="comment-info">
                            <span class="series-name"><a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552862#ln-comment-2552862">Tôi thông minh mà (Thật đấy)</a></span>

                            <div class="comment-content">
                                =)))) cái gì đây
                            </div>

                            <div class="comment-top">
                                <div class="comment-user_ava">
                                    <a href="https://docln.net/thanh-vien/177745">
                                        <img src="https://i2.docln.net/ln/users/avatars/u177745-ab6aa2ca-5079-495d-b948-d7504a122229.jpg" alt="Commenter's avatar">
                                    </a>
                                </div>
                                <a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552862#ln-comment-2552862" rel="nofollow" class="comment-user_name strong">Mino Inoue</a>
                                <small class="comment-location">
                                    <a href="https://docln.net/truyen/18933-toi-thong-minh-ma-that-day?comment_id=2552862#ln-comment-2552862">
                                        <time class="timeago" title="17-08-2024 17:10:21" datetime="2024-08-17T17:10:21+07:00">
                                            17-08-2024 17:10:21
                                        </time>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                </main>
            </section>
        </div>
    </div>
</div>

<div style="text-align: center; margin: 0 auto 10px auto;">
</div>

<div class="bottom-part at-index">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-9">
                <section class="index-section new-series">
                    <header class="section-title"><span class="sts-bold">Truyện</span><span class="sts-empty">Vừa Đăng</span>
                    </header>
                    <main class="sect-body">
                        <div class="row">
                            <article class="list-item list-none col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-4 col-md-3 col-lg-4">
                                        <div class="series-cover">
                                            <a href="/truyen/18933-toi-thong-minh-ma-that-day">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18933-b8713713-4576-49a9-b0fd-cdd3d205ddd4.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-9 col-lg-8">
                                        <div class="list-detail">
                                            <h4 class="series-title text-xl font-bold"><a href="/truyen/18933-toi-thong-minh-ma-that-day">Tôi thông minh mà (Thật đấy)</a></h4>
                                            <div class="series-summary">Tôi không ngốc đâu, bạn biết đấy. Tôi đã vào được một trường đại học danh tiếng với số điểm đứng đầu lớp. Nghiêm túc đấy...</div>
                                            <div class="lastest-chapter">
                                                <!--<a href="/truyen/18933-toi-thong-minh-ma-that-day/c140886-chuong-01-tai-sao-co-the-toi-lai-thanh-ra-the-nay">Chương 01: Tại sao cơ thể tôi lại thành ra thế này?</a>
                                            <small>Cuộc sống sau khi bị thay đổi giới tính</small>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="list-item list-none col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-4 col-md-3 col-lg-4">
                                        <div class="series-cover">
                                            <a href="/truyen/18932-thanh-mai-truc-ma-cua-de-nhat">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18932-22975c36-5283-4392-bb1e-1e60f201e593.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-9 col-lg-8">
                                        <div class="list-detail">
                                            <h4 class="series-title text-xl font-bold"><a href="/truyen/18932-thanh-mai-truc-ma-cua-de-nhat">Thanh mai trúc mã của đệ nhất</a></h4>
                                            <div class="series-summary">Gu Yangchun, người đã phản bội lại Chính phái, trở thành một ma nhân dưới quyền Thiên ma, nhưng sống một cuộc đời như vậ...</div>
                                            <div class="lastest-chapter">
                                                <!--<a href="/truyen/18932-thanh-mai-truc-ma-cua-de-nhat/c140883-chuong-0-loi-mo-dau">Chương 0: Lời mở đầu</a>
                                            <small>Phần 1</small>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="list-item list-none col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-4 col-md-3 col-lg-4">
                                        <div class="series-cover">
                                            <a href="/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio lazyload" data-bg="https://docln.net/img/nocover.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-9 col-lg-8">
                                        <div class="list-detail">
                                            <h4 class="series-title text-xl font-bold"><a href="/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet">Cô gái chuyển trường xinh đẹp tự nhận mình là vợ tương lai của tôi, xuất hiện trước mặt tôi - một kẻ cô độc. Và cô ấy còn là một siêu cấp “Yandere” , yêu tôi đến chết.</a></h4>
                                            <div class="series-summary">Kurotsuki Takuma, một nam sinh trung học có thành tích học tập và năng khiếu thể thao tuyệt vời, luôn ở một mình trong t...</div>
                                            <div class="lastest-chapter">
                                                <!--<a href="/truyen/18927-co-gai-chuyen-truong-xinh-dep-tu-nhan-minh-la-vo-tuong-lai-cua-toi-xuat-hien-truoc-mat-toi-mot-ke-co-docva-co-ay-con-la-mot-sieu-cap-yandere-yeu-toi-den-chet/c140855-chuong-02">Chương 02</a>
                                            <small>WN</small>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="list-item list-none col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-4 col-md-3 col-lg-4">
                                        <div class="series-cover">
                                            <a href="/truyen/18920-lam-ban-trai-gia-cua-co-nang-hoa-khoi-truong">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18920-da6efe9b-82aa-42d7-926c-d5ceb548188b.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-9 col-lg-8">
                                        <div class="list-detail">
                                            <h4 class="series-title text-xl font-bold"><a href="/truyen/18920-lam-ban-trai-gia-cua-co-nang-hoa-khoi-truong">Làm bạn trai giả của cô nàng hoa khôi trường</a></h4>
                                            <div class="series-summary">"Cậu có thể hẹn hò cùng với tôi không?"Cô gái xinh đẹp nhất trường tỏ tình với tôi.Đó là cách chúng tôi trở thành người...</div>
                                            <div class="lastest-chapter">
                                                <!--<a href="/truyen/18920-lam-ban-trai-gia-cua-co-nang-hoa-khoi-truong/c140821-loi-mo-dau">Lời mở đầu.</a>
                                            <small>WN</small>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="list-item list-none col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-4 col-md-3 col-lg-4">
                                        <div class="series-cover">
                                            <a href="/truyen/18910-the-main-heroines-are-trying-to-kill-me">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18910-6dd16df1-43dd-4831-942f-44e2f892b842.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-9 col-lg-8">
                                        <div class="list-detail">
                                            <h4 class="series-title text-xl font-bold"><a href="/truyen/18910-the-main-heroines-are-trying-to-kill-me">The Main Heroines Are Trying To Kill Me</a></h4>
                                            <div class="series-summary">chuyện kể về một anh chàng lương thiện như thích giả làm ác nhân để cứu thế giới 5 cô gái tìm cách giúp đỡ anh</div>
                                            <div class="lastest-chapter">
                                                <!--<a href="/truyen/18910-the-main-heroines-are-trying-to-kill-me/c140768-chuong-17-su-hon-loan-cua-cam-xuc">Chương 17: sự hỗn loạn của cảm xúc</a>
                                            <small>Web Novel</small>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="list-item list-none col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-4 col-md-3 col-lg-4">
                                        <div class="series-cover">
                                            <a href="/truyen/18896-bac-thay-thiet-ke-dien-trang">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18896-2de105ec-166f-400f-8b43-32ab786f75b6.jpg">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-9 col-lg-8">
                                        <div class="list-detail">
                                            <h4 class="series-title text-xl font-bold"><a href="/truyen/18896-bac-thay-thiet-ke-dien-trang">Bậc thầy thiết kế điền trang</a></h4>
                                            <div class="series-summary">Con trai cả của một Nam tước tại vùng quê, người bị gọi là rác rưởi và bị gia đình, cấp dưới và mọi người dân trong điền...</div>
                                            <div class="lastest-chapter">
                                                <!--<a href="/truyen/18896-bac-thay-thiet-ke-dien-trang/c140451-chuong-01">Chương 01: Trở thành tên khốn trong tiểu thuyết</a>
                                            <small>Novel</small>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </main>
                    <div class="see-more_cover">
                        <a class="see-more" href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=truyenmoi">
                            <i class="fas fa-hand-point-right"></i>Xem thêm
                        </a>
                    </div>
                </section>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <section class="index-section rank-cirle most-followed">
                    <header class="section-title">
                        <span class="sts-bold">Theo dõi</span><span class="sts-empty">nhiều</span>
                    </header>
                    <main>
                        <div class="rank-circle-item">
                            <span class="rank-number">1</span>
                            <div class="series-detail clear">
                                <div class="series-cover">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio" style="background-image: url('https://i.docln.net/lightnovel/covers/s8115-eedb5d53-c2ec-465c-b352-875cead20179-m.jpg') "></div>
                                    </div>
                                </div>
                                <h5 class="series-title"><a href="/truyen/8115-ryoushin-no-shakkin-wo-katagawari-shite-morau-jouken-wa-nihon-ichi" title="Ryoushin no Shakkin wo Katagawari shite Morau Jouken wa Nihon Ichi">Ryoushin no Shakkin wo Katagawari shite Morau Jouken wa Nihon Ichi</a></h5>
                                <small class="rank-count">12,373 theo dõi</small>
                            </div>
                        </div>
                        <div class="rank-circle-item">
                            <span class="rank-number">2</span>
                            <div class="series-detail clear">
                                <div class="series-cover">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio" style="background-image: url('https://i.docln.net/lightnovel/covers/s3569-4f9d3270-6d42-4301-8ad7-761e917fc3b6-m.jpg') "></div>
                                    </div>
                                </div>
                                <h5 class="series-title"><a href="/truyen/3569-in-no-jitsury-okusha-ni-naritakute-new" title="In no jitsury okusha ni naritakute!">In no jitsury okusha ni naritakute!</a></h5>
                                <small class="rank-count">11,932 theo dõi</small>
                            </div>
                        </div>
                        <div class="rank-circle-item">
                            <span class="rank-number">3</span>
                            <div class="series-detail clear">
                                <div class="series-cover">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio" style="background-image: url('https://i2.docln.net/ln/series/covers/s11586-a810d8f0-3973-41fb-ae79-63c968a7a12e.jpg') "></div>
                                    </div>
                                </div>
                                <h5 class="series-title"><a href="/truyen/11586-shimotsuki-wa-mob-ga-suki" title="Shimotsuki wa Mob ga Suki">Shimotsuki wa Mob ga Suki</a></h5>
                                <small class="rank-count">10,534 theo dõi</small>
                            </div>
                        </div>
                        <div class="rank-circle-item">
                            <span class="rank-number">4</span>
                            <div class="series-detail clear">
                                <h5 class="series-title"><a href="/truyen/8252-ket-hon-voi-dua-con-gai-ma-toi-cuc-ghet-trong-lop" title="Kết hôn với đứa con gái mà tôi cực ghét trong lớp.">Kết hôn với đứa con gái mà tôi cực ghét trong lớp.</a></h5>
                                <small class="rank-count">10,325 theo dõi</small>
                            </div>
                        </div>
                        <div class="rank-circle-item">
                            <span class="rank-number">5</span>
                            <div class="series-detail clear">
                                <h5 class="series-title"><a href="/truyen/139-that-nghiep-tai-sinh" title="Mushoku Tensei - Isekai Ittara Honki Dasu">Mushoku Tensei - Isekai Ittara Honki Dasu</a></h5>
                                <small class="rank-count">9,915 theo dõi</small>
                            </div>
                        </div>
                        <div class="rank-circle-item">
                            <span class="rank-number">6</span>
                            <div class="series-detail clear">
                                <h5 class="series-title"><a href="/truyen/7474-mamahaha-no-tsurego-ga-motokano-datta" title="Con gái mẹ kế là bạn gái cũ của tôi">Con gái mẹ kế là bạn gái cũ của tôi</a></h5>
                                <small class="rank-count">9,211 theo dõi</small>
                            </div>
                        </div>
                        <div class="rank-circle-item">
                            <span class="rank-number">7</span>
                            <div class="series-detail clear">
                                <h5 class="series-title"><a href="/truyen/10712-toi-bi-ten-senpai-ntr-mat-ban-gai-nen-toi-ntr-lai-ban-gai-cua-han" title="Tôi bị tên senpai NTR mất bạn gái, nên tôi NTR lại bạn gái của hắn">Tôi bị tên senpai NTR mất bạn gái, nên tôi NTR lại bạn gái của hắn</a></h5>
                                <small class="rank-count">9,044 theo dõi</small>
                            </div>
                        </div>
                        <div class="rank-circle-item">
                            <span class="rank-number">8</span>
                            <div class="series-detail clear">
                                <h5 class="series-title"><a href="/truyen/8534-my-plain-looking-fiancee-is-secretly-sweet-with-me" title="My Plain-looking Fiancee is Secretly Sweet with me">My Plain-looking Fiancee is Secretly Sweet with me</a></h5>
                                <small class="rank-count">8,690 theo dõi</small>
                            </div>
                        </div>
                        <div class="rank-circle-item">
                            <span class="rank-number">9</span>
                            <div class="series-detail clear">
                                <h5 class="series-title"><a href="/truyen/9005-netoge-no-yome-ga-ninki-idol-datta-ken-cool-kei-no-kanojo-wa-genjitsu-demo-yome-no-tsumori-de-iru" title="Netoge no Yome ga Ninki Idol datta ken ~Cool-kei no kanojo wa genjitsu demo yome no tsumori de iru~">Netoge no Yome ga Ninki Idol datta ken ~Cool-kei no kanojo wa genjitsu demo yome no tsumori de iru~</a></h5>
                                <small class="rank-count">8,678 theo dõi</small>
                            </div>
                        </div>
                        <div class="rank-circle-item">
                            <span class="rank-number">10</span>
                            <div class="series-detail clear">
                                <h5 class="series-title"><a href="/truyen/8656-arya-san-ban-ben-thi-thoang-lai-to-ra-ngot-ngao-va-thi-tham-tha-thinh-toi-bang-tieng-nga" title="Arya-san bàn bên thi thoảng lại thả thính tôi bằng tiếng Nga">Arya-san bàn bên thi thoảng lại thả thính tôi bằng tiếng Nga</a></h5>
                                <small class="rank-count">8,640 theo dõi</small>
                            </div>
                        </div>
                    </main>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="container pad-top-40">
    <section class="index-section js-finished-series">
        <header class="section-title">
            <span class="sts-bold">Truyện</span><span class="sts-empty">đã hoàn thành</span>
        </header>
        <main class="row slider">
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/18031-100-dieu-em-khong-biet-ve-senpai/c133959-ngay-thu-592-senpai-sang-giai-doan-moi-roi-lieu-chung-ta-co-the-tiep-tuc-than-thiet-nhu-the-nay-khong" title="Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s18031-bc498d99-90f1-4384-8268-59309e7f23eb.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;"><a href="/truyen/18031-100-dieu-em-khong-biet-ve-senpai/c133959-ngay-thu-592-senpai-sang-giai-doan-moi-roi-lieu-chung-ta-co-the-tiep-tuc-than-thiet-nhu-the-nay-khong" title="Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;">Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;</a></div>
                        <div class="thumb_attr volume-title">Extra (Sau khi end)</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/18031-100-dieu-em-khong-biet-ve-senpai" title="100 điều em không biết về senpai">100 điều em không biết về senpai</a></div>
            </div>
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/4807-the-day-i-disappeared/c49486-chuong-03" title="Chương 03 - End">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s4807-a30cd9a7-5a48-4b81-959b-cbe053d011ab-m.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Chương 03 - End"><a href="/truyen/4807-the-day-i-disappeared/c49486-chuong-03" title="Chương 03 - End">Chương 03 - End</a></div>
                        <div class="thumb_attr volume-title">Oneshot</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/4807-the-day-i-disappeared" title="The Day I Disappeared">The Day I Disappeared</a></div>
            </div>
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/16685-87-ngay-cho-den-lan-dau-lam-chuyen-ay-voi-co-ban-gai-ngay-tho-va-de-dai/c125252-chuong-ket-nhieu-lan-dau-cung-nhau-trai-nghiem" title="Chương kết: Nhiều lần đầu cùng nhau trải nghiệm">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s16685-23173e61-bce9-44cc-9dbf-140c87a06365-m.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Chương kết: Nhiều lần đầu cùng nhau trải nghiệm"><a href="/truyen/16685-87-ngay-cho-den-lan-dau-lam-chuyen-ay-voi-co-ban-gai-ngay-tho-va-de-dai/c125252-chuong-ket-nhieu-lan-dau-cung-nhau-trai-nghiem" title="Chương kết: Nhiều lần đầu cùng nhau trải nghiệm">Chương kết: Nhiều lần đầu cùng nhau trải nghiệm</a></div>
                        <div class="thumb_attr volume-title">Thật ra... đây là lần đầu của mình đó</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/16685-87-ngay-cho-den-lan-dau-lam-chuyen-ay-voi-co-ban-gai-ngay-tho-va-de-dai" title="87 ngày cho đến lần đầu làm chuyện ấy với cô bạn gái ngây thơ và dễ dãi">87 ngày cho đến lần đầu làm chuyện ấy với cô bạn gái ngây thơ và dễ dãi</a></div>
            </div>
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/10692-the-hero-and-the/c87775-oneshot" title="Oneshot">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://docln.net/img/nocover.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Oneshot"><a href="/truyen/10692-the-hero-and-the/c87775-oneshot" title="Oneshot">Oneshot</a></div>
                        <div class="thumb_attr volume-title">Toàn tập</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/10692-the-hero-and-the" title="The Hero And The ○○">The Hero And The ○○</a></div>
            </div>
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/9299-zettai-ni-derete-wa-ikenai-tsundere/c90348-loi-bat" title="Lời bạt">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s9299-bc419785-8552-497c-a091-f2b5c32564cb-m.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Lời bạt"><a href="/truyen/9299-zettai-ni-derete-wa-ikenai-tsundere/c90348-loi-bat" title="Lời bạt">Lời bạt</a></div>
                        <div class="thumb_attr volume-title">Oneshot</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/9299-zettai-ni-derete-wa-ikenai-tsundere" title="Zettai ni Derete wa Ikenai Tsundere">Zettai ni Derete wa Ikenai Tsundere</a></div>
            </div>
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/12166-good-bye-sengen/c109557-tai-but" title="Tái bút.">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s12166-ac50a54e-53cd-4977-a6e3-35544813f352-m.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Tái bút."><a href="/ truyen/12166-good-bye-sengen/c109557-tai-but" title="Tái bút.">Tái bút.</a></div>
                        <div class="thumb_attr volume-title">Oneshot</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/12166-good-bye-sengen" title="Good-bye Sengen">Good-bye Sengen</a></div>
            </div>
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/14565-tieu-thuyet-kamen-rider-decade-the-gioi-cua-kadoya-tsukasa-khu-vuon-trong-ong-kinh/c115810-phan-ket" title="Phần Kết">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s14565-5e6d5044-343b-4a8d-80cb-a1ba13c823c4-m.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Phần Kết"><a href="/truyen/14565-tieu-thuyet-kamen-rider-decade-the-gioi-cua-kadoya-tsukasa-khu-vuon-trong-ong-kinh/c115810-phan-ket" title="Phần Kết">Phần Kết</a></div>
                        <div class="thumb_attr volume-title">Novel: Kamen Rider Decade</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/14565-tieu-thuyet-kamen-rider-decade-the-gioi-cua-kadoya-tsukasa-khu-vuon-trong-ong-kinh" title="Tiểu Thuyết Kamen Rider Decade: Thế Giới của Kadoya Tsukasa ~Khu Vườn Bên Trong Ống Kính~">Tiểu Thuyết Kamen Rider Decade: Thế Giới của Kadoya Tsukasa ~Khu Vườn Bên Trong Ống Kính~</a></div>
            </div>
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/16960-toi-da-to-tinh-em-yeu-anh-trong-suot-365-ngay/c125753-oneshot" title="Oneshot">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://i2.docln.net/ln/series/covers/s16960-307b5398-cdbd-46e5-825d-aef7007bd46e.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Oneshot"><a href="/truyen/16960-toi-da-to-tinh-em-yeu-anh-trong-suot-365-ngay/c125753-oneshot" title="Oneshot">Oneshot</a></div>
                        <div class="thumb_attr volume-title">WN</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/16960-toi-da-to-tinh-em-yeu-anh-trong-suot-365-ngay" title="Lời yêu anh thứ 365">Lời yêu anh thứ 365</a></div>
            </div>
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/12370-mua-chim-di-tru/c97075-chuong-4-mua-trai-tim-vinh-vien-khong-doi-doi" title="Chương 4. Mùa trái tim vĩnh viễn không đổi dời">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://i.docln.net/lightnovel/covers/s12370-c5bc8ee1-6225-49e1-be96-970ea8e080cf-m.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Chương 4. Mùa trái tim vĩnh viễn không đổi dời"><a href="/truyen/12370-mua-chim-di-tru/c97075-chuong-4-mua-trai-tim-vinh-vien-khong-doi-doi" title="Chương 4. Mùa trái tim vĩnh viễn không đổi dời">Chương 4. Mùa trái tim vĩnh viễn không đổi dời</a></div>
                        <div class="thumb_attr volume-title">Mùa chim di trú</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/12370-mua-chim-di-tru" title="Mùa chim di trú">Mùa chim di trú</a></div>
            </div>
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/13614-hoang-tu-vua-huy-hon-roi/c104157-oneshot" title="Oneshot">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://docln.net/img/nocover.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Oneshot"><a href="/truyen/13614-hoang-tu-vua-huy-hon-roi/c104157-oneshot" title="Oneshot">Oneshot</a></div>
                        <div class="thumb_attr volume-title">Oneshot</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/13614-hoang-tu-vua-huy-hon-roi" title="Hoàng tử vừa hủy hôn rồi!">Hoàng tử vừa hủy hôn rồi!</a></div>
            </div>
            <div class="thumb-item-flow thumb-slider">
                <div class="thumb-wrapper">
                    <a href="/truyen/8475-what-if-the-the-ugly-duckling-wasnt-a-swan-but-a-dragon/c75177-oneshot" title="Oneshot">
                        <div class="a6-ratio">
                            <div class="content img-in-ratio lazyload" data-bg="https://docln.net/img/nocover.jpg"></div>
                        </div>
                    </a>
                    <div class="thumb-detail">
                        <div class="thumb_attr chapter-title" title="Oneshot"><a href="/truyen/8475-what-if-the-the-ugly-duckling-wasnt-a-swan-but-a-dragon/c75177-oneshot" title="Oneshot">Oneshot</a></div>
                        <div class="thumb_attr volume-title">Oneshot</div>
                    </div>
                </div>
                <div class="thumb_attr series-title"><a href="/truyen/8475-what-if-the-the-ugly-duckling-wasnt-a-swan-but-a-dragon" title="What if the the Ugly Duckling Wasn’t a Swan But a Dragon?">What if the the Ugly Duckling Wasn’t a Swan But a Dragon?</a></div>
            </div>
            <div class="thumb-item-flow see-more">
                <div class="thumb-wrapper">
                    <div class="a6-ratio">
                        <div class="content img-in-ratio" style="background-image: url('img/nocover.jpg');"></div>
                    </div>
                    <a href="https://docln.net/danh-sach?truyendich=1&amp;hoanthanh=1&amp;sapxep=capnhat">
                        <div class="thumb-see-more">
                            <div class="see-more-inside">
                                <div class="see-more-content">
                                    <div class="see-more-icon"><i class="fas fa-arrow-circle-right"></i></div>
                                    <div class="see-more-text">Xem thêm</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </section>
</div>
<script>
    $(document).ready(function() {

        $(".mobile-toggle header").click(function() {
            $(this).parent().find(".listall_summary").toggle();
            $(this).parent().find(".sect-body").toggle();
        });

        //listab(".daily-recent_views");

    });
</script>
</main>

<script src="/scripts/app.js?id=e6bfa8f47769659b2c4d6e4752cc0d59"></script>
<script src="/livewire/livewire.js?id=f121a5df" data-csrf="JW2dwQwjwvBYDwGCSwWAddvymJSsyKtKznjguqAf" data-update-uri="/livewire/update" data-navigate-once="true"></script>


<script async type='text/javascript' src='//pl16314303.highcpmgate.com/d5/6b/4b/d56b4bd6c3d2c1e161c4ab3c78c27670.js'></script>

@endsection