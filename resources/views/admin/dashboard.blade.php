@extends('admin.layouts.default')

@section('title')
    @parent
    Trang quản trị
@endsection

@push('styles')
@endpush

@section('content')
    <div class="row">

        <div> <canvas id="myChart"></canvas></div><br>

        <div class="card">
            <div class="card-header bg-primary text-white panel-heading">
                Thống kê theo Ngày, Tháng, và Năm
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Loại thống kê</th>
                            <th>Ngày hiện tại</th>
                            <th>Tháng hiện tại</th>
                            <th>Năm hiện tại</th>
                            <th>Tổng cộng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tổng truyện</td>
                            <td>{{ $dailyStories }}</td>
                            <td>{{ $monthlyStories }}</td>
                            <td>{{ $yearlyStories }}</td>
                            <td>{{ $totalStories }}</td>
                        </tr>
                        <tr>
                            <td>Tổng tập truyện</td>
                            <td>{{ $dailyEpisodes }}</td>
                            <td>{{ $monthlyEpisodes }}</td>
                            <td>{{ $yearlyEpisodes }}</td>
                            <td>{{ $totalEpisodes }}</td>
                        </tr>
                        <tr>
                            <td>Tổng chương</td>
                            <td>{{ $dailyChapters }}</td>
                            <td>{{ $monthlyChapters }}</td>
                            <td>{{ $yearlyChapters }}</td>
                            <td>{{ $totalChapters }}</td>
                        </tr>
                        <tr>
                            <td>Tổng người dùng</td>
                            <td>{{ $dailyUsers }}</td>
                            <td>{{ $monthlyUsers }}</td>
                            <td>{{ $yearlyUsers }}</td>
                            <td>{{ $totalUsers }}</td>
                        </tr>
                        <tr>
                            <td>Số truyện đã mua</td>
                            <td>{{ $dailyStories }}</td>
                            <td>{{ $purchasedStories }}</td>
                            <td>{{ $yearlyStories }}</td>
                            <td>{{ $purchasedStories }}</td>
                        </tr>
                        <tr>
                            <td>Tổng yêu thích cho Truyện</td>
                            <td>{{ $dailyLike }}</td>
                            <td>{{ $monthlyLike }}</td>
                            <td>{{ $yearlyLike }}</td>
                            <td>{{ $like_books }}</td>
                        </tr>
                        <tr>
                            <td>Tổng yêu thích cho Truyện</td>
                            <td>{{ $dailyLike }}</td>
                            <td>{{ $monthlyLike }}</td>
                            <td>{{ $yearlyLike }}</td>
                            <td>{{ $like_books }}</td>
                        </tr>
                        <tr>
                            <td>Tổng số Comment Truyện</td>
                            <td>{{ $dailyBookComment }}</td>
                            <td>{{ $purchasedBookComment }}</td>
                            <td>{{ $yearlyBookComment }}</td>
                            <td>{{ $bookComment }}</td>
                        </tr>
                        <tr>
                            <td>Tổng doanh thu tác giả</td>
                            <td>{{ $dailyRevenue }}</td>
                            <td>{{ $monthlyRevenue }}</td>
                            <td>{{ $yearlyRevenue }}</td>
                            <td>{{ $totalRevenue }}</td>
                        </tr>
                        <tr>
                            <td>Tổng Lượt xem tuyện</td>
                            <td colspan="3">-</td>
                            <td>{{ $bookView }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        const ctx = document.getElementById('myChart');

        const footer = (tooltipItems) => {
            let sum = 0;
            tooltipItems.forEach(function(tooltipItem) {
                sum += tooltipItem.parsed.y;
            });
            return 'Tổng: ' + sum;
        };


        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Số truyện', 'Tập truyện', 'Chương truyện', 'Người dùng'],
                datasets: [{
                    label: 'Thống kê',
                    data: [
                        {{ $totalStories ?? 0 }},
                        {{ $totalEpisodes ?? 0 }},
                        {{ $totalChapters ?? 0 }},
                        {{ $totalUsers ?? 0 }}
                    ],
                    borderWidth: 5,
                    // borderColor: 'rgba(75, 192, 192, 1)',
                    // backgroundColor: 'rgba(75, 192, 192, 0.2)',

                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)', // Màu cho các điểm
                    pointBorderColor: 'rgba(255, 99, 132, 1)', // Viền màu cho điểm
                    pointHoverRadius: 8, // Kích thước điểm khi di chuột vào
                    pointHoverBackgroundColor: 'rgba(255, 159, 64, 1)', // Màu nền khi di chuột
                    pointHoverBorderColor: 'rgba(255, 159, 64, 1)', // Màu viền khi di chuột
                    pointRadius: 10, // Kích thước các điểm trên biểu đồ
                    pointHoverRadius: 12,
                    pointBorderWidth: 2 // Độ dày của viền điểm
                }],
            },
            options: {
                plugins: {
                    tooltip: {
                        enabled: true,
                        backgroundColor: 'rgba(0, 0, 0, 0.7)',
                        titleColor: '#ffffff',
                        bodyColor: '#ffffff',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        callbacks: {
                            footer: footer // Thêm callback footer vào tooltip
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(200, 200, 200, 0.2)', // Màu của lưới trên trục y
                            lineWidth: 3, // Độ dày của đường lưới trên trục y
                            borderDash: [5, 5] // Kiểu đứt nét của lưới trên trục y
                        }
                    },
                    x: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(200, 200, 200, 0.2)', // Màu của lưới trên trục y
                            lineWidth: 3, // Độ dày của đường lưới trên trục y
                            borderDash: [5, 5] // Kiểu đứt nét của lưới trên trục y
                        }
                    }
                }
            }
        });
    </script>
@endpush
