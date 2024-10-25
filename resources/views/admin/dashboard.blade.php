@extends('admin.layouts.default')

@section('title')
    @parent
     Trang quản trị
@endsection

@push('styles')
    
@endpush

@section('content')
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
    <div class="panel-heading">Home</div>
    <div class="panel-body">
    <h4>Thống kê</h4>
    <p>Số truyện: {{ $totalStories }}</p>
    <p>Số tập: {{ $totalEpisodes }}</p>
    <p>Số chương: {{ $totalChapters }}</p>
    <p>Số người dùng: {{ $totalUsers }}</p>
    </div>
    </div>
    </div>
    </div>
@endsection

@push('scripts')

@endpush

