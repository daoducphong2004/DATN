@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        <a href="">
            <div class="index-background d-none d-lg-block"
                style="background-image: url('{{ asset('/images/banners/fbg_d.jpg') }}')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('{{ asset('/images/banners/fbg_m.jpg') }}'); background-size: cover">
            </div>
        </a>
    </div>

    <main id="mainpart" class="page_user-pm">
        <div class="container">
            <div class="row d-block clearfix">
                <div class="col-12 col-lg-3 float-right">
                    <section class="private-tabs">
                        <header>
                            <h4 class="section-name">Tài khoản</h4>
                            <span class="user-name">LinhLinh931993</span>
                        </header>
                        <ul class="user-private-tabs">
                            <li class=""><a href="kesach"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Kệ sách</a></li>
                            <li class=""><a href="bookmark"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Bookmark</a></li>
                            <li class="current"><a href="tinnhan"><span class="none inline-l"><i
                                            class="fas fa-chevron-left"></i></span><span class="float-right none-l"><i
                                            class="fas fa-chevron-down"></i></span>Hộp thư</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-12 col-lg-9 float-left">
                    <section class="user-pm">
                        <form method="post" action="/tin-nhan/xoa">
                            <div class="mail-function">
                                <a href="tinnhanmoi" class="button button-green">Gửi thư mới</a>
                                <a href="tinnhan" class="button button-blue">Hộp thư</a>
                                <a href="guitinnhan" class="button button-blue">Thư đã gửi</a>
                                <input type="submit" class="button button-red" value="Xóa chọn">
                                <input type="hidden" name="_token" value="jwWx2XZgKdafViWEIuBZwpYwXT8I1GyckmudwpxK">
                            </div>
                            <ul class="mail-list">
                                @forelse ($sentLetters as $letter)
                                <li style="padding: 10px 20px;">
                                    <h1>Tiêu đề: {{ $letter->title }} </h1> 
                                    <p>Nội dung: {{ $letter->content }}</p> 
                                    <p>Người nhận:  {{ $letter->receiver->email}}</p>
                                    <p>Ngày gửi: {{ $letter->created_at->format('d/m/Y H:i') }}</p> 
                                </li>
                            @empty
                                <li style="padding: 10px 20px; text-align: center">
                                    Bạn chưa gửi thư nào.
                                </li>
                            @endforelse
                            </ul>
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
