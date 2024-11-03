@extends('user.layout.master')

@section('content')
    <div class="container">
        <h1>Chỉnh sửa Hợp đồng</h1>
        <form action="{{ route('contracts.update', $contract) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            @include('user.contracts.form', ['contract' => $contract])
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
