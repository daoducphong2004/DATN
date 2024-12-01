@extends('user.layout.master')
@section('content')
    <div class="container" style="margin-top: 60px">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>
                    <!-- Biểu đồ sẽ được hiển thị tại đây -->
                    <h2>Thông tin ví</h2>
        
                    <!-- Hiển thị thông tin ví -->
                    <div class="card">
                        <div class="card-header">
                            Số dư ví của bạn
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Số dư coin: {{ number_format($wallet->balance, 2) }} {{ $wallet->currency }}</h5>
                            <p class="card-text">Đơn vị tiền tệ: {{ $wallet->currency }}</p>
            
                            <!-- Nút điều hướng đến trang giao dịch -->
                            <a href="{{ route('user.transactions', ['wallet_id' => $wallet->id]) }}" class="btn btn-primary">
                                Xem giao dịch
                            </a>
                        </div>
                    </div>
            
                    <div>
                        <canvas id="revenueChart" width="400" height="200"></canvas>
                    </div>
                    <div id="totalRevenue"></div>
                    <div id="revenueByStory"></div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


                </div>
            </div>

        </div>
    </div>
    <script>
      $(document).ready(function() {
    const userId = {{ Auth::id() }};  // ID của tác giả
    const year = 2024;  // Năm muốn thống kê

    // Gửi yêu cầu Ajax để lấy dữ liệu thống kê
    $.ajax({
        url: '/author/revenue-details/' + userId + '/' + year,  // URL đến route đã tạo
        method: 'GET',
        success: function(response) {
            // Lấy dữ liệu thống kê từ phản hồi
            const totalRevenue = response.total_revenue;
            const revenueByStory = response.revenue_by_story;

            // In dữ liệu ra console để kiểm tra
            console.log(response);

            // Chuẩn bị dữ liệu cho biểu đồ doanh thu theo tháng
            const book = [];
            const revenues = [];
            
            revenueByStory.forEach(function(item) {
                book.push(item.book_id);  // Tháng
                revenues.push(item.total_revenue);  // Doanh thu trong tháng
            });

            // Vẽ biểu đồ doanh thu theo tháng
            const ctx = document.getElementById('revenueChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',  // Loại biểu đồ (line, bar, etc.)
                data: {
                    labels: book,  // Các tháng
                    datasets: [{
                        label: 'Doanh thu (Coin)',  // Dòng dữ liệu cho doanh thu
                        data: revenues,  // Dữ liệu doanh thu
                        borderColor: 'rgba(75, 192, 192, 1)',  // Màu viền của cột
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',  // Màu nền của cột
                        fill: true,  // Cho phép điền màu dưới các cột
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,  // Đảm bảo trục Y bắt đầu từ 0
                        }
                    }
                }
            });

            // Hiển thị doanh thu tổng cộng
            $('#totalRevenue').text('Tổng doanh thu: ' + totalRevenue + ' Coin');

            // Hiển thị doanh thu theo từng câu chuyện
            let revenueStoryHtml = '';
            revenueByStory.forEach(function(item) {
                revenueStoryHtml += '<p>Câu chuyện ID ' + item.purchased_story_id + ': ' + item.total_revenue + ' Coin</p>';
            });
            $('#revenueByStory').html(revenueStoryHtml);
        },
        error: function(error) {
            console.log('Lỗi: ', error);
        }
    });
});


    </script>


    <html>
@endsection
