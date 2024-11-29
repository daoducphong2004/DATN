    @extends('layouts.app')
    @section('title')
    Đăng Nhập
    @endsection
    @section('content')
    <div class="wrapper">
        <div class="logo">
            <img src="{{ asset('img/apple-touch-icon-114x114.png') }}" alt="Twitter Logo">
        </div>
        <div class="text-center mt-4 name">
            Novel Pub <br>
            Đăng Nhập
        </div>
        <form method="POST" action="{{ route('login') }}" class="p-3 mt-3">
            @csrf

            {{-- Hiển thị thông báo thành công --}}
            @if (session('success'))
            <div class="alert alert-success" style="background-color: rgb(90, 205, 90)">
                {{ session('success') }}
            </div>
            @endif

            {{-- Hiển thị lỗi --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mật Khẩu" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    Nhớ tài khoản
                </label>
            </div>

            <button type="submit" class="btn mt-3">Đăng Nhập</button>
        </form>
        <div class="text-center fs-6">
            <a href="{{ route('password.request') }}">Quên Mật Khẩu</a> Hoặc <a href="{{ route('register') }}">Đăng ký</a>
        </div>
    </div>
    @endsection
