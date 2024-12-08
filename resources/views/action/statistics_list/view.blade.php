@extends('user.layout.master')
@section('content')
    <!-- Biểu đồ doanh thu -->
    <div class="container">
        <div class="row">
            <!-- Biểu đồ chiếm 10 cột -->
            <div class="col-md-9">
                <h3 class="text-center text-primary fw-bold mb-4">Biểu Đồ Doanh Thu</h3>
                <div class="chart-container mb-12" style="position: relative; height: 60vh; width: 100%;">
                    <canvas id="revenueChart"></canvas>
                </div>
                <div id="totalRevenue" class="text-center mt-3 fw-bold text-success"></div>
            </div>
            <!-- Bảng chiếm 2 cột -->
            <div class="col-md-3">
                <h3 class="text-center text-primary fw-bold mb-4">Bảng doanh thu chapter</h3>
                <table id="chapterRevenueTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Tên chapter</th>
                            <th>Doanh thu</th>
                            <th>Số lượng mua</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows will be added dynamically here -->
                    </tbody>
                </table>
                <!-- Nút xuất Excel -->
                <button class="btn btn-success" id="exportButton">Xuất Excel</button>
                <!-- Modal hiển thị chi tiết người dùng -->
                <div class="modal fade" id="userDetailsModal" tabindex="-1" aria-labelledby="userDetailsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="userDetailsModalLabel">Chi tiết người dùng đã mua</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="userDetailsModalBody">
                                <!-- Nội dung chi tiết người dùng sẽ hiển thị tại đây -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bộ lọc thời gian -->
        <div class="date-picker-container d-flex justify-content-center align-items-center mt-4">
            <button class="btn btn-outline-primary me-2 fw-bold" id="filterWeek">Tuần này</button>
            <button class="btn btn-outline-primary me-2 fw-bold" id="filterMonth">Tháng này</button>
            <button class="btn btn-outline-primary me-2 fw-bold" id="filterYear">Năm nay</button>
        </div>

        <div class="date-picker-container d-flex justify-content-center align-items-center mt-4">
            <label for="startDate" class="me-2 fw-bold">Từ ngày:</label>
            <input type="date" id="startDate" class="form-control me-3" style="width: 200px;">
            <label for="endDate" class="me-2 fw-bold">Đến ngày:</label>
            <input type="date" id="endDate" class="form-control me-3" style="width: 200px;">
            <button id="fetchData" class="btn btn-primary fw-bold">Tìm kiếm</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @include('action.statistics_list.partials.script')
@endsection
