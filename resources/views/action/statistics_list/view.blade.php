@extends('user.layout.master')
@section('content')
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.getElementById('fetchData').addEventListener('click', () => {
        const startDate = document.getElementById('startDate').value;
        const endDate = document.getElementById('endDate').value;

        fetchRevenueData(startDate, endDate);
    });
</script>
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
</script>
@endsection