@extends('partials.sidebar')
@section('list');
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
                                <li><input type="checkbox" name="truyendich" value="1" checked> Truyện dịch</li>
                                <li><input type="checkbox" name="sangtac" value="1" > Truyện sáng tác</li>
                                <li><input type="checkbox" name="convert" value="1" > Convert</li>
                            </ul>
                            <div class="submit-wrapper">
                                <input type="submit" class="button bg-green-600 text-white hover:bg-green-700" value="Áp dụng">
                            </div>
                        </div>
                    </section>
                    
                                        <section class="sub-index-style filter-section">
                        <div class="title-wrapper">
                            <div class="section-title">Tình trạng</div>
                        </div>
                        <div class="section-content">
                        <ul class="filter-type unstyled">
                            <li><input type="checkbox" name="dangtienhanh" value="1" checked> Đang tiến hành</li>
                            <li><input type="checkbox" name="tamngung" value="1" checked> Tạm ngưng</li>
                            <li><input type="checkbox" name="hoanthanh" value="1" checked> Đã hoàn thành</li>
                        </ul>
                        <div class="submit-wrapper">
                            <input type="submit" class="button bg-green-600 text-white hover:bg-green-700" value="Áp dụng">
                        </div>
                        </div>
                    </section>
                        

                                        <section class="sub-index-style">
                        <div class="title-wrapper">
                            <div class="section-title">Phân loại</div>
                        </div>
                        <div class="section-content">
                            <ul class="filter-type unstyled clear">
                                                            <li class="filter-type_item"><a href="the-loai/action.html">Action</a>
                                                            <li class="filter-type_item"><a href="the-loai/adapted-to-anime.html">Adapted to Anime</a>
                                                            <li class="filter-type_item"><a href="the-loai/adapted-to-drama-cd.html">Adapted to Drama CD</a>
                                                            <li class="filter-type_item"><a href="the-loai/adapted-to-manga.html">Adapted to Manga</a>
                                                            <li class="filter-type_item"><a href="the-loai/adult.html">Adult</a>
                                                            <li class="filter-type_item"><a href="the-loai/adventure.html">Adventure</a>
                                                            <li class="filter-type_item"><a href="the-loai/age-gap.html">Age Gap</a>
                                                            <li class="filter-type_item"><a href="the-loai/boys-love.html">Boys Love</a>
                                                            <li class="filter-type_item"><a href="the-loai/character-growth.html">Character Growth</a>
                                                            <li class="filter-type_item"><a href="the-loai/chinese-novel.html">Chinese Novel</a>
                                                            <li class="filter-type_item"><a href="the-loai/comedy.html">Comedy</a>
                                                            <li class="filter-type_item"><a href="the-loai/cooking.html">Cooking</a>
                                                            <li class="filter-type_item"><a href="the-loai/different-social-status.html">Different Social Status</a>
                                                            <li class="filter-type_item"><a href="the-loai/drama.html">Drama</a>
                                                            <li class="filter-type_item"><a href="the-loai/ecchi.html">Ecchi</a>
                                                            <li class="filter-type_item"><a href="the-loai/english-novel.html">English Novel</a>
                                                            <li class="filter-type_item"><a href="the-loai/fantasy.html">Fantasy</a>
                                                            <li class="filter-type_item"><a href="the-loai/female-protagonist.html">Female Protagonist</a>
                                                            <li class="filter-type_item"><a href="the-loai/game.html">Game</a>
                                                            <li class="filter-type_item"><a href="the-loai/gender-bender.html">Gender Bender</a>
                                                            <li class="filter-type_item"><a href="the-loai/harem.html">Harem</a>
                                                            <li class="filter-type_item"><a href="the-loai/historical.html">Historical</a>
                                                            <li class="filter-type_item"><a href="the-loai/horror.html">Horror</a>
                                                            <li class="filter-type_item"><a href="the-loai/incest.html">Incest</a>
                                                            <li class="filter-type_item"><a href="the-loai/isekai.html">Isekai</a>
                                                            <li class="filter-type_item"><a href="the-loai/josei.html">Josei</a>
                                                            <li class="filter-type_item"><a href="the-loai/korean-novel.html">Korean Novel</a>
                                                            <li class="filter-type_item"><a href="the-loai/magic.html">Magic</a>
                                                            <li class="filter-type_item"><a href="the-loai/martial-arts.html">Martial Arts</a>
                                                            <li class="filter-type_item"><a href="the-loai/mature.html">Mature</a>
                                                            <li class="filter-type_item"><a href="the-loai/mecha.html">Mecha</a>
                                                            <li class="filter-type_item"><a href="the-loai/military.html">Military</a>
                                                            <li class="filter-type_item"><a href="the-loai/misunderstanding.html">Misunderstanding</a>
                                                            <li class="filter-type_item"><a href="the-loai/mystery.html">Mystery</a>
                                                            <li class="filter-type_item"><a href="the-loai/netorare.html">Netorare</a>
                                                            <li class="filter-type_item"><a href="the-loai/one-shot.html">One shot</a>
                                                            <li class="filter-type_item"><a href="the-loai/otome-game.html">Otome Game</a>
                                                            <li class="filter-type_item"><a href="the-loai/parody.html">Parody</a>
                                                            <li class="filter-type_item"><a href="the-loai/psychological.html">Psychological</a>
                                                            <li class="filter-type_item"><a href="the-loai/reverse-harem.html">Reverse Harem</a>
                                                            <li class="filter-type_item"><a href="the-loai/romance.html">Romance</a>
                                                            <li class="filter-type_item"><a href="the-loai/school-life.html">School Life</a>
                                                            <li class="filter-type_item"><a href="the-loai/science-fiction.html">Science Fiction</a>
                                                            <li class="filter-type_item"><a href="the-loai/seinen.html">Seinen</a>
                                                            <li class="filter-type_item"><a href="the-loai/shoujo.html">Shoujo</a>
                                                            <li class="filter-type_item"><a href="the-loai/shoujo-ai.html">Shoujo ai</a>
                                                            <li class="filter-type_item"><a href="the-loai/shounen.html">Shounen</a>
                                                            <li class="filter-type_item"><a href="the-loai/shounen-ai.html">Shounen ai</a>
                                                            <li class="filter-type_item"><a href="the-loai/slice-of-life.html">Slice of Life</a>
                                                            <li class="filter-type_item"><a href="the-loai/slow-life.html">Slow Life</a>
                                                            <li class="filter-type_item"><a href="the-loai/sports.html">Sports</a>
                                                            <li class="filter-type_item"><a href="the-loai/super-power.html">Super Power</a>
                                                            <li class="filter-type_item"><a href="the-loai/supernatural.html">Supernatural</a>
                                                            <li class="filter-type_item"><a href="the-loai/suspense.html">Suspense</a>
                                                            <li class="filter-type_item"><a href="the-loai/tragedy.html">Tragedy</a>
                                                            <li class="filter-type_item"><a href="the-loai/wars.html">Wars</a>
                                                            <li class="filter-type_item"><a href="the-loai/web-novel.html">Web Novel</a>
                                                            <li class="filter-type_item"><a href="the-loai/workplace.html">Workplace</a>
                                                            <li class="filter-type_item"><a href="the-loai/yuri.html">Yuri</a>
                                                        </ul>
                        </div>
                    </section>
                                    </div>
                
                <div class="col-12 float-left col-lg-9">
                        
                    
                    {{-- <section class="thumb-section-flow"> 
                        <header class="filter-container pad-bottom-10">
                            <button class="button button-general" type="submit" name="sapxep" value="tentruyen">
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
                            <button class="button button-general" type="submit" name="sapxep" value="top">
                                <i class="fa fa-fire" aria-hidden="true"></i> Top
                            </button>
                            <button class="button button-general type="submit" name="sapxep" value="topthang">
                                <i class="fa fa-fire" aria-hidden="true"></i> Top tháng
                            </button>  --> --}}
                            <select name="sapxep" onchange="this.form.submit()" class="block inline-m">
                                <option value="tentruyen" >A - Z</option>
                                <option value="tentruyenza" >Z - A</option>
                                <option value="capnhat" >Mới cập nhật</option>
                                <option value="truyenmoi" >Truyện mới</option>
                                <option value="theodoi" >Theo dõi</option>
                                <option value="top" >Top toàn thời gian</option>
                                <option value="topthang"  >Top tháng</option>
                                <option value="sotu"  >Số từ</option>
                            </select>
                            <div class="text-right inline-block-m right-m none-l">
                            <span class="button button-green js-call-filters-wrapper"><i class="fas fa-filter" style="margin-right: 10px;"></i>Bộ lọc</span>
                            </div>
                        </header>
                        <main class="row">           
                                                                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15056">
        <a href="truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c138630-chuong-03-tro-choc-gheo.html" title="Chương 03: Trò chọc ghẹo">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 03: Trò chọc ghẹo"><a href="truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta/c138630-chuong-03-tro-choc-gheo.html" title="Chương 03: Trò chọc ghẹo">Chương 03: Trò chọc ghẹo</a></div>
            <div class="thumb_attr volume-title">Vol 2</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/15056-kisu-nante-dekinai-deshoto-chouhatsu-suru-namaikina-osananajimi-wo-wakarasete-yattara-yosou-ijou-ni-dereta.html" title="&quot;Cậu chẳng thể hôn được đâu ha?&quot; Khi tôi khiến cho cô bạn thuở nhỏ luôn trêu chọc mình hiểu chuyện, cô ấy đột nhiên trở nên dễ thương hơn nhiều">&quot;Cậu chẳng thể hôn được đâu ha?&quot; Khi tôi khiến cho cô bạn thuở nhỏ luôn trêu chọc mình hiểu chuyện, cô ấy đột nhiên trở nên dễ thương hơn nhiều</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_15056">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            &quot;Cậu chẳng thể hôn được đâu ha?&quot; Khi tôi khiến cho cô bạn thuở nhỏ luôn trêu chọc mình hiểu chuyện, cô ấy đột nhiên trở nên dễ thương hơn nhiều
                                        </p>
                                        <p>
                                            <div>Số từ: 64.471</div>
                                            <div>Lượt xem: 413.199</div>
                                            <div>Lượt thích: 2.788</div>
                                        </p>
                                        
                                        "Sao chúng ta không... thử hôn nhỉ?"
