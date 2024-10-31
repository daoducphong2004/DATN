<!-- resources/views/contracts/show.blade.php -->
@extends('admin.layouts.default')

@section('content')
<div class="contract-paper">
    <h1 class="contract-title">HỢP ĐỒNG HỢP TÁC</h1>
    <p class="contract-subtitle">Số Hợp Đồng: {{ $contract->contract_number }}</p>
    <p>Hôm nay, ngày {{ \Carbon\Carbon::parse($contract->start_date)->format('d') }} tháng {{ \Carbon\Carbon::parse($contract->start_date)->format('m') }} năm {{ \Carbon\Carbon::parse($contract->start_date)->format('Y') }}, chúng tôi gồm có:</p>

    <h2>Bên A: Đại diện Trang Web</h2>
    <ul>
        <li>Tên công ty: Tên Trang Web</li>
        <li>Địa chỉ: Địa chỉ của công ty</li>
        <li>Số điện thoại: Số điện thoại công ty</li>
        <li>Email: email@trangweb.com</li>
    </ul>

    <h2>Bên B: Tác Giả</h2>
    <ul>
        <li>Tên tác giả: {{ $contract->author_name }}</li>
        <li>Địa chỉ: {{ $contract->author_address }}</li>
        <li>Số điện thoại: {{ $contract->author_phone }}</li>
        <li>Email: {{ $contract->author_email }}</li>
    </ul>

    <h2>Nội dung hợp đồng</h2>
    <p>{{ $contract->content }}</p>

    <h2>Thông tin thanh toán</h2>
    <ul>
        <li>Số tiền thanh toán: {{ number_format($contract->payment_amount, 0, ',', '.') }} VNĐ</li>
        <li>Phương thức thanh toán: {{ $contract->payment_method }}</li>
        <li>Ngày hạn thanh toán: {{ $contract->payment_due_date }}</li>
    </ul>

    <div class="signatures">
        <div class="signature">
            <p>Đại diện Bên A</p>
            <p>Ký tên:</p>
        </div>
        <div class="signature">
            <p>Đại diện Bên B</p>
            <p>Ký tên:</p>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .contract-paper {
        width: 80%;
        margin: auto;
        padding: 40px;
        border: 2px solid #000;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        background-color: #fff;
        font-family: "Times New Roman", Times, serif;
        color: #000;
        page-break-after: always;
    }
    .contract-title {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        text-decoration: underline;
        margin-bottom: 20px;
    }
    .contract-subtitle {
        text-align: center;
        font-size: 18px;
        font-style: italic;
        margin-bottom: 20px;
    }
    h2 {
        font-size: 20px;
        font-weight: bold;
        margin-top: 30px;
        margin-bottom: 10px;
        text-transform: uppercase;
    }
    p, ul {
        line-height: 1.8;
        margin-bottom: 20px;
    }
    ul {
        list-style: none;
        padding: 0;
        margin: 0 20px;
    }
    ul li {
        margin-bottom: 10px;
    }
    .signatures {
        display: flex;
        justify-content: space-around;
        margin-top: 50px;
    }
    .signature {

        .signatures {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .signature {
            text-align: center;
        }

        .signature p {
            margin: 5px 0;
        }
    </style>
@endsection
