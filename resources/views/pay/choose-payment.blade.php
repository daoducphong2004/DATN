@extends('home.layout.master')
@extends('partials.banner')

@section('title')
    Điều khoản nạp tiền
@endsection
<style>
    /* Header Section */
    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    h2 {
        font-size: 24px;
        color: #333;
        font-weight: bold;
    }

    /* Buttons */
    .btn-success {
        background-color: #28a745;
        color: #fff;
        border: none;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    /* Card Section */
    .card {
        background-color: #fff;
        border: 1px solid #e3e3e3;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 18px;
        color: #555;
        margin-bottom: 15px;
        font-weight: bold;
    }

    /* List Group */
    .list-group {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .list-group-numbered .list-group-item {
        position: relative;
        display: block;
        padding: 10px 15px;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-left: 3px solid #007bff;
    }

    .list-group-item {
        border-radius: 5px;
        margin-bottom: 8px;
    }

    .list-group-item strong {
        color: #333;
    }

    .list-group-item a {
        color: #007bff;
        text-decoration: underline;
    }

    .list-group-item a:hover {
        color: #0056b3;
    }
</style>
@section('content')
    <div class="container mt-4">
        <!-- Header Section -->
        {{-- <a class="btn btn-primary mb-4" href="{{ route('user.books', Auth::id()) }}">
            Quay lại
        </a> --}}
        <h2 class="text-center mb-4">Nạp Coin: Điều Khoản</h2>

        <!-- Buttons -->
        <div class="text-center mb-4">
            <a class="btn btn-success" href="{{ route('indexCash') }}">
                Tôi đồng ý với các điều khoản
            </a>
        </div>

        <!-- Terms Section -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Một số điều kiện cần lưu ý:</h5>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item"><strong>Coin (c)</strong> là đơn vị tiền tệ ảo chỉ lưu hành trong hệ thống.
                    </li>
                    <li class="list-group-item">Coin chỉ có thể dùng để mua truyện VIP, mua vật phẩm VIP trong hệ thống và
                        ủng hộ (donate) cho tác giả, dịch giả.</li>
                    <li class="list-group-item"><strong>Giá trị quy đổi</strong> so với VNĐ là do Hệ thống quy định, báo
                        trước mỗi khi bạn nạp tiền.</li>
                    <li class="list-group-item">Hệ thống chỉ cộng Coin cho bạn khi nào chúng tôi chắc chắn rằng đã nhận được
                        thanh toán của bạn.</li>
                    <li class="list-group-item">Một khi đã quy đổi thành coin, Hệ thống sẽ <strong>không hoàn lại</strong>
                        với bất cứ lý do nào.</li>
                    <li class="list-group-item">Các khoản phí từ cổng thanh toán, ngân hàng được hệ thống thông báo rõ ràng
                        để bạn biết trước.</li>
                    <li class="list-group-item">Nếu tài khoản của bạn bị giảm vì vi phạm nội quy, hệ thống vẫn giữ nguyên số
                        Coin bạn đã mua, nhưng không thể sử dụng trong thời hạn bị giam.</li>
                    <li class="list-group-item">Bạn tiến hành nạp Coin tức là đồng nghĩa với việc bạn đồng ý và hiểu rõ mọi
                        quy định của hệ thống.</li>
                    <li class="list-group-item">Các điều khoản đầy đủ hơn xem tại <a href="#" class="text-primary">Nội
                            Quy Website</a>.</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
