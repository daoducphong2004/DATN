@extends('home.layout.master')
@include('partials.banner')
@section('content')
<style>
    h2 {
    color: #007bff;
    font-weight: bold;
    margin-bottom: 20px;
}

/* Alert Styles */
.alert {
    font-size: 16px;
    margin-bottom: 20px;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    border-radius: 4px;
    padding: 10px;
}

/* Form Styles */
.select-section {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.form-control {
    border-radius: 4px;
    border: 1px solid #ced4da;
    font-size: 16px;
    padding: 10px;
}

button.btn-success {
    background-color: #28a745;
    border-color: #28a745;
    color: #fff;
    font-size: 16px;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button.btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

/* Info Section */
.info-section {
    margin-top: 20px;
    padding: 20px;
    background-color: #e9ecef;
    border-radius: 8px;
    border: 1px solid #ced4da;
}

.info-section p {
    margin-bottom: 15px;
    font-size: 16px;
}

.info-section ul {
    margin: 10px 0;
    padding-left: 20px;
}

.info-section ul li {
    margin-bottom: 10px;
    font-size: 16px;
}

.info-section ul ul {
    padding-left: 20px;
    list-style-type: circle;
}

.info-section a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.info-section a:hover {
    text-decoration: underline;
}

.text-success {
    color: #28a745;
    font-weight: bold;
}

</style>
    <div class="container content">
        <!-- Header -->
        <h2 class="text-center">Nạp Coin: Phương Thức Nạp Coin</h2>
        {{-- @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif --}}

        <div class="min-h-screen flex items-center justify-center bg-gray-100">
            <!-- Form Section -->
            <form action="{{ route('payment') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-md">
                @csrf
                <div class="select-section mb-4">
                    <label for="amountSelect1" class="block text-gray-700 font-bold mb-2">Chọn mệnh giá 1:</label>
                    <select class="form-control border border-gray-300 rounded-md w-full p-2" id="amountSelect1" name="cash">
                        <option value="10000">10.000 VNĐ</option>
                        <option value="20000">20.000 VNĐ</option>
                        <option value="50000">50.000 VNĐ</option>
                        <option value="100000">100.000 VNĐ</option>
                        <option value="200000">200.000 VNĐ</option>
                        <option value="500000">500.000 VNĐ</option>
                    </select>
                </div>
        
                <button class="btn btn-success w-100">
                    Thanh toán
                </button>
            </form>
        </div>
        

        <!-- Information Section -->
        <div class="info-section">
            <p>Nếu có thắc mắc mời bạn liên hệ qua tài khoản admin <a
                    href="http://datn.test/tin-nhan/add?receiver=Phongg123">Phongg123</a> (từ 9.00-18.30) để được hỗ trợ nhanh nhất.</p>
            <h5 class="text-success">Các thông tin cần biết:</h5>
            <ul>
                <li>Tỉ lệ quy đổi: 1 VNĐ = 1 🪙</li>
                <li>Hệ thống sử dụng dịch vụ thanh toán bên thứ 3 là <strong>Paypal.com</strong> hoặc <strong>Chuyển Khoản
                        Ngân Hàng</strong>.</li>
                <li>Paypal hỗ trợ nạp bằng:
                    <ul>
                        <li>Thẻ tín dụng Visa, Master, Amex Quốc tế và trong nước.</li>
                        <li>Từ tài khoản của Paypal.</li>
                    </ul>
                </li>
            </ul>
            <p>Khi nạp tiền tùy theo phương thức thanh toán mà sẽ có các phí phát sinh khác nhau. Bạn có thể tham khảo tại
                trang chủ của dịch vụ tương ứng.</p>
        </div>
    </div>
    <div class="row " style="margin-bottom:20px "></div>
@endsection
