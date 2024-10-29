<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nạp TLT: Phương Thức Nạp TLT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .content {
            max-width: 1000px;
            margin: 30px auto;
        }

        .payment-methods {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .payment-method {
            width: 48%;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .info-section {
            margin-top: 20px;
        }

        .select-section {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container content">
        <!-- Header -->
        <h2 class="text-center">Nạp Coin: Phương Thức Nạp Coin</h2>
        <div class="text-left">
            <a href="{{route('user.books', Auth::id())}}" class="btn btn-link">&larr; Trở lại trang Tài khoản</a>
        </div>
        @if(session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
        <!-- Payment Methods -->
        <div class="payment-methods">
            <div class="payment-method">
                <img src="https://via.placeholder.com/150x50?text=App+Store+%7C+Google+Play+%7C+MOMO" alt="App Store, Google Play, MOMO">
                <p>Nạp thông qua ứng dụng (có Coin ngay, có VNPAY, Banking)</p>
            </div>
            <div class="payment-method">
                <img src="https://via.placeholder.com/150x50?text=PayPal" alt="PayPal">
                <p>Thẻ Visa, MasterCard... (hỗ trợ thẻ tín dụng quốc tế, thanh toán toàn cầu, có Coin ngay)</p>
                <p class="text-success">Tăng tỉ lệ quy đổi: 1 USD => 2200 Coin</p>
            </div>
        </div>

        <!-- Select Section -->
        <form action="{{route('payment')}}" method="POST">
            @csrf
            <div class="select-section">
                <label for="amountSelect1">Chọn mệnh giá 1:</label>
                <select class="form-control mb-3" id="amountSelect1" name="cash">
                    <option value="10000">10.000 VNĐ</option>
                    <option value="20000">20.000 VNĐ</option>
                    <option value="50000">50.000 VNĐ</option>
                    <option value="100000">100.000 VNĐ</option>
                    <option value="200000">200.000 VNĐ</option>
                    <option value="500000">500.000 VNĐ</option>
                </select>
            </div>

            <button class="btn btn-success">Thanh toán</button>
        </form>

        <!-- Information Section -->
        <div class="info-section">
            <p>Nếu có thắc mắc mời bạn liên hệ team TruyenYY qua page facebook <a href="https://fb.com/TruyenYY">fb.com/TruyenYY</a> (từ 9.00-18.30) để được hỗ trợ nhanh nhất.</p>
            <h5 class="text-success">Các thông tin cần biết:</h5>
            <ul>
                <li>Tỉ lệ quy đổi: 1 VNĐ = 1 coin💎</li>
                <li>Hệ thống sử dụng dịch vụ thanh toán bên thứ 3 là <strong>Paypal.com</strong> hoặc <strong>Chuyển Khoản Ngân Hàng</strong>.</li>
                <li>Paypal hỗ trợ nạp bằng:
                    <ul>
                        <li>Thẻ tín dụng Visa, Master, Amex Quốc tế và trong nước.</li>
                        <li>Từ tài khoản của Paypal.</li>
                    </ul>
                </li>
            </ul>
            <p>Khi nạp tiền tùy theo phương thức thanh toán mà sẽ có các phí phát sinh khác nhau. Bạn có thể tham khảo tại trang chủ của dịch vụ tương ứng.</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
