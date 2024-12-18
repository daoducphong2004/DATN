@extends('admin.layouts.default')

@section('title')
    @parent
    Trang quản trị thống kê - Cổng Light Novel - Đọc Light Novel
@endsection
@section('content')
    <div class="container">
        <h2 class="mb-4">Trang Tổng Quan</h2>

        <div class="row">
            <!-- Tổng số truyện -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tổng Số Truyện</h5>
                        <p class="card-text">{{ $totalStories }}</p>
                    </div>
                </div>
            </div>

            <!-- Tổng số tập -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tổng Số Tập</h5>
                        <p class="card-text">{{ $totalEpisodes }}</p>
                    </div>
                </div>
            </div>

            <!-- Tổng số người dùng -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tổng Số Người Dùng</h5>
                        <p class="card-text">{{ $totalUsers }}</p>
                    </div>
                </div>
            </div>

            <!-- Tổng doanh thu -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tổng Tác Giả</h5>
                        <p class="card-text">{{ $countAuthor }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tổng Doanh Thu Tác Giả</h5>
                        <p class="card-text">{{ $totalRevenueAuthor }} 🪙</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tổng Doanh Thu Admin</h5>
                        <p class="card-text">{{ $totalRevenueAdmin }} 🪙</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>

        </div>
        <div class="row mt-4">
            <!-- Biểu đồ thể loại yêu thích -->
            <div class="col-md-6">
                <h4>Thể Loại Yêu Thích</h4>
                <canvas id="topLikeGenreChart"></canvas>
            </div>

            <!-- Biểu đồ thể loại xem nhiều -->
            <div class="col-md-6">
                <h4>Thể Loại Xem Nhiều</h4>
                <canvas id="topViewGenreChart"></canvas>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Biểu đồ trạng thái người dùng nạp tiền -->
            <div class="col-md-4">
                <h4>Trạng Thái Người Dùng Nạp Tiền</h4>
                <canvas id="paymentStatusChart"></canvas>
            </div>

            <!-- Biểu đồ số lượng truyện đã mua -->
            <div class="col-md-8">
                <h4>Số Lượng Chương Được Mua (7 Ngày Gần Nhất)</h4>
                <canvas id="purchasedStoriesLast7DaysChart"></canvas>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-5">
            <h4>Số Lượng Chương Được Mua Theo Thể Loại</h4>
            <canvas id="purchasedStoriesByGenreChart"></canvas>
        </div>
        <div class="col-md-7">
            <h4>Bảng Xếp Hạng Tác Giả</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Coin kiếm được</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topAuthor as $author)
                        <tr>
                            <td>{{ $author->username }}</td>
                            <td>{{ $author->total_revenue }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8">
            <h4>Bảng Xếp Hạng Truyện Được Mua Nhiều Nhất (7 Ngày Gần Nhất)</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Truyện</th>
                        <th>Số Lượng Mua</th>
                        <th>Tổng Coin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topPurchasedBooks as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->count }}</td>
                            <td>{{ $book->totalCoin }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Biểu đồ thể loại yêu thích
        const topLikeGenreChart = new Chart(document.getElementById('topLikeGenreChart'), {
            type: 'bar',
            data: {
                labels: @json($toplikeGenre->pluck('name')),
                datasets: [{
                    label: 'Số Lượt Thích',
                    data: @json($toplikeGenre->pluck('total_likes')),
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
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

        // Biểu đồ thể loại xem nhiều
        const topViewGenreChart = new Chart(document.getElementById('topViewGenreChart'), {
            type: 'bar',
            data: {
                labels: @json($topViewGenre->pluck('name')),
                datasets: [{
                    label: 'Số Lượt Xem',
                    data: @json($topViewGenre->pluck('total_views')),
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
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

        // Biểu đồ trạng thái người dùng nạp tiền
        const paymentStatusChart = new Chart(document.getElementById('paymentStatusChart'), {
            type: 'pie',
            data: {
                labels: ['Đã Nạp Tiền', 'Chưa Nạp Tiền'],
                datasets: [{
                    label: 'Người Dùng',
                    data: [{{ $paymentUserStatusCounts['paid'] }},
                        {{ $paymentUserStatusCounts['unpaid'] }}
                    ],
                    backgroundColor: ['rgba(75, 192, 192, 0.5)', 'rgba(255, 99, 132, 0.5)'],
                    borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                    borderWidth: 1
                }]
            }
        });

        // Biểu đồ số lượng truyện đã mua trong 7 ngày gần nhất
        const purchasedStoriesLast7DaysChart = new Chart(document.getElementById('purchasedStoriesLast7DaysChart'), {
            type: 'line',
            data: {
                labels: @json($purchasedStoriesLast7Days->pluck('date')), // Ngày
                datasets: [{
                    label: 'Số Lượng Chương Được Mua',
                    data: @json($purchasedStoriesLast7Days->pluck('count')), // Số lượng mua
                    borderColor: 'rgba(153, 102, 255, 1)',
                    backgroundColor: 'rgba(153, 102, 255, 0.5)',
                    fill: false,
                    borderWidth: 1
                }]
            }
        });
        // Biểu đồ số lượng người dùng đăng ký trong 7 ngày gần nhất
        const newUsersLast7DaysChart = new Chart(document.getElementById('newUsersLast7DaysChart'), {
            type: 'line',
            data: {
                labels: @json($newUsersLast7Days->pluck('date')), // Ngày
                datasets: [{
                    label: 'Số Lượng Người Dùng Đăng Ký',
                    data: @json($newUsersLast7Days->pluck('count')), // Số lượng đăng ký
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    fill: false,
                    borderWidth: 1
                }]
            }
        });
        const genres = @json($purchasedStoriesByGenre->pluck('genre')).slice(0, 10); // Lấy tối đa 10 thể loại
        const counts = @json($purchasedStoriesByGenre->pluck('count')).slice(0, 10); // Lấy số lượng tương ứng

        // Tính tổng số lượng
        const totalCounts = counts.reduce((sum, count) => sum + count, 0);

        // Chuyển đổi số lượng sang phần trăm
        const percentages = counts.map(count => ((count / totalCounts) * 100).toFixed(
            2)); // Làm tròn đến 2 chữ số thập phân

        // Tạo mảng màu sắc tối đa cho 10 thể loại
        const backgroundColors = [
            'rgba(255, 99, 132, 0.5)', // Đỏ
            'rgba(54, 162, 235, 0.5)', // Xanh
            'rgba(255, 206, 86, 0.5)', // Vàng
            'rgba(75, 192, 192, 0.5)', // Xanh ngọc
            'rgba(153, 102, 255, 0.5)', // Tím
            'rgba(255, 159, 64, 0.5)', // Cam
            'rgba(201, 203, 207, 0.5)', // Xám
            'rgba(0, 255, 0, 0.5)', // Xanh lá
            'rgba(128, 0, 128, 0.5)', // Tím đậm
            'rgba(255, 0, 255, 0.5)' // Hồng
        ];

        // Tạo mảng viền màu tương ứng
        const borderColors = backgroundColors.map(color => color.replace('0.5', '1'));

        const purchasedStoriesByGenreChart = new Chart(document.getElementById('purchasedStoriesByGenreChart'), {
            type: 'pie',
            data: {
                datasets: [{
                    label: 'Tỷ lệ % Chương Được Mua',
                    data: percentages, // Sử dụng tỷ lệ phần trăm làm dữ liệu
                    backgroundColor: backgroundColors.slice(0, genres.length), // Áp dụng màu nền tương ứng
                    borderColor: borderColors.slice(0, genres.length), // Áp dụng viền màu tương ứng
                    borderWidth: 1
                }],
                labels: genres.map((genre, index) => `${genre} (${percentages[index]}%)`) // Thể loại và phần trăm

            }
        });
        // Data từ server (tạo danh sách ngày và doanh thu tương ứng)
        const labels = @json($revenueAuthor->pluck('date')); // Ngày giao dịch
        const authorRevenue = @json($revenueAuthor->pluck('total_revenue')); // Doanh thu của tác giả
        const adminRevenue = @json($revenueAdmin->pluck('total_revenue')); // Doanh thu của admin

        // Khởi tạo biểu đồ
        const ctx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(ctx, {
            type: 'line', // Biểu đồ cột
            data: {
                labels: labels,
                datasets: [{
                        label: 'Doanh Thu Tác Giả',
                        data: authorRevenue,
                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Doanh Thu Admin',
                        data: adminRevenue,
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom' // Hiển thị chú thích dưới biểu đồ
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const value = context.raw || 0;
                                return `${context.dataset.label}: ${value.toLocaleString()} 🪙`;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Ngày'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Doanh Thu (🪙)'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
