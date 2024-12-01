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
            
                    <canvas id="revenueChart"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


                </div>
            </div>

        </div>
    </div>
    <script>
          $(document).ready(function() {
        const userId = {{Auth::id()}};  // Thay thế bằng ID của tác giả
        const year = 2024;  // Thay thế bằng năm bạn muốn thống kê

        // Gửi yêu cầu Ajax để lấy dữ liệu thống kê
        $.ajax({
            url: '/author/revenue-details/' + userId + '/' + year,  // URL đến route đã tạo
            method: 'GET',
            success: function(response) {
                // Lấy dữ liệu thống kê từ phản hồi
                const totalRevenue = response.total_revenue;
                const revenueByStory = response.revenue_by_story;
                const revenueByMonth = response.revenue_by_month;
                console.log(response)
                // console.log(response.total_revenue,response.revenue_by_story,)
                // Chuẩn bị dữ liệu cho biểu đồ doanh thu theo tháng
                const months = [];
                const revenues = [];
                revenueByMonth.forEach(function(item) {
                    months.push(item.month);
                    revenues.push(item.total_revenue);
                });

                // Vẽ biểu đồ doanh thu theo tháng
                const ctx = document.getElementById('revenueChart').getContext('2d');
                const chart = new Chart(ctx, {
                    type: 'bar',  // Loại biểu đồ (line, bar, etc.)
                    data: {
                        labels: months,  // Các tháng
                        datasets: [{
                            label: 'Doanh thu (Coin)',  // Dòng dữ liệu cho doanh thu
                            data: revenues,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            fill: false,
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Hiển thị doanh thu tổng cộng
                console.log('Tổng doanh thu: ', totalRevenue);

                // Hiển thị doanh thu theo từng câu chuyện
                revenueByStory.forEach(function(item) {
                    console.log('Doanh thu từ câu chuyện ' + item.purchased_story_id + ': ', item.total_revenue);
                });
            },
            error: function(error) {
                console.log('Lỗi: ', error);
            }
        });
    });
    </script>


    <html>
@endsection
