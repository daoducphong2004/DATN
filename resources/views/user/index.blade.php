@extends('user.layout.master')
@section('content')
<div class="container" style="margin-top: 60px">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>
        
                @if (Auth::user()->role_id === 2 || Auth::user()->role_id === 1)
                <div class="panel-body">
                    <h4>Thống kê</h4>
                    <p>Số truyện đã đăng: {{ $totalBooks }} truyện</p>
                    <p>Số tập đã đăng: {{ $totalEpisodes }} tập</p>
                    <p>Số chương đã đăng: {{ $totalChapters }} chương</p>
                    <p>Tổng lợi nhuận: {{ $totalEarnings }} Coin</p>
                    <p>Tổng số chương đã được người dùng mua: {{ $totalChaptersSold }} chương</p>
                </div>
                @endif
            </div>
        </div>
        
    </div>
</div>



<html>

@endsection