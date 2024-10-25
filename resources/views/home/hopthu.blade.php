@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="page_user-pm">
        <div class="container">
            <div class="row d-block clearfix">
                <div class="col-12 col-lg-3 float-right">
                    <section class="private-tabs">
                        <header>
                            <h4 class="section-name">Tài khoản</h4>
                            <span class="user-name">{{ Auth::user()->username}}</span>
                        </header>
                        <ul class="user-private-tabs">
                            <li class=""><a href="/ke-sach"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Kệ sách</a></li>
                            <li class=""><a href="/bookmark"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Bookmark</a></li>

                            <li class="current"><a href="/tin-nhan"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Hộp thư</a></li>

                        </ul>
                    </section>
                </div>
                <div class="col-12 col-lg-9 float-left">
                    <section class="user-pm">
                        <form method="post" action="/tin-nhan/xoa">
                            <div class="mail-function">
                                <a href="/tin-nhan-moi" class="button button-green">Gửi thư mới</a>
                                <a href="/tin-nhan" class="button button-blue">Hộp thư</a>
                                <a href="/gui-tin-nhan" class="button button-blue">Thư đã gửi</a>
                                <input type="submit" class="button button-red" value="Xóa chọn">
                                <input type="hidden" name="_token" value="jwWx2XZgKdafViWEIuBZwpYwXT8I1GyckmudwpxK">
                            </div>
                            <ul class="mail-list">
                                <li style="padding: 10px 20px; text-align: center">
                                    Chưa có thư
                                </li>
                            </ul>
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
