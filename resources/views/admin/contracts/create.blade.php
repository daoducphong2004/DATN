<!-- resources/views/contracts/create.blade.php -->
@extends('admin.layouts.default')

@section('content')
    <div class="container">
        <h1>Tạo Hợp đồng Mới</h1>
        <form action="{{ route('contracts.store') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ Auth::id() }}">
            @include('admin.contracts.form')
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
