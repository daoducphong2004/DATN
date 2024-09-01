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

    <main id="mainpart" class="custome-page">
        <!--style="background: url('img/background/bg-violet.jpg') no-repeat fixed 70px center"-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb">
                        <span class="breadcrum-level"><a href="https://docln.net"><i class="fas fa-home"></i></a></span>
                        <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                        <span class="breadcrum-level"><a href="https://docln.net/thao-luan">Thảo luận</a></span>
                    </div>

                </div>
            </div>
            <section class="page-content basic-section">
                <header class="sect-header">
                    <span class="sect-title"><a href="/thao-luan/2-gioi-thieu-cong-light-novel"><i class="fas fa-lock"></i>
                            Giới thiệu Cổng Light Novel</a></span>
                </header>
                <main class="sect-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="page-author group-mem">
                                <div class="author_ava">
                                    <img
                                        src="https://3.bp.blogspot.com/-Yk-cAlYNDXg/WCdtQWo7LCI/AAAAAAAAv8Y/EJxI3Jh3w_Y/w100/ava2.png">
                                </div>
                                <div class="author-info">
                                    <div class="author_name"><a href="/thanh-vien/3">thonglinh90</a></div>
                                    <div class="author_role"><span>Members</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <time class="topic-time timeago" title="30/01/2017 19:49:15"
                                datetime="2017-01-30T19:49:15+07:00">8 năm</time>
                        </div>
                    </div>
                    <div class="forum-page-content long-text">
                        <p>Cổng Light Novel (từng được gọi với cái tên BBS Hako) là một cổng thông tin chuyên về Light Novel
                            ra đời từ năm 2013 dưới sự cộng tác của Hako và Sonako Light Novel Wiki, trang hoạt động với các
                            tiêu chí và mục đích sau đây:</p>

                        <ul>
                            <li>Tập hợp toàn bộ bản dịch Light Novel Tiếng Việt có trên mạng.</li>
                            <li>Tạo điều kiện cho các nhóm dịch Light Novel chia sẻ, quảng bá và thảo luận thành quả của họ.
                            </li>
                            <li>Giúp người đọc tiếp cận với Light Novel một cách trực quan thông qua hệ thống đọc online
                                chuyên biệt.</li>
                        </ul>
                        <p>Những yếu tố giúp Cổng Light Novel ưu việt hơn những dịch vụ chia sẻ Light Novel khác:</p>

                        <ul>
                            <li>Ở CLN, tốc độ được đặt lên trên hết, trang sử dụng server riêng và có khả năng lưu trữ toàn
                                bộ dữ liệu, giúp cho việc truy cập và hiển thị ảnh nhanh hơn với chất lượng tốt nhất.</li>
                            <li>Giao diện đọc online được tối ưu hóa với chức năng tăng size font và giãn cách line, cùng
                                với hệ thống bookmark cho người dùng.</li>
                            <li>CLN hỗ trợ người dùng đăng bản dịch với bộ công cụ nhanh và hiệu quả.</li>
                            <li>Hỗ trợ đọc online trên thiết bị cầm tay và điện thoại di động.</li>
                        </ul>
                    </div>

                </main>
            </section>

            <section class="basic-section">
                <main>
                    <section class="ln-comment">
                        <header>
                            <h3 class="text-lg font-bold dark:text-white">0 Bình luận </h3>
                            <!-- <i id="refresh_comment" class="fas fa-refresh" aria-hidden="true" style="margin-left: 10px; font-size: 18px"></i></h3> -->
                        </header>

                        <main class="ln-comment-body">



                            <div class="ln-comment-page">
                            </div>
                        </main>

                        <script>
                            var token = 'jwWx2XZgKdafViWEIuBZwpYwXT8I1GyckmudwpxK';
                            var comment_type = 'page';
                            var comment_typeid = '2';
                        </script>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.1/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>
                            tinymce.init({
                                selector: 'textarea',
                                inline: false,
                                height: 200,
                                skin: 'oxide',
                                content_css: 'default',
                                branding: false,
                                menubar: false,
                                contextmenu: false,
                                entities: '160,nbsp,38,amp,60,lt,62,gt',
                                paste_word_valid_elements: 'b,strong,i,em,u,s,a,p,br,img',
                                element_format: 'html',
                                formats: {
                                    strikethrough: {
                                        inline: 's',
                                        remove: 'all'
                                    },
                                    underline: {
                                        inline: 'u',
                                        remove: 'all'
                                    },
                                },
                                plugins: 'wordcount link image code fullscreen paste emoticons',
                                toolbar: 'emoticons undo redo | bold italic underline strikethrough forecolor | link image | removeformat | fullscreen'
                            });
                        </script>
                    </section>


                </main>
            </section>
        </div>
    </main>
@endsection
