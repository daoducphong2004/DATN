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

    <main id="mainpart" class="user-page" style="min-height: 212px;">
        <div class="container">
            <div class="row d-block clearfix">
                <div class="col-12 col-lg-3 float-right">
                    <section class="private-tabs">
                        <header>
                            <h4 class="section-name">Tài khoản</h4>
                            <span class="user-name">Tên tài khoản </span>
                        </header>
                        <ul class="user-private-tabs">
                            <li class="current">
                                <a class="text-black link-underline link-underline-opacity-0" href="{{ url('kesach') }}">
                                    <span class="none inline-l"><i class="fas fa-chevron-left"></i></span>
                                    <span class="float-right none-l"><i class="fas fa-chevron-down"></i></span>Kệ sách
                                </a>
                            </li>
                            <li class="">
                                <a class="text-black link-underline link-underline-opacity-0" href="{{ url('bookmark') }}">
                                    <span class="none inline-l"><i class="fas fa-chevron-left"></i></span>
                                    <span class="float-right none-l"><i class="fas fa-chevron-down"></i></span>Bookmark
                                </a>
                            </li>
                        </ul>
                    </section>
                </div>

                <div style="text-align: center; margin: 0 auto 10px auto;">
                </div>

                <div class="col-12 col-lg-9 float-left">
                    <div class="pad-bottom-20">
                        <div class="row">
                            <h4><b>Danh sách truyện đã đánh dấu</b></h4>
                        </div>
                    </div>
                    <section class="basic-section has-pagination">
                        <table class="table table-borderless listext-table has-covers">
                            <tbody>
                                <tr>
                                    <th class="col-8 col-md-6">Tên truyện</th>
                                    <th class="none table-cell-m col-md-4">Mới nhất</th>
                                    <th class="col-4 col-md-2 text-right">Chưa đọc</th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="a6-ratio series-cover">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('{{asset('users/user/img/path/image10.jpg')}}')">
                                            </div>
                                        </div>
                                        <div class="series-name">
                                            <a href="" class="link-underline link-underline-opacity-0 text-black">10
                                                năm sau khi nói câu “Cứ đi đi, ở đây để tôi lo”, tôi đã trở thành một
                                                huyền thoại</a>
                                            <small class="type-translation">Truyện dịch</small>
                                        </div>
                                    </td>
                                    <td class="none table-cell-m">
                                        <a href="" class="link-underline link-underline-opacity-0 text-black">Chương
                                            20: Đi nhận nhiệm vụ nào</a>
                                        <small class="volume-name">Web Novel</small>
                                    </td>

                                    <td class="text-right update-action">

                                        <span class="update-status no-chapters disabled">Không có</span><br>

                                    </td>

                                </tr>
                            </tbody>
                        </table>

                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
