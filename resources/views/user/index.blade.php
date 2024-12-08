@extends('user.layout.master')
@section('content')
    <div class="container my-5">
        <div style="" class="row justify-content-center">
            <div class="col-md-12">
                @if (Auth::user()->books()->where('Is_Inspect', 1)->exists())
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white text-center">
                            <h2 class="mb-0">Thông tin ví</h2>
                        </div>
                        <div class="card-body">
                            <!-- Hiển thị thông tin ví -->
                            <div class="mb-4 p-3 bg-light rounded shadow-sm">
                                <h5 class="card-title mb-3">Số dư coin:
                                    <span class="text-success fw-bold">
                                        {{ number_format($wallet->balance, 2) }} {{ $wallet->currency }}
                                    </span>
                                </h5>
                                <div id='three-btn' class="d-flex justify-content-between">
                                    <a href="{{ route('user.transactions', ['wallet_id' => $wallet->id]) }}"
                                        class="btn btn-outline-primary">
                                        Xem giao dịch
                                    </a>
                                    <a href="{{ route('action.withdraw.create') }}" class="btn btn-outline-warning">
                                        Yêu cầu rút tiền
                                    </a>
                                    <a href="{{ route('action.withdraw.showU') }}" class="btn btn-outline-secondary">
                                        Lịch sử yêu cầu
                                    </a>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <!-- Top Books By View -->
                                <div class="col-md-6">
                                    <div id="topBooksByView">
                                        <h3 class="text-center">Top 3 truyện có lượt xem cao nhất</h3>
                                        <ul class="list-group list-group-flush mt-3">
                                            @foreach ($topBooksByView as $item)
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span><strong>{{ $item->title }}</strong></span>
                                                    <span class="badge bg-primary rounded-pill">{{ $item->view }} lượt
                                                        xem</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Top Books By Like -->
                                <div class="col-md-6">
                                    <div>
                                        <h3 class="text-center">Top 3 truyện có lượt like cao nhất</h3>
                                        <ul class="list-group list-group-flush mt-3">
                                            @foreach ($topBooksByLike as $item)
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span><strong>{{ $item->title }}</strong></span>
                                                    <span class="badge bg-primary rounded-pill">{{ $item->like }} lượt
                                                        thích</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Biểu đồ doanh thu -->
                            <div class="md-6">
                                <h3 class="text-center text-primary fw-bold mb-4">Biểu đồ Doanh Thu</h3>
                                <div class="chart-container mb-8" style="position: relative; height: 60vh; width: 100%;">
                                    <canvas id="revenueChart1"></canvas>
                                </div>
                                <div id="totalRevenue" class="text-center mt-3 fw-bold text-success"></div>
                            
                                <div class="date-picker-container d-flex justify-content-center align-items-center mt-4">
                                    <label for="startDate" class="me-2 fw-bold">Từ ngày:</label>
                                    <input type="date" id="startDate" class="form-control me-3" style="width: 200px;">
                                    <label for="endDate" class="me-2 fw-bold">Đến ngày:</label>
                                    <input type="date" id="endDate" class="form-control me-3" style="width: 200px;">
                                    <button id="fetchData" class="btn btn-primary fw-bold">Tìm kiếm</button>
                                </div>

                            </div>
                        </div>
                    </div>
                @else
                    <div class="panel panel-default">
                        <div class="panel-heading">Home</div>

                        <div class="panel-body">
                            <h4>Thống kê</h4>
                            <p>Số truyện:{{ $book }}</p>
                            <p>Số tập: {{ $episode }}</p>
                            <p>Số chương: {{ $chapter }}</p>
                        </div>
                    </div>
                @endif
            </div>


            <script>
                document.getElementById('fetchData').addEventListener('click', () => {
                    const startDate = document.getElementById('startDate').value;
                    const endDate = document.getElementById('endDate').value;

                    fetchRevenueData(startDate, endDate);
                });
            </script>

        </div>
    </div>
    <!-- Link to Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    @if ($ajax)
        <script>
            const fetchRevenueData = async (startDate, endDate) => {
                try {
                    const response = await fetch(`action/api/revenue-by-date?start_date=${startDate}&end_date=${endDate}`);
                    const data = await response.json();

                    const labels = [...new Set(data.map(item => item.date))];
                    const books = [...new Set(data.map(item => item.book_title))];

                    const datasets = books.map(book => {
                        const bookData = data.filter(item => item.book_title === book);
                        return {
                            label: book,
                            data: labels.map(label => {
                                const item = bookData.find(d => d.date === label);
                                return item ? item.total_revenue : 0;
                            }),
                            borderColor: `#${Math.floor(Math.random() * 16777215).toString(16)}`,
                            fill: false,
                        };
                    });

                    renderChart(labels, datasets);
                } catch (error) {
                    console.error('Error fetching revenue data:', error);
                }
            };


            let chartInstance = null; // Biến lưu trữ instance của biểu đồ

            const renderChart = (labels, datasets) => {
                const ctx = document.getElementById('revenueChart1').getContext('2d');

                // Hủy biểu đồ cũ nếu tồn tại
                if (chartInstance) {
                    chartInstance.destroy();
                }

                // Tạo biểu đồ mới
                chartInstance = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: datasets,
                    },
                    options: {
                        responsive: true,
                        scales: {
                            x: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Dates',
                                },
                            },
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Total Revenue',
                                },
                            },
                        },
                    },
                });
            };


            // Gọi hàm fetchRevenueData với ngày bắt đầu và kết thúc
            fetchRevenueData('2024-12-01', '2024-12-07');

            // // Lấy dữ liệu từ Laravel
            // const revenueData1 = @json($totalrevenuebydayandbook);

            // // Xử lý dữ liệu cho biểu đồ
            // const groupedData = {};
            // revenueData1.forEach(item => {
            //     const {
            //         date,
            //         book_title,
            //         total_revenue
            //     } = item;
            //     if (!groupedData[date]) {
            //         groupedData[date] = {};
            //     }
            //     groupedData[date][book_title] = total_revenue;
            // });
            // // console.log(revenueData1)
            // const labels1 = Object.keys(groupedData); // Các ngày
            // const books = [...new Set(revenueData1.map(item => item.book_title))]; // Các truyện
            // // console.log(labels1)
            // const datasets = books.map(bookTitle => {
            //     return {
            //         label: bookTitle,
            //         data: labels1.map(date => groupedData[date][bookTitle] || 0),
            //         backgroundColor: `rgba(${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, 0.6)`,
            //         borderColor: `rgba(${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, 1)`,
            //         borderWidth: 1,
            //     };
            // });

            // // Tạo biểu đồ
            // const ctx1 = document.getElementById('revenueChart1').getContext('2d');
            // new Chart(ctx1, {
            //     type: 'line', // Dạng biểu đồ cột
            //     data: {
            //         labels: labels1, // Các ngày
            //         datasets: datasets, // Doanh thu từng truyện
            //     },
            //     options: {
            //         responsive: true,
            //         scales: {
            //             x: {
            //                 beginAtZero: true,
            //                 title: {
            //                     display: true,
            //                     text: 'Dates',
            //                 },
            //             },
            //             y: {
            //                 beginAtZero: true,
            //                 title: {
            //                     display: true,
            //                     text: 'Total Revenue',
            //                 },
            //             },
            //         },
            //     },
            // });
            // Lấy dữ liệu từ controller
            const transactions = @json($transactions); // Biến $data từ controller

            // Xử lý dữ liệu
            const labels = transactions.map(transaction => transaction.date);
            const revenueData = transactions.map(transaction => parseFloat(transaction.total_revenue));

            // Vẽ biểu đồ
            const ctx = document.getElementById('revenueChart').getContext('2d');
            const revenueChart = new Chart(ctx, {
                type: 'line', // Loại biểu đồ là đường
                data: {
                    labels: labels, // Dữ liệu ngày
                    datasets: [{
                        label: 'Doanh thu theo ngày (🪙)', // Tiêu đề biểu đồ
                        data: revenueData, // Dữ liệu doanh thu
                        borderColor: 'rgba(75, 192, 192, 1)', // Màu đường biểu đồ
                        fill: false,
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            $(document).ready(function() {
                const userId = {{ Auth::id() }}; // ID của tác giả
                const year = 2024; // Năm muốn thống kê

                // Gửi yêu cầu Ajax để lấy dữ liệu thống kê
                $.ajax({
                    url: '/author/revenue-details/' + userId + '/' + year, // URL đến route đã tạo
                    method: 'GET',
                    success: function(response) {
                        // Lấy dữ liệu thống kê từ phản hồi
                        const totalRevenue = response.total_revenue;
                        const revenueByStory = response.revenue_by_story;
                        const topBooksByView = response.top_books_by_view;

                        // In dữ liệu ra console để kiểm tra
                        console.log(response);

                        // Chuẩn bị dữ liệu cho biểu đồ doanh thu theo câu chuyện
                        const bookIds = [];
                        const revenues = [];

                        revenueByStory.forEach(function(item) {
                            bookIds.push(item.title); // Tiêu đề câu chuyện
                            revenues.push(item.total_revenue); // Doanh thu
                        });
                        // Hiển thị doanh thu tổng cộng
                        $('#totalRevenue').text('Tổng doanh thu: ' + totalRevenue + ' Coin');

                        // Hiển thị doanh thu theo từng câu chuyện
                        let revenueStoryHtml = '';
                        revenueByStory.forEach(function(item) {
                            revenueStoryHtml += '<p>' + item.title + ': ' + item.total_revenue +
                                ' Coin</p>';
                        });
                        $('#revenueByStory').html(revenueStoryHtml);
                    },
                    error: function(error) {
                        console.log('Lỗi: ', error);
                    }
                });
            });
        </script>
    @endif


@endsection
