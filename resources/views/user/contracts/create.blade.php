<!-- resources/views/contracts/create.blade.php -->
@extends('user.layout.master')

@section('content')
    <div class="container">
        <h1>Tạo Hợp đồng Mới</h1>
        @if ($errors->has('errors'))
    <div class="alert alert-danger">
        {{ $errors->first('errors') }}
    </div>
@endif
        <a href="/Hợp đồng dịch vụ và chia sẻ doanh thu.docx" download>
            <button style="padding: 10px 20px; font-size: 16px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">
                Tải Hợp Đồng Mẫu
            </button>
        </a>
        <a href="{{ route('contracts.dieu-khoan') }}">
            <button style="padding: 10px 20px; font-size: 16px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">
               Xem hợp đồng
            </button>
        </a>
        
        <form action="{{ route('contracts.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            @include('user.contracts.form')
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>

@endsection
