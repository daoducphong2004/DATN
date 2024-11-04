@extends('home.layout.master')
@section('content')
<style>
   .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 3px 20px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
            padding: 3px 20px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
        }

</style>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="pt-5 mt-5" style="margin-top: 3.25rem !important"></div>
            <h1 style="font-size: 18px; font-weight: bold">Lịch sử nạp tiền của bạn</h1>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã giao dịch</th>
                        <th>Số tiền nạp</th>
                        <th>Số coin nhận</th>
                        <th>Hình thức nạp coin</th>
                        <th>Thời gian nạp</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($dataHistory))
                        @foreach ($dataHistory as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->transaction_id}}</td>
                                <td>{{number_format($item->amount,0,',','.')}} VNĐ</td>
                                <td>{{number_format($item->coin_earned,0,',','.')}} coin</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->created_at}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">Bạn chưa từng nạp tiền vào hệ thống <a href="{{route('choose_paymen')}}">nạp ngay</a></td>
                        </tr>
                    @endif
                    <tr>
                        <td colspan="6"
                        >
                            <p class="py-2">Tổng số tiền bạn đã nạp: <b>{{number_format($totalPayment)}} VNĐ</b></p>
                            <p class="py-2">Tổng số coin bạn đã nhận được: <b>{{number_format($totalCoin)}} COIN</b></p>
                            <a href="{{route('indexPayment')}}" class="btn btn-success">Nạp tiền</a>
                            <a href="{{route('home')}}" class="btn btn-primary">Trang chủ</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
