@extends('partials.sidebar')
@section('create');
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
                            <li><a href="thao-luan/368-huong-dan-dang-truyen.html"><span>Đăng truyện</span></a></li>
                            <li><a href="thao-luan/2-gioi-thieu-cong-light-novel.html"><span>Giới thiệu</span></a></li>
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
                            <li><a href="thao-luan/368-huong-dan-dang-truyen.html"><span>Đăng truyện</span></a></li>
                            <li><a href="thao-luan/2-gioi-thieu-cong-light-novel.html"><span>Giới thiệu</span></a></li>
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
      <main id="mainpart" class="custome-page"> <!--style="background: url('img/background/bg_rem.jpg') no-repeat fixed 70px center"-->
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-breadcrumb">
                    <span class="breadcrum-level"><a href="../index.html"><i class="fas fa-home"></i></a></span>
                        <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                    <span class="breadcrum-level"><a href="../thao-luan.html">Thảo luận</a></span>
                    </div>
                
                            </div>
                        </div>
                        <section class="page-content basic-section">
                            <header class="sect-header">
                                <span class="sect-title"><a href="368-huong-dan-dang-truyen.html">Hướng dẫn đăng truyện</a></span>
                            </header>
                            <main class="sect-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="page-author group-admin">                    
                                            <div class="author_ava">
                                                <img src="../../i.docln.net/lightnovel/users/ua1-58948009-0e87-4096-8f67-11766a67792c.jpg">                                
                                            </div>
                                            <div class="author-info">
                                                <div class="author_name"><a href="../thanh-vien/1.html">Embers</a></div>                           
                                                <div class="author_role"><span>Administrators</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <time class="topic-time timeago" title="18/06/2017 19:29:13" datetime="2017-06-18T19:29:13+07:00">Sunday, 18 Jun 2017</time>
                                    </div>                
                                </div>        
                                <div class="forum-page-content long-text">
                                    <p><strong>Nếu ảnh nhỏ, xin hãy "Open image in new tab" để xem ảnh với kích thước lớn hơn.</strong></p><p>Hướng dẫn thêm truyện mới <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a></p><div class="spoiler" style="text-align:center;">Trước hết bạn phải đăng nhập.<br><img alt="default.png" src="../../1.bp.blogspot.com/-JRPkdknodjA/W2CCnh2wbUI/AAAAAAABeEs/GQm9DtE0-J8Oi_LrfymOCT-bNMr2w7N3wCHMYCw/s0/default.png"><br>Nhập TÊN ĐĂNG NHẬP và MẬT KHẨU. Nếu chưa có tài khoản hãy đăng ký.<br><img alt="default.png" src="../../2.bp.blogspot.com/-2L3_elVP530/WUYlScQWypI/AAAAAAAAZ_o/MgDToQ-p-jI2Ze_QAoGDAyqlQTjIaHNlgCHMYCw/s0/default.png"><br><br>Sau khi đăng nhập, click vào Menu như hình dưới để đến Bảng điều khiển<br><img alt="default.png" src="../../2.bp.blogspot.com/-x-txXXQwsXo/W2CCoTGso5I/AAAAAAABeEw/PNxVrIP63TUI1K2QHYDGIoCsiFf93mg2gCHMYCw/s0/default.png"><br>Chọn thêm truyện mới<br><img alt="default.png" src="../../3.bp.blogspot.com/-E1D-Fc5UD4o/WUYlTPtV5mI/AAAAAAAAZ_w/HnNs0Ec6HpIgOa2sJCODoGiEEGQua0QIQCHMYCw/s0/default.png"><br><br>Điền thông tin của truyện theo yêu cầu như mình đã chú thích trong ảnh. Hãy đọc quy định khi đăng truyện trước để nắm rõ tránh cho truyện bị xóa.<br><img alt="default.png" src="../../2.bp.blogspot.com/-YcGxSpM6Lb8/WUYlUG_kJKI/AAAAAAAAZ_0/xR4ssTgCqkQ3i7LfXGc6h-lkWsQO_duVQCHMYCw/s0/default.png"><img alt="default.png" src="../../2.bp.blogspot.com/-tPvtj3J5DnQ/WUYlUi50qrI/AAAAAAAAZ_4/UW2kL7j_04gXdDR4Eu4kRC6BjyM3wzRvgCHMYCw/s0/default.png"></div><p>Hướng dẫn thêm nhóm dịch mới <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a></p><div class="spoiler" style="text-align:center;">Sau khi vào bảng điều khiển, ấn vào danh sách nhóm dịch ở Menu Nhóm dịch.<br><img alt="default.png" src="../../4.bp.blogspot.com/-9wd4OnPCfzE/WUYlVNkW6QI/AAAAAAAAZ_8/H2vvK09s2sgRG4VyvhjwNkNkT1GbCjT6QCHMYCw/s0/default.png"><br><br>Thêm nhóm dịch mới<br><img alt="default.png" src="../../3.bp.blogspot.com/-5P6GACWfEBA/WUYlVoB8SKI/AAAAAAAAaAA/o0xhwk0z5DY7FAQ4b_VDIUoYp_a-8lZ_wCHMYCw/s0/default.png"><br><br>Điền các thông tin cần thiết. Vậy là xong!<br><img alt="default.png" src="../../3.bp.blogspot.com/-CudDrRZogjw/WUYlWF5RtHI/AAAAAAAAaAE/LICM8d6j5YkdV_PqlBC1RtBYaeeL62K7QCHMYCw/s0/default.png"></div><p>Hướng dẫn thêm các tập và chương truyện <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a></p><div class="spoiler" style="text-align:center;">Sau khi Thêm truyện mới. Bạn sẽ được dẫn vào trang quản lý truyện. Sử dụng chuột phải lên tên truyện để mở các Menu tương ứng. Click Thêm tập<br><img alt="default.png" src="../../4.bp.blogspot.com/-EgWLIObCXDg/WUY1c2asjtI/AAAAAAAAaIE/-_FuuFa0RSUJuto9Do7AUD93aEXbYRReQCHMYCw/s0/default.png"><br><br>Nhập Tiêu đề của tập bắt buộc, còn các khung khác có thể bỏ qua.<br><img alt="default.png" src="../../4.bp.blogspot.com/-7yxzNQA7NB8/WUY1dq3B2iI/AAAAAAAAaII/CATmYqhkj6cPlLZ8HTAsJ3Pi2Fn9SnHzwCHMYCw/s0/default.png"><br><br>Sau khi thêm tập mới, click chuột phải vào tên tập đó để chỉnh sửa hoặc thêm chương như ảnh bên dưới<br><img alt="default.png" src="../../3.bp.blogspot.com/-UUzHViXqdLA/WUY1eINb9EI/AAAAAAAAaIM/khkafwI5reoReDKk0xlWETEbiMokLFnmACHMYCw/s0/default.png"><br><br>Nhập các nội dung để thêm chương mới như yêu cầu. Có thể upload ảnh minh họa bằng các chức năng như hình bên dưới. Nếu số ảnh upload bị thiếu, có thể do ảnh đó bị lỗi hoặc server bị lỗi.<br><img alt="default.png" src="../../3.bp.blogspot.com/-jc3kspnz-Ic/WUY1evjUXoI/AAAAAAAAaIU/rqipJPNqspsiJHvBxMecDz-P8ytsQeRzQCHMYCw/s0/default.png"><br><br>Sau khi thêm chương mới, click chuột phải vào tên chương vừa tạo để Sửa hoặc Xóa chương.<br><img alt="default.png" src="../../4.bp.blogspot.com/-953BAOhLH2w/WUY1fB8ucTI/AAAAAAAAaIY/CIr4xMzcSk85idMKf7xc6kUNFsRnP4a3wCHMYCw/s0/default.png"></div><p>Hướng dẫn thêm chú thích <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a></p><div class="spoiler" style="text-align:center;">Làm theo hướng dẫn thêm tập và thêm chương ở bên trên. Sau khi đã thêm chương, kéo xuống cuối cùng trang Sửa chương để thêm chú thích theo hướng dẫn sau đây.<br><img src="../../4.bp.blogspot.com/-q_spIDtHPaU/W2CAEXH8wuI/AAAAAAABeDQ/Lu8jrmuToTovVyrC__4hIE6HnyHi4oDaQCHMYCw/s0/default.png" alt="default.png"><br><img src="../../1.bp.blogspot.com/-_U6p_8HrzBY/W2CAE4f4-pI/AAAAAAABeDU/e96oo4gdYrECDwUzfWebT2OVK77I8HPRACHMYCw/s0/default.png" alt="default.png"><br><img src="../../4.bp.blogspot.com/-nfFX0tD0N2s/W2CAFidSV6I/AAAAAAABeDY/PzmVCtmD77kSjQkJS83mP4qN_zdImedZACHMYCw/s0/default.png" alt="default.png"><br><img src="../../4.bp.blogspot.com/-c9LBcQFW12g/W2CAGLa_jSI/AAAAAAABeDc/iqUP9bqvUPwNdexQUL2LSijSkyl6R3QuwCHMYCw/s0/default.png" alt="default.png"><br><img src="../../1.bp.blogspot.com/-LV_GszNA3xo/W2CAGkWjafI/AAAAAAABeDg/NeEnf5mgz38OcnX9nQXWIw6pImIfZpxcgCHMYCw/s0/default.png" alt="default.png"><br><img src="../../4.bp.blogspot.com/-XC4xAJHa3W0/W2CAHNZ86dI/AAAAAAABeDk/2R-oBhMXC1YVfS_yRK5O57YIqCI9Sxh9wCHMYCw/s0/default.png" alt="default.png"></div><p>Hướng dẫn sắp xếp lại thứ tự các Tập và Chương <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a></p><div class="spoiler" style="text-align:center;">Vào trang quản lý truyện, và làm theo hướng dẫn dưới đây để sắp xếp thứ tự các tập và chương truyện<br><br><img src="../../4.bp.blogspot.com/-egvk0t29urg/W2CAH1veZsI/AAAAAAABeDo/gcs1eAZTvAgbTUZg9WMB1r_oI3ArUZRmgCHMYCw/s0/default.png" alt="default.png"><br><img src="../../4.bp.blogspot.com/-bPa2SnZe7VE/W2CAIaFxXII/AAAAAAABeDs/kK-T9Xia5LUw9iLjyewSg1gk0Q-V6KuDACHMYCw/s0/default.png" alt="default.png"><br><img src="../../2.bp.blogspot.com/-4EZ6bYSw1NY/W2CAIxXB6SI/AAAAAAABeDw/61W9BYAHPbQcFJdj-v6d43l-6fgG-7TggCHMYCw/s0/default.png" alt="default.png"></div>
                                </div>   
                                    
                        </main>
                        </section>
  <form action="" method="">
                            <div id="toolbar-container">
                                <!-- Toolbar buttons -->
                                <button class="ql-undo"><i class="fas fa-undo"></i></button>
                                <button class="ql-redo"><i class="fas fa-redo"></i></button>
                                <button class="ql-bold"><i class="fas fa-bold"></i></button>
                                <button class="ql-italic"><i class="fas fa-italic"></i></button>
                                <button class="ql-underline"><i class="fas fa-underline"></i></button>
                                <button class="ql-strike"><i class="fas fa-strikethrough"></i></button>
                                <button class="ql-image"><i class="fas fa-image"></i></button>
                                <button class="ql-link"><i class="fas fa-link"></i></button>
                                <button class="ql-file-link"><i class="fas fa-file"></i></button>
                                <button class="ql-fullscreen fullscreen-btn"><i class="fas fa-expand"></i></button>
                            </div>
                    
                            <div id="editor-container"></div>
                    
                            <input type="hidden" name="content" id="quill-content">
                        </form>
                    
                        <div id="fullscreen-editor">
                            <div id="fullscreen-toolbar-container">
                                <!-- Toolbar buttons for fullscreen mode -->
                                <button class="ql-bold"><i class="fas fa-bold"></i></button>
                                <button class="ql-italic"><i class="fas fa-italic"></i></button>
                                <button class="ql-underline"><i class="fas fa-underline"></i></button>
                                <button class="ql-strike"><i class="fas fa-strikethrough"></i></button>
                                <button class="ql-image"><i class="fas fa-image"></i></button>
                                <button class="ql-link"><i class="fas fa-link"></i></button>
                                <button class="ql-undo"><i class="fas fa-undo"></i></button>
                                <button class="ql-redo"><i class="fas fa-redo"></i></button>
                                <button class="ql-file-link"><i class="fas fa-file"></i></button>
                                <button class="ql-exit-fullscreen fullscreen-btn"><i class="fas fa-compress"></i></button>
                            </div>
                            <div id="fullscreen-editor-container"></div>
                        </div>
                    
                    
                
                        <section class="basic-section">
                            <main>
                            <section class="ln-comment">
                    <header>
                        <h3 class="text-lg font-bold dark:text-white">2865 Bình luận </h3>
                        <!-- <i id="refresh_comment" class="fas fa-refresh" aria-hidden="true" style="margin-left: 10px; font-size: 18px"></i></h3> -->
                    </header>
                
                    <main class="ln-comment-body">
                                    <div class="ln-comment_sign-in long-text">
                                Bạn phải <a href="../login.html">đăng nhập</a> hoặc <a href="../register.html">tạo tài khoản</a> để bình luận.
                            </div>
                                
                        
                        
                        <div class="ln-comment-group">
                    <div id="ln-comment-2560227"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2560227" data-parent="2560227">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../img/noava.png" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/199697.html">CoiSama</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        cho em hỏi là luật đọc ở đâu ạ:))<br>
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen919f.html?comment_id=2560227#ln-comment-2560227"
                                            class="text-slate-500">
                                            <time class="timeago" title="22-08-2024 15:27:16"
                                                datetime="2024-08-22T15:27:16+07:00">
                                                22-08-2024 15:27:16
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2560250"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2560250" data-parent="2560227">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u183966-4229191d-2756-4b27-b6ab-7d80477e2f9c.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/183966.html">Lynix</a>
                    </div>
                                                    <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#1aadf9]/50 dark:bg-[#0d5980]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#0d5980] dark:text-[#8ac4e0]">
                                <img class="my-auto h-[14px]" src="../img/badge/author3.png" />
                                <div class="leading-4">AUTHOR</div>
                            </div>
                        </div>
                            </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        <a href="77-quy-dinh-doi-voi-oln.html">ở đây</a>
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen85aa.html?comment_id=2560227&amp;reply_id=2560250#ln-comment-2560250"
                                            class="text-slate-500">
                                            <time class="timeago" title="22-08-2024 15:47:27"
                                                datetime="2024-08-22T15:47:27+07:00">
                                                22-08-2024 15:47:27
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                            <div id="ln-comment-2560251"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2560251" data-parent="2560227">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u183966-4229191d-2756-4b27-b6ab-7d80477e2f9c.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/183966.html">Lynix</a>
                    </div>
                                                    <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#1aadf9]/50 dark:bg-[#0d5980]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#0d5980] dark:text-[#8ac4e0]">
                                <img class="my-auto h-[14px]" src="../img/badge/author3.png" />
                                <div class="leading-4">AUTHOR</div>
                            </div>
                        </div>
                            </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        @Lynix: <a href="20-quy-dinh-chung-doi-voi-cac-du-an-dang-tai-cong-light-novel-bao-gom-truyen-dichconvert-va-oln.html">và đây</a>
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen950f.html?comment_id=2560227&amp;reply_id=2560251#ln-comment-2560251"
                                            class="text-slate-500">
                                            <time class="timeago" title="22-08-2024 15:48:31"
                                                datetime="2024-08-22T15:48:31+07:00">
                                                22-08-2024 15:48:31
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                <div class="fetch_reply" data-parent="2560227">
                            Xem thêm 2 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                        </div>
                        <img class="loading" src="../img/loading.svg" style="width: auto; height: 15px; margin-left: 10px; display: none">
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2556046"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2556046" data-parent="2556046">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u56771-d98ed01b-569c-42d6-ae80-5f8e87968034.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/56771.html">The beheaded one</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Quá hạn duyệt truyện là sao? Làm sao để ko bị xoá truyện khi lâu không đăng?
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen0096.html?comment_id=2556046#ln-comment-2556046"
                                            class="text-slate-500">
                                            <time class="timeago" title="19-08-2024 17:48:15"
                                                datetime="2024-08-19T17:48:15+07:00">
                                                19-08-2024 17:48:15
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2556059"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2556059" data-parent="2556046">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u185266-5e14e5b2-aa10-490f-8ddb-335219da4c10.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/185266.html">Cá voi không thể bơi</a>
                    </div>
                                                    <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#1aadf9]/50 dark:bg-[#0d5980]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#0d5980] dark:text-[#8ac4e0]">
                                <img class="my-auto h-[14px]" src="../img/badge/author3.png" />
                                <div class="leading-4">AUTHOR</div>
                            </div>
                        </div>
                            </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        hãy đăng trước ngày duyệt truyện
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyenaa87.html?comment_id=2556046&amp;reply_id=2556059#ln-comment-2556059"
                                            class="text-slate-500">
                                            <time class="timeago" title="19-08-2024 17:59:17"
                                                datetime="2024-08-19T17:59:17+07:00">
                                                19-08-2024 17:59:17
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                            <div id="ln-comment-2556062"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2556062" data-parent="2556046">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u56771-d98ed01b-569c-42d6-ae80-5f8e87968034.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/56771.html">The beheaded one</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        <a href="../thanh-vien/185266.html">@Cá voi không thể bơi:</a> là sao? Vì đôi khi một tháng mới có chương mới.
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyena93a.html?comment_id=2556046&amp;reply_id=2556062#ln-comment-2556062"
                                            class="text-slate-500">
                                            <time class="timeago" title="19-08-2024 18:00:15"
                                                datetime="2024-08-19T18:00:15+07:00">
                                                19-08-2024 18:00:15
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                <div class="fetch_reply" data-parent="2556046">
                            Xem thêm 4 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                        </div>
                        <img class="loading" src="../img/loading.svg" style="width: auto; height: 15px; margin-left: 10px; display: none">
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2548307"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2548307" data-parent="2548307">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../img/noava.png" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/198869.html">ri_do_do</a>
                    </div>
                                                            <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                <img class="my-auto h-[14px]" src="../img/badge/cvter2.png" />
                                <div class="leading-4">AI MASTER</div>
                            </div>
                        </div>
                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        dịch lậu sách được không ad:&gt;?
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen0aea.html?comment_id=2548307#ln-comment-2548307"
                                            class="text-slate-500">
                                            <time class="timeago" title="15-08-2024 08:49:13"
                                                datetime="2024-08-15T08:49:13+07:00">
                                                15-08-2024 08:49:13
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2548339"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2548339" data-parent="2548307">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i.docln.net/lightnovel/users/ua108777-62eb423d-3b87-4ee9-a45a-a6b68fd5eee7.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/108777.html">DoubleBoiledExtreme</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        hãy đọc luật
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen5504.html?comment_id=2548307&amp;reply_id=2548339#ln-comment-2548339"
                                            class="text-slate-500">
                                            <time class="timeago" title="15-08-2024 09:23:18"
                                                datetime="2024-08-15T09:23:18+07:00">
                                                15-08-2024 09:23:18
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                            <div id="ln-comment-2548344"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2548344" data-parent="2548307">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i.docln.net/lightnovel/users/ua39-dcda761a-ec2c-40a4-bf98-f7faee936682.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/39.html">medassin</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Muốn hako bị tế lên tv hả?
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyend322.html?comment_id=2548307&amp;reply_id=2548344#ln-comment-2548344"
                                            class="text-slate-500">
                                            <time class="timeago" title="15-08-2024 09:27:10"
                                                datetime="2024-08-15T09:27:10+07:00">
                                                15-08-2024 09:27:10
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2541929"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2541929" data-parent="2541929">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u141828-fc32724a-23f1-48cd-987e-049ca5ea4894.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/141828.html">Name113</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        thêm ảnh bìa cho truyện làm như nào trên đt ạ ?
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen0119.html?comment_id=2541929#ln-comment-2541929"
                                            class="text-slate-500">
                                            <time class="timeago" title="11-08-2024 22:55:14"
                                                datetime="2024-08-11T22:55:14+07:00">
                                                11-08-2024 22:55:14
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2541939"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2541939" data-parent="2541929">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i.docln.net/lightnovel/users/ua124404-96ea7862-0690-4d90-915f-40687108889b.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/124404.html">Perucia Shunya</a>
                    </div>
                                                    <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#1aadf9]/50 dark:bg-[#0d5980]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#0d5980] dark:text-[#8ac4e0]">
                                <img class="my-auto h-[14px]" src="../img/badge/author3.png" />
                                <div class="leading-4">AUTHOR</div>
                            </div>
                        </div>
                                <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                                <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                <img class="my-auto h-[14px]" src="../img/badge/cvter2.png" />
                                <div class="leading-4">AI MASTER</div>
                            </div>
                        </div>
                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        tải trực tiếp lên từ máy
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen28f2.html?comment_id=2541929&amp;reply_id=2541939#ln-comment-2541939"
                                            class="text-slate-500">
                                            <time class="timeago" title="11-08-2024 23:02:36"
                                                datetime="2024-08-11T23:02:36+07:00">
                                                11-08-2024 23:02:36
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold">1</span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2540974"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2540974" data-parent="2540974">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u198332-d35cf10b-177d-457e-bbdd-959dca09070e.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/198332.html">Purrely</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Cho m hỏi chút là nếu mình có nhu cầu muốn thử sức dịch chuyện thì làm như nào v ạ
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyenacf8.html?comment_id=2540974#ln-comment-2540974"
                                            class="text-slate-500">
                                            <time class="timeago" title="11-08-2024 15:13:34"
                                                datetime="2024-08-11T15:13:34+07:00">
                                                11-08-2024 15:13:34
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2540975"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2540975" data-parent="2540974">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u78290-4d034e5e-4860-4b75-9da8-2cbe931ebd1e.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/78290.html">Loy</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Thì cứ dịch thôi lmao, hỏi chung chung thế
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyenc199.html?comment_id=2540974&amp;reply_id=2540975#ln-comment-2540975"
                                            class="text-slate-500">
                                            <time class="timeago" title="11-08-2024 15:14:45"
                                                datetime="2024-08-11T15:14:45+07:00">
                                                11-08-2024 15:14:45
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold">1</span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                            <div id="ln-comment-2540979"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2540979" data-parent="2540974">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u198332-d35cf10b-177d-457e-bbdd-959dca09070e.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/198332.html">Purrely</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        <a href="../thanh-vien/78290.html">@Loy:</a> well tại cơ bản là m ko rõ là dịch thì bản thân có phải tham gia nhóm dịch hay j đó hay là bản thân có thể tự dịch tự đang á bruh<br>
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyenb655.html?comment_id=2540974&amp;reply_id=2540979#ln-comment-2540979"
                                            class="text-slate-500">
                                            <time class="timeago" title="11-08-2024 15:16:23"
                                                datetime="2024-08-11T15:16:23+07:00">
                                                11-08-2024 15:16:23
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                <div class="fetch_reply" data-parent="2540974">
                            Xem thêm 7 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                        </div>
                        <img class="loading" src="../img/loading.svg" style="width: auto; height: 15px; margin-left: 10px; display: none">
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2540250"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2540250" data-parent="2540250">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../img/noava.png" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/198271.html">Lin_Jie</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        nếu truyện chỉ có 1 người dịch là mình thì nhóm để như thế nào ạ ?
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyenaa9f.html?comment_id=2540250#ln-comment-2540250"
                                            class="text-slate-500">
                                            <time class="timeago" title="11-08-2024 06:23:14"
                                                datetime="2024-08-11T06:23:14+07:00">
                                                11-08-2024 06:23:14
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2540251"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2540251" data-parent="2540250">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i.docln.net/lightnovel/users/ua67503-328e4363-7b5e-4a58-94cd-497299c19c44.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/67503.html">•WHITEWATER•</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Để là Hako Translation hoặc lập nhóm mới
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyendf29.html?comment_id=2540250&amp;reply_id=2540251#ln-comment-2540251"
                                            class="text-slate-500">
                                            <time class="timeago" title="11-08-2024 06:25:57"
                                                datetime="2024-08-11T06:25:57+07:00">
                                                11-08-2024 06:25:57
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold">1</span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2529217"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2529217" data-parent="2529217">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i.docln.net/lightnovel/users/ua59063-e8cc73a1-11ce-463a-a101-53e93e88d256.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/59063.html">Tron5060</a>
                    </div>
                                                    <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#1aadf9]/50 dark:bg-[#0d5980]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#0d5980] dark:text-[#8ac4e0]">
                                <img class="my-auto h-[14px]" src="../img/badge/author3.png" />
                                <div class="leading-4">AUTHOR</div>
                            </div>
                        </div>
                            </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Ad cho m hỏi là nếu như truyện của m bị gỡ rồi sửa lại gần như toàn bộ nội dung rồi đăng lại có tính là một bộ mới không ạ?
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyenced3.html?comment_id=2529217#ln-comment-2529217"
                                            class="text-slate-500">
                                            <time class="timeago" title="04-08-2024 18:36:39"
                                                datetime="2024-08-04T18:36:39+07:00">
                                                04-08-2024 18:36:39
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2529222"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2529222" data-parent="2529217">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i.docln.net/lightnovel/users/ua124404-96ea7862-0690-4d90-915f-40687108889b.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/124404.html">Perucia Shunya</a>
                    </div>
                                                    <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#1aadf9]/50 dark:bg-[#0d5980]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#0d5980] dark:text-[#8ac4e0]">
                                <img class="my-auto h-[14px]" src="../img/badge/author3.png" />
                                <div class="leading-4">AUTHOR</div>
                            </div>
                        </div>
                                <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                                <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#e3953e]/50 dark:bg-[#9c662a]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#9c662a] dark:text-[#ecd8c2]">
                                <img class="my-auto h-[14px]" src="../img/badge/cvter2.png" />
                                <div class="leading-4">AI MASTER</div>
                            </div>
                        </div>
                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        thứ nhất thì trừ khi có chế tài thì không cấm đăng lại bộ cũ, thứ hai thì chắc là có đấy, <s>mà có khác bộ cũ hay không thì là do tự bản thân tác phải có đánh giá chứ</s>
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyenf6d0.html?comment_id=2529217&amp;reply_id=2529222#ln-comment-2529222"
                                            class="text-slate-500">
                                            <time class="timeago" title="04-08-2024 18:42:07"
                                                datetime="2024-08-04T18:42:07+07:00">
                                                04-08-2024 18:42:07
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold">2</span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2526276"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2526276" data-parent="2526276">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u193118-da99a8d9-3c7d-464f-955a-3df898592b7a.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/193118.html">Rin_san リン</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        MN cho hỏi là cái phần tên nhóm là Tác Giả OLN còn phần giới thiệu thì sao vậy :/
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen63f4.html?comment_id=2526276#ln-comment-2526276"
                                            class="text-slate-500">
                                            <time class="timeago" title="02-08-2024 19:32:52"
                                                datetime="2024-08-02T19:32:52+07:00">
                                                02-08-2024 19:32:52
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2526305"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2526305" data-parent="2526276">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u197188-e2c2c5d0-9b5f-4740-b4bc-16a8e0dad3f5.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/197188.html">Dorien</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Là sao? truyện sáng tác thì làm gì chỉnh được cái nhóm đâu
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen927a.html?comment_id=2526276&amp;reply_id=2526305#ln-comment-2526305"
                                            class="text-slate-500">
                                            <time class="timeago" title="02-08-2024 19:51:22"
                                                datetime="2024-08-02T19:51:22+07:00">
                                                02-08-2024 19:51:22
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                            <div id="ln-comment-2526311"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2526311" data-parent="2526276">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u193118-da99a8d9-3c7d-464f-955a-3df898592b7a.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/193118.html">Rin_san リン</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Vậy tên nhóm và phần giới thiệu điền gì ông
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyene1c4.html?comment_id=2526276&amp;reply_id=2526311#ln-comment-2526311"
                                            class="text-slate-500">
                                            <time class="timeago" title="02-08-2024 19:55:16"
                                                datetime="2024-08-02T19:55:16+07:00">
                                                02-08-2024 19:55:16
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                <div class="fetch_reply" data-parent="2526276">
                            Xem thêm 6 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                        </div>
                        <img class="loading" src="../img/loading.svg" style="width: auto; height: 15px; margin-left: 10px; display: none">
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2516786"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2516786" data-parent="2516786">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u177879-16e10c22-e1b4-4725-8a4c-375b0abd5f38.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/177879.html">Hyoko</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Mn cho hỏi, muốn add thêm thành viên vào PJ của mình thì làm như nào ạ ?
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen7adc.html?comment_id=2516786#ln-comment-2516786"
                                            class="text-slate-500">
                                            <time class="timeago" title="27-07-2024 22:29:21"
                                                datetime="2024-07-27T22:29:21+07:00">
                                                27-07-2024 22:29:21
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2516870"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2516870" data-parent="2516786">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u78290-4d034e5e-4860-4b75-9da8-2cbe931ebd1e.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/78290.html">Loy</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        <a href="https://docln.net/action/series/index?type=translation&amp;of=self" rel="nofollow noreferrer noopener" target="_blank">/action/series/index?type=translation&amp;of=self</a><br>Bấm vào nút xanh lá
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyenc632.html?comment_id=2516786&amp;reply_id=2516870#ln-comment-2516870"
                                            class="text-slate-500">
                                            <time class="timeago" title="27-07-2024 22:53:49"
                                                datetime="2024-07-27T22:53:49+07:00">
                                                27-07-2024 22:53:49
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2498440"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2498440" data-parent="2498440">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../img/noava.png" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/124708.html">Nootpvp15</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Sao để làm trên dt
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen01fd.html?comment_id=2498440#ln-comment-2498440"
                                            class="text-slate-500">
                                            <time class="timeago" title="16-07-2024 21:55:00"
                                                datetime="2024-07-16T21:55:00+07:00">
                                                16-07-2024 21:55:00
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold">1</span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2531391"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2531391" data-parent="2498440">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i.docln.net/lightnovel/users/ua165873-d6bd3ceb-827e-49eb-b4d4-6b584e5c3fca.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/165873.html">Yasy999</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Làm đc chưa bạn
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen98fc.html?comment_id=2498440&amp;reply_id=2531391#ln-comment-2531391"
                                            class="text-slate-500">
                                            <time class="timeago" title="05-08-2024 22:16:08"
                                                datetime="2024-08-05T22:16:08+07:00">
                                                05-08-2024 22:16:08
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                            <div id="ln-comment-2531962"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2531962" data-parent="2498440">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../img/noava.png" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/124708.html">Nootpvp15</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        <a href="../thanh-vien/165873.html">@Yasy999:</a> rồi
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen9cc3.html?comment_id=2498440&amp;reply_id=2531962#ln-comment-2531962"
                                            class="text-slate-500">
                                            <time class="timeago" title="06-08-2024 10:59:46"
                                                datetime="2024-08-06T10:59:46+07:00">
                                                06-08-2024 10:59:46
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2492261"
                    class="ln-comment-item mt-3 clear deleted disabled"
                    data-comment="2492261" data-parent="2492261">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u194082-873d19ed-4b0c-4731-b4fe-417bf16d02aa.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/194082.html">nhìn j  đẹp trai quá ak</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Bình luận đã bị xóa bởi nhìn j  đẹp trai quá ak
                                    </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2491439"
                    class="ln-comment-item mt-3 clear deleted disabled"
                    data-comment="2491439" data-parent="2491439">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u194082-873d19ed-4b0c-4731-b4fe-417bf16d02aa.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/194082.html">nhìn j  đẹp trai quá ak</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Bình luận đã bị xóa bởi nhìn j  đẹp trai quá ak
                                    </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2491446"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2491446" data-parent="2491439">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u193141-ffd6a02e-2e23-4ed7-8100-690087ad383a.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/193141.html">Tolfer</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Không sao đâu, chỉ bay pj + ăn 1 cảnh cáo từ Mod + ăn chửi từ các trans khác nhưng được cái là làm thế bao nổi luôn 🐧
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen7792.html?comment_id=2491439&amp;reply_id=2491446#ln-comment-2491446"
                                            class="text-slate-500">
                                            <time class="timeago" title="12-07-2024 16:49:44"
                                                datetime="2024-07-12T16:49:44+07:00">
                                                12-07-2024 16:49:44
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                            <div id="ln-comment-2491455"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2491455" data-parent="2491439">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u6442-e0232d5b-6035-48e7-af08-b916f936f922.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/6442.html">임한나</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Thế... ông nghĩ mắc gì độc giả phải nghía vào pj của ông trong khi họ có thể vào thẳng web eng và bật gg dịch? Bản dịch của ông chính là bản gg dịch mà
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyenf44d.html?comment_id=2491439&amp;reply_id=2491455#ln-comment-2491455"
                                            class="text-slate-500">
                                            <time class="timeago" title="12-07-2024 16:57:02"
                                                datetime="2024-07-12T16:57:02+07:00">
                                                12-07-2024 16:57:02
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                <div class="fetch_reply" data-parent="2491439">
                            Xem thêm 5 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                        </div>
                        <img class="loading" src="../img/loading.svg" style="width: auto; height: 15px; margin-left: 10px; display: none">
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2489967"
                    class="ln-comment-item mt-3 clear deleted disabled"
                    data-comment="2489967" data-parent="2489967">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u194082-873d19ed-4b0c-4731-b4fe-417bf16d02aa.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/194082.html">nhìn j  đẹp trai quá ak</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Bình luận đã bị xóa bởi nhìn j  đẹp trai quá ak
                                    </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2489979"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2489979" data-parent="2489967">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u106899-608420c1-0cfd-473e-9670-5173f5702c0f.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/106899.html">Kaedehara Kaguza</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        bro copy link ảnh, chọn vào phần insert/edit image trên thanh bình luận(incon hình bức tranh ấy)<br>dán link hình ảnh vào, save là xong<br>
                Còn nếu để vào truyện thì hơi phiền phức đấy=)))<br>
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen6798.html?comment_id=2489967&amp;reply_id=2489979#ln-comment-2489979"
                                            class="text-slate-500">
                                            <time class="timeago" title="11-07-2024 19:02:22"
                                                datetime="2024-07-11T19:02:22+07:00">
                                                11-07-2024 19:02:22
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold">1</span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                            <div id="ln-comment-2489998"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2489998" data-parent="2489967">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i.docln.net/lightnovel/users/ua59827-01692547-f48f-443a-b1ba-cf142484bc59.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/59827.html">UNIVERSE</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        <a href="../thanh-vien/106899.html">@Kaedehara Kaguza:</a> thêm vào truyện là phần dễ nhất mà, up từ máy lên là được
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen1dfe.html?comment_id=2489967&amp;reply_id=2489998#ln-comment-2489998"
                                            class="text-slate-500">
                                            <time class="timeago" title="11-07-2024 19:18:46"
                                                datetime="2024-07-11T19:18:46+07:00">
                                                11-07-2024 19:18:46
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold">1</span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                <div class="fetch_reply" data-parent="2489967">
                            Xem thêm 2 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                        </div>
                        <img class="loading" src="../img/loading.svg" style="width: auto; height: 15px; margin-left: 10px; display: none">
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2485745"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2485745" data-parent="2485745">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u193564-bebd0102-5617-408a-8441-d0655e72fd43.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/193564.html">Hải Khuyển</a>
                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        tôi không thể viết dù đã làm đúng như trên<br>
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyenbefc.html?comment_id=2485745#ln-comment-2485745"
                                            class="text-slate-500">
                                            <time class="timeago" title="09-07-2024 09:00:24"
                                                datetime="2024-07-09T09:00:24+07:00">
                                                09-07-2024 09:00:24
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2489999"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2489999" data-parent="2485745">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i.docln.net/lightnovel/users/ua59827-01692547-f48f-443a-b1ba-cf142484bc59.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/59827.html">UNIVERSE</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Try again
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen711b.html?comment_id=2485745&amp;reply_id=2489999#ln-comment-2489999"
                                            class="text-slate-500">
                                            <time class="timeago" title="11-07-2024 19:19:01"
                                                datetime="2024-07-11T19:19:01+07:00">
                                                11-07-2024 19:19:01
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold">1</span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                
                    </div>
                    </div>
                <div class="ln-comment-group">
                    <div id="ln-comment-2480552"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2480552" data-parent="2480552">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../img/noava.png" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/166237.html">Duuky</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Dịch truyện cần quan tâm bản quyền ko
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen23fc.html?comment_id=2480552#ln-comment-2480552"
                                            class="text-slate-500">
                                            <time class="timeago" title="04-07-2024 18:57:38"
                                                datetime="2024-07-04T18:57:38+07:00">
                                                04-07-2024 18:57:38
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="ln-comment-reply">
                            <div id="ln-comment-2480556"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2480556" data-parent="2480552">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../../i2.docln.net/ln/users/avatars/u88077-4385bd65-ce08-46d9-8044-e9347fd47d6c.jpg" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/88077.html">Sivala</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        Có chứ, đương nhiên là có rồi.
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyen1f04.html?comment_id=2480552&amp;reply_id=2480556#ln-comment-2480556"
                                            class="text-slate-500">
                                            <time class="timeago" title="04-07-2024 19:00:00"
                                                datetime="2024-07-04T19:00:00+07:00">
                                                04-07-2024 19:00:00
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                            <div id="ln-comment-2480559"
                    class="ln-comment-item mt-3 clear"
                    data-comment="2480559" data-parent="2480552">
                    <div class="flex gap-1 max-w-full">
                        <div class="w-[50px]">
                            <div class="mx-1 my-1">
                                <img src="../img/noava.png" class="w-full rounded-full" />
                            </div>
                        </div>
                        <div
                            class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                            <div class="flex min-w-0 flex-col px-2">
                                <div class="flex align-top justify-between">
                                    <div class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                    <div class="self-center">
                        <a class="font-bold leading-6 md:leading-7 ln-username " href="../thanh-vien/166237.html">Duuky</a>
                    </div>
                                                        <div class="self-center">
                            <div
                                class="flex gap-1 rounded-sm bg-[#49d0b2]/50 dark:bg-[#36a189]/50 px-1.5 py-0.5 align-middle text-[10px] font-bold text-[#36a189] dark:text-[#eaeaea]">
                                <img class="my-auto h-[14px]" src="../img/badge/trans5.png" />
                                <div class="leading-4">TRANS</div>
                            </div>
                        </div>
                        </div>
                                                    </div>
                                                    <div class="ln-comment-content long-text">
                                        <a href="../thanh-vien/88077.html">@Sivala:</a> vãi, thế phải mua bản quyền à :)))<br>
                dịch lậu đc ko
                                    </div>
                                    <div class="comment_see_more expand none">Xem thêm</div>
                                    <div class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                        <a href="368-huong-dan-dang-truyena4e4.html?comment_id=2480552&amp;reply_id=2480559#ln-comment-2480559"
                                            class="text-slate-500">
                                            <time class="timeago" title="04-07-2024 19:03:06"
                                                datetime="2024-07-04T19:03:06+07:00">
                                                04-07-2024 19:03:06
                                            </time>
                                        </a>
                                        <a
                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                            <i class="fas fa-thumbs-up me-1"></i>
                                            <span class="likecount font-semibold"></span>
                                        </a>
                                                            </div>
                                            </div>
                        </div>
                    </div>
                </div>
                    
                                <div class="fetch_reply" data-parent="2480552">
                            Xem thêm 1 trả lời <i class="fas fa-chevron-down" style="margin-left: 4px;"></i>
                        </div>
                        <img class="loading" src="../img/loading.svg" style="width: auto; height: 15px; margin-left: 10px; display: none">
                                
                    </div>
                    </div>
                
                <div class="ln-comment-page">
                <div class="pagination-footer">
                        <div class="pagination_wrap">
                            <a href="#" class="paging_item paging_prevnext prev  disabled ">Trước</a>
                
                                            <a href="368-huong-dan-dang-truyen4658.html?page=2" class="paging_item paging_prevnext next">Sau</a>
                                    </div>
                    </div>
                </div>    </main>
                
                    <script>
                        var token = 'RoVR3vbYqJwRLPo31OeRWpuk5IYzEa1XubKSx458';
                        var comment_type = 'page';
                        var comment_typeid = '368';
                    </script>
                
                    </section>
                
                
                            </main>
                        </section>
                    </div>
                </main>
@endsection
        