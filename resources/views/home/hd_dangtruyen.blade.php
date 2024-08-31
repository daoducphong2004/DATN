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
        <!--style="background: url('img/background/bg_rem.jpg') no-repeat fixed 70px center"-->
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
                                    <img src="{{asset('users/user/img/avatar/avatar pp.png')}}">
                                </div>
                                <div class="author-info">
                                    <div class="author_name"><a href="">Embers</a></div>
                                    <div class="author_role"><span>Administrators</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <time class="topic-time timeago" title="18/06/2017 19:29:13"
                                datetime="2017-06-18T19:29:13+07:00">7 năm</time>
                        </div>
                    </div>
                    <div class="forum-page-content long-text">
                        <p><strong>Nếu ảnh nhỏ, xin hãy "Open image in new tab" để xem ảnh với kích thước lớn
                                hơn.</strong>
                        </p>

                        <div class="container mt-4">
                            <div class="content" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                 aria-expanded="false" aria-controls="collapseExample">
                                Hướng dẫn thêm truyện mới <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a>
                            </div>

                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    Trước hết bạn phải đăng nhập.<br>
                                    Nhập TÊN ĐĂNG NHẬP và MẬT KHẨU. Nếu chưa có tài khoản hãy đăng ký.<br>
                                    Sau khi đăng nhập, click vào Menu như hình dưới để đến Bảng điều khiển<br>
                                    Điền thông tin của truyện theo yêu cầu như mình đã chú thích trong ảnh. Hãy đọc quy định khi đăng truyện trước để nắm rõ tránh cho truyện bị xóa.<br>
                                </div>
                            </div>

                            <div class="content" data-bs-toggle="collapse" data-bs-target="#collapseGroup"
                                 aria-expanded="false" aria-controls="collapseGroup">
                                Hướng dẫn thêm nhóm dịch mới <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a>
                            </div>

                            <div class="collapse" id="collapseGroup">
                                <div class="card card-body">
                                    Sau khi vào bảng điều khiển, ấn vào danh sách nhóm dịch ở Menu Nhóm dịch.<br>
                                    Thêm nhóm dịch mới<br>
                                    Điền các thông tin cần thiết. Vậy là xong!<br>
                                </div>
                            </div>

                            <div class="content" data-bs-toggle="collapse" data-bs-target="#collapseAdditional"
                                 aria-expanded="false" aria-controls="collapseAdditional">
                                Hướng dẫn thêm các tập và chương chuyện <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a>
                            </div>

                            <div class="collapse" id="collapseAdditional">
                                <div class="card card-body">
                                    Sau khi Thêm truyện mới. Bạn sẽ được dẫn vào trang quản lý truyện. Sử dụng chuột phải lên tên truyện để mở các Menu tương ứng. Click Thêm tập<br>
                                    Nhập Tiêu đề của tập bắt buộc, còn các khung khác có thể bỏ qua.<br>
                                    Sau khi thêm tập mới, click chuột phải vào tên tập đó để chỉnh sửa hoặc thêm chương như ảnh bên dưới<br>
                                    Nhập các nội dung để thêm chương mới như yêu cầu. Có thể upload ảnh minh họa bằng các chức năng như hình bên dưới. Nếu số ảnh upload bị thiếu, có thể do ảnh đó bị lỗi hoặc server bị lỗi.<br>
                                    Sau khi thêm chương mới, click chuột phải vào tên chương vừa tạo để Sửa hoặc Xóa chương.
                                </div>
                            </div>

                            <div class="content" data-bs-toggle="collapse" data-bs-target="#collapseNote"
                                 aria-expanded="false" aria-controls="collapseNote">
                                Hướng dẫn thêm chú thích <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a>
                            </div>

                            <div class="collapse" id="collapseNote">
                                <div class="card card-body">
                                    Làm theo hướng dẫn thêm tập và thêm chương ở bên trên. Sau khi đã thêm chương, kéo xuống cuối cùng trang Sửa chương để thêm chú thích<br>
                                    Nhập Tiêu đề của tập bắt buộc, còn các khung khác có thể bỏ qua.<br>
                                    Sau khi thêm tập mới, click chuột phải vào tên tập đó để chỉnh sửa hoặc thêm chương như ảnh bên dưới<br>
                                    Nhập các nội dung để thêm chương mới như yêu cầu. Có thể upload ảnh minh họa bằng các chức năng như hình bên dưới. Nếu số ảnh upload bị thiếu, có thể do ảnh đó bị lỗi hoặc server bị lỗi.<br>
                                    Sau khi thêm chương mới, click chuột phải vào tên chương vừa tạo để Sửa hoặc Xóa chương.
                                </div>
                            </div>

                            <div class="content" data-bs-toggle="collapse" data-bs-target="#collapseOrder"
                                 aria-expanded="false" aria-controls="collapseOrder">
                                Hướng dẫn sắp xếp lại thứ tự các Tập và Chương <a class="spoiler_toggle" href="#">Click vào để hiển thị nội dung</a>
                            </div>


                        <div class="collapse" id="collapseOrder">
                            <div class="card card-body">
                                Vào trang quản lý truyện, và làm theo hướng dẫn dưới đây để sắp xếp thứ tự các tập và chương truyện<br>
                                <img src="{{asset('users/user/img/huongdan/hd1.png')}}" alt=""><br>
                                <img src="{{asset('users/user/img/huongdan/hd2.png')}}" alt=""><br>
                                <img src="{{asset('users/user/img/huongdan/hd3.png')}}" alt="">
                            </div>
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
                                                <img src="{{asset('users/user/img/avatar/avatar pp.png')}}"
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
