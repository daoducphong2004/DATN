@extends('admin.layouts.default')
@section('content')
    <!-- Biểu đồ doanh thu -->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Biểu đồ chiếm 12 cột (chiếm toàn bộ chiều rộng) -->
            <div class="col-md-10 text-center">
                <h3 class="text-primary fw-bold mb-4">Biểu Đồ Doanh Thu</h3>
                <div class="chart-container mb-4" style="position: relative; height: 60vh; width: 100%;">
                    <canvas id="revenueChart"></canvas>
                </div>
                <div id="totalRevenue" class="text-center mt-3 fw-bold text-success"></div>
            </div>
        </div>
        <div class="row">
            <!-- Bảng chiếm toàn bộ chiều rộng -->
            <div class="col-md-6">
                <h2>Bảng doanh thu chapter</h2>
                <table id="chapterRevenueTable" class="table table-bordered w-100">
                    <thead>
                        <tr>
                            <th>Tên chapter</th>
                            <th>Doanh thu</th>
                            <th>Số lượng mua</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows dynamically loaded via DataTables -->
                    </tbody>
                </table>
                <div id="pagination" class="text-center mt-3">
                    <!-- Các nút phân trang sẽ được hiển thị ở đây -->
                </div>

                <button class="btn btn-success mt-3" id="exportButton">Xuất Excel</button>

                <!-- Modal -->
                <div class="modal fade" id="userDetailsModal" tabindex="-1" aria-labelledby="userDetailsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="userDetailsModalLabel">Chi tiết người dùng đã mua</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="userDetailsModalBody"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Top Spenders</h2>
                <table class="table table-bordered" id="topSpendersTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Total Spent</th>
                            <th>Chapters Purchased</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <!-- Modal for Chapter Details -->
                <div class="modal fade" id="chapterDetailsModal" tabindex="-1" aria-labelledby="chapterDetailsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="chapterDetailsModalLabel">Purchased Chapters</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul id="chapterList"></ul>
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
    <div class="row" style="margin: 10px"></div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @include('admin.authors.partials.script')
@endsection
