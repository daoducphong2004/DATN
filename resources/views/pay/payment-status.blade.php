<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo thanh toán</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .notification-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f9fa;
            text-align: center;
        }

        .success-icon {
            font-size: 60px;
            color: green;
            margin-bottom: 20px;
        }

        .failed-icon {
            font-size: 60px;
            color: red;
            margin-bottom: 20px;
        }

        .order-info {
            margin-top: 20px;
            text-align: left;
        }

        .order-info table {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="notification-container">
            <!-- Success Icon -->
            <div class="success-icon">
                <i class="fas fa-check-circle"></i> <!-- Biểu tượng thành công -->
            </div>

            <!-- Thông báo -->
            <h4>Cảm ơn quý khách đã nạp coin vào hệ thống</h4>
            <p>
                Nếu có trường hợp gì xảy ra vui lòng liên hệ với quản trị viên để được hỗ trợ. <br>
                Xin cảm ơn quý khách đã cho chúng tôi cơ hội được phục vụ!
            </p>

            <!-- Thông tin đặt hàng -->
            <div class="order-info">
                <h5>Thông tin đặt hàng</h5>
                <table class="table table-bordered">
                    <tr>
                        <td><strong>Mã đơn hàng:</strong></td>
                        <td>{{$dataInput->vnp_TxnRef}}</td>
                    </tr>
                    <tr>
                        <td><strong>Hình thức thanh toán:</strong></td>
                        <td>{{$dataInput->vnp_OrderInfo}}</td>
                    </tr>
                    <tr>
                        <td><strong>Số tiền thanh toán:</strong></td>
                        <td>{{number_format($dataInput->vnp_Amount/100)}} VNĐ</td>
                    </tr>
                    <tr>
                        <td><strong>Tài khoản khách hàng:</strong></td>
                        <td>{{$userInfo->username}}</td>
                    </tr>
                    <tr>
                        <td><strong>Email khách hàng:</strong></td>
                        <td>{{$userInfo->email}}</td>
                    </tr>
                    <tr>
                        <td><strong>Số coin hiện tại:</strong></td>
                        <td>{{number_format($userInfo->coin_earned)}} coin</td>
                    </tr>
                </table>
            </div>
        </div>

        <a href="{{route('home')}}" class="btn btn-success w-100">Quay về trang chủ</a>
    </div>

    <!-- Font Awesome cho biểu tượng -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
