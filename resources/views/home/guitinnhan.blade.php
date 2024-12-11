@extends('home.layout.master')
@section('content')
    <div class="page-top-group  at-index ">
        @include('partials.banner')
    </div>

    <main id="mainpart" class="page_user-pm">
        <div class="container">
            <div class="row d-block clearfix">
                @include('home.layout.box')

                <div class="col-12 col-lg-9 float-left">
                    <section class="user-pm">
                        <form method="post" action="/tin-nhan/xoa">
                            <div class="mail-function">
                                <a href="/tin-nhan-moi" class="button button-green">Gửi thư mới</a>
                                <a href="/tin-nhan" class="button button-blue">Hộp thư</a>
                                <a href="/gui-tin-nhan" class="button button-blue">Thư đã gửi</a>
                                <input type="submit" class="button button-red" value="Xóa chọn">
                                @csrf
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
