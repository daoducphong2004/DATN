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
                    <table>
                        
                    </table>
                    <p>Số chương: 96.842</p>
                </div>
            </div>
        </div>
    </div>
</div>



<html>

@endsection