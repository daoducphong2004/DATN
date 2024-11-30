@extends('user.layout.master')
@section('content')
    <div class="container" style="margin-top: 60px">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>
                    <!-- Biểu đồ sẽ được hiển thị tại đây -->
                    <canvas id="revenueChart"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            const userId = 1; // Thay thế bằng ID của tác giả
            const year = 2024; // Thay thế bằng năm bạn muốn thống kê

            // Gửi yêu cầu Ajax để lấy dữ liệu thống kê
            $.ajax({
                url: '/author/revenue-details/' + userId + '/' + year, // URL đến route đã tạo
                method: 'GET',
                success: function(response) {
                    // Lấy dữ liệu thống kê từ phản hồi
                    const revenueDetails = response.revenue_details;

                    // Chuẩn bị dữ liệu cho biểu đồ
                    const months = [];
                    const revenues = [];
                    const transactionCounts = [];

                    revenueDetails.forEach(function(item) {
                        months.push(item.month);
                        revenues.push(item.total_revenue);
                        transactionCounts.push(item.transaction_count);
                    });

                    // Vẽ biểu đồ
                    const ctx = document.getElementById('revenueChart').getContext('2d');
                    const chart = new Chart(ctx, {
                        type: 'line', // Loại biểu đồ (line, bar, etc.)
                        data: {
                            labels: months, // Các tháng
                            datasets: [{
                                    label: 'Doanh thu (VNĐ)', // Dòng dữ liệu cho doanh thu
                                    data: revenues,
                                    borderColor: 'rgba(75, 192, 192, 1)',
                                    fill: false,
                                },
                                {
                                    label: 'Số giao dịch', // Dòng dữ liệu cho số giao dịch
                                    data: transactionCounts,
                                    borderColor: 'rgba(153, 102, 255, 1)',
                                    fill: false,
                                }
                            ]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
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
