@extends('user.layout.master')
@section('content')
<div class="container" style="margin-top: 60px">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <h4>Thống kê</h4>
                    <p>Tổng lợi nhuận: @foreach ($total_wallet as $item)
                        {{$item->balance}} coin
                        @endforeach
                    </p>
                    <p>Số tập: {{$total_book_chapter}} tập</p>
                    <p>Số chương: {{$total_chapter_transation}} chương</p>
                    <p>Tổng số chương đã được người dùng mua: {{$total_transation}} chương</p>
                </div>
            </div>
        </div>
    </div>
</div>



<html>

@endsection