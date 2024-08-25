@extends('partials.sidebar')
@section('composer');
<div id="page-top"></div>
    <div data-scrollto="#page-top" class="backtoTop"><i class="fas fa-angle-double-up"></i></div>
    <div id="navbar" class="headroom">
        <div class="container">
            <div id="sidenav-icon" class="none-xl">
                <div class="sidenav-icon-content">
                    <span class="sidenav-icon_white"></span>
                    <span class="sidenav-icon_white"></span>
                    <span class="sidenav-icon_white"></span>
                </div>
                <ul class="navbar-menu none hidden-block at-mobile unstyle">   
                    <div class="navbar-search block none-m in-navbar-menu">
                        <form class="" action="https://docln.net/tim-kiem" method="get">
                            <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value="">
                            <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                        </form>
                    </div>               

                    <li><a class="nav-menu_item" href="{{route('composer')}}"><span class="">Sáng tác</span></a></li>
                    <li><a class="nav-menu_item" href="{{route('pandemic')}}"><span class="">Máy dịch</span></a></li>
                    <li><a class="nav-menu_item" href="{{route('publish')}}"><span class="">Xuất bản</span></a></li>
                    <li><a class="nav-menu_item" href="{{route('discuss')}}"><span class="">Thảo luận</span></a></li>
                    <li><a class="nav-menu_item" href="{{route('list')}}"><span class="">Danh sách</span></a></li>
                    
                    <li class="nav-has-submenu">
                        <a class="nav-menu_item">
                            <span class="">Hướng dẫn</span>
                            <i class="fas fa-chevron-down dropdown-icon" style="float: right; margin-top: 6px"></i>
                        </a>

                        <ul class="nav-submenu list-unstyled none">
                            <li><a href="{{route('create')}}"><span>Đăng truyện</span></a></li>
                            <li><a href="{{route('about')}}"><span>Giới thiệu</span></a></li>
                            <li><a href="thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi.html"><span>Góp ý - Báo lỗi</span></a></li>
                            <li><a href="privacy-policy.html"><span>Privacy Policy</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="navbar-logo-wrapper">
                <a href="/" class="navbar-logo" style="background-image: url('img/logo-9.png')" title="Trang chủ"></a>
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
							<div class="nightmode-toggle li-inner">
                                <span><i class="fas fa-moon"></i>Nền tối</span>
								<div class="toggle-icon">
									<i class="fa fa-toggle-off"></i>
								</div>
							</div>
						</li>
                        <li>
                            <a class="li-inner" href="lich-su-doc.html"><i class="fas fa-history"></i><span>Lịch sử</span></a>
                        </li>
					</ul>
				</div>
			</div>
                        <div class="navbar-mainblock">
                <div class="navbar-search none block-m">
                    <form class="" action="https://docln.net/tim-kiem" method="get">
                        <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value="">
                        <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                    </form>
                </div>          
                <ul class="navbar-menu at-navbar none d-xl-block unstyled">               
                    <li><a class="nav-menu_item" href="{{route('composer')}}"><i class="fas fa-pen-nib menu-icon"></i><span class="">Sáng tác</span></a></li>

                    <li><a class="nav-menu_item" href="{{route('pandemic')}}"><i class="fas fa-book menu-icon"></i><span class="">Máy dịch</span></a></li>
                    
                    <li><a class="nav-menu_item" href="{{route('publish')}}"><i class="fas fa-calendar menu-icon"></i><span class="">Xuất bản</span></a></li>
                    
                    <li><a class="nav-menu_item" href="{{route('discuss')}}"><i class="fas fa-users menu-icon"></i><span class="">Thảo luận</span></a></li>
                    
                    <li><a class="nav-menu_item" href="{{route('list')}}"><i class="fas fa-th-list menu-icon"></i><span class="">Danh sách</span></a></li>
                    
                    <li class="nav-has-submenu">
                        <a class="nav-menu_item">
                            <i class="fas fa-question menu-icon"></i><span class="">Hướng dẫn</span>
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                            <i class="fas fa-chevron-right dropdown-icon"></i>
                        </a>

                        <ul class="nav-submenu hidden-block unstyled none">
                            <li><a href="{{route('create')}}"><span>Đăng truyện</span></a></li>
                            <li><a href="{{route('about')}}"><span>Giới thiệu</span></a></li>
                            <li><a href="thao-luan/1-mo-trang-thao-luan-gop-y-va-bao-loi.html"><span>Góp ý - Báo lỗi</span></a></li>
                            <li><a href="privacy-policy.html"><span>Privacy Policy</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!--<section id="nav-search"></section>-->
        </div>
    </div>
        <div class="page-top-group ">
                <a href="thao-luan/2591-ra-mat-hako-facebook-group.html">
                        <div class="index-background d-none d-lg-block" style="background-image: url('images/banners/fbg_d.jpg')"></div>
            <div class="index-background d-lg-none" style="background-image: url('images/banners/fbg_m.jpg'); background-size: cover"></div>
                    </a>
                </div>
                <main id="mainpart" class="orinovel-page orinovel-type">
                    <header class="page-title">
                        <div class="page-name_wrapper">
                            <div class="container">
                                <span class="page-name"><a href="sang-tac.html"><i class="fas fa-circle"></i>Truyện tự sáng tác</a>
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <div class="daily-recent_views mb-5">
                                    <header class="title">
                                        <span class="top-tab_title title-active"><i class="fas fa-trophy"></i> Nổi bật</span>
                                    </header>
                                    <main class="row slider d-block">
                                                                                                <div class="popular-thumb-item mr-1">
                                                <div class="thumb-wrapper">
                                                    <a href="sang-tac/18996-respectre.html" title="Re/Spectre">
                                                        <div class="a6-ratio">									
                                                            <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18996-3116ffce-5ce6-4ef1-8c53-e8f9c22299c1.jpg')"></div>
                                                        </div>
                                                    </a>
                                                    <div class="thumb-detail">										
                                                        <div class="thumb_attr series-title" title="Re/Spectre"><a href="sang-tac/18996-respectre.html" title="Re/Spectre">Re/Spectre</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                                <div class="popular-thumb-item mr-1">
                                                <div class="thumb-wrapper">
                                                    <a href="sang-tac/18994-tho-san-bong-toi.html" title="Thợ săn bóng tối">
                                                        <div class="a6-ratio">									
                                                            <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18994-7e53a397-b52f-445c-99ca-10f1af84a027.jpg')"></div>
                                                        </div>
                                                    </a>
                                                    <div class="thumb-detail">										
                                                        <div class="thumb_attr series-title" title="Thợ săn bóng tối"><a href="sang-tac/18994-tho-san-bong-toi.html" title="Thợ săn bóng tối">Thợ săn bóng tối</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                                <div class="popular-thumb-item mr-1">
                                                <div class="thumb-wrapper">
                                                    <a href="sang-tac/18991-davay-idi.html" title="Davay Idi">
                                                        <div class="a6-ratio">									
                                                            <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18991-fa541d03-a145-4179-a298-8ea42dd7727e.jpg')"></div>
                                                        </div>
                                                    </a>
                                                    <div class="thumb-detail">										
                                                        <div class="thumb_attr series-title" title="Davay Idi"><a href="sang-tac/18991-davay-idi.html" title="Davay Idi">Davay Idi</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                                <div class="popular-thumb-item mr-1">
                                                <div class="thumb-wrapper">
                                                    <a href="sang-tac/18923-ban-hung-ca-utopia.html" title="Bản Hùng Ca Utopia">
                                                        <div class="a6-ratio">									
                                                            <div class="content img-in-ratio" style="background-image: url('img/nocover.jpg')"></div>
                                                        </div>
                                                    </a>
                                                    <div class="thumb-detail">										
                                                        <div class="thumb_attr series-title" title="Bản Hùng Ca Utopia"><a href="sang-tac/18923-ban-hung-ca-utopia.html" title="Bản Hùng Ca Utopia">Bản Hùng Ca Utopia</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                                <div class="popular-thumb-item mr-1">
                                                <div class="thumb-wrapper">
                                                    <a href="sang-tac/17923-chuyen-sau-mua.html" title="Chuyện Sau Mưa">
                                                        <div class="a6-ratio">									
                                                            <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s17923-e061811d-1c46-454b-b93a-109ef19c6bd7.jpg')"></div>
                                                        </div>
                                                    </a>
                                                    <div class="thumb-detail">										
                                                        <div class="thumb_attr series-title" title="Chuyện Sau Mưa"><a href="sang-tac/17923-chuyen-sau-mua.html" title="Chuyện Sau Mưa">Chuyện Sau Mưa</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                                <div class="popular-thumb-item mr-1">
                                                <div class="thumb-wrapper">
                                                    <a href="sang-tac/17053-thay-doi-so-phan.html" title="Thay đổi số phận">
                                                        <div class="a6-ratio">									
                                                            <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s17053-4fc5c1a5-8c5c-4652-9ffe-010ebc4a3d3f.jpg')"></div>
                                                        </div>
                                                    </a>
                                                    <div class="thumb-detail">										
                                                        <div class="thumb_attr series-title" title="Thay đổi số phận"><a href="sang-tac/17053-thay-doi-so-phan.html" title="Thay đổi số phận">Thay đổi số phận</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                                <div class="popular-thumb-item mr-1">
                                                <div class="thumb-wrapper">
                                                    <a href="sang-tac/17688-rerise-hoccachyeu.html" title="Học  Cách  Yêu">
                                                        <div class="a6-ratio">									
                                                            <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s17688-7baf4351-1f41-4a38-a142-e3bb3d5637e4.jpg')"></div>
                                                        </div>
                                                    </a>
                                                    <div class="thumb-detail">										
                                                        <div class="thumb_attr series-title" title="Học  Cách  Yêu"><a href="sang-tac/17688-rerise-hoccachyeu.html" title="Học  Cách  Yêu">Học  Cách  Yêu</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                                <div class="popular-thumb-item mr-1">
                                                <div class="thumb-wrapper">
                                                    <a href="sang-tac/16429-chuyen-sinh-tro-nen-tot-hon-o-mot-the-gioi-khac.html" title="Trở nên tốt hơn ở một thế giới khác">
                                                        <div class="a6-ratio">									
                                                            <div class="content img-in-ratio" style="background-image: url('../i.docln.net/lightnovel/covers/s16429-a5b60d68-f456-4761-9432-80830c2815f3-m.jpg')"></div>
                                                        </div>
                                                    </a>
                                                    <div class="thumb-detail">										
                                                        <div class="thumb_attr series-title" title="Trở nên tốt hơn ở một thế giới khác"><a href="sang-tac/16429-chuyen-sinh-tro-nen-tot-hon-o-mot-the-gioi-khac.html" title="Trở nên tốt hơn ở một thế giới khác">Trở nên tốt hơn ở một thế giới khác</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                                            </main>
                                </div>
                
                                <section id="ln-newest" class="detail-list has-pagination">
                                    <header class="section-title"><span>Mới cập nhật</span></header> 
                                    <main class="sect-body">  
                                                            
                                    <article class="detail-list-item">
                                        <div class="cover-wrapper">
                                            <a href="sang-tac/18883-sao-bang-va-giot-le-cua-thien-ha.html">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18883-2f5b1bb2-b49c-48ae-beaf-47e4894038d8.jpg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="detail-list-detail">
                                            <h4 class="series-title text-xl font-bold">
                                                <a href="sang-tac/18883-sao-bang-va-giot-le-cua-thien-ha.html">Darkside of the moon</a>
                                            </h4>
                                            <div class="sub-attr">
                                                <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/104394.html">Linky</a></div>
                                                <div class="sub-attr-item"><span class="attr-name">Số từ</span>11,693</a></span></div>
                                            </div>
                                            <div class="series-summary">Có một cậu bé tên là Linky, cậu lao vào bóng đêm trong một tối nọ. Lúc nhận ra thì đã hàng thiên niên kỷ trôi qua rồi, mọi thứ xung quanh giờ chỉ là một đống đổ nát. Ở trong đống đổ nát đó, cậu vô tình gặp được Kafka.</div>
                                            <div class="lastest-chapter">
                                                                                <a href="sang-tac/18883-sao-bang-va-giot-le-cua-thien-ha/c141489-chuong-05.html">Chương 05</a>
                                                <small>Sao băng và giọt lệ của thiên hà</small>
                                            </div>
                                        </div>
                                    </article>
                
                                                            
                                    <article class="detail-list-item">
                                        <div class="cover-wrapper">
                                            <a href="sang-tac/19009-chien-giap-than-toc.html">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('img/nocover.jpg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="detail-list-detail">
                                            <h4 class="series-title text-xl font-bold">
                                                <a href="sang-tac/19009-chien-giap-than-toc.html">Chiến Giáp Thần tốc</a>
                                            </h4>
                                            <div class="sub-attr">
                                                <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/197044.html">J99T</a></div>
                                                <div class="sub-attr-item"><span class="attr-name">Số từ</span>5,213</a></span></div>
                                            </div>
                                            <div class="series-summary">Cùng phiêu lưu với Sokudo Kamaza, cậu bé với trái tim dũng cảm và đôi chân bùng nổ tốc độ! Sokudo không chỉ là một học sinh bình thường, cậu ấy còn là Velocity, chiến binh trong bộ giáp nano siêu ngầu, bảo vệ thành phố khỏi những thế lực xấu xa! Hành trình của Sokudo đầy ắp tiếng cười, tình bạn và n...</div>
                                            <div class="lastest-chapter">
                                                                                <a href="sang-tac/19009-chien-giap-than-toc/c141487-oneshot.html">Oneshot</a>
                                                <small>Vol 0</small>
                                            </div>
                                        </div>
                                    </article>
                
                                                            
                                    <article class="detail-list-item">
                                        <div class="cover-wrapper">
                                            <a href="sang-tac/15764-last-time-return.html">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s15764-909b9bcc-cbb5-49bf-bf4c-a4eff3838bf2.jpg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="detail-list-detail">
                                            <h4 class="series-title text-xl font-bold">
                                                <a href="sang-tac/15764-last-time-return.html">Last Time Return</a>
                                            </h4>
                                            <div class="sub-attr">
                                                <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/85240.html">Ken Đang Học</a></div>
                                                <div class="sub-attr-item"><span class="attr-name">Số từ</span>180,215</a></span></div>
                                            </div>
                                            <div class="series-summary">Từng bị bắt nạt thời tiểu học, Kamito Haku đã thoát khỏi số phận đen đủi khi lên cấp hai. Vì thế, cậu luôn trân trọng từng khoảnh khắc của cuộc đời. Nhưng trong một ngày, cả gia đình và người bạn thân nhất của Haku đã ra đi mãi mãi. Từ khoảnh khắc ấy, cậu bắt đầu chìm sâu vào tuyệt vọng.
                Đan xen vào...</div>
                                            <div class="lastest-chapter">
                                                                                <a href="sang-tac/15764-last-time-return/c141486-chuong-39-chiec-nhan-va-linh-hon.html">Chương 39 : Chiếc nhẫn và linh hồn</a>
                                                <small>Arc 01: Thành Phố Ánh Trăng - Mở đầu Trò Chơi Trốn Tìm</small>
                                            </div>
                                        </div>
                                    </article>
                
                                                            
                                    <article class="detail-list-item">
                                        <div class="cover-wrapper">
                                            <a href="sang-tac/19006-giac-mo-cua-nhung-anh-hung-hi-vong.html">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s19006-7a98cfc5-61e7-48ba-ad28-fd53a6927c14.jpg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="detail-list-detail">
                                            <h4 class="series-title text-xl font-bold">
                                                <a href="sang-tac/19006-giac-mo-cua-nhung-anh-hung-hi-vong.html">Giấc mơ của những anh hùng hi vọng</a>
                                            </h4>
                                            <div class="sub-attr">
                                                <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/154178.html">Xathusanma</a></div>
                                                <div class="sub-attr-item"><span class="attr-name">Số từ</span>10,767</a></span></div>
                                            </div>
                                            <div class="series-summary">- Hi vọng, hi vọng thật mong manh nhưng các người lại quá tham vọng về nó. Nếu không có hi vọng thì làm sao có được ước mơ chứ !
                Những người Earth xuất hiện tại lục địa Vocaylas, một thế giới trong giấc mơ của họ. Họ cùng nhau kết nối với những người bạn của thế giới này chống lại thế lực của những...</div>
                                            <div class="lastest-chapter">
                                                                                <a href="sang-tac/19006-giac-mo-cua-nhung-anh-hung-hi-vong/c141479-p1-chuong-5-loi-thu-thach-cua-alex.html">P1 - Chương 5 : Lời thử thách của Alex</a>
                                                <small>Phần 1 : Vol.1 : Life - Sự sống !</small>
                                            </div>
                                        </div>
                                    </article>
                
                                                            
                                    <article class="detail-list-item">
                                        <div class="cover-wrapper">
                                            <a href="sang-tac/18936-thich-cau-khong-the-ly-giai.html">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18936-255e5bcc-df28-42b4-ac9b-f66b55359465.jpg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="detail-list-detail">
                                            <h4 class="series-title text-xl font-bold">
                                                <a href="sang-tac/18936-thich-cau-khong-the-ly-giai.html">Thích Cậu, Không Thể Lý Giải</a>
                                            </h4>
                                            <div class="sub-attr">
                                                <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/179387.html">Sagi_YD</a></div>
                                                <div class="sub-attr-item"><span class="attr-name">Số từ</span>28,060</a></span></div>
                                            </div>
                                            <div class="series-summary">Khi một mình từ Aomori chuyển đến Kyoto phồn hoa vào đầu năm thứ hai trung học, Senjougahara Rin thỉnh thoảng có cảm giác mình đã mơ một giấc rất dài. Dài và rõ ràng đến mức đôi khi cô phải tự hỏi, đó thật sự chỉ là mơ, hay là một trải nghiệm mà cô đã quên mất? Nhưng mỗi lần tỉnh dậy từ giấc mộng, c...</div>
                                            <div class="lastest-chapter">
                                                                                <a href="sang-tac/18936-thich-cau-khong-the-ly-giai/c141478-phu-chuong-1-kyoto-25042023.html">Phụ chương 1: KYOTO - 25/04/2023</a>
                                                <small>Tập 1</small>
                                            </div>
                                        </div>
                                    </article>
                
                                                            
                                    <article class="detail-list-item">
                                        <div class="cover-wrapper">
                                            <a href="sang-tac/16651-song-lai-o-the-gioi-khac-toi-se-khong-danh-mat-thu-thuoc-ve-minh.html">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('img/nocover.jpg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="detail-list-detail">
                                            <h4 class="series-title text-xl font-bold">
                                                <a href="sang-tac/16651-song-lai-o-the-gioi-khac-toi-se-khong-danh-mat-thu-thuoc-ve-minh.html">Được trao tặng sinh mệnh mới, tôi quyết sẽ bảo vệ tất cả</a>
                                            </h4>
                                            <div class="sub-attr">
                                                <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/33374.html">Kaitou đang qua đường</a></div>
                                                <div class="sub-attr-item"><span class="attr-name">Số từ</span>138,581</a></span></div>
                                            </div>
                                            <div class="series-summary">Cái ngày anh ta ra đời, anh ta đã rất hạnh phúc với gia đình nhỏ gồm cha mẹ và em gái của mình. Nhưng hạnh phúc chưa được bao lâu, ngày anh ta lên bảy cha mẹ anh đã mất vì tai nạn nhưng đó chỉ là vở kịch che đậy sự thật. Ngày anh ta nhận được bưu kiện lạ sự thật được phơi bày.
                Từ đó anh ta lao vào t...</div>
                                            <div class="lastest-chapter">
                                                                                <a href="sang-tac/16651-song-lai-o-the-gioi-khac-toi-se-khong-danh-mat-thu-thuoc-ve-minh/c141473-chuong-48.html">Chương 48</a>
                                                <small>Vol 03</small>
                                            </div>
                                        </div>
                                    </article>
                
                                                            
                                    <article class="detail-list-item">
                                        <div class="cover-wrapper">
                                            <a href="sang-tac/17688-rerise-hoccachyeu.html">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s17688-7baf4351-1f41-4a38-a142-e3bb3d5637e4.jpg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="detail-list-detail">
                                            <h4 class="series-title text-xl font-bold">
                                                <a href="sang-tac/17688-rerise-hoccachyeu.html">Học  Cách  Yêu</a>
                                            </h4>
                                            <div class="sub-attr">
                                                <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/159729.html">Otagira</a></div>
                                                <div class="sub-attr-item"><span class="attr-name">Số từ</span>73,146</a></span></div>
                                            </div>
                                            <div class="series-summary">Câu chuyện kể về một nam sinh lớp 10 bất ngờ nhận được ký ức từ tương lai của mình, kèm theo một yêu cầu lạ lùng về tình yêu.
                Hối tiếc trong tương lai, 
                Sai lầm trong quá khứ,
                và Rối loạn trong hiện tại. 
                Tất cả cùng nhau xoay chuyển vận mệnh của cậu~! </div>
                                            <div class="lastest-chapter">
                                                                                <a href="sang-tac/17688-rerise-hoccachyeu/c141471-chuong-23-duong-va-buoi-livestream-ki-cuc-1.html">Chương 23: Dương và Buổi livestream kì cục (1)</a>
                                                <small>Tập 01: Học Kì 2 Lớp 10</small>
                                            </div>
                                        </div>
                                    </article>
                
                                                            
                                    <article class="detail-list-item">
                                        <div class="cover-wrapper">
                                            <a href="sang-tac/18947-thien-menh-cuu-roi-cua-nguoi-chua-lanh.html">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18947-af3e7565-b1a7-4775-bc67-c73373c1f542.jpg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="detail-list-detail">
                                            <h4 class="series-title text-xl font-bold">
                                                <a href="sang-tac/18947-thien-menh-cuu-roi-cua-nguoi-chua-lanh.html">Thiên Mệnh Cứu Rỗi Của Người Chữa Lành</a>
                                            </h4>
                                            <div class="sub-attr">
                                                <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/165456.html">Yuhhh</a></div>
                                                <div class="sub-attr-item"><span class="attr-name">Số từ</span>36,420</a></span></div>
                                            </div>
                                            <div class="series-summary">Làm thế nào để sống trong một thế giới không có mục đích? 
                Giữa thế giới dần đến hồi diệt vong, con người tìm được ánh sáng qua những Thiên Mệnh. Tôi phải làm gì để sống trong thế giới này chứ, trở thành kẻ hèn nhát hay đi theo những gì sứ mệnh cho gọi?</div>
                                            <div class="lastest-chapter">
                                                                                <a href="sang-tac/18947-thien-menh-cuu-roi-cua-nguoi-chua-lanh/c141459-chuong-04-than.html">Chương 04: Than</a>
                                                <small>01: Thiên Mệnh</small>
                                            </div>
                                        </div>
                                    </article>
                
                                                            
                                    <article class="detail-list-item">
                                        <div class="cover-wrapper">
                                            <a href="sang-tac/18498-lily-blossom-over-a-pool-of-blood.html">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18498-2eaaa3b8-4471-4629-879d-af5c7435f866.jpg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="detail-list-detail">
                                            <h4 class="series-title text-xl font-bold">
                                                <a href="sang-tac/18498-lily-blossom-over-a-pool-of-blood.html">Lily Blossom over a Pool of Blood</a>
                                            </h4>
                                            <div class="sub-attr">
                                                <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/165456.html">Yuhhh</a></div>
                                                <div class="sub-attr-item"><span class="attr-name">Số từ</span>472,982</a></span></div>
                                            </div>
                                            <div class="series-summary">Đứa trẻ lạc lối tìm về nơi ánh sáng sau hừng đông, để tìm nơi trở về và nơi bản thân mình thuộc về. Một khắc, để nhìn lại quá khứ đen tối và sẵn sàng bước đến tương lai.</div>
                                            <div class="lastest-chapter">
                                                                                <a href="sang-tac/18498-lily-blossom-over-a-pool-of-blood/c141458-chuong-41-o-nang.html">Chương 41: Ở Nàng</a>
                                                <small>03: Bức Màn</small>
                                            </div>
                                        </div>
                                    </article>
                
                                                            
                                    <article class="detail-list-item">
                                        <div class="cover-wrapper">
                                            <a href="sang-tac/18991-davay-idi.html">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18991-fa541d03-a145-4179-a298-8ea42dd7727e.jpg')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="detail-list-detail">
                                            <h4 class="series-title text-xl font-bold">
                                                <a href="sang-tac/18991-davay-idi.html">Davay Idi</a>
                                            </h4>
                                            <div class="sub-attr">
                                                <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/195977.html">novachim3024</a></div>
                                                <div class="sub-attr-item"><span class="attr-name">Số từ</span>13,309</a></span></div>
                                            </div>
                                            <div class="series-summary">Câu truyện kể về hành trình sinh tồn ở thế giới mới của một người lính Xô Viết tên Mikhail  — từng là một võ sĩ quyền anh. Trong một lần nọ khi đang canh giữ ở đèo K-G (Khost-Gardez) tại quận Gardez, Afghanistan. Đại đội của anh đã bắt gặp một nhóm khảo cổ với những món cổ vật kỳ lạ và từ đó câu tru...</div>
                                            <div class="lastest-chapter">
                                                                                <a href="sang-tac/18991-davay-idi/c141455-chuong-1.html">Chương 1 | Edit lần 1</a>
                                                <small>Tập 01</small>
                                            </div>
                                        </div>
                                    </article>
                
                                                        </main>                      
                                    <div class="pagination-footer">
                        <div class="pagination_wrap">
                            <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                            <a href="sang-tac2679.html?page=1" class="paging_item paging_prevnext prev  disabled ">Đầu</a>
                            
                                        <a href="sang-tac2679.html?page=1" class="paging_item page_num  current ">1</a>
                                        <a href="sang-tac4658.html?page=2" class="paging_item page_num ">2</a>
                                        <a href="sang-tac9ba9.html?page=3" class="paging_item page_num ">3</a>
                                        <a href="sang-tacfdb0.html?page=4" class="paging_item page_num ">4</a>
                                        <a href="sang-tacaf4d.html?page=5" class="paging_item page_num ">5</a>
                            
                            <!--<a href=" https://docln.net/sang-tac?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                            <a href="sang-taccadd.html?page=45" class="paging_item paging_prevnext next ">Cuối</a>
                        </div>
                    </div>
                                    </section>
                            </div>
                
                            <div class="col-12 col-lg-3">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-12">
                                        <section class="sub-index-style sub-index-introduce">
                                            <div class="title-wrapper">
                                                <div class="section-title">Giới thiệu truyện</div>
                                            </div>
                                            <div class="section-content">
                                                <div class="series-cover">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio" style="background-image: url('../i.docln.net/lightnovel/covers/s6979-cc1008a8-e6e1-4de6-b99e-4830413e5120-m.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="series-information">
                                                    <h3 class="series-title"><a href="sang-tac/6979-molten-chocolte-nong-sot-cung-cafe-au-lait-cua-tuong-lai.html">Những mẫu truyện ngắn xoay quanh cửa tiệm The Gentle Cat</a></h3>
                                                    <div class="series-summary">Có một quán cà phê mang phong cách tây phương nọ có thể biến nguyện ước của khách hàng thành sự thật chỉ bằng việc phục vụ món ăn hay thức uống đúng v...</div>                 
                                                </div>
                                            </div>
                                        </section>
                                        <section id="recent-comments" class="sub-index-style">
                                            <div class="title-wrapper">
                                                <div class="section-title">Bình luận mới</div>
                                            </div>
                                            <div class="section-content">
                                                                            <div class="comment-item">
                        <div class="comment-user_ava">
                        <a href="thanh-vien/18694.html">
                            <img src="img/noava.png">
                        </a>
                    </div>
                    <div class="comment-info">
                        <div class="comment-top">
                            <a href="sang-tac/18740-nhung-cau-chuyen-ki-ao0fd3.html?comment_id=2561029#ln-comment-2561029" rel="nofollow" class="comment-user_name strong">choeng</a>
                            <small class="comment-location">
                                <a href="sang-tac/18740-nhung-cau-chuyen-ki-ao0fd3.html?comment_id=2561029#ln-comment-2561029">   
                                    <time class="timeago" title="23-08-2024 06:49:20" datetime="2024-08-23T06:49:20+07:00">
                                        23-08-2024 06:49:20
                                    </time>
                                </a>    
                            </small> 
                        </div>
                                                
                        <div class="comment-content">
                            Bắt gặp khoảnh khắc ác liệt quá
                        </div>
                
                        <span class="series-name"><a href="sang-tac/18740-nhung-cau-chuyen-ki-ao0fd3.html?comment_id=2561029#ln-comment-2561029">Những câu chuyện kì ảo</a></span>
                    </div>                                                          
                </div>                                                            <div class="comment-item">
                        <div class="comment-user_ava">
                        <a href="thanh-vien/104394.html">
                            <img src="../i2.docln.net/ln/users/avatars/u104394-15eaee4f-7adc-4d33-996a-e92a92e19e5e.jpg">
                        </a>
                    </div>
                    <div class="comment-info">
                        <div class="comment-top">
                            <a href="sang-tac/18883-sao-bang-va-giot-le-cua-thien-ha22e6.html?comment_id=2560957&amp;reply_id=2560958#ln-comment-2560958" rel="nofollow" class="comment-user_name strong">Linky</a>
                            <small class="comment-location">
                                <a href="sang-tac/18883-sao-bang-va-giot-le-cua-thien-ha22e6.html?comment_id=2560957&amp;reply_id=2560958#ln-comment-2560958">   
                                    <time class="timeago" title="23-08-2024 01:33:36" datetime="2024-08-23T01:33:36+07:00">
                                        23-08-2024 01:33:36
                                    </time>
                                </a>    
                            </small> 
                        </div>
                                                
                        <div class="comment-content">
                            Ngoài ra thì đây cũng là tên của một trong hai album nhạc mà mình lấy cảm hứng để viết tác phẩm này.
                        </div>
                
                        <span class="series-name"><a href="sang-tac/18883-sao-bang-va-giot-le-cua-thien-ha22e6.html?comment_id=2560957&amp;reply_id=2560958#ln-comment-2560958">Darkside of the moon</a></span>
                    </div>                                                          
                </div>                                                            <div class="comment-item">
                        <div class="comment-user_ava">
                        <a href="thanh-vien/104394.html">
                            <img src="../i2.docln.net/ln/users/avatars/u104394-15eaee4f-7adc-4d33-996a-e92a92e19e5e.jpg">
                        </a>
                    </div>
                    <div class="comment-info">
                        <div class="comment-top">
                            <a href="sang-tac/18883-sao-bang-va-giot-le-cua-thien-ha5f06.html?comment_id=2560957#ln-comment-2560957" rel="nofollow" class="comment-user_name strong">Linky</a>
                            <small class="comment-location">
                                <a href="sang-tac/18883-sao-bang-va-giot-le-cua-thien-ha5f06.html?comment_id=2560957#ln-comment-2560957">   
                                    <time class="timeago" title="23-08-2024 01:32:40" datetime="2024-08-23T01:32:40+07:00">
                                        23-08-2024 01:32:40
                                    </time>
                                </a>    
                            </small> 
                        </div>
                                                
                        <div class="comment-content">
                            Mình mới đổi lại tên truyện để đúng với chủ đề của truyện hơn
                        </div>
                
                        <span class="series-name"><a href="sang-tac/18883-sao-bang-va-giot-le-cua-thien-ha5f06.html?comment_id=2560957#ln-comment-2560957">Darkside of the moon</a></span>
                    </div>                                                          
                </div>                                                            <div class="comment-item">
                        <div class="comment-user_ava">
                        <a href="thanh-vien/144381.html">
                            <img src="../i2.docln.net/ln/users/avatars/u144381-4effdbb8-899a-4e95-9098-d23644527286.jpg">
                        </a>
                    </div>
                    <div class="comment-info">
                        <div class="comment-top">
                            <a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoi0b5e.html?comment_id=2560842&amp;reply_id=2560902#ln-comment-2560902" rel="nofollow" class="comment-user_name strong">RomcomLàĐamMê</a>
                            <small class="comment-location">
                                <a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoi0b5e.html?comment_id=2560842&amp;reply_id=2560902#ln-comment-2560902">   
                                    <time class="timeago" title="23-08-2024 00:19:26" datetime="2024-08-23T00:19:26+07:00">
                                        23-08-2024 00:19:26
                                    </time>
                                </a>    
                            </small> 
                        </div>
                                                
                        <div class="comment-content">
                            @Perucia Shunya: lộ liễu quá anh ơi :)
                        </div>
                
                        <span class="series-name"><a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoi0b5e.html?comment_id=2560842&amp;reply_id=2560902#ln-comment-2560902">Nữ Thần Lớp Tôi Có Gì Đó Lạ Lắm.</a></span>
                    </div>                                                          
                </div>                                                            <div class="comment-item">
                        <div class="comment-user_ava">
                        <a href="thanh-vien/144381.html">
                            <img src="../i2.docln.net/ln/users/avatars/u144381-4effdbb8-899a-4e95-9098-d23644527286.jpg">
                        </a>
                    </div>
                    <div class="comment-info">
                        <div class="comment-top">
                            <a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoid649.html?comment_id=2560842&amp;reply_id=2560900#ln-comment-2560900" rel="nofollow" class="comment-user_name strong">RomcomLàĐamMê</a>
                            <small class="comment-location">
                                <a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoid649.html?comment_id=2560842&amp;reply_id=2560900#ln-comment-2560900">   
                                    <time class="timeago" title="23-08-2024 00:17:15" datetime="2024-08-23T00:17:15+07:00">
                                        23-08-2024 00:17:15
                                    </time>
                                </a>    
                            </small> 
                        </div>
                                                
                        <div class="comment-content">
                            @Perucia Shunya: 
                =)
                        </div>
                
                        <span class="series-name"><a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoid649.html?comment_id=2560842&amp;reply_id=2560900#ln-comment-2560900">Nữ Thần Lớp Tôi Có Gì Đó Lạ Lắm.</a></span>
                    </div>                                                          
                </div>                                                            <div class="comment-item">
                        <div class="comment-user_ava">
                        <a href="thanh-vien/124404.html">
                            <img src="../i.docln.net/lightnovel/users/ua124404-96ea7862-0690-4d90-915f-40687108889b.jpg">
                        </a>
                    </div>
                    <div class="comment-info">
                        <div class="comment-top">
                            <a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoif9f6.html?comment_id=2560842&amp;reply_id=2560899#ln-comment-2560899" rel="nofollow" class="comment-user_name strong">Perucia Shunya</a>
                            <small class="comment-location">
                                <a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoif9f6.html?comment_id=2560842&amp;reply_id=2560899#ln-comment-2560899">   
                                    <time class="timeago" title="23-08-2024 00:16:28" datetime="2024-08-23T00:16:28+07:00">
                                        23-08-2024 00:16:28
                                    </time>
                                </a>    
                            </small> 
                        </div>
                                                
                        <div class="comment-content">
                            Mel bel tik mc donald
                        </div>
                
                        <span class="series-name"><a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoif9f6.html?comment_id=2560842&amp;reply_id=2560899#ln-comment-2560899">Nữ Thần Lớp Tôi Có Gì Đó Lạ Lắm.</a></span>
                    </div>                                                          
                </div>                                                            <div class="comment-item">
                        <div class="comment-user_ava">
                        <a href="thanh-vien/144381.html">
                            <img src="../i2.docln.net/ln/users/avatars/u144381-4effdbb8-899a-4e95-9098-d23644527286.jpg">
                        </a>
                    </div>
                    <div class="comment-info">
                        <div class="comment-top">
                            <a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoi41bc.html?comment_id=2560842#ln-comment-2560842" rel="nofollow" class="comment-user_name strong">RomcomLàĐamMê</a>
                            <small class="comment-location">
                                <a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoi41bc.html?comment_id=2560842#ln-comment-2560842">   
                                    <time class="timeago" title="22-08-2024 23:27:32" datetime="2024-08-22T23:27:32+07:00">
                                        22-08-2024 23:27:32
                                    </time>
                                </a>    
                            </small> 
                        </div>
                                                
                        <div class="comment-content">
                            Đói cần mèo mập mớm chap cho ăn :)
                        </div>
                
                        <span class="series-name"><a href="sang-tac/13957-nu-than-ma-toi-biet-duong-nhu-khac-voi-moi-nguoi41bc.html?comment_id=2560842#ln-comment-2560842">Nữ Thần Lớp Tôi Có Gì Đó Lạ Lắm.</a></span>
                    </div>                                                          
                </div>                                                            <div class="comment-item">
                        <div class="comment-user_ava">
                        <a href="thanh-vien/42948.html">
                            <img src="../i.docln.net/lightnovel/users/ua42948-cb4287f2-17e1-476a-a21c-653f5e485487.jpg">
                        </a>
                    </div>
                    <div class="comment-info">
                        <div class="comment-top">
                            <a href="sang-tac/15553-hai-canh-cua50aa.html?comment_id=2560633#ln-comment-2560633" rel="nofollow" class="comment-user_name strong">Teeheee</a>
                            <small class="comment-location">
                                <a href="sang-tac/15553-hai-canh-cua50aa.html?comment_id=2560633#ln-comment-2560633">   
                                    <time class="timeago" title="22-08-2024 21:39:17" datetime="2024-08-22T21:39:17+07:00">
                                        22-08-2024 21:39:17
                                    </time>
                                </a>    
                            </small> 
                        </div>
                                                
                        <div class="comment-content">
                            Ui xời, cắt gần 1k chữ ở chương 2, quá đã! Gọt chữ cứ phải gọi là như gọt táo!
                        </div>
                
                        <span class="series-name"><a href="sang-tac/15553-hai-canh-cua50aa.html?comment_id=2560633#ln-comment-2560633">Hai Cánh Cửa</a></span>
                    </div>                                                          
                </div>                                                            <div class="comment-item">
                        <div class="comment-user_ava">
                        <a href="thanh-vien/180462.html">
                            <img src="../i2.docln.net/ln/users/avatars/u180462-7cb82cd0-97dc-4243-9009-634ef6a60c7e.jpg">
                        </a>
                    </div>
                    <div class="comment-info">
                        <div class="comment-top">
                            <a href="sang-tac/18994-tho-san-bong-toif9c0.html?comment_id=2560584&amp;reply_id=2560589#ln-comment-2560589" rel="nofollow" class="comment-user_name strong">Cáo phù thủy</a>
                            <small class="comment-location">
                                <a href="sang-tac/18994-tho-san-bong-toif9c0.html?comment_id=2560584&amp;reply_id=2560589#ln-comment-2560589">   
                                    <time class="timeago" title="22-08-2024 21:18:43" datetime="2024-08-22T21:18:43+07:00">
                                        22-08-2024 21:18:43
                                    </time>
                                </a>    
                            </small> 
                        </div>
                                                
                        <div class="comment-content">
                            Thiệt đọc truyện mà tưởng như đang học sử không
                        </div>
                
                        <span class="series-name"><a href="sang-tac/18994-tho-san-bong-toif9c0.html?comment_id=2560584&amp;reply_id=2560589#ln-comment-2560589">Thợ săn bóng tối</a></span>
                    </div>                                                          
                </div>                                                            <div class="comment-item">
                        <div class="comment-user_ava">
                        <a href="thanh-vien/170343.html">
                            <img src="../i2.docln.net/ln/users/avatars/u170343-065e3fae-ed09-4bbb-a142-97bb57967083.jpg">
                        </a>
                    </div>
                    <div class="comment-info">
                        <div class="comment-top">
                            <a href="sang-tac/18994-tho-san-bong-toi68a1.html?comment_id=2560584#ln-comment-2560584" rel="nofollow" class="comment-user_name strong">KishouArima</a>
                            <small class="comment-location">
                                <a href="sang-tac/18994-tho-san-bong-toi68a1.html?comment_id=2560584#ln-comment-2560584">   
                                    <time class="timeago" title="22-08-2024 21:16:06" datetime="2024-08-22T21:16:06+07:00">
                                        22-08-2024 21:16:06
                                    </time>
                                </a>    
                            </small> 
                        </div>
                                                
                        <div class="comment-content">
                            Làm t nhớ đến thời cày môn sử ghê
                        </div>
                
                        <span class="series-name"><a href="sang-tac/18994-tho-san-bong-toi68a1.html?comment_id=2560584#ln-comment-2560584">Thợ săn bóng tối</a></span>
                    </div>                                                          
                </div>                                                        </div>
                                        </section>
                                    </div>
                                    
                                    <div class="col-12 col-md-6 col-lg-12">
                                        <section id="ln-topview" class="sub-index-style">
                                            <div class="title-wrapper">
                                                <div class="section-title">Xem nhiều</div>
                                            </div>
                                            <div class="section-content">
                                                                                                                <article class="topview-item">
                                                    <div class="topview_rank">01</div>
                                                    <div class="topview_name">
                                                        <h5 class="series-name"><a href="sang-tac/8476-kiep-nay-la-anh-trai-cua-nhan-vat-chinh.html">Anh Trai Nhân Vật Chính</a></h5>
                                                        <small class="ranked-attr">1.042.759</small>
                                                    </div>
                                                </article>
                                                                                <article class="topview-item">
                                                    <div class="topview_rank">02</div>
                                                    <div class="topview_name">
                                                        <h5 class="series-name"><a href="sang-tac/4638-useless-hero-from-another-world.html">Useless Hero from Another World</a></h5>
                                                        <small class="ranked-attr">955.278</small>
                                                    </div>
                                                </article>
                                                                                <article class="topview-item">
                                                    <div class="topview_rank">03</div>
                                                    <div class="topview_name">
                                                        <h5 class="series-name"><a href="sang-tac/14076-nhan-vat-phan-dien-hang-ba-muon-duoc-song-yen-binh.html">Nhân Vật Phản Diện Hạng Ba Muốn Được Sống Yên Bình</a></h5>
                                                        <small class="ranked-attr">843.188</small>
                                                    </div>
                                                </article>
                                                                                <article class="topview-item">
                                                    <div class="topview_rank">04</div>
                                                    <div class="topview_name">
                                                        <h5 class="series-name"><a href="sang-tac/481-ngai-vang-cua-hoang-de.html">Ngai Vàng Của Hoàng Đế</a></h5>
                                                        <small class="ranked-attr">782.090</small>
                                                    </div>
                                                </article>
                                                                                <article class="topview-item">
                                                    <div class="topview_rank">05</div>
                                                    <div class="topview_name">
                                                        <h5 class="series-name"><a href="sang-tac/2980-huyen-thoai-co-ngoc.html">Huyền Thoại Cổ Ngọc</a></h5>
                                                        <small class="ranked-attr">538.824</small>
                                                    </div>
                                                </article>
                                                
                                                <div class="see-more_text">
                    <a href="oln-xem-nhieu-nhat/tat-ca.html"><i class="fas fa-hand-o-right"></i> Xem thêm</a>
                </div>                              </div>
                                            
                                        </section>
                                        <section class="sub-index-style"> 
                                            <div class="title-wrapper">
                                                <div class="section-title">Truyện sáng tác mới</div>
                                            </div>                    
                                            <div class="section-content">                            
                                                <ul class="others-list">
                                                                                        <li>
                                                        <div class="others-img no-padding">
                                                            <div class="a6-ratio">
                                                                <div class="content img-in-ratio" style="background-image: url('img/nocover.jpg')">
                                                                </div>
                                                            </div>
                                                        </div>    
                                                        <div class="others-info">
                                                            <h5 class="others-name"><a href="sang-tac/19009-chien-giap-than-toc.html">Chiến Giáp Thần tốc</a></h5>
                                                            <small class="series-summary">Cùng phiêu lưu với Sokudo Kamaza, cậu bé với trái tim dũng cảm và đôi ch...</small>
                                                        </div>    
                                                    </li>
                                                                                        <li>
                                                        <div class="others-img no-padding">
                                                            <div class="a6-ratio">
                                                                <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s19006-7a98cfc5-61e7-48ba-ad28-fd53a6927c14.jpg')">
                                                                </div>
                                                            </div>
                                                        </div>    
                                                        <div class="others-info">
                                                            <h5 class="others-name"><a href="sang-tac/19006-giac-mo-cua-nhung-anh-hung-hi-vong.html">Giấc mơ của những anh hùng hi vọng</a></h5>
                                                            <small class="series-summary">- Hi vọng, hi vọng thật mong manh nhưng các người lại quá tham vọng về n...</small>
                                                        </div>    
                                                    </li>
                                                                                        <li>
                                                        <div class="others-img no-padding">
                                                            <div class="a6-ratio">
                                                                <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18996-3116ffce-5ce6-4ef1-8c53-e8f9c22299c1.jpg')">
                                                                </div>
                                                            </div>
                                                        </div>    
                                                        <div class="others-info">
                                                            <h5 class="others-name"><a href="sang-tac/18996-respectre.html">Re/Spectre</a></h5>
                                                            <small class="series-summary">Ma quỷ, linh hồn, yokai, và những cô gái dễ thương đầy quyến rũ, nhưng k...</small>
                                                        </div>    
                                                    </li>
                                                                                        <li>
                                                        <div class="others-img no-padding">
                                                            <div class="a6-ratio">
                                                                <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18994-7e53a397-b52f-445c-99ca-10f1af84a027.jpg')">
                                                                </div>
                                                            </div>
                                                        </div>    
                                                        <div class="others-info">
                                                            <h5 class="others-name"><a href="sang-tac/18994-tho-san-bong-toi.html">Thợ săn bóng tối</a></h5>
                                                            <small class="series-summary">Hãy đặt lời thề của ngươi trước các thánh nhân, quỳ lạy trước những vị t...</small>
                                                        </div>    
                                                    </li>
                                                                                        <li>
                                                        <div class="others-img no-padding">
                                                            <div class="a6-ratio">
                                                                <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18991-fa541d03-a145-4179-a298-8ea42dd7727e.jpg')">
                                                                </div>
                                                            </div>
                                                        </div>    
                                                        <div class="others-info">
                                                            <h5 class="others-name"><a href="sang-tac/18991-davay-idi.html">Davay Idi</a></h5>
                                                            <small class="series-summary">Câu truyện kể về hành trình sinh tồn ở thế giới mới của một người lính X...</small>
                                                        </div>    
                                                    </li>
                                                                                    </ul>                        
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
@endsection