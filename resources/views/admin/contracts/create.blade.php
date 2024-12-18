<!-- resources/views/contracts/create.blade.php -->
@extends('admin.layouts.default')
@section('title')
    Tạo hợp đồng mới - Cổng Light Novel - Đọc Light Novel
@endsection
@push('styles')
    <style>
        #status {
            width: auto;
            height: auto;
            position: relative;
            left: 0;
            top: 0;
            margin: 0;
        }
    </style>
@endpush

@section('content')
    {{-- <div class="container">
        <h1>Tạo Hợp đồng Mới</h1>
        @if ($errors->has('errors'))
            <div class="alert alert-danger">
                {{ $errors->first('errors') }}
            </div>
        @endif
        <form action="{{ route('contracts-manage.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" value="{{ Auth::id() }}">
            @include('admin.contracts.form')
            <br>
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div> --}}
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Tạo hợp đồng mới</h4>
                    @if ($errors->has('errors'))
                        <div class="alert alert-danger">
                            {{ $errors->first('errors') }}
                        </div>
                    @endif
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="{{ route('contracts-manage.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" value="{{ Auth::id() }}">
                        @include('admin.contracts.form')
                        <br>
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Quay lại</a>
                    </form>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection

@push('scripts')
@endpush