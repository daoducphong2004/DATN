@extends('partials.sidebar')
@section('pandemic');
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
            <main id="mainpart" class="orinovel-page convert-type">
                <header class="page-title">
                    <div class="page-name_wrapper">
                        <div class="container">
                            <span class="page-name"><a href="convert.html"><i class="fas fa-circle"></i>Convert (Máy dịch)</a></span>
                        </div>
                    </div>
                </header>
                
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <section id="ln-newest" class="detail-list has-pagination">
                                                <header class="section-title"><span>Mới cập nhật</span></header> 
                                <main class="sect-body">  
                                                        
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="convert/18854-engoku-no-bara-hime-seiji-no-tsugou-de-korosaremashita-ga-saikyou-no-undead-toshite-yomigaerimashita.html">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18854-42e6ca65-ee63-451d-8669-8ae006dd9021.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="convert/18854-engoku-no-bara-hime-seiji-no-tsugou-de-korosaremashita-ga-saikyou-no-undead-toshite-yomigaerimashita.html">Engoku no Bara Hime: Seiji no Tsugou de Korosaremashita ga Saikyou no Undead Toshite Yomigaerimashita</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/36153.html">Owari</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>65,736</a></span></div>
                                        </div>
                                        <div class="series-summary">Tại vương quốc nhỏ Ciel-Terra, một cuộc đảo chính đã xảy ra khi em trai của quốc vương đã đảo chính cướp ngôi, được sự hậu thuẫn của bốn cường quốc, đã giết anh trai mình và cướp ngôi vua.
            Rene, vào ngày sinh nhật 10 tuổi, bị bắt bởi một hiệp sĩ thuộc phe em trai nhà vua và biết được rằng mình là cô...</div>
                                        <div class="lastest-chapter">
                                                                            <a href="convert/18854-engoku-no-bara-hime-seiji-no-tsugou-de-korosaremashita-ga-saikyou-no-undead-toshite-yomigaerimashita/c141491-1-30-phi-ly-vs-phi-ly.html">[1-30] Phi lý vs Phi lý</a>
                                            <small>Phần 1: Sự sụp đổ của Ciel-Terra</small>
                                        </div>
                                    </div>
                                </article>
            
                                                                            
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="convert/18864-destiny-unchain-online.html">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18864-6abce471-b60f-4136-9164-6cc18cb0021c.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="convert/18864-destiny-unchain-online.html">Destiny Unchain Online</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/175855.html">Phuthanh2020</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>241,702</a></span></div>
                                        </div>
                                        <div class="series-summary">Trong tương lai gần, công nghệ Thực tế ảo toàn diện sẽ được sử dụng phổ biến trong cuộc sống hàng ngày.
            Mitsuki Kou được cha mình, nhà phát triển của VRMMORPG mới “Destiny Unchain Online”, một game có hệ thống kỹ năng ưu tiên khả năng của người chơi và chế độ chơi đấu với người chơi hơn là tăng cấp,...</div>
                                        <div class="lastest-chapter">
                                                                            <a href="convert/18864-destiny-unchain-online/c141418-dinh-huong-o-dao-kanai.html">Định hướng ở đảo Kanai</a>
                                            <small>Tập 7</small>
                                        </div>
                                    </div>
                                </article>
            
                                                                            
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="convert/18908-ai-ni-korosareta-bokutachi-wa.html">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18908-133233d4-5345-4c4f-bdd4-6dc463e99007.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="convert/18908-ai-ni-korosareta-bokutachi-wa.html">Chúng ta, những kẻ chết vì tình yêu</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/173017.html">Kevinn</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>63,339</a></span></div>
                                        </div>
                                        <div class="series-summary">Chúng tôi đã lập kế hoạch giết người vào một mùa hè.
            Để lừa gạt tiền bạc nuôi dưỡng người yêu, trở thành mục tiêu trong kế hoạch giết người để nhận bảo hiểm của mẹ kế, học sinh trung học · Kurokawa Ryouki.
            Vì tình yêu buông thả của cha mà bị ngược đãi, chờ đợi cái chết của chính mình, cô gái · Aizak...</div>
                                        <div class="lastest-chapter">
                                                                            <a href="convert/18908-ai-ni-korosareta-bokutachi-wa/c141402-chuong-14.html">Chương 14</a>
                                            <small>Toàn tập</small>
                                        </div>
                                    </div>
                                </article>
            
                                                                            
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="convert/18852-imouto-life.html">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18852-d84436ca-20c1-4160-9a9e-0a5b5e94ff6b.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="convert/18852-imouto-life.html">Imouto Life</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/140755.html">Eliaso</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>123,754</a></span></div>
                                        </div>
                                        <div class="series-summary">Kỳ nghỉ hè kết thúc, em gái khóc lóc tìm tôi cầu cứu. Đó là chuyện khi em sáu tuổi, tôi mười tuổi.
            Hiếm khi em gái chủ động lại gần tôi, trên tay cầm cuốn nhật ký vẽ. "Giúp em..."
            Vừa chạm mắt với tôi, em gái đã run rẩy đưa cuốn nhật ký cho tôi, nhỏ giọng nói như vậy.
            Tôi nghĩ, mối quan hệ của tôi v...</div>
                                        <div class="lastest-chapter">
                                                                            <a href="convert/18852-imouto-life/c141292-hau-ky.html">Hậu ký</a>
                                            <small>Phần sau</small>
                                        </div>
                                    </div>
                                </article>
            
                                                                            
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="convert/18871-tuyet-vong-vi-that-tinh-toi-quyet-dinh-tro-thanh-mot-vtuber-vang-danh.html">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18871-adf2b4c4-3391-44b0-9048-fc5b74c92d1c.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="convert/18871-tuyet-vong-vi-that-tinh-toi-quyet-dinh-tro-thanh-mot-vtuber-vang-danh.html">Tuyệt vọng vì thất tình, tôi quyết định trở thành một Vtuber vang danh</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/197873.html">kwoami</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>2,911</a></span></div>
                                        </div>
                                        <div class="series-summary">Quá sốc sau khi biết bà chị tiền bối cùng câu lạc bộ mà mình thầm thích đã có người thương, thanh niên Yuki Himemura nhà ta quyết định sẽ trở thành một Vtuber - thứ mà cậu và cô chị kia đã luôn ngưỡng mộ.
             
            Vậy nên, cậu đã đổ hết chỗ tiền tiết kiệm để đầu tư trang thiết bị cần thiết cũng như avatar...</div>
                                        <div class="lastest-chapter">
                                                                            <a href="convert/18871-tuyet-vong-vi-that-tinh-toi-quyet-dinh-tro-thanh-mot-vtuber-vang-danh/c141234-chuong-36-dien-dan-internet-thu-nghiem.html">chương 36 diễn đàn internet (thử nghiệm)</a>
                                            <small>Vol 4: Cùng đi Comiket Nào ! (Tiếp tục)</small>
                                        </div>
                                    </div>
                                </article>
            
                                                                            
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="convert/18909-ore-no-imouto-ga-saikou-no-okazudatta.html">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18909-7a1954d3-a336-47a1-b202-c4c07836e9a1.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="convert/18909-ore-no-imouto-ga-saikou-no-okazudatta.html">Ore no Imouto ga Saikou no Okazudatta</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/140755.html">Eliaso</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>6,650</a></span></div>
                                        </div>
                                        <div class="series-summary">Một ngày nọ, khi tôi đang chơi trò chơi khiêu dâm thì bị em gái bắt gặp. Em gái thường không nói chuyện với tôi, và tôi nghĩ chắc chắn mình sẽ bị la mắng. Nhưng thay vì thế, em gái lại nói một câu hoàn toàn bất ngờ:
            'Có muốn em giúp đỡ để xin lỗi không?'</div>
                                        <div class="lastest-chapter">
                                                                            <a href="convert/18909-ore-no-imouto-ga-saikou-no-okazudatta/c141198-chuong-2-su-kien-dinh-va-trong-nghia.html">Chương 2: Sự kiên định và trọng nghĩa</a>
                                            <small>Web novel</small>
                                        </div>
                                    </div>
                                </article>
            
                                                                            
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="convert/18825-huyet-co-va-ky-si.html">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18825-87db1189-f464-4e9c-b901-41a700d2500f.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="convert/18825-huyet-co-va-ky-si.html">Huyết Cơ Và Kỵ Sĩ</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/175855.html">Phuthanh2020</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>302,375</a></span></div>
                                        </div>
                                        <div class="series-summary">Là một hiệp sĩ, tôi đã thua và bị bắt trong một cuộc chạm trán với ma cà rồng. "A, để ngươi chết? Nghĩ thật đẹp, chấp nhận cái ôm đầu tiên của ta, trong tương lai, hãy cho ta nhiều lời khuyên hơn ~ con gái yêu của ta." Nữ hoàng máu tóc bạc loli nhẹ nhàng nâng cằm tôi lên, cười tinh nghịch và chĩa ră...</div>
                                        <div class="lastest-chapter">
                                                                            <a href="convert/18825-huyet-co-va-ky-si/c141125-ky-ucbach-co-sau-lan-om-dau-tien-10.html">Ký ức~Bạch Cơ sau lần ôm đầu tiên 10</a>
                                            <small>Tập Ngoại truyện</small>
                                        </div>
                                    </div>
                                </article>
            
                                                                            
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="convert/18942-y-kien-ca-nhan-cua-dau-hoang.html">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18942-65b806e4-3d88-4e45-8b01-b2a6d1619877.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="convert/18942-y-kien-ca-nhan-cua-dau-hoang.html">Ý kiến cá nhân của Đấu hoàng</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/175855.html">Phuthanh2020</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>5,834</a></span></div>
                                        </div>
                                        <div class="series-summary">Mọi người đều là phàm nhân, và để giết ai đó, đạn là đủ. Đây là suy nghĩ cuối cùng còn sót lại trong đầu Jian Yun khi viên đạn nóng bỏng xuyên qua cơ thể anh. Anh luôn nói rằng khi cuộc đời sắp kết thúc, anh sẽ luôn nhớ lại những mảnh ghép của quá khứ, dù là những kỷ niệm quý giá hay những kỷ niệm t...</div>
                                        <div class="lastest-chapter">
                                                                            <a href="convert/18942-y-kien-ca-nhan-cua-dau-hoang/c141049-chuong-03.html">Chương 03</a>
                                            <small>Tập 1 (Phần 1)</small>
                                        </div>
                                    </div>
                                </article>
            
                                                                            
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="convert/18781-boku-wo-futta-oshiego-ga-1-shuukan-gotoni-dere-tekuru-rabukome.html">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18781-9f94eeb3-20d5-4171-b3e0-33821e1ac1b7.jpg')">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="detail-list-detail">
                                        <h4 class="series-title text-xl font-bold">
                                            <a href="convert/18781-boku-wo-futta-oshiego-ga-1-shuukan-gotoni-dere-tekuru-rabukome.html">Boku wo Futta Oshiego ga, 1-shuukan Goto ni Deretekuru Love Comedy</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/179165.html">Chí mạng</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>145,376</a></span></div>
                                        </div>
                                        <div class="series-summary">Anh không được thích em đâu đấy!
            Vào tháng 3 của năm ba sơ trung, tôi, Wakabano Eito, đã tỏ tình sau khi đỗ vào ngôi trường cao trung mà mình mong muốn. Với người con gái mà tôi gặp ở trường luyện thi, nhỏ hơn tôi một tuổi. Đó là ký ức về mối tình đầu đầy cay đắng của tôi――.
            Bị ám ảnh bởi chấn thươn...</div>
                                        <div class="lastest-chapter">
                                                                            <a href="convert/18781-boku-wo-futta-oshiego-ga-1-shuukan-gotoni-dere-tekuru-rabukome/c140873-thang-4-tuong-lai-moi-cua-hinata2.html">Tháng 4 : Tương lai mới của Hinata(2)</a>
                                            <small>Tập 02</small>
                                        </div>
                                    </div>
                                </article>
            
                                                                            
                                <article class="detail-list-item">
                                    <div class="cover-wrapper">
                                        <a href="convert/18911-chuyen-sinh-thanh-lap-trinh-vien-toi-hoc-lam-game.html">
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
                                            <a href="convert/18911-chuyen-sinh-thanh-lap-trinh-vien-toi-hoc-lam-game.html">tôi học làm game.</a>
                                        </h4>
                                        <div class="sub-attr">
                                            <div class="sub-attr-item"><span class="attr-name">Người đăng</span><a href="thanh-vien/198869.html">ri_do_do</a></div>
                                            <div class="sub-attr-item"><span class="attr-name">Số từ</span>2,303</a></span></div>
                                        </div>
                                        <div class="series-summary">Hãy tưởng tượng bạn đang bước vào một khu rừng đầy bí ẩn, nơi mọi thứ đều được hình thành từ những khối hình học đơn giản, nhưng mỗi bước đi lại mở ra một thế giới kỳ diệu khác nhau. Giống như một cánh cửa dẫn vào khu rừng ấy, là nơi mà mọi ước mơ, tưởng tượng có thể trở thành hiện thực bởi chính bạ...</div>
                                        <div class="lastest-chapter">
                                                                            <a href="convert/18911-chuyen-sinh-thanh-lap-trinh-vien-toi-hoc-lam-game/c140792-chuong-01-check-upload.html">Chương 01 làm quen</a>
                                            <small>Tập 01  bắt đầu mọi thứ nào .</small>
                                        </div>
                                    </div>
                                </article>
            
                                                                        </main>                  
                                <div class="pagination-footer">
                    <div class="pagination_wrap">
                        <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
                        <a href="convert2679.html?page=1" class="paging_item paging_prevnext prev  disabled ">Đầu</a>
                        
                                    <a href="convert2679.html?page=1" class="paging_item page_num  current ">1</a>
                                    <a href="convert4658.html?page=2" class="paging_item page_num ">2</a>
                                    <a href="convert9ba9.html?page=3" class="paging_item page_num ">3</a>
                                    <a href="convertfdb0.html?page=4" class="paging_item page_num ">4</a>
                                    <a href="convertaf4d.html?page=5" class="paging_item page_num ">5</a>
                        
                        <!--<a href=" https://docln.net/convert?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
                        <a href="convert1d82.html?page=24" class="paging_item paging_prevnext next ">Cuối</a>
                    </div>
                </div>
                                </section>
                        </div>
            
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <section class="sub-index-style sub-index-introduce">
                                        <div class="title-wrapper">
                                            <div class="section-title">Giới thiệu truyện</div>
                                        </div>
                                        <div class="section-content">
                                            <div class="series-cover">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18302-b427ea2a-6f7b-4146-b387-cb66113429a3.jpg')"></div>
                                                </div>
                                            </div>
                                            <div class="series-information">
                                                <h3 class="series-title"><a href="convert/18302-tham-gia-buoi-tiec-hen-ho-cho-du-nguoi-chang-hieu-sao-toi-lai-mang-ve-mot-cuu-than-tuong-noi-tieng-nguoi-tung-la-quoc-bao-gioi-giai-tri-mot-thoi-nay-lai-tro-thanh-hang-thua.html">Ninzuu Awase de Goukon ni Sanka Shita Ore wa, Naze ka Amarimono ni Natteta Moto Ninki Idol de Kokuhoukyuu no Bishoujo wo Omochi Kaeri Shimashita</a></h3>
                                                <div class="series-summary">Một bộ phim hài tình yêu đầy cảm hứng bắt đầu từ buổi hẹn hò giao lưu!
            Trong đội bóng đá của cùng một trường đại học, chàng trai đào hoa Seiichi Azaki...</div>                 
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
                    <a href="thanh-vien/167983.html">
                        <img src="img/noava.png">
                    </a>
                </div>
                <div class="comment-info">
                    <div class="comment-top">
                        <a href="convert/18825-huyet-co-va-ky-sif0e4.html?comment_id=2550255&amp;reply_id=2560941#ln-comment-2560941" rel="nofollow" class="comment-user_name strong">Gin Xeno</a>
                        <small class="comment-location">
                            <a href="convert/18825-huyet-co-va-ky-sif0e4.html?comment_id=2550255&amp;reply_id=2560941#ln-comment-2560941">   
                                <time class="timeago" title="23-08-2024 01:09:38" datetime="2024-08-23T01:09:38+07:00">
                                    23-08-2024 01:09:38
                                </time>
                            </a>    
                        </small> 
                    </div>
                                            
                    <div class="comment-content">
                        @Ye Yao: có con nhé.
                    </div>
            
                    <span class="series-name"><a href="convert/18825-huyet-co-va-ky-sif0e4.html?comment_id=2550255&amp;reply_id=2560941#ln-comment-2560941">Huyết Cơ Và Kỵ Sĩ</a></span>
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
                                                    <h5 class="series-name"><a href="convert/5140-otonari-no-tenshi-sama-ni-itsu-no-aida-ni-ka-dame-ningen-ni-sareteiru-ken.html">Otonari no Tenshi-sama ni Itsu no Aida ni ka Dame Ningen ni Sareteiru ken</a></h5>
                                                    <small style="display: block; opacity: 0.6;">1.348.046</small>
                                                </div>
                                            </article>
                                                                            <article class="topview-item">
                                                <div class="topview_rank">02</div>
                                                <div class="topview_name">
                                                    <h5 class="series-name"><a href="convert/6260-ankoku-kishi-monogatari.html">Ankoku kishi monogatari~Yuusha wo taosu tameni Maou ni Shoukansaremashita~</a></h5>
                                                    <small style="display: block; opacity: 0.6;">926.334</small>
                                                </div>
                                            </article>
                                                                            <article class="topview-item">
                                                <div class="topview_rank">03</div>
                                                <div class="topview_name">
                                                    <h5 class="series-name"><a href="convert/737-after-transformation-mine-and-her-wild-fantasy.html">AFTER TRANSFORMATION, MINE AND HER WILD FANTASY</a></h5>
                                                    <small style="display: block; opacity: 0.6;">831.534</small>
                                                </div>
                                            </article>
                                                                            <article class="topview-item">
                                                <div class="topview_rank">04</div>
                                                <div class="topview_name">
                                                    <h5 class="series-name"><a href="convert/4-date-a-live.html">Date a Live</a></h5>
                                                    <small style="display: block; opacity: 0.6;">814.679</small>
                                                </div>
                                            </article>
                                                                            <article class="topview-item">
                                                <div class="topview_rank">05</div>
                                                <div class="topview_name">
                                                    <h5 class="series-name"><a href="convert/128-kono-subarashii-sekai-ni-shukufuku-o.html">Kono Subarashii Sekai Ni Shukufuku o!</a></h5>
                                                    <small style="display: block; opacity: 0.6;">631.265</small>
                                                </div>
                                            </article>
                                            
                                            <div class="see-more_text">
                <a href="convert-xem-nhieu-nhat/tat-ca.html"><i class="fas fa-hand-o-right"></i> Xem thêm</a>
            </div>                              </div>
                                        
                                    </section>
                                    <section class="sub-index-style"> 
                                        <div class="title-wrapper">
                                            <div class="section-title">Truyện convert mới</div>
                                        </div>                    
                                        <div class="section-content">                            
                                            <ul class="others-list">
                                                                                    <li>
                                                    <div class="others-img no-padding">
                                                        <div class="a6-ratio">
                                                            <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18942-65b806e4-3d88-4e45-8b01-b2a6d1619877.jpg')">
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="others-info">
                                                        <h5 class="others-name"><a href="convert/18942-y-kien-ca-nhan-cua-dau-hoang.html">Ý kiến cá nhân của Đấu hoàng</a></h5>
                                                        <small class="series-summary">Mọi người đều là phàm nhân, và để giết ai đó, đạn là đủ. Đây là suy nghĩ...</small>
                                                    </div>    
                                                </li>
                                                                                    <li>
                                                    <div class="others-img no-padding">
                                                        <div class="a6-ratio">
                                                            <div class="content img-in-ratio" style="background-image: url('img/nocover.jpg')">
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="others-info">
                                                        <h5 class="others-name"><a href="convert/18911-chuyen-sinh-thanh-lap-trinh-vien-toi-hoc-lam-game.html">tôi học làm game.</a></h5>
                                                        <small class="series-summary">Hãy tưởng tượng bạn đang bước vào một khu rừng đầy bí ẩn, nơi mọi thứ đề...</small>
                                                    </div>    
                                                </li>
                                                                                    <li>
                                                    <div class="others-img no-padding">
                                                        <div class="a6-ratio">
                                                            <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18909-7a1954d3-a336-47a1-b202-c4c07836e9a1.jpg')">
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="others-info">
                                                        <h5 class="others-name"><a href="convert/18909-ore-no-imouto-ga-saikou-no-okazudatta.html">Ore no Imouto ga Saikou no Okazudatta</a></h5>
                                                        <small class="series-summary">Một ngày nọ, khi tôi đang chơi trò chơi khiêu dâm thì bị em gái bắt gặp....</small>
                                                    </div>    
                                                </li>
                                                                                    <li>
                                                    <div class="others-img no-padding">
                                                        <div class="a6-ratio">
                                                            <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18908-133233d4-5345-4c4f-bdd4-6dc463e99007.jpg')">
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="others-info">
                                                        <h5 class="others-name"><a href="convert/18908-ai-ni-korosareta-bokutachi-wa.html">Chúng ta, những kẻ chết vì tình yêu</a></h5>
                                                        <small class="series-summary">Chúng tôi đã lập kế hoạch giết người vào một mùa hè.
            Để lừa gạt tiền bạc...</small>
                                                    </div>    
                                                </li>
                                                                                    <li>
                                                    <div class="others-img no-padding">
                                                        <div class="a6-ratio">
                                                            <div class="content img-in-ratio" style="background-image: url('../i2.docln.net/ln/series/covers/s18905-3749e115-7d42-410f-8cb8-b335dff8d0e2.jpg')">
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="others-info">
                                                        <h5 class="others-name"><a href="convert/18905-excalibur-chronicle-of-raidorl-wn.html">Excalibur Chronicle of Raidorl (WN)</a></h5>
                                                        <small class="series-summary">Raidorl Zain sinh ra và lớn lên với tư cách là một vị hoàng tử thứ hai c...</small>
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