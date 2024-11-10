<!-- resources/views/contracts/show.blade.php -->
@extends('admin.layouts.default')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
        color: #333;
    }
    .contract-container {
        width: 80%;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h3 {
        color: #444;
        text-align: center; /* Căn giữa tiêu đề */
    }
    .center{
        text-align: center;
    }
    .two-columns {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    .column {
        width: 45%; /* Cột có chiều rộng 45% */
    }
    ul {
        list-style: none;
        padding: 0;
    }
    ul li {
        margin-bottom: 10px;
    }
    .signatures {
        display: flex;
        justify-content: space-around;
        margin-top: 30px;
    }
    .signature {
        text-align: center;
    }
</style>
<a href="{{ route('contracts-manage.index') }}" class="btn btn-primary" >Quay lại</a>
<h1>Trạng thái hợp đồng: {{ $contract->status }}</h1>

<div id="contract" class="contract-container">
    <h3>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h3>
    <p class="center"><strong>Độc lập - Tự do - Hạnh phúc</strong></p>
    <hr>

    <h3>Hợp Đồng Chia Sẻ Doanh Thu</h3>
    <p class="center"><strong>Hợp Đồng số:</strong> {{ $contract->contract_code }}</p>
    <p class="center"><strong>Ngày ký:</strong> {{ $contract->updated_at }} </p>

    <h4>1. Các Bên Tham Gia</h4>
    <div class="two-columns">
        <div class="column">
            <strong>Bên A:</strong>
            <ul>
                <li>Tên Công Ty/Người đại diện: Novel Pub</li>
                <li>Địa chỉ: Nam Từ Liên, Hà Nội</li>
                <li>Điện thoại: 0123456789</li>
                <li>Email: novelpub@gmail.com</li>
            </ul>
        </div>
        <div class="column">
            <strong>Bên B:</strong>
            <ul>
                <li>Tên Công Ty/Người đại diện: {{ $contract->user->username }}</li>
                <li>Điện thoại: {{ $contract->user->phone }}</li>
                <li>Email: {{ $contract->user->email }}</li>
            </ul>
        </div>
    </div>


    <h4>2. Điều Khoản Hợp Đồng</h4>
    <p>{!! $contract->terms !!}</p>

<br>
    <h4>Ký Tên</h4>
    <div class="signatures">
        <div class="signature">
            <p><strong>Đại Diện Bên A</strong></p>
            <p></p>
            <p></p>

        </div>
        <div class="signature">
            <p><strong>Đại Diện Bên B</strong></p>
            <p></p>
            <p></p>
        </div>
    </div>
</div>

<div class="text-center mt-3">
    <a href="{{ asset('storage/file/Hợp đồng chia sẻ doanh thu.docx') }}" class="btn btn-primary" download>Tải Hợp Đồng</a>
</div>


@endsection