Nam sinh cao trung năm hai, Kazami Ibuki, có một cô bạn thuở nhỏ tinh nghịch,
Cô gái được đồn đại là xinh đẹp nhất trường, với mái tóc vàng óng và đôi mắt xanh lam...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_12808">
        <a href="truyen/12808-dont-take-it-wrong-thats-what-my-childhood-friend-who-gave-me-love-chocolate-said-but-what-does-that-mean-dont-take-it-wrong/c99490-oneshot.html" title="Oneshot">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Oneshot"><a href="truyen/12808-dont-take-it-wrong-thats-what-my-childhood-friend-who-gave-me-love-chocolate-said-but-what-does-that-mean-dont-take-it-wrong/c99490-oneshot.html" title="Oneshot">Oneshot</a></div>
            <div class="thumb_attr volume-title">Oneshot</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/12808-dont-take-it-wrong-thats-what-my-childhood-friend-who-gave-me-love-chocolate-said-but-what-does-that-mean-dont-take-it-wrong.html" title="&quot;Don’t take it wrong!&quot; That&#039;s what my childhood friend who gave me love chocolate said, but what does that mean don&#039;t take it wrong!?">&quot;Don’t take it wrong!&quot; That&#039;s what my childhood friend who gave me love chocolate said, but what does that mean don&#039;t take it wrong!?</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_12808">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            &quot;Don’t take it wrong!&quot; That&#039;s what my childhood friend who gave me love chocolate said, but what does that mean don&#039;t take it wrong!?
                                        </p>
                                        <p>
                                            <div>Số từ: 1.215</div>
                                            <div>Lượt xem: 132.364</div>
                                            <div>Lượt thích: 119</div>
                                        </p>
                                        
                                        Câu chuyện về kẻ muốn nhận được sô-cô-la tình yêu vào ngày valentine, Hoshimi Akira và người đáp lại mong muốn của cậu, Kumosaki Karin hay cũng chính là bạn thủa nhỏ của cậu.
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_11923">
        <a href="truyen/11923-hay-lam-tnh-di-loi-cau-hon-den-ban-cung-lop-cua-toi-truoc-khi-co-ay-nhay-lau/c94496-chuong-02.html" title="Chương 02">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 02"><a href="truyen/11923-hay-lam-tnh-di-loi-cau-hon-den-ban-cung-lop-cua-toi-truoc-khi-co-ay-nhay-lau/c94496-chuong-02.html" title="Chương 02">Chương 02</a></div>
            <div class="thumb_attr volume-title">Web Novel</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/11923-hay-lam-tnh-di-loi-cau-hon-den-ban-cung-lop-cua-toi-truoc-khi-co-ay-nhay-lau.html" title="&quot;Hãy làm t*nh đi&quot; Lời cầu hôn đến bạn cùng lớp của tôi trước khi cô ấy nhảy lầu">&quot;Hãy làm t*nh đi&quot; Lời cầu hôn đến bạn cùng lớp của tôi trước khi cô ấy nhảy lầu</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_11923">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            &quot;Hãy làm t*nh đi&quot; Lời cầu hôn đến bạn cùng lớp của tôi trước khi cô ấy nhảy lầu
                                        </p>
                                        <p>
                                            <div>Số từ: 3.254</div>
                                            <div>Lượt xem: 232.997</div>
                                            <div>Lượt thích: 1.159</div>
                                        </p>
                                        
                                        Một ngày nọ, tôi phát hiện bạn cùng lớp xinh đẹp của tôi đang chuẩn bị tự tử. Cô ấy là người tôi yêu nhất và tôi sẽ không bao giờ để cô thực hiện điều đó.
Vậy nên tôi đã nói:
"Hãy làm t*nh với mình đi...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_3845">
        <a href="truyen/3845-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c54081-chuong-8-co-gai-dao-nghich-toa-sang-noi-bong-toi-ngu-tri.html" title="Chương 8: Cô gái đảo nghịch tỏa sáng nơi bóng tối ngự trị">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 8: Cô gái đảo nghịch tỏa sáng nơi bóng tối ngự trị"><a href="truyen/3845-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c54081-chuong-8-co-gai-dao-nghich-toa-sang-noi-bong-toi-ngu-tri.html" title="Chương 8: Cô gái đảo nghịch tỏa sáng nơi bóng tối ngự trị">Chương 8: Cô gái đảo nghịch tỏa sáng nơi bóng tối ngự trị</a></div>
            <div class="thumb_attr volume-title">Vol 01: Cô gái đảo nghịch từ chối lòng thương xót của Chúa</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/3845-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai.html" title="&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai">&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_3845">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            &quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai
                                        </p>
                                        <p>
                                            <div>Số từ: 43.149</div>
                                            <div>Lượt xem: 204.147</div>
                                            <div>Lượt thích: 561</div>
                                        </p>
                                        
                                        Đây là một câu chuyện kể về cô gái - người từng mang danh Anh Hùng - đi lên từ dưới đáy xã hội để quay trở về cuộc sống bình thường.
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_5091">
        <a href="truyen/5091-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c62750-chuong-04-di-thoi-toi-ngoi-lang-cua-su-tuyet-vong.html" title="Chương 04: Đi thôi, tới ngôi làng của sự tuyệt vọng.">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 04: Đi thôi, tới ngôi làng của sự tuyệt vọng."><a href="truyen/5091-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c62750-chuong-04-di-thoi-toi-ngoi-lang-cua-su-tuyet-vong.html" title="Chương 04: Đi thôi, tới ngôi làng của sự tuyệt vọng.">Chương 04: Đi thôi, tới ngôi làng của sự tuyệt vọng.</a></div>
            <div class="thumb_attr volume-title">ARC 02 : Nô lệ mang dấu ấn, mong muốn chuỗi ngày vô tận và sự kiểm soát</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/5091-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai.html" title="&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai">&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_5091">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            &quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai
                                        </p>
                                        <p>
                                            <div>Số từ: 54.626</div>
                                            <div>Lượt xem: 125.742</div>
                                            <div>Lượt thích: 415</div>
                                        </p>
                                        
                                        Flamm Apricot chưa từng bao giờ muốn rời khỏi làng của mình. Cô hài lòng dành cả quãng đời để sống yên bình tại nơi đây. Không may, sau khi bị chỉ định bởi lời tiên tri của Thần Sáng tạo [Origin] rằng...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_8184">
        <a href="truyen/8184-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c81616-chuong-19-su-that-khong-co-o-do-dau.html" title="Chương 19: Sự thật không có ở đó đâu">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 19: Sự thật không có ở đó đâu"><a href="truyen/8184-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai/c81616-chuong-19-su-that-khong-co-o-do-dau.html" title="Chương 19: Sự thật không có ở đó đâu">Chương 19: Sự thật không có ở đó đâu</a></div>
            <div class="thumb_attr volume-title">Vol 3: Đứa trẻ xoắn ốc người nói ra những ác ý</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/8184-omae-gotoki-ga-maou-ni-kateru-to-omou-na-to-gachizei-ni-yuusha-party-wo-tsuihou-sareta-node-outo-de-kimama-ni-kurashitai.html" title="&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai">&quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_8184">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            &quot;Omae Gotoki ga Maou ni Kateru to Omou na&quot; to Gachizei ni Yuusha Party wo Tsuihou Sareta node, Outo de Kimama ni Kurashitai
                                        </p>
                                        <p>
                                            <div>Số từ: 43.170</div>
                                            <div>Lượt xem: 106.466</div>
                                            <div>Lượt thích: 479</div>
                                        </p>
                                        
                                        Flamm Apricot, một trong 7 anh hùng được thần linh lựa chọn để tiêu diệt quỷ tộc cứu rỗi loài người.
