@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="logo">
        <img src="{{ asset('img/apple-touch-icon-114x114.png') }}" alt="Twitter Logo">
    </div>
    <div class="text-center mt-4 name">
        Novel Pub <br>
        Đặt lại mật khẩu
    </div>

    <form method="POST" action="{{ route('password.email') }}" class="p-3 mt-3">
        @csrf
        @if (session('status'))
            <div class="alert alert-success text-center">
                {{ session('status') }}
            </div>
        @endif

        <div class="form-field d-flex align-items-center">
            <span class="far fa-envelope"></span>
            <input id="email" type="email" name="email" placeholder="Nhập email của bạn" 
                   class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" 
                   required autocomplete="email" autofocus>
        </div>

        @error('email')
            <div class="text-danger mt-2 text-center">
                <small>{{ $message }}</small>
            </div>
        @enderror

        <button class="btn mt-3">Gửi</button>
    </form>

    <div class="text-center fs-6">
        <a href="{{ route('login') }}">Quay lại đăng nhập</a>
    </div>
</div>

<style>

</style>
@endsection
