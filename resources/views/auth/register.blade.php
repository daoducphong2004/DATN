@extends('layouts.app')
@section('title')
Đăng Ký
@endsection
@section('content')
<div class="wrapper">
    <div class="logo">
        <img src="{{ asset('img/apple-touch-icon-114x114.png') }}" alt="Novel Pub Logo">
    </div>
    <div class="text-center mt-4 name">
        Novel Pub <br>
        Đăng Ký
    </div>
    <form method="POST" action="{{ route('createAccount') }}" class="p-3 mt-3">
        @csrf

        {{-- Hiển thị lỗi nếu có --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- Trường Nhập Tên --}}
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input id="name" type="text" class="form-control @error('username') is-invalid @enderror" 
                   name="username" value="{{ old('username') }}" placeholder="Tên Tài Khoản" required autofocus>
            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        {{-- Trường Nhập Email --}}
        <div class="form-field d-flex align-items-center">
            <span class="far fa-envelope"></span>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                   name="email" value="{{ old('email') }}" placeholder="Email" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        {{-- Trường Nhập Mật Khẩu --}}
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                   name="password" placeholder="Mật Khẩu" required>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        {{-- Trường Nhập Lại Mật Khẩu --}}
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input id="password-confirm" type="password" class="form-control" 
                   name="password_confirmation" placeholder="Xác Mật Khẩu" required>
        </div>

        {{-- Nút Đăng Ký --}}
        <button type="submit" class="btn mt-3">Đăng Ký</button>
    </form>
    <div class="text-center fs-6">
        Bạn đã có tài khoản rồi? <a href="{{ route('login') }}">Đăng Nhập</a>
    </div>
</div>
@endsection