Trái ngược với đồng đội mình với chỉ số cao ngất trời, chỉ số của Flamm là con số 0 dù cô có làm gì...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_11925">
        <a href="truyen/11925-lets-have-sex-my-proposal-to-my-classmate-just-before-she-jumps-off/c131967-chuong-1-lap-nhom.html" title="Chương 1: Lập Nhóm">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 1: Lập Nhóm"><a href="truyen/11925-lets-have-sex-my-proposal-to-my-classmate-just-before-she-jumps-off/c131967-chuong-1-lap-nhom.html" title="Chương 1: Lập Nhóm">Chương 1: Lập Nhóm</a></div>
            <div class="thumb_attr volume-title">VOL 2</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/11925-lets-have-sex-my-proposal-to-my-classmate-just-before-she-jumps-off.html" title="“Let’s Have Sex” My Proposal to My Classmate Just Before She Jumps Off">“Let’s Have Sex” My Proposal to My Classmate Just Before She Jumps Off</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_11925">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            “Let’s Have Sex” My Proposal to My Classmate Just Before She Jumps Off
                                        </p>
                                        <p>
                                            <div>Số từ: 52.057</div>
                                            <div>Lượt xem: 1.158.019</div>
                                            <div>Lượt thích: 6.061</div>
                                        </p>
                                        
                                        Tiêu đề thì như vậy, nhưng đây lại là một câu chuyện tình yêu đầy trong sáng!? Đối phương là mối tình đầu trầm lặng và dễ thương.Mối tình đầu đời của tôi, Koga Kurumi.
Sở hữu vẻ đẹp và tính cách dường...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_468">
        <a href="truyen/468-um-sorry-ive-been-reincarnated/c15724-chuong-11-co-ve-cha-that-su-tuyet-voi.html" title="Chương 11 - Có vẻ Cha thật sự tuyệt vời">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 11 - Có vẻ Cha thật sự tuyệt vời"><a href="truyen/468-um-sorry-ive-been-reincarnated/c15724-chuong-11-co-ve-cha-that-su-tuyet-voi.html" title="Chương 11 - Có vẻ Cha thật sự tuyệt vời">Chương 11 - Có vẻ Cha thật sự tuyệt vời</a></div>
            <div class="thumb_attr volume-title">Arc 1: Tuổi Thơ sung túc</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/468-um-sorry-ive-been-reincarnated.html" title="(Um, Sorry) I’ve Been Reincarnated!">(Um, Sorry) I’ve Been Reincarnated!</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_468">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            (Um, Sorry) I’ve Been Reincarnated!
                                        </p>
                                        <p>
                                            <div>Số từ: 11.223</div>
                                            <div>Lượt xem: 82.638</div>
                                            <div>Lượt thích: 376</div>
                                        </p>
                                        
                                        Vẫn là câu chuyện tái sinh ở thế giới khác. Lần này nguyên nhân là cứu bạn và chấn thương sọ não vì cái bình hoa của thượng đế. Được chọn giữa biến mất và tái sinh, câu trả lời là tái sinh và yêu cầu...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_4849">
        <a href="truyen/4849-um-sorry-ive-been-reincarnated/c73905-chuong-59-tien-den-lau-dai.html" title="Chương 59: Tiến đến lâu đài">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 59: Tiến đến lâu đài"><a href="truyen/4849-um-sorry-ive-been-reincarnated/c73905-chuong-59-tien-den-lau-dai.html" title="Chương 59: Tiến đến lâu đài">Chương 59: Tiến đến lâu đài</a></div>
            <div class="thumb_attr volume-title">Arc 2: Tiến tới Học viện nào!</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/4849-um-sorry-ive-been-reincarnated.html" title="(Um, Sorry) I’ve Been Reincarnated!">(Um, Sorry) I’ve Been Reincarnated!</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_4849">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            (Um, Sorry) I’ve Been Reincarnated!
                                        </p>
                                        <p>
                                            <div>Số từ: 114.794</div>
                                            <div>Lượt xem: 351.602</div>
                                            <div>Lượt thích: 854</div>
                                        </p>
                                        
                                        Sau khi bị một vị thần vô tình cướp đi mạng sống của mình. Shou được tái sinh với món quà từ thần để bù dắp cho cậu. Shou yêu cầu giữ lại tất cả ký ức từ kiếp trước. Cậu tái sinh thành Will, con trai...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14935">
        <a href="truyen/14935-danh-tinh-yeu-cho-em-gai-cung-la-mot-cong-viec-quan-trong/c112363-phan-1-chuong-1-cuoc-song-binh-thuong-moi-ngay-cua-anh-em-nha-mitsuki.html" title="Phần 1 - Chương 1 - Cuộc sống bình thường mỗi ngày của anh em nhà Mitsuki">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Phần 1 - Chương 1 - Cuộc sống bình thường mỗi ngày của anh em nhà Mitsuki"><a href="truyen/14935-danh-tinh-yeu-cho-em-gai-cung-la-mot-cong-viec-quan-trong/c112363-phan-1-chuong-1-cuoc-song-binh-thuong-moi-ngay-cua-anh-em-nha-mitsuki.html" title="Phần 1 - Chương 1 - Cuộc sống bình thường mỗi ngày của anh em nhà Mitsuki">Phần 1 - Chương 1 - Cuộc sống bình thường mỗi ngày của anh em nhà Mitsuki</a></div>
            <div class="thumb_attr volume-title">Toàn Tập</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/14935-danh-tinh-yeu-cho-em-gai-cung-la-mot-cong-viec-quan-trong.html" title="※Dành Tình Yêu Cho Em Gái Cũng Là Một Công Việc Quan Trọng">※Dành Tình Yêu Cho Em Gái Cũng Là Một Công Việc Quan Trọng</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_14935">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            ※Dành Tình Yêu Cho Em Gái Cũng Là Một Công Việc Quan Trọng
                                        </p>
                                        <p>
                                            <div>Số từ: 3.157</div>
                                            <div>Lượt xem: 29.079</div>
                                            <div>Lượt thích: 347</div>
                                        </p>
                                        
                                        Cô em gái này, sao lại dễ thương quá trời vậy nè ! ? Cùng cười, cùng khóc và cùng run rẩy vì tác phẩm Imouto RomCom đầy sáng tạo và nhiệt huyết này đi!
Mitsuki Hiro có một cô em gái rượu mà anh sẵn sà...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_18510">
        <a href="truyen/18510-0-va-1/c138775-chuong-08.html" title="Chương 08">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 08"><a href="truyen/18510-0-va-1/c138775-chuong-08.html" title="Chương 08">Chương 08</a></div>
            <div class="thumb_attr volume-title">Đọc ở đây</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/18510-0-va-1.html" title="0 và 1">0 và 1</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_18510">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            0 và 1
                                        </p>
                                        <p>
                                            <div>Số từ: 14.495</div>
                                            <div>Lượt xem: 4.176</div>
                                            <div>Lượt thích: 23</div>
                                        </p>
                                        
                                        Tôi đã xuyên vào một nhân vật trong trò chơi mô phỏng hẹn hò dành cho nữ. Tôi là Nhị Hoàng tử kẻ bày kế quyến rũ nữ chính chỉ vì để thỏa mãn phức cảm tự ti của mình với Đại Hoàng tử Edward.
Tôi không...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_5184">
        <a href="truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c58018-chuong-20-di-nhan-nhiem-vu-nao.html" title="Chương 20: Đi nhận nhiệm vụ nào">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 20: Đi nhận nhiệm vụ nào"><a href="truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c58018-chuong-20-di-nhan-nhiem-vu-nao.html" title="Chương 20: Đi nhận nhiệm vụ nào">Chương 20: Đi nhận nhiệm vụ nào</a></div>
            <div class="thumb_attr volume-title">Web Novel</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita.html" title="10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại">10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_5184">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại
                                        </p>
                                        <p>
                                            <div>Số từ: 19.387</div>
                                            <div>Lượt xem: 165.561</div>
                                            <div>Lượt thích: 759</div>
                                        </p>
                                        
                                        Tổ Đội Anh Hùng bị tấn công bởi Quân Đoàn quỷ vương với số lượng vô số kể, không nghi ngờ gì nữa nếu đối đầu trực tiếp tổ đội sẽ hoàn toàn bị tiêu diệt.
