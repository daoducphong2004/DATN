@extends('home.layout.master')

@section('content')
    <div class="page-top-group  at-index ">
        <a href="/thao-luan/2591">
            <div class="index-background d-none d-lg-block"
                style="background-image: url('{{ asset('users/user/img/path/12890_d_l.jpg') }}')">
            </div>
            <div class="index-background d-lg-none"
                style="background-image: url('{{ asset('users/user/img/path/12890_m_l.jpg') }}'); background-size: cover">
            </div>
        </a>
    </div>

    <main id="mainpart" class="custome-page" style="min-height: 233px;">
        <!--style="background: url('img/background/bg-violet.jpg') no-repeat fixed 70px center"-->
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
                    <span class="sect-title"><a href="1-mo-trang-thao-luan-gop-y-va-bao-loi.html">Góp ý và báo
                            lỗi</a></span>
                </header>
                <main class="sect-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="page-author group-mem">
                                <div class="author_ava">
                                    <img
                                        src="{{asset('users/user/img/avatar/avatar pp.png')}}">
                                </div>
                                <div class="author-info">
                                    <div class="author_name"><a href="../thanh-vien/3.html">thonglinh90</a></div>
                                    <div class="author_role"><span>Members</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <time class="topic-time timeago" title="30/01/2017 19:42:54"
                                datetime="2017-01-30T19:42:54+07:00">8 năm</time>
                        </div>
                    </div>
                    <div class="forum-page-content long-text">
                        <p>Hiện Cổng Light Novel mở thêm một trang "Thảo luận" nơi các bạn tụ họp để cùng bạn luận chém gió
                            những Light Novel các bạn yêu thích.</p>

                        <p>Do mới cập nhật nên có thể có lỗi xảy ra nên mời các bạn vào đây để báo lại với bọn mình sớm nhất
                            có thể. Các bạn sẽ dùng acc của Cổng Light Novel để "tạo trang" vào "bình luận".</p>

                        <p>Cảm ơn các bạn đã quan tâm.</p>
                    </div>

                </main>
            </section>

            <section id="series-comments" class="basic-section">
                <header class="sect-header tab-list">
                    <span class="sect-title tab-title" data-tab-index="1">Tổng bình luận <span
                            class="comments-count">(103)</span></span>
                </header>
                <main id="fbcmt_root" class="comment-wrapper d-lg-block clear">
                    <span style="padding: 10px; display: inline-block;">Báo cáo bình luận không phù hợp ở <a
                            href="/thao-luan/619-bao-cao-binh-luan" style="color: blue">đây</a></span>
                    <div id="tab-content-1" class="tab-content clear">
                        <section class="ln-comment">
                            <main class="ln-comment-body">
                                <div class="ln-comment_sign-in long-text">
                                    Bạn phải <a href="/login">đăng nhập</a> hoặc <a href="/register">tạo tài
                                        khoản</a> để bình luận.
                                </div>
                                <!-- start comment -->
                                <div class="ln-comment-group">
                                    <div id="ln-comment-2343587" class="ln-comment-item mt-3 clear"
                                        data-comment="2343587" data-parent="2343587">
                                        <div class="row">
                                            <div class="col-2 text-center">
                                                <img src="https://i2.docln.net/ln/users/avatars/u173017-ef4b6219-34db-4bb7-9061-cf3c9471f8aa.jpg"
                                                    class="w-full rounded-full rounded-circle" width="50px">

                                            </div>
                                            <div class="col-2">
                                                <a class="font-bold link-underline link-underline-opacity-0 text-secondary"
                                                    href="/thanh-vien/tên người dung">Tên Người dùng</a>
                                            </div>

                                            <div class=" col-md-8">
                                                <ul class="list-chapters at-series">
                                                    <li class>
                                                        <div class="chapter-name">
                                                            <span>nội dung comment</span>
                                                        </div>
                                                        <div class="chapter-time">
                                                            <time>
                                                                16-01-2024 11:59:43
                                                            </time>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                    </div>
                </main>
            </section>
        </div>
    </main>
@endsection
