@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách tin tức
@endsection

@push('styles')

@endpush
@section('content')
    <div class="p-4" style="min-height: 800px;">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <h2 class="text-primary mb-4">Thêm tin tức mới</h2>
        <a href="{{ route('newsIndex') }}" class="btn btn-primary">
            Quay lại
        </a>
        <form action="" method="POST">
            @csrf
            <div class="row">

            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
@push('styles')

@endpush