Một thành viên trong tổ đội, Pháp Sư mạnh nhất,...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_7596">
        <a href="truyen/7596-10-nam-sau-khi-noi-cau-cu-di-di-o-day-de-toi-lo-toi-da-tro-thanh-mot-huyen-thoai/c69387-chapter-23-dieu-cau-ay-bao-ve.html" title="Chapter 23 : Điều cậu ấy bảo vệ.">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chapter 23 : Điều cậu ấy bảo vệ."><a href="truyen/7596-10-nam-sau-khi-noi-cau-cu-di-di-o-day-de-toi-lo-toi-da-tro-thanh-mot-huyen-thoai/c69387-chapter-23-dieu-cau-ay-bao-ve.html" title="Chapter 23 : Điều cậu ấy bảo vệ.">Chapter 23 : Điều cậu ấy bảo vệ.</a></div>
            <div class="thumb_attr volume-title">WN</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/7596-10-nam-sau-khi-noi-cau-cu-di-di-o-day-de-toi-lo-toi-da-tro-thanh-mot-huyen-thoai.html" title="10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại">10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_7596">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            10 năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại
                                        </p>
                                        <p>
                                            <div>Số từ: 4.573</div>
                                            <div>Lượt xem: 41.503</div>
                                            <div>Lượt thích: 241</div>
                                        </p>
                                        
                                        Khi tổ Đội Anh Hùng bị tấn công bởi Quân Đoàn quỷ vương với số lượng vô số kể, không nghi ngờ gì nữa nếu đối đầu trực tiếp tổ đội sẽ hoàn toàn bị tiêu diệt.
Một thành viên trong tổ đội, Pháp Sư mạnh n...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_759">
        <a href="truyen/759-10-nen-goshi-no-hikiniito-o-yamete-gaishutsushitara-jitaku-goto-isekai-ni-tenishiteta/c64252-phan-ket.html" title="Phần kết">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Phần kết"><a href="truyen/759-10-nen-goshi-no-hikiniito-o-yamete-gaishutsushitara-jitaku-goto-isekai-ni-tenishiteta/c64252-phan-ket.html" title="Phần kết">Phần kết</a></div>
            <div class="thumb_attr volume-title">Chương 08: Lãnh đạo tiên phong Yuuji trở thành trưởng làng Honjou, lãnh địa Pasteur</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/759-10-nen-goshi-no-hikiniito-o-yamete-gaishutsushitara-jitaku-goto-isekai-ni-tenishiteta.html" title="10 nen goshi no HikiNiito o Yamete Gaishutsushitara Jitaku goto Isekai ni Ten’ishiteta">10 nen goshi no HikiNiito o Yamete Gaishutsushitara Jitaku goto Isekai ni Ten’ishiteta</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_759">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            10 nen goshi no HikiNiito o Yamete Gaishutsushitara Jitaku goto Isekai ni Ten’ishiteta
                                        </p>
                                        <p>
                                            <div>Số từ: 187.670</div>
                                            <div>Lượt xem: 543.910</div>
                                            <div>Lượt thích: 1.779</div>
                                        </p>
                                        
                                        Houjou Yuuji, 30 tuổi, thất nghiệp, là một hikikomori trong suốt 10 năm, quyết định đi ra khỏi nhà. Tuy nhiên, bên ngoài đó lại là một thế giới khác cùng với những sinh vật kì lạ mà cậu chưa từng biết...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_890">
        <a href="truyen/890-10-sai-no-saikyou-madoushi/c19850-mua-sam.html" title="Mua sắm - おかいもの">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Mua sắm - おかいもの"><a href="truyen/890-10-sai-no-saikyou-madoushi/c19850-mua-sam.html" title="Mua sắm - おかいもの">Mua sắm - おかいもの</a></div>
            <div class="thumb_attr volume-title">WN</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/890-10-sai-no-saikyou-madoushi.html" title="10 sai no Saikyou Madoushi">10 sai no Saikyou Madoushi</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_890">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            10 sai no Saikyou Madoushi
                                        </p>
                                        <p>
                                            <div>Số từ: 12.583</div>
                                            <div>Lượt xem: 56.716</div>
                                            <div>Lượt thích: 310</div>
                                        </p>
                                        
                                        Pháp sư mạnh nhất không biết mình là “người mạnh nhất” đã xuất hiện!

 

Cô bé Ferris 10 tuổi là nô lệ làm việc ở khu mỏ khai thác ma thạch.

Tuy nhiên, khi bé được phát hiện đang mang trong mình tài...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_1739">
        <a href="truyen/1739-juu-sai-no-saikyou-madoushi/c25377-chuong-07-con-duong-toi-truong-phan-2.html" title="Chương 07 : Con đường tới trường - Phần 2">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 07 : Con đường tới trường - Phần 2"><a href="truyen/1739-juu-sai-no-saikyou-madoushi/c25377-chuong-07-con-duong-toi-truong-phan-2.html" title="Chương 07 : Con đường tới trường - Phần 2">Chương 07 : Con đường tới trường - Phần 2</a></div>
            <div class="thumb_attr volume-title">Tập 01</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/1739-juu-sai-no-saikyou-madoushi.html" title="10 Sai no Saikyou Madoushi">10 Sai no Saikyou Madoushi</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_1739">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            10 Sai no Saikyou Madoushi
                                        </p>
                                        <p>
                                            <div>Số từ: 2.832</div>
                                            <div>Lượt xem: 28.987</div>
                                            <div>Lượt thích: 192</div>
                                        </p>
                                        
                                        Pháp sư mạnh nhất không biết mình là “người mạnh nhất” đã xuất hiện!

Cô bé Ferris 10 tuổi là nô lệ làm việc ở khu mỏ khai thác ma thạch.

Tuy nhiên, khi bé được phát hiện đang mang trong mình tài năn...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15462">
        <a href="truyen/15462-10-nen-buri-ni-saikai-shita-kusogaki-wa-seijun-bishoujo-jk-ni-seichoushita-ita/c140327-chuong-32-long-vong-va-vong-vo.html" title="Chương 32: Lòng vòng và vòng vo.">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 32: Lòng vòng và vòng vo."><a href="truyen/15462-10-nen-buri-ni-saikai-shita-kusogaki-wa-seijun-bishoujo-jk-ni-seichoushita-ita/c140327-chuong-32-long-vong-va-vong-vo.html" title="Chương 32: Lòng vòng và vòng vo.">Chương 32: Lòng vòng và vòng vo.</a></div>
            <div class="thumb_attr volume-title">WN</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/15462-10-nen-buri-ni-saikai-shita-kusogaki-wa-seijun-bishoujo-jk-ni-seichoushita-ita.html" title="10-nen Buri ni Saikai Shita Kusogaki wa Seijun Bishoujo JK ni Seichoushite Ita">10-nen Buri ni Saikai Shita Kusogaki wa Seijun Bishoujo JK ni Seichoushite Ita</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_15462">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            10-nen Buri ni Saikai Shita Kusogaki wa Seijun Bishoujo JK ni Seichoushite Ita
                                        </p>
                                        <p>
                                            <div>Số từ: 34.914</div>
                                            <div>Lượt xem: 276.901</div>
                                            <div>Lượt thích: 1.769</div>
                                        </p>
                                        
                                        "Đã lâu không gặp rồi nhỉ... sao anh lại không nhận ra em chứ!?"
Aritsuki Yuu, 28 tuổi, sau khi nghỉ việc tại một công ty đen ở Tokyo và trở về quê nhà để khởi đầu một cuộc sống mới, đã bắt gặp một cô...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15703">
        <a href="truyen/15703-100-co-ban-gai-nguoi-ma-thuc-su-thuc-su-thuc-su-thuc-su-thuc-su-yeu-ban-chuyen-tinh-yeu-dac-biet-chuyen-tinh-bi-mat/c116910-phu-truyen-1-mua-sam-cung-hakari-karane.html" title="Phụ Truyện 1: Mua Sắm Cùng Hakari &amp; Karane">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Phụ Truyện 1: Mua Sắm Cùng Hakari &amp; Karane"><a href="truyen/15703-100-co-ban-gai-nguoi-ma-thuc-su-thuc-su-thuc-su-thuc-su-thuc-su-yeu-ban-chuyen-tinh-yeu-dac-biet-chuyen-tinh-bi-mat/c116910-phu-truyen-1-mua-sam-cung-hakari-karane.html" title="Phụ Truyện 1: Mua Sắm Cùng Hakari &amp; Karane">Phụ Truyện 1: Mua Sắm Cùng Hakari &amp; Karane</a></div>
            <div class="thumb_attr volume-title">Toàn Văn</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/15703-100-co-ban-gai-nguoi-ma-thuc-su-thuc-su-thuc-su-thuc-su-thuc-su-yeu-ban-chuyen-tinh-yeu-dac-biet-chuyen-tinh-bi-mat.html" title="100 Cô Bạn Gái, Người Mà Thực Sự Thực Sự Thực Sự Thực Sự Thực Sự Yêu Bạn: Chuyện Tình Yêu Đặc Biệt ~ Chuyện Tình Bí Mật">100 Cô Bạn Gái, Người Mà Thực Sự Thực Sự Thực Sự Thực Sự Thực Sự Yêu Bạn: Chuyện Tình Yêu Đặc Biệt ~ Chuyện Tình Bí Mật</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_15703">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            100 Cô Bạn Gái, Người Mà Thực Sự Thực Sự Thực Sự Thực Sự Thực Sự Yêu Bạn: Chuyện Tình Yêu Đặc Biệt ~ Chuyện Tình Bí Mật
                                        </p>
                                        <p>
                                            <div>Số từ: 8.455</div>
                                            <div>Lượt xem: 42.181</div>
                                            <div>Lượt thích: 167</div>
                                        </p>
                                        
                                        Câu chuyện kể về cuộc đời của nam sinh có tên Aijou Rentarou, người đã bị từ chối 100 lần liên tiếp bởi 100 cô gái khác nhau trước khi tốt nghiệp sơ trung.
Trong một lần viếng thăm ngôi đền tình duyên...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_18031">
        <a href="truyen/18031-100-dieu-em-khong-biet-ve-senpai/c133959-ngay-thu-592-senpai-sang-giai-doan-moi-roi-lieu-chung-ta-co-the-tiep-tuc-than-thiet-nhu-the-nay-khong.html" title="Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;"><a href="truyen/18031-100-dieu-em-khong-biet-ve-senpai/c133959-ngay-thu-592-senpai-sang-giai-doan-moi-roi-lieu-chung-ta-co-the-tiep-tuc-than-thiet-nhu-the-nay-khong.html" title="Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;">Ngày thứ 592: &quot;Senpai, sang giai đoạn mới rồi... liệu chúng ta có thể tiếp tục thân thiết như thế này không?&quot;</a></div>
            <div class="thumb_attr volume-title">Extra (Sau khi end)</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/18031-100-dieu-em-khong-biet-ve-senpai.html" title="100 điều em không biết về senpai">100 điều em không biết về senpai</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_18031">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            100 điều em không biết về senpai
                                        </p>
                                        <p>
                                            <div>Số từ: 31.231</div>
                                            <div>Lượt xem: 33.810</div>
                                            <div>Lượt thích: 382</div>
                                        </p>
                                        
                                        Senpai và kouhai, hai người vốn chỉ biết nhau là "cùng chung ga tàu" (*), bỗng một ngày nọ, đã cùng nhau lập một lời hứa. Nội dung của nó là: "Mỗi ngày một câu hỏi, bất kể là gì, nhất định phải trả lờ...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_5797">
        <a href="truyen/5797-100-dieu-em-khong-biet-ve-senpai/c95094-ngay-thu-84-senpai-anh-dang-o-dau-day-a.html" title="Ngày thứ 84: &quot;Senpai, anh đang ở đâu đấy ạ?&quot;">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Ngày thứ 84: &quot;Senpai, anh đang ở đâu đấy ạ?&quot;"><a href="truyen/5797-100-dieu-em-khong-biet-ve-senpai/c95094-ngay-thu-84-senpai-anh-dang-o-dau-day-a.html" title="Ngày thứ 84: &quot;Senpai, anh đang ở đâu đấy ạ?&quot;">Ngày thứ 84: &quot;Senpai, anh đang ở đâu đấy ạ?&quot;</a></div>
            <div class="thumb_attr volume-title">Web Novel</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/5797-100-dieu-em-khong-biet-ve-senpai.html" title="100 điều em không biết về senpai">100 điều em không biết về senpai</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_5797">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            100 điều em không biết về senpai
                                        </p>
                                        <p>
                                            <div>Số từ: 130.973</div>
                                            <div>Lượt xem: 906.243</div>
                                            <div>Lượt thích: 4.374</div>
                                        </p>
                                        
                                        "Senpai, anh làm rơi gì này."
Câu nói đột ngột ấy đánh dấu cho sự bắt đầu của mối quan hệ giữa senpai thơ thẩn và kouhai-chan dễ-thương-tăng-động. Mặc dù không có mối liên kết nào ngoài việc đi chung...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_13795">
        <a href="truyen/13795-100-dieu-em-khong-biet-ve-senpai/c123198-chuong-88-senpai-anh-thuong-ket-thuc-viec-on-bai-va-di-ngu-luc-may-gio.html" title="Chương 88: “Senpai, anh thường kết thúc việc ôn bài và đi ngủ lúc mấy giờ?”">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 88: “Senpai, anh thường kết thúc việc ôn bài và đi ngủ lúc mấy giờ?”"><a href="truyen/13795-100-dieu-em-khong-biet-ve-senpai/c123198-chuong-88-senpai-anh-thuong-ket-thuc-viec-on-bai-va-di-ngu-luc-may-gio.html" title="Chương 88: “Senpai, anh thường kết thúc việc ôn bài và đi ngủ lúc mấy giờ?”">Chương 88: “Senpai, anh thường kết thúc việc ôn bài và đi ngủ lúc mấy giờ?”</a></div>
            <div class="thumb_attr volume-title">Web Novel</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/13795-100-dieu-em-khong-biet-ve-senpai.html" title="100 điều em không biết về senpai">100 điều em không biết về senpai</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_13795">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            100 điều em không biết về senpai
                                        </p>
                                        <p>
                                            <div>Số từ: 6.932</div>
                                            <div>Lượt xem: 44.592</div>
                                            <div>Lượt thích: 587</div>
                                        </p>
                                        
                                        "Senpai, anh làm rơi gì này."
Câu nói đột ngột ấy đánh dấu cho sự bắt đầu của mối quan hệ giữa senpai thơ thẩn và kouhai-chan dễ-thương-tăng-động. Mặc dù không có mối liên kết nào ngoài việc đi chung...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_11727">
        <a href="truyen/11727-the-villainess-who-only-had-100-days-to-live-had-fun-every-day/c126520-chuong-45-cung-nhau-vui-ve-nao.html" title="Chương 45: Cùng nhau vui vẻ nào! ⑥">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 45: Cùng nhau vui vẻ nào! ⑥"><a href="truyen/11727-the-villainess-who-only-had-100-days-to-live-had-fun-every-day/c126520-chuong-45-cung-nhau-vui-ve-nao.html" title="Chương 45: Cùng nhau vui vẻ nào! ⑥">Chương 45: Cùng nhau vui vẻ nào! ⑥</a></div>
            <div class="thumb_attr volume-title">Web novel</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/11727-the-villainess-who-only-had-100-days-to-live-had-fun-every-day.html" title="100 Ngày Hạnh Phúc Của Tiểu Thư Phản Diện">100 Ngày Hạnh Phúc Của Tiểu Thư Phản Diện</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_11727">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            100 Ngày Hạnh Phúc Của Tiểu Thư Phản Diện
                                        </p>
                                        <p>
                                            <div>Số từ: 64.668</div>
                                            <div>Lượt xem: 242.989</div>
                                            <div>Lượt thích: 1.153</div>
                                        </p>
                                        
                                        Lelouche, con gái của nhà công tước, nhận được lời nhắn từ Thần.
