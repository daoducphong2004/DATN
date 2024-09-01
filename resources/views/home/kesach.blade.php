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

    <main id="mainpart" class="user-page">
        <div class="container">
            <div class="row d-block clearfix">
                <div class="col-12 col-lg-3 float-right">
                    <section class="private-tabs">
                        <header>
                            <h4 class="section-name">Tài khoản</h4>
                            <span class="user-name">LinhLinh</span>
                        </header>
                        <ul class="user-private-tabs">
                            <li class="current"><a href="kesach"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Kệ sách</a></li>
                            <li class=""><a href="bookmark"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Bookmark</a></li>
                            <li class=""><a href="tinnhan"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Hộp thư</a></li>
                        </ul>
                    </section>
                </div>

                <div style="text-align: center; margin: 0 auto 10px auto;">
                </div>

                <div class="col-12 col-lg-9 float-left">
                    <div class="pad-bottom-20">
                        <div class="row">
                            <span class="col-6">Chú ý: Số chương mới tính từ ngày đánh dấu đã đọc <b>gần nhất</b></span>
                            <span class="col-6 text-right">
                                <img class="loading" src="/img/loading.svg"
                                    style="width: auto; height: 12px; margin-right: 5px; display: none">
                                <span class="action-link mark-read-all strong">Đã đọc tất cả</span>
                            </span>
                        </div>
                    </div>
                    <section class="basic-section has-pagination">
                        <div style="display: none">
                            <div id="series_5184" style="padding: 10px 0;" class="clear">
                                <div class="col-4" style="">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio"
                                            style="background-image: url('https://i.docln.net/lightnovel/covers/s5184-5c9063be-fe93-45af-b80a-a8c416d91788-m.jpg')">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8" style="">
                                    <h4 style="text-align: left; padding-bottom: 4px; color: white">10 năm sau khi nói câu
                                        “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền thoại</h4>
                                    <div style="font-size: 14px; font-size: 0.875rem;"> Tổ Đội Anh Hùng bị tấn công bởi Quân
                                        Đoàn quỷ vương với số lượng vô số kể, không nghi ngờ gì nữa nếu đối đầu trực tiếp tổ
                                        đội sẽ hoàn toàn bị tiêu diệt.
                                        Một thành viên trong tổ đội, Pháp Sư mạnh nhất, Rakku quy... </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-borderless listext-table has-covers">
                            <tbody>
                                <tr>
                                    <th class="col-8 col-md-6">Tên truyện</th>
                                    <th class="none table-cell-m col-md-4">Mới nhất</th>
                                    <!--<th class="none table-cell-l col-2-l">Cập nhật</th>-->
                                    <th class="col-4 col-md-2 text-right">Chưa đọc</th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="a6-ratio series-cover">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('https://i.docln.net/lightnovel/covers/s5184-5c9063be-fe93-45af-b80a-a8c416d91788-m.jpg')">
                                            </div>
                                        </div>
                                        <div class="series-name">
                                            <a
                                                href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita">10
                                                năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một huyền
                                                thoại</a>
                                            <small class="type-translation">Truyện dịch</small>
                                        </div>
                                    </td>
                                    <td class="none table-cell-m">
                                        <a
                                            href="/truyen/5184-koko-wa-ore-ni-makasete-saki-ni-ike-to-itte-kara-10-nen-ga-tattara-densetsu-ni-natteita/c58018-chuong-20-di-nhan-nhiem-vu-nao">Chương
                                            20: Đi nhận nhiệm vụ nào</a>
                                        <small class="volume-name">Web Novel</small>
                                    </td>
                                    <!--<td class="none table-cell-l">

                                        <small>26/11/2019 17:03:06</small>
                                    </td>-->
                                    <td class="text-right update-action">

                                        <span class="update-status no-chapters disabled">Không có</span><br>

                                    </td>
                                    <!-- Tooltip -->

                                    <!-- // Tooltip -->
                                </tr>
                            </tbody>
                        </table>

                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection