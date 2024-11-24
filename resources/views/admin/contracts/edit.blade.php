@extends('admin.layouts.default')

@section('content')
    <div class="container">
        <h1>Chỉnh sửa Hợp đồng</h1>
        <form action="{{ route('contracts-manage.update', $contracts_manage) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            @include('layouts.TinyMCEscript')
            @include('admin.contracts.form', ['contract' => $contracts_manage])
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