[Ngươi sẽ chết trong 100 ngày nữa.]
Có tin đồn là thái tử, cũng là hôn thê của cô ấy đã tìm được người mới và muốn phá vỡ hôn ước của h...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_5078">
        <a href="truyen/5078-15-sai-demo-ore-no-yome/c51356-chuong-01-va-roi-no-thanh-mot-dam-cuoi-hoan-hi.html" title="Chương 01 - Và rồi nó thành một đám cưới hoan hỉ">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 01 - Và rồi nó thành một đám cưới hoan hỉ"><a href="truyen/5078-15-sai-demo-ore-no-yome/c51356-chuong-01-va-roi-no-thanh-mot-dam-cuoi-hoan-hi.html" title="Chương 01 - Và rồi nó thành một đám cưới hoan hỉ">Chương 01 - Và rồi nó thành một đám cưới hoan hỉ</a></div>
            <div class="thumb_attr volume-title">Tập 01 - The booksellers wars beginning with a haphazar marriage</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/5078-15-sai-demo-ore-no-yome.html" title="15 sai demo Ore no Yome!">15 sai demo Ore no Yome!</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_5078">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            15 sai demo Ore no Yome!
                                        </p>
                                        <p>
                                            <div>Số từ: 5.006</div>
                                            <div>Lượt xem: 88.682</div>
                                            <div>Lượt thích: 521</div>
                                        </p>
                                        
                                        Chuyện về Hinosaka Kenichi, một thanh niên công chức 27 tuổi kết hôn cùng với nữ sinh trung học 15 tuổi. Chuyện tình này không chỉ một mà đến những hai bé 15 tuổi mới đau chứ. Liệu thanh niên này sẽ s...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_8133">
        <a href="truyen/8133-1-ldk-soshite-2-jk-26-sai-salaryman-joshikousei-ni-nin-to-doukyo-hajimemashita/c86777-chuong-06-tai-nan-voi-nu-sinh-cao-trung.html" title="Chương 06: Tai nạn với nữ sinh cao trung">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 06: Tai nạn với nữ sinh cao trung"><a href="truyen/8133-1-ldk-soshite-2-jk-26-sai-salaryman-joshikousei-ni-nin-to-doukyo-hajimemashita/c86777-chuong-06-tai-nan-voi-nu-sinh-cao-trung.html" title="Chương 06: Tai nạn với nữ sinh cao trung">Chương 06: Tai nạn với nữ sinh cao trung</a></div>
            <div class="thumb_attr volume-title">Tập 01</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/8133-1-ldk-soshite-2-jk-26-sai-salaryman-joshikousei-ni-nin-to-doukyo-hajimemashita.html" title="1LDK, Soshite 2JK. 26-sai Salaryman, Joshi Kousei Futari to Doukyou Hajimemashita">1LDK, Soshite 2JK. 26-sai Salaryman, Joshi Kousei Futari to Doukyou Hajimemashita</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_8133">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            1LDK, Soshite 2JK. 26-sai Salaryman, Joshi Kousei Futari to Doukyou Hajimemashita
                                        </p>
                                        <p>
                                            <div>Số từ: 26.742</div>
                                            <div>Lượt xem: 105.687</div>
                                            <div>Lượt thích: 955</div>
                                        </p>
                                        
                                        “Ahh, unm, cũng lâu rồi anh ha.”
(……Không đời nào.)
Komamura, một người làm công ăn lương độc thân, đã được giao phó cho việc chăm sóc cô em họ, Kanon, một gal JK.
Khi vừa mới gắng hiểu sự thay đổi sự...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_3660">
        <a href="truyen/3660-2311/c139034-ngay-095.html" title="Ngày 095">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Ngày 095"><a href="truyen/3660-2311/c139034-ngay-095.html" title="Ngày 095">Ngày 095</a></div>
            <div class="thumb_attr volume-title">23:11</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/3660-2311.html" title="23:11">23:11</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_3660">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            23:11
                                        </p>
                                        <p>
                                            <div>Số từ: 67.293</div>
                                            <div>Lượt xem: 297.186</div>
                                            <div>Lượt thích: 336</div>
                                        </p>
                                        
                                        “Nếu em muốn hạnh phúc mãi mãi về sau, anh sẵn sàng bắt đầu câu chuyện ngày xửa ngày xưa với em.” - Rico, 23:11 
Tóm tắt nội dung của tác giả:
Một tác giả. Một kẻ lạ mặt kỳ quái. Rất nhiều cuộc hội th...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_8328">
        <a href="truyen/8328-2311/c93616-chuong-12.html" title="Chương 12">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 12"><a href="truyen/8328-2311/c93616-chuong-12.html" title="Chương 12">Chương 12</a></div>
            <div class="thumb_attr volume-title">Tập 01</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/8328-2311.html" title="23/11">23/11</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_8328">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            23/11
                                        </p>
                                        <p>
                                            <div>Số từ: 39.950</div>
                                            <div>Lượt xem: 32.897</div>
                                            <div>Lượt thích: 76</div>
                                        </p>
                                        
                                        phần tiếp theo sau cái kết của phần 23:11.
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2138">
        <a href="truyen/2138-29-years-old-bachelor-was-brought-to-a-different-world-to-live-freely/c46557-chuong-10-toi-roi-vao-trang-thai-cam-ghet-ban-than-minh.html" title="Chương 26: Tôi rơi vào trạng thái căm ghét bản thân mình.">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 26: Tôi rơi vào trạng thái căm ghét bản thân mình."><a href="truyen/2138-29-years-old-bachelor-was-brought-to-a-different-world-to-live-freely/c46557-chuong-10-toi-roi-vao-trang-thai-cam-ghet-ban-than-minh.html" title="Chương 26: Tôi rơi vào trạng thái căm ghét bản thân mình.">Chương 26: Tôi rơi vào trạng thái căm ghét bản thân mình.</a></div>
            <div class="thumb_attr volume-title">Tập 02</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/2138-29-years-old-bachelor-was-brought-to-a-different-world-to-live-freely.html" title="29-sai Dokushin wa Isekai de Jiyuu ni Ikita......katta">29-sai Dokushin wa Isekai de Jiyuu ni Ikita......katta</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_2138">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            29-sai Dokushin wa Isekai de Jiyuu ni Ikita......katta
                                        </p>
                                        <p>
                                            <div>Số từ: 123.450</div>
                                            <div>Lượt xem: 414.331</div>
                                            <div>Lượt thích: 1.895</div>
                                        </p>
                                        
                                        Một anh main 29 tuổi còn độc thân được qua thế giới khác mà mình từng mong muốn…
Từ những ngày đầu khi anh đăng ký vào Guild mạo hiểm giả, anh gặp một cô gái và đã miễn cưỡng phải cưới cô ấy.
Hơn mười...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2840">
        <a href="truyen/2840-3-minutes-boy-meets-girl/c34162-chuong-19-3-phut-boy-meets-girl.html" title="Chương 19. 3 Phút Boy Meets Girl">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 19. 3 Phút Boy Meets Girl"><a href="truyen/2840-3-minutes-boy-meets-girl/c34162-chuong-19-3-phut-boy-meets-girl.html" title="Chương 19. 3 Phút Boy Meets Girl">Chương 19. 3 Phút Boy Meets Girl</a></div>
            <div class="thumb_attr volume-title">Toàn tập</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/2840-3-minutes-boy-meets-girl.html" title="3 Minutes Boy Meets Girl">3 Minutes Boy Meets Girl</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_2840">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            3 Minutes Boy Meets Girl
                                        </p>
                                        <p>
                                            <div>Số từ: 36.887</div>
                                            <div>Lượt xem: 76.636</div>
                                            <div>Lượt thích: 479</div>
                                        </p>
                                        
                                        3 Minutes Boy Meets Girl là một tuyển tập truyện ngắn của các tác giả làm việc tại Famitsu Bunko. Có 19 chương và là 19 truyện ngắn từ 19 tác giả khác nhau. Thể loại chung chính là lãng mạn. Truyện đư...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2031">
        <a href="truyen/2031-400-years-old-virgin-demon-king/c32374-chuong-03-ma-vuong-thuc-hien-hoa-ly-tuong.html" title="Chương 03 : Ma vương thực hiện hóa lý tưởng.">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 03 : Ma vương thực hiện hóa lý tưởng."><a href="truyen/2031-400-years-old-virgin-demon-king/c32374-chuong-03-ma-vuong-thuc-hien-hoa-ly-tuong.html" title="Chương 03 : Ma vương thực hiện hóa lý tưởng.">Chương 03 : Ma vương thực hiện hóa lý tưởng.</a></div>
            <div class="thumb_attr volume-title">Tập 01</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/2031-400-years-old-virgin-demon-king.html" title="400 Years Old Virgin Demon King">400 Years Old Virgin Demon King</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_2031">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            400 Years Old Virgin Demon King
                                        </p>
                                        <p>
                                            <div>Số từ: 4.723</div>
                                            <div>Lượt xem: 26.565</div>
                                            <div>Lượt thích: 116</div>
                                        </p>
                                        
                                        Chuyện về ma vương 400 tuổi còn trinh đi kiếm vợ và một gái muốn cưới hắn để nắm giữ quyền lực to lớn.
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14836">
        <a href="truyen/14836-45510/c111785-chuong-01.html" title="Chương 01">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 01"><a href="truyen/14836-45510/c111785-chuong-01.html" title="Chương 01">Chương 01</a></div>
            <div class="thumb_attr volume-title">Toàn văn</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/14836-45510.html" title="45510">45510</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_14836">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            45510
                                        </p>
                                        <p>
                                            <div>Số từ: 2.212</div>
                                            <div>Lượt xem: 60.151</div>
                                            <div>Lượt thích: 185</div>
                                        </p>
                                        
                                        Được chấp bút bởi Akasaka Aka (tác giả của loạt manga Kaguya sama: Love is war nổi tiếng),『45510』 đề cập đến khía cạnh chưa ai biết tới của Idol hoàn hảo tối thượng「B-Komachi」Ai. Cuốn tiểu thuyết...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14837">
        <a href="truyen/14837-45510/c111788-oneshot.html" title="Oneshot">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Oneshot"><a href="truyen/14837-45510/c111788-oneshot.html" title="Oneshot">Oneshot</a></div>
            <div class="thumb_attr volume-title">Toàn tập</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/14837-45510.html" title="45510">45510</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_14837">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            45510
                                        </p>
                                        <p>
                                            <div>Số từ: 3.935</div>
                                            <div>Lượt xem: 41.545</div>
                                            <div>Lượt thích: 162</div>
                                        </p>
                                        
                                        "45510" là một tiểu thuyết ngắn được viết bởi Aka Akasaka, nói về một khía cạnh chưa ai biết của idol thập toàn tối thượng "B-Komachi" Ai.
