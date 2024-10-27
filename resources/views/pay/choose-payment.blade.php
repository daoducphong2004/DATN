{{-- HTml chạy độc lập nên đang tạo 1 file riêng và có link cdn bootstrap 4.5.2 --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nạp Coin: Điều Khoản</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .content {
            max-width: 800px;
            margin: 50px auto;
        }

        .btn-custom {
            margin-bottom: 15px;
        }

        .card {
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container content">
        <!-- Header Section -->
        <a class="btn btn-primary" href="{{route('user.books', Auth::id())}}">Quay lại</a>
        <h2 class="text-center">Nạp Coin: Điều Khoản</h2>

        <!-- Buttons -->
        <div class="text-center">
            <a class="btn btn-success btn-lg btn-custom" href="{{route('indexCash')}}">Tôi đồng ý với các điều khoản</a>
        </div>

        <!-- Terms Section -->
        <div class="card">
            <div class="card-body">
                <h5>Một số điều kiện cần lưu ý:</h5>
                <ol>
                    <li><strong>Coin (c)</strong> là đơn vị tiền tệ ảo chỉ lưu hành trong hệ thống.</li>
                    <li>Coin chỉ có thể dùng để mua truyện VIP, mua vật phẩm VIP trong hệ thống và ủng hộ (donate) cho tác giả, dịch giả.</li>
                    <li><strong>Giá trị quy đổi</strong> so với VNĐ là do Hệ thống quy định, báo trước mỗi khi bạn nạp tiền.</li>
                    <li>Hệ thống chỉ cộng Coin cho bạn khi nào chúng tôi chắc chắn rằng đã nhận được thanh toán của bạn.</li>
                    <li>Một khi đã quy đổi thành coin, Hệ thống sẽ <strong>không hoàn lại</strong> với bất cứ lý do nào.</li>
                    <li>Các khoản phí từ cổng thanh toán, ngân hàng được hệ thống thông báo rõ ràng để bạn biết trước.</li>
                    <li>Nếu tài khoản của bạn bị giảm vì vi phạm nội quy, hệ thống vẫn giữ nguyên số Coin bạn đã mua, nhưng không thể sử dụng trong thời hạn bị giam.</li>
                    <li>Bạn tiến hành nạp Coin tức là đồng nghĩa với việc bạn đồng ý và hiểu rõ mọi quy định của hệ thống.</li>
                    <li>Các điều khoản đầy đủ hơn xem tại <a href="#">Nội Quy Website</a>.</li>
                </ol>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <div class="row">
                <div class="col-md-4">Nội Quy</div>
                <div class="col-md-4">Giới Thiệu</div>
                <div class="col-md-4">Liên Hệ</div>
            </div>
            <p>&copy; 2012-2024 Hệ thống</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
