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
                        <form method="POST" action="{{ route('Letter.delete') }}">
                            @csrf
                            <input type="hidden" name="type" value="{{ $type }}">
                            <div class="mail-function">
                                <a href="{{ route('Letter.create') }}" class="button button-green">Gửi thư mới</a>
                                <a href="{{ route('Letter.index') }}" class="button button-blue">Hộp thư</a>
                                <a href="{{ route('Letter.sender') }}" class="button button-blue">Thư đã gửi</a>
                                <input type="submit" style="color: black" class="button button-red" value="Xóa chọn">
                            </div>
                            <ul class="mail-list">
                                @foreach ($letters as $letter)
                                    <li class="mail">
                                        <div class="mail-name">
                                            <input type="checkbox" name="messages[]" value="{{ $letter->id }}" class="mail-checkbox">
                                            <a href="{{ route('Letter.show', $letter->id) }}">
                                                {{ $letter->title }}
                                                <small>{{ $letter->content }}</small>
                                            </a>
                                        </div>
                                        <div class="mail-time">
                                            <time class="topic-time timeago"
                                                  title="{{ $letter->created_at->format('d-m-Y H:i:s') }}"
                                                  datetime="{{ $letter->created_at->toIso8601String() }}">
                                            </time>
                                        </div>
                                        <div class="sender">
                                            <div class="sender-avatar">
                                                <img src="{{ !empty($letter->sender->avatar_url) ? Storage::url($letter->sender->avatar_url) : asset('img/noava.png') }}">
                                            </div>
                                            <a class="sender-name" href="/thanh-vien/{{ $letter->sender_id }}">
                                                {{ $letter->sender->username ?? 'Unknown' }}
                                            </a>
                                        </div>
                                    </li>
                                @endforeach   
                            </ul>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