Đây là câu chuyện gốc của bài hát chủ đề "Idol" của YOASOBI c...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_15927">
        <a href="truyen/15927-6-nu-chinh-deu-muon-toan-quyen-doc-chiem-toi/c121446-chuong-32.html" title="Chương 3.2">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 3.2"><a href="truyen/15927-6-nu-chinh-deu-muon-toan-quyen-doc-chiem-toi/c121446-chuong-32.html" title="Chương 3.2">Chương 3.2</a></div>
            <div class="thumb_attr volume-title">Tập 01</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/15927-6-nu-chinh-deu-muon-toan-quyen-doc-chiem-toi.html" title="6 nữ chính đều muốn toàn quyền độc chiếm tôi">6 nữ chính đều muốn toàn quyền độc chiếm tôi</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_15927">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            6 nữ chính đều muốn toàn quyền độc chiếm tôi
                                        </p>
                                        <p>
                                            <div>Số từ: 25.639</div>
                                            <div>Lượt xem: 85.653</div>
                                            <div>Lượt thích: 863</div>
                                        </p>
                                        
                                        [Cái gì nhiều quá cũng không tốt. Cả sở hữu vật chất lẫn các mối quan hệ.]
Shinichi Hirakawa, một nam sinh cao trung sống theo chủ nghĩa tối giản, chỉ giao lưu với số ít người, giờ lại tham gia một dự...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_1985">
        <a href="truyen/1985-86-eightysix/c65065-chuong-8-run-to-the-battlefront.html" title="Chương 8: Run to the Battlefront">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 8: Run to the Battlefront"><a href="truyen/1985-86-eightysix/c65065-chuong-8-run-to-the-battlefront.html" title="Chương 8: Run to the Battlefront">Chương 8: Run to the Battlefront</a></div>
            <div class="thumb_attr volume-title">Tập 3</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/1985-86-eightysix.html" title="86 -eightysix-">86 -eightysix-</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_1985">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            86 -eightysix-
                                        </p>
                                        <p>
                                            <div>Số từ: 244.749</div>
                                            <div>Lượt xem: 749.566</div>
                                            <div>Lượt thích: 1.899</div>
                                        </p>
                                        
                                        Cộng hòa San Magnolia.Quốc gia này từ lâu đã chịu phải ách xâm lược từ những Legion - chiến xa không người lái của phía Đế quốc. Để đáp trả lại mối đe doạ đó, nước Cộng hoà cũng phát triển thành công...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_16685">
        <a href="truyen/16685-87-ngay-cho-den-lan-dau-lam-chuyen-ay-voi-co-ban-gai-ngay-tho-va-de-dai/c125252-chuong-ket-nhieu-lan-dau-cung-nhau-trai-nghiem.html" title="Chương kết: Nhiều lần đầu cùng nhau trải nghiệm">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương kết: Nhiều lần đầu cùng nhau trải nghiệm"><a href="truyen/16685-87-ngay-cho-den-lan-dau-lam-chuyen-ay-voi-co-ban-gai-ngay-tho-va-de-dai/c125252-chuong-ket-nhieu-lan-dau-cung-nhau-trai-nghiem.html" title="Chương kết: Nhiều lần đầu cùng nhau trải nghiệm">Chương kết: Nhiều lần đầu cùng nhau trải nghiệm</a></div>
            <div class="thumb_attr volume-title">Thật ra... đây là lần đầu của mình đó</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/16685-87-ngay-cho-den-lan-dau-lam-chuyen-ay-voi-co-ban-gai-ngay-tho-va-de-dai.html" title="87 ngày cho đến lần đầu làm chuyện ấy với cô bạn gái ngây thơ và dễ dãi">87 ngày cho đến lần đầu làm chuyện ấy với cô bạn gái ngây thơ và dễ dãi</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_16685">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            87 ngày cho đến lần đầu làm chuyện ấy với cô bạn gái ngây thơ và dễ dãi
                                        </p>
                                        <p>
                                            <div>Số từ: 63.203</div>
                                            <div>Lượt xem: 121.146</div>
                                            <div>Lượt thích: 1.330</div>
                                        </p>
                                        
                                        Như tiêu đề, đây là câu chuyện về 87 ngày cho đến lần đầu “ân ái” giữa chàng trai mang tiếng lăng nhăng nhưng thực chất là trai tân, và cô gái mang tiếng lẳng lơ nhưng thực chất là gái tơ.
 
 
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_2463">
        <a href="truyen/2463-99th-vampire-princess-the-last-vampire/c35808-part-03.html" title="Part 03">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Part 03"><a href="truyen/2463-99th-vampire-princess-the-last-vampire/c35808-part-03.html" title="Part 03">Part 03</a></div>
            <div class="thumb_attr volume-title">Chương 1: Truyền thuyết về nghi thức &quot; Liên lạc với người chết&quot;</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/2463-99th-vampire-princess-the-last-vampire.html" title="99th vampire princess ~The last vampire~">99th vampire princess ~The last vampire~</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_2463">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            99th vampire princess ~The last vampire~
                                        </p>
                                        <p>
                                            <div>Số từ: 7.532</div>
                                            <div>Lượt xem: 32.200</div>
                                            <div>Lượt thích: 246</div>
                                        </p>
                                        
                                        "Lores" - những hình thể đáng kể được sinh ra từ những truyền thuyết thành phố. Và học sinh trung học Tsukumo Jin, người đã vô tình giải phóng "truyền thuyết về ma cà rồng" mạnh mẽ nhất, giờ đây là ng...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_7990">
        <a href="truyen/7990-a-banished-failure-survives-in-the-borderland-and-becomes-an-s-rank-exorcist/c91611-chuong-44-tai-nang-no-ro.html" title="Chương 44: Tài năng nở rộ">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 44: Tài năng nở rộ"><a href="truyen/7990-a-banished-failure-survives-in-the-borderland-and-becomes-an-s-rank-exorcist/c91611-chuong-44-tai-nang-no-ro.html" title="Chương 44: Tài năng nở rộ">Chương 44: Tài năng nở rộ</a></div>
            <div class="thumb_attr volume-title">Tìm ra kẻ phản bội</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/7990-a-banished-failure-survives-in-the-borderland-and-becomes-an-s-rank-exorcist.html" title="A Banished Failure Survives in the Borderland and Becomes an S-Rank Exorcist">A Banished Failure Survives in the Borderland and Becomes an S-Rank Exorcist</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_7990">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Banished Failure Survives in the Borderland and Becomes an S-Rank Exorcist
                                        </p>
                                        <p>
                                            <div>Số từ: 77.008</div>
                                            <div>Lượt xem: 558.548</div>
                                            <div>Lượt thích: 2.103</div>
                                        </p>
                                        
                                        Đây là thế giới bị xâm chiếm bởi [Twilight]
