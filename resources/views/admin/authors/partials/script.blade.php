<style>
    /* Tạo kiểu dáng cho bảng */
    #chapterRevenueTable,
    #topSpendersTable {
        width: 100%;
        max-height: 400px;
        overflow-y: auto;
        display: block;
    }

    #chapterRevenueTable::-webkit-scrollbar,
    #topSpendersTable::-webkit-scrollbar {
        width: 8px;
    }

    #chapterRevenueTable::-webkit-scrollbar-thumb,
    #topSpendersTable::-webkit-scrollbar-thumb {
        background-color: #888;
        border-radius: 4px;
    }

    #chapterRevenueTable::-webkit-scrollbar-thumb:hover,
    #topSpendersTable::-webkit-scrollbar-thumb:hover {
        background-color: #555;
    }

    /* Tiêu đề h2 và h3 đồng nhất */
    h2,
    h3 {
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        color: #007bff;
        text-align: center;
        margin-bottom: 15px;
    }

    /* Các phần tử trong bảng */
    table th,
    table td {
        text-align: center;
        vertical-align: middle;
    }

    /* Chỉnh sửa margin giữa các bảng */
    .col-md-6.mb-4 {
        margin-bottom: 30px;
    }

    /* Cải tiến nút phân trang */
    .pagination-btn {
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
        padding: 10px 15px;
        font-size: 14px;
        cursor: pointer;
        border-radius: 5px;
        margin: 0 5px;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .pagination-btn:hover:not(.disabled) {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .pagination-btn.disabled {
        background-color: #cccccc;
        border-color: #cccccc;
        cursor: not-allowed;
    }

    .pagination-info {
        font-size: 14px;
        color: #333;
        padding: 10px 15px;
    }

    #pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.getElementById('exportButton').addEventListener('click', function() {
        var wb = XLSX.utils.table_to_book(document.getElementById('chapterRevenueTable'), {
            sheet: 'Chapter Revenue'
        });
        XLSX.writeFile(wb, 'chapter_revenue.xlsx');
    });
    const user_id = {{ Auth::id() }};
    const book_id = {{ $book->id }};
    let startDate = '';
    let endDate = '';
    // Xử lý khi người dùng bấm vào các bộ lọc
    // Xử lý khi người dùng bấm vào các bộ lọc
    document.getElementById('filterWeek').addEventListener('click', () => {
        const now = new Date();
        const startOfWeek = new Date(now.setDate(now.getDate() - now.getDay() + 1)).toISOString().split('T')[0];
        const endOfWeek = new Date(now.setDate(now.getDate() + 6 - now.getDay())).toISOString().split('T')[0];
        startDate = startOfWeek;
        endDate = endOfWeek;
        fetchRevenueData({{ $user->id }}, 'admin', startOfWeek, endOfWeek, book_id, 'line');

        fetchChapterRevenueData({{ $user->id }}, 'admin', startOfWeek, endOfWeek, book_id);
    });

    document.getElementById('filterMonth').addEventListener('click', () => {
        const now = new Date();
        const startOfMonth = new Date(now.getFullYear(), now.getMonth(), 1).toISOString().split('T')[0];
        const endOfMonth = new Date(now.getFullYear(), now.getMonth() + 1, 0).toISOString().split('T')[0];
        startDate = startOfMonth;
        endDate = endOfMonth;
        fetchRevenueData({{ $user->id }}, 'admin', startOfMonth, endOfMonth, book_id, 'line');
        fetchChapterRevenueData({{ $user->id }}, 'admin', startOfMonth, endOfMonth, book_id);
    });

    document.getElementById('filterYear').addEventListener('click', () => {
        const now = new Date();
        const startOfYear = new Date(now.getFullYear(), 0, 1).toISOString().split('T')[0];
        const endOfYear = new Date(now.getFullYear(), 11, 31).toISOString().split('T')[0];
        startDate = startOfYear;
        endDate = endOfYear;
        fetchRevenueData({{ $user->id }}, 'admin', startOfYear, endOfYear, book_id, 'bar');
        fetchChapterRevenueData({{ $user->id }}, 'admin', startOfYear, endOfYear, book_id);
    });

    document.getElementById('fetchData').addEventListener('click', () => {
        startDate = document.getElementById('startDate').value;
        endDate = document.getElementById('endDate').value;
        fetchRevenueData({{ $user->id }}, 'admin', startDate, endDate, book_id, 'line');
        fetchChapterRevenueData({{ $user->id }}, 'admin', startDate, endDate, book_id);
    });

    const fetchRevenueData = async (user_id, type, startDate, endDate, book_id, chartType) => {
        try {
            const response = await fetch(
                `/action/api/revenue-by-story?user_id=${user_id}&type=${type}&start_date=${startDate}&end_date=${endDate}&story_id=${book_id}`
            );

            if (!response.ok) throw new Error('Failed to fetch data');
            const data = await response.json();
            let labels, datasets;
            if (chartType === 'bar') {
                // Lấy các tháng duy nhất từ dữ liệu
                labels = [...new Set(data.map(item => item.date.slice(0, 7)))]; // Format YYYY-MM

                // Lấy danh sách các truyện (title)
                const books = [...new Set(data.map(item => item.book_title))];

                // Xây dựng datasets
                datasets = books.map(book => {
                    // Lọc dữ liệu của từng truyện
                    const bookData = data.filter(item => item.book_title === book);

                    return {
                        label: book,
                        data: labels.map(label => {
                            // Nhóm dữ liệu theo tháng
                            const monthData = bookData.filter(d => d.date.startsWith(label));

                            // Tính tổng doanh thu trong tháng
                            const monthTotal = monthData.reduce((sum, d) => {
                                return sum + parseFloat(d.total_revenue ||
                                    0); // Chuyển sang số
                            }, 0);
                            console.log(`Tháng ${label} - ${book}:`, monthTotal);

                            return monthTotal;
                        }),
                        backgroundColor: `#${Math.floor(Math.random() * 16777215).toString(16)}`, // Màu ngẫu nhiên
                    };
                });
            } else {
                labels = [...new Set(data.map(item => item.date))];
                const books = [...new Set(data.map(item => item.book_title))];

                datasets = books.map(book => {
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
            }

            renderChart(labels, datasets, chartType);
        } catch (error) {
            console.error('Error fetching revenue data:', error);
        }
    };

    let chartInstance = null;

    const renderChart = (labels, datasets, chartType) => {
        const ctx = document.getElementById('revenueChart').getContext('2d');

        if (chartInstance) {
            chartInstance.destroy();
        }

        chartInstance = new Chart(ctx, {
            type: chartType,
            data: {
                labels: labels,
                datasets: datasets,
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: chartType === 'bar' ? 'Months' : 'Dates',
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
    const fetchChapterRevenueData = async (user_id, type, startDate, endDate, book_id, page = 1, limit = 10) => {
        try {
            const response = await fetch(
                `/action/api/revenue-by-chapter?user_id=${user_id}&type=${type}&start_date=${startDate}&end_date=${endDate}&story_id=${book_id}&page=${page}&limit=${limit}`
            );
            if (!response.ok) throw new Error('Failed to fetch chapter revenue data');
            const data = await response.json();

            // Lấy các tiêu đề chương và chapter_id từ dữ liệu
            let labels = [...new Set(data.data.map(item => item.chapter_title))];
            let chapterIds = [...new Set(data.data.map(item => item.chapter_id))];

            // Tính tổng doanh thu cho mỗi chương
            let datasets = [{
                label: 'Doanh thu theo Chapter',
                data: labels.map(label => {
                    const chapterData = data.data.filter(item => item.chapter_title === label);
                    const totalRevenue = chapterData.reduce((sum, item) => sum + parseFloat(item
                        .total_revenue || 0), 0);
                    return totalRevenue;
                }),
            }];

            // Tính tổng số người mua cho mỗi chương
            let totalBuyers = labels.map(label => {
                const chapterData = data.data.filter(item => item.chapter_title === label);
                return chapterData.reduce((sum, item) => sum + parseInt(item.total_buyers || 0), 0);
            });

            // Gọi hàm render bảng
            renderChapterRevenueChart(labels, datasets, totalBuyers, chapterIds, startDate, endDate, data
                .current_page, data.last_page);
        } catch (error) {
            console.error('Error fetching chapter revenue data:', error);
        }
    };



    const renderChapterRevenueChart = (labels, datasets, totalBuyers, chapterIds, startDate, endDate, currentPage,
        lastPage) => {
        const tableBody = document.getElementById('chapterRevenueTable').getElementsByTagName('tbody')[0];
        tableBody.innerHTML = ''; // Xóa bảng cũ

        labels.forEach((label, index) => {
            const row = tableBody.insertRow();

            const chapterCell = row.insertCell(0);
            chapterCell.textContent = label;

            const totalRevenue = datasets[0].data[index];
            const revenueCell = row.insertCell(1);
            revenueCell.textContent = totalRevenue.toFixed(2);

            const buyersCell = row.insertCell(2);
            buyersCell.textContent = totalBuyers[index];

            // Thêm nút "Xem chi tiết"
            const actionCell = row.insertCell(3);
            const detailsButton = document.createElement('button');
            detailsButton.textContent = 'Xem chi tiết';
            detailsButton.className = 'btn btn-primary btn-sm';

            // Truyền `chapter_id` thay vì `chapter_title`
            const chapterId = chapterIds[index];
            detailsButton.onclick = () => {
                fetchUserDetailsByChapter(chapterId, startDate, endDate);
            };
            actionCell.appendChild(detailsButton);
        });

        // Hiển thị phân trang
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = `
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item ${currentPage <= 1 ? 'disabled' : ''}">
                <button class="page-link" onclick="loadPage(${currentPage - 1})">Previous</button>
            </li>
            <li class="page-item">
                <span class="page-link">Page ${currentPage} of ${lastPage}</span>
            </li>
            <li class="page-item ${currentPage >= lastPage ? 'disabled' : ''}">
                <button class="page-link" onclick="loadPage(${currentPage + 1})">Next</button>
            </li>
        </ul>
    </nav>
`;

    };

    const loadPage = (page) => {
        // const startDate = document.getElementById('startDate').value;
        // const endDate = document.getElementById('endDate').value;

        // Gọi lại API với trang mới và tham số ngày tháng
        fetchChapterRevenueData({{ $user->id }}, 'admin', startDate, endDate, book_id, page);
    };


    const fetchUserDetailsByChapter = async (chapterId, startDate, endDate) => {
        try {
            const response = await fetch(
                `/action/api/get-user-buy-chapter?chapter_id=${chapterId}&start_date=${startDate}&end_date=${endDate}`
            );
            if (!response.ok) throw new Error('Failed to fetch user details');
            const users = await response.json();

            // Hiển thị modal với thông tin người dùng
            renderUserDetailsModal(users);
        } catch (error) {
            console.error('Error fetching user details:', error);
        }
    };

    const renderUserDetailsModal = (users) => {
        const modalBody = document.getElementById('userDetailsModalBody');
        modalBody.innerHTML = ''; // Xóa nội dung cũ
        console.log(users)
        if (users.length === 0) {
            modalBody.innerHTML = '<p>Không có người dùng nào đã mua chương này.</p>';
        } else {
            const table = document.createElement('table');
            table.className = 'table table-bordered';
            table.innerHTML = `
            <thead>
                <tr>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Ngày mua</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                ${users.map(user => `
                    <tr>
                        <td>${user.user}</td>
                        <td>${user.email}</td>
                        <td>${user.purchase_date}</td>
                        <td>${user.price}</td>
                    </tr>
                `).join('')}
            </tbody>
        `;
            modalBody.appendChild(table);
        }

        // Hiển thị modal
        const userDetailsModal = new bootstrap.Modal(document.getElementById('userDetailsModal'));
        userDetailsModal.show();
    };



    // Mặc định hiển thị dữ liệu tuần này khi tải trang
    document.getElementById('filterWeek').click();
</script>
<script>
    $(document).ready(function() {
        // Fetch top spenders
        $.ajax({
            url: "{{ route('action.tp', [$book->id, $user->id]) }}",
            method: 'GET',
            success: function(data) {
                console.log(data)
                let rows = '';
                data.forEach((user, index) => {
                    rows += `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${user.username}</td>
                            <td>${user.total_spent}</td>
                            <td>${user.chapters_purchased}</td>
                            <td>
                                <button class="btn btn-info btn-sm view-details" data-user-id="${user.user_id}">Details</button>
                            </td>
                        </tr>
                    `;
                });
                $('#topSpendersTable tbody').html(rows);
            }
        });

        // Show chapter details
        $(document).on('click', '.view-details', function() {
            const userId = $(this).data('user-id');
            $.ajax({
                url: `/action/api/top-spenders/{{ $book->id }}/details/${userId}`,
                method: 'GET',
                success: function(data) {
                    console.log(data)
                    let chapters = '';
                    data.forEach(chapter => {
                        chapters += `<li>${chapter.title}</li>`;
                    });
                    $('#chapterList').html(chapters);
                    $('#chapterDetailsModal').modal('show');
                }
            });
        });
    });
</script>