150 năm trước, trong cuộc chiến trường kì giữa nhân loại và ác quỷ. Loài người đã bại trận bởi một thứ gọi là [Twilight]. Và chúng đã xâm chiếm cả thế giới....
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14682">
        <a href="truyen/14682-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends/c113106-chuong-11.html" title="Chương 11">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 11"><a href="truyen/14682-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends/c113106-chuong-11.html" title="Chương 11">Chương 11</a></div>
            <div class="thumb_attr volume-title">WN</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/14682-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends.html" title="A Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t Escape Because We Are Childhood Friends">A Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t Escape Because We Are Childhood Friends</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_14682">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t Escape Because We Are Childhood Friends
                                        </p>
                                        <p>
                                            <div>Số từ: 6.963</div>
                                            <div>Lượt xem: 102.957</div>
                                            <div>Lượt thích: 676</div>
                                        </p>
                                        
                                        “Nè, nếu tụi mình sống chung thì chỗ này tốt đó.~”
“....Hờờ.”
Vào giờ nghỉ trưa, tôi, Izumi Saku, buông một tiếng thở dài chán nản.
Hiện tại trước mặt tôi đây là cô gái mang tên Shiina Yukiho.
Con nhỏ...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_17884">
        <a href="truyen/17884-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends/c136556-chuong-25.html" title="Chương 25">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 25"><a href="truyen/17884-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends/c136556-chuong-25.html" title="Chương 25">Chương 25</a></div>
            <div class="thumb_attr volume-title">WN</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/17884-a-beautiful-girl-who-is-under-the-delusion-that-shes-dating-me-i-cant-escape-because-we-are-childhood-friends.html" title="A Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t Escape Because We Are Childhood Friends">A Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t Escape Because We Are Childhood Friends</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_17884">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Beautiful Girl Who Is Under the Delusion That She’s Dating Me, I Can’t Escape Because We Are Childhood Friends
                                        </p>
                                        <p>
                                            <div>Số từ: 8.618</div>
                                            <div>Lượt xem: 37.185</div>
                                            <div>Lượt thích: 249</div>
                                        </p>
                                        
                                        “Nè, nếu tụi mình sống chung thì chỗ này tốt đó.~”
“....Hờờ.”
Vào giờ nghỉ trưa, tôi, Izumi Saku, buông một tiếng thở dài chán nản.
Hiện tại trước mặt tôi đây là cô gái mang tên Shiina Yukiho.
Con nhỏ...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_13759">
        <a href="truyen/13759-a-boy-who-was-falsely-accused-and-hurt-by-the-people-he-cares-about-even-if-they-apologize-after-finding-out-hes-innocent-hell-never-forgive-them/c116302-chuong-11-ngon-nen-cuoi-cung.html" title="Chương 11 Ngọn nến cuối cùng">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 11 Ngọn nến cuối cùng"><a href="truyen/13759-a-boy-who-was-falsely-accused-and-hurt-by-the-people-he-cares-about-even-if-they-apologize-after-finding-out-hes-innocent-hell-never-forgive-them/c116302-chuong-11-ngon-nen-cuoi-cung.html" title="Chương 11 Ngọn nến cuối cùng">Chương 11 Ngọn nến cuối cùng</a></div>
            <div class="thumb_attr volume-title">Phần 2</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/13759-a-boy-who-was-falsely-accused-and-hurt-by-the-people-he-cares-about-even-if-they-apologize-after-finding-out-hes-innocent-hell-never-forgive-them.html" title="A boy who was falsely accused and hurt by the people he cares about, even if they apologize after finding out he’s innocent, he’ll never forgive them.">A boy who was falsely accused and hurt by the people he cares about, even if they apologize after finding out he’s innocent, he’ll never forgive them.</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_13759">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A boy who was falsely accused and hurt by the people he cares about, even if they apologize after finding out he’s innocent, he’ll never forgive them.
                                        </p>
                                        <p>
                                            <div>Số từ: 78.000</div>
                                            <div>Lượt xem: 401.878</div>
                                            <div>Lượt thích: 1.236</div>
                                        </p>
                                        
                                        Ryosuke Yamamoto đã bị buộc tội hành hung một người phụ nữ và mất đi tất cả những người thân yêu với mình. Chị gái Kaede và em gái Nagisa hoàn toàn từ mặt cậu, ngay cả bố cậu cũng bỏ rơi cậu.
Ryosuke...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_9141">
        <a href="truyen/9141-a-certain-elfs-note/c78968-chuong-08-mua-dong-trang-ben-phai.html" title="Chương 08: Mùa đông – Trang bên phải">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 08: Mùa đông – Trang bên phải"><a href="truyen/9141-a-certain-elfs-note/c78968-chuong-08-mua-dong-trang-ben-phai.html" title="Chương 08: Mùa đông – Trang bên phải">Chương 08: Mùa đông – Trang bên phải</a></div>
            <div class="thumb_attr volume-title">Oneshot</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/9141-a-certain-elfs-note.html" title="A Certain Elf’s Note">A Certain Elf’s Note</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_9141">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Certain Elf’s Note
                                        </p>
                                        <p>
                                            <div>Số từ: 1.831</div>
                                            <div>Lượt xem: 43.144</div>
                                            <div>Lượt thích: 79</div>
                                        </p>
                                        
                                        Hồi ký của cô nàng elf nọ
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_14991">
        <a href="truyen/14991-a-fairy-tale-for-the-villains/c132195-chuong-10.html" title="Chương 10">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Chương 10"><a href="truyen/14991-a-fairy-tale-for-the-villains/c132195-chuong-10.html" title="Chương 10">Chương 10</a></div>
            <div class="thumb_attr volume-title">Tập 01</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/14991-a-fairy-tale-for-the-villains.html" title="A Fairy Tale for the Villains">A Fairy Tale for the Villains</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_14991">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Fairy Tale for the Villains
                                        </p>
                                        <p>
                                            <div>Số từ: 21.996</div>
                                            <div>Lượt xem: 21.173</div>
                                            <div>Lượt thích: 55</div>
                                        </p>
                                        
                                        Bỗng một ngày tôi được tái sinh làm nhân vật phụ trong một cuốn tiểu thuyết lãng mạn đẫm máu. Dù sinh ra trong một gia đình thường dân, nhưng cuộc sống của tôi vẫn đủ đầy do mẹ tôi làm bà vú cho nhà C...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
    <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_16265">
        <a href="truyen/16265-a-flower-for-you/c120616-toan-thu.html" title="Toàn thư">
            <div class="a6-ratio">                                  
                <div class="content img-in-ratio lazyload" data-bg="img/nocover.jpg"></div>
            </div>
        </a>
        <div class="thumb-detail">                                      
            <div class="thumb_attr chapter-title" title="Toàn thư"><a href="truyen/16265-a-flower-for-you/c120616-toan-thu.html" title="Toàn thư">Toàn thư</a></div>
            <div class="thumb_attr volume-title">Oneshot</div>
        </div>
    </div>
    <div class="thumb_attr series-title"><a href="truyen/16265-a-flower-for-you.html" title="A Flower For You">A Flower For You</a></div>
</div>

                            <!-- Tooltip -->
                            <div style="display: none">
                                <div id="series_16265">
                                    <div style="margin: 10px 0; width: 250px">
                                        <p style="color: white; font-weight: bold">
                                            A Flower For You
                                        </p>
                                        <p>
                                            <div>Số từ: 2.631</div>
                                            <div>Lượt xem: 10.573</div>
                                            <div>Lượt thích: 58</div>
                                        </p>
                                        
                                        Tại một cửa tiệm hoa nọ, đề một tấm bảng rằng, “Tôi sẽ lựa chọn cho bạn loài hoa mà phù hợp với bản thân bạn nhất.”
Chủ tiệm sẽ lần lượt chọn ra và giới thiệu loài hoa nào phù hợp với khách hàng nhất,...
                                    </div>
                                </div>
                            </div>
                            <!-- // Tooltip -->
                                                                            </main>              
                    <div class="pagination-footer">
        <div class="pagination_wrap">
            <!--<a href="" class="paging_item paging_prevnext prev  disabled ">Trước</a>-->
            <a href="danh-sach2679.html?page=1" class="paging_item paging_prevnext prev  disabled ">Đầu</a>
            
                        <a href="danh-sach2679.html?page=1" class="paging_item page_num  current ">1</a>
                        <a href="danh-sach4658.html?page=2" class="paging_item page_num ">2</a>
                        <a href="danh-sach9ba9.html?page=3" class="paging_item page_num ">3</a>
                        <a href="danh-sachfdb0.html?page=4" class="paging_item page_num ">4</a>
                        <a href="danh-sachaf4d.html?page=5" class="paging_item page_num ">5</a>
            
            <!--<a href=" https://docln.net/danh-sach?page=2 " class="paging_item paging_prevnext next ">Tiếp</a>-->
            <a href="danh-sach291b.html?page=79" class="paging_item paging_prevnext next ">Cuối</a>
        </div>
    </div>
                        </section>
                </div>
            </div>
        </div>
    </main>
@endsection